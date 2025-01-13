
<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Generate Geographical Image - P&S Intelligence</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
         <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

         <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />   
        <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout/css/themes/materialize.css" rel="stylesheet" type="text/css" id="style_color" />
        <!-- END THEME LAYOUT STYLES -->
      
       
       <!-------BAR GRAPH---->
      <script src="https://d3js.org/d3.v6.min.js"></script>
    <script src="https://d3js.org/topojson.v3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Poppins', sans-serif !important;
            
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0;
            padding: 20px;
            background: #fff;
        }
        #map {
            width: 600px;
            height: 337px;
            position: relative;
        }
        svg {
            width: 600px;
            height: 337px;
            background: #fff;
        }
        .annotation {
            font-size: 14px;
            font-weight: bold;
        }
        .message-box {
            position: absolute;
            background-color: rgba(255, 255, 255, 0);
            padding: 5px;
            z-index: 10;
            font-size: 13px;
            overflow: hidden;
            border-radius: 5px;
        }
        .custom-box {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .custom-box select, .custom-box textarea, .custom-box button {
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .custom-box textarea {
            
            height: 30px;
			margin-left:16px;
			outline: none !important;
            box-shadow: none !important;
            font-size: 13px !important;
            padding: 0px 10px;
	        background-color: #fff;
            border: 1px solid #c2cad8;
	        width:90%;
        }

        #headingInput {
            margin-bottom: 20px;
			font-family: 'Poppins', sans-serif !important;
        }
		button{padding: 5px 9px;
        background: green;
        color: #fff;
        outline: none;
        border: none;
        cursor: pointer;
    margin-top: 15px;}
	#custom-text-boxes div{
		display:flex;
		align-item:center;
		}
		.form-control {
    font-family: 'Poppins', sans-serif !important;
     }
     #imageDisplay {
            margin-top: 20px;
            display: none;
        }

        #imageDisplay img {
            max-width: 100%;
            height: auto;
        }

        #imageDisplay .delete-button {
            margin-top: 10px;
            cursor: pointer;
            background-color: red;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
        }

        #imageDisplay .copy-path {
            margin-top: 10px;
            background-color: #20A7AD;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }  
    </style>
   
    </head>

    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-mobile-offcanvas">

        <div class="page-wrapper">

            <!-- BEGIN HEADER -->

          

            <!-- END HEADER -->

            <!-- BEGIN HEADER & CONTENT DIVIDER -->

            <div class="clearfix"> </div>

            <!-- END HEADER & CONTENT DIVIDER -->

            <!-- BEGIN CONTAINER -->

            <div class="page-container">

                <!-- BEGIN SIDEBAR -->

               

                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->

                <div class="page-content-wrapper">

                    <!-- BEGIN CONTENT BODY -->

                    <div class="page-content">

                        <!-- BEGIN PAGE HEADER-->

                        <!-- BEGIN PAGE TITLE-->

                       
                        <!-- END PAGE TITLE-->

                        <!-- END PAGE HEADER-->

                        <div class="row">

                            <div class="col-md-12 col-sm-12">

                                <div class="portlet light ">

                                    <div class="portlet-title">

                                        <div class="caption caption-md">

                                            <i class="icon-bar-chart font-dark hide"></i>

                                            <span class="caption-subject font-dark bold">Generate Geographical Image</span>
                                            

                                        </div>
                                        
                                       <div class="actions">
                  <!------<div class="btn-group btn-group-devided">
        <a href="" class="btn btn-transparent btn-no-border green-jungle btn-outline btn-circle btn-md active">List of Employees</a>
                  </div>----->
                                            </div>

                                    </div>

                                    <div class="portlet-body form">

                                      

                                            <div class="form-body">

                                                <div class="row">
                                                 <div class="col-md-12">
                                          <div class="row">  
                                          <div class="col-md-12">
                                          
           <div class="custom-box">
        <input class="form-control" type="text" id="headingInput" placeholder="Title">
        <select class="form-control" id="type-select">
            <option value="region">Region</option>
            <option value="country">Country</option>
        </select>
        <select class="form-control" id="region-select" multiple>
            <option value="North America">North America</option>
            <option value="Europe">Europe</option>
            <option value="APAC">APAC</option>
            <option value="LATAM">LATAM</option>
            <option value="MEA">MEA</option>
        </select>
        <input type="text" id="country-search" placeholder="Search Country" style="display: none;">
        <select class="form-control" id="country-select" multiple style="display: none;">
            <option value="">Select Country</option>
            <option value="Afghanistan">Afghanistan (+93)</option>
