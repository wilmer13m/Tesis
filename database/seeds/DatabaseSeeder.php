<?php

use Illuminate\Database\Seeder;
use App\Aliquot;
use App\Product;
use App\Room;
use App\Client;
use App\Request;
use App\Faena;
use App\Department;
use App\Position;
use App\Role;
use App\Detail;

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

         //$this->call(UsersTableSeeder::class);
         $this->call('AliquotTableSeeder');
         $this->call('ProductTableSeeder');
         $this->call('RommTableSeeder');
         $this->call('ClientTableSeeder');
         $this->call('RequestTableSeeder');
         $this->call('FaenaTableSeeder');
         $this->call('DepartmentTableSeeder');
         $this->call('PositionTableSeeder');
         //$this->call('RoleTableSeeder');

    }
}



class AliquotTableSeeder extends Seeder{

    public function run(){

        Aliquot::create( [
            'tipo' => 'A',
            'valor'=> 12

        ] );


        Aliquot::create( [
            'tipo' => 'B',
            'valor'=> 8

        ] );


        Aliquot::create( [
            'tipo' => 'C',
            'valor'=> 0

        ] );

    }

}






class ProductTableSeeder extends Seeder{


    public function run(){

        Product::create([

            'nombre' => 'helado',
            'cantidad_prod' => '100',
            'precio' => 3000, //solo precio entereo 1428
            'cant_min' => 1000,
            'aliquot_id' => 1,
            'costo' => 1000,
            'porcentaje_utilidad' => 30                    //porcentaje utilidad entero 30 porcentaje

        ]);
        Product::create([

            'nombre' => 'chorizos',
            'cantidad_prod' => '1032',
            'precio' => 5500, //solo precio entereo 1428
            'cant_min' => 1000,
            'aliquot_id' => 1,
            'costo' => 1000,
            'porcentaje_utilidad' => 30                    //porcentaje utilidad entero 30 porcentaje

        ]);

        Product::create([

            'nombre' => 'filetes',
            'cantidad_prod' => '100',
            'precio' => 3000, //solo precio entereo 1428
            'cant_min' => 1000,
            'aliquot_id' => 3,
            'costo' => 1000,
            'porcentaje_utilidad' => 30                    //porcentaje utilidad entero 30 porcentaje

        ]);

        Product::create([

            'nombre' => 'alas de pollo',
            'cantidad_prod' => '340',
            'precio' => 3000, //solo precio entereo 1428
            'cant_min' => 1000,
            'aliquot_id' => 2,
            'costo' => 1000,
            'porcentaje_utilidad' => 30                    //porcentaje utilidad entero 30 porcentaje

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


class RequestTableSeeder extends Seeder{

    public function run(){

        Request::create([

            'descripcion' => 'descripcion1',
            'fecha' => date('Y-m-d h:i:s'),
            'hora' => '12:00',
            'client_id' => 1,
            'room_id' => 2
        ]);

        Request::create([

            'descripcion' => 'descripcion1',
            'fecha' => date('Y-m-d h:i:s'),
            'hora' => '12:00',
            'client_id' => 1,
            'room_id' => 2
        ]);

        Request::create([

            'descripcion' => 'descripcion1',
            'fecha' => date('Y-m-d h:i:s'),
            'hora' => '12:00',
            'client_id' => 2,
            'room_id' => 5
        ]);

        Request::create([

            'descripcion' => 'descripcion1',
            'fecha' => date('Y-m-d h:i:s'),
            'hora' => '12:00',
            'client_id' => 3,
            'room_id' => 4
        ]);

        Request::create([

            'descripcion' => 'descripcion1',
            'fecha' => date('Y-m-d h:i:s'),
            'hora' => '12:00',
            'client_id' => 4,
            'room_id' => 3
        ]);



    }

}



class FaenaTableSeeder extends Seeder{

    public function run(){

        Faena::create( [

            'nombre' => 'toallas para limpiarse la cara',
            'cantidad' => 122,
            'precio' => 3800,
            'cantidad_min' => 100,
            'aliquot_id' => 2,
            'costo' => 1200.90,
            'porcentaje_utilidad' => 30
        ] );

        Faena::create( [

            'nombre' => 'toallas grandes',
            'cantidad' => 10,
            'precio' => 2, //precio
            'cantidad_min' => 90,
            'aliquot_id' => 2, //
            'costo' => 1000.90,
            'porcentaje_utilidad' => 30

        ] );

        Faena::create( [

            'nombre' => 'cubre camas',
            'cantidad' => 500,
            'precio' => 4,
            'cantidad_min' => 250,
            'aliquot_id' => 1,
            'costo' => 40000.90,
            'porcentaje_utilidad' => 30

        ] );

        Faena::create( [

            'nombre' => 'almohadas grandes para camas matrimonial',
            'cantidad' => 100,
            'precio' => 4,
            'cantidad_min' => 50,
            'aliquot_id' => 2,
            'costo' => 100000,
            'porcentaje_utilidad' => 30

            //agregar utlidida a faena entero 2 digitos
        ] );

    }

}


class DepartmentTableSeeder extends Seeder{

    public function run(){

        Department::create( [

            'nombre' => 'Administracion'
        ] );

        Department::create( [

            'nombre' => 'Restaurant'
        ] );

        Department::create( [

                'nombre' => 'Recepcion'
        ] );

        Department::create( [

            'nombre' => 'Mantenimiento'
        ] );


    }


}


class PositionTableSeeder extends Seeder{

    public function run(){

        Position::create( [

            'nombre' => 'Administrador'

        ] );

        Position::create( [

            'nombre' => 'Gerente'

        ] );

        Position::create( [

            'nombre' => 'Empleado'

        ] );

        Position::create( [

            'nombre' => 'Cliente'

        ] );
    }


}

class RoleTableSeeder extends Seeder
{

    public function run()
    {

        Role::create([
            'nombre' => 'Administrador'
        ]);


        Role::create([
            'nombre' => 'Gerente'
        ]);


        Role::create([
            'nombre' => 'Empleado'
        ]);

        Role::create([
            'nombre' => 'Cliente'
        ]);

    }

}


class DetailTableSeeder extends Seeder{




}