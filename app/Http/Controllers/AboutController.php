<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $tim = [
    [
        'nama' => 'M. Rafli Dwi Saputra',
        'nim' => '3312501106',
        'foto' => 'rafli.jpg',
    ],
    [
        'nama' => 'Albertzon Ayomi',
        'nim' => '3312501119',
        'foto' => 'ebet.jpg',
    ],
    [
        'nama' => 'Timothy Pryan',
        'nim' => '3312501098',
        'foto' => 'moti.jpg',
    ],
];

        return view('about', compact('tim'));
    }
}