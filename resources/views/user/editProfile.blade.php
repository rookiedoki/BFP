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
          <li><a class="nav-link scrollto active" href="/home" style="text-decoration:none">Home</a></li>

          <li class="dropdown"><a href="#"> <img src="{{auth()->user()->adminResidents->resident_image ? asset ('storage/' .auth()->user()->adminResidents->resident_image ) : asset('/storage/no/-image.png')}}" alt=""  class="authimg"></a>
              <ul>
                <li><a class="dropdown" href="/myProfile" style="text-decoration:none">My Profile</a></li>
                <li><a class="dropdown" href="/userProfiling" style="text-decoration:none">Profiling</a></li>
                <li><form action="/logout" method="POST">
                  @csrf
                  <a> <button class="dropdown" type="submit" style="text-decoration:none; background:none; border:none">Logout</button></a>
                  </form></li>
              </ul>
            </ul>
          </li>
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
          <h2><center>Edit Profile</center></h2>
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

  <form  method="POST" enctype="multipart/form-data"  action="/updateProfile"  >
    @csrf
    @method('PUT')
  <div class="container mx-auto my-5 p-5">
      <div class="md:flex no-wrap md:-mx-2 ">
          <!-- Left Side -->
          <div class="w-full md:w-3/12 md:mx-2">
              <!-- Profile Card -->
              <div class="bg-white p-3  ">
                  <div class="image overflow-hidden center-block">
                    <img class="preview" id="preview" src="{{$profile->resident_image ? asset ('storage/' .$profile->resident_image) : asset('/storage/no/-image.png')}}" style="width:280px; height:250px" />
                    <input type="file"  name="resident_image" id="resident_image2" value="{{$profile->resident_image}}" >
                    <input type="hidden"  name="old_resident_image" id="old_resident_image" value="{{$profile->resident_image}}" >
                    <button type="submit" class="btn btn-primary buttonn h3"  >Save</button>
                  </div>
              </div>
              <!-- End of profile card -->
              <div class="my-4"></div>

          </div>
          <!-- Right Side -->
          <div class="w-full md:w-9/12 mx-2 h-64">
              <!-- Profile tab -->
              <!-- About Section -->


                <div class="mx-auto text-center my-4">
              
                    @if(session()->has('message'))
                    <div class="alert" id="alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
        
                  </div>
                  @endif
                  </div>
            <body >

                       
        
                        <div class="col-md-4 form-group">
                          <label class="h5">First Name</label>
                          <input type="text" name="first_name" class="form-control" value="{{$profile->first_name}}">
                          @Error('first_name')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                        </div>
                        <div class="col-md-4 form-group">
                          <label class="h5">Middle Name</label>
                          <input type="text"  name="middle_name" class="form-control" value="{{$profile->middle_name}}">
                          @Error('middle_name')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                        </div>
              
                        <div class="col-md-4 form-group">
                          <label class="h5">Last Name</label>
                          <input type="text"  name="last_name" class="form-control" value="{{$profile->last_name}}">
                          @Error('last_name')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                        </div>
              
  
                      <div class="form-group col-md-4">
                        <label class="h5">Nickname</label>
                        <input type="text"  name="nickname" class="form-control" value="{{$profile->nickname}}">
                        @Error('nickname')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                      </div>
              
                      <div class="form-group col-md-4">
                        <label class="h5">Place of Birth</label>
                        <input type="text" name="place_of_birth" class="form-control" value="{{$profile->place_of_birth}}">
                        @Error('place_of_birth')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                      </div>
              
                      <div class="form-group col-md-4">
                        <label class="h5">Birthdate</label>
                        <input type="text" name="birthdate" class="form-control" value="{{$profile->birthdate}}">
                        @Error('birthdate')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                      </div>
 
              
                    <div class="form-group col-md-4">
                      <label class="h5">Age</label>
                      <input type="text" name="age" class="form-control" value="{{$profile->age}}">
                      @Error('age')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                      @enderror
                    </div>
              
                    <div class="form-group col-md-4">
                      <label class="h5">Civil Status</label>
                      <select class="form-control" name="civil_status" value="{{$profile->civil_status}}" required autocomplete="voter_status">
                        <option value="Single"{{$profile->civil_status=="Single" ? 'selected' :''}}>Single</option>
                        <option value="Married"{{$profile->civil_status=="Married" ? 'selected' :''}}>Married</option>
                        <option value="Widowed"{{$profile->civil_status=="Widowed" ? 'selected' :''}}>Widowed</option>
                        <option value="Divorced"{{$profile->civil_status=="Divorced" ? 'selected' :''}}>Divorced</option>
                        <option value="Separated"{{$profile->civil_status=="Separated" ? 'selected' :''}}>Separated</option>
                        <option value="Annuled"{{$profile->civil_status=="Annuled" ? 'selected' :''}}>Annuled</option>
                        <option value="Live-In"{{$profile->civil_status=="Live-In" ? 'selected' :''}}>Live-In</option>
                    </select>
                      @Error('civil_status')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                    </div>
              
                    <div class="form-group col-md-4">
                      <label class="h5">Gender</label>
                      <select class="form-control" id="gender"name="gender" required autocomplete="gender">
                        <option value="Male"{{$profile->gender=="Male" ? 'selected' :''}}>Male</option>
                        <option value="Female"{{$profile->gender=="Female" ? 'selected' :''}}>Female</option>
                    </select>
                    @Error('gender')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                    </div>
              
                    


                  <div class="form-group col-md-3">
                    <label class="h5">Street</label>
                    <input type="text"  name="street" class="form-control" value="{{$profile->street}}">
                    @Error('street')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                  </div>
                  <div class="form-group col-md-3">
                    <label class="h5">House No.</label>
                    <input type="text"  name='house_no' class="form-control" value="{{$profile->house_no}}">
                    @Error('house_no')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                  </div>
              
                  <div class="form-group col-md-3">
                    <label class="h5">Voter Status</label>
                    <select class="form-control" id="voter_status"name="voter_status" required autocomplete="voter_status">
                      <option value="Voter"{{$profile->voter_status=="Voter" ? 'selected' :''}}>Voter</option>
                      <option value="Non Voter"{{$profile->voter_status=="Non Voter" ? 'selected' :''}}>Non Voter</option>
                  </select>
                  @Error('voter_status')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                  </div>


                  <div class="form-group col-md-3">
                    <label class="h5">Citizenship</label>
                    <input type="text"  name="citizenship" class="form-control" value="{{$profile->citizenship}}">
                    @Error('citizenship')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                  </div>
              
                  <div class="form-group col-md-3">
                    <label class="h5">Contact Number</label>
                    <input type="text"  name="phone_number" class="form-control" value="{{$profile->phone_number}}">
                    @Error('phone_number')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                  </div>
              
                  <div class="form-group col-md-3">
                    <label class="h5">Occupation</label>
                    <input type="text" id="occupation"  name="occupation" class="form-control" value="{{$profile->occupation}}">
                    @Error('occupation')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                  </div>


                  <div class="form-group col-md-3">
                    <label class="h5">Work Status</label>
                    <select class="form-control" name="work_status" value="{{old('work_status')}}" required autocomplete="work_status" value="{{old('work_status')}}">
                      <option value="Employed"{{$profile->work_status=="Employed" ? 'selected' :''}}>Employed</option>
                      <option value="Unemployed"{{$profile->work_status=="Unemployed" ? 'selected' :''}}>Unemployed</option>
                      <option value="Self-Employed"{{$profile->work_status=="Self-Employed" ? 'selected' :''}}>Self Employed</option>
                      <option value="N/A"{{$profile->work_status=="N/A" ? 'selected' :''}}>N/A</option>
                   </select>
                    @Error('work_status')
                          <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                         @enderror
                  </div>
  
                    <div class="form-group col-md-3">
                      <label class="h5">Email Address</label>
                      <input type="text" name="email" class="form-control" value="{{$profile->email}}">
                      @Error('email')
                            <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                           @enderror
                    </div>
                  </div></div></div>

                        <input type="hidden"  name="password" class="form-control" value="{{$profile->password}}">

                      </form>
              
                    </div>
                  </div>
        </form> 
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

