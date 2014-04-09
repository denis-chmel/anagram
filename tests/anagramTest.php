<?php

require_once(__DIR__ . "/../anagram.php");

class AnagramTest extends PHPUnit_Framework_TestCase {

	/**
	 * @dataProvider anagramsProvider
	 */
	public function testAnagrams($verify, $word, $result, $comment = "") {
		$this->assertEquals(
			$result,
			is_anagram($verify, $word),
			$comment
		);
	}

	public function anagramsProvider()
	{
		return array(
			array('epapl', 'apple', TRUE),
			array('geraon', 'orange', TRUE),
			array('geanra', 'orange', FALSE),
			array('andepapl geraon', 'apple and orange', TRUE, "spaces should be ignored"),
			array('andepapl geanra', 'apple and orange', FALSE, "spaces should be ignored"),
		);
	}

}
