<html>

	<head>
		<title>ICT-AIRLINES</title> 
		<link rel='stylesheet' href='css/jquery-ui-1.10.2.custom.min.css' style='text/css' />
		  <link rel='stylesheet' href='css/jquery-ui-1.10.2.custom.css' style='text/css' />
		   <link rel='stylesheet' href='css/bootstrapCSS/bootstrap.min.css' style='text/css' />	
		  <link rel='stylesheet' href='css/bootstrapCSS/bootstrap.css' style='text/css' />	 
		 <link rel='stylesheet' href='css/Homepage.css' style='text/css' />
		 <link rel='stylesheet' href='css/Flight.css' style='text/css' />
		 
		 
		 <script src="./js/jquery-1.9.1.js"></script>
		  <script src="./js/bootstrapJS/bootstrap.js"></script>
		 <script src="./js/bootstrapJS/bootstrap.min.js"></script>
		 <script src="./js/jquery-ui-1.10.2.custom.js"></script>	
		 <script src="./js/jquery-ui-1.10.2.custom.min.js"></script>		
		 <script src="./js/MyScript.js"></script>	
		 <script src="./js/flightScript.js"></script>	 		 

		 <link rel="shortcut icon" href="image/airplane-icon.png"> 
	</head>
 
 <body>
 	<div class="topB">
 	<div class="imgKo"></div>
 	<div class="paragh">ICO</div><div class="parag">-P Airlines</div>
 	</div>
 
 <div id="divNAV">
 	<ul id="nav">
	<li><a href="Homepage.php">Home</a></li>
	<li><a href="">My Projects</a>
		<ul>
			<li><a href="">Flower Shop</a>-</li>
			<li><a href="">PhoneBook</a>-</li>
			<li><a href="">IconDock</a></li>
			<li><a href="">Best Web Gallery</a></li>
		</ul>
	</li>
	<li class="current"><a href="Flights.php">Flights</a></li>	
	<li><a href="Hotel.php">Hotels</a></li>	
	<li><a href="Packages.php">Packages</a></li>
	<li><a href="Cruises.php">Cruises</a></li>
	<li><a href="Cars.php">Cars</a></li>
	<li><a href="#">Contact Us</a></li>
	
	
	<!--xxxxxxxxxxxxxxxxxxxxxxxxlog-inxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
	<div id="bar">
        <div id="container">
            <!-- Login Starts Here -->
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </fieldset>
                            <input type="submit" id="login" value="Sign in" />
                            
     <!--xxxxxxxxxxxxxxxxxxxxxxxxsign-upxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->                       
                            <div id="bar">
        <div id="container2">
            <!-- Login Starts Here -->
            <div id="loginContainer2">
                <a href="#" id="loginButton2"><span>Sign-Up</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox2">                
                    <form id="loginForm2">
                        <fieldset id="body2">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </fieldset>
                            <button type="submit" class="login2" >Register..!!</button>
                          
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- Login Ends Here -->
        </div>
    </div>
                            
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
                        </fieldset>
                        <span><a href="#">Forgot your password?</a></span>
                    </form>
                </div>
            </div>
            <!-- Login Ends Here -->
        </div>
    </div>

</ul>
</div><!DIVNAV>

<div>
	<form>	
		
	
	</form>
