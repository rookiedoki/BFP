<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">

  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    .alert {

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
          <li><a class="nav-link scrollto" href="/home" style="text-decoration:none; padding: 10px;">Home</a></li>

          <li class="dropdown"><a href="#" style="padding: 10px;"> <img src="{{auth()->user()->adminResidents->resident_image ? asset ('storage/' .auth()->user()->adminResidents->resident_image ) : asset('/storage/no/-image.png')}}" alt=""  class="authimg"></a>
              <ul>
                <li><a class="dropdown" href="/myProfile" style="text-decoration:none; color: black;">My Profile</a></li>
                <li><a class="dropdown" href="/userProfiling" style="text-decoration:none; color: black;">Profiling</a></li>
                <li><form action="/logout" method="POST">
                  @csrf
                  <a> <button class="dropdown" type="submit" style="text-decoration:none; background:none; border:none; color:black;">Logout</button></a>
                  </form></li>
              </ul>
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
          <h2><center>Profile</center></h2>
        </div>
      </section>
      <!-- End Breadcrumbs -->



<style>
  :root {
      --main-color: #4a76a8;
  }

  .bg-main-color {
      background-color: var(--main-color);
  }

  .text-main-color {
      color: var(--main-color);
  }

  .border-main-color {
      border-color: var(--main-color);
  }
</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



<div class="bg-gray-100">

  <!-- End of Navbar -->

  <div class="container mx-auto  p-5">
    @if(session()->has('message'))
<div class="alert alert-primary" id="alert">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}

</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
<ul class="border border-t-0 border-black-400 rounded-b bg-black-100 px-4 py-text-red-700">
  @foreach($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
</div>
@endif
      <div class="md:flex no-wrap md:-mx-2 ">
          <!-- Left Side -->
          <div class="w-full md:w-3/12 md:mx-2">
              <!-- Profile Card -->
              <div class="bg-white p-3  ">
                  <div class="image overflow-hidden center-block">
                   <img src="{{auth()->user()->adminResidents->resident_image ? asset ('storage/' .auth()->user()->adminResidents->resident_image ) : asset('/storage/no/-image.png')}}" style="width:280px; height:250px">
                   <h1 class="text-gray-900 font-bold leading-8 my-1 text-center h3">{{ ucfirst($profile->last_name)}}, {{ucfirst($profile->first_name)}}  {{ucfirst(substr($profile->last_name, 0,1)) }}.</h1>
                   <a href="/editProfile" class="btn btn-primary buttonn"  ><i class="fas fa-pencil h6" ></i><span >Edit Profile</span></a>

                </div>


              </div>
              <!-- End of profile card -->
              <div class="my-4"></div>

          </div>
          <!-- Right Side -->
          <div class="w-full md:w-9/12 mx-2 h-64">
              <!-- Profile tab -->
              <!-- About Section -->
              <div class="bg-white p-3 shadow-sm rounded-sm">
                  <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                      <span clas="text-green-500">
                          <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" h4 />
                          </svg>
                      </span>
                      <span class="tracking-wide h3">Basic Information</span>
                  </div>
                  <div class="text-gray-700">
                      <div class="grid md:grid-cols-2 text-sm">
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 h4 font-semibold">First Name</div>
                              <div class="px-4 py-2 h4">{{$profile->first_name}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 h4 font-semibold">Gender</div>
                              <div class="px-4 py-2 h4">{{$profile->gender}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 h4 font-semibold">Middle Name</div>
                              <div class="px-4 py-2 h4">{{$profile->middle_name}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 h4 font-semibold">Age</div>
                              <div class="px-4 py-2 h4 ">{{$profile->age}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 h4 font-semibold">Last Name</div>
                              <div class="px-4 py-2 h4">{{$profile->last_name}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 h4 font-semibold">Birthday</div>
                              <div class="px-4 py-2 h4">{{$profile->birthdate}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 h4 font-semibold">Nickname</div>
                              <div class="px-4 py-2 h4 ">
                                  <a class="text-blue-800" href="mailto:jane@example.com">jane@example.com</a>
                              </div>
                          </div>
                          <div class="grid grid-cols-2">
                              <div class="px-4 py-2 h4 font-semibold">Civil Status</div>
                              <div class="px-4 py-2 h4 ">{{$profile->civil_status}}</div>
                          </div>
                          <div class="grid grid-cols-2">
                            <div class="px-4 py-2 h4 font-semibold">Work Status</div>
                            <div class="px-4 py-2 h4 ">{{$profile->occupation}}</div>
                        </div>
                        <div class="grid grid-cols-2">
                          <div class="px-4 py-2 h4 font-semibold">Occupation</div>
                          <div class="px-4 py-2 h4 ">{{$profile->occupation}}</div>
                      </div>
                      </div>
                  </div>

              </div>
              <!-- End of about section -->

              <div class="my-4"></div>

              <!-- Experience and education -->
              <div class="bg-white p-3 shadow-sm rounded-sm">

                  <div class="grid grid-cols-2">
                      <div>
                          <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                              <span clas="text-green-500">
                                  <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                  </svg>
                              </span>
                              <span class="tracking-wide h3 ">Contact Information</span>
                          </div>
                          <ul class="list-inside space-y-2">
                              <li>
                                  <div class="text-teal-600 h4">Email Address</div>
                                  <div class="text-gray-500 h4 ">{{$profile->email}}</div>
                              </li>
                              <li>
                                  <div class="text-teal-600 h4">Phone Number</div>
                                  <div class="text-gray-500  h4">{{$profile->phone_number}}</div>
                              </li>
                          </ul>
                      </div>
                      <div>
                          <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                            <i class="fas fa-home h4"></i>
                              <span class="tracking-wide h3 ">House Information</span>
                          </div>
                          <ul class="list-inside space-y-2">
                              <li>
                                  <div class="text-teal-600 h4">House Number</div>
                                  <div class="text-gray-500 h4">{{$profile->house_no}}</div>
                              </li>
                              <li>
                                  <div class="text-teal-600 h4">Street</div>
                                  <div class="text-gray-500 h4">{{$profile->street}}</div>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <!-- End of Experience and education grid -->
              </div>
              <!-- End of profile tab -->
          </div>
      </div>
  </div>
</div>
<script type="text/javascript">

    $("document").ready(function()
    {
      setTimeout(function()
        {
          $("div.alert").remove();
        },3000);
    });
 </script>
<script src="assets2/vendor/aos/aos.js"></script>
<script src="assets2/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets2/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets2/vendor/php-email-form/validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<!-- Template Main JS File -->
<script src="assets2/js/main.js"></script>

