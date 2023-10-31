@extends('layouts.website')


@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-color:#a6ce39">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">{{ $product->name }}</h1>
                </div>
            </div>
        </div>

        <!-- contact area -->
        <div class="content-inner section-full bg-white">
            <!-- Product -->
            <div class="container">

                <div class="row">
                    <!-- Side bar -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <aside style="margin-top: -130px;" class="side-bar">
                            <div class="widget">
                                <img src="images/ads/add.png" alt="" />
                            </div>
                            <div class="widget widget_categories">
                                <h4 class="widget-title">{{ $product->sub_category->name }}</h4>
                                <ul>
                                    @foreach (App\Models\Product::where('sub_category_id', $product->sub_category_id)->get() as $other_products)
                                        <li><a href="{{ url('/product/' . $other_products->id) }}">{{ $other_products->name }}
                                            </a> &nbsp;</li>
                                    @endforeach

                                </ul>
                            </div>

                        </aside>
                    </div>
                    <!-- Ednd of sidebar -->


                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <!-- contact area -->
                        <div class="section-full content-inner">
                            <!-- Product details -->
                            <div class="container woo-entry">
                                <div class=" m-b30">

                                    <h2 style="color: black;">{{ $product->name }}</h2>

                                    <div class="row date-style-2">
                                        <div style="margin-top: -150px;" class="col-lg-4 col-md-4">

                                            <a href="javascript:void(0);">
                                                <img src="{{ $product->image!=null ? asset($product->image) : '/website/images/our-services/service-4/pic1.jpg' }}" alt="">
                                            </a>
                                        </div>
                                        <div style="margin-top: -150px;" class="col-lg-8 col-md-4">
                                            <div class="dez-tabs border-tp product-description bg-tabs">
                                                <ul class="nav nav-tabs ">
                                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                            href="#web-design-1"><i class="fa fa-globe"></i> <span
                                                                class="title-head">Description</span></a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="web-design-1" class="tab-pane active">
                                                        <p>
                                                            {!! substr($product->description ,0,400)!!} .....
                                                            <br/>
                                                            <br/>
                                                            <a  class="site-button" data-bs-toggle="modal" href="#staticBackdrop" role="button">Read More</a>
                                                        </p>
                                                    </div>


                                                </div>

                                                <!-- CalendarModal -->
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">{{ $product->name }}
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! $product->description !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1>Related {{ $product->sub_category->name }} Products</h1>
                                        <div class="dez-tabs border-tp product-description bg-tabs">
                                            <div class="row date-style-2">
                                                @foreach ($product->sub_category->products as $other_product)
                                                    <div class="col-lg-4 col-sm-12 m-b30 product-item card-container">
                                                        <div class="dez-box">
                                                            <div class="dez-thum-bx dez-img-effect">
                                                                <img src="{{ $other_product->image!=null ? asset($other_product->image) : '/website/images/our-services/service-4/pic1.jpg' }}"
                                                                    alt="">

                                                            </div>
                                                            <div class="dez-info p-a20 text-center">
                                                                <div class="m-t15">
                                                                    <a href="{{ url('/product/' . $other_product->id) }}"
                                                                        class="site-button">View
                                                                        {{ $other_product->name }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product details -->
                        </div>
                        <!-- contact area  END -->
                    </div>
                </div>


            </div>
            <!-- Product END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
@endsection
