<div id="wrapper">
    <div class="w1">
        <div id="header">
            <div class="header-frame">
                <div class="header-holder">
                    <h1 class="logo"><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
                    <div class="panel">
                        <?php print render($page['header']); ?>
                    </div>
                </div>
                <div id="nav">
                    <?php print render($page['navigation']); ?>
                </div>
            </div>
        </div>
        <div class="heading-box">
            <div class="content">
                <?php if(isset($node->type) and is_object($node) and $node->type == 'article'): ?>
                    <h1>News &amp; Events</h1>
                <?php elseif($title): ?>
                    <h1><?php print html_entity_decode($title, ENT_QUOTES, 'UTF-8'); ?></h1>
                <?php endif; ?>
                <?php if($breadcrumb): ?>
                    <ul class="breadcrumbs">
                        <?php print $breadcrumb; ?>
                        <li><?php print html_entity_decode($title, ENT_QUOTES, 'UTF-8'); ?></li>
                    </ul>
                <?php endif; ?>
            </div>
            <?php if(render($page['innerimage'])): ?>
                <?php print render($page['innerimage']); ?>
            <?php else: ?>
                <img src="<?php print base_path().path_to_theme();?>/images/img10.jpg" width="1332" height="112" alt="image description" />
            <?php endif; ?>
        </div>
		<?php if( (isset($node->type) and $node->type == 'newsletter')): ?>
		<div id="main-newsletter">
		<?php else: ?>
        <div id="main">
		<?php endif; ?>
            <div id="twocolumns">
			
				<?php if( (isset($node->type) and $node->type == 'newsletter')): ?>
					
                            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
                            <?php print render($tabs2); ?>
                            <?php //print $messages; ?>
                            <?php print render($page['help']); ?>
                            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                            <?php print render($page['content']); ?>
               
				<?php else: ?>
					
                <div id="content"> 
                    <?php if(render($page['blogpagecontent'])): ?>
                        <?php print render($page['blogpagecontent']); ?>
                    <?php else: ?>
                        <?php if(render($page['contactform']) or (isset($node->type) and $node->type == 'webform' )): ?>
                            <div class="container">
                                <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
                                <?php print render($tabs2); ?>
                                <?php //print $messages; ?>
                                <?php print render($page['help']); ?>
                                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                                <?php print render($page['content']); ?>
                                <?php print render($page['contactform']); ?>
                            </div>
                        <?php else: ?>
                            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
                            <?php print render($tabs2); ?>
                            <?php //print $messages; ?>
                            <?php print render($page['help']); ?>
                            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                            <?php print render($page['content']); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div id="sidebar">
                    <?php
                        if( (isset($node->type) and $node->type == 'page') or arg(0) == 'taxonomy'):
                            $left_menu = menu_tree_all_data('main-menu');
                            $parent_title = '';
                            foreach($left_menu as $item):
                                if(!empty($item['below'])):
                                    foreach($item['below'] as $item_below):
                                        if(arg(1, $item_below['link']['link_path']) == arg(1)):
                                            $parent_title = '<h3>'.$item['link']['link_title'].'</h3>';
                                            $level = 1;
                                            break;
                                        endif;
                                        
                                        if(!empty($item_below['below'])):
                                            foreach($item_below['below'] as $item_below1):
                                                if(arg(1, $item_below1['link']['link_path']) == arg(1)):
                                                    $parent_title = '<h3>'.$item['link']['link_title'].'</h3>';
                                                    $level = 1;
                                                    break;
                                                endif;
                                            endforeach;
                                        endif;
                                        
                                    endforeach;
                                endif;
                            endforeach;
                            if($parent_title == ''):
                                $a = 0;
                                foreach($left_menu as $item):
                                    if(arg(1, $item['link']['link_path']) == arg(1) and !empty($item['below'])):
                                        print '<h3>'.html_entity_decode($item['link']['link_title'], ENT_QUOTES, 'UTF-8').'</h3>';
                                        $a = 0;
                                        break;
                                    endif;
                                endforeach;
                                if($a == 0):
                                    
                                endif;
                            else:
                                print $parent_title;
                            endif;
                        endif;
                        global $flag;
                        $flag = 2;
                        print render($page['sidebar_first']);
                    ?>
                </div>
				<?php endif;?>
            </div>
            <?php if (render($page['front4blocks'])): ?>
                <div class="item-box">
                    <div class="item-holder">
                        <div class="columns-box">
                            <div class="holder">
                                <div class="frame">
                                    <div class="content-holder">
                                        <?php print render($page['front4blocks']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div id="footer">
            <dl>
                <dt>Web Design by:</dt>
                <dd><a href="http://www.verticalmotion.ca" target="_blank">Vertical Motion</a></dd>
            </dl>
            <?php
                global $flag;
                $flag = 1;
                print render($page['footer']);
            ?>
            <p>Copyright 2012 Entero Corporation</p>
            <script type="text/javascript">
/* <![CDATA[ */
document.write (
'<img src="http://www3.entero.com/acton/bn/2600/visitor.gif?ts='+
new Date().getTime()+
'&ref='+escape(document.referrer) + '">'
);
/* ]]> */
</script>
        </div>
    </div>
</div>