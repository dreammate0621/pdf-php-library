<?php

namespace Tests\Ilovepdf;

use Ilovepdf\File;

class FileTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testCanGetOptions(){
        $serverFilename ='file_server';
        $filename = 'file_name';
        $file = new File($serverFilename, $filename);
        $options = $file->getFileOptions();
        $this->assertEquals($options['server_filename'], $serverFilename);
        $this->assertEquals($options['filename'], $filename);
    }


    /**
     * @test
     */
    public function testCanSetRotation(){
        $rotation = 90;
        $file = new File('file_server', 'file_name');
        $file->setRotation($rotation);
        $options = $file->getFileOptions();
        $this->assertEquals($options['rotate'], $rotation);
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function testSetRotationWithNotAllowedParamTrowsError(){
        $rotation = '900';
        $file = new File('file_server', 'file_name');
        $file->setRotation($rotation);
    }


    /**
     * @test
     */
    public function testCanSetPassword(){
        $password = 'newpassword';
        $file = new File('file_server', 'file_name');
        $file->setPassword($password);
        $options = $file->getFileOptions();
        $this->assertEquals($options['password'], $password);
    }

    /*
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function testEmptyServerFilenameTrowException(){
        new File('', 'some_filename');
    }

    /*
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function testEmptyFilenameTrowException(){
        new File('server_filename', '');
    }
}