<?php
	//page url
	$url = array();
	$url = explode('?', $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
	$url = explode('/', $url[0]);
	$page = end($url);
	$detail = end(explode('-', $page));
	
	//li background color and href attribut for links
	$color = array('Announcements'=>'none', 'E1'=>'none', 'Mosaic'=>'none');
	$next;
	if($detail == "E1"){
		$color['E1'] = '#DFEFC0';
		$href = substr($page, 0, strrpos($page, "E1")-1);
		$next = $href."-Mosaic";
	}elseif($detail == "Mosaic"){
		$color['Mosaic'] = '#DFEFC0';
		$href = substr($page, 0, strrpos($page, "Mosaic")-1);
		$next = $href;
	}else{
		$color['Announcements'] = '#DFEFC0';
		$href = $page;
		$next = $href."-E1";
	}
	
?>

<div id="content"> 
	<div class="newsletter">
	
		<?php echo $node->body['und'][0]['value']; ?>
		
		<div class="read-more"><a href="/<?php print $next;?>"><img src="/sites/default/files/News &amp; Events/Newsletter/news_readmore.png" alt="Read More" onmouseover="this.src='/sites/default/files/News &amp; Events/Newsletter/news_readmore_on.png';" onmouseout="this.src='/sites/default/files/News &amp; Events/Newsletter/news_readmore.png';"></a></div>
	</div>
</div>

<div id="sidebar">
	<div class="newsletter">
		<h3>The Entero Report</h3>
		<ul class="views-summary">
			<li class="section" style="background-color:<?php print $color['Announcements'];?>;"><a href="/<?php print $href;?>">Entero Announcements</a></li>
			<li class="section" style="background-color:<?php print $color['E1'];?>;"><a href="/<?php print $href;?>-E1">Entero ONE<br/>
				<ul class="menu-list">
					<li><span>Product Updates</span></li>
					<li><span>News & Events</span></li>
					<li><span>Client Services</span></li>
				</ul>
			</a></li>
			<li class="section" style="background-color:<?php print $color['Mosaic'];?>;"><a href="/<?php print $href;?>-Mosaic">Mosaic<br/>
				<ul class="menu-list">
					<li><span>Product Updates</span></li>
					<li><span>News & Events</span></li>
					<li><span>Client Services</span></li>
				</ul>
			</a></li>
		</ul>
		
		<?php if(isset($node->field_sidebuttonimage['und'][0]['filename'])): ?>
		<div class="side-button" style="background-image:url('/sites/default/files/<?php print $node->field_sidebuttonimage['und'][0]['filename'];?>');">
		<?php endif; ?>
			<?php if(isset($node->field_sidebutton['und'][0]['value'])): ?>
			<div class="text">
				<?php echo $node->field_sidebutton['und'][0]['value']; ?>
			</div>
			<?php endif; ?>	
		<?php if(isset($node->field_sidebuttonimage['und'][0]['filename'])): ?>
		</div>
		<?php endif; ?>
	</div>
</div>