</div>


	<div id="FlightBody">

		<!--<form>
			<table>
				<tr>
					<td>plane</br></td><td><input type="text" /></td>
				</tr>
				<tr>
					<td>FROM</br></td><td><input type="text" name="galing_sa" id="galing_sa"/></td>
				</tr>
				<tr>
					<td>TO</br></td><td><input type="text" name="papuntang" id="papuntang"/></td>
				</tr>
				<tr>
					<td>price</br></td><td><input type="text" /></td>
				</tr>
				<tr>
					<td><button id="btn_search"> Pa BOOK po ^_^!</button></td>
				</tr>
			</table>
		</form>-->
		
		<form>
					<div class="photo">
								
							<ul class="topic">
									<li><a class="set" href="#Portraits">planes1<!--[if gte IE 7]><!--></a><!--<![endif]-->
									
										<ul>
											
												
												<div><button href="lbox/portrait1.jpg" class = "sub" name="plane" onclick="plane_choiced(this.value)" value="Air Asia">click to get</button>
												<li><a href="" class="picLo"><img src="images/1.jpg" alt="AsiaRooms.com" title=" the AirAsia signature red background... and two bees, or are they moths?" /></a></li></div>
												
												
												
												<div><button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="Cebu Pacific">click to get</button>
												<li><a href="" class="picLo"><img src="images/2.jpg" alt="Daysinn.com" title=""/></a></li></div>
												
												
											
												<button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="Asian airplane">click to get</button>
												<li><a href="" class="picLo"><img src="images/3.jpg" alt="Southtravels.com" title="" /></a></li>
												
												
												
												<button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="Philippines airplane">click to get</button>
												<li><a href="" class="picLo"><img src="images/4.jpg" alt="booking.com" title="" /></a></li>
												
												
											
												<button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="PAL Express">click to get</button>
												<li><a href="" class="picLo"><img src="images/5.jpg" alt="asiaTravel.com" title="" /></a></li>
												
												
												
												<button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="South-asian Airplane">click to get</button>
												<li><a href="" class="picLo"><img src="images/6.jpg" alt="international" title="" /></a></li>
												
												
												
												<button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="manila airplane">click to get</button>
												<li><a href="" class="picLo"><img src="images/7.jpg" alt="waterfront.com" title=" " /></a></li>
												
												
												
												<button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="Zest-Airplane">click to get</button>
												<li><a href="" class="picLo"><img src="images/8.jpg" alt="centerhotel.com" title="" /></a></li>
												
												
												
												<button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="lemuel Airplanes">click to get</button>
												<li><a href="" class="picLo"><img src="images/9.jpg" alt="pasay city hotel.com" title="" /></a></li>
												
												
												<button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="international airways">click to get</button>
												<li><a href="" class="picLo"><img src="images/10.jpg" alt="agoda.com" title=" " /></a></li>
												
												
												<button class = "sub" name="plane" onclick="plane_choiced(this.value)" value="Tiger airplane">click to get</button>
												<li><a href="" class="picLo"><img src="images/11.jpg" alt="agoda.com" title=" " /></a></li>
								
										<input type ="text" name ="plane_choice" id="char"/>
										</ul>
								</li>
								</ul>
								<br class="clear" />
								</div>
		
	
			<label for="">Choices:</label>
				<select name="choice" id=""/>
					<option value="Round-trip">Round-trip</option>
					<option value="One-way">One-way</option>
				</select>
				 

	</br>
				
				<label for="from">Depart:</label>
				<input type="text" class="from" name="depart" /></br>
				<label for="to">Return:</label>
				<input type="text" class="to" name="return" /></br>




    		<label for="">Travelers:</label>
    		<select name="travalers" tabindex="5" id="tra">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6+</option>
				</select>
		
		
						From:<select id="FROM" name="galing_saHa">
								<option value="tacloban"select="select">tacloban</option>
								<option value="bacolod">bacolod</option>
								<option value="cebu">cebu</option>
							</select>
					
						To: <select id="TO" name="papuntangSa">
							<option value="cebu"select="select">cebu</option>
							<option value="bacolod">bacolod</option>
							<option value="manila">manila</option>
							<option value="tacloban">tacloban</option>
						</select>
			</form>	
					<input type="submit" value="search" id="search" class="pic"/>
					<div id="yn">Are u sure you want this plane?? </br> CLICK "Yes" for signing a Form</div>
		<div id="formko">			
		<form>
			<table id="INFO2" border="1">
				<th>FROM</th>
				<th>TO</th>
				<th>PRICE</th>
				<tbody id = "wew"></tbody>
			</table>
		</form>
		</div>
		
		
		<div id="formDialog">
		<form class="iHide">
			Firstname:<input type="text" name="Firstname" placeholder="enter Firstname">
			Middlename:<input type="text" name="Middlename" placeholder="enter Middlename">
			Lastname:<input type="text" name="Lastname" placeholder="enter Lastname">
			Age:<input type="text" name="Age" placeholder="enter Age">
			Email or Number:<input type="text" name="EmailOrNumber" placeholder="enter Email or Number">
			Code-Id:<input type="text" name="CodeID" placeholder="enter Code-id"></li>
			Contact-Num:<input type="text" name="Contact" placeholder="enter Contact">
			
		</form>
	</div>
		<!--<form>
		
    <input type="radio" name="" id="" value="2" checked="checked"  /><label for="">Round-trip</label><input type="radio" name="" id="" value="1"  /><label for="Legs1">One-way</label>  

	</br>
            	<label for="">From:</label>
            	<input name="" type="text" value="" tabindex="1" autocomplete="off" class="" id="from_code" />            
            		<div class=""></div>
              <input type="hidden" name="" id="" value="" />
     

	
        	<label for="">To:</label>
        	<input name="" type="text" value="" tabindex="2" autocomplete="off" class="" id="to_code" />        	
        		<div class=""></div>
          <input type="hidden" name="]" id="" value="" />
     


				-->
				<!--
			<input type="button" id="" value="Search"/>-->
	</div>	
		<div id="distenation">
			<form id="you">
			<table id="INFO" border="1">
				<td>PLANE</td>
				<td>FROM</td>
				<td>TO</td>
				<td>PRICE</td>
			</table>
		</form>
 		</div>
 		
 		<div id="bottomPage">	
 			
 		</div>
 </body>
 
 
</html>
