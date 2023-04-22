<section style="margin-bottom:10%;">
    @extends('auth.navbar.layouts')
</section>

<section class="section">
  <div class="container">
    <div class="row mb-5 align-items-end">
      <div class="col-md-6" data-aos="fade-up">

        <h2>Personalia Form Introduction</h2>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut
          officiis explicabo inventore.</p>
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
            <a class="nav-link disabled" href="insurance.php">Step 4: Insurance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Step 5: Bank Membership Cards</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Step 6: Start Medical Info</a>
          </li>
        </ul>
      </div>

      <div class="col-md-9 mb-5 mb-md-0" order-2 data-aos="fade-up">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">

          <div class="row">
            <div class="col-md-12 mb-3">
              <h2 class="text-center">Start a new application form</h2>
            </div>
            <p class="text-center">Please note that this online form must be completed before medical forms can be sent.
            </p>
            <div class="col-md-12 form-group">
              <a class="btn btn-primary d-block w-100" href="medical.php" role="button">Submit</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
