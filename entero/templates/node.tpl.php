<?php if($node->type != 'page' and $node->type != 'webform'): ?>
    <div class="post alt-post">
        <h2><?php print $title; ?></h2>
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
                <div class="photo"><div class="vertical-align"><img src="<?php print image_style_url('blogimages',$node->field_image['und'][0]['uri']); ?>" alt="<?php print $title; ?>" /></div></div>
            <?php endif; ?>
            <?php if(isset($node->body['und'][0]['summary'])) echo $node->body['und'][0]['summary']; ?>
        </div>
    </div>
<?php endif; ?>
<?php
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_image']);
    print render($content);
?>
<?php if($node->type != 'page' and $node->type != 'webform'): ?>
    <?php if(render($content['links'])): ?>
        <div class="post-link">
            <a href="<?php print url('comment/reply/').$node->nid; ?>#comment-form">Add new comment</a>
        </div>
    <?php endif; ?>
    <div class="post alt-post">
        <?php
            if ($teaser || !empty($content['comments']['comment_form']))
                unset($content['links']['comment']['#links']['comment-add']);
            $links = render($content['links']);
        ?>
        <?php print render($content['comments']); ?>
    </div>
<?php endif; ?>