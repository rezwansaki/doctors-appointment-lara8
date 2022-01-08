@extends('layout')

@section('content')

@include('slider')

<!-- Get Appointment Guideline Section Start Here -->
<section class="get-apppointment-guideline">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="get-apppointment-guideline-heading">
                    <h3>4 Easy Steps and Get an Appointment</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <div class="app-guide">
                    <span><i class="fas fa-sign-in-alt"></i></span>
                    <h3>Login</h3>
                    <p>At first you have to register by your email. Then login this site. Please, use your original email address.</p>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="app-guide">
                    <span><i class="fas fa-calendar-check"></i></span>
                    <h3>Get an Appointment</h3>
                    <p>Then click the 'Get an Appointment' button. You can see the appoinment page.</p>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="app-guide">
                    <span><i class="fas fa-info-circle"></i></span>
                    <h3>Give Your Information</h3>
                    <p>Give your information. Select appoinment date and patient's name and other information.</p>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="app-guide">
                    <span><i class="fas fa-check"></i></span>
                    <h3>Apply For Appoinment</h3>
                    <p>click the 'Apply' button for appoinment. You will get message. Check your email and get the appointment time.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get Appointment Guideline Section End Here -->

<!-- Information About This Doctor Start Here -->
<section class="about-doctor">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-doctor-image">
                    <img src="assets/images/aboutdoctor.jpg" alt="aboutdoctor">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-doctor-text">
                    <h3>About Doctor</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae magnam velit, nulla neque deserunt nesciunt maxime unde. Facere dolores doloremque repudiandae odio sint necessitatibus quod eaque, tempora commodi soluta enim odit nulla delectus, laborum repellat quae ipsa eveniet voluptate recusandae consequuntur animi. Optio culpa quaerat eos fugiat officiis ipsam corrupti quisquam deleniti. Ratione corporis voluptas neque architecto animi similique fuga ipsa laudantium nam, blanditiis labore consequuntur, aspernatur nesciunt. Nemo minus maxime aperiam fugit!
                    </p>
                    <div class="something-special">
                        <h3>Something Special</h3>
                        <p>
                            <i class="fas fa-check-circle"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <p>
                            <i class="fas fa-check-circle"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <p>
                            <i class="fas fa-check-circle"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Information About This Doctor End Here -->

<!-- Online Appointment System Start Here -->
<section class="online-appointment">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 online-appointment-text">
                <h3>Online Appoinment</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, ipsum. Blanditiis expedita cumque dolorem provident saepe mollitia, alias, eum voluptate non culpa qui consequuntur doloremque nostrum sunt minima iste aut porro error! Ad unde excepturi, quasi nam sed officia hic inventore natus ullam quos, atque labore dolores, porro minima maiores ab alias cupiditate. Quisquam rerum inventore repellendus accusantium esse ullam dolor, totam incidunt recusandae amet, exercitationem quasi libero. Adipisci sed blanditiis voluptate explicabo aperiam illo consectetur labore recusandae provident vitae itaque quo ratione error nihil, nam a quisquam repudiandae, impedit aut rerum! Cupiditate architecto nesciunt incidunt, dignissimos recusandae tenetur inventore?
                </p>
            </div>
            <div class="col-xl-6 online-appointment-image">
                <img src="assets/images/onlineappointment.jpg" alt="onlineappointment">
            </div>
        </div>
    </div>
</section>
<!-- Online Appointment System End Here -->

<!-- Contact Section Start Here -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-title">
                        <h3>Contact</h3>
                    </div>
                    <div class="card-body contact-area-main">
                        <div class="contact-area-main-title">ABC Hospitial</div>
                        <div class="contact-area-main-address">Dhanmondi, Dhaka.</div>
                        <div class="contact-area-main-phone"><span><i class="fas fa-phone-alt"></i></span>+88-0123456789, +88-0133456789, +88-0124456789</div>
                        <div class="contact-area-main-email"><span><i class="fas fa-envelope"></i></span>abchospital@abc.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End Here -->
@endsection