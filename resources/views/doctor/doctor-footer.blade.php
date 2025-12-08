@section('user-footer') 
<div class="container-fluid m-0 theme-black-color mt-5">
  <footer class="py-5">
    <div class="row">
      <!-- <div class="col-md-5 offset-md-1 mb-3"> -->
      <div class="col-md-5 mb-3 mt-3" style="margin-right: 100px;margin-left: 10px;color: #fff;">
        <div class="footer-logo">
          <img src="https://thdc.co.in/sites/default/files/logo_0.png" alt="logo" style="width:250px;">
        </div>  
          <p>THDC India Limited is a leading Power Sector and Profit making Public sector Enterprise and registered as a Public Limited Company in July-88 under the Companies Act, 1956. THDCIL was conferred ‘Mini Ratna–Category-I Status in Oct-09 and up-graded to Schedule ‘A’ PSU in July-10 by the Govt. of India. </p>  
      </div> 

     <!--  <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
        </ul>
      </div> -->

      <div class="col-6 col-md-3 mb-3 mt-3 text-white">
        <h5>Quick Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://thdc.co.in/content/faq" target="_blank" class="nav-link p-0 text-white">FAQ</a></li>

          <li class="nav-item mb-2"><a href="https://thdc.co.in/contactus" class="nav-link p-0 text-white" target="_blank">Contact Us</a></li>

          <li class="nav-item mb-2"><a href="https://thdc.co.in/content/power-link" target="_blank" class="nav-link p-0 text-white">Power Link</a></li>

          <li class="nav-item mb-2"><a href="https://thdc.co.in/sitemap" target="_blank" class="nav-link p-0 text-white">Sitemap</a></li>

          <li class="nav-item mb-2"><a href="https://thdc.co.in/content/disclaimer" target="_blank" class="nav-link p-0 text-white">Disclaimer</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-3 mb-3 mt-3 text-white d-none">
        <form>
          <h5>Get In Touch</h5> 
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address"> 
          </div><br>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">  
            <input id="newsletter1" type="text" class="form-control" placeholder="Enter your message"> 
          </div>
          <button class="btn btn-primary my-3" type="button">Submit</button>
        </form>
      </div>
      
    </div> 
  </footer> 
</div>
<div style="background-color: #fff;" class="text-center py-4">
      <p>&copy; Copyright <?php echo date('Y');?> THDC, Government of India, All rights reserved</p>
      <p style="font-size: 11px;">Developed By <a href="https://www.tzisolutions.com/">TZi Solutions Private Limited</a></p>
      <!-- <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul> -->
    </div>
@endsection('user-footer')