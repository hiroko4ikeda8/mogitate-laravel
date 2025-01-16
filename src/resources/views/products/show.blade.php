<!-- show.blade.php -->
<h1>Product Details</h1>

<div>
    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100%; max-width: 600px;">
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
</div>