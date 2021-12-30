<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class NilaiAtribut extends Model
{
    protected $table;
    protected $primaryKey = 'id_nilaiatribut';
    protected $fillable = [
        'kode_atribut',
        'nama_atribut',
        'nama_nilaiatribut',
    ];

    public function __construct()
    {
        $this->table = "table_" . Auth::user()->init_table . "_nilaiatribut";
    }
}
