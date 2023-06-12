<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'master_account';
    protected $primaryKey ='id';

    protected $fillable =['id_status','nama','jenisKelamin','noHp','alamat','username','password'];

    public function getFullInfo()
    {
        return $this->select('master_account.id', 'master_account.id_status', 'master_account.nama', 'master_account.jenisKelamin', 
        'master_account.noHp', 'master_account.alamat','master_account.username', 'status_user.nameStatus')
            ->join('status_user', 'master_account.id_status', '=', 'status_user.id')
            ->paginate(50);
    }

}
