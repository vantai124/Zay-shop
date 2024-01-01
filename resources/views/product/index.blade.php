@extends('layouts.app')
@section('title', $viewData['title'])
{{-- @section('subtitle', $viewData['subtitle']) --}}

@section('content')
<div>
  <div class="pt-3">
    <marquee behavior="scroll" direction="left" scrollamount="5">
     <h3 class="text-uppercase">Flash sale mua 1 tang 1 <span class="colorbackground">ngay 28 thang 9 nam 2023</span> </h3> 
      </marquee>
    </div>
    <h1 class=" text-center text-uppercase text-dark mb-0 Portfolio2"><strong> Portfolio</strong></h1>

    </div>

<div class="row">
    @foreach ($viewData['products'] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
    <img src="{{ asset('/storage/' . $product->getImage()) }}"
    class="card-img-top">
    <div class="card-body text-center">
    <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
    class="btn btn-outline-success ">
    {{ $product->getName() }}</a>
    </div>
    </div>
    </div>
    @endforeach
    </div>
@endsection