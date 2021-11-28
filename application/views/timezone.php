   
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
            <div class="container">
                <a class="logo logo-pulse pulse" href="index.php">
                    <img src="<?php echo base_url('assets/images/SPOTiTUSA.png'); ?>" alt="SPOTiTUSA  Logo" class="img-fluid logo-dark" />
                    <img src="<?php echo base_url('assets/images/SPOTiTUSA.png'); ?>" alt="SPOTiTUSA Logo" class="img-fluid logo-light" />
                </a>
  
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="fab fa-menu"></span> -->
                    <i class="fas fa-bars" onClick="changeNavBackground()"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto fadeInTop">
                        <li class="nav-item">
                            <a class="nav-link" href="https://spotinfotech.com/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://spotinfotech.com/about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://spotinfotech.com/goals.php">Why Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://spotinfotech.com/services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://spotinfotech.com/team.php">Team</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="https://workforce.spotinfotech.com/">Workforce</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://spotinfotech.com/blogs.php">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://spotinfotech.com/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="section bg-page fadeIn">
            <div class="bg-dark-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mx-auto fadeInBottom">
                            <h5 class="text-white">Workforce</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- features start -->
        <section class="section bg-light about-us" id="features">
            <div class="container fadeInBottom">
                  <div class="row justify-content-center">
                       <div class="col-lg-12">
                          <div class="section-title text-center mx-auto">
                               <div class="section-title-icon"> 
                                <!--<i class="far fa-user text-custom"></i>-->
                               </div>
                               <!--<h5 >Workforce</h5>-->
                               <!--<p class="mt-3 text-muted" >-->
                               <!--     We are here to help you find the right employees whom are professional and experts  at their fields for your business!-->
                               <!--</p>-->
                          </div>
                       </div>
                  </div>
            </div>
            <div>
               <div>
                  <div class="row mt-3 pt-4">
                      <div class="col-lg-4 mt-4">&nbsp;</div>
                      <div class="col-lg-4 mt-4">
                          <div class="container fadeInBottom">
                            <form action="<?php echo base_url('Workforce/timeScheduling'); ?>" method="post">
                                <div style="text-align:center;">
                                    <label>Select Time Zone</label>
                                </div>
                                <div style="height:5px;"></div>
    							<select class="form-select" name="timezone">
    							     <option selected>Select Time Zone</option>
                                     <optgroup label="Africa">
                                		<option value="Africa/Abidjan">Abidjan (GMT+00:00)</option>
                                		<option value="Africa/Accra">Accra (GMT+00:00)</option>
                                		<option value="Africa/Addis_Ababa">Addis_Ababa (GMT+03:00)</option>
                                		<option value="Africa/Algiers">Algiers (GMT+01:00)</option>
                                		<option value="Africa/Asmara">Asmara (GMT+03:00)</option>
                                		<option value="Africa/Bamako">Bamako (GMT+00:00)</option>
                                		<option value="Africa/Bangui">Bangui (GMT+01:00)</option>
                                		<option value="Africa/Banjul">Banjul (GMT+00:00)</option>
                                		<option value="Africa/Bissau">Bissau (GMT+00:00)</option>
                                		<option value="Africa/Blantyre">Blantyre (GMT+02:00)</option>
                                		<option value="Africa/Brazzaville">Brazzaville (GMT+01:00)</option>
                                		<option value="Africa/Bujumbura">Bujumbura (GMT+02:00)</option>
                                		<option value="Africa/Cairo">Cairo (GMT+02:00)</option>
                                		<option value="Africa/Casablanca">Casablanca (GMT+00:00)</option>
                                		<option value="Africa/Ceuta">Ceuta (GMT+01:00)</option>
                                		<option value="Africa/Conakry">Conakry (GMT+00:00)</option>
                                		<option value="Africa/Dakar">Dakar (GMT+00:00)</option>
                                		<option value="Africa/Dar_es_Salaam">Dar_es_Salaam (GMT+03:00)</option>
                                		<option value="Africa/Djibouti">Djibouti (GMT+03:00)</option>
                                		<option value="Africa/Douala">Douala (GMT+01:00)</option>
                                		<option value="Africa/El_Aaiun">El_Aaiun (GMT+00:00)</option>
                                		<option value="Africa/Freetown">Freetown (GMT+00:00)</option>
                                		<option value="Africa/Gaborone">Gaborone (GMT+02:00)</option>
                                		<option value="Africa/Harare">Harare (GMT+02:00)</option>
                                		<option value="Africa/Johannesburg">Johannesburg (GMT+02:00)</option>
                                		<option value="Africa/Juba">Juba (GMT+03:00)</option>
                                		<option value="Africa/Kampala">Kampala (GMT+03:00)</option>
                                		<option value="Africa/Khartoum">Khartoum (GMT+03:00)</option>
                                		<option value="Africa/Kigali">Kigali (GMT+02:00)</option>
                                		<option value="Africa/Kinshasa">Kinshasa (GMT+01:00)</option>
                                		<option value="Africa/Lagos">Lagos (GMT+01:00)</option>
                                		<option value="Africa/Libreville">Libreville (GMT+01:00)</option>
                                		<option value="Africa/Lome">Lome (GMT+00:00)</option>
                                		<option value="Africa/Luanda">Luanda (GMT+01:00)</option>
                                		<option value="Africa/Lubumbashi">Lubumbashi (GMT+02:00)</option>
                                		<option value="Africa/Lusaka">Lusaka (GMT+02:00)</option>
                                		<option value="Africa/Malabo">Malabo (GMT+01:00)</option>
                                		<option value="Africa/Maputo">Maputo (GMT+02:00)</option>
                                		<option value="Africa/Maseru">Maseru (GMT+02:00)</option>
                                		<option value="Africa/Mbabane">Mbabane (GMT+02:00)</option>
                                		<option value="Africa/Mogadishu">Mogadishu (GMT+03:00)</option>
                                		<option value="Africa/Monrovia">Monrovia (GMT+00:00)</option>
                                		<option value="Africa/Nairobi">Nairobi (GMT+03:00)</option>
                                		<option value="Africa/Ndjamena">Ndjamena (GMT+01:00)</option>
                                		<option value="Africa/Niamey">Niamey (GMT+01:00)</option>
                                		<option value="Africa/Nouakchott">Nouakchott (GMT+00:00)</option>
                                		<option value="Africa/Ouagadougou">Ouagadougou (GMT+00:00)</option>
                                		<option value="Africa/Porto-Novo">Porto-Novo (GMT+01:00)</option>
                                		<option value="Africa/Sao_Tome">Sao_Tome (GMT+00:00)</option>
                                		<option value="Africa/Tripoli">Tripoli (GMT+02:00)</option>
                                		<option value="Africa/Tunis">Tunis (GMT+01:00)</option>
                                		<option value="Africa/Windhoek">Windhoek (GMT+01:00)</option>
                                    </optgroup>
                                	<optgroup label="America">
                                		<option value="America/Adak">Adak (GMT-10:00)</option>
                                		<option value="America/Anchorage">Anchorage (GMT-09:00)</option>
                                		<option value="America/Anguilla">Anguilla (GMT-04:00)</option>
                                		<option value="America/Antigua">Antigua (GMT-04:00)</option>
                                		<option value="America/Araguaina">Araguaina (GMT-03:00)</option>
                                		<option value="America/Argentina/Buenos_Aires">Argentina/Buenos_Aires (GMT-03:00)</option>
                                		<option value="America/Argentina/Catamarca">Argentina/Catamarca (GMT-03:00)</option>
                                		<option value="America/Argentina/Cordoba">Argentina/Cordoba (GMT-03:00)</option>
                                		<option value="America/Argentina/Jujuy">Argentina/Jujuy (GMT-03:00)</option>
                                		<option value="America/Argentina/La_Rioja">Argentina/La_Rioja (GMT-03:00)</option>
                                		<option value="America/Argentina/Mendoza">Argentina/Mendoza (GMT-03:00)</option>
                                		<option value="America/Argentina/Rio_Gallegos">Argentina/Rio_Gallegos (GMT-03:00)</option>
                                		<option value="America/Argentina/Salta">Argentina/Salta (GMT-03:00)</option>
                                		<option value="America/Argentina/San_Juan">Argentina/San_Juan (GMT-03:00)</option>
                                		<option value="America/Argentina/San_Luis">Argentina/San_Luis (GMT-03:00)</option>
                                		<option value="America/Argentina/Tucuman">Argentina/Tucuman (GMT-03:00)</option>
                                		<option value="America/Argentina/Ushuaia">Argentina/Ushuaia (GMT-03:00)</option>
                                		<option value="America/Aruba">Aruba (GMT-04:00)</option>
                                		<option value="America/Asuncion">Asuncion (GMT-04:00)</option>
                                		<option value="America/Atikokan">Atikokan (GMT-05:00)</option>
                                		<option value="America/Bahia">Bahia (GMT-03:00)</option>
                                		<option value="America/Bahia_Banderas">Bahia_Banderas (GMT-06:00)</option>
                                		<option value="America/Barbados">Barbados (GMT-04:00)</option>
                                		<option value="America/Belem">Belem (GMT-03:00)</option>
                                		<option value="America/Belize">Belize (GMT-06:00)</option>
                                		<option value="America/Blanc-Sablon">Blanc-Sablon (GMT-04:00)</option>
                                		<option value="America/Boa_Vista">Boa_Vista (GMT-04:00)</option>
                                		<option value="America/Bogota">Bogota (GMT-05:00)</option>
                                		<option value="America/Boise">Boise (GMT-07:00)</option>
                                		<option value="America/Cambridge_Bay">Cambridge_Bay (GMT-07:00)</option>
                                		<option value="America/Campo_Grande">Campo_Grande (GMT-04:00)</option>
                                		<option value="America/Cancun">Cancun (GMT-05:00)</option>
                                		<option value="America/Caracas">Caracas (GMT-04:00)</option>
                                		<option value="America/Cayenne">Cayenne (GMT-03:00)</option>
                                		<option value="America/Cayman">Cayman (GMT-05:00)</option>
                                		<option value="America/Chicago">Chicago (GMT-06:00)</option>
                                		<option value="America/Chihuahua">Chihuahua (GMT-07:00)</option>
                                		<option value="America/Costa_Rica">Costa_Rica (GMT-06:00)</option>
                                		<option value="America/Creston">Creston (GMT-07:00)</option>
                                		<option value="America/Cuiaba">Cuiaba (GMT-04:00)</option>
                                		<option value="America/Curacao">Curacao (GMT-04:00)</option>
                                		<option value="America/Danmarkshavn">Danmarkshavn (GMT+00:00)</option>
                                		<option value="America/Dawson">Dawson (GMT-08:00)</option>
                                		<option value="America/Dawson_Creek">Dawson_Creek (GMT-07:00)</option>
                                		<option value="America/Denver">Denver (GMT-07:00)</option>
                                		<option value="America/Detroit">Detroit (GMT-05:00)</option>
                                		<option value="America/Dominica">Dominica (GMT-04:00)</option>
                                		<option value="America/Edmonton">Edmonton (GMT-07:00)</option>
                                		<option value="America/Eirunepe">Eirunepe (GMT-05:00)</option>
                                		<option value="America/El_Salvador">El_Salvador (GMT-06:00)</option>
                                		<option value="America/Fort_Nelson">Fort_Nelson (GMT-07:00)</option>
                                		<option value="America/Fortaleza">Fortaleza (GMT-03:00)</option>
                                		<option value="America/Glace_Bay">Glace_Bay (GMT-04:00)</option>
                                		<option value="America/Godthab">Godthab (GMT-03:00)</option>
                                		<option value="America/Goose_Bay">Goose_Bay (GMT-04:00)</option>
                                		<option value="America/Grand_Turk">Grand_Turk (GMT-04:00)</option>
                                		<option value="America/Grenada">Grenada (GMT-04:00)</option>
                                		<option value="America/Guadeloupe">Guadeloupe (GMT-04:00)</option>
                                		<option value="America/Guatemala">Guatemala (GMT-06:00)</option>
                                		<option value="America/Guayaquil">Guayaquil (GMT-05:00)</option>
                                		<option value="America/Guyana">Guyana (GMT-04:00)</option>
                                		<option value="America/Halifax">Halifax (GMT-04:00)</option>
                                		<option value="America/Havana">Havana (GMT-05:00)</option>
                                		<option value="America/Hermosillo">Hermosillo (GMT-07:00)</option>
                                		<option value="America/Indiana/Indianapolis">Indiana/Indianapolis (GMT-05:00)</option>
                                		<option value="America/Indiana/Knox">Indiana/Knox (GMT-06:00)</option>
                                		<option value="America/Indiana/Marengo">Indiana/Marengo (GMT-05:00)</option>
                                		<option value="America/Indiana/Petersburg">Indiana/Petersburg (GMT-05:00)</option>
                                		<option value="America/Indiana/Tell_City">Indiana/Tell_City (GMT-06:00)</option>
                                		<option value="America/Indiana/Vevay">Indiana/Vevay (GMT-05:00)</option>
                                		<option value="America/Indiana/Vincennes">Indiana/Vincennes (GMT-05:00)</option>
                                		<option value="America/Indiana/Winamac">Indiana/Winamac (GMT-05:00)</option>
                                		<option value="America/Inuvik">Inuvik (GMT-07:00)</option>
                                		<option value="America/Iqaluit">Iqaluit (GMT-05:00)</option>
                                		<option value="America/Jamaica">Jamaica (GMT-05:00)</option>
                                		<option value="America/Juneau">Juneau (GMT-09:00)</option>
                                		<option value="America/Kentucky/Louisville">Kentucky/Louisville (GMT-05:00)</option>
                                		<option value="America/Kentucky/Monticello">Kentucky/Monticello (GMT-05:00)</option>
                                		<option value="America/Kralendijk">Kralendijk (GMT-04:00)</option>
                                		<option value="America/La_Paz">La_Paz (GMT-04:00)</option>
                                		<option value="America/Lima">Lima (GMT-05:00)</option>
                                		<option value="America/Los_Angeles">Los_Angeles (GMT-08:00)</option>
                                		<option value="America/Lower_Princes">Lower_Princes (GMT-04:00)</option>
                                		<option value="America/Maceio">Maceio (GMT-03:00)</option>
                                		<option value="America/Managua">Managua (GMT-06:00)</option>
                                		<option value="America/Manaus">Manaus (GMT-04:00)</option>
                                		<option value="America/Marigot">Marigot (GMT-04:00)</option>
                                		<option value="America/Martinique">Martinique (GMT-04:00)</option>
                                		<option value="America/Matamoros">Matamoros (GMT-06:00)</option>
                                		<option value="America/Mazatlan">Mazatlan (GMT-07:00)</option>
                                		<option value="America/Menominee">Menominee (GMT-06:00)</option>
                                		<option value="America/Merida">Merida (GMT-06:00)</option>
                                		<option value="America/Metlakatla">Metlakatla (GMT-09:00)</option>
                                		<option value="America/Mexico_City">Mexico_City (GMT-06:00)</option>
                                		<option value="America/Miquelon">Miquelon (GMT-03:00)</option>
                                		<option value="America/Moncton">Moncton (GMT-04:00)</option>
                                		<option value="America/Monterrey">Monterrey (GMT-06:00)</option>
                                		<option value="America/Montevideo">Montevideo (GMT-03:00)</option>
                                		<option value="America/Montserrat">Montserrat (GMT-04:00)</option>
                                		<option value="America/Nassau">Nassau (GMT-05:00)</option>
                                		<option value="America/New_York">New_York (GMT-05:00)</option>
                                		<option value="America/Nipigon">Nipigon (GMT-05:00)</option>
                                		<option value="America/Nome">Nome (GMT-09:00)</option>
                                		<option value="America/Noronha">Noronha (GMT-02:00)</option>
                                		<option value="America/North_Dakota/Beulah">North_Dakota/Beulah (GMT-06:00)</option>
                                		<option value="America/North_Dakota/Center">North_Dakota/Center (GMT-06:00)</option>
                                		<option value="America/North_Dakota/New_Salem">North_Dakota/New_Salem (GMT-06:00)</option>
                                		<option value="America/Ojinaga">Ojinaga (GMT-07:00)</option>
                                		<option value="America/Panama">Panama (GMT-05:00)</option>
                                		<option value="America/Pangnirtung">Pangnirtung (GMT-05:00)</option>
                                		<option value="America/Paramaribo">Paramaribo (GMT-03:00)</option>
                                		<option value="America/Phoenix">Phoenix (GMT-07:00)</option>
                                		<option value="America/Port-au-Prince">Port-au-Prince (GMT-05:00)</option>
                                		<option value="America/Port_of_Spain">Port_of_Spain (GMT-04:00)</option>
                                		<option value="America/Porto_Velho">Porto_Velho (GMT-04:00)</option>
                                		<option value="America/Puerto_Rico">Puerto_Rico (GMT-04:00)</option>
                                		<option value="America/Rainy_River">Rainy_River (GMT-06:00)</option>
                                		<option value="America/Rankin_Inlet">Rankin_Inlet (GMT-06:00)</option>
                                		<option value="America/Recife">Recife (GMT-03:00)</option>
                                		<option value="America/Regina">Regina (GMT-06:00)</option>
                                		<option value="America/Resolute">Resolute (GMT-06:00)</option>
                                		<option value="America/Rio_Branco">Rio_Branco (GMT-05:00)</option>
                                		<option value="America/Santarem">Santarem (GMT-03:00)</option>
                                		<option value="America/Santiago">Santiago (GMT-04:00)</option>
                                		<option value="America/Santo_Domingo">Santo_Domingo (GMT-04:00)</option>
                                		<option value="America/Sao_Paulo">Sao_Paulo (GMT-03:00)</option>
                                		<option value="America/Scoresbysund">Scoresbysund (GMT-01:00)</option>
                                		<option value="America/Sitka">Sitka (GMT-09:00)</option>
                                		<option value="America/St_Barthelemy">St_Barthelemy (GMT-04:00)</option>
                                		<option value="America/St_Johns">St_Johns (GMT-03:30)</option>
                                		<option value="America/St_Kitts">St_Kitts (GMT-04:00)</option>
                                		<option value="America/St_Lucia">St_Lucia (GMT-04:00)</option>
                                		<option value="America/St_Thomas">St_Thomas (GMT-04:00)</option>
                                		<option value="America/St_Vincent">St_Vincent (GMT-04:00)</option>
                                		<option value="America/Swift_Current">Swift_Current (GMT-06:00)</option>
                                		<option value="America/Tegucigalpa">Tegucigalpa (GMT-06:00)</option>
                                		<option value="America/Thule">Thule (GMT-04:00)</option>
                                		<option value="America/Thunder_Bay">Thunder_Bay (GMT-05:00)</option>
                                		<option value="America/Tijuana">Tijuana (GMT-08:00)</option>
                                		<option value="America/Toronto">Toronto (GMT-05:00)</option>
                                		<option value="America/Tortola">Tortola (GMT-04:00)</option>
                                		<option value="America/Vancouver">Vancouver (GMT-08:00)</option>
                                		<option value="America/Whitehorse">Whitehorse (GMT-08:00)</option>
                                		<option value="America/Winnipeg">Winnipeg (GMT-06:00)</option>
                                		<option value="America/Yakutat">Yakutat (GMT-09:00)</option>
                                		<option value="America/Yellowknife">Yellowknife (GMT-07:00)</option>
                                	</optgroup>
                                	<optgroup label="Antarctica">
                                		<option value="Antarctica/Casey">Casey (GMT+08:00)</option>
                                		<option value="Antarctica/Davis">Davis (GMT+07:00)</option>
                                		<option value="Antarctica/DumontDUrville">DumontDUrville (GMT+10:00)</option>
                                		<option value="Antarctica/Macquarie">Macquarie (GMT+11:00)</option>
                                		<option value="Antarctica/Mawson">Mawson (GMT+05:00)</option>
                                		<option value="Antarctica/McMurdo">McMurdo (GMT+12:00)</option>
                                		<option value="Antarctica/Palmer">Palmer (GMT-04:00)</option>
                                		<option value="Antarctica/Rothera">Rothera (GMT-03:00)</option>
                                		<option value="Antarctica/Syowa">Syowa (GMT+03:00)</option>
                                		<option value="Antarctica/Troll">Troll (GMT+00:00)</option>
                                		<option value="Antarctica/Vostok">Vostok (GMT+06:00)</option>
                                	</optgroup>
                                	<optgroup label="Asia">
                                		<option value="Asia/Aden">Aden (GMT+03:00)</option>
                                		<option value="Asia/Almaty">Almaty (GMT+06:00)</option>
                                		<option value="Asia/Amman">Amman (GMT+02:00)</option>
                                		<option value="Asia/Anadyr">Anadyr (GMT+12:00)</option>
                                		<option value="Asia/Aqtau">Aqtau (GMT+05:00)</option>
                                		<option value="Asia/Aqtobe">Aqtobe (GMT+05:00)</option>
                                		<option value="Asia/Ashgabat">Ashgabat (GMT+05:00)</option>
                                		<option value="Asia/Baghdad">Baghdad (GMT+03:00)</option>
                                		<option value="Asia/Bahrain">Bahrain (GMT+03:00)</option>
                                		<option value="Asia/Baku">Baku (GMT+04:00)</option>
                                		<option value="Asia/Bangkok">Bangkok (GMT+07:00)</option>
                                		<option value="Asia/Barnaul">Barnaul (GMT+07:00)</option>
                                		<option value="Asia/Beirut">Beirut (GMT+02:00)</option>
                                		<option value="Asia/Bishkek">Bishkek (GMT+06:00)</option>
                                		<option value="Asia/Brunei">Brunei (GMT+08:00)</option>
                                		<option value="Asia/Chita">Chita (GMT+09:00)</option>
                                		<option value="Asia/Choibalsan">Choibalsan (GMT+08:00)</option>
                                		<option value="Asia/Colombo">Colombo (GMT+05:30)</option>
                                		<option value="Asia/Damascus">Damascus (GMT+02:00)</option>
                                		<option value="Asia/Dhaka" selected="">Dhaka (GMT+06:00)</option>
                                		<option value="Asia/Dili">Dili (GMT+09:00)</option>
                                		<option value="Asia/Dubai">Dubai (GMT+04:00)</option>
                                		<option value="Asia/Dushanbe">Dushanbe (GMT+05:00)</option>
                                		<option value="Asia/Gaza">Gaza (GMT+02:00)</option>
                                		<option value="Asia/Hebron">Hebron (GMT+02:00)</option>
                                		<option value="Asia/Ho_Chi_Minh">Ho_Chi_Minh (GMT+07:00)</option>
                                		<option value="Asia/Hong_Kong">Hong_Kong (GMT+08:00)</option>
                                		<option value="Asia/Hovd">Hovd (GMT+07:00)</option>
                                		<option value="Asia/Irkutsk">Irkutsk (GMT+08:00)</option>
                                		<option value="Asia/Jakarta">Jakarta (GMT+07:00)</option>
                                		<option value="Asia/Jayapura">Jayapura (GMT+09:00)</option>
                                		<option value="Asia/Jerusalem">Jerusalem (GMT+02:00)</option>
                                		<option value="Asia/Kabul">Kabul (GMT+04:30)</option>
                                		<option value="Asia/Kamchatka">Kamchatka (GMT+12:00)</option>
                                		<option value="Asia/Karachi">Karachi (GMT+05:00)</option>
                                		<option value="Asia/Kathmandu">Kathmandu (GMT+05:45)</option>
                                		<option value="Asia/Khandyga">Khandyga (GMT+09:00)</option>
                                		<option value="Asia/Kolkata">Kolkata (GMT+05:30)</option>
                                		<option value="Asia/Krasnoyarsk">Krasnoyarsk (GMT+07:00)</option>
                                		<option value="Asia/Kuala_Lumpur">Kuala_Lumpur (GMT+08:00)</option>
                                		<option value="Asia/Kuching">Kuching (GMT+08:00)</option>
                                		<option value="Asia/Kuwait">Kuwait (GMT+03:00)</option>
                                		<option value="Asia/Macau">Macau (GMT+08:00)</option>
                                		<option value="Asia/Magadan">Magadan (GMT+11:00)</option>
                                		<option value="Asia/Makassar">Makassar (GMT+08:00)</option>
                                		<option value="Asia/Manila">Manila (GMT+08:00)</option>
                                		<option value="Asia/Muscat">Muscat (GMT+04:00)</option>
                                		<option value="Asia/Nicosia">Nicosia (GMT+02:00)</option>
                                		<option value="Asia/Novokuznetsk">Novokuznetsk (GMT+07:00)</option>
                                		<option value="Asia/Novosibirsk">Novosibirsk (GMT+07:00)</option>
                                		<option value="Asia/Omsk">Omsk (GMT+06:00)</option>
                                		<option value="Asia/Oral">Oral (GMT+05:00)</option>
                                		<option value="Asia/Phnom_Penh">Phnom_Penh (GMT+07:00)</option>
                                		<option value="Asia/Pontianak">Pontianak (GMT+07:00)</option>
                                		<option value="Asia/Pyongyang">Pyongyang (GMT+08:30)</option>
                                		<option value="Asia/Qatar">Qatar (GMT+03:00)</option>
                                		<option value="Asia/Qyzylorda">Qyzylorda (GMT+06:00)</option>
                                		<option value="Asia/Rangoon">Rangoon (GMT+06:30)</option>
                                		<option value="Asia/Riyadh">Riyadh (GMT+03:00)</option>
                                		<option value="Asia/Sakhalin">Sakhalin (GMT+11:00)</option>
                                		<option value="Asia/Samarkand">Samarkand (GMT+05:00)</option>
                                		<option value="Asia/Seoul">Seoul (GMT+09:00)</option>
                                		<option value="Asia/Shanghai">Shanghai (GMT+08:00)</option>
                                		<option value="Asia/Singapore">Singapore (GMT+08:00)</option>
                                		<option value="Asia/Srednekolymsk">Srednekolymsk (GMT+11:00)</option>
                                		<option value="Asia/Taipei">Taipei (GMT+08:00)</option>
                                		<option value="Asia/Tashkent">Tashkent (GMT+05:00)</option>
                                		<option value="Asia/Tbilisi">Tbilisi (GMT+04:00)</option>
                                		<option value="Asia/Tehran">Tehran (GMT+03:30)</option>
                                		<option value="Asia/Thimphu">Thimphu (GMT+06:00)</option>
                                		<option value="Asia/Tokyo">Tokyo (GMT+09:00)</option>
                                		<option value="Asia/Tomsk">Tomsk (GMT+07:00)</option>
                                		<option value="Asia/Ulaanbaatar">Ulaanbaatar (GMT+08:00)</option>
                                		<option value="Asia/Urumqi">Urumqi (GMT+06:00)</option>
                                		<option value="Asia/Ust-Nera">Ust-Nera (GMT+10:00)</option>
                                		<option value="Asia/Vientiane">Vientiane (GMT+07:00)</option>
                                		<option value="Asia/Vladivostok">Vladivostok (GMT+10:00)</option>
                                		<option value="Asia/Yakutsk">Yakutsk (GMT+09:00)</option>
                                		<option value="Asia/Yekaterinburg">Yekaterinburg (GMT+05:00)</option>
                                		<option value="Asia/Yerevan">Yerevan (GMT+04:00)</option>
                                	</optgroup>
                                	<optgroup label="Australia">
                                		<option value="Australia/Adelaide">Adelaide (GMT+09:30)</option>
                                		<option value="Australia/Brisbane">Brisbane (GMT+10:00)</option>
                                		<option value="Australia/Broken_Hill">Broken_Hill (GMT+09:30)</option>
                                		<option value="Australia/Currie">Currie (GMT+10:00)</option>
                                		<option value="Australia/Darwin">Darwin (GMT+09:30)</option>
                                		<option value="Australia/Eucla">Eucla (GMT+08:45)</option>
                                		<option value="Australia/Hobart">Hobart (GMT+10:00)</option>
                                		<option value="Australia/Lindeman">Lindeman (GMT+10:00)</option>
                                		<option value="Australia/Lord_Howe">Lord_Howe (GMT+10:30)</option>
                                		<option value="Australia/Melbourne">Melbourne (GMT+10:00)</option>
                                		<option value="Australia/Perth">Perth (GMT+08:00)</option>
                                		<option value="Australia/Sydney">Sydney (GMT+10:00)</option>
                                	</optgroup>
                                	<optgroup label="Atlantic">
                                		<option value="Atlantic/Azores">Azores (GMT-01:00)</option>
                                		<option value="Atlantic/Bermuda">Bermuda (GMT-04:00)</option>
                                		<option value="Atlantic/Canary">Canary (GMT+00:00)</option>
                                		<option value="Atlantic/Cape_Verde">Cape_Verde (GMT-01:00)</option>
                                		<option value="Atlantic/Faroe">Faroe (GMT+00:00)</option>
                                		<option value="Atlantic/Madeira">Madeira (GMT+00:00)</option>
                                		<option value="Atlantic/Reykjavik">Reykjavik (GMT+00:00)</option>
                                		<option value="Atlantic/South_Georgia">South_Georgia (GMT-02:00)</option>
                                		<option value="Atlantic/St_Helena">St_Helena (GMT+00:00)</option>
                                		<option value="Atlantic/Stanley">Stanley (GMT-03:00)</option>
                                	</optgroup>
                                	<optgroup label="Europe">
                                		<option value="Europe/Amsterdam">Amsterdam (GMT+01:00)</option>
                                		<option value="Europe/Andorra">Andorra (GMT+01:00)</option>
                                		<option value="Europe/Astrakhan">Astrakhan (GMT+04:00)</option>
                                		<option value="Europe/Athens">Athens (GMT+02:00)</option>
                                		<option value="Europe/Belgrade">Belgrade (GMT+01:00)</option>
                                		<option value="Europe/Berlin">Berlin (GMT+01:00)</option>
                                		<option value="Europe/Bratislava">Bratislava (GMT+01:00)</option>
                                		<option value="Europe/Brussels">Brussels (GMT+01:00)</option>
                                		<option value="Europe/Bucharest">Bucharest (GMT+02:00)</option>
                                		<option value="Europe/Budapest">Budapest (GMT+01:00)</option>
                                		<option value="Europe/Busingen">Busingen (GMT+01:00)</option>
                                		<option value="Europe/Chisinau">Chisinau (GMT+02:00)</option>
                                		<option value="Europe/Copenhagen">Copenhagen (GMT+01:00)</option>
                                		<option value="Europe/Dublin">Dublin (GMT+00:00)</option>
                                		<option value="Europe/Gibraltar">Gibraltar (GMT+01:00)</option>
                                		<option value="Europe/Guernsey">Guernsey (GMT+00:00)</option>
                                		<option value="Europe/Helsinki">Helsinki (GMT+02:00)</option>
                                		<option value="Europe/Isle_of_Man">Isle_of_Man (GMT+00:00)</option>
                                		<option value="Europe/Istanbul">Istanbul (GMT+02:00)</option>
                                		<option value="Europe/Jersey">Jersey (GMT+00:00)</option>
                                		<option value="Europe/Kaliningrad">Kaliningrad (GMT+02:00)</option>
                                		<option value="Europe/Kiev">Kiev (GMT+02:00)</option>
                                		<option value="Europe/Kirov">Kirov (GMT+03:00)</option>
                                		<option value="Europe/Lisbon">Lisbon (GMT+00:00)</option>
                                		<option value="Europe/Ljubljana">Ljubljana (GMT+01:00)</option>
                                		<option value="Europe/London">London (GMT+00:00)</option>
                                		<option value="Europe/Luxembourg">Luxembourg (GMT+01:00)</option>
                                		<option value="Europe/Madrid">Madrid (GMT+01:00)</option>
                                		<option value="Europe/Malta">Malta (GMT+01:00)</option>
                                		<option value="Europe/Mariehamn">Mariehamn (GMT+02:00)</option>
                                		<option value="Europe/Minsk">Minsk (GMT+03:00)</option>
                                		<option value="Europe/Monaco">Monaco (GMT+01:00)</option>
                                		<option value="Europe/Moscow">Moscow (GMT+03:00)</option>
                                		<option value="Europe/Oslo">Oslo (GMT+01:00)</option>
                                		<option value="Europe/Paris">Paris (GMT+01:00)</option>
                                		<option value="Europe/Podgorica">Podgorica (GMT+01:00)</option>
                                		<option value="Europe/Prague">Prague (GMT+01:00)</option>
                                		<option value="Europe/Riga">Riga (GMT+02:00)</option>
                                		<option value="Europe/Rome">Rome (GMT+01:00)</option>
                                		<option value="Europe/Samara">Samara (GMT+04:00)</option>
                                		<option value="Europe/San_Marino">San_Marino (GMT+01:00)</option>
                                		<option value="Europe/Sarajevo">Sarajevo (GMT+01:00)</option>
                                		<option value="Europe/Simferopol">Simferopol (GMT+03:00)</option>
                                		<option value="Europe/Skopje">Skopje (GMT+01:00)</option>
                                		<option value="Europe/Sofia">Sofia (GMT+02:00)</option>
                                		<option value="Europe/Stockholm">Stockholm (GMT+01:00)</option>
                                		<option value="Europe/Tallinn">Tallinn (GMT+02:00)</option>
                                		<option value="Europe/Tirane">Tirane (GMT+01:00)</option>
                                		<option value="Europe/Ulyanovsk">Ulyanovsk (GMT+04:00)</option>
                                		<option value="Europe/Uzhgorod">Uzhgorod (GMT+02:00)</option>
                                		<option value="Europe/Vaduz">Vaduz (GMT+01:00)</option>
                                		<option value="Europe/Vatican">Vatican (GMT+01:00)</option>
                                		<option value="Europe/Vienna">Vienna (GMT+01:00)</option>
                                		<option value="Europe/Vilnius">Vilnius (GMT+02:00)</option>
                                		<option value="Europe/Volgograd">Volgograd (GMT+03:00)</option>
                                		<option value="Europe/Warsaw">Warsaw (GMT+01:00)</option>
                                		<option value="Europe/Zagreb">Zagreb (GMT+01:00)</option>
                                		<option value="Europe/Zaporozhye">Zaporozhye (GMT+02:00)</option>
                                		<option value="Europe/Zurich">Zurich (GMT+01:00)</option>
                                	</optgroup>
                                	<optgroup label="Indian">
                                		<option value="Indian/Antananarivo">Antananarivo (GMT+03:00)</option>
                                		<option value="Indian/Chagos">Chagos (GMT+06:00)</option>
                                		<option value="Indian/Christmas">Christmas (GMT+07:00)</option>
                                		<option value="Indian/Cocos">Cocos (GMT+06:30)</option>
                                		<option value="Indian/Comoro">Comoro (GMT+03:00)</option>
                                		<option value="Indian/Kerguelen">Kerguelen (GMT+05:00)</option>
                                		<option value="Indian/Mahe">Mahe (GMT+04:00)</option>
                                		<option value="Indian/Maldives">Maldives (GMT+05:00)</option>
                                		<option value="Indian/Mauritius">Mauritius (GMT+04:00)</option>
                                		<option value="Indian/Mayotte">Mayotte (GMT+03:00)</option>
                                		<option value="Indian/Reunion">Reunion (GMT+04:00)</option>
                                	</optgroup>
                                	<optgroup label="Pacific">
                                		<option value="Pacific/Apia">Apia (GMT+13:00)</option>
                                		<option value="Pacific/Auckland">Auckland (GMT+12:00)</option>
                                		<option value="Pacific/Bougainville">Bougainville (GMT+11:00)</option>
                                		<option value="Pacific/Chatham">Chatham (GMT+12:45)</option>
                                		<option value="Pacific/Chuuk">Chuuk (GMT+10:00)</option>
                                		<option value="Pacific/Easter">Easter (GMT-06:00)</option>
                                		<option value="Pacific/Efate">Efate (GMT+11:00)</option>
                                		<option value="Pacific/Enderbury">Enderbury (GMT+13:00)</option>
                                		<option value="Pacific/Fakaofo">Fakaofo (GMT+13:00)</option>
                                		<option value="Pacific/Fiji">Fiji (GMT+12:00)</option>
                                		<option value="Pacific/Funafuti">Funafuti (GMT+12:00)</option>
                                		<option value="Pacific/Galapagos">Galapagos (GMT-06:00)</option>
                                		<option value="Pacific/Gambier">Gambier (GMT-09:00)</option>
                                		<option value="Pacific/Guadalcanal">Guadalcanal (GMT+11:00)</option>
                                		<option value="Pacific/Guam">Guam (GMT+10:00)</option>
                                		<option value="Pacific/Honolulu">Honolulu (GMT-10:00)</option>
                                		<option value="Pacific/Johnston">Johnston (GMT-10:00)</option>
                                		<option value="Pacific/Kiritimati">Kiritimati (GMT+14:00)</option>
                                		<option value="Pacific/Kosrae">Kosrae (GMT+11:00)</option>
                                		<option value="Pacific/Kwajalein">Kwajalein (GMT+12:00)</option>
                                		<option value="Pacific/Majuro">Majuro (GMT+12:00)</option>
                                		<option value="Pacific/Marquesas">Marquesas (GMT-09:30)</option>
                                		<option value="Pacific/Midway">Midway (GMT-11:00)</option>
                                		<option value="Pacific/Nauru">Nauru (GMT+12:00)</option>
                                		<option value="Pacific/Niue">Niue (GMT-11:00)</option>
                                		<option value="Pacific/Norfolk">Norfolk (GMT+11:00)</option>
                                		<option value="Pacific/Noumea">Noumea (GMT+11:00)</option>
                                		<option value="Pacific/Pago_Pago">Pago_Pago (GMT-11:00)</option>
                                		<option value="Pacific/Palau">Palau (GMT+09:00)</option>
                                		<option value="Pacific/Pitcairn">Pitcairn (GMT-08:00)</option>
                                		<option value="Pacific/Pohnpei">Pohnpei (GMT+11:00)</option>
                                		<option value="Pacific/Port_Moresby">Port_Moresby (GMT+10:00)</option>
                                		<option value="Pacific/Rarotonga">Rarotonga (GMT-10:00)</option>
                                		<option value="Pacific/Saipan">Saipan (GMT+10:00)</option>
                                		<option value="Pacific/Tahiti">Tahiti (GMT-10:00)</option>
                                		<option value="Pacific/Tarawa">Tarawa (GMT+12:00)</option>
                                		<option value="Pacific/Tongatapu">Tongatapu (GMT+13:00)</option>
                                		<option value="Pacific/Wake">Wake (GMT+12:00)</option>
                                		<option value="Pacific/Wallis">Wallis (GMT+12:00)</option>
                                	</optgroup>
                                </select>
                                <div style="height:20px;"></div>
                                <div style="text-align:center;">
                                    <label>Select Start Date:</label>
                                </div>
                                <div style="height:5px;"></div>
                                <input type="date" class="form-control" id="dateid" name="startingdate">
                                <div style="height:20px;"></div>
                                <div style="text-align:center;">
                                    <label>Time Format</label>
                                </div>
                                <div style="height:5px;"></div>
                                <input type="text" class="form-control" value="24 Hour" readonly>
                                <div style="height:20px;"></div>
                                <div class="row">
                                   <div class="col" style="text-align:left;">
                                      <a href='<?php echo base_url('Home/index');?>' class="btn btn-warning" style="border-radius:8px;">Back</a>
                                   </div>
                                   <div class="col">&nbsp;</div>
                                   <div class="col" style="text-align:right;">
                                      <button type="submit" class="btn btn-warning" style="border-radius:8px;">Next</button>  
                                   </div>
                                </div>
                          </form>  
                          </div>
                      <div class="col-lg-4 mt-4">&nbsp;</div>
                  </div>
                   
               </div>
            </div>
        </section>
        <!-- Features end -->
        
        <!-- Footer Start -->
        <section class="section bg-footer">
            <div class="container slideInTop">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-content">
                            <ul class="list-unstyled text-center footerlink">
                                <li class="list-inline-item">
                                    <a href="https://affiliate.spotinfotech.com/">Affiliate</a>
                                </li>
                                <li class="list-inline-item"><a href="https://spotinfotech.com/blogs.php">Blogs</a></li>
                                <li class="list-inline-item">
                                    <a href="https://spotinfotech.com/career.php">Career</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://spotinfotech.com/events.php">Events</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://spotinfotech.com/terms-conditions.php">Terms &amp; Conditions</a>
                                </li>
                                <!-- <li class="list-inline-item">
                               <a href="refund-policy.html">Refund Policy</a>
                               </li> -->
                                <li class="list-inline-item">
                                    <a href="https://spotinfotech.com/privacy.php">Privacy Policy</a>
                                </li>
                            </ul>
                            <div class="footer-alt text-center mt-5 mb-5">
                                <p class="mb-0"><span class="year"></span> © SPOTiTUSA.</p>
                            </div>
                            <div class="footer-icon mt-4">
                                <ul class="list-unstyled social-icon text-center">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/spotitusa" target="_blank"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/spotitusa" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://instagram.com/spotitusa" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://linkedin.com/company/spotitusa" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/channel/UCnWjGIX4euBPlnntgUSiVqQ" target="_blank"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <!-- Footer End -->
        <a href="#" class="back-to-top" id="back-to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
          
