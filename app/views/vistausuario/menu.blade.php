                        <!--
						<li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						-->
                        <!-- 
                        *****************************************************
                        *****************************************************
                        USUARIO 
                        *****************************************************
                        *****************************************************
                        -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Usuario</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/vistausuario/usuarios/{{$usuarioid}}/edit"><i class="fa fa-angle-double-right"></i> Editar </a></li>
                            </ul>
                        </li>
						<!--
                        *****************************************************
                        *****************************************************
                        Proveedor
                        *****************************************************
                        *****************************************************
                        -->
						<form id="provsolpremiumform" method="post" action="provsolicpremium"  style="margin-left: 15px;
padding-top: 10px;
padding-bottom: 10px;
border-top: 1px solid #fff;
border-bottom: 1px solid #dbdbdb;
padding-right: 20px;">
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-slideshare"></i>
                                <span>Proveedor</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
							
                            <ul class="treeview-menu">
							<?php
								$usuario = Usuario::find($usuarioid);
								$proveedor = $usuario->proveedor;
							?>
							  @if(is_null($proveedor))
                                <li><a href="/vistausuario/proveedor/create"><i class="fa fa-angle-double-right"></i> Crear datos </a></li>
							  @else
                                <li><a href="/vistausuario/proveedor/{{$proveedor->id}}/edit"><i class="fa fa-angle-double-right"></i> Editar </a></li>
								@if($proveedor->habilitar == 0)
								@if($proveedor->solicitar_premium == 0)
								
								{{ Form::hidden('provid', $proveedor->id) }}
								<li><a href="" onclick="document.getElementById('provsolpremiumform').submit();return false;"><i class="fa fa-angle-double-right"></i> Solicitar Premium</a></li>
								
								@else
								<li><a href="#" style="color: darkgray;"><i class="fa fa-angle-double-right"></i> Premium solicitado</a></li>
								@endif
								@endif
							  @endif
                            </ul>
                        </li>
						</form>
                        <!-- 
                        *****************************************************
                        *****************************************************
                        CLASIFICADOS 
                        *****************************************************
                        *****************************************************
                        -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i>
                                <span>Clasificados</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/vistausuario/clasificados"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                                <li><a href="/vistausuario/clasificados/create"><i class="fa fa-angle-double-right"></i> Nuevo</a></li>
                            </ul>
                        </li>                        
						<div style="margin-left: 15px;padding-top: 10px;padding-bottom: 10px;border-top: 1px solid #fff;border-bottom: 1px solid #dbdbdb;">
                        <a href="/signout" >
                                <i class="fa fa-power-off""></i>
                                <span style="margin-left: 7px;">Cerrar sesión</span>
                               
                        </a>
						</div> 
 						