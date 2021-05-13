<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function php()
    {
        return view('php');
    }

    public function db(Request $request)
    {
        $params = [];
        $result = '';
        if (strtolower($request->method()) == 'post') {
            $params = $request->only('host', 'user', 'password', 'database');

            try {
                $conn = mysqli_connect($params['host'], $params['user'], $params['password']);
                $result = ($conn->connect_error) ? 'Errore nella connessione' : 'Connessione avvenuta';
            } catch (\Throwable $th) {
                $result = 'Errore nella connessione';
            }
        }
        $params = array_merge($params, compact('result'));
        return view('db', $params);
    }
}
