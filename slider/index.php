<?php 
//include './data.php';
?>
<html>
	<head>
		
		<link href="css/style.css" rel="stylesheet">
	</head>

        <body style="background-color: white;">
            <h1 style="color: black;">click on the slider to get price</h1>
            
            
            <div style="background: hsl(175, 30%, 30%); width: 600px; height: 250px; margin-left: 400px;">
            <div class="container" >
		
		<div id="input-wrapper">
				
                    <input type="range" id="rangeslider" min="0" max="5" value="20"  
				oninput="updateOutput(value, true)" 
				onchange="deactivate()"  
				/>
				<!-- The reel -->
				<div id="reel">
					<!-- reel numbers - will be populated by JS -->
					<div id="rn"></div>
				</div>
				<!-- static output display on the slider thumb - controlled by JS -->
				<div id="static-output"></div>
			</div>
			<div id="products">
                            
			</div>
		</div>
                </div>
     
		<script src="js/jquery.min.js"></script>
		<script src="js/script.js"></script>

</html>