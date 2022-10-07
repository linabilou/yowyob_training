
@extends('front_end.layouts.base')
@section('content')
    
   <section id="courses">
        <div class="container">
             <div class="row">

                  <div class="col-md-12 col-sm-12">
                       <div class="section-title">
                            <h2>Formation continue <small>Améliorez vos compétences avec les cours les plus récents</small></h2>
                       </div>

                       <div class="owl-carousel owl-theme owl-courses">
                       @foreach($formations as $key => $value)    
                            <div class="col-md-4 col-sm-4">
                                 <div class="item">
                                      <div class="courses-thumb">
                                           <div class="courses-top">
                                                <div class="courses-image">
                                                     <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                                                </div>
                                                <div class="courses-date">
                                                     <span><i class="fa fa-calendar"></i> {{$value->date}}</span>
                                                     <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                                </div>
                                           </div>

                                           <div class="courses-detail">
                                                <h3><a href="#">{{$value->titre}}</a></h3>
                                                <p>{{$value->description}}</p>
                                           </div>

                                           <div class="courses-info">
                                                
                                                <div class="courses-price">
                                                     <a href="#"><span>FCFA {{$value->prix}}</span></a>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                         @endforeach
                            
                       </div>
             </div>
        </div>
   </section>

   <section id="team">
    <div class="container">
         <div class="row">
              <div class="col-md-3 col-sm-6">
                   <div class="team-thumb">
                        <div class="team-image">
                             <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                             <h3>Titre de la formation</h3>
                             <span>Description de la publication J'adore la technologie</span>
                        </div>
                   </div>
              </div>

              <div class="col-md-3 col-sm-6">
                   <div class="team-thumb">
                        <div class="team-image">
                             <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Titre de la formation</h3>
                            <span>Description de la publication J'adore la technologie</span>
                        </div>
                   </div>
              </div>

              <div class="col-md-3 col-sm-6">
                   <div class="team-thumb">
                        <div class="team-image">
                             <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Titre de la formation</h3>
                            <span>Description de la publication J'adore la technologie</span>
                        </div>
                   </div>
              </div>

              <div class="col-md-3 col-sm-6">
                   <div class="team-thumb">
                        <div class="team-image">
                             <img src="{{URL::asset('front_end/images/courses-image.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Titre de la formation</h3>
                            <span>Description de la publication J'adore la technologie</span>
                        </div>
                   </div>
              </div>

         </div>
    </div>
</section>
@stop