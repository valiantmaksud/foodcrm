@extends('frontend.master')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/hotels.css') }}" />
@endsection

@section('content')
    <div class="container mt-4" style="margin-top: 150px !important">
        <h3>Welcome Back, {{ auth()->user()->name }}</h3>

        @include('frontend.users.edit-modal')
        <div class="row mt-4">
            <table class="table table-bordered">
                <tr>
                    <td colspan="2" class="text-right">
                        <a href="#" data-toggle="modal"
                            onclick="editProfile(`{{ auth()->user()->mobile }}`,`{{ auth()->user()->address }}`)"
                            data-target="#exampleModalCenter">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
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

@section('js')
    <script>
        function editProfile(mobile, address) {
            $('.mobile').val(mobile);
            $('.address').val(address);
        }
    </script>
@endsection
