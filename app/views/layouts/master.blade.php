  <!-- //LOCATION: remax/public
  <!-- //<!DOCTYPE html>
  <!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    @if(!isset($title))
    <title>Remax Skokie, Homes Sale, Houses Rent Remax Skokie, Real Estate Niles</title>
    <meta name="description" content="Comprehensive Real Estate Services, Buy House, Get approved for Home Loan, 
    Rent, Sell, Invest in Real Estate. ONE STOP SERVICE!" />
    @else

    <title>{{ucwords($title)}}</title>
    <meta name="description" content="{{ucwords($meta)}}" />

    @endif


    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    {{HTML::style("comp/stylesheets/screen.css" )}} 


    {{HTML::script("comp/javascripts/vendor/custom.modernizr.js")}} 
    {{HTML::script("comp/javascripts/script.js")}} 

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-43248319-1', 'remax1stclass.com');
      ga('send', 'pageview');

    </script>

  </head>
  <body>

    <div class="accountPanelWrapper">
      <div class="row">

        <div class="large-7 columns small-12 columns residentialCommercialContent">
         <p class="realEstateRC">RESIDENTIAL, COMMERCIAL & INVESTMENT REAL ESTATE
         </p>

       </div>
       <div class="large-5 columns small-12 columns right accountPanel">
        <ul class="inline-list ulAccountPanel">


         @if(!Auth::check())
         <li class="liSignIn right">
          {{link_to('#', 'Sign In', array('data-reveal-id'=>'adminAuth'))}}
        </li>
        <li class="liCreateAccount right">
          <em>{{link_to('#', 'Create Your Free Account', array('data-reveal-id'=>'createAccount'))}}</em>
        </li>
        @else
        <li class="liSignIn right">
          <a href="{{URL::route('panel')}}">
            <img class="userImg"src="{{url('comp/img/user.png')}}" alt="name">

            <em>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</em></a>
          </li>
          <li class="liSignIn right">
            {{link_to_route('logout', 'Logout');}}

          </li>
          @endif
        </ul>
      </div>
    </div>

  </div>

  <!-- navPanel starts here -->

  <div class="navPanel">
    <div class="row">
      <div class="large-12 columns noPadding">

        <nav class="top-bar">
          <ul class="title-area">
            <!-- Title Area -->
            <li class="name">
              <h1 class="companyName"Homes for Sale in >
                {{link_to_route('home', 'REMAX FIRST CLASS');}}
              </h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out  "Menu" to just have icon alone -->

            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>
          <section class="top-bar-section">
            <ul class="right">
              <li>{{link_to_route('home', 'Home');}}</li>
              <li class="has-dropdown">{{link_to_route('about', 'About');}}
                <ul class="dropdown">
                 <li>{{link_to_route('about', 'Why Remax 1st Class?');}}</li> 
                 <li>{{link_to_route('all-agents', 'Our Agents');}}</li> 
                 <li>{{link_to_route('Remax-agent', 'Become a Remax 1st Class Agent', array(), array('class'=>'className'))}}</li>
               </ul>
             </li>

      

            <li class="has-dropdown">{{link_to('#', 'Estate Listings');}}

              <ul class="dropdown">
             

						<li>{{link_to_route('skokie-lists', 'Skokie');}}</li>


						<li>{{link_to_route('niles-lists', 'Niles');}}</li>


						<li>{{link_to_route('evanston-lists', 'Evanston');}}</li>


						<li>{{link_to_route('morton-grove-lists', 'Morton-Grove');}}</li>


						<li>{{link_to_route('glenview-lists', 'Glenview');}}</li>


						<li>{{link_to_route('park-ridge-lists', 'Park-Ridge');}}</li>


						<li>{{link_to_route('lincolnwood-lists', 'Lincolnwood');}}</li>


						<li>{{link_to_route('wilmette-lists', 'Wilmette');}}</li>


						<li>{{link_to_route('winnetka-lists', 'Winnetka');}}</li>


						<li>{{link_to_route('lake-forest-lists', 'Lake-Forest');}}</li>

