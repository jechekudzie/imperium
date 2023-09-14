@extends('layouts.website')

@section('content')
    <style>
        /* Default styles for larger screens */
        .bg-imgs {
            background-image: url('{{ asset('assets/banners/about_us.jpg') }}');
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

    <!-- about section start -->
    <section class="about-page section-big-py-space">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-8">

                       {!! $about_us->description !!}

                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- about section start -->
    <section class="about-page section-big-py-space">
        <div class="custom-container">
            <div class="row">
                <div style="margin-bottom: 20px;" class="col-lg-12">
                    <div class="banner-section"><img src="{{asset($customer_orientation->image)}}" class="img-fluid   w-100" alt="">
                    </div>
                </div>
                <div  class="col-lg-8">

                    {!! $customer_orientation->description !!}

                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

@endsection
