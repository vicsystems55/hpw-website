@extends('layouts')

@section('content')


<section class="page-header page-header__dark"
style="background-image: url(assets/images/background/page-header-service-1.jpg);">
<div class="container">
    <h2>Services</h2>
    <ul class="list-unstyled thm-breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><span>Services</span></li>
    </ul><!-- /.list-unstyled -->
</div><!-- /.container -->
</section><!-- /.page-header -->

<section class="living-option-three">
    <div class="container">
        <div class="block-title text-center">
            <p>02. Services</p>
            <h3>Everyone Deserves Our <br> Best Services</h3>
        </div><!-- /.block-title text-center -->
        <div class="row">
            <div class="col-lg-4">
                <div class="living-option-three__main">
                    <p>Our goal each day is to ensure that our <br> residents’ needs are not only met but <br>
                        exceeded. </p>
                    <div class="nav navtabs living-option-two__tab-title">
                        <a href="#physical" data-toggle="tab" class="nav-link">ADD</a>
                        <!-- /.nav-link -->
                        <a href="#health" data-toggle="tab" class="nav-link active">Criminal behavior</a>
                        <!-- /.nav-link -->
                        <a href="#private" data-toggle="tab" class="nav-link">Learning disabilities</a>
                        <!-- /.nav-link -->
                        <a href="#residential" data-toggle="tab" class="nav-link">Drug and alcohol abuse</a>
                        <!-- /.nav-link -->
                        <a href="#dementia" data-toggle="tab" class="nav-link">Self-harming behaviors</a>
                        <!-- /.nav-link -->
                    </div><!-- /.nav navtabs living-option-two__tab-title -->

                </div><!-- /.living-option-three__main -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane fade  animated fadeInRight" id="physical">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="living-option-three__image">
                                    <img class="img-fluid" src="site/assets/images/resources/living-option-3-2.jpg"
                                        alt="">
                                </div><!-- /.living-option-three__image -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="living-option-three__content">
                                    <h3>Attention deficit disorder</h3>
                                    <p>Hope Pathway offers specialized care and empathy for individuals facing attention deficit disorder (ADHD), promoting hope and improved well-being.
                                    </p>
                                    <ul class="blog-details__list list-unstyled d-none">
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            In-House Theater
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Medication Management
                                        </li>
                                    </ul><!-- /.blog-details__list -->
                                    <a href="service-physical.html" class="thm-btn living-option-two__btn">Read More</a>
                                    <!-- /.thm-btn living-option-two__btn -->
                                </div><!-- /.living-option-three__content -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->

                    </div><!-- /.tab-pane fade show animated fadeInRight -->

                    <div class="tab-pane fade show active animated fadeInRight" id="health">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="living-option-three__image">
                                    <img class="img-fluid" src="site/assets/images/resources/living-option-3-1.jpg"
                                        alt="">
                                </div><!-- /.living-option-three__image -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="living-option-three__content">
                                    <h3>Criminal behavior</h3>
                                    <p>In our services, we provide individuals dealing with criminal behavior a path to rehabilitation and positive change through empathy and support.
                                    </p>
                                    <ul class="blog-details__list list-unstyled d-none">
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            In-House Theater
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Medication Management
                                        </li>
                                    </ul><!-- /.blog-details__list -->
                                    <a href="service-health.html" class="thm-btn living-option-two__btn">Read More</a>
                                    <!-- /.thm-btn living-option-two__btn -->
                                </div><!-- /.living-option-three__content -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->

                    </div><!-- /.tab-pane fade show animated fadeInRight -->
                    <div class="tab-pane fade  animated fadeInRight" id="private">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="living-option-three__image">
                                    <img class="img-fluid" src="site/assets/images/resources/living-option-3-3.jpg"
                                        alt="">
                                </div><!-- /.living-option-three__image -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="living-option-three__content">
                                    <h3>Learning disabilities</h3>
                                    <p>We empower individuals with learning disabilities, offering support and tailored strategies for a brighter educational journey.
                                    </p>
                                    <ul class="blog-details__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            In-House Theater
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Medication Management
                                        </li>
                                    </ul><!-- /.blog-details__list -->
                                    <a href="/" class="thm-btn living-option-two__btn">Read More</a>
                                    <!-- /.thm-btn living-option-two__btn -->
                                </div><!-- /.living-option-three__content -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->

                    </div><!-- /.tab-pane fade show animated fadeInRight -->
                    <div class="tab-pane fade  animated fadeInRight" id="residential">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="living-option-three__image">
                                    <img class="img-fluid" src="site/assets/images/resources/living-option-3-4.jpg"
                                        alt="">
                                </div><!-- /.living-option-three__image -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="living-option-three__content">
                                    <h3>Drug and alcohol abuse</h3>
                                    <p>We assist individuals battling drug and alcohol abuse, offering support and a path to recovery and sobriety.
                                    </p>
                                    <ul class="blog-details__list list-unstyled d-none">
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            In-House Theater
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Medication Management
                                        </li>
                                    </ul><!-- /.blog-details__list -->
                                    <a href="/" class="thm-btn living-option-two__btn">Read More</a>
                                    <!-- /.thm-btn living-option-two__btn -->
                                </div><!-- /.living-option-three__content -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->

                    </div><!-- /.tab-pane fade show animated fadeInRight -->
                    <div class="tab-pane fade  animated fadeInRight" id="dementia">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="living-option-three__image">
                                    <img class="img-fluid" src="site/assets/images/resources/living-option-3-5.jpg"
                                        alt="">
                                </div><!-- /.living-option-three__image -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="living-option-three__content">
                                    <h3>Self-harming behaviors</h3>
                                    <p>In our services, we help individuals dealing with self-harming behaviors, providing support, understanding, and a journey towards healing and self-care.
                                    </p>
                                    <ul class="blog-details__list list-unstyled d-none">
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            In-House Theater
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Medication Management
                                        </li>
                                    </ul><!-- /.blog-details__list -->
                                    <a href="/" class="thm-btn living-option-two__btn">Read More</a>
                                    <!-- /.thm-btn living-option-two__btn -->
                                </div><!-- /.living-option-three__content -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->

                    </div><!-- /.tab-pane fade show animated fadeInRight -->
                </div><!-- /.tab-content -->

            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.living-option-three -->ne -->

