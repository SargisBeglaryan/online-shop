<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class HomeController extends Controller
{
    protected $productService;

    public function __construct(ProductRepository $productService) {        

        $this->productService = $productService;
    }

    public function index() 
    {

        $products = $this->productService->getProducts();

        return view('welcome')->with(compact('products'));
    }
}
