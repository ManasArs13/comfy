<div class="container">
    <div class="row justify-content-center">
        <h1 style="text-align:center;">{{ $title }}</h1>
        <div class="col-10">
            <div class="row row-cols-2 row-cols-md-3 g-4 justify-content-center mb-5">

                @foreach ($products as $product)
                <div class="col a_card">
                    <a href="{{ route('product', [ 'id' => $product->id]) }}">
                        <div class="card" style="border:none;">
                            <img src="{{asset( 'storage/'.$product->avatar)}}" class="card-img-top" alt="{{ $product -> name }}" style="border-bottom: 1px solid;">
                            <div class="card-body" style="text-align:center;">
                                <h5 class="card-title" style="min-height: 5rem;">{{ $product -> name }}</h5>
                                <h5 class="card-text" style="font-weight:bold">{{ $product -> price }} р.</h5>
                                <a href="{{ route('order', [ 'id' => $product->id ])}}" class="btn btn-warning w-100 mt-3">Заказать</a>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>