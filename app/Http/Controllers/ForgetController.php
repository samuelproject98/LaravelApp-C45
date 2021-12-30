<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ForgetController extends Controller
{
    public function index()
    {
        $datas = [
            'title' => 'Forgot Password',
        ];

        return view('pages.auth.forget', $datas);
    }

    public function forget(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
            'selectQuestion' => 'required',
            'answerQuestion' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $users = DB::table('users')
            ->select('id')
            ->where('email', '=', $validatedData['email'])
            ->where('safety_question', '=', $validatedData['selectQuestion'])
            ->where('answer_question', '=', $validatedData['answerQuestion'])
            ->get();

        if ($users->isEmpty()) {
            return back()->with('error', 'Data gagal divalidasi oleh sistem.');
        } else {
            $users = DB::table('users')
                ->select('id')
                ->where('email', '=', $validatedData['email'])
                ->where('safety_question', '=', $validatedData['selectQuestion'])
                ->where('answer_question', '=', $validatedData['answerQuestion'])
                ->get();

            $validatedData['password'] = Hash::make($validatedData['password']);

            $data = json_decode(json_encode($users), true);

            DB::table('users')
                ->where('id', $data[0]['id'])
                ->update(['password' => $validatedData['password']]);

            return redirect('/login')->with('success', 'Password berhasil di reset. Silahkan Login.');
        }
    }
}
