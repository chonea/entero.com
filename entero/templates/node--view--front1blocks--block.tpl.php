<h3><?php print $title; ?></h3>
<em class="date"><?php echo date('F d, Y', $node->created); ?></em>
<span class="meta">Posted by <a href="<?php echo url('user/'.$node->uid) ?>"><?php echo $node->name; ?></a></span>
<p><?php echo strip_tags($node->body['und'][0]['summary']); ?></p>
<div class="more-box"><a href="<?php print $node_url; ?>">Learn More</a></div>