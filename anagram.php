<?php

/**
 * Check if an anagram - a type of word play, the result of rearranging the
 * letters of a word or phrase to produce a new word or phrase,
 * using all the original letters exactly once.
 *
 * @param $verify
 * @param $word
 * @return bool
 */
function is_anagram($verify, $word) {
	$result = get_letters($verify) === get_letters($word);

	return (bool)$result;
}

/**
 * Get only letters sorted alphabetically
 *
 * @param $string
 * @param bool $sorted
 * @return array
 */
function get_letters($string, $sorted = true) {
	$letters = str_split(str_replace(" ", "", $string));
	if ($sorted) {
		sort($letters);
	}

	return (array)$letters;
}
