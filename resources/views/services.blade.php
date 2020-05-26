@extends('main')

@section('embeddedcss')
<link href="/select2/select2.min.css" rel="stylesheet">
<style>
input:disabled{
font-weight: bolder;
border-bottom: 0px;
}

.select2-container{
    min-width: 100%;
    border:none;

}
.select2-dropdown{
    z-index: 999999;
}
.select2-container--default .select2-selection--single {
    border:none;
}
.card:hover{
    cursor: pointer;
    
    border:  1px solid #744d24;
    color: #000000;
}
.card:hover .card-body{
    background-color: #fbf6f2;
}
.card:hover .card-footer{
    border-top:  1px solid #744d24;
}

.card{
    border:  1px solid #b5acad;
    -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
    background-color: white;
}
.card-body{
    min-height: 70px;
    padding:10px;
    text-align:center;
}
.card-footer{
    border-top:1px solid #b5acad;
}
.select2-results__options {
        overflow-x: hidden;
}

.select2-selection__rendered {
    color: #7e8082!important;
}

.card.selected{
    border: 1px solid #21913b!important;
}
.card.selected .card-body {
    background-color: #f0fff4;
    color: #197a2e;
}
.card.selected .card-footer{
    border-top:1px solid #21913b;
    color: #197a2e!important;
    font-weight: bold;
}
.selected .select2-selection__rendered {
    font-weight: bold;
    color: #197a2e!important;
}
.select2-container--default.select2-container--disabled .select2-selection--single {
    background-color:transparent!important; 
    cursor: default;
}

.section-title-4 {
    margin: 0;
    padding: 13px 20px 17px 23px;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
    font-weight: 300;
    font-size: 14px;
    font-weight: normal;
    letter-spacing: 1px;
    line-height: 0px;
    color: #4b4e53;
    border-left: #4b4e53 2px solid;
}

.owl-arrows-bg .owl-prev, .owl-arrows-bg .owl-next {
    background: #744d24;
    color:white;
}
</style>
@endsection
@section('content')
<div class="page-title-cont page-title-small grey-light-bg">
    <div class="relative container align-left">
      <div class="row">
        
        <div class="col-md-8">
          <h1 class="page-title">INSTANT QUOTATION GENERATOR </h1>
        </div>
        
        <div class="col-md-4">
          <div class="breadcrumbs">
            <a href="index.html">HOME</a><span class="slash-divider">/</span><span class="bread-current">INSTANT QUOTATION GENERATOR</span>
          </div>
        </div>
        
      </div>
    </div>
  </div>
<div class="page-section pt-30 " style="background-color:#f7f7f7;">
<?php foreach ($data['categories'] as $category): ?>
    {{-- <div class="row">
        <div class="container">
            <div class="col-md-12 mb-10" style="text-transform: uppercase; color: #197a2e!important;">
                   <b> {{$category->category_desc}}</b>
            </div>
        </div>
    </div> --}}
    <?php foreach ($data['service_types'] as $service_type): 
        if($category->category_id == $service_type->category_id){ ?>
        <!-- Slide Item -->
            <div class="container mb-20">
                <div class="row">
    
                  <div class="col-md-12">
                    <h4 class="blog-page-title mt-0 mb-20">{{$service_type->service_type_desc}}</h4>
                  </div>



            <div class="owl-3items-nav owl-carousel owl-arrows-bg" >   
                <?php foreach ($data['services'] as $service): 
                    if($service->service_type_id == $service_type->service_type_id){ ?>
                        <div class="item mb-0 text-center">
                            <div class="card ">
                                <div class="card-body card-deck-wrapper">
                                    {{$service->service_desc }}
                                </div>
                                <div class="card-footer text-center"> 10,000.00 
                                </div>
                            </div>
                        </div>   
                    <?php } ?> {{-- END OF IF SERVICE TYPE--}}
                <?php endforeach; ?> {{-- END OF SERVICES --}}
            </div>
        </div>
    </div>
        <?php } ?> {{-- END OF IF SAME CATEGORY--}}
    <?php endforeach; ?> {{-- END OF SERVICES TYPES --}}
 <?php endforeach; ?> {{-- END OF CATEGORIES --}}


    
