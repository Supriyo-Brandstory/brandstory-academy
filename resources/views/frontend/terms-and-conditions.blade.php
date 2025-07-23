@extends('frontend.partial.app')
@section('content')
<section class="main-body">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="tandC-letter">
            <div class="commonContainer">
                <h2 class="text-violet">Terms and Conditions</h2>
                <p>Welcome to BrandStory Academy! By accessing and using our website , you agree to comply with and be bound by the following terms and conditions of use. Please read these terms carefully before using the Site. If you do not agree to these terms, you must not use the Site.</p>

            </div>
            <div class="commonContainer middleContainer">
                <div class="ind-terms">
                    <p class="fw-600">1. Acceptance of Terms</p>
                    <p class="fs-14">By using the Site, you confirm that you are at least 18 years old or have the consent of a legal guardian to use the Site. You agree to abide by these Terms and Conditions, our Privacy Policy, and any additional guidelines or rules applicable to specific services or features on the Site.</p>
                </div>
                <div class="ind-terms">
                    <p class="fw-600">2. Use of the Site</p>
                    <p class="fs-14">The content provided on the Site is for general information and educational purposes only. You agree to use the Site for lawful purposes only and not to:</p>
                    <ul>
                        <li class="fs-14">Engage in any activity that disrupts or interferes with the Site's functionality.</li>
                        <li class="fs-14">Attempt to gain unauthorized access to any part of the Site, servers, or networks connected to the Site.</li>
                        <li class="fs-14">Use the Site to distribute spam, malware, or any harmful content.</li>
                        <li class="fs-14">Copy, reproduce, or distribute any content from the Site without prior written permission from BrandStory Academy.</li>
                    </ul>
                </div>
                <div class="ind-terms">
                    <p class="fw-600">3. Intellectual Property</p>
                    <p class="fs-14">By using the Site, you confirm that you are at least 18 years old or have the consent of a legal guardian to use the Site. You agree to abide by these Terms and Conditions, our Privacy Policy, and any additional guidelines or rules applicable to specific services or features on the Site.</p>
                </div>
                <div class="ind-terms">
                    <p class="fw-600">4. Third-Party Links</p>
                    <p class="fs-14">The Site may contain links to third-party websites or services that are not owned or controlled by BrandStory Academy. We are not responsible for the content, privacy policies, or practices of any third-party sites. Your use of third-party sites is at your own risk.</p>
                </div>
                <div class="ind-terms">
                    <p class="fw-600">5. Modifications to Terms</p>
                    <p class="fs-14">BrandStory Academy reserves the right to update or modify these Terms and Conditions at any time without prior notice. Your continued use of the Site after any changes constitutes your acceptance of the revised terms. It is your responsibility to review these Terms and Conditions periodically.</p>
                </div>
                <div class="pt-3 w-100">
                    <p class="fw-600">6. Contact Us</p>
                    <p class="fs-14">If you have any questions or concerns about these Terms and Conditions, please contact us at:</p>
                    <div class="row">
                        <div class="col-lg-4 col-12 d-flex justify-content-start align-items-center">
                            <img src="{{asset('frontend/assets/images/privacy-policy/mail-icon.svg')}}" class="img-fluid me-2" alt="">
                            <a href="mailto:info@brandstoryacademy.com" class="text-decoration-none text-dark">info@brandstoryacademy.com</a>
                        </div>
                        <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                            <img src="{{asset('frontend/assets/images/privacy-policy/location-icon.svg')}}" alt="" class="img-fluid me-2">
                            <p class="mb-0">No 34, 3rd Floor, Surya Chambers, Domlur I Stage, Amarjyoti Layout, Domlur, Bengaluru, Karnataka - 560071</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="commonContainer d-none">
                <div class="approval-check">
                    <input class="me-4" type="checkbox" id="termsAndConditions-Consent" name="termsAndConditions-Consent" value="Accepted">
                    <label for="termsAndConditions-Consent" class="fs-16">By using the BrandStory Academy website, you acknowledge that you have read, understood, and agreed to these Terms and Conditions. Thank you for being a part of BrandStory Academy!</label><br>
                </div>
            </div>
        </div>
        <div class="appnreject-btn d-none">
            <div class="agree-terms me-2">
                <div class="agree-terms-inner">
                    Agree with terms & conditions
                </div>
            </div>
            <div class="reject-btn ms-2">
                <div class="reject-btn-inner">
                    Decline
                </div>
            </div>
        </div>
    </div>
</section>


@endsection