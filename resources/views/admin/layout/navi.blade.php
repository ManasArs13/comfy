<div class="col-3">
    <ul class="nav flex-column mt-4">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('admin')}}" style="color:black">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}" style="color:black">Категории</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}" style="color:black">Продукты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('servic.index') }}" style="color:black">Настройки</a>
        </li>
    </ul>
</div>