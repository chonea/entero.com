<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="side-post">
    <h3>Recent Posts</h3>
    <ul>
    <?php foreach ($rows as $id => $row): ?>
        <li><?php print $row; ?></li>
    <?php endforeach; ?>
    </ul>
    <strong class="view-box"><a href="<?php echo url('taxonomy/term/4'); ?>">View all</a></strong>
</div>