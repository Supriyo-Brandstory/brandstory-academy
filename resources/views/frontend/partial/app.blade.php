<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  {!!$seo->script ?? '<title>#1 Digital Marketing Institute in Bangalore: BrandStory Academy</title>'!!}
  <link rel="preload" href="{{asset('frontend/assets/fonts/HankenGrotesk-Regular.woff2')}}" as="font" type="font/woff2"
    crossorigin>
  <link href="{{asset('frontend/assets/css/bootstrap-min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/swiper.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/global.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/skin.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/style-sheet.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/header.css')}}" rel="stylesheet">


  
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5SSJ8MF9');</script>
<!-- End Google Tag Manager -->




  <!-- Meta Pixel Code -->
  <script>
    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '600881299379467');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=600881299379467&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SSJ8MF9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</head>

<body class="homepage">


  @include('frontend.partial.header')
  @yield('content')
  @include('frontend.partial.footer')


  <!-- fixed button start -->
  <a href="#" class="fixed-internship-btn">Join the Internship Now</a>

  <!-- Popup Modal -->
  <div id="internshipPopup" class="popup-overlay">
    <div class="popup-content">
      <div class="homeform-main popfrm form-main">
        <span class="close-btn">&times;</span>

        <form action="{{ route('enquiry.store') }}" method="post" class="enquiry-form">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstname" required pattern="[A-Za-z\s]+"
                title="Only alphabets are allowed">
            </div>
            <div class="col-md-6">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="lastname" required pattern="[A-Za-z\s]+"
                title="Only alphabets are allowed">
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
          <fieldset class="mb-3">
            <legend class="col-form-label pt-0">Select a Program</legend>
            <div class="row">
              <div class="col-md-6">
                <div class="form-check mb-3 w-100">
                  <input class="form-check-input" type="radio" name="program" id="program1_popup"
                    value="Digital Marketing Mastery" required>
                  <label class="form-check-label" for="program1_popup">Digital Marketing Mastery</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check mb-3 w-100">
                  <input class="form-check-input" type="radio" name="program" id="program2_popup"
                    value="Advanced Digital Marketing Boot Camp" required>
                  <label class="form-check-label" for="program2_popup">Advanced Digital Marketing Boot Camp</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check w-100">
                  <input class="form-check-input" type="radio" name="program" id="program3_popup"
                    value="360 Degree Digital Marketing" required>
                  <label class="form-check-label" for="program3_popup">360 Degree Digital Marketing</label>
                </div>
              </div>
            </div>
          </fieldset>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="1" placeholder="Type your message..."
              required></textarea>
          </div>


          <input type="hidden" id="recaptcha_response" name="recaptcha_response">
          <input type="hidden" id="page_url" name="page_url" value="{{ url()->current() }}">
          <input type="hidden" name="formFragment" value="enquiry"> <!-- or "enquiry" -->

          <button type="submit" class="btn d-block w-100 text-center bg-violet g-recaptcha">Submit</button>
        </form>

        @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show rounded-pill mt-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" style="transform: scale(0.85);" data-bs-dismiss="alert"
        aria-label="Close"></button>
      </div>
    @endif

        <!-- Error Messages -->
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show rounded-pill mt-4" role="alert">
          <ul class="mb-0">
          @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
          </ul>
          <button type="button" class="btn-close" style="transform: scale(0.85);" data-bs-dismiss="alert"
          aria-label="Close"></button>
        </div>
    @endif


      </div>
    </div>
  </div>
  <!-- fixed button end -->




  {{-- <div id="custom-popup" class="custom-popup">
    <div class="popup-content-custom">
      <span class="close-popup-custom">&times;</span>

      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-4 col-md-2"></div>
          <div class="col-lg-8 col-md-10">
            <div class="homeform-main form-main normal cuspopup">
              <h4 class="mb-4 text-blue text-md-start text-center">You might be a perfect fit! Enroll today!</h4>
              <form id="enquiryForm" action="download-brochure-validation.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstname" required
                      pattern="[A-Za-z\s]+" title="Only alphabets are allowed">
                  </div>
                  <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastname" required pattern="[A-Za-z\s]+"
                      title="Only alphabets are allowed">
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
                <input type="hidden" id="recaptcha_response" name="recaptcha_response" class="recaptcha_response">
                <button type="submit" class="btn d-block w-100 text-center bg-violet">Download Brochure</button>
              </form>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


  <!-- form validation code -->
  <script>
    document.getElementById('enquiryForm').addEventListener('submit', function (event) {
      let firstName = document.getElementById('firstName').value;
      let lastName = document.getElementById('lastName').value;
      let phone = document.getElementById('phone').value;

      // Validate First and Last Name (Only alphabets)
      let namePattern = /^[A-Za-z]+$/;
      if (!namePattern.test(firstName) || !namePattern.test(lastName)) {
        alert("First Name and Last Name should contain only alphabets.");
        event.preventDefault();
        return;
      }

      // Validate Phone Number (Only digits)
      let phonePattern = /^[0-9]+$/;
      if (!phonePattern.test(phone)) {
        alert("Phone Number should contain only numbers.");
        event.preventDefault();
        return;
      }
    });
  </script>
  <!-- Form validation code end -->


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      function initializeRadioButtons(container) {
        const radioButtons = container.querySelectorAll(".form-check-input");

        radioButtons.forEach((radio) => {
          radio.addEventListener("change", function () {
            // Remove .selected class from all parent .form-check elements in the same container
            container.querySelectorAll(".form-check").forEach((div) => div.classList.remove("selected"));

            // Add .selected class to the parent .form-check of the selected radio button
            if (this.checked) {
              this.closest(".form-check").classList.add("selected");
            }
          });
        });
      }

      // Initialize radio buttons for the normal form
      initializeRadioButtons(document);

      // Function to open the popup and reinitialize radio buttons
      function openPopup() {
        const popup = document.querySelector("#internshipPopup");
        popup.style.display = "block"; // Ensure the popup is shown
        initializeRadioButtons(popup); // Reinitialize radio buttons inside the popup
      }

      // Attach event listener to the popup trigger button
      document.querySelector(".your-popup-trigger-button").addEventListener("click", openPopup);

      // Close the popup when clicking outside or on the close button
      document.querySelector("#internshipPopup").addEventListener("click", function (event) {
        if (event.target.classList.contains("popup-overlay") || event.target.classList.contains("close-btn")) {
          this.style.display = "none";
        }
      });
    });
  </script>


  {{--
  <script>
    document.querySelectorAll('form').forEach(function (form) {
      form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        let recaptchaInput = form.querySelector('input[name="recaptcha_response"]'); // Find the hidden input in the form

        grecaptcha.ready(function () {
          grecaptcha.execute('6LfEBOIqAAAAAGSxBwirAeNNnL-GSGkVxyOQNS77', { action: 'submit' }).then(function (token) {
            if (recaptchaInput) {
              recaptchaInput.value = token; // Set token in the hidden input
              form.submit(); // Submit the form after setting the token
            } else {
              console.error("reCAPTCHA input field not found in the form.");
            }
          });
        });
      });
    });
  </script> --}}
  {{--
  <script src="https://www.google.com/recaptcha/api.js?render=6LfEBOIqAAAAAGSxBwirAeNNnL-GSGkVxyOQNS77"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>


  <script src="{{asset('frontend/assets/js/bootstrap-bundle.js')}}"></script>
  <script src="{{asset('frontend/assets/js/swiper.js')}}"></script>
  <script src="{{asset('frontend/assets/js/custome.js?v=1.2')}}"></script>

  {{--
  <script>
    if (window.location.pathname.endsWith("{{route('home')}}")) {
      // Redirect to the academy homepage if the current path is index
      window.location.href = window.location.origin + "/academy/";
    }
  </script> --}}

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      // Initially show only the first testimonial
      $('.student-testi-main').hide();
      $('.student-testi-main[data-student="1"]').show();
      $('.ourstudent-main[data-student="1"]').addClass('active');

      // On clicking any student box
      $('.ourstudent-main').click(function () {
        var studentId = $(this).data('student');

        // Remove active from all, then add to clicked
        $('.ourstudent-main').removeClass('active');
        $(this).addClass('active');

        // Show the corresponding testimonial
        $('.student-testi-main').hide();
        $('.student-testi-main[data-student="' + studentId + '"]').show();
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      if (window.location.hash === "#enquiryForm") {
        const section = document.getElementById("enquiryForm");
        if (section) {
          section.scrollIntoView({ behavior: "smooth" });
        }
      }
    });
  </script>
  <script>
    document.getElementById('enquiryForm').addEventListener('submit', function (e) {
      e.preventDefault();

      grecaptcha.ready(function () {
        grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', { action: 'submit' }).then(function (token) {
          document.getElementById('recaptcha_response').value = token;
          document.getElementById('enquiryForm').submit();
        });
      });
    });
  </script>
  <script>
  document.querySelectorAll('.enquiryFormalternative').forEach(function(form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();

      grecaptcha.ready(function () {
        grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', { action: 'submit' }).then(function (token) {
          form.querySelector('.recaptcha_response').value = token;
          form.submit();
        });
      });
    });
  });