</div>


                    
                    












<form id="contact-form" action="php/contact-form.php" method="POST" autocomplete="off">
<div class="page-section pt-80">
    <div class="container">
        <div class="row">

        <div class="col-md-12" style="align-content: center;">
            <div class=" style="padding:40px;">
              <!-- TITLE -->
              <div class="mb-20">
                <h2 class="section-title">ACCOUNTING<span class="bold"> SERVICES</span></h2>
              </div>
              <!-- CONTACT FORM -->
              <div>

                    <div class="row">
                            <div class="col-sm-12 mb-10">
                            <div class="col-sm-3">
                                <div class="card ">
                                    <div class="card-body card-deck-wrapper">
                                        Business Tax - Monthly/Quarterly
                                    </div>
                                    <div class="card-footer">
                                        <select class="select2" >
                                            <option value="0">VAT</option>
                                            <option value="0">NON-VAT</option>
                                            <option value="1">ECO-ZONE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card ">
                                    <div class="card-body card-deck-wrapper">
                                      Withholding Tax - Monthly/Quarterly
                                    </div>
                                    <div class="card-footer" style="">
                                        <select class="select2" >
                                            <option value="0">
                                                VAT | 10,000.00
                                            <option value="0">NON-VAT | 20,000.00</option>
                                            <option value="1">ECO-ZONE | 30,000.00 </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card " >
                                    <div class="card-body card-deck-wrapper" >
                                     Income Tax - Quarterly
                                    </div>
                                    <div class="card-footer" >
                                        <select class="select2" >
                                            <option value="0">VAT</option>
                                            <option value="0">NON-VAT</option>
                                            <option value="1">ECO-ZONE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-10">
                            <div class="col-sm-12">
                                <input type="text" placeholder="BOOKKEEPING" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-10">
                            <div class="col-sm-3">
                                <div class="card ">
                                    <div class="card-body card-deck-wrapper">
                                        Bookkeeping - Monthly
                                    </div>
                                    <div class="card-footer text-center"> 10,000.00 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-10">
                            <div class="col-sm-12">
                                <input type="text" placeholder="PAYROLL SERVICES" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-12 mb-10">
                            <div class="col-sm-3">
                                <div class="card ">
                                    <div class="card-body card-deck-wrapper">
                                        Payroll Services
                                    </div>
                                    <div class="card-footer">
                                        <select class="select2" >
                                            <option value="1">1-10 Employees | 10,000.00</option>
                                            <option value="2">11-20 Employees | 15,000.00</option>
                                            <option value="3">21-30 Employees | 20,000.00</option>
                                            <option value="4">31-40 Employees | 35,000.00</option>
                                            <option value="5">41 and above | 40,000.00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-10">
                            <div class="col-sm-12">
                                <input type="text" placeholder="OTHER COMPLIANCE" disabled>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>
      
      </div>
    
    </div>
    
</div>

