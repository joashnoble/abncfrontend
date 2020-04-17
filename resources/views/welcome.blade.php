@extends('main')

@section('embeddedcss')
<style>
  {
    color:white;
  }
  .header-1.affix-top #main-menu .navbar .nav > li > a {
    padding: 38px 3px 5px 3px;
    margin: 0 12px 17px 12px;
    border-bottom: 2px solid rgba(45,78,83,1);
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: rgb(216, 216, 216);
    color: #ffffff;
}
</style>
@endsection
@section('content')

<!-- REVO SLIDER FULLSCREEN 1 -->
<div class="relative">
  <div class="rs-fullscr-container">
    <div id="rs-fullscr" class="tp-banner" >
      <ul>	
          <!-- SLIDE 1 -->
          <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="images/dashboard/accountants-book-keepers-consultants-header-image.jpg"  data-saveperformance="on"  data-title="HOME">
            <!-- MAIN IMAGE -->
            <img src="haswell/images/revo-slider/dummy.png"  alt="slidebg1" data-lazyload="images/dashboard/accountants-book-keepers-consultants-header-image.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <!-- LAYERS -->
            <!-- LAYER NR. 0 BG CAPTIONS -->
            <div class="tp-caption rs-parallaxlevel-4 zoomout"
              data-x="left"
              data-y="center" 
              data-speed="1300"
              data-start="200"
              data-easing="Power3.easeInOut"
              style="z-index: 0;">
              <div class="slider-bg-white-cap"></div>
            </div>
            <!--PARALLAX & OPACITY container -->
            <div class="rs-parallaxlevel-4 opacity-scroll2">
              <!-- LAYER NR. 1 -->
              <div class="tp-caption dark-light-100 font-white tp-left sfb tp-resizeme"
                data-x="30"
                data-y="205" 
                data-speed="500"
                data-start="850"
                data-easing="Power1.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">M. NG & T. LOPEZ
              </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption dark-black-100 font-white tp-left sfb tp-resizeme"
                data-x="100"
                data-y="295" 
                data-speed="500"
                data-start="1050"
                data-easing="Power1.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">PARTNERSHIP FIRM
              </div>
              <!-- LAYER NR. 3 LINE -->
              <div class="tp-caption slider-1-cap-line  font-white tp-left hide-0-736 sfb tp-resizeme"
                data-x="650"
                data-y="420" 
                data-speed="1000"
                data-start="1250"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                <div class="cap-line"></div>
              </div> 			
              <!-- LAYER NR. 4 -->
              <div class="tp-caption dark-light-32 font-white fs16-when-0-736 tp-left sfb tp-resizeme"
                data-x="150"
                data-y="450" 
                data-speed="900"
                data-start="1500"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Accountants, Book Keepers and Consultants
              </div>
            </div>
          </li>
								<!-- SLIDE 2 -->
								<li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="images/dashboard/audit-workplace-seminar-background-image-wo-text.jpg"  data-saveperformance="on"  data-title="SEMINAR">
                  <!-- MAIN IMAGE -->
                  <img src="haswell/images/revo-slider/dummy.png"  alt="slidebg2" data-lazyload="images/dashboard/audit-workplace-seminar-background-image-wo-text.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
									<!-- LAYERS -->
									<!-- LAYER NR. 0 BG CAPTIONS -->
									<div class="tp-caption rs-parallaxlevel-4 zoomout"
										data-x="left"
										data-y="center" 
										data-speed="1300"
										data-start="200"
										data-easing="Power3.easeInOut"
										style="z-index: 0;">
										<div class="slider-bg-white-cap"></div>
									</div>	
									<!--PARALLAX & OPACITY container -->
									<div class="rs-parallaxlevel-4 opacity-scroll2">
										<!-- LAYER NR. 1 -->
										<div class="tp-caption center-0-478 font-white dark-light-40 sfb tp-resizeme"
											data-x="45"
											data-y="255" 
											data-speed="500"
											data-start="850"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">{{ $data['carousel_seminar']->seminar_title}}
										</div>
										<!-- LAYER NR. 2 -->
										<div class="tp-caption center-0-478 font-white dark-light-32 sfb tp-resizeme"
											data-x="50"
											data-y="330" 
											data-speed="500"
											data-start="1050"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">{{ $data['carousel_seminar']->speaker_position}} / {{ $data['carousel_seminar']->speaker_fullname}} 
                    </div>
										<!-- LAYER NR. 3 -->
										<div class="tp-caption center-0-478 font-white dark-black-32 sfb tp-resizeme"
                      data-x="50"
                      data-y="407" 
											data-speed="900"
											data-start="1500"
											data-easing="Power3.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">{{ date('F d, Y',  strtotime($data['carousel_seminar']->seminar_date) )}}
                    </div>
										<!-- LAYER NR. 3 -->
										<div class="tp-caption center-0-478 font-white dark-light-32 sfb tp-resizeme"
                      data-x="50"
                      data-y="484" 
											data-speed="900"
											data-start="1500"
											data-easing="Power3.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><button class="btn btn-success">Learn More</button>
                    </div>
									</div>
								</li>
							</ul>
						</div>
					</div>	
					<!-- SCROLL ICON -->
					<div class="local-scroll-cont">
						<a href="#about" class="scroll-down smooth-scroll">
              <div class="icon icon-arrows-down"></div>
            </a>  
					</div>
        </div>

        {{-- SERVICES --}}
        <div id="about" class="page-section p-80-cont">
          <div class="container">
            <div class="row">
              <div class="col-md-3 pb-20">
                <h2 class="section-title wow fadeIn">OUR<br><span class="bold">SERVICES</span></h2>
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 pb-10">
                      <div class="fes5-box wow fadeIn" >
                        <h3>AUDIT SERVICE</h3>
                        <p>Our audit work is at the core of our services as a firm. Our multi-disciplinary audit team collaborates to deliver high-quality audit.</p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 pb-10">
                      <div class="fes5-box wow fadeIn" data-wow-delay="200ms">
                        <h3>TAX SERVICE</h3>
                        <p>By combining industry insights with technical skills, we assist companies with business tax issues related to international and local tax planning as well as legislative and regulatory concerns.</p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 pb-10">
                      <div class="fes5-box wow fadeIn" data-wow-delay="400ms">
                        <h3>ADVISORY SERVICE</h3>
                        <p>Our primary focus in our practice are the fundamental business issues that all companies must address to flourish, such as managing risks, increasing revenues, and controlling costs.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        

        <div class="page-section ">
        
          <div class="container">
            <div class="row">
              <div class="col-md-4 fes1-img-cont wow fadeInUp mb-20">
                <img src="images/dashboard/marco-fernando-ng-portrait-formal.jpg" alt="img" >
              </div>

              <div class="col-md-8">
                <div class="mt-10 mb-10">
                  <h2 class="section-title"><span class="bold">INDUSTRIES</span><br>WE SERVE</h2>
                </div>
                <div class="row">   
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box wow fadeIn" >
                        <h3>Manufacturing</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                        <h3>Agriculture</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                        <h3>Hospitality</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                        <h3>Automotive</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                        <h3>Broadcast</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box  wow fadeIn" data-wow-delay="200ms">
                        <h3>SME</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box  wow fadeIn" data-wow-delay="200ms">
                        <h3>Pharmaceuticals</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box  wow fadeIn" data-wow-delay="200ms">
                        <h3>Finance</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box  wow fadeIn" data-wow-delay="200ms">
                        <h3>Medical</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box  wow fadeIn" data-wow-delay="200ms">
                        <h3>Real Estate</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box  wow fadeIn" data-wow-delay="200ms">
                        <h3>Advertising</h3>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="fes7-box  wow fadeIn" data-wow-delay="200ms">
                        <h3>ICT / BPO / IT</h3>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        




        <div class="page-section pt-110-b-30-cont">
          <div class="container">
                
            <div class="mb-50">
              <h2 class="section-title pr-0">UPCOMING <span class="bold">SEMINARS</span><a href="/seminars" class="section-more right">SEE ALL</a>
                  </h2>
            </div>
            
            <div class="row">
              @foreach($data['seminars'] as $seminar )   
              <!-- Post Item 1 -->
              <div class="col-md-12 wow fadeIn pb-30" >
                <div class="row">
                
                  <div class="col-md-6 blog2-post-title-cont">
                    <div class="post-prev-date-cont">
                      <span class="blog2-date-numb">{{ date('d',  strtotime($seminar->seminar_date) )}}</span><span class="blog2-month">{{ date('F',  strtotime($seminar->seminar_date) )}}</span>
                    </div>
                    <div class="post-prev-title">
                    <h3><a href="/seminar/{{$seminar->seminar_id }}">{{$seminar->seminar_title }}</a></h3>
                      <div class="post-prev-info">
                      {{ $seminar->speaker_position }}<span class="slash-divider">/</span>{{ $seminar->speaker_fullname }}
                      </div>
                    </div>
                  </div>
                    
                  <div class="col-md-6">
                    <div class="blog2-post-prev-text">                     
                    {{ $seminar->seminar_description }} 
                    </div>
                  </div>
                  
                </div>
              </div>
              @endforeach    


            </div>
            
          </div>
        </div>
        
        <div class="page-section pt-50-b-30-cont">
          <div class="container">
                
            <div class="mt-50 mb-50 text-center">
              <h2 class="section-title-2">MEET THE <span class="bold">TEAM</span></h2>
            </div>
          </div>
        </div>

        <div class="grey-light-bg  plr-0-767 clearfix">    
          <!-- COTENT CONTAINER -->
          <div class="white-bg  pt-50 pb-20">
            <div class="relative">
              <!-- PORTFOLIO FILTER -->                    
              <div class="port-filter text-center text-left-767">
                <a href="#" class="filter active" data-filter="*">All</a>
                <a href="#" class="filter" data-filter=".development">SENIORS</a>
                <a href="#" class="filter" data-filter=".design">JUNIORS</a>
                <a href="#" class="filter" data-filter=".photography">GOVERNMENT</a>
              </div>                    
                      
              <!-- ITEMS GRID -->
              <ul class="port-grid port-grid-3 port-grid-gut clearfix" id="items-grid">
                
                <!-- Item 1 -->
                <li class="port-item mix development">
                  <a href="images/dashboard/abandc-staffs-images-1.jpg" class="lightbox mr-20">
                    <div class="port-img-overlay"><img class="port-main-img" src="images/dashboard/abandc-staffs-images-1.jpg" alt="img" ></div>
                  </a>
                  <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <a href="images/dashboard/abandc-staffs-images-1.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      </div>
  
                  </div>
                </li>
  
                <!-- Item 2 -->
                <li class="port-item mix design">
                  <a href="images/dashboard/abandc-staffs-images-2.jpg" class="lightbox mr-20">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="images/dashboard/abandc-staffs-images-2.jpg" alt="img" >
                    </div>
                  </a>
                  <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <a href="images/dashboard/abandc-staffs-images-2.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      </div>
  
                  </div>
                </li>
                
                <!-- Item 3 -->
                <li class="port-item mix photography">
                  <a href="images/dashboard/abandc-staffs-images-3.jpg" class="lightbox mr-20">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="images/dashboard/abandc-staffs-images-3.jpg" alt="img" >
                    </div>
                  </a>
                  <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <a href="images/dashboard/abandc-staffs-images-3.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      </div>
  
                  </div>
                </li>
                
                <!-- Item 4 -->
                <li class="port-item mix development">
                  <a href="images/dashboard/abandc-staffs-images-4.jpg" class="lightbox mr-20">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="images/dashboard/abandc-staffs-images-4.jpg" alt="img" >
                    </div>
                  </a>
                  <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <a href="images/dashboard/abandc-staffs-images-4.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      </div>
  
                  </div>
                </li>
                
                <!-- Item 5 -->
                <li class="port-item mix design">
                  <a href="images/dashboard/abandc-staffs-images-5.jpg" class="lightbox mr-20">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="images/dashboard/abandc-staffs-images-5.jpg" alt="img" >
                    </div>
                  </a>
                  <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <a href="images/dashboard/abandc-staffs-images-5.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      </div>
  
                  </div>
                </li>
                              
                <!-- Item 6 -->
                <li class="port-item mix photography">
                  <a href="images/dashboard/abandc-staffs-images-6.jpg" class="lightbox mr-20">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="images/dashboard/abandc-staffs-images-6.jpg" alt="img" >
                    </div>
                  </a>
                  <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <a href="images/dashboard/abandc-staffs-images-6.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      </div>
  
                  </div>
                </li>
                
                <!-- Item 7 -->
                <li class="port-item mix development">
                  <a href="images/dashboard/abandc-staffs-images-7.jpg" class="lightbox mr-20">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="images/dashboard/abandc-staffs-images-7.jpg" alt="img" >
                    </div>
                  </a>
                  <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <a href="images/dashboard/abandc-staffs-images-7.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      </div>
  
                  </div>
                </li>
                
                <!-- Item 8 -->
                <li class="port-item mix design">
                  <a href="images/dashboard/abandc-staffs-images-8.jpg" class="lightbox mr-20">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="images/dashboard/abandc-staffs-images-8.jpg" alt="img" >
                    </div>
                  </a>
                  <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <a href="images/dashboard/abandc-staffs-images-8.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      </div>
  
                  </div>
                </li>
                
                <!-- Item 9 -->
                <li class="port-item mix photography">
                  <a href="images/dashboard/abandc-staffs-images-2.jpg" class="lightbox mr-20">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="images/dashboard/abandc-staffs-images-2.jpg" alt="img" >
                    </div>
                  </a>
                  <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <a href="images/dashboard/abandc-staffs-images-2.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      </div>
  
                  </div>
                </li>
              </ul>
            
            </div>
          
          </div>
        
        </div>

        <!-- BLOG 1 -->
        <div class="page-section pt-50-b-30-cont">
          <div class="container">
                
            <div class="mb-50">
              <h2 class="section-title pr-0">LATEST <span class="bold">NEWS AND PUBLICATION</span><a href="/publications" class="section-more right">OUR BLOG</a>
                  </h2>
            </div>
            
            <div class="row">
              @foreach($data['news'] as $news )   
              <!-- Post Item 1 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" >
                  
                <div class="post-prev-img">
                <a href="/publication/{{ $news->news_id}}"><img src="haswell/images/blog/post-prev-1.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                <h3><a href="/publication/{{ $news->news_id }}">{{ $news->news_title }}</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  {{ date('F d',  strtotime($news->news_publish_date) )}} <span class="slash-divider">/</span><a href="">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  {{ $news->news_description }}
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                  <a href="/publication/{{ $news->news_id }}" class="blog-more">READ MORE</a>
                  </div>
                </div>
              
              </div>
              @endforeach
            </div>
          </div>
        </div>
