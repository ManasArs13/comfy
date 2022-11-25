<div class="container mb-5">
    <div class="row">
        <ul class="nav justify-content-center p-2" style="border-bottom:1px solid;">

            @foreach ($categories as $category)
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('catalog', [ 'id' => $category->id ]) }}" style="color:black">{{ $category->name }}</a>
            </li>
            @endforeach

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('catalog', [ 'id' => 'all']) }}" style="color:black">Все продукты</a>
            </li>

        </ul>
    </div>
</div>