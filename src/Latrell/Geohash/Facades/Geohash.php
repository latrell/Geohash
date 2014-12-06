<?php

namespace Latrell\Geohash\Facades;

use Illuminate\Support\Facades\Facade;

class Geohash extends Facade
{

	/**
     * Get the registered name of the component.
     *
     * @return string
     */
	protected static function getFacadeAccessor()
	{
		return 'geohash';
	}
}