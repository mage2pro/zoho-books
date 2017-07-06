<?php
namespace Dfe\ZohoBooks\T;
use Dfe\ZohoBooks\API\Facade as F;
use Dfe\ZohoBooks\Settings as S;
// 2017-07-05
final class Basic extends TestCase {
	/** @test 2017-07-05 */
	function t00() {}

	/** 2017-07-05 */
	function t01_token() {echo S::s()->token();}

	/** @test 2017-07-05 */
	function t02_organizations() {echo df_json_encode(F::organizations());}

	/** 2017-07-06 */
	function t03_invalid() {echo df_json_encode(F::p('invalid'));}
}