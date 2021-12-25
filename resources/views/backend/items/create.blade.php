@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-md-6 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Item</h4>
                            <form class="forms-sample" action="{{ route('items.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Menu</label>
                                    <select name="menu_id" id="" class="form-control" required>
                                        @foreach ($menus as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Code/ Item ID</label>
                                    <input type="text" name="code" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter code/item id" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Item Price</label>
                                    <input type="number" name="item_cost" class="form-control"
                                        value="{{ old('item_cost') }}" placeholder="Type cost" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Amount</label>
                                    <input type="number" name="amount" class="form-control" id="exampleInputPassword1"
                                        placeholder="Type amount" required>
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
