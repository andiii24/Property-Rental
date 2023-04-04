@extends('front.index')
@section('title', 'Properties')
@section('content')
    <section class="our-listing bgc-f7 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb_content style2 mb0-991">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li
                                class="breadcrumb-item active text-thm"
                                aria-current="page"
                            >Property Listing</li>
                        </ol>
                        <h2 class="breadcrumb_title">Property Listing</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="listing_list_style mb20-xsd tal-991">
                        <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="fa fa-th-large"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="fa fa-th-list"></span></a></li>
                        </ul>
                    </div>
                    <div class="dn db-991 mt30 mb0">
                        <div id="main2">
                            <span
                                id="open2"
                                class="flaticon-filter-results-button filter_open_btn style2"
                            > Show Filter</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="sidebar_listing_grid1 dn-991">
                        <div class="sidebar_listing_list">
                            <div class="sidebar_advanced_search_widget">
                                <ul class="sasw_list mb0">
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputName1"
                                                placeholder="keyword"
                                            >
                                            <label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail"
                                                placeholder="Location"
                                            >
                                            <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Status</option>
                                                    <option>Apartment</option>
                                                    <option>Bungalow</option>
                                                    <option>Condo</option>
                                                    <option>House</option>
                                                    <option>Land</option>
                                                    <option>Single Family</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Property Type</option>
                                                    <option>Apartment</option>
                                                    <option>Bungalow</option>
                                                    <option>Condo</option>
                                                    <option>House</option>
                                                    <option>Land</option>
                                                    <option>Single Family</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="small_dropdown2">
                                            <div
                                                id="prncgs2"
                                                class="btn dd_btn"
                                            >
                                                <span>Price</span>
                                                <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                            </div>
                                            <div class="dd_content2 style2">
                                                <div class="pricing_acontent">
                                                    <input
                                                        type="text"
                                                        class="amount"
                                                        placeholder="$52,239"
                                                    >
                                                    <input
                                                        type="text"
                                                        class="amount2"
                                                        placeholder="$985,14"
                                                    >
                                                    <div class="slider-range"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select
                                                    class="selectpicker"
                                                    data-live-search="true"
                                                    data-width="100%"
                                                    name="bathroom"
                                                >
                                                    <option
                                                        disabled
                                                        selected
                                                    >Bathroom</option>
                                                    <option
                                                        data-tokens="Status1"
                                                        value="1"
                                                    >1</option>
                                                    <option
                                                        data-tokens="Status2"
                                                        value="2"
                                                    >2</option>
                                                    <option
                                                        data-tokens="Status3"
                                                        value="3"
                                                    >3</option>
                                                    <option
                                                        data-tokens="Status4"
                                                        value="4"
                                                    >4</option>
                                                    <option
                                                        data-tokens="Status5"
                                                        value="5"
                                                    >5</option>
                                                    <option
                                                        data-tokens="Status6"
                                                        value="6"
                                                    >6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Bedrooms</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Garages</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>Year built</option>
                                                    <option>2013</option>
                                                    <option>2014</option>
                                                    <option>2015</option>
                                                    <option>2016</option>
                                                    <option>2017</option>
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                    <option>2020</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="min_area list-inline-item">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputName2"
                                                placeholder="Min Area"
                                            >
                                        </div>
                                    </li>
                                    <li class="max_area list-inline-item">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputName3"
                                                placeholder="Max Area"
                                            >
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_button">
                                            <button
                                                type="submit"
                                                class="btn btn-block btn-thm"
                                            >Search</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="grid_list_search_result">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                                <div class="left_area tac-xsd">
                                    <p>9 Search results</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                                <div class="right_area text-right tac-xsd">
                                    <ul>
                                        <li class="list-inline-item"><span class="stts">Status:</span>
                                            <select class="selectpicker show-tick">
                                                <option>All Status</option>
                                                <option>Recent</option>
                                                <option>Old Review</option>
                                            </select>
                                        </li>
                                        <li class="list-inline-item"><span class="shrtby">Sort by:</span>
                                            <select class="selectpicker show-tick">
                                                <option>Featured First</option>
                                                <option>Featured 2nd</option>
                                                <option>Featured 3rd</option>
                                                <option>Featured 4th</option>
                                                <option>Featured 5th</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            @foreach ($properties as $item)
                                <div class="feat_property style4">
                                    <div class="thumb">
                                        <div class="fp_single_item_slider">
                                            <div class="item">
                                                <img
                                                    class="img-whp"
                                                    src="{{ asset('images/property/fp1.jpg') }}"
                                                    alt="fp1.jpg"
                                                >
                                            </div>
                                            <div class="item">
                                                <img
                                                    class="img-whp"
                                                    src="{{ asset('images/property/fp2.jpg') }}"
                                                    alt="fp2.jpg"
                                                >
                                            </div>
                                        </div>
                                        <div class="thmb_cntnt style2">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                <li class="list-inline-item"><a href="#">Featured</a></li>
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
                                            >$13,000<small>/mo</small></a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p class="text-thm">Apartment</p>
                                            <h4>Renovated Apartment</h4>
                                            <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                            <ul class="prop_details mb0">
                                                <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                                <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                                <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                            </ul>
                                        </div>
                                        <div class="fp_footer">
                                            <ul class="fp_meta float-left mb0">
                                                <li class="list-inline-item"><a href="#"><img
                                                            src="{{ asset('images/property/pposter1.png') }}"
                                                            alt="pposter1.png"
                                                        ></a></li>
                                                <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                            </ul>
                                            <div class="fp_pdate float-right">4 years ago</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
