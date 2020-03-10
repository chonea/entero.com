<?php
/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function entero_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];
    if (!empty($breadcrumb)) {
        foreach($breadcrumb as $item):
            $output .= '<li>'.html_entity_decode($item, ENT_QUOTES, 'UTF-8').'</li>';
        endforeach;
        return $output;
    }
}

/**
 * Override or insert variables into the html template.
 */
function base_preprocess_html (&$vars) {
if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'html';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '__' . $path_part;
        $vars['theme_hook_suggestions'][] = $template_filename;
      }
    }
  }
}

/**
 * Override or insert variables into the maintenance page template.
 */
function base_preprocess_maintenance_page(&$vars) {
  // While markup for normal pages is split into page.tpl.php and html.tpl.php,
  // the markup for the maintenance page is all in the single
  // maintenance-page.tpl.php template. So, to have what's done in
  // base_preprocess_html() also happen on the maintenance page, it has to be
  // called here.
    base_preprocess_html($vars);
}

/**
 * Override or insert variables into the page template.
 */
function base_preprocess_page(&$vars) {
  // Move secondary tabs into a separate variable.
    $vars['tabs2'] = array(
        '#theme' => 'menu_local_tasks',
        '#secondary' => $vars['tabs']['#secondary'],
    );
    unset($vars['tabs']['#secondary']);

    if (isset($vars['main_menu'])) {
      $vars['primary_nav'] = theme('links__system_main_menu',
            array(
                'links' => $vars['main_menu'],
                'attributes' => array(
                'class' => array('links', 'inline', 'main-menu'),
            ),
            'heading' => array(
                'text' => t('Main menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
                )
        ));
    }
    else
    {
        $vars['primary_nav'] = FALSE;
    }
    if (isset($vars['secondary_menu']))
    {
        $vars['secondary_nav'] = theme('links__system_secondary_menu',
            array(
                'links' => $vars['secondary_menu'],
                'attributes' => array(
                'class' => array('links', 'inline', 'secondary-menu'),
                ),
            'heading' => array(
                'text' => t('Secondary menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
                )
            ));
    }
    else
    {
        $vars['secondary_nav'] = FALSE;
    }

  // Prepare header.
    $site_fields = array();
    if (!empty($vars['site_name']))
    {
        $site_fields[] = $vars['site_name'];
    }
    if (!empty($vars['site_slogan']))
    {
        $site_fields[] = $vars['site_slogan'];
    }
    $vars['site_title'] = implode(' ', $site_fields);
    if (!empty($site_fields))
    {
        $site_fields[0] = '<span>' . $site_fields[0] . '</span>';
    }
    $vars['site_html'] = implode(' ', $site_fields);

    // Set a variable for the site name title and logo alt attributes text.
    $slogan_text = $vars['site_slogan'];
    $site_name_text = $vars['site_name'];
    $vars['site_name_and_slogan'] = $site_name_text . ' ' . $slogan_text;
}

/**
 * Override or insert variables into the node template.
 */
function base_preprocess_node(&$vars) {
    $vars['submitted'] = $vars['date'] . ' — ' . $vars['name'];
}

/**
 * Override or insert variables into the comment template.
 */
function base_preprocess_comment(&$vars) {
    $vars['submitted'] = $vars['created'] . ' — ' . $vars['author'];
}

/**
 * Override or insert variables into the block template.
 */
function base_preprocess_block(&$vars) {
    $vars['title_attributes_array']['class'][] = 'title';
    $vars['classes_array'][] = 'clearfix';
}

/**
 * Override or insert variables into the region template.
 */
function base_preprocess_region(&$vars) {
    if ($vars['region'] == 'header') {
        $vars['classes_array'][] = 'clearfix';
    }
}

/**
 * Styles the menu for a Menu Block module. This function is called inside templates/menu-block-wrapper.tpl.php
 */
function menu_block_links($variables, $level=1)
{
  
    $links = $variables['links'];
    $attributes = $variables['attributes'];
	$output = '';
	
	if(is_array($links)){
		array_pop($links);
		array_pop($links);
		global $language_url;
		
		if (count($links) > 0) {
			if($level == 2):
				//print_r($variables['attributes']);
				$output .= '<div class="drop">';
				if('side-nav-inner' != $variables['attributes']['class']):
					$output .= '<span class="arrow">&nbsp;</span>';
				endif;
			endif;
			$output .= '<ul' . drupal_attributes($attributes) . '>';
			$num_links = count($links);
			foreach ($links as $link) {
				$class = $link['#attributes']['class'];
				if(count($class))
				{
					$class = ' class="'.implode(' ', $class).'"';
				}
				else
				{
					$class = '';
				}
				$output .= '<li>';
				if (isset($link['#href']))
				{
					$output .= l(html_entity_decode($link['#title'], ENT_QUOTES, 'UTF-8'), $link['#href'], $link);
				}
				$children = $link['#below'];
				if(count($children))
				{
					$level++;
					$vars = array();
					$vars['links'] = $children;
					if(isset($variables['attributes']['class']) and 'side-nav' == $variables['attributes']['class']):
						$vars['attributes'] = array('class' => 'side-nav-inner');
					else:
						$vars['attributes'] = array('class' => 'level-'.$level);
					endif;
					$output .= menu_block_links($vars, $level);
					$level--;
				}
				$output .= "</li>\n";
			}
			$output .= '</ul>';
			if($level == 2):
				$output .= '</div>';
			endif;
		}
	}
    return $output;
}

function entero_item_list($variables) {
    $items = $variables['items'];
    $title = $variables['title'];
    $type = $variables['type'];
    $attributes = $variables['attributes'];

    if (!empty($items)) {
        $output .= '<ul>';
        $num_items = count($items);
        foreach ($items as $i => $item) {
            $attributes = array();
            $children = array();
            $data = '';
            if (is_array($item)) {
                foreach ($item as $key => $value) {
                    if ($key == 'data') {
                        $data = $value;
                    }
                    elseif ($key == 'children') {
                        $children = $value;
                    }
                    else {
                        $attributes[$key] = $value;
                    }
                }
            }
            else {
                $data = $item;
            }
            if (count($children) > 0) {
                $data .= theme_item_list(array('items' => $children, 'title' => NULL, 'type' => $type, 'attributes' => ''));
            }
            if ($i == 0) {
                $attributes['class'][] = 'first';
            }
            if ($i == $num_items - 1) {
                $attributes['class'][] = 'last';
            }
            $output .= '<li' . drupal_attributes($attributes) . '>' . $data . "</li>\n";
        }
        $output .= "</ul>";
    }
    return $output;
}