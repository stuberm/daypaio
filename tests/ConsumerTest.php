<?php
namespace Daypaio\Tests;

final class ConsumerTest extends DaypaioTestCase 
{
	public function testUrl(): void
	{
		$this->assertEquals(
			'https://stage.daypaio.com/api/consumer?access_token=' . $this->daypaio->config['access_token'],
			$this->daypaio->consumer->getUrl()
		);
	}

	// public function testCreate(): void 
	// {
	// 	$result = $this->daypaio->consumer->create([
	// 		'email' 			=> 'stuber@wirth-horn.de',
	// 		't' 				=> 'lead',
	// 		'first_name' 		=> 'Michael',
	// 		'ext_id' 			=> 'external_id',
	// 		'kostenloses_e_book' => '9783426406083',
	// 		'newsletter' 		=> true,
	// 		'soi' 				=> true,
	// 		'soi_date' 			=> '2018-08-01T07:08:00Z',
	// 		'soi_ip' 			=> '000.000.000.000'
	// 	]);
	// 	echo '<pre>';
	// 	echo print_r($result);
	// 	echo '</pre>';
    //     $this->assertArrayHasKey('id', $result);
	// }
}