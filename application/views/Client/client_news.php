<?php include 'includes/header.php'; ?>
<div class="ui container">
<div class="ui grid">
<?php foreach ($news as $n) {
	echo "<div class=\"ui vertical segment\">";
	echo "<h3>".$n->title."</h3>";
	echo "<p>".$n->intro."</p>";
	echo "<a href=\"".site_url()."/client/detail/".$n->id."\"><button class=\"ui right labeled icon button\">";
  	echo "<i class=\"right arrow icon\"></i>";
 	echo "Read More";
	echo "</button></a>";
	echo "</div>";
} ?>


</div>
</div>