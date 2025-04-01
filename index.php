

<?php include 'includes/header.php';?>

    <!-- hero section start -->

    <section class="fullscreen-banner p-0 banner overflow-hidden " style="height: fit-content !important; padding-bottom:20px !important" data-bg-img="images/pattern/01.png">
        <div class="align-center" id="alig-cen" style="margin-top: 0px; padding-bottom: 0px !important;">
            <div class="container" id="cti">
                <div class="row align-items-justify toppad" id="koppad">
                    <div class="col-lg-7 col-md-12 mt-5 mt-lg-0 order-2 order-sm-2 order-md-2 order-lg-2" style="padding-bottom: 70px;">
                        <p class="mb-4 mt-5 mt-sm-5 mt-md-0 animated bounceInLeft delay-2 duration-4 contentpad animatetxt" id="main-text" style="text-transform: none !important; font-size: 45px !important; font-weight: 700; line-height:55px !important; color: #1d2651;">
                            Accelerate Your Business Growth with the Power of <br><span class="text" style="color: #1292dc;"></span>
                        </p>

                        <h1 class="mb-4 wow fadeInDown delay-3 duration-1 contentpad plaintxt" style="text-transform: none !important; font-size: 35px !important;">
                            Accelerate Your Business Growth with the Power of <br><span class="txt">
                                <span>L</span><span>e</span><span>M</span><span>e</span><span>n</span><span>iz</span>
                            <span>W</span><span>h</span><span>a</span><span>t</span><span>s</span><span>App</span>
                            <span></span> <span>A</span><span>P</span><span>I</span>
                            </span>
                        </h1>
                        <p class="lead animated fadeInUp delay-3 duration-4" style="font-size: 15px; text-align: justify; width: 90% !important;">
                            Leverage the power of WhatsApp with the Official API and take your business communication to new heights. Say goodbye to number blocks and try it for free today!
                        </p>

                        <div>
                            <div class="lead animated fadeInUp delay-3 duration-4 d-flex flex-wrap align-items-center justify-content-start" style="color: rgb(78, 78, 78); font-size: 13px; gap:10px;">
                                <div>
                                    <i class="fa fa-check-circle text-primary"></i> <span>&nbsp; No code whatsapp Chatbot</span>
                                </div>
                                <div>
                                    <i class="fa fa-check-circle text-primary"></i> <span>&nbsp; No Set-up Fee</span>
                                </div>
                                <div>
                                    <i class="fa fa-check-circle text-primary"></i> <span>&nbsp; WhatsApp API ready in 10 Minutes</span>
                                </div>
                            </div>
                        </div><br>
                        <div class="d-flex align-items-center animated fadeInUp delay-4 duration-5">
                            <a class="btn btn-primary" data-toggle="modal" data-target="#book"><span>Book a Demo</span></a>
                            <a class="btn btn-primary popup-youtube ms-4 d-flex align-items-center iframe-link" data-mfp-src="https://youtu.be/w96mzacpLAA?si=SvCtaxgIwUD4O6LV" href="#"><span>Play Now</span></a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 position-relative order-lg-3 mt-7" id="mtl" style="justify-content: center;display: flex; margin-left:0px;">
                        <div class="mouse-parallax">
                            <div class="bnr-img2 animaed fadeInRight delay-4 duration-4">
                                <img class="img-fluid " src="images/banner.png" alt="AskEVA">
                                <!-- rotateme -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="book" role="dialog">
            <div class="modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Apply for Whatsapp API today!</h2>
                        <button class="btn" data-dismiss="modal" style="background-color: none !important; box-shadow:none; float: right; color: #12b4dc;">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="book-form" class="g-4 needs-validation" role="form" name="book_form" ng-submit="bookForm(user)">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="name" name="name" ng-model="user.name" placeholder="First Name *" autocomplete="off" style="border: 1px solid #ccc; box-shadow: none;">
                                </div>
                                <div class="col-md-12" style="padding-top: 25px;">
                                    <input type="text" class="form-control" name="mobile" ng-model="user.mobile" id="c_num" placeholder="Mobile No *" ng-pattern="ph_numbr" autocomplete="off" style="box-shadow: none; border: 1px #ccc solid;">
                                    <span class="red-text" ng-show="book_form.mobile.$error.pattern">Please Enter a 10 Digit Number</span>
                                </div>
                                <div class="col-md-12" style="padding-top: 25px;">
                                    <input type="text" class="form-control" id="location" name="location" ng-model="user.location" placeholder="Location *" autocomplete="off" style="border: 1px solid #ccc; box-shadow: none;">
                                </div>
                                <div class="col-md-12" style="padding-top: 25px;">
                                    <input type="text" class="form-control" id="company" name="company" ng-model="user.company" placeholder="Company Name *" autocomplete="off" style="border: 1px solid #ccc; box-shadow: none;">
                                </div>
                                <div class="col-md-12" style="padding-top: 25px;">
                                    <button type="submit" class="btn btn-theme btn-radius" ng-disabled="!user.name || !user.mobile || !user.location || !user.company || book_form.$invalid">
                                        <span>Apply Now</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--hero section end-->


    <!-- Body content from your code -->
    <div class="page-content">
        <section class="sectiontop wow fadeInUp delay-1">
            <div class="container" id="cti">
                <div class="text-center">
                    <h2>Seamless Integrations</h2>
                    <h3 style="font-size: 24px;">Easily connect your favorite e-stores, CRMs, and Other tools</h3>
                </div><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="images/automation2.png" alt="" style="width: 600px; height: 400px;">
                        </div>
                        <div class="col">
                            <div class="row mb-5" style="padding-top: 30px;">
                                <div class="text-center scaled">
                                    <div class="owl-carousel no-pb" data-items="6" data-md-items="4" data-sm-items="2" data-dots="false" data-autoplay="true">
                                        <div class="item">
                                            <img class="img-fluid" src="images/1.jpg" alt="Askeva-client" loading="lazy" style="border: 1px solid #ccc;">
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid" src="images/2.jpg" alt="Askeva-client" loading="lazy" style="border: 1px solid #ccc;">
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid" src="images/3.jpg" alt="Askeva-client" loading="lazy" style="border: 1px solid #ccc;">
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid" src="images/4.jpg" alt="Askeva-client" loading="lazy" style="border: 1px solid #ccc;">
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid" src="images/5.jpg" alt="Askeva-client" loading="lazy" style="border: 1px solid #ccc;">
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid" src="images/6.jpg" alt="Askeva-client" loading="lazy" style="border: 1px solid #ccc;">
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid" src="images/7.jpg" alt="Askeva-client" loading="lazy" style="border: 1px solid #ccc;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div><br><br><br><br>
    <!-- body content end -->


    <!-- start -->
    <div class="container mt-sm-7 mt-md-10" id="int-feature">
        <div class="row justify-content-sm-center">
            <div class="col-12 col-sm-7 col-md-6 col-lg-4 wow fadeInLeft">
                <div class="featured-item text-center style-2">
                    <div class="featured-icon">
                        <img class="img-fluid" src="images/customizablebot.png" alt="">
                    </div>
                    <div class="featured-title">
                        <h4>Custom Bot</h4>
                    </div>
                    <div class="featured-desc">
                        <p>Connect all messaging platforms to your CRM and processes turn your chats and to into sales</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-7 col-md-6 col-lg-4 mt-0 mt-lg-0 wow fadeInUp">
                <div class="featured-item text-center style-2">
                    <div class="featured-icon">
                        <img class="img-fluid" src="images/timeefficiency.png" alt="">
                    </div>
                    <div class="featured-title">
                        <h4>Time Efficiency</h4>
                    </div>
                    <div class="featured-desc">
                        <p>LeMeniz responds faster than humans to automate processes through Artificial Intelligence(AI) to minimize business efforts.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-7 col-md-6 col-lg-4 mt-0 mt-lg-0 wow fadeInRight">
                <div class="featured-item text-center style-2">
                    <div class="featured-icon">
                        <img class="img-fluid" src="images/adaptability.png" alt="">
                    </div>
                    <div class="featured-title">
                        <h4>Adaptable</h4>
                    </div>
                    <div class="featured-desc">
                        <p>LeMeniz WhatsApp chatbots are user-friendly and easily integrated to with other platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>

    <!-- end -->

    <!-- Invitation -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h2 style="color: #4e7ef8;">WHATSAPP</h2>
                        <h1>AI Chatbot Service Provider</h1>
                        <p style="color: #3f5df6; font-size: 20px;">LeMeniz the Whatsapp Api Based Chatbot Service Provider. Reach customers with personalized marketing campaigns through WhatsApp and boost sales. Segment your customers based on attributes and past behaviour for targeted messaging.
                            Create Engaging & Interactive Messages with Rich Media! Track the success of your campaigns with metrics for sent, delivered, read, and replied.</p><br>
                        <a class="btn btn-outline-primary" href="#contact">About LeMeniz</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div><br><br>
    <!-- end of basic-3 -->
    <!-- end of invitation -->

    <!-- feature start -->
    <section style="background-color: #F7F8F7;">
        <div class="container  " id="cti">


            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h6 style="color: #129fdc; font-size: 30px;">Features</h6>
                        <h2>Turn Your WhatsApp Conversation into <span style="color:#129fdc; font-size: 50px;">Leads</span></h2>
                    </div>
                </div>

            </div>

            <div class="row" style="padding-top: 30px;">
                <div class="col-lg-3 col-md-6 wow fadeInUp delay-1">
                    <div class="featured-item style-4">
                        <div class="featured-icon" style="font-size: 50px; color: #1288dc;">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="featured-title">
                            <h3 style="font-size: 20px">Multi-access and Workflow Management</h3>
                        </div>
                        <div class="featured-desc">
                            <p>Empower your customer support team with seamless collaboration through unlimited into simultaneous logins
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-md-0 wow fadeInUp delay-1">
                    <div class="featured-item style-4 active">
                        <div class="featured-icon" style="font-size: 50px; color: #1288dc;">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="featured-title">
                            <h3 style="font-size: 20px">Marketing Automations</h3>
                        </div>
                        <div class="featured-desc">
                            <p>Segment your customers and send targeted, automated campaigns for maximum impact.
                            </p>
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 wow fadeInUp delay-3">
                    <div class="featured-item style-4">
                        <div class="featured-icon" style="font-size: 50px; color: #1288dc;">
                            <i class="fas fa-plug"></i>
                        </div>
                        <div class="featured-title">
                            <h3 style="font-size: 20px">Integrations</h3>
                        </div>
                        <div class="featured-desc">
                            <p>Connect your eCommerce and CRM to WhatsApp API for seamless communication with customers
                            </p>
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 wow fadeInUp delay-4">
                    <div class="featured-item style-4">
                        <div class="featured-icon" style="font-size: 50px; color: #1288dc;">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="featured-title">
                            <h3 style="font-size: 20px">Chatbots</h3>
                        </div>
                        <div class="featured-desc">
                            <p>Streamline customer support with automated FAQs and smart routing rules to assign conversations team members.</p>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature end -->
    <!-- then start -->
    <section class="bg-contain bg-pos-r p-1 wow fadeInUp delay-1" style="background-image: url('images/03.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="container  " id="cti" style="padding-top: 140px;">

            <div class="hidecasestudy mouse-parallax">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="caseright" style="margin-left: 100px;">
                            <a class="btn btn-outline-primary buttonicon" href="health.html">
                                <i class="iconcase fa fa-stethoscope" aria-hidden="true" style="font-size: 18px;"></i> &nbsp;&nbsp;
                                <span class="casediv ">Healthcare</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" style="padding: 10px; padding-bottom: 100px;">
                        <center>
                            <a class="btn btn-outline-primary buttonicon" href="education.html">
                                <i class="iconcase fa fa-book" aria-hidden="true" style="font-size: 18px;"></i> &nbsp;&nbsp;
                                <span class="casediv">Education</span>
                            </a>
                        </center>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="caseleft">
                            <a class="btn btn-outline-primary buttonicon" href="hr.html">
                                <i class="iconcase fa fa-users" aria-hidden="true" style="font-size: 18px;"></i> &nbsp;&nbsp;
                                <span class="casediv">HR</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">


                        <div class="caseright" style="padding-top: 50px;">
                            <a class="btn btn-outline-primary buttonicon" href="realestate.html">
                                <i class="iconcase fa fa-building" aria-hidden="true" style="font-size: 18px;"></i> &nbsp;&nbsp;
                                <span class="casediv">Realestate</span>
                            </a>
                        </div><br>

                        <div class="caseleft" style="padding-top: 100px;">
                            <a class="btn btn-outline-primary buttonicon" href="travel.html">
                                <i class="iconcase fa fa-plane" aria-hidden="true" style="font-size: 18px;"></i> &nbsp;&nbsp;
                                <span class="casediv">Travel</span>
                            </a>
                        </div><br>

                        <div class="caseright" style="padding-top: 100px;">
                            <a class="btn btn-outline-primary buttonicon" href="retail.html">
                                <i class="iconcase fa fa-share" aria-hidden="true" style="font-size: 18px;"></i> &nbsp;&nbsp;
                                <span class="casediv">Retail</span>
                            </a>
                        </div>



                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="images/business.png" alt="whatsapp-chatbot" style="margin: 2px;">
                        <!-- </center> -->
                    </div>
                    <div class="col-lg-3 col-md-6 maincase">
                        <div class="caseleft" style="padding-top: 50px;">
                            <a class="btn btn-outline-primary buttonicon" href="automobile.html">
                                <i class="iconcase fa fa-car" aria-hidden="true" style="font-size: 18px;"></i> &nbsp;&nbsp;
                                <span class="casediv">Automobile</span>
                            </a>
                        </div><br>

                        <div class="caseright" style="padding-top: 100px;">
                            <a class="btn btn-outline-primary buttonicon" href="insurance.html">
                                <i class="iconcase fa fa-heart" aria-hidden="true" style="font-size: 18px;"></i> &nbsp;&nbsp;
                                <span class="casediv">Insurance</span>
                            </a>
                        </div><br>

                        <div class="caseleft" style="padding-top: 100px;">
                            <a class="btn btn-outline-primary buttonicon" href="ecommerce.html">
                                <i class="iconcase fa fa-shopping-cart" aria-hidden="true" style="font-size: 18px;"></i> &nbsp;&nbsp;
                                <span class="casediv">E-Commerce</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- then end -->
    <!-- Testimonials -->
    <div class="cards-2 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="h2-heading" style="color: #1292dc;">Official Whatsapp API</h5>
                    <h1>LeMeniz is powered through the WhatsApp Business API</h1>
                    <p>Official Whatsapp Business API is a premium solution for business, offering security and reliability, as well as advanced features like quick replies, chatbot, multiple logins, mass broadcasting, and personalized messages, all to help
                        business sell better online, at a cost per conversation fee.</p>
                </div>
                <!-- end of col -->
            </div><br>
            <!-- end of row -->

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 400px;">
                            <img class="quotes" src="images/quotes.svg" alt="alternative" style="width: 40px; height: 40px;">
                            <div class="card-body">
                                <img src="images/makeconversation.png" alt="" style="width: 200px; height: 150px;">
                                <h2>Make Conversations</h2>
                                <p class="testimonial-text">WhatsApp chatbot helps your business to drive marketing,sales,and support outcomes across the customer purchase journey.</p>
                            </div>
                            <div class="gradient-floor red-to-blue"></div>
                        </div>
                        <!-- end of card -->
                    </div>
                    <div class="col">
                        <!-- Card -->
                        <div class="card" style="width: 400px;">
                            <img class="quotes" src="images/quotes.svg" alt="alternative" style="width: 40px; height: 40px;">
                            <div class="card-body">
                                <img src="images/friendly.png" alt="" style="width: 200px; height: 150px;">
                                <h2>Friendly Experience</h2>
                                <p class="testimonial-text">WhatsApp chatbot makes the flow possible to deliver CTAs,product lists,media,and more to make a friendly and memorable experience.</p>
                            </div>
                            <div class="gradient-floor blue-to-purple"></div>
                        </div>
                        <!-- end of card -->
                    </div>
                    <div class="col">
                        <!-- Card -->
                        <div class="card" style="width: 400px;">
                            <img class="quotes" src="images/quotes.svg" alt="alternative" style="width: 40px; height: 40px;">
                            <div class="card-body">
                                <img src="images/reachcustomer.png" alt="" style="width: 200px; height: 150px;">
                                <h2>Reach Customers</h2>
                                <p class="testimonial-text">Connect your business by meeting them on WhatsApp messaging platform support to make it easy.</p>
                            </div>
                            <div class="gradient-floor purple-to-green"></div>
                        </div>
                        <!-- end of card -->
                    </div>
                </div>
            </div>





        </div>
        <!-- end of col -->
    </div>
    <!-- end of row -->
    </div>
    <!-- end of container -->
    </div>
    <!-- end of cards-2 -->
    <!-- end of testimonials -->
    <!-- count start -->
    <!-- <section style="padding:20px">
        <div class="container  " id="ctix" style="background-color: #c2e4f9!important; border-radius:50px; padding: 50px;">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <center>
                        <div style="padding-bottom: 0px !important;padding-top: 0px !important;">
                            <div class="featured-icon">
                                <i class="fa fa-check" style="font-size: 60px;color: #0a6dc4; margin-right: 180px;"></i>
                            </div>
                        </div>
                    </center>
                    <div class="counter style-2" style="padding-top: 5px;">

                        <span class="count-number" data-to="500" data-speed="1000" data-comma="true" style="color: #333333; font-size: 50px;"> 500 </span>
                        <h3 style="color: #000; font-size: 20px;">Project Done</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-sm-0">
                    <center>
                        <div style="padding-bottom: 0px !important;padding-top: 0px !important;">
                            <div class="featured-icon">
                                <i class="fa fa-handshake" style="font-size: 60px;color: #0a6dc4; margin-right: 180px;"></i>
                            </div>
                        </div>
                    </center>
                    <div class="counter style-2" style="padding-top: 10px;">
                        <span style="color: #333333; font-size: 50px;">One</span>
                        <h3 style="color: #000; font-size: 20px;">Support Team</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-md-0">
                    <center>
                        <div style="padding-bottom: 0px !important;padding-top: 0px !important;">
                            <div class="featured-icon">
                                <i class="fa fa-users" style="font-size: 60px;color: #0a6dc4; margin-right: 180px;"></i>
                            </div>
                        </div>
                    </center>
                    <div class="counter style-2" style="padding-top: 10px;">
                        <span style="color: #333333; font-size: 50px;">
                            1% </span>
                        <h3 style="color: #000; font-size: 20px;">Client Attrition</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mt-5 mt-md-0">
                    <center>
                        <div style="padding-bottom: 0px !important;padding-top: 0px !important;">
                            <div class="featured-icon">
                                <i class="fa fa-smile" style="font-size: 60px;color: #0a6dc4; margin-right: 180px;"></i>
                            </div>
                        </div>
                    </center>
                    <div class="counter style-2" style="padding-top: 10px;">
                        <span class="count-number" data-to="500" data-speed="1000" style="color: #333333; font-size: 50px;">500
                            +</span>
                        <h3 style="color: #000; font-size: 20px;">Happy Customers</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- count end -->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional: Add jQuery and Owl Carousel JS -->
    <script src="path-to-jquery/jquery.min.js"></script>
    <script src="path-to-owl-carousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 6,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                loop: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    768: {
                        items: 4
                    },
                    1024: {
                        items: 6
                    }
                }
            });
        });
    </script>


<?php include 'includes/footer.php'?>