<div class="page-section owl-white-bg fullwidth-slider">
    <div class="owl-white-bg fullwidth-slider  pb-50">        
    
        <!-- Slide Item -->
        <div class="container relative">
            <div class="row">
                <div class="col-sm-12 mb-10">
                    <div class="col-sm-3">
                        <div class="card ">
                            <div class="card-body card-deck-wrapper">
                                RMC 57 (Inventory List)
                            </div>
                            <div class="card-footer">
                                <select class="select2" >
                                    <option value="1">1-10 Employees | 10,000.00</option>
                                    <option value="2">11-20 Employees | 15,000.00</option>
                                    <option value="3">21-30 Employees | 20,000.00</option>
                                    <option value="4">31-40 Employees | 35,000.00</option>
                                    <option value="5">41 and above | 40,000.00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card ">
                            <div class="card-body card-deck-wrapper">
                                Payroll Services
                            </div>
                            <div class="card-footer">
                                <select class="select2" >
                                    <option value="1">1-10 Employees | 10,000.00</option>
                                    <option value="2">11-20 Employees | 15,000.00</option>
                                    <option value="3">21-30 Employees | 20,000.00</option>
                                    <option value="4">31-40 Employees | 35,000.00</option>
                                    <option value="5">41 and above | 40,000.00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card ">
                            <div class="card-body card-deck-wrapper">
                                Payroll Services
                            </div>
                            <div class="card-footer">
                                <select class="select2" >
                                    <option value="1">1-10 Employees | 10,000.00</option>
                                    <option value="2">11-20 Employees | 15,000.00</option>
                                    <option value="3">21-30 Employees | 20,000.00</option>
                                    <option value="4">31-40 Employees | 35,000.00</option>
                                    <option value="5">41 and above | 40,000.00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card ">
                            <div class="card-body card-deck-wrapper">
                                Payroll Services
                            </div>
                            <div class="card-footer">
                                <select class="select2" >
                                    <option value="1">1-10 Employees | 10,000.00</option>
                                    <option value="2">11-20 Employees | 15,000.00</option>
                                    <option value="3">21-30 Employees | 20,000.00</option>
                                    <option value="4">31-40 Employees | 35,000.00</option>
                                    <option value="5">41 and above | 40,000.00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="container relative">
            <div class="row">
                <div class="col-sm-12 mb-10">
                    <div class="col-sm-3">
                        <div class="card ">
                            <div class="card-body card-deck-wrapper">
                                Payroll Services
                            </div>
                            <div class="card-footer">
                                <select class="select2" >
                                    <option value="1">1-10 Employees | 10,000.00</option>
                                    <option value="2">11-20 Employees | 15,000.00</option>
                                    <option value="3">21-30 Employees | 20,000.00</option>
                                    <option value="4">31-40 Employees | 35,000.00</option>
                                    <option value="5">41 and above | 40,000.00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


  <div class="page-section owl-white-bg fullwidth-slider">
    <div class="owl-white-bg fullwidth-slider  pb-50">        
    
      <!-- Slide Item -->
      <div class="container relative">
        <div class="row">
            <div class="col-sm-12 mb-10">
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body card-deck-wrapper">
                            Bookkeeping - Monthly
                        </div>
                        <div class="card-footer text-center"> 10,000.00 
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body card-deck-wrapper">
                            Bookkeeping - Monthly
                        </div>
                        <div class="card-footer text-center"> 10,000.00 
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body card-deck-wrapper">
                            Bookkeeping - Monthly
                        </div>
                        <div class="card-footer text-center"> 10,000.00 
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body card-deck-wrapper">
                            Bookkeeping - Monthly
                        </div>
                        <div class="card-footer text-center"> 10,000.00 
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
      </div>



    </div>
  </div>


</form>	
  
@stop


 
@section('embeddedjs')
<script src="/select2/select2.full.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

var initializeControls=function(){
        _select2=$(".select2").select2({
            templateResult: function(data) {
                var r = data.text.split('|');
                    var $result = $(
                        '<div class="row">' +
                            '<div class="col-xs-7">' + r[0] + '</div>' +
                            '<div class="col-xs-5">' + r[1] + '</div>' +
                        '</div>'
                    );
                    return $result;
            },
            templateSelection: function(data) {
                var r = data.text.split('|');
                    var $result = $(
                        '<div class="row">' +
                            '<div class="col-xs-7">' + r[0] + '</div>' +
                            '<div class="col-xs-5">' + r[1] + '</div>' +
                        '</div>'
                    );
                    return $result;
            },
            placeholder: "Please select.",
            minimumResultsForSearch: -1,
            allowClear: false
        }).prop("disabled", true);
    }();

    var bindEventHandlers=(function(){

        $( ".card-deck-wrapper" ).click(function() {
            $(this).closest('.card').toggleClass( "selected" )
            $(this).next('.card-footer').find('select').prop('disabled', function(i, v) { return !v; });
        });

    })();
});


</script>
@endsection