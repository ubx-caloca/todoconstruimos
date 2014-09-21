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
 						