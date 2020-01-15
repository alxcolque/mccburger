<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Clientes
        DB::table('users')->insert([
            'name' => 'MisterX',
            'lastname' => 'Cliente1',
            'email'=>'cliente1@cliente1.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('111111111'),
            'rol_id'=>'1',       
        ]);
        DB::table('users')->insert([
            'name' => 'Jon',
            'lastname' => 'Cliente2',
            'email'=>'cliente2@cliente2.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('111111111'),
            'rol_id'=>'1',       
        ]);
        DB::table('users')->insert([
            'name' => 'Cuenta',
            'lastname' => 'Cliente3',
            'email'=>'cliente3@cliente3.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('111111111'),
            'rol_id'=>'1',       
        ]);
        //cajeros
        DB::table('users')->insert([
            'name' => 'Peter',
            'lastname' => 'Cajero1',
            'email'=>'cajero1@cajero1.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('222222222'),
            'rol_id'=>'2',       
        ]);
        DB::table('users')->insert([
            'name' => 'Limbert',
            'lastname' => 'Cajero2',
            'email'=>'cajero2@cajero2.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('222222222'),
            'rol_id'=>'2',       
        ]);
        //Recepcion
        DB::table('users')->insert([
            'name' => 'Felix',
            'lastname' => 'Recepcion1',
            'email'=>'recepcion1@recepcion1.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('333333333'),
            'rol_id'=>'3',       
        ]);
        DB::table('users')->insert([
            'name' => 'Marco',
            'lastname' => 'Recepcion2',
            'email'=>'recepcion2@recepcion2.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('333333333'),
            'rol_id'=>'3',       
        ]);
        //Elaborador
        DB::table('users')->insert([
            'name' => 'Sandro',
            'lastname' => 'Elaborador1',
            'email'=>'elaborador1@elaborador1.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('444444444'),
            'rol_id'=>'4',       
        ]);
        DB::table('users')->insert([
            'name' => 'Luis',
            'lastname' => 'Elaborador2',
            'email'=>'elaborador2@elaborador2.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('444444444'),
            'rol_id'=>'4',       
        ]);
        //Supervisor
        DB::table('users')->insert([
            'name' => 'Pablo',
            'lastname' => 'Supervisor1',
            'email'=>'supervisor1@supervisor1.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('555555555'),
            'rol_id'=>'5',       
        ]);
        DB::table('users')->insert([
            'name' => 'Ana',
            'lastname' => 'Supervisor2',
            'email'=>'supervisor2@supervisor2.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('555555555'),
            'rol_id'=>'5',       
        ]);
        DB::table('users')->insert([
            'name' => 'Tony',
            'lastname' => 'Sheehan',
            'email'=>'123123@123.com',
            'foto'=>'foto.jpg',
            'password' => bcrypt('123123123'),
            'rol_id'=>'5',       
        ]);
        //Categoria Insumos
        DB::table('categoria_insumos')->insert([
            'descripcion' => 'Pan',
        ]);
        DB::table('categoria_insumos')->insert([
            'descripcion' => 'Carne',
        ]);
        DB::table('categoria_insumos')->insert([
            'descripcion' => 'Verdura',
        ]);
        DB::table('categoria_insumos')->insert([
            'descripcion' => 'Salsa',
        ]);
        DB::table('categoria_insumos')->insert([
            'descripcion' => 'Queso',
        ]);
        //insumos
        //panes
        DB::table('insumos')->insert([
            'insumo' => 'Burger Tierna',
            'precio' => '0.5',
            'fkcategoria_insumos' => '1',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Burger Aldeana Black',
            'precio' => '0.6',
            'fkcategoria_insumos' => '1',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Burger Mollete',
            'precio' => '0.55',
            'fkcategoria_insumos' => '1',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Burger Brioche',
            'precio' => '0.45',
            'fkcategoria_insumos' => '1',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Burger Cristalina',
            'precio' => '0.47',
            'fkcategoria_insumos' => '1',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Burger Cristal Kornspitz',
            'precio' => '0.62',
            'fkcategoria_insumos' => '1',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Burger Cristal Cerveza',
            'precio' => '0.72',
            'fkcategoria_insumos' => '1',
        ]);
        //Carnes
        DB::table('insumos')->insert([
            'insumo' => 'Pollo',
            'precio' => '7.5',
            'fkcategoria_insumos' => '2',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Carne de Res',
            'precio' => '9.5',
            'fkcategoria_insumos' => '2',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Ternera',
            'precio' => '9.5',
            'fkcategoria_insumos' => '2',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Cordero',
            'precio' => '8.5',
            'fkcategoria_insumos' => '2',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Cerdo',
            'precio' => '12.5',
            'fkcategoria_insumos' => '2',
        ]);
        //
        DB::table('insumos')->insert([
            'insumo' => 'Lechuga',
            'precio' => '5.5',
            'fkcategoria_insumos' => '3',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Tomate',
            'precio' => '6.5',
            'fkcategoria_insumos' => '3',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Zanahoria',
            'precio' => '4.5',
            'fkcategoria_insumos' => '3',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Cebolla',
            'precio' => '5',
            'fkcategoria_insumos' => '3',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Pepino',
            'precio' => '4',
            'fkcategoria_insumos' => '3',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Beicon',
            'precio' => '3',
            'fkcategoria_insumos' => '3',
        ]);
        //Salsa
        DB::table('insumos')->insert([
            'insumo' => 'Mayonesa',
            'precio' => '10.2',
            'fkcategoria_insumos' => '4',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Ketchup',
            'precio' => '10.2',
            'fkcategoria_insumos' => '4',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Mostaza',
            'precio' => '10.2',
            'fkcategoria_insumos' => '4',
        ]);
        //Queso
        DB::table('insumos')->insert([
            'insumo' => 'Parmesano',
            'precio' => '13.2',
            'fkcategoria_insumos' => '5',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Roquefort',
            'precio' => '14.2',
            'fkcategoria_insumos' => '5',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Suizo',
            'precio' => '16.2',
            'fkcategoria_insumos' => '5',
        ]);
        DB::table('insumos')->insert([
            'insumo' => 'Gruyere',
            'precio' => '17.2',
            'fkcategoria_insumos' => '5',
        ]);
    }
}
