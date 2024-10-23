<!DOCTYPE html>
<html lang="en">

@include('frontend.layout.header')


<!-- Carousel Start -->
@include('frontend.layout.slider')
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="frontend/img/heal.jpg" alt="">
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="text-truncate me-3 mb-0">Health</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="frontend/img/edu.jpg" alt="">
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="text-truncate me-3 mb-0">Education</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="frontend/img/social.jpg" alt="">
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="text-truncate me-3 mb-0">Social welfare</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">About Us</h6>
                <h1 class="mb-4">Our mission is to serve humanity.</h1>
                <p class="mb-4">(I) A charitable fund named "Sadaqah Tahbil" was created on July 4, 1983, immediately after the inception of Islami Bank on 30th March 1983, as per decision of the Board of Directors of the Bank in pursuance to the clause 104 of its Memorandum and Articles of Association.

                    (II) Gradually the volume of its activities increased with the passage of time and the “Sadaqah Tahbil” was renamed ”Islami Bank Foundation" on May 20,1991. Islami Bank Foundation has been working as a subsidiary organization of Islami Bank Bangladesh Limited with separate accounts and administration.
                    (III) It is registered with the Registrar of Joint Stock Companies and firms of Government of the People's Republic of Bangladesh under no S-1214 (25) 1988, dated 25-06-88.
                    It is also registered with the NGO Affairs Bureau under no. 668 dated 24-11-92.
                </p>


            </div>
            <div class="col-lg-6 pt-4" style="min-height: 500px;">
                <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="position-absolute img-fluid w-100 h-100" src="frontend/img/ibf-head-office-1.jpg" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->

<!-- Fact End -->


<!-- Service Start -->
<div class="container-fluid py-5 px-4 px-lg-0">
    <div class="row g-0">

        <div class="col-md-12 col-lg-9">
            <div class="ms-lg-5 ps-lg-5">
                <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">

                    <h1 class="mb-5">Software</h1>
                </div>
                <div class=" position-relative wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-4">

                        <p class="text-primary"><a href="http://119.18.151.114:8080/accounts/users/login">Accounts</a> </p>
                        <p class="text-primary"><a href="http://119.18.151.114:8091/login.aspx">E-proposal & Monitoring System</a> </p>
                        <p class="text-primary"><a href="http://119.18.151.114:8095/login.aspx">eProcurement</a> </p>
                        
                        <p class="text-primary"><a href="http://119.18.151.114:8092/Login.aspx">IBF Transport Portal</a> </p>
                        <p class="text-primary"><a href="http://119.18.151.114:8070/performance/">Perfomance</a> </p>
                        <p class="text-primary"><a href="http://119.18.151.114:8001/ords/r/ibf/a101102/89?">ERP</a> </p>
                        <p class="text-primary"><a href="https://www.islamibankbd.com/">Islami Bank Bangladesh</a> </p>
                    </div>


                    {{--<div class="bg-light p-4">--}}
                        {{--<div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">--}}
                            {{--<i class="fa fa-tint fa-2x text-primary"></i>--}}
                        {{--</div>--}}
                        {{--<h4 class="mb-3">Water Heater Repair</h4>--}}
                        {{--<p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>--}}
                        {{--<p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>--}}
                        {{--<p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>--}}
                        {{--<p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Support 24/7</p>--}}
                        {{--<a href="" class="btn bg-white text-primary w-100 mt-2">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service End -->


<!-- Booking Start -->


<!-- Booking End -->


<!-- Team Start -->

<!-- Team End -->


<!-- Testimonial Start -->

<!-- Testimonial End -->


<!-- Footer Start -->
@include('frontend.layout.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>



<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend/wlib/wow/wow.min.js')}}"></script>
<script src="{{asset('frontend/wlib/easing/easing.min.js')}}"></script>
<script src="{{asset('frontend/wlib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/wlib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('frontend/wlib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/wlib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('frontend/wlib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('frontend/wlib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('frontend/wjs/main.js')}}"></script>
</body>

</html>