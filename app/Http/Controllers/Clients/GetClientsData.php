<?php

namespace App\Http\Controllers\Clients;

use App\Domain\Application\Clients\GetClients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class GetClientsData extends Controller
{
    public function __construct(
        protected readonly GetClients $application
    )
    {
    }

    public function __invoke(Request $request): Response
    {
        $page = $request->input('page');

        if (is_null($page)){
            $page = 1;
        }

        $data = $this->application->getData($page);
        $count = $this->application->countData();

        return Inertia::render('Clients/Index', [
            'title' => 'CLIENTES',
            'fields' => [
                'ID',
                'NOME',
                'TELEFONE',
            ],
            'objects' => $data,
            'indexes' => [
              'id',
              'name',
              'phone'
            ],
            'get-route' => 'clients.index',
            'edit-route' => 'clients.edit',
            'delete-route' => 'clients.delete',
            'page' => (int)$page,
            'count' => $count
        ]);
    }
}
