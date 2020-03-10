<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="carousel">
    <div class="carousel-holder">
        <div class="carousel-frame">
            <div class="frame">
                <ul class="slideset">
                <?php $i = 0; foreach ($rows as $id => $row): ?>
                    <li<?php if($i == 0) echo ' class="active"'; ?>>
                        <?php print $row; ?>
                    </li>
                <?php $i++; endforeach; ?>
                </ul>
            </div>
            <ul class="switcher">
                <?php for($j = 0; $j < $i; $j++): ?>
                    <li><a href="#"<?php if($j == 0) echo ' class="active"'; ?>>1</a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>