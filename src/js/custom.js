var chThemeModule;

(function($) {
	chThemeModule = (function() {

		var elements = {
			$html : $('html'),
			$document : $( document ),
		}
		/**
		 *-------------------------------------------------------------------------------------------------------------------------------------------
		 * Fixed arrows
		 *-------------------------------------------------------------------------------------------------------------------------------------------
		 */
		var fixedArrows = function(toTop, call) {

			if( toTop.length > 0 ) {

				var footerBarHeight = elements.$footer.length ? elements.$footer.outerHeight() : 0;
				
				toTop.on('click', function(e){
					e.preventDefault();

					var scrollTop = Math.abs($(window).scrollTop()) / 2,
						speed = scrollTop < 1000 ? 1000 : scrollTop;

					$('html, body').animate(
						{
							scrollTop: 0
						},
						speed
					);

				});

				var stroke = toTop.data('stroke');

				stroke = !stroke ? '' : `stroke=${stroke}`;

				toTop.append('<svg class="lt-progress-circle-up" width="100%" height="100%" ' + stroke + ' viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet" fill="none">\n        <path class="lt-progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition:  stroke-dashoffset 300ms linear 0s;stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 309;"></path>    </svg>');

				$(window).on('scroll', function() {
					var scroll = $(this).scrollTop(),
						wH = $(document).height() - $(window).height(),
						$topBtn = toTop;

					if (scroll > 300) {
						$topBtn.addClass('fixed-arrows__top--active');
					} else {
						$topBtn.removeClass('fixed-arrows__top--active');
					}

					if( scroll + $(window).height() > $(document).height() - footerBarHeight ) {
						$topBtn.css({ 'transform': 'translate(0, ' + -( footerBarHeight + 80 ) + 'px)' });
						if( call.length ){
							call.css({ 'transform': 'translate(0, ' + -( footerBarHeight + 80 ) + 'px)' });
						}
					} else {
						$topBtn.css({ 'transform': '' });
						if( call.length ){
							call.css({ 'transform': '' });
						}
					}

					$topBtn.find('.lt-progress-path').css('stroke-dashoffset',  300 - Math.round(300 * scroll / wH) + "%");
				})

				if (window.matchMedia('(max-width: 767px)').matches) {
					if( call.length ){
						call.removeAttr( 'data-toggle' );
					}
				};

			}

		}

		/**
		 *-------------------------------------------------------------------------------------------------------------------------------------------
		 * Validate inputs
		 *-------------------------------------------------------------------------------------------------------------------------------------------
		 */
		function validateInputs() {
			$('input[name="phone"], input[name="your-phone"], input[name="client_phone"]').on('change keyup keydown', function() {
				var myVar = $(this).val();
				var digit = ('' + myVar)[2];

				if (digit == '0') {
					$(this).val(' ');
					$(this).blur().focus();
				}
				$('input[type="submit"]').attr('disabled', 'disabled');

				var re = new RegExp("_$");

				if (!re.test(myVar)) {
					$(this).removeClass('error-phone');
					$('input[type="submit"]').removeAttr('disabled');
					$('button[type="submit"]').removeAttr('disabled').find('.shine-button__el').addClass('animate');
				} else {
					$(this).addClass('error-phone');
				}
			});
		}

		/**
		 *-------------------------------------------------------------------------------------------------------------------------------------------
		 * leadGenerator
		 *-------------------------------------------------------------------------------------------------------------------------------------------
		 */
		// Set cookie
		function setCookie(name, value, minutes) {

			var expires = "";

			if (minutes) {
				var date = new Date();
				date.setTime(date.getTime() + minutes * 1000);
				expires = "; expires=" + date.toUTCString();
			}

			document.cookie = name + "=" + (value || "")  + expires + "; path=/";
		}

		// Get cookie
		function readCookie(name) {

			var nameEQ = name + "=";
			var ca = document.cookie.split(';');

			for(var i=0;i < ca.length;i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1,c.length);
					if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
			}

			return null;

		}

		return {
			init: function() {
				// this.leafletMap(); 
				this.ajaxHandler();
				this.sliders();
			},

			/**
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 * 1. Cursor
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 */
			ready: function() {
				console.log('ready')
			},

			/**
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 * 2. Leaflet map
			 *-------------------------------------------------------------------------------------------------------------------------------------------
			 */

			leafletMap: function() {
				if(!($('body').hasClass('page-id-15'))){
					var map_cont = $('#dl-map');
					if( map_cont ) {
						var map = L.map('dl-map').setView(new L.LatLng(49.285640, 23.460629), 55);
						L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
							attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
						}).addTo(map);
						var MapMarker = L.icon({
							iconUrl: '/wp-content/themes/ditar-lux/assets/img/icons/geo.svg',
							iconSize: [63, 73],
						});
						map.attributionControl.setPrefix(false);
						var marker = new L.marker([49.285640, 23.460629], {
							icon: MapMarker
						});
						map.addLayer(marker);
					}
				} 
				
			},

			ajaxHandler: function() {
		        $('body').on('submit', 'form', function (e) {
			        e.preventDefault();
			        var formData = $(this).serializeArray();
			        $.ajax({
			            type: 'POST',
			            url: "/wp-admin/admin-ajax.php",
			            data: formData,
			            beforeSend: function beforeSend() {
			           
			            },
				            success: function success(data) {
					              console.log('send')
				            },
				            error: function error(data) {
				              console.log('error: ' + formData);
				            }
			          	});
		          	return false;
		        });
      		},

      		sliders: function(){
      			if($('.dl-hero__slider').length > 0){
      				$('.dl-hero__slider').slick({
      					slidesToShow: 1,
						slidesToScroll: 1,
						nextArrow: "<button class=\"dl-hero__slider-next dl-ico dl-ico--arrow slick-arrow--next\"></button>",
						prevArrow: "<button class=\"dl-hero__slider-prev dl-ico dl-ico--arrow slick-arrow--prev\"></button>",
						dots: true,
						autoplay: true,
  						autoplaySpeed: 5000,
  						dotsClass: 'red-dots',
						// responsive: [{
						// 		breakpoint: 760,
						// 		settings: {
						// 			slidesToShow: 2,
						// 		},
								
						// 	},
						// 	{
						// 		breakpoint: 500,
						// 		settings: {
						// 			slidesToShow: 1,
						// 			variableWidth: true,
						// 		}
						// 	},
						
						// ],
      				})
      			}
      		}


		}
	}());
})(jQuery);

jQuery(document).ready(function () {
    chThemeModule.init();
});

