@extends('front.index')
@section('title', 'Properties')
@section('content')
    <div class="single_page_listing_tab">
        <div
            class="tab-content"
            id="myTabContent"
        >
            <div
                class="tab-pane fade show active"
                id="slider_tabs"
                role="tabpanel"
                aria-labelledby="slider-tab"
            >
                <!-- 10th Home Slider -->
                <div class="home10-mainslider">
                    <div class="container-fluid p0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-banner-wrapper home10">
                                    <div class="banner-style-one owl-theme owl-carousel">
                                        @if (is_array($properties->images) || is_object($properties->images))
                                            @foreach ($properties->images as $key => $imagee)
                                                <div
                                                    class="slide slide-one"
                                                    style="background-image: url({{ asset('upload/Property/' . $imagee) }});height: 750px;"
                                                ></div>
                                            @endforeach
                                        @else
                                            <div
                                                class="slide slide-one"
                                                style="background-image: url({{ asset('upload/Property/' . $imagee) }});height: 750px;"
                                            ></div>
                                        @endif
                                    </div>
                                    <div class="carousel-btn-block banner-carousel-btn">
                                        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>
                                        <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                                    </div><!-- /.carousel-btn-block banner-carousel-btn -->
                                </div><!-- /.main-banner-wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agent Single Grid View -->
    <section class="our-agent-single bgc-f7 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="single_property_title mt30-767 mb30-767">
                        <h2>{{ $properties->title }}</h2>
                        <p>{{ $properties->location->city }} / {{ $properties->location->sub_city }}</p>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="single_property_social_share">
                        <div class="price float-left fn-400">
                            <h2>{{ $properties->price }} Birr
                                @if ($properties->service_type == 'loan')
                                    @if ($properties->payment_type == 'monthly')
                                        <small>/mo</small>
                                    @else
                                        <small>/term</small>
                                    @endif
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 mt50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="listing_single_description">
                                <div class="lsd_list">
                                    <ul class="mb0">
                                        <li class="list-inline-item"><a href="#">{{ $properties->property_type }}</a></li>
                                        <li class="list-inline-item"><a href="#">Beds: {{ $properties->bedroom }}</a></li>
                                        <li class="list-inline-item"><a href="#">Baths: {{ $properties->bathroom }}</a></li>
                                        <li class="list-inline-item"><a href="#">Sq Ft: {{ $properties->size }}</a></li>
                                    </ul>
                                </div>

                                <h4 class="mb30">Description</h4>
                                <p class="mb25">{{ $properties->property_description }}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="additional_details">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb15">Property Details</h4>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="list-inline-item">
                                            <li>
                                                <p>Property Title :</p>
                                            </li>
                                            <li>
                                                <p>Location :</p>
                                            </li>
                                            <li>
                                                <p>Service Type :</p>
                                            </li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li>
                                                <p><span>{{ $properties->title }} </span></p>
                                            </li>
                                            <li>
                                                <p><span>{{ $properties->location->city }}</span></p>
                                            </li>
                                            <li>
                                                <p><span>{{ $properties->service_type }}</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="list-inline-item">
                                            <li>
                                                <p>Bedrooms :</p>
                                            </li>
                                            <li>
                                                <p>Bathrooms :</p>
                                            </li>

                                        </ul>
                                        <ul class="list-inline-item">
                                            <li>
                                                <p><span>{{ $properties->bedroom }}</span></p>
                                            </li>
                                            <li>
                                                <p><span> {{ $properties->bathroom }}</span></p>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="list-inline-item">
                                            <li>
                                                <p>Property Type :</p>
                                            </li>
                                            <li>
                                                <p>Property Size :</p>
                                            </li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li>
                                                <p><span>{{ $properties->property_type }}</span></p>
                                            </li>
                                            <li>
                                                <p><span>{{ $properties->size }} Sq Ft</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-12">
                            <div class="whats_nearby mt30">
                                <h4 class="mb10">What's Nearby</h4>
                                <div class="education_distance mb15">
                                    <h5><span class="flaticon-college-graduation"></span> Education</h5>
                                    <div class="single_line">
                                        <p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="education_distance mb15 style2">
                                    <h5><span class="flaticon-heartbeat"></span> Health & Medical</h5>
                                    <div class="single_line">
                                        <p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="education_distance style3">
                                    <h5><span class="flaticon-front-of-bus"></span> Transportation</h5>
                                    <div class="single_line">
                                        <p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-12">
                            <h4 class="mt30 mb30">Similar Properties</h4>
                        </div>
                        @foreach ($similar as $item)
                            <div class="col-lg-6">
                                <div class="feat_property home7 style4">
                                    <div class="thumb">
                                        @if (is_array($item->images) || is_object($item->images))
                                            <div class="fp_single_item_slider">
                                                @foreach ($item->images as $key => $imagee)
                                                    <div class="item">
                                                        <img
                                                            class="img-whp"
                                                            src="{{ asset('upload/Property/' . $imagee) }}"
                                                            alt="fp1.jpg"
                                                            style="height: 300px; object-fit: cover;"
                                                        >
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="fp_single_item_slider">
                                                <div class="item">
                                                    <img
                                                        class="img-whp"
                                                        src="{{ asset('upload/Property/' . $imagee) }}"
                                                        alt="fp1.jpg"
                                                        style="height: 300px; object-fit: cover;"
                                                    >
                                                </div>
                                            </div>
                                        @endif
                                        <div class="thmb_cntnt style2">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">
                                                        @if ($item->service_type == 'loan')
                                                            For Rent
                                                        @else
                                                            For Sell
                                                        @endif
                                                    </a></li>
                                                {{-- <li class="list-inline-item"><a href="#">Featured</a></li> --}}
                                            </ul>
                                        </div>
                                        <div class="thmb_cntnt style3">
                                            <ul class="icon mb0">
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                            </ul>
                                            <a
                                                class="fp_price"
                                                href="#"
                                            >{{ $item->price }} Birr
                                                @if ($item->service_type == 'loan')
                                                    @if ($item->payment_type == 'monthly')
                                                        <small>/mo</small>
                                                    @else
                                                        <small>/term</small>
                                                    @endif
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{ url('selected-property/' . $item->id) }}">
                                        <div class="details">
                                            <div class="tc_content">
                                                <p class="text-thm">{{ $item->property_type }}</p>
                                                <h4>{{ $item->title }}</h4>
                                                <p><span class="flaticon-placeholder"></span>{{ $item->location->sub_city }}</p>
                                                <ul class="prop_details mb0">
                                                    <li class="list-inline-item"><a href="#">Beds:{{ $item->bedroom }}</a></li>
                                                    <li class="list-inline-item"><a href="#">Baths:{{ $item->bathroom }}</a></li>
                                                    <li class="list-inline-item"><a href="#">Sq Ft: {{ $item->size }}square</a></li>
                                                </ul>
                                            </div>
                                            <div class="fp_footer">
                                                <ul class="fp_meta float-left mb0">
                                                    <li class="list-inline-item"><a href="#">{{ $item->location->city }}</a></li>
                                                </ul>
                                                <div class="fp_pdate float-right">{{ $item->created_at->diffForHumans() }}</div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
