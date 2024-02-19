<?php

namespace App\Domain\Clients\Presenter;

class ClientsPresenter
{

    public function response(array $params): array
    {
        return array_map(function ($data) {
            return [
                'id' => $data['client_id'],
                'name' => $data['client_name'],
                'phone' => $data['client_phone']
            ];
        }, $params);
    }

}
