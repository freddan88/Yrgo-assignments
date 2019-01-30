<?php
declare(strict_types=1);

/**
 * [ funcSortByDate - Sorts articles by date in decending order ]
 * @param  array $a [ The $articlesArray is mapped to $a ]
 * @param  array $b [ The $articlesArray is mapped to $b ]
 * @return int      [ Returns a sorted $articlesArray ]
 *
 * PHP7 - Spaceship (<=>) operator:
 * Returns 0 if values on either side are equal
 * Returns 1 if value on the left is greater
 * Returns -1 if the value on the right is greater
 */

function funcSortByDate(array $a, array $b): int {
  return $a['published'] <=> $b['published'];
}

/**
 * [ funcSearchAuthorID - Filters the $articlesArray on author_id´s ]
 * @param  array $array [ Filters Author id´s on the passed in $articlesArray ]
 * @return bool         [ Returns a new array with the filtered authors names and wiki´s ]
 */

function funcSearchAuthorID(array $array): bool{
	$urlAuthorID = $_GET['author_id'];
	return $array['author_id'] == $urlAuthorID;
}
