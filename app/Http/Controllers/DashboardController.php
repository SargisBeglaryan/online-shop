<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\OrderRepository;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $orderService;

    public function __construct(OrderRepository $orderService) {        

        $this->orderService = $orderService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userOrders = $this->orderService->getUserOrdersList();
        return view('home')->with(compact('userOrders'));
    }
}
