@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-md-6 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Item</h4>
                            <form class="forms-sample" action="{{ route('items.update', $item->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $item->name) }}" placeholder="Enter name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Menu</label>
                                    {{-- @dd($item->menu_id) --}}
                                    <select name="menu_id" class="form-control" required>
                                        @foreach ($menus as $menu)
                                            <option value="{{ old('menu_id', $menu->id) }}"
                                                {{ $menu->id == $item->menu_id ? 'selected' : '' }}>
                                                {{ $menu->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Code/ Item ID</label>
                                    <input type="text" name="code" class="form-control"
                                        value="{{ old('code', $item->code) }}" placeholder="Enter code/item id" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Item Price</label>
                                    <input type="number" name="item_cost" class="form-control"
                                        value="{{ old('item_cost', $item->item_cost) }}" placeholder="Type cost" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Amount</label>
                                    <input type="number" name="amount" class="form-control"
                                        value="{{ old('amount', $item->amount) }}" placeholder="Type amount" required>
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
