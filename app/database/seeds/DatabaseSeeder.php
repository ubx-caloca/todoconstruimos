<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ClasficadosSeeder');
		$this->command->info('Clasificados seeds finished.'); // show information in the command line after everything is run

	}

}

// our own seeder class
// usually this would be its own file
class ClasficadosSeeder extends Seeder {
	
	public function run() {

		// clear our database ------------------------------------------
		DB::table('clasificados')->delete();
		DB::table('usuarios')->delete();
		DB::table('clasificado_categorias')->delete();
		DB::table('eventos')->delete();
		DB::table('clasificado_imagenes')->delete();
		DB::table('evento_imagenes')->delete();
		DB::table('usuario_roles')->delete();
		DB::table('usuario_tiene_rol2')->delete();
		//New tables
		DB::table('proveedor_tipo')->delete();
		DB::table('proveedores')->delete();
		DB::table('proveedor_detalle')->delete();
		DB::table('proveedor_galeria')->delete();
		DB::table('blog')->delete();
		DB::table('videoBlog')->delete();
		DB::table('cobro_tipo')->delete();
		DB::table('cobros')->delete();
		DB::table('cobros_historial')->delete();
		

		// seed our usuario_rol table -----------------------
		$usario_rol1 = UsuarioRol::create(array(
			'rol'         => 'admin'
		));
		
		$usario_rol2 = UsuarioRol::create(array(
			'rol'         => 'usuario normal'
		));
		$this->command->info('Se creó un rol de usuario (admin) y el (usuario normal)');
		
		// seed our usuario table -----------------------
		$usuario1 = Usuario::create(array(
			'email'         => 'admin@gmail.com',
			'password'         => Hash::make('password'),
			'nombre' => 'Admino',
			'telefono' => '6461511837',			
			'celular' => '',
			'nextel' => '',
			'imagen' => 'admin-seed.gif'
		));
		
		$usuario2 = Usuario::create(array(
			'email'         => 'test@gmail.com',
			'password'         => Hash::make('password'),
			'nombre' => 'Testo',
			'telefono' => '6461133889',			
			'celular' => '',
			'nextel' => '',
			'imagen' => 'usuario1-seed.jpg'			
		));
		
		$this->command->info('Se crearon dos usuarios: Admino y Testo');

		$usuario1->usuario_roles()->attach($usario_rol1->id);
		$usuario2->usuario_roles()->attach($usario_rol2->id);

		$this->command->info('Se asociaron los roles a los usuarios: Admino(tipo admin) y Testo (tipo usuario normal)');
		
		$evento1 = Evento::create(array(
			'titulo'  => 'M&E - The Building Services Event',
			'contenido'  => 'M&E, el Evento de los Servicios de Construccion, es el evento donde conocer a los principales proveedores de la industria, y descubrir las ultimas soluciones y metodos de instalación. La exposición ofrece acceso directo a expositores importantes del sector.',
			'fecha'  => new DateTime("2014-06-17 10:00:0.0"),
			'fecha_evento'  => date("2014-06-17"),
			'imagen'  => 'img-evento1-seed.jpg',
			'usuario' =>$usuario1->id
		));
		
		$evento2 = Evento::create(array(
			'titulo'  => 'WaterEX 2014',
			'contenido'  => 'WaterEX es el encuentro mundial de la industria de la gestión del agua en la India. Este evento es el responsable de conectar las áreas de servicios de agua, la gestión del agua y el reciclaje, tratamiento de aguas, filtración, y otros, para detectar nuevas tendencias, conocer las posibles oportunidades y parteners trabajar con él en la India.',
			'fecha'  => new DateTime("2014-06-17 10:00:0.0"),
			'fecha_evento'  => date("2014-06-17"),
			'imagen'  => 'img-evento2-seed.png',
			'usuario' =>$usuario1->id
		));
		
		$evento3 = Evento::create(array(
			'titulo'  => 'Building & Home Improvement Expo 2014',
			'contenido'  => 'The Building & Home Improvement Expo es diseñada para proporcionar inspiración, ideas y soluciones para renovadores y decoradores que quieran mejorar su casa y estilo de vida. Los invitados pueden descubrir las últimas tendencias en diseño interior y remodelaciones.',
			'fecha'  => new DateTime("2014-06-17 11:00:0.0"),
			'fecha_evento'  => date("2014-06-17"),
			'imagen'  => 'img-evento3-seed.png',
			'usuario' =>$usuario1->id
		));
		
		$evento4 = Evento::create(array(
			'titulo'  => 'Tercera conferencia internacional de ingenieria civil',
			'contenido'  => 'La tercera conferencia internacional de ingenieria civil trata temas e inovaciones en el campo de la ingenieria civil dad por panelistas expertos en diferentes compañias de la industria internacional.',
			'fecha'  => new DateTime("2014-09-15 09:00:0.0"),
			'fecha_evento'  => date("2014-09-16"),
			'imagen'  => 'img-evento4-seed.jpg',
			'usuario' =>$usuario1->id
		));	
		$this->command->info('Se crearon 4 eventos');
		
		$evento_img1 = EventoImagen::create(array(
			'imagen'  => 'img-evento1-seed.jpg',
			'texto' => 'Sin descripción', 
			'evento_id' =>$evento1->id
		));	
		$evento_img2 = EventoImagen::create(array(
			'imagen'  => 'img-evento2-seed.jpg',
			'texto' => 'Sin descripción', 
			'evento_id' =>$evento2->id
		));	
		$evento_img2 = EventoImagen::create(array(
			'imagen'  => 'img-evento3-seed.jpg',
			'texto' => 'Sin descripción', 
			'evento_id' =>$evento3->id
		));	
		$evento_img2 = EventoImagen::create(array(
			'imagen'  => 'img-evento4-seed.jpg',
			'texto' => 'Sin descripción', 
			'evento_id' =>$evento4->id
		));			
		$this->command->info('Se asocio una imagen a cada eventos');

		
		$clasificado_categoria1 = ClasificadoCategoria::create(array(
			'categoria'         => 'Automoviles',
			'descripcion'         => 'Carros, motos, barcos, camiones',
			'icono'               => 'fa-car'
		));
		$clasificado_categoria2 = ClasificadoCategoria::create(array(
			'categoria'         => 'Videojuegos',
			'descripcion'         => 'Consolas, juegos',
			'icono'          => 'fa-desktop'
		));		
		$clasificado_categoria3 = ClasificadoCategoria::create(array(
			'categoria'         => 'Casas',
			'descripcion'         => 'Renta y venta de casas',
			'icono'        => 'fa-building-o'
		));	
		$this->command->info('Se crearon las categorias de los clasificados');

		$clasificado1 = Clasificado::create(array(
			'titulo'         => 'Se vende hielera grande, esta nueva',
			'descripcion'         => 'Se vende hielera marcha Kenwood, nueva y bien cuidada, la vendo en oferta. Interesaros comunicarse con Luis al 646-2345989',
			//'imagen'        => 'img_clasif_1.jpg',
			'premium'       => 1,
			'solicitar_premium'       => 0,
			'precio'        => 500,
			'moneda'        => 'dolares',
			'fecha_publicacion'  =>  new DateTime("2014-08-29 09:29:0.0"),
			'habilitar'     => 1,
			'usuario_id'    => $usuario2->id,
			'categoria_id' =>  $clasificado_categoria1->id
			
			
		));		
		$clasificado2 = Clasificado::create(array(
			'titulo'         => 'Se compra nintendo wiiu en buenas condiciones',
			'descripcion'         => 'Se compra un nintendo wiiu en buenas condiciones, con todos los accesorios y caja original incluida, ofrezco 3500 pesos. Interesados comunicarse con Ismael al 6464485884.',
			//'imagen'        => 'img_clasif_2.jpg',
			'premium'       => 1,
			'solicitar_premium'       => 0,
			'precio'        => 3500,
			'moneda'        => 'pesos',
			'fecha_publicacion'  =>  new DateTime("2014-08-30 07:07:0.0"),
			'habilitar'     => 1,
			'usuario_id'    => $usuario1->id,
			'categoria_id' =>  $clasificado_categoria2->id			
		));	
		
		$clasificado3 = Clasificado::create(array(
			'titulo'         => 'Se renta local para negocio en Monterrey',
			'descripcion'         => 'Local de 2 pisos de 200 m2, en zona exclusiva de Monterrrey, facilidades en los pagos bimestrales. Interesados comunicarse con Alma al 6469948884',
			//'imagen'        => 'img_clasif_3.jpg',
			'premium'       => 1,
			'solicitar_premium'       => 0,
			'precio'        => 5500,
			'moneda'        => 'pesos',
			'fecha_publicacion'  =>  new DateTime("2014-08-30 19:15:0.0"),
			'habilitar'     => 1,
			'usuario_id'    => $usuario1->id,
			'categoria_id' =>  $clasificado_categoria3->id
		));	
		
		$clasificado4 = Clasificado::create(array(
			'titulo'         => 'Se vende grua para construccion',
			'descripcion'         => 'Se vende grua para construccion, 15 años de uso, facilidades de pago. Interesasos comunicarse con Fernando al 6468837733',
			//'imagen'        => 'img_clasif_4.jpg',
			'premium'       => 0,
			'solicitar_premium'       => 0,
			'precio'        => 25000,
			'moneda'        => 'pesos',
			'fecha_publicacion'  =>  new DateTime("2014-08-29 17:22:0.0"),
			'habilitar'     => 1,
			'usuario_id'    => $usuario1->id,
			'categoria_id' =>  $clasificado_categoria1->id
		));	
		
		$this->command->info('Se crearon los clasificados');
		
		$clasificado_imagen1 = ClasificadoImagen::create(array(
			'clasificado_id'         => $clasificado1->id,
			'nombre_imagen'        => 'img-clasificado1-seed.jpeg',	
		));	
		
		$clasificado_imagen2 = ClasificadoImagen::create(array(
			'clasificado_id'         => $clasificado2->id,
			'nombre_imagen'        => 'img-clasificado2-seed.jpg',	
		));	
		
		$clasificado_imagen3 = ClasificadoImagen::create(array(
			'clasificado_id'         => $clasificado3->id,
			'nombre_imagen'        => 'img-clasificado3-seed.jpg',	
		));	

		$clasificado_imagen4 = ClasificadoImagen::create(array(
			'clasificado_id'         => $clasificado4->id,
			'nombre_imagen'        => 'img-clasificado4-seed.jpg',	
		));			
		$this->command->info('Se asocio una imagen a cada clasificado');
		
		$anuncio1 = Anuncio::create(array(
			'anuncio'        => 'EXPO CONSTRUCCIÓN Y VIVIENDA AGUASCALIENTES',
			'periodo' => 'DEL SÁBADO 23 AL DOMINGO 24 AGOSTO 2014',
			'fecha'   => new DateTime("2014-09-02 00:10:0.0")	
		));		
		$anuncio2 = Anuncio::create(array(
			'anuncio'        => 'EXPO NACIONAL FERRETERA GUADALAJARA 2014',
			'periodo' => 'DEL MARTES 26 AL SÁBADO 30 AGOSTO 2014',
			'fecha'   => new DateTime("2014-09-02 00:12:0.0")	
		));	
		$anuncio3 = Anuncio::create(array(
			'anuncio'        => 'EXPO TU CASA MONTERREY',
			'periodo' => 'DEL VIERNES 21 AL DOMINGO 23 MARZO 2014',
			'fecha'   => new DateTime("2014-09-02 00:13:0.0")	
		));	
		$this->command->info('Se crearon 3 anuncios');
		
		$blog1= Blog::create(array(
			'fecha'        => date("2014-08-22"),
			'usuario' => $usuario1->id,
			'titulo'   => 'Perfilan legisladores presupuesto de 4.4 billones de pesos para 2015',
			'imagen'   => 'img-blog1-seed.jpg',
			'contenido' => 'El proyecto de presupuesto para<b><i> 2015 </i></b>debe ser acorde a la recién aprobada reforma energética, para ser más productivos, haya transparencia y se ofrezca certidumbre a los inversionistas, aseverá el legislador Pedro Pablo Treviño Villarreal.<br>El presidente de la Comisión de Presupuesto y Cuenta Pública de la Cámara de Diputados indicá que ese paquete podría ser superior un poco al de este año, que es de aproximadamente 4.4 billones de pesos.El diputado federal <u>priista</u> puntualizá que el proyecto del Presupuesto de Egresos de la Federación (PEF) de 2015 y la Ley de Ingresos deberán llegar a la Cámara de Diputados antes del 8 de septiembre para su aprobación a más tardar el 15 de noviembre.Comentó que a partir del 1 de septiembre, cuando inicia el periodo ordinario de sesiones del Congreso de la Unión con la entrega y recepción del II Informe de Labores del Ejecutivo federal, esperarán a que la secretaría de Hacienda presente sus propuestas económicas.Posteriormente las comisiones respectivas las revisarán, procesarán, discutirán, negociarán y eventualmente el pleno las aprobará.En entrevista, Treviño Villarreal enfatizó que en esta ocasión el presupuesto 2015 deberá ser acorde a las reformas aprobadas durante este año, para que el país pueda avanzar de manera más rápida. Vamos a tener el privilegio de que México entre a otra dinámica y a un momento histórico y dejar atrás el estancamiento económico que se tuvo por décadas y provocá que la nación estuviera metida en la mediocridad, dijo.Destacó que el presidente Enrique Peña siempre intercambiá puntos de vista con la Cámara de Diputados en un clima de apertura y madurez política, para aprobar las iniciativas que tanto requiere el país.Ahora, añadió, -gracias a la reforma energética vamos a tener los elementos para poder potenciar el crecimiento en esa materia-.El legislador subrayó que se tendrá un presupuesto estable, transparente y de progreso con el objetivo de que la población tenga la confianza de que su dinero está bien invertido en beneficio de la productividad y del país.Recordó que el 27 y el 28 de agosto la fracción del Partido Revolucionario Institucional (PRI) en San Lázaro, que encabeza Manlio Fabio Beltrones Rivera, llevará a cabo su reunión plenaria, en la que se tratarán dos temas fundamentales.El primero de ellos, según Treviño Villareal, tendrá que ver con la reforma al campo, para dar un gran impulso que permita elevar la productividad en el sector y mejorar las condiciones de vida de millones de campesinos y pequeños productores.En tanto el segundo tema se abocará a la coordinación del presupuesto de 2015 con las reformas aprobadas de manera reciente en materia energética por el Congreso de la Unión.Por separado el secretario de la Comisión de Presupuesto y Cuenta Pública del Órgano legislativo, Carol Antonio Altamirano, externó que el PRD buscará que el paquete económico para 2015 sea realista, con progresividad fiscal y beneficie a quienes perciben menos ingresos.Adelantó que en la discusión del PEP para el siguiente año los legisladores perredistas plantearán que se destine más inversión a la infraestructura, a la salud y al campo.Asimismo, confió en que será realista la propuesta de Ley de Ingresos que envíe el Ejecutivo, con una proyección de crecimiento que no deba ajustarse a lo largo del ejercicio.Carol Antonio Altamirano subrayó que su grupo parlamentario revisará con lupa el proyecto del PEF y plantearán reglas claras para su aplicación, pues 2015 será año electoral.' 			
		));

		$blog2= Blog::create(array(
			'fecha'        => date("2014-08-22"),
			'usuario' => $usuario1->id,
			'titulo'   => 'Preveén que \'Marie\' se convierta en huracán este sábado XXXX',
			'imagen'   => 'img-blog2-seed.png',
			'contenido' => 'XXXXXX<br>La tormenta tropical \'Marie\' en el Océano Pacífico podría intensificarse a huracán categoría 1 durante la mañana de este sábado, informó el Sistema Nacional de Protección Civil (Sinaproc).Mediante su Sistema de Alerta Temprana por Ciclón Tropical (Siat-CT), el organismo indicó que se estableció la alerta verde para Guerrero y Oaxaca; y la azul, de peligro mínimo, para Jalisco, Colima, Michoacán y Chiapas.En su alerta por ciclón tropical, indicó que el fenómeno climático se ubica sobre el mar, a 520 kilómetros, al sur de Zihuatanejo, Guerrero, y se desplaza hacia el oeste-noroeste, a una velocidad de 28 kilómetros por hora, con vientos de 85 kilómetros por hora y rachas de 105 kilómetros por hora.De acuerdo con el pronóstico, se espera que Marie mantenga su desplazamiento hacia el oeste-noroeste paralelo a costas nacionales y se intensificará a huracán por la mañana del sábado.Advirtió que el fenómeno climático ocasionará lluvias intensas en Guerrero y Oaxaca; fuertes a muy fuertes en Michoacán, Colima y Jalisco, as como vientos fuertes y oleaje elevado en sus inmediaciones.El Sinaproc recomendó a la población y navegación marítima y aérea mantenerse informada de las condiciones climáticas y seguir las indicaciones de las autoridades de Protección Civil, capitanéas de puerto y de la Secretaría de Marina.' 			
		));		
		
		$blog3= Blog::create(array(
			'fecha'        => date("2014-08-22"),
			'usuario' => $usuario1->id,
			'titulo'   => 'Finalizarán la próxima semana dictámenes sobre contaminación de Rio Sonora',
			'imagen'   => 'img-blog3-seed.jpg',
			'contenido' => 'El titular de la Secretaría de Medio Ambiente y Recursos Naturales (SEMARNAT), Juan José Guerra Abud, informó que la próxima semana estarán listos los dictámenes de la investigación que se realiza en torno al derrame de sulfato de cobre de la mina Cananea sobre los rios Sonora y Bacanuchi, por lo que se podrá conocer cual sería sanción para la empresa Grupo México.

Entrevistado tras participar en la conferencia magistral "El papel de los Legisladores en la Agenda Urbana del Hábitat: rumbo a la conferencia mundial Hábitat III en 2016", el funcionario señaló que el Procurador Federal de Protección al Ambiente se encuentra revisando todos los apsectos de la mina, incluyendo los permisos y los procesos autorizados a la mina. Señaló, en este sentido, que el próximo lunes o martes se podría emitir un dictamen y tomar las medidas proedentes, de acuerdo a los estudios que están realizando los peritos.

A pesar de esta situación, Juan José Guerra Abud pidió no satanizar a la minería en nuestro país, ya que, dijo, es una industria muy importante y muchas de las empresas están actuando respetando lasnormas ambientales.

El titular de la SEMARNAT destacó que se ha intensifiado la revisión a todas las minas del país, las cuales, dijo, en su mayopría deben estar operando bajo condiciones adecuadas.' 			
		));		
		
		$blog4= Blog::create(array(
			'fecha'        => date("2014-08-22"),
			'usuario' => $usuario1->id,
			'titulo'   => 'Política, seguridad y procuración de justicia está dando buenos resultados: EPN',
			'imagen'   => 'img-blog4-seed.png',
			'contenido' => 'En el marco de la creación de<b> </b>Gendarmería Nacional, como una división más de la Policía Federal, el presidente Enrique Peña Nieto afirmó la política seguridad y procuración de justicia es eficaz y está dando buenos resultados.

El titular del Ejecutivo Federal sostuvo que la violencia en México sigue disminuyendo, por ejemplo, en los primeros siete meses de este año se registrá un 27.8 por ciento menos homicidios dolosos que en e mismo periodo del 2012.

En la sede del Centro de Mando de la Policía Federal en Iztapalapa, el primer mandatario indicó que en secuestros y extorsiones hay avanzases. Dijo se han detenido su crecimiento y su incidencia a ha comenzado a bajar en 6.8 por ciento respecto al mismo periodo y la extorsión es menor en 19.3 por ciento con respeto al 2013.

En su participación en la XXXVI sesión del Consejo Nacional de Seguridad Pública, indicó que el robo también ha disminuido desde 2007 y se debe a la coordinación entre instituciones. Presumió que ya hay zonas recuperadas en el país, que se avanza en la reducción de delitos y en la implementación del nuevo sistema de justicia penal y oral.

El secretario de Gobernación, Miguel Ángel Osorio Chong, dijo que a 20 meses hoy la policía esta dando resultados tangibles por lo que se refrenda el compromiso de dar mayor seguridad.

Entre otros aspectos, indicó que se equiparán a las unidades antisecuestros, mencionó que el 73 por ciento de la población ya viven bajo el mando único de la policía, y refrendó el compromiso del Gobierno Federal para avanzar en dar mayor seguridad a la población. 

A su vez, el mandatario de Coahuila, Rubén Moreira Valdés alabó la figura presidencial al decir que la eficacia de esta política esta dando buenos resultados pues bajan los índices de delitos en el país.' 			
		));	
		$this->command->info('Se crearon 4 entradas de blog');

		$videoblog1= VideoBlog::create(array(
			'fecha'        => date("2014-09-09"),
			'usuario' => $usuario1->id,
			'titulo'   => 'LA LOCOMOTORA DEL PROGRESO - EL PULSO DE LA REPÚBLICA',
			'video'   => 'k1uYGaQADDU',
			'contenido' => '<div>El progreso es un concepto que indica la existencia de un sentido de mejora en la condición humana.<br><br></div><div>La consideración de tal posibilidad fue fundamental para la superación de la ideología feudal medieval, basada en el teocentrismo cristiano (o musulmán) y expresada en la escolástica.</div>.' 			
		));			
		$videoblog2= VideoBlog::create(array(
			'fecha'        => date("2014-09-09"),
			'usuario' => $usuario1->id,
			'titulo'   => 'All Along The Watchtower - Bob Dylan (cover)',
			'video'   => 'd2nMo-Tt9R0',
			'contenido' => 'Cover de Bob Dylan' 			
		));	
		$this->command->info('Se crearon 2 videoBlogs');
		
		$proveedortipo1= ProveedorTipo::create(array(
			'tipo'  => 'CONSTRUCTORA',
			'icono' => 'fa-life-ring'		
		));		
		$proveedortipo2= ProveedorTipo::create(array(
			'tipo'  => 'FERRETERÍA',
			'icono' => 'fa-paper-plane'		
		));		
		$proveedortipo3= ProveedorTipo::create(array(
			'tipo'  => 'PLOMERÍA',
			'icono' => 'fa-file-archive-o'		
		));				
		$proveedortipo4= ProveedorTipo::create(array(
			'tipo'  => 'ELECTRICISTA',
			'icono' => 'fa-bar-chart-o'		
		));	
		$proveedortipo5= ProveedorTipo::create(array(
			'tipo'  => 'ACABADOS',
			'icono' => 'fa-building-o'		
		));	
		$proveedortipo6= ProveedorTipo::create(array(
			'tipo'  => 'MECÁNICA',
			'icono' => 'fa-fire-extinguisher'		
		));			
		$proveedortipo7= ProveedorTipo::create(array(
			'tipo'  => 'TEST',
			'icono' => 'fa-reddit'		
		));	
		$proveedortipo8= ProveedorTipo::create(array(
			'tipo'  => 'COMIDA',
			'icono' => 'fa-reddit'		
		));	
		$proveedortipo9= ProveedorTipo::create(array(
			'tipo'  => 'TELEVISIONES',
			'icono' => 'fa fa-cc-visa'		
		));		
		$this->command->info('Se crearon 9 proveedor-tipo');	

		$proveedor1= Proveedor::create(array(
			'proveedor_tipo_idproveedor_tipo'  => $proveedortipo1->id,
			'nombre_usuario' => 'BAJAFRUT'	,
			'nombre'  => 'BAJAFRUT',
			'direccion' => 'Av Lopez Mateos 1650-A, Centro, 22830 Ensenada, Baja California',
			'telefono' => '(646) 176-5638',
			'facebook' => 'https://www.facebook.com/bajafrut',
			'longitud' => '-116.61359668',
			'latitud'  => '31.85874213',
			'habilitar' => 1,
			'solicitar_premium' => 0,
			'usuario_id'  => $usuario2->id
		));		
		$this->command->info('Se creo 1 proveedor');	
		$proveedordetalle1= ProveedorDetalle::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'proveedores_proveedor_tipo_idproveedor_tipo'  => $proveedortipo1,
			'introduccion' => 'Fundado en 1997, con la idea de brindar las mejores ensaladas de fruta y jugos naturales elaborados únicamente con fruta de la mas alta calidad, nace Baja Frut. En sus inicios solo se manejaban ensaladas, jugos, sándwiches y pitas. Pero al paso del tiempo, se fueron aportando nuevas ideas y conceptos para los platillos. Convirtiéndose rápidamente en una excelente opción para todos los ensenadenses que disfrutan de una comida Sabrosa, Sana y Abundante.'	,
			'descripcion' => 'En el año 2009 se abre Baja Frut Bistro (Macroplaza del Mar) con la intención de brindarles ademas de confort, un amplio horario.',
			'vision' => 'Hoy en día, la familia Baja Frut ha crecido gracias a ustedes nuestros comensales y al esfuerzo incansable de nuestro equipo. De empezar con 4, ahora somos más de 40 en la familia, con una gran variedad de platillos a ofrecer. Para nosotros es muy importante tener un compromiso con la sociedad, es por eso que nos enorgullece ser una fuente de empleo en Ensenada, además de ser un sustento de familias y de futuros profesionistas.',
			'productos'  => 'American, (New) American (Traditional) Breakfast, Brunch Burgers, Greek and Mediterranean Italian Pizza, Sandwiches Vegetarian.',
			'imagen_intro' => 'img-proveedor1-intro-seed.jpg',
			'imagen_descripcion' => 'img-proveedor1-descripcion-seed.jpg',
			'imagen_vision' => 'img-proveedor1-vision-seed.jpg'
		));	
		$this->command->info('Se creo un registro de proveedor_detalle al proveedor 1');
		
		$proveedorgaleria1= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal1-seed.png',
			'texto' => 'Chocolate caliente',
			'premium' => 0
		));		
		$proveedorgaleria2= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal2-seed.jpg',
			'texto' => 'Brownie con nieve de vainilla',
			'premium' => 0
		));	
		$proveedorgaleria3= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal3-seed.png',
			'texto' => 'Agua de fresa',
			'premium' => 0
		));			
		$proveedorgaleria4= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal4-seed.png',
			'texto' => 'Panini de pollo',
			'premium' => 0
		));
		$proveedorgaleria5= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal5-seed.jpg',
			'texto' => 'Linguini con espárragos y almeja baby',
			'premium' => 0
		));
		$proveedorgaleria6= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal6-seed.png',
			'texto' => 'Pizza Mediterranea',
			'premium' => 0
		));		
		$proveedorgaleria7= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal7-seed.jpg',
			'texto' => 'Crema de almeja en pan',
			'premium' => 0
		));			
		$proveedorgaleria8= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal8-seed.png',
			'texto' => 'Gorditas de guisado',
			'premium' => 0
		));				
		$proveedorgaleria9= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal9-seed.png',
			'texto' => 'Hot cakes con fruta y tocino',
			'premium' => 1
		));
		$proveedorgaleria10= ProveedorGaleria::create(array(
			'proveedores_idproveedor'  => $proveedor1->id,
			'imagen'  => 'img-proveedor1-Gal10-seed.png',
			'texto' => 'Hamburguesa con papas fritas.',
			'premium' => 1
		));
		$this->command->info('Se asociaron 10 imagenes a proveedor1');	
		
		$banner1= Banner::create(array(
			'banner_img'  => 'img-banner1-seed.jpg',
			'seccion'  => 'index-izquierda'
		));		
		$this->command->info('Se creo 1 banner');	

		$cobrotipo1= CobroTipo::create(array(
			'tipo'  => 'clasificado_premium',
			'descripcion'  => 'Cobro por hacer un clasificado premium',
			'precio' => 100.0,
			'diasVigencia' => 30
		));		
		$cobrotipo2= CobroTipo::create(array(
			'tipo'  => 'ser_proveedor',
			'descripcion'  => 'Cobro por hacer proveedor a un usuario',
			'precio' => 1000.0,
			'diasVigencia' => 30
		));			
		$cobrotipo3= CobroTipo::create(array(
			'tipo'  => 'imagen_proveedor',
			'descripcion'  => 'Cobro por hacer premium una imagen de la  galeria del proveedor, y que parezca en el index',
			'precio' => 100.0,
			'diasVigencia' => 30
		));	
		$cobrotipo4= CobroTipo::create(array(
			'tipo'  => 'banner_index-izq',
			'descripcion'  => 'Cobro por poner un banner en parte de la izquerda de los banner de la página index',
			'precio' => 100.0,
			'diasVigencia' => 30
		));	
		$cobrotipo5= CobroTipo::create(array(
			'tipo'  => 'banner_index-der',
			'descripcion'  => 'Cobro por poner un banner en parte de la derecha de los banner de la página index',
			'precio' => 100.0,
			'diasVigencia' => 30
		));	
		$cobrotipo6= CobroTipo::create(array(
			'tipo'  => 'banner_index-arr',
			'descripcion'  => 'Cobro por poner un banner en parte de la arriba de los banner de la página index',
			'precio' => 200.0,
			'diasVigencia' => 30
		));			
		$this->command->info('Se crearon 6 tipos de cobro');
		
		$cobro1= Cobro::create(array(
			'tipo_id'  => $cobrotipo1->id,
			'usuario_id' => $usuario2->id,
			'fechaExpiracion'  => (new DateTime())->add(new DateInterval('P30D')),
			'estado' => 'pagado',
			'datosAdicionales' => 'clasificado_id='.$clasificado1->id
		));			
		$cobro2= Cobro::create(array(
			'tipo_id'  => $cobrotipo2->id,
			'usuario_id' => $usuario2->id,
			'fechaExpiracion'  => (new DateTime())->add(new DateInterval('P30D')),
			'estado' => 'pagado',
			'datosAdicionales' => ''
		));			
		$cobro3= Cobro::create(array(
			'tipo_id'  => $cobrotipo3->id,
			'usuario_id' => $usuario2->id,
			'fechaExpiracion'  => (new DateTime())->add(new DateInterval('P30D')),
			'estado' => 'pagado',
			'datosAdicionales' => 'proveedor_imagen_id='.$proveedorgaleria9->id
		));	
		$cobro4= Cobro::create(array(
			'tipo_id'  => $cobrotipo4->id,
			'usuario_id' => $usuario2->id,
			'fechaExpiracion'  => (new DateTime())->add(new DateInterval('P30D')),
			'estado' => 'pagado',
			'datosAdicionales' => 'imagen=img_banner_cobro4.jpg'
		));		
	
		$cobro4= Cobro::create(array(
			'tipo_id'  => $cobrotipo4->id,
			'usuario_id' => $usuario2->id,
			'fechaExpiracion'  => (new DateTime())->add(new DateInterval('P30D')),
			'estado' => 'pagado',
			'datosAdicionales'=> 'banner_id='.$banner1->id
		));
		$this->command->info('Se crearon 4 cobros');
		
		$cobrohitorial1= CobroHistorial::create(array(
			'cobro_id'  => $cobro1->id,
			'fechaPago'  => new DateTime(),
			'metodoPago' => 'Pago en Oxxo',
			'referenciaPago'  => 'OXXO64UUE63883UN97882J8' 
		));		
		$cobrohitorial2= CobroHistorial::create(array(
			'cobro_id'  => $cobro2->id,
			'fechaPago'  => (new DateTime())->sub(new DateInterval('P30D')),
			'metodoPago' => 'Cheque',
			'referenciaPago'  => '75H59F9FHF6F7HDD9D9D9D' 
		));		
		$cobrohitorial3= CobroHistorial::create(array(
			'cobro_id'  => $cobro2->id,
			'fechaPago'  => new DateTime(),
			'metodoPago' => 'Deposito Bancomer',
			'referenciaPago'  => '77484HFGD6GBEEEERR' 
		));		
		$cobrohitorial4= CobroHistorial::create(array(
			'cobro_id'  => $cobro3->id,
			'fechaPago'  => new DateTime(),
			'metodoPago' => 'Pago SevenEleven',
			'referenciaPago'  => 'U5JJJJJ443KK3K3E' 
		));	
		$cobrohitorial5= CobroHistorial::create(array(
			'cobro_id'  => $cobro4->id,
			'fechaPago'  => new DateTime(),
			'metodoPago' => 'Pago efectivo',
			'referenciaPago'  => 'Me pagó el jueves 21 de noviembre en mi trabajo' 
		));	
		$this->command->info('Se crearon 5 cobro historial');

	}

}

