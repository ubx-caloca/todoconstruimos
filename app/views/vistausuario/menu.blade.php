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
                            <a href="#" style="padding-left: 17px;">
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
								$galeria =null;
								$detalle =null;
								if(!is_null($proveedor)){
									$galeria = $proveedor->galeria;
									$detalle = $proveedor->detalle;
								}
							?>
							  @if(is_null($proveedor))
                                <li><a href="/vistausuario/proveedor/create"><i class="fa fa-angle-double-right"></i> Crear datos </a></li>
							  @else
                                <li><a href="/vistausuario/proveedor/{{$proveedor->id}}/edit"><i class="fa fa-angle-double-right"></i> Editar </a></li>
								
								@if(is_null($proveedor->galeria))
									<li><a href="/vistausuario/proveedorgaleria"><i class="fa fa-angle-double-right"></i> Crear galeria</a></li>
								@else
									<li><a href="/vistausuario/proveedorgaleria"><i class="fa fa-angle-double-right"></i> Editar galeria</a></li>								
								@endif
								
								@if($proveedor->habilitar == 0)
								@if($proveedor->solicitar_premium == 0)
								<form id="provsolpremiumform" method="post" action="/vistausuario/provsolicpremium"  style="margin-left: 15px;padding-top: 10px;padding-bottom: 10px;padding-right: 20px;">								
								{{ Form::hidden('provid', $proveedor->id) }}

								<li><a href="" onclick="document.getElementById('provsolpremiumform').submit();return false;"><i class="fa fa-angle-double-right" style="padding-right: 10px;"></i> Solicitar Premium</a></li>
								</form>
								@else
								<li><a href="#" style="color: darkgray;"><i class="fa fa-angle-double-right"></i> Premium solicitado</a></li>
								@endif
								@endif
							  @endif
                            </ul>
                        </li>
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
                        <!-- 
                        *****************************************************
                        *****************************************************
                        BANNERS 
                        *****************************************************
                        *****************************************************
                        -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-image"></i>
                                <span>Banners</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/vistausuario/banners"><i class="fa fa-angle-double-right"></i>Listar</a></li>
                                <li><a href="/vistausuario/banners/create"><i class="fa fa-angle-double-right"></i>Nuevo</a></li>
                            </ul>
                        </li>						
                         <!-- 
                        *****************************************************
                        *****************************************************
                        Pagos pendientes 
                        *****************************************************
                        *****************************************************
                        -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-credit-card"></i>
                                <span>Pagos pendientes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/vistausuario/pagospendientes"><i class="fa fa-angle-double-right"></i> Listar</a></li>
                            </ul>
                        </li>  						
						<div style="margin-left: 15px;padding-top: 10px;padding-bottom: 10px;border-top: 1px solid #fff;border-bottom: 1px solid #dbdbdb;">
                        <a href="/signout" >
                                <i class="fa fa-power-off""></i>
                                <span style="margin-left: 7px;">Cerrar sesión</span>
                               
                        </a>
						</div>                       					