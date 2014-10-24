						@foreach ($anuncios as $anuncio)					   
                           <article style="position: absolute; width: 100%; opacity: 0;"> 
                             <div class="banner-wrap">
                                 <div class="slider-left">
                                    <h2></h2>
                                    <p class="top_desc" style="padding-top: 5px;">{{mb_strtoupper($anuncio->anuncio, 'utf-8')}}</p>
                                    <p class="bottom_desc">{{$anuncio->periodo}}</p>
                                 </div>
                             </div>
                            </article>
						@endforeach