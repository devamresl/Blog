<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/readit/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 20:45:25 GMT -->
<head>
<title>Readit - Free Bootstrap 4 Template by Colorlib</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="index-2.html">Read<i>it</i>.</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="index-2.html" class="nav-link">Home</a></li>
<li class="nav-item active"><a href="blog.html" class="nav-link">Articles</a></li>
<li class="nav-item"><a href="about.html" class="nav-link">Team</a></li>
<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</nav>

<div class="hero-wrap js-fullheight" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.7wX3e-PeJV.jpg)" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
<div class="col-md-12 ftco-animate">
<h2 class="subheading">Hello! Welcome to</h2>
<h1 class="mb-4 mb-md-0">Readit blog</h1>
<div class="row">
<div class="col-md-7">
<div class="text">
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<div class="mouse">
<a href="#" class="mouse-icon">
<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<section class="ftco-section bg-light">
<div class="container">
<div class="row d-flex">

    @foreach ($posts as $post)
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
                <a href="blog-single.html" class="block-20" style="background-image:url({{ asset('storage/' . $post->image) }})">
                </a>
                <div class="text p-4 float-right d-block">
                    <div class="topper d-flex align-items-center">
                        <div class="one py-2 pl-3 pr-1 align-self-stretch">
                            <span class="day">18</span>
                        </div>
                        <div class="two pl-0 pr-3 py-2 align-self-stretch">
                            <span class="yr">{{ $post->created_at }}</span>
                        </div>
                    </div>
                <h3 class="heading mb-3"><a href="#">{{ $post->title }}</a></h3>
                <p>{{ $post->description }}</p>
                <p><a href="{{ route('posts.show', $post->id) }}" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
                </div>
            </div>
        </div>
    @endforeach

</div>
<div class="row mt-5">
<div class="col text-center">
<div class="block-27">
<ul>
<li><a href="#">&lt;</a></li>
<li class="active"><span>1</span></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">&gt;</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<footer class="ftco-footer ftco-bg-dark ftco-section">
<div class="container">
<div class="row mb-5">
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="logo"><a href="#">Read<span>it</span>.</a></h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">latest News</h2>
<div class="block-21 mb-4 d-flex">
<a class="img mr-4 rounded" style="background-image:url(images/ximage_1.jpg.pagespeed.ic.6nutUC1128.jpg)"></a>
<div class="text">
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
<div class="meta">
<div><a href="#"></span> Oct. 16, 2019</a></div>
<div><a href="#"></span> Admin</a></div>
<div><a href="#"></span> 19</a></div>
</div>
</div>
</div>
<div class="block-21 mb-4 d-flex">
<a class="img mr-4 rounded" style="background-image:url(images/ximage_2.jpg.pagespeed.ic.HhFRahl7c7.jpg)"></a>
<div class="text">
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
<div class="meta">
<div><a href="#"></span> Oct. 16, 2019</a></div>
<div><a href="#"></span> Admin</a></div>
<div><a href="#"></span> 19</a></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4 ml-md-5">
<h2 class="ftco-heading-2">Information</h2>
<ul class="list-unstyled">
<li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
<li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a></li>
<li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Articles</a></li>
<li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
<li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="f990979f96b980968c8b9d9694989097d79a9694">[email&#160;protected]</span></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
<p>
Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
</p>
</div>
</div>
</div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="js/jquery.min.js"></script>
<script src="js/main-1.js"></script><script>eval(mod_pagespeed_qcL_6881BX);</script>
<script>eval(mod_pagespeed_ydsl4cdfHa);</script>
<script>eval(mod_pagespeed_OFxX3c850J);</script>
<script src="js/main-2.js"></script><script>eval(mod_pagespeed_RrJrXcA2BN);</script>
<script>eval(mod_pagespeed_iReT0fckTI);</script>
<script>eval(mod_pagespeed_1pBzn$onrS);</script>
<script>eval(mod_pagespeed_ybtqMEoT_m);</script>
<script src="js/main-3.js"></script><script>eval(mod_pagespeed_Pz3mrJ_63m);</script>
<script>eval(mod_pagespeed_W6d3NjFla2);</script>
<script>eval(mod_pagespeed_QjqI0dlp4G);</script>
<script>eval(mod_pagespeed_vv5V0CCUE2);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script>eval(mod_pagespeed_LeCa8CcN8X);</script>
<script>eval(mod_pagespeed_dSHmgkmKhk);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a1d53fdf1b105dc","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a1d53fdedff05dc","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/readit/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 20:45:25 GMT -->
</html>
