<header id="nav" class="header header-1">
    <div class="header-wrapper">
      <div class="container-m-30 clearfix">
        <div class="logo-row">
        
          <!-- LOGO --> 
          <div class="logo-container-2">
  <div class="logo-2">
    <a href="/" class="clearfix">
      <img src="/images/logo.png" class="logo-img" alt="Logo">
    </a>
  </div>
</div>
          <!-- BUTTON --> 
          <div class="menu-btn-respons-container">
              <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                  <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
              </button>
          </div>
       </div>
      </div>

      <!-- MAIN MENU CONTAINER -->
      <div class="main-menu-container">
          
            <div class="container-m-30 clearfix">	
            
                  <!-- MAIN MENU -->
                  <div id="main-menu">
                    <div class="navbar navbar-default" role="navigation">

                      <!-- MAIN MENU LIST -->
                      <nav class="collapse collapsing navbar-collapse right-1024">
                        <ul class="nav navbar-nav">
        
        <!-- MENU ITEM -->
        <li ><a href="/"><div class="main-menu-title">HOME</div></a></li>

        <!-- MENU ITEM -->
        <li class="parent">
          <a href="#"><div class="main-menu-title">NEWS AND PUBLICATION</div></a>
          <ul class="sub">
            @foreach($headerData['h_news'] as $news )
              <li><a href="/publication/{{ $news->news_id }}">{{ $news->news_title}}</a> </li>
            @endforeach
            <li><a href="/publications">SEE ALL</a> </li>
          </ul>
        </li>
        
        <!-- MEGA MENU ITEM -->
        <li class="parent">
          <a href="#"><div class="main-menu-title">SEMINARS</div></a>
          <ul class="sub">
            @foreach($headerData['h_seminars'] as $seminar )
                <li><a href="/seminar/{{ $seminar->seminar_id}}">{{ $seminar->seminar_title}}</a> </li>
            @endforeach
            <li><a href="/seminars">SEE ALL</a> </li>
          </ul>
        </li>					
        
        <li ><a href="#"><div class="main-menu-title">CSR</div></a></li>        
        <li ><a href="#"><div class="main-menu-title">GALLERY</div></a></li>        
        
        <!-- MENU ITEM -->
        <li id="menu-contact-info-big" class="parent megamenu">
          <a href="#"><div class="main-menu-title">CONTACT</div></a>
          <ul class="sub">
            <li class="clearfix" >
              <div class="menu-sub-container">

                <div class="box col-md-6 menu-demo-info closed">
                  <h5 class="title">CONTACT PAGES</h5>
                  <ul>
                    <li><a href="#">Instant Quotation Generator</a></li>
                    <li><a href="/contactus">Message Us</a></li>
                    <li><a href="#">Russian Site</a></li>
                    <li><a href="#">Russian CSR Contact</a></li>
                  </ul>
                </div>
                
                <div class="col-md-6 menu-contact-info">
                  <ul class="contact-list">
                    <li class="contact-loc clearfix">
                      <div class="loc-icon-container">
                        <span aria-hidden="true" class="icon_pin_alt main-menu-contact-icon"></span>
                      </div>
                    <div class="menu-contact-text-container">{{ $headerData['h_company_profile']->company_address }}</div>
                    </li>
                    <li class="contact-phone clearfix">
                      <div class="loc-icon-container">
                        <span aria-hidden="true" class="icon_phone main-menu-contact-icon"></span>
                      </div>	
                      <div class="menu-contact-text-container">{{ $headerData['h_company_profile']->mobile_no }} / {{ $headerData['h_company_profile']->landline }}</div>
                    </li>
                    <li class="contact-mail clearfix" >
                      <div class="loc-icon-container">
                        <span aria-hidden="true" class="icon_mail_alt main-menu-contact-icon"></span>
                      </div>
                      <div class="menu-contact-text-container">							
                        <a class="a-mail" href="mailto:{{ $headerData['h_company_profile']->email_address }}">{{ $headerData['h_company_profile']->email_address }}</a>
                      </div>	
                    </li>
                  </ul>
                </div>
                
              </div>
            </li>
          </ul>
        </li>
      
                        </ul>
            
                      </nav>

                    </div>
                  </div>
                  <!-- END main-menu -->
                  
            </div>
            <!-- END container-m-30 -->
          
      </div>
      <!-- END main-menu-container -->
      
      <!-- SEARCH READ DOCUMENTATION -->
      <ul class="cd-header-buttons">
          <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
      </ul> <!-- cd-header-buttons -->
      <div id="cd-search" class="cd-search">
          <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
              <input type="text" value="" name="q" id="q" placeholder="Search...">
          </form>
      </div>
      
    </div>
    <!-- END header-wrapper -->
    
  </header>