<?php
namespace App\Helpers;

use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class IDCryptHelper
{
  public static function Encrypt($id){
    return Crypt::encryptString($id);
  }

  public static function Decrypt($id){
    try {
      return Crypt::decryptString($id);
    } catch (DecryptException $e) {
      return abort('404');
    }
  }
}
