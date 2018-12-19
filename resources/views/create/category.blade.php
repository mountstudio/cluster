<form action="{{ route('storecategory') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name_of_product">Название категории</label>
        <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name_of_product" placeholder="Название продукта" value="{{ old('name') }}">
        @if($errors->has('name'))
            <span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
        @endif
    </div>
    <div class="form-group">
        <label for="image_of_product">Картинка продукта</label>
        <input type="hidden" name="edit" value="1">
        <input name="image" type="file" id="image_of_product" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}">
        @if($errors->has('image'))
            <span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('image') }}</strong>
				</span>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>