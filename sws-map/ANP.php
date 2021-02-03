<style>

/* PACIFIC UNION STYLES */

	/* Region Titles */
	.california .cal-titles,
	.nev-ut-titles,
	.az-title,
	.hi-title {
		opacity: 0;
		color: black;
	}
	
	.cal-details,
	.nev-details,
	.ut-details,
	.az-details,
	.hi-details,
	#ca-full {
		visibility: hidden;
	}
	
	/* Union Titles */
	#pacific-union-title {
		fill: #000;
		z-index: 999;
		display: block;
		text-transform: uppercase;
		font-weight: 700;
		text-shadow: 2px 2px 2px rgba(150, 150, 150, 1);
	}
	
	.california:hover .cal-titles,
	.cal-link:hover + .nev-ut,
	.nev-ut:hover .nev-ut-titles,
	.az-area:hover .az-title,
	.hi-area:hover .hi-title {
		opacity: 1;
		-webkit-font-smoothing: antialiased;
		font-smoothing: antialiased;
		-webkit-transform: translate3d( 0, 0, 0);
		transform: translate3d( 0, 0, 0);
	}
	
	/* Pacific Union */
	#hawaii-area,
	#arizona-area,
	#nevada,
	#utah,
	#southern-california-area,
	#south-eastern-california-area,
	#northern-california-area,
	#central-california-area {
		fill: #12a89d;
	}
	
	.cal-link:hover #ca-full {
		opacity: .5;
		stroke-opacity: 1;
		stroke-width: 2;
		stroke: #231F20;
		visibility: visible;
	}
	
	#nevada:hover,
	#utah:hover,
	#arizona-area:hover,
	#hawaii-area:hover {
		stroke: #231F20;
		stroke-width: 2;
	}
	
	.california:hover #southern-california-area {
		fill: #88d3ce;
	}
	
	.california:hover #south-eastern-california-area {
		fill: #5ac2bb;
	}
	
	.california:hover #northern-california-area {
		fill: #a0dcd8;
	}
	
	.california:hover #central-california-area {
		fill: #71cbc4;
	}
	
	.cal-link:hover + .nev-ut {
		fill: #b7e5e1;
		opacity: .75;
	}
	
	a #nevada:hover,
	a #utah:hover {
		fill: #b7e5e1;
	}
	
	a:hover #arizona-area {
		fill: #41b9b1;
	}
	
	a:hover #hawaii-area {
		fill: #b7e5e1;
	}
	
	.california:hover .cal-details,
	#nevada:hover .nev-details,
	#utah:hover .ut-details,
	a:hover #arizona-area .az-details,
	a:hover #hawaii-area .hi-details {
		opacity: 1;
	}

