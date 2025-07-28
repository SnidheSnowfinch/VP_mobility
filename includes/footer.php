<footer>
    <div class="footer-top">
      <div>
        <i class="bi bi-telephone"></i>
        <p><strong>Call us</strong><br>+91 0000000000</p>
      </div>
      <div>
        <i class="bi bi-envelope-fill"></i>
        <p><strong>Write to us</strong><br>info@demomame.com</p>
      </div>
      <div>
        <i class="bi bi-geo-alt"></i>
        <p><strong>Address</strong><br>Pune, demo address, Office 123</p>
      </div>
    </div>

    <div class="footer-grid">
      <div class="footer-logo">
        <a href="index.php"><img src="bootstrap/images/logo.png" alt=""></a>
        <p>Rent a car imperdiet sapien porttito the libernum eleifenduse the commodo erat nesuen.</p>
        <div class="social-icons">
          <a href="#"><i class="bi bi-whatsapp"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bu bi-youtube"></i></a>
        </div>
      </div>

      <div class="footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Cars</a></li>
          <li><a href="#">Car Types</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <div class="subscribe">
        <h4>Subscribe</h4>
        <p>Want to be notified about our services? Just sign up and we'll send you a notification by email.</p>
        <form>
          <input type="email" placeholder="Email Address" required />
          <button type="submit"><i class="bi bi-arrow-right"></i></button>
        </form>
      </div>
    </div>

    <div class="footer-bottom">
      ©2025 <strong>VP mobility.</strong> All rights reserved.
    </div>
  </footer>
  <script>
   


//  --------------
  document.querySelectorAll('.menu-drop .dropdown-item').forEach(item => {
  item.addEventListener('click', function (e) {
    e.preventDefault(); // ✅ Prevent jumping to top
    
    const button = this.closest('.drop-new').querySelector('.custom-dropdown');
    const selectedText = this.textContent.trim();

    button.innerHTML = `
      ${selectedText} <i class="bi bi-chevron-down ms-1 text-warning"></i>
    `;
  });
});
  const counters = document.querySelectorAll('.counter');
    let started = false;

    const startCounting = () => {
      counters.forEach(counter => {
        const updateCount = () => {
          const target = +counter.getAttribute('data-target');
          const count = +counter.innerText;
          const increment = Math.ceil(target / 40);

          if (count < target) {
            counter.innerText = count + increment;
            setTimeout(updateCount, 25);
          } else {
            counter.innerText = target;
          }
        };

        updateCount();
      });
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !started) {
          started = true;
          startCounting();
          observer.disconnect(); // only trigger once
        }
      });
    }, {
      threshold: 0.5
    });

  document.querySelectorAll('.slider-container').forEach((sliderContainer, sliderIndex) => {
    const track = sliderContainer.querySelector('.slider-track');
    const slides = track.querySelectorAll('.slide');
    const dots = sliderContainer.querySelectorAll('.dot');
    let currentIndex = 0;

    function goToSlide(index) {
      currentIndex = index;
      track.style.transform = `translateX(-${index * 100}%)`;
      dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
      });
    }

    function autoSlides() {
      currentIndex = (currentIndex + 1) % slides.length;
      goToSlide(currentIndex);
    }

    // Set interval for each slider
    setInterval(autoSlides, 7000);

    // Add click functionality to dots
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => goToSlide(index));
    });
  });

// -------------
// document.querySelectorAll('.car-card').forEach(card => {
//   const wrapper = card.querySelector('.carSliderWrapper');
//   const carSlider = card.querySelector('.carSlider');
  
//   let scrollValue = 0;
//   let autoScroll;

//   function startAutoSlides() {
//   autoScroll = setInterval(() => {
//     scrollValue += 1;
//     if (scrollValue >= carSlider.scrollWidth - wrapper.clientWidth) {
//       scrollValue = 0;
//     }
//     wrapper.scrollLeft = scrollValue;
//   }, 20);
// }

//   function stopAutoSlides() {
//     clearInterval(autoScroll);
//   }

//   startAutoSlides();

//   card.addEventListener('mouseenter', stopAutoSlides);
//   card.addEventListener('mouseleave', startAutoSlides);
// });

document.querySelectorAll('.slider-section').forEach(wrapper => {
  const slider = wrapper.querySelector('.car-slider');
  let scrollValue = 0;
  let autoScroll;

  function startAutoSlides() {
    autoScroll = setInterval(() => {
      scrollValue += 1;
      if (scrollValue >= slider.scrollWidth - wrapper.clientWidth) {
        scrollValue = 0;
      }
      wrapper.scrollLeft = scrollValue;
    }, 20);
  }

  function stopAutoSlides() {
    clearInterval(autoScroll);
  }

  // ✅ Start scrolling right away
  startAutoSlides();

  // Pause on hover
  wrapper.addEventListener('mouseenter', stopAutoSlides);
  wrapper.addEventListener('mouseleave', startAutoSlides);
});

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>