@extends('layouts.website')

@section('content')
    <style>
        /* Default styles for larger screens */
        .bg-imgs {
            background-image: url('{{ asset('assets/banners/banner1.jpg') }}');
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            height: 600px;
        }

        /* Media query for smaller screens (e.g., mobile devices) */
        @media (max-width: 767px) {
            .bg-imgs {
                height: 300px; /* Adjust the height for mobile */
                /* You can also modify other background properties as needed */
            }
        }


    </style>
    <!--home slider start-->
    <section class="digitalmark-slide">
        <div class="slide-main bg-imgs">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="slide-contain">
                            <div class="sub-contain">
                                <a class="video-btn" tabindex="0" data-bs-toggle="modal"
                                   data-bs-target="#v-section1"><i
                                        class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home sldier end-->

    <!-- title start -->
    <div class="title7 section-big-pt-space">
        <h3>featured products</h3>
        <div class="line">
        </div>
    </div>
    <!-- title end -->
    <div class="container-fluid">
        <div class="row">
            <!--tab product-->
            <section style="margin-top: -45px;" class="col-md-3 section-big-py-space b-g-white ">
                <ul class="tabs tab-title list-group">
                    <li class="list-group-item"><a style="background-color: #f6821f;"
                                                   class="btn btn-success btn-sm btn-block btn-rounded" href="tab-all">ALL
                            PRODUCTS</a></li>
                    @foreach($categories as $category)
                        <li class="list-group-item"><a style="background-color: #a6ce39;"
                                                       class="btn-sm btn-block btn-rounded"
                                                       href="tab-{{$category->id}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
                {{-- </div>
             </div>--}}
            </section>
            <!--tab product-->
            <!-- product box start -->
            <section class="col-md-8 our-gallery b-g-white section-big-pb-space">
                <div class="custom-container">
                    <div class="row  ">
                        <div class="col-12 p-0">
                            <div class="theme-tab">
                                <div class="tab-content-cls">
                                    <div id="tab-all" class="tab-content active default  product-block2">
                                        @php
                                            $randomProducts = \App\Models\Product::inRandomOrder()->get();
                                            $productChunks = array_chunk($randomProducts->toArray(), 4);
                                        @endphp
                                        @foreach($productChunks as $productGroup)
                                            <div class="col-12">
                                                <div class="product-slide-4 no-arrow mb--5">
                                                    @foreach($productGroup as $productData)
                                                        @php
                                                            $product = \App\Models\Product::find($productData['id']);
                                                        @endphp
                                                        <div>
                                                            <div class="digipro-box">
                                                                <div class="img-wrraper">
                                                                    <a href="#">
                                                                        <img
                                                                            src="{{ asset($productData['image']) }}"
                                                                            alt="product" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                                <div class="product-detail">
                                                                    <div class="pro-btn">
                                                                        <a style="font-size: 10px;" href="javascript:void(0)"
                                                                           class="btn btn-normal btn-sm btn-block tooltip-top"
                                                                           data-tippy-content="{{ $product->category->name }}"> {{ $product->category->name }}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    @foreach($categories as $category)
                                        <div id="tab-{{$category->id}}" class="tab-content product-block2">
                                            @php
                                                $productChunks = array_chunk($category->products->toArray(), 4);
                                            @endphp
                                            @foreach($productChunks as $productGroup)
                                                <div class="col-12">
                                                    <div class="product-slide-4 no-arrow mb--5">
                                                        @foreach($productGroup as $productData)
                                                            @php
                                                                $product = \App\Models\Product::find($productData['id']);
                                                            @endphp
                                                            <div>
                                                                <div class="digipro-box">
                                                                    <div class="img-wrraper">
                                                                        <a href="#">
                                                                            <img
                                                                                src="{{ asset($productData['image']) }}"
                                                                                alt="product" class="img-fluid">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-detail">
                                                                        <div class="pro-btn">
                                                                            <a style="font-size: 10px;" href="javascript:void(0)"
                                                                               class="btn btn-normal btn-sm btn-block tooltip-top"
                                                                               data-tippy-content="{{ $product->category->name }}"> {{ $product->category->name }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product box end -->

        </div>
    </div>

@endsection
