<?php if(isset($node->field_image['und'][0]['uri'])): ?>
    <div class="avatar"><div class="vertical-align">
        <a href="<?php print $node_url; ?>"><img src="<?php print image_style_url('resentposts',$node->field_image['und'][0]['uri']); ?>" alt="<?php print $title; ?>" /></a>
    </div></div>
<?php endif; ?>
<div class="description">
    <h4><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h4>
    <?php /*echo substr(strip_tags($node->body['und'][0]['summary']), 0, 60); */?>
</div>