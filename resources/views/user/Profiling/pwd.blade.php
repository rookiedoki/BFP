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
    button{
        width: 20% !important;
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
          <li><a class="nav-link scrollto" href="/userProfiling" style="text-decoration:none; padding: 10px;">Vaccination</a></li>
          <li><a class="nav-link scrollto" href="/pwd" style="text-decoration:none; padding: 10px;">PWDs</a></li>
          @if(auth()->user()->adminResidents->age>='60')
          <li><a class="nav-link   scrollto" href="/senior" style="text-decoration:none; padding: 10px;">Senior Citizen</a></li>
          @endif
          @if(auth()->user()->adminResidents->gender=='Female')
          <li><a class="nav-link scrollto" href="/pregnant" style="text-decoration:none; padding: 10px;">Pregnant</a></li>
          @endif

          <li class="dropdown"><a href="#" style=" padding: 10px;"> <img src="{{auth()->user()->adminResidents->resident_image ? asset ('storage/' .auth()->user()->adminResidents->resident_image ) : asset('/storage/no/-image.png')}}" alt=""  class="authimg"></a>
              <ul>
                <li><a class="dropdown" href="/myProfile" style="text-decoration:none; color:black;">My Profile</a></li>
                <li><a class="dropdown" href="/userProfiling" style="text-decoration:none; color:black;">Profiling</a></li>
                <li><form action="/logout" method="POST">
                  @csrf
                  <a> <button class="dropdown" type="submit" style="text-decoration:none; color:black; background:none; border:none">Logout</button></a>
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
        <h2><center>PWDs</center></h2>
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
      <form action="/storePWD" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="container">

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

    <h2>PWDs</h2>
    <h5><p>Reminder: Do not fillup this form if not applicable.</p></h5>
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card shadow mb-4">
          <div class="card-header">
          </div>
          <div class="card-body">

              <div class="h2 text-center">TYPE OF DISABILITY </div>
              <div class="form-row">
                        <input type="hidden"  name="name" value="{{ ucfirst(auth()->user()->adminResidents->last_name)}}, {{ucfirst(auth()->user()->adminResidents->first_name)}}  {{ucfirst(substr(auth()->user()->adminResidents->middle_name, 0,1)) }}.">
                          <input type="hidden"  name="sex" value="{{auth()->user()->adminResidents->age}}">
                          <input type="hidden"  name="civil_status" value="{{auth()->user()->adminResidents->civil_status}}">
                          <input type="hidden"  name="birthdate" value="{{auth()->user()->adminResidents->birthdate}}">
                          <input type="hidden"  name="status" value="0">

                        <div class="form-group col-md-3">
                          <input type="checkbox" value="Deaf or Hard of Hearing" name="type_disability[]" >
                          <label class="labelImage h4" for="inputPassword4">Deaf or Hard of Hearing</label>

                        </div>
                <div class="form-group col-md-3">
                  <input type="checkbox" value="Intellectual Disability" name="type_disability[]" >
                  <label class="labelImage h4" for="inputPassword4">Intellectual Disability</label>
                </div>

                <div class="form-group col-md-3">
                  <input type="checkbox" value="Learning Disability" name="type_disability[]" >
                  <label class="labelImage h4" for="inputPassword4">Learning Disability</label>

                </div>

                <div class="form-group col-md-3">
                  <input type="checkbox" value="Rare Disease (RA10747)" name="type_disability[]" >
                  <label class="labelImage h4" for="inputPassword4">Rare Disease (RA10747)</label>
                </div>
            </div>


              <div class="form-row">
                <div class="form-group col-md-3">
                  <input type="checkbox" value="Mental Disability" name="type_disability[]" >
                  <label class="labelImage h4" for="inputPassword4">Mental Disability</label>
                </div>


                <div class="form-group col-md-3">
                  <input type="checkbox" value="Physical Disability (Orthopedic)" name="type_disability[]" >
                  <label class="labelImage h4" for="inputPassword4">Physical Disability (Orthopedic)</label>
                </div>


                <div class="form-group col-md-3">
                  <input type="checkbox" value="Psychosocial Disability" name="type_disability[]" >
                  <label class="labelImage h4" for="inputPassword4">Psychosocial Disability</label>
                </div>

                <div class="form-group col-md-3">
                  <input type="checkbox" value="Speech and Language Impairment" name="type_disability[]" >
                  <label class="labelImage h4" for="inputPassword4">Speech and Language Impairment</label>
                </div>

                <div class="form-group col-md-3">
                  <input type="checkbox" value="Visual Disability" name="type_disability[]" >
                  <label class="labelImage h4" for="inputPassword4">Visual Disability</label>
                </div>

                <div class="form-group col-md-3">
                  <input type="checkbox" value="Cancer (RA11215)" name="type_disability[]" >
                  <label class="labelImage h4" for="inputPassword4">Cancer (RA11215)
                  </label>
                </div>

              </div>

                <div class="h2 text-center">CAUSE OF DISABILITY </div>
              <div class="form-row">
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <input type="checkbox" value="Congenital / Inborn" name="cause_disablity[]" >
                  <label class="labelImage h4" for="inputPassword4">Congenital / Inborn</label>

                </div>


                <div class="form-group col-md-3">
                  <input type="checkbox" value="Autism" name="cause_disablity[]" >
                  <label class="labelImage h4" for="inputPassword4">Autism</label>

                </div>


                <div class="form-group col-md-3">
                  <input type="checkbox" value="ADHD" name="cause_disablity[]" >
                  <label class="labelImage h4" for="inputPassword4">ADHD</label>

                </div>

                <div class="form-group col-md-3">
                  <input type="checkbox" value="Cerebral Palsy" name="cause_disablity[]" >
                  <label class="labelImage h4" for="inputPassword4">Cerebral Palsy
                  </label>

                </div>

                <div class="form-group col-md-3">
                  <input type="checkbox" value="Down Syndrome" name="cause_disablity[]" >
                  <label class="labelImage h4"for="inputPassword4">Down Syndrome

                  </label>

                </div>

                <div class="form-group col-md-3">
                  <input type="checkbox" value="Chronic Illness" name="cause_disablity[]" >
                  <label class="labelImage h4" for="inputPassword4">Chronic Illness
                  </label>

                </div>

                <div class="form-group col-md-3">
                  <input type="checkbox" value="Cerebral Palsy" name="cause_disablity[]" >
                  <label class="labelImage h4" for="inputPassword4">Cerebral Palsy</label>

                </div>
                <div class="form-group col-md-3">
                  <input type="checkbox" value="Injury" name="cause_disablity[]" >
                  <label class="labelImage h4" for="inputPassword4">Injury
                  </label>

                </div>
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary buttonn">Save</button>
              </div>
              </div>

            </div>
          </div>
       </div>
     </div>
 </div>
</div>
</div>
            </form>
          </section>

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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
        $(document).ready(function(){
          $("#dose").on('change', function(){
            $(".data").hide();
            $("#" + $(this).val()).fadeIn(700);
          }).change();
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
