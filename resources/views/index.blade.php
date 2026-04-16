<a href="/products/create">Add Product</a>

@foreach($products as $product)
    <p>{{ $product->name }} - {{ $product->price }}</p>

    <a href="/products/{{ $product->id }}/edit">Edit</a>

    <form action="/products/{{ $product->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach