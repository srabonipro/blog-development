<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mini Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../../css.css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar" role="banner">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-12 search-form-wrap js-search-form">
                        <form method="get" action="#">
                            <input type="text" id="s" class="form-control" placeholder="Search...">
                            <button class="search-btn" type="submit"><span class="icon-search"></span></button>
                        </form>
                    </div>

                    <div class="col-4 site-logo">
                        <a href="index.html" class="text-black h2 mb-0">Mini Blog</a>
                    </div>

                    <div class="col-8 text-right">
                        <nav class="site-navigation" role="navigation">
                            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                                <li><a href="category.html">Home</a></li>
                                <li><a href="category.html">Politics</a></li>
                                <li><a href="category.html">Tech</a></li>
                                <li><a href="category.html">Entertainment</a></li>
                                <li><a href="category.html">Travel</a></li>
                                <li><a href="category.html">Sports</a></li>
                                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span
                                            class="icon-search"></span></a></li>
                            </ul>
                        </nav>
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>

            </div>
        </header>


        <div class="site-cover site-cover-sm same-height overlay single-page"
            style="background-image: url('{{ asset('frontend') }}/images/img_2.jpg');">
            <div class="container">
                <div class="row same-height justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="post-entry text-center">
                            <span class="post-category text-white bg-success mb-3">{{ $post->category->name }}</span>
                            <h1 class="mb-4"><a href="javascript:void()">{{ $post->title }}</a></h1>
                            <div class="post-meta align-items-center text-center">
                                <figure class="author-figure mb-0 mr-3 d-inline-block"><img
                                        src="{{ $post->user->image }}" alt="Image" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1">By {{ $post->user->name }}</span>
                                <span>&nbsp;-&nbsp; {{ $post->published_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="site-section py-lg">
            <div class="container">

                <div class="row blog-entries element-animate">

                    <div class="col-md-12 col-lg-8 main-content">

                        <div class="post-content-body">
                            {!! $post->description !!}
                        </div>


                        <div class="pt-5">
                            <p>
                                Category: <a href="#">{{ $post->category->name }}</a>
                                @if ($post->tags->count())
                                    Tags:   @foreach ($post->tags as $tag)
                                                <a href="#">#{{ $tag->name }}</a>,
                                            @endforeach
                                @endif
                            </p>
                        </div>


                        <div class="pt-5">
                            <h3 class="mb-5">6 Comments</h3>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{ asset('frontend') }}/images/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                        </p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>
                                </li>

                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{ asset('frontend') }}/images/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                        </p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>

                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard">
                                                <img src="{{ asset('frontend') }}/images/person_1.jpg"
                                                    alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                    quidem laborum necessitatibus, ipsam impedit vitae autem, eum
                                                    officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                                                    impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply rounded">Reply</a></p>
                                            </div>


                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard">
                                                        <img src="{{ asset('frontend') }}/images/person_1.jpg"
                                                            alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>Jean Doe</h3>
                                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                            autem, eum officia, fugiat saepe enim sapiente iste iure!
                                                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                                    </div>

                                                    <ul class="children">
                                                        <li class="comment">
                                                            <div class="vcard">
                                                                <img src="{{ asset('frontend') }}/images/person_1.jpg"
                                                                    alt="Image placeholder">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h3>Jean Doe</h3>
                                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Pariatur quidem laborum necessitatibus, ipsam
                                                                    impedit vitae autem, eum officia, fugiat saepe enim
                                                                    sapiente iste iure! Quam voluptas earum impedit
                                                                    necessitatibus, nihil?</p>
                                                                <p><a href="#" class="reply rounded">Reply</a></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{ asset('frontend') }}/images/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?
                                        </p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>
                                </li>
                            </ul>
                            <!-- END comment-list -->

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
                                        <textarea name="" id="message" cols="30" rows="10"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- END main-content -->

                    <div class="col-md-12 col-lg-4 sidebar">
                        <div class="sidebar-box search-form-wrap">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon fa fa-search"></span>
                                    <input type="text" class="form-control" id="s"
                                        placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <!-- END sidebar-box -->
                        <div class="sidebar-box">
                            <div class="bio text-center">
                                <img src="{{ $post->user->image }}" alt="Image Placeholder"
                                    class="img-fluid mb-5">
                                <div class="bio-body">
                                    <h2>{{ $post->user->name }}</h2>
                                    <p class="mb-4">{{ $post->user->about }}</p>
                                    <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                                    <p class="social">
                                        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- END sidebar-box -->
                        <div class="sidebar-box">
                            <h3 class="heading">Popular Posts</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    @foreach ($popularPosts as $post)
                                    <li>
                                        <a href="">
                                            <img src="{{ $post->image }}" alt="Image placeholder"
                                                class="mr-4">
                                            <div class="text">
                                                <h4>{{ $post->title }}</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">{{ $post->published_at->format('M d, Y') }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- END sidebar-box -->

                        <div class="sidebar-box">
                            <h3 class="heading">Categories</h3>
                            <ul class="categories">
                                <li><a href="#">Food <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(22)</span></a></li>
                                <li><a href="#">Lifestyle <span>(37)</span></a></li>
                                <li><a href="#">Business <span>(42)</span></a></li>
                                <li><a href="#">Adventure <span>(14)</span></a></li>
                            </ul>
                        </div>
                        <!-- END sidebar-box -->

                        <div class="sidebar-box">
                            <h3 class="heading">Tags</h3>
                            <ul class="tags">
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Freelancing</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Freelancing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar -->

                </div>
            </div>
        </section>

        <div class="site-section bg-light">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-12">
                        <h2>More Related Posts</h2>
                    </div>
                </div>

                <div class="row align-items-stretch retro-layout">

                    <div class="col-md-5 order-md-2">
                        <a href="single.html" class="hentry img-1 h-100 gradient"
                            style="background-image: url('{{ asset('frontend') }}/images/img_4.jpg');">
                            <span class="post-category text-white bg-danger">Travel</span>
                            <div class="text">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span>February 12, 2019</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-7">

                        <a href="single.html" class="hentry img-2 v-height mb30 gradient"
                            style="background-image: url('{{ asset('frontend') }}/images/img_1.jpg');">
                            <span class="post-category text-white bg-success">Nature</span>
                            <div class="text text-sm">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span>February 12, 2019</span>
                            </div>
                        </a>

                        <div class="two-col d-block d-md-flex">
                            <a href="single.html" class="hentry v-height img-2 gradient"
                                style="background-image: url('{{ asset('frontend') }}/images/img_2.jpg');">
                                <span class="post-category text-white bg-primary">Sports</span>
                                <div class="text text-sm">
                                    <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                    <span>February 12, 2019</span>
                                </div>
                            </a>
                            <a href="single.html" class="hentry v-height img-2 ml-auto gradient"
                                style="background-image: url('{{ asset('frontend') }}/images/img_3.jpg');">
                                <span class="post-category text-white bg-warning">Lifestyle</span>
                                <div class="text text-sm">
                                    <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                    <span>February 12, 2019</span>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="site-section bg-lightx">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-5">
                        <div class="subscribe-1 ">
                            <h2>Subscribe to our newsletter</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error
                                illum a explicabo, ipsam nostrum.</p>
                            <form action="#" class="d-flex">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3 class="footer-heading mb-4">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam
                            deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae,
                            repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
                        <ul class="list-unstyled float-left mr-5">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Subscribes</a></li>
                        </ul>
                        <ul class="list-unstyled float-left">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Nature</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">


                        <div>
                            <h3 class="footer-heading mb-4">Connect With Us</h3>
                            <p>
                                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                                <a href="#"><span class="icon-twitter p-2"></span></a>
                                <a href="#"><span class="icon-instagram p-2"></span></a>
                                <a href="#"><span class="icon-rss p-2"></span></a>
                                <a href="#"><span class="icon-envelope p-2"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('frontend') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('frontend') }}/js/aos.js"></script>

    <script src="{{ asset('frontend') }}/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="../../gtag/js.js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>
