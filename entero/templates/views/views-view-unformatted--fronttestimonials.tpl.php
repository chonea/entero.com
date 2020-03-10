<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
<div class="note-box">
    <div class="holder">
        <?php print $row; ?>
    </div>
</div>
<?php endforeach; ?>