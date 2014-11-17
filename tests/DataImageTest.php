<?php

namespace RDIFB0\DataImage;

class DataImageTest extends \PHPUnit_Framework_TestCase
{
    public function testEncode()
    {

        $encoded = DataImage::embed(dirname(__DIR__).'/res/image.gif');

        $this->assertEquals($encoded, file_get_contents(dirname(__DIR__).'/res/encoded'));
    }

} 