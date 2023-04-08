<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HUMAeHEALTH</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
</head>

<body class="antialiased">
    <!-- Header/NavigationBar -->
    <section style="margin-bottom:10%;">
        
        @extends('auth.navbar.layouts')
        @extends('auth.header.header')

    </section>

    <section>
        <div class="container mb-4">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 data-aos="fade-right" style="color: #fff; font-size:30px">We have re-invented the across border
                        health and medical
                        exchange experience anywhere anytime</h3>
                    <p class="mb-5" data-aos="fade-right" data-aos-delay="100" style="color: #fff; font-size:20px">
                        HumaNet is a trusted, secured international
                        platform, allowing exchange of encrypted anonymazied personal health and medical electronic
                        records
                        "PHMER", between enrolled travelers, accredited international health & medical providers, in
                        partnership
                        with recognized financial and insurance institutions.</p>
                    <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                </div>
                <div class="col-md-4">
                    <img src="{{url('storage/img/hero-image-5.png')}}" alt="Image" class="phone" data-aos="fade-right">
                </div>
            </div>
        </div>
    </section>

    <!-- Body -->
    <div class="wave">
        <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="0" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path
                        d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                        id="Path"></path>
                </g>
            </g>
        </svg>
    </div>
    <section>
        <section class="section">
            <div class="container-fluid" style="background: #fff !important;">
                <div class="sub-header mx-auto">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-5" data-aos="fade-up">
                            <h2 class="section-header text-primary"><strong>About our Handset</strong></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                            <div class="feature-1 text-center">
                                <img src="{{url('storage/img/icon/ids.png')}}" alt="Image" class="phone-1"
                                    data-aos="fade-right">
                                <h3 class="mb-3">My Humanet ID's</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-1 text-center">
                                <img src="{{url('storage/img/icon/emergency.png')}}" alt="Image" class="phone-1"
                                    data-aos="fade-right">
                                <h3 class="mb-3">Emrgency</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-1 text-center">
                                <img src="{{url('storage/img/icon/medical.png')}}" alt="Image" class="phone-1"
                                    data-aos="fade-right">
                                <h3 class="mb-3">Medical</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                            <div class="feature-1 text-center">
                                <img src="{{url('storage/img/icon/travel.png')}}" alt="Image" class="phone-1"
                                    data-aos="fade-right">
                                <h3 class="mb-3">Travel</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-1 text-center">
                                <img src="{{url('storage/img/icon/laboratory.png')}}" alt="Image" class="phone-1"
                                    data-aos="fade-right">
                                <h3 class="mb-3">Laboratory Test</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-1 text-center">
                                <img src="{{url('storage/img/icon/xray.png')}}" alt="Image" class="phone-1"
                                    data-aos="fade-right">
                                <h3 class="mb-3">Xray</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="step bg-secondary p-3" style="border-radius:20px">
                        <span class="number">01</span>
                        <h3>Sign Up</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="step bg-primary p-3" style="border-radius:20px">
                        <span class="number">02</span>
                        <h3>Create Profile</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="step bg-secondary p-3" style="border-radius:20px">
                        <span class="number">03</span>
                        <h3>Enjoy the app</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" style="padding-top:0px;">
        <div class="container">
            <div class="row mx-auto p-4" style="background-color: #f7f5f2; border-radius:20px">
                <div class="col-md-6 mt-5">
                    <p class="humatitle mt-5" style="">Humaepass will help you some way of...</p>
                    <div class="list mt-5 p-2">
                        <p style="color:#7886a1; font-size:15px">Humanepass provides a convenient health passport and mobile medical documentation, allowing
                            individuals to carry their health information with them wherever they go. It can be a useful
                            travel companion and provides peace of mind in case of emergencies, making it easier for
                            healthcare professionals to provide care.
                        </p>
                        <p style="color:#7886a1; font-weight: 700;">Explore our HumeEHealth</p>
                        <div class="d-inline bg-primary text-white"><strong>HumaTeleHealth -><i class='fas fa-angle-right'></i></strong></div>
                        <div class="d-inline" style="background-color: #ffd470"><strong>About us -></strong></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{url('storage/img/Huma_Design.png')}}" class="phonelogo">
                </div>
            </div>
        </div>
    </section>
        <section class="section" style="padding-top:0px;">
        <div class="container">
            <div class="row mx-auto p-4" style="background-color: #fff; border-radius:20px">
                <div class="col-md-12" style="background-color: #fff; padding-top:5%">
                        <h1 class="humatitle1">For our user and provder</h1>
                        <p class="humatitle2">
                        A platform that has earned the affection of both users and employees.
                        </p>
                </div>
                <div class="col-md-6 ">
                    <div class="list1 p-2">
                        <div class = "list2 mt-3 p-5">
                            <div class="d-inline bg-primary text-white mb-4"><strong>For user and Employees</strong></div>
                            <p class="user mt-4 mb-5">Huma users can manage and monitor data processes through the dashboard.</p>
                            <hr>
                            <p style="color: #fff; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Gain exclusive file access as a Huma Club member.</ps>
                            <p style="color: #fff; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Well-versed in current health trends.</p>
                            <p style="color: #fff; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Capable of exchanging information with local and international medical facilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="p-2"style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 20px">
                        <div class ="mt-3 p-5" >
                            <div class="d-inline bg-primary text-white mb-4"style="color: #2e3749"><strong>For Medical and Others</strong></div>
                            <p class="user mt-4 mb-5" style="color: #2e3749">Huma medical can manage and monitor data processes through the dashboard.</p>
                            <hr>
                            <p style="color: #2e3749; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Gain exclusive file access as a Huma Club member.</ps>
                            <p style="color: #2e3749; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Well-versed in current health trends.</p>
                            <p style="color: #2e3749; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Capable of exchanging information with local and international medical facilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @extends('auth.header.footer')
</body>

</html>
