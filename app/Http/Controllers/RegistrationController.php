<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class RegistrationController extends Controller
{
    public function index()
    {
        $datas = [
            'title' => 'Register',
        ];

        return view('pages.auth.register', $datas);
    }

    public function createTable($table1 = "", $table2 = "", $table3 = "")
    {
        $databaseName = Config::get('database.connections');
        $namaDatabase = $databaseName['mysql']['database'];

        if ($table1 != "") {
            $createTable1 = "CREATE TABLE `$namaDatabase`.`$table1` ( 
                `id_atribut` INT NOT NULL AUTO_INCREMENT , 
                `kode_atribut` VARCHAR(255) NOT NULL , 
                `nama_atribut` VARCHAR(255) NOT NULL , 
                `created_at` DATETIME NOT NULL , 
                `updated_at` DATETIME NOT NULL , 
                PRIMARY KEY (`id_atribut`)) ENGINE = InnoDB";

            DB::statement($createTable1);
        }

        if ($table2 != "") {
            $createTable2 = "CREATE TABLE `$namaDatabase`.`$table2` ( 
                `id_nilaiatribut` INT NOT NULL AUTO_INCREMENT , 
                `kode_atribut` VARCHAR(255) NOT NULL , 
                `nama_atribut` VARCHAR(255) NOT NULL , 
                `nama_nilaiatribut` VARCHAR(255) NOT NULL , 
                `created_at` DATETIME NOT NULL , 
                `updated_at` DATETIME NOT NULL , 
                PRIMARY KEY (`id_nilaiatribut`)) ENGINE = InnoDB";

            DB::statement($createTable2);
        }

        if ($table3 != "") {
            $createTable3 = "CREATE TABLE `$namaDatabase`.`$table2` ( 
                `id_dataset` INT NOT NULL AUTO_INCREMENT , 
                `nomor_urut` VARCHAR(255) NOT NULL , 
                `nama_atribut` VARCHAR(255) NOT NULL , 
                `value_atribut` VARCHAR(255) NOT NULL , 
                `created_at` DATETIME NOT NULL , 
                `updated_at` DATETIME NOT NULL , 
                PRIMARY KEY (`id_dataset`)) ENGINE = InnoDB";

            DB::statement($createTable3);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email|email:dns',
            'fullname' => 'required',
            'selectQuestion' => 'required',
            'answerQuestion' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        //Creating Table
        $idUnik = uniqid();

        $namatabel1 = "table_" . $idUnik . "_atribut";
        $namatabel2 = "table_" . $idUnik . "_nilaiatribut";
        $namatabel3 = "table_" . $idUnik . "_dataset";

        if (!Schema::hasTable($namatabel1)) {
            $this->createTable($namatabel1, "");
        }

        if (!Schema::hasTable($namatabel2)) {
            $this->createTable("", $namatabel2);
        }

        if (!Schema::hasTable($namatabel3)) {
            $this->createTable("", $namatabel3);
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        Users::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'fullname' => $validatedData['fullname'],
            'init_table' => $idUnik,
            'safety_question' => $validatedData['selectQuestion'],
            'answer_question' => $validatedData['answerQuestion'],
            'password' => $validatedData['password'],
        ]);

        return redirect('/login')->with('success', 'Selamat! Anda Berhasil Mendaftarkan Akun, Silahkan Login.');
    }
}
