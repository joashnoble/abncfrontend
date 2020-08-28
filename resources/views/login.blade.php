@extends('main')

@section('embeddedcss')
<style>

</style>
@endsection
@section('content')



       
<div class="grey-light-bg clearfix">    
    <!-- COTENT CONTAINER -->
    <div class="container white-bg plr-30 pt-30 pb-30 mt-80 mb-80 " style="width:600px;margin-top: 100px;border-top: 8px solid #1bbc9b;-webkit-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
-moz-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);">
    
      <div class="relative">
                  
        <div class="col-md-12" style="align-content: center;">
            <div class="contact-form-cont" style="padding:20px 40px;">
              <!-- TITLE -->
              <div class="mb-40">
                <center>
                  <img src="{{ config('global.backend_site') }}uploads/logo/client-login.png" alt="img" style="width: 100px;height: 120px;">
                </center>
                <h2 class="section-title">SIGN<span class="bold"> IN</span></h2>
              </div>
                            
              <!-- CONTACT FORM -->
              <div>
                <form id="frm_login" autocomplete="off">

                  <div class="row row-error">
                    <div class="col-md-12">
                      <div class="alert alert-danger nobottommargin">
                        <span aria-hidden="true" class="alert-icon icon_blocked"></span>Invalid email or password.
                      </div>
                    </div>
                  </div>
                  <div class="row row-success">
                    <div class="col-md-12">
                      <div class="alert alert-success">
                        <span aria-hidden="true" class="alert-icon icon_like"></span>Successfully Logged In.
                      </div>
                    </div>
                  </div>                  

                  <div class="row">
                    <div class="col-md-12 mb-30">
                      <!-- <label>Your name *</label> -->
                      <input type="text" value="" name="email" data-msg-required="Please enter your email" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                    </div>
                  </div>
                  
                  <div class="row">    
                    <div class="col-md-12 mb-30">
                      <input type="password" value="" name="password" data-msg-required="Please enter your password" data-msg-password="Please enter a password" maxlength="100" class="controled" name="password" id="password" placeholder="PASSWORD" required>
                      </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 text-center-xxs">
                        <button type="button" class="button medium teal" id="btn_login" style="width: 100%">
                          Login
                        </button>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <h5>Don't have an account? <a href="/signup" style="color:green;"><u>Create an Account</</a></h5>
                    </div>
                  </div>
                  
                </form>	
              </div>
            </div>
          </div>
      
      </div>
    
    </div>
    
  </div>


<div class="page-section">
    <div class="container-fluid">
      <div class="row">
      
        {{-- <div class="col-md-6">
          <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3850.9476211705714!2d120.589417!3d15.161221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f273ff50afcd%3A0xdb7d02a57a5fc76d!2sAB%26C%20M.Ng%20%26%20T.Lopez%20Partnership%20Firm!5e0!3m2!1sen!2sph!4v1587011122723!5m2!1sen!2sph" width="625" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div> --}}


          
      </div>
    </div>
  </div>
  
@stop


 
@section('embeddedjs')
<script type="text/javascript">

  var initializeControls = function(){
    $('.row-error').hide();
    $('.row-success').hide();
  }();

  var validateUser=(function(){
    var _data={email : $('input[name="email"]').val() , pword : $('input[name="password"]').val()};    
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    return $.ajax({
        "dataType":"json",
        "type":"POST",
        "url":"{{ url('/validatelogin') }}",
        "data" : _data
    });
  });

  var validateRequiredFields=function(f){
    var stat=true;

        $('.row-error').hide();
        $('div.form-group').removeClass('has-error');
        $('div.fg-line').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).is('select')){
                if($(this).val()==0 || $(this).val()==null){
                    $('.row-error').fadeIn(400);
                    $(this).focus();
                    stat=false;
                    return false;
                }
            
                }else{
                if($(this).val()==""){
                    $('.row-error').fadeIn(400);
                    $(this).closest('.fg-line').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
            }
            
        });

        return stat;
    };


  $('#btn_login').click(function(){

    if(validateRequiredFields($('#frm_login'))){
      validateUser().done(function(response){
        
          if(response.stat=="success"){
              $('.row-success').fadeIn(200);
              setTimeout(function(){
                  window.location.href = "/profile";
              },600);
          }else{
            $('.row-error').fadeIn(200);
          }
      });
    }

  });

 
  $('input').keypress(function(evt){

    if(evt.keyCode==13){ $('#btn_login').click(); }

  });

</script>
@endsection