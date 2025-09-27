@extends('frontend.master')
@section('content')
    <div class="container-width col-md-12" style="margin-top:100px">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold mb-4 text-center">Checkout</h2>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-md-8">
                <div id="checkout-cart-items" class="rounded shadow p-4" style="width:100%;min-height:400px;background:#f8f9fa;">
                    <!-- Cart items will be rendered here -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="checkout-form-card rounded shadow p-4" style="background:#fff;">
                    <h4 class="mb-4 text-center">Customer Details</h4>
                    <form id="checkout-form" action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"><i class="fas fa-user"></i> Full Name</label>
                            <input type="text" name="name" id="name" class="form-control checkout-input" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label"><i class="fas fa-phone"></i> Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control checkout-input" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label"><i class="fas fa-map-marker-alt"></i> Delivery Address</label>
                            <textarea name="address" id="address" class="form-control checkout-input" placeholder="Enter your delivery address" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn checkout-submit-btn w-100"><i class="fas fa-check"></i> Place Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
@endsection
