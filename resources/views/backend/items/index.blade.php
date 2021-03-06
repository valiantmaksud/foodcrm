@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Items</h4>
                    <p class="card-description pull-right">
                        <a href="{{ route('items.create') }}" class="btn btn-xs btn-info">Add Item</a>
                    </p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Menu</th>
                                <th>Image</th>
                                <th>Amount</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ optional($item->menu)->name }}</td>
                                    <td>
                                        @if (file_exists($item->image))
                                            <img src="{{ asset($item->image) }}" width="120" height="80" alt="">
                                        @endif
                                    </td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <span class="badge badge-{{ $item->status ? 'success' : danger }}">
                                            {{ $item->status ? 'Active' : 'De-active' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="button-group">
                                            <a class="btn btn-xs btn-success" href="{{ route('items.edit', $item->id) }}">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a class="btn btn-xs btn-danger" href="#delete{{ $item->id }}"
                                                data-toggle="modal">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                        </div>

                                        <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="foodModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header food-header">
                                                        <h5 class="modal-title " id="foodModalCenterTitle">
                                                            Warning
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('items.destroy', $item->id) }}"
                                                            method="POST" id="deleteform">
                                                            @csrf
                                                            @method('DELETE')
                                                            Do you want to delete it?
                                                            <button type="submit"
                                                                class="btn btn-danger mr-2">Delete</button>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">Cancel</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
