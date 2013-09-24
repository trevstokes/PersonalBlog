<?php
	include($_SERVER["DOCUMENT_ROOT"] . '/includes/personalblog.php');
	$post = null;
	if (isset($_GET["post"]))
		$post = $_GET["post"];
	GetPosts($post);
?>
		<?php require($_SERVER["DOCUMENT_ROOT"] . '/layout/header.php'); ?>
		<!-- This well is for blog post content. One blog post at a time. -->
		<div class="well well-large">
			<h3><?php echo $GLOBALS["title"]; ?></h3>
			<?php echo $GLOBALS["content"]; ?>
		</div>

		<!-- Use older newer buttons to show older/newer blog post -->
		<ul class="pager">
			<li class="previous <?php if ($bottom) echo "disabled"; ?>">
				<a href="<?php if (!$bottom) echo "./?post=" . $previous; ?>">&larr; Older</a>
			</li>
			<li class="next <?php if ($top) echo "disabled"; ?>">
				<a href="<?php if (!$top) echo "./?post=" . $next; ?>">Newer &rarr;</a>
			</li>
		</ul>
		<?php require($_SERVER["DOCUMENT_ROOT"] . '/layout/partials/blog-nav.php'); ?>
		<?php require($_SERVER["DOCUMENT_ROOT"] . '/layout/footer.php'); ?>
