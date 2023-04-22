@section('content')
<section style="margin-bottom:10%;">
    @extends('auth.navbar.layouts')
</section>


<section class="section">
    <div class="container">
        <div class="row mb-5 align-items-end">
            <div class="col-md-6" data-aos="fade-up">

                <h2>Personalia Form Introduction</h2>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3" data-aos="fade-up">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="Introduction.php">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="personalia.php">Step: 1 Personalia</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link disabled" href="contact1.php">Step: 2 Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="id.php">Step: 3 ID's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="insurance.php">Step: 4 Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Step: 5 Bank Membership Cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="start.php">Step: 6 Start Medical Info</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 mb-5 mb-md-0" order-2 data-aos="fade-up">
                <form method="POST" action="{{ route('form.submit') }}">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active mt-3" id="partA" role="tabpanel"
                            aria-labelledby="partA-tab">
                            <div class="row">
                                <div class="col-md-12 bg-primary p-3 mt-4 mb-3">
                                    <h2 class=" text-center" style="color white;">PERSONALIA FORM</h2>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" name="firstname" class="form-control" id="firstname"
                                        placeholder="" disabled>
                                </div>

                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="name">Last Name</label>
                                    <input type="text" class="form-control" name="surname" id="surname" placeholder=""
                                        disabled>
                                </div>

                                <div class="col-md-3 form-group mt-3 mt-md-0">
                                    <label for="date">Date of Birth</label>
                                    <input type="text" class="form-control" name="surname" id="surname" placeholder=""
                                        disabled>
                                </div>

                                <div class="col-md-3 form-group mt-3 mt-md-0">
                                    <label for="givenname">Civil Status</label>

                                    <select class="form-control @error('civilstatus') is-invalid @enderror" id="civilstatus" name="civilstatus" value="{{ old('civilstatus') }}" placeholder="">
                                        <option selected>Select Civil Status</option>
                                        <option value="1">Single</option>
                                        <option value="2">Widow</option>
                                        <option value="3">Separated</option>
                                        <option value="4">Married</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mt-3 mt-md-0">
                                    <label for="givenname" required>Race</label>
                                    <select class="form-control @error('race') is-invalid @enderror" id="civilstatus" name="race" value="{{ old('race') }}" placeholder="">
                                        <option selected>Select Race</option>
                                        <option value="1">White</option>
                                        <option value="2">Black of African American</option>
                                        <option value="3">Asian</option>
                                        <option value="4">American Indian of Alaska</option>
                                        <option value="5">Native Hawaiian of Pacific</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mt-3 mt-md-0">
                                    <label for="name">Gender</label>
                                    <input type="text" class="form-control" placeholder="" disabled>
                                </div>

                                <div class="col-md-2 form-group mt-3 mt-md-0">
                                    <label for="givenname">Language</label>
                                    <select class="form-control @error('language') is-invalid @enderror" id="civilstatus" name="language" value="{{ old('language') }}" placeholder="">
                                        <option>Select Language</option>
                                        <option value="af">Afrikaans</option>
                                        <option value="sq">Albanian - shqip</option>
                                        <option value="am">Amharic - አማርኛ</option>
                                        <option value="ar">Arabic - العربية</option>
                                        <option value="an">Aragonese - aragonés</option>
                                        <option value="hy">Armenian - հայերեն</option>
                                        <option value="ast">Asturian - asturianu</option>
                                        <option value="az">Azerbaijani - azərbaycan dili</option>
                                        <option value="eu">Basque - euskara</option>
                                        <option value="be">Belarusian - беларуская</option>
                                        <option value="bn">Bengali - বাংলা</option>
                                        <option value="bs">Bosnian - bosanski</option>
                                        <option value="br">Breton - brezhoneg</option>
                                        <option value="bg">Bulgarian - български</option>
                                        <option value="ca">Catalan - català</option>
                                        <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                        <option value="zh">Chinese - 中文</option>
                                        <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                        <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                        <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                        <option value="co">Corsican</option>
                                        <option value="hr">Croatian - hrvatski</option>
                                        <option value="cs">Czech - čeština</option>
                                        <option value="da">Danish - dansk</option>
                                        <option value="nl">Dutch - Nederlands</option>
                                        <option value="en">English</option>
                                        <option value="en-AU">English (Australia)</option>
                                        <option value="en-CA">English (Canada)</option>
                                        <option value="en-IN">English (India)</option>
                                        <option value="en-NZ">English (New Zealand)</option>
                                        <option value="en-ZA">English (South Africa)</option>
                                        <option value="en-GB">English (United Kingdom)</option>
                                        <option value="en-US">English (United States)</option>
                                        <option value="eo">Esperanto - esperanto</option>
                                        <option value="et">Estonian - eesti</option>
                                        <option value="fo">Faroese - føroyskt</option>
                                        <option value="fil">Filipino</option>
                                        <option value="fi">Finnish - suomi</option>
                                        <option value="fr">French - français</option>
                                        <option value="fr-CA">French (Canada) - français (Canada)</option>
                                        <option value="fr-FR">French (France) - français (France)</option>
                                        <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                        <option value="gl">Galician - galego</option>
                                        <option value="ka">Georgian - ქართული</option>
                                        <option value="de">German - Deutsch</option>
                                        <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                        <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                        <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)
                                        </option>
                                        <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                        <option value="el">Greek - Ελληνικά</option>
                                        <option value="gn">Guarani</option>
                                        <option value="gu">Gujarati - ગુજરાતી</option>
                                        <option value="ha">Hausa</option>
                                        <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                        <option value="he">Hebrew - עברית</option>
                                        <option value="hi">Hindi - हिन्दी</option>
                                        <option value="hu">Hungarian - magyar</option>
                                        <option value="is">Icelandic - íslenska</option>
                                        <option value="id">Indonesian - Indonesia</option>
                                        <option value="ia">Interlingua</option>
                                        <option value="ga">Irish - Gaeilge</option>
                                        <option value="it">Italian - italiano</option>
                                        <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                        <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                        <option value="ja">Japanese - 日本語</option>
                                        <option value="kn">Kannada - ಕನ್ನಡ</option>
                                        <option value="kk">Kazakh - қазақ тілі</option>
                                        <option value="km">Khmer - ខ្មែរ</option>
                                        <option value="ko">Korean - 한국어</option>
                                        <option value="ku">Kurdish - Kurdî</option>
                                        <option value="ky">Kyrgyz - кыргызча</option>
                                        <option value="lo">Lao - ລາວ</option>
                                        <option value="la">Latin</option>
                                        <option value="lv">Latvian - latviešu</option>
                                        <option value="ln">Lingala - lingála</option>
                                        <option value="lt">Lithuanian - lietuvių</option>
                                        <option value="mk">Macedonian - македонски</option>
                                        <option value="ms">Malay - Bahasa Melayu</option>
                                        <option value="ml">Malayalam - മലയാളം</option>
                                        <option value="mt">Maltese - Malti</option>
                                        <option value="mr">Marathi - मराठी</option>
                                        <option value="mn">Mongolian - монгол</option>
                                        <option value="ne">Nepali - नेपाली</option>
                                        <option value="no">Norwegian - norsk</option>
                                        <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                        <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                        <option value="oc">Occitan</option>
                                        <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                        <option value="om">Oromo - Oromoo</option>
                                        <option value="ps">Pashto - پښتو</option>
                                        <option value="fa">Persian - فارسی</option>
                                        <option value="pl">Polish - polski</option>
                                        <option value="pt">Portuguese - português</option>
                                        <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                        <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                        <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                        <option value="qu">Quechua</option>
                                        <option value="ro">Romanian - română</option>
                                        <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                        <option value="rm">Romansh - rumantsch</option>
                                        <option value="ru">Russian - русский</option>
                                        <option value="gd">Scottish Gaelic</option>
                                        <option value="sr">Serbian - српски</option>
                                        <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                        <option value="sn">Shona - chiShona</option>
                                        <option value="sd">Sindhi</option>
                                        <option value="si">Sinhala - සිංහල</option>
                                        <option value="sk">Slovak - slovenčina</option>
                                        <option value="sl">Slovenian - slovenščina</option>
                                        <option value="so">Somali - Soomaali</option>
                                        <option value="st">Southern Sotho</option>
                                        <option value="es">Spanish - español</option>
                                        <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                        <option value="es-419">Spanish (Latin America) - español (Latinoamérica)
                                        </option>
                                        <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                        <option value="es-ES">Spanish (Spain) - español (España)</option>
                                        <option value="es-US">Spanish (United States) - español (Estados Unidos)
                                        </option>
                                        <option value="su">Sundanese</option>
                                        <option value="sw">Swahili - Kiswahili</option>
                                        <option value="sv">Swedish - svenska</option>
                                        <option value="tg">Tajik - тоҷикӣ</option>
                                        <option value="ta">Tamil - தமிழ்</option>
                                        <option value="tt">Tatar</option>
                                        <option value="te">Telugu - తెలుగు</option>
                                        <option value="th">Thai - ไทย</option>
                                        <option value="ti">Tigrinya - ትግርኛ</option>
                                        <option value="to">Tongan - lea fakatonga</option>
                                        <option value="tr">Turkish - Türkçe</option>
                                        <option value="tk">Turkmen</option>
                                        <option value="tw">Twi</option>
                                        <option value="uk">Ukrainian - українська</option>
                                        <option value="ur">Urdu - اردو</option>
                                        <option value="ug">Uyghur</option>
                                        <option value="uz">Uzbek - o‘zbek</option>
                                        <option value="vi">Vietnamese - Tiếng Việt</option>
                                        <option value="wa">Walloon - wa</option>
                                        <option value="cy">Welsh - Cymraeg</option>
                                        <option value="fy">Western Frisian</option>
                                        <option value="xh">Xhosa</option>
                                        <option value="yi">Yiddish</option>
                                        <option value="yo">Yoruba - Èdè Yorùbá</option>
                                        <option value="zu">Zulu - isiZulu</option>
                                    </select>
                                </div>

                                <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label for="name">Height</label>
                                        <input type="text" class="form-control @error('height') is-invalid @enderror" id="height" name="height" value="{{ old('height') }}" placeholder="Enter Height (inch/cm)">
                                        @error('height')
                                            <div class="invalid-feedback">{{ $height }}</div>
                                        @enderror
                                </div>

                                <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label for="name">Weight</label>
                                        <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{ old('weight') }}" placeholder="Enter Weight (lbs/kg)">
                                        @error('weight')
                                            <div class="invalid-feedback">{{ $weight }}</div>
                                        @enderror
                                </div>

                                <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label for="name">Professions</label>
                                        <input type="text" class="form-control @error('professions') is-invalid @enderror" id="professions" name="professions" value="{{ old('professions') }}" placeholder="">
                                        @error('professions')
                                            <div class="invalid-feedback">{{ $professions }}</div>
                                        @enderror
                                </div>

                                <div class="col-md-3 form-group mt-3 mt-md-0">
                                        <label for="name">Other Citizenship</label>
                                        <input type="text" class="form-control @error('otherCitizenship') is-invalid @enderror" id="otherCitizenship" name="otherCitizenship" value="{{ old('otherCitizenship') }}" placeholder="">
                                        @error('otherCitizenship')
                                            <div class="invalid-feedback">{{ $otherCitizenship }}</div>
                                        @enderror
                                </div>

                                <div class="col-md-6 form-group mt-3 mb-4 mt-md-0">
                                        <label for="name">User ID</label>
                                        <input type="text" class="form-control @error('userID') is-invalid @enderror" id="userID" name="userID" value="{{ old('userID') }}" placeholder="">
                                        @error('userID')
                                            <div class="invalid-feedback">{{ $userID }}</div>
                                        @enderror
                                </div>

                                <div class="col-md-6 form-group mt-3 mb-4 mt-md-0 ">
                                        <label class="form-label" for="customFile">Upload your Photo</label>
                                        <input type="file" class="form-control" id="customFile" />
                                </div>
                                <div class="col-md-12 form-group mt-5 mt-md-0">
                                    <h4 class="d-flex justify-content-start">Primary Residence Address</h4>
                                </div>
                                <div class="col-md-4 form-group mt-3 mb-3 mt-md-0">
                                    <label class="form-label" for="customFile">Upload your Photo</label>
                                    <input type="file" class="form-control" id="customFile" />
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                <label for="number">Primary Phone Number</label>
                                <input type="text" class="form-control @error('prn') is-invalid @enderror" id="prn" name="prn" value="{{ old('prn') }}" placeholder="">
                                        @error('prn')
                                            <div class="invalid-feedback">{{ $prn }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Primary Email Address</label>
                                    <input type="text" class="form-control @error('pea') is-invalid @enderror" id="pea" name="pea" value="{{ old('pea') }}" placeholder="">
                                        @error('pea')
                                            <div class="invalid-feedback">{{ $pea }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-5 mt-md-0">
                                    <label for="name">Street Address</label>
                                    <input type="text" class="form-control @error('street') is-invalid @enderror" id="street" name="street" value="{{ old('street') }}" placeholder="">
                                        @error('street')
                                            <div class="invalid-feedback">{{ $street }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">City</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') }}" placeholder="">
                                        @error('city')
                                            <div class="invalid-feedback">{{ $city }}</div>
                                        @enderror
    
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">State</label>
                                    <input type="text" class="form-control @error('province') is-invalid @enderror" id="province" name="province" value="{{ old('province') }}" placeholder="">
                                        @error('province')
                                            <div class="invalid-feedback">{{ $province }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Postal Code</label>
                                    <input type="text" class="form-control @error('postalcode') is-invalid @enderror" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" placeholder="">
                                        @error('postalcode')
                                            <div class="invalid-feedback">{{ $postalcode }}</div>
                                        @enderror
                                    
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Country Code</label>
                                    <input type="text" class="form-control @error('countrycode') is-invalid @enderror" id="countrycode" name="countrycode" value="{{ old('countrycode') }}" placeholder="">
                                        @error('countrycode')
                                            <div class="invalid-feedback">{{ $countrycode }}</div>
                                        @enderror
                                    
                                </div>
                                <div class="col-md-12 form-group mt-3 mb-4">
                                    <label class="form-label" for="customFile">Upload your Employment Card</label>
                                    <input type="file" class="form-control" id="customFile" />
                                </div>
                                <hr/>
                                <div class="col-md-12 form-group mt-5 mt-md-0">
                                    <h4 class="d-flex justify-content-start">Secondary Residence Address</h4>
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Secondary Phone Number</label>
                                    <input type="text" class="form-control @error('spn') is-invalid @enderror" id="spn" name="spn" value="{{ old('spn') }}" placeholder="">
                                        @error('spn')
                                            <div class="invalid-feedback">{{ $spn }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Secondary Email Address</label>
                                    <input type="text" class="form-control @error('sea') is-invalid @enderror" id="sea" name="sea" value="{{ old('sea') }}" placeholder="">
                                        @error('sea')
                                            <div class="invalid-feedback">{{ $sea }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Street Address</label>
                                    <input type="text" class="form-control @error('street2') is-invalid @enderror" id="street2" name="street2" value="{{ old('street2') }}" placeholder="">
                                        @error('street2')
                                            <div class="invalid-feedback">{{ $street2 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">City</label>
                                    <input type="text" class="form-control @error('city2') is-invalid @enderror" id="city2" name="city2" value="{{ old('city2') }}" placeholder="">
                                        @error('city2')
                                            <div class="invalid-feedback">{{ $city2 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">State/Province</label>
                                    <input type="text" class="form-control @error('province2') is-invalid @enderror" id="province2" name="province2" value="{{ old('province2') }}" placeholder="">
                                        @error('province2')
                                            <div class="invalid-feedback">{{ $province2 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Postal Code</label>
                                    <input type="text" class="form-control @error('postalcode2') is-invalid @enderror" id="postalcode2" name="postalcode2" value="{{ old('postalcode2') }}" placeholder="">
                                        @error('postalcode2')
                                            <div class="invalid-feedback">{{ $postalcode2 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Country Code</label>
                                    <input type="text" class="form-control @error('countrycode2') is-invalid @enderror" id="countrycode2" name="countrycode2" value="{{ old('countrycode2') }}" placeholder="">
                                        @error('countrycode2')
                                            <div class="invalid-feedback">{{ $countrycode2 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-12 form-group mt-3 mb-3">
                                    <label class="form-label" for="customFile">Upload your Secondary Residence Card</label>
                                    <input type="file" class="form-control" id="customFile" />
                                </div>
                                <hr/>

                                <div class="col-md-12 form-group mt-5 mt-md-0">
                                    <h4 class="d-flex justify-content-start">Employment Address</h4>
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Employment Phone Number</label>
                                    <input type="text" class="form-control @error('epn') is-invalid @enderror" id="epn" name="epn" value="{{ old('epn') }}" placeholder="">
                                        @error('epn')
                                            <div class="invalid-feedback">{{ $epn }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Employment Email Address</label>
                                    <input type="text" class="form-control @error('eea') is-invalid @enderror" id="eea" name="eea" value="{{ old('eea') }}" placeholder="">
                                        @error('eea')
                                            <div class="invalid-feedback">{{ $eea }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Street Address</label>
                                    <input type="text" class="form-control @error('street3') is-invalid @enderror" id="street3" name="street3" value="{{ old('street3') }}" placeholder="">
                                        @error('street3')
                                            <div class="invalid-feedback">{{ $street3 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">City</label>
                                    <input type="text" class="form-control @error('city3') is-invalid @enderror" id="city3" name="city3" value="{{ old('city3') }}" placeholder="">
                                        @error('city3')
                                            <div class="invalid-feedback">{{ $city3 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">State/Province</label>
                                    <input type="text" class="form-control @error('province3') is-invalid @enderror" id="province3" name="province3" value="{{ old('province3') }}" placeholder="">
                                        @error('province3')
                                            <div class="invalid-feedback">{{ $province3 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Postal Code</label>
                                    <input type="text" class="form-control @error('postalcode3') is-invalid @enderror" id="postalcode3" name="postalcode3" value="{{ old('postalcode3') }}" placeholder="">
                                        @error('postalcode3')
                                            <div class="invalid-feedback">{{ $postalcode3 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <label for="name">Country Code</label>
                                    <input type="text" class="form-control @error('countrycode3') is-invalid @enderror" id="countrycode3" name="countrycode3" value="{{ old('countrycode3') }}" placeholder="">
                                        @error('countrycode3')
                                            <div class="invalid-feedback">{{ $countrycode3 }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-12 form-group mt-3">
                                    <label class="form-label" for="customFile">Upload your Employment Card</label>
                                    <input type="file" class="form-control" id="customFile" />
                                </div>

                            </div>

                            <div class="row mt-5">
                                <div class="col-auto me-auto"><a class="btn btn-dark">Back</a></div>
                                <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
