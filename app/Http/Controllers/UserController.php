<?php

namespace App\Http\Controllers;

use App\Models\User;

/**
 * User resource representation.
 * 
 * @Resource("Users", uri="/users")
 */
class UserController extends Controller
{
    public static $model = User::class;
}
