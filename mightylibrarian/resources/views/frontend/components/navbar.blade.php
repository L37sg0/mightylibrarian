<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h1 class="navbar-brand" href="#">PenchevAuto - Автомивка</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Начало</a>
                </li>
                @foreach($content as $page => $pageContent)
                <li class="nav-item">
                    <a class="nav-link" href="#{{$page}}">{{$pageContent[App\Http\Controllers\Controller::PAGE_ELEMENT_TITLE]}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>