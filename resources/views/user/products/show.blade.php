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

<div class="container mt-4 mb-4">
    <div class="row mt-3 mb-3">
        <div class="col-md-6 clol-lg-6">
            <div class="d-flex justify-content-end"><img src="{{ asset('storage/images/' . $product->image_location) }}" class="img-fluid" alt="cardimg" width="200"></div>
        </div>
        <div class="col-md-6 clol-lg-6">
          <p class="display-5 mb-1">{{ $product->title }}</p>
          <td class="display-4">{{ $product->description }}</td>
            <br>
          <td class="display-6">€{{ $product->price }}</td>
            <br>
        <td class="display-6">Release date: {{ $product->date }}</td>
            <br>
        <td class="display-6">Likes: {{ $product->likes }}</td>

        <nav class="center-me navbar navbar-expand-lg navbar-light d-flex">
            <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">1</a>
                   <li><a class="dropdown-item text-dark" href="#">2</a></li>
                   <li><a class="dropdown-item text-dark" href="#">3</a></li>
                   <li><a class="dropdown-item text-dark" href="#">4</a></li>
                   <li><a class="dropdown-item text-dark" href="#">5</a></li>
                   <li><a class="dropdown-item text-dark" href="#">6</a></li>
                   <li><a class="dropdown-item text-dark" href="#">7</a></li>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  </ul>
                </li>
              </ul>
            </div>
            </div>
            </nav>

            <h5>FREE Irish delivery on this product</h5>
          <div class="row">
            <div class="col-4">
              <!--Checkout Page-->
              <button class="btn btn-lg bg-danger text-white btn-outline-danger" type="submit">ADD TO BAG <i class="bi bi-bag-check-fill"></i></button> 
            </div>
            <div class="col-5">
              <button class="btn btn-lg text-black btn-outline-dark" type="submit">ADD TO LOVE LIST</button>
            </div>
            
          </div>
        </div>
    </div>
</div>

<div class="container">
      <nav class="center-me navbar navbar-expand-lg navbar-light bg-primary d-flex">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Description</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-dark" href="#">Stationary case</a></li>
                  <li><a class="dropdown-item text-dark" href="#">Blue</a></li>
                  <li><a class="dropdown-item text-dark" href="#">Roll up design</a></li>
                  <li><a class="dropdown-item text-dark" href="#">Zipped pocket</a></li>
                  <li><a class="dropdown-item text-dark" href="#">Binder straps</a></li>
                  <li><a class="dropdown-item text-dark" href="#">Notched strap fastener</a></li>
                  <li><a class="dropdown-item text-dark" href="#">H: 49cm. W: 22cm. D: 1cm</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </nav>

      <nav class="center-me navbar navbar-expand-lg navbar-light bg-primary d-flex">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Delivery</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <h6> Standard UK Delivery €4.99</h6>
               <p class="mb-2"><span class="text-danger">Free for orders over €75.</span>Up to 5 working days.</p> 
               <h6> Next Day Delivery €7.99</h6>
               <p class="mb-2">We deliver Monday to Saturday in mainland Ireland. Order by 8pm.</p> 
               <h6> Click & Collect €2.49</h6>
               <p class="mb-2">Free for orders over £50. Up to 3 working days</p> 
              </ul>
            </li>
          </ul>
        </div>
      </nav>

     <nav class="center-me navbar navbar-expand-lg navbar-light bg-primary d-flex mb-4">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Returns</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <h6> Festive Returns Policy</h6>
             <p>Items purchased as Christmas gifts can be exchanged for either goods or a TK Maxx gift card to the same value from 1st October to 25th January.
              <br>
              If you'd like a refund simply return the item within 28 days of the date of purchase, along with a full receipt and original payment method.
              <br>
              After 28 days, or if you have a gift receipt rather than the full receipt, we'll be happy to exchange the item or provide a gift card to the same value any time up to 25th January.
              <br>
              Remember, normal conditions of return still apply, gift cards are excluded from the policy and anything you return needs to be accompanied by a valid receipt and be in its original condition. This doesn’t affect your statutory rights.
              <br>
              For more information read our full Returns Policy.</p> 
            </ul>
          </li>
        </ul>
      </div>
     </nav>
</div>

<section class="bg-primary">
      <p class="text-center text-white pt-3">SIGN UP FOR OUR IRELAND EMAIL</p>
      <p class="text-center text-white">for our freshest finds</p>
      <div class="container">
        <div class="row mb-3">
          <div class="col-sm-9">
            <input type="email" class="form-control" id="colFormLabel" placeholder="someone@emailprovider.com">
          </div>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-primary btn-md text-black">SUBSCRIBE</button>
          </div>
        </div>
        <div class="row">
          <div class="col-6 d-flex justify-content-end text-white">Privacy Policy</div>
          <div class="col-6 text-white"> Terms and Conditions</div>
        </div>
      </div>
</section>

<div class="container mt-3 mb-3">
<a href="{{ route('user.products.index') }}" class="btn btn-default">Back</a>
</div>
@endsection