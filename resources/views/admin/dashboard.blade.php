@extends('layout.dashboard')
@section('content')
    <section class="our-dashbord dashbord bgc-f7 pb50 ">
        <div
            class="container-fluid"
            style="padding-right: 20%"
        >
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                <div class="col-lg-9 col-xl-10 maxw100flex-992">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashboard_navigationbar dn db-992">
                                <div class="dropdown">
                                    <button
                                        onclick="myFunction()"
                                        class="dropbtn"
                                    ><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <div class="ff_one">
                                <div class="icon"><span class="flaticon-home"></span></div>
                                <div class="detais">
                                    <div class="timer">{{ $property }}</div>
                                    <p>All Properties</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <div class="ff_one style2">
                                <div class="icon"><span class="flaticon-view"></span></div>
                                <div class="detais">
                                    <div class="timer">{{ $users }}</div>
                                    <p>Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <div class="ff_one style3">
                                <div class="icon"><span class="flaticon-chat"></span></div>
                                <div class="detais">
                                    <div class="timer">2</div>
                                    <p>Agents</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
