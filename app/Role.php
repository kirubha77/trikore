<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public static function getRoleName($id){
    	return $rolename = Role::where('id',$id)->first()->role_name;
    }
     public static function getUserName($id){
    	return $rolename = Role::where('id',$id)->first()->role_name;
    }
}
