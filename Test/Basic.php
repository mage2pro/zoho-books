<?php
namespace Dfe\ZohoBooks\Test;
use Dfe\ZohoBooks\API\Facade as F;
use Dfe\ZohoBooks\Settings as S;
# 2017-07-05
final class Basic extends TestCase {
	/** 2017-07-05 @test */
	function t00() {}

	/** 2017-07-05 */
	function t01_token() {print_r(S::s()->token());}

	/** 2017-07-05 */
	function t02_organizations() {print_r(df_json_encode($this->f()->organizations()));}

	/** 2017-07-06 */
	function t03_invalid() {print_r(df_json_encode($this->f()->p('invalid')));}

	/** 2017-07-07 @test */
	function t04_currencies() {print_r(df_json_encode($this->f()->currencies()));}
}