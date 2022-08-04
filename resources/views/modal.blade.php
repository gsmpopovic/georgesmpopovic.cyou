            <!-- Modal 1 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$portfolio_item->id}}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{$portfolio_item->thumbnail_absolute_path}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{$portfolio_item->title}}</div>
                        <div class="portfolio-caption-subheading text-muted">{{$portfolio_item->subtitle}}</div>
                    </div>
                </div>
            </div>

            <!-- Modal 1-->
            <div class="portfolio-modal modal fade" id="portfolioModal{{$portfolio_item->id}}" tabindex="-1" role="dialog"
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
                                        <h2 class="text-uppercase">{{$portfolio_item->title}}</h2>
                                        <p class="item-intro text-muted">{{$portfolio_item->subtitle}}</p>
                                        <img class="img-fluid d-block mx-auto" src="{{$portfolio_item->thumbnail_absolute_path}}"
                                            alt="" />
                                        @if($portfolio_item->github_link != null)
                                        <h2>
                                            <a href="{{$portfolio_item->github_link}}" target="_blank"> <i
                                                    class="fab fa-github-square"></i> {{$portfolio_item->title}}</a>
                                        </h2>
                                        @endif
                                        <p>{{$portfolio_item->description}}
                                        </p>
                                        <ul class="list-inline">
                                            <li>Start Date: {{$portfolio_item->start_date}} - End Date: {{$portfolio_item->end_date}}</li>
                                            <li>Category: {{$portfolio_item->category}}</li>
                                        </ul>
                                        <a href="{{$portfolio_item->external_link}}" target="_blank"><button
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
