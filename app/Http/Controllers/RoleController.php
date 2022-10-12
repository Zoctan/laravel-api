<?php

namespace App\Http\Controllers;

use App\Models\Role;

/**
 * Role resource representation.
 *
 * @Resource("Roles", uri="/roles")
 */
class RoleController extends Controller
{
    public static $model = Role::class;
}
