<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendor/real-estate/templates/omah/images/favicon.png') }}">
    <link href="{{ asset('vendor/real-estate/templates/omah/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
	<!-- Vectormap -->
    <link href="{{ asset('vendor/real-estate/templates/omah/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/real-estate/templates/omah/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/real-estate/templates/omah/css/style.css') }}" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
	<link href="{{ asset('vendor/real-estate/templates/omah/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('vendor/real-estate/templates/omah/vendor/toastr/css/toastr.min.css') }}">
</head>
<body>
	@include('real-estate::partials.preloader')
	<div id="main-wrapper">
		@include('real-estate::partials.nav-header')
		@include('real-estate::partials.chatbox')
		@include('real-estate::partials.header')
		@include('real-estate::partials.sidebar')
		@yield('content')
		@include('real-estate::partials.footer')
	</div>
    <script src="{{ asset('vendor/real-estate/templates/omah/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('vendor/real-estate/templates/omah/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('vendor/real-estate/templates/omah/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/real-estate/templates/omah/js/custom.min.js') }}"></script>
	<script src="{{ asset('vendor/real-estate/templates/omah/js/deznav-init.js') }}"></script>
	<script src="{{ asset('vendor/real-estate/templates/omah/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('vendor/real-estate/templates/omah/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('vendor/real-estate/templates/omah/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('vendor/real-estate/templates/omah/vendor/peity/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('vendor/real-estate/templates/omah/vendor/apexchart/apexchart.js') }}"></script>
	<script src="{{ asset('vendor/real-estate/templates/omah/js/dashboard/dashboard-1.js') }}"></script>
	<script src="{{ asset('vendor/real-estate/templates/omah/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('vendor/real-estate/templates/omah/vendor/toastr/js/toastr.min.js') }}"></script>

	<script>

		var opttTastr = {
			timeOut: 500000000,
			closeButton: !0,
			debug: !1,
			newestOnTop: !0,
			progressBar: !0,
			positionClass: "toast-top-right",
			preventDuplicates: !0,
			onclick: null,
			showDuration: "300",
			hideDuration: "1000",
			extendedTimeOut: "1000",
			showEasing: "swing",
			hideEasing: "linear",
			showMethod: "fadeIn",
			hideMethod: "fadeOut",
			tapToDismiss: !1
		};
		@if(session('success'))
			toastr.success("{{ session('success') }}", "Top Right", opttTastr);
		@endif   
		@if(session('info'))
			toastr.success("{{ session('info') }}", "Top Right", opttTastr);
		@endif  
		@if(session('warning'))
			toastr.success("{{ session('warning') }}", "Top Right", opttTastr);
		@endif  
		@if(session('error'))
			toastr.success("{{ session('error') }}", "Top Right", opttTastr);
		@endif  
		@if ($errors->any())
			toastr.success("{{ implode('. ', $errors->all()) }}", "Top Right", opttTastr);
		@endif

		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:0,
				nav:true,
				dots: false,
				navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					
					480:{
						items:1
					},			
					
					767:{
						items:1
					},
					1000:{
						items:1
					}
				}
			})		
			/*Custom Navigation work*/
			jQuery('#next-slide').on('click', function(){
			   $('.testimonial-one').trigger('next.owl.carousel');
			});

			jQuery('#prev-slide').on('click', function(){
			   $('.testimonial-one').trigger('prev.owl.carousel');
			});
			/*Custom Navigation work*/
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
	@stack('scripts')
</body>
</html>