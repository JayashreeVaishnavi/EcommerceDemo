@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-sm-6 col-lg-6 col-md-6">
                <div class="card border-none">
                    <div class="card-body">
                        <img class="card-img-top center" src="{{ asset('assets/media/dummy-car.jpeg') }}"
                             alt="Card image cap" style="height: 600px">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 col-md-6">
                <div class="card" style="min-height: 620px">
                    <div class="card-header text-center"><h4>{{ $model->name }}</h4></div>
                    <div class="card-body">
                        <span class="font-weight-bold">Features: </span>
                        {!! $model->features !!}
                    </div>
                    <div class="card-footer remove-bg">
                        <a href="{{ url('payment').'/?price='.encrypt($model->price) }}" type="button"
                           class="btn btn-success block">
                            Buy at Rs. {{ $model->price }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
