<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">

  <head>
    <title>WBMS | Paloyon Oriental</title>
    @foreach($setting as $settings)
    <link rel="icon" href="{{$settings->barangay_logo ? asset ('storage/' .$settings->barangay_logo) : asset('/storage/no/-image.png')}}">
    @endforeach
    <link href="{{url('assets/css/User/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    {{-- <link href="{{url('assets/css/User/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/User/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/User/animation.css')}}" rel="stylesheet" type="text/css"> --}}
  </head>
  <style>
    #alert-positive {
    background: rgb(118, 240, 149);
    top: 10px;
    border-left-color: rgb(1, 241, 61);
    border-left-width: 10px;
    border-radius: 4px;
    color: black;
    font-size: 13px;
    }
    .navbar{
        margin-bottom: 0 !important;
    }
    .ftco-section{
        font-size: 15px !important;
    }
    input, textarea, select{
        font-size: 15px !important;
    }
    button{
        padding: 1% !important;
        width: auto !important;
        font-size: 15px !important;
    }
  </style>
  @include('partials.header')
<!--Header_section-->
  <!-- ======= Header ======= -->
  <header id="header2" class="fixed-top">
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

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2 class="fw-bold text-uppercase"><center>Report a Blotter</center></h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
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

    <section class="inner-page">
        <form action="/requestBlotter/send" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-10">
                       <div class="col-lg-12 col-md-12">
                        <p style="font-size: 10pt; font-style: italic;">**Please be aware that any information you provide must be valid; if you provide false information, you will be held accountable for the consequences.</p>
                            <div class="row">
                                <div class="col-md-6 pt-3">
                                  <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" name="complainant" placeholder="Complainant's Name" required>
                                  </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="input-group">
                                      <span class="input-group-text" id="basic-addon2"><label class="border-end country-code px-2">+63</label></span>
                                      <input  id="ec-mobile-number" class="form-control" aria-describedby="emailHelp" pattern="[0-9]{10}" name="phone_number1" type="tel" placeholder="9123456789" required>
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 pt-3">
                                  <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-person-square"></i></span>
                                    <input type="text" class="form-control" id="resName" placeholder="Respondent's Name" name="respondent">
                                  </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                  <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><label class="border-end country-code px-2">+63</label></span>
                                    <input  id="ec-mobile-number" class="form-control" aria-describedby="emailHelp" pattern="[[0-9]{1,10}" name="phone_number2" type="tel" placeholder="9123456789">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 pt-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2"><i class="bi bi-people-fill"></i></span>
                                        <input type="text" class="form-control" placeholder="Name of the Victim/Witness" name="victim" required>
                                      </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="input-group">
                                      <span class="input-group-text" id="basic-addon2"><i class="bi bi-geo-alt-fill"></i></span>
                                      <input type="text" class="form-control" placeholder="Location of the Incident" name="location" required>
                                    </div>
                                  </div>
                              </div>
                                <div class="row">
                                <div class="col-md-6 pt-3">
                                  <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-calendar-plus-fill"></i></span>
                                    <input type="date" class="form-control" name="date" required>
                                  </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                  <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-clock-fill"></i></span>
                                    <input type="time" class="form-control" name="time">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pt-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-image-fill"></i></span>
                                    <input type="file" name="proof" class="form-control" id="proof" multiple="multiple" />
                                    @Error('proof')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                  <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-caret-down-fill"></i></span>
                                        <select class="form-select" name="action" id="formalComplaint" onchange="showAction();" required>
                                            <option selected>-- Request action to be taken --</option>
                                            <option class="action" value="Summon" id="payment">Summon</option>
                                            <option class="action" value="Record Only">Record Only</option>
                                          </select>
                                    </div>
                                    {{-- <span class="input-group-text" id="basic-addon2"><i class="bi bi-telephone-fill"></i></span>
                                    <input type="tel" class="form-control" name="phone_number" placeholder="Enter your phone number here ..." required> --}}
                                </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12 pt-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-pen-fill"></i></span>
                                  <textarea class="form-control" placeholder="Enter Accusation and Complete Incident Details here... (WHAT, WHY and HOW DID IT HAPPEN?)" name="details" required></textarea>
                                </div>
                              </div>
                            </div>

                            <div class="row" style="padding-top: 10px;">
                                <div class="col-md-12" id="actionField" style="visibility: hidden;">
                                    <div>
                                        <p style="font-size: 10pt; font-style: italic;">If you decide to summon the defendant/respondent, you must appear in barangay hall to discuss your formal complaint in more detail. The barangay will notify you once they have taken notice of your problem. Failure to report in person will disregard your request.</p>
                                    </div>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><h4>Respondent's Current Address<span style="color:red;">*</span></h4></span>
                                  <input type="text" name="resCA" id="necessaryField" class="form-control" required/>
                                </div>
                                @Error('actionField')
                                    <p style="color: red; font-weight:bold;">{{$message}}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="row" style="padding-top: 10px;">
                                <div class="col-md-12" id="actionField2" style="visibility: hidden;">
                                <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><h4>Complainant's Current Address<span style="color:red;">*</span></h4></span>
                                  <input type="text" name="comCA" id="necessaryField2" class="form-control" required/>
                                </div>
                                @Error('actionField2')
                                    <p style="color: red; font-weight:bold;">{{$message}}</p>
                                @enderror
                                </div>
                            </div>

                              <div class="col-auto pt-3">
                                <center>
                               <button type="text" name="submit" class="btn btn-primary">SUBMIT</button>
                                </center>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </section>
  </main><!-- End #main -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
    function showAction() {
      var selectedValue = document.getElementById("formalComplaint").value;
      var actionField = document.getElementById("actionField");
      var actionField2 = document.getElementById("actionField2");

      if (selectedValue == "Summon") {
        actionField.style.visibility = "visible";
        actionField2.style.visibility = "visible";
        document.getElementById("necessaryField").required = true;
        document.getElementById("resName").required = true;
        document.getElementById("resNum").required = true;
        document.getElementById("necessaryField2").required = true;
      } else {
        actionField.style.visibility = "hidden";
        actionField2.style.visibility = "hidden";
        document.getElementById("necessaryField").required = false;
        document.getElementById("necessaryField2").required = false;
        document.getElementById("resName").required = false;
        document.getElementById("resNum").required = false;

      }
    }
  </script>


@include('partials.footer')
