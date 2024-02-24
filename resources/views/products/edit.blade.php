<head>
<link rel="icon" type="image/x-icon" href="{{ asset('/import/favicon_io/favicon.ico') }}">
</head>

<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Product</h3>
      <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name"
            value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
          <label for="image_url">Image URL</label>
          <input type="text" class="form-control" id="image_url" name="image_url"
            value="{{ $product->image_url }}" required>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" step="0.01" class="form-control" id="price" name="price"
            value="{{ $product->price }}" required>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Product</button>
      </form>
    </div>
  </div>
</div>