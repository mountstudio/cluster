<div class="bg-dark py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="nav justify-content-center">
                @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-light text-center" href="">
                        <img src="images/icons/{{$category->img_path}}" class="svg category_logo" width="40" height="40">
                        <p class="m-0">{{$category->name}}</p>
                    </a>
                </li>
                    @endforeach
            </ul>
        </div>
    </div>
</div>