{{-- Main Slider --}}
<section>
  <div class="container">
    <div class="slide">
      @foreach($slider as $item)
        <div class="item" style="background-image: url('{{ asset($item->image) }}');">
          <div class="content">
            <div class="name">{{ $item->title }}</div>
            <div class="des">{{ $item->subTitle }}</div>
            <button>See More</button>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>