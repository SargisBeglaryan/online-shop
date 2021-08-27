@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert mb-2 alert-success alert-dismissible fade show" role="alert">
                          <strong>{{ session('success') }}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert mb-2 alert-danger alert-dismissible fade show" role="alert">
                          <strong>{{ session('error') }}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif

                    @if($userOrders->count() == 0)
                        <div class="mt-5" style="font-size: 20px;">No orders yet</div>
                    @else
                        @foreach($userOrders as $order)
                        <div class="order-content mt-2 mb-2">
                            <div style="font-size: 20px;"><strong>Order Date: {{$order->order_date}}</strong></div>
                            <table id="cart" class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width:50%">Product</th>
                                        <th style="width:10%">Price</th>
                                        <th style="width:10%">Tax</th>
                                        <th style="width:8%">Quantity</th>
                                        <th style="width:22%" class="text-center">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(json_decode($order->products) as $product)
                                        <tr>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <h4 class="nomargin">{{ $product->name }}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Price">${{ $product->price }}</td>
                                            <td data-th="Tax">${{ $product->tax }}</td>
                                            <td data-th="Quantity">
                                                {{ $product->quantity }}
                                            </td>
                                            <td class="text-center">{{ $product->subtotal }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-right"><h3><strong>Total ${{ $order->total }}</strong></h3></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
