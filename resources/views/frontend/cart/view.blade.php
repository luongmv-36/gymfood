@extends('frontend.master')
@section('breadcrumbs')
    @include('frontend.breadcrumbs')
@stop
@section('content')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
                  <div class="row">
                <div class="col-sm-9">
                    @if(Session::has('thongbao'))
                        <div class="alert alert-warning">{{Session::get('thongbao')}}</div>
                    @endif
                        <table class="table table-condensed">
                            <thead>
                            <tr class="cart_menu">
                                <td class="">Sản Phẩm</td>
                                <td class="">Giá</td>
                                <td class="">Số Lượng</td>
                                <td class="">Tổng</td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            @if(Session::has('cartItems'))
                                <?php $sub_total = 0;?>
                                @foreach(Session::get('cartItems') as $item)
                                    <?php $sub_total += $item['qty']*$item['price'];?>
                                <tr style="vertical-align: middle;">
                                    <td class="cart_description">
                                        <h4 style=""><a href="">{{$item['name']}}</a></h4>
                                    </td>
                                    <td class="">
                                        <p style="font-weight: bold">{{$item['price']}} <small>vnđ</small></p>
                                    </td>
                                    <td class="">
                                        <form action="{{route('cart.add',['type'=> 'update'])}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="product_id" value="{{$item['id']}}">
                                            <input style="width:70px;" class="" type="number" name="qty" value="{{$item['qty']}}" autocomplete="off" size="3" min="0" max="100">
                                            <button type="submit" class="">Cập Nhật</button>
                                        </form>
                                    </td>
                                    <td class="">
                                        <p style="font-weight: bold">{{$item['qty']*$item['price']}} <small>vnđ</small></p>
                                    </td>
                                    <td class="">
                                        <a class="" href="{{route('cart.remove',['id'=> $item['id']])}}"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                              @else
                                <tr><td colspan="6">Giỏ hàng của bạn trống!</td></tr>
                              @endif
                            </tbody>
                        </table>

                </div>
                      <div class="col-sm-3">
                          <div class="right-checkout">
                          <div class="total_area">
                              <ul>
                                  <li>Bạn có mã giảm giá?</li>
                              </ul>
                                  <form action="#" method="get">
                                      {{csrf_field()}}
                                      <div class="">
                                          <div class="form-row">
                                              <label class="lebel-abs">
                                                  Code
                                              </label>
                                          <input type="text" name="code" class="input namefild"  @if(Session::has('discount')) value="{{Session::get('discount')->code}}" @endif />
                                              <button  class="pull-right" style="border: none" type="submit">Áp dụng</button>
                                          </div>

                                          <span class="input-group-btn"></span>
                                      </div>
                                  </form>
                              <div class="form-row">
                                  <div class="" style="background-color: #f4f4f4;line-height: 20px;margin-bottom: 3px;border: 1px solid #cccccc;padding: 3px;border-radius: 10px;">TOTAL</div>
                                  <div class="item-total" style="margin: 10px 0px; padding: 3px">
                                      <div class="label-price" style="float: left">Subtotal</div>
                                      <div class="value-price" style="float: right">{{$sub_total}} VNĐ</div>
                                  </div>
                                  <div class="item-total" style="margin: 10px 0px; padding: 3px">
                                      <div class="label-price" style="float: left">Tax</div>
                                      <div class="value-price" style="float: right">0 VNĐ</div>
                                  </div>
                                  <hr/>
                                  <div class="item-total" style="margin: 10px 0px; padding: 3px">
                                      <div class="label-price" style="float: left">Grand Total</div>
                                      <div class="value-price" style="float: right">{{Session::get('grandTotal')}} VNĐ</div>
                                  </div>
                                  <hr/>
                                  <button type="button" title="Proceed to Checkout" class="" style="background-color: red;color:#ffffff;width: 100%" onclick="window.location='{{route('checkout.cart')}}';"><span><span>Proceed to Checkout</span></span></button>
                              </div>
                          </div>
                      </div>
                      </div>
            <div class="clearfix"></div>
            @include('frontend.our_brand')
        </div>
    </div>
@stop