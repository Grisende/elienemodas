<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class DeleteClientData extends Controller
{

    public function __invoke(): Response
    {
        return Inertia::render('Clients/Index');
    }

}
