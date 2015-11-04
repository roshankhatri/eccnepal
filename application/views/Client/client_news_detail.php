<?php include 'includes/header.php'; ?>
<div class="ui container">
	<div class="ui grid">
		<div class="row">
		<h2><?php echo $detail->title?></h2>
		<p><?php echo $detail->content?></p>
		</div>
		<div class="row">
		<p>Published on <?php echo $detail->published_on?></p>
	</div>
	</div>
</div>