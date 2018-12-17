<div class="bg-dark text-light sticky-top">
    <div class="container-fluid">
        <div class="row justify-content-around align-items-center">

            <div class="col d-flex justify-content-center" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="nav mx-auto">
                    <li class="nav-item d-flex">
                        <a href="/" class="nav-link text-light">{{ __('Главная') }}</a>
                    </li>
                    <li class="nav-item d-flex">
                        <a href="" class="nav-link text-light">{{ __('О нас')  }}</a>
                    </li>
                    <li class="nav-item d-flex">
                        <a href="" class="nav-link text-light">{{ __('Контакты')  }}</a>
                    </li>
                </ul>


                <!-- Right Side Of Navbar -->
                <ul class="nav">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item d-flex">
                            <a class="btn btn-dark align-self-center py-0 nav-link text-light" href="{{ route('login') }}">{{ __('main.signin') }}</a>
                        </li>
                        <li class="nav-item d-flex">
                            <a class="btn btn-dark align-self-center py-0 nav-link text-light" href="{{ route('register') }}">{{ __('main.register') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown d-flex">
                            <a id="navbarDropdown" class="nav-link align-self-center font-weight-bold text-light dropdown-toggle text-capitalize" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">
                                    Change password
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('main.signout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </ul>

                <!-- Language switcher -->
                <ul class="nav">
                    <li class="nav-item dropdown d-flex">
                    </li>
                </ul>
            </div>
            <div class="col-auto text-right d-flex justify-content-end">
                <a href="tel:+996 (700) 000 000" class="py-2 mx-2 text-light font-weight-normal">+996 (700) 000 000</a>
                <a href="tel:+996 (555) 000 000" class="py-2 mx-2 text-light font-weight-normal">+996 (555) 000 000</a>
            </div>
        </div>
    </div>
</div>