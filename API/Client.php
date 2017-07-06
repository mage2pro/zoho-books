<?php
namespace Dfe\ZohoBooks\API;
// 2017-07-05
final class Client extends \Df\ZohoBI\API\Client {
	/**
	 * 2017-07-06
	 * @override
	 * @see \Df\ZohoBI\API\Client::version()
	 * @used-by \Df\ZohoBI\API\Client::uriBase()
	 * @return int
	 */
	protected function version() {return 3;}
}
