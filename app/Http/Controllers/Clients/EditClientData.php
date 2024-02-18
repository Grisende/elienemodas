<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EditClientData extends Controller
{

    public function __invoke(Request $request): Response
    {
        return Inertia::render('Clients/Form', [
            'title' => 'EDITAR CLIENTE',
            'button-name' => 'EDITAR'
        ]);
    }

}