<section class="cta-two">
<img src="assets/images/shapes/cta-1-1-shape-1.png" class="cta-two__dot-1" alt="">
<img src="assets/images/shapes/cta-1-1-shape-2.png" class="cta-two__dot-2" alt="">
<div class="container">
    <div class="row no-gutters">
        <div class="col-lg-6 d-flex justify-content-center align-items-center wow fadeInLeft"
            data-wow-duration="1500ms">
            <div class="cta-two__image">
                <img src="assets/images/resources/cta-1-1.jpg" alt="">
                <div class="cta-two__image-inner">
                    <div class="cta-two__image-content">
                        <h3><span class="counter">78</span><!-- /.coutner -->%</h3>
                        <p>Success Rate</p>
                    </div><!-- /.cta-two__image-content -->
                </div><!-- /.cta-two__image-inner -->
            </div><!-- /.cta-two__image -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="cta-two__content">
                <h3>Book an <br> Appointment Today!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt labore dolore magna aliqua enim ad minim veniam. </p>
                <a href="#" class="thm-btn cta-two__btn">Get Appointment</a><!-- /.thm-btn cta-two__btn -->
            </div><!-- /.cta-two__content -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row no-gutters -->
</div><!-- /.container -->
</section><!-- /.cta-two -->

<section class="career-one">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="career-one__block">
                <div class="block-title">
                    <p class="has-line">02. FAQ</p>
                    <h3>Freequently Asked <br> Questions</h3>
                </div><!-- /.block-title -->
                <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded.
                    To make that happen we are committed to providing an environment in which residents can
                    enjoy a wide range of amenities that</p>
                <p>Allow them to feel independent safe and secure all while having fun! Our amenities
                    include.</p>
            </div><!-- /.career-one__block -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="career-one__content">
                <div class="accrodion-grp" data-grp-name="career-one__accrodion">
                    <div class="accrodion ">
                        <div class="accrodion-title">
                            <h4>Is there support for me at home?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Our goal each day is to ensure that our residents’ needs are not only
                                    met.</p>
                                <ul class="list-unstyled career-one__content-list">
                                    <li>Our goal each day is to ensure</li>
                                    <li>Our goal each day is to ensure</li>
                                </ul><!-- /.list-unstyled career-one__content-list -->
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>I am worried about a loved one</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Our goal each day is to ensure that our residents’ needs are not only
                                    met.</p>
                                <ul class="list-unstyled career-one__content-list">
                                    <li>Our goal each day is to ensure</li>
                                    <li>Our goal each day is to ensure</li>
                                </ul><!-- /.list-unstyled career-one__content-list -->
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>How can I manage my breathlessness?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Our goal each day is to ensure that our residents’ needs are not only
                                    met.</p>
                                <ul class="list-unstyled career-one__content-list">
                                    <li>Our goal each day is to ensure</li>
                                    <li>Our goal each day is to ensure</li>
                                </ul><!-- /.list-unstyled career-one__content-list -->
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>I need help managing my pain</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Our goal each day is to ensure that our residents’ needs are not only
                                    met.</p>
                                <ul class="list-unstyled career-one__content-list">
                                    <li>Our goal each day is to ensure</li>
                                    <li>Our goal each day is to ensure</li>
                                </ul><!-- /.list-unstyled career-one__content-list -->
                            </div><!-- /.inner -->
                        </div>
                    </div>
                </div>
            </div><!-- /.career-one__content -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.career-one -->

@endsection
