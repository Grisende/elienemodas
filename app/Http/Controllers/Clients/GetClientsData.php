<?php

namespace App\Http\Controllers\Clients;

use App\Domain\Clients\Application\GetClients;
use App\Domain\Clients\Entity\Clients;
use App\Domain\Clients\Presenter\ClientsPresenter;
use App\Domain\Clients\Repository\Contracts\ClientsRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class GetClientsData extends Controller
{
    public function __construct(
        protected readonly Clients                    $entity,
        protected readonly ClientsPresenter           $presenter,
        protected readonly ClientsRepositoryInterface $repository,
        protected readonly GetClients                 $application,
    )
    {
    }

    public function __invoke(Request $request): Response
    {
        $page = $request->input('page');

        if (is_null($page)) {
            $page = 1;
        }

        $data = $this->application->getData($this->entity, $this->repository, $page);
        $count = $this->application->countData($this->entity, $this->repository);

        $response = $this->presenter->response($data);

        return Inertia::render('Clients/Index', [
            'title' => 'CLIENTES',
            'fields' => [
                'ID',
                'NOME',
                'TELEFONE',
            ],
            'objects' => $response,
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
