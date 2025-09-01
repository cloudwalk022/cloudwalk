    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
              
              
                    <h1 class="text-white">Cloud Walk<span class="text-dark"></span> Software</h1>
                    <img class="img-fluid" src="{{ asset('frontend/img/logo.png')}}" alt="">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="{{ route('aboutus') }}" class="dropdown-item">About us</a>
                                <a href="{{ route('teammember') }}" class="dropdown-item">Message from CEO</a>
                                <a href="{{ route('carrers') }}" class="dropdown-item">Carrer Opportunities</a>
                          
                            </div>
                        </div>
                         
                     

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="{{ route('webdevelopment') }}" class="dropdown-item">Web Development</a>
                                <a href="{{ route('customsoftware') }}" class="dropdown-item">Custom Software Development</a>
                                <a href="{{ route('MobileApps') }}" class="dropdown-item">Mobile Apps Development</a>
                                <a href="{{ route('websitehosting') }}" class="dropdown-item">Website & Hosting</a>
                                <a href="{{ route('graphicdesigning') }}" class="dropdown-item">Graphics Designing & Branding</a>
                              
                                <a href="{{ route('computerhardware') }}" class="dropdown-item">Computer Hardware Repair & Maintenance</a>
                                <a href="{{ route('digitalmarketing') }}" class="dropdown-item">SEO & Digital Marketing</a>
                              
                                <a href="{{ route('printingservice') }}" class="dropdown-item">Printing Services</a>
                             

                            </div>
                        </div>

 
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Industries</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="{{ route('healthcare') }}" class="dropdown-item">Healthcare</a>
                                <a href="{{ route('realestate') }}" class="dropdown-item">Realestate</a>
                                <a href="{{ route('hotel_hospitality') }}" class="dropdown-item">Hotel & Hospatility</a>
                                <a href="{{ route('education') }}" class="dropdown-item">Education</a>
                                <a href="{{ route('finance_fintech') }}" class="dropdown-item">Finance & Fin-Tech</a>
                         
                                <a href="{{ route('retail') }}" class="dropdown-item">Retail industry</a>
                                <a href="{{ route('agriculture') }}" class="dropdown-item">Agriculture</a>
                               

                            </div>
                        </div>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Technology</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="{{ route('healthcare') }}" class="dropdown-item">Python</a>
                                <a href="{{ route('realestate') }}" class="dropdown-item">JavaScript / Java Programming</a>
                                <a href="{{ route('hotel_hospitality') }}" class="dropdown-item">React</a>
                                <a href="{{ route('education') }}" class="dropdown-item">PHP, Vue.js </a>
                                <a href="{{ route('finance_fintech') }}" class="dropdown-item">Laravel</a>
                         
                                <a href="{{ route('retail') }}" class="dropdown-item">WordPress Framework</a>
                                <a href="{{ route('agriculture') }}" class="dropdown-item">Flutter</a>
                               

                            </div>
                        </div>


                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projects</a>
                            <div class="dropdown-menu bg-light mt-3">
                            <a href="{{ route('projects') }}" class="dropdown-item">Current Project</a>
                            </div>
                        </div>

                        <a href="{{ route('Contactus') }}" class="nav-link toggle">Contact</a>
           
                 
             
                    </div>
                    <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
