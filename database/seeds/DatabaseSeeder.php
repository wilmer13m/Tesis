<?php

use Illuminate\Database\Seeder;
use App\Aliquot;
use App\Price;
use App\Group;
use App\Product;
use App\Room;
use App\Client;

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
       // $this->call('ProductTableSeeder');
        //$this->call('AliquotTableSeeder');
        //$this->call('PrecioTableSeeder');
        //$this->call('GroupsTableSeeder');
        //$this->call('RommTableSeeder');
        $this->call('ClientTableSeeder');





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


class RommTableSeeder extends Seeder{

    public function run(){

        Room::create([

            'numero_habitacion' => '22',
            'tipo_habitacion' => 'matrimonial',
            'estatus_habitacion' => 'ocupado',
        ]);

        Room::create([

            'numero_habitacion' => '19',
            'tipo_habitacion' => 'matrimonial',
            'estatus_habitacion' => 'disponible',
        ]);


        Room::create([

            'numero_habitacion' => '100',
            'tipo_habitacion' => 'individual',
            'estatus_habitacion' => 'en reparacion',
        ]);


        Room::create([

            'numero_habitacion' => '50',
            'tipo_habitacion' => 'individual',
            'estatus_habitacion' => 'disponible',
        ]);


        Room::create([

            'numero_habitacion' => '1',
            'tipo_habitacion' => 'individual',
            'estatus_habitacion' => 'disponible',
        ]);
    }

}


class ClientTableSeeder extends Seeder{

    public function run(){

        Client::create([

            'nombre' => 'Wilmer Mendoza',
            'cedula' => '20.292.080',
            'direccion' => 'urb.monteserino San diego, Edo.Carabobo',
            'telefono' => '0412-348-0288',
            'email' => 'prueba@hotmail.com',
            'edad' => 25,
            'profesion' => 'desarrollador',
            'estado_civil' => 'soltero'
        ]);


        Client::create([

            'nombre' => 'Andrea Campos',
            'cedula' => '10.392.030',
            'direccion' => 'urb.tulipanes, San diego, Edo.Carabobo',
            'telefono' => '0412-321-9932',
            'edad' => 33,
            'email' => 'prueba2@hotmail.com',
            'profesion' => 'contadora',
            'estado_civil' => 'casado'
        ]);


        Client::create([

            'nombre' => 'Manelik Gutierrez',
            'cedula' => '20.102.280',
            'direccion' => 'Urb.nueva guacara, guacara, Edo.Carabobo',
            'telefono' => '0416-189-0987',
            'edad' => 29,
            'email' => 'prueba3@gmail.com',
            'profesion' => 'Doctora',
            'estado_civil' => 'soltero'
        ]);

        Client::create([

            'nombre' => 'Keilly Smith',
            'cedula' => '25.929.181',
            'direccion' => 'los arales, Edo.Carabobo',
            'telefono' => '0414-345-6543',
            'edad' => 50,
            'email' => 'prueba4@hotmail.com',
            'profesion' => 'comerciante',
            'estado_civil' => 'soltero'
        ]);

        Client::create([

            'nombre' => 'Carlos Perez',
            'cedula' => '11.992.780',
            'direccion' => 'urb.monteserino San diego, Edo.Carabobo',
            'telefono' => '0414-098-0222',
            'edad' => 25,
            'email' => 'prueba5@hotmail.com',
            'profesion' => 'abogado',
            'estado_civil' => 'casado'
        ]);
    }

}
