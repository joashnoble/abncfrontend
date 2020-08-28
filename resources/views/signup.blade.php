@extends('main')

@section('embeddedcss')
<style>
input:disabled{
font-weight: bolder;
border-bottom: 0px;
}
</style>
@endsection
@section('content')



       
<div class="grey-light-bg clearfix">    
    <!-- COTENT CONTAINER -->
    <div class="container white-bg plr-30 pt-30 pb-30 mt-80 mb-80 " style=";border-top: 8px solid #1bbc9b;-webkit-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
-moz-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);">
    
      <div class="relative">
        <div class="div_sign_up">
            <div class="col-md-12" style="align-content: center;">
                <div class=" style="padding:40px;">
                  <!-- TITLE -->
                  <div class="mb-20">
                    <h2 class="section-title">SIGN<span class="bold"> UP</span></h2>
                  </div>
                                
                  <!-- CONTACT FORM -->
                  <div>
                    <form id="frm_signup" autocomplete="off">
                      <div class="row row-error">
                        <div class="col-md-12">
                          <div class="alert alert-danger nobottommargin">
                            <span aria-hidden="true" class="alert-icon icon_blocked"></span>
                            <span class="error_msg"></span>
                          </div>
                        </div>
                      </div>       
                      <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-success">
                              <div class="panel-heading"><b><i class="fa fa-building"></i> COMPANY DETAILS</b></div>
                              <div class="panel-body"> 
                                  <div class="form-group">
                                          <input type="text" name="company_name" data-msg-required="Company Name is required" maxlength="100" class="form-control" placeholder="Company Name" required>
                                    </div>
                                    <div class="form-group">
                                          <textarea class="form-control" name="company_address" data-msg-required="Company Address is required" placeholder="Company Address" style="resize: vertical;" rows="3" required></textarea>
                                    </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-success">
                              <div class="panel-heading"><b><i class="fa fa-building"></i> BUSINESS DETAILS</b></div>
                              <div class="panel-body"> 
                                    <div class="form-group">
                                        <input type="text" name="business_entity" data-msg-required="Please enter your business entity" maxlength="100" class="form-control" placeholder="Business Entity">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" width="100%" name="business_nature" data-msg-required="Please enter your business type">
                                          <option value="1">Individual</option>
                                          <option value="2">Partnership</option>
                                          <option value="3">Corporation</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" width="100%" name="business_service" data-msg-required="Please enter your business vat">
                                          <option value="1">Vatted</option>
                                          <option value="2">Non-Vat</option>
                                          <option value="3">Eco-Zone</option>
                                        </select>
                                    </div>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-success">
                              <div class="panel-heading"><b><i class="fa fa-phone"></i> CONTACT DETAILS</b></div>
                              <div class="panel-body"> 
                                  <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-goup">
                                            <input type="text" name="contact_person" data-msg-required="Please enter the contact person." maxlength="100" class="form-control" placeholder="Contact Person" required>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-goup">
                                          <input type="text" name="contact_person_position" data-msg-required="Please enter your position" maxlength="100" class="form-control" placeholder="Position" required>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row" style="padding-top: 15px;">
                                      <div class="col-md-12">
                                            <div class="form-goup">
                                            <input type="text" name="contact_no" data-msg-required="Please enter your contact number" maxlength="100" class="form-control" placeholder="Contact Number(s)" required>
                                            </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-success">
                              <div class="panel-heading"><b><i class="fa fa-cog"></i> LOGIN DETAILS</b></div>
                              <div class="panel-body"> 
                                  <div class="form-goup">
                                      <input type="password" name="password" data-msg-required="Please enter your password." maxlength="100" class="form-control" placeholder="Password" required>
                                  </div>
                                  <div class="form-goup" style="margin-top: 15px;">
                                      <input type="password" name="c_password" data-msg-required="Please confirm your password." maxlength="100" class="form-control" placeholder="Confirm Password" required>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-success">
                              <div class="panel-heading"><b><i class="fa fa-envelop"></i> EMAIL DETAILS</b></div>
                              <div class="panel-body"> 
                                  <div class="form-goup">
                                        <input type="text" name="company_email" data-msg-required="Please enter your email address." maxlength="100" class="form-control" placeholder="Email Address" required>
                                  </div>
                                  <div class="form-goup" style="margin-top: 15px;">
                                        <input type="text" name="c_company_email" data-msg-required="Please confirm your email address." maxlength="100" class="form-control" placeholder="Confirm Email Address" required>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-center-xxs">
                          <center>
                            <button type="button" id="btn_signup" class="button medium gray float-left ml-10" style="width: 50%;">
                              <span class=""></span> <label class="btn_signup_label">SIGN UP</label>
                            </button>
                          </center>
                        </div>

                      </div>
                      
                    </form>	
                  </div>
                </div>
              </div>
          
          </div>        
        </div>
        <div class="row div_success">
          <div class="col-md-12" style="align-content: center;">
              <div class="row row-success">
                <div class="col-md-12">
                  <div class="alert alert-success">
                    <span aria-hidden="true" class="alert-icon icon_like"></span>
                    <span class="success_msg"></span>
                  </div>
                </div>
              </div>   
          </div>
        </div>
    </div>
    
  </div>


  
