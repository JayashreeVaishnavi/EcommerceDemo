@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px">
        <div class="card">
            <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                  data-cc-on-file="false"
                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                @csrf
                <div class="card-header">
                    <h3 class="panel-title display-td">Payment Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Name on Card</label>
                            <input type="text" class="form-control" id="name" name="card_name"
                                   value="{{ request()->old('card_name') }}">
                            @if($errors->has('card_name'))
                                <div class="text-danger">{{ $errors->first('card_name') }}</div>
                            @endif
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Card Number</label>
                            <input type="text" class="form-control card-number" id="card-number" size='20'
                                   data-mask="0000 0000 0000 0000" name="card_number"
                                   value="{{ request()->old('card_number') }}">
                            @if($errors->has('card_number'))
                                <div class="text-danger">{{ $errors->first('card_number') }}</div>
                            @endif
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6">
                            <label>CVC</label>
                            <input autocomplete='off' class='form-control card-cvc' type='text' data-mask="000"
                                   name="cvc" value="{{ request()->old('cvc') }}">
                            @if($errors->has('cvc'))
                                <div class="text-danger">{{ $errors->first('cvc') }}</div>
                            @endif
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6">
                            <label>Expiration Month</label>
                            <input class='form-control card-expiry-month' type='text' data-mask="00"
                                   name="expiration_month" value="{{ request()->old('expiration_month') }}" min="01"
                                   max="12">
                            @if($errors->has('expiration_month'))
                                <div class="text-danger">{{ $errors->first('expiration_month') }}</div>
                            @endif
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6">
                            <label>Expiration Year</label>
                            <input class='form-control card-expiry-year' size='4' type='text' data-mask="0000"
                                   name="expiration_year" value="{{ request()->old('expiration_year') }}">
                            @if($errors->has('expiration_year'))
                                <div class="text-danger">{{ $errors->first('expiration_year') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input class='form-control card-expiry-year' hidden value="{{ $price }}" name="price">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (
                        Rs. {{ $price }})
                    </button>
                </div>
            </form>
        </div>
    </div>

    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
            integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w=="
            crossorigin="anonymous"></script>
@endsection
