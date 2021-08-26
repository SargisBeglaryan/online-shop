<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Collection;

interface OrderRepository {

    public function checkout(Request $request): void;

}
