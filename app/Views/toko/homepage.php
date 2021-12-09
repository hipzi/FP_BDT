<?= $this->extend('layout/toko'); ?>

<?= $this->section('content'); ?>

        <!-- PRE LOADER -->
        <section class="preloader">
            <div class="spinner">

                <span class="spinner-rotate"></span>
                
            </div>
        </section>

        <!-- HOME -->
        <section id="home" class="slider" data-stellar-background-ratio="0.5">
            <div class="row">

                <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                    </div>

                    <div class="item item-second">
                    </div>

                    <div class="item item-third">
                    </div>
                </div>

            </div>
        </section>


        <!-- ABOUT -->
        <section id="about" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">

                        <div class="col-md-6 col-sm-12">
                            <div class="about-info">
                                <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                    <h4>Read our story</h4>
                                    <h2>Watch Mental Health</h2>
                                </div>

                                <div class="wow fadeInUp" data-wow-delay="0.4s">
                                    <p>Kami menyediakan video-video yang akan membantu Anda dalam hal yang berkaitan dengan kesehatan Mental.</p>
                                    <p>Disini anda akan mendapatkan informasi tentang faktor-faktor penyebab gangguan kesehatan, cara mencegah atau mengatasi adanya gangguan kesehatan ental, nasehat-nasehat yang akan bermanfaat bagi Anda Please tell your friends about. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                                <img src="images/video.png" class="img-responsive" alt="" style="height:350px; width:400px">
                            </div>
                        </div>
                        
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                            <img src="images/sound.png" class="img-responsive" alt="" style="padding-top:10%">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="about-info">
                            <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                <h4>Read our story</h4>
                                <h2>Listen to Soothing Music</h2>
                            </div>

                            <div class="wow fadeInUp" data-wow-delay="0.4s">
                                <p></p> Kami menyediakan daftar musik yang akan memberikan kontrol strees dan kesedihan serta membuat anda lebih santai</p>
                                <p>Audio-audio yang disediakan adalah mp3.</p>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </section>


        <!-- TEAM -->
        <section id="team" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">

                        <div class="col-md-12 col-sm-12">
                            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                <h2>Quotes</h2>
                                <h4>They are nice &amp; friendly</h4>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                                <img src="images/cfab2b27b7b59bccb9dde5ef4a182413.jpg" class="img-responsive" alt="" style="height:600px;">
                                    <div class="team-hover">
                                            <div class="team-item">
                                                <ul class="social-icon">
                                                    <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                    <li><a href="#" class="fa fa-envelope-o"></a></li>
                                                </ul>
                                            </div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                                <img src="images/5b6284822ba4837370e6390fdee8ef44.jpg" class="img-responsive" alt="" style="height:600px;">
                                    <div class="team-hover">
                                            <div class="team-item">
                                                <ul class="social-icon">
                                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                                    <li><a href="#" class="fa fa-flickr"></a></li>
                                                </ul>
                                            </div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                                <img src="images/1fcd21c9f67eb16d47be8811e9bf0dc7.jpg" class="img-responsive" alt="" style="height:600px;">
                                    <div class="team-hover">
                                            <div class="team-item">
                                                <ul class="social-icon">
                                                    <li><a href="#" class="fa fa-github"></a></li>
                                                    <li><a href="#" class="fa fa-google"></a></li>
                                                </ul>
                                            </div>
                                    </div>
                            </div>
                        </div>
                        
                </div>
            </div>
        </section>

<?= $this->endSection('content'); ?>

<?= $this->section('script'); ?>

<script src="<?php echo base_url('js/custom.js'); ?>"></script>

<?= $this->endSection('script'); ?>