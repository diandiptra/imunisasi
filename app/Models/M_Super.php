<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Super extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $fillable = ['username', 'password', 'role_id', 'status'];
}
