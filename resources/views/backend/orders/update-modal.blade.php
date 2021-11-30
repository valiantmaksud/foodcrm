<div class="modal fade" id="exampleModalCenter{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{ route('order.status', $item->id) }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(10, 97, 197);color:white">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Status</span>
                        </div>
                        <select name="status" class="form-control">
                            <option value="pending">Pending</option>
                            <option value="on-process">On Process</option>
                            <option value="on-delivery">On Delivery</option>
                            <option value="completed">Completed</option>
                            <option value="cancel">Cancel</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="btn-group btn-corner">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i>
                            Save changes
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <i class="fa fa-close"></i>
                            Close
                        </button>

                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
