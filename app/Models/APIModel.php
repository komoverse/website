<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class APIModel extends Model
{
    use HasFactory;

    static function getUsername($username) {
        $result = DB::table('tb_useradmin')
                    ->where('username', '=', $username)
                    ->first();
        return $result;
    }
}
