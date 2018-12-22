<?php

namespace Mozammil\Putio\Test;

use Mozammil\Putio\Endpoints\Zips;
use PHPUnit\Framework\TestCase;

class ZipsTest extends TestCase
{
    public function test_zips_create()
    {
        $stub = $this->getMockBuilder('Mozammil\Putio\Http\Client')->disableOriginalConstructor()->getMock();
        $stub->method('post')->willReturn('create');

        $zips = new Zips($stub);
        $this->assertEquals('create', $zips->create([1, 2, 3]));
    }

    public function test_zips_list()
    {
        $stub = $this->getMockBuilder('Mozammil\Putio\Http\Client')->disableOriginalConstructor()->getMock();
        $stub->method('get')->willReturn('list');

        $zips = new Zips($stub);
        $this->assertEquals('list', $zips->list());
    }

    public function test_zips_get()
    {
        $stub = $this->getMockBuilder('Mozammil\Putio\Http\Client')->disableOriginalConstructor()->getMock();
        $stub->method('get')->willReturn('get');

        $zips = new Zips($stub);
        $this->assertEquals('get', $zips->get(1));
    }
}
