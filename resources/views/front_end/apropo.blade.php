@extends('front_end.layouts.base')
@section('content')
    
<title>Publication | yowyob Trainning</title>
<section id="courses">
        <div class="container">
             <div class="row">

                  <div class="col-md-12 col-sm-12">
                       <div class="section-title">
                            <h2>A propos de nous
                                <small style="line-height: 60px; font-size:30px;">
                                Yowyob training est un centre de formation multidisciplinaire basé à l'Ecole Nationale Supérieure Polytechnique de Yaoundé.
                                Nous travaillons ensemble pour construire en vous des compétences durables, nécessaires sur le marché du travail. Un travail dont nous sommes fiers pour des gens en qui nous croyons. Nous vous formons à un large éventail de technologies pour une variété d'emplois, de projets et de réalisations.
                                </small></h2>
                       </div>
              
             </div>
        </div>
   </section>

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
                        <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                   </div>
              </div>

         </div>
    </div>
</section>

@stop