<option value="Albania">Albania (+355)</option>
<option value="Algeria">Algeria (+213)</option>
<option value="Andorra">Andorra (+376)</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica (+0)</option>
<option value="Antigua and Barbuda">Antigua and Barbuda (+1268)</option>
<option value="Argentina">Argentina (+54)</option>
<option value="Armenia">Armenia (+374)</option>
<option value="Aruba">Aruba (+297)</option>
<option value="Australia">Australia (+61)</option>
<option value="Austria">Austria (+43)</option>
<option value="Azerbaijan">Azerbaijan (+994)</option>
<option value="Bahamas, The">Bahamas, The (+1242)</option>
<option value="Bahrain">Bahrain (+973)</option>
<option value="Bangladesh">Bangladesh (+880)</option>
<option value="Barbados">Barbados (+1246)</option>
<option value="Belarus">Belarus (+375)</option>
<option value="Belgium">Belgium (+32)</option>
<option value="Belize">Belize (+501)</option>
<option value="Benin">Benin (+229)</option>
<option value="Bermuda">Bermuda (+1441)</option>
<option value="Bhutan">Bhutan (+975)</option>
<option value="Bolivia">Bolivia (+591)</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina (+387)</option>
<option value="Botswana">Botswana (+267)</option>
<option value="Brazil">Brazil (+55)</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory (+246)</option>
<option value="Brunei">Brunei (+673)</option>
<option value="Bulgaria">Bulgaria (+359)</option>
<option value="Burkina Faso">Burkina Faso (+226)</option>
<option value="Burundi">Burundi (+257)</option>
<option value="Cambodia">Cambodia (+855)</option>
<option value="Cameroon">Cameroon (+237)</option>
<option value="Canada">Canada (+01)</option>
<option value="Cape Verde">Cape Verde (+238)</option>
<option value="Central African Republic">Central African Republic (+236)</option>
<option value="Chad">Chad (+235)</option>
<option value="Chile">Chile (+56)</option>
<option value="China">China (+86)</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands (+672)</option>
<option value="Colombia">Colombia (+57)</option>
<option value="Comoros">Comoros (+269)</option>
<option value="Congo - the Democratic Republic of the">Congo - the Democratic Republic of the (+242)</option>
<option value="Congo, Republic of the">Congo, Republic of the (+242)</option>
<option value="Costa Rica">Costa Rica (+506)</option>
<option value="Cote d'Ivoire">Cote d'Ivoire (+225)</option>
<option value="Croatia">Croatia (+385)</option>
<option value="Cuba">Cuba (+53)</option>
<option value="Curacao">Curacao (+599)</option>
<option value="Cyprus">Cyprus (+357)</option>
<option value="Czech Republic">Czech Republic (+420)</option>
<option value="Denmark">Denmark (+45)</option>
<option value="Djibouti">Djibouti (+253)</option>
<option value="Dominica">Dominica (+1767)</option>
<option value="Dominican Republic">Dominican Republic (+1809)</option>
<option value="Ecuador">Ecuador (+593)</option>
<option value="Egypt">Egypt (+20)</option>
<option value="El Salvador">El Salvador (+503)</option>
<option value="Equatorial Guinea">Equatorial Guinea (+240)</option>
<option value="Eritrea">Eritrea (+291)</option>
<option value="Estonia">Estonia (+372)</option>
<option value="Ethiopia">Ethiopia (+251)</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas) (+500)</option>
<option value="Fiji">Fiji (+679)</option>
<option value="Finland">Finland (+358)</option>
<option value="France">France (+33)</option>
<option value="Gabon">Gabon (+241)</option>
<option value="Gambia">Gambia (+220)</option>
<option value="Georgia">Georgia (+995)</option>
<option value="Germany">Germany (+49)</option>
<option value="Ghana">Ghana (+233)</option>
<option value="Greece">Greece (+30)</option>
<option value="Greenland">Greenland (+299)</option>
<option value="Grenada">Grenada (+1473)</option>
<option value="Guatemala">Guatemala (+502)</option>
<option value="Guinea-Bissau">Guinea-Bissau (+245)</option>
<option value="Guyana">Guyana (+592)</option>
<option value="Haiti">Haiti (+509)</option>
<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands (+0)</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State) (+379)</option>
<option value="Honduras">Honduras (+504)</option>
<option value="Hong Kong">Hong Kong (+852)</option>
<option value="Hungary">Hungary (+36)</option>
<option value="Iceland">Iceland (+354)</option>
<option value="India">India (+91)</option>
<option value="Indonesia">Indonesia (+62)</option>
<option value="Iran -  Islamic Republic of">Iran - Islamic Republic of (+98)</option>
<option value="Iraq">Iraq (+964)</option>
<option value="Ireland">Ireland (+353)</option>
<option value="Israel">Israel (+972)</option>
<option value="Italy">Italy (+39)</option>
<option value="Jamaica">Jamaica (+1876)</option>
<option value="Japan">Japan (+81)</option>
<option value="Jordan">Jordan (+962)</option>
<option value="Kazakhstan">Kazakhstan (+7)</option>
<option value="Kenya">Kenya (+254)</option>
<option value="Kiribati">Kiribati (+686)</option>
<option value="Korea, North">Korea, North (+850)</option>
<option value="Korea, South">Korea, South (+82)</option>
<option value="Kuwait">Kuwait (+965)</option>
<option value="Kyrgyzstan">Kyrgyzstan (+996)</option>
<option value="Laos">Laos (+856)</option>
<option value="Latvia">Latvia (+371)</option>
<option value="Lebanon">Lebanon (+961)</option>
<option value="Lesotho">Lesotho (+266)</option>
<option value="Liberia">Liberia (+231)</option>
<option value="Libya">Libya (+218)</option>
<option value="Liechtenstein">Liechtenstein (+423)</option>
<option value="Lithuania">Lithuania (+370)</option>
<option value="Luxembourg">Luxembourg (+352)</option>
<option value="Macau">Macau (+853)</option>
<option value="Macedonia">Macedonia (+389)</option>
<option value="Madagascar">Madagascar (+261)</option>
<option value="Malawi">Malawi (+265)</option>
<option value="Malaysia">Malaysia (+60)</option>
<option value="Maldives">Maldives (+960)</option>
<option value="Mali">Mali (+223)</option>
<option value="Malta">Malta (+356)</option>
<option value="Marshall Islands">Marshall Islands (+692)</option>
<option value="Mauritania">Mauritania (+222)</option>
<option value="Mauritius">Mauritius (+230)</option>
<option value="Mexico">Mexico (+52)</option>
<option value="Moldova">Moldova (+373)</option>
<option value="Monaco">Monaco (+377)</option>
<option value="Mongolia">Mongolia (+976)</option>
<option value="Montenegro">Montenegro (+382)</option>
<option value="Morocco">Morocco (+212)</option>
<option value="Mozambique">Mozambique (+258)</option>
<option value="Myanmar">Myanmar (+95)</option>
<option value="N Guinea">N Guinea (+224)</option>
<option value="Namibia">Namibia (+264)</option>
<option value="Nauru">Nauru (+674)</option>
<option value="Nepal">Nepal (+977)</option>
<option value="Netherlands">Netherlands (+31)</option>
<option value="Netherlands Antilles">Netherlands Antilles (+599)</option>
<option value="New Zealand">New Zealand (+64)</option>
<option value="Nicaragua">Nicaragua (+505)</option>
<option value="Niger">Niger (+227)</option>
<option value="Nigeria">Nigeria (+234)</option>
<option value="Northern Mariana Islands">Northern Mariana Islands (+1670)</option>
<option value="Norway">Norway (+47)</option>
<option value="Oman">Oman (+968)</option>
<option value="Pakistan">Pakistan (+92)</option>
<option value="Palau">Palau (+680)</option>
<option value="Palestinian Territories">Palestinian Territories (+970)</option>
<option value="Panama ">Panama (+507)</option>
<option value="Papua New Guinea ">Papua New Guinea (+675)</option>
<option value="Paraguay">Paraguay (+595)</option>
<option value="Peru">Peru (+51)</option>
<option value="Philippines">Philippines (+63)</option>
<option value="Poland">Poland (+48)</option>
<option value="Portugal">Portugal (+351)</option>
<option value="Qatar">Qatar (+974)</option>
<option value="Romania">Romania (+40)</option>
<option value="Russia">Russia (+70)</option>
<option value="Rwanda">Rwanda (+250)</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis (+1869)</option>
<option value="Saint Lucia">Saint Lucia (+1758)</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines (+1784)</option>
<option value="Samoa">Samoa (+684)</option>
<option value="San Marino">San Marino (+378)</option>
<option value="Sao Tome and Principe (+239)">Sao Tome and Principe (+239)</option>
<option value="Saudi Arabia">Saudi Arabia (+966)</option>
<option value="Senegal">Senegal (+221)</option>
<option value="Serbia">Serbia (+381)</option>
<option value="Seychelles">Seychelles (+248)</option>
<option value="Sierra Leone">Sierra Leone (+232)</option>
<option value="Singapore">Singapore (+65)</option>
<option value="Slovakia">Slovakia (+421)</option>
<option value="Slovenia">Slovenia (+386)</option>
<option value="Solomon Islands">Solomon Islands (+677)</option>
<option value="Somalia">Somalia (+252)</option>
<option value="South Africa (+27)">South Africa (+27)</option>
<option value="Spain">Spain (+34)</option>
<option value="Sri Lanka">Sri Lanka (+94)</option>
<option value="Sudan">Sudan (+249)</option>
<option value="Suriname">Suriname (+597)</option>
<option value="Swaziland">Swaziland (+268)</option>
<option value="Sweden">Sweden (+46)</option>
<option value="Switzerland">Switzerland (+41)</option>
<option value="Syria">Syria (+963)</option>
<option value="Taiwan">Taiwan (+886)</option>
<option value="Tajikistan">Tajikistan (+992)</option>
<option value="Tanzania">Tanzania (+255)</option>
<option value="Thailand">Thailand (+66)</option>
<option value="Timor-Leste">Timor-Leste (+670)</option>
<option value="Togo">Togo (+228)</option>
<option value="Tonga">Tonga (+676)</option>
<option value="Trinidad and Tobago">Trinidad and Tobago (+1868)</option>
<option value="Tunisia">Tunisia (+216)</option>
<option value="Turkey">Turkey (+90)</option>
<option value="Turkmenistan">Turkmenistan (+7370)</option>
<option value="Tuvalu">Tuvalu (+688)</option>
<option value="Uganda">Uganda (+256)</option>
<option value="Ukraine">Ukraine (+380)</option>
<option value="United Arab Emirates">United Arab Emirates (+971)</option>
<option value="United Kingdom">United Kingdom (+44)</option>
<option value="United States">United States (+1)</option>
<option value="Uruguay">Uruguay (+598)</option>
<option value="Uzbekistan">Uzbekistan (+998)</option>
<option value="Vanuatu">Vanuatu (+678)</option>
<option value="Venezuela">Venezuela (+58)</option>
<option value="Vietnam">Vietnam (+84)</option>
<option value="Virgin Islands -  U.S.">Virgin Islands - U.S. (+1340)</option>
<option value="Virgin Islands - British">Virgin Islands - British (+1284)</option>
<option value="Wallis and Futuna">Wallis and Futuna (+681)</option>
<option value="Western Sahara">Western Sahara (+212)</option>
<option value="Yemen">Yemen (+967)</option>
<option value="Zambia">Zambia (+260)</option>
<option value="Zimbabwe">Zimbabwe (+263)</option>
            <!-- Add all countries here -->
        </select>
        <div id="custom-text-boxes"></div>
    </div>
                                                </div> 
                                          <div class="col-md-7"> 
                                          <div id="map"></div>  
                     
        <button style="background: rgb(0, 119, 255); color:#fff; width:100px;"  id="submitBtn">Submit</button>
        <!-- <button id="download-png-btn">Download Map as PNG</button> -->
        <!-- <button id="download-webp-btn">Download Map as WebP</button> -->
        <button id="sendToDbBtn" onclick="sendToDatabase()">Publish</button>
     </div> 
      
     <div id="imageDisplay">
            <img id="uploadedImage" src="" alt="">
            <button class="delete-button" id="deleteImageButton" onclick="deleteImage()">Delete Image</button>

            <!-- Display img tag with src and copy path button -->
            <div>
                <p>HTML Img Tag:</p>
                <pre id="imgTagDisplay"></pre>
                <button class="copy-path" onclick="copyImagePath()">Copy Path</button>
            </div>
            <button id="downloadWebPBtn" class="download-button" onclick="downloadChart('webp')" style="display: none;">Download as PNG</button>
            
        </div>  
           
     </div>
                                                 
                                                 </div>
                                                </div>                                                

                                                

                                            </div>

                                      

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- END CONTENT BODY -->

                </div>

                <!-- END CONTENT -->

                <!-- BEGIN QUICK SIDEBAR -->

                <!-- END QUICK SIDEBAR -->

            </div>

            <!-- END CONTAINER -->

        <!-- BEGIN CORE PLUGINS -->

         <!-- BEGIN FOOTER -->

        

        <!-- END FOOTER -->

    </div>

         <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
       <script src="assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/components-date-time-pickers.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/form-icheck.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        
        
     <script>
        const width = 600;
        const height = 337;

        const projection = d3.geoMercator()
            .scale(67)
            .translate([width / 2, height / 1.5]);

        const path = d3.geoPath().projection(projection);

        const svg = d3.select("#map").append("svg");

        svg.style("background-color", "#fff"); // Set background color

        const g = svg.append("g");

        // Add heading text to SVG
        const heading = svg.append("text")
            .attr("id", "map-heading")
            .attr("x", width / 2)
            .attr("y", 18) // Move slightly higher
            .attr("text-anchor", "middle")
            .attr("fill", "#14509E")
            .style("font-size", "17px")
            .style("font-weight", "600")
            .style("font-family", "'Poppins', sans-serif")
            .text("");

        const source = svg.append("text")
            .attr("x", 10) // Move left for visibility
            .attr("y", height - 10) // Move up slightly
            .attr("text-anchor", "start")
            .style("font-size", "11px")
            .style("font-family", "'Poppins', sans-serif")
            .style("fill", "#5c73a0")
            .style("font-weight", "600")
            .text("Source: P&S Intelligence");

        const regions = {
            "North America": { coordinates: [-100, 40], color: "#20a7ad" },
            "Europe": { coordinates: [10, 50], color: "#14509E" },
            "APAC": { coordinates: [100, 20], color: "#337CCF" },
            "LATAM": { coordinates: [-60, -10], color: "#172d55" },
            "MEA": { coordinates: [30, 10], color: "#164863" },
        };

        const countries = {
            "Afghanistan": { coordinates: [67.709953, 33.93911], color: "red" },
            "Albania": { coordinates: [20.168331, 41.153332], color: "blue" },
            "Algeria": { coordinates: [1.659626, 28.033886], color: "orange" },
            "Andorra": { coordinates: [1.601554, 42.546245], color: "blue" },
            "Angola": { coordinates: [17.873887, -11.202692], color: "purple" },
            "Anguilla": { coordinates: [-63.068615, 18.220554], color: "purple" },
            "Antarctica": { coordinates: [0.0, -75.250973], color: "white" },
            "Antigua and Barbuda": { coordinates: [-61.796428, 17.060816], color: "purple" },
            "Argentina": { coordinates: [-63.616672, -38.416097], color: "purple" },
            "Armenia": { coordinates: [45.038189, 40.069099], color: "red" },
            "Aruba": { coordinates: [-69.968338, 12.52111], color: "purple" },
            "Australia": { coordinates: [133.775136, -25.274398], color: "red" },
            "Austria": { coordinates: [14.550072, 47.516231], color: "blue" },
            "Azerbaijan": { coordinates: [47.576927, 40.143105], color: "red" },
            "Bahamas, The": { coordinates: [-77.396279, 25.03428], color: "purple" },
            "Bahrain": { coordinates: [50.637772, 25.930414], color: "orange" },
            "Bangladesh": { coordinates: [90.356331, 23.684994], color: "red" },
            "Barbados": { coordinates: [-59.543198, 13.193887], color: "purple" },
            "Belarus": { coordinates: [27.953389, 53.709807], color: "blue" },
            "Belgium": { coordinates: [4.469936, 50.503887], color: "blue" },
            "Belize": { coordinates: [-88.49765, 17.189877], color: "green" },
            "Benin": { coordinates: [2.315834, 9.30769], color: "orange" },
            "Bermuda": { coordinates: [-64.7505, 32.3078], color: "green" },
            "Bhutan": { coordinates: [90.433601, 27.514162], color: "red" },
            "Bolivia": { coordinates: [-63.588653, -16.290154], color: "purple" },
            "Bosnia": { coordinates: [17.679076, 43.915886], color: "blue" },
            "Botswana": { coordinates: [24.684866, -22.328474], color: "purple" },
            "Brazil": { coordinates: [-51.92528, -14.235004], color: "purple" },
            "British Indian Ocean Territory": { coordinates: [71.876519, -6.343194], color: "red" },
            "Brunei": { coordinates: [114.727669, 4.535277], color: "red" },
            "Bulgaria": { coordinates: [25.48583, 42.733883], color: "blue" },
            "Burkina Faso": { coordinates: [-1.561593, 12.238333], color: "orange" },
            "Burundi": { coordinates: [29.918886, -3.373056], color: "orange" },
            "Cambodia": { coordinates: [104.990963, 12.565679], color: "red" },
            "Cameroon": { coordinates: [12.354722, 7.369722], color: "orange" },
            "Canada": { coordinates: [-106.346771, 56.130366], color: "green" },
            "Cape Verde": { coordinates: [-23.605172, 16.002082], color: "orange" },
            "Central African Republic": { coordinates: [20.939444, 6.611111], color: "orange" },
            "Chad": { coordinates: [18.732207, 15.454166], color: "orange" },
            "Chile": { coordinates: [-71.542969, -35.675147], color: "purple" },
            "China": { coordinates: [104.195397, 35.86166], color: "red" },
            "Cocos (Keeling) Islands": { coordinates: [96.870956, -12.164165], color: "red" },
            "Colombia": { coordinates: [-74.297333, 4.570868], color: "purple" },
            "Comoros": { coordinates: [43.872219, -11.875001], color: "purple" },
            "Congo - the Democratic Republic of the": { coordinates: [21.758664, -4.038333], color: "orange" },
            "Congo, Republic of the": { coordinates: [15.827659, -0.228021], color: "orange" },
            "Costa Rica": { coordinates: [-83.753428, 9.748917], color: "green" },
            "Cote d'Ivoire": { coordinates: [-5.54708, 7.539989], color: "orange" },
            "Croatia": { coordinates: [15.2, 45.1], color: "blue" },
            "Cuba": { coordinates: [-77.781167, 21.521757], color: "green" },
            "Curacao": { coordinates: [-68.935, 12.169], color: "purple" },
            "Cyprus": { coordinates: [33.429859, 35.126413], color: "blue" },
            "Czech Republic": { coordinates: [15.472962, 49.817492], color: "blue" },
            "Denmark": { coordinates: [9.501785, 56.26392], color: "blue" },
            "Djibouti": { coordinates: [42.590275, 11.825138], color: "orange" },
            "Dominica": { coordinates: [-61.370976, 15.414999], color: "purple" },
            "Dominican Republic": { coordinates: [-70.162651, 18.735693], color: "purple" },
            "Ecuador": { coordinates: [-78.183406, -1.831239], color: "purple" },
            "Egypt": { coordinates: [30.802498, 26.820553], color: "orange" },
            "El Salvador": { coordinates: [-88.89653, 13.794185], color: "green" },
            "Equatorial Guinea": { coordinates: [10.267895, 1.650801], color: "orange" },
            "Eritrea": { coordinates: [39.782334, 15.179384], color: "orange" },
            "Estonia": { coordinates: [25.013607, 58.595272], color: "blue" },
            "Ethiopia": { coordinates: [39.782334, 9.145], color: "orange" },
            "Falkland Islands (Malvinas)": { coordinates: [-59.523613, -51.796253], color: "purple" },
            "Fiji": { coordinates: [178.065032, -17.713371], color: "red" },
            "Finland": { coordinates: [25.748151, 61.92411], color: "blue" },
            "France": { coordinates: [2.213749, 46.603354], color: "blue" },
            "Gabon": { coordinates: [11.609444, -0.803689], color: "orange" },
            "Gambia": { coordinates: [-15.310139, 13.443182], color: "orange" },
            "Georgia": { coordinates: [43.356892, 42.315407], color: "red" },
            "Germany": { coordinates: [10.451526, 51.165691], color: "blue" },
            "Ghana": { coordinates: [-1.023194, 7.946527], color: "orange" },
            "Greece": { coordinates: [21.824312, 39.074208], color: "blue" },
            "Greenland": { coordinates: [-42.604303, 71.706936], color: "blue" },
            "Grenada": { coordinates: [-61.604171, 12.262776], color: "purple" },
            "Guatemala": { coordinates: [-90.230759, 15.783471], color: "green" },
            "Guinea-Bissau": { coordinates: [-15.180413, 11.803749], color: "orange" },
            "Guyana": { coordinates: [-58.93018, 4.860416], color: "purple" },
            "Haiti": { coordinates: [-72.285215, 18.971187], color: "purple" },
            "Heard Island and McDonald Islands": { coordinates: [73.504158, -53.08181], color: "red" },
            "Holy See (Vatican City State)": { coordinates: [12.453389, 41.902916], color: "blue" },
            "Honduras": { coordinates: [-86.241905, 15.199999], color: "green" },
            "Hong Kong": { coordinates: [114.109497, 22.396428], color: "red" },
            "Hungary": { coordinates: [19.503304, 47.162494], color: "blue" },
            "Iceland": { coordinates: [-19.020835, 64.963051], color: "blue" },
            "India": { coordinates: [78.96288, 20.593684], color: "red" },
            "Indonesia": { coordinates: [113.921327, -0.789275], color: "red" },
            "Iran -  Islamic Republic of": { coordinates: [53.688046, 32.427908], color: "red" },
            "Iraq": { coordinates: [43.679291, 33.223191], color: "orange" },
            "Ireland": { coordinates: [-8.24389, 53.41291], color: "blue" },
            "Israel": { coordinates: [34.851612, 31.046051], color: "orange" },
            "Italy": { coordinates: [12.56738, 41.87194], color: "blue" },
            "Jamaica": { coordinates: [-77.297508, 18.109581], color: "purple" },
            "Japan": { coordinates: [138.252924, 36.204824], color: "red" },
            "Jordan": { coordinates: [36.238414, 30.585164], color: "orange" },
            "Kazakhstan": { coordinates: [66.923684, 48.019573], color: "red" },
            "Kenya": { coordinates: [37.906193, -1.292066], color: "orange" },
            "Kiribati": { coordinates: [-168.734039, 1.45156], color: "red" },
            "Korea, North": { coordinates: [127.510093, 40.339852], color: "red" },
            "Korea, South": { coordinates: [127.766922, 35.907757], color: "red" },
            "Kuwait": { coordinates: [47.481766, 29.31166], color: "orange" },
            "Kyrgyzstan": { coordinates: [74.766098, 41.20438], color: "red" },
            "Laos": { coordinates: [102.495496, 19.85627], color: "red" },
            "Latvia": { coordinates: [24.603189, 56.879635], color: "blue" },
            "Lebanon": { coordinates: [35.862285, 33.854721], color: "orange" },
            "Lesotho": { coordinates: [28.233608, -29.609988], color: "purple" },
            "Liberia": { coordinates: [-9.429499, 6.428055], color: "orange" },
            "Libya": { coordinates: [17.228331, 26.3351], color: "orange" },
            "Liechtenstein": { coordinates: [9.555373, 47.166], color: "blue" },
            "Lithuania": { coordinates: [23.881275, 55.169438], color: "blue" },
            "Luxembourg": { coordinates: [6.129583, 49.815273], color: "blue" },
            "Macau": { coordinates: [113.543873, 22.198745], color: "red" },
            "Macedonia": { coordinates: [21.745275, 41.608635], color: "blue" },
            "Madagascar": { coordinates: [46.869107, -18.766947], color: "orange" },
            "Malawi": { coordinates: [34.301525, -13.254308], color: "orange" },
            "Malaysia": { coordinates: [101.975766, 4.210484], color: "red" },
            "Maldives": { coordinates: [73.22068, 3.202778], color: "red" },
            "Mali": { coordinates: [-3.996166, 17.570692], color: "orange" },
            "Malta": { coordinates: [14.375416, 35.937496], color: "blue" },
            "Marshall Islands": { coordinates: [171.184478, 7.131474], color: "red" },
            "Mauritania": { coordinates: [-10.940835, 21.00789], color: "orange" },
            "Mauritius": { coordinates: [57.552152, -20.348404], color: "orange" },
            "Mexico": { coordinates: [-102.552784, 23.634501], color: "green" },
            "Micronesia": { coordinates: [150.550812, 7.425554], color: "red" },
            "Moldova": { coordinates: [28.369885, 47.411631], color: "red" },
            "Monaco": { coordinates: [7.412841, 43.750298], color: "blue" },
            "Mongolia": { coordinates: [103.846656, 46.862496], color: "red" },
            "Montenegro": { coordinates: [19.37439, 42.708678], color: "blue" },
            "Morocco": { coordinates: [-7.09262, 31.791702], color: "orange" },
            "Mozambique": { coordinates: [35.529562, -18.665695], color: "orange" },
            "Myanmar": { coordinates: [95.956223, 21.913965], color: "red" },
            "N Guinea": { coordinates: [143.95555, -6.314993], color: "red" },
            "Namibia": { coordinates: [18.49041, -22.95764], color: "orange" },
            "Nauru": { coordinates: [166.931503, -0.522778], color: "red" },
            "Nepal": { coordinates: [84.124008, 28.394857], color: "red" },
            "Netherlands": { coordinates: [5.291266, 52.132633], color: "blue" },
            "New Zealand": { coordinates: [174.885971, -40.900557], color: "red" },
            "Nicaragua": { coordinates: [-85.207229, 12.865416], color: "green" },
            "Niger": { coordinates: [8.081666, 17.607789], color: "orange" },
            "Nigeria": { coordinates: [8.675277, 9.081999], color: "orange" },
            "Niue": { coordinates: [-169.867233, -19.054445], color: "red" },
            "Norfolk Island": { coordinates: [167.954712, -29.040835], color: "red" },
            "Northern Mariana Islands": { coordinates: [145.38469, 17.33083], color: "red" },
            "Norway": { coordinates: [8.468946, 60.472024], color: "blue" },
            "Oman": { coordinates: [55.923255, 21.512583], color: "orange" },
            "Pakistan": { coordinates: [69.345115, 30.375321], color: "red" },
            "Palau": { coordinates: [134.58252, 7.51498], color: "red" },
            "Palestinian Territories": { coordinates: [35.233154, 31.952162], color: "orange" },
            "Panama": { coordinates: [-80.782127, 8.537981], color: "green" },
            "Papua New Guinea": { coordinates: [143.95555, -6.314993], color: "red" },
            "Paraguay": { coordinates: [-58.443832, -23.442503], color: "purple" },
            "Peru": { coordinates: [-75.015152, -9.189967], color: "purple" },
            "Philippines": { coordinates: [121.774017, 12.879721], color: "red" },
            "Poland": { coordinates: [19.145136, 51.919438], color: "blue" },
            "Portugal": { coordinates: [-8.224454, 39.399872], color: "blue" },
            "Puerto Rico": { coordinates: [-66.590149, 18.220833], color: "purple" },
            "Qatar": { coordinates: [51.183884, 25.354826], color: "orange" },
            "Romania": { coordinates: [24.96676, 45.943161], color: "blue" },
            "Russia": { coordinates: [105.318756, 61.52401], color: "red" },
            "Rwanda": { coordinates: [29.873888, -1.940278], color: "orange" },
            "Saint Kitts and Nevis": { coordinates: [-62.782998, 17.357822], color: "purple" },
            "Saint Lucia": { coordinates: [-60.978893, 13.909444], color: "purple" },
            "Saint Vincent and the Grenadines": { coordinates: [-61.287228, 12.984305], color: "purple" },
            "Samoa": { coordinates: [-172.104629, -13.759029], color: "red" },
            "San Marino": { coordinates: [12.457777, 43.94236], color: "blue" },
            "Sao Tome and Principe": { coordinates: [6.613081, 0.18636], color: "orange" },
            "Saudi Arabia": { coordinates: [45.079162, 23.885942], color: "orange" },
            "Senegal": { coordinates: [-14.452362, 14.497401], color: "orange" },
            "Serbia": { coordinates: [21.005859, 44.016521], color: "blue" },
            "Seychelles": { coordinates: [55.491977, -4.679574], color: "orange" },
            "Sierra Leone": { coordinates: [-11.779889, 8.460555], color: "orange" },
            "Singapore": { coordinates: [103.819836, 1.352083], color: "red" },
            "Slovakia": { coordinates: [19.699024, 48.669026], color: "blue" },
            "Slovenia": { coordinates: [14.995463, 46.151241], color: "blue" },
            "Solomon Islands": { coordinates: [160.156194, -9.64571], color: "red" },
            "Somalia": { coordinates: [46.199616, 5.152149], color: "orange" },
            "South Africa": { coordinates: [22.937506, -30.559482], color: "orange" },
            "South Georgia and the South Sandwich Islands": { coordinates: [-36.587909, -54.429579], color: "purple" },
            "South Sudan": { coordinates: [31.306978, 6.876992], color: "orange" },
            "Spain": { coordinates: [-3.74922, 40.463667], color: "blue" },
            "Sri Lanka": { coordinates: [80.771797, 7.873054], color: "red" },
            "Sudan": { coordinates: [30.217636, 12.862807], color: "orange" },
            "Suriname": { coordinates: [-56.027783, 3.919305], color: "purple" },
            "Svalbard and Jan Mayen": { coordinates: [26.360622, 71.030631], color: "blue" },
            "Swaziland": { coordinates: [31.465866, -26.522503], color: "orange" },
            "Sweden": { coordinates: [18.643501, 60.128161], color: "blue" },
            "Switzerland": { coordinates: [8.227512, 46.818188], color: "blue" },
            "Syria": { coordinates: [38.996815, 34.802075], color: "orange" },
            "Taiwan": { coordinates: [120.960515, 23.69781], color: "red" },
            "Tajikistan": { coordinates: [71.276093, 38.861034], color: "red" },
            "Tanzania": { coordinates: [34.888822, -6.369028], color: "orange" },
            "Thailand": { coordinates: [100.992541, 15.870032], color: "red" },
            "Timor-Leste": { coordinates: [125.727539, -8.874217], color: "red" },
            "Togo": { coordinates: [0.824782, 8.619543], color: "orange" },
            "Tokelau": { coordinates: [-171.855881, -8.967363], color: "red" },
            "Tonga": { coordinates: [-175.198242, -21.178986], color: "red" },
            "Trinidad and Tobago": { coordinates: [-61.222503, 10.691803], color: "purple" },
            "Tunisia": { coordinates: [9.537499, 33.886917], color: "orange" },
            "Turkey": { coordinates: [35.243322, 38.963745], color: "orange" },
            "Turkmenistan": { coordinates: [59.556278, 38.969719], color: "red" },
            "Tuvalu": { coordinates: [177.64933, -7.109535], color: "red" },
            "Uganda": { coordinates: [32.290275, 1.373333], color: "orange" },
            "Ukraine": { coordinates: [31.16558, 48.379433], color: "red" },
            "United Arab Emirates": { coordinates: [53.847818, 23.424076], color: "orange" },
            "United Kingdom": { coordinates: [-3.435973, 55.378051], color: "blue" },
            "United States": { coordinates: [-95.712891, 37.09024], color: "green" },
            "Uruguay": { coordinates: [-55.765835, -32.522779], color: "purple" },
            "Uzbekistan": { coordinates: [64.585262, 41.377491], color: "red" },
            "Vanuatu": { coordinates: [166.959158, -15.376706], color: "red" },
            "Venezuela": { coordinates: [-66.58973, 6.42375], color: "purple" },
            "Vietnam": { coordinates: [108.277199, 14.058324], color: "red" },
            "Virgin Islands": { coordinates: [-64.896335, 18.335765], color: "purple" },
            "Wallis and Futuna": { coordinates: [-177.156097, -13.768752], color: "red" },
            "Western Sahara": { coordinates: [-12.885834, 24.215527], color: "orange" },
            "Yemen": { coordinates: [48.516388, 15.552727],color: "red" },
            "Zambia": { coordinates: [27.849332, -13.133897], color: "orange" },
            "Zimbabwe": { coordinates: [29.154857, -19.015438], color: "orange" }
        };

        const selectedData = {};

        d3.json("https://raw.githubusercontent.com/d3/d3.github.com/master/world-110m.v1.json").then(world => {
            const countriesTopo = topojson.feature(world, world.objects.countries).features;

            g.selectAll("path")
                .data(countriesTopo)
                .enter().append("path")
                .attr("d", path)
                .attr("class", "country")
                .style("fill", "#ccc")
                .style("stroke", "#ccc");

            document.getElementById("submitBtn").addEventListener("click", () => {
                const selectedType = document.getElementById("type-select").value;
                const selectedOptions = selectedType === "region" ?
                    Array.from(document.getElementById("region-select").selectedOptions) :
                    Array.from(document.getElementById("country-select").selectedOptions);

                const selectedNames = selectedOptions.map(option => option.value);

                selectedNames.forEach(name => {
                    const textarea = document.getElementById(`custom-text-${name}`);
                    if (textarea) {
                        selectedData[name] = textarea.value;
                    }
                });

                // Reset map fill colors
                g.selectAll("path").style("fill", "#ccc");
                svg.selectAll(".message-box").remove();

                selectedNames.forEach((name, index) => {
                    const { coordinates, color } = selectedType === "region" ? regions[name] : countries[name];
                    const [x, y] = projection(coordinates);

                    const marker = g.append("circle")
                        .attr("cx", x)
                        .attr("cy", y)
                        .attr("r", 5)
                        .style("fill", color);

                        let yOffset = 10;
                    let xOffset = 10;
                    let messageBoxY = y + yOffset; // Default position below the circle
                    let messageBoxX = x + xOffset;
                    // Adjust yOffset and position based on region
                    if (name === "North America") {
                        yOffset = -80; // Offset above the circle
                        xOffset = -120;
                        messageBoxX = x + xOffset;
                        messageBoxY = y + yOffset; // Set y position above the circle
                    } else if (name === "Europe") {
                        xOffset = 10;
                        messageBoxX = x + xOffset;
                        yOffset = -60; // Offset below the circle
                        messageBoxY = y + yOffset; // Set y position below the circle
                    } else if (name === "APAC") {
                        xOffset = 10;
                        messageBoxX = x + xOffset;
                        yOffset = 10; // Offset below the circle
                        messageBoxY = y + yOffset; // Set y position below the circle
                    } else if (name === "LATAM") {
                        xOffset = -180;
                        messageBoxX = x + xOffset;
                        yOffset = -40; // Offset above the circle
                        messageBoxY = y + yOffset; // Set y position above the circle
                    } else if (name === "MEA") {
                        xOffset = -80;
                        messageBoxX = x + xOffset;
                        yOffset = 10; // Offset below the circle
                        messageBoxY = y + yOffset; // Set y position below the circle
                    }
 
                    const messageBox = svg.append("foreignObject")
                        .attr("class", "message-box")
                        .attr("x", messageBoxX + 5) // Offset to the right of the marker
                        .attr("y", messageBoxY) // Vertical offset based on region
                        .attr("width", 150)
                        .attr("height", 100); // Reduced height

                    const div = messageBox.append("xhtml:div")
                        .style("background-color", "rgb(249 249 249 / 29%)")
                        .style("border", "1px solid rgb(175 175 175)")
                        .style("padding", "5px")
                        .style("z-index", "10")
                        .style("position", "absolute")
                        .style("font-family", "'Poppins', sans-serif")
                        .style("color", color)
                        .style("font-weight", 600)
                        .style("font-size", "12px")
                        .style("margin", "0px"); // Remove margin

                    div.append("p")
                        .style("color", color)
                        .style("margin", "0px") // Remove margin
                        .text(name);

                    const customText = selectedData[name] || '';
                    div.append("p")
                        .style("font-size", "11px") // Reduced font size
                        .style("font-weight", "500") // Custom text font weight
                        .style("color", "#222222") // Custom text color
                        .style("margin", "0px") // Remove margin
                        .text(customText);
                });
            });

            document.getElementById("type-select").addEventListener("change", (event) => {
                const value = event.target.value;
                if (value === "region") {
                    document.getElementById("region-select").style.display = "block";
                    document.getElementById("country-search").style.display = "none";
                    document.getElementById("country-select").style.display = "none";
                } else {
                    document.getElementById("region-select").style.display = "none";
                    document.getElementById("country-search").style.display = "block";
                    document.getElementById("country-select").style.display = "block";
                }
                updateCustomTextBoxes();
            });

            const updateCustomTextBoxes = () => {
                const selectedType = document.getElementById("type-select").value;
                const selectedOptions = selectedType === "region" ?
                    Array.from(document.getElementById("region-select").selectedOptions) :
                    Array.from(document.getElementById("country-select").selectedOptions);

                const selectedNames = selectedOptions.map(option => option.value);
                const customTextBoxContainer = document.getElementById("custom-text-boxes");

                customTextBoxContainer.innerHTML = '';

                selectedNames.forEach(name => {
                    const div = document.createElement("div");
                    const label = document.createElement("label");
                    label.textContent = `${name} Custom Text: `;
                    const textarea = document.createElement("textarea");
                    textarea.id = `custom-text-${name}`;
                    textarea.value = selectedData[name] || '';
                    div.appendChild(label);
                    div.appendChild(textarea);
                    customTextBoxContainer.appendChild(div);
                });
            };

            document.getElementById("region-select").addEventListener("change", updateCustomTextBoxes);
            document.getElementById("country-select").addEventListener("change", updateCustomTextBoxes);

            document.getElementById("headingInput").addEventListener("input", (event) => {
                heading.text(event.target.value);
            });

            // const downloadImage = (format) => {
            //     const svgElement = document.querySelector("#map svg");
            //     const serializer = new XMLSerializer();
            //     const svgString = serializer.serializeToString(svgElement);
            //     const canvas = document.createElement("canvas");
            //     canvas.width = width;
            //     canvas.height = height;
            //     const ctx = canvas.getContext("2d");
            //     const img = new Image();
            //     img.onload = function() {
            //         ctx.fillStyle = "#fff"; // Ensure white background
            //         ctx.fillRect(0, 0, canvas.width, canvas.height);
            //         ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            //         const imgURL = canvas.toDataURL(`image/${format}`);
            //         const a = document.createElement("a");
            //         a.href = imgURL;
            //         a.download = `map.${format}`;
            //         a.click();
            //     };
            //     img.src = 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svgString)));
            // };

            document.getElementById("downloadPngBtn").addEventListener("click", () => downloadImage("png"));
            document.getElementById("downloadWebPBtn").addEventListener("click", () => downloadImage("webp"));

            document.getElementById("country-search").addEventListener("input", (event) => {
                const searchTerm = event.target.value.toLowerCase();
                const options = Array.from(document.getElementById("country-select").options);

                options.forEach(option => {
                    const text = option.textContent.toLowerCase();
                    option.style.display = text.includes(searchTerm) ? 'block' : 'none';
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
        // Fetch image data from the server when the page loads
            fetchImageFromDatabase();
        });

        // function downloadChart(format) {
        //     const chart = document.getElementById('uploadedImage');
        //     const chartName = document.getElementById('headingInput').value.replace(/ /g, "-").replace(/\./g, "").toLowerCase();

        //     html2canvas(chart).then(canvas => {
        //         const link = document.createElement('a');
        //         link.href = canvas.toDataURL(`image/${format}`);
        //         link.download = chartName +`.${format}`;
        //         link.click();
        //     });
        // }

    function sendToDatabase() {
    const chart = document.getElementById('map');
    chartName = document.getElementById('headingInput').value.replace(/ /g, "-").replace(/\./g, "").toLowerCase(); // Convert chart name to lowercase

    // Add "-keyplayers" to chartName before sending to the database
    const chartNameWithSize = chartName + '-regional-outlook'; // use appropriate word according to image

    html2canvas(chart).then(canvas => {
        const image = canvas.toDataURL('image/png');

        // Send image data to PHP via AJAX
        const formData = new FormData();
        formData.append('image', image);
        formData.append('chartName', chartNameWithSize); // Send the modified chart name with "-size"

        fetch('uploads_images.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Capitalize first letter of each word in alt and title
                const imageAlt = capitalizeFirstLetterOfWords(data.chartName.replace(/-/g, " "));
                const imageTitle = capitalizeFirstLetterOfWords(data.chartName.replace(/-/g, " "));

                // Append size to image path (if needed)
                const imagePathWithSize = data.imagePath.replace(data.chartName, data.chartName);

                // Show the image and enable the delete button
                document.getElementById('imageDisplay').style.display = 'block';
                document.getElementById('uploadedImage').src = imagePathWithSize;
                document.getElementById('deleteImageButton').dataset.imagePath = imagePathWithSize;

                // Show WebP download button
                document.getElementById('downloadWebPBtn').style.display = 'inline-block';

                // Disable Submit and Send to Database buttons
                document.getElementById('submitBtn').disabled = true;
                document.getElementById('sendToDbBtn').disabled = true;

                // Display img tag and copy path button
                document.getElementById('imgTagDisplay').textContent = `<img src="${imagePathWithSize}" alt="${imageAlt}" title="${imageTitle}">`;
            } else {
                alert(data.message);
            }
        })
        .catch(error => alert('Error: ' + error));
    });
}

// Helper function to capitalize the first letter of each word in a string
function capitalizeFirstLetterOfWords(str) {
    return str.replace(/\b\w/g, function (char) {
        return char.toUpperCase();
    });
}

// Global variable to store chart name fetched from the server
let globalChartName = '';

function fetchImageFromDatabase() {
   // Send POST request to the PHP script
    fetch('get_images.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ ref_id: 1 }), // Send ref_id in the body
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Capitalize first letter of each word in alt and title
                const imageAlt = capitalizeFirstLetterOfWords(data.chartName.replace(/-/g, " "));
                const imageTitle = capitalizeFirstLetterOfWords(data.chartName.replace(/-/g, " "));

                // Store chart name globally to use for downloading
                globalChartName = data.chartName;

                // Append size to image path
                const imagePathWithSize = data.imagePath.replace(data.chartName, data.chartName);

                // Display the image and set up the download
                document.getElementById('imageDisplay').style.display = 'block';
                document.getElementById('uploadedImage').src = imagePathWithSize;  // Cache-busting
                document.getElementById('deleteImageButton').dataset.imagePath = imagePathWithSize;

                // Show img tag and copy path
                document.getElementById('imgTagDisplay').textContent = `<img src="${imagePathWithSize}" alt="${imageAlt}" title="${imageTitle}">`;

                // Disable Submit and Send to DB buttons after image is uploaded
                document.getElementById('submitBtn').disabled = true;
                document.getElementById('sendToDbBtn').disabled = true;

                // Show WebP download button
                document.getElementById('downloadWebPBtn').style.display = 'inline-block';
            } else {
                // No image exists in the database
                console.log("No image found in the database.");
            }
        })
        .catch(error => {
            alert('Error fetching image. Please try again.');
        });
}

// const downloadChart = (format) => {
                    
            //     const svgElement = document.querySelector("#map svg");
            //     const serializer = new XMLSerializer();
            //     const svgString = serializer.serializeToString(svgElement);
            //     const canvas = document.createElement("canvas");
            //     canvas.width = width;
            //     canvas.height = height;
            //     const ctx = canvas.getContext("2d");
            //     const img = new Image();
            //     img.onload = function() {
            //         ctx.fillStyle = "#fff"; // Ensure white background
            //         ctx.fillRect(0, 0, canvas.width, canvas.height);
            //         ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            //         const imgURL = canvas.toDataURL(`image/${format}`);
            //         const a = document.createElement("a");
            //         a.href = imgURL;
            //         a.download = `map.${format}`;
            //         a.click();
            //     };
            //     img.src = 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svgString)));
            // };


function downloadChart(format) {
    // Use global chartName if set, otherwise fallback to headingInput
    const chartName = globalChartName || document.getElementById('headingInput').value.replace(/ /g, "-").replace(/\./g, "").toLowerCase();

    // Ensure chartName is not empty
    if (!chartName) {
        alert("Chart name is missing or invalid.");
        return;
    }

    // Add "-size" to chartName for download
    const chartNameWithSize = chartName;

    // Ensure html2canvas is used correctly
    html2canvas(document.getElementById('uploadedImage')).then(canvas => {
        const link = document.createElement('a');
        link.href = canvas.toDataURL(`image/${format}`);
        link.download = chartNameWithSize + `.${format}`; // Download with modified chart name
        link.click();
    });
}





