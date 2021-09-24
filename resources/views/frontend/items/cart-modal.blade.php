<div class="modal fade" id="add_cart{{ $menu->id }}" tabindex="-1" role="dialog"
    aria-labelledby="foodModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header food-header">
                <h5 class="modal-title " id="foodModalCenterTitle">
                    {{ $menu->name }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <img src="https://www.pikachakula.com/wp-content/uploads/2018/02/Beef-Stew-Ugali-017.jpg"
                        height="150px" alt="" />
                </center>
            </div>
            <div class="modal-footer">
                <button class="btn change-cart" id="subtract3">
                    <i class="fa fa-minus"></i>
                </button>
                <p id="quantity3">1</p>
                <button class="btn change-cart mr-4" id="add3">
                    <i class="fa fa-plus"></i>
                </button>
                <p id="price3">{{ $menu->amount }}</p>
                <button type="button" class="btn align-right githe3" data-dismiss="modal">
                    Add to cart
                </button>
            </div>
        </div>
    </div>
</div>
