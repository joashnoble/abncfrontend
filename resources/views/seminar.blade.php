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
            <a href="/">Home</a><span class="slash-divider">/</span><a href="/seminars">SEMINARS</a>
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
            <img src="{{ config('global.backend_site') }}{{ $data['seminar']->gallery_file_path}}" alt="img">
          </div>
          <div class="post-prev-title">
            <h3>{{ $data['seminar']->seminar_title }}</h3>
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
        
        <div class="widget">
          <h5 class="widget-title">Latest Seminars</h5>
          <div class="widget-body">
            <ul class="clearlist widget-posts">
            <?php foreach ($data['other_seminars'] as $others): ?>
              <li class="clearfix">
                <div class="widget-posts-descr">
                <a href="/seminar/{{$others->seminar_id}}" title="">{{$others->seminar_title}}</a>
                <div>{{ date('F d',  strtotime($others->seminar_date) )}} <span class="slash-divider">/</span>{{ $others->speaker_fullname }}</div> 
                </div>
              </li>
              <?php endforeach; ?>
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