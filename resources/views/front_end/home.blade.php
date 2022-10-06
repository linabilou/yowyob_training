@extends('front_end.layouts.base')
@section('content')
    
<section id="home">
               <div class="row">

                         <div class="owl-carousel owl-theme home-slider">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="container">
                                             <div class="col-md-6 col-sm-12">
                                                  <h1>Centre de formation professionnelle</h1>
                                                  <h3>Nos cours sont conçus pour s'adapter à votre secteur d'activité en vous apportant un soutien complet grâce aux dernières technologies.</h3>
                                                  <a href="#feature" class="section-btn btn btn-default smoothScroll">En savoir plus</a>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="container">
                                             <div class="col-md-6 col-sm-12">
                                                  <h1>Commencez votre parcours avec nos cours pratiques</h1>
                                                  <h3>Nos cours sont élaborés en partenariat avec des leaders technologiques et sont conçus pour répondre aux exigences du secteur.</h3>
                                                  <a href="#courses" class="section-btn btn btn-default smoothScroll">Suivez un cours</a>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="container">
                                             <div class="col-md-6 col-sm-12">
                                                  <h1>Des méthodes d'apprentissage efficaces et a la pointe de la technology</h1>
                                                  <h3>Nos cours sont dispensés par des spécialistes du domaine </h3>
                                                  <a href="#contact" class="section-btn btn btn-default smoothScroll">laissez-nous votre message</a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
               </div>
          </section>


          <!-- FEATURE 
          <section id="feature">
               <div class="container">
                    <div class="row">

                         <div class="col-md-4 col-sm-4">
                              <div class="feature-thumb">
                                   <span>01</span>
                                   <h3>Trending Courses</h3>
                                   <p>Known is free education HTML Bootstrap Template. You can modify in any way and use this for your website.</p>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="feature-thumb">
                                   <span>02</span>
                                   <h3>Books & Library</h3>
                                   <p>You are allowed to use Known HTML Template for your commercial or non-commercial websites.</p>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="feature-thumb">
                                   <span>03</span>
                                   <h3>Certified Teachers</h3>
                                   <p>Please spread a word about us. Template redistribution is NOT allowed on any download website.</p>
                              </div>
                         </div>

                    </div>
               </div>
          </section>
          -->

          <!-- ABOUT -->
          <section id="about">
               <div class="container">
                    <div class="row">

                         <div class="col-md-6 col-sm-12">
                              <div class="about-info">
                                   <h2>Commencez votre aventure vers une vie meilleure grâce aux cours pratiques </h2>

                                   <figure>
                                        <span><i class="fa fa-users"></i></span>
                                        <figcaption>
                                             <h3>Formateurs professionnels</h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                        </figcaption>
                                   </figure>

                                   <figure>
                                        <span><i class="fa fa-certificate"></i></span>
                                        <figcaption>
                                             <h3>Certifications internationales</h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                        </figcaption>
                                   </figure>

                                   <figure>
                                        <span><i class="fa fa-bar-chart-o"></i></span>
                                        <figcaption>
                                             <h3>1 mois de formation intense</h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                        </figcaption>
                                   </figure>
                              </div>
                         </div>

                         <div class="col-md-offset-1 col-md-4 col-sm-12">
                              <div class="entry-form">
                                   <form action="#" method="post">
                                        <h2>Commencez aujourd'hui</h2>
                                        <input type="text" name="full name" class="form-control" placeholder="Votre Nom" required="">

                                        <input type="email" name="email" class="form-control" placeholder="Votre Email" required="">

                                        <input type="password" name="password" class="form-control" placeholder="Votre mot de pass" required="">

                                        <button class="submit-btn form-control" id="form-submit">Commencez</button>
                                   </form>
                              </div>
                         </div>

                    </div>
               </div>
          </section>


          <!-- TEAM -->
          <section id="team">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title">
                                   <h2>Enseignants <small>Rencontre avec les formateurs professionnels</small></h2>
                              </div>
                         </div>

                         <div class="col-md-3 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="{{URL::asset('front_end/images/author-image.jpg')}}" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>Mark Wilson</h3>
                                        <span>J'adore la technologie</span>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                   </ul>
                              </div>
                         </div>

                         <div class="col-md-3 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="{{URL::asset('front_end/images/author-image.jpg')}}" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>Catherine</h3>
                                        <span>La formation c'est la base!</span>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-google"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                   </ul>
                              </div>
                         </div>

                         <div class="col-md-3 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="{{URL::asset('front_end/images/author-image.jpg')}}" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>Jessie Ca</h3>
                                        <span>I like Training</span>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                   </ul>
                              </div>
                         </div>

                         <div class="col-md-3 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="{{URL::asset('front_end/images/author-image.jpg')}}" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>Andrew Berti</h3>
                                        <span>L'apprentissage est un plaisir</span>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-google"></a></li>
                                        <li><a href="#" class="fa fa-behance"></a></li>
                                   </ul>
                              </div>
                         </div>

                    </div>
               </div>
          </section>


          <!-- Courses -->
          <section id="courses">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title">
                                   <h2>Formation continue <small>Améliorez vos compétences avec les cours les plus récents</small></h2>
                              </div>

                              <div class="owl-carousel owl-theme owl-courses">
                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="courses-thumb">
                                                  <div class="courses-top">
                                                       <div class="courses-image">
                                                            <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                                                       </div>
                                                       <div class="courses-date">
                                                            <span><i class="fa fa-calendar"></i> 12 / 7 / 2022</span>
                                                            <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                                       </div>
                                                  </div>

                                                  <div class="courses-detail">
                                                       <h3><a href="#">Social Media Management</a></h3>
                                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                  </div>

                                                  <div class="courses-info">
                                                       
                                                       <div class="courses-price">
                                                            <a href="#"><span>FCFA 25</span></a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="courses-thumb">
                                                  <div class="courses-top">
                                                       <div class="courses-image">
                                                            <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                                                       </div>
                                                       <div class="courses-date">
                                                            <span><i class="fa fa-calendar"></i> 20 / 7 / 2022</span>
                                                            <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                                       </div>
                                                  </div>

                                                  <div class="courses-detail">
                                                       <h3><a href="#">Graphic & Web Design</a></h3>
                                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                  </div>

                                                  <div class="courses-info">
                                                       
                                                       <div class="courses-price">
                                                            <a href="#"><span>FCFA 80</span></a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="courses-thumb">
                                                  <div class="courses-top">
                                                       <div class="courses-image">
                                                            <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                                                       </div>
                                                       <div class="courses-date">
                                                            <span><i class="fa fa-calendar"></i> 15 / 8 / 2022</span>
                                                            <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                                       </div>
                                                  </div>

                                                  <div class="courses-detail">
                                                       <h3><a href="#">Marketing Communication</a></h3>
                                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                  </div>

                                                  <div class="courses-info">
                                                       
                                                       <div class="courses-price free">
                                                            <a href="#"><span>Free</span></a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="courses-thumb">
                                                  <div class="courses-top">
                                                       <div class="courses-image">
                                                            <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                                                       </div>
                                                       <div class="courses-date">
                                                            <span><i class="fa fa-calendar"></i> 10 / 8 / 2022</span>
                                                            <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                                       </div>
                                                  </div>

                                                  <div class="courses-detail">
                                                       <h3><a href="#">Summer Kids</a></h3>
                                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                  </div>

                                                  <div class="courses-info">
                                                       
                                                       <div class="courses-price">
                                                            <a href="#"><span>FCFA 45</span></a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="courses-thumb">
                                                  <div class="courses-top">
                                                       <div class="courses-image">
                                                            <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                                                       </div>
                                                       <div class="courses-date">
                                                            <span><i class="fa fa-calendar"></i> 5 / 10 / 2022</span>
                                                            <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                                       </div>
                                                  </div>

                                                  <div class="courses-detail">
                                                       <h3><a href="#">Business &amp; Management</a></h3>
                                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                  </div>

                                                  <div class="courses-info">
                                                       
                                                       <div class="courses-price free">
                                                            <a href="#"><span>Free</span></a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                    </div>
               </div>
          </section>


          <!-- TESTIMONIAL -->
          <section id="testimonial">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title">
                                   <h2>Commentaires d'étudiants
                                        <small>du monde entier</small></h2>
                              </div>

                              <div class="owl-carousel owl-theme owl-client">
                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="{{URL::asset('front_end/images/tst-image.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Jackson</h4>
                                                  <span>Shopify Developer</span>
                                             </div>
                                             <p>You really do help young creative minds to get quality education and professional job search assistance. I’d recommend it to everyone!</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="{{URL::asset('front_end/images/tst-image.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Camila</h4>
                                                  <span>Marketing Manager</span>
                                             </div>
                                             <p>Trying something new is exciting! Thanks for the amazing law course and the great teacher who was able to make it interesting.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="{{URL::asset('front_end/images/tst-image.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Barbie</h4>
                                                  <span>Art Director</span>
                                             </div>
                                             <p>Donec erat libero, blandit vitae arcu eu, lacinia placerat justo. Sed sollicitudin quis felis vitae hendrerit.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="{{URL::asset('front_end/images/tst-image.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Andrio</h4>
                                                  <span>Web Developer</span>
                                             </div>
                                             <p>Nam eget mi eu ante faucibus viverra nec sed magna. Vivamus viverra sapien ex, elementum varius ex sagittis vel.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                    </div>
               </div>
          </section> 


          <!-- CONTACT -->
          <section id="contact">
               <div class="container">
                    <div class="row">

                         <div class="col-md-6 col-sm-12">
                              <form id="contact-form" role="form" action="" method="post">
                                   <div class="section-title">
                                        <h2>Contactez-nous <small>Nous aimons les conversations. Parlons-en !</small></h2>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <input type="text" class="form-control" placeholder="Entrez votre nom" name="name" required="">
                         
                                        <input type="email" class="form-control" placeholder="Entrez votre address email " name="email" required="">

                                        <textarea class="form-control" rows="6" placeholder="Entrez votre message" name="message" required=""></textarea>
                                   </div>

                                   <div class="col-md-4 col-sm-12">
                                        <input type="submit" class="form-control" name="send message" value="Envoyer le message">
                                   </div>

                              </form>
                         </div>

                         <div class="col-md-6 col-sm-12">
                              <div class="contact-image">
                                   <img src="{{URL::asset('front_end/images/contact-image.jpg')}}" class="img-responsive" alt="Smiling Two Girls">
                              </div>
                         </div>

                    </div>
               </div>
          </section>       



@stop