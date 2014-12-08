                            <div class="owl-carousel">
							  <?php
									$count=0;
								?>
							  @foreach ($bannersindexarriba as $banner)
								<?php
									$count++;
								?>
								<div ><a href="{{$banner->link==null || $banner->link==''?'#':$banner->link }}"><img src="/images/banners/{{$banner->banner_img}}" alt="" style="width: 400px;height: 170px;" class="img-responsive"/></a></div>
							  @endforeach
							  <?php
									$numAnunciateBanners = 6-$count;
								?>
								@for($i=0; $i<$numAnunciateBanners; $i++)
									<div><img src="/images/anunciate_h.png" style="width: 400px;height: 170px;" alt="" class="img-responsive"/></div>
								@endfor
							  <div><img src="/images/anunciate_h.png" style="width: 400px;height: 170px;" alt="" class="img-responsive"/></div>
                            </div> 