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

          <li class="dropdown"><a href="#" style="padding: 10px;"> <img src="{{auth()->user()->adminResidents->resident_image ? asset ('storage/' .auth()->user()->adminResidents->resident_image ) : asset('/storage/no/-image.png')}}" alt=""  class="authimg"></a>
              <ul>
                <li><a class="dropdown" href="/myProfile" style="text-decoration:none; color:black;">My Profile</a></li>
                <li><a class="dropdown" href="/userProfiling" style="text-decoration:none; color:black;">Profiling</a></li>
                <li><form action="/logout" method="POST">
                  @csrf
                  <a> <button class="dropdown" type="submit" style="text-decoration:none; background:none; border:none; color:black;">Logout</button></a></li></form>
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
        <h2><center>Vaccination</center></h2>
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


                  <h2>Covid 19 Vaccinated</h2>
                  <h5><p>Reminder: Do not fillup this form if not applicable.</p></h5>
                  <div class="row justify-content-center">
                    <div class="col-md-12">
                      <div class="card shadow mb-4">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="form-group col-md-4">
                              <label class="labelImage h4">Status<span style="color: red">*</span></label>
                                    <select class="form-control" id="dose" value="{{old('dose')}}" required autocomplete="dose">
                                      <option value="">-Please Select-</option>
                                      <option value="Partially_Vaccinated">Partially Vaccinated</option>
                                      <option value="Fully_Vaccinated">Fully Vaccinated</option>
                                      <option value="With_Booster">With Booster</option>
                                  </select>
                                @Error('dose')
                                  <p class="text-danger text-xl mt-2">{{$message}}</p>
                                @enderror
                            </div>
                            <form action="/storeVaccinationPartial" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div id="Partially_Vaccinated" class="data">
                                <input type="hidden"  name="name" value="{{ ucfirst(auth()->user()->adminResidents->first_name)}}, {{ucfirst(auth()->user()->adminResidents->last_name)}}  {{ucfirst(substr(auth()->user()->adminResidents->middle_name, 0,1)) }}.">
                                <input type="hidden"  name="age" value="{{auth()->user()->adminResidents->age}}">
                                <input type="hidden"  name="birthdate" value="{{auth()->user()->adminResidents->birthdate}}">
                                <input type="hidden"  name="status" value="0">
                                <input type="hidden"  name="dose" value="Partially Vaccinated">
                        <div class="form-group col-md-4">
                          <label class="labelImage h4">Type Vaccine<span style="color: red">*</span></label>
                                <select class="form-control" name="vaccine_type" value="{{old('vaccine_type')}}" value="{{old('vaccine_type')}}" required autocomplete="vaccine_type">
                                    <option value="">-Please Select-</option>
                                    <option value="Pfizer">Pfizer</option>
                                    <option value="AstraZeneca">AstraZeneca</option>
                                    <option value="Sinovac">Sinovac</option>
                                    <option value="Moderna">Moderna</option>
                                    <option value="Janssen">Janssen</option>
                                </select>
                                @Error('vaccine_type')
                                <p class="text-danger text-xl mt-2">{{$message}}</p>
                                @enderror
                          </div>
                              <div class="form-group col-md-4">
                                <label class="labelImage h4">Vaccination Address<span style="color: red">*</span></label>
                                <input type="text"  name="address" class="form-control" value="{{old('address')}}" required autocomplete="address">
                                @Error('address')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                                 @enderror
                              </div>

                                <div class="form-group col-md-4" id="date_first">
                                  <label class="labelImage h4">Date of First Dose<span style="color: red">*</span></label>
                                          <input type="date"  name="date_first" class="form-control"  placeholder="" value="{{old('date_first')}}" required autocomplete="date_first">
                                          @Error('date_first')
                                              <p class="text-danger text-xs mt-1">{{$message}}</p>
                                          @enderror
                                </div>

                                  <div class="form-group">
                                      <label class="labelImage h4">Vaccine Card Image<span style="color: red">*</span></label>
                                      <img class="preview" id="prview"/>
                                      <input type="file"  name="vaccine_image" id="vaccine_image" >

                                        @Error('vaccine_image')
                                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                                        @enderror
                                  </div>
                                  <input type="hidden"  name="booster_image" value="">
                                  <br>
                                  <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary buttonn">Save</button>
                                </div>
                            </div>

                       </form>

                       <form action="/storeVaccinationFully" method="POST" enctype="multipart/form-data">
                        @csrf
                              <div id="Fully_Vaccinated" class="data">

                                <input type="hidden"  name="name" value="{{ ucfirst(auth()->user()->adminResidents->first_name)}}, {{ucfirst(auth()->user()->adminResidents->last_name)}}  {{ucfirst(substr(auth()->user()->adminResidents->middle_name, 0,1)) }}.">
                                <input type="hidden"  name="age" value="{{auth()->user()->adminResidents->age}}">
                                <input type="hidden"  name="birthdate" value="{{auth()->user()->adminResidents->birthdate}}">
                                <input type="hidden"  name="status" value="0">
                                <input type="hidden"  name="dose" value="Fully Vaccinated">
                        <div class="form-group col-md-4">
                          <label class="labelImage h4">Type Vaccine<span style="color: red">*</span></label>
                                <select class="form-control" name="vaccine_type" value="{{old('vaccine_type')}}" required autocomplete="vaccine_type">
                                    <option value="">-Please Select-</option>
                                    <option value="Pfizer">Pfizer</option>
                                    <option value="AstraZeneca">AstraZeneca</option>
                                    <option value="Sinovac">Sinovac</option>
                                    <option value="Moderna">Moderna</option>
                                    <option value="Janssen">Janssen</option>
                                </select>
                                @Error('vaccine_type')
                                <p class="text-danger text-xl mt-2">{{$message}}</p>
                                @enderror
                          </div>
                              <div class="form-group col-md-4">
                                <label class="labelImage h4">Vaccinaton Address<span style="color: red">*</span></label>
                                <input type="text"  name="address" class="form-control" value="{{old('address')}}" required autocomplete="address">
                                @Error('address')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                                 @enderror
                              </div>
                                  <div class="form-group col-md-4" id="date_first">
                                    <label class="labelImage h4">Date of First Dose<span style="color: red">*</span></label>
                                          <input type="date"  name="date_first" class="form-control" placeholder="" value="{{old('date_first')}}" required autocomplete="date_first">
                                          @Error('date_first')
                                              <p class="text-danger text-xs mt-1">{{$message}}</p>
                                          @enderror
                                  </div>

                                  <div class="form-group col-md-4" id="date_second">
                                    <label class="labelImage h4">Date of Second Dose<span style="color: red">*</span></label>
                                      <input type="date"  name="date_second" class="form-control" value="{{old('date_second')}}" required autocomplete="date_second" >
                                        @Error('date_second')
                                          <p class="text-danger text-xs mt-1">{{$message}}</p>
                                        @enderror
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label class="labelImage h4">Vaccine Card Image<span style="color: red">*</span></label>
                                    <img class="preview" id="prview"/>
                                    <input type="file"  name="vaccine_image" id="vaccine_image" value="{{old('vaccine_image')}}" required autocomplete="vaccine_image">
                                      @Error('vaccine_image')
                                      <p class="text-danger text-xs mt-1">{{$message}}</p>
                                      @enderror
                                </div>

                                <input type="hidden"  name="booster_image" value="">
                                <br>
                                <button type="submit" class="btn btn-primary buttonn"  >Save</button>
                              </div>
                        </form>

                        <form action="/storeVaccinationBooster" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div id="With_Booster" class="data">
                                  <input type="hidden"  name="name" value="{{ ucfirst(auth()->user()->adminResidents->first_name)}}, {{ucfirst(auth()->user()->adminResidents->last_name)}}  {{ucfirst(substr(auth()->user()->adminResidents->middle_name, 0,1)) }}.">
                                  <input type="hidden"  name="age" value="{{auth()->user()->adminResidents->age}}">
                                  <input type="hidden"  name="birthdate" value="{{auth()->user()->adminResidents->birthdate}}">
                                  <input type="hidden"  name="status" value="0">
                                  <input type="hidden"  name="dose" value="With Booster">
                          <div class="form-group col-md-4">
                            <label class="labelImage h4">Type of Vaccine<span style="color: red">*</span></label>
                                  <select class="form-control" name="vaccine_type" value="{{old('vaccine_image')}}" required autocomplete="vaccine_image">
                                      <option value="">-Please Select-</option>
                                      <option value="Pfizer">Pfizer</option>
                                      <option value="AstraZeneca">AstraZeneca</option>
                                      <option value="Sinovac">Sinovac</option>
                                      <option value="Moderna">Moderna</option>
                                      <option value="Janssen">Janssen</option>
                                  </select>
                                  @Error('vaccine_type')
                                  <p class="text-danger text-xl mt-2">{{$message}}</p>
                                  @enderror
                            </div>
                                <div class="form-group col-md-4">
                                  <label class="labelImage h4">Vaccination Address<span style="color: red">*</span></label>
                                  <input type="text"  name="address" class="form-control" value="{{old('address')}}" required autocomplete="address">
                                  @Error('address')
                                  <p class="text-danger text-xs mt-1">{{$message}}</p>
                                  @enderror
                                </div>
                                    <div class="form-group col-md-4" id="date_first">
                                      <label class="labelImage h4">Date of First Dose<span style="color: red">*</span></label>
                                              <input type="date"  name="date_first" class="form-control"  value="{{old('date_first')}}" required autocomplete="date_first">
                                                @Error('date_first')
                                                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                                                @enderror
                                    </div>

                                  <div class="form-group col-md-4" id="date_second">
                                    <label class="labelImage h4">Date of Second Dose<span style="color: red">*</span></label>
                                            <input type="date"  name="date_second" class="form-control" value="{{old('date_second')}}" required autocomplete="date_second">
                                              @Error('date_second')
                                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                                              @enderror
                                  </div>



                                      <div class="form-group col-md-4" id="first_booster">
                                        <label class="labelImage h4">1st Booster Type of Vaccine<span style="color: red">*</span></label>
                                              <select class="form-control" name="first_booster" value="{{old('first_booster')}}" required autocomplete="first_booster">
                                                <option value="">-Please Select-</option>
                                                <option value="Pfizer">Pfizer</option>
                                                <option value="AstraZeneca">AstraZeneca</option>
                                                <option value="Sinovac">Sinovac</option>
                                                <option value="Moderna">Moderna</option>
                                                <option value="Janssen">Janssen</option>
                                                <option value="Novavax">Novavax</option>
                                            </select>
                                                @Error('first_booster')
                                                  <p class="text-danger text-xs mt-1">{{$message}}</p>
                                                @enderror
                                      </div>

                                  <div class="form-group col-md-4" id="first_booster_date">
                                    <label class="labelImage h4">Date of 1st Booster<span style="color: red">*</span></label>
                                      <input type="date"  name="first_booster_date" class="form-control" value="{{old('first_booster_date')}}" required autocomplete="first_booster_date">

                                      @Error('first_booster_date')
                                      <p class="text-danger text-xs mt-1">{{$message}}</p>
                                      @enderror
                                  </div>

                              <div class="form-group col-md-4" id="second_booster">
                                <label class="labelImage h4">2nd Booster Type of Vaccine<span style="color: red">*</span></label>
                                    <select class="form-control" name="second_booster" value="{{old('second_booster')}}" required autocomplete="second_booster">
                                      <option value="">-Please Select-</option>
                                      <option value="Pfizer">Pfizer</option>
                                      <option value="AstraZeneca">AstraZeneca</option>
                                      <option value="Sinovac">Sinovac</option>
                                      <option value="Moderna">Moderna</option>
                                      <option value="Janssen">Janssen</option>
                                      <option value="Novavax">Novavax</option>
                                  </select>
                                      @Error('second_booster')
                                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                                      @enderror
                            </div>

                            <div class="form-group col-md-4" id="second_booster_date">
                              <label class="labelImage h4">Date of 2nd Booster<span style="color: red">*</span></label>
                              <input type="date"  name="second_booster_date" class="form-control" value="{{old('second_booster_date')}}" required autocomplete="second_booster_date">

                              @Error('second_booster_date')
                              <p class="text-danger text-xs mt-1">{{$message}}</p>
                              @enderror
                          </div>

                              <div class="form-group col-md-4">
                                <label class="labelImage h4">Vaccine Card Image<span style="color: red">*</span></label>
                                  <img class="preview" id="prview"/>
                                  <input type="file"  name="vaccine_image" id="vaccine_image" value="{{old('vaccine_image')}}" required autocomplete="vaccine_image">

                                    @Error('vaccine_image')
                                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                                    @enderror
                              </div>

                          <div class="form-group">
                              <label class="labelImage h4">Booster Card Image<span style="color: red">*</span></label>
                              <img class="preview" id="prview"/>
                              <input type="file"  name="booster_image" id="booster_image">

                                @Error('booster_image')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <br>

                        <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary buttonn">Save</button>

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
