<?php
namespace Dfe\ZohoBooks\API;
use Df\Core\Exception as DFE;
// 2017-07-05
final class R {
	/**
	 * 2017-07-05
	 * @return array(string => mixed)
	 */
	static function organizations() {return self::p(__FUNCTION__);}

	/**
	 * 2017-07-05
	 * @used-by organizations()
	 * @param string $path
	 * @param array(string => mixed) $p [optional]
	 * @param string|null $method [optional]
	 * @return array(string => mixed)
	 * @throws DFE
	 */
	static function p($path, array $p = [], $method = null) {return (new Client($path, $p, $method))->p();}
}