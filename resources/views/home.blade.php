@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-light text-center" href="">
                        <img src="{{ asset('images/icons/discount.svg') }}" class="svg category_logo" width="40" height="40">
                        <p class="m-0">{{__('categories.discount')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-light text-center" href="">
                        <img src="{{ asset('images/icons/wine.svg') }}" class="svg category_logo" width="40" height="40">
                        <p class="m-0 ">{{__('categories.alkogol')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-light text-center" href="">
                        <img src="{{ asset('images/icons/pipe.svg') }}" class="svg category_logo" width="40" height="40">
                        <p class="m-0">{{__('categories.sigarety')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-light text-center" href="">
                        <img src="{{ asset('images/icons/diamond.svg') }}" class="svg category_logo" width="40" height="40">
                        <p class="m-0">{{__('categories.jewelry')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-light text-center" href="">
                        <img src="{{ asset('images/icons/perfume.svg') }}" class="svg category_logo" width="40" height="40">
                        <p class="m-0">{{__('categories.perfumery')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-light text-center" href="">
                        <img src="{{ asset('images/icons/coffee-bean.svg') }}" class="svg category_logo" width="40" height="40">
                        <p class="m-0">{{__('categories.coffee')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-light text-center" href="">
                        <img src="{{ asset('images/icons/wristwatch.svg') }}" class="svg category_logo" width="40" height="40">
                        <p class="m-0">{{__('categories.accessories')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-light text-center" href="">
                        <img src="{{ asset('images/icons/gift.svg') }}" class="svg category_logo" width="40" height="40">
                        <p class="m-0">{{__('categories.gift')}}</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