// Click to delete generated image from folder and database
function deleteImage() {
    const imagePath = document.getElementById('deleteImageButton').dataset.imagePath;

    // Show confirmation alert before proceeding with deletion
    const confirmation = confirm('Are you sure you want to delete this image?');
    
    if (confirmation) {
        // Proceed with the delete request if the user clicked "OK"
        fetch('delete_images.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ imagePath: imagePath })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Hide the image and delete button
                document.getElementById('imageDisplay').style.display = 'none';

                // Hide the WebP download button
                document.getElementById('downloadWebPBtn').style.display = 'none';

                // Enable Submit and Send to Database buttons
                document.getElementById('submitBtn').disabled = false;
                document.getElementById('sendToDbBtn').disabled = false;

                // Clear img tag and copy path
                document.getElementById('imgTagDisplay').textContent = '';
                alert('Image deleted successfully');
            } else {
                alert('Error deleting image: ' + data.message);
            }
        })
        .catch(error => alert('Error: ' + error));
    } else {
        // If user clicks "Cancel", do nothing
        alert('Image deletion cancelled');
    }
}

function copyImagePath() {
    // Get the entire img tag HTML (including src, alt, and title attributes)
    const imgTag = document.getElementById('imgTagDisplay').innerText;

    // Create a temporary input to copy the img tag
    const tempInput = document.createElement('input');
    tempInput.value = imgTag; // Set the img tag HTML as the value
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);

    alert('Image tag copied to clipboard!');
}

// Helper function to capitalize the first letter of each word in a string
function capitalizeFirstLetterOfWords(str) {
    return str.replace(/\b\w/g, function(match) {
        return match.toUpperCase();
    });
}


    </script>
    

    
    
        
    </body>

</html>