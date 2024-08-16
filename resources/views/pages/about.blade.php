@extends('layouts.app')

@section('content')

<!-- about area start -->
    <div class="about-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb-inner pe-xl-5 me-xl-5">
                        <img class="animate-img-1 top_image_bounce" src="assets/img/about/2.png" alt="img">
                        <img class="animate-img-2 left_image_bounce" src="assets/img/about/3.png" alt="img">
                        <img class="animate-img-3 top_image_bounce" src="assets/img/banner/5.svg" alt="img">
                        <img class="main-img" src="assets/img/about/1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h6 class="sub-title">ABOUT US</h6>
                        <h2 class="title">IT is a critical component of <span>modern</span> businesses</h2>
                        <p class="content mb-4 mb-xl-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry Loreaim Ipsum has been the industry's standard dummy</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-inner">
                                    <div class="thumb mb-3">
                                        <img src="assets/img/icon/2.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h5>Our Ambition</h5>
                                        <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi designer is our country.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-about-inner">
                                    <div class="thumb mb-3">
                                        <img src="assets/img/icon/3.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h5>Our Ambition</h5>
                                        <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi designer is our country.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->



    <!-- service area start -->
    <div class="service-area bg-relative pd-top-100">
        <img class="position-bottom-left top_image_bounce" src="assets/img/icon/4.png" alt="img">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">CREATIVE SERVICES</h6>
                <h2 class="title">Your Partner In <span>Digital</span> Success</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/service-icon/1.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">Mobile App Development</a></h5>
                            <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem is Ipsum is</p>
                            <a class="btn btn-border-base" href="service-details.html">Touch More <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/service-icon/2.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">Content Marketing</a></h5>
                            <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem is Ipsum is</p>
                            <a class="btn btn-border-base" href="service-details.html">Touch More <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/service-icon/3.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">E-commerce Solutions</a></h5>
                            <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem is Ipsum is</p>
                            <a class="btn btn-border-base" href="service-details.html">Touch More <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- faq area start -->
    <div class="faq-area faq-area-margin-top bg-cover pd-top-120 pd-bottom-110" style="background-image: url('assets/img/bg/3.png');">
        <div class="container">
            <div class="row pd-top-120">
                <div class="col-lg-5 order-lg-last">
                    <div class="about-thumb-inner pt-lg-3">
                        <img class="main-img" src="assets/img/about/4.png" alt="img">
                        <img class="animate-img-bottom-right top_image_bounce" src="assets/img/about/5.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-0 mt-4 mt-lg-0">
                        <h6 class="sub-title">SOME FAQ'S</h6>
                        <h2 class="title">Creating <span>digital</span> masterpieces</h2>
                        <p class="content">It is a long established fact that a reader will be distr acted bioiiy the end gail designa readable content of a page when looking.</p>
                    </div>
                    <div class="accordion accordion-inner style-2 accordion-icon-left mt-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What services do you offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, search for 'lorem ipsum' will uncover
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does it take for you to complete a project?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, search for 'lorem ipsum' will uncover
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How much does it cost to work with your agency?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, search for 'lorem ipsum' will uncover
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->

    <!-- team area start -->
    <div class="team-area bg-relative pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">MEET OUR EXPERTS</h6>
                <h2 class="title">Your Partner In <span>Digital</span> Success</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/team/1.png" alt="img">
                            <ul class="team-social-inner">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="details">
                            <h5><a href="project-details.html">Devon Lane</a></h5>
                            <p>Merketing Department</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/team/2.png" alt="img">
                            <ul class="team-social-inner">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="details">
                            <h5><a href="project-details.html">Darrell Steward</a></h5>
                            <p>It Department</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/team/3.png" alt="img">
                            <ul class="team-social-inner">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="details">
                            <h5><a href="project-details.html">Bessie Cooper</a></h5>
                            <p>Software Department</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end -->

    <!-- counter area start -->
    <div class="counter-area bg-relative bg-cover pd-top-110 pd-bottom-100" style="background-image: url('assets/img/bg/5.png');">
        <div class="container pd-bottom-90">
            <div class="row">
                <div class="col-lg-3">
                    <div class="single-counter-inner">
                        <div class="thumb">
                            <img src="assets/img/icon/5.svg" alt="img">
                        </div>
                        <h2 class="text-white mt-4 mb-2"><span class="counter">200</span>+</h2>
                        <p class="text-white">Team member</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-counter-inner">
                        <div class="thumb">
                            <img src="assets/img/icon/6.svg" alt="img">
                        </div>
                        <h2 class="text-white mt-4 mb-2"><span class="counter">10</span>k+</h2>
                        <p class="text-white">Team member</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-counter-inner">
                        <div class="thumb">
                            <img src="assets/img/icon/7.svg" alt="img">
                        </div>
                        <h2 class="text-white mt-4 mb-2"><span class="counter">200</span>+</h2>
                        <p class="text-white">Team member</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-counter-inner">
                        <div class="thumb">
                            <img src="assets/img/icon/8.svg" alt="img">
                        </div>
                        <h2 class="text-white mt-4 mb-2"><span class="counter">200</span>+</h2>
                        <p class="text-white">Team member</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->

    <!-- contact-inner-1 start -->
    <div class="contact-area">
        <div class="container">
            <div class="contact-inner-1">
                <img class="top_image_bounce animate-img-1" src="assets/img/banner/2.png" alt="img">
                <img class="top_image_bounce animate-img-2" src="assets/img/about/6.png" alt="img">
                <div class="row">
                    <div class="col-lg-8">
                        <img class="w-100" src="assets/img/bg/4.png" alt="img">
                    </div>
                    <div class="col-lg-4">
                        <div class="section-title mb-0">
                            <h6 class="sub-title">GET IN TOUCH</h6>
                            <h2 class="title">Bringing Your <span>Vision</span> To Life</h2>
                            <p class="content">For your car we will do everything  advice design in us repairs and maintenance. We are the some preferred.</p>
                            <form class="mt-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-inner style-border">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-inner style-border">
                                            <input type="text" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-inner style-border">
                                            <input type="text" placeholder="Your Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-inner style-border">
                                            <input type="text" placeholder="Your Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input-inner style-border">
                                            <textarea placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <a class="btn btn-black mt-0 w-100 border-radius-5" href="#">Submit now</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-inner-1 end -->

    <!-- work-process-area start -->
    <div class="work-process-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">OUR SIMPLE PROCESS</h6>
                <h2 class="title">World <span>Best Step</span> Our It Process</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="assets/img/icon/9.svg" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Work 01</p>
                            <h5 class="mb-3">Software Research</h5>
                            <p class="content">Research ipsum dolor sit consec tetur sed diam in the aliquam tempor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="assets/img/icon/10.svg" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Work 02</p>
                            <h5 class="mb-3">Create Programs</h5>
                            <p class="content">Create ipsum dolor sit consec tetur sed diam in the aliquam tempor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="assets/img/icon/11.svg" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Work 03</p>
                            <h5 class="mb-3">Develope Software</h5>
                            <p class="content">Develope ipsum dolor sit consec tetur sed diam in the aliquam tempor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="assets/img/icon/12.svg" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Work 04</p>
                            <h5 class="mb-3">Shop software</h5>
                            <p class="content">Shop ipsum dolor sit consec tetur Malesuada sed diam in the aliquam tempor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work-process-area end --> 

@endsection
