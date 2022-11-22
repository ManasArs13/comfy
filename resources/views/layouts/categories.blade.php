<div class="container" style="margin-top: 7rem;margin-bottom: 8rem;">
    
    <h1>КАТЕГОРИИ</h1>

    <div class="row row-cols-2 row-cols-md-4 g-4 mt-5">
        @foreach ($categories as $category)

        <a href="">
            <div class="hover-image-scale col" style="border-radius: 15px; height: 300px;background: #000;position:relative;">
                <div class="tekst_sverhu_kartinki" style="font-size: 15px;">{{ $category -> name}}</div>
                <img src="{{asset( 'storage/'.$category->img)}}" alt="{{asset( 'storage/'.$category->img)}}" class="hover-image-scale" style="opacity: 0.6;width: 500px">
                <div class="tekst_snizu_kartinki">Больше товаров</div>
            </div>
        </a>

        @endforeach
    </div>

</div>