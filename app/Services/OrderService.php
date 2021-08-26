<?php


namespace App\Services;


use App\Repositories\OrderRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Collection;
use App\Helpers\ProductsHelper;
use Auth;
use Carbon\Carbon;
use Session;

class OrderService implements OrderRepository {

    public function checkout(Request $request): void {
        
        $products = [];

        if(session('cart')) {
            foreach(session('cart') as $id => $details) {
                $product = [];
                $product['name'] = $details['name'];
                $product['price'] = $details['price'];
                $product['quantity'] = $details['quantity'];
                $product['subtotal'] = '$' . ($details['price'] * $details['quantity']);
                $products[] = $product;
            }

            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->total = $request->total;
            $order->products = json_encode($products);
            $order->order_date = Carbon::now();
            $order->saveOrFail();

            Session::forget('cart');
        }

    }
}
