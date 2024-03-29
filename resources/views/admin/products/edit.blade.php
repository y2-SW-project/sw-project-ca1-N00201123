@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit Product
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.products.update', $product->id)}}">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <input type="hidden" name="_method" value="PUT">

              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $product->title) }}" />
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $product->description) }}" />
              </div>
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $product->date) }}" />
              </div>
              <div class="form-group">
                <label for="likes">Likes</label>
                <input type="text" class="form-control" id="likes" name="likes" value="{{ old('likes', $product->likes) }}" />
              </div>
              <div class="form-group">
                <label for="price">price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" />
              </div>
              

              <a href="{{ route('admin.products.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection