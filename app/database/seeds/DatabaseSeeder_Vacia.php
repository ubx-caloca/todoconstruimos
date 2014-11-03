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
		$this->command->info('TodoConstruimos seeds finished.'); // show information in the command line after everything is run

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
		DB::table('cobros_pendientes')->delete();
		DB::table('bienesraices_categorias')->delete();
		DB::table('bienesraices')->delete();
		DB::table('bienesraices_imagenes')->delete();

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
			'nombre' => 'Admin',
			'telefono' => '6461511837',			
			'celular' => '',
			'nextel' => '',
			'imagen' => 'admin-seed.gif'
		));

		$this->command->info('Se creo el usuario Admin');

		$usuario1->usuario_roles()->attach($usario_rol1->id);

		$this->command->info('Se asocio el rol del usuario Admin');
	
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
			'tipo'  => 'BANNER-BLOG-IZQUIERDA',
			'descripcion'  => 'Cobro por poner un banner en parte de la izquerda de la página del blog',
			'precio' => 100.0,
			'diasVigencia' => 30
		));	
		$cobrotipo5= CobroTipo::create(array(
			'tipo'  => 'BANNER-BLOG-DERECHA',
			'descripcion'  => 'Cobro por poner un banner en parte de la derecha de la página del blog',
			'precio' => 100.0,
			'diasVigencia' => 30
		));	
		$cobrotipo6= CobroTipo::create(array(
			'tipo'  => 'BANNER-DIRECTORIO-IZQUIERDA',
			'descripcion'  => 'Cobro por poner un banner en parte de la izquierda de la página del directorio',
			'precio' => 200.0,
			'diasVigencia' => 30
		));		
		$cobrotipo7= CobroTipo::create(array(
			'tipo'  => 'BANNER-DIRECTORIO-DERECHA',
			'descripcion'  => 'Cobro por poner un banner en parte de la derecha de la página del directorio',
			'precio' => 200.0,
			'diasVigencia' => 30
		));		
		$cobrotipo8= CobroTipo::create(array(
			'tipo'  => 'BANNER-EVENTOS-IZQUIERDA',
			'descripcion'  => 'Cobro por poner un banner en parte de la izquierda de la página del eventos',
			'precio' => 200.0,
			'diasVigencia' => 30
		));	
		$cobrotipo9= CobroTipo::create(array(
			'tipo'  => 'BANNER-EVENTOS-DERECHA',
			'descripcion'  => 'Cobro por poner un banner en parte de la derecha de la página del eventos',
			'precio' => 200.0,
			'diasVigencia' => 30
		));	
		$cobrotipo10= CobroTipo::create(array(
			'tipo'  => 'BANNER-CLASIFICADOS-IZQUIERDA',
			'descripcion'  => 'Cobro por poner un banner en parte de la izquierda de la página del clasificados',
			'precio' => 200.0,
			'diasVigencia' => 30
		));	
		$cobrotipo11= CobroTipo::create(array(
			'tipo'  => 'BANNER-CLASIFICADOS-DERECHA',
			'descripcion'  => 'Cobro por poner un banner en parte de la derecha de la página del clasificados',
			'precio' => 200.0,
			'diasVigencia' => 30
		));	
		$cobrotipo12= CobroTipo::create(array(
			'tipo'  => 'BANNER-VIDEOBLOG-IZQUIERDA',
			'descripcion'  => 'Cobro por poner un banner en parte de la izquierda de la página del videoblog',
			'precio' => 200.0,
			'diasVigencia' => 30
		));	
		$cobrotipo13= CobroTipo::create(array(
			'tipo'  => 'BANNER-VIDEOBLOG-DERECHA',
			'descripcion'  => 'Cobro por poner un banner en parte de la derecha de la página del videoblog',
			'precio' => 200.0,
			'diasVigencia' => 30
		));	
		$cobrotipo14= CobroTipo::create(array(
			'tipo'  => 'BANNER-INDEX-ARRIBA',
			'descripcion'  => 'Cobro porponer un banner en parte de arriba de página index',
			'precio' => 300.0,
			'diasVigencia' => 30
		));	
		$this->command->info('Se crearon 13 tipos de cobro');


	}

}

