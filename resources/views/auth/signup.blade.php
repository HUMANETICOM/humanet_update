<section style="height: 200px; position: relative">
@extends('auth.navbar.layouts')
</section>

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
    <div class="row">
			<div class="d-flex justify-content-center">
				<div class="col-md-6 mb-4 mb-md-0 shadow p-3 mb-5 bg-body rounded" data-aos="fade-up">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item col-6" role="presentation">
							<button class="nav-link active w-100" id="medical-tab" data-bs-toggle="tab"
								data-bs-target="#medical" type="button" role="tab" aria-controls="medical"
								aria-selected="true">Medical</button>
						</li>
						<li class="nav-item col-6" role="presentation">
							<button class="nav-link w-100" id="Others-tab" data-bs-toggle="tab"
								data-bs-target="#Others" type="button" role="tab" aria-controls="Others"
								aria-selected="false">Others</button>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active mt-3" id="medical" role="tabpanel"
							aria-labelledby="medical-tab">
							<form action="{{ route('store') }}" method="post">
                                @csrf
								<div class="row">
									<div class="col-md-12 form-group mb-3">
										<label for="name">Categories Medical</label>
										<select class="form-select form-control @error('name') is-invalid @enderror"  id="user_type" name="user_type" value="{{ old('user_type') }}">
											<option selected>Select one</option>
                                            <option value="Primary Care">Primary Care</option>
                                            <option value="Institution">Institution</option>
                                            <option value="Tele Medicine">Tele Medicine</option>
										</select>
									</div>
									<div class="col-md-6 form-group">
										<label for="name">First Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
									</div>
									<div class="col-md-6 form-group mt-3 mt-md-0">
										<label for="givenname">Last Name</label>
										<input type="text" class="form-control @error('given') is-invalid @enderror" id="given" name="given" value="{{ old('given') }}">
                                            @if ($errors->has('given'))
                                                <span class="text-danger">{{ $errors->first('given') }}</span>
                                            @endif
									</div>
									<div class="col-md-4 form-group mt-3">
										<label for="name">Birthdate</label>
										<input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday') }}">
                                            @if ($errors->has('date'))
                                                <span class="text-danger">{{ $errors->first('date') }}</span>
                                            @endif
									</div>
									<div class="col-md-4 form-group mt-3">
										<label for="givenname">Gender</label>
										<select class="form-select form-control @error('name') is-invalid @enderror"  id="gender" name="gender" value="{{ old('gender') }}">
											<option selected>Select One ...</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											<option value="Others">Others</option>
										</select>
									</div>
									<div class="col-md-4 form-group  mt-3">
										<label for="country">Country</label>
										<input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country') }}">
                                            @if ($errors->has('country'))
                                                <span class="text-danger">{{ $errors->first('country') }}</span>
                                            @endif
									</div>
									<div class="col-md-6 form-group mt-3">
										<label for="email">Email</label>
										<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
									</div>
                                    <div class="col-md-6 form-group mt-3">
										<label for="mobile_number">Mobile Number</label>
										<input type="number" class="form-control @error('mobile_number') is-invalid @enderror" id="mobile_number" name="mobile_number" value="{{ old('mobile_number') }}">
                                        @if ($errors->has('mobile_number'))
                                            <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                        @endif
									</div>
                                    <div class="col-md-6 form-group  mt-3">
										<label for="givenname">Password</label>
										<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
									</div>
                                    <div class="col-md-6 form-group  mt-3 ">
										<label for="givenname">Confirm Password</label>
										<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
									</div>
									<div class="form-group d-flex justify-content-center mt-5">
										<input type="submit" class="btn btn-primary d-block w-100" value="Register">
									</div>
								</div>
							</form>
						</div>


                        <!-- //Others table -->
						<div class="tab-pane fade mt-3" id="Others" role="tabpanel" aria-labelledby="Others-tab">
                            <form action="{{ route('store') }}" method="post">
                                @csrf

								<div class="row">
									<div class="col-md-12 form-group mb-3">
										<label for="name">Categories Others</label>
                                        <select class="form-select form-control @error('name') is-invalid @enderror"  id="user_type" name="user_type" value="{{ old('user_type') }}">
											<option selected>Select one</option>
                                            <option value="TAirlines">Airlines</option>
                                            <option value="Telco">Telco</option>
                                            <option value="Device">Device</option>
                                            <option value="Equipment">Equipment</option>
										</select>
									</div>
									<div class="col-md-6 form-group">
										<label for="name">Username</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
									</div>
									<div class="col-md-6 form-group mt-3 mt-md-0">
										<label for="givenname">Given Name</label>
										<input type="text" class="form-control @error('given') is-invalid @enderror" id="given" name="given" value="{{ old('given') }}">
                                            @if ($errors->has('given'))
                                                <span class="text-danger">{{ $errors->first('given') }}</span>
                                            @endif
									</div>
									<div class="col-md-4 form-group mt-3">
										<label for="name">Birthdate</label>
										<input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday') }}">
                                            @if ($errors->has('date'))
                                                <span class="text-danger">{{ $errors->first('date') }}</span>
                                            @endif
									</div>
									<div class="col-md-4 form-group mt-3">
										<label for="givenname">Gender</label>
										<select class="form-select form-control @error('name') is-invalid @enderror"  id="gender" name="gender" value="{{ old('gender') }}">
											<option selected>Select One ...</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											<option value="Others">Others</option>
										</select>
									</div>
									<div class="col-md-4 form-group  mt-3">
										<label for="country">Country</label>
										<input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country') }}">
                                            @if ($errors->has('country'))
                                                <span class="text-danger">{{ $errors->first('country') }}</span>
                                            @endif
									</div>
									<div class="col-md-6 form-group mt-3">
										<label for="email">Email</label>
										<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
									</div>
                                    <div class="col-md-6 form-group mt-3">
										<label for="mobile_number">Mobile Number</label>
										<input type="number" class="form-control @error('mobile_number') is-invalid @enderror" id="mobile_number" name="mobile_number" value="{{ old('mobile_number') }}">
                                        @if ($errors->has('mobile_number'))
                                            <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                        @endif
									</div>
                                    <div class="col-md-6 form-group  mt-3">
										<label for="givenname">Password</label>
										<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
									</div>
                                    <div class="col-md-6 form-group  mt-3 ">
										<label for="givenname">Confirm Password</label>
										<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
									</div>
									<div class="form-group d-flex justify-content-center mt-5">
										<input type="submit" class="btn btn-primary d-block w-100" value="Register">
									</div>
                                </div>    
						    </div>
						</form>
					</div>
				</div>
			</div>
        </div>  
    </div>    
</div>
