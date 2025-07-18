@extends('layouts.claimsignup')
@section('content')
<style>
  #frname{
    color: red;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@if ($message = Session::get('success'))
<div class="alert alert-success"> 
  <p>{{ $message }}</p>
</div>
@endif
<div class="container register">

  <div class="row" style="width:110%">
    <div class="col-md-3 register-left">
      
      <img src="{{ url(asset('images/pic.png')) }}"  alt=""/> 
      <h4 style="
      padding-top: 20px;
      padding-bottom: 20px;
      ">If you have an Account</h4>
      <a class="login100-form-btnnew1" title="Login" href="{{ route('login') }}">{{ __('Login') }}</a>
      <img src="{{ url(asset('images/logo1.png')) }}"  alt=""/> 
    </div>
    <div class="col-md-9 register-right">


      <form action="{{ route('claimantregister.store') }}" method="POST" id="claimantregisterform" enctype="multipart/form-data" autocomplete="off">
       {{ csrf_field() }}
       <input type="hidden" required />
       <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

          <h3 class="register-heading">Claimant Registration</h3> 
          <div class="row register-form">
            <div class="col-md-4">
              <div class="form-group" style="color: black; font-weight: bolder;">
               <select class="form-control{{ $errors->has('claimant_type') ? ' is-invalid' : '' }}" name="claimant_type" id="claimant_type"  onchange="claimant_type_select()" style="font-weight: bolder; color:black;">
                <option value="">Select Claimant Type</option>
                @foreach ($claimant_type as $claimant_type)
                <option value="{{ $claimant_type->id }}" {{ $claimant_type->id ==  old('claimant_type') ? 'selected':'' }}> {{$claimant_type->claimant_respondant_type_name}}</option>
                @endforeach
              </select>
              <label class="form-control-placeholder" for="claimant_type" style="
    color: white;
">Claimant Type<span style="color: red">*</span></label> 
              @if ($errors->has('claimant_type'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('claimant_type') }}</strong>
              </span>
              @endif
            </div>
          </div>



          <div class="col-md-4" id="organization_name" style='display:none;'/>
          <div class="form-group"  >
            <input type="text" id="organization_name" class="form-control{{ $errors->has('organization_name') ? ' is-invalid' : '' }}" name="organization_name" id="organization_name_input"  value="{{old('organization_name')}}">
            <label class="form-control-placeholder" for="organization_name" id="org_name_label" style="
    color: white;
">Name of the Government<span style="color: red">*</span></label>
            @if ($errors->has('organization_name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('organization_name') }}</strong>
            </span>
            @endif  


          </div>
        </div>

        <div class="col-md-4" id="govt_name" style='display:none;'/>
        <div class="form-group">
         <input type="text" id="govt_name_input" name=
         "govt_name" class="form-control{{ $errors->has('govt_name') ? ' is-invalid' : '' }}"  value="{{old('govt_name')}}">
         <label class="form-control-placeholder" for="govt_name" id="department_name_label" style="
    color: white;
">Name Of The Department<span style="color: red">*</span></label>
         @if ($errors->has('govt_name'))
         <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('govt_name') }}</strong>
        </span>
        @endif  

      </div>
    </div>

    <div class="col-md-4" id="firstname" style='display:none;'/>
    <div class="form-group">
      <input type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"  name="firstname" id="firstname_input"  / value="{{old('firstname')}}">
      <label class="form-control-placeholder" for="firstname" id="firstname_label" style="
    color: white;
">Firstname<span style="color: red">*</span></label>
      @if ($errors->has('firstname'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('firstname') }}</strong>
      </span>
      @endif  

    </div>
  </div>
  <div class="col-md-4" id="middlename" style='display:none;'/>
  <div class="form-group">
    <input type="text" class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}"  name="middlename" id="middlename_input" / value="{{old('middlename')}}">
    <label class="form-control-placeholder" for="middlename" id="middlename_label" style="
    color: white;
">Middlename</label>
    @if ($errors->has('middlename'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('middlename') }}</strong>
    </span>
    @endif
  </div>
