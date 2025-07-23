// Home page brand logo section start
var swiper = new Swiper('.brandlogo1', {
  slidesPerView: 2,
  spaceBetween: 10,
  loop: true,
  speed: 4500,  // Adjust speed for smooth scrolling
  autoplay: {
      delay: 0,
      disableOnInteraction: false,
  },
  breakpoints: {
      640: {
          slidesPerView: 2,
      },
      768: {
          slidesPerView: 4,
      },
      1024: {
          slidesPerView: 6,
      },
  },
});
// Home page brand logo section end


var swiper = new Swiper(".dmcareersld", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true, // Enables infinite loop
  autoplay: {
    delay: 3000, // 3 seconds
    disableOnInteraction: false, // Keeps autoplay running after user interaction
  },
  pagination: {
    el: ".dmcareer-pagi",
    clickable: true, // Enables pagination clicks
  },
  breakpoints: {
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
  }
});


var swiper = new Swiper(".certificatesld", {
  slidesPerView: 1,
  loop: true, // Enables infinite loop
  autoplay: {
    delay: 3000, // 3 seconds
    disableOnInteraction: false, // Keeps autoplay running after user interaction
  },
  pagination: {
    el: ".certificatepagi",
    clickable: true, // Enables pagination clicks
  },
});



document.addEventListener("DOMContentLoaded", function () {
  let lastScrollTop = 0;
  const header = document.querySelector(".mainheader");
  const threshold = window.innerHeight * 0.1; // 10% of viewport height

  window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (window.innerWidth > 991) { // Only for desktop view
      if (scrollTop > lastScrollTop && scrollTop > threshold) {
        header.classList.add("hidden"); // Hide header when scrolling down past 10%
      } else {
        header.classList.remove("hidden"); // Show header when scrolling up
      }
    }

    lastScrollTop = scrollTop;
  });
});


document.addEventListener("DOMContentLoaded", function () {
  let dropdown = document.querySelector(".nav-item.dropdown");

  dropdown.addEventListener("mouseenter", function () {
      let menu = this.querySelector(".dropdown-menu");
      menu.classList.add("show");
  });

  dropdown.addEventListener("mouseleave", function () {
      let menu = this.querySelector(".dropdown-menu");
      menu.classList.remove("show");
  });
});


document.addEventListener("DOMContentLoaded", function() {
  const popup = document.getElementById("internshipPopup");
  popup.style.visibility = "hidden"; // Ensure it's hidden initially
  popup.style.opacity = "0";

  const closeBtn = document.querySelector(".close-btn");

  // ✅ Select all buttons that trigger the popup
  const openBtns = document.querySelectorAll(".fixed-internship-btn, .poptrigger");

  openBtns.forEach(function(btn) {
    btn.addEventListener("click", function(event) {
      event.preventDefault();
      popup.style.visibility = "visible";
      popup.style.opacity = "1";
    });
  });

  closeBtn.addEventListener("click", function() {
    popup.style.visibility = "hidden";
    popup.style.opacity = "0";
  });

  window.addEventListener("click", function(event) {
    if (event.target === popup) {
      popup.style.visibility = "hidden";
      popup.style.opacity = "0";
    }
  });
});



document.addEventListener("DOMContentLoaded", function () {
    // Show popup after 10 seconds
    setTimeout(function () {
        document.getElementById("custom-popup").style.display = "block";
    }, 10000);

    // Close popup
    document.querySelector(".close-popup-custom").addEventListener("click", function () {
        document.getElementById("custom-popup").style.display = "none";
    });

    // Show popup when "Download Curriculum" is clicked
    document.getElementById("downloadCurriculumBtn").addEventListener("click", function (e) {
        e.preventDefault(); // Prevent default PDF download
        document.getElementById("custom-popup").style.display = "block";
    });
});
