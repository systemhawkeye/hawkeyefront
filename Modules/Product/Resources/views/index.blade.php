@extends('layout.master')

@section('content')
<section class=" section bg-white">
    <div class="container-fluid px-lg-8">
        <div class="row">
            <div class="col-lg-8">

                <div id="slider-image" data-provide="slider" data-arrows="true" data-as-nav-for="#slider-thumb">
                    <div><img style="width:100%"
                            src="https://bellroy.imgix.net/dynamic-assets/W1siZnUiLCJodHRwczovL3MzLmFtYXpvbmF3cy5jb20vcHJvZHVjdC5pbWFnZXMuYmVsbHJveS5jb20vcHJvZHVjdF9pbWFnZXMvaW1hZ2VzLzAwMC8wMDMvNDkxL29yaWdpbmFsLzE5MTM0YzU1NGU4MTliZDQwNDgwYmFmZTBjZTM1NmMzOTljZjMyNWY3NjA4ZjI1MWJhNmQ1OTc5NWEyNmZjZGMuanBnIl1d/4c3f908d3e521908/19134c554e819bd40480bafe0ce356c399cf325f7608f251ba6d59795a26fcdc.jpg?w=730&h=487&fit=crop&crop=entropy&auto=format">
                    </div>
                    <div><img style="width:100%"
                            src="https://bellroy.imgix.net/dynamic-assets/W1siZnUiLCJodHRwczovL3MzLmFtYXpvbmF3cy5jb20vcHJvZHVjdC5pbWFnZXMuYmVsbHJveS5jb20vcHJvZHVjdF9pbWFnZXMvaW1hZ2VzLzAwMC8wMDMvNDg4L29yaWdpbmFsLzcwMTc4NWQ4MjliZmExOWQ5YzQzYjc5YmRkMzU1NzViMDJlZjFlZDQ0YzlkNDMyZDI2ODNiZjk3ODdhYjQ5MmYuanBnIl1d/6ca5d570ae6c9080/701785d829bfa19d9c43b79bdd35575b02ef1ed44c9d432d2683bf9787ab492f.jpg?w=730&h=487&fit=crop&crop=entropy&auto=format">
                    </div>
                    <div><img style="width:100%"
                            src="https://bellroy.imgix.net/dynamic-assets/W1siZnUiLCJodHRwczovL3MzLmFtYXpvbmF3cy5jb20vcHJvZHVjdC5pbWFnZXMuYmVsbHJveS5jb20vcHJvZHVjdF9pbWFnZXMvaW1hZ2VzLzAwMC8wMDMvNDkwL29yaWdpbmFsLzVjYTllOWNlMWM2Y2NkMDBjMDFhYjk0ODRjYmY1NWI4YmYxMTgxMTUzM2U2MGJhMmU4MjI3NDdmMmIyNTdlMWQuanBnIl1d/3e373be27c605466/5ca9e9ce1c6ccd00c01ab9484cbf55b8bf11811533e60ba2e822747f2b257e1d.jpg?w=730&h=487&fit=crop&crop=entropy&auto=format">
                    </div>

                </div>

                <div id="slider-thumb" data-provide="slider" data-as-nav-for="#slider-image" class="d-none d-md-block"
                    data-slides-to-show="8" data-center-mode="true" data-dots="true" data-focus-on-select="true">
                    <div class="p-2"><img class="cursor-pointer"
                            src="https://bellroy.imgix.net/dynamic-assets/W1siZnUiLCJodHRwczovL3MzLmFtYXpvbmF3cy5jb20vcHJvZHVjdC5pbWFnZXMuYmVsbHJveS5jb20vcHJvZHVjdF9pbWFnZXMvaW1hZ2VzLzAwMC8wMDMvNDkxL29yaWdpbmFsLzE5MTM0YzU1NGU4MTliZDQwNDgwYmFmZTBjZTM1NmMzOTljZjMyNWY3NjA4ZjI1MWJhNmQ1OTc5NWEyNmZjZGMuanBnIl1d/4c3f908d3e521908/19134c554e819bd40480bafe0ce356c399cf325f7608f251ba6d59795a26fcdc.jpg?w=730&h=487&fit=crop&crop=entropy&auto=format">
                    </div>
                    <div class="p-2"><img class="cursor-pointer"
                            src="https://bellroy.imgix.net/dynamic-assets/W1siZnUiLCJodHRwczovL3MzLmFtYXpvbmF3cy5jb20vcHJvZHVjdC5pbWFnZXMuYmVsbHJveS5jb20vcHJvZHVjdF9pbWFnZXMvaW1hZ2VzLzAwMC8wMDMvNDg4L29yaWdpbmFsLzcwMTc4NWQ4MjliZmExOWQ5YzQzYjc5YmRkMzU1NzViMDJlZjFlZDQ0YzlkNDMyZDI2ODNiZjk3ODdhYjQ5MmYuanBnIl1d/6ca5d570ae6c9080/701785d829bfa19d9c43b79bdd35575b02ef1ed44c9d432d2683bf9787ab492f.jpg?w=730&h=487&fit=crop&crop=entropy&auto=format">
                    </div>
                    <div class="p-2"><img class="cursor-pointer"
                            src="https://bellroy.imgix.net/dynamic-assets/W1siZnUiLCJodHRwczovL3MzLmFtYXpvbmF3cy5jb20vcHJvZHVjdC5pbWFnZXMuYmVsbHJveS5jb20vcHJvZHVjdF9pbWFnZXMvaW1hZ2VzLzAwMC8wMDMvNDkwL29yaWdpbmFsLzVjYTllOWNlMWM2Y2NkMDBjMDFhYjk0ODRjYmY1NWI4YmYxMTgxMTUzM2U2MGJhMmU4MjI3NDdmMmIyNTdlMWQuanBnIl1d/3e373be27c605466/5ca9e9ce1c6ccd00c01ab9484cbf55b8bf11811533e60ba2e822747f2b257e1d.jpg?w=730&h=487&fit=crop&crop=entropy&auto=format">
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                        <hr class="mt-2 mb-2" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="fw-700">Alternative</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-2 mb-1 p-1 ">
                        <div class="col-lg-12 b-1 p-0">
                            <img src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                alt="product">

                        </div>
                    </div>
                    <div class="col-lg-2 col-2 mb-1 p-1 ">
                        <div class="col-lg-12 b-1 p-0   ">
                            <img src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                alt="product">

                        </div>
                    </div>
                    <div class="col-lg-2 col-2 mb-1 p-1 ">
                        <div class="col-lg-12 b-1 p-0   ">
                            <img src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                alt="product">

                        </div>
                    </div>

                    <div class="col-lg-2 col-2 mb-1 p-1 ">
                        <div class="col-lg-12 b-1 p-0   ">
                            <img src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                alt="product">

                        </div>
                    </div>
                    <div class="col-lg-2 col-2 mb-1 p-1 ">
                        <div class="col-lg-12 b-1 p-0   ">
                            <img src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                alt="product">

                        </div>
                    </div>
                    <div class="col-lg-2 col-2 mb-1 p-1 ">
                        <div class="col-lg-12 b-1 p-0   ">
                            <img src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                alt="product">

                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <hr class="mt-4 mb-4" />
                        <p class="fw-700 mb-0">Price</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2 col-lg-12">
                        <h4>Rp 400.000</h4>
                    </div>

                </div>

                <div class="row ">
                    <div class="col-lg-2 mt-2 col-2">
                        <button class="btn-round btn-outline-secondary btn">S</button>
                    </div>
                    <div class="col-lg-2 mt-2 col-2">
                        <button class="btn-round btn-outline-secondary btn">M</button>
                    </div>
                    <div class="col-lg-2 mt-2 col-2">
                        <button class="btn-round btn-outline-secondary btn">L</button>
                    </div>
                    <div class="col-lg-2 mt-2 col-2">
                        <button class="btn-round btn-outline-secondary btn">XXL</button>
                    </div>
                    <div class="col-lg-2 mt-2 col-2">
                        <button class="btn-round btn-outline-secondary btn">M</button>
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <button class="btn btn-block btn-primary btn-round">Buy Now</button>
                    </div>
                </div>
                <div class="row mt-5">
                    {{-- start --}}
                    <!--
              |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
              | Arrow right accordion
              |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
              !-->
                    <div class="accordion accordion-arrow-right" id="accordion-4">
                        <div class="card mb-0 rounded">
                            <h5 class="card-title">
                                <a data-toggle="collapse" class="fs-17 pb-3 pt-3" href="#collapse-4-1">Is this a secure
                                    site for purchases?</a>
                            </h5>

                            <div id="collapse-4-1" class="collapse show" data-parent="#accordion-4">
                                <div class="card-body">
                                    Absolutely! We work with top payment companies which guarantees your safety and
                                    security. All billing information is stored on our payment processing partner which
                                    has the most stringent level of certification available in the payments industry.
                                </div>
                            </div>
                        </div>


                        <div class="card mb-0 rounded">
                            <h5 class="card-title">
                                <a data-toggle="collapse" class=" collapsed fs-17 pb-3 pt-3" href="#collapse-4-2">How
                                    long are your
                                    contracts?</a>
                            </h5>

                            <div id="collapse-4-2" class="collapse" data-parent="#accordion-4">
                                <div class="card-body">
                                    Currently, we only offer monthly subscription. You can upgrade or cancel your
                                    monthly account at any time with no further obligation.
                                </div>
                            </div>
                        </div>


                        <div class="card mb-0 rounded">
                            <h5 class="card-title">
                                <a data-toggle="collapse" class=" collapsed fs-17 pb-3 pt-3" href="#collapse-4-3">Can I
                                    cancel my
                                    subscription?</a>
                            </h5>

                            <div id="collapse-4-3" class="collapse" data-parent="#accordion-4">
                                <div class="card-body">
                                    You can cancel your subscription anytime in your account. Once the subscription is
                                    cancelled, you will not be charged next month. You will continue to have access to
                                    your account until your current subscription expires.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- end --}}
        </div>
    </div>
    </div>
    </div>
