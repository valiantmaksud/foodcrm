<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{ route('f.profile') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(10, 97, 197);color:white">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Mobile</span>
                        </div>
                        <input type="text" name="mobile" class="form-control mobile" placeholder="Mobile"
                            aria-label="Mobile" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Address</span>
                        </div>
                        <input type="text" name="address" class="form-control address" placeholder="Address"
                            aria-label="Address" aria-describedby="basic-addon1">
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
