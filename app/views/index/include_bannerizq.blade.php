			<center>
				<?php
				$count=0;
				?>
				@foreach ($bannersizquierda as $banner)
	   	    		<a href="{{$banner->link==null || $banner->link==''?'#':$banner->link }}"><img src="/images/banners/{{$banner->banner_img}}" alt="" style="width: 170px;height: 400px;" class="img-responsive"/><a>
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