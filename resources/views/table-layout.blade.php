@extends('resource-layout')

@section('body')
    <a class="btn btn-primary float-right" href="{{ $resourceUrl }}/create">Create {{ str_singular($resourceName) }}</a>
    @parent
    <table class="table">
        <thead>
        <tr>
            @yield('table-header')
        </tr>
        </thead>
        <tbody>
        @yield('table-body')
        </tbody>
    </table>
@endsection
