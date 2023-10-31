@extends('layouts.website')


@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-color:#a6ce39">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">{{ $category->name }}</h1>
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
                        <aside class="side-bar">
                            <div class="widget">
                                <img src="images/ads/add.png" alt="" />
                            </div>
                            <div class="widget widget_categories">
                                <h4 class="widget-title">Categories List</h4>
                                <ul>
                                    @foreach (App\Models\Category::all() as $other_category)
                                        <li><a href="{{ url('/sub_categories/' . $other_category->id) }}">{{ $other_category->name }}
                                            </a> &nbsp;</li>
                                    @endforeach

                                </ul>
                            </div>

                        </aside>
                    </div>
                    <!-- Ednd of sidebar -->


                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <div class="text-center m-b50">
                            <h2 class="m-t0">{{ $category->name }}</h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-primary style-skew"></div>
                            </div>
                        </div>
                        <div class="row" id="masonry">

                            @foreach ($category->sub_categories as $sub_category)
                                <?php

                                $subCategoryImage = App\Models\Product::where('sub_category_id', $sub_category->id)
                                    ->whereNotNull('image')
                                    ->first('image');
                                ?>

                                <div class="col-lg-4 col-sm-12 m-b30 product-item card-container">
                                    <div class="dez-box">
                                        <div class="dez-thum-bx dez-img-effect">

                                            @if ($sub_category->image != null)
                                                <img style="width: 500px; height:306px"
                                                    src="{{ asset($sub_category->image) }}">
                                            @elseif($subCategoryImage != null)
                                                <img style="width: 500px; height:306px"
                                                    src="{{ asset($subCategoryImage->image) }}">
                                            @else
                                                <img style="width: 500px; height:306px"
                                                    src="{{ asset('/website/images/our-services/service-4/pic1.jpg') }}">
                                            @endif

                                        </div>
                                        <div class="dez-info p-a20 text-center">
                                            <h4 class="dez-title m-t0 m-b5 text-uppercase"><a
                                                    href="{{ url('/sub_category_details/' . $sub_category->id) }}">{{ $sub_category->name }}</a>
                                            </h4>

                                            <div class="m-t15">
                                                <a href="{{ url('/sub_category_details/' . $sub_category->id) }}"
                                                    class="site-button">View More
                                                    ({{ $sub_category->products->count() }})
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>


            </div>
            <!-- Product END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
@endsection
