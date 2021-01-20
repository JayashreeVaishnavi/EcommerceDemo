@extends('layouts.app')
@section('content')
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show alert-margin" role="alert">
            <strong>Payment Success</strong>Your order has been processed!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show alert-margin" role="alert">
            <strong>Payment Failed</strong>Please try again later!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div style="padding: 30px">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        Filters
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-8">
                            <label class="font-weight-bolder">Year</label>
                            <select class="form-control custom-select-lg" id="year-select">
                            </select>
                        </div>
                        <div class="form-group mb-8">
                            <label class="font-weight-bolder">Company</label>
                            <select class="form-control custom-select-lg" id="company-select">
                            </select>
                        </div>
                        <div class="form-group mb-8">
                            <label class="font-weight-bolder">Model</label>
                            <select class="form-control custom-select-lg" id="car-select">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body" id="view-cars">
                        @include('card-decks')
                    </div>
                    <div class="card-footer remove-bg">
                        <a href="{{ url('index') }}" class="btn btn-primary float-right">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#year-select').select2({
                tags: true,
                placeholder: 'Choose',
                allowClear: true,
                ajax: {
                    url: '{{ url('years') }}',
                    // type: "get",
                    dataType: 'json',
                    data: function (params) {
                        return {
                            _token: '{{ csrf_token() }}',
                            search: params.term, // search term
                            page: params.page || 1
                        };
                    },
                    processResults: function (response, params) {
                        return {
                            results: response.data,
                            pagination: {
                                more: (response.current_page * 10) < response.total
                            }
                        };
                    },
                },
            }).on('change', function () {
                $('#company-select').val('').trigger('change');
                $('#car-select').val('').trigger('change');
                loadViewCard();
            });

            $('#company-select').select2({
                tags: true,
                placeholder: 'Choose',
                allowClear: true,
                ajax: {
                    url: '{{ url('companies') }}',
                    // type: "get",
                    dataType: 'json',
                    data: function (params) {
                        return {
                            _token: '{{ csrf_token() }}',
                            search: params.term, // search term
                            page: params.page || 1,
                            year_id: $('#year-select').val()
                        };
                    },
                    processResults: function (response, params) {
                        return {
                            results: response.data,
                            pagination: {
                                more: (response.current_page * 10) < response.total
                            }
                        };
                    },
                },
            }).on('change', function () {
                $('#car-select').val('').trigger('change');
                loadViewCard();
            });
            var carSelect = $('#car-select').select2({
                tags: true,
                placeholder: 'Choose',
                allowClear: true,
                ajax: {
                    url: '{{ url('cars') }}',
                    // type: "get",
                    dataType: 'json',
                    data: function (params) {
                        return {
                            _token: '{{ csrf_token() }}',
                            search: params.term, // search term
                            page: params.page || 1,
                            year_id: $('#year-select').val(),
                            company_id: $('#company-select').val()
                        };
                    },
                    processResults: function (response, params) {
                        return {
                            results: response.data,
                            pagination: {
                                more: (response.current_page * 10) < response.total
                            }
                        };
                    },
                },
            });
        }).on('change', function () {
            loadViewCard();
        });
        $('#search').on('input', function () {
            loadViewCard();
        });

        function loadViewCard() {
            $.ajax({
                type: 'post',
                url: "{{ url('view') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    year_id: $('#year-select').val(),
                    company_id: $('#company-select').val(),
                    model_id: $('#car-select').val(),
                    search_value: $('#search').val()
                },
                success: function (response) {
                    $('#view-cars').html(response);
                },
            });
        }

    </script>
@endsection
