@extends('layouts.app')

@section('title', 'Outsourcing and Offshore Data Analytics Services')

@section('content')
    <section class="services-header">
        <h1>Outsourcing and Offshore Data Analytics Services</h1>
        <p>Knowell BPO offers tailored outsourcing solutions, providing expert data analysis teams and round-the-clock support for businesses around the globe.</p>
    </section>

    <section class="services-overview">
        <h2>Services Overview</h2>
        <div class="card-container">
            <!-- Remote Data Analysis Teams Card -->
            <div class="service-card" data-toggle="modal" data-target="#remoteDataModal">
                <div class="card-header">
                    <img src="{{ asset('images/icon.jpg') }}" alt="Remote Data Analysis Teams Icon" class="service-icon">
                    <h5>Remote Data Analysis Teams</h5>
                </div>
            </div>

            <!-- 24/7 Data Support and Monitoring Card -->
            <div class="service-card" data-toggle="modal" data-target="#supportMonitoringModal">
                <div class="card-header">
                    <img src="{{ asset('images/data support.jpg') }}" alt="24/7 Support and Monitoring Icon" class="service-icon">
                    <h5>24/7 Data Support and Monitoring</h5>
                </div>
            </div>

            <!-- Custom Data Solutions Card -->
            <div class="service-card" data-toggle="modal" data-target="#customDataModal">
                <div class="card-header">
                    <img src="{{ asset('images/custom-data-icon.png') }}" alt="Custom Data Solutions Icon" class="service-icon">
                    <h5>Custom Data Solutions</h5>
                </div>
            </div>

            <!-- Real-Time Reporting & Analytics Card -->
            <div class="service-card" data-toggle="modal" data-target="#realTimeReportingModal">
                <div class="card-header">
                    <img src="{{ asset('images/real-time-icon.png') }}" alt="Real-Time Reporting Icon" class="service-icon">
                    <h5>Real-Time Reporting & Analytics</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <!-- Remote Data Analysis Teams Modal -->
    <div class="modal fade" id="remoteDataModal" tabindex="-1" role="dialog" aria-labelledby="remoteDataModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="remoteDataModalLabel">Remote Data Analysis Teams</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/team-image.jpg') }}" alt="Diverse Team of Data Scientists" class="content-image">
                    <p>Our remote data analysis teams provide specialized services, including data visualization, predictive analytics, and machine learning.</p>
                    <h3>Key Benefits:</h3>
                    <ul>
                        <li>Customizable team composition</li>
                        <li>On-demand scaling to match project needs</li>
                        <li>Access to advanced analytics tools</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn-modal">Hire a Remote Team Now</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 24/7 Data Support and Monitoring Modal -->
    <div class="modal fade" id="supportMonitoringModal" tabindex="-1" role="dialog" aria-labelledby="supportMonitoringModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="supportMonitoringModalLabel">24/7 Data Support and Monitoring</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/global-clock.jpg') }}" alt="Global Clock" class="content-image">
                    <p>We understand that data never sleeps, and neither do we. Our 24/7 support services ensure that you have access to insights whenever you need them.</p>
                    <h3>Services Provided:</h3>
                    <ul>
                        <li>Real-time monitoring of customer data</li>
                        <li>Operational and financial data tracking</li>
                        <li>Automated alerts for key metrics</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn-modal">Learn More About Our 24/7 Services</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Data Solutions Modal -->
    <div class="modal fade" id="customDataModal" tabindex="-1" role="dialog" aria-labelledby="customDataModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customDataModalLabel">Custom Data Solutions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/custom-dashboard.jpg') }}" alt="Custom Dashboard" class="content-image">
                    <p>Every business is unique, and so are its data needs. Our experts design and implement custom analytics solutions that align with your business goals.</p>
                    <h3>Services Provided:</h3>
                    <ul>
                        <li>Custom BI Dashboards</li>
                        <li>Predictive Models</li>
                        <li>Machine Learning Algorithms</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn-modal">Schedule a Custom Solution Consultation</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Real-Time Reporting & Analytics Modal -->
    <div class="modal fade" id="realTimeReportingModal" tabindex="-1" role="dialog" aria-labelledby="realTimeReportingModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="realTimeReportingModalLabel">Real-Time Reporting & Analytics</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/real-time-image.jpg') }}" alt="Real-Time Dashboard" class="content-image">
                    <p>Our real-time reporting solutions provide immediate access to your data insights, helping you make informed decisions swiftly and effectively.</p>
                    <h3>Key Features:</h3>
                    <ul>
                        <li>Instant data visualization</li>
                        <li>Automated reporting dashboards</li>
                        <li>Flexible data exports</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn-modal">Discover Real-Time Analytics</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>

    </div>
     <!-- Why Choose Us Section -->
<section class="why-choose-us">
    <h2>Why Choose Us</h2>
    <ul>
        <li>Cost-Efficiency</li>
        <li>Access to Expert Analysts</li>
        <li>Customizable Solutions</li>
        <li>Real-Time Insights</li>
        <li>Secure Data Handling</li>
    </ul>
</section>


    <!-- Client Testimonials Section -->
    <section class="client-testimonials">
        <h2>Client Testimonials</h2>
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p>“Knowell BPO has transformed our data processes. Their 24/7 support keeps us ahead of the competition.”</p>
                    <p><strong>- Client Name, Company</strong></p>
                </div>
                <div class="carousel-item">
                    <p>“Their team of expert analysts delivered actionable insights that have greatly impacted our business growth.”</p>
                    <p><strong>- Client Name, Company</strong></p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
