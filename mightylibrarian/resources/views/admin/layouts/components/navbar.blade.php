<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('dashboard')}}">{{__('Dashboard')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('dashboard.authors.list')}}">{{__('Authors')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('categories')}}">{{__('Categories')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('publishers')}}">{{__('Publishers')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('books')}}">{{__('Books')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('book-issues')}}">{{__('Book Issues')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('students')}}">{{__('Students')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('reports')}}">{{__('Reports')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('settings')}}">{{__('Settings')}}</a>
                </li>
            </ul>
        </div>
        <form role="search">
            <input class="form-control" type="search" placeholder="{{__('Search')}}" aria-label="Search">
        </form>
    </div>
</nav>