</style>
<div id='ANP' class='ANP country hideClass'>
	<div class="column1">
		<svg xmlns="//www.w3.org/2000/svg" version="1.1" viewBox="50 0 438.408 430.897" preserveAspectRatio="xMidYMin slice">
		
			<a xlink:href= "#" alt="California" title="California" class="cal-link"  onclick="showOne('CA','anp_confs');">
				<g class="california">
					<polygon id="central-california-area" fill="#12A89D" points="260.515,169.084 262.052,168.165 264.836,162.487 
						267.318,158.206 267.692,157.158 267.995,154.921 267.916,152.123 267.775,149.525 267.784,149.36 268.304,146.253 
						266.935,143.414 266.244,136.659 266.257,134.902 266.655,131.692 266.236,129.881 263.713,127.825 263.451,127.104 
						263.839,125.061 262.671,123.31 262.546,122.885 262.564,121.323 262.063,119.602 259.619,116.116 259.492,115.8 
						259.169,113.729 257.48,111.764 257.321,111.096 257.711,109.507 256.741,107.149 256.687,106.802 256.851,104.818 
						255.214,103.619 253.017,101.399 252.804,100.803 253.087,97.716 251.877,96.338 250.367,96.762 249.734,96.655 247.39,95.015 
						246.266,95.103 243.629,96.966 239.085,101.228 236.944,103.354 234.863,104.909 233.765,104.683 232.177,101.933 
						230.975,100.882 230.437,103.435 230.327,103.696 229.291,105.249 228.536,105.57 226.835,105.27 224.968,105.836 
						218.823,109.304 218.194,109.354 215.134,108.222 212.285,107.645 210.924,107.676 210.645,107.628 208.45,106.786 
						207.043,105.822 207.094,106.294 208.599,107.314 208.089,108.679 206.057,108.438 205.572,108.177 201.729,103.616 
						201.564,103.001 201.917,101.024 202.125,100.625 202.32,100.432 202.159,99.938 201.908,100.899 201.308,102.8 201.508,111 
						203.607,114.7 205.508,117.3 208.208,117.8 209.208,120.5 208.107,124.1 206.007,125.7 204.908,125.7 204.107,129.6 
						204.607,132.5 207.808,136.899 209.408,142.2 210.908,146.899 212.208,150 215.607,155.8 217.107,158.399 217.607,161.3 
						219.208,162.3 219.208,164.7 218.408,166.6 216.607,173.7 216.107,175.6 218.507,178.3 222.708,178.8 225.818,180.044 
						229.583,164.454 230.862,164.12 232.369,165.748 233.4,166.553 235.093,166.969 235.38,167.109 238.597,169.707 239.678,171.309 
						240.447,171.899 249.606,174.15 256.923,169.823"/>
				
					<polygon id="northern-california-area" fill="#12A89D" points="266.528,18.15 258.658,49.33 251.658,75.21 
						250.048,81.85 247.828,93.58 247.538,93.5 245.948,93.62 245.568,93.76 242.718,95.77 238.038,100.15 236.007,102.18 
						234.638,103.2 233.417,101.07 230.998,98.91 229.767,99.32 228.998,102.98 228.318,104.01 226.917,103.76 226.568,103.78 
						224.458,104.42 218.388,107.83 215.598,106.79 212.498,106.16 212.337,106.14 211.038,106.17 209.218,105.5 207.198,104.11 
						206.528,100.99 205.048,101.23 205.538,105.8 203.098,102.92 203.348,101.52 203.708,101.17 203.888,100.4 202.817,97.12 
						203.008,96.2 197.308,89.9 197.308,87.8 197.607,87.3 197.908,84.1 196.607,80.1 194.308,75.3 191.607,70.8 189.808,66.9 
						190.808,63.2 191.408,57.4 193.208,54.3 193.508,47.8 192.408,44.2 190.808,40 188.107,35.8 188.908,32.6 190.408,28.4 
						192.208,27.6 192.508,26.5 195.607,23.9 200.808,12.1 201.008,4.7 202.607,0 209.708,2.4 221.107,5.4 228.607,7.5 241.208,11.6 
						254.708,15"/>
				
					
					<polygon id="south-eastern-california-area" fill="#12A89D" points="327.708,206.101 326.908,207.601 
						325.607,208.3 322.308,210 320.408,212.101 318.808,215.6 318.408,220.5 315.708,223.1 313.507,224.401 313.507,230.6 
						312.708,232.299 313.808,234.1 317.007,234.2 316.308,236.1 314.808,238.1 311.007,238.6 310.538,238.571 296.808,237.7 
						277.107,235 267.107,233.5 266.607,231.7 266.607,222.299 266.308,219.1 263.708,214.9 262.908,212.601 259.007,208.4 
						256.468,204.28 257.068,203.28 258.068,203.66 258.958,203.99 259.638,203.33 260.988,202.04 262.548,200.66 263.798,200.88 
						264.347,200.98 264.828,200.69 266.427,199.73 266.718,199.561 266.908,199.29 270.187,194.47 270.368,194.21 270.427,193.9 
						271.748,186.95 271.767,186.91 273.158,182.78 273.177,182.71 275.408,165.22 275.538,164.17 275.638,163.351 275.908,161.28 
						306.857,169.04 308.097,169.351 319.448,187.11 319.498,187.181 319.548,187.25 321.448,189.55 321.767,189.94 321.778,189.92 
						321.888,190.09 321.927,190.141 321.937,190.15 322.107,190.4 322.007,193.2 324.908,198.4 325.808,203.7 326.808,205.2"/>
				
					<polygon id="southern-california-area" fill="#12A89D" points="274.448,160.88 274.448,160.91 274.437,160.92 
						274.437,160.95 274.427,161 271.738,182.3 271.708,182.37 270.318,186.521 268.948,193.62 265.667,198.44 264.058,199.4 
						262.097,199.061 259.968,200.931 258.597,202.25 256.417,201.44 255.107,203.63 253.408,203.5 250.208,202.7 249.908,201.7 
						251.408,201.101 250.808,197.9 249.308,195.8 244.507,195 240.607,192.9 239.507,190.601 236.908,185.8 234.007,182.7 
						231.107,182.7 227.228,180.61 230.708,166.17 231.308,166.811 232.607,167.83 232.888,167.97 234.578,168.391 237.417,170.641 
						238.507,172.25 239.658,173.181 239.937,173.32 249.548,175.681 250.107,175.601 257.347,171.271 260.937,170.53 263.017,169.34 
						263.298,169.021 266.158,163.19 268.357,159.391 268.368,159.391 268.368,159.38"/>
					
					<path id="ca-full" fill="#FFFFFF" stroke-miterlimit="10" d="M310.701,238.599l3.799-0.5l1.5-2
						l0.701-1.898l-3.201-0.102l-1.1-1.799l0.801-1.701V224.4l2.199-1.301l2.699-2.6l0.4-4.9l1.6-3.5l1.9-2.1l3.301-1.699l1.299-0.701
						l0.801-1.5l-0.9-0.898l-1-1.5l-0.9-5.301l-2.898-5.199l0.1-2.801l-2.201-3.199L304.6,164L285.201,135.3l-22.4-33l-12.7-19.5
						l1.8-7.2l6.801-25.899l8.1-31.4L254.4,15l-13.5-3.4l-12.6-4.1l-7.5-2.1l-11.4-3L202.3,0l-1.6,4.7l-0.2,7.4l-5.2,11.8l-3.1,2.6
						l-0.3,1.1l-1.8,0.8l-1.5,4.2l-0.8,3.2l2.7,4.2l1.6,4.2l1.1,3.6l-0.3,6.5l-1.8,3.1l-0.6,5.801l-1,3.699l1.8,3.9l2.7,4.5l2.3,4.8
						l1.3,4l-0.3,3.2l-0.3,0.5v2.1l5.7,6.301l-0.5,2.399l-0.6,2.3l-0.6,1.9l0.2,8.2l2.1,3.7l1.9,2.6l2.7,0.5l1,2.7l-1.1,3.6l-2.1,1.602
						h-1.1l-0.8,3.898l0.5,2.9l3.2,4.4l1.6,5.301l1.5,4.699l1.3,3.1l3.4,5.801l1.5,2.6l0.5,2.9l1.6,1v2.4l-0.8,1.898l-1.8,7.102
						l-0.5,1.898l2.4,2.701l4.2,0.5l4.5,1.799l3.9,2.102h2.899l2.9,3.1l2.6,4.799l1.101,2.301l3.899,2.1l4.8,0.801l1.5,2.1l0.601,3.199
						l-1.5,0.602l0.3,1l3.2,0.799l2.7,0.201l2.899,4.699l3.9,4.199l0.8,2.301l2.6,4.199l0.301,3.201v9.4l0.5,1.799l10,1.5l19.699,2.701
						L310.701,238.599z"/>
						
						<title>California</title>
						
					<g class="cal-titles">
						<text id="northern-california-title" transform="matrix(1 0 0 1 206.7964 45.6968)"><tspan x="0" y="0" font-size="10">Northern</tspan><tspan x="-0.84" y="12" font-size="10">California</tspan></text>
                        <text id="centralw-california-title" transform="matrix(1 0 0 1 320.3364 92.6968)" font-size="10">Nevada-Utah</text>
						<text id="central-california-title" transform="matrix(1 0 0 1 225.2515 143.6968)"><tspan x="0" y="0" font-size="10">Central</tspan><tspan id="cal" x="-4.795" y="12" font-size="10">California</tspan></text>
				
						<g id="southern-california-title">
							<line fill="#0001FE" x1="232.808" y1="201.2" x2="243.808" y2="191.7"/>
							<text id="southern" transform="matrix(1 0 0 1 188.0015 197.6968)"><tspan x="0" y="0" font-size="10">Southern</tspan><tspan id="cali" x="-0.545" y="12" font-size="10">California</tspan></text>
						</g>
				
						<g id="south-eastern-california-title">
							<line fill="none" stroke="#000000" stroke-miterlimit="10" x1="247.808" y1="239.7" x2="271.808" y2="225.7"/>
							<text id="south-eastern" transform="matrix(1 0 0 1 227.937 252.6968)"><tspan x="0" y="0" font-size="10">Southeastern</tspan><tspan id="calif" x="9.02" y="12" font-size="10">California</tspan></text>
						</g>
					</g>
					
				</g>
			</a>
			
			<a xlink:href= "#" class="nev-ut" onClick="showOne('ANPF','anp_confs');">
				<polygon id="nevada" fill="#12A89D" stroke-miterlimit="10" points="361.388,39.15 361.337,39.41 360.238,45.01 356.738,62.51 352.927,83.03 351.038,91.89 
					351.038,91.92 351.028,91.96 348.828,105.56 345.638,122.01 342.437,137.19 342.437,137.22 342.427,137.24 340.888,146.08 
					340.828,146.44 340.658,147.44 340.607,147.7 340.578,147.92 338.107,164.5 337.607,165.601 336.507,168.101 334.607,168 
					333.507,165.3 330.808,164.8 329.408,163.8 327.408,164.101 326.507,164.8 325.208,166.101 324.808,173.101 324.308,174.8 
					323.908,186.9 322.658,188.54 322.607,188.601 322.478,188.45 322.538,188.37 321.148,186.351 310.548,169.96 309.278,167.99 
					308.488,166.771 306.167,163.19 286.748,134.46 268.167,107.08 264.167,101.19 263.908,100.8 252.888,83.86 252.058,82.58 
					253.667,75.95 260.458,50.08 268.558,18.67 268.587,18.54 301.607,26.5 315.308,29.5 315.007,29.4 336.007,33.9 345.708,35.8 
					355.007,37.6"/>
					
				<title>Nevada</title>
					
				<polygon id="utah" fill="#12A89D" stroke-miterlimit="10" points="438.408,75.2 436.308,97.2 433.107,119.8 429.308,147.6 427.607,158.7 
					427.328,160.92 427.308,161.101 402.708,157.601 376.988,152.86 376.857,152.84 376.107,152.7 373.948,152.32 373.638,152.26 
					361.558,150.12 354.868,148.93 353.968,148.77 353.587,148.7 342.337,146.7 342.308,146.7 342.368,146.36 343.908,137.5 
					347.107,122.3 350.308,105.8 352.507,92.2 354.408,83.3 358.208,62.8 361.708,45.3 362.808,39.7 363.058,39.75 375.507,42 
					387.507,44.1 397.808,45.9 406.107,47.3 409.808,47.8 408.308,58.4 406.007,71.6 413.808,72.5 430.208,74.3"/>
					
				<title>Utah</title>
				
				<polygon id="central-western-ca" fill="#12A89D" points="304.958,164.431 306.847,167.391 276.278,159.74 274.638,159.32 274.627,159.38 274.627,159.4 
					269.708,158.17 268.988,157.99 269.127,157.59 269.488,155.061 269.498,154.94 269.417,152.06 269.278,149.53 269.828,146.26 
					269.757,145.8 268.417,143.12 267.738,136.59 267.748,135 268.158,131.75 267.638,129.29 267.377,128.88 265.007,126.94 
					265.368,125.04 265.257,124.48 264.048,122.67 264.068,121.23 263.468,119.06 260.948,115.4 260.618,113.29 260.448,112.91 
					258.868,111.08 259.228,109.63 259.187,109.16 258.198,106.75 258.377,104.52 258.078,103.85 256.238,102.52 254.328,100.59 
					254.607,97.53 254.427,96.97 252.698,94.99 251.927,94.77 250.308,95.22 249.228,94.47 251.558,84.97 251.627,84.67 
					263.007,102.15 265.408,105.7 285.568,135.44"/>
				
				<g class="nev-ut-titles">
					<text id="nevada-utah-title" transform="matrix(1 0 0 1 320.3364 92.6968)" font-size="10">Nevada-Utah</text>
				</g>
			</a>
				
			<a xlink:href= "#" class="az-area" onClick="showOne('ANP4','anp_confs');">
				<polygon id="arizona-area" fill="#12A89D" stroke-miterlimit="10" points="427.107,162.4 427.087,162.58 422.808,193.4 415.808,246.299 
					412.007,273.5 409.507,286 384.408,283.299 372.107,280.901 355.308,270.901 340.607,262.299 328.507,254.7 309.607,244 
					309.107,243 309.408,241.5 311.048,240.11 311.058,240.11 311.208,240.09 315.007,239.59 315.627,239.5 316.007,239 317.507,237 
					317.638,236.821 317.718,236.62 318.417,234.719 319.138,232.77 317.058,232.7 314.667,232.629 314.408,232.209 314.868,231.241 
					315.007,230.93 315.007,225.26 316.468,224.391 316.618,224.299 316.748,224.18 319.448,221.581 319.857,221.19 319.898,220.62 
					320.278,215.981 321.677,212.931 323.238,211.21 326.298,209.63 327.618,208.92 328.017,208.7 328.228,208.311 329.028,206.811 
					329.558,205.82 328.767,205.04 327.978,204.24 327.238,203.13 326.388,198.15 326.347,197.891 326.218,197.67 323.517,192.83 
					323.607,190.45 323.627,189.96 323.548,189.84 323.798,189.51 325.097,187.811 325.388,187.431 325.408,186.95 325.798,175.04 
					326.248,173.521 326.298,173.36 326.308,173.19 326.677,166.76 327.498,165.931 328.017,165.521 329.028,165.37 329.937,166.021 
					330.208,166.21 330.538,166.271 332.427,166.62 333.218,168.57 333.578,169.45 334.528,169.5 336.427,169.601 337.468,169.65 
					337.877,168.7 338.978,166.2 339.478,165.12 339.558,164.931 339.587,164.72 342.058,148.18 373.857,153.83 373.877,153.83 
					375.308,154.101 376.498,154.3 376.597,154.32 402.507,158.7"/>
					
				<g class="az-title">
					<text id="arizona-title" transform="matrix(1 0 0 1 357.3765 211.6968)" font-size="10">Arizona</text>
				</g>
			</a>
				
			<a xlink:href= "#" class="hi-area"  onclick="showOne('ANPB','anp_confs');" transform="translate(80,-60)" >
				<path id="hawaii-area" fill="#12A89D" d="M0,273.397l1.9-3.6l2.3-0.301l0.3,0.801l-2.1,3.1H0z M10.2,269.696l6.101,2.602
					l2.1-0.301l1.6-3.9l-0.6-3.4l-4.2-0.5l-4,1.801L10.2,269.696z M40.9,279.696l3.7,5.5L47,284.897l1.101-0.5l1.5,1.299l3.7-0.199
					l1-1.5l-2.9-1.801l-1.9-3.699l-2.1-3.6l-5.8,2.9L40.9,279.696z M61.101,288.596l1.3-1.9l4.7,1l0.6-0.5l6.101,0.602l-0.301,1.299
					l-2.6,1.5l-4.4-0.299L61.101,288.596z M66.4,293.797l1.9,3.898l3.1-1.1l0.3-1.6l-1.6-2.1l-3.7-0.301V293.797L66.4,293.797z
					M73.4,292.596l2.3-2.9l4.7,2.4l4.4,1.1l4.399,2.701v1.9l-3.6,1.799l-4.8,1l-2.4-1.5L73.4,292.596z M90,308.196l1.601-1.299
					l3.399,1.6l7.601,3.6l3.398,2.1l1.602,2.4l1.898,4.4l4,2.6l-0.299,1.301l-3.9,3.199l-4.199,1.5l-1.5-0.6l-3.102,1.801
					l-2.399,3.199l-2.3,2.9L94,336.696l-3.6-2.6l-0.3-4.5l0.6-2.4l-1.6-5.699L87,319.696l-0.199-2.6l2.3-1l2.1-3.1l0.5-1l-1.6-1.801
					L90,308.196z"/>
				
				<g class="hi-title">
					<text id="hawaii-title" transform="matrix(1 0 0 1 35.2119 311.6968)" font-size="10">Hawaii</text>
				</g>
			</a>
			
			<text id="pacific-union-title" transform="matrix(1 0 0 1 247.9165 122.791)" font-size="16">pacific union</text>
		</svg>
	
	</div>
    
<div class='column2'>
<?php

$arr=sws_entity_personnel("ANP"); 

foreach ($arr as $arrTmp) { echo sws_show_entity($arrTmp); }

$tmp=sws_fromBig("ANP",$unionArr); 

foreach ($tmp as $arr) { $myID=$arr[0]; //echo $myID."<br />";
	$newArr=sws_entity_personnel($myID); 
	foreach ($newArr as $arrTmp2) { echo sws_show_entity($arrTmp2,'anp_confs hideClass'); }
}

?></div>
    
    
</div>