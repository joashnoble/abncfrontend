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
<form id="contact-form" action="php/contact-form.php" method="POST" autocomplete="off">
    <?php foreach ($data['categories'] as $category): ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12" >
                        <h4 class="blog-page-title mt-0 mb-10" style="text-transform: uppercase; color: #197a2e!important;">{{$category->category_desc}}</h4>
                    </div>
                </div>
            </div>
        <?php foreach ($data['service_types'] as $service_type): 
            if($category->category_id == $service_type->category_id){ ?>
            <!-- Slide Item -->
                <div class="container mb-20">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="blog-page-title mt-0 mb-20"><small><b>{{$service_type->service_type_desc}}</b></small></h4>
                        </div>
                        <div class="owl-3items-nav owl-carousel owl-arrows-bg" >   
                            <?php foreach ($data['services'] as $service): 
                                if($service->service_type_id == $service_type->service_type_id){ ?>
                                    <div class="item mb-0 text-center">
                                    <div class="card " id="{{$service->service_id}}" service="{{$service_type->service_type_desc}}">
                                    <div class="card-body card-deck-wrapper">{{$service->service_desc }}</div>
                                            <div class="card-footer text-center">
                                                <select class="select2" >
                                                    <?php  foreach ($data['service_items'] as $items): 
                                                     if($items->service_id == $service->service_id){ ?>
                                                        <option value="{{$items->service_group_type_id}}"  data-text="{{$items->service_group_desc}}" data-amount="{{$items->service_fee}}">{{$items->service_group_desc}} | {{number_format($items->service_fee,2)}}</option>
                                                    <?php } ?>
                                                    <?php endforeach; ?> 
                                                </select>
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
</form>	
</div>


<div class="page-section p-140-cont">
    <div class="container">
      <div class="row mb-40">
      
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-striped shopping-cart-table">
            <thead>
              <tr>
              <th></th>
              <th>SERVICE</th>
              <th>DESCRIPTION</th>
              <th>CLASSIFICATION</th>
              <th>PRICE</th>
              <th></th>
              </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
          </div>
        </div>
      
      </div>
    
      
      <!-- DIVIDER -->
      <hr class="mt-0 mb-20">
      
      <!-- CALCULATE -->
      <div class="row">
      
                          
        <div class="col-sm-5 col-md-offset-7 ">

            <h5 class="mt-60 mb-10">
              <span class="font-norm1 ">CART SUBTOTAL:</span> <strong><div id="subtotal"></div></strong>
            </h5>
            
            <h5 class="mt-10 mb-10">
              <span class="font-norm1 ">Admin Fees:</span> <strong><div id="adminfee"></div></strong>
            </h5>
            
            <h3 class="mt-10 mb-30">
              <span class="font-light ">ORDER TOTAL:</span> <strong><div id="grandtotal"></div></strong>
            </h3>
            
            <div>
              <a href="#" class="button medium gray">PROCEED TO CHECKOUT</a>
            </div>
            
        </div>
      
      </div>
      
    </div>
  </div>




  
@stop


 
@section('embeddedjs')
<script src="/select2/select2.full.min.js"></script>
<script src="/formatter/autoNumeric.js"></script>
<script src="/formatter/accounting.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var oTableItems={
        cartid : 'td:eq(0)',
        service: 'td:eq(1)',
        service_desc : 'td:eq(2)',
        service_class : 'td:eq(3)',
        service_amount : 'td:eq(4)'
    };

    var reComputeTotal=function(){
        var st = 0; af = 0; gt = 0
        var rows=$('table.shopping-cart-table > tbody tr');
        $i = 1;

        $.each(rows,function(){
            st+=parseFloat(accounting.unformat($(oTableItems.service_amount,$(this)).text()));
            $(oTableItems.cartid,$(this)).text($i); $i++;
        });
        af = (st*0.05);
        gt = st + af;
        $('#subtotal').text(accounting.formatNumber(st,2))
        $('#adminfee').text(accounting.formatNumber(af,2))
        $('#grandtotal').text(accounting.formatNumber(gt,2))
    };

    var initializeControls=function(){
        _select2=$(".select2").select2({
            templateResult: function(data) {
                var r = data.text.split('|');
                    var $result = $(
                        '<div class="row">' +
                            '<div class="col-xs-7 text-left">' + r[0] + '</div>' +
                            '<div class="col-xs-5">' + r[1] + '</div>' +
                        '</div>'
                    );
                    return $result;
            },
            templateSelection: function(data) {
                var r = data.text.split('|');
                    var $result = $(
                        '<div class="row">' +
                            '<div class="col-xs-7 text-left">' + r[0] + '</div>' +
                            '<div class="col-xs-5">' + r[1] + '</div>' +
                        '</div>'
                    );
                    return $result;
            },
            placeholder: "Please select.",
            minimumResultsForSearch: -1,
            allowClear: false
        }).prop("disabled", true);
        reComputeTotal();
    }();

    var bindEventHandlers=(function(){

        $( ".card-deck-wrapper" ).click(function() {
            var sCard = $(this).closest('.card');

            if(!sCard.hasClass('selected')) { // DOESNT HAVE CLASS SO ADD THE CLASS
                sCard.addClass('selected');
                $(this).next('.card-footer').find('select').prop('disabled', false);

                var  selectedObj = $(this).next('.card-footer').find('select');
                var i =  selectedObj.val();
                var valueObj = selectedObj.find('option[value="' + i + '"]');
                
                $('.shopping-cart-table > tbody').append(newRowItem({
                   service : sCard.attr('service'),
                   service_id : sCard.attr('id'),
                   service_desc : sCard.children('.card-body').text(),
                   service_class : valueObj.data('text'),
                   service_amount : valueObj.data('amount'),
                }));
                reComputeTotal();
            }else { // HAS AN ACTIVE CLASS SO REMOVE
                sCard.removeClass('selected');
                removeWithId = sCard.attr('id');
                $(this).next('.card-footer').find('select').prop('disabled', true);
                $('table.shopping-cart-table > tbody > tr[id="'+removeWithId+'"]').remove();
                reComputeTotal();
            }
        }); // END OF CLICK FUNCTION

        _select2.on('select2:select',function(e){
            var i=$(this).select2('val');
            var valueObj = $(this).find('option[value="' + i + '"]');
            var sCard = $(this).select().closest('.card');
            var updateWithId = sCard.attr('id');
            // UPDATE CART DETAILS
            $('table.shopping-cart-table > tbody > tr[id="'+updateWithId+'"] > td:nth-child(4)').text(valueObj.data('text'));
            $('table.shopping-cart-table > tbody > tr[id="'+updateWithId+'"] td:nth-child(5)').text(accounting.formatNumber(valueObj.data('amount'),2));
            reComputeTotal();

        });

        $('table.shopping-cart-table > tbody').on('click','button[name="remove_item"]',function(){
            updateWithId = $(this).closest('tr').attr('id');
            sCard = $('div#'+updateWithId);
            sCard.removeClass('selected');
            sCard.find('.card-footer').find('select').prop('disabled', true);
            $(this).closest('tr').remove();
            reComputeTotal();
        });

    })();


    var newRowItem=function(d){
       return '<tr id="'+d.service_id+'" class="cart_'+d.service_id+'">'+
        '<td class="text-center"></td>'+
        '<td >'+d.service+'</td>'+
        '<td >'+d.service_desc+'</td>'+
        '<td class="font-black">'+d.service_class+'</td>'+
        '<td class="font-black">'+accounting.formatNumber(d.service_amount,2)+'</td>'+
        '<td ><button type="button" name="remove_item"> <span aria-hidden="true" class="icon_close"></span></a></button></td>'+
        '</tr>';


    }


});


</script>
@endsection