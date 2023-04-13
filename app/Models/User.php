<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'master_account';
    protected $primaryKey ='id';

    protected $fillable =['id_status','nama','jenisKelamin','noHp','alamat','username','password'];

}
