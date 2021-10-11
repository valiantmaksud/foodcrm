@extends('frontend.master')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/hotels.css') }}" />
@endsection

@section('content')
    <div class="container mt-4" style="margin-top: 150px !important">
        <h3>Welcome Back, {{ auth()->user()->name }}</h3>

        <div class="row mt-4">
            <table class="table table-bordered">
                <tr>
                    <td>Name</td>
                    <td>{{ auth()->user()->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ auth()->user()->email }}</td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td>{{ auth()->user()->mobile }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{ auth()->user()->address }}</td>
                </tr>
                <tr>
                    <td>Orders</td>
                    <td>You have {{ auth()->user()->orders->count() }} Orders</td>
                </tr>
            </table>
        </div>

    </div>
@endsection
