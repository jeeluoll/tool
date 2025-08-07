<?php

namespace Jeeluo\Tool;

class Encryption
{
    public const AES_128_ECB = 'AES-128-ECB';

    /**
     * @desc 加密
     */
    public static function encrypt(string $data, string $key, string $algo = self::AES_128_ECB, string $iv = ''): string
    {
        $encryptedBytes = openssl_encrypt($data, $algo, $key, OPENSSL_RAW_DATA);
        return base64_encode($encryptedBytes);
    }

    /**
     * @desc 解密
     */
    public static function decrypt(string $data, string $key, string $algo = self::AES_128_ECB, string $iv = '')
    {
        return openssl_decrypt(base64_decode($data), $algo, $key, OPENSSL_RAW_DATA);
    }
}