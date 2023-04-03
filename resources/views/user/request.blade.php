<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset=" utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WBMS | Paloyon Oriental</title>
  @foreach($setting as $settings)
  <link rel="icon" href="{{$settings->barangay_logo ? asset ('storage/' .$settings->barangay_logo) : asset('/storage/no/-image.png')}}">
  @endforeach
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/mdb.lite.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/autocomplete.js"></script>

</head>
@include('partials.header')
{{--<!--Header_section--> --}}
  <!-- ======= Header ======= -->
  <header id="header2" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <a href="/home" class="logo me-auto">
        @foreach($setting as $settings)
        <img src="{{$settings->barangay_logo ? asset ('storage/' .$settings->barangay_logo) : asset('/storage/no/-image.png')}}" class="img-fluid" width="70px" style="padding:5px;">
        @endforeach
      </a>
      {{-- <h1 class="logo me-auto"><a href="index.html">WBMS | Paloyon Oriental</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="/" style="padding: 10px;">Home</a></li>
          <li><a class="nav-link nav2 scrollto" href="/.#about" style="padding: 10px;">About</a></li>
          <li class="dropdown"><a href="/.#services" style="padding: 10px;">Services<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/request" style="color: #212529">Request Certificate of Clearance</a></li>
              <li><a href="/request2" style="color: #212529">Request Certificate of Indigency</a></li>
              <li><a href="/request3" style="color: #212529">Request Certificate of Residency</a></li>
              <li><a href="/residentBlotter" style="color: #212529">Report a Blotter</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/.#portfolio" style="padding: 10px;">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="/.#team" style="padding: 10px;">Officials</a></li>
          <li><a class="nav-link scrollto" href="/.#contact" style="padding: 10px;">Contact</a></li>
          {{-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header><!-- End Header -->

<!--Header_section-->

<style>
  #alert-negative {
    background: rgb(247, 112, 112);
    top: 10px;
    border-left-color: red;
    border-left-width: 10px;
    border-radius: 4px;
    color: black;
  }
  #alert-positive {
    background: rgb(118, 240, 149);
    top: 10px;
    border-left-color: rgb(1, 241, 61);
    border-left-width: 10px;
    border-radius: 4px;
    color: black;
  }
  span{
    color: red;
  }
  .form-group2 {
  border: 1px solid #ced4da;
  border-radius: 6px;
  width: auto;
}
.form-group2:focus {
  color: #212529;
    background-color: #fff;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
}
.form-group2 input {
  display: inline-block;
  width: auto;
  border: none;
}
.form-group2 input:focus {
  box-shadow: none;
}
</style>
<!--Navbar-->
<main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
              <h2 class="fw-bold text-uppercase"><center>Request Certificate of Clearance</center></h2>
            </div>
          </section>
          <!-- End Breadcrumbs -->

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-12 col-md-12">
                @if(session()->has('message-negative'))
                <div class="alert" id="alert-negative">
                  {{session()->get('message-negative')}}
                </div>
                @endif
                @if(session()->has('message-positive'))
                <div class="alert" id="alert-positive">
                  {{session()->get('message-positive')}}
                </div>
                @endif
                </div>
              </div>
            </div>
<form action="/request" method="POST" enctype="multipart/form-data">
@csrf
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-8 d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h6 class="mb-4" style="font-style: italic;">*If you are not a registered resident in our barangay, your request will not be process.*</h6>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4"></div>
                                <form method="POST" id="contactForm" name="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"><h6>Document Type</h6>
                                                <input type="text" readonly class="form-control" name="docType" value="Barangay Clearance" required>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><h6>Given Name<span>*</span></h6>
                                                <input type="text" class="form-control" name="first_name" value="" placeholder="example Juan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><h6>Middle Name</h6>
                                                <input type="text" class="form-control" name="middle_name" value="" placeholder="example Delavega">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><h6>Last Name<span>*</span></h6>
                                                <input type="text" class="form-control" name="last_name" value="" placeholder="example Cruz" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6"><h6>Select Payment Method<span>*</span></h6>
                                            <div class="form-group">
                                                <select class="form-control" name="paymentMethod" id="paymentSelection" onchange="showReference();" required>
                                                    <option class="default" value="Payment Method">--Payment Method--</option>
                                                    <option class="selectGcash" value="Gcash" id="payment" style="visibility: visible;">Gcash</option>
                                                    <option class="selectCash" value="Cash on Pick-up">Cash on Pick-up</option>
                                                  </select>
                                            </div>
                                            @Error('paymentMethod')
                                            <p style="color: red; font-weight:bold;">{{$message}}</p>
                                            @enderror
                                        </div>
                                            <div class="col-md-6"><h6>Contact Number<span>*</span></h6>
                                                <div class="form-group2">
                                                    <label class="border-end country-code px-2">+63</label>
                                                    <input  id="ec-mobile-number" class="form-control" aria-describedby="emailHelp"  pattern="[0-9]{10}"  name="contact_number" type="tel" placeholder="9123456789" required>
                                                    {{-- <input type="tel" class="form-control" name="contact_number" value="" placeholder="09123456789" required> --}}
                                                </div>
                                                @Error('contact_number')
                                                 <p style="color: red; font-weight:bold;">{{$message}}</p>
                                                 @enderror

                                            </div>

                                        <div class="col-md-12">
                                            <div class="form-group"><h6>Select Purpose of Request<span>*</span></h6>
                                                <select class="form-control" name="purpose" id="form6Example4" onchange="showPurpose();" required>
                                                    <option class="default" value="Payment Method">-- Purpose of Request --</option>
                                                    <option class="form-control" value="application of scholarship">Application of scholarship</option>
                                                    <option class="form-control" value="availment of government identification cards">Availment of government identification cards</option>
                                                    <option class="form-control" value="application of loans">Application of loans</option>
                                                    <option class="form-control" value="proof of belonging into indigent family">Proof of belonging into indigent family</option>
                                                    <option class="form-control" value="valid proof of identity">Valid proof of my identity</option>
                                                    <option class="form-control" value="supporting document in my job application">Supporting document in my job application</option>
                                                    <option class="form-control" value="valid proof of my existence">Valid proof of my existence</option>
                                                    <option class="form-control" value="Others please specify">Others please specify</option>
                                                  </select>
                                            </div>

                                        <div class="form-outline mb-4">
                                            <input class="form-control" name="otherPurpose" id="otherPurpose" style="visibility: hidden;" class="form-control" placeholder="Kindly specify other reason/s of your request" required>
                                            @Error('otherPurpose')
                                            <p style="color: red; font-weight:bold;">{{$message}}</p>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-md-12" id="referenceNumberField" style="visibility: hidden;"><h6>Reference Number<span>*</span></h6>
                                            <div class="form-group">
                                              <input type="text" name="referenceNumber" id="referenceNumber" pattern="[0-9]{13}" class="form-control" placeholder="1234567890123" required/>
                                            </div>
                                            @Error('referenceNumberField')
                                                <p style="color: red; font-weight:bold;">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-12" id="screenshotField" style="visibility: hidden;">
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img id="blah" class="img-fluid" src="/assets/images/screenshot.jpg" alt="Upload Screenshot" style="width:200px;height:200px">
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group camera">
                                                      <div class="custom-file">image
                                                        <input type="file" name="screenshot" class="custom-file-input" id="screenshot" accept="image/*" onchange="readURL(this);" required/>
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                      </div>
                                                      @Error('screenshot')
                                                      <p style="color: red; font-weight:bold;">{{$message}}</p>
                                                      @enderror
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="text" name="submit" class="btn btn-primary" style="margin-top: 30px;">Submit Request</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                                <img src="{{url('assets/images/imgUser/gcash.jpeg')}}" class="img-fluid" width="500px" alt="GCASH">
                                <img src="{{url('assets/images/imgUser/gcashqr.jpg')}}" class="img-fluid" width="500px" alt="GCASH">
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item"><center>GCASH # 09091389912</center></li>
                                      <li class="list-group-item">Cert of Residency : PHP 50.00</li>
                                      <li class="list-group-item">Barangay Clearance : PHP 50.00</li>
                                      <li class="list-group-item">Cert of Indigency : PHP 0</li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
</main><!-- End #main -->

<script type="text/javascript">

    $("document").ready(function()

    {
      setTimeout(function()
        {
          $("div.alert").remove();
        },3000);
    });

    </script>

<script>
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  function generateString(length) {
    let result = '';
    let result1 = '-';
    let result2 = '-';
    let result3 = '-';
    const charactersLength = characters.length;
    for (let i = 0; i < length; i++) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
      result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
      result2 += characters.charAt(Math.floor(Math.random() * charactersLength));
      result3 += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result + result1 + result2 + result3;
  }
  document.getElementById("trackingCode").value = generateString(4);
</script>

<script type="text/javascript">
  function readURL(input) {
    var screenshot = document.getElementById("screenshot").value;
        var idxDot = screenshot.lastIndexOf(".") + 1;
        var extFile = screenshot.substr(idxDot, screenshot.length).toLowerCase();
        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
            //TO DO
        }else{
            alert("Only jpg/jpeg and png files are allowed!");
        }
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>


<script>
  function showReference() {
    var selectedValue = document.getElementById("paymentSelection").value;
    var referenceNumberField = document.getElementById("referenceNumberField");
    var screenshotField = document.getElementById("screenshotField");

    if (selectedValue == "Gcash") {
      referenceNumberField.style.visibility = "visible";
      screenshotField.style.visibility = "visible";
      document.getElementById("referenceNumber").required = true;
      document.getElementById("screenshot").required = true;
    } else {
      referenceNumberField.style.visibility = "hidden";
      screenshotField.style.visibility = "hidden";
      document.getElementById("referenceNumber").required = false;
      document.getElementById("screenshot").required = false;
    }
  }
</script>

<script>
    function showRequest() {
      var selectedValue = document.getElementById("exampleFormControlSelect1").value;
      var payment = document.getElementById("payment");

      if (selectedValue == "Certificate of Indigency") {
        payment.style.visibility = "hidden";
        document.getElementById("payment").required = false;
      } else {
        payment.style.visibility = "visible";
        document.getElementById("payment").required = true;
      }
    }
  </script>

<script>
    function showPurpose() {
      var selectedValue = document.getElementById("form6Example4").value;
      var otherPurpose = document.getElementById("otherPurpose");

      if (selectedValue == "Others please specify") {
        otherPurpose.style.visibility = "visible";
        document.getElementById("otherPurpose").required = true;
      } else {
        otherPurpose.style.visibility = "hidden";
        document.getElementById("otherPurpose").required = false;
      }
    }
  </script>
@include('partials.footer')
