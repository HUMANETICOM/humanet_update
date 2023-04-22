<section style="margin-bottom:10%;">
    @extends('auth.navbar.layouts')
</section>
<section class="section">
    <div class="container">
        <div class="row mb-5 align-items-end">
            <div class="col-md-6" data-aos="fade-up">
                <h2>Application Form Introduction</h2>
                <p class="mb-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus
                    incidunt ut officiis explicabo inventore.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3" data-aos="fade-up">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="personalia.php">Step 1: Personalia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="contact1.php">Step 2: Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="id.php">Step 3: ID's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="insurance.php">Step 4: Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Step 5: Bank Membership Cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Step 6: Start Medical Info</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 mb-5 mb-md-0" order-2 data-aos="fade-up">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="health-tab" data-bs-toggle="tab" data-bs-target="#health"
                                type="button" role="tab" aria-controls="health" aria-selected="false">Health
                                Insurance</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="travel-tab" data-bs-toggle="tab" data-bs-target="#travel"
                                type="button" role="tab" aria-controls="travel" aria-selected="false">Travel
                                Insurance</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="accident-tab" data-bs-toggle="tab" data-bs-target="#accident"
                                type="button" role="tab" aria-controls="travel" aria-selected="false">Accident
                                Insurance</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="vehicles-tab" data-bs-toggle="tab" data-bs-target="#vehicles"
                                type="button" role="tab" aria-controls="travel" aria-selected="false">Vehicles
                                Insurance</button>
                        </li>
                    </ul>
                </form>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active mt-3" id="health" role="tabpanel"
                        aria-labelledby="health-tab">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                
                                <div class="col-md-12 form-group mt-3 mt-md-0">
                                    <div class="container12 mb-2">
                                        <label for="text">Health Insurance</label>
                                        <input type="text" class="form-control" id="text"
                                            placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="container12">
                                        <label for="date">Date of Issue</label>
                                        <input type="date" class="form-control" id="date" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="container12">
                                        <label for="date">Date of Expiry</label>
                                        <input type="date" class="form-control" id="date" />
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mt-3">
                                    <div class="container12">
                                        <label class="form-label" for="customFile">Insurance Picture</label>
                                        <input type="file" class="form-control" id="customFile" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    

                    <div class="tab-pane fade show mt-3" id="travel" role="tabpanel" aria-labelledby="travel-tab">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-12 form-group mt-3 mt-md-0">
                                    <div class="container13 mb-2">
                                        <label for="text">Travel Insurance</label>
                                        <input type="text" class="form-control" id="text"
                                            placeholder="" />   
                                    </div>
                                </div>
                                
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="container13">
                                        <label for="date">Date of Issue</label>
                                        <input type="date" class="form-control" id="date" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="container13">
                                        <label for="date">Date of Expiry</label>
                                        <input type="date" class="form-control" id="date" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <div class="container13">
                                        <label class="form-label" for="customFile">Insurance Picture</label>
                                        <input type="file" class="form-control" id="customFile" />
                                    </div>
                                </div>
                            </div>
                        </form>
                       
                    </div>

                    <div class="tab-pane fade show mt-3" id="accident" role="tabpanel" aria-labelledby="accident-tab">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-12 form-group mt-3 mt-md-0">
                                    <div class="container14 mb-2">
                                        <label for="text">Accident Insurance</label>
                                        <input type="text" class="form-control" id="text"
                                            placeholder=""/>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="container14">
                                        <label for="date">Date of Issue</label>
                                        <input type="date" class="form-control" id="date" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="container14">
                                        <label for="date">Date of Expiry</label>
                                        <input type="date" class="form-control" id="date" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <div class="container14">
                                        <label class="form-label" for="customFile">Insurance Picture</label>
                                        <input type="file" class="form-control" id="customFile" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>

                    <div class="tab-pane fade show mt-3" id="vehicles" role="tabpanel" aria-labelledby="vehicles-tab">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-12 form-group mt-3 mt-md-0">
                                    <div class="container15 mb-2">
                                        <label for="text">Vehicle Insurance</label>
                                        <input type="text" class="form-control" id="text"
                                            placeholder="" />
                                    </div>
                                </div>
                                
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="container15">
                                        <label for="date">Date of Issue</label>
                                        <input type="date" class="form-control" id="date" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="container15">
                                        <label for="date">Date of Expiry</label>
                                        <input type="date" class="form-control" id="date" />
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <div class="container15">
                                        <label class="form-label" for="customFile">Insurance Picture</label>
                                        <input type="file" class="form-control" id="customFile" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-4">
                            <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                            <div class="col-auto"><a class="btn btn-primary d-block w-100 {{ (request()->is('smi')) ? 'active' : '' }}" href="{{ route('smi') }}">Continue</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>