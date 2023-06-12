<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Anak as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Anak extends Model
{
    protected $table="anak"; // Eloquent akan membuat model anak menyimpan record di tabel anak
    public $timestamps= false;
    protected $primaryKey = 'id_anak'; // Memanggil isi DB Dengan primarykey
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = [
    'id_anak',
    'nama',
    'TTL',
    'nama_ibu',
    'nama_ayah',
    'alamat',
    'telepon',
    'akte'
    ];
}
