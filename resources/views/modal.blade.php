            <!-- Modal 1 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$modal->id}}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{$modal->thumbnail}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{$modal->title}}</div>
                        <div class="portfolio-caption-subheading text-muted">{{$modal->subtitle}}</div>
                    </div>
                </div>
            </div>

            <!-- Modal 1-->
            <div class="portfolio-modal modal fade" id="portfolioModal{{$modal->id}}" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg"
                                alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">{{$modal->title}}</h2>
                                        <p class="item-intro text-muted">{{$modal->subtitle}}</p>
                                        <img class="img-fluid d-block mx-auto" src="{{$modal->thumbnail}}"
                                            alt="" />
                                        <h2>
                                            <a href="{{$modal->github_link}}" target="_blank"> <i
                                                    class="fab fa-github-square"></i> {{$modal->title}}</a>
                                        </h2>
                                        <p>{{$modal->description}}
                                        </p>
                                        <ul class="list-inline">
                                            <li>Date: May 2020</li>
                                            <li>Category: Web Development</li>
                                        </ul>
                                        <a href="{{$modal->external_link}}" target="_blank"><button
                                                class="btn btn-primary" type="button">
                                                <i class="fas fa-times mr-1"></i>
                                                View </button></a>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
