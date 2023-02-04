<?php

declare (strict_types = 1);

namespace Larke\Admin\Jwt\Signer\Hmac;

use Larke\JWT\Signer\Hmac as HmacSigner; 
use Larke\Admin\Jwt\Signer\Hmac;

/*
 * Hmac Sha512 签名
 *
 * @create 2023-2-4
 * @author deatil
 */
class Sha512 extends Hmac
{
    /**
     * 签名方法
     */
    protected $signingMethod = HmacSigner\Sha512::class;
}
