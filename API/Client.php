<?php
namespace Dfe\ZohoBooks\API;
# 2017-07-05
final class Client extends \Dfe\ZohoBI\API\Client {
	/**
	 * 2017-07-06
	 * @override
	 * @see \Dfe\ZohoBI\API\Client::version()
	 * @used-by \Dfe\ZohoBI\API\Client::urlBase()
	 */
	protected function version():int {return 3;}
}
