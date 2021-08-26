<?php


namespace App\Services;


use App\Repositories\ProductRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\DigitalProduct;
use App\Models\PhysicalProduct;
use Illuminate\Support\Collection;
use App\Helpers\ProductsHelper;

class ProductService implements ProductRepository {

    const TABLE_PATH = "App\Models\\";

    public function getProducts(): ?LengthAwarePaginator {
        $query = Product::with('productable');
        return $query->paginate(10);
    }

    public function getProductById(int $id): ?Product {
        return Product::with('productable')->findOrFail($id);
    }

    public function getDigitalProducts(): ?LengthAwarePaginator {

    }

    public function getDigitalProductById(int $id): ?DigitalProduct {

    }

    public function getPhysicalProducts(): ?LengthAwarePaginator {

    }

    public function getPhysicalProductById(int $id): ?PhysicalProduct {

    }

    public function createProduct(Request $request): void {

        $product = new Product();

        if ($request->type == ProductsHelper::DIGITAL_PRODUCTS) {

            $digitalProduct = new DigitalProduct();
            $digitalProduct->screen_size = $request->screen_size;
            $digitalProduct->is_touchable = isset($request->touchable) ? 1 : 0;
            $digitalProduct->saveOrFail();

            $product->productable_id = $digitalProduct->id;
            $product->productable_type = self::TABLE_PATH . ProductsHelper::DIGITAL_PRODUCTS;
        } else {
            $physicalProduct = new PhysicalProduct();
            $physicalProduct->dimension = $request->dimension;
            $physicalProduct->saveOrFail();

            $product->productable_id = $physicalProduct->id;
            $product->productable_type = self::TABLE_PATH . ProductsHelper::PHYSICAL_PRODUCTS;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->saveOrFail();
        
        
    }

    public function updateProduct(Request $request, int $id): void {

    }
}
