<head>
    <meta charset="utf-8">
    <title>Islami Bank Foundation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->

    <link href="{{asset('frontend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <link href="{{asset('frontend/wlib/animate/animate.min.css')}}" rel="stylesheet" />

    <link href="{{asset('frontend/wlib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/wlib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/wcss/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/wcss/style.css')}}" rel="stylesheet" />
</head>


<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-light d-none d-lg-block">
    <div class="row align-items-center top-bar">
        <div class="col-lg-3 col-md-12 text-center text-lg-start">
            <a href="" class="navbar-brand m-0 p-0">
                <img class="img-fluid" src="frontend/img/ibflogo.png" alt="" style="width: 80px">

            </a>
        </div>
        <div class="col-lg-9 col-md-12 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <i class="fa fa-map-marker-alt text-primary me-2"></i>
                <p class="m-0">166,Purana Paltan,Dhaka-1000</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-4">
                <i class="far fa-envelope-open text-primary me-2"></i>
                <p class="m-0">info@ibfbd.org</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>

            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
        <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
            <h1 class="text-primary m-0">IBF</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.html" class="dropdown-item">Foundation Committee</a>

                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.html" class="dropdown-item">Health</a>
                        <a href="team.html" class="dropdown-item">Education</a>
                        <a href="testimonial.html" class="dropdown-item">Social welfare</a>

                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Bank Hospital</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.html" class="dropdown-item">Islami Bank Hospital Motijheel</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Central Hospital</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Hospital Motijheel</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Hospital Mirpur</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Caridac Center & Hospital Mirpur</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Hospital Mugdha</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Specialized & General Hospital, Nayapaltan</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Hospital Khulna</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Hospital Barisal</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Hospital Chattogram</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Hospital Luxmipur,Rajshahi</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Medical College Hospital,(Nawdapara)Rajshahi</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Community Hospital</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.html" class="dropdown-item">Islami Bank Community Hospital, Faridpur Ltd</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Community Hospital,Rangpur Ltd</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Community Hospital,Dinajpur Ltd</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Community Hospital,Naogoan Ltd</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Community Hospital,Jhenaidah Ltd</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Community Hospital,Manikgong Ltd</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Community Hospital,Sathkhira Ltd</a>
                        <a href="team.html" class="dropdown-item">Islami Bank A.R Howlader Community Hospital,Madaripur Ltd</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Community Hospital,Mymensingh Ltd</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Education Institute</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="https://ibmcr.edu.bd" class="dropdown-item">Islami Bank Medical College Rajshahi</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Nursing College Rajshahi</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Nursing Institute Barisal</a>
                        <a href="team.html" class="dropdown-item">Islami Bank International School & College</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Model School & College</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Institute of Technology,Dhaka</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Institute of Technology,Savar</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Institute of Technology,Sylhet</a>
                        <a href="team.html" class="dropdown-item">Islami Bank Institute of Technology,Bogura</a>
                    </div>
                </div>

                <a href="{{url('/etender')}}" class="nav-item nav-link">eTender</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
               
            </div>

        </div>
    </nav>
</div>
<!-- Navbar End -->