</section>

<section class="section">
    <div class="container-fluid px-lg-8">
        <div class="row">
            <div class="col-lg-4 col-12 mt-4 ">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="w-100"
                            src="https://cdn.shopify.com/s/files/1/2260/7991/products/DSC_9699_e_s_text_a29f7450-61b6-4aa3-9095-6a7f85b8b614_1000x.jpg?v=1564978280">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 bg-white py-4">
                            <p class="text-primary mb-0 fs-16">The side zip compartment easily fits A4 documents</p>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-12  mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="w-100"
                            src="https://cdn.shopify.com/s/files/1/2260/7991/products/stop-mo-gif---charger-pouch_1000x.gif?v=1564978280">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 bg-white py-4">
                            <p class="text-primary mb-0 fs-16">The side zip compartment easily fits A4 documents</p>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-12  mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="w-100"
                            src="https://cdn.shopify.com/s/files/1/2260/7991/products/DSC_9889_e_s_1000x.jpg?v=1564978280">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 bg-white py-4">
                            <p class="text-primary mb-0 fs-16">The side zip compartment easily fits A4 documents</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
<section class="bg-white section ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                    <iframe style="width:100%;height:800px;" src="https://www.youtube.com/embed/ubJHq4CaIXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       
            </div>
        </div> 
    </div>
