<img src="<?php print image_style_url('frontgallery',$node->field_image['und'][0]['uri']); ?>" alt="<?php print $title; ?>" />
<div class="description">
    <h2><?php print $title; ?></h2>
    <?php echo $node->body['und'][0]['summary']; ?>
</div>