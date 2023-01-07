@extends('admin.layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h2 class="content-title mb-0 my-auto">{{ config('languageString.role') }}</h2>

            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a href="{{ route('admin.permission.create') }}" class="btn btn-secondary  mr-2">
                    <i class="mdi mdi-plus-circle"></i>{{ config('languageString.add_permission') }}
                </a>
                <a href="{{ route('admin.role.create') }}" class="btn btn-primary">
                    <i class="mdi mdi-plus-circle"></i>{{ config('languageString.add_new') }}
                </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap" id="data-table">
                            <thead>
                            <tr>
                                <th>{{ config('languageString.no') }}</th>
                                <th>{{ config('languageString.name') }}</th>
                                <th>{{ config('languageString.actions') }}</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
@endsection
@section('js')
    <script>
        const sweetalert_title = "{{ config('languageString.destroy_role').'?' }}";
        const sweetalert_text = "{{ config('languageString.sweetalert_text') }}";
        const status_msg = "{{ config('languageString.status_msg') }}";
        const confirmButtonText = "{{ config('languageString.yes_delete_it') }}";
        const cancelButtonText = "{{ config('languageString.no_cancel_plx') }}";
    </script>
    <script src="{{URL::asset('assets/js/custom/role.js')}}"></script>
@endsection
