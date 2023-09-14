@extends('layouts.website')

@section('content')
    <style>
        /* Default styles for larger screens */
        .bg-imgs {
            background-image: url('{{ asset('assets/banners/contact.jpg') }}');
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

        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
            color: black;
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

    <section class="contact-page section-big-py-space b-g-light">
        <div class="custom-container">
            <div class="row section-big-pb-space">
                <div class="col-xl-6 {{--offset-xl-3--}}">
                    <h3 class="text-center mb-3">Get in touch</h3>
                    <form class="theme-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                           required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" placeholder="Last Name"
                                           required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="review">Phone number</label>
                                    <input type="text" class="form-control" id="review" placeholder="Enter your number"
                                           required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <label>Write Your Message</label>
                                    <textarea class="form-control" placeholder="Write Your Message" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-normal" type="submit">Send Your Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 {{--offset-xl-3--}}">
                    <h3 class="text-center mb-3">Contact Information</h3>

                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Address</td>
                                    <td>Address comes here</td>
                                </tr>
                                <tr>
                                    <td>Telephone</td>
                                    <td>+263 242 255453</td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>+263 773 937032</td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td><a href="https://imperium.co.zw/" target="_blank">imperium.co.zw</a></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><a href="mailto:sales@imperium.co.zw">sales@imperium.co.zw</a></td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td><a href="#" target="_blank">@Imperium Branding</a></td>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td><a href="https://www.facebook.com/imperiumbranding" target="_blank">Imperium Branding</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 map">
                    <div class="theme-card">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.4150443000367!2d31.046432975971975!3d-17.819168183143592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a51c489f55f5%3A0x4eb18d39194c8c4c!2s97%20Baines%20Ave%2C%20Harare!5e0!3m2!1sen!2szw!4v1694681155905!5m2!1sen!2szw"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
