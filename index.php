<?php include 'includes/header.php' ?>

<section class="hero">
  <div class="hero-text">
    <h6>Premium</h6>
    <h1>Rental Car</h1>
    <p>Bentley Bentayga <span class="price">₹ 2000 / day</span></p>
    <div class="d-flex gap-3 mt-4">
      <button class="btn btn-custom shine-btn">View Details <i class="bi bi-arrow-up-right"></i></button>
      <button class="btn btn-custom shine-button-trans">Rent Now <i class="bi bi-arrow-up-right"></i></button>
    </div>
  </div>

</section>

<section class="div-container fade-in-on-scroll">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <h6>RENTAX</h6>
      <h2>We Are More Than <br><span class="hilight">A Car Rental Company</span></h2>
      <p>Car repair quisque sodales dui ut varius vestibulum drama tortor turpis porttitor tellus eu euismod nisl
        massa rutrum in the miss volume place urna lacinia eros nunc urna mauris vehicula rutrum in the miss on volume
        interdum.</p>
      <ul class="rental-list">
        <li><i class="bi bi-check-lg"></i> Sports and Luxury Cars</li>
        <li><i class="bi bi-check-lg"></i> Economy Cars</li>
      </ul>
      <button class="read-btn shine-btn">Read More <i class="bi bi-arrow-up-right ms-2"></i></button>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="outer-img">
        <img class="rental-img" src="bootstrap/images/car-img.png" alt="Car" />
      </div>
    </div>
</section>



<section class="scroll-section text-center fade-in-on-scroll">
  <h6>WHAT WE DO</h6>
  <h2>Our <span class="hilight">Services</span></h2>
  <div class="slider-container">
    <div class="slider-track">
      <div class="slide">
        <div class="card">
          <img class="rental-img" src="bootstrap/images/service 2.jpg" alt="Car" />
          <div class="card-footer">
            <h4 class="low">Airport Transfer</h4>
            <div class="badge">01</div>
          </div>
        </div>
        <div class="card">
          <img class="rental-img" src="bootstrap/images/service 3.jpg" alt="Car" />

          <div class="card-footer">
            <h4 class="low">Corporate Car Rental</h4>
            <div class="badge">02</div>
          </div>
        </div>
        <div class="card">
          <img class="rental-img" src="bootstrap/images/service 1.jpg" alt="Car" />

          <div class="card-footer">
            <h4 class="low">Car Rental with Driver</h4>
            <div class="badge">03</div>
          </div>
        </div>
      </div>

      <div class="slide">
        <div class="card">
          <img class="rental-img" src="bootstrap/images/service 2.jpg" alt="Car" />

          <div class="card-footer">
            <h4 class="low">Car Rental with Driver</h4>
            <div class="badge">04</div>
          </div>
        </div>


        <div class="card">
          <img class="rental-img" src="bootstrap/images/service 1.jpg" alt="Car" />

          <div class="card-footer">
            <h4 class="low">Car Rental with Driver</h4>
            <div class="badge">05</div>
          </div>

        </div>
        <div class="card">
          <img class="rental-img" src="bootstrap/images/service 3.jpg" alt="Car" />


          <div class="card-footer">
            <h4 class="low">Car Rental with Driver</h4>
            <div class="badge">06</div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="dots" id="dots">
    <span class="dot active" onclick="goToSlide(0)"></span>
    <span class="dot" onclick="goToSlide(1)"></span>
  </div>

</section>


<div class="container-form text-center fade-in-on-scroll">
  <h6>Rent Now</h6>
  <h2>Book Auto Rental</h2>
  <div class="rental-form p-0">

    <div class="rental-form-box">

      <div class="form-group dropdown drop-new">
        <button class="btn dropdown-toggle custom-dropdown" type="button" id="carTypeDropdown" data-bs-toggle="dropdown"
          aria-expanded="false">
          Choose Car Type <i class="bi bi-chevron-down ms-1 text-warning"></i>

        </button>
        <ul class="dropdown-menu menu-drop" aria-labelledby="carTypeDropdown">
          <li><a class="dropdown-item" href="#">Sedan</a></li>
          <li><a class="dropdown-item" href="#">SUV</a></li>
          <li><a class="dropdown-item" href="#">Hatchback</a></li>
        </ul>

      </div>

      <div class="form-divider"></div>

      <div class="form-group dropdown drop-new">
        <button class="btn dropdown-toggle custom-dropdown" type="button" id="pickupLocationDropdown"
          data-bs-toggle="dropdown" aria-expanded="false">
          Pick-Up Location <i class="bi bi-chevron-down ms-1 text-warning"></i>

        </button>
        <ul class="dropdown-menu menu-drop" aria-labelledby="pickupLocationDropdown">
          <li><a class="dropdown-item" href="#">Delhi</a></li>
          <li><a class="dropdown-item" href="#">Noida</a></li>
          <li><a class="dropdown-item" href="#">Gurgaon</a></li>
        </ul>
      </div>

      <div class="form-divider"></div>

      <div class="form-group">
        <input type="date">
      </div>

      <div class="form-divider"></div>
      <div class="form-group dropdown drop-new">
        <button class="btn dropdown-toggle custom-dropdown" type="button" id="carTypeDropdown" data-bs-toggle="dropdown"
          aria-expanded="false">
          Drop-Off Location <i class="bi bi-chevron-down ms-1 text-warning"></i>

        </button>
        <ul class="dropdown-menu menu-drop" aria-labelledby="carTypeDropdown">
          <li><a class="dropdown-item" href="#">Delhi</a></li>
          <li><a class="dropdown-item" href="#">Faridabad</a></li>
          <li><a class="dropdown-item" href="#">Ghaziabad</a></li>
        </ul>

      </div>


      <div class="form-divider"></div>

      <div class="form-group">
        <input type="date">
      </div>

      <div class="form-divider"></div>

      <button class="btn-book">Rent Now</button>
    </div>

  </div>

