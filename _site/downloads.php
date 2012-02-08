<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Saiku - Next Generation Open Source Analysis - Home</title>

        <!-- blueprint css -->
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
        <!--[if lt IE 8]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection"><![endif]-->
        <!-- eof blueprint css -->
        <!-- sticky footer css -->
        <link rel="stylesheet" href="css/sticky-footer.css" type="text/css" media="screen, projection">
        <!-- eof sticky footer css -->
        <!-- saiku css -->
        <link rel="stylesheet" href="css/saiku.css" type="text/css" media="screen, projection">
        <!-- eof saiku css -->
    </head>
    <body>
        <!-- wrap -->
        <div id="wrap">
            <!-- main -->
            <div id="main" class="container">
                <!-- header -->
                <div id="header" class="span-21">
                    <!-- logo -->
                    <div id="logo" class="span-10">
                        <h1>
                            <a href="http://www.analytical-labs.com/" title="Saiku - Next Generation Open Source Analytics">
                                <img src="images/logo_img.png" alt="Saiku - Next Generation Open Source Analytics"/>
                            </a>
                        </h1>
                    </div>
                    <!-- eof logo -->
                    <!-- contact -->
                    <div id="contact" class="span-11 last">
                        <ul>
                            <li><span>E:&nbsp;&nbsp;</span> <a href="mailto:contact@analytical-labs.com" title="Email Analytical Labs">contact@analytical-labs.com</a></li>
                            <!-- <li><span>P:</span> +44 203 239 0984 <img src="images/gb_flag_img.png" alt="United Kingdom" /></li> -->
                            <li><span>T: &nbsp;&nbsp;</span> <a href="http://www.twitter.com/SaikuAnalytics" title="Follow Analytical Labs">@SaikuAnalytics</a></li>
                            <li><span>ML:</span> <a href="https://groups.google.com/a/analytical-labs.com/group/saikudev/" title="Join the Saiku Developer Discussion Group">saikudev@googlegroups.com</a></li>
                        </ul>
                    </div>
                    <div align="right">
                        <a href="http://github.com/OSBI/saiku"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/71eeaab9d563c2b3c590319b398dd35683265e85/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork Saiku on GitHub"></a>
                    </div>
                    <!-- eof contact -->
                </div>
                <!-- eof header -->
                <!-- navigation -->
                <div id="navigation" class="span-21">
                    <ul>
                        <li><a href="index.html" title="Home" class="selected">Home</a></li>
                        <li><a href="screenshots.html" title="Screenshots">Screenshots</a></li>
                        <li><a href="downloads.php" title="Downloads">Downloads</a></li>
                        <li><a href="https://docs.analytical-labs.com" title="Documentation" rel="new">Documentation</a></li>
                        <li><a href="https://github.com/OSBI/saiku/issues" title="Issue Tracker" rel="new">Issue Tracker</a></li>
                        <li><a href="http://ask.analytical-labs.com">Forum</a></li>
                    </ul>
                </div>
                <!-- eof navigation -->
                <?php
