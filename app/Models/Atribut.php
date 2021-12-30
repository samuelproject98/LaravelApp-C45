<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Atribut extends Model
{
    protected $table;
    protected $primaryKey = 'id_atribut';
    protected $fillable = [
        'kode_atribut',
        'nama_atribut',
    ];

    public function __construct()
    {
        $this->table = "table_" . Auth::user()->init_table . "_atribut";
    }
}
