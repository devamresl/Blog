<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/readit/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 20:45:26 GMT -->
<head>
<title>Readit - Free Bootstrap 4 Template by Colorlib</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
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
<li class="nav-item active"><a href="{{ route('post.blog') }}" class="nav-link">Articles</a></li>
<li class="nav-item"><a href="about.html" class="nav-link">Team</a></li>
<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</nav>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image:url({{ asset('storage/' . $post->image) }})" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 text-center">
<h1 class="mb-3 bread">{{ $post->title }}</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-degree-bg">
<div class="container">
<div class="row">
<div class="col-lg-8 ftco-animate">
    <p>
        {!! $post->content !!}
    </p>
    <div class="tag-widget post-tag-container mb-5 mt-5">
        <div class="tagcloud">
            @foreach ($post->tags as $tag)
                <a href="#" class="tag-cloud-link">{{$tag->name}}</a>
            @endforeach

        </div>
    </div>
<div class="about-author d-flex p-4 bg-light">
<div class="bio mr-5">
<img src="{{ $user->hasPicture() ? asset('storage/' . $user->getPicture()) : $user->getGravatar() }}" style="border-radius: 50%" alt="Image placeholder" class="img-fluid mb-4">
</div>
    <div class="desc">
        <h3>{{ $user->name }}</h3>
        <p>{{ $profile->about }}</p>
    </div>
</div>
<div class="pt-5 mt-5">
<h3 class="mb-5">6 Comments</h3>
<ul class="comment-list">
<li class="comment">
<div class="vcard bio">
<img src="{{ asset('images/xperson_1.jpg.pagespeed.ic.8e2vi2ER3S.jpg') }}" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
</li>
<li class="comment">
<div class="vcard bio">
<img src="{{ asset('images/xperson_1.jpg.pagespeed.ic.8e2vi2ER3S.jpg') }}" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
<ul class="children">
<li class="comment">
<div class="vcard bio">
<img src="{{ asset('images/xperson_1.jpg.pagespeed.ic.8e2vi2ER3S.jpg') }}" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
<ul class="children">
<li class="comment">
<div class="vcard bio">
<img src="{{ asset('images/xperson_1.jpg.pagespeed.ic.8e2vi2ER3S.jpg') }}" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
<ul class="children">
<li class="comment">
<div class="vcard bio">
<img src="{{ asset('images/xperson_1.jpg.pagespeed.ic.8e2vi2ER3S.jpg') }}" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li class="comment">
<div class="vcard bio">
<img src="{{ asset('images/xperson_1.jpg.pagespeed.ic.8e2vi2ER3S.jpg') }}" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
</li>
</ul>

<div class="comment-form-wrap pt-5">
<h3 class="mb-5">Leave a comment</h3>
<form action="#" class="p-5 bg-light">
<div class="form-group">
<label for="name">Name *</label>
<input type="text" class="form-control" id="name">
</div>
<div class="form-group">
<label for="email">Email *</label>
<input type="email" class="form-control" id="email">
</div>
<div class="form-group">
<label for="website">Website</label>
<input type="url" class="form-control" id="website">
</div>
<div class="form-group">
<label for="message">Message</label>
<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
</div>
</form>
</div>
</div>
</div>
<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
<div class="sidebar-box">
<form action="#" class="search-form">
<div class="form-group">
<span class="icon icon-search"></span>
<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
</div>
</form>
</div>
    <div class="sidebar-box ftco-animate">
        <div class="categories">
            <h3>Categories</h3>
            @foreach ($categories as $category)
                <li><a href="#">{{ $category->name }}<span class="ion-ios-arrow-forward"></span></a></li>
            @endforeach
        </div>
    </div>
<div class="sidebar-box ftco-animate">
<h3>Recent Blog</h3>
<div class="block-21 mb-4 d-flex">
<a class="blog-img mr-4" style="background-image:url(images/ximage_1.jpg.pagespeed.ic.6nutUC1128.jpg)"></a>
<div class="text">
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
<div class="meta">
<div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div>
</div>
</div>
<div class="block-21 mb-4 d-flex">
<a class="blog-img mr-4" style="background-image:url(images/ximage_2.jpg.pagespeed.ic.HhFRahl7c7.jpg)"></a>
<div class="text">
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
<div class="meta">
<div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div>
</div>
</div>
<div class="block-21 mb-4 d-flex">
<a class="blog-img mr-4" style="background-image:url(images/ximage_3.jpg.pagespeed.ic.IDmnFNLqH_.jpg)"></a>
<div class="text">
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
<div class="meta">
<div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div>
</div>
</div>
</div>
<div class="sidebar-box ftco-animate">
<h3>Tag Cloud</h3>
<div class="tagcloud">
    @foreach ($tags as $tag)
        <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>
    @endforeach
</div>
</div>
<div class="sidebar-box ftco-animate">
<h3>Paragraph</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
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
<li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="9cf5f2faf3dce5f3e9eef8f3f1fdf5f2b2fff3f1">[email&#160;protected]</span></span></a></li>
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
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/main-1.js') }}"></script><script>eval(mod_pagespeed_qcL_6881BX);</script>
<script>eval(mod_pagespeed_ydsl4cdfHa);</script>
<script>eval(mod_pagespeed_OFxX3c850J);</script>
<script src="{{ asset('js/main-2.js') }}"></script><script>eval(mod_pagespeed_RrJrXcA2BN);</script>
<script>eval(mod_pagespeed_iReT0fckTI);</script>
<script>eval(mod_pagespeed_1pBzn$onrS);</script>
<script>eval(mod_pagespeed_ybtqMEoT_m);</script>
<script src="{{ asset('js/main-3.js') }}"></script><script>eval(mod_pagespeed_Pz3mrJ_63m);</script>
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
<script defer src="{{ asset('../../../static.cloudflareinsights.com/beacon.min.js') }}" data-cf-beacon='{"rayId":"6a1d540354ca05dc","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>
<script defer src="{{ asset('../../../static.cloudflareinsights.com/beacon.min.js') }}" data-cf-beacon='{"rayId":"6a1d540348ef05dc","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/readit/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 20:45:26 GMT -->
</html>
