@section('title')
{{ $information->nick_name }}
@stop
@section('css')
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/vendor/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@include('layout.header')
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center" style="background: url('{{ URL::asset($information->cover) }}') top center no-repeat;background-size: cover;">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{ $information->nick_name }}</h1>
      <p>I'm <span class="typed" data-typed-items="{{ $information->title_job }}, Freelancer"></span></p>
      <div class="social-links">

      @if (!empty($information->facebook))<a href='{{$information->facebook}}' class='facebook' target='_blank'><i class='bx bxl-facebook'></i></a>@endif
      @if (!empty($information->twitter))<a href='{{$information->twitter}}' class='twitter' target='_blank'><i class='bx bxl-twitter'></i></a>@endif
      @if (!empty($information->linkedin))<a href='{{$information->linkedin}}' class='linkedin' target='_blank'><i class='bx bxl-linkedin'></i></a>@endif
      @if (!empty($information->github))<a href='{{$information->github}}' class='github' target='_blank'><i class='bx bxl-github'></i></a>@endif
      @if (!empty($information->youtube))<a href='{{$information->youtube}}' class='youtube' target='_blank'><i class='bx bxl-youtube'></i></a>@endif
      @if (!empty($information->instagram))<a href='{{$information->instagram}}' class='instagram' target='_blank'><i class='bx bxl-instagram'></i></a>@endif

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{ URL::asset($information->picture) }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>{{ $information->title_job }}</h3>
            <p class="fst-italic">{{ $information->summary }}</p>
            <div class="row">
              <div class="col-lg-12">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $information->email }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ str_replace(","," & ",$information->phone) }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Whats App:</strong> <span><i class="bi bi-whatsapp"></i>{{ str_replace(","," & ",$information->whatsapp) }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{ $information->address }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ date_format(date_create($information->birth_date),'d F Y')}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ date('Y') - date_format(date_create($information->birth_date),'Y') }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $information->degree }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelancer:</strong> <span>
                    @if ( $information->freelancer ) 
                      <i class="bi bi-circle-fill text-success"></i> <span class="badge bg-success">Available</span>
                    @else
                      <i class="bi bi-circle-fill text-danger"></i> <span class="badge  bg-danger">Not Available</span>
                    @endif
                  </span></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab eius, totam neque sint libero illum inventore numquam tenetur sunt iure dolores dicta magni vel? Sequi nisi commodi deserunt itaque illum.</p>
        </div>

        <div class="row">

          <div class="col-lg-2 col-md-3">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="17" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-people-fill"></i>
              <span data-purecounter-start="0" data-purecounter-end="86" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-book"></i>
              <span data-purecounter-start="0" data-purecounter-end="27" data-purecounter-duration="1" class="purecounter"></span>
              <p>Courses</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-code"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Par Day</p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid obcaecati eos facere excepturi eius ea ullam natus ipsa eaque, nobis architecto autem ad optio? Soluta natus obcaecati cumque consequatur nobis?</p>
        </div>

        <div class="row skills-content">

        @foreach ($skills as $skill)
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">{{ $skill->skill }} <i class="val">{{ $skill->value }}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->value }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ipsa natus earum illo consequuntur. Distinctio, sunt modi earum porro cum veniam iusto doloremque nostrum nihil omnis. Quis quidem numquam non.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>{{ $information->title_job }}</h4>
              <p><em>“{{ $information->summary }}”</em></p>
              <ul>
                <li>{{ $information->full_name }}</li>
                <li><i class="bi bi-whatsapp"> </i>{{ str_replace(","," & ",$information->phone) }}</li>
                <li>{{ $information->email }}</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Education</h3>
            @foreach ($educations as $education)
              <div class="resume-item">
                <h4>{{ $education->title }}</h4>
                <h5>{{ $education->start_date }} - {{ !empty($education->end_date) ? $education->end_date : "Present" }}</h5>
                <p><strong><em>{{ $education->college }} “ {{ $education->department }} ”</em></strong></p>
                <p>{{ $education->university }}</p>
                  @if (!empty($education->project))
                    <h5>Graduation Project</h5>
                    <ul>
                      <li>
                        {{ $education->project }}
                        <br>
                        @if (!empty($education->url))
                        <a href ="{{ $education->url }}" class="website" target="_blank"><h3 class="bx bx-link-alt"></h3></a>
                        @endif
                        @if (!empty($education->github))
                          <a href="{{ $education->github }}" class="github" target="_blank"><h3 class="bx bxl-github"></h3></a>
                        @endif

                      </li>
                    </ul>
                  @endif
              </div>
            @endforeach
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>

            @foreach ($experiences as $experience)
              <div class="resume-item">
                <h4>{{ $experience->title_job }}</h4>
                <h5>{{ date_format(date_create($experience->start_date),'M Y') }} - {{ !empty($experience->end_date) ? date_format(date_create($experience->end_date),'M Y') : "Present" }}</h5>
                <p><strong>{{ $experience->company }}<em> <i class="bi bi-geo-alt-fill"></i> {{ $experience->location }}</em></strong></p>
                <h5>Projects</h5>
                <ul>

                    @foreach ($experience->projects as $project)
                      <li>{{ $project->title }}</li>
                    @endforeach
                  </ul>
              </div>
            @endforeach

          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores laudantium sunt quaerat soluta similique dolorem dicta deserunt aliquid. Non provident nulla, qui vitae magnam voluptas laborum obcaecati quam itaque voluptates.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
                @foreach ($categories as $category)
                  <li data-filter=".filter-{{ $category->key }}">{{ $category->title }}</li>
                @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
              //$portfolios = App\Portfolio::whereHas('categories')->get();
          ?>
          @foreach ($portfolios as $portfolio)
          @php
            $portfoliosCategory = App\Category::where('id', $portfolio->category_id)->firstOrFail();
          @endphp
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portfoliosCategory->key }}">
            <div class="portfolio-wrap">
              <img src="{{ URL::asset($portfolio->cover) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $portfolio->title }}</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ URL::asset($portfolio->cover) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ $portfolio->url }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="{{ $portfolio->github }}"  target="_blank" class="" title="Github"><i class="bx bxl-github"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aspernatur cum culpa vitae porro eaque, ipsam amet voluptas odit mollitia doloremque perferendis rem, sed id explicabo? Mollitia recusandae consequatur accusantium?</p>
        </div>

        <div class="row">
          @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box {{ $service->icon_color }}">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                  </svg>
                  <i class="{{ $service->icon }}"></i>
                </div>
                <h4><a href="">{{ $service->title }}</a></h4>
                <p>{{ $service->details }}</p>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ URL::asset($testimonial->picture) }}" class="testimonial-img" alt="">
                  <h3>{{ $testimonial->name}}</h3>
                  <h4>{{ $testimonial->title_job}}</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $testimonial->details}}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
            @endforeach


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">

              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $information->address }}</p>
              </div>

              <div class="email">
                <i class="bi bi-globe"></i>
                <h4>Website:</h4>
                <p><a href="{{ $information->website }}" target="_blank">{{ $information->nick_name }}</a></p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $information->email }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                  @php
                    $phones = strtok($information->phone, ",");
 
                    while ($phones !== false)
                        {
                        echo "<p>$phones</p>";
                        $phones = strtok(",");
                        }
                  @endphp
              </div>

              <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>Whats App:</h4>
                @php
                    $whatsappa = strtok($information->whatsapp, ",");
 
                    while ($whatsappa !== false)
                        {
                        echo "<p>$whatsappa</p>";
                        $whatsappa = strtok(",");
                        }
                  @endphp
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ route('contact') }}" method="post" role="form" class="php-email-form">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="first_name" class="form-control" id="name" placeholder="First Name" value="{{old('first_name')}}">
                  @error('first_name')
                    <span class="float-end badge bg-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" name="last_name" class="form-control" id="name" placeholder="Last Name" value="{{old('last_name')}}">
                  @error('last_name')
                    <span class="float-end badge bg-danger">{{ $message }}</span>
                  @enderror
                </div>

              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{old('email')}}">
                  @error('email')
                  <span class="float-end badge bg-danger">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group mt-3">
              <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" value="{{old('phone')}}">
                @error('phone')
                <span class="float-end badge bg-danger">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{old('subject')}}">
                @error('subject')
                <span class="float-end badge bg-danger">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" >{{old('message')}}</textarea>
                @error('message')
                <span class="float-end badge bg-danger">{{ $message }}</span>
                  @enderror
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  
  <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container">
      <h3>{{ $information->nick_name }}</h3>
      <p>{{ $information->summary }}</p>
      <div class="social-links">
        @if (!empty($information->facebook))<a href='{{$information->facebook}}' class='facebook' target='_blank'><i class='bx bxl-facebook'></i></a>@endif
        @if (!empty($information->twitter))<a href='{{$information->twitter}}' class='twitter' target='_blank'><i class='bx bxl-twitter'></i></a>@endif
        @if (!empty($information->linkedin))<a href='{{$information->linkedin}}' class='linkedin' target='_blank'><i class='bx bxl-linkedin'></i></a>@endif
        @if (!empty($information->github))<a href='{{$information->github}}' class='github' target='_blank'><i class='bx bxl-github'></i></a>@endif
        @if (!empty($information->youtube))<a href='{{$information->youtube}}' class='youtube' target='_blank'><i class='bx bxl-youtube'></i></a>@endif
        @if (!empty($information->instagram))<a href='{{$information->instagram}}' class='instagram' target='_blank'><i class='bx bxl-instagram'></i></a>@endif
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">Develope by <a href="{{ $information->website }}">{{ $information->nick_name }}</a></div>
    </div>
  </footer><!-- End Footer -->
  @section('js')
      <!--Internal  Notify js -->
      <script src="{{ URL::asset('assets/vendor/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/notify/js/notifit-custom.js') }}"></script>
    @endsection
  @include('layout.footer')
