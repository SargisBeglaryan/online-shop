@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Physical Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-success" href="{{route('physical-products.create')}}" role="button">Create</a>

                    <div class="mt-4">{{ __('Physical products List Table!') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
