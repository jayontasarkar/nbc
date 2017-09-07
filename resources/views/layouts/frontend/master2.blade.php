<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>Department of Public Libraries- | গণগ্রন্থাগার অধিদপ্তর-</title>
	<!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<!-- =============== tt canonical start =============================== -->
    <link rel="canonical" href="index.html">
    <!-- =============== tt canonical End =============================== -->
	
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/base.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/skeleton.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/style.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/meganizr.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/demo.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('npfadmin/public/css/flaticon/flaticon.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('themes/responsive_npf/templates/ministry/style.css') }}" />
    <script type="text/javascript" 
    	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- include the jquery-accessibleMegaMenu plugin script -->
    <script src="{{ asset('themes/responsive_npf/js/jquery-accessibleMegaMenu.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('themes/responsive_npf/stylesheets/responsiveslides.css') }}">

	<link rel="stylesheet"	href="{{ asset('themes/responsive_npf/templates/ministry/responsive.css') }}">
	<link rel="stylesheet"	href="{{ asset('themes/responsive_npf/templates/ministry/accessibility.css') }}">
	<script src="{{ asset('themes/responsive_npf/js/responsiveslides.min.js') }}"></script>
	<script src="{{ asset('themes/responsive_npf/js/domain_selector.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/responsive_npf/js/utils.js') }}" type="text/javascript"></script>

	<link rel="stylesheet"	href="{{ asset('css/site.css') }}">
	<script type="text/javascript" src="{{ asset('js/site.js') }}"></script>
	@yield('style')			
</head>

<body class="publiclibrary-portal-gov-bd">
	<div class="container">
		<div class="sixteen columns" style="background-color: #333; box-shadow: 0 1px 5px #999999;">
			<div style="color: #eee; font-size: .7em; padding: 0 10px; height: 30px">
				<div class="slide-panel-btns" style="float: left">
                    <div class="slide-panel-button" style="display: block;">
						<i class="flaticon-menu10"></i> <a style="color: white"
							href="http://www.bangladesh.gov.bd/" target="_blank">{{ __('frontendnav.bdnp') }}</a>
					</div>
					<div class="slide-panel-button" id="close-button"
						style="display: none;">
						<i class="flaticon-cross5"></i>বাংলাদেশ জাতীয় তথ্য বাতায়ন
					</div>
                </div>
				<div id="div-lang"
					style="padding: 0; position: absolute; right: 0; top: 0; margin-top: 1px; width: 405px;">
					<form action=""
						style="margin: 0; padding: 0; width: 345px; float: left">
						<!-- tt responsive 11-08-2015 -->
						<input style="width: 290px" id="search" name="key" value="" />
						<!-- tt end -->
						<button class="search-btn" type="submit"
							style="margin: 0; padding: 2px 10px" />
						Go
						</button>
					</form>
					<div id="div-lang-sel">

						<form id="lang_form" action="{{ url('language/switcher') }}" method="post">
							{{ csrf_field() }}
							@if( \Session::has('locale') && \Session::get('locale') == 'en' )
                            <input type="hidden" name="lang" id="lang"
								value="bd" />
							@else	
							<input type="hidden" name="lang" id="lang"
								value="en" />	
							@endif	
							<button type="submit" style="height: 26px; padding: 4px;">
								{{ (\Session::has('locale') && \Session::get('locale') == 'en' ) ? 'বাংলা' : 'English' }}
							</button>
                        </form>

					</div>
					<style>
						#div-lang-sel {
							font-size: 18px;
							font-weight: bold;
							float: right;
						}

						#div-lang-sel span {
							text-decoration: none;
							background-color: #609513;
							padding: 0 5px;
							color: #fff;
							margin: 0;
						}

						#div-lang-sel a {
							text-decoration: none;
							padding: 0 5px;
							color: #fff;
							margin: 0;
						}

						#div-lang-sel a:hover {
							background-color: #34740E;
						}
					</style>
				</div>
			</div>
		</div>
     
		<div class="sixteen columns">
			<div class="callbacks_container"
				style="box-shadow: 0 1px 5px #999999;">
				<ul class="rslides" id="front-image-slider">
					<li>
						<img src="{{ asset('images/top_banner/f4cff6de_02dc_4f06_9984_4bee078d8578/Untitled-1.png') }}" alt="" width="960" height="220"/>           		
					</li>
					<li>     	
						<img src="{{ asset('images/top_banner/e53a7ddc_29e8_4bd6_a95d_4338181a776b/pm.jpg') }}" alt="" width="960" height="220"/>     		
					</li>
					<li>
						<img src="{{ asset('images/top_banner/ba0c7521_0fda_470d_91e1_28268457116e/logo.gif') }}" alt="" width="960" height="220"/>       		
					</li>
					<li>    	
						<img src="{{ asset('images/top_banner/2e06f67d_4025_44cb_a18a_ecc780367366/ban-4.jpg') }}" alt="" width="960" height="220"/>     		
					</li>
					<li>        	
						<img src="{{ asset('images/top_banner/fe9da89d_ce14_4806_bf9f_5659c01f10e5/666666666.jpg') }}" alt="" width="960" height="220"/>     		
					</li>
				
				</ul>        
			</div>


			<div class="header-site-info" id="header-site-info">
				<div>
					<div id="logo">
                        <a title="Home" href="{{ url('/') }}"><img alt="Home"
							src="{{ asset('themes/responsive_npf/img/logo/logo.png') }}"></a>
					</div>
					<style>
					@media screen and (min-width: 800px) {
						#logo {
							display: inline-block !important;
							float: left
						}
						#site-name-wrapper {
							line-height: 2
						}
					}
					</style>
					<div class="clearfix" id="site-name-wrapper">
						<span id="site-name"><a title="Home" href="{{ url('/') }}">{{ __('frontendnav.title') }}</a></span>
						<span id="slogan"></span>
					</div>
					<!-- /site-name-wrapper -->

				</div>
				<!-- /header-site-info-inner -->

			</div>

		</div>
		
		<div class="sixteen columns" id="jmenu">
			<a href="#" class="show-menu menu-head"> মেনু নির্বাচন করুন</a>
			<div role="navigation" id="dawgdrops">
				<ul class="meganizr mzr-slide mzr-responsive">
					<li class="col0">
						<a href="http://www.publiclibrary.gov.bd" class="submenu">{{ __('frontendnav.homepage') }}</a>
					</li>
					<li class="col1 mzr-drop">
						<a href="#" class="submenu">{{ __('frontendnav.aboutUs') }}</a>
						<div class="mzr-content drop-one-columns">
							<div class="one-col"><h6></h6>
								<ul class="mzr-links">
									<li>
										<a href="http://www.publiclibrary.gov.bd/site/page/ca2d64be-3f05-4260-ad36-5efc81f62b13/%e0%a6%87%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a6%be%e0%a6%b8-.html">ইতিহাস </a>
									</li>
									<li>
										<a href="http://www.publiclibrary.gov.bd/site/page/eb6de316-5e81-4545-bdfe-283cf4e09049/%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a7%80.html">কার্যাবলী</a>
									</li>
									<li>
										<a href="http://www.publiclibrary.gov.bd/site/organogram/bcb47946-e264-43cf-8416-030558f8ebae/%e0%a6%b8%e0%a6%be%e0%a6%82%e0%a6%97%e0%a6%a0%e0%a6%a8%e0%a6%bf%e0%a6%95-%e0%a6%95%e0%a6%be%e0%a6%a0%e0%a6%be%e0%a6%ae%e0%a7%8b-.html">সাংগঠনিক কাঠামো </a>
									</li>
									<li>
										<a href="http://www.publiclibrary.gov.bd/site/page/f5e3dc85-07cb-46ee-b545-1b97324a1cbb/%e0%a6%b8%e0%a6%bf%e0%a6%9f%e0%a6%bf%e0%a6%9c%e0%a7%87%e0%a6%a8-%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%b0-.html">সিটিজেন চার্টার </a>
									</li>
									<li>
										<a href="http://www.publiclibrary.gov.bd/site/view/officer_list/%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%ac%e0%a7%83%e0%a6%a8%e0%a7%8d%e0%a6%a6-.html">কর্মকর্তাবৃন্দ </a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="col4 mzr-drop">
						<a href="#" class="submenu">{{ __('frontendnav.forms.title') }}</a>
						<div class="mzr-content drop-one-columns">
							<div class="one-col"><h6></h6>
								<ul class="mzr-links">
									<li><a href="{{ url('membership?type=general') }}">{{ __('frontendnav.forms.general') }}</a></li>
									<li><a href="{{ url('membership?type=student') }}">{{ __('frontendnav.forms.student') }}</a></li>
									<li><a href="{{ url('membership?type=children') }}">{{ __('frontendnav.forms.children') }}</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="col5 mzr-drop">
						<a href="{{ url('membership/cancellation') }}" class="submenu">{{ __('frontendnav.cancellation') }}</a>
					</li>
					<li class="col3 mzr-drop">
						<a href="{{ url('membership/renewal') }}" class="submenu">{{ __('frontendnav.renewal') }}</a>
					</li>
					<li class="col3 mzr-drop">
						<a href="{{ url('membership/contact') }}" class="submenu">{{ __('frontendnav.contact') }}</a>
					</li>
				</ul>	
			</div>
		</div>    

		<div id="contents" class="sixteen columns">
			<div class="twelve columns" id="left-content">
				<div class="row mainwrapper">
					<div class="row" id="notice-board">
						@yield('main-content')
					</div>
				</div>
			</div>
			<div class="four columns right-side-bar" id="right-content">
				<div class="row mainwrapper">
					<div class="row" id="notice-board">
						@include('layouts.frontend.partials.sidebar')
					</div>
				</div>			
			</div>
		</div>
	</div>
	<!-- /container -->
	
	<!-- Footer -->
	<div class="footer-artwork" id="footer-artwork" style="margin-left: -31px;">&nbsp;</div>
	<div class="footer-wrapper full-width" id="footer-wrapper" style="margin-left: -31px;">
		<div id="footer-menu">

        <ul>
        	@if(Session::has('locale') && Session::get('locale') == 'en')
        		<li><a href="#">Site Map</a></li>
        		<li><a href="#">Communication</a></li>
        		<li><a href="{{ url('login') }}">Admin Login</a></li>
        	@else
        		<li><a href="#">সাইট ম্যাপ</a></li>
        		<li><a href="#">যোগাযোগ</a></li>
        		<li><a href="{{ url('login') }}">{{ language('Admin Login', 'এডমিন লগইন') }}</a></li>
        	@endif
        </ul>                    
        <div style="float: left; font-size: .9em;">
				সাইটটি শেষ হাল-নাগাদ করা হয়েছে: <span style="font-style: italic;">&#x09E8;&#x09E6;&#x09E7;&#x09ED;-&#x09E6;&#x09EC;-&#x09E8;&#x09E7; &#x09E7;&#x09E7;:&#x09E8;&#x09ED;:&#x09E7;&#x09E7;</span>
				<!--<span><a href="http://support.portal.gov.bd/" style="color: green" target="_blank"> | <u>হেল্পডেস্ক</u></a></span>-->
			</div>
            </div>

		<div class="footer-credit" id="footer">
                <p>
				পরিকল্পনা ও বাস্তবায়নে:&nbsp;<a href="http://www.cabinet.gov.bd/">মন্ত্রিপরিষদ
					বিভাগ</a>,&nbsp;<a href="http://www.a2i.pmo.gov.bd/">এটুআই</a>,&nbsp;<a
					href="http://www.bcc.net.bd/">বিসিসি</a>&nbsp;ও&nbsp;<a
					href="http://www.basis.org.bd/">বেসিস</a>।
			</p>

			<p>
				কারিগরি সহায়তায়:<a href="http://www.a2i.pmo.gov.bd/"><img
					style="height: 45px; vertical-align: middle; width: 150px"
					src="{{ asset('/images/pmologo.png') }}"
					alt=""></a>
			</p>
		</div>
		<!-- /footer -->
	</div>
	@yield('script')
</body>
</html>
