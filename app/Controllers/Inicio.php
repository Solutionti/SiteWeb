<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index(): string {
        return view('paginas/inicio');
    }

    public function historia(): string {
        return view('paginas/historia');
    }

    public function galeria(): string {
        return view('paginas/galeria');
    }

    public function campeonatos(): string {
        return view('paginas/campeonatos');
    }

    public function eventos(): string {
        return view('paginas/eventos');
    }

    public function contacto(): string {
        return view('paginas/contacto');
    }
}
