<?php
namespace Dfe\ZohoBooks\API;
// 2017-07-05
final class Client extends \Df\Zoho\API\BI\Client {
	/**
	 * 2017-07-06
	 * @override
	 * @see \Df\Zoho\API\BI\Client::version()
	 * @used-by \Df\Zoho\API\BI\Client::uriBase()
	 * @return int
	 */
	protected function version() {return 3;}
}
