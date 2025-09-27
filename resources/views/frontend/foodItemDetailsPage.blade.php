@extends('frontend.master')
@section('content')
<div class="container-width" style="margin-top:100px;">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="p-4">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset($food->image) }}" alt="{{ $food->name }}" class="img-fluid rounded shadow" style="width:100%;height:400px;object-fit:cover;">
          </div>
          <div class="col-md-7">
            <h2 class="fw-bold mb-2">{{ $food->name }}</h2>
            <p class="mb-2"><strong>Ingredients:</strong> {{ $food->ingredients }}</p>
            <p class="mb-2"><strong>Category:</strong> {{ $food->category->name ?? '-' }}</p>
            <p class="mb-2"><strong>Price:</strong> <span class="text-success">${{ $food->offerPrice ?? $food->price }}</span></p>
            <div class="mt-3 d-flex gap-2 align-items-center">
                 <div class="quantity-selector d-flex align-items-center">
                   <button class="btn btn-outline-secondary qty-btn" type="button" onclick="changeQuantity(-1)">-</button>
                   <input type="number" class="form-control text-center" id="quantity" value="1" min="1" style="width: 60px; margin: 0 5px;">
                   <button class="btn btn-outline-secondary qty-btn" type="button" onclick="changeQuantity(1)">+</button>
                 </div>
                 <div class="cart-btn-position">
                   <button
                    class="add-to-cart-btn btn btn-success px-4"
                    style="min-width:180px; font-size:16px; background-color:#C2F0C2; border-color:#FFFF00; color:#222; height: 38px; align-self: center;"
                    data-id="{{ $food->id }}"
                    data-name="{{ $food->name }}"
                    data-price="{{ $food->offerPrice ?? $food->price }}"
                    data-image="{{ asset($food->image) }}"
                  >
                    <i class="fa-solid fa-cart-plus"></i> Add
                  </button>
                  </div>
               
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
        <div class="featured-header">
        <p class="title-shop">Popular Items</p>
        <button class="view-all-btn">View All</button>
      </div>

      <div class="col-md-12" style="margin-top: 28px;">
        <div class="row">
          @foreach($popularFood as $food)
            <div class="col-md-4 mb-3">
              <div class="card h-100" style="background-color:#C2F0C2">
                <img src="{{asset($food->image)}}" class="card-img-top" alt="" style="height:140px;object-fit:cover;">
                <div class="card-body">
                  <h5 class="card-title">{{$food->name}}</h5>
                  <p class="card-text">{{$food->ingredients}}</p>
                </div>
                <button 
                  class="add-to-cart-btn"
                  data-id="{{ $food->id }}"
                  data-name="{{ $food->name }}"
                  data-price="{{ $food->offerPrice ?? $food->price }}"
                  data-image="{{ asset($food->image) }}"
                >
                  <i class="fa-solid fa-cart-plus"></i> Add
                </button>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

<script>
  function changeQuantity(delta) {
    const qtyInput = document.getElementById('quantity');

    let currentQty = parseInt(qtyInput.value);
    
    currentQty += delta;
    if (currentQty < 1) currentQty = 1;
    qtyInput.value = currentQty;
  }
</script>
