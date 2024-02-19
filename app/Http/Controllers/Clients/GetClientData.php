<?php

namespace App\Http\Controllers\Clients;

use App\Domain\Clients\Application\GetClientByTerm;
use App\Domain\Clients\Entity\Clients;
use App\Domain\Clients\Presenter\ClientsPresenter;
use App\Domain\Clients\Repository\Contracts\ClientsRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class GetClientData extends Controller
{

    public function __construct(
        protected readonly ClientsRepositoryInterface $repository,
        protected readonly Clients                    $entity,
        protected readonly ClientsPresenter           $presenter,
        protected readonly GetClientByTerm $application
    )
    {
    }

    public function __invoke(Request $request): Response
    {

        $data = $this->application->getDataById($this->entity, $this->repository, 'client_id', $request->input('id'));

        $response = $this->presenter->response($data);


        return Inertia::render('Clients/Form', [
            'title' => 'EDITAR CLIENTE',
            'button-name' => 'EDITAR',
            'objects' => $response[array_key_first($response)]
        ]);
    }

}