</div>
<div class="col-md-4" id="lastname" style='display:none;'/>
<div class="form-group">
  <input type="text" name="lastname" id="lastname_input" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"    value="{{old('lastname')}}">
  <label class="form-control-placeholder" for="lastname" id="lastname_label" style="
    color: white;
">Last Name<span style="color: red">*</span></label>
  @if ($errors->has('lastname'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('lastname') }}</strong>
  </span>
  @endif

</div>

</div>
<div class="col-md-4" id="dept_name" style='display:none;'/>
<div class="form-group">
  <input type="text" name="dept_name" id="dept_name_input" class="form-control{{ $errors->has('dept_name') ? ' is-invalid' : '' }}"    / value="{{old('dept_name')}}" onkeypress="return alpha(event)"/>
  <label class="form-control-placeholder" for="dept_name" id="designation_label" style="
    color: white;
">Official Designation<span style="color: red">*</span></label>
  @if ($errors->has('dept_name'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('dept_name') }}</strong>
  </span>
  @endif

</div>

</div>

<div class="col-md-4">
  <div class="form-group">
   <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"   / value="{{old('email')}}">
   <label class="form-control-placeholder" for="email" style="
    color: white;
">Email<span style="color: red">*</span></label>
   @if ($errors->has('email'))
   <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('email') }}</strong>
  </span>
  @endif
</div>   
</div>
<div class="col-md-4">
  <div class="form-group">
   <input type="text" id="aadhar_num" class="form-control{{ $errors->has('aadhar_num') ? ' is-invalid' : '' }}" name="aadhar_num"   / value="{{old('aadhar_num')}}" maxlength="12" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
   <label class="form-control-placeholder" for="aadhar_num" style="
    color: white;
">Aadhar Number</label>
   @if ($errors->has('aadhar_num'))
   <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('aadhar_num') }}</strong>
  </span>
  @endif
</div>   
</div>
<div class="col-md-4">
 <div class="form-group">
  <input type="text" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" >
  <label class="form-control-placeholder" for="phone" style="
    color: white;
">Phone<span style="color: red">*</span></label>
  @if ($errors->has('phone'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('phone') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="col-md-4">       


 <div class="form-group">
  
   <input type="text" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="alt_phone" class="form-control{{ $errors->has('alt_phone') ? ' is-invalid' : '' }}" name="alt_phone" >
  <label class="form-control-placeholder" for="alt_phone" style="
    color: white;
">Alt.Phone</label>
</div>
</div>


<div class="col-md-4">
  <div class="form-group">
   <input type="text" name="username" id="username"  class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" / value="{{old('username')}}" autocomplete="off">
   <label class="form-control-placeholder" for="username" style="
    color: white;
">Username<span style="color: red">*</span></label>  
   @if ($errors->has('username'))
   <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('username') }}</strong>
  </span>
  @endif

</div>
</div>
<div class="col-md-4">
 <div class="form-group">
  <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password"  / autocomplete="new-password" >
  <label class="form-control-placeholder" for="password" style="
    color: white;
