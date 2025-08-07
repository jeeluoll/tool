<?php

use Jeeluo\Tool\Encryption;
use PHPUnit\Framework\TestCase;

class EncryptionTest extends TestCase
{
    public function test()
    {
        $data = '开源技术';
        $key = '53vYPpTJIR1aYFiFh0PppZzF';

        $encrypt = Encryption::encrypt($data,$key);
        self::assertIsString($encrypt);

        $decrypt = Encryption::decrypt($encrypt,$key);
        self::assertNotEquals($decrypt,$data);
    }
}