</section>
<section>

    <div data-provide="slider" data-arrows="true">
        <div><img class="w-100"
                src="https://bellroy.imgix.net/cms_images/2208/xnsa_lifestyle.jpg?auto=format&fit=max&w=1920"></div>
        <div><img class="w-100"
                src="https://bellroy.imgix.net/cms_images/2208/xnsa_lifestyle.jpg?auto=format&fit=max&w=1920"></div>
        <div><img class="w-100"
                src="https://bellroy.imgix.net/cms_images/2208/xnsa_lifestyle.jpg?auto=format&fit=max&w=1920"></div>
    </div>
</section>

<section class="section pt-7">

    <div class="container-fluid px-lg-8">
        <div class="row pb-7">
            <div class="col-lg-12 text-center">
                <h4>you may also like</h4>
            </div>
        </div>
        <div class="row">
            {{-- start --}}
            <div class="col-6 col-xl-3 mb-4">

                <div class="product-3 mb-3" style=" 
                        border-radius: 20px;">
                    <div class="product-media">
                        <span class="badge badge-pill badge-primary badge-pos-left">New</span>
                        <div class="slider-dots-inside" style=" 
                                border-radius: 20px;" data-provide="slider" data-dots="true">
                            <a href="item.html">
                                <img style=" 
                                        border-radius: 20px;"
                                    src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                    alt="product">
                            </a>
                            <a href="item.html">
                                <img style=" 
                                        border-radius: 20px;"
                                    src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                    alt="product">
                            </a>

                        </div>
                    </div>

                    <div class="product-detail ">
                        <h6><a href="#">Beats On-Ear Headphones</a></h6>
                        <small>Gloves</small>
                        <div class="product-price">Rp 250.000</div>
                    </div>
                </div>


            </div>
            {{-- end --}}

            {{-- start --}}
            <div class="col-6 col-xl-3 mb-4">

                <div class="product-3 mb-3" style=" 
                            border-radius: 20px;">
                    <div class="product-media">
                        <span class="badge badge-pill badge-primary badge-pos-left">New</span>
                        <div class="slider-dots-inside" style=" 
                                    border-radius: 20px;" data-provide="slider" data-dots="true">
                            <a href="item.html">
                                <img style=" 
                                            border-radius: 20px;"
                                    src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                    alt="product">
                            </a>
                            <a href="item.html">
                                <img style=" 
                                            border-radius: 20px;"
                                    src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                    alt="product">
                            </a>

                        </div>
                    </div>

                    <div class="product-detail ">
                        <h6><a href="#">Beats On-Ear Headphones</a></h6>
                        <small>Gloves</small>
                        <div class="product-price">Rp 250.000</div>
                    </div>
                </div>


            </div>
            {{-- end --}}

            {{-- start --}}
            <div class="col-6 col-xl-3 mb-4">

                <div class="product-3 mb-3" style=" 
                            border-radius: 20px;">
                    <div class="product-media">
                        <span class="badge badge-pill badge-primary badge-pos-left">New</span>
                        <div class="slider-dots-inside" style=" 
                                    border-radius: 20px;" data-provide="slider" data-dots="true">
                            <a href="item.html">
                                <img style=" 
                                            border-radius: 20px;"
                                    src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                    alt="product">
                            </a>
                            <a href="item.html">
                                <img style=" 
                                            border-radius: 20px;"
                                    src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                    alt="product">
                            </a>

                        </div>
                    </div>

                    <div class="product-detail ">
                        <h6><a href="#">Beats On-Ear Headphones</a></h6>
                        <small>Gloves</small>
                        <div class="product-price">Rp 250.000</div>
                    </div>
                </div>


            </div>
            {{-- end --}}
            {{-- start --}}
            <div class="col-6 col-xl-3 mb-4">

                <div class="product-3 mb-3" style=" 
                            border-radius: 20px;">
                    <div class="product-media">
                        <span class="badge badge-pill badge-primary badge-pos-left">New</span>
                        <div class="slider-dots-inside" style=" 
                                    border-radius: 20px;" data-provide="slider" data-dots="true">
                            <a href="item.html">
                                <img style=" 
                                            border-radius: 20px;"
                                    src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                    alt="product">
                            </a>
                            <a href="item.html">
                                <img style=" 
                                            border-radius: 20px;"
                                    src="https://s3.ap-southeast-1.amazonaws.com/ncommerce-assets/ncommapps_assets/ncommcust/hawkeyefightwear.com/product_img/430045389_1562305825_Midnight01.jpg"
                                    alt="product">
                            </a>

                        </div>
                    </div>

                    <div class="product-detail ">
                        <h6><a href="#">Beats On-Ear Headphones</a></h6>
                        <small>Gloves</small>
                        <div class="product-price">Rp 250.000</div>
                    </div>
                </div>


            </div>
            {{-- end --}}
        </div>
    </div>
</section>
@stop
