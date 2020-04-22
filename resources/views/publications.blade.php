@extends('main')

@section('embeddedcss')
<style>

</style>
@endsection
@section('content')
<div class="page-title-cont page-title-large grey-dark-bg page-title-img  pt-250" style="background-image: url(images/blog-bg.jpg)">
    <div class="relative container align-left">
    <div class="row">
        
        <div class="col-md-8">
        <h1 class="page-title">News and Publications</h1>
        <div class="page-sub-title">
            Latest Accounting Articles and Accouncements. 
        </div>
        </div>
        <div class="col-md-4">
        <div class="breadcrumbs">
            <a href="/">Home</a><span class="slash-divider">/</span><a href="#">News and Publications</a></span>
        </div>
        </div>
      
    </div>
    </div>
</div>

<div class="container">
        <!-- COTENT CONTAINER -->
        <div class="container p-140-cont">
            <div class="row">
              <!-- CONTENT -->
              <div class="col-sm-8 blog-main-posts">
                <div class="row">
                  <?php $i = 0;  foreach ($data['news'] as $new): ?>
                  <div class="col-md-6 wow fadeIn pb-70">
                    <div class="post-prev-img">
                      <a href="/publication/{{ $new->news_id }}"><img src="{{ config('global.backend_site') }}{{ $new->gallery_file_path}}" alt="img"></a>
                    </div>
                    <div class="post-prev-title">
                      <h3><a href="/publication/{{ $new->news_id }}">{{ $new->news_title }}</a></h3>
                    </div>
                    <div class="post-prev-info">
                    {{ date('F d, Y',  strtotime($new->news_publish_date) )}}
                    </div>
                    <div class="post-prev-text">
                        {{ $new->news_description }}   
                    </div>
                    <div class="post-prev-more-cont clearfix">
                      <div class="post-prev-more left">
                        <a href="/publication/{{ $new->news_id }}" class="blog-more">READ MORE</a>
                      </div>
                    </div>
                  </div>
                  <?php $i++;   // ADDING OF ROW AFTER TWO ITEMS
                    if ($i % 2 == 0 && $i != count($data['news'])) { 
                        echo "</div><div class='row'>";
                    } ?> 
                  
                  <?php endforeach; ?>
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
                  <h5 class="widget-title">Seminars</h5>
                  <div class="widget-body">
                    <ul class="clearlist widget-posts">
                    <?php foreach ($data['seminars'] as $seminar): ?>
                      <li class="clearfix">
                        <div class="widget-posts-descr">
                        <a href="/seminar/{{$seminar->seminar_id}}" title="">{{$seminar->seminar_title}}</a>
                        <div>{{ date('F d',  strtotime($seminar->seminar_date) )}} <span class="slash-divider">/</span>{{ $seminar->speaker_fullname }}</div> 
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
              <!-- PAGINATION -->
              <div class="mt-0">
                <nav class="blog-pag">
                    {{ $data['news']->links() }}
                </nav>
              </div>
            
          </div>








    
</div>
@stop


 
@section('embeddedjs')
<script type="text/javascript">


</script>
@endsection