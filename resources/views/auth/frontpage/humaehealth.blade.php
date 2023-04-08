@section('content')
<section style="margin-bottom:0;">
    @extends('auth.header.header')
    @extends('auth.navbar.layouts')
</section>

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
<div class="main-header" style="background-color: #fff">
    <section class="section pb-0 mb-4">
        <div class="container" style="margin-bottom:5%;">
            <div class="row align-items-center">
                <div class="col-md-12 md-4">
                    <h2 class="section-header text-primary"><strong>About our Handset</strong></h2>
                </div>
                <div class="col-md-6 mt-4 text-center mx-auto ">
                    <img data-aos="fade-up" src="{{url('storage/img/6.png')}}" class="rounded mx-auto d-block"
                        width="50%">
                    <h2 class="mt-3" style="color: #2e3749"><strong>Loading Screen</strong></h2>
                </div>
                <div class="col-md-6 mt-4 mx-auto">
                    <img data-aos="fade-up" src="{{url('storage/img/8.png')}}" class="rounded mx-auto d-block"
                        width="50%">
                        <h2 class="mt-3 text-center"style="color: #2e3749"><strong>Homepage Screen</strong></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 mb-5 mx-auto bg-primary" style="padding-bottom: 20px">
                <h2 class="text-center p-4 mt-4" style="color:white;">Humanet Handset Icon Description</h2>
                <h6 class="text-center px-5" style="color:white;">We, as Humanets, have an icon in our handset that
                    includes
                    My Humanet IDs, Emergency,
                    Medical, Travel, Laboratory Test, and X-ray.<br> This will assist you in a variety of ways and save
                    you
                    time. This phone has your personal information on it. <br>medical information about your emergency
                    contact
                    your past travel experiences your urinalysis and<br> x-ray results in pdf or picture format This is
                    especially useful if you require a file at any time or from any location.
                </h6>
            </div>
        </div>

        <div class="container" style="margin-bottom:5%;">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <div class="tab p-1" data-aos="fade-right">
                        <button class="tablinks w-100 text-center p-4" onclick="openCity(event, 'Id')">My Humanet
                            ID's</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="tab p-1" data-aos="fade-right">
                        <button class="tablinks w-100 text-center p-4"
                            onclick="openCity(event, 'Emrgency')">Emergency</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="tab p-1" data-aos="fade-right">
                        <button class="tablinks w-100 text-center p-4"
                            onclick="openCity(event, 'Medical')">Medical</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="tab p-1" data-aos="fade-right">
                        <button class="tablinks w-100 text-center p-4"
                            onclick="openCity(event, 'Travel')">Travel</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="tab p-1" data-aos="fade-right">
                        <button class="tablinks w-100 text-center p-4"
                            onclick="openCity(event, 'Laboratory')">Laboratory</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="tab p-1" data-aos="fade-right">
                        <button class="tablinks w-100 text-center p-4" onclick="openCity(event, 'Xray')">Xray</button>
                    </div>
                </div>

                <div class="col-md-12  mx-auto" style="position:relative; top:80px;">
                    <div id="Id" class="tabcontent text-center shadow p-3 mb-5 bg-body rounded">
                        <div class="row">
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card" style="width: 100%;">
                                    <img src="{{url('storage/img/humanetehealth/humanetID/personalia1.jpg')}}" class="card-img-top"
                                        Style="height:250px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:Black">Personalia</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card" style="width: 100%;">
                                    <img src="{{url('storage/img/humanetehealth/humanetID/visa.jfif')}}" class="card-img-top"
                                        Style="height:250px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:Black">Visa</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card" style="width: 100%;">
                                    <img src="{{url('storage/img/humanetehealth/humanetID/passport1.jpg')}}" class="card-img-top"
                                        Style="height:250px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:Black">Passport</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-4">
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card" style="width: 100%;">
                                    <img src="{{url('storage/img/humanetehealth/humanetID/payment1.jpg')}}" class="card-img-top"
                                        Style="height:250px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:Black">Payment Cards</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card" style="width: 100%;">
                                    <img src="{{url('storage/img/humanetehealth/humanetID/member1.jpg')}}" class="card-img-top"
                                        Style="height:250px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:Black">Member Cards</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card" style="width: 100%;">
                                    <img src="{{url('storage/img/humanetehealth/humanetID/insurance1.jpg')}}" class="card-img-top"
                                        Style="height:250px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:Black">Insurance Cards</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 mx-auto" style="position: relative; left:18%">
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card" style="width: 100%;">
                                    <img src="{{url('storage/img/humanetehealth/humanetID/driver1.jpg')}}" class="card-img-top"
                                        Style="height:250px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:Black">Driver Cards</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card" style="width: 100%;">
                                    <img src="{{url('storage/img/humanetehealth/humanetID/professional1.jpg')}}"
                                        class="card-img-top" Style="height:250px;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:Black">Professional Cards</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Emrgency" class="tabcontent text-center shadow p-3 mb-5 bg-body rounded">
                        <div class="col-12-md">
                            <div class="row">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/emergency/medication1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Medication</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/emergency/medical1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Medical</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/emergency/certificate1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Cerficate</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-4">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/emergency/contact1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Contact</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/emergency/diagnosis1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Diagonsis</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/emergency/blood1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">BloodType</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Medical" class="tabcontent text-center shadow p-3 mb-5 bg-body rounded">
                        <div class="col-12-md">
                            <div class="row">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/medical/medicalexam1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Medical Examination</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/medical/medicalhistory1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Medical History</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/medical/medicaltest1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Medical Test</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-4">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/medical/prescription1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Perscription</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/medical/diagnosis1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Diagnosis</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/medical/fitness1.jfif')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Fitness</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Travel" class="tabcontent text-center shadow p-3 mb-5 bg-body rounded">
                        <div class="col-12-md">
                            <div class="row">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/travel/travelcertificate1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Travel Certificate</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/travel/download1.jfif')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Travel Insurance</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/travel/traveldocumentaion1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Travel Documentation</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-4">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/travel/travelmedication1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Travel Medication</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/travel/wellness1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Wellness</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/travel/vaccine1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Vaccine</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 mx-auto" style="position: relative; left:18%">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/travel/microbiology.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Microbiology</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/travel/lifestyle1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Life Style</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Laboratory" class="tabcontent text-center shadow p-3 mb-5 bg-body rounded">
                        <div class="col-12-md">
                            <div class="row">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/laboratory/bio1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Biology</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/laboratory/immunology1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Immunology</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/laboratory/microbiology.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Microbiology</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-4">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/laboratory/pathology1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Pathology</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/laboratory/hematology1.jpg')}}"
                                            class="card-img-top" Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Hematology</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/laboratory/urine1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Urine</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 mx-auto" style="position: relative; left:18%">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/laboratory/stool1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Stool</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/laboratory/others1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Others</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Xray" class="tabcontent text-center shadow p-3 mb-5 bg-body rounded">
                        <div class="col-12-md">
                            <div class="row">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/xray/xray1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Xray</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/xray/ecg1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">ECG</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/xray/mri1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">MRI</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-4">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/xray/ultrasound1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Ultrasound</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/xray/stress1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">Stress</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card" style="width: 100%;">
                                        <img src="{{url('storage/img/humanetehealth/xray/ctscan1.jpg')}}" class="card-img-top"
                                            Style="height:250px;" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:Black">CTSCAN</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up
                                                the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-up">
                <img src="{{url('storage/img/handphone.png')}}" width="100%">
            </div>
            <div class="col-md-4 mx-auto">
                <h2 class="text-center section-heading">Download the App now!</h2>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img class="rounded mx-auto d-block" src="{{url('storage/img/app/qr.png')}}" width="70%"></button>


                <p>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="img text-end p-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <img class="rounded mx-auto d-block"  width="100%"></button>
            </div>
        </div>
    </div>
</div>
@extends('auth.header.footer')