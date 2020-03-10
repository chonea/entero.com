<?php header('Content-Type: text/xml'); ?>
<?php print '<?xml version="1.0" encoding="ISO-8859-1"?>'; ?>
<elutaxml xmlns="http://www.eluta.ca/elutaxml" version="1.0">
<employer>
<name>Entero Corporation</name>
<?php
/*
 *	Eluta job handler.
 */
$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));

$job_query = "SELECT * FROM enteronode WHERE type = 'job' AND status = '1' ORDER BY created DESC";
  
$result = db_query($job_query);
  
if (isset($result)) {

	foreach ($result as $obj) {

		$query = new EntityFieldQuery();
		$entities = $query->entityCondition('entity_type', 'node')
			->propertyCondition('nid', $obj->nid)
			->range(0,1)
			->execute();
		if (!empty($entities['node'])) {
			$node = node_load(array_shift(array_keys($entities['node'])));
			echo '<job>';
			echo '<title>'.$node->title.'</title>';
			if (isset($node->field_job_reference_number['und'][0]['value'])) {
				echo '<jobref>';
				echo htmlspecialchars($node->field_job_reference_number['und'][0]['value']);
				echo '</jobref>';
			}
			echo '<joburl>http://www.entero.com/'.drupal_get_path_alias("node/".$node->nid).'</joburl>';
			/*
			if (isset($node->body['und'][0])) {
				echo '<description><![CDATA[';
				echo $node->body['und'][0]['value'];
				echo ']]></description>';
			}
			*/
			if (isset($node->field_job_summary['und'][0]['value'])) {
				echo '<description><![CDATA[';
				echo htmlspecialchars($node->field_job_summary['und'][0]['value']);
				echo ']]></description>';
			}
			if (isset($node->field_job_category['und'][0]['value'])) {
				echo '<occupationcategory>';
				echo htmlspecialchars($node->field_job_category['und'][0]['value']);
				echo '</occupationcategory>';
			}
			if (isset($node->field_job_division['und'][0]['value'])) {
				echo '<division>';
				echo htmlspecialchars($node->field_job_division['und'][0]['value']);
				echo '</division>';
			}
			if (isset($node->field_job_address['und'][0]['value'])) {
				echo '<jobaddress>';
				echo htmlspecialchars($node->field_job_address['und'][0]['value']);
				echo '</jobaddress>';
			}
			if (isset($node->field_job_city['und'][0]['value'])) {
				echo '<jobcity>';
				echo htmlspecialchars($node->field_job_city['und'][0]['value']);
				echo '</jobcity>';
			}
			if (isset($node->field_job_province['und'][0]['value'])) {
				echo '<jobprovince>';
				echo htmlspecialchars($node->field_job_province['und'][0]['value']);
				echo '</jobprovince>';
			}
			if (isset($node->field_job_postal_code['und'][0]['value'])) {
				echo '<jobpostalcode>';
				echo htmlspecialchars($node->field_job_postal_code['und'][0]['value']);
				echo '</jobpostalcode>';
			}
			if (isset($node->field_job_type['und'][0]['value'])) {
				echo '<jobtype>';
				echo htmlspecialchars($node->field_job_type['und'][0]['value']);
				echo '</jobtype>';
			}
			if (isset($node->field_job_salary_minimum['und'][0]['value'])) {
				echo '<salarymin>';
				echo htmlspecialchars($node->field_job_salary_minimum['und'][0]['value']);
				echo '</salarymin>';
			}
			if (isset($node->field_job_salary_maximum['und'][0]['value'])) {
				echo '<salarymax>';
				echo htmlspecialchars($node->field_job_salary_maximum['und'][0]['value']);
				echo '</salarymax>';
			}
			if (isset($node->field_job_salary_type['und'][0]['value'])) {
				echo '<salarytype>';
				echo htmlspecialchars($node->field_job_salary_type['und'][0]['value']);
				echo '</salarytype>';
			}
			if (isset($node->field_job_post_date['und'][0]['value'])) {
				echo '<postdate>';
				$postdate = explode('T', $node->field_job_post_date['und'][0]['value']);
				echo htmlspecialchars($postdate[0]);
				echo '</postdate>';
			}
			if (isset($node->field_job_expiry_date['und'][0]['value'])) {
				echo '<expirydate>';
				$expirydate = explode('T', $node->field_job_expiry_date['und'][0]['value']);
				echo htmlspecialchars($expirydate[0]);
				echo '</expirydate>';
			}
			/*
			echo '<pre>';
			print_r($node);
			echo '</pre>';
			*/
			echo '</job>';
		}
	}
}
?>

</employer>
</elutaxml>