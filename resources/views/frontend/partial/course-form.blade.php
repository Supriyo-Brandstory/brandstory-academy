<form id="enquiryForm" action="{{ route('enquiry.store') }}" method="post">
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
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message..."
            required></textarea>
    </div>
    <input type="hidden" id="recaptcha_response" name="recaptcha_response">
    <input type="hidden" id="page_url" name="page_url" value="{{ url()->current() }}">
    <input type="hidden" name="program" value="{{ $program ?? '' }}">


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