@extends('front.index')
@section('content')
    <section class="home-one home1-overlay home1_bgi1">
        <div class="container">
            <div class="row posr">
                <div class="col-lg-12">
                    <div class="home_content">
                        <div class="home-text text-center">
                            <h2 class="fz55">Find Your Dream Home</h2>
                        </div>
                        <div class="home_adv_srch_opt">
                            <ul
                                class="nav nav-pills"
                                id="pills-tab"
                                role="tablist"
                            >
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        id="pills-home-tab"
                                        data-toggle="pill"
                                        href="#pills-home"
                                        role="tab"
                                        aria-controls="pills-home"
                                        aria-selected="true"
                                    >Buy</a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="pills-profile-tab"
                                        data-toggle="pill"
                                        href="#pills-profile"
                                        role="tab"
                                        aria-controls="pills-profile"
                                        aria-selected="false"
                                    >Rent</a>
                                </li>
                            </ul>
                            <div
                                class="tab-content home1_adsrchfrm"
                                id="pills-tabContent"
                            >
                                <div
                                    class="tab-pane fade show active"
                                    id="pills-home"
                                    role="tabpanel"
                                    aria-labelledby="pills-home-tab"
                                >
                                    <div class="home1-advnc-search">
                                        <ul class="h1ads_1st_list mb0">
                                            <li class="list-inline-item">
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="exampleInputName1"
                                                        placeholder="Enter keyword..."
                                                    />
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
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
                                            <li class="list-inline-item">
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="exampleInputEmail"
                                                        placeholder="Location"
                                                    />
                                                    <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="small_dropdown2">
                                                    <div
                                                        id="prncgs"
                                                        class="btn dd_btn"
                                                    >
                                                        <span>Price</span>
                                                        <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                                    </div>
                                                    <div class="dd_content2">
                                                        <div class="pricing_acontent">
                                                            <!-- <input type="text" class="amount" placeholder="$52,239">
               <input type="text" class="amount2" placeholder="$985,14">
               <div class="slider-range"></div> -->
                                                            <span id="slider-range-value1"></span>
                                                            <span id="slider-range-value2"></span>
                                                            <div id="slider"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="custome_fields_520 list-inline-item">
                                                <div class="navbered">
                                                    <div class="mega-dropdown">
                                                        <span
                                                            id="show_advbtn"
                                                            class="dropbtn"
                                                        >Advanced <i class="flaticon-more pl10 flr-520"></i></span>
                                                        <div class="dropdown-content">
                                                            <div class="row p15">
                                                                <div class="col-lg-12">
                                                                    <h4 class="text-thm3">Amenities</h4>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck1"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck1"
                                                                                >Air Conditioning</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck2"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck2"
                                                                                >Lawn</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck3"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck3"
                                                                                >Swimming Pool</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck4"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck4"
                                                                                >Barbeque</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck5"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck5"
                                                                                >Microwave</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck6"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck6"
                                                                                >TV Cable</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck7"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck7"
                                                                                >Dryer</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck8"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck8"
                                                                                >Outdoor Shower</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck9"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck9"
                                                                                >Washer</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck10"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck10"
                                                                                >Gym</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck11"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck11"
                                                                                >Refrigerator</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck12"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck12"
                                                                                >WiFi</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck13"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck13"
                                                                                >Laundry</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck14"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck14"
                                                                                >Sauna</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck15"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck15"
                                                                                >Window Coverings</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="row p15 pt0-xsd">
                                                                <div class="col-lg-11 col-xl-10">
                                                                    <ul class="apeartment_area_list mb0">
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select class="selectpicker w100 show-tick">
                                                                                    <option>Bathrooms</option>
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select class="selectpicker w100 show-tick">
                                                                                    <option>Bedrooms</option>
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
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
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select class="selectpicker w100 show-tick">
                                                                                    <option>Built-up Area</option>
                                                                                    <option>Adana</option>
                                                                                    <option>Ankara</option>
                                                                                    <option>Antalya</option>
                                                                                    <option>Bursa</option>
                                                                                    <option>Bodrum</option>
                                                                                    <option>Gaziantep</option>
                                                                                    <option>İstanbul</option>
                                                                                    <option>İzmir</option>
                                                                                    <option>Konya</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-1 col-xl-2">
                                                                    <div class="mega_dropdown_content_closer">
                                                                        <h5 class="text-thm text-right mt15">
                                                                            <span
                                                                                id="hide_advbtn"
                                                                                class="curp"
                                                                            >Hide</span>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="search_option_button">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-thm"
                                                    >Search</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="pills-profile"
                                    role="tabpanel"
                                    aria-labelledby="pills-profile-tab"
                                >
                                    <div class="home1-advnc-search">
                                        <ul class="h1ads_1st_list mb0">
                                            <li class="list-inline-item">
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="exampleInputName2"
                                                        placeholder="Enter keyword..."
                                                    />
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
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
                                            <li class="list-inline-item">
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="exampleInputEmail3"
                                                        placeholder="Location"
                                                    />
                                                    <label for="exampleInputEmail3"><span class="flaticon-maps-and-flags"></span></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="small_dropdown2">
                                                    <div
                                                        id="prncgs2"
                                                        class="btn dd_btn"
                                                    >
                                                        <span>Price</span>
                                                        <label for="exampleInputEmail4"><span class="fa fa-angle-down"></span></label>
                                                    </div>
                                                    <div class="dd_content2">
                                                        <div class="pricing_acontent">
                                                            <input
                                                                type="text"
                                                                class="amount"
                                                                placeholder="$52,239"
                                                            />
                                                            <input
                                                                type="text"
                                                                class="amount2"
                                                                placeholder="$985,14"
                                                            />
                                                            <div class="slider-range"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="custome_fields_520 list-inline-item">
                                                <div class="navbered">
                                                    <div class="mega-dropdown">
                                                        <span
                                                            id="show_advbtn2"
                                                            class="dropbtn"
                                                        >Advanced <i class="flaticon-more pl10 flr-520"></i></span>
                                                        <div class="dropdown-content">
                                                            <div class="row p15">
                                                                <div class="col-lg-12">
                                                                    <h4 class="text-thm3">Amenities</h4>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck16"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck16"
                                                                                >Air Conditioning</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck17"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck17"
                                                                                >Lawn</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck18"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck18"
                                                                                >Swimming Pool</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck19"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck19"
                                                                                >Barbeque</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck20"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck20"
                                                                                >Microwave</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck21"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck21"
                                                                                >TV Cable</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck22"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck22"
                                                                                >Dryer</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck23"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck23"
                                                                                >Outdoor Shower</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck24"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck24"
                                                                                >Washer</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck25"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck25"
                                                                                >Gym</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck26"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck26"
                                                                                >Refrigerator</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck27"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck27"
                                                                                >WiFi</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck28"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck28"
                                                                                >Laundry</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck29"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck29"
                                                                                >Sauna</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck30"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck30"
                                                                                >Window Coverings</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="row p15 pt0-xsd">
                                                                <div class="col-lg-11 col-xl-10">
                                                                    <ul class="apeartment_area_list mb0">
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select class="selectpicker w100 show-tick">
                                                                                    <option>Bathrooms</option>
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select class="selectpicker w100 show-tick">
                                                                                    <option>Bedrooms</option>
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
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
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select class="selectpicker w100 show-tick">
                                                                                    <option>Built-up Area</option>
                                                                                    <option>Adana</option>
                                                                                    <option>Ankara</option>
                                                                                    <option>Antalya</option>
                                                                                    <option>Bursa</option>
                                                                                    <option>Bodrum</option>
                                                                                    <option>Gaziantep</option>
                                                                                    <option>İstanbul</option>
                                                                                    <option>İzmir</option>
                                                                                    <option>Konya</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-1 col-xl-2">
                                                                    <div class="mega_dropdown_content_closer">
                                                                        <h5 class="text-thm text-right mt15">
                                                                            <span
                                                                                id="hide_advbtn2"
                                                                                class="curp"
                                                                            >Hide</span>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="search_option_button">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-thm"
                                                    >Search</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Properties -->
    <section
        id="feature-property"
        class="feature-property bgc-f7"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#feature-property">
                        <div class="mouse_scroll">
                            <div class="icon">
                                <h4>Scroll Down</h4>
                                <p>to discover more</p>
                            </div>
                            <div class="thumb">
                                <img
                                    src="{{ asset('images/resource/mouse.png') }}"
                                    alt="mouse.png"
                                />
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container ovh">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center mb40">
                        <h2>Featured Properties</h2>
                        <p>Best Houses with fair price</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="feature_property_slider">
                        @foreach ($properties as $key => $item)
                            <div class="item">
                                <div class="feat_property">
                                    <div class="thumb">
                                        @if (is_array($item->images) || is_object($item->images))
                                            @foreach ($item->images as $key => $imagee)
                                                @if ($key == 0)
                                                    <img
                                                        class="img-whp"
                                                        src="{{ asset('upload/Property/' . $imagee) }}"
                                                        alt="fp1.jpg"
                                                        style="height: 300px"
                                                    />
                                                @endif
                                            @endforeach
                                        @else
                                            <img
                                                class="img-whp"
                                                src="{{ asset('upload/Property/' . $imagee) }}"
                                                alt="fp1.jpg"
                                            />
                                        @endif
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">For {{ $item->service_type }}</a></li>
                                                {{-- <li class="list-inline-item"><a href="#">Featured</a></li> --}}
                                            </ul>
                                            <ul class="icon mb0">
                                                <li class="list-inline-item">
                                                    <a href="#"><span class="flaticon-transfer-1"></span></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><span class="flaticon-heart"></span></a>
                                                </li>
                                            </ul>
                                            <a
                                                class="fp_price"
                                                href="#"
                                            >{{ number_format_short($item->price) }} Br<small>
                                                    @if ($item->service_type == 'loan')
                                                        /{{ ucwords($item->payment_type) }}
                                                    @endif
                                                </small>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p class="text-thm">{{ ucwords($item->property_type) }}</p>
                                            <h4>{{ $item->title }}</h4>
                                            <p>
                                                <span class="flaticon-placeholder"></span> {{ $item->location->sub_city }}
                                            </p>
                                            <ul class="prop_details mb0">
                                                <li class="list-inline-item"><a href="#">Beds: {{ $item->bedroom }}</a></li>
                                                <li class="list-inline-item"><a href="#">Baths: {{ $item->bathroom }}</a></li>
                                                <li class="list-inline-item"><a href="#">Sq Ft: {{ $item->size }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="fp_footer">
                                            <div class="fp_pdate float-right">{{ $item->created_at->diffForHumans() }}</div>
                                            <div class="fp_pdate ">{{ $item->location->city }}</div>
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
    </section>

    <!-- Property Cities -->
    <section
        id="property-city"
        class="property-city pb30"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Find Properties in These Sub-Cities</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-xl-5">
                    <div class="properti_city">
                        <div class="thumb">
                            <img
                                class="img-fluid w100"
                                src="{{ asset('images/property/pc1.jpg') }}"
                                alt="pc1.jpg"
                            />
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Bole</h4>
                                <p>{{ $bole }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7">
                    <div class="properti_city">
                        <div class="thumb">
                            <img
                                class="img-fluid w100"
                                src="{{ asset('images/property/pc2.jpg') }}"
                                alt="pc2.jpg"
                            />
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Yeka</h4>
                                <p>18 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7">
                    <div class="properti_city">
                        <div class="thumb">
                            <img
                                class="img-fluid w100"
                                src="{{ asset('images/property/pc3.jpg') }}"
                                alt="pc3.jpg"
                            />
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Lafto</h4>
                                <p>89 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5">
                    <div class="properti_city">
                        <div class="thumb">
                            <img
                                class="img-fluid w100"
                                src="{{ asset('images/property/pc4.jpg') }}"
                                alt="pc4.jpg"
                            />
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Addis Ketema</h4>
                                <p>47 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Chose Us -->
    <section
        id="why-chose"
        class="whychose_us bgc-f7 pb30"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Why Choose Us</h2>
                        <p>We provide full service at every step.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-high-five"></span>
                        </div>
                        <div class="details">
                            <h4>Trusted By Thousands</h4>
                            <p>
                                Satisfied customers keep coming back to Gojoye.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-home-1"></span>
                        </div>
                        <div class="details">
                            <h4>Wide Range Of Properties</h4>
                            <p>
                                At Gojoye, we understand that finding the right property can be a daunting task. That's why we offer a variety of tools and resources to help our customers make informed decisions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-profit"></span>
                        </div>
                        <div class="details">
                            <h4>Financing Made Easy</h4>
                            <p>
                                Whether you're looking to rent, buy, or sell property, Gojoye is your trusted partner in the process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Testimonials -->
    <section
        id="our-testimonials"
        class="our-testimonial"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2 class="color-white">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="testimonial_grid_slider">
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="{{ asset('images/testimonial/1.jpg') }}"
                                        alt="1.jpg"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="{{ asset('images/testimonial/1.jpg') }}"
                                        alt="1.jpg"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="{{ asset('images/testimonial/1.jpg') }}"
                                        alt="1.jpg"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="{{ asset('images/testimonial/1.jpg') }}"
                                        alt="1.jpg"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img
                                        src="{{ asset('images/testimonial/1.jpg') }}"
                                        alt="1.jpg"
                                    />
                                </div>
                                <div class="details">
                                    <h4>Belaynesh Tolosa</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">
                                        Gojoye helped me find my dream home!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Blog -->
    <!-- Our Partners -->
    <section
        id="our-partners"
        class="our-partners"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Our Partners</h2>
                        <p>We only work with the best companies around the globe</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="{{ asset('images/partners/1.png') }}"
                            alt="1.png"
                        />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="{{ asset('images/partners/2.png') }}"
                            alt="2.png"
                        />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="{{ asset('images/partners/3.png') }}"
                            alt="3.png"
                        />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="{{ asset('images/partners/4.png') }}"
                            alt="4.png"
                        />
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img
                            class="img-fluid"
                            src="{{ asset('images/partners/5.png') }}"
                            alt="5.png"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Partners -->
    <!-- Our Footer -->

@endsection