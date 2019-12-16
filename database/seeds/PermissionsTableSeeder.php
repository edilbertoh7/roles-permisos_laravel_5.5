<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//permisoso de usuario
        Permission::create([
        	'name'        =>'navegar usuario',
        	'slug'        =>'users.index',
        	'description' =>'lista y navega todos los usarios del sistema',
        ]);

         Permission::create([
        	'name'        =>'Ver detalle de usuario',
        	'slug'        =>'users.show',
        	'description' =>'Ver en detalle cada usuario del sistema',
        ]);

          Permission::create([
        	'name'        =>'Edicion de ususarios',
        	'slug'        =>'users.edit',
        	'description' =>'Edita cualquier  dato de un uusuario del sistema ',
        ]);

           Permission::create([
        	'name'        =>'Eliminar usuario',
        	'slug'        =>'users.destroy',
        	'description' =>'Elimina cualquier usuario del sistema',
        ]);

           //roloes del sistema
                Permission::create([
        	'name'        =>'navegar roles',
        	'slug'        =>'roles.index',
        	'description' =>'lista y navega todos los roles del sistema',
        ]);

         Permission::create([
        	'name'        =>'Ver detalle de rol',
        	'slug'        =>'roles.show',
        	'description' =>'Ver en detalle cada rol del sistema',
        ]);

          Permission::create([
        	'name'        =>'Creacion de roles',
        	'slug'        =>'roles.create',
        	'description' =>'Edita cualquier  dato de un rol del sistema ',
        ]);

                Permission::create([
        	'name'        =>'Edicion de roles',
        	'slug'        =>'roles.edit',
        	'description' =>'Edita cualquier  dato de un rol del sistema ',
        ]);

           Permission::create([
        	'name'        =>'Eliminar rol',
        	'slug'        =>'roles.destroy',
        	'description' =>'Elimina cualquier rol del sistema',
        ]);

           //productos

           Permission::create([
        	'name'        =>'navegar productos',
        	'slug'        =>'products.index',
        	'description' =>'lista y navega todos los productos del sistema',
        ]);

         Permission::create([
        	'name'        =>'Ver detalle de producto',
        	'slug'        =>'products.show',
        	'description' =>'Ver en detalle cada producto del sistema',
        ]);

          Permission::create([
        	'name'        =>'Creacion de productos',
        	'slug'        =>'products.create',
        	'description' =>'Edita cualquier  dato de un producto del sistema ',
        ]);

                Permission::create([
        	'name'        =>'Edicion de productos',
        	'slug'        =>'products.edit',
        	'description' =>'Edita cualquier  dato de un producto del sistema ',
        ]);

           Permission::create([
        	'name'        =>'Eliminar producto',
        	'slug'        =>'products.destroy',
        	'description' =>'Elimina cualquier producto del sistema',
        ]);

    }
}
