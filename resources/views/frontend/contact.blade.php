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
                    <form id="enquiryForm" method="POST" action="{{ route('enquiry.store') }}">
    @csrf

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form fields -->
    <input type="text" name="firstname" placeholder="First Name" required>
    <input type="text" name="lastname" placeholder="Last Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="tel" name="phone" placeholder="Phone Number" required>
    <textarea name="message" placeholder="Message" required></textarea>

    <label>Program:</label>
    <input type="radio" name="program" value="Digital Marketing Mastery" required> Digital Marketing Mastery
    <input type="radio" name="program" value="Advanced Digital Marketing Boot Camp" required> Advanced Digital Marketing Boot Camp
    <input type="radio" name="program" value="360 Degree Digital Marketing" required> 360 Degree Digital Marketing

    <label>
        <input type="checkbox" name="termsAndConditions-Consent" value="Accepted" required> I Accept the Terms
    </label>

    <input type="hidden" id="recaptcha_response" name="recaptcha_response">
    <input type="hidden" name="page_url" value="{{ url()->current() }}">

    <button type="submit">Submit</button>
</form>

<!-- reCAPTCHA v3 script -->
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