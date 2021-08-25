@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Digital Products') }}</div>

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
                    <a class="btn btn-success" href="{{route('digital-products.create')}}" role="button">Create</a>

                    <div class="mt-4">{{ __('Digital products List Table!') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
