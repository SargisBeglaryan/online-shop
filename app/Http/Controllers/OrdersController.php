<?php

namespace App\Http\Controllers;

use App\Helpers\ErrorMessage;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Repositories\OrderRepository;

class OrdersController extends Controller
{
    protected $orderService;

    public function __construct(OrderRepository $orderService) {        

        $this->orderService = $orderService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function checkout(Request $request) {
        
        DB::beginTransaction();
        try {

            $this->orderService->checkout($request);
            DB::commit();
            
            return redirect()->route('dashboard.index')->with('success', 'Successfully updated');
        } catch (\Throwable $ex) {
            dd($ex->getMessage());
            DB::rollback();
            return redirect()->route('dashboard.index')->with('error', ErrorMessage::UNKNOWN_ERROR);
        }
    }
}