@stop


 
@section('embeddedjs')
<script type="text/javascript">

  var initializeControls = function(){
    $('.row-error').hide();
    $('.row-success').hide();
    $('.div_success').hide();
  }();

    var validateRequiredFields=function(f){
    var stat=true;

    var pword=$('input[name="password"]').val();
    var cpword=$('input[name="c_password"]').val();
    var email=$('input[name="company_email"]').val();
    var cemail=$('input[name="c_company_email"]').val();

        $('.row-error').hide();
        $('div.form-group').removeClass('has-error');
        $('div.fg-line').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).is('select')){
                    if($(this).val()==0 || $(this).val()==null){
                        $('.error_msg').html($(this).data('msg-required'));
                        $('.row-error').fadeIn(400);
                        $(this).focus();
                        stat=false;
                        return false;
                    }
                }else{
                    if($(this).val()==""){
                        $('.error_msg').html($(this).data('msg-required'));
                        $('.row-error').fadeIn(400);
                        $(this).closest('.fg-line').addClass('has-error');
                        $(this).focus();
                        stat=false;
                        return false;
                    }
                    if(pword!=cpword){
                        $('.error_msg').html('Your password and confirmation password do not match.');
                        $('.row-error').fadeIn(400);
                        $('#password').addClass('has-error');
                        $('#confpassword').addClass('has-error');
                        $('input[name="c_password"]').focus();
                        stat=false;
                        return false;
                    }

                    if(email!=cemail){
                      $('.error_msg').html('Your email and confirmation email do not match.');
                        $('.row-error').fadeIn(400);
                        $('#password').addClass('has-error');
                        $('#confpassword').addClass('has-error');
                        $('input[name="c_company_email"]').focus();
                        stat=false;
                        return false;
                    }                    
            }
            
        });

        return stat;
    };  

  var CreateClient=(function(){
    var _data=$('#frm_signup').serializeArray();   
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    return $.ajax({
        "dataType":"json",
        "type":"POST",
        "url":"{{ url('/client/create') }}",
        "data" : _data
    });
  });

  $('#btn_signup').click(function(){

    if(validateRequiredFields($('#frm_signup'))){

      $(this).toggleClass('disabled');
      $(this).find('span').toggleClass('fa fa-spinner fa-spin');
      $('.btn_signup_label').html('Signing Up');

      CreateClient().done(function(response){
        
          if(response.stat=="success"){
              $('.div_success').show();
              $('.div_sign_up').hide();
              $('.success_msg').html(response.msg);
              $('.row-success').fadeIn(400);
              setTimeout(function(){
                  window.location.href = "/profile";
              },1000);
          }
      }).always(function(){
        $(this).toggleClass('disabled');
        $(this).find('span').toggleClass('fa fa-spinner fa-spin');
      });
    }

  });

 
  $('input').keypress(function(evt){

    if(evt.keyCode==13){ $('#btn_signup').click(); }

  });

</script>
@endsection