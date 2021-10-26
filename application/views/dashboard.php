


<!-- Home -->
<section class="home py-5 d-flex align-items-center" id="header">
    <div class="container text-light py-5"  data-aos="fade-right"> 
        <h1 class="headline">DATA <span class="home_text">MANAGEMENT</span></h1>
        <p class="para  py-3"><b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus tempore accusamus quis magnam doloremque itaque ad modi, pariatur iste labore similique officiis impedit aspernatur aperiam facere architecto. Eligendi, repellendus inventore!</b></p>
        <div class="d-flex align-items-center">
            <p class="p-2"><i class="fas fa-laptop-house fa-lg" style="color: white;"></i></p>
            <p><b>Lorem ipsum dolor sit amet.</b></p>  
        </div>
        <div class="d-flex align-items-center">
            <p class="p-2"><i class="fas fa-wifi fa-lg"></i></p>
            <p><b>Lorem ipsum dolor sit amet.</b></p>  
        </div>
        
    </div> <!-- end of container -->
</section> <!-- end of home -->


<!-- Information -->
<section class="information">
    <div class="container-fluid">  
        <div class="row text-light">
            <div class="col-lg-4 text-center p-5" data-aos="zoom-in">
                <i class="fas fa-tachometer-alt fa-3x p-2"></i>
                <h4 class="py-3">Download 1 GBPS</h4>
                <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur doloribus natus in suscipit!</p>
            </div>
            <div class="col-lg-4 text-center p-5"  data-aos="zoom-in">
                <i class="fas fa-clock fa-3x p-2"></i>
                <h4 class="py-3">99% Internet Uptime</h4>
                <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur doloribus natus in suscipit!</p>
            </div>
            <div class="col-lg-4 text-center p-5 text-dark"  data-aos="zoom-in"> 
                <i class="fas fa-headset fa-3x p-2"></i>
                <h4 class="py-3">24/7 Support </h4>
                <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur doloribus natus in suscipit!</p>
            </div>
        </div>
    </div> <!-- end of container -->
</section> <!-- end of information -->


<!-- PROFIL -->
<section class="about d-flex align-items-center text-light py-5" id="about">
    <div class="container" >
        <div class="row d-flex align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <p>PROFIL DAMAN</p>
                <h1>We are top internet <br> service company</h1>
                <p class="py-2 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>
                <p class="py-2 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>

                
            </div>
            <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section> <!-- end of about -->

<!-- Testimonials -->

