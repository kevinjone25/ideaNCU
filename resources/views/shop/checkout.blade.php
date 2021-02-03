@extends('layouts.master')


@section('title')
    Laravel shoppingcart
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your total: {{ $total }}</h4>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                <div class='row'>
                    <div class='col-xs-12 form-group required'>
                      <label class='control-label'>Name on Card</label>
                      <input class='form-control' size='4' type='text'>
                    </div>
                  </div>
                  <div class='form-row'>
                    <div class='col-xs-12 form-group card required'>
                      <label class='control-label'>Card Number</label>
                      <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                    </div>
                  </div>
                  <div class='form-row'>
                    <div class='col-xs-4 form-group cvc required'>
                      <label class='control-label'>CVC</label>
                      <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                    </div>
                    <div class='col-xs-4 form-group expiration required'>
                      <label class='control-label'>Expiration</label>
                      <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                    </div>
                    <div class='col-xs-4 form-group expiration required'>
                      <label class='control-label'> </label>
                      <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Buy now</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection