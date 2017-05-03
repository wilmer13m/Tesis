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
        // $this->call(UsersTableSeeder::class);
        $this->call('AliquotTableSeeder');
        $this->call('PrecioTableSeeder');
        $this->call('GroupsTableSeeder');
        $this->call('ProductTableSeeder');



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
            'id_prices' => 16,
            'cant_min' => 1000,
            'id_aliquot' => 21,
            'id_group' => 8,
            'costo' => 1200

        ]);

        Product::create([

            'nombre' => 'chorizo',
            'cantidad_prod' => '230',
            'id_prices' => 16,
            'cant_min' => 800,
            'id_aliquot' => 22,
            'id_group' => 6,
            'costo' => 1200

        ]);

        Product::create([

            'nombre' => 'filetes',
            'cantidad_prod' => '250',
            'id_prices' => 19,
            'cant_min' => 400,
            'id_aliquot' => 23,
            'id_group' => 7,
            'costo' => 3500.40

        ]);

        Product::create([

            'nombre' => 'marquezas',
            'cantidad_prod' => '30',
            'id_prices' => 16,
            'cant_min' => 10,
            'id_aliquot' => 24,
            'id_group' => 8,
            'costo' => 2000.00

        ]);

    }


}