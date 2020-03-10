/*
 * E1 JS
 */
 
(function($){
	$(document).ready(function(){

		var svgSupported = true;
		// .browser is deprecated; support enabled via jQuery Migrate.
		// .browser is needed for jQuerySVG, so we'll use it here. If jQuerySVG is updated for 1.9 support, we'll change this (Modernizr).
		if ( $.browser.msie ) {
			// console.log('IE version ' + $.browser.version + ' detected');
			if ($.browser.version <= 9) {
				svgSupported = false;
				// console.log('SVG support disabled');
				$.fn.preload = function() {
					this.each(function(){
						$('<img/>')[0].src = this;
					});
				}
				$(['http://www.entero.com/sites/all/themes/entero/e1/images/00.jpg',
				'http://www.entero.com/sites/all/themes/entero/e1/images/01.jpg',
				'http://www.entero.com/sites/all/themes/entero/e1/images/02.jpg',
				'http://www.entero.com/sites/all/themes/entero/e1/images/03.jpg',
				'http://www.entero.com/sites/all/themes/entero/e1/images/04.jpg',
				'http://www.entero.com/sites/all/themes/entero/e1/images/05.jpg',
				'http://www.entero.com/sites/all/themes/entero/e1/images/06.jpg',
				'http://www.entero.com/sites/all/themes/entero/e1/images/07.jpg',
				'http://www.entero.com/sites/all/themes/entero/e1/images/08.jpg'
				]).preload();
			}
		}

		// Let's get the current url in lowercase
		function getURLLast() {
			var hashString = window.location.hash;
			if (hashString != '') {
				var splitHashArray = hashString.split('?');
				var urlString = splitHashArray[0];
			} else {
				var urlString = window.location.pathname;
			}
			// console.log(urlString);
			var splitUrlArray = urlString.split('/');
			return splitUrlArray.pop().toLowerCase();
		}

		var e1PageTitle = 'Industry Scenarios';
		var e1SiteTitle = 'entero.com';
		$(document).attr('title', e1PageTitle + ' | ' + e1SiteTitle);
		$('.heading-box .content h1').text(e1PageTitle);
		$('.breadcrumbs li').last().html('<a href="/Industry-Scenarios">' + e1PageTitle + '</a>');
		$('.breadcrumbs').append('<li>Select a Scenario</li>');
		var gotoScenario = getURLLast();
		// console.log(gotoScenario);
		var gotoURL = '';
		var gotoID = '';

		var e1SVG_ProductionAccounting = [
			'e1-orange',
			'e1-svg-iconography-oil-and-gas-well',
			'e1-svg-iconography-oil-and-gas-well-text',
			'e1-svg-iconography-gas-well',
			'e1-svg-iconography-gas-well-text',
			'e1-svg-iconography-arrow-to-battery-upper',
			'e1-svg-iconography-arrow-to-battery-upper-text',
			'e1-svg-iconography-arrow-to-battery-lower',
			'e1-svg-iconography-arrow-to-battery-lower-text',
			'e1-svg-iconography-battery',
			'e1-svg-iconography-battery-text',
			'e1-svg-iconography-pipe-to-oil-refinery',
			'e1-svg-iconography-pipe-to-oil-refinery-text',
			'e1-svg-iconography-pipe-to-gas-processing-plant-lower',
			'e1-svg-iconography-pipe-to-gas-processing-plant-lower-text',
			'e1-svg-iconography-gas-processing-plant',
			'e1-svg-iconography-gas-processing-plant-text',
			'e1-svg-iconography-pipe-to-gas-processing-plant-upper',
		];
		var e1SVG_GasPlantAccountingAllocations = [
			'e1-orange',
			'e1-svg-iconography-gas-well',
			'e1-svg-iconography-gas-well-text',
			'e1-svg-iconography-arrow-to-battery-lower',
			'e1-svg-iconography-arrow-to-battery-lower-text',
			'e1-svg-iconography-battery',
			'e1-svg-iconography-battery-text',
			'e1-svg-iconography-pipe-to-gas-processing-plant-lower',
			'e1-svg-iconography-pipe-to-gas-processing-plant-lower-text',
			'e1-svg-iconography-gas-processing-plant',
			'e1-svg-iconography-gas-processing-plant-text',
			'e1-svg-iconography-pipe-to-sales-point',
			'e1-svg-iconography-sales-point',
			'e1-svg-iconography-sales-point-text'
		];
		var e1SVG_NGLYGradeProcessing = [
			'e1-green',
			'e1-svg-iconography-arrow-to-y-grade',
			'e1-svg-iconography-y-grade',
			'e1-svg-iconography-y-grade-text',
			'e1-svg-iconography-pipe-to-gas-processing-plant-upper',
			'e1-svg-iconography-arrow-to-gas-liquids-fractionator',
			'e1-svg-iconography-gas-liquids-fractionator',
			'e1-svg-iconography-gas-liquids-fractionator-text',
			'e1-svg-iconography-arrow-to-storage-lower',
			'e1-svg-iconography-arrow-to-storage-lower-text',
			'e1-svg-iconography-storage',
			'e1-svg-iconography-storage-text',
			'e1-svg-iconography-arrow-to-cavern-upper',
			'e1-svg-iconography-arrow-to-cavern-upper-text',
			'e1-svg-iconography-cavern',
			'e1-svg-iconography-cavern-text',
			'e1-svg-iconography-arrow-to-bulk-commodity-logistics-upper',
			'e1-svg-iconography-arrow-to-bulk-commodity-logistics-lower',
			'e1-svg-iconography-bulk-commodity-logistics',
			'e1-svg-iconography-bulk-commodity-logistics-text',
			'e1-svg-iconography-arrow-to-sales-point',
			'e1-svg-iconography-sales-point',
			'e1-svg-iconography-sales-point-text',
		];
		var e1SVG_GasProcessing = [
			'e1-green',
			'e1-svg-iconography-arrow-to-y-grade',
			'e1-svg-iconography-y-grade',
			'e1-svg-iconography-y-grade-text',
			'e1-svg-iconography-battery',
			'e1-svg-iconography-battery-text',
			'e1-svg-iconography-pipe-to-gas-processing-plant-lower',
			'e1-svg-iconography-pipe-to-gas-processing-plant-lower-text',
			'e1-svg-iconography-gas-processing-plant',
			'e1-svg-iconography-gas-processing-plant-text',
			'e1-svg-iconography-pipe-to-gas-processing-plant-upper',
			'e1-svg-iconography-arrow-to-gas-liquids-fractionator',
			'e1-svg-iconography-gas-liquids-fractionator',
			'e1-svg-iconography-gas-liquids-fractionator-text',
			'e1-svg-iconography-arrow-to-storage-lower',
			'e1-svg-iconography-arrow-to-storage-lower-text',
			'e1-svg-iconography-storage',
			'e1-svg-iconography-storage-text',
			'e1-svg-iconography-arrow-to-cavern-upper',
			'e1-svg-iconography-arrow-to-cavern-upper-text',
			'e1-svg-iconography-cavern',
			'e1-svg-iconography-cavern-text',
			'e1-svg-iconography-arrow-to-bulk-commodity-logistics-upper',
			'e1-svg-iconography-arrow-to-bulk-commodity-logistics-lower',
			'e1-svg-iconography-bulk-commodity-logistics',
			'e1-svg-iconography-bulk-commodity-logistics-text',
			'e1-svg-iconography-arrow-to-sales-point',
			'e1-svg-iconography-pipe-to-sales-point',
			'e1-svg-iconography-sales-point',
			'e1-svg-iconography-sales-point-text',
		];
		var e1SVG_DeepCutExtraction = [
			'e1-green',
			'e1-svg-iconography-common-carrier',
			'e1-svg-iconography-arrow-to-y-grade',
			'e1-svg-iconography-y-grade',
			'e1-svg-iconography-y-grade-text',
			'e1-svg-iconography-pipe-to-gas-processing-plant-upper',
			'e1-svg-iconography-arrow-to-gas-liquids-fractionator',
			'e1-svg-iconography-gas-liquids-fractionator',
			'e1-svg-iconography-gas-liquids-fractionator-text',
			'e1-svg-iconography-arrow-to-storage-lower',
			'e1-svg-iconography-arrow-to-storage-lower-text',
			'e1-svg-iconography-storage',
			'e1-svg-iconography-storage-text',
			'e1-svg-iconography-arrow-to-bulk-commodity-logistics-upper',
			'e1-svg-iconography-bulk-commodity-logistics',
			'e1-svg-iconography-bulk-commodity-logistics-text',
			'e1-svg-iconography-arrow-to-sales-point',
			'e1-svg-iconography-sales-point',
			'e1-svg-iconography-sales-point-text',
		];
		var e1SVG_NaturalGasLiquids = [
			'e1-blue',
			'e1-svg-iconography-arrow-to-storage-upper',
			'e1-svg-iconography-arrow-to-storage-upper-text',
			'e1-svg-iconography-arrow-to-storage-lower',
			'e1-svg-iconography-arrow-to-storage-lower-text',
			'e1-svg-iconography-arrow-to-cavern-upper',
			'e1-svg-iconography-arrow-to-cavern-upper-text',
			'e1-svg-iconography-storage',
			'e1-svg-iconography-storage-text',
			'e1-svg-iconography-cavern',
			'e1-svg-iconography-cavern-text',
			'e1-svg-iconography-arrow-to-bulk-commodity-logistics-upper',
			'e1-svg-iconography-arrow-to-bulk-commodity-logistics-lower',
			'e1-svg-iconography-bulk-commodity-logistics',
			'e1-svg-iconography-bulk-commodity-logistics-text',
			'e1-svg-iconography-arrow-to-sales-point',
			'e1-svg-iconography-sales-point',
			'e1-svg-iconography-sales-point-text',
		];
		var e1SVG_RefinedProducts = [
			'e1-blue',
			'e1-svg-iconography-arrow-to-storage-upper',
			'e1-svg-iconography-arrow-to-storage-upper-text',
			'e1-svg-iconography-arrow-to-storage-lower',
			'e1-svg-iconography-arrow-to-storage-lower-text',
			'e1-svg-iconography-storage',
			'e1-svg-iconography-storage-text',
			'e1-svg-iconography-y-grade',
			'e1-svg-iconography-y-grade-text',
			'e1-svg-iconography-arrow-to-gas-liquids-fractionator',
			'e1-svg-iconography-gas-liquids-fractionator',
			'e1-svg-iconography-gas-liquids-fractionator-text',
			'e1-svg-iconography-arrow-to-bulk-commodity-logistics-upper',
			'e1-svg-iconography-bulk-commodity-logistics',
			'e1-svg-iconography-bulk-commodity-logistics-text',
			'e1-svg-iconography-arrow-to-sales-point',
			'e1-svg-iconography-sales-point',
			'e1-svg-iconography-sales-point-text',
		];
		var e1SVG_RenewableFuels = [
			'e1-blue',
			'e1-svg-iconography-common-carrier',
			'e1-svg-iconography-arrow-to-oil-refinery',
			'e1-svg-iconography-oil-refinery',
			'e1-svg-iconography-ethanol-plant-text',
			'e1-svg-iconography-arrow-to-storage-upper',
			'e1-svg-iconography-arrow-to-storage-upper-text',
			'e1-svg-iconography-storage',
			'e1-svg-iconography-storage-text',
			'e1-svg-iconography-arrow-to-bulk-commodity-logistics-upper',
			'e1-svg-iconography-bulk-commodity-logistics',
			'e1-svg-iconography-bulk-commodity-logistics-text',
			'e1-svg-iconography-arrow-to-sales-point',
			'e1-svg-iconography-sales-point',
			'e1-svg-iconography-sales-point-text',
		];
		
		$('.e1-scenario').click(function(event){
			//prevent animations if link is clicked
			if ($(event.target).is('h3')) {
				//collapse all lists by default
				$('.e1-scenario ul.collapse-list li').hide();
				$('.e1-scenario ul.collapse-list').removeClass('e1-active');
				// slide away the help text
				//$('#e1-help').slideUp(1000);
				$('#e1-help-banner').slideUp(250);
				$('html,body').animate(
					{scrollTop: $('#e1-diagram').offset().top - 5},
					{duration: 1000, queue: false},
					function() {
						// Animation complete.  
					}
				);
				$('#e1-svg .e1-iconography').find('*').removeClass('e1-active e1-orange e1-green e1-blue e1-inactive');

				// If this column is already active...	
				if ($(this).closest('.e1-scenarios-column').hasClass('e1-active')) {

					// If we clicked the active scenario, close it up and return to default.
					// This is the only way to return to default.
					if ($(this).hasClass('e1-active')) {
						$('.e1-scenarios-column').removeClass('e1-active');
						$('.e1-scenario').removeClass('e1-active');
						$('.e1-scenarios-column').removeClass('e1-inactive');
						$('.e1-scenarios-column').stop().animate(
							{width: '309px'},
							{duration: 500, queue: false},
							function() {
								// Animation complete.  
							}
						);
						$('.e1-scenario-content').hide(250);
						//$('#e1-help').slideDown(1000);
						$('#e1-help-banner').slideDown(250);

						if (svgSupported === true) {
							$('.e1-icon').stop().animate(
								{svgOpacity: 1},
								{duration: 100, queue: false},
								function() {
									// Animation complete.
									$(this).removeClass('e1-inactive').addClass('e1-default');
								}
							);
						} else {
							$('#e1-diagram').css('background-image', 'url(http://www.entero.com/sites/all/themes/entero/e1/images/00.jpg)');
						}

						// Reset the URL and page title to default
						gotoURL = '';
						History.replaceState({}, e1PageTitle + ' | ' + e1SiteTitle, 'Industry-Scenarios');
						$(document).attr('title', e1PageTitle + ' | ' + e1SiteTitle);
						$('.heading-box .content h1').text(e1PageTitle);
						$('.breadcrumbs li').last().text('Select a Scenario');
	
					// If we clicked an inactive scenario, close the active scenario and open this one.
					} else {
						$('.e1-scenario-content').hide(250);
						$('.e1-scenario').removeClass('e1-active');
						$(this).addClass('e1-active');
						$(this).find('.e1-scenario-content').show(250);
						
						// Set the new URL and page title
						e1NodeTitle = $(this).find('h3').html();
						e1NodeTitle = e1NodeTitle.substring(0, e1NodeTitle.indexOf('<'));
						gotoURL = $(this).attr('title');
						History.replaceState({}, e1PageTitle + ' > ' + e1NodeTitle + ' | ' + e1SiteTitle, gotoURL);
						$(document).attr('title', e1PageTitle + ' > ' + e1NodeTitle + ' | ' + e1SiteTitle);
						$('.heading-box .content h1').text(e1NodeTitle);
						$('.breadcrumbs li').last().text(e1NodeTitle);

						// push a page view or event to GA for this scenario
						if (gotoID != '') {
							// gotoID is set if arrived via direct link, so count as page view
							ga('send', {
								'hitType': 'pageview',
								'page': '/' + gotoURL,
								// 'title': 'my overridden page'
							});
							gotoID = '';
						} else {
							// otherwise, count this as a click
							ga('send', {
								'hitType': 'event',          // Required.
								'eventCategory': 'Industry Scenarios > ' + e1NodeTitle,   // Required.
								'eventAction': 'Click',      // Required.
								// 'eventLabel': 'event label',
								// 'eventValue': value
							});
						}
					}
		
				} else {
					$('.e1-scenario-content').hide(250);
					$('.e1-scenarios-column').removeClass('e1-active');
					$('.e1-scenario').removeClass('e1-active');
					$('.e1-scenarios-column').removeClass('e1-inactive');
					$('.e1-scenarios-column').not($(this).parent()).stop().animate(
						{width: '191px'},
						{duration: 500, queue: true},
						function() {
							// Animation complete.  
						}
					);
					$(this).parent().stop().animate(
						{width: '545px'},
						{duration: 500, queue: true},
						function() {
							// Animation complete.  
						}
					);
					$(this).parent().siblings().addClass('e1-inactive');
					$(this).parent().addClass('e1-active');
					$(this).addClass('e1-active');
					$(this).find('.e1-scenario-content').show(250);
					// Set the new URL and page title
					e1NodeTitle = $(this).find('h3').html();
					e1NodeTitle = e1NodeTitle.substring(0, e1NodeTitle.indexOf('<'));
					gotoURL = $(this).attr('title');
					History.replaceState({}, e1PageTitle + ' > ' + e1NodeTitle + ' | ' + e1SiteTitle, gotoURL);
					$(document).attr('title', e1PageTitle + ' > ' + e1NodeTitle + ' | ' + e1SiteTitle);
					$('.heading-box .content h1').text(e1NodeTitle);
					$('.breadcrumbs li').last().text(e1NodeTitle);

					// push a page view or event to GA for this scenario
					if (gotoID != '') {
						// gotoID is set if arrived via direct link, so count as page view
						ga('send', {
							'hitType': 'pageview',
							'page': '/' + gotoURL,
							// 'title': 'my overridden page'
						});
						gotoID = '';
					} else {
						// otherwise, count this as a click
						ga('send', {
							'hitType': 'event',          // Required.
							'eventCategory': 'Industry Scenarios > ' + e1NodeTitle,   // Required.
							'eventAction': 'Click',      // Required.
							// 'eventLabel': 'event label',
							// 'eventValue': value
						});
					}
				}
			}
		});

		// This isn't loaded until the SVG is loaded	
		function loadE1Functions(svg) {
			
			// exception for ethanol plant text
			$('#e1-svg-iconography-ethanol-plant-text').hide();
	
			// tag all icon paths, shapes, etc.
			$('#e1-svg .e1-iconography').find('*').not('g').addClass('e1-icon e1-default');
	
			function activatePath(activeObj, activeGroup, imgFallback) {
				if (svgSupported === true) {
					if ($(activeObj).hasClass('e1-active')) {
						$('.e1-icon').stop().animate(
							{svgOpacity: .2},
							{duration: 0, queue: false},
							function() {
								// Animation complete.
								$(this).removeClass('e1-default e1-active e1-orange e1-green e1-blue').addClass('e1-inactive')  
							}
						);
						var activeColorClass = activeGroup[0];
						$.each(activeGroup, function(index) {
							if (index > 0) {
								$('#' + this).find('*').not('g').addClass(activeColorClass).animate(
									{svgOpacity: 1},
									{duration: 500, queue: true},
									function() {
										// Animation complete.
										$(this).addClass('e1-active');
									}
								);
							}
						});
					}
					// ethanol plant exception markup
					if ($(activeObj).attr('title') != 'Renewable-Fuels') {
						$('#e1-svg-iconography-ethanol-plant-text').hide();
						$('#e1-svg-iconography-oil-refinery-text').show();
					} else {
						$('#e1-svg-iconography-ethanol-plant-text').show();
						$('#e1-svg-iconography-oil-refinery-text').hide();
					}
				} else {
					// console.log('Fallback image ' + imgFallback);
					$('#e1-diagram').css('background-image', 'url(http://www.entero.com/sites/all/themes/entero/e1/images/' + imgFallback + ')');
				}
			}
	
			function setActivePath(obj) {
					var objID = obj.id;
					if (objID == 'e1-Gas-Plant-Accounting-Allocations')	 					{	activatePath($(obj), e1SVG_GasPlantAccountingAllocations, '01.jpg') }
					if (objID == 'e1-Production-Accounting') 											{	activatePath($(obj), e1SVG_ProductionAccounting, '02.jpg') }
					if (objID == 'e1-NGL-Y-Grade-Processing') 										{	activatePath($(obj), e1SVG_NGLYGradeProcessing, '03.jpg') }
					if (objID == 'e1-Gas-Processing') 														{	activatePath($(obj), e1SVG_GasProcessing, '04.jpg') }
					if (objID == 'e1-Deep-Cut-Extraction') 												{	activatePath($(obj), e1SVG_DeepCutExtraction, '05.jpg') }
					if (objID == 'e1-Natural-Gas-Liquids') 												{	activatePath($(obj), e1SVG_NaturalGasLiquids, '06.jpg') }
					if (objID == 'e1-Refined-Products') 													{	activatePath($(obj), e1SVG_RefinedProducts, '07.jpg') }
					if (objID == 'e1-Renewable-Fuels') 														{	activatePath($(obj), e1SVG_RenewableFuels, '08.jpg') }
			}

			$('.e1-scenario').click(function(event){
				if ($(event.target).is('h3')) {
					setActivePath(this);
				}
			});

			// trigger internal links
			if (gotoScenario == 'gas-plant-accounting-allocations')					{ gotoID = '#e1-Gas-Plant-Accounting-Allocations'; }
			else if (gotoScenario == 'production-accounting')								{ gotoID = '#e1-Production-Accounting'; }
			else if (gotoScenario == 'ngl-y-grade-processing')							{ gotoID = '#e1-NGL-Y-Grade-Processing'; }
			else if (gotoScenario == 'gas-processing')											{ gotoID = '#e1-Gas-Processing'; }
			else if (gotoScenario == 'deep-cut-extraction')									{ gotoID = '#e1-Deep-Cut-Extraction'; }
			else if (gotoScenario == 'natural-gas-liquids')									{ gotoID = '#e1-Natural-Gas-Liquids'; }
			else if (gotoScenario == 'refined-products')										{ gotoID = '#e1-Refined-Products'; }
			else if (gotoScenario == 'renewable-fuels')											{ gotoID = '#e1-Renewable-Fuels'; }
			if (gotoID != '') {
			// console.log(gotoID);
				$(gotoID + ' h3').trigger('click');
			}
		} // end loadE1Functions


		if (svgSupported === true) {
			$('#e1-diagram').svg({ 
				loadURL: '../sites/all/themes/entero/e1/images/oilandgasdiagram_final_august15.svg', // External document to load 
				onLoad: loadE1Functions, // Callback once loaded 
				settings: {
					addTo: true,
					changeSize: false
				}, // Additional settings for SVG element 
				initPath: '' // Initial path for blank document 
			});
		} else {
			$('#e1-diagram').css('background-image', 'url(http://www.entero.com/sites/all/themes/entero/e1/images/00.jpg)');
			loadE1Functions(null);
		}
	
		// E1 Content
		$('.e1-scenario ul.collapse-list li').hide();
		$('.e1-scenario ul.collapse-list').click(function(event){
			if ($(this).hasClass('e1-active')) {
				$(this).children('li').hide(250);
				$(this).removeClass('e1-active');
			} else {
				$('.e1-scenario ul.collapse-list').removeClass('e1-active');
				$('.e1-scenario ul.collapse-list').children('li').hide(250);
				$(this).children('li').show(250);
				$(this).addClass('e1-active');
			}
		});

	});
})(jQuery);