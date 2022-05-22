<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body id="page-top" style="overflow-x: hidden;">
    <!-- Navigation-->
    @include('nav')
    <!-- Masthead-->
    @include('header')
    <!-- Services-->
    @include('services')
    <!-- Portfolio Grid-->
    @include("portfolio-grid")

    <!-- Contact-->
    @include('contact')
    <!-- Footer-->
    @include('footer')
    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Insomnia Donuts</h2>
                                <p class="item-intro text-muted">What are you craving?</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/insdonuts.PNG"
                                    alt="" />
                                <h2>
                                    <a href='https://github.com/gsmpopovic/insomniadonuts' target="_blank"> <i
                                            class="fab fa-github-square"></i> Insomnia Donuts</a>
                                </h2>
                                <p><i>Insomnia Donuts</i> is a South East Asian inspired spin-off of <i>Insomnia
                                        Cookies</i>. The site is built off purely HTML and CSS.
                                </p>
                                <ul class="list-inline">
                                    <li>Date: May 2020</li>
                                    <li>Category: Web Development</li>
                                </ul>
                                <a href="https://gsmpopovic.github.io/insomniadonuts" target="_blank"><button
                                        class="btn btn-primary" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Live Demo </button></a>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Quantum Leap</h2>
                                <p class="item-intro text-muted">Your favorite vegan haunt.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/quantumleap.PNG"
                                    alt="" />
                                <h2>
                                    <a href='https://github.com/gsmpopovic/quantum-leap' target="_blank"> <i
                                            class="fab fa-github-square"></i> Quantum Leap</a>
                                </h2>
                                <p>Quantum Leap is a website for a vegetarian restaurant in Manhattan's Lower East side.
                                    It features information on the restaurant, a gallery of its menu items, and a
                                    contact page which supports SQL and NoSQL storsge.</p>
                                <ul class="list-inline">
                                    <li>Date: June 2020</li>
                                    <li>Category: Web Development</li>
                                </ul>
                                <a href="https://quantum-leap-official.herokuapp.com/" target="_blank"><button
                                        class="btn btn-primary" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Live Demo </button></a>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Tweetnalysis</h2>
                                <p class="item-intro text-muted">What are your tweets saying?</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/tweetnalysis.PNG"
                                    alt="" />
                                <h2>
                                    <a href='https://github.com/gsmpopovic/tweetnalysis' target="_blank"> <i
                                            class="fab fa-github-square"></i> Tweetnalysis</a>
                                </h2>
                                <p>Tweetnalysis is a web application that retrieves tweets from a handle's timeline
                                    utilizing access to Twitter's API and analyzes their sentiment (the author's mood
                                    and attitude, as evidenced by their use of language). The
                                    PHP library is the work of David Oti, and can be found <a
                                        href="https://github.com/davmixcool/php-sentiment-analyzer"
                                        target="_blank">here</a>. The original project by C.J. Hutto et al. (2014) was
                                    written in Python,
                                    and can be found <a href="https://github.com/cjhutto/vaderSentiment" target="_blank"
                                        ;="">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: August 2020</li>
                                    <li>Category: Web Development</li>
                                </ul>
                                <a href="https://tweetnalysis.herokuapp.com/" target="_blank"><button
                                        class="btn btn-primary" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Live Demo </button></a>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">O'Connor & Co.</h2>
                                <p class="item-intro text-muted">Team time in New York.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/oconn.PNG" alt=" " />
                                <h2>
                                    <a href='https://github.com/gsmpopovic/oconnor-co' target="_blank "> <i
                                            class="fab fa-github-square "></i> O'Connor & Co.</a>
                                </h2>
                                <p>O'Connor & Co. is a for a fictional tea shop in Manhattan's Lower East Side. It
                                    features information on the shop, its management, and its products, and provides a
                                    means of contact via geolocation and a form. In addition
                                    to these, the site features a members-only blog which supports user creation, login,
                                    and validation.
                                </p>
                                <ul class="list-inline ">
                                    <li>Date: August 2020</li>
                                    <li>Category: Web Development</li>
                                </ul>
                                <a href="https://oconnorco.herokuapp.com/" target="_blank"><button
                                        class="btn btn-primary" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Live Demo </button></a>
                                <button class="btn btn-primary " data-dismiss="modal" type="button ">
                                    <i class="fas fa-times mr-1 "></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg "
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body ">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase ">Laravel Rest API</h2>
                                <p class="item-intro text-muted ">A simple RESTful API</p>
                                <img class="img-fluid d-block mx-auto " src="assets/img/portfolio/lrapi.PNG" alt=" " />
                                <h2>
                                    <a href='https://github.com/gsmpopovic/laravel_rest_api' target="_blank"> <i
                                            class="fab fa-github-square"></i>Laravel Restful API</a>
                                </h2>
                                <p><i>Laravel Rest Api</i> is, as one would expect, an API built with PHP's Laravel
                                    framework that conforms to RESTful best practices.</p>
                                <ul class="list-inline ">
                                    <li>Date: May 2020</li>
                                    <li>Category: Web Development</li>
                                </ul>
                                <button class="btn btn-primary " data-dismiss="modal" type="button ">
                                    <i class="fas fa-times mr-1 "></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Mojo English</h2>
                                <p class="item-intro text-muted">English made easy.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/mojoenglish.PNG"
                                    alt="" />
                                <h2>
                                    <a href='https://github.com/gsmpopovic/' target="_blank"> <i
                                            class="fab fa-github-square"></i>Mojo English</a>
                                </h2>
                                <p>Mojo English is an ecommerce website for <i>Mojo English</i>--a card game for English
                                    language acquisition. Perfect for children of all ages.</p>
                                <ul class="list-inline">
                                    <li>Date: December 2020</li>
                                    <li>Category: Web Development</li>
                                </ul>
                                <a href="https://mojoenglish.com/" target="_blank"><button class="btn btn-primary"
                                        type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Live Demo </button></a>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 7-->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg "
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body ">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase ">Walmart Bot</h2>
                                <p class="item-intro text-muted ">An automated checkout bot.</p>
                                <video class="img-fluid d-block mx-auto mb-2" width="320" height="240" controls>
                                    <source src="assets/mkv/laravel_walmart_bot.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                                <h2>
                                    <a href='https://github.com/gsmpopovic' target="_blank"> <i
                                            class="fab fa-github-square"></i>Walmart Bot</a>
                                </h2>
                                <p>This is an automated checkout bot built with Laravel's Dusk testing framework. The
                                    bot can: sign into a user's account, navigate to an item, add to cart, and checkout
                                    with a user's details.</p>
                                <ul class="list-inline ">
                                    <li>Date: December 2020</li>
                                    <li>Category: Web Development</li>
                                </ul>
                                <button class="btn btn-primary " data-dismiss="modal" type="button ">
                                    <i class="fas fa-times mr-1 "></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer-scripts')
</body>

</html>
