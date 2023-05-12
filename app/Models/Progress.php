<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Progress as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Progress extends Model
{
    protected $table="progress_babies"; // Eloquent akan membuat model anak menyimpan record di tabel anak
    public $timestamps= false;
    protected $primaryKey = 'id_progress'; // Memanggil isi DB Dengan primarykey
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = [
    'id_progress',
    'id_anak',
    'bulan_ke',
    'panjang_bayi',
    'berat_bayi'
    ];

    public function getFullInfo()
    {
        return $this->select('progress_babies.id_progress', 'anak.nama', 'anak.id_anak', 'progress_babies.bulan_ke', 'progress_babies.panjang_bayi', 'progress_babies.berat_bayi')
            ->join('anak', 'progress_babies.id_anak', '=', 'anak.id_anak')
            ->paginate(100);
    }
}