session_start();
?>

                                <!-- content -->
                <div id="content" class="span-24 prepend-top">
                    <!-- main-content -->
                    <div id="main-content" class="span-21 prepend-1 append-1 prepend-top append-bottom">
                        <h3>Saiku 2.2</h3>
                        <p>
                            Saiku 2.2 is a new major release that includes lot of improvements compared to 2.1. 
                            <br />We've been working very hard to implement new features, fix bugs and improve the general user interaction.
                            <br />In case we have missed anything, we would appreciate all filed bugs and feature requests in our <a href="https://github.com/OSBI/saiku/issues/" title="Saiku Issue Tracker">Issue Tracker</a>.
                            <br />
                            <h3>What's new in 2.2?</h3>
                            <div id="newfeatures" class="prepend-1">
                            <ul >
                                <li>
                                    <strong>Speed Boost</strong>
                                    - Query execution received a massive speed improvement.
                                </li>
                                <li>
                                    <strong>SSAS, Palo, SAP BW Compatibility</strong>
                                    - We made sure that saiku works perfectly with other OLAP engines.
                                </li>
                                <li>
                                    <strong>Mondrian Roles</strong>
                                    - Apply role-based security to your Mondrian OLAP cubes.
                                </li>
                                <li>
                                    <strong>Query Scenarios</strong>
                                    - Change cell values on your resultset and perform basic What-If Analysis.
                                </li>
                                <li>
                                    <strong>Drill-Through</strong>
                                    - Display or export all fact rows that make up a specific cell in your OLAP resultset.
                                </li>
                                <li>
                                    <strong>Refresh Datasources / Clear Cache</strong>
                                    - Reload your datasources configuration and clear the cache from within the UI.
                                </li>
                                <li>
                                    <strong>Faster and more robust UI</strong>
                                    - The user interface was completely rewritten for 2.2 and includes lots of speed improvements and bug fixes.
                                </li>
                                 <li>
                                    <strong>Charts</strong>
                                    - Saiku is now capable to produce some basic charts using <a href="https://github.com/webdetails/ccc" title="CCC by Webdetails">CCC by Webdetails</a>.
                                </li>
                                <li>
                                    <strong>Basic Statistics</strong>
                                    - You can now view some basic statistics (avg, min, max, std. dev, .etc) of your OLAP query.
                                </li>

                            </ul>
                            </div>
                        
                        </p>
                       <br />
                       
                       We provide vairous Download Packages, but most users will find it sufficent to either download the <strong>Saiku Server (Including Foodmart DB)</strong> or the <strong>Pentaho BI Server Plugin</strong>.
                        <br /><br/>
		<?php	
			if($_SESSION['error']==1){
				echo "<p class=\"error\">Please enter a valid email address.</p>";
			}elseif($_SESSION['success']==1){
				echo "<p class=\"success\">Thanks.  Please download Saiku using the links below.</p>";
				session_destroy();
			}
			if(!isset($_COOKIE['saiku_download'])){
				?>
				<h3>Downloads: Information Request</h3>
				<form method="post" action="set.php">
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" id="first_name" value="<?php echo $_SESSION['FirstName']; ?>" />
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" id="last_name" value="<?php echo $_SESSION['LastName']; ?>" />
					<label for="email">Email Address</label>
					<input type="text" name="email" id="email" value="<?php echo $_SESSION['Email']; ?>" />
					<label for="company">Company</label>
					<input type="text" name="company" id="company" value="<?php echo $_SESSION['Company']; ?>" />
					<label for="country">Country</label>
					<select name="country">
						<option value="">None</option>
						<option value="Undisclosed">Undisclosed</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="American Samoa">American Samoa</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antigua">Antigua</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Barbuda">Barbuda</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bonaire">Bonaire</option>
						<option value="Botswana">Botswana</option>
						<option value="Brazil">Brazil</option>
						<option value="British Virgin isl.">British Virgin isl.</option>
						<option value="Brunei">Brunei</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Cayman Islands">Cayman Islands</option>
						<option value="Central African Rep.">Central African Rep.</option>
						<option value="Chad">Chad</option>
						<option value="Channel Islands">Channel Islands</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Colombia">Colombia</option>
						<option value="Congo">Congo</option>
						<option value="Cook Islands">Cook Islands</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Croatia">Croatia</option>
						<option value="Curacao">Curacao</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Faeroe Islands">Faeroe Islands</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="French Guiana">French Guiana</option>
						<option value="French Polynesia">French Polynesia</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Greece">Greece</option>
						<option value="Greenland">Greenland</option>
						<option value="Grenada">Grenada</option>
						<option value="Guadeloupe">Guadeloupe</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea Bissau">Guinea Bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Ireland, Northern">Ireland, Northern</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Ivory Coast">Ivory Coast</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Liberia">Liberia</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macau">Macau</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Martinique">Martinique</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mexico">Mexico</option>
						<option value="Micronesia">Micronesia</option>
						<option value="Moldova">Moldova</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar/Burma">Myanmar/Burma</option>
						<option value="Namibia">Namibia</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Netherlands Antilles">Netherlands Antilles</option>
						<option value="New Caledonia">New Caledonia</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Palau">Palau</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Puerto Rico">Puerto Rico</option>
						<option value="Qatar">Qatar</option>
						<option value="Reunion">Reunion</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Saba">Saba</option>
						<option value="Saipan">Saipan</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovak Republic">Slovak Republic</option>
						<option value="Slovenia">Slovenia</option>
						<option value="South Africa">South Africa</option>
						<option value="South Korea">South Korea</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syria">Syria</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Togo">Togo</option>
						<option value="Trinidad-Tobago">Trinidad-Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
						<option value="U.S.A.">U.S.A.</option>
						<option value="Uganda">Uganda</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Vatican City">Vatican City</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Yemen">Yemen</option>
						<option value="Zaire">Zaire</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
					</select>
					<input type="submit" value="Submit" class="button blue" />
				</form>
				<p class="subtle">No Thanks: I'd just like to <a href="bypass.php">download Saiku</a>, without giving you my email.</p>
				<?php
				session_destroy();
			}else{
			
			?>
				<h3>Downloads</h3>
				<div class="span-21 downloaditem">
					<span class="span-16 vcenter">Saiku Server 2.2 (Including Foodmart DB)</span>
					<span class="span-3 none">
					    <a onclick="_gaq.push(['_trackEvent','Download','2.2 server',this.href]);" href="http://analytical-labs.com/downloads/saiku-server-foodmart-2.2.zip" style="display:inline-block" class="windows" ></a>
					    <a onclick="_gaq.push(['_trackEvent','Download','2.2 server',this.href]);" href="http://analytical-labs.com/downloads/saiku-server-foodmart-2.2.tar.gz" style="display:inline-block" class="mac" ></a>
					    <a onclick="_gaq.push(['_trackEvent','Download','2.2 server',this.href]);" href="http://analytical-labs.com/downloads/saiku-server-foodmart-2.2.tar.gz" style="display:inline-block" class="linux" ></a>
					</span>
				</div>
				<div class="span-21 downloaditem">
					<span class="span-16 vcenter">Saiku Server 2.2</span>
					<span class="span-3 none">
					    <a onclick="_gaq.push(['_trackEvent','Download','2.2 server',this.href]);" href="http://analytical-labs.com/downloads/saiku-server-2.2.zip" style="display:inline-block" class="windows" ></a>
					    <a onclick="_gaq.push(['_trackEvent','Download','2.2 server',this.href]);" href="http://analytical-labs.com/downloads/saiku-server-2.2.tar.gz" style="display:inline-block" class="mac" ></a>
					    <a onclick="_gaq.push(['_trackEvent','Download','2.2 server',this.href]);" href="http://analytical-labs.com/downloads/saiku-server-2.2.tar.gz" style="display:inline-block" class="linux" ></a>
					</span>
				</div>
				<div class="span-21 downloaditem">
					<span class="span-16 vcenter">Saiku Pentaho BI Server Plugin 2.2</span>
					<div align="center" class="span-3 none">
					    <a onclick="_gaq.push(['_trackEvent','Download','2.2 plugin',this.href]);" href="http://analytical-labs.com/downloads/saiku-plugin-2.2.zip" style="display:inline-block" class="download" ></a>
					</div>
				</div>
				<div class="span-21 downloaditem">
					<span class="span-16 vcenter">Saiku Backend WAR 2.2</span>
					<div align="center" class="span-3 none">
					    <a onclick="_gaq.push(['_trackEvent','Download','2.2 manual',this.href]);" href="http://analytical-labs.com/downloads/saiku-webapp-2.2.war" style="display:inline-block" class="download" ></a>
					</div>
				</div>
				<div class="span-21 downloaditem">
					<span class="span-16 vcenter">Saiku UI WAR 2.2</span>
					<div align="center" class="span-3 none">
					    <a onclick="_gaq.push(['_trackEvent','Download','2.2 manual',this.href]);" href="http://analytical-labs.com/downloads/saiku-ui-2.2.war" style="display:inline-block" class="download" ></a>
					</div>
				</div>
			<?php
			}
		?>
                      
                        
                    </div>
                    <!-- eof main-content -->
                    
                    <!-- eof sidebar -->
                </div>
                <!-- eof content -->
            </div>
            <!-- eof main -->
        </div>
        <!-- eof wrap -->

            </div>
            <!-- eof main -->
        </div>
        <!-- eof wrap -->
        <!-- footer -->
        <div id="footer">
            <!-- footer_wrap -->
            <div id="footer_wrap" class="container">
                <!-- copyright -->
                <div id="copyright" class="span-5">
                    <strong>Saiku &copy; 2011</strong>
                </div>
                <!-- eof copyright -->
                <!-- sitemap -->
                <div id="sitemap" class="span-19 last">
                    <ul>
                        <li><a href="mailto:contact@analytical-labs.com" title="Email Analytical Labs">contact@analytical-labs.com</a></li>
                        <li class="last_child"><a href="http://www.twitter.com/SaikuAnalytics" title="Follow Analytical Labs">@SaikuAnalytics</a></li>
                    </ul>
                </div>
                <!-- eof sitemap -->
            </div>
            <!-- eof footer_wrap -->
        </div>
        <!-- eof footer -->
            <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16172251-6']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>


    </body>
</html>