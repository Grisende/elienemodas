<?php

namespace App\Http\Controllers\Dashboard;

use App\Domain\Application\Dashboard\GetDashboard;
use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class GetDashboardData extends Controller
{

    public function __construct(
        private readonly GetDashboard $application
    )
    {
    }

    public function __invoke(): Response
    {

        $data = $this->application->getData();
        $data['title'] = 'DASHBOARD';

        return Inertia::render('Dashboard/Index', $data);
    }
}
