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
                {{-- <center>
                    <img src="https://www.pikachakula.com/wp-content/uploads/2018/02/Beef-Stew-Ugali-017.jpg"
                        height="150px" alt="" />
                </center> --}}
            </div>
            <div class="modal-footer">
                <button class="btn change-cart" onclick="cart(this,`{{ $menu->amount }}`,'decrease')">
                    <i class="fa fa-minus"></i>
                </button>
                <p id="item_quantity">1</p>
                <button class="btn change-cart mr-4" onclick="cart(this, `{{ $menu->amount }}`,'increase')">
                    <i class="fa fa-plus"></i>
                </button>
                <p class="amount">{{ $menu->amount }}</p>
                <form action="{{ route('f.carts') }}" method="POST" style="display: inline">
                    <input type="hidden" name="item_id" value="{{ $menu->id }}">
                    <input type="hidden" name="menu_id" value="{{ $menu->menu_id }}">
                    <input type="hidden" name="amount" value="{{ $menu->amount }}">
                    <input type="hidden" name="quantity" class="item_quantity" value="1">
                    @csrf

                    <button type="submit" class="btn align-right">
                        Add to cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
