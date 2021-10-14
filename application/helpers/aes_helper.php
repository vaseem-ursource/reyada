<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

    /**
     * AES Encryption Method
     */
    function encrypt($str, $key, $ivKey)
    {    
        $CI =& get_instance();    
        $str = pkcs5_pad($str);
        $encrypted = openssl_encrypt($str, 'AES-256-CBC', $key, OPENSSL_ZERO_PADDING, $ivKey);
        $encrypted = base64_decode($encrypted);
        $encrypted = unpack('C*', ($encrypted));
        $encrypted = byteArray2Hex($encrypted);
        $encrypted = urlencode($encrypted);
        return $encrypted;
    }

    function pkcs5_pad($text)
    {
        $blocksize = 32;
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text.str_repeat(chr($pad), $pad);
    }

    function byteArray2Hex($byteArray)
    {
        $chars = array_map("chr", $byteArray);
        $bin = join($chars);
        return bin2hex($bin);
    }
    
    /**
     * AES Decryption Method
     */
    function decrypt($code, $key, $ivKey)
    {
        if (!(ctype_xdigit($code) && strlen($code) % 2 == 0)) {
            return false;
        }        
        $code = hex2ByteArray(trim($code));
        $code = byteArray2String($code);
        // $iv = $key;
        $code = base64_encode($code);
        $decrypted = openssl_decrypt($code, 'AES-256-CBC', $key, OPENSSL_ZERO_PADDING, $ivKey);
        return pkcs5_unpad($decrypted);
    }

    function hex2ByteArray($hexString)
    {
        $string = hex2bin($hexString);
        return unpack('C*', $string);
    }

    function byteArray2String($byteArray)
    {
        $chars = array_map("chr", $byteArray);
        return join($chars);
    }

    function pkcs5_unpad($text)
    {
        $pad = ord($text{strlen($text) - 1});
        if ($pad > strlen($text)) {
            return false;
        }
        if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) {
            return false;
        }
        return substr($text, 0, -1 * $pad);
    }
    
