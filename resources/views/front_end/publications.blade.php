@extends('front_end.layouts.base')
@section('content')
    

<section id="team">
        <div class="container">
             <div class="row">

                  <div class="col-md-12 col-sm-12">
                       <div class="section-title">
                            <h2>Publication <small>Soyez à jour avec nos dernières informations </small></h2>
                       </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                       <div class="team-thumb">
                            <div class="team-image">
                                 <img src="{{URL::asset('front_end/images/author-image.jpg')}}" class="img-responsive" alt="">
                            </div>
                            <div class="team-info">
                                 <h3>Titre de la publication</h3>
                                 <span>Description de la publication J'adore la technologie</span>
                            </div>
                       </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                       <div class="team-thumb">
                            <div class="team-image">
                                 <img src="{{URL::asset('front_end/images/author-image.jpg')}}" class="img-responsive" alt="">
                            </div>
                            <div class="team-info">
                                <h3>Titre de la publication</h3>
                                <span>Description de la publication J'adore la technologie</span>
                            </div>
                       </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                       <div class="team-thumb">
                            <div class="team-image">
                                 <img src="{{URL::asset('front_end/images/author-image.jpg')}}" class="img-responsive" alt="">
                            </div>
                            <div class="team-info">
                                <h3>Titre de la publication</h3>
                                <span>Description de la publication J'adore la technologie</span>
                            </div>
                       </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                       <div class="team-thumb">
                            <div class="team-image">
                                 <img src="{{URL::asset('front_end/images/author-image.jpg')}}" class="img-responsive" alt="">
                            </div>
                            <div class="team-info">
                                <h3>Titre de la publication</h3>
                                <span>Description de la publication J'adore la technologie</span>
                            </div>
                       </div>
                  </div>

             </div>
        </div>
   </section>
@stop