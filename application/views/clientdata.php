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
            <div class="container fadeInBottom">
                  <div class="row justify-content-center">
                       <div class="col-lg-12">
                       <div class="section-title text-center mx-auto">
                           <div class="section-title-icon"> 
                            <!--<i class="far fa-user text-custom"></i>-->
                           </div>
                           <h5><!--Workforce--></h5>
                           <p class="mt-3 text-muted fadeInTop">Provide Your Information!</p>
                       </div>
                       </div>
                  </div>
            </div>
            <div>
               <div>
                  <div class="row mt-3 pt-4">
                      <div class="col-lg-2 mt-2"></div>
                      <div class="col-lg-8 mt-8">
                        <div class="container fadeInTop">
                         <form action="<?php echo base_url('Workforce/payment'); ?>" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="firstname" type="text" class="form-control"  placeholder="First Name *" required />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="lastname"  type="text" class="form-control" placeholder="Last Name *" required />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Email *" required />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="addline1" type="text" class="form-control" placeholder="Address Line 1 *" required />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="addline2"  type="text" class="form-control" placeholder="Address Line 2 *"  required />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>   
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="city"  type="text" class="form-control" placeholder="City *" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="state" type="text" class="form-control" placeholder="State *" required />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="zipcode" type="text" class="form-control" placeholder="Zip Code *" required />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="burl" type="text" class="form-control" placeholder="Business Website url" />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="telephone" class="form-control" placeholder="Contact Number *" required />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="addinfo" class="form-control" placeholder="Additional Information"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="coupon" class="form-control" placeholder="Coupon Code" />
                                    </div>
                                </div>
                            </div>
                            <div style="height:20px;"></div>
                            <!--<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"data-key="pk_test_Y4ZouOKNdVRm06uTDokZI4X900ZTfczHv0" data-name="Workforce" data-description="Transaction" data-amount="<?php echo $price*100; ?>" data-currency="usd"></script>-->
                            <button type="submit" class="btn btn-warning btn-lg" style=" border-radius:8px;">Pay with Card</button>
                         </form>
                        </div>
                      </div>
                      <div class="col-lg-2 mt-2"></div>
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
                    </div> 
                </div>
            </div>
        </section>
        <!-- Footer End -->
        <a href="#" class="back-to-top" id="back-to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
        
