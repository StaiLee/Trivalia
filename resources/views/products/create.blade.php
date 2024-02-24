<head>
<link rel="icon" type="image/x-icon" href="{{ asset('/import/favicon_io/favicon.ico') }}">
</head>
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Add a Product</h3>
      <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
          <label for="image_url">Image URL</label>
          <input type="url" class="form-control" id="image_url" name="image_url">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create Product</button>
      </form>
    </div>
  </div>
</div>