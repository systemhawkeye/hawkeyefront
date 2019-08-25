@extends('layout.master')

@section('content')
<header class="header "
    style="background-image: url(https://bellroy.imgix.net/cms_images/2693/de-galaxy-grey-header-image-desktop-2105.jpg?auto=format&amp;fit=max)">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-6 ">

            </div>
            <div class="col-md-6 ">
                <h1 class="fw-200 mb-6">Your Cart</h1>
                <p class="lead-2">Please follow the instruction below to finish your shop</p>


            </div>
        </div>
    </div>
</header>
<section class="section bg-white pb-12 py-8">
    <div class="container">

        <form class="row gap-y">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-cart">
                            <tbody valign="middle">
                                <tr>
                                    <td>
                                        <a class="item-remove" href="#"><i class="ti-close"></i></a>
                                    </td>

                                    <td>
                                        <a href="item.html">
                                            <img class="rounded" src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg" alt="...">
                                        </a>
                                    </td>

                                    <td>
                                        <h5>Apple EarPods</h5>
                                        <p>White and wireless</p>
                                    </td>

                                    <td>
                                        <label>Quantity</label>
                                        <input class="form-control form-control-sm" type="text" placeholder="Quantity"
                                            value="1">
                                    </td>

                                    <td>
                                        <h4 class="price fs-20">Rp 250.000</h4>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <a class="item-remove" href="#"><i class="ti-close"></i></a>
                                    </td>

                                    <td>
                                        <a href="item.html">
                                            <img class="rounded" src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg" alt="...">
                                        </a>
                                    </td>

                                    <td>
                                        <h5>Beats On-Ear Headphones</h5>
                                        <p>Gold color</p>
                                    </td>

                                    <td>
                                        <label>Quantity</label>
                                        <input class="form-control form-control-sm" type="text" placeholder="Quantity"
                                            value="1">
                                    </td>

                                    <td>
                                        <h4 class="fs-20 price">Rp 200.000</h4>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <a class="item-remove" href="#"><i class="ti-close"></i></a>
                                    </td>

                                    <td>
                                        <a href="item.html">
                                            <img class="rounded" src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg" alt="...">
                                        </a>
                                    </td>

                                    <td>
                                        <h5>Sony PlayStation 4</h5>
                                        <p>Includes FIFA 2019</p>
                                    </td>

                                    <td>
                                        <label>Quantity</label>
                                        <input class="form-control form-control-sm" type="text" placeholder="Quantity"
                                            value="1">
                                    </td>

                                    <td>
                                        <h4 class="price fs-20">Rp 300.000</h4>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-5 "></div>
                    <div class="col-lg-4 col-6 ">
                        <button class="btn  btn-block btn-secondary mt btn-round">Continue Shopping</button>
                    </div>
                    <div class="col-lg-3  col-6">
                        <button class="btn btn-block btn btn-outline-primary btn-round">Update Cart</button>
                    </div>
                </div>


            </div>


            <div class="col-lg-4">
                <div class="cart-price">
                    <div class="flexbox">
                        <div>
                            <p><strong>Subtotal:</strong></p>
                            <p><strong>Shipping:</strong></p>
                            <p><strong>Tax (%10):</strong></p>
                        </div>

                        <div>
                            <p>$683</p>
                            <p>$39</p>
                            <p>$68</p>
                        </div>
                    </div>

                    <hr>

                    <div class="flexbox">
                        <div>
                            <p><strong>Total:</strong></p>
                        </div>

                        <div>
                            <p class="fw-600">$790</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                  
                    <div class="col-12">
                        <button class="btn btn-block btn-success btn-round" type="submit">Proceed <i
                                class="ti-angle-right fs-9"></i></button>
                    </div>
                </div>

            </div>
        </form>



    </div>
</section>
@stop
