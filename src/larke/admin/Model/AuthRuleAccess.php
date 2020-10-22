<?php

namespace Larke\Admin\Model;

use Illuminate\Database\Eloquent\Model;

/*
 * AuthRuleAccess
 *
 * @create 2020-10-20
 * @author deatil
 */
class AuthRuleAccess extends Model
{
    protected $table = 'larke_auth_rule_access';
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    
    public $incrementing = false;
    public $timestamps = false;
}