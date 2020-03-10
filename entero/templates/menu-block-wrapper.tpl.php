<?php
    global $flag;
    $variables = array();
    $variables['links'] = $content;
    if($flag == 1):
        $variables['attributes'] = array('class' => 'footer-nav');
    elseif($flag == 2):
        $variables['attributes'] = array('class' => 'side-nav');
    else:
        $variables['attributes'] = array('id' => 'nav');
    endif;
    print menu_block_links($variables);
?>