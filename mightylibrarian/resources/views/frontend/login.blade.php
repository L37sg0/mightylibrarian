<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/admin.logo.png')}}" alt="BANNER" width="300" height="34">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" hidden="" aria-current="page" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled">Disabled</a>--}}
{{--                </li>--}}
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 my-2" type="search" placeholder="Search" aria-label="Search">
{{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
            </form>
            <div class="d-flex">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#loginForm">
                    Login
                </button>

                <!-- Modal -->
                <div class="modal fade" id="loginForm" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-4 shadow">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form role="form"
                                  class="form-hidden"
                                  action="{{route('login')}}"
                                  method="post">
                                @csrf
                                <div class="modal-body p-5 pt-0">
                                    <div class="form-floating mb-3">

                                        <x:text-input id="username"
                                                      name="name"
                                                      :label="__('Username')"
                                                      placeholder="Username."
                                                      value=""
                                        />

                                        <x:password-input id="password"
                                                      name="password"
                                                      :label="__('Password')"
                                                      placeholder="password"
                                                      value=""
                                        />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-warning me-2" data-bs-toggle="modal" data-bs-target="#registerForm">
                    Register
                </button>

                <!-- Modal -->
                <div class="modal fade" id="registerForm" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form role="form"
                                  class="form-hidden"
                                  action="{{route('register')}}"
                                  method="post">
                                @csrf
                                <div class="modal-body p-5 pt-0">
                                    <div class="form-floating mb-3">

                                        <x:text-input id="username"
                                                      name="name"
                                                      :label="__('Username')"
                                                      placeholder="Username."
                                                      value=""
                                        />

                                        <x:email-input id="email"
                                                      name="email"
                                                      :label="__('Email')"
                                                      placeholder="Email."
                                                      value=""
                                        />

                                        <x:password-input id="password"
                                                          name="password"
                                                          :label="__('Password')"
                                                          placeholder="password"
                                                          value=""
                                        />

                                        <x:password-input id="password.confirmation"
                                                          name="password.confirmation"
                                                          :label="__('Confirm Password')"
                                                          placeholder="password"
                                                          value=""
                                        />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</nav>