<div class="slider-1 testimonial text-light d-flex align-items-center " id="testimonial">
    <div class="container">
        <div class="row">
            <div class="text-center w-lg-75 m-auto pb-4">
                <h12 >STRUKTUR ORGANISASI</h1>
                    <h2 class="py-2">DIVISI DATA MANAGEMENT</h2>
                    
                </div>
            </div> <!-- end of row -->
            
            <div class="row p-2" data-aos="zoom-in">
                <?php foreach ($datapengurus as $dtpgs) : ?>
                    <?php if ($dtpgs->jabatan =="MANAGER") { ?>
                        <center>
                            <div class="col-lg-3 mb-5">
                                <div class="testimonial-card p-4 text-center">

                                    <img class="avatar " src="<?php echo base_url('assets/images/profile_pengurus/'.$dtpgs->foto) ?>" alt="testimonial">
                                    <h5><?php echo $dtpgs->nama ?></h5>
                                    <h6><?php echo $dtpgs->jabatan ?></h6>
                                    
                                </div>
                            </div>
                        </center>
                <?php } ?>
                <?php endforeach  ?>

                <?php foreach ($datapengurus as $dtpgs) : ?>
                    <?php if ($dtpgs->jabatan =="ASSISTANT MANAGER") { ?>
                        <center>
                            <div class="col-lg-3 mb-5">
                                <div class="testimonial-card p-4 text-center">

                                    <img class="avatar " src="<?php echo base_url('assets/images/profile_pengurus/'.$dtpgs->foto) ?>" alt="testimonial">
                                    <h5><?php echo $dtpgs->nama ?></h5>
                                    <h6><?php echo $dtpgs->jabatan ?></h6>
                                    
                                </div>
                            </div>
                        </center>
                <?php } ?>
                <?php endforeach  ?>

                <?php foreach ($datapengurus as $dtpgs) : ?>
                    <?php if ($dtpgs->jabatan =="OFFICER") { ?>
                        <center>
                            <div class="col-lg-3 mb-5">
                                <div class="testimonial-card p-4 text-center">

                                    <img class="avatar " src="<?php echo base_url('assets/images/profile_pengurus/'.$dtpgs->foto) ?>" alt="testimonial">
                                    <h5><?php echo $dtpgs->nama ?></h5>
                                    <h6><?php echo $dtpgs->jabatan ?></h6>
                                    
                                </div>
                            </div>
                        </center>
                <?php } ?>
                <?php endforeach  ?>


                <!-- SLIDER STAFF HELPDESK -->
                <div class="col-lg-12 mt-1 mb-3">
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <?php foreach ($datapengurus as $dtpgs) : ?>

                                    <?php if ($dtpgs->jabatan =="STAFF - HELPDESK") { ?>
                                    
                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-card p-4 text-center">

                                                <div >
                                                    <?php if ($dtpgs->foto == "") : ?>
                                                        <img class="avatar " src="https://icons-for-free.com/iconfiles/png/512/profile+profile+page+user+icon-1320186864367220794.png">
                                                    <?php else : ?>
                                                        <img class="avatar " src="<?php echo base_url('assets/images/profile_pengurus/'.$dtpgs->foto) ?>" alt="testimonial">
                                                    <?php endif; ?>
                                                    
                                                    <div class="mt-3 mb-5">
                                                        <h5><?php echo $dtpgs->nama ?></h5>
                                                        <h6><?php echo $dtpgs->jabatan ?></h6>
                                                        
                                                    </div>

                                                    
                                                </div>
                                                
                                            </div>
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                    <?php } ?>

                                <?php endforeach ?>

                            </div> <!-- end of swiper-wrapper -->
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
                            
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- SLIDER STAFF HELPDESK -->


                <!-- SLIDER STAFF TEKNISI -->
                <div class="col-lg-12 mt-5 mb-3">
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <?php foreach ($datapengurus as $dtpgs) : ?>

                                    <?php if ($dtpgs->jabatan =="STAFF - TEKNISI") { ?>
                                    
                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-card p-4 text-center">

                                                <div >
                                                    <?php if ($dtpgs->foto == "") : ?>
                                                        <img class="avatar " src="https://icons-for-free.com/iconfiles/png/512/profile+profile+page+user+icon-1320186864367220794.png">
                                                    <?php else : ?>
                                                        <img class="avatar " src="<?php echo base_url('assets/images/profile_pengurus/'.$dtpgs->foto) ?>" alt="testimonial">
                                                    <?php endif; ?>
                                                    
                                                    <div class="mt-3 mb-5">
                                                        <h5><?php echo $dtpgs->nama ?></h5>
                                                        <h6><?php echo $dtpgs->jabatan ?></h6>
                                                        
                                                    </div>

                                                    
                                                </div>
                                                
                                            </div>
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                    <?php } ?>

                                <?php endforeach ?>

                            </div> <!-- end of swiper-wrapper -->
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
                            
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->

            </div> <!-- end of row -->
            
        </div> <!-- end of container -->
    </div> <!-- end of testimonials -->

    <!-- Contact -->
    <section class="contact d-flex align-items-center py-5" id="contact">
        <div class="container-fluid text-light">
            <h3 class="text-center">Lokasi Telkom Sidoarjo</h3>
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63311.88474227055!2d112.69125121292902!3d-7.354702507019669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fcb4d62a5fbd%3A0x70252390c6cba9bc!2sMarkas%20Wifi%20Id%20Telkom%20Sepanjang!5e0!3m2!1sid!2sid!4v1633329809865!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> <!-- end of div -->
                </div> <!-- end of col -->
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.1468032163198!2d112.71575691478415!3d-7.449005875473939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e6b578568d99%3A0xb3a173d6433c2eab!2sPlasa%20Telkom%20Sidoarjo!5e0!3m2!1sid!2sid!4v1633330755985!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> <!-- end of div -->         
                </div> <!-- end of col -->
                
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of contact -->

    

    <!-- Location -->
    <section class="location text-light py-5">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>ADDRESS</h6>
                        <p>Teuku Umar ST. 1919</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>CALL FOR QUERY</h6>
                        <p>(800) 265  216 2020</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>SEND US MESSAGE</h6>
                        <p>infodemofile@example.com</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-clock fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>OPENING HOURS</h6>
                        <p>09:00 AM - 18:00 PM</p>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of location -->


    