<div class="container">
  <div class="row justify-content-center">
    <div class="col-10 mt-5">
      <div class="row">
        <div class="col-6">
          <div class="row">
            <img src="{{asset( 'storage/'.$product->avatar)}}" id="myImg" class="w-100" alt="{{ $product->name }}">
          </div>
          <div class="row">
            <div class="col-12">
              <div class="row">
                @if ($product->img1)
                <div class="col-4">
                  <img src="{{asset( 'storage/'.$product->img1)}}" id="myImg1" class="w-100" alt="{{ $product->name }}">
                </div>
                @endif
                @if ($product->img2)
                <div class="col-4">
                  <img src="{{asset( 'storage/'.$product->img2)}}" id="myImg2" class="w-100" alt="{{ $product->name }}">
                </div>
                @endif
                @if ($product->img3)
                <div class="col-4">
                  <img src="{{asset( 'storage/'.$product->img3)}}" id="myImg3" class="w-100" alt="{{ $product->name }}">
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-5 offset-1">
          <h3 class="card-title" style="min-height:5rem;border-bottom: 1px solid;;">{{ $product->name }}</h3>
          <h3 class="card-text mb-5" style="font-weight:bold">{{ $product->price }} р.</h3>
          <br>
          <p>{{ $product->description }}</p>
          <a href="{{ route('order', [ 'id' => $product->id ])}}" class="btn btn-warning w-100 mt-3">Заказать</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>