<?php
/*
 * Industry Scenarios node template
 */
?>
<?php
  //$theme_path = drupal_get_path('theme', 'entero');
?>
<div id="content"> 
	<!-- jQuery -->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->

	<!-- jQuery SVG -->
		<style type="text/css">@import "/sites/all/libraries/jquery-svg/jquery.svg.css";</style> 
		<script type="text/javascript" src="/sites/all/libraries/jquery-svg/jquery.svg.js"></script>
		<script type="text/javascript" src="/sites/all/libraries/jquery-svg/jquery.svgdom.js"></script>
		<script type="text/javascript" src="/sites/all/libraries/jquery-svg/jquery.svganim.js"></script>

	<!-- E1 -->
		<!--<link rel="stylesheet" href="styles/style.css" media="screen" type="text/css">-->
		<link rel="stylesheet" href="/sites/all/themes/entero/e1/styles/style.e1.css" media="screen" type="text/css">
		<script type="text/JavaScript" src="/sites/all/themes/entero/e1/scripts/jquery.e1.js"></script>

<?php /*
			// jQuery
			drupal_add_css("http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css");
			// jQuery SVG
			drupal_add_css("sites/all/libraries/jquery-svg/jquery.svg.css");
			drupal_add_js("sites/all/libraries/jquery-svg/jquery.svg.js");
			drupal_add_js("sites/all/libraries/jquery-svg/jquery.svgdom.js");
			drupal_add_js("sites/all/libraries/jquery-svg/jquery.svganim.js");
			// E1
			drupal_add_css("sites/all/themes/entero/e1/styles/style.e1.css");
			drupal_add_js("sites/all/themes/entero/e1/scripts/jquery.e1.css");
*/
?>
	<div id="e1-content">

		<!-- Intro text -->
		<div class="e1-aside">
			<h2>Your Industry. One Solution. No Modules.</h2>
			<p>Entero understands your business is complex and unique. Entero ONE (E1) stands in a class of its own, by providing the most flexible modeling and operational support for oil and gas production, processing/refining, multi-modal logistics, trading (E/CTRM), joint venture, and financial accounting – all in one system. Many vendors claim similar functionality, but E1 is the only system that provides this without bolting on other systems or multiple modules. We provide you with real-time information and clarity of results. ONE system!  Rethink how you work. Work as One.</p>
		</div>

		<!-- Load the Entero One diagram -->	
		<div id="e1-diagram">
			<div id="e1-help-banner"></div>
		</div>

		<!-- Help text (disabled) -->
		<div id="e1-help" class="e1-aside e1-subtext">
			<p><strong>Click through the industry scenarios below. The diagram will reflect unique industry paths and describe the key benefits and support provided by Entero One.</strong> Ei qui autem aperiam ceteros. Eum ei magna recusabo, ex vis inimicus consectetuer, an sea cetero salutandi. Vim at labore regione erroribus, id sit alia pertinax oportere, an nostrum suscipit mei.</p>
		</div>

		<!-- Scenario descriptions -->
		<div id="e1-scenarios">

			<!-- First column -->
			<div id="e1-scenarios-column-1" class="e1-scenarios-column e1-orange">
				<h2>Exploration & Production</h2>

				<!-- First column, first scenario -->
				<div id="e1-scenario-ep1" class="e1-scenario">
					<h3>Gas Production and Plant Operations</h3>
					<div class="e1-scenario-content">
						<ul class="collapse-list">
							<lh>Daily gas production and gathering</lh>
							<li>Simple and complex gathering systems</li>
							<li>Interface from external field data capture</li>
							<li>Directional flow by source, owners, or other dimensions (i.e. deeming)</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Daily gas plant allocations and processing</lh>
							<li>Multiple allocations (simple and complex)</li>
							<li>Declining balance, factored, and gathered allocations</li>
							<li>CSO Reports for daily allocations</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Daily sales allocation and main-line nominations</lh>
							<li>Complex contract allocation capability</li>
							<li>Simultaneous allocations and nominations to multiple pipelines</li>
							<li>Daily revenue accrual (optional)</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<h4>Business Benefits</h4>
						<ul>
							<li>Minimal disruption to current business processes with the flexibility to create alternate allocation methods</li>
							<li>One system provides clear, concise, and accurate data in both operational and accounting views -- no more duplicate entries or reporting</li>
							<li>Save up to 2 hours per day by eliminating manual tasks through scheduling and generating automatic processes</li>
							<li>Reduce the risk of financial impact from estimate to actual imbalances by allocating on a daily basis, by component by owner</li>
							<li>Established desk manuals embedded in system workflows for effective knowledge transfer during vacations or employee turnover</li>
							<li>Deliver accurate calculations and adjustments, fee applications, and detailed analysis/ reporting since allocation dimensions (i.e. owner, producer, component, well/ source location, etc.) are configurable and carried throughout the infrastructure</li>
						</ul>
					</div>
				</div><!-- end scenario -->

				<!-- First column, second scenario -->
				<div id="e1-scenario-ep2" class="e1-scenario">
					<h3>Oil and Gas Production</h3>
					<div class="e1-scenario-content">
						<ul class="collapse-list">
							<lh >Production operations and production accounting</lh>
							<li>Daily and/or monthly production allocations and reporting</li>
							<li>Detailed workflows outlining daily/monthly tasks</li>
							<li>EPAP and SOX compliant</li>
							<li>Customizable security access and controls</li>
							<li>Model all operated and non-operated properties in one system</li>
							<li>Visual schematic clearly illustrates all production flows from source to end point (i.e. water, oil, gas, condensate)</li>
							<li>Track and optionally direct the commingled flow of products by multiple dimensions (e.g. products, source, component, owner)</li>
							<li>Full auditability down to field level</li>
							<li>Manage all royalties, including all provinces</li>
							<li>Remote access to the system</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Well production</lh>
							<li>Configurable for production of any product</li>
							<li>Track injected products and recovery</li>
							<li>Condensate reinjection and/or sale</li>
							<li>Commingled wells</li>
							<li>Self-fuel and flare consumption</li>
							<li>Unitization</li>
							<li>Load fluid</li>
							<li>Automated Crown, Freehold, and GOR royalties (including Take in Kind)</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
							<li>Report different DOI on each product produced</li>
							<li>Crown incentives</li>
						</ul>
						<ul class="collapse-list">
							<lh>Flow through battery</lh>
							<li>Pro-rated batteries/test wells</li>
							<li>Government reporting (Petrinex)</li>
							<li>Manitoba reporting</li>
							<li>Fees on product flows</li>
							<li>Handle mid-month tie-ins, remote liquids inventory, and return fuel</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Gathering</lh>
							<li>Flow splits</li>
							<li>Deem flow directions by various dimensions (e.g. products, source, owner)</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Processing</lh>
							<li>User-configurable allocation rules</li>
							<li>Complex allocation capability</li>
							<li>Gas extraction and fractionation</li>
							<li>Return fuel allocation</li>
							<li>Flexible modeling for separate production units</li>
							<li>Processing fee automation</li>
							<li>Operated and non-operated processing</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Sales</lh>
							<li>Complex contract allocation capability</li>
							<li>Simultaneous allocations to multiple pipelines</li>
							<li>Daily revenue accrual (optional)</li>
							<li>Automated Crown, Freehold, and GOR royalties (including Take in Kind)</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
						</ul>
						<ul class="collapse-list">
							<lh>Joint Venture Accounting</lh>
							<li>Revenue distribution</li>
							<li>AFE (Capital/Operating)</li>
							<li>JV Cost Center</li>
							<li>Overhead rate flexibility and exclusion flexibility</li>
							<li>Cash call capability</li>
							<li>Automated JIB accounting and invoicing</li>
							<li>Interface to JIBlink</li>
						</ul>
						<h4>Business Benefits</h4>
						<ul>
							<li>Easily scale for organizational growth, with the flexibility to model new requirements without developing new system functionality</li>
							<li>Increase efficiency and achieve better communication between teams -- operations and accounting always share the same data, but can run in their own views</li>
							<li>Established desk manuals embedded in system workflows for effective knowledge transfer during vacations or employee turnover</li>
							<li>Save time and frustration by setting up data once with interactive graphical view for quick and easy modifications</li>
							<li>Reduce data errors and the use of spreadsheets when using one source of data</li>
							<li>Real-time results and reporting for ad hoc inquiries</li>
							<li>Save hours of time through efficient data entry</li>
							<li>Improve compliance, reduce errors, and minimize costs using easy, at-a-glance reports for automated regulatory reporting</li>
						</ul>
					</div>
				</div><!-- end scenario -->				

			</div><!-- end column -->

			<!-- Second column -->
			<div id="e1-scenarios-column-2" class="e1-scenarios-column e1-green">
				<h2>Midstream & Processing</h2>

				<!-- Second column, first scenario -->
				<div id="e1-scenario-mp1" name="test" class="e1-scenario">
					<h3>Common Carrier Facility Operations</h3>
					<div class="e1-scenario-content">
						<h4 class="e1-subtitle">Pipeline, Fractionation, and Storage (Gas Liquids and Refined Products)</h4>
						<ul class="collapse-list">
							<lh>Y-grade/ NGL mix purchase</lh>
							<li>Comprehensive contract management</li>
							<li>Complete component analysis</li>
							<li>Component group-level pricing</li>
							<li>Configurable contract terms and conditions</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Y-grade/ NGL mix transportation, storage, and fractionation</lh>
							<li>Third party transportation, fractionation, and storage contracts</li>
							<li>Nominations and scheduling</li>
							<li>Buy-sell contracts</li>
							<li>Multiple distribution/allocation methods</li>
							<li>Shipper, facility, and component balancing</li>
							<li>Component blending</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Spec liquid and refined products storage</lh>
							<li>Shipping and facility balancing</li>
							<li>Capacity lease contracts</li>
							<li>Excess capacity calculations and fees</li>
							<li>Inventory management</li>
							<li>Automated accruals, invoicing, payment, and accounting Inlet and outlet fees</li>
						</ul>
						<ul class="collapse-list">
							<lh>Sales and distribution</lh>
							<li>Sales contracts</li>
							<li>Complex pricing arrangements</li>
							<li>Freight rates</li>
							<li>Multi-modal transportation, scheduling, and logistics</li>
							<li>Rail load/unload calculations and BOL</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Flexibility in contract and invoice formats</li>
						</ul>
						<h4>Business Benefits</h4>
						<ul>
							<li>Elimination of spreadsheet-based data management reduces risk and improves control</li>
							<li>Flexibility in modeling enables automation of manual processes and allows different departments to report data based on specific customer requirements</li>
							<li>Increase accuracy, control, and efficiency through automated arrangements, calculations, and accounting</li>
							<li>Improve timeliness of information and data accuracy through instant email notifications from industry interfaces</li>
							<li>Established desk manuals embedded in system workflows for effective knowledge transfer during vacations or employee turnover</li>
							<li>Operational and accounting views of information in one system provides efficient support for diverse activities based on a common source of information</li>
							<li>Order-to-cash process is fully automated and expedited to minimize errors and improve cash flow velocity</li>
						</ul>
					</div>
				</div><!-- end scenario -->

				<!-- Second column, second scenario -->
				<div id="e1-scenario-mp2" class="e1-scenario">
					<h3>Joint Venture Facility Operations</h3>
					<div class="e1-scenario-content">
						<h4 class="e1-subtitle">Natural Gas Gathering, Processing, Liquids Fractionation, Storage, and Distribution</h4>
						<ul class="collapse-list">
							<lh>Gathering system operation</lh>
							<li>Comprehensive shipper contract management</li>
							<li>Set ownership interest and analysis on battery receipts</li>
							<li>Simple and complex gathering systems</li>
							<li>Third party shipper fees and penalties</li>
							<li>AFE and operating overhead costs</li>
							<li>Multiple business units, inter-company accounting</li>
							<li>Complex allocations, including deeming and meter differences</li>
							<li>Daily and/or monthly allocations</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Financial accounting and reports</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Gas liquids extraction, fractionation, and storage</lh>
							<li>Third party transportation, fractionation, and storage contracts</li>
							<li>Shipper, facility, and component balancing</li>
							<li>Component blending</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Sales and distribution</lh>
							<li>Third party dispositions</li>
							<li>Inventory valuation and profitability reporting</li>
							<li>Multiple business units, inter-company financial accounting and reporting</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Flexibility in contract and invoice formats</li>
							<li>Interface to corporate GL</li>
						</ul>
						<h4>Business Benefits</h4>
						<ul>
							<li>Elimination of spreadsheet-based data management reduces risk and improves control</li>
							<li>Reduce overhead and increase data consistency through standard business processes company-wide</li>
							<li>Avoid costly errors and process time via automation of complex calculations</li>
							<li>Established desk manuals embedded in system workflows for effective knowledge transfer during vacations or employee turnover</li>
							<li>Increase data reliability and control through centralized contract management</li>
							<li>Fully-featured, integrated accounting system manages all production, operations, and sales for accurate results and significant time savings</li>
						</ul>
					</div>
				</div><!-- end scenario -->

				<!-- Second column, third scenario -->
				<div id="e1-scenario-mp3" class="e1-scenario">
					<h3>Deep Cut Extraction</h3>
					<div class="e1-scenario-content">
						<h4 class="e1-subtitle">Joint Venture Gas Liquids Extraction, Fractionation, and Distribution</h4>
						<ul class="collapse-list">
							<lh>Gas liquids extraction</lh>
							<li>Various types of contract management (e.g. gas purchase, and extraction rights based on gas volume or liquid extracted volume)</li>
							<li>Complex plant ownership and product allocation (volume tier ownership)</li>
							<li>Nominations</li>
							<li>Fuel, flare, and refrigeration consumption</li>
							<li>Makeup gas</li>
						</ul>
						<ul class="collapse-list">
							<lh>Y-grade/ NGL mix truck and rail purchase</lh>
							<li>Comprehensive contract management</li>
							<li>Capture mix truck, rail tickets, and receipts</li>
							<li>Complete component analysis</li>
							<li>Component group-level pricing</li>
							<li>Configurable contract terms and conditions</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
						</ul>
						<ul class="collapse-list">
							<lh>Y-grade/ NGL mix storage and fractionation</lh>
							<li>Multiple distribution/allocation methods</li>
							<li>Shipper, facility, and component balancing</li>
							<li>Component blending</li>
							<li>Reinjection</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Sales and distribution</lh>
							<li>Railcar loading, fleet management, outage calculation, and BOL generation</li>
							<li>Truck terminal system interface</li>
							<li>Automated accounting accruals and transactions</li>
							<li>Inventory valuation and transaction profitability</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
						</ul>
						<h4>Business Benefits</h4>
						<ul>
							<li>Reduction of spreadsheet-based data management reduces risk and improves control</li>
							<li>Gain stronger customer relationships and avoid costly errors via full automation of complex arrangements</li>
							<li>Increase data consistency and reduce support costs by eliminating multiple, disparate systems in support of plant operations, contract management, logistics, and accounting</li>
							<li>Spend more time on data analysis by eliminating manual entry errors and using interfaces to directly upload and download data to connecting pipelines</li>
							<li>Established desk manuals embedded in system workflows for effective knowledge transfer during vacations or employee turnover</li>
							<li>Improve decision making through accurate inventory valuation and profitability analysis</li>
							<li>Achieve accurate results and significant time savings through fully-featured, integrated accounting system for all supply, operations, and sales</li>
						</ul>
					</div>
				</div><!-- end scenario -->

			</div><!-- end column -->

			<!-- Third column -->
			<div id="e1-scenarios-column-3" class="e1-scenarios-column e1-blue">
				<h2>Trading & Marketing</h2>

				<!-- Third column, first scenario -->
				<div id="e1-scenario-tm1" class="e1-scenario">
					<h3>Propane Wholesale</h3>
					<div class="e1-scenario-content">
						<h4 class="e1-subtitle">Liquids and Refined Products Wholesale Distribution</h4>
						<ul class="collapse-list">
							<lh>Product purchase</lh>
							<li>Flexible contract modeling for multiple commodities, locations, prices, and transportation modes</li>
							<li>Complex pricing calculations and formulas (baskets, volume differentials, constraints, weighting)</li>
							<li>Chart pricing trends</li>
							<li>System generated contracts with customizable layouts</li>
							<li>View contract performance and progress at contract level</li>
							<li>Email/fax invoices direct from application</li>
							<li>Cash flow forecasting </li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Transportation and storage</lh>
							<li>Inter-modal and inter-line transportation (e.g. rail, truck, vessel, barge)</li>
							<li>Carrier or Shipper capability</li>
							<li>Third-party volumes</li>
							<li>Facility balancing throughout infrastructure</li>
							<li>Fixed term, through-put, and excess capacity fees</li>
							<li>WAC and segregated cost of inventory</li>
							<li>Inventory continuity reports</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Sales</lh>
							<li>Customize invoices and email/fax them directly from the application</li>
							<li>Inventory valuation, profitability, and Mark to Market reporting</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Flexibility in contract and invoice formats</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<h4>Business Benefits</h4>
						<ul>
							<li>Improve decisions (e.g. supply/demand, logistics, profitability) via sophisticated volume and price forecasting</li>
							<li>Increase data reliability and control through systematized contract management</li>
							<li>Replace in-house system(s) and reduce technical dependence on limited resources</li>
							<li>One commodity-agnostic system allows easy transfer of knowledge and resources across departments</li>
							<li>Improve pricing decisions through advanced inventory valuation and profitability analysis</li>
							<li>Streamline order to cash process through automated invoicing and tax calculations</li>
							<li>Significantly reduce errors, process time, and costs via fully automated accounting from operational data</li>
							<li>Established desk manuals embedded in system workflows for effective knowledge transfer during vacations or employee turnover</li>
						</ul>
					</div>
				</div><!-- end scenario -->

				<!-- Third column, second scenario -->
				<div id="e1-scenario-tm2" class="e1-scenario">
					<h3>Y-Grade Trading</h3>
					<div class="e1-scenario-content">
						<h4 class="e1-subtitle">NGL Mix Purchase, Fractionation, Blending and Distribution</h4>
						<ul class="collapse-list">
							<lh>Buying butane, biodiesel, or NGL mix</lh>
							<li>Comprehensive contract management</li>
							<li>Rail and truck transportation and scheduling</li>
							<li>Tiered pricing</li>
							<li>Specify analysis by source, destination, or combination</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures,   and option contracts by book group to report against physical activity</li>
							<li>Robust tax functionality</li>
						</ul>
						<ul class="collapse-list">
							<lh>Storage</lh>
							<li>Products stored in railcars and tanks</li>
							<li>Web services to terminal management interface</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures,  and option contracts by book group to report against physical activity</li>
						</ul>
						<ul class="collapse-list">
							<lh>Blending exchange</lh>
							<li>Butane in/gasoline out</li>
						</ul>
						<ul class="collapse-list">
							<lh>Sales and distribution</lh>
							<li>Comprehensive contract management</li>
							<li>Pipeline injections</li>
							<li>Inventory transfer</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Interface for A/P, A/R, and payments/ payment receipts to corporate system</li>
							<li>Flexibility in contract and invoice formats</li>
							<li>Robust tax functionality</li>
							<li>Automated accruals, invoicing, and accounting</li>
						</ul>
						<h4>Business Benefits</h4>
						<ul>
							<li>Improve process coordination and reduce costs by effectively managing complex logistics networks</li>
							<li>Automated blending exchange management significantly reduces time required to review imbalances and improves data accuracy</li>
							<li>Streamline order to cash process via automated invoicing and tax calculations</li>
							<li>Substantial time savings and risk mitigation by easily importing or exporting data to other operational and accounting systems</li>
							<li>Significantly reduce errors, processing time, and costs by automating accruals and accounting (from contracts through to invoicing and inventory valuation)</li>
							<li>Established desk manuals embedded in system workflows for effective knowledge transfer during vacations or employee turnover</li>
						</ul>
					</div>
				</div><!-- end scenario -->

				<!-- Third column, third scenario -->
				<div id="e1-scenario-tm3" class="e1-scenario">
					<h3>Renewable Fuels Operations</h3>
					<div class="e1-scenario-content">
						<h4 class="e1-subtitle">Renewable Fuels Processing, Storage, and Distribution</h4>
						<ul class="collapse-list">
							<lh>Buying biodiesel or ethanol</lh>
							<li>Comprehensive contract management</li>
							<li>Quality attributes determine price adjustments</li>
							<li>Rail transportation and railcar management</li>
							<li>Web Application to enable live communication and Bill of Lading (BOL) generation with your plants</li>
							<li>Contract performance tracking and reporting</li>
							<li>Multiple commodities and units of measure</li>
							<li>Robust tax functionality</li>
							<li>Transportation scheduling</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Processing product</lh>
							<li>Grain component broken out into grain byproducts and ethanol (byproducts may be sold or disposed of)</li>
							<li>Splash blending of biodiesel</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<ul class="collapse-list">
							<lh>Sales and distribution</lh>
							<li>Comprehensive contract management</li>
							<li>Barge and marine vessel management</li>
							<li>Segregated inventory in vessel compartments</li>
							<li>Provisional pricing and pro-forma invoicing</li>
							<li>Volume limits on contracts</li>
							<li>Multiple commodities and units of measure</li>
							<li>Automated Renewable Identification Number (RIN) processing and communication with the EMTS</li>
							<li>Credit management</li>
							<li>Contract performance tracking and reporting</li>
							<li>Risk position and Mark to Market reporting of price and physical exposures</li>
							<li>Execute financial swap, futures, and option contracts by book group to report against physical activity</li>
							<li>Robust tax functionality</li>
							<li>Transportation scheduling</li>
							<li>Flexibility in contract and invoice formats</li>
							<li>Automated accruals, invoicing, payment, and accounting</li>
						</ul>
						<h4>Business Benefits</h4>
						<ul>
							<li>Increase efficiency by managing the entire transaction process from corn/ grain to fuel</li>
							<li>Accurate, on-the-fly inventory valuation and profitability analysis drives improved decision making</li>
							<li>Improve process coordination and reduce costs by effectively managing complex production and delivery networks</li>
							<li>Ensure timely billing and cash management through automated invoicing and tax calculations</li>
							<li>Significantly reduce errors, processing time, and costs by automating accruals and accounting (from contracts through to invoicing and inventory valuation)</li>
							<li>Established desk manuals embedded in system workflows for effective knowledge transfer during vacations or employee turnover</li>
						</ul>
					</div>
				</div><!-- end scenario -->

			</div><!-- end column -->

		</div>
	</div>
</div>