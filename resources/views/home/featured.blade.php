<section class="featured">
  <h2>Discover Our Featured Properties</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

  <div class="property-grid">
    @foreach($properties as $property)
      <div class="property-card">
        <img src="{{ asset('images/rumah.jpg') }}">
        <div class="card-body">
          <span class="badge">Featured</span>
          <h3>{{ $property->name }}</h3>
          <p>{{ $property->location }}</p>
          <strong>Rp {{ number_format($property->price) }}</strong>
        </div>
      </div>
    @endforeach
  </div>
</section>