">Password<span style="color: red">*</span></label>
  @if ($errors->has('password'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('password') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="col-md-4">

 <div class="form-group">
  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"   onkeyup='check();' />            
  <label class="form-control-placeholder" for="password_confirmation" style="
    color: white;
">Confirm Password<span style="color: red">*</span> </label>
  <span id='message'></span>
  @if ($errors->has('password_confirmation'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('password_confirmation') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="col-md-4">
 <div class="form-group">
  <input type="text" name="address" id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"  value="{{old('address')}}" >            
  <label class="form-control-placeholder" for="address" style="
    color: white;
">Address<span style="color: red">*</span></label>
@if ($errors->has('address'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('address') }}</strong>
  </span>
  @endif
</div>
</div>
<div class="col-md-4">  
 <div class="form-group">
  <input type="text" name="city" id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"  / value="{{old('city')}}" onkeypress="return (event.charCode > 64 && event.charCode < 91 || (event.charCode > 96 && event.charCode < 123))">
  <label class="form-control-placeholder" for="city" style="
    color: white;
">City<span style="color: red">*</span></label>
@if ($errors->has('city'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('city') }}</strong>
  </span>
  @endif
</div>


</div>
<div class="col-md-4">
 <div class="form-group">
  <input type="text" name="state" id="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}"  / value="{{old('state')}}">
  <label class="form-control-placeholder" for="state" style="
    color: white;
">State<span style="color: red">*</span></label>
@if ($errors->has('state'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('state') }}</strong>
  </span>
  @endif
</div>                
</div>
<div class="col-md-4" >
<div class="form-group">

  <!-- {!! Form::countries('country', 'select2', 'form-control','country','required =false','') !!} -->
  {!! Form::countries('country', Input::old('country'), 'form-control') !!}
  <!-- {!! $errors->first('country', '<span class="alert-msg" >:message</span>') !!}  -->
  <!-- <input type="text" name="country" id="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"  / value="{{old('country')}}" style="display: none;"> -->
  <label class="form-control-placeholder{{ $errors->has('country') ? ' is-invalid' : '' }}" for="country" id="country" name="country" value="{{old('country')}}" style="
    color: white;
">Country<span style="color: red">*</span></label>  
 @if ($errors->has('country'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('country') }}</strong>
  </span>
  @endif
</div>
</div>



<div class="col-md-4">
 <div class="form-group">
   <input type="text" name="zipcode" id="zipcode" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}"  value="{{old('zipcode')}}" maxlength="10">
   <label class="form-control-placeholder" for="zipcode" style="
    color: white;
">Postal Code<span style="color: red">*</span></label>
     @if ($errors->has('zipcode'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('zipcode') }}</strong>
  </span>
  @endif
 </div>
</div>
<div class="col-md-8">
  <div class="form-group"> 
    <h7></h7>
    <input type="file" 
    class="form-control{{ $errors->has('fileupload') ? ' is-invalid' : '' }}"
    name="fileupload">
    <label class="form-control-placeholder" for="fileupload" style="
    color: white;
">Upload Arbitration Agreement / Contract with Arbitration Clause<span style="color: red">*</span></label>
    @if ($errors->has('fileupload'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('fileupload') }}</strong>
  </span>
  @endif
  </div>
</div>
<div class="col-md-4">
              <div class="form-group" style="color: black; font-weight: bolder;">
               <select class="form-control{{ $errors->has('claimant_type') ? ' is-invalid' : '' }}" name="authorised" id="authorised" onchange="auth_select()">
                <option value="">Select</option>
    <option value="advocate">Advocate</option>
    <option value="others">Others</option>
   
  </select>
              <label class="form-control-placeholder" for="authorised" style="
    color: white;
">Authorised Representative </label> 
              @if ($errors->has('authorised'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('authorised') }}</strong>
              </span>
              @endif
            </div>
          </div>
<div class="col-md-4" id="other_auth" style='display:none;'/>
 <div class="form-group">
   <input type="text" name="auth_others" id="auth_others" class="form-control{{ $errors->has('auth_others') ? ' is-invalid' : '' }}"  value="{{old('auth_others')}}">
   <label class="form-control-placeholder" for="auth_others" style="
    color: white;
">Details(Others)</label>
     @if ($errors->has('auth_others'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('auth_others') }}</strong>
  </span>
  @endif
 </div>
</div>
<div class="col-md-4">
 <div class="form-group">
   <input type="text" name="auth_name" id="auth_name" class="form-control{{ $errors->has('auth_name') ? ' is-invalid' : '' }}"  value="{{old('auth_name')}}">
   <label class="form-control-placeholder" for="auth_name" style="
    color: white;
">Name</label>
     @if ($errors->has('auth_name'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('auth_name') }}</strong>
  </span>
  @endif
 </div>
</div>
<div class="col-md-4">
 <div class="form-group">
   <input type="text" name="auth_email" id="auth_email" class="form-control{{ $errors->has('auth_email') ? ' is-invalid' : '' }}"  value="{{old('auth_email')}}">
   <label class="form-control-placeholder" for="auth_email" style="
    color: white;
">Email</label>
     @if ($errors->has('auth_email'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('auth_email') }}</strong>
  </span>
  @endif
 </div>
</div>
<div class="col-md-6">
</div>
<div class="col-md-6">
  <!-- <button class="btnRegister" style="background-color:red;" type="reset" id="claimantregisterbutton" >Reset</button> -->
 <button class="btnRegister" type="submit" id="claimantregisterbutton" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();" >Submit</button>


</div>


</div>

</div>
</div>
</form>
</div>

</div>
<div style="width: 100%">
 <div class="footercredits">
   <!-- <a href="JavaScript:Void(0);">Privacy policy</a> 
    <p>&nbsp;&nbsp;|&nbsp;&nbsp;</p> 
    <i class="fa fa-copyright" style="color: black;"></i><p>{{ now()->year }} <a href="{{url('https://www.bimacc.org/')}}" target="blank" style="color: red"> &nbsp;Lexquisite. &nbsp;</a> &nbsp; All Rights Reserved. &nbsp;</p>&nbsp; </p>|</p><a href="{{url('about_us')}}" target="blank" style="color: #602e9e"> &nbsp;<b>About Us </b>&nbsp;</a></p>|</p> <a href="{{url('mainscreen')}}" target="blank" style="color: #602e9e"> &nbsp;<b>FAQ </b>&nbsp;</a> -->
    <div><a href="{{url('privacypolicy')}}" target="blank" style="color: #602e9e"> &nbsp;<b>Privacy Policy </b></a> 
    <p>|</p> 
    <i class="fa fa-copyright" style="color: black; "></i><p style="color: #602e9e;font-weight: bold">{{ now()->year }} <a href="{{url('https://www.bimacc.org/')}}" target="blank" style="color: #602e9e">Lexquisite. &nbsp;</a> &nbsp; All Rights Reserved. &nbsp; </p>|</p><a href="{{url('about_us')}}" target="blank" style="color: #602e9e"> &nbsp;<b>About Us </b>&nbsp;</a></p>|</p> <a href="{{url('mainscreen')}}" target="blank" style="color: #602e9e"> &nbsp;<b>FAQ </b>&nbsp;</a>|</p> <a href="{{url('terms')}}" target="blank" style="color: #602e9e"> &nbsp;<b>Terms & Conditions </b>&nbsp;</a></div>|</p><a href="" data-toggle="modal"  data-target="#contactusmodal" style="color: #602e9e"> &nbsp;<b>Contact Us</b>&nbsp;</a>|</p><a href="http://localhost:10/bimacc_production/storage/app/public/uploads/usermanual/eAs_User_Manual.pdf" download  style="color: #602e9e"> &nbsp;<b>User Manual</b>&nbsp;</a></div>
 
</div>
</div>
</div>

@include('modals/contactus')

<script>
window.onload = function(){

 // function claimant_type_select()
 // {
  var inputvalue = document.getElementById("claimant_type").value;

  if( inputvalue==="3"){

    $("#organization_name").show();
    $("#govt_name").hide();
    $("#dept_name").hide();

    $("#firstname").show();
    $("#middlename").show();
    $("#lastname").show();
    $('#org_name_label').html("Company Name <span id='frname'> *</span>");
    
    $('#firstname_label').html("Representative/OL's First Name <span id='frname'> *</span>");
    $('#middlename_label').text("Representative/OL's Middle Name");
    $('#lastname_label').html("Representative/OL's Last Name <span id='frname'> *</span>");

    
  }
  else if( inputvalue==="2")
  {
   $("#organization_name").show();
   $("#govt_name").hide();
   $("#dept_name").hide();

   $("#firstname").show();
   $("#middlename").show();
   $("#lastname").show();
   $('#org_name_label').html("Firm Name<span id='frname'> *</span>");
   $('#firstname_label').html("Partner's First Name<span id='frname'> *</span>");
   $('#middlename_label').text("Partner's Middle Name");
   $('#lastname_label').html("Partner's Last Name<span id='frname'> *</span>");

 }
 else if( inputvalue==="5")
 {
   $("#organization_name").show();
   $("#govt_name").hide();
   $("#dept_name").hide();

   $("#firstname").show();
   $("#middlename").show();
   $("#lastname").show();
   
   $('#org_name_label').html("Entity Name<span id='frname'> *</span>");

   $('#firstname_label').html("Representative's First Name<span id='frname'> *</span>");
   $('#middlename_label').text("Representative's Middle Name");
   $('#lastname_label').html("Representative's Last Name<span id='frname'> *</span>");

 }
 else if( inputvalue==="8")
 {
   $("#organization_name").show();
   $("#govt_name").show();
   $("#dept_name").show();

   $("#firstname").show();
   $("#middlename").show();
   $("#lastname").show();
   
   $('#org_name_label').html("Government Name<span id='frname'> *</span>");
   $('#department_name_label').text("Department Name,if any");
   $('#firstname_label').html("Official's First Name<span id='frname'> *</span>");
   $('#middlename_label').text("Official's Middle Name");
   $('#lastname_label').html("Official's Last Name<span id='frname'> *</span>");


 }
 else if( inputvalue==="1")
 {
  $("#organization_name").hide();
  $("#govt_name").hide();
  $("#dept_name").hide();

  $("#firstname").show();
  $("#middlename").show();
  $("#lastname").show();
  $('#firstname_label').html("Individual's First Name<span id='frname'> *</span>");
  $('#middlename_label').text("Individual's Middle Name");
  $('#lastname_label').html("Individual's Last Name<span id='frname'> *</span>");
}
else if( inputvalue==="13")
 {
  //alert ("jhhjj");
 $("#organization_name").hide();
   $("#govt_name").hide();
   $("#dept_name").show();

   $("#firstname").show();
   $("#middlename").hide();
   $("#lastname").show();
    $('#firstname_label').html("Bank Name<span id='frname'> *</span>");
  $('#designation_label').html("Branch / Dept. Code<span id='frname'> *</span>");
  $('#lastname_label').html("Branch  Name<span id='frname'> *</span>");
   
  
   
}

else
{
  $("#organization_name").hide();
  $("#govt_name").hide();
  $("#dept_name").hide();

  $("#firstname").show();
  $("#middlename").show();
  $("#lastname").show();
  $('#firstname_label').html("Proprietor's First Name<span id='frname'> *</span>");
  $('#middlename_label').text("Proprietor's Middle Name");
  $('#lastname_label').html("Proprietor's Last Name<span id='frname'> *</span>");




}
// }
  };
</script>
<script type="text/javascript">
  function auth_select()
 {
  
  var inputvalue = document.getElementById("authorised").value;

  if( inputvalue==="others"){
 $("#other_auth").show();
  }
  else{
    $("#other_auth").hide();
  }
 }
</script>
<script type="text/javascript">
   function claimant_type_select()
 {
  var inputvalue = document.getElementById("claimant_type").value;



  if( inputvalue==="3"){

    $("#organization_name").show();
    $("#govt_name").hide();
    $("#dept_name").hide();
    $("#firstname").show();
    $("#middlename").show();
    $("#lastname").show();

    $('#org_name_label').html("Company Name <span id='frname'> *</span>");
    $('#firstname_label').html("Representative/OL's First Name <span id='frname'> *</span>");
    $('#middlename_label').text("Representative/OL's Middle Name");
    $('#lastname_label').html("Representative/OL's Last Name <span id='frname'> *</span>");

    
  }
  else if( inputvalue==="2")
  {
   $("#organization_name").show();
   $("#govt_name").hide();
   $("#dept_name").hide();
   $("#firstname").show();
   $("#middlename").show();
   $("#lastname").show();

   $('#org_name_label').html("Firm Name<span id='frname'> *</span>");
   $('#firstname_label').html("Partner's First Name<span id='frname'> *</span>");
   $('#middlename_label').text("Partner's Middle Name");
   $('#lastname_label').html("Partner's Last Name<span id='frname'> *</span>");

 }
 else if( inputvalue==="5")
 {
   $("#organization_name").show();
   $("#govt_name").hide();
   $("#dept_name").hide();

   $("#firstname").show();
   $("#middlename").show();
   $("#lastname").show();
   
   $('#org_name_label').html("Entity Name<span id='frname'> *</span>");

   $('#firstname_label').html("Representative's First Name<span id='frname'> *</span>");
   $('#middlename_label').text("Representative's Middle Name");
   $('#lastname_label').html("Representative's Last Name<span id='frname'> *</span>");

 }
 else if( inputvalue==="8")
 {
   $("#organization_name").show();
   $("#govt_name").show();
   $("#dept_name").show();

   $("#firstname").show();
   $("#middlename").show();
   $("#lastname").show();
   
   $('#org_name_label').html("Government Name<span id='frname'> *</span>");
   $('#department_name_label').text("Department Name,if any");
   $('#firstname_label').html("Official's First Name<span id='frname'> *</span>");
   $('#middlename_label').text("Official's Middle Name");
   $('#lastname_label').html("Official's Last Name<span id='frname'> *</span>");


 }
 else if( inputvalue==="1")
 {
  $("#organization_name").hide();
  $("#govt_name").hide();
  $("#dept_name").hide();

  $("#firstname").show();
  $("#middlename").show();
  $("#lastname").show();
  $('#firstname_label').html("Individual's First Name<span id='frname'> *</span>");
  $('#middlename_label').text("Individual's Middle Name");
  $('#lastname_label').html("Individual's Last Name<span id='frname'> *</span>");
}
else if( inputvalue==="13")
 {
  //alert ("jhhjj");
 $("#organization_name").hide();
   $("#govt_name").hide();
   $("#dept_name").show();

   $("#firstname").show();
   $("#middlename").hide();
   $("#lastname").show();
    $('#firstname_label').html("Bank Name<span id='frname'> *</span>");
  $('#designation_label').html("Branch / Dept. Code<span id='frname'> *</span>");
  $('#lastname_label').html("Branch  Name<span id='frname'> *</span>");
   
  
   
}

else
{
  $("#organization_name").hide();
  $("#govt_name").hide();
  $("#dept_name").hide();

  $("#firstname").show();
  $("#middlename").show();
  $("#lastname").show();
  $('#firstname_label').html("Proprietor's First Name<span id='frname'> *</span>");
  $('#middlename_label').text("Proprietor's Middle Name");
  $('#lastname_label').html("Proprietor's Last Name<span id='frname'> *</span>");


}


   $("#organization_name_input").val('');
   $("#govt_name_input").val('');
   $("#dept_name_input").val('');
   $("#firstname_input").val('');
   $("#middlename_input").val('');
   $("#lastname_input").val('');




}
</script>
<script>
  function get_value() 
  {
    var inv_nrs;
    inv_nrs = document.getElementById('email').value;
    document.getElementById('username').value=inv_nrs;
  }
</script>
<<!-- script>
    function areabuttonclick()
    {
        e.preventDefault();
   // alert ("sam"); 

   // document.getElementById("home-tab").classList.remove("active");
   $("#profile-tab").addClass("active");

   $("#home-tab").removeClass("active");
   
   $("#profile").addClass("active"); 
   $("#home").removeClass("active"); 

   $('#profile').focus();

}
</script> -->
<!-- <script type="text/javascript">
   function Claimantregisterbuttonclick() {
     // body...
      var organization_name =  $('#organization_name').val();
     // alert(organization_name);
     if (organization_name =='') {
       swal("Please Select Dispute Category", "", "error");
     return false;
     }

     $("#claimantregisterbutton").attr("disabled", true);
     document.getElementById('claimantregisterform').submit();
    
   }
     </script>
   -->
   <script>
    var check = function() {
      // alert ("dfd");exit;
  if (document.getElementById('password').value ==
    document.getElementById('password_confirmation').value) {
    
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = '';
  } else {

    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Passwords do not match';
  }
}
function alpha(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}
   </script> 
   
   
   @endsection
   
