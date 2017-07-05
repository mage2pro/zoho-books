<?php
namespace Dfe\ZohoBooks\T;
use Dfe\ZohoBooks\Settings as S;
use Zend_Http_Client as C;
// 2017-07-05
final class Basic extends TestCase {
	/** @test 2017-07-05 */
	function t00() {}

	/** 2017-07-05 */
	function t01_token() {echo S::s()->token();}

	/** @test 2017-07-05 */
	function t02_organizations() {
		/** @var C $c */
		$c = new C;
		$c->setConfig(['timeout' => 120]);
		$c->setHeaders([
			'Accept' => 'application/json'
			,'Authorization' => 'Zoho-authtoken ' . S::s()->token()
		]);
		$c->setUri('https://books.zoho.com/api/v3/organizations');
		echo df_json_prettify($c->request()->getBody());
	}
}