<form action="/cart/add" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="link" value="{{$product->link}}" />
    <input type="hidden" name="name" value="{{$product->name}}" />
    <input type="hidden" name="price" value="{{$product->price}}" />
    <input type="hidden" name="weight" value="{{$product->weight}}" />
    <input type="hidden" name="photo" value="{{$product->photo}}" />

    <div class="form-group">
        <label for="sel1">Varian:</label>
        <select class="form-control" id="sel1" name="varian">
            @foreach($product->varians as $varian)
                <option>{{$varian}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="control-label text-uppercase" for="input-quantity">Qty:</label>
        <input type="text" class="form-control" id="usr" name="quantity">
    </div>
    <div class="cart-button button-group">
        <button type="submit" class="btn btn-cart">
            Add to cart
            <i class="fa fa-shopping-cart"></i>
        </button>
    </div>
</form>