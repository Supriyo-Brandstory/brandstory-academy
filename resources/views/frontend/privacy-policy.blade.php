@extends('frontend.partial.app')
@section('content')
<section class="privacy-policy-banner">
    <div class="container">
        <div class="row bannerRow g-4">
            <div class="col-lg-7 col-12 d-flex justify-content-center flex-column pe-lg-5">
                <h2 class="text-violet">Privacy Policy</h2>
                <p class="fs-16">At BrandStory Academy, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and safeguard your information when you visit our website. By using the Site, you consent to the practices described in this policy.</p>
            </div>
            <div class="col-lg-5 col-12 d-flex justify-content-center">
                <img src="{{asset('frontend/assets/images/privacy-policy/privacy-policy-banner-img.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section class="body-banner-section">
    <div class="container">
        <div class="information-letter p-lg-5 p-4">
            <div class="row">
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <p class="fw-600">1. Information We Collect</p>
                </div>
                <div class="col-lg-8 col-12 ind-terms">
                    <p>We may collect the following types of information when you use our Site:</p>
                    <p class="mb-0">A. Personal Information</p>
                    <ul>
                        <li>Name</li>
                        <li>Email address</li>
                        <li>Phone number</li>
                        <li>Any other information you voluntarily provide to us (e.g., through contact forms or surveys)</li>
                    </ul>
                    <p class="mb-0">B. Non-Personal Information</p>
                    <ul>
                        <li>Browser type and version</li>
                        <li>Device type and operating system</li>
                        <li>Pages visited on the Site</li>
                        <li>Time and date of visits</li>
                        <li>Referring website addresses</li>
                    </ul>
                    <p class="mb-0">C. Cookies and Tracking Technologies</p>
                    <p>We use cookies and similar tracking technologies to enhance your experience on the Site, analyze trends, and administer the Site. Cookies are small data files stored on your device that help us improve our services and tailor content to your preferences. You can disable cookies through your browser settings, but this may affect your ability to use certain features of the Site.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <p class="fw-600">2. How We Use Your Information</p>
                </div>
                <div class="col-lg-8 col-12 ind-terms">
                    <p>We may use the information we collect for the following purposes:</p>
                    <ul>
                        <li>To provide, operate, and maintain the Site.</li>
                        <li>To respond to your inquiries, comments, or requests.</li>
                        <li>To send you promotional materials, newsletters, or updates (if you have opted in to receive them).</li>
                        <li>To improve the Site, analyze usage trends, and enhance user experience.</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <p class="fw-600">3. How We Share Your Information</p>
                </div>
                <div class="col-lg-8 col-12 ind-terms">
                    <p>We do not sell, trade, or rent your personal information to third parties. However, we may share your information in the following circumstances:</p>
                    <ul>
                        <li>When required by law or to comply with legal processes (e.g., court orders, government requests).</li>
                        <li>To protect the rights, property, or safety of BrandStory Academy, our users, or the public.</li>
                        <li>In connection with a business transaction, such as a merger, acquisition, or sale of assets.</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <p class="fw-600">4. Third-Party Links</p>
                </div>
                <div class="col-lg-8 col-12 ind-terms">
                    <p>The Site may contain links to third-party websites or services. This Privacy Policy does not apply to those third-party sites, and we are not responsible for their privacy practices. We encourage you to review the privacy policies of any third-party sites you visit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <p class="fw-600">5. Your Choices</p>
                </div>
                <div class="col-lg-8 col-12 ind-terms">
                    <ul>
                        <li>Opt-Out of Marketing Communications: You can unsubscribe from our marketing emails by following the instructions included in those emails.</li>
                        <li>Cookies: You can disable cookies through your browser settings, but this may limit your ability to use certain features of the Site.</li>
                        <li>Access and Update Your Information: If you would like to access, correct, or delete any personal information we have about you, please contact us using the information provided below.</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <p class="fw-600">6. Changes to This Privacy Policy</p>
                </div>
                <div class="col-lg-8 col-12 ind-terms">
                    <p>We may update this Privacy Policy from time to time to reflect changes in our practices or applicable laws. We will notify you of any significant changes by posting the updated policy on the Site and updating the "Last Updated" date. Your continued use of the Site after any changes constitutes your acceptance of the revised policy.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <p class="fw-600">7. Contact Us</p>
                </div>
                <div class="col-lg-8 col-12 ind-terms">
                    <p>If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us at:</p>
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
        </div>
    </div>
</section>
@endsection