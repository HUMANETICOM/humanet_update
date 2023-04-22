<section style="margin-bottom:10%;">
    @extends('auth.navbar.layouts')
</section>

<section class="section">
  <div class="container">
    <div class="row mb-5 align-items-end">
      <div class="col-md-6" data-aos="fade-up">

        <h2>MEDICAL INFORMATION FORM. </h2>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus
          incidunt ut officiis explicabo inventore.</p>
      </div>

    </div>

    <div class="row">
      <div class="col-md-3" data-aos="fade-up">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="medical.php">MEDICAL DECLARATIONS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="medical_testing.php">MEDICAL TESTINGS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="medical_examination.php">MEDICAL EXAMINATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="med_diagnosis.php">MED. DIAGNOSIS & CERTIFICATE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="lab_test.php">LAB. TEST RESULTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="imaging.php">IMAGING XRAY - ECG</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="vaccine.php">VACCINATION</a>
          </li>
        </ul>
      </div>

      <div class="col-md-9 mb-5 mb-md-0" order-2 data-aos="fade-up">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="intro-tab" data-bs-toggle="tab" data-bs-target="#intro" type="button"
                role="tab" aria-controls="intro" aria-selected="false">Introduction</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partA-tab" data-bs-toggle="tab" data-bs-target="#partA" type="button"
                role="tab" aria-controls="partA" aria-selected="false">Part A</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partB-tab" data-bs-toggle="tab" data-bs-target="#partB" type="button"
                role="tab" aria-controls="partB" aria-selected="false">Part B</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partC-tab" data-bs-toggle="tab" data-bs-target="#partC" type="button"
                role="tab" aria-controls="partC" aria-selected="false">Part C</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partD-tab" data-bs-toggle="tab" data-bs-target="#partD" type="button"
                role="tab" aria-controls="partD" aria-selected="false">Part D</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partE-tab" data-bs-toggle="tab" data-bs-target="#partE" type="button"
                role="tab" aria-controls="partE" aria-selected="false">Part E</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partF-tab" data-bs-toggle="tab" data-bs-target="#partF" type="button"
                role="tab" aria-controls="partF" aria-selected="false">Part F</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partG-tab" data-bs-toggle="tab" data-bs-target="#partG" type="button"
                role="tab" aria-controls="partG" aria-selected="false">Part G</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partH-tab" data-bs-toggle="tab" data-bs-target="#partH" type="button"
                role="tab" aria-controls="partH" aria-selected="false">Part H</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partI-tab" data-bs-toggle="tab" data-bs-target="#partI" type="button"
                role="tab" aria-controls="partI" aria-selected="false">Part I</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="partJ-tab" data-bs-toggle="tab" data-bs-target="#partJ" type="button"
                role="tab" aria-controls="partJ" aria-selected="false">Part J</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <!-- INTRODUCTION -->
            <div class="tab-pane fade show active mt-3" id="intro" role="tabpanel" aria-labelledby="intro-tab">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-12 bg-primary p-3 mb-4">
                    <h2 class=" text-center" style="color: white;">INTRODUCTION</h2>
                  </div>
                  <div class="col-md-12 form-group mt-3 mt-md-0">
                    <span>
                      For a quality health standard services, including tele-medicine, it is required that our users
                      give us precise information about their health and medical status and regularly update their
                      information in order to provide them with excellent and effective health and medical services.
                      <br><br>
                      In order to do this, we ask you to provide details of your health. We will contact you if we need
                      further details and, if necessary, ask for a report from your medical or dental provider.
                      The health of each user is considered individually, even if a family medical history or a
                      professional exposure could be of guidance to understand the logic behind your health status.
                      <br><br>
                      Please answer ALL the following Ten (10) group of questions by organic systems. If you answer YES
                      to health issues in any organ system, you will need to give further details answer to all the
                      under-questions in the group in addition to open text for other potential health issues not
                      specified in the questionnaire. If you have any questions, contact our support for advice. You are
                      asked to indicate whether you currently have or have ever had any of the following medical
                      conditions organized by systems and organs.
                      <br><br>
                      If you have ticked Yes to any of the questions, please give details in the space provided in every
                      paragraph. This will help the Health Unit to clarify the significance or otherwise of a Yes
                      answer. Please ensure that you quote the correct question and medical condition with the paragraph
                      letter and the point number. For details of any Medical Condition, please include date(s) of
                      illness/conditions, frequency, duration, what treatment was given and by whom (e.g., hospital /
                      GP), whether you are still undergoing treatment and length of absence from work / school (if
                      appropriate). Family History (parents or sibling
                      <br><br>
                      Please note that you will be required to sign a declaration at the end of this questionnaire.
                      It is important that your answers are accurate and you do not withhold any information.
                    </span>
                    <div class="col-md-12 mt-5 form-group">
                      <a class="btn btn-primary d-block w-100">Continue</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <!-- PART A -->
            <div class="tab-pane fade show mt-3" id="partA" role="tabpanel" aria-labelledby="partA-tab">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART A: LIFESTYLE AND GENERAL HEALTH
                      RELATED PROBLEMS </h2>
                  </div>

                  <div class="col-md-12 form-group mt-3 mt-md-0">
                    <div class="text-center mt-2">General Lifestyle and known Health Problems</div>
                    <div class="mt-4">Please answer the questions below with Yes or No</div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Question</th>
                          <th scope="col">Yes</th>
                          <th scope="col">No</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Have you experienced any abnormal weight gain or loss (more than 20 kg) over the last 6
                            months?</td>
                          <td><input class="form-check-input" type="radio" name="1aq" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="1aq" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Do you smoked more than 20 cigarettes (average) a day over the last year?</td>
                          <td><input class="form-check-input" type="radio" name="2" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="2" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Do you drink more than 20 glasses (average) of alcohol (beer/wine/whisky etc.) in a week?
                          </td>
                          <td><input class="form-check-input" type="radio" name="3" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="3" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Have you ever taken drugs, narcotics, sniffed glue or been treated for drug addiction?
                          </td>
                          <td><input class="form-check-input" type="radio" name="4" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="4" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Have you ever been diagnosed with HIV or Hepatitis A – B or C?</td>
                          <td><input class="form-check-input" type="radio" name="5" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="5" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Has any of your parents/siblings suffered from cancer, stroke, heart, liver or kidney
                            disease?</td>
                          <td><input class="form-check-input" type="radio" name="6" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="6" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Are you currently suffering from; Diabetes, Hypertension or Hyperlipidaemia?</td>
                          <td><input class="form-check-input" type="radio" name="7" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="7" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Do you have any diabetic related complications such as amputation, kidney failure, coma,
                            etc.?</td>
                          <td><input class="form-check-input" type="radio" name="8" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="8" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Do you have dental issues involving your teeth, gums or cavities?</td>
                          <td><input class="form-check-input" type="radio" name="9" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="9" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">10</th>
                          <td>Do you wear any type of dentures (PUSTISO) removable or fixed?</td>
                          <td><input class="form-check-input" type="radio" name="10" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="10" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                      </tbody>
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">11</th>
                          <td>Your Height?</td>
                          <td><input class="form-check-input" type="text" name="12" id="flexRadioDefault1" value="">
                          </td>
                          <td>cm/inch</td>
                        </tr>
                      </tbody>
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">12</th>
                          <td>Your Weight?</td>
                          <td><input class="form-check-input" type="text" name="12" id="flexRadioDefault1" value="">
                          </td>
                          <td>lbs/kg</td>
                        </tr>
                      </tbody>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Question</th>
                          <th scope="col">Yes</th>
                          <th scope="col">No</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">13</th>
                          <td>Are you taking medications regularly?</td>
                          <td><input class="form-check-input" type="radio" name="13" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="13" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">14</th>
                          <td> Are you currently attending a hospital/GP for treatment or waiting for an appointment?
                          </td>
                          <td><input class="form-check-input" type="radio" name="14" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="14" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="mt-4">If YES to any question or if any other General Health issues? Please Explain.
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mt-4">Please list below any of your Current prescribed medication including: tablets,
                      capsules, injections, inhalers and creams including birth control? Please specify:</div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row">
                      <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                      <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                    </div>
                  </div>
                </div>
            </div>
        </form>

        <!-- PART B -->
        <div class="tab-pane fade show mt-3" id="partB" role="tabpanel" aria-labelledby="partB-tab">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART B: CARDIO-VASCULAR SYSTEM RELATED HEALTH PROBLEMS</h2>
                  </div>
                  <div class="col-md-12 form-group mt-3 mt-md-0">
                    <div class="row mt-4">
                      <div class="col-lg-6">
                        <div class="span">Do you have any Cardio-Vascular System Health Problems?</div>
                      </div>
                      <div class="col-lg-6">
                        <div class="row">
                          <div class="col-md-3">
                            <input class="form-check-input" type="radio" name="1bq" id="flexRadioDefault1" value=""> Yes
                          </div>
                          <div class="col-md-3">
                            <input class="form-check-input" type="radio" name="1bq" id="flexRadioDefault1" value=""> No
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mt-5">Please answer the questions below with Yes or No</div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Question</th>
                          <th scope="col">Yes</th>
                          <th scope="col">No</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Chest pain</td>
                          <td><input class="form-check-input" type="radio" name="1b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="1b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Angina</td>
                          <td><input class="form-check-input" type="radio" name="2b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="2b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Heart Disease</td>
                          <td><input class="form-check-input" type="radio" name="3b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="3b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Palpitations</td>
                          <td><input class="form-check-input" type="radio" name="4b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="4b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Breathlessness</td>
                          <td><input class="form-check-input" type="radio" name="5b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="5b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Varicose veins</td>
                          <td><input class="form-check-input" type="radio" name="6b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="6b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Ankle swelling</td>
                          <td><input class="form-check-input" type="radio" name="7b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="7b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Circulation problem</td>
                          <td><input class="form-check-input" type="radio" name="8b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="8b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Rheumatic fever</td>
                          <td><input class="form-check-input" type="radio" name="9b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="9b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">10</th>
                          <td>Any blood disorder</td>
                          <td><input class="form-check-input" type="radio" name="10b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="10b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">11</th>
                          <td>Are using a pacemaker</td>
                          <td><input class="form-check-input" type="radio" name="11b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="11b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">12</th>
                          <td>Hypertension or Low blood pressure</td>
                          <td><input class="form-check-input" type="radio" name="12b" id="flexRadioDefault1" value="">
                          </td>
                          <td><input class="form-check-input" type="radio" name="12b" id="flexRadioDefault2" value="">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="mt-4">If YES to any question or if any other Cardio-Vascular illness? Please Explain.
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row">
                      <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                      <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                    </div>
                  </div>
                </div>
            </div>
          </form>
        </div>

        <!-- PART C -->
        <div class="tab-pane fade show mt-3" id="partC" role="tabpanel" aria-labelledby="partC-tab">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART C: RESPIRATORY SYSTEM RELATED HEALTH PROBLEMS</h2>
                  </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any Respiratory System Health Problems?</div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1cq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1cq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Asthma</td>
                      <td><input class="form-check-input" type="radio" name="1c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="1c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Bronchitis</td>
                      <td><input class="form-check-input" type="radio" name="2c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="2c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Pneumonia</td>
                      <td><input class="form-check-input" type="radio" name="3c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="3c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Emphysema</td>
                      <td><input class="form-check-input" type="radio" name="4c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="4c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Pleurisy</td>
                      <td><input class="form-check-input" type="radio" name="5c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="5c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Pneumothorax</td>
                      <td><input class="form-check-input" type="radio" name="6c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="6c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Tuberculosis</td>
                      <td><input class="form-check-input" type="radio" name="7c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="7c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Cough</td>
                      <td><input class="form-check-input" type="radio" name="8c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="8c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Hemoptysia</td>
                      <td><input class="form-check-input" type="radio" name="9c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="9c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td>Epistaxis</td>
                      <td><input class="form-check-input" type="radio" name="10c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="10c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">11</th>
                      <td>Difficulty Breathing</td>
                      <td><input class="form-check-input" type="radio" name="11c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="11c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">12</th>
                      <td>Are you using Oxygen tank?</td>
                      <td><input class="form-check-input" type="radio" name="12c" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="12c" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">If YES to any question or if any other Lung or Respiratory disease? Please explain
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                  <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                  <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                </div>
              </div>
            </div>
          </form>
        </div>

        <!-- PART D -->
        <div class="tab-pane fade show mt-3" id="partD" role="tabpanel" aria-labelledby="partD-tab">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART D: GASTRO-INTESTINAL SYSTEM RELATED HEALTH PROBLEMS</h2>
                  </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <span class="fs-4">PART D: GASTRO-INTESTINAL SYSTEM RELATED HEALTH PROBLEMS</span>
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any Oral or Gastro-Intestinal System Health Problems?</div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1dq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1dq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Do you have Recurrent Dental, oral, Nausea, Dyspepsia or Dysphagia?</td>
                      <td><input class="form-check-input" type="radio" name="1d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="1d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Do you have Recurrent Heartburn, Indigestion or Hiatus Hernia?</td>
                      <td><input class="form-check-input" type="radio" name="2d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="2d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Gastric, Duodenal or Peptic ulcer?</td>
                      <td><input class="form-check-input" type="radio" name="3d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="3d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Do you have Abdominal pain?</td>
                      <td><input class="form-check-input" type="radio" name="4d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="4d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Diarrhea or Vomiting lasting more than one week?</td>
                      <td><input class="form-check-input" type="radio" name="5d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="5d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Do you have any abdominal Hernia?</td>
                      <td><input class="form-check-input" type="radio" name="6d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="6d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Gastro-intestinal or Rectal bleedings?</td>
                      <td><input class="form-check-input" type="radio" name="7d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="7d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Irritable Bowel Syndromes?</td>
                      <td><input class="form-check-input" type="radio" name="8d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="8d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Crohn’s Disease?</td>
                      <td><input class="form-check-input" type="radio" name="9d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="9d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td>Ulcerative Colitis?</td>
                      <td><input class="form-check-input" type="radio" name="10d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="10d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">11</th>
                      <td>Jaundice or Problems with Gallbladder?</td>
                      <td><input class="form-check-input" type="radio" name="11d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="11d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">12</th>
                      <td>Any form of hepatitis or other liver problem?</td>
                      <td><input class="form-check-input" type="radio" name="12d" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="12d" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">If you answer YES or if you have any other Oral, Dental or abdominal complaint? Please
                  explain
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                  <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                  <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                </div>
              </div>
            </div>
        </div>
        </form>

        <!-- PART E -->
        <div class="tab-pane fade show mt-3" id="partE" role="tabpanel" aria-labelledby="partE-tab">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART E: AUTO-IMMUNE METABOLIC AND ENDOCRINE SYSTEMS RELATED HEALTH PROBLEMS</h2>
                  </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any Metabolic and Endocrine System Health Problems?</div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1eq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1eq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Any weight or appetite changes</td>
                      <td><input class="form-check-input" type="radio" name="1e" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="1e" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Do you have Diabetes</td>
                      <td><input class="form-check-input" type="radio" name="2e" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="2e" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Any Thyroid Disfunction</td>
                      <td><input class="form-check-input" type="radio" name="3e" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="3e" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Any Adrenal Gland Disease</td>
                      <td><input class="form-check-input" type="radio" name="4e" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="4e" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Do you have any auto-Immune illness related problems?</td>
                      <td><input class="form-check-input" type="radio" name="5e" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="5e" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">If you answer Yes or if you have Any other metabolic problems or other glandular
                  disorder you are aware off ? Please explain.
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                  <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                  <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                </div>
              </div>
            </div>
        </div>
        </form>

        <!-- PART F -->
        <div class="tab-pane fade show mt-3" id="partF" role="tabpanel" aria-labelledby="partF-tab">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART F: SKIN RELATED HEALTH PROBLEMS</h2>
                  </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <span class="fs-4">PART F: SKIN RELATED HEALTH PROBLEMS</span>
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any Metabolic and Endocrine System Health Problems?</div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1fq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1fq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Do you have any allergies or Urticaria?</td>
                      <td><input class="form-check-input" type="radio" name="1f" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="1f" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Do you have Psoriasis?</td>
                      <td><input class="form-check-input" type="radio" name="2f" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="2f" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Do you Have Eczema?</td>
                      <td><input class="form-check-input" type="radio" name="3f" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="3f" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Do you have Allergic dermatitis?</td>
                      <td><input class="form-check-input" type="radio" name="4f" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="4f" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Do you have any skin infections?</td>
                      <td><input class="form-check-input" type="radio" name="5f" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="5f" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Do you have vetiligo?</td>
                      <td><input class="form-check-input" type="radio" name="6f" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="6f" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Do you have tendency to skin cancer?</td>
                      <td><input class="form-check-input" type="radio" name="7f" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="7f" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Do you have allopecia?</td>
                      <td><input class="form-check-input" type="radio" name="8f" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="8f" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">If you answer YES or if you have any other Oral, Dental or abdominal complaint? Please
                  explain
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                  <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                  <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                </div>
              </div>
            </div>
          </form>
        </div>

        <!-- PART G -->
        <div class="tab-pane fade show mt-3" id="partG" role="tabpanel" aria-labelledby="partG-tab">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART G: MUSCULOSKELETAL SYSTEM RELATED HEALTH PROBLEMS</h2>
                  </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
               
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any Musculoskeletal System Health Problems?</div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1gq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1gq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Do you have bones or joints pain, dislocation or swelling? If yes please indicate below.</td>
                      <td><input class="form-check-input" type="radio" name="1g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="1g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Neck</td>
                      <td><input class="form-check-input" type="radio" name="2g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="2g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Back</td>
                      <td><input class="form-check-input" type="radio" name="3g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="3g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Shoulder</td>
                      <td><input class="form-check-input" type="radio" name="4g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="4g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Elbow</td>
                      <td><input class="form-check-input" type="radio" name="5g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="5g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Handled</td>
                      <td><input class="form-check-input" type="radio" name="6g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="6g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Hip</td>
                      <td><input class="form-check-input" type="radio" name="7g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="7g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Knee</td>
                      <td><input class="form-check-input" type="radio" name="8g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="8g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Ankle</td>
                      <td><input class="form-check-input" type="radio" name="9g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="9g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td>Have you been diagnosed as having arthritis, gout, or rheumatism?</td>
                      <td><input class="form-check-input" type="radio" name="10g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="10g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">11</th>
                      <td>Do you have Sciatica?</td>
                      <td><input class="form-check-input" type="radio" name="11g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="11g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">12</th>
                      <td>Do you have Osteoporosis or recurrent fractures?</td>
                      <td><input class="form-check-input" type="radio" name="12g" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="12g" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">If your answer is Yes to any question or if you have ever consulted an orthopedic
                  surgeon, osteopath, Chiropractic, or physiotherapist? Please elaborate.
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                  <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                  <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                </div>
              </div>
            </div>
          </form>
        </div>

        <!-- PART H -->
        <div class="tab-pane fade show mt-3" id="partH" role="tabpanel" aria-labelledby="partH-tab">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART H: NERVOUS SYSTEM RELATED HEALTH PROBLEM</h2>
                  </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any Psychology-Nervous System Health Problems? </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1hq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1hq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Do you have headaches, migraines, vertigo, dizziness, giddiness or problems with balance?</td>
                      <td><input class="form-check-input" type="radio" name="1h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="1h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Do you have any diseases of the nervous system like, neuritis, stroke or multiple sclerosis?
                      </td>
                      <td><input class="form-check-input" type="radio" name="2h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="2h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Did you had any Head injuries leading to loss of consciousness requiring hospital admission?
                      </td>
                      <td><input class="form-check-input" type="radio" name="3h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="3h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Do you have Epilepsy, fits, blackouts, fainting turns or unexplained loss of consciousness?
                      </td>
                      <td><input class="form-check-input" type="radio" name="4h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="4h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Do you have any limb motor or sensory symptoms or loss of coordination?</td>
                      <td><input class="form-check-input" type="radio" name="5h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="5h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Do you have any visual defect e.g., scotoma, blindness in one eye, night blindness, blindness,
                        color blindness, reduced visual field, blurred vision or detached retina?</td>
                      <td><input class="form-check-input" type="radio" name="6h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="6h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Do you have any eye disease or conditions such as glaucoma or retina issues?</td>
                      <td><input class="form-check-input" type="radio" name="7h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="7h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Did you had any Injury or surgery to your eye(s) including laser eye surgery?</td>
                      <td><input class="form-check-input" type="radio" name="8h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="8h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Do you have or had any Ear infection, discharge, tinnitus, a hearing defect including
                        deafness?</td>
                      <td><input class="form-check-input" type="radio" name="9h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="9h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td>Do you have issues with Speech and related functions like reading and writing skills and
                        memory? </td>
                      <td><input class="form-check-input" type="radio" name="10h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="10h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">11</th>
                      <td>Do you have any defect in your testing and smelling abilities?</td>
                      <td><input class="form-check-input" type="radio" name="11h" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="11h" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">If you answer YES for any question or if you ever consulted an Otolaryngologist,
                  Ophthalmologist.
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                  <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                  <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                </div>
              </div>
            </div>
        </div>
        </form>

        <!-- PART I -->
        <div class="tab-pane fade show mt-3" id="partI" role="tabpanel" aria-labelledby="partI-tab">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART I: PSYCHOLOGY AND MENTAL HEALTH PROBLEMS</h2>
                  </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any Psychological or Mental Problems?</div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1iq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1iq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Do you have Anxiety/Depression, phobias, mental breakdown or stress related problems?</td>
                      <td><input class="form-check-input" type="radio" name="1i" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="1i" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Do you have any Mental Illness and / or cognitive disorders, such as: Alzheimer or Dementia?
                      </td>
                      <td><input class="form-check-input" type="radio" name="2i" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="2i" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Do you have any disorders affecting learning, memory, perception and problem solving?</td>
                      <td><input class="form-check-input" type="radio" name="3i" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="3i" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Do you have any eating disorder e.g., anorexia nervosa or bulimia?</td>
                      <td><input class="form-check-input" type="radio" name="4i" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="4i" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Do you suffer from Substance misuse?</td>
                      <td><input class="form-check-input" type="radio" name="5i" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="5i" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Do you have sleeping disorder?</td>
                      <td><input class="form-check-input" type="radio" name="6i" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="6i" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">If YES to any question or if any other Lung or Respiratory disease? Please explain.
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                  <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                  <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                </div>
              </div>
            </div>
        </div>
        </form>

        <!-- PART J -->
        <div class="tab-pane fade show mt-3" id="partJ" role="tabpanel" aria-labelledby="partJ-tab">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-12 bg-primary p-3">
                    <h2 class=" text-center" style="color: white; font-size:25px;">PART J: GENITO-URINARY SYSTEM RELATED HEALTH PROBLEMS</h2>
                  </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any urinary System Health Problems?</div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1jq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="1jq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Frequency in urination</td>
                      <td><input class="form-check-input" type="radio" name="1j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="1j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Pain with micturition</td>
                      <td><input class="form-check-input" type="radio" name="2j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="2j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Urethral Discharge</td>
                      <td><input class="form-check-input" type="radio" name="3j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="3j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Blood or change of urine color</td>
                      <td><input class="form-check-input" type="radio" name="4j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="4j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Kidney stones</td>
                      <td><input class="form-check-input" type="radio" name="5j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="5j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Urgency in Urination</td>
                      <td><input class="form-check-input" type="radio" name="6j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="6j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Incontinence</td>
                      <td><input class="form-check-input" type="radio" name="7j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="7j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Recurrent kidney or urinary tract infection</td>
                      <td><input class="form-check-input" type="radio" name="8j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="8j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Cystitis</td>
                      <td><input class="form-check-input" type="radio" name="9j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="9j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td>Urethritis</td>
                      <td><input class="form-check-input" type="radio" name="10j" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="10j" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">Any other kidney or bladder conditions or complaint? Please explain
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row mt-4">
                  <div class="fs-4 text-danger">NOTE: THAT IF THE USER GENDER IS SELECTED, THE USER WILL AUTOMATICALLY
                    GO TO THE QUESTION ACCORDING TO THEIR GENDER. </div>
                </div>
                <!--For Men Questions-->
                <div class="row mt-4">
                  <div class="fs-5">Genitalia MEN:</div>
                </div>
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any urinary System Health Problems?</div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="2jq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="2jq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">11</th>
                      <td>Any issues with the Prostate?</td>
                      <td><input class="form-check-input" type="radio" name="11ja" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="11ja" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">12</th>
                      <td>Any testicular issues?</td>
                      <td><input class="form-check-input" type="radio" name="12ja" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="12ja" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">13</th>
                      <td>Any actual or previous sexually transmitted infection?</td>
                      <td><input class="form-check-input" type="radio" name="13ja" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="13ja" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">14</th>
                      <td>Any sexuality issues, problems with erection etc.?</td>
                      <td><input class="form-check-input" type="radio" name="14ja" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="14ja" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">If YES or if any other genitalia or sexuality issues you are aware of? Please explain
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!--For Women Questions-->
                <div class="row mt-5">
                  <div class="fs-5">Genitalia WOMEN:</div>
                </div>
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="span">Do you have any urinary System Health Problems?</div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="3jq" id="flexRadioDefault1" value=""> Yes
                      </div>
                      <div class="col-md-3">
                        <input class="form-check-input" type="radio" name="3jq" id="flexRadioDefault1" value=""> No
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-5">Please answer the questions below with Yes or No</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Yes</th>
                      <th scope="col">No</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">11</th>
                      <td>Any problem with the menstruation?</td>
                      <td><input class="form-check-input" type="radio" name="11jb" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="11jb" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">12</th>
                      <td>Are you in Menopause phase?</td>
                      <td><input class="form-check-input" type="radio" name="12jb" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="12jb" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">13</th>
                      <td>Are you aware of, any breast lumps or disorder?</td>
                      <td><input class="form-check-input" type="radio" name="13jb" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="13jb" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">14</th>
                      <td>Any family members been diagnosed with breast cancer?</td>
                      <td><input class="form-check-input" type="radio" name="14jb" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="14jb" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">15</th>
                      <td>Are you aware of any disorder with ovaria or uterus: fibroid, cyste, polyps? </td>
                      <td><input class="form-check-input" type="radio" name="15jb" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="15jb" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">16</th>
                      <td>Any abnormal pap smear test?</td>
                      <td><input class="form-check-input" type="radio" name="16jb" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="16jb" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">17</th>
                      <td>Any complications during any of your pregnancies such as gestational?</td>
                      <td><input class="form-check-input" type="radio" name="17jb" id="flexRadioDefault1" value="">
                      </td>
                      <td><input class="form-check-input" type="radio" name="17jb" id="flexRadioDefault2" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-4">If YES or if any other genitalia or sexuality issues you are aware of? Please explain
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Your Answer</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                  <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                  <div class="col-auto"><a class="btn btn-primary">Continue</a></div>
                </div>
              </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</section>