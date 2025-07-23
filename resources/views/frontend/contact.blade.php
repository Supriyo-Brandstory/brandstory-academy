@extends('frontend.partial.app')
@section('content')
    <section class="main-body-contact-us">
        <div class="container">
            <div class="header-form">
                <h1 class="text-violet text-center fw-700 poppins-bold">CONTACT US</h1>
                <p class="fs-16 text-center poppins-regular">Join the top digital marketing academy in Banglore to gain
                    agency experience, learn from experts, earn industry recognition to stay ahead.</p>
                <div class="mail-contact d-lg-flex justify-content-evenly align-items-center my-lg-5 my-4">
                    <div class="mail mb-3 mb-lg-0">
                        <img src="{{asset('frontend/assets/images/contact-us/telephone-icon.svg')}}" alt=""
                            class="img-fluid me-2">
                        <a href="tel:+91 88584 58584">+91 88584 58584</a>
                    </div>
                    <div class="contact">
                        <img src="{{asset('frontend/assets/images/contact-us/mail-icon.svg')}}" alt=""
                            class="img-fluid me-2">
                        <a href="mailto:info@brandstoryacademy.com">info@brandstoryacademy.com</a>
                    </div>
                </div>
            </div>
            <div class="form-main">
                <div class="homeform-main">
                    <h4 class=" text-blue fs-24 fw-500 text-center">You might be a perfect fit!</h4>
                    <p class="mb-4 text-blue fs-20 fw-400 text-center">Enroll today!</p>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Error Messages -->
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- reCAPTCHA Error (specific to recaptcha) -->
                    @error('recaptcha')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    <form id="enquiryForm" action="{{ route('enquiry.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstname" required
                                    pattern="[A-Za-z\s]+" title="Only alphabets are allowed">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastname" required
                                    pattern="[A-Za-z\s]+" title="Only alphabets are allowed">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]+"
                                    title="Only numbers are allowed">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="1"
                                placeholder="Type your message..." required></textarea>
                        </div>
                        <fieldset class="mb-3 mb-lg-5 d-lg-flex">
                            <legend class="col-form-label pt-0 pe-3" style="width: 12%;">Program</legend>
                            <div class="radio-button-sec">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="program" id="program1_normal"
                                        value="Digital Marketing Mastery" required>
                                    <label class="form-check-label" for="program1_normal">Digital Marketing Mastery</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="program" id="program3_normal"
                                        value="Advanced Digital Marketing Boot Camp" required>
                                    <label class="form-check-label" for="program3_normal">Advanced Digital Marketing Boot
                                        Camp</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="program" id="program2"
                                        value="360 Degree Digital Marketing" required>
                                    <label class="form-check-label" for="program2">
                                        360 Degree Digital Marketing
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="approval-check mb-3 mb-lg-4">
                            <input class="me-4" type="checkbox" id="termsAndConditions-Consent"
                                name="termsAndConditions-Consent" value="Accepted" required>
                            <label for="termsAndConditions-Consent" class="fs-16">I Accept The Terms</label><br>
                        </div>
                        <input type="hidden" id="recaptcha_response" name="recaptcha_response">
                        <input type="hidden" id="page_url" name="page_url" value="{{ url()->current() }}">

                        <button type="submit" class="btn d-block w-100 text-center bg-violet g-recaptcha">Submit</button>
                    </form>


                    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
                    <script>
                        document.getElementById('enquiryForm').addEventListener('submit', function (e) {
                            e.preventDefault();

                            grecaptcha.ready(function () {
                                grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', { action: 'submit' }).then(function (token) {
                                    document.getElementById('recaptcha_response').value = token;
                                    e.target.submit();
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>


@endsection