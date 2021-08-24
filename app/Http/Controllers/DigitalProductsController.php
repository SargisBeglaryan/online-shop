<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use Auth;

class DigitalProductsController extends Controller
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
        return view('products.digital.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.digital.create');
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
     * @param  \App\Models\DigitalProduct  $digitalProduct
     * @return \Illuminate\Http\Response
     */
    public function show(DigitalProduct $digitalProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DigitalProduct  $digitalProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(DigitalProduct $digitalProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DigitalProduct  $digitalProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DigitalProduct $digitalProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DigitalProduct  $digitalProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(DigitalProduct $digitalProduct)
    {
        //
    }
}
