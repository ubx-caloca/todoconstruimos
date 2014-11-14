		<div >

		@if($username == '' || $roluser == '')
		
			<div class="wrap" style="padding-top: 5px;">
			<ul id="headernav" style="float: right;list-style: none;padding-left: 25px;margin-top: 5px;padding-right: 10px;">
				<li class="active"><a href="/signup" class="signuplink" style="text-decoration: none;"><span>Registrarse </span> <span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span></a></li>	
			</ul>
				{{ Form::open(array('url' => '/signin')) }}
				<div id="headeruser" style="float: right;padding 3px; max-height: 28px;">
					{{ Form::text('login_email', '', array('placeholder' => 'email@usuario', 'id'=>'navbar_username', 'size' => '15',  'accesskey'=> 'u', 'tabindex'=>'101', 'class'=> 'loginText')) }}
					{{ Form::password('login_password', array('placeholder' => 'Contraseña', 'id'=>'navbar_password', 'size' => '15',  'accesskey'=> 'u', 'tabindex'=>'102', 'class'=> 'bginput loginText')) }}
					{{ Form::submit('Log-in', array('class' => 'button loginSummitBtn', 'tabindex'=>'104', 'accesskey'=>'s')) }}

				</div>
				{{ Form::close() }}
			
		    </div>
		
		@else
		<ul class="navlogin nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="line-height: 10px;padding-top: 10px;padding-bottom: 10px; background-color: #FAFFBD">{{$nameuser}} <span class="glyphicon glyphicon-user pull-right" style="margin-top: -3px;"></span></a>
          <ul class="dropdown-menu" style="background-color: #FAFFBD">
			@if($roluser == 'admin')			
            <li><a href="administracion/">Ir a vista de administrador<span class="glyphicon glyphicon-list-alt pull-right"></span></a></li>
            <li class="divider"></li>	
			@else
			    <li><a href="vistausuario/">Ir a vista del usuario <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
				<!--<<li class="divider"></li>
				<li><a href="vistausuario/clasificados/create">Agregar nuevo clasificado <span class="glyphicon glyphicon-edit pull-right"></span></a></li> -->
				<li class="divider"></li>			
			@endif
			<!--
            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
            <li class="divider"></li>
            <li><a href="#">Favourites Snippets <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
            <li class="divider"></li>
			-->
            <li><a href="/signout">Salir <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
	  @endif


			@if ($errors->has())
<div style="background: rgba(242,222, 223,255);
margin: 5px;
padding-left: 10px;
padding-right: 10px;
border: 2px #dd9d9d solid;
background-color: #F2DEDF;
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
color: #a71b2a;
/* padding-top: 10px; */
/* padding-bottom: 10px; */
margin-bottom: 30px;
width: 300px;
font-size: 12px;
position: absolute;
left: 100%;
margin-left: -480px;
top: 35px;
">
<p><strong>Errores:</strong> </p>
	<ul>		
			@foreach ($errors->all() as $error)
				<li>
				{{ $error }} 
				</li>

			@endforeach
	</ul>
</div>		
	@endif	  
		</div>