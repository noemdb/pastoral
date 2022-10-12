<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Pastoral Fray Luís Amigó</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.2.0.css')}}">
        
    
    <!--====== Style CSS ======-->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/tailwind.css">
    
</head>

<body>

    <!--====== PRELOADER PART START ======-->
        @include('welcome.partials.preloader')
    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->    
        @include('welcome.partials.header')   
    <!--====== HEADER PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->    
    @include('welcome.partials.services') 
    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->   
        @include('welcome.partials.about') 
    <!--====== ABOUT PART ENDS ======-->

    <!--====== BRAMD PART START ======-->    
        @include('welcome.partials.brand')
    <!--====== BRAMD PART ENDS ======-->
    
    <!--====== ABOUT2 PART START ======-->    
        @include('welcome.partials.about2')
    <!--====== ABOUT2 PART ENDS ======-->

    <!--====== ABOUT3 PART START ======-->    
        {{-- @include('welcome.partials.about3') --}}
    <!--====== ABOUT3 PART ENDS ======-->
    
    <!--====== FACTS COUNTER PART START ======-->    
        @include('welcome.partials.facts')
        <!--====== FACTS COUNTER PART ENDS ======-->
        
    <!--====== TEAM PART START ======-->    
        @include('welcome.partials.team')            
    <!--====== TEAM PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->    
        {{-- @include('welcome.partials.testimonial') --}}
    <!--====== TESTIMONIAL PART ENDS ======-->
    
    <!--====== BLOG PART START ======-->  
        {{-- @include('welcome.partials.blog')            --}}
    <!--====== BLOG PART ENDS ======-->
    
    <!--====== FOOTER PART START ======--> 
        @include('welcome.partials.footer') 
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->
        <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    <!--====== PART START ======-->
    
<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->
    
    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{asset('assets/js/vendor/jquery-3.5.1-min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    
    <!--====== Plugins js ======-->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/scrolling-nav.js')}}"></script>
    
    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>
    
    <!--====== Particles js ======-->
    <script src="{{asset('assets/js/particles.min.js')}}"></script>
    
    <!--====== Main js ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    
</body>

</html>
