@extends('frontend.master')
@section('content')

<div class="container-width" style="margin-top:100px;">
  <!-- Category Cards as Tabs -->
  <div class="row mb-4" id="categoryCardTab" role="tablist">
    @foreach($categories as $category)
      <div class="col-auto">
        <button class="category-card-tab card p-2 @if(isset($activeCategoryId) && $activeCategoryId == $category->id) active-card @endif" id="tab-{{ $category->id }}" data-bs-toggle="tab" data-bs-target="#cat-{{ $category->id }}" type="button" role="tab" aria-controls="cat-{{ $category->id }}" aria-selected="{{ (isset($activeCategoryId) && $activeCategoryId == $category->id) ? 'true' : 'false' }}" style="min-width:120px;cursor:pointer;box-shadow:0 2px 8px rgba(0,0,0,0.05);border:@if(isset($activeCategoryId) && $activeCategoryId == $category->id)2px solid #C2F0C2;@else 1px solid #eee;@endif">
          <div class="card-body text-center p-2">
            <img src="{{ asset($category->image ?? 'frontend/images/subscribe.png') }}" alt="{{ $category->name }}" style="width:40px;height:40px;object-fit:cover;border-radius:8px;">
            <div class="mt-2 fw-bold">{{ $category->name }}</div>
          </div>
        </button>
      </div>
    @endforeach
  </div>
  <!-- Tab Content -->
  <div class="tab-content" id="categoryTabContent" style="margin-top:20px;">
    @foreach($categories as $category)
      <div class="tab-pane fade @if(isset($activeCategoryId) && $activeCategoryId == $category->id) show active @endif" id="cat-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{ $category->id }}">
        <div class="row">
          @forelse(($category->foods ?? []) as $food)
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <img src="{{ asset($food->image) }}" class="card-img-top" alt="{{ $food->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $food->name }}</h5>
                  <p class="card-text">{{ $food->ingredients }}</p>
                  <p class="card-text fw-bold">${{ $food->offerPrice ?? $food->price }}</p>
                  <button class="add-to-cart-btn" data-id="{{ $food->id }}" data-name="{{ $food->name }}" data-price="{{ $food->offerPrice ?? $food->price }}" data-image="{{ asset($food->image) }}">
                    <i class="fa-solid fa-cart-plus"></i> Add to Cart
                  </button>
                </div>
              </div>
            </div>
          @empty
            <div class="col-12"><p>No items found in this category.</p></div>
          @endforelse
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection