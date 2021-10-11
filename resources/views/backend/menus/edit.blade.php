@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-md-6 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Menu</h4>
                            <form class="forms-sample" action="{{ route('menus.update', $menu->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" value="{{ $menu->name }}" class="form-control"
                                        id="exampleInputEmail1" placeholder="Enter name">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Price</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputPassword1"
                                        placeholder="Price">
                                </div> --}}
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <a class="btn btn-light" href="{{ route('menus.index') }}">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
