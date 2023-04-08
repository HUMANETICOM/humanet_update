<section style="margin-bottom:">
    @extends('auth.navbar.layouts')
</section>

<div class="wave">
    <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="0" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                <path
                    d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                    id="Path">
                </path>
            </g>
        </g>
    </svg>
</div>
<div class="main-header" style="background-color: #fff">
<section class="section">
  <div class="container">
    <div class="row mb-5 align-items-end">
      <div class="col-md-6" data-aos="fade-up">

        <h2 class="section-heading">Choose A Plan</h2>
      </div>

      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item p-2" role="presentation">
          <a class="nav-link btn btn-primary" href="pricing.php">User</a>
        </li>
        <li class="nav-item p-2" role="presentation">
          <a class="nav-link btn btn-primary" href="pricing_providers.php">Provider</a>
        </li>
      </ul>

      <div class="col-md-12 mb-5 mb-md-0" order-2 data-aos="fade-up">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partA-tab" data-bs-toggle="tab" data-bs-target="#partA" type="button"
                role="tab" aria-controls="partA" aria-selected="false">Individual/Family</button>
            </li>
          </ul>
          <div class="tab-pane fade show active mt-3" id="partA" role="tabpanel" aria-labelledby="partA-tab">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row align-items-stretch">
                <div class="col-lg-3 mb-4 mb-lg-0">
                  <div class="pricing h-100 text-center popular">
                    <span class="popularity">Package 1</span>
                    <h3>Individual or Family User</h3>

                    <body>
                      <ul class="list-unstyled">
                        <li></li>
                        <li>Discount for family members 1 to 8.</li>
                        <input type="number" name="fam" class="form-control" id="fam" min="1" max="8" required>

                        <li class="container3 p-3">INDIVIDUAL
                          <hr>Monthly Payment (USD)<br>get the discount of %</li>
                        <li class="container4 p-3">INDIVIDUAL
                          <hr>Yearly Payment (USD)<br>get the discount of %<br><strong>Save offer for 2 Months!</strong>
                        </li>
                      </ul>

                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="yes">
                        <label class="form-check-label" style="color:white;"
                          for="flexSwitchCheckDefault">Monthly</label>
                      </div>

                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="no">
                        <label class="form-check-label" style="color:white;" for="flexSwitchCheckDefault">Yearly</label>
                      </div>
                      <div class="price-cta">
                        <strong class="price" Style="font-size:25px;">USD/MONTH/YEAR</strong>
                        <p><a href="individual.php" class="btn btn-white">Choose Plan</a></p>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                  <div class="pricing h-100 text-center">
                    <span class="popularity">Best value</span>
                    <h3>Eployee Small Corporation</h3>
                    <ul class="list-unstyled">
                      <li></li>
                      <li>Add Employee number 10 to 25 user </li>
                      <input type="number" name="employee" class="form-control" id="employee" min="10" max="25"
                        required>
                      <li class="container5 p-3">EMPLOYEE
                        <hr>Monthly Payment (USD)<br>get the discount of %</li>
                      <li class="container6 p-3">EMPLOYEE
                        <hr>Yearly Payment (USD)<br>get the discount of %<br><strong>Save offer for 2 Months!</strong>
                      </li>
                    </ul>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="employee1">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Monthly</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="employee2">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Yearly</label>
                    </div>
                    <div class="price-cta">
                      <strong class="price" Style="font-size:25px;">USD/MONTH/YEAR</strong>
                      <p><a href="employee.php" class="btn btn-primary">Choose Plan</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 mb-4 mb-lg-0">
                  <div class="pricing h-100 text-center">
                    <span class="popularity">Most popular</span>
                    <h3>Medium Corporation User</h3>
                    <ul class="list-unstyled">
                      <li></li>
                      <li>Add Medium number 26 to 50 people </li>
                      <input type="number" name="medium" class="form-control" id="medium" min="26" max="50" required>
                      <li class="container7 p-3">MEDIUM
                        <hr>Monthly Payment (USD)<br>get the discount of %</li>
                      <li class="container8 p-3">MEDIUM
                        <hr>Yearly Payment (USD)<br>get the discount of %<br><strong>Save offer for 2 Months!</strong>
                      </li>
                    </ul>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="medium1">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Monthly</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="medium2">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Yearly</label>
                    </div>
                    <div class="price-cta">
                      <strong class="price" Style="font-size:25px;">USD/MONTH/YEAR</strong>
                      <p><a href="medium_pricing.php" class="btn btn-primary">Choose Plan</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                  <div class="pricing h-100 text-center">
                    <span class="popularity">Good Value</span>
                    <h3>Large Corporation User</h3>
                    <ul class="list-unstyled">
                      <li></li>
                      <li>Add Medium number 51 to 99 people </li>
                      <input type="number" name="email" class="form-control" id="email" min="51" max="99" required>
                      <li class="container9 p-3">LARGE
                        <hr>for Monthly payment we have offer you discount just contact us on <a
                          href="contact.php">HUMANET CONTACT US</a><br></li>
                      <li class="container10 p-3">LARGE
                        <hr>Yearlyppayment we have offer you discount just contact us on <a href="contact.php">HUMANET
                          CONTACT US</a><br></li>
                    </ul>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="large1">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Monthly</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="large2">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Yearly</label>
                    </div>
                    <div class="price-cta">
                      <strong class="price" Style="font-size:25px;">USD/MONTH/YEAR</strong>
                      <p><a href="large_pricing.php" class="btn btn-primary">Choose Plan</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@extends('auth.header.footer')
</div>