</script>

<script>
  document.querySelectorAll('.enquiry-form').forEach(function(form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();

      const form = e.target;
      const formData = new FormData(form);

      // Call reCAPTCHA first
      grecaptcha.ready(function() {
        grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {
          action: 'submit'
        }).then(function(token) {
          formData.append('recaptcha_response', token);

          fetch(form.action, {
              method: 'POST',
              headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
              },
              body: formData
            })
            .then(response => response.json())
            .then(data => {
              // Close the internship popup before showing SweetAlert
              const internshipPopup = document.querySelector("#internshipPopup");
              if (internshipPopup) {
                internshipPopup.style.display = "none";
              }

              if (data.status === 'success') {
                Swal.fire({
                  icon: 'success',
                  title: 'Thank you!',
                  text: data.message,
                  confirmButtonColor: '#3085d6',
                });
                form.reset();
              } else if (data.status === 'error') {
                let errorText = '';
                if (data.errors) {
                  for (const key in data.errors) {
                    errorText += data.errors[key].join('<br>') + '<br>';
                  }
                } else {
                  errorText = data.message || 'Something went wrong!';
                }

                Swal.fire({
                  icon: 'error',
                  title: 'Oops!',
                  html: errorText,
                  confirmButtonColor: '#d33',
                });
              }
            })
            .catch(error => {
              console.error(error);
              Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Something went wrong while submitting the form.',
              });
            });
        });
      });
    });
  });
</script>
</body>

</html>