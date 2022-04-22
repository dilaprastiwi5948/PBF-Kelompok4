<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class KelompokAdmin extends Model
{
    protected $table="kelompokadmin"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel barang
    public $timestamps= false; 
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'nama',  
        'status', 
        'bulan',
    ];
}
