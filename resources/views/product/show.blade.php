@extends('layouts.app')
@section('title', $viewData['title'])
{{-- @section('subtitle', $viewData['subtitle']) --}}

@section('content')
<div class="card mb-3">
<div class="row g-0">
<div class="col-md-4">
<img src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}"
class="img-fluid rounded-start">
</div>
<div class="col-md-8">
{{-- <div class="card-body">
<h5 class="card-title">
{{ $viewData['product']['name'] }} ({{ $viewData['product']['price'] }})
</h5>
<p class="card-text">{{ $viewData['product']['description'] }}</p>
<p class="card-text"><small class="text-muted">Add to Cart</small></p>
</div> --}}
<div class="card-body">
    {{-- <h5 class="card-title">
    {{ $viewData['product']['name'] }}
    (${{ $viewData['product']['price'] }})
    </h5>
    <p class="card-text">{{ $viewData['product']['description'] }}</p> --}}
    <h5 class="card-title">
        {{ $viewData["product"]->getName() }}
        (${{ $viewData["product"]->getPrice() }})
        <p class="card-text">{{ $viewData["product"]->getDescription() }}</p>
    {{-- <p class="card-text"><small class="text-muted">Add to Cart</small></p> --}}
    <p class="card-text">
        <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
        <div class="row">
        @csrf
        <div class="col-auto">
        <div class="input-group col-auto">
        <div class="input-group-text">Quantity</div>
        <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
        </div>
        </div>
        <div class="col-auto">
        <button class="btn bg-primary text-white" type="submit">Add to cart</button>
        
        </div>
        </div>
        </form>
        <p class="card-text"><div>.Kết nối: Đầu thu USB Receiver</div> 
            <div>.Khoảng cách kết nối: 10 m</div>
           <span>.Loại pin: 1 viên pin AA</span> 
          </p>
        </p>
    </div>
    
</div>
</div>
</div>
@endsection