@stop


 
@section('embeddedjs')
<script type="text/javascript">
  jQuery(document).ready(function() {
    if ( (navigator.appVersion.indexOf("Win")!=-1) && ( ieDetect == false ) ) {	
              jQuery('#rs-fullscr').revolution(
              {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:700,
                hideThumbs:200,
                
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                //fullScreenAlignForce: "off",
                
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",
                
                hideTimerBar:"on",
                
                touchenabled:"on",
                onHoverStop:"on",
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                            
                parallax:"scroll",
                parallaxBgFreeze:"on",
                parallaxLevels:[45,40,35,50],
                parallaxDisableOnMobile:"on",
                            
                keyboardNavigation:"off",
                
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                    
                shadow:0,
                fullWidth:"off",
                fullScreen:"on",

                spinner:"spinner4",
                
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",
                
                autoHeight:"off",						
                forceFullWidth:"off",						
                            
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,						
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                //fullScreenOffsetContainer: ""	
              });
    } else {
            jQuery('#rs-fullscr').revolution(
              {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:700,
                hideThumbs:200,
                
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",
                
                hideTimerBar:"on",
                
                touchenabled:"on",
                onHoverStop:"on",
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                            
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[0],
                parallaxDisableOnMobile:"on",
                            
                keyboardNavigation:"off",
                
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                    
                shadow:0,
                fullWidth:"off",
                fullScreen:"on",

                spinner:"spinner4",
                
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",
                
                autoHeight:"off",						
                forceFullWidth:"off",						
                            
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,						
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,

              });      
    }									
  });	//ready
</script>
@endsection