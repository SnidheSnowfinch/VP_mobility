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
    const carSlider = document.getElementById("carSlider");
    const wrapper = document.getElementById("carSliderWrapper");

    let scrollValue = 0;
    let autoScroll;

    function startAutoSlide() {
      autoScroll = setInterval(() => {
        scrollValue += 1;
        if (scrollValue >= carSlider.scrollWidth - wrapper.clientWidth) {
          scrollValue = 0;
        }
        wrapper.scrollLeft = scrollValue;
      }, 20);
    }

    function stopAutoSlide() {
      clearInterval(autoScroll);
    }

    const cards = document.querySelectorAll('.car-card');
    cards.forEach(card => {
      card.addEventListener('mouseenter', stopAutoSlide);
      card.addEventListener('mouseleave', startAutoSlide);
    });

    window.addEventListener("load", () => {
      startAutoSlide();
    });


    document.querySelectorAll('.slider-container').forEach((container) => {
      const slider = container.querySelector('.slider');
      const dots = container.querySelectorAll('.dot');
      const totalSlides = slider.children.length;
      let index = 0;

      function showSlide(i) {
        slider.style.transform = `translateX(-${i * 100}%)`;
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[i]) dots[i].classList.add('active');
      }

      const intervalId = setInterval(() => {
        index = (index + 1) % totalSlides;
        showSlide(index);
      }, 3000);

      container.addEventListener('mouseenter', () => clearInterval(intervalId));
      container.addEventListener('mouseleave', () => {
        setInterval(() => {
          index = (index + 1) % totalSlides;
          showSlide(index);
        }, 3000);
      });

      dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
          index = i;
          showSlide(i);
        });
      });
    });

    document.querySelectorAll('.dropdown-menu .dropdown-item').forEach(item => {
    item.addEventListener('click', function () {
      const button = this.closest('.dropdown').querySelector('.dropdown-toggle');
      button.innerHTML = `<i class="bi bi-chevron-down me-1 text-warning"></i> ${this.textContent}`;
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

    observer.observe(document.querySelector('.stats-section'));

     const customTrack = document.querySelector('.carousel-track-custom');
  const customDots = document.querySelectorAll('.custom-dot');

  function moveToCustomSlide(index) {
    const visibleSlides = getCustomVisibleSlides();
    const slideWidthPercent = 100 / visibleSlides;
    customTrack.style.transform = `translateX(-${index * slideWidthPercent}%)`;

    customDots.forEach(dot => dot.classList.remove('active'));
    customDots[index].classList.add('active');
  }

  function getCustomVisibleSlides() {
    const width = window.innerWidth;
    if (width >= 900) return 3;
    if (width >= 600) return 2;
    return 1;
  }

  window.addEventListener('resize', () => {
    const activeIndex = [...customDots].findIndex(dot => dot.classList.contains('active'));
    moveToCustomSlide(activeIndex);
  });

  
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>