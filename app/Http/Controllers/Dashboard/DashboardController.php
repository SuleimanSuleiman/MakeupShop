<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Analytics()
    {
        return view('Admin.dashboard.dashboard');
    }

    public function CRM()
    {
        return "CRM";
    }

    public function eCommerce()
    {
        return "commerce";
    }
}