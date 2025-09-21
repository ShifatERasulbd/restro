@if($FeaturedFood->count() > 0)
<!-- Featured Items -->
<div class="container-width">
  <section>
    <div class="featured-header">
      <h1 class="title-shop">Featured Items</h1>
      <button class="view-all-btn">View All</button>
    </div>

    <div class="main bd-grid">
      @foreach($FeaturedFood as $food)
        <article class="card">
          <div class="card__img">
            <img src="{{ asset($food->image) }}" alt="{{ $food->name }}">
          </div>
          <div class="card__name">
            <p>{{ $food->name }}</p>
          </div>
          <div class="card__precis">
            <a href="#" class="card__icon"><ion-icon name="heart-outline"></ion-icon></a>
            @if($food->offerPrice)
              <div>
                <span class="card__preci card__preci--before">${{ $food->price }}</span>
                <span class="card__preci card__preci--now">${{ $food->offerPrice }}</span>
              </div>
            @else
              <div>
                <span class="card__preci card__preci--now">${{ $food->price }}</span>
              </div>
            @endif
            <a 
              class="card__icon add-to-cart-btn"
              data-id="{{ $food->id }}"
              data-name="{{ $food->name }}"
              data-price="{{ $food->offerPrice ?? $food->price }}"
              data-image="{{ asset($food->image) }}"
            >
              <ion-icon name="cart-outline"></ion-icon>
            </a>
          </div>
        </article>
      @endforeach
    </div>
  </section>
</div>
@endif