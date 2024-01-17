@extends('home.template.layout')

@section('title', 'JUL')

@section('content')
    <header class="freelancre valign">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="img">
                        <img src="{{ asset('/themes/img/hero.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 valign">
                    <div class="cont">
                        <h1 class="cd-headline clip">Hello, My name is hisham i love design and i hope to make awesome
                            designs and also i create
                            a <span class="cd-words-wrapper">
                                <b class="is-visible color-font fw-600">Mobile Apps</b>
                                <b class="color-font fw-600">Landing Pages</b>
                                <b class="color-font fw-600">Awesome Design</b>
                            </span></h1>
                    </div>
                </div>
            </div>

            <div class="states">
                <div class="container">
                    <ul class="flex">
                        <li class="flex">
                            <div class="numb valign">
                                <h3>12</h3>
                            </div>
                            <div class="text valign">
                                <p>Years <br> Of Experience</p>
                            </div>
                        </li>

                        <li class="flex">
                            <div class="numb valign">
                                <h3>165</h3>
                            </div>
                            <div class="text valign">
                                <p>Projects Completed <br> In 19 Countries </p>
                            </div>
                        </li>

                        <li class="mail-us">
                            <a href="{{ url('mailto:your@email.com?subject=Subject') }}">
                                <div class="flex">
                                    <div class="text valign">
                                        <div class="full-width">
                                            <p>Get In Touch</p>
                                            <h6>Vie_Support@Gmail.Com</h6>
                                        </div>
                                    </div>
                                    <div class="mail-icon">
                                        <div class="icon-box">
                                            <span class="icon color-font pe-7s-mail"></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line bottom left"></div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Services ==================== -->

    <section class="services box lficon section-padding position-re">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="sec-head  text-center">
                        <h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>
                        <h3 class="wow color-font">We are a new digital product development agency</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".5s">
                    <div class="item-box no-curve">
                        <div>
                            <span class="icon color-font pe-7s-paint-bucket"></span>
                        </div>
                        <div class="cont">
                            <h6>Graphic Design</h6>
                            <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".7s">
                    <div class="item-box no-curve">
                        <div>
                            <span class="icon color-font pe-7s-phone"></span>
                        </div>
                        <div class="cont">
                            <h6>Web & Mobile Design</h6>
                            <p>Tempore corrupti temporibus fuga earum asperiores fugit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".9s">
                    <div class="item-box no-curve">
                        <div>
                            <span class="icon color-font pe-7s-display1"></span>
                        </div>
                        <div class="cont">
                            <h6>Social media Marketing</h6>
                            <p>Tempore corrupti temporibus fuga earum asperiores fugit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".5s">
                    <div class="item-box no-curve">
                        <div>
                            <span class="icon color-font pe-7s-diskette"></span>
                        </div>
                        <div class="cont">
                            <h6>Document Legal Policy</h6>
                            <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line bottom right"></div>
    </section>

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start works ==================== -->

    <section class="portfolio-frl section-padding pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="sec-head  text-center">
                        <h6 class="wow fadeIn" data-wow-delay=".5s">Portfolio</h6>
                        <h3 class="wow color-font">Our Recent Web Design & <br> Some Past Projects.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- filter links -->
                <div class="filtering col-12">
                    <div class="filter wow fadeIn" data-wow-delay=".5s">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.brand'>Branding</span>
                        <span data-filter='.web'>Mobile App</span>
                        <span data-filter='.graphic'>Creative</span>
                    </div>
                </div>

                <!-- gallery -->
                <div class="gallery full-width">

                    <!-- gallery item -->
                    <div class="col-md-6 items graphic lg-mr wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <div class="cont">
                                <h6>Creative Mobile App</h6>
                                <p>Ui / Ux creative mobile app design</p>
                            </div>
                            <a href="{{ url('project-details2.html') }}" class="rota">
                                <img src="{{ asset('/themes/img/portfolio/freelancer/1.jpg') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                            <div class="tags">
                                <span>
                                    <a href="{{ url('#0') }}">App</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Fitnes</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Creative</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-md-6 items web wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <div class="cont">
                                <h6>Creative Mobile App</h6>
                                <p>Ui / Ux creative mobile app design</p>
                            </div>
                            <a href="{{ url('project-details2.html') }}" class="rota">
                                <img src="{{ asset('/themes/img/portfolio/freelancer/2.jpg') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                            <div class="tags">
                                <span>
                                    <a href="{{ url('#0') }}">App</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Fitnes</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Creative</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-md-6 items web wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <div class="cont">
                                <h6>Creative Mobile App</h6>
                                <p>Ui / Ux creative mobile app design</p>
                            </div>
                            <a href="{{ url('project-details2.html') }}" class="rota">
                                <img src="{{ asset('/themes/img/portfolio/freelancer/3.jpg') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                            <div class="tags">
                                <span>
                                    <a href="{{ url('#0') }}">App</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Fitnes</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Creative</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-md-6 items web graphic wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <div class="cont">
                                <h6>Creative Mobile App</h6>
                                <p>Ui / Ux creative mobile app design</p>
                            </div>
                            <a href="{{ url('project-details2.html') }}" class="rota">
                                <img src="{{ asset('/themes/img/portfolio/freelancer/4.jpg') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                            <div class="tags">
                                <span>
                                    <a href="{{ url('#0') }}">App</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Fitnes</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Creative</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-md-6 items brand wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <div class="cont">
                                <h6>Creative Mobile App</h6>
                                <p>Ui / Ux creative mobile app design</p>
                            </div>
                            <a href="{{ url('project-details2.html') }}" class="rota">
                                <img src="{{ asset('/themes/img/portfolio/freelancer/5.jpg') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                            <div class="tags">
                                <span>
                                    <a href="{{ url('#0') }}">App</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Fitnes</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Creative</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-md-6 items brand wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <div class="cont">
                                <h6>Creative Mobile App</h6>
                                <p>Ui / Ux creative mobile app design</p>
                            </div>
                            <a href="{{ url('project-details2.html') }}" class="rota">
                                <img src="{{ asset('/themes/img/portfolio/freelancer/6.jpg') }}" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                            <div class="tags">
                                <span>
                                    <a href="{{ url('#0') }}">App</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Fitnes</a>
                                </span>
                                <span>
                                    <a href="{{ url('#0') }}">Creative</a>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End works ==================== -->



    <!-- ==================== Start about ==================== -->

    <section class="about-cr">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 img md-mb50">
                    <img src="{{ asset('/themes/img/intro/4.jpg') }}" alt="">
                </div>
                <div class="col-lg-5 valign">
                    <div class="cont full-width">
                        <h3 class="color-font">UI / UX Designer</h3>
                        <h5 class="co-tit mb-15">We help to create
                            visual strategies.</h5>
                        <p>We are Vie. We create award-winning websites, remarkable brands and cutting-edge
                            apps.Nullam
                            imperdie.</p>
                        <div class="skills-box mt-40">
                            <div class="skill-item">
                                <h5 class="fz-14 mb-15">UI / UX Design</h5>
                                <div class="skill-progress">
                                    <div class="progres" data-value="90%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h5 class="fz-14 mb-15">Apps Development</h5>
                                <div class="skill-progress">
                                    <div class="progres" data-value="80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->



    <!-- ==================== Start testimonials ==================== -->

    <section class="testimonials section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="sec-head  text-center">
                        <h6 class="wow fadeIn" data-wow-delay=".5s">Testimonials</h6>
                        <h3 class="wow color-font">We love our clients from all over the world.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid position-re">
            <div class="row wow fadeInUp" data-wow-delay=".5s">
                <div class="col-lg-12">
                    <div class="slic-item">
                        <div class="item">
                            <div class="info inf-lrg valign">
                                <div class="cont">
                                    <div class="author">
                                        <div class="img">
                                            <img src="{{ asset('/themes/img/clients/1.jpg') }}" alt="">
                                        </div>
                                        <h6 class="author-name color-font">Alex Regelman</h6>
                                        <span class="author-details">Co-founder, Colabrio</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fz-20 fw-200">I would highly recommend Vie Digital. I worked with the team on an
                                animation for our
                                ‘Click & Collect’ service.</p>
                        </div>
                        <div class="item">
                            <div class="info inf-lrg valign">
                                <div class="cont">
                                    <div class="author">
                                        <div class="img">
                                            <img src="{{ asset('/themes/img/clients/1.jpg') }}" alt="">
                                        </div>
                                        <h6 class="author-name color-font">Alex Regelman</h6>
                                        <span class="author-details">Co-founder, Colabrio</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fz-20 fw-200">I would highly recommend Vie Digital. I worked with the team on an
                                animation for our
                                ‘Click & Collect’ service.</p>
                        </div>
                        <div class="item">
                            <div class="info inf-lrg valign">
                                <div class="cont">
                                    <div class="author">
                                        <div class="img">
                                            <img src="{{ asset('/themes/img/clients/1.jpg') }}" alt="">
                                        </div>
                                        <h6 class="author-name color-font">Alex Regelman</h6>
                                        <span class="author-details">Co-founder, Colabrio</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fz-20 fw-200">I would highly recommend Vie Digital. I worked with the team on an
                                animation for our
                                ‘Click & Collect’ service.</p>
                        </div>
                        <div class="item">
                            <div class="info inf-lrg valign">
                                <div class="cont">
                                    <div class="author">
                                        <div class="img">
                                            <img src="{{ asset('/themes/img/clients/1.jpg') }}" alt="">
                                        </div>
                                        <h6 class="author-name color-font">Alex Regelman</h6>
                                        <span class="author-details">Co-founder, Colabrio</span>
                                    </div>
                                </div>
                            </div>
                            <p class="fz-20 fw-200">I would highly recommend Vie Digital. I worked with the team on an
                                animation for our
                                ‘Click & Collect’ service.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="arrows">
                <div class="container">
                    <div class="next cursor-pointer">
                        <span class="pe-7s-angle-right"></span>
                    </div>
                    <div class="prev cursor-pointer">
                        <span class="pe-7s-angle-left"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End testimonials ==================== -->



    <!-- ==================== Start Blog ==================== -->

    <section class="blog-list section-padding sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="head md-mb50">
                        <h6 class="back-color">Get The Latest News</h6>
                        <h3>What Our Trending News.</h3>
                        <p>We provide company and finance service for
                            startups and company business.</p>
                        <a href="{{ url('#0') }}">
                            <span>More Blog Posts</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img valign">
                            <img src="{{ asset('/themes/img/blog/1.jpg') }}" alt="">
                        </div>
                        <div class="cont valign">
                            <div>
                                <div class="info">
                                    <a href="{{ url('#0') }}" class="date">
                                        <span><i>06</i> August</span>
                                    </a>
                                    <span>/</span>
                                    <a href="{{ url('#0') }}" class="tag">
                                        <span>WordPress</span>
                                    </a>
                                </div>
                                <h5>
                                    <a href="{{ url('#0') }}">How to use solid color combine with simple
                                        furnitures.</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".5s">
                        <div class="img valign">
                            <img src="{{ asset('/themes/img/blog/2.jpg') }}" alt="">
                        </div>
                        <div class="cont valign">
                            <div>
                                <div class="info">
                                    <a href="{{ url('#0') }}" class="date">
                                        <span><i>06</i> August</span>
                                    </a>
                                    <span>/</span>
                                    <a href="{{ url('#0') }}" class="tag">
                                        <span>WordPress</span>
                                    </a>
                                </div>
                                <h5>
                                    <a href="{{ url('#0') }}">How to use solid color combine with simple
                                        furnitures.</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img valign">
                            <img src="{{ asset('/themes/img/blog/3.jpg') }}" alt="">
                        </div>
                        <div class="cont valign">
                            <div>
                                <div class="info">
                                    <a href="{{ url('#0') }}" class="date">
                                        <span><i>06</i> August</span>
                                    </a>
                                    <span>/</span>
                                    <a href="{{ url('#0') }}" class="tag">
                                        <span>WordPress</span>
                                    </a>
                                </div>
                                <h5>
                                    <a href="{{ url('#0') }}">How to use solid color combine with simple
                                        furnitures.</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->



    <!-- ==================== Start Contact ==================== -->

    <section class="contact-sec style2 section-padding position-re">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="sec-head  text-center">
                        <h6 class="wow fadeIn" data-wow-delay=".5s">Contact Us</h6>
                        <h3 class="wow color-font">Let’s Get in Touch And Make Magic Together.</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="form wow fadeInUp" data-wow-delay=".5s">
                        <form id="contact-form" method="post" action="contact.php">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center">
                                            <a href="{{ url('#0') }}" class="butn bord curve mt-30">
                                                <span>Send Massege</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
