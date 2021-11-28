
 <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
            <div class="container">
                <a class="logo logo-pulse pulse" href="index.php">
                    <img src="<?php echo base_url('assets/images/SPOTiTUSA.png'); ?>" alt="SPOTiTUSA  Logo" class="img-fluid logo-dark" />
                    <img src="<?php echo base_url('assets/images/SPOTiTUSA.png'); ?>" alt="SPOTiTUSA Logo" class="img-fluid logo-light" />
                </a>
  
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="fab fa-menu"></span> -->
                    <i class="fas fa-bars"></i>
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
            <!--<div class="container fadeInBottom">-->
            <!--      <div class="row justify-content-center">-->
            <!--           <div class="col-lg-12">-->
            <!--          <div class="section-title text-center mx-auto">-->
            <!--               <div class="section-title-icon"> -->
                            <!--<i class="far fa-user text-custom"></i>-->
            <!--               </div>-->
            <!--               <h5 >Workforce</h5>-->
            <!--               <p class="mt-3 text-muted" >-->
            <!--                    We are here to help you find the right employees whom are professional and experts  at their fields for your business!-->
            <!--               </p>-->
            <!--          </div>-->
            <!--           </div>-->
            <!--      </div>-->
            <!--</div>-->
            <div class="container">
              <div class="row mt-3 pt-4">
                <div class="col-lg-4 mt-4">&nbsp;</div>
                <div class="col-lg-4 mt-4 fadeInTop">
                  <div style="color:red;text-align:center;">
                     <div style="height:10px;"></div>
                         <p id="err"></p>
                     <div style="height:10px;"></div>
                  </div>
                  <form action="<?php echo base_url('Workforce/userData'); ?>" method="post"> 
                    <?php 
                    $i=1;
                    foreach ($hours as $key=>$value){?>
                      <div class="card fadeInTop" style="width:25rem; border-radius:12px;" id="<?php echo $i; ?>">
                          <div class="">
                            <div class="card-body">
                            <h6 class="card-title">Working hours (Max <?php echo $value;?> Hours) For 
                            <strong>
                            <?php 
                                if($key=='frontendhour'){ $name= 'Front End Web Developer'; echo $name;}
                                else if($key=='backendhour'){  $name= 'Back End Web Developer'; echo  $name;}
                                else if($key=='fullstackhour'){ $name= 'Full Stack Web Developer'; echo $name;}
                                else if($key=='drupaldevhour'){ $name= 'Drupal Developer'; echo $name;}
                                else if($key=='ecommperhour'){ $name= 'eCommerce Platfrom Developer'; echo $name;}
                                else if($key=='uxperhour'){ $name= 'Ui/Ux Specialist'; echo $name;}
                                else if($key=='appperhour'){ $name= 'Mobile App Developer (Andorid /IOS)'; echo $name;}
                                else if($key=='graphicsperhour'){ $name= 'Graphics Designer'; echo $name;}
                                else if($key=='dbperhour'){ $name= 'Database Administrator'; echo $name;}
                                
                                else if($key=='digitalmarketerhour'){  $name= 'Digital Marketer'; echo  $name;}
                                else if($key=='seostathour'){ $name= 'SEO Statagist'; echo $name;}
                                else if($key=='pmmhour'){ $name= 'Paid Media Marketer'; echo $name;}
                                else if($key=='advehour'){ $name= 'Advertising Executive'; echo $name;}
                                else if($key=='emhour'){ $name= 'Email Marketer'; echo $name;}
                                else if($key=='smmhour'){ $name= 'Social Media Manager'; echo $name;}
                                else if($key=='amhour'){ $name= 'Affiliate Marketer'; echo $name;}
                                else if($key=='tsmhour'){ $name= 'Tele Sales Marketer'; echo $name;}
                                else if($key=='bbhour'){ $name= 'Business Branding'; echo $name;}
                                
                                else if($key=='cchour'){  $name= 'Content Creator'; echo  $name;}
                                else if($key=='vahour'){ $name= 'Voiceover Artist'; echo $name;}
                                else if($key=='abchour'){ $name= 'Animated Video Creator'; echo $name;}
                                
                                else if($key=='jaccountant'){  $name= 'Junior Accountant'; echo  $name;}
                                else if($key=='cpahour'){ $name= 'Certified Public Accountant C.P.A(United States)'; echo $name;}
                                else if($key=='cahour'){ $name= 'Chartered Accountant'; echo $name;}
                                else if($key=='bkhour'){ $name= 'Book Keeper'; echo $name;}
                                else if($key=='jtphour'){ $name= 'Junior Tax Preparer'; echo $name;}
                                else if($key=='btphour'){ $name= 'Business Tax preparer'; echo $name;}
                                else if($key=='brdphour'){ $name= 'Business Registration Document Preparer'; echo $name;}
                                else if($key=='pciehour'){ $name= 'Property & Casualty Insurance Exective'; echo $name;}
                                else if($key=='liehour'){ $name= 'Life Insurance Executive'; echo $name;}
                                
                                else if($key=='roahour'){  $name= 'Remote Office Assistant'; echo  $name;}
                                else if($key=='ocahour'){ $name= 'Outbound Calling Assistant'; echo $name;}
                                else if($key=='erhour'){ $name= 'Email Responder'; echo $name;}
                                else if($key=='csrhour'){ $name= 'Customer Service Representative'; echo $name;}
                                else if($key=='srhour'){ $name= 'Sales Representative'; echo $name;}
                                else if($key=='smrhour'){ $name= 'Social Media Representative'; echo $name;}
                                else if($key=='aehour'){ $name= 'Account Executive'; echo $name;}
                                
                            ?>.</strong></h6>
                            <input type="hidden" name="service_name<?php echo $i; ?>" value="<?php echo $name; ?>"/>
                            <p class="mt-6 text-muted">Open With Main Hours</p>
                            <div class="row">
                                <div class="col-4"><p class="mt-6 text-muted">Sunday</p></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Starting" name="sunstarting<?php echo $i; ?>" id="t1<?php echo $i; ?>"></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Ending" name="sunending<?php echo $i; ?>" id="t2<?php echo $i; ?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><p class="mt-6 text-muted">Monday</p></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Starting" name="monstarting<?php echo $i; ?>" id="t3<?php echo $i; ?>"></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Ending" name="monending<?php echo $i; ?>" id="t4<?php echo $i; ?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><p class="mt-6 text-muted">Tuesday</p></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Starting" name="tuestarting<?php echo $i; ?>" id="t5<?php echo $i; ?>"></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Ending" name="tueending<?php echo $i; ?>" id="t6<?php echo $i; ?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><p class="mt-6 text-muted">Wednesday</p></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Starting" name="wedstarting<?php echo $i; ?>" id="t7<?php echo $i; ?>"></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Ending" name="wedending<?php echo $i; ?>" id="t8<?php echo $i; ?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><p class="mt-6 text-muted">Thursday</p></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Starting" name="thursstarting<?php echo $i; ?>" id="t9<?php echo $i; ?>"></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Ending" name="thursending<?php echo $i; ?>" id="t10<?php echo $i; ?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><p class="mt-6 text-muted">Friday</p></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Starting" name="fristarting<?php echo $i; ?>" id="t11<?php echo $i; ?>"></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Ending" name="friending<?php echo $i; ?>" id="t12<?php echo $i; ?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><p class="mt-6 text-muted">Saturday</p></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Starting" name="satstarting<?php echo $i; ?>" id="t13<?php echo $i; ?>"></div>
                                <div class="col-4"><input type="number" min="0" max="24" class="form-control" placeholder="Ending" name="satending<?php echo $i; ?>" id="t14<?php echo $i; ?>"></div>
                            </div>
                            <div style="height:10px;"></div>
                            <?php if($i===count($hours)) {?>
                                <a class="btn btn-warning btn-lg" style="border-radius:8px;" onClick="submit(<?php echo $i; ?>,<?php echo $value; ?>)">Submit</a>
                            <?php }else{ ?>
                            <div style="text-align:left;">
                              <a class="btn btn-warning btn-lg" style="border-radius:8px;" onClick="next(<?php echo $i; ?>,<?php echo $value; ?>)">Next</a>
                            </div>
                            <?php } ?>
                          </div>
                          </div>
                        </div>
                    <?php  $i++; ?>
                    <?php }?>
                  </form>
                </div>
                <div class="col-lg-4 mt-4">&nbsp;</div>
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
        
        <script>
        
            let len = '<?php echo count($hours); ?>';
            let i;
            let total_hours = 0;
            
            if(len>1){
              for(i=2;i<=len;i++){
                document.getElementById(i).style.display = "none";
              }
            }
            
            function next(j,hours){
               console.log(j,hours);
              // check timing
              let sundaystart = document.getElementById('t1'+j).value;
              let sundayend = document.getElementById('t2'+j).value;
              let mondaystart = document.getElementById('t3'+j).value;
              let mondayend = document.getElementById('t4'+j).value;
              let tuesdaystart = document.getElementById('t5'+j).value;
              let tuesdayend = document.getElementById('t6'+j).value;
              let wednesdaystart = document.getElementById('t7'+j).value;
              let wednesdayend = document.getElementById('t8'+j).value;
              let thursdaystart = document.getElementById('t9'+j).value;
              let thursdayend = document.getElementById('t10'+j).value;
              let fridaystart = document.getElementById('t11'+j).value;
              let fridayend = document.getElementById('t12'+j).value;
              let saturdaystart = document.getElementById('t13'+j).value;
              let saturdayend = document.getElementById('t14'+j).value;
              
              let sunCalc = diffenceHours(sundaystart,sundayend);
              let monCalc = diffenceHours(mondaystart,mondayend);
              let tueCalc = diffenceHours(tuesdaystart,tuesdayend);
              let wedCalc = diffenceHours(wednesdaystart,wednesdayend);
              let thusCalc = diffenceHours(thursdaystart,thursdayend);
              let friCalc = diffenceHours(fridaystart,fridayend);
              let satCalc = diffenceHours(saturdaystart,saturdayend);
                
              total_hours = parseInt(sunCalc)+parseInt(monCalc)+parseInt(tueCalc)+parseInt(wedCalc)+parseInt(thusCalc)+parseInt(friCalc)+parseInt(satCalc);
              if((total_hours<=hours) && (total_hours>0)){
                  document.getElementById('err').innerHTML = "";
                  let k;
                  for(k=1;k<j+1;k++){
                    document.getElementById(k).style.display = "none";  
                  }
                  document.getElementById(j+1).style.display = "block";
                  
              }else if(total_hours==0){
                  document.getElementById('err').innerHTML = "You Did Not Set Working Hours.";
              }else{
                  document.getElementById('err').innerHTML = "Total hours is greater than given hours.";
              }
            }
           
        </script>
        
        
        <script>
          function submit(j,hours){
              // check timing
              let sundaystart = document.getElementById('t1'+j).value;
              let sundayend = document.getElementById('t2'+j).value;
              let mondaystart = document.getElementById('t3'+j).value;
              let mondayend = document.getElementById('t4'+j).value;
              let tuesdaystart = document.getElementById('t5'+j).value;
              let tuesdayend = document.getElementById('t6'+j).value;
              let wednesdaystart = document.getElementById('t7'+j).value;
              let wednesdayend = document.getElementById('t8'+j).value;
              let thursdaystart = document.getElementById('t9'+j).value;
              let thursdayend = document.getElementById('t10'+j).value;
              let fridaystart = document.getElementById('t11'+j).value;
              let fridayend = document.getElementById('t12'+j).value;
              let saturdaystart = document.getElementById('t13'+j).value;
              let saturdayend = document.getElementById('t14'+j).value;
              
              let sunCalc = diffenceHours(sundaystart,sundayend);
              let monCalc = diffenceHours(mondaystart,mondayend);
              let tueCalc = diffenceHours(tuesdaystart,tuesdayend);
              let wedCalc = diffenceHours(wednesdaystart,wednesdayend);
              let thusCalc = diffenceHours(thursdaystart,thursdayend);
              let friCalc = diffenceHours(fridaystart,fridayend);
              let satCalc = diffenceHours(saturdaystart,saturdayend);
                     
              total_hours = parseInt(sunCalc)+parseInt(monCalc)+parseInt(tueCalc)+parseInt(wedCalc)+parseInt(thusCalc)+parseInt(friCalc)+parseInt(satCalc);
              if((total_hours<=hours) && (total_hours>0)){
                 window.location='<?php echo base_url('Workforce/userData'); ?>';
              }else if(total_hours==0){
                  document.getElementById('err').innerHTML = "You Did Not Set Working Hours.";
              }else{
                  document.getElementById('err').innerHTML = "Total hours is greater than given hours.";
              }
           }
        </script>
        
        <script>
            function diffenceHours(start, end) {
                return end-start;
            }
        </script>
        
        <script>
            if(evt.keyCode == 13 && node.nodeName != "TEXTAREA"){
                return false;
            }
        </script>
        
       
        

