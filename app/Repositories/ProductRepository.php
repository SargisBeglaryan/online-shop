<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\DigitalProduct;
use App\Models\PhysicalProduct;
use Illuminate\Support\Collection;

interface ProductRepository {

    public function getProducts(): ?LengthAwarePaginator;

    public function getProductById(int $id): ?Product;

    public function getDigitalProducts(): ?LengthAwarePaginator;

    public function getDigitalProductById(int $id): ?DigitalProduct;

    public function getPhysicalProducts(): ?LengthAwarePaginator;

    public function getPhysicalProductById(int $id): ?PhysicalProduct;

    public function createProduct(Request $request): void;

    public function updateProduct(Request $request, int $id): void;

}
