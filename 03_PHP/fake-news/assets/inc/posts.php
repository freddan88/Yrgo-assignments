<?php
declare(strict_types=1);

// Function to sort articles on published-date
// This function is declared in ./assets/inc/functions.php
usort($articlesArray, 'funcSortByDate');

// Loop that will print out each article in ./assets/inc/data.php
foreach (array_reverse($articlesArray) as $varArticle):
	$varTitle = $varArticle['title'];
	$varContent = $varArticle['content'];
	$varAuthorID = $varArticle['author_id'];
	$varPublished = $varArticle['published'];
	$varAddLike = $varArticle['numlikes'];
	$varDisLike = $varArticle['dislikes'];
?>

	<article>
		<header>
			<h1><?= $varTitle; ?></h1>
		</header>

		<div class="content">
			<?= $varContent ?>
		</div>
		<hr />

		<footer>
			<div class="col1"><!-- Start column 1 of articles-footer -->
				<p>Published: <?= $varPublished ?></p>
				<p>
					<button class="thumb-button" onclick="funcJSlikes(this)">
						<i class="fa fa-thumbs-o-up"></i><span><?= $varAddLike ?></span>
					</button>

					<button class="thumb-button" onclick="funcJSlikes(this)">
						<i class="fa fa-thumbs-o-down"></i><span><?= $varDisLike ?></span>
					</button>
				</p>
			</div><!-- End column 1 of articles-footer -->

			<div class="col2"><!-- Start column 2 of articles-footer -->
				<p>Author: <a href="author.php?author_id=<?= $varAuthorID ?>"><?= $authorsArray[$varAuthorID]['name'] ?></a></p>
				<p><a href="<?= $authorsArray[$varAuthorID]['wiki'] ?>" target="_blank"><i class="fa fa-wikipedia-w">-Wikipedia</i></a></p>
			</div><!-- End column 2 of articles-footer -->
		</footer>
	</article>

<?php endforeach ?>