@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Product: {{ $product->title }}</div>

                <div class="card-body">
                   <table id="table-products" class="table table-hover">
                       <tbody>
                       <tr>
                        <td rowspan="8"><img src="{{ asset('storage/images/' . $product->image_location) }}" width="150"/></td>
                       </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{ $product->title }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $product->description }}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>{{ $product->date }}</td>
                            </tr>
                            <tr>
                                <td>Likes</td>
                                <td>{{ $product->likes }}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>{{ $product->price }}</td>
                            </tr>
                       </tbody>
                   </table>

                   <a href="{{ route('user.products.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection