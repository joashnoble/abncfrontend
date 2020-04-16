@extends('main')

@section('embeddedcss')
<style>

</style>
@endsection
@section('content')
<div class="page-title-cont page-title-small grey-light-bg">
    <div class="relative container align-left">
      <div class="row">
        
        <div class="col-md-8">
          <h5 class="page-title">{{ $data['seminar']->seminar_title }} </h5>
        </div>
        
        <div class="col-md-4">
          <div class="breadcrumbs">
            <a href="index.html">Home</a><span class="slash-divider">/</span><a href="/seminars">SEMINARS</a>
          </div>
        </div>
        
      </div>
    </div>
</div>

<div class="container p-140-cont">
    <div class="row">
    
      <!-- CONTENT -->
      <div class="col-sm-8 blog-main-posts">
    
        <!-- POST ITEM -->
        <div class="blog-post wow fadeIn pb-50">
          <div class="post-prev-img">
            <a href="blog-single-sidebar-right.html"><img src="/haswell/images/blog/post-wide-1.jpg" alt="img"></a>
          </div>
            
          <div class="post-prev-title">
            <h3><a href="blog-single-sidebar-right.html">{{ $data['seminar']->seminar_title }}</a></h3>
          </div>
            
          <div class="post-prev-info">
            {{ date('F d, Y',  strtotime($data['seminar']->seminar_date) )}}<span class="slash-divider">/</span>{{ $data['seminar']->speaker_fullname}}
          </div>
            
          <div class="post-prev-text">
            {{ $data['seminar']->seminar_description }}
          </div>
            

        </div>

       
      </div>

      <!-- SIDEBAR -->
      <div class="col-sm-4 col-md-3 col-md-offset-1">
        
        <!-- SEARCH -->
        <div class="widget">
          <form class="form-search widget-search-form" action="page-search-results.html" method="get">
            <input type="text" name="q" class="input-search-widget" placeholder="Search">
            <button class="" type="submit" title="Start Search">
              <span aria-hidden="true" class="icon_search"></span>
            </button>
          </form>
        </div>
        
        
        <!-- WIDGET -->
        <div class="widget">
          
          <h5 class="widget-title">Recent posts</h5>
          
          <div class="widget-body">
            <ul class="clearlist widget-posts">
              <li class="clearfix">
                <div class="widget-posts-descr">
                  <a href="#" title="">TIME FOR MINIMALISM</a>
                  <div>21 Jule<span class="slash-divider">/</span> John Doe</div> 
                </div>
              </li>

              <li class="clearfix">
                <div class="widget-posts-descr">
                  <a href="#" title="">NEW TRENDS IN WEB</a>
                  <div>21 Jule<span class="slash-divider">/</span> John Doe</div> 
                </div>
              </li>

              <li class="clearfix">
                <div class="widget-posts-descr">
                  <a href="#" title="">THE SOUND OF LIFE</a>
                  <div>21 Jule<span class="slash-divider">/</span> John Doe</div> 
                </div>
              </li>

            </ul>
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