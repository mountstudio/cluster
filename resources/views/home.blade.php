@extends('layouts.app')

@section('content')
    @include('_partials._categories', ['fixed' => true])
    <div>
        <a href="{{ route('panorama') }}">Панорама</a>
    </div>
@endsection
