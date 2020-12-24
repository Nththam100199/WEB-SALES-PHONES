 @foreach($product_list as $product_lists)
<!--Single Product Start-->
<div class="col-lg-3 col-md-3 col-sm-6 item-col2">
    <div class="single-product">
        <div class="product-img">
            <a href="">
                <img class="first-img" src="{{URL::to('upload/product/'.$product_lists['images'])}}" alt="">
            </a>
            <span class="sicker">-{{$product_lists['sale']}}%</span>
            <ul class="product-action">
                @if(\session()->has('email'))
                <li><a href="#" id="{{$product_lists['product_id']}}" data-toggle="tooltip" class="wishlist" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                @else 
                <li><a  class="check_wish_list" data-toggle="tooltip" title="Add to Wishlistsss"><i class="ion-android-favorite-outline"></i></a></li>
                @endif
                <li><a href="#" data-toggle="modal" title="Quick View" data-target="#myModal_{{$product_lists['product_id']}}"><i class="ion-android-expand"></i></a></li>
            </ul>
        </div>
        <div class="product-content">
            <h2><a href="{{URL::to('product/'.$product_lists['slug'])}}">{{$product_lists['name']}}</a></h2>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="product-price">
                <span class="new-price"><?php echo number_format($product_lists['price'] - (($product_lists['price']*$product_lists['sale'])/100)) ?>đ</span>
                <span class="old-price"><?php echo number_format($product_lists['price']) ?>đ</span>
                <a class="button add-btn add-product" id="{{$product_lists['product_id']}}" href="#" data-toggle="tooltip" title="Mua hàng">Mua hàng</a>
            </div>
        </div>
    </div>
</div>
<!--Single Product End-->
@endforeach