@extends('layouts.app')
@section('content')
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
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>Year</th>
                                <th>Company</th>
                                <th>Model</th>
                                <th>Price (Rs)</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
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
                loadViewCard();
            });
            var dataTable = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('index') }}",
                    data: function (d) {
                        d.year_id = $('#year-select').val();
                        d.company_id = $('#company-select').val();
                        d.search_value = $('#search').val();
                    }
                },
                columns: [
                    {data: 'year', name: 'year'},
                    {data: 'company', name: 'company'},
                    {data: 'name', name: 'name'},
                    {data: 'price', name: 'price'},
                ],
                order: [],
                columnDefs: [
                    {className: 'text-center', targets: [0, 1, 2, 3]},
                ],
                bFilter: false,
                "oLanguage": {
                    "sSearch": '<div class="row"><div class="col-4 align-self-center">Search:</div><div class="col-8"> _INPUT_ </div></div>', //search
                    "lengthMenu": '<div style="display:inline-flex"><span class="align-self-center">Show</span><span class="mx-3">_MENU_</span><span class="align-self-center">entries</span></div>',
                },
                "language": {},
                "sDom": '<"row view-filter"<"col-sm-12"<"float-right"f><"clearfix">>><"table-responsive"t><"row view-pager mx-1"<"col-sm-4"<"pull-right"i>><"col-sm-4"<"text-center"p>><"col-sm-4"<"float-right"l>>>',
                "pagingType": "numbers",
                createdRow: function (row, data, dataIndex) {
                    $(row).find('td:not(.actions)').addClass('cursor-pointer').attr('onclick', 'window.location.href="{{ url('cars') }}/' + data.id + '"');
                },
            });
            $('#search').on('input', function () {
                loadViewCard();
            });

            function loadViewCard() {
                dataTable.draw();
            }
        });
    </script>
@endsection