<!-- =location -->																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																
						

						

						<!-- =locationEnd -->
               
              </ul>
            </li>
              
                   <li class="has-dropdown">{{link_to('#', 'Buying Home');}}

              <ul class="dropdown">
               
                <li>{{link_to_route('the-benefits-of-home-ownership', 'The Benefits of Home Ownership');}}</li>
                <li>{{link_to_route('the-importance-of-buyers-agent', 'The Importance of a Buyer\'s Agent');}}</li>
                <li>{{link_to_route('deciding-where-to-live', 'Deciding Where to Live');}}</li>
                <li>{{link_to_route('anatomy-of-a-home-purchase', 'Anatomy of a Home Purchase');}}</li>
                <li>{{link_to_route('five-tips-to-narrow-your-online-home-search', '5 Tips to Narrow Your Online Home Search');}}</li>
              </ul>
            </li>


            <li class="has-dropdown">{{link_to('#', 'Selling Home');}}
              <ul class="dropdown">
                <li>{{link_to_route('the-right-listing-agent', 'The Right Listing Agent');}}</li>
                <li>{{link_to_route('how-an-agent-markets-your-home', 'How an Agent Markets Your Home');}}</li>
                <li>{{link_to_route('pricing-your-home-to-sell', 'Pricing Your Home to Sell');}}</li>
                <li>{{link_to_route('preparing-your-house-for-sale', 'Preparing Your House for Sale');}}</li>
                <li>{{link_to_route('consider-a-home-inspection-when-selling', 'Consider a Home Inspection When Selling');}}</li>
              </ul>
              <li/>
              <li class="has-dropdown">{{link_to('#', 'Mortgage');}}
                <ul class="dropdown">
                  <li>{{link_to_route('finding-the-right-mortgage-professional', 'Finding the Right Mortgage Professional');}}</li>
                  <li>{{link_to_route('getting-preapproved', 'Getting Preapproved');}}</li>
                  <li>{{link_to_route('how-much-can-you-afford', 'How Much Can you afford?');}}</li>
                  <li>{{link_to_route('down-payments-how-much-do-you-need', 'Down Payments: How Much Do You Need?');}}</li>
                  <li>{{link_to_route('mortgages-101-basic-loan-types', 'Mortgages 101: Basic Loan Types');}}</li>
                  <li>{{link_to_route('renovating-a-home', 'Renovating a Home? Consider a 203(k) Loan');}}</li>
                </ul>
                <li/>

                <li>{{link_to_route('contact', 'Contact');}}</li> 
              </ul>
            </section>
          </nav>
        </div>
      </div>
    </div>
    <!-- navPanel Ends Here -->


    <!-- =logoWrapper -->
    <div class="logoWrapper">
     <div class="row">

      <div class="large-2 columns logoContent">
       <a href="{{URL::route('home')}}" title="Home Page">
         <img src="{{url('comp/img/REMAX1Logo.png')}}" alt="Remax First Class Logo">
       </a> 
     </div><!-- =logoContent -->

     <div class="large-4 columns  sloganText">
      <p class="sloganTop">YOU NEED ONLY ONE COMPANY </p> <p> FOR ALL YOUR REAL ESTATE NEEDS</p>
      <ul class="inline-list ulCallUs">
        <li class="callUsContent">

          <img src="{{url('comp/img/phone40.png')}}" alt="remax phone icon">
        </li>
        <li class="left callUs has-tip-left" title="Call Our Agents for a Free Consultation">
          <span class="callUs">(847) 674-9797</span>
        </li>
      </ul>
        <!-- <div class="callUsContent">
        </div>

        <div class="left callUs has-tip-left" title="Call Our Agents for a Free Consultation">
        </div>
      -->

    </div>
    <div class="large-4 columns oneStopService">
      <img class="left" src="{{url('comp/img/one_stop_service/One-Stop-Service-Text.png')}}" alt="Real Estate One Stop Service">
    </div>



    <aside class="large-2 columns logoDiv">
      <div class="row">
        <div class="large-12 small-12 columns connectWithContent">

          <a target="_blank" class="has-tip-left" title="Our Facebook Page" href="https://www.facebook.com/pages/Remax-1st-CLASS/177448822432081"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/facebook.png')}}" alt="Skokie Remax First Class Facebook Icon"><a/>
            <a target="_blank" class="has-tip-left" title="Our Twitter Page" href="https://twitter.com/RemaxFirstClass"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/twitter.png')}}" alt="Skokie Remax First Class Twitter Profile">
              <a/>
              <a target="_blank" class="has-tip-left" title="Our Linkedin Page" href="http://www.linkedin.com/profile/view?id=271875691&trk=nav_responsive_tab_profile"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/linkedin.png')}}" alt="Skokie Remax First Class Linkedin Profile">
                <a/>

                <a target="_blank" class="has-tip-left" title="Our Google Plus Page" href="https://plus.google.com"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/google.png')}}" alt="Skokie Remax First Class Google Profile">
                  <a/>
                  <a target="_blank" class="has-tip-left" title="Our Yelp Page" href="http://www.yelp.com/biz/remax-first-class-skokie"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/yelp.png')}}" alt="Skokie Remax First Class Feed Profile">
                    <a/>
                    <a target="_blank" class="has-tip-left" title="Our Page" href="https://www.youtube.com/"><img class="fiveMarginBottom" src="{{url('comp/img/social_header/you_tube.png')}}" alt="Skokie Remax First Class Youtube Profile"><a/>

                    </div>
                  </div>
                  <ul class="inline-list ulShortSaleChicago">
                    <li id="shortSaleChicagoLogo"> 
                      <a target="_blank" href="http://www.shortsalechicago.us/Short-Sale-Chicago"><img class="imgShortSale"src="{{url('comp/img/Chicago-Short-Sale-Logo_small.png')}}" alt="name"></a>
                    </li>
                    <li class="shortSaleChicago">
                      <a target="_blank" href="http://www.shortsalechicago.us/Short-Sale-Chicago"><span>Short Sale <br/> Chicago</span></a>
                    </li>
                  </ul>

                  <ul class="inline-list ulIcons">
                   <li class="liIcon right">
                    <a href="#" class="mailIcon has-tip-left" title="Send Us Email" data-reveal-id="myModal"> 
                      <img src="{{url('comp/img/icons/mail_remax1.png')}}" alt="REMAX FIRST CLASS Mail Icon" ></a>

                    </li>
                    <li class="liIconi right">
                      <a href="{{ URL::route('home')}}" class="homeIcon has-tip-left" title="Home Page">
                        <img src="{{url('comp/img/icons/home_remax1.png')}}" alt="REMAX FIRST CLASS Home Icon">
                      </a> 

                    </li>
                  </ul>

                  <!-- =mailIcon -->
                  <!-- </div> -->
                  <!-- </div> -->

                </aside>          
              </div>
            </div><!-- =logoWrapper ends here -->
            <!-- =header ends here -->


            <div id="mainContent">
             <div class="row">
              <div class="large-8 columns">
                 <!--   @if(Session::has('message'))
                   {{Session::get('message')}}
                   @endif --> 
                   @yield('content')
                 </div>

                 <!--  =aside starts here-->
                 <adide class="large-4 columns">
                   <div class="row">
                    <div class="large-12 columns listingSection">

                      <div class="section-container tabs" data-section="tabs">
                        <section>
                          <h5 class="title" data-section-title><a class="sectionWidth find" href="#panel1"> PROPERTY FOR SALE</a></h5>
                          <div class="content" data-section-content>


                            <!-- Buy / SELL -->



                            <div class="row">
                              <div class="large-12 columns">


                               {{Form::open(array('url' => 'search', 'method'=>'GET'))}}

                               <div class="row">
                                 <div class="large-12 columns">
                                   {{Form::label('location', 'Location')}}
                                   {{Form::text('location', Input::get('location'), array('placeholder'=>'City and State, Address or Zip Code', 'class'=>'findInput'))}}
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="large-12 columns">
                                   {{Form::label('from', 'Price Range')}}
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="large-6 columns">
                                   {{Form::text('from', Input::get('from'), array('placeholder'=>'$ From', 'class'=>'findInput'))}}
                                 </div>
                                 <div class="large-6 columns">
                                   {{Form::text('to',  Input::get('to'), array('placeholder'=>'$ To', 'class'=>'findInput'))}}
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="large-6 columns">
                                   {{Form::label('beds', 'Bedrooms')}}
                                   {{Form::text('beds', Input::get('beds'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                                 </div>
                                 <div class="large-6 columns">
                                   {{Form::label('baths', 'Bathrooms')}}
                                   {{Form::text('baths', Input::get('baths'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                                 </div>

                               </div>
                               <div class="row">
                                 <div class="large-4 columns">

                                   {{ Form::submit('Search', array('class'=>'button small secondary radius submitSearch'))}}
                                   <br/>
                                 </div>
                               </div>

                               {{Form::close()}}

                             </div>
                           </div>

                           <div class="row">
                             <div class="large-12 columns showAllListings ">
                              {{link_to('show-all-listings', 'BROWSE ALL LISTINGS FOR SALE', array('class'=>'browseAllListings button radius expand '));}} 
                            </div>
                          </div>
                          <div class="row">
                           <div class="large-10 large-centered columns listingsAlertBox">
                             {{link_to('browse/2', 'SINGLE FAMILY HOMES FOR SALE', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                           </div>

                         </div>

                         <div class="row">
                           <div class="large-10 large-centered columns listingsAlertBox">
                             {{link_to('browse/1', 'CONDOS FOR SALE', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                           </div>

                         </div>

                       </div>
                     </section>   <!-- =find your home section ends here -->
                     <!-- Buy / SELL -->

                     @if(isset($rentals))
                     <section class='active'>
                      @else
                      <section>
                        @endif

                        <h5 class="title" data-section-title><a class="sectionWidth find" href="#panel2">PROPERTY FOR RENT</a></h5>
                        <div class="content" data-section-content>
                          <div class="row">
                            <div class="large-12 columns">


                             {{Form::open(array('url' => 'rent', 'method'=>'GET'))}}

                             <div class="row">
                               <div class="large-12 columns">
                                 {{Form::label('location_r', 'Location')}}
                                 {{Form::text('location_r',Input::get('location_r'), array('placeholder'=>'City and State, Address or Zip Code', 'class'=>'findInput'))}}
                               </div>
                             </div>

                             <div class="row">
                               <div class="large-12 columns">
                                 {{Form::label('from_r', 'Price Range')}}
                               </div>
                             </div>

                             <div class="row">
                               <div class="large-6 columns">
                                 {{Form::text('from_r', Input::get('from_r'), array('placeholder'=>'$ From', 'class'=>'findInput'))}}
                               </div>
                               <div class="large-6 columns">
                                 {{Form::text('to_r',  Input::get('to_r'), array('placeholder'=>'$ To', 'class'=>'findInput'))}}
                               </div>
                             </div>
                             <div class="row">
                               <div class="large-6 columns">
                                 {{Form::label('beds_r', 'Bedrooms')}}
                                 {{Form::text('beds_r', Input::get('beds_r'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                               </div>
                               <div class="large-6 columns">
                                 {{Form::label('baths_r', 'Bathrooms')}}
                                 {{Form::text('baths_r', Input::get('baths'), array('placeholder'=>'#', 'class'=>'findinput'))}}
                               </div>

                             </div>
                             <div class="row">
                               <div class="large-4 columns">

                                 {{ Form::submit('Search', array('class'=>'button small secondary radius submitSearch'))}}
                                 <br/>
                               </div>
                             </div>

                             {{Form::close()}}


                           </div>
                         </div>
                         <!-- Buy / SELL -->

                         <div class="row">
                           <div class="large-12 columns showAllListings">
                            {{link_to('all-rent-listings', 'BROWSE ALL LISTINGS FOR RENT', array('class'=>'browseAllListings button radius expand '));}} 
                          </div>
                        </div>
                        <div class="row">
                         <div class="large-6 columns">
                           {{link_to('rent-apartments', 'APARTMENTS', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                         </div>

                         <div class="large-6 columns">
                           {{link_to('rent-houses', 'HOUSES', array('class'=>'alert-box secondary expand radius propertiesAllert'));}}
                         </div>
                       </div>

                     </div>                        
                   </section>

                 </div>

               </div><!-- aside  large-12 columns panel --> 
             </div>

             <div class="row">
               <div class="large-12 columns panel newListings"> 
                 <div>
                  <h4> <a class="newsHead" href="#">NEW LISTINGS FOR SALE</a> </h4>
                </div>
                <hr/>
                <ul class="large-block-grid-3 small-block-grid-2 ulagents">
                  <li class="liNewListings"><a class="th radius" href="{{URL::to('search/5')}}"><img class="imgNewListings"src="{{url('comp/img/images/5/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                  <li class="liNewListings"><a class="th radius" href="{{URL::to('search/133')}}"><img class="imgNewListings"src="{{url('comp/img/images/133/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                  <li class="liNewListings"><a class="th radius" href="{{URL::to('search/492')}}"><img class="imgNewListings"src="{{url('comp/img/images/492/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                  <li class="liNewListings"><a class="th radius" href="{{URL::to('search/480')}}"><img class="imgNewListings"src="{{url('comp/img/images/480/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                  <li class="liNewListings"><a class="th radius" href="{{URL::to('search/403')}}"><img class="imgNewListings"src="{{url('comp/img/images/403/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                  <li class="liNewListings"><a class="th radius" href="{{URL::to('search/815')}}"><img class="imgNewListings"src="{{url('comp/img/images/815/1.jpg')}}" alt="RE/MAX FIRST CLASS New Listing"><a/></li>
                </ul>
              </div>
            </div>

            @if(isset($agents)) 
            <div class="row">
             <div class="large-12 columns panel ourAgents">
               <div>
                 <h4 class="newsHead">
                   <a class="newsHead"href="">OUR AGENTS
                   </a>
                 </h4>
               </div>
               <hr/>

               <ul class="large-block-grid-3  small-block-grid-2 ulagents">
                @foreach($agents as $agent)
                <li  class="liAgents">
                  <a class="th radius" data-reveal-id="{{$agent['id']}}" href="#">
                    <img src="{{url('comp/img/agents/'.$agent['id'].'.jpg')}}" alt="RE/MAX FIRST CLASS agent profile">
                    <a/>

                    <div class="row marginPadding">
                     <div class="large-12 columns marginPadding">
                       <a class="agentLink" data-reveal-id="{{$agent['id']}}" href="#">
                        {{$agent['firstname']}}
                        {{$agent['lastname']}}
                      </a>
                    </div>
                  </div>

                </li> 
                @endforeach

              </ul>

              <div class="row">
               <div class="large-12 columns showAllListings allAgents"> 
                {{link_to('all-agents', 'SEE ALL OUR AGENTS', array('class'=>'browseAllListings button radius expand '));}}

              </div>
            </div>
          </div>
        </div>
        @endif
      </aside>
      <!-- =adide ands here -->

    </div>
  </div>     <!-- /* =mainContent ends here */ -->


  <!-- /* =footer starts here */ -->

  <footer>
    <div class="row">
      <div class="large-4 columns">
        <div class="row">
          <div class="large-12 columns">
            <a class="th has-tip-left logoFooterPadding" title="Multiple Listing Service" href="#">
              <img src="{{url('comp/img/mls.png')}}" alt="Multiple Listing Service">
            </a>
            <a class="th has-tip-left logoFooterPadding" title="Coming Soon RE/MAX 1ST CLASS COMMERCIAL" href="#">
              <img src="{{url('comp/img/remax-commercial-logo.png')}}" alt="RE/MAX 1ST CLASS COMMERCIAL">
            </a>
            <a target="_blank" rel="nofollow" class="th has-tip-left logoFooterPadding"  title="Visit Our Remax Short Sale Chicago Website"  href="http://www.shortsalechicago.us/Short-Sale-Chicago">
              <img src="{{url('comp/img/Chicago-Short-Sale-Logo.png')}}" alt="Chicago Short Sale">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns logoRemaxFooter">
            <a href="{{ URL::route('home')}}">
              <img src="{{url('comp/img/logo-footer.png')}}" alt="Logo RE/MAX FIRST CLASS">
              <a/>
            </div>
          </div>
        </div>
        <div class="large-4 columns">

          <section class="large-6 small-6 columns social">
            <ul class="prop no-bullet">
              {{link_to('show-all-listings', 'PROPERTIES FOR SALE', array('class'=>'propertiesFooter'));}} 
              <hr/>
              <li class="locality properties">{{link_to('browse/2', 'SINGLE FAMILY HOMES FOR SALE');}}</li>
              <li class="locality properties">{{link_to('browse/1', 'CONDOS FOR SALE');}}</li>
            </ul>
          </section>
          <section class="large-6 small-6 columns propRent">
            <ul class="prop no-bullet">
              {{link_to('all-rent-listings', 'PROPERTIES FOR RENT', array('class'=>'propertiesFooter'));}} 
              <hr/>
              <li class="locality properties">{{link_to('rent-apartments', 'APARTMENTS FOR RENT');}}</li>
              <li class="locality properties">{{link_to('rent-houses', 'HOUSES FOR RENT');}}</li>
            </ul>
          </section>

        </div>

        <div class="large-4 columns">
          <div class="large-6 small-6 columns">
            <ul class="vcard">
              <span class="connectFooter">CONTACT INFORMATION:</span>
              <hr/>
              <li class="locality"> PHONE: (847) 674-9797</li>
              <li class="locality"> FAX: (847) 674-0411</li>
              <li class="street-address">4023 W. Church St.</li>
              <li class="locality">Skokie, IL 60076 </li>
              <li><span class="state">IL</span> <span class="zip">60076</span></li>
              <li class="email" data-reveal-id="myModal">{{link_to('#', 'remax1stclass@gmail.com');}}</li>
            </ul>
          </div>
          <section class="large-6 small-6 columns social right">
            <span class="contactFooter">CONNECT WITH US:</span>
            <hr/>
            <ul class="small-block-grid-3 ulFooterSocial">
              <li class="liFooterConnect"><a target="_blank" class="has-tip-left" title="Our Facebook Page" href="https://www.facebook.com/pages/Remax-1st-CLASS/177448822432081"><img src="{{url('comp/img/social_footer/facebook.png')}}" alt="RE/MAX FIRST CLASS Facebook Profile"><a/></li>
              <li class="liFooterConnect"><a target="_blank" class="has-tip-left" title="Our Twitter Page" href="https://twitter.com/RemaxFirstClass"><img src="{{url('comp/img/social_footer/twitter.png')}}" alt="Remax First Class Twitter Profile"><a/></li>
              <li class="liFooterConnectRight"><a target="_blank" class="has-tip-left" title="Our Linkedin Page" href="http://www.linkedin.com/profile/view?id=271875691&trk=nav_responsive_tab_profile"><img src="{{url('comp/img/social_footer/linkedin.png')}}" alt="Remax First Class Linkedin Profile"><a/></li>
              <li class="liFooterConnect"><a target="_blank" class="has-tip-left" title="Our Google Plus Page" href="#"><img src="{{url('comp/img/social_footer/google.png')}}" alt="Remax First Class Google Profile"><a/></li>
              <li class="liFooterConnect"><a target="_blank" class="has-tip-left" title="Our Yelp Page" href="http://www.yelp.com/biz/remax-first-class-skokie"><img src="{{url('comp/img/social_footer/yelp.png')}}" alt="Remax First Class Feed Profile"><a/></li>
              <li class="liFooterConnectRight"><a target="_blank" class="has-tip-left" title="Our Page" href="https://www.youtube.com/"><img src="{{url('comp/img/social_footer/you_tube.png')}}" alt="Remax First Class Youtube Profile"><a/></li>
            </ul>
          </section>
        </div>
      </div>
    </footer>

    
    <!-- <div class="addInfoFooterWrapper">
      <div class="row">
        <div class="large-12 columns addInfoFooter">
          <ul class="inline-list addInfoFooterLinks">

            <li class="liClass">
              {{link_to('#', 'RENTALS', array('class'=>'className'));}}
            </li>
            <li>|</li>
            <li class="liClass">
              {{link_to('#', 'House for Rent', array('class'=>'className'));}}
            </li>
            <li>|</li>
            <li class="liClass">
              {{link_to('#', 'Single Family Home for Rent', array('class'=>'className'));}}
            </li>
            <li>|</li>
            <li class="liClass">
              {{link_to('#', 'Apartment for Rent', array('class'=>'className'));}}
            </li>
            <li>|</li>
            <li class="liClass">
              {{link_to('#', 'Studio for Rent', array('class'=>'className'));}}
            </li>
            <li>|</li>
            <li class="liClass">
              {{link_to('#', 'Townhome for Rent', array('class'=>'className'));}}
            </li>
            <li>|</li>
            <li class="liClass">
              {{link_to('#', 'Room for Rent', array('class'=>'className'));}}
            </li>
            <li>|</li>

            <li class="liClass">
              {{link_to('#', 'Loft for Rent', array('class'=>'className'));}}
            </li>
          </ul>

          <ul class="inline-list addInfoFooterLinks">

            <li class="liclass">
             {{link_to('#', 'SKOKIE RENTALS', array('class'=>'classname'));}} 
           </li>
           <li>|</li>
           <li class="liclass">
             {{link_to('#', 'Houses for Rent in Skokie', array('class'=>'classname'));}} 
           </li>
           <li>|</li>
           <li class="liclass">
             {{link_to('#', 'Apartments for Rent in Skokie', array('class'=>'classname'));}} 
           </li>
           <li>|</li>
           <li class="liclass">
            {{link_to('#', 'Studio for Rent in Skokie', array('class'=>'classname'));}} 
          </li>
          <li>|</li>
          <li class="liclass">
            {{link_to('#', 'Townhomes for Rent in Skokie', array('class'=>'classname'));}} 
          </li>
          <li>|</li>
          <li class="liclass" >
           {{link_to('#', 'Condos for Rent in Skokie', array('class'=>'classname'));}} 
         </li>
         <li class="liclass">
           {{link_to('#', 'Room for Rent in Skokie', array('class'=>'classname'));}} 
         </li>
         <li>|</li>
          <li class="liClass">
            {{link_to('#', 'Single Family Home for Rent in Skokie', array('class'=>'className'));}}
          </li>
          <li>|</li>
         <li class="liClass">
          {{link_to('#', 'Loft for Rent in Skokie', array('class'=>'className'));}}
        </li>
        <li>|</li>
        <li class="liClass">
          {{link_to('#', 'Skokie Mansion for Rent', array('class'=>'className'));}}
        </li>
      </ul>

      <ul class="inline-list addInfoFooterLinks">

        <li class="liclass">
         {{link_to('#', 'Niles RENTALS', array('class'=>'classname'));}} 
       </li>
       <li>|</li>
       <li class="liclass">
         {{link_to('#', 'Niles Houses for rent', array('class'=>'classname'));}} 
       </li>
       <li>|</li>
       <li class="liClass">
        {{link_to('#', 'Niles Single Family Home for Rent', array('class'=>'className'));}}
      </li>
      <li>|</li>
      <li class="liclass">
       {{link_to('#', 'Niles Apartments for rent', array('class'=>'classname'));}} 
     </li>
     <li>|</li>
     <li class="liclass">
      {{link_to('#', 'Niles Studio for rent', array('class'=>'classname'));}} 
    </li>
    <li>|</li>
    <li class="liclass" >
     {{link_to('#', 'Niles Condos for rent', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liclass">
     {{link_to('#', 'Niles Rooms for rent', array('class'=>'classname'));}} 
   </li>
   <li class="liClass">
    {{link_to('#', 'Niles Loft for Rent', array('class'=>'className'));}}
  </li>
  <li>|</li>
  <li class="liclass">
    {{link_to('#', 'Niles Townhomes for rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liClass">
    {{link_to('#', 'Niles Mansion for Rent', array('class'=>'className'));}}
  </li>
  </ul>

  <ul class="inline-list addInfoFooterLinks">

    <li class="liclass">
     {{link_to('#', 'EVANSTON RENTALS', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liclass">
     {{link_to('#', 'Evanston Houses for rent', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liClass">
    {{link_to('#', 'Evanston Single Family Home for Rent', array('class'=>'className'));}}
  </li>
  <li>|</li>
  <li class="liclass">
   {{link_to('#', 'Evanston Apartments for rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liclass">
    {{link_to('#', 'Evanston Studio for rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liclass">
   {{link_to('#', 'Evanston Condos for rent', array('class'=>'classname'));}} 
  </li>
   <li class="liclass">
   {{link_to('#', 'Evanston Room for rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liClass">
    {{link_to('#', 'Evanston Loft for Rent', array('class'=>'className'));}}
  </li>
  <li>|</li>
  <li class="liClass">
    {{link_to('#', 'Evanston Mansion for Rent', array('class'=>'className'));}}
  </li>
  </ul>

  <ul class="inline-list addInfoFooterLinks">
    <li class="liclass">
     {{link_to('#', 'LINCOLNWOOD RENTALS', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liclass">
     {{link_to('#', 'Lincolnwood IL Home for Rent', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liClass">
    {{link_to('#', 'Lincolnwood Single Family Home for Rent', array('class'=>'className'));}}
  </li>
  <li>|</li>
  <li class="liclass">
   {{link_to('#', 'Apartments for Rent in Lincolnwood IL', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liclass">
    {{link_to('#', 'Lincolnwood Studio for Rent', array('class'=>'classname'));}} 
  </li>
  <li class="liclass">
    {{link_to('#', 'Lincolnwood Townhomes for Rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liclass" >
   {{link_to('#', 'Lincolnwood Condos for Rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liclass">
   {{link_to('#', 'Lincolnwood Room for Rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liClass">
    {{link_to('#', 'Lincolnwood Loft for Rent', array('class'=>'className'));}}
  </li>
  </ul>

  <ul class="inline-list addInfoFooterLinks">
    <li class="liclass">
     {{link_to('#', 'VILLAGE OF MORTON GROVE RENTALS', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liclass">
     {{link_to('#', 'Morton Grove Home for Rent', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liClass">
    {{link_to('#', 'Morton Grove Single Family Home for Rent', array('class'=>'className'));}}
  </li>

  <li>|</li>
  <li class="liclass">
    <li class="liclass">
     {{link_to('#', 'Apartments for Rent in Village of Morton Grove ', array('class'=>'classname'));}} 
   </li>
   <li class="liclass">
    <li class="liclass" >
     {{link_to('#', 'Morton Grove Condos for Rent', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liclass">
    {{link_to('#', 'Morton Grove Studio for Rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liclass">
    {{link_to('#', 'Morton Grove Townhomes for Rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liclass">
   {{link_to('#', 'Morton Grove Room for Rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liClass">
    {{link_to('#', 'Morton Grove Loft for Rent', array('class'=>'className'));}}
  </li>

  </ul>
<ul class="inline-list addInfoFooterLinks">
    <li class="liclass">
     {{link_to('#', 'VILLAGE OF Wilmette RENTALS', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liclass">
     {{link_to('#', 'Wilmette  Home for Rent', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liClass">
    {{link_to('#', 'Wilmette Single Family Home for Rent', array('class'=>'className'));}}
  </li>

  <li>|</li>
  <li class="liclass">
    <li class="liclass">
     {{link_to('#', 'Apartments for Rent in Village of Wilmette', array('class'=>'classname'));}} 
   </li>
   <li>|</li>
   <li class="liclass">
    <li class="liclass" >
     {{link_to('#', 'Wilmette Condos for Rent', array('class'=>'classname'));}} 
   </li>
   <li class="liclass">
    {{link_to('#', 'Wilmette Studio for Rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liclass">
    {{link_to('#', 'Wilmette Townhomes for Rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liclass">
   {{link_to('#', 'Wilmette Room for Rent', array('class'=>'classname'));}} 
  </li>
  <li>|</li>
  <li class="liClass">
    {{link_to('#', 'Wilmette Loft for Rent', array('class'=>'className'));}}
  </li>

  </ul>

  </div>
  </div>

</div> -->

<!-- /* =copyright starts here */ -->

<div class="copyright">
  <div class="row">
    <div class="large-4 large-centered columns copy">
      <p>© 2013 RE/MAX FIRST CLASS</p> 
    </div>

    <!-- /* =copyright ends here */ -->
  <!-- </div>
</div> -->


  <!-- /* My slideDown mail form starts here */
--> 

<div id="myModal" class="reveal-modal small myModal2 panel">
  <div class="row">
    <div class="large-12 columns profileContent">
      <div class="navPanel">
        <nav class="top-bar min">
          <div class="large-2 columns">

            <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
             <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="RE/MAX FIRST CLASS Logo">
           </a> 
         </div>

         <div class="large-10 columns"> <ul class="title-area right">
          <!-- Title Area -->
          <li class="name">
            <h2>
              {{link_to_route('home', 'REMAX FIRST CLASS');}}
            </h2>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <h3 class="subheader contactModal">Contact Us</h3>
  {{Form::open(array('url' => 'sendmail'))}}
  {{Form::label('email', 'Your E-mail')}}
  {{Form::text('email', '', array('placeholder'=>'@', 'class'=>'txt'))}}
  {{Form::label('subject', 'Subject')}}
  {{Form::text('subject', '', array('placeholder'=>'Your subject', 'class'=>'className'))}}

  {{Form::label('message', 'Enter a Message')}}
  {{Form::textarea('message', '', array('placeholder'=>'', 'class'=>'txtarea'))}}
  {{ Form::submit('Send', array('class'=>'button secondary small radius'))}}


  {{Form::close()}}
</div>
</div>
<a class="close-reveal-modal">&#215;</a>
</div>
<!-- =My slideDown mail myModal ends here -->


  <!--
  /* insert data-reveal-id to link with the same id */

  <a href="#" class="mailIcon has-tip-left" title="Send Us Email" data-reveal-id="myModal"> <img src="{{url('comp/img/mail_remax.png')}}" alt="Remax First Class Mail Icon" ></a>
-->



<!-- /* My slideDown Create account Form Starts Here */ -->


<div id="createAccount" class="reveal-modal small createAccount panel">
  <div class="row">
    <div class="large-12 columns profileContent">
      <div class="navPanel">
        <nav class="top-bar min">
          <div class="large-2 columns">

            <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
             <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="Remax First Class Logo">
           </a> 
         </div>

         <div class="large-10 columns"> <ul class="title-area right">
          <!-- Title Area -->
          <li class="name">
            <h1>
              {{link_to_route('home', 'REMAX FIRST CLASS');}}
            </h1>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- =create an account panel ends here -->

  <!-- =create an account form starts here -->
  {{Form::open(array('url' => 'sign-up'))}}
  <div class="row">

    <div class="large-12 columns createAccount">  
      <h3 class="subheader account">Create Your Account</h3>

      <div class="row">
        <div class="large-6 columns">
          {{Form::label('first_name', 'First Name')}}
          {{Form::text('first_name', Input::old('first_name'), array('placeholder'=>'Your Name', 'class'=>'className'))}}
        </div>

        <div class="large-6 columns">{{Form::label('last_name', 'Last Name')}}
          {{Form::text('last_name', Input::old('last_name'), array('placeholder'=>'Your last name', 'class'=>'className'))}}
        </div>
      </div>


      <div class="row">
        <div class="large-6 columns">
          {{Form::label('email', 'Email Address')}}
          <div class="row collapse">
            <div class="small-2 columns">
              <span class="prefix">@</span>
            </div>
            <div class="small-10 columns">
              {{Form::email('email', Input::old('email'), array('placeholder'=>'Your email', 'class'=>'emailCreate'))}}
            </div>
          </div>
        </div>

        <div class="large-6 columns">
          {{Form::label('phone', 'Phone (Optional)')}}
          {{Form::text('phone', Input::old('phone'), array('placeholder'=>'(***)***-****', 'class'=>'className'))}}
        </div>
      </div>      

      <div class="row">
        <div class="large-6 columns">
          {{Form::label('password', 'Password')}}
          {{Form::password('password', '', array('class'=>'className'))}}
        </div>
        <div class="large-6 columns">
          {{Form::label('password_confirmation', 'Confirm Password')}}
          {{Form::password('password_confirmation', '', array('class'=>'passwordCreate'))}}
        </div>
      </div>      

      <div class="row">
        <div class="small-2 columns">
          {{ Form::submit('Create Your Free Account', array('class'=>'button tiny radius'))}}
        </div>
      </div>
    </div>


    {{Form::close()}}
  </div>
</div>
</div>
<a class="close-reveal-modal">&#215;</a>
</div>

<!-- =My slideDown Create Account Form Ends Here -->

  <!--
  /* insert data-reveal-id to your button with the same id */
                     <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                   -->

                   <!-- /* My slideDown Authentification Form Starts Here */ -->

                   <div id="adminAuth" class="reveal-modal small adminAuth2 createAccount panel">
                    <div class="row">
                      <div class="large-12 columns profileContent">
                        {{Form::open(array('url'=>'login'))}} 
                        <div class="navPanel">
                          <nav class="top-bar min">
                            <div class="large-2 columns">

                              <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
                               <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="RE/MAX FIRST CLASS Logo">
                             </a> 
                           </div>

                           <div class="large-10 columns"> <ul class="title-area right">
                            <!-- Title Area -->
                            <li class="name">
                              <h1>
                                {{link_to_route('home', 'REMAX FIRST CLASS');}}
                              </h1>
                            </li>
                          </ul>
                        </div>
                      </nav>
                    </div>
                    
                    <div class="row"> 
                     <div class="large-12 columns signInFormWrapper">
                       <h3 class="subheader account">Sign In to Your Account</h3>
                       <div class="row">
                        <div class="large-6 columns">
                          {{Form::label('email', 'Your Email')}}
                          {{ Form::email('email', Input::old('email'), $attributes = array())}}
                        </div>
                        <div class="large-6 columns">
                          {{Form::label('password', 'Your Password')}}
                          {{ Form::password('password', $value = null, $attributes = array())}}
                        </div>
                      </div>
                      {{ Form::submit('Login', $attributes = array('class'=>'button  tiny radius'))}}
                      {{Form::close()}} 
                    </div>
                  </div>
                </div>
              </div>
              <a class="close-reveal-modal">&#215;</a>

            </div>
  <!--
  /* insert data-reveal-id to your button with the same id */
                     <input type="submit" class="button tiny right loginButton" data-reveal-id="adminAuth" value="LOGIN">
                   -->

                   <!-- /* My slideDown Authentification Form Ends Here */ -->



                   <!-- =agentInfo starts here -->
                   @if(isset($agents)) 

                   @foreach($agents as $agent)

                   <div id="{{$agent['id']}}" class="reveal-modal small adminAuth2 createAccount panel">
                     {{Form::open(array('url' => '#'))}}
                     <div class="row">
                      <div class="large-12 columns profileContent">
                        <div class="navPanel">
                          <nav class="top-bar min">
                            <div class="large-2 columns">

                              <a class="logoS" href="{{URL::route('home')}}" title="Home Page">
                               <img src="{{url('comp/img/REMAX1LogoS.png')}}" alt="RE/MAX FIRST CLASS Logo">
                             </a> 
                           </div>

                           <div class="large-10 columns"> <ul class="title-area right">
                            <!-- Title Area -->
                            <li class="name">
                              <h1>
                                {{link_to_route('home', 'REMAX FIRST CLASS');}}
                              </h1>
                            </li>
                          </ul>
                        </div>
                      </nav>
                    </div>



                    <div class="row">
                     <div class="large-4 columns">
                      <div class="row">
                       <div class="large-12 columns left">
                        <br/>
                        <ul class="ulAgentName">
                         <h3 class="subheader agentName">{{$agent['firstname']}} {{$agent['lastname']}}</h3>
                         <a class="label has-tip-left specialist" title="Accredited Buyers Representative">ABR</a> 
                         <a class="label has-tip-left specialist" title="Certified Residential Specialist">CRS</a>
                       </ul>
                     </div>                           
                   </div>

                   <div class="row">
                     <div class="large-12 columns">
                       <div class="th agentPic"><img src="{{url('comp/img/agentsL/'. $agent['id'].'.jpg')}}" alt="{{$agent['firstname']}} {{$agent['lastname']}}, RE/MAX FIRST CLASS Agent">
                       </div>
                     </div>
                   </div>  

                   <div class="row"> 
                     <div class="large-12 columns agentPropSale"> 
                       <em>{{link_to('agent/'.$agent['id'], 'AGENT LISTINGS FOR SALE', array('class'=>'agentP'));}}</em>

                     </div>
                   </div> 

                   <div class="row"> 
                    <div class="large-12 columns agentPropRent">
                      <em>{{link_to('agent-rentals/'.$agent['id'], 'AGENT LISTINGS FOR RENT', array('class'=>'agentP'));}}</em>
                    </div> 

                  </div>
                </div>

                <div class="large-8 columns left">
                  <div class="panel info">
                   <br/>
                   <ul class="vcard innerInfo">
                     <h5>Associate:</h5>
                     <li class="subheader">Year Joined: {{$agent['yearjoined']}}</li>
                     <li class="subheader">Year Licensed: {{$agent['yearlicenced']}}</li>
                     <hr/>
                     <h6>Contact Information:</h6>
                     <li class="subheader">Main: (847) 674-9797</li>
                     <li class="subheader">Fax: (847) 674-0411</li>
                     <li class="subheader">Direct:  {{$agent['directphone']}} </li>
                     <li class="subheader">Languages: {{$agent['languages']}} </li>
                   </ul>
                 </div>
               </div>
             </div>



             <div class="row">
              <div class="large-12 columns agentInfoContent">
                <dl>                              
                  <dt><h5>Specialties</h5></dt>
                  <hr/>
                  <dd class="specialties"><p>{{$agent['specialties']}}</p>
                  </dd>  
                  <dt><h5>Service Area Information</h5></dt>
                  <hr/>
                  <dd class="specialties">
                    <h6>Office Area:</h6>
                    <p>Skokie IL, Chicago IL, Glenview IL, Morton Grove IL, Evanston IL, Wilmette IL, Niles IL, Lincolnwood IL</p>                            
                    <h6>Agent Area:</h6>
                    <p>{{$agent['agentarea']}}</p>  
                  </dd>
                </div>
              </div>

            </div>
          </div>
          <a class="close-reveal-modal">&#215;</a>
        </div>
        @endforeach
        @endif

        <!-- =agentInfo ends here -->



        @yield('agent_thumb')  

        {{HTML::script("comp/javascripts/vendor/zepto.js")}} 

        {{HTML::script("comp/javascripts/foundation/foundation.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.abide.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.alerts.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.clearing.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.cookie.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.dropdown.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.forms.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.interchange.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.joyride.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.magellan.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.orbit.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.placeholder.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.reveal.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.section.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.tooltips.js")}} 
        {{HTML::script("comp/javascripts/foundation/foundation.topbar.js")}} 


        <script>
          $(document).foundation();
        </script>
      </body>
      </html>
