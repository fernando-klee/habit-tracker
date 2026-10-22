<?php

namespace App\Http\Controllers;


class SiteController extends Controller
{
    public function index() {
        $name = 'Fernando';
        $habits = ['Ler', 'Correr','Estudar', 'Treinar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
