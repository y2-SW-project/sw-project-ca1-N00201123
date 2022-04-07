@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (count($products)=== 0)
                        <p>There are no Products!</p>
                    @else
                    <table id="table-products" class="table table-hover">
                        <thead>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Likes</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr data-id="{{ $product->id }}">
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->date }}</td>
                                <td>{{ $product->likes }}</td>
                                <td>{{ $product->price }}</td>

                                <td>
                                    <a href="{{ route('user.products.show', $product->id) }}" class="btn btn-primary">View</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection