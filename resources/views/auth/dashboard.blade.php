
        <section style="margin-bottom:10%;">
        @extends('auth.navbar.layouts')
        </section>
<div class="row justify-content-center mt-5">
<section class="section">
    <div class="container">
        <div class="row mb-5 align-items-end">
            <div class="col-md-6" data-aos="fade-up">

                <h2>Personalia Form Introduction</h2>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus
                    incidunt ut
                    officiis explicabo inventore.</p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3" data-aos="fade-up">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Introduction.php">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="personalia.php">Step 1: Personalia</a>
                    </li>
                    <li class="nav-item ">
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
                        <a class="nav-link disabled" href="start.php">Step 6: Start Medical Info</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 mb-5 mb-md-0 " order-2 data-aos="fade-up">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                    <div class="row">
                        <div class="col-md-12 form-group text-center">
                            <h3 class="mb-4">INTRODUCTION</h3>
                            <p style="text-align:justify">Huma e Health “www.humaehealth.xn--com-5o0a, is a user centered international
                                permissioned, across-borders consortium platform “HUMANET” “www.humanet.xn--io-x2t for
                                medical & health data exchange between, Identified users and selected stakeholder,
                                accessible real-time and anywhere in the globe.

                                Our multilingual, trusted ecosystem is in the service of our internationally traveling
                                community accessible by: biometrically Identified enrolled users, accredited enrolled
                                providers with their professional identification and certification.



                                HUMANET is revolutionizing the approach to health services and medical expertise
                                exchange by combining the latest developments in digital technologies as electronic
                                health records (HER), electronic medical record (EMR) , m-health, telehealth,
                                telemedicine, wearable / portable health and medical devices known as Internet of
                                medical things (IoT), virtual reality (VR), augmented reality (AR), big data analytics
                                (BD), Artificial intelligence (AI).

                                The relationship between our users and providers is governed by decentralized blockchain
                                technologies, smart contracts between stake holders to empower the individual in taking
                                ownership and real-time control of his/her own data, physical and virtual health
                                exchange in our multilingual international ecosystem, anywhere in the world.
                                <br><br>
                                As HUMANET is a user centered platform, the Identification of our user is in the heart
                                of

                                control and security of the transactions with our certified network of providers, and
                                this is why HUMA e-health passport was created as an App ”www.ehealthpass.xn--com-5o0a.

                                Our individualized Self-sovereign identity health passport, is based on the user’s
                                machine-readable passport or travel document. All personal information and ID’s included
                                in our

                                passport, are totally and uniquely controlled by our users and all data is anonymized
                                and encrypted including the health and medical information generated by the user or by
                                the provider. The transportability and interoperability of our e-Health passports is the
                                key to success of our platform as its under the control of our users giving consent to
                                providers to insert health and medical data in to the system after identification of the
                                providers.

                                While the identity of the self and each individual is the starting point for interacting
                                with digital systems with providers, we have opened a possibility to Person-to-Person
                                delegation, like a parent’s responsibility over their minor children or adult
                                children’s’ custody of their elder parents with special health issues limiting their
                                ability to act on behalf of themselves.</p>
                            <br>
                        </div>

                        <div class="col-md-12 form-group">
                        <a class="btn btn-primary d-block w-100 {{ (request()->is('personalia')) ? 'active' : '' }}" href="{{ route('personalia') }}">Continue</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
