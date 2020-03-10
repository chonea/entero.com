<div class="post">
    <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <div class="meta-box">
        <span>Posted by: <a href="<?php echo url('user/'.$node->uid) ?>"><?php echo $node->name; ?></a> On <?php echo date('D, d/m/Y', $node->created); ?></span>
        <?php
            if(isset($node->field_tax['und'][0]['tid'])):
                foreach($node->field_tax['und'] as $item):
                    $term = taxonomy_term_load($item['tid']);
            ?>
                    <a href="<?php echo url('taxonomy/term/').$item['tid']; ?>" class="timestamp"><?php echo $term->name; ?></a>
            <?php
                endforeach;
            endif;
        ?>
    </div>
    <div class="entry-content">
        <?php if(isset($node->field_image['und'][0]['uri'])): ?>
            <div class="photo align-right"><div class="vertical-align"><img src="<?php print image_style_url('blogimages',$node->field_image['und'][0]['uri']); ?>" alt="<?php print $title; ?>" /></div></div>
        <?php endif; ?>
        <?php echo $node->body['und'][0]['summary']; ?>
    </div>
    <div class="post-link">
        <?php /* if (render($content['links'])): ?>
            <a href="<?php print url('comment/reply/').$node->nid; ?>#comment-form">Add new comment</a>
        <?php endif; */ ?>
        <a href="<?php print $node_url; ?>" class="more">Read more</a>
    </div>
</div>