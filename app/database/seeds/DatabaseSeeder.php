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

		// seed our usuario_rol table -----------------------
		$usario_rol1 = UsuarioRol::create(array(
			'rol'         => 'admin'
		));
		
		$usario_rol2 = UsuarioRol::create(array(
			'rol'         => 'usuario normal'
		));
		$this->command->info('Se cre� un rol de usuario (admin)');
		
		// seed our usuario table -----------------------
		$usuario1 = Usuario::create(array(
			'email'         => 'admin@gmail.com',
			'password'         => Hash::make('password'),
			'nombre' => 'Admino',
			'telefono' => '6461511837',			
			'celular' => '',
			'nextel' => '',
			'imagen' => ''
		));
		
		$usuario2 = Usuario::create(array(
			'email'         => 'test@gmail.com',
			'password'         => Hash::make('password'),
			'nombre' => 'Testo',
			'telefono' => '6461133889',			
			'celular' => '',
			'nextel' => '',
			'imagen' => ''			
		));
		
		$this->command->info('Se crearon un usuario (Admino)');

		$usuario1->usuario_roles()->attach($usario_rol1->id);
		$usuario2->usuario_roles()->attach($usario_rol2->id);

		$this->command->info('Se asociaron los roles a los usuarios');
		
		$evento1 = Evento::create(array(
			'titulo'  => 'M&E - The Building Services Event',
			'lugar'  => 'Hotel Coral y Marina',
			'ciudad'  => 'Aguascalientes',
			'descripcion'  => 'M&E, el Evento de los Servicios de Construccion, es el evento donde conocer a los principales proveedores de la industria, y descubrir las ultimas soluciones y metodos de instalación. La exposición ofrece acceso directo a expositores importantes del sector.',
			'fecha_inicio'  => new DateTime("2014-06-17 10:00:0.0"),
			'fecha_fin'  => new DateTime("2014-06-17 13:10:0.0"),
			'premium'  => '1',
			'habilitar'  => '1',
			'usuario_id' =>$usuario1->id
		));
		
		$evento2 = Evento::create(array(
			'titulo'  => 'WaterEX 2014',
			'lugar'  => 'Teatro Pedro Pica',
			'ciudad'  => 'Guadalajara Jalisco',
			'descripcion'  => 'WaterEX es el encuentro mundial de la industria de la gestión del agua en la India. Este evento es el responsable de conectar las áreas de servicios de agua, la gestión del agua y el reciclaje, tratamiento de aguas, filtración, y otros, para detectar nuevas tendencias, conocer las posibles oportunidades y parteners trabajar con él en la India.',
			'fecha_inicio'  => new DateTime("2014-06-17 10:00:0.0"),
			'fecha_fin'  => new DateTime("2014-06-17 14:00:0.0"),
			//'imagen'  => 'img_evento_2.jpg',
			'premium'  => '1',
			'habilitar'  => '1',
			'usuario_id' =>$usuario1->id
		));
		
		$evento3 = Evento::create(array(
			'titulo'  => 'Building & Home Improvement Expo 2014',
			'lugar'  => 'Hotel Corona',
			'ciudad'  => 'Monterrey',
			'descripcion'  => 'The Building & Home Improvement Expo es diseñada para proporcionar inspiración, ideas y soluciones para renovadores y decoradores que quieran mejorar su casa y estilo de vida. Los invitados pueden descubrir las últimas tendencias en diseño interior y remodelaciones.',
			'fecha_inicio'  => new DateTime("2014-06-17 11:00:0.0"),
			'fecha_fin'  => new DateTime("2014-06-17 15:00:0.0"),
			'premium'  => '1',
			'habilitar'  => '1',
			'usuario_id' =>$usuario1->id
		));
		
		$evento4 = Evento::create(array(
			'titulo'  => 'Tercera conferencia internacional de ingenieria civil',
			'lugar'  => 'Sala Miguel Hidalgo',
			'ciudad'  => 'Ensenada B.C.',
			'descripcion'  => 'La tercera conferencia internacional de ingenieria civil trata temas e inovaciones en el campo de la ingenieria civil dad por panelistas expertos en diferentes compañias de la industria internacional.',
			'fecha_inicio'  => new DateTime("2014-09-15 09:00:0.0"),
			'fecha_fin'  => new DateTime("2014-09-16 12:00:0.0"),
			//'imagen'  => 'img_evento_4.jpg',
			'premium'  => '0',
			'habilitar'  => '1',
			'usuario_id' =>$usuario1->id
		));	
		$this->command->info('Se crearon 4 eventos');
		
		$evento_img1 = EventoImagen::create(array(
			'nombre_imagen'  => 'img_evento_1.jpg',
			'evento_id' =>$evento1->id
		));	
		$evento_img2 = EventoImagen::create(array(
			'nombre_imagen'  => 'img_evento_2.jpg',
			'evento_id' =>$evento2->id
		));	
		$evento_img2 = EventoImagen::create(array(
			'nombre_imagen'  => 'img_evento_3.jpg',
			'evento_id' =>$evento3->id
		));	
		$evento_img2 = EventoImagen::create(array(
			'nombre_imagen'  => 'img_evento_4.jpg',
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
			'precio'        => 500,
			'moneda'        => 'dolares',
			'fecha_publicacion'  =>  new DateTime("2014-08-29 09:29:0.0"),
			'habilitar'     => 1,
			'usuario_id'    => $usuario1->id,
			'categoria_id' =>  $clasificado_categoria1->id
			
			
		));		
		$clasificado2 = Clasificado::create(array(
			'titulo'         => 'Se compra nintendo wiiu en buenas condiciones',
			'descripcion'         => 'Se compra un nintendo wiiu en buenas condiciones, con todos los accesorios y caja original incluida, ofrezco 3500 pesos. Interesados comunicarse con Ismael al 6464485884.',
			//'imagen'        => 'img_clasif_2.jpg',
			'premium'       => 1,
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
			'nombre_imagen'        => 'img_clasif_1.jpg',	
		));	
		
		$clasificado_imagen2 = ClasificadoImagen::create(array(
			'clasificado_id'         => $clasificado2->id,
			'nombre_imagen'        => 'img_clasif_2.jpg',	
		));	
		
		$clasificado_imagen3 = ClasificadoImagen::create(array(
			'clasificado_id'         => $clasificado3->id,
			'nombre_imagen'        => 'img_clasif_3.jpg',	
		));	

		$clasificado_imagen4 = ClasificadoImagen::create(array(
			'clasificado_id'         => $clasificado4->id,
			'nombre_imagen'        => 'img_clasif_4.jpg',	
		));			
		$this->command->info('Se asociaron una imagen a cada clasificado');
		
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
	
	}

}

