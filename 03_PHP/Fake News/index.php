<?php
	declare(strict_types=1);
	require __DIR__.'/assets/inc/data.php';
	require __DIR__.'/assets/inc/functions.php';

	// Meta-information to be used in ./assets/inc/head.php
	$varMetaDesc ='Fake News - Read All Articles - Assignment 1 (PHP) YRGO';
	$varMetaKeys ='HTML, CSS, PHP, JavaScript, Articles, Home, YRGO';
	$varPageName ='Fake News | Home';
?>

<!DOCTYPE html>
<html lang="en">

	<?php
		// Import the head-section with metadata
		require __DIR__.'/assets/inc/head.php';
	?>

<body>
	<header id="main-header">
		<div class="wrapper"><!-- Start page wrapper for content in main-header -->
			<h1>Fake News</h1>
		</div><!-- End page wrapper for content in main-header -->
	</header>

	<main>
		<section>
			<div class="wrapper"><!-- Start page wrapper for articles -->

				<?php
					// Import the main articles-loop
					require __DIR__.'/assets/inc/posts.php';
				?>

			</div><!-- End page wrapper for articles -->
		</section>
	</main>

	<?php
		// Import the page footer
		require __DIR__.'/assets/inc/footer.php';
	?>

</body>
</html>
