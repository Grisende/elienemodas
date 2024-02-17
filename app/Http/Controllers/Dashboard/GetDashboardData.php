<?php

namespace App\Http\Controllers\Dashboard;

use App\Domain\Application\Dashboard\GetData;
use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class GetDashboardData extends Controller
{

    public function __construct(
        private readonly GetData $application
    )
    {
    }

    public function __invoke(): Response
    {

        $data = $this->application->getData();

        return Inertia::render('Dashboard/Index', $data);
    }
}
