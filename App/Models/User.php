<?php
/**
 * Created by PhpStorm.
 * User: serb
 * Date: 4/2/16
 * Time: 1:37 AM
 */

namespace App\Models;

use App\Model;

class User extends Model
{
    const TABLE='users';

    public $email;
    public $name;
    
}