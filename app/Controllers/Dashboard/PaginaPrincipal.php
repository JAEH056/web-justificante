<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class PaginaPrincipal extends BaseController
{
    public function index(): string
    {
        return view('Dashboard/pagina_principal');
    }
}
