<div class="container-fluid">
    <div class='row'>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="btn-group m-1" role="group" aria-label="Basic example">
                    <a href="{{ route('home')}}" type="button" class="btn btn-warning">Перейти на основной сайт</a>
                </div>
                <div class="btn-group m-1" role="group" aria-label="Basic example">
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <button type="submit" class="btn btn-danger">ВЫХОД</a>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>