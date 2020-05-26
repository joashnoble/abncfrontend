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
    <div class="container white-bg plr-30 pt-30 pb-30 mt-80 mb-80 ">
    
      <div class="relative">
                  
        <div class="col-md-12" style="align-content: center;">
            <div class=" style="padding:40px;">
              <!-- TITLE -->
              <div class="mb-20">
                <h2 class="section-title">SIGN<span class="bold"> UP</span></h2>
              </div>
                            
              <!-- CONTACT FORM -->
              <div>

                <form id="contact-form" action="php/contact-form.php" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="col-md-12 mb-10">
                            <div class="col-sm-12">
                                <input type="text" placeholder="COMPANY DETAILS" disabled>
                            </div>
                        </div>
                    </div>
                  <div class="row">
                    <div class="col-md-12 mb-20">
                        
                        <div class="col-sm-7">
                            <input type="text" value="" data-msg-required="Please enter your email" maxlength="100" class="controled" placeholder="Company Name" required>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" value="" data-msg-required="Please enter your address" maxlength="100" class="controled" placeholder="Company Address" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-20">
                        <div class="col-sm-4">
                            <input type="text" value="" data-msg-required="Please enter your business form entity." maxlength="100" class="controled" placeholder="Business Form Entity" required>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" value="" data-msg-required="Please enter your nature of business" maxlength="100" class="controled" placeholder="Nature of Business" required>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" value="" data-msg-required="Please enter your products or services offered" maxlength="100" class="controled" placeholder="Products or Services Offered" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-60">
                        <div class="col-sm-4">
                            <input type="text" value="" data-msg-required="Please enter the contact person." maxlength="100" class="controled" placeholder="Contact Person" required>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" value="" data-msg-required="Please enter your position" maxlength="100" class="controled" placeholder="Position" required>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" value="" data-msg-required="Please enter your contact number" maxlength="100" class="controled" placeholder="Contact Number(s)" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-10">
                        <div class="col-sm-12">
                            <input type="text" placeholder="LOGIN  DETAILS" disabled>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="col-sm-3">
                            <input type="text" value="" data-msg-required="Please enter your email address." maxlength="100" class="controled" placeholder="Email Address" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" value="" data-msg-required="Please confirm your email address." maxlength="100" class="controled" placeholder="Confirm Email Address" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" value="" data-msg-required="Please enter your password." maxlength="100" class="controled" placeholder="Password" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" value="" data-msg-required="Please confirm your password." maxlength="100" class="controled" placeholder="Confirm Password" required>
                        </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 text-center-xxs">
                        <input type="submit" value="SIGNUP" class="button medium gray float-left ml-10" data-loading-text="Loading...">
                    </div>

                  </div>
                  <div class="row hidden">
                    <div class="col-md-12">
                      <div class="checkbox small">
                        <label><input type="checkbox" value="privacy" data-msg-required="Please accept the terms" id="agree" name="agree" class="checkbox" required>I agree to the terms of service</label>
                      </div>
                    </div>
                  </div>
                  
                </form>	
                <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                  Thanks, your message has been sent to us.
                </div>
              
                <div class="alert alert-danger hidden animated shake" id="contactError">
                  <strong>Error!</strong> There was an error sending your message.
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


</script>
@endsection