<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
        <script>var $ = jQuery;</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/moments.js"></script>
        <link href="<?php echo get_template_directory_uri(); ?>/css/base.css" rel="stylesheet">
        <script src="<?php echo get_template_directory_uri(); ?>/js/digital-countdown.js"></script>
</head>

<body <?php body_class(); ?>>
    <?php include_once 'simple_html_dom.php'; ?>
    
<!--    <video autoplay muted  poster="<?php echo get_template_directory_uri(); ?>/img/bg-video.png" id="bgvid" >
         WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  
      <source src="<?php echo get_template_directory_uri(); ?>/img/Euro_2016_Preview_-_4K.mp4.crdownload" type="video/mp4">
      <source src="<?php echo get_template_directory_uri(); ?>/img/Euro_2016_Preview_-_4K.webm" type="video/webm">
    </video>-->
<div id="wrapper">

	<header id="header">
	
		<?php if ( has_nav_menu('topbar') ): ?>
			<nav class="nav-container group" id="nav-topbar">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here --></div>
				<div class="nav-wrap container">
                                    <img alt="Euro 2016 ball" src="<?php echo get_template_directory_uri(); ?>/img/beau-jeu-pelouse.png">
                                    <?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?>
                                </div>
				
				<div class="container">
					<div class="container-inner">		
						<div class="toggle-search"><i class="fa fa-search"></i></div>
						<div class="search-expand">
							<div class="search-expand-inner">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div><!--/.container-inner-->
				</div><!--/.container-->
				
			</nav><!--/#nav-topbar-->
		<?php endif; ?>

		<div class="container group">
                        <div id="countdown" class="clock"></div>
			<div class="container-inner">
				
				<div class="group pad">
                                    
					<?php //echo alx_site_title(); ?>
                                   <svg
                                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                                        xmlns:cc="http://creativecommons.org/ns#"
                                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                        xmlns:svg="http://www.w3.org/2000/svg"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                        width="200"
                                        height="100"
                                        id="svg2"
                                        version="1.1"
                                        inkscape:version="0.48.4 r9939"
                                        sodipodi:docname="Documento nuevo 1">
                                       <title
                                          id="title2992">UEFA Euro 2016</title>
                                       <defs
                                          id="defs4" />
                                       <sodipodi:namedview
                                          id="base"
                                          pagecolor="#ffffff"
                                          bordercolor="#666666"
                                          borderopacity="1.0"
                                          inkscape:pageopacity="0.0"
                                          inkscape:pageshadow="2"
                                          inkscape:zoom="3.2490096"
                                          inkscape:cx="128.78015"
                                          inkscape:cy="42.324245"
                                          inkscape:document-units="px"
                                          inkscape:current-layer="layer1"
                                          showgrid="false"
                                          inkscape:window-width="1600"
                                          inkscape:window-height="844"
                                          inkscape:window-x="-4"
                                          inkscape:window-y="-4"
                                          inkscape:window-maximized="1" />
                                       <metadata
                                          id="metadata7">
                                         <rdf:RDF>
                                           <cc:Work
                                              rdf:about="">
                                             <dc:format>image/svg+xml</dc:format>
                                             <dc:type
                                                rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                             <dc:title>UEFA Euro 2016 logo</dc:title>
                                           </cc:Work>
                                         </rdf:RDF>
                                       </metadata>
                                       <g
                                          inkscape:label="Capa 1"
                                          inkscape:groupmode="layer"
                                          id="layer1"
                                          transform="translate(0,-952.36218)">
                                         <path
                                            id="WordMark2016"
                                            d="m 100.08153,957.34054 c 13.78513,-0.0145 26.25441,5.65223 35.16814,14.7721 l 1.42651,-1.3792 c -9.29543,-9.51667 -22.25704,-15.3998 -36.60087,-15.38805 -14.339012,0.008 -27.286091,5.91286 -36.575295,15.4413 l 1.426501,1.38057 c 8.928258,-9.14131 21.374713,-14.82048 35.155014,-14.82672 z m 24.88737,26.63856 3.67378,-12.7956 c 0.14175,-0.46317 0.19015,-0.92293 -0.39414,-1.38609 l -0.50477,-0.37815 c -0.60088,-0.44798 -1.03305,-0.28207 -1.44241,-0.0104 l -11.13888,7.24709 2.35377,1.31488 8.03972,-5.21875 -1.25364,4.40299 -1.05726,-0.81643 -2.12696,1.38057 2.4568,1.88383 -0.706,2.47078 2.09999,1.90525 z M 63.56363,1032.175 H 53.152862 c -0.713597,-0.011 -1.326931,0.5912 -1.326931,1.3067 v 14.3738 c 0,0.7487 0.555251,1.3274 1.299272,1.3274 0.729501,0 1.321399,-0.5726 1.321399,-1.3207 v -6.0655 l 7.783183,0.011 c 0.685246,0.011 1.327621,-0.6506 1.327621,-1.333 0,-0.6856 -0.619556,-1.2618 -1.355971,-1.2618 h -7.754833 v -4.3779 h 9.125326 c 0.735032,0 1.333845,-0.5718 1.333845,-1.2942 0,-0.647 -0.540731,-1.3617 -1.342143,-1.3617 z m -41.632699,-16.2868 -14.8721298,0.011 V 1010.28 H 19.729983 c 1.648464,0 2.980927,-1.3736 2.980927,-3.0362 0,-1.6814 -1.387088,-2.9738 -3.021031,-2.9738 H 7.0588012 v -5.59989 H 21.959282 c 1.647081,0 2.993373,-1.346 2.993373,-3.0093 -0.0069,-1.70963 -1.372569,-3.00932 -3.036244,-3.00932 H 4.0640458 c -1.6539956,0 -2.9940639,1.35843 -2.9878406,3.0273 v 23.20821 c 0,1.7154 1.3946944,3.0204 3.0362435,3.0204 l 17.8655023,-0.013 c 1.650539,0 2.990607,-1.3522 2.990607,-3.0218 0,-1.6791 -1.376716,-2.9877 -3.037627,-2.9788 z m 26.919606,-23.26141 c -1.675429,0 -3.000285,1.36607 -3.000285,3.02176 v 13.90725 c 0,3.9288 -2.895875,6.8498 -6.151314,6.8498 -3.247143,0 -6.141635,-2.908 -6.141635,-6.8456 v -13.90452 c 0,-1.62322 -1.307569,-2.97405 -2.962256,-3.00931 -1.688569,-0.0195 -3.034861,1.35844 -3.03002,3.00931 v 13.91062 c 0.0055,6.8725 5.345061,12.6001 12.191302,12.6381 6.773638,-0.043 12.072368,-5.7986 12.064762,-12.6629 v -13.89827 c 0,-1.62323 -1.300654,-3.01624 -2.970554,-3.01624 z m 51.242743,-14.31995 c 8.44907,-0.006 16.0179,3.71444 21.19839,9.59619 l 1.4832,-1.30037 c -5.52622,-6.30412 -13.65513,-10.27575 -22.68089,-10.26883 -9.034056,0 -17.151911,3.98958 -22.664308,10.28266 l 1.487351,1.3149 c 5.162514,-5.89212 12.727883,-9.61487 21.176257,-9.62455 z m -21.19216,-0.0283 c -0.679023,0.54406 -1.506021,0.83998 -2.2535,0.7487 -0.909283,-0.10158 -1.480437,-0.47356 -2.35653,-1.54301 l -4.429554,-5.44344 -1.97138,1.58934 4.854117,5.95984 c 1.028216,1.25338 2.180204,1.91842 3.51889,2.04008 1.534371,0.14174 2.895875,-0.31591 4.242859,-1.39783 1.333844,-1.10404 2.04744,-2.34289 2.229297,-3.84857 0.14521,-1.35914 -0.262757,-2.62148 -1.272995,-3.87139 l -4.860341,-5.96468 -1.973455,1.60246 4.446151,5.45173 c 0.871943,1.06257 1.122255,1.70965 1.03513,2.61733 -0.06293,0.74595 -0.512379,1.49602 -1.208689,2.05944 z m 32.0185,-14.06139 4.56992,1.20081 0.5995,-2.309 -4.71305,-1.24091 c -2.17952,-0.5655 -4.20828,-0.0388 -4.91842,2.6671 l -2.08892,7.96743 c -0.14729,0.5579 0.15557,1.00864 0.68731,1.15796 l 1.5489,0.39476 1.33314,-5.15447 5.68043,1.49532 0.59812,-2.27928 -5.68042,-1.48773 0.30908,-1.18698 c 0.33606,-1.33079 0.88162,-1.51952 2.07441,-1.22501 z m -15.625136,-3.70133 -7.834352,1.59488 c -0.544878,0.11059 -0.876092,0.53092 -0.755777,1.12477 l 1.656762,8.06283 c 0.54557,2.75768 2.556364,3.38056 4.766992,2.92221 l 4.764919,-0.97752 -0.475732,-2.33457 -4.632847,0.93604 c -1.177573,0.24195 -1.729366,0.0145 -1.985901,-1.32595 l -0.255152,-1.19806 5.755101,-1.18355 -0.457061,-2.29654 -5.762017,1.15795 -0.592589,-2.85445 6.300673,-1.29138 -0.493019,-2.33666 z m 56.446046,31.29666 c -7.95604,0.0137 -14.41299,6.79913 -14.40607,15.14325 0.007,8.325 6.47008,15.1227 14.42613,15.1156 7.95191,-0.011 14.4047,-6.8107 14.39156,-15.1355 0,-8.34637 -6.46109,-15.1282 -14.41162,-15.12335 z m 0.0201,26.38975 c -5.70325,0.011 -10.34785,-5.0426 -10.35476,-11.252 -0.005,-6.1982 4.63768,-11.27604 10.34231,-11.27604 5.70878,0 10.35338,5.06394 10.35822,11.26734 6.9e-4,6.2067 -4.63147,11.255 -10.34577,11.2607 z m -15.22133,1.7172 c 0,-1.0571 -0.85327,-1.9053 -1.91259,-1.9053 h -13.86605 c 0.36303,-1.0708 1.07661,-1.877 2.24036,-2.6389 l 8.22573,-5.3431 c 2.97677,-1.917 5.23165,-5.498 5.22682,-8.3164 -0.0101,-6.00421 -3.91095,-9.88942 -9.96408,-9.88942 -5.82909,0.0144 -9.87488,3.87 -10.07887,9.62722 0,1.1498 0.93695,2.0698 2.06612,2.0698 1.1264,0 2.04883,-0.9278 2.06887,-2.0434 0.14037,-5.37227 4.58376,-5.79812 5.94388,-5.79812 3.68276,-0.007 5.9501,2.30483 5.95839,6.03652 0,2.4237 -1.83931,4.101 -3.39374,5.0785 l -8.21949,5.3495 c -3.0563,1.9729 -4.39706,5.4779 -4.4503,9.6978 H 134.626 c 1.06349,0 1.9133,-0.8622 1.9133,-1.9247 z m 10.44327,26.6401 h -8.91858 v -4.713 h 7.32821 c 0.65205,0 1.35182,-0.5213 1.35873,-1.3051 0,-0.69 -0.62509,-1.2846 -1.35873,-1.2846 h -7.32821 v -4.4754 h 8.70285 c 0.7779,0 1.35735,-0.5235 1.35735,-1.2403 0,-0.7502 -0.59535,-1.3659 -1.35182,-1.3659 h -10.01041 c -0.79174,0 -1.34906,0.7023 -1.34906,1.3473 v 14.279 c 0,0.7807 0.57945,1.3806 1.34906,1.3806 H 146.977 c 0.76062,0 1.32209,-0.5572 1.32762,-1.3286 0,-0.7528 -0.54418,-1.294 -1.32209,-1.294 z m -21.11264,-12.0519 c 1.65607,0.011 2.88758,0.5612 4.0043,1.7926 0.34436,0.396 0.59052,0.7205 0.77099,1.014 0.28765,0.5179 0.67556,0.7883 1.14369,0.7883 0.69008,0 1.21008,-0.5276 1.21699,-1.2113 0,-0.3463 -0.15834,-0.6477 -0.26622,-0.8944 -0.3243,-0.5899 -0.83737,-1.2217 -1.21007,-1.6253 -1.53437,-1.6365 -3.37922,-2.4344 -5.66037,-2.4391 -4.67433,-0.018 -8.3412,3.7843 -8.34604,8.6282 v 0.1668 c 0.0484,4.7881 3.78302,8.6897 8.3246,8.7002 2.2618,0.014 4.11078,-0.7874 5.66037,-2.4196 0.1867,-0.1963 0.81317,-0.9088 1.21007,-1.6315 0.0553,-0.1045 0.26622,-0.4799 0.26622,-0.8615 0.008,-0.6968 -0.52551,-1.236 -1.20316,-1.236 -0.46742,0 -0.84843,0.2585 -1.14507,0.768 -0.20121,0.3304 -0.46605,0.6852 -0.77099,1.0226 -1.12917,1.2317 -2.36759,1.7947 -4.01674,1.7947 -3.12544,-0.011 -5.63203,-2.7033 -5.69011,-6.1239 v -0.1693 c 0.007,-3.4151 2.51487,-6.0718 5.71154,-6.0635 z m 40.62661,-37.07542 c -0.70598,0.71964 -0.70598,1.89281 0.0145,2.59942 0.34988,0.358 0.82146,0.526 1.31241,0.5308 0.40381,0 0.80624,-0.1078 1.16927,-0.3961 l 2.52386,-2.22803 v 22.05983 c 0,1.1318 0.90237,2.0477 2.02601,2.0477 1.13816,0 2.01494,-0.9015 2.01494,-2.0508 v -27.25272 h -3.6558 l -5.40522,4.6899 z m -51.81459,9.93572 c -0.005,-8.63812 -6.3477,-15.62941 -14.58172,-15.6225 -8.219493,0.004 -14.566493,7.01411 -14.560961,15.6411 0,2.934 0.781361,5.6874 2.12212,8.0351 l 8.077058,-0.01 -0.625088,-0.5622 c -1.931967,-1.7123 -3.252674,-4.346 -3.258206,-7.4675 0,-5.5265 3.754681,-9.55821 8.245077,-9.55821 4.50285,0 8.2603,4.01941 8.27345,9.54661 0,5.5435 -3.78166,10.1616 -8.2527,10.1616 H 86.454705 c -1.819257,0 -3.983557,-0.4052 -5.634095,-1.0495 -0.70599,-0.2565 -1.318633,-0.6201 -1.747344,-0.8888 -0.71014,-0.4786 -1.32209,-1.0497 -1.833778,-1.7362 l -1.165819,-1.5352 c 3.650269,-1.5542 6.201101,-5.1566 6.201101,-9.3628 -0.0062,-5.6106 -4.551253,-10.14979 -10.163222,-10.14979 H 59.057322 c -1.668517,0 -3.00167,1.33423 -3.00167,2.98854 v 23.24635 c 0.0048,1.6349 1.353207,2.9692 3.022414,2.9692 1.634634,-0.01 2.98784,-1.3343 2.98784,-2.9762 l -0.0062,-5.9163 7.243145,-0.011 c 0.936251,1.2728 1.817874,2.3978 2.801145,3.7886 0.351957,0.4943 0.720511,0.9685 1.129169,1.4075 2.655244,3.0549 6.956186,4.7245 13.222284,4.7245 h 13.666211 c 8.23333,-0.01 14.56719,-7.0327 14.56028,-15.673 z m -42.571023,-0.2373 H 62.051386 v -8.32481 h 10.052587 c 2.30121,0.0134 4.153657,1.86171 4.159189,4.15891 -6.91e-4,2.289 -1.850372,4.152 -4.152275,4.1659 z m 117.159863,-4.4085 c -1.11673,0 -2.22722,0.2082 -3.27895,0.6195 1.63671,-3.0356 3.85287,-5.72001 6.69065,-8.1486 0.46469,-0.37813 0.7468,-0.98926 0.7468,-1.54925 0,-0.9706 -0.91274,-1.85619 -1.9299,-1.85619 -0.45084,0 -0.87885,0.15486 -1.2315,0.43001 -5.23581,4.09881 -10.79869,12.52943 -10.79315,20.11813 0,5.9017 3.8584,9.7171 9.80919,9.7101 5.67627,0 9.79535,-4.098 9.78982,-9.7186 -10e-4,-5.5596 -4.12668,-9.6051 -9.80296,-9.6051 z m 0.0117,15.5678 c -3.65995,0 -5.92312,-2.2686 -5.92865,-5.9542 0,-3.6033 2.2611,-5.8632 5.9169,-5.8687 1.78813,0 5.93834,0.5841 5.94526,5.861 -6.9e-4,3.4987 -2.43121,5.9553 -5.93351,5.9619 z m -75.46493,13.8853 c -0.87817,0 -1.2723,0.7237 -1.2723,1.4418 v 10.0651 l -8.0411,-10.7596 c -0.33882,-0.4481 -0.69147,-0.7467 -1.32486,-0.7467 -0.88577,0 -1.39538,0.5259 -1.39538,1.442 v 13.9543 c 0,1.0542 0.48333,1.6115 1.39538,1.6115 0.84013,0 1.32209,-0.5877 1.32209,-1.6115 v -9.9447 l 8.1386,10.932 c 0.30771,0.4195 0.74817,0.6233 1.34767,0.6233 0.78344,0 1.27231,-0.5523 1.27231,-1.442 v -14.1237 c 0,-0.6961 -0.57945,-1.4418 -1.44241,-1.4418 z m -20.582283,0.9096 c -0.209516,-0.5614 -0.663811,-0.909 -1.203849,-0.909 h -0.590515 c -0.541421,0 -1.023376,0.3484 -1.182414,0.8386 l -6.970015,14.3191 c -0.04149,0.081 -0.08713,0.3499 -0.08713,0.4991 -0.0069,0.7544 0.540038,1.3228 1.239115,1.3303 0.533122,0 1.031671,-0.3007 1.240496,-0.7625 l 1.917446,-3.9287 h 8.218117 l 0.193612,0.3981 c 0.330522,0.7328 0.533122,1.5837 0.533122,2.2087 0,0.168 -0.02074,0.3898 -0.04357,0.5578 l -0.02006,0.2605 c 0,0.7503 0.583601,1.282 1.384323,1.2859 1.311722,0 1.311722,-1.3341 1.311722,-1.8318 0.005,-1.2215 -0.311166,-2.6071 -0.838069,-3.7069 l -5.102351,-10.5592 z m -4.502161,8.849 2.94013,-6.2302 2.96848,6.2302 h -5.908558 z m -8.202212,4.7643 c -0.97843,-0.3801 -1.772238,-0.9965 -2.354455,-1.8346 l -1.078693,-1.5113 c 2.403549,-0.732 4.067225,-2.9234 4.089352,-5.4503 0.0062,-3.2838 -2.565353,-5.7234 -6.109135,-5.7234 -5.333997,-0.011 -6.647098,0 -6.847625,0 -0.676949,0 -1.267463,0.596 -1.267463,1.3031 v 14.3469 c -0.0076,0.7578 0.562164,1.3296 1.275069,1.335 0.755777,0 1.368419,-0.5676 1.368419,-1.326 v -4.2322 h 4.442693 l 1.953403,2.7005 c 0.849816,1.1868 1.871116,1.9928 3.621226,2.828 0.05462,0.028 0.224037,0.051 0.339511,0.049 0.769607,0 1.333154,-0.5544 1.333154,-1.3078 0.0048,-0.5338 -0.326373,-1.0225 -0.765456,-1.1754 z m -5.465378,-5.6665 -5.459844,-0.013 v -6.2549 H 75.0717 c 2.095845,0 3.492614,1.3029 3.485698,3.2678 6.92e-4,1.7925 -1.411289,2.9996 -3.491922,2.9996 z"
                                            inkscape:connector-curvature="0"
                                            style="fill:#002661" />
                                       </g>
                                     </svg>
					<?php if ( ot_get_option('site-description') != 'off' ): ?><p class="site-description"><?php //bloginfo( 'description' ); ?></p><?php endif; ?>
					<?php if ( ot_get_option('header-ads') == 'on' ): ?>
					<div id="header-ads">
						<?php dynamic_sidebar( 'header-ads' ); ?>
					</div><!--/#header-ads-->
					<?php endif; ?>
				</div>
				
				<?php if ( has_nav_menu('header') ): ?>
					<nav class="nav-container group" id="nav-header">
						<div class="nav-toggle"><i class="fa fa-bars"></i></div>
						<div class="nav-text"><!-- put your mobile menu text here --></div>
						<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
					</nav><!--/#nav-header-->
				<?php endif; ?>
				
                                        
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- header -->
                                <ins class="adsbygoogle"
                                     style="display:inline-block;width:728px;height:90px"
                                     data-ad-client="ca-pub-5104917686100100"
                                     data-ad-slot="1020828873"></ins>
                                <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                                        
			</div><!--/.container-inner-->
		</div><!--/.container-->
		
	</header><!--/#header-->
	
	
		<div class="container-inner">	
                    
			<div class="main">
				<div class="main-inner group">