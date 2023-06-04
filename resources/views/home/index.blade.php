@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <div class="col-md-10 col-lg-3 mb-10">
        <img src="{{ asset('/img/pallete.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-10 col-lg-3 mb-10">
        <img src="{{ asset('/img/lipstik.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-10 col-lg-3 mb-10">
        <img src="{{ asset('/img/eyeshadow.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-10 col-lg-3 mb-10">
        <img src="{{ asset('/img/blush.png') }}" class="img-fluid rounded">
    </div>
</div>
@endsection
