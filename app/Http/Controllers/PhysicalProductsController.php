<?php

namespace App\Http\Controllers;

use App\Models\PhysicalProduct;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use Auth;

class PhysicalProductsController extends Controller
{
    protected $productService;

    public function __construct(ProductRepository $productService) {
        $this->middleware(function ($request, $next) {
            if (Auth::user()->isAdmin()) {
                return $next($request);
            }

            abort(403);
        });

        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.physical.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.physical.create');
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
     * @param  \App\Models\PhysicalProduct  $physicalProduct
     * @return \Illuminate\Http\Response
     */
    public function show(PhysicalProduct $physicalProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhysicalProduct  $physicalProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(PhysicalProduct $physicalProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhysicalProduct  $physicalProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhysicalProduct $physicalProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhysicalProduct  $physicalProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhysicalProduct $physicalProduct)
    {
        //
    }
}
