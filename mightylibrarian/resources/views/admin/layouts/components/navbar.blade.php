@php use App\Http\Controllers\Menu; @endphp
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach(Menu::ITEMS as $item)
                    @php
                        $active = (request()->url() === route($item['route'])) ? 'text-bg-primary rounded-1' : '';
                    @endphp
                    <li class="nav-item">
                        <a class="nav-link {{$active}}" aria-current="page" href="{{route($item['route'])}}">{{__($item['label'])}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <form role="search">
            <input class="form-control" type="search" placeholder="{{__('Search')}}" aria-label="Search">
        </form>
    </div>
</nav>
