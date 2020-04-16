@extends('main')

@section('embeddedcss')
<style>

</style>
@endsection
@section('content')
<div class="page-title-cont page-title-big grey-light-bg">
    <div class="relative container align-left">
        <div class="row">
            
        <div class="col-md-8">
            <h1 class="page-title">CONTACT US</h1>
            <div class="page-sub-title">
            Send us a message by filling the form below.
            </div>
        </div>
            
        <div class="col-md-4">
            <div class="breadcrumbs">
            <a href="/">Home</a><span class="slash-divider">/</span><span class="bread-current">CONTACT</span>
            </div>
        </div>
        
        </div>
    </div>
</div>


<div class="page-section">
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-md-6">
          <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3850.9476211705714!2d120.589417!3d15.161221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f273ff50afcd%3A0xdb7d02a57a5fc76d!2sAB%26C%20M.Ng%20%26%20T.Lopez%20Partnership%20Firm!5e0!3m2!1sen!2sph!4v1587011122723!5m2!1sen!2sph" width="625" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>

        <div class="col-md-6">
          <div class="contact-form-cont">
            <!-- TITLE -->
            <div class="mb-40">
              <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
            </div>
                          
            <!-- CONTACT FORM -->
            <div>
              <form id="contact-form" action="php/contact-form.php" method="POST">
              
                <div class="row">
                  <div class="col-md-12 mb-30">
                    <!-- <label>Your name *</label> -->
                    <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required>
                  </div>
                </div>
                
                <div class="row">    
                  <div class="col-md-12 mb-30">
                    <!-- <label>Your email address *</label> -->
                    <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                    </div>
                </div>
            
                <div class="row">
                  <div class="col-md-12 mb-40">
                    <!-- <label>Message *</label> -->
                    <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12 text-center-xxs">
                    <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                  </div>
                </div>
                <div class="row">
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