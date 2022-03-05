<?php

namespace Tests;

include "app/Config.php";

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Number;

class NumberTest extends TestCase{

    /** @test */
	public function it_returns_error_when_number_out_of_range()
	{
		$number = new Number();

		$result = $number->setNumber(1, "B");

		$this->assertEqual($result,1);
	}



}