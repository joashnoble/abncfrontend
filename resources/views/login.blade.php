@extends('main')

@section('embeddedcss')
<style>

</style>
@endsection
@section('content')



       
<div class="grey-light-bg clearfix">    
    <!-- COTENT CONTAINER -->
    <div class="container white-bg plr-30 pt-30 pb-30 mt-80 mb-80 " style="width:600px;">
    
      <div class="relative">
                  
        <div class="col-md-12" style="align-content: center;">
            <div class="contact-form-cont" style="padding:40px;">
              <!-- TITLE -->
              <div class="mb-40">
                <h2 class="section-title">LOG<span class="bold"> IN</span></h2>
              </div>
                            
              <!-- CONTACT FORM -->
              <div>
                <form id="contact-form" action="php/contact-form.php" method="POST" autocomplete="off">
                
                  <div class="row">
                    <div class="col-md-12 mb-30">
                      <!-- <label>Your name *</label> -->
                      <input type="text" value="" data-msg-required="Please enter your email" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                    </div>
                  </div>
                  
                  <div class="row">    
                    <div class="col-md-12 mb-30">
                      <input type="password" value="" data-msg-required="Please enter your password" data-msg-password="Please enter a password" maxlength="100" class="controled" name="password" id="password" placeholder="PASSWORD" required>
                      </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 text-center-xxs">
                        <input type="submit" value="LOGIN" class="button medium gray float-left" data-loading-text="Loading...">
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


</script>
@endsection