</div>
<section class="div-container fade-in-on-scroll">
  <div class="row ">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <h6>Luxury | Comfort | Convenience</h6>
      <h2>What Make US <br><span class="hilight">The Best Choice?</span></h2>
      <p>Car repair suscipit sedibus elit urna vehicula donec tortor turpis porttitor. Natus eu euismod et massa
        molestie. Etiam vitae ultrices sem nec rutrum mauris vehicula rutrum in sit massa.</p>
      <img class="choose-img" src="bootstrap/images/car-yellow.png" alt="Yellow Car" />
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="feature-box">
        <div class="feature-icon"><img src="bootstrap/images/flexibility.png" alt=""></div>
        <div>
          <h5>Convenience and Flexibility</h5>
          <p>Enjoy the convenience and flexibility of having access to a fleet of vehicles as per your needs and
            comfort.</p>
        </div>
      </div>
      <div class="feature-box">
        <div class="feature-icon"><img src="bootstrap/images/management.png" alt=""></div>
        <div>
          <h5>Streamlined Management</h5>
          <p>Easily track and manage bookings, expenses, and updates through our online booking tool that integrates
            with our customers.</p>
        </div>
      </div>
      <div class="feature-box">
        <div class="feature-icon"><img src="bootstrap/images/support.png" alt=""></i></div>
        <div>
          <h5>24/7 Support</h5>
          <p>You can rely on our dedicated team to provide prompt assistance whenever needed.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container-home fade-in-on-scroll">
  <h6>Long-standing customer relationships</h6>
  <h2>We drive success for <br><span class="hilight">
      top companies around the globe</span></h2>
  <p>We have continued to be the choice of our long-standing clients for over a
    decade who rely on us for their mobility needs. </p>
  <div class="icon">
    <div class="left">
      <img src="bootstrap/images/car-icon.png" alt="">
      <h2>120+ <br> <span class="text-white-50 h3">VEHICLES</span></h2>
    </div>
    <div>
      <img src="bootstrap/images/cities.png" alt="">
      <h2>30+ <br> <span class="text-white-50 h3">CITIES</span></h2>
    </div>
  </div>


</div>

<section class="scroll-section text-center fade-in-on-scroll">
  <h6>LOCATIONS</h6>
  <h2>Explore India<span class="hilight">On Wheels</span></h2>
  <div class="slider-container">
    <div class="slider-track" id="sliderTrack">
      <div class="slide">
        <div class="card">
          <img src="https://picsum.photos/id/1015/600/400" alt="Service 1">
          <div class="card-footer">
            <h4 class="high">Place name</h4>

            <div class="badge">01</div>
          </div>
        </div>
        <div class="card">
          <img src="https://picsum.photos/id/1016/600/400" alt="Service 2">
          <div class="card-footer">
            <h4 class="high">Place name</h4>

            <div class="badge">02</div>
          </div>
        </div>
        <div class="card">
          <img src="https://picsum.photos/id/1020/600/400" alt="Service 3">
          <div class="card-footer">
            <h4 class="high">Place name</h4>

            <div class="badge">03</div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="card">
          <img src="https://picsum.photos/id/1021/600/400" alt="Service 4">
          <div class="card-footer">
            <h4 class="high">Place name</h4>

            <div class="badge">04</div>
          </div>
        </div>
        <div class="card">
          <img src="https://picsum.photos/id/1022/600/400" alt="Service 5">
          <div class="card-footer">
            <h4 class="high">Place name</h4>

            <div class="badge">05</div>
          </div>
        </div>
        <div class="card">
          <img src="https://picsum.photos/id/1023/600/400" alt="Service 6">
          <div class="card-footer">
            <h4 class="high">Place name</h4>
            <div class="badge">06</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="dots" id="dots">
    <span class="dot active" onclick="goToSlide(0)"></span>
    <span class="dot" onclick="goToSlide(1)"></span>
  </div>

