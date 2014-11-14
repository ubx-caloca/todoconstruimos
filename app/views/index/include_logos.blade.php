                            <div class="owl-carousel">
							  <?php
									$count=0;
								?>
							  @foreach ($bannersindexarriba as $banner)
								<?php
									$count++;
								?>
								<div ><img src="/images/banners/{{$banner->banner_img}}" alt="" style="width: 400px;height: 170px;" class="img-responsive"/></div>
							  @endforeach
							  <?php
									$numAnunciateBanners = 5-$count;
								?>
								@for($i=0; $i<$numAnunciateBanners; $i++)
									<div><img src="/images/anunciate_h.png" style="width: 400px;height: 170px;" alt="" class="img-responsive"/></div>
								@endfor
							  <div><img src="/images/anunciate_h.png" style="width: 400px;height: 170px;" alt="" class="img-responsive"/></div>
                            </div> 