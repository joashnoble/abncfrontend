@extends('main')

@section('embeddedcss')
<style>

</style>
@endsection
@section('content')



<div class="container p-140-cont">
    <div class="row">
      <div class="col-md-4">
            <div class="panel panel-default" style="-webkit-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
-moz-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);">
              <div class="panel-heading">
              </div>
              <div class="panel-body"> 
              </div>
            </div>

            <div class="panel panel-default" style="-webkit-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
-moz-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);">
              <div class="panel-body">  
              <b>CONTACT DETAILS</b> <i class="fa fa-cog"></i>
              </div>
            </div>
      </div>
      <div class="col-md-8">

            <div class="panel panel-default" style="-webkit-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
-moz-box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);
box-shadow: 10px 10px 35px -5px rgba(227,227,227,1);">
              <div class="panel-heading">
                Quotation List
              </div>
              <div class="panel-body"> 
              <div class="table-responsive mb-40">
                    <table class="table">
                    <thead>
                      <tr>
                          <th>#</th>
                          <th><b>Quotation No</b></th>
                          <th><b>Date Generated</b></th>
                          <th><b>Status</b></th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
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