<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 pr-5 py-4 sm:block" style="text-align: right;">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="container">
            <div class="row justify-content-center">                
                @if ($products->count() == 0)
                    <div class="mt-5" style="font-size: 20px;">Not found</div>
                @endif
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card position-relative">
                            <img class='img-fluid' alt='article image' src="{{asset('img/product.png')}}">
                            <div class="card-body">
                                <div style="font-size: 20px;">{{ $product->name }}</div>
                                <p class="mt-2">{{ $product->name }}</p>
                            </div>
                            {{-- <a class="article-link" href="{{route('article.show', $article->id)}}"></a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-felx justify-content-center">

                {{ $products->links() }}

            </div>
        </div>
    </body>
</html>
