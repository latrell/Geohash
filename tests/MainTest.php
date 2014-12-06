<?php

class MainTest extends \PHPUnit_Framework_TestCase
{

	public function testRun()
	{
		require_once __DIR__ . '/../src/Latrell/Geohash/Geohash.php';

		$geohash = new Latrell\Geohash\Geohash();

		// these test hashes were made on geohash.org
		// and test various combinations of precision
		// and range
		$tests = array(
			"ezs42" => array(
				42.6,
				- 5.6
			),
			"mh7w" => array(
				- 20,
				50
			),
			"t3b9m" => array(
				10.1,
				57.2
			),
			"c2b25ps" => array(
				49.26,
				- 123.26
			),
			"80021bgm" => array(
				0.005,
				- 179.567
			),
			"k484ht99h2" => array(
				- 30.55555,
				0.2
			),
			"8buh2w4pnt" => array(
				5.00001,
				- 140.6
			)
		);

		foreach ($tests as $actualhash => $coords) {
			$computed_hash = $geohash->encode($coords[0], $coords[1]);

			$this->assertTrue($computed_hash == $actualhash);

			$computed_coords = $geohash->decode($actualhash);

			$this->assertTrue(($computed_coords[0] == $coords[0]) && ($computed_coords[1] == $coords[1]));
		}
	}
}
