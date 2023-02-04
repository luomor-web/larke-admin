<?php

declare (strict_types = 1);

namespace Larke\Admin\Jwt\Signer;

use Illuminate\Support\Collection;

use Larke\JWT\Signer\Key\InMemory;
use Larke\JWT\Signer\Blake2b as Blake2bSigner; 

use Larke\Admin\Jwt\Contracts\Signer;

/*
 * Blake2b 签名
 *
 * @create 2023-2-4
 * @author deatil
 */
class Blake2b implements Signer
{
    /**
     * 签名方法
     */
    protected $signingMethod = Blake2bSigner::class;
    
    /**
     * 配置
     *
     * @var Collection
     */
    private $config = [];
    
    /**
     * 构造方法
     * 
     * @param Collection $config 配置信息
     */
    public function __construct(Collection $config)
    {
        $this->config = $config;
    }
    
    /**
     * 签名类
     *
     * @return \Larke\JWT\Contracts\Signer
     */
    public function getSigner() 
    {
        return new $this->signingMethod();
    }
    
    /**
     * 签名密钥
     *
     * @return string
     */
    public function getSignSecrect() 
    {
        return $this->getSecrect();
    }
    
    /**
     * 验证密钥
     *
     * @return string
     */
    public function getVerifySecrect() 
    {
        return $this->getSecrect();
    }
    
    /**
     * 密钥
     *
     * @return string
     */
    private function getSecrect() 
    {
        $secrect = $this->config->get("secrect");
        
        // base64 秘钥数据解码
        $secrect = InMemory::base64Encoded($secrect)->getContent();
        $secrect = InMemory::plainText($secrect);

        return $secrect;
    }
    
}
