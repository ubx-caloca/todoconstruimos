			<center>
				<?php
				$count=0;
				?>
				@foreach ($bannersizquierda as $banner)
	   	    		<img src="/images/banners/{{$banner->banner_img}}" alt="" class="img-responsive"/>
	   	    		<?php $count++;?>
   	    		@endforeach
				<?php
					$numAnunciateBanners = 2-$count;
				?>
				@for($i=0; $i<$numAnunciateBanners; $i++)
					<div><img src="/images/anunciate.png" alt="" class="img-responsive"/></div>
				@endfor
   	    		<img src="/images/banners/anunciate.png" alt="" class="img-responsive"/>
			</center>