</section>

<section class="div-container text-center pb-0">
  <h6>Select Your Car</h6>
  <h2>Luxury <span class="hilight">Car Fleet</span></h2>
</section>
<div class="slider-section" id="carSliderWrapper">
  <div class="car-slider" id="carSlider">
    <!-- Card 1 -->
    <div class="car-card">
      <img src="bootstrap/images/Luxury Car-1.jpg" alt="Car 1">
      <div class="car-info">
        <h5>Range Rover</h5>
        <div class="d-align">
          <div class="features">
            <span><i class="bi bi-person"></i> 4 Seats</span>
            <span><i class="bi bi-gear"></i> Auto</span>
            <span><i class="bi bi-briefcase"></i> 2 Bags</span>
            <span><i class="bi bi-calendar3"></i> Age 25</span>
          </div>
          <div class="car-footer">
            <button class="btn">Details</button>
            <div class="price">₹4500 <p>/day</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="car-card">
      <img src="bootstrap/images/Luxury Car-2.jpg" alt="Car 1">
      <div class="car-info">
        <h5>Mini Cooper</h5>
        <div class="d-align">
          <div class="features">
            <span><i class="bi bi-person"></i> 4 Seats</span>
            <span><i class="bi bi-gear"></i> Auto</span>
            <span><i class="bi bi-briefcase"></i> 2 Bags</span>
            <span><i class="bi bi-calendar3"></i> Age 25</span>
          </div>
          <div class="car-footer">
            <button class="btn">Details</button>
            <div class="price">₹4500 <p>/day</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="car-card">
      <img src="bootstrap/images/Luxury Car-3.png" alt="Car 1">
      <div class="car-info">
        <h5>Lamborghini Urus</h5>
        <div class="d-align">
          <div class="features">
            <span><i class="bi bi-person"></i> 4 Seats</span>
            <span><i class="bi bi-gear"></i> Auto</span>
            <span><i class="bi bi-briefcase"></i> 2 Bags</span>
            <span><i class="bi bi-calendar3"></i> Age 25</span>
          </div>
          <div class="car-footer">
            <button class="btn">Details</button>
            <div class="price">₹4500 <p>/day</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="car-card">
      <img src="bootstrap/images/Luxury Car-1.jpg" alt="Car 1">
      <div class="car-info">
        <h5>Lamborghini Urus</h5>
        <div class="d-align">
          <div class="features">
            <span><i class="bi bi-person"></i> 4 Seats</span>
            <span><i class="bi bi-gear"></i> Auto</span>
            <span><i class="bi bi-briefcase"></i> 2 Bags</span>
            <span><i class="bi bi-calendar3"></i> Age 25</span>
          </div>
          <div class="car-footer">
            <button class="btn">Details</button>
            <div class="price">₹4500 <p>/day</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="car-card">
      <img src="bootstrap/images/Luxury Car-3.png" alt="Car 1">
      <div class="car-info">
        <h5>Lamborghini Urus</h5>
        <div class="d-align">
          <div class="features">
            <span><i class="bi bi-person"></i> 4 Seats</span>
            <span><i class="bi bi-gear"></i> Auto</span>
            <span><i class="bi bi-briefcase"></i> 2 Bags</span>
            <span><i class="bi bi-calendar3"></i> Age 25</span>
          </div>
          <div class="car-footer">
            <button class="btn">Details</button>
            <div class="price">₹4500 <p>/day</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="car-card">
      <img src="bootstrap/images/Luxury Car-2.jpg" alt="Car 1">
      <div class="car-info">
        <h5>Lamborghini Urus</h5>
        <div class="d-align">
          <div class="features">
            <span><i class="bi bi-person"></i> 4 Seats</span>
            <span><i class="bi bi-gear"></i> Auto</span>
            <span><i class="bi bi-briefcase"></i> 2 Bags</span>
            <span><i class="bi bi-calendar3"></i> Age 25</span>
          </div>
          <div class="car-footer">
            <button class="btn">Details</button>
            <div class="price">₹4500 <p>/day</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-form text-center img-new fade-in-on-scroll">
  <h6 class="text-warning">Rent Your Car</h6>
  <h2>Interested in Renting?</h2>
  <h6>Don't hesitate and send us a message.</h6>
  <div><button class="btn btn-custom btn-yellow shine-btn">WhatsApp <i class="bi bi-whatsapp"></i></button>
    <button class="btn btn-custom btn-outline-light shine-button-trans">Rent Now <i
        class="bi bi-arrow-up-right"></i></button>
  </div>


</div>

<?php include 'includes/footer.php' ?>