<?php

use Illuminate\Database\Seeder;
use App\Aliquot;
use App\Price;
use App\Group;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Nota: primero ejecuta los seeders de las tablas maestras, luego comentalos y ejecuta el de las tablas hijas

        // $this->call(UsersTableSeeder::class);
        $this->call('ProductTableSeeder');
        //$this->call('AliquotTableSeeder');
        //$this->call('PrecioTableSeeder');
        //$this->call('GroupsTableSeeder');



    }
}



class AliquotTableSeeder extends Seeder{

    public function run(){

        Aliquot::create( [
            'tipo' => 'tipo 1',
            'valor'=> 15

        ] );


        Aliquot::create( [
            'tipo' => 'tipo 2',
            'valor'=> 10

        ] );


        Aliquot::create( [
            'tipo' => 'tipo 3',
            'valor'=> 5

        ] );


        Aliquot::create( [
            'tipo' => 'tipo 4',
            'valor'=> 8

        ] );

    }

}




class PrecioTableSeeder extends Seeder{

    public function run(){

        Price::create( [
            'valor' => 1890.5,
            'porcentaje_utilidades' => '15%'

        ] );

        Price::create( [
            'valor' => 130.00,
            'porcentaje_utilidades' => '20%'

        ] );


        Price::create( [
            'valor' => 4590.33,
            'porcentaje_utilidades' => '5%'

        ] );


        Price::create( [
            'valor' => 1000.2,
            'porcentaje_utilidades' => '10%'

        ] );




        Price::create( [
            'valor' => 1000.0,
            'porcentaje_utilidades' => '8%'

        ] );

    }


}


class GroupsTableSeeder extends Seeder{

    public function run(){

        Group::create( [

            'nombre' => 'embutidos'

        ] );

        Group::create( [

            'nombre' => 'carnes'

        ] );


        Group::create( [

            'nombre' => 'postres'

        ] );

        Group::create( [

            'nombre' => 'bebidas'

        ] );

        Group::create( [

            'nombre' => 'frutas'

        ] );
    }

}



class ProductTableSeeder extends Seeder{


    public function run(){

        Product::create([

            'nombre' => 'helado',
            'cantidad_prod' => '100',
            'price_id' => 3,
            'cant_min' => 1000,
            'aliquot_id' => 1,
            'group_id' => 3,
            'costo' => 1200

        ]);

        Product::create([

            'nombre' => 'chorizo',
            'cantidad_prod' => '230',
            'price_id' => 2,
            'cant_min' => 800,
            'aliquot_id' => 22,
            'group_id' => 1,
            'costo' => 1200

        ]);

        Product::create([

            'nombre' => 'filetes',
            'cantidad_prod' => '250',
            'price_id' => 1,
            'cant_min' => 400,
            'aliquot_id' => 23,
            'group_id' => 2,
            'costo' => 3500.40

        ]);

        Product::create([

            'nombre' => 'marquezas',
            'cantidad_prod' => '30',
            'price_id' => 1,
            'cant_min' => 10,
            'aliquot_id' => 24,
            'group_id' => 3,
            'costo' => 2000.00

        ]);

    }


}