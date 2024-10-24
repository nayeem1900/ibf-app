<!DOCTYPE html>
<html lang="en">

@include('frontend.layout.header')

<body>
    <!-- Spinner Start -->
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    
    <!-- Navbar End -->


    <!-- Page Header Start -->
    
    <!-- Page Header End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Etender</h6>
                <h1 class="mb-5">Etender List</h1>
            </div>
           
               //table
               <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Tender Name</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
     
      <th scope="col">Tender Download</th>
    </tr>
  </thead>
  <tbody>
  @foreach($allData as $key=>$etender)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{($etender->name)}}</td>
      <td>{{($etender->sdate)}}</td>
      <td>{{($etender->edate)}}</td>
      <td>
      <a href="uploads/{{($etender->img_url)}}" download="{{($etender->img_url)}}">
                            <button type="button" class="btn btn-primary">
                                <i class="glyphicon glyphicon-download">
                                </i>Download</button>
                        </a>

                      

      </td>
     
    </tr>
    @endforeach
  </tbody>
</table>


               
               
                //
               
               
            
        </div>
    </div>
    <!-- Team End -->
        

    <!-- Footer Start -->
   @include('frontend.layout.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend/wlib/wow/wow.min.js')}}"></script>
<script src="{{asset('frontend/wlib/easing/easing.min.js')}}"></script>
<script src="{{asset('frontend/wlib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/wlib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('frontend/wlib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/wlib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('frontend/wlib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('frontend/wlib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('frontend/wjs/main.js')}}"></script> 
</body>

</html>