    <div class="wrapper">
       <div class="container">
          <br/><br/>
          <section class="content-header">
             <div class="container-fluid">
                <div class="row mb-2">
                   <div class="col-sm-6">
                      <p style="font-family:'Benne',serif;font-size: 2em;">Invoice</p>
                   </div>
                   <div class="col-sm-6">
                   </div>
                </div>
             </div>
             <!-- /.container-fluid -->
          </section>
          <section class="content">
             <div class="container-fluid">
                <div class="row">
                   <div class="col-12">
                      <!-- Main content -->
                      <div class="invoice p-3 mb-3">
                         <!-- title row -->
                         <div class="row">
                            <div class="col-12">
                               <p style="font-family: 'Benne', serif; font-size: 1.5em;">
                                  SPOTiTUSA.
                                  <small class="float-right">Date: <?php echo date("m/d/Y"); ?></small>
                               </p>
                            </div>
                            <!-- /.col -->
                         </div>
                         <!-- info row -->
                         <div class="row invoice-info">
                            <div class="col-sm-6 invoice-col" style="font-family: 'Benne', serif;">
                               From
                               <address>
                                  U.S:8433 165th ST,Queens,Ny 11432 
                                  <br/>
                                  Telephone: +15168004448<br>
                               </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-2 invoice-col">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col" style="font-family: 'Benne', serif;">
                               To
                               <address>
                                   <?php echo $name;?>
                                  <br/><?php echo $address_1;?>
                                  <br/><?php echo $address_2;?>
                               </address>
                            </div>
                            <!-- /.col -->
                         </div>
                         <!-- /.row -->
                         <!-- Table row -->
                         <div class="row">
                            <div class="col-12 table-responsive">
                               <table class="table" style="font-family: 'Benne', serif; font-size: 18px;">
                                  <thead>
                                     <tr>
                                        <th scope="col">Service Name</th>
                                        <th scope="col">Hour</th>
                                     </tr>
                                  </thead>
                                  <tbody>
                                     <?php foreach ($hours as $key=>$value){?>
                                       <tr>
                                         <td><?php
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
                                    
                                            ?></td>
                                         <td><?php echo $value; ?></td>
                                       </tr>
                                    <?php } ?>
                                     <td style="font-weight: 900;">Total Price Is:</td>
                                     <td style="font-weight: 900;">$<?php echo $totalprice; ?></td>
                                  </tbody>
                               </table>
                            </div>
                            <!-- /.col -->
                         </div>
                         <!-- /.row -->
                         <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                               <p class="lead" style="font-family: 'Benne', serif;"><b>Payment Status:</b></p>
                               <p class="text-muted well well-sm shadow-none" style="margin-top: 10px; font-family: 'Benne', serif;">
                                  <b>Paid</b>
                               </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                               <!--<h4 class="lead" style="font-family: 'Benne', serif; font-size: 22px;"><b>Price</b></h4>-->
                               <div class="table-responsive">
                                  <!--<table class="table" style="font-family: 'Benne', serif;">-->
                                  <!--   <tr>-->
                                  <!--      <th>Total:</th>-->
                                  <!--      <td>$</td>-->
                                  <!--   </tr>-->
                                  <!--</table>-->
                               </div>
                            </div>
                            <!-- /.col -->
                         </div>
                         <!-- /.row -->
                         <!-- this row will not appear when printing -->
                         <div class="row no-print">
                            <div class="col-12">
                               <a rel="noopener" target="_blank" class="btn btn-default" style="font-family: 'Benne', serif;" onclick="window.print()"><i class="fas fa-print"></i> Print</a>
                            </div>
                         </div>
                      </div>
                      <!-- /.invoice -->
                   </div>
                   <!-- /.col -->
                </div>
                <!-- /.row -->
             </div>
             <!-- /.container-fluid -->
          </section>
          <!-- /.content -->
       </div>
       <!-- /.content-wrapper -->
       <footer class="container">
          <strong style="font-family: 'Benne', serif;">Copyright &copy; 2021 <a href="https://spotinfotech.com/">SPOTiTUSA</a>.</strong> All rights reserved.
       </footer>
      
    </div>