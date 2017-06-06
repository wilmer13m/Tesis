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
use App\Detail;
use App\Order;
use App\origin;
use App\User;
use App\Location;
use App\Maintenance;
use App\Reservation;
use App\Solicitude;


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

         /*$this->call('AliquotTableSeeder');
         $this->call('ProductTableSeeder');
         $this->call('RommTableSeeder');
         $this->call('ClientTableSeeder');
         $this->call('RequestTableSeeder');
         $this->call('FaenaTableSeeder');
         $this->call('DepartmentTableSeeder');
         $this->call('UserTableSeeder');
         $this->call('OriginTableSeeder');
         $this->call('OrderTableSeeder');
         $this->call('DetailTableSeeder');
         $this->call('LocationTableSeeder');
         $this->call('MaintanenceTableSeeder');
         $this->call('ReservationTableSeeder');*/
         $this->call('SolicitudeTableSeeder');

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
            'estado_civil' => 'soltero',
            'password' => bcrypt('secret')

        ]);


        Client::create([

            'nombre' => 'Andrea Campos',
            'cedula' => '10.392.030',
            'direccion' => 'urb.tulipanes, San diego, Edo.Carabobo',
            'telefono' => '0412-321-9932',
            'edad' => 33,
            'email' => 'prueba2@hotmail.com',
            'profesion' => 'contadora',
            'estado_civil' => 'casado',
            'password' => bcrypt('secret2')

        ]);


        Client::create([

            'nombre' => 'Manelik Gutierrez',
            'cedula' => '20.102.280',
            'direccion' => 'Urb.nueva guacara, guacara, Edo.Carabobo',
            'telefono' => '0416-189-0987',
            'edad' => 29,
            'email' => 'prueba3@gmail.com',
            'profesion' => 'Doctora',
            'estado_civil' => 'soltero',
            'password' => bcrypt('secret3')

        ]);

        Client::create([

            'nombre' => 'Keilly Smith',
            'cedula' => '25.929.181',
            'direccion' => 'los arales, Edo.Carabobo',
            'telefono' => '0414-345-6543',
            'edad' => 50,
            'email' => 'prueba4@hotmail.com',
            'profesion' => 'comerciante',
            'estado_civil' => 'soltero',
            'password' => bcrypt('secret4')

        ]);

        Client::create([

            'nombre' => 'Carlos Perez',
            'cedula' => '11.992.780',
            'direccion' => 'urb.monteserino San diego, Edo.Carabobo',
            'telefono' => '0414-098-0222',
            'edad' => 25,
            'email' => 'prueba5@hotmail.com',
            'profesion' => 'abogado',
            'estado_civil' => 'casado',
            'password' => bcrypt('secret5')

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
            'room_id' => 2,
            'exento' => 100

        ]);

        Request::create([

            'descripcion' => 'descripcion1',
            'fecha' => date('Y-m-d h:i:s'),
            'hora' => '12:00',
            'client_id' => 1,
            'room_id' => 2,
            'exento' => 200

        ]);

        Request::create([

            'descripcion' => 'descripcion1',
            'fecha' => date('Y-m-d h:i:s'),
            'hora' => '12:00',
            'client_id' => 2,
            'room_id' => 5,
            'exento' => 300

        ]);

        Request::create([

            'descripcion' => 'descripcion1',
            'fecha' => date('Y-m-d h:i:s'),
            'hora' => '12:00',
            'client_id' => 3,
            'room_id' => 4,
            'exento' => 400
        ]);

        Request::create([

            'descripcion' => 'descripcion1',
            'fecha' => date('Y-m-d h:i:s'),
            'hora' => '12:00',
            'client_id' => 4,
            'room_id' => 3,
            'exento' => 400

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


class OriginTableSeeder extends Seeder{

    public function run(){

        Origin::create([
            'tipo_origen' => 'movil'
        ]);

        Origin::create([
            'tipo_origen' => 'habitacion'
        ]);

        Origin::create([
            'tipo_origen' => 'restaurant'
        ]);
    }

}


class UserTableSeeder extends Seeder{

    public function run(){

        User::create([

            'name' => 'karime',
            'email' => 'karime@prueba.com',
            'password' => '1234',
            'department_id' => 3,
            'rol' => 'empleado'
        ]);

        User::create([

            'name' => 'mane',
            'email' => 'mane@prueba.com',
            'password' => '1235',
            'department_id' => 3,
            'rol' => "administradoe"
        ]);


        User::create([

            'name' => 'danik',
            'email' => 'danik@prueba.com',
            'password' => '1236',
            'department_id' => 3,
            'rol' => 'gerente'
        ]);

        User::create([

            'name' => 'brenda',
            'email' => 'brenda@prueba.com',
            'password' => '1237',
            'department_id' => 3,
            'rol' => 'cliente'
        ]);

    }

}


class OrderTableSeeder extends Seeder{

        public function run(){

            Order::create([

                'client_id' => 3,
                'origin_id' => 1,
                'user_id' => 2,
                'fecha_orden' => date('Y-m-d h:i:s'),
                'hora' => '13:40:00',
                'room_id' => 2,
                'estatus' => 'en ejecucion',
                'gravado' => '1000',
                'iva' => '120',
                'total' => '1220',
                'exento' => 100

            ]);



        }

}


class DetailTableSeeder extends Seeder{

    public function run(){

        Detail::create([

            'order_id' => 1,
            'cantidad_prod' => 1,
            'descripcion_prod' => 'helado',
            'exento' => 0,
            'gravado_orden' => 1000,
            'impuesto' => 120,
            'aliquot_id' => 1,
            'total' => 1120

        ]);


        Detail::create([

            'order_id' => 1,
            'cantidad_prod' => 1,
            'descripcion_prod' => 'agua mineral',
            'exento' => 100,
            'gravado_orden' => 0,
            'impuesto' => 0,
            'aliquot_id' => 3,
            'total' => 100

        ]);
    }

}


class LocationTableSeeder extends Seeder{

    public function run(){

        Location::create([

            'nombre' => 'piscinas',
            'descripcion' => 'se incluyen todas las piscinas del hotel'

        ]);

        Location::create([

            'nombre' => 'habitaciones',
            'descripcion' => 'se refiere a todas las habitaciones del hotel sin distingir tipos'

        ]);


        Location::create([

            'nombre' => 'oficinas',
            'descripcion' => 'incluye todas las habitaciones del hotel tanto las que estan adentro como las que estan en los exteriores'

        ]);


        Location::create([

            'nombre' => 'recepcion',
            'descripcion' => 'area principal donde se hacen las reservaciones, solo hay una'


        ]);

        Location::create([

            'nombre' => 'restaurant',
            'descripcion' => 'descripcion restaurante'


        ]);

    }


}


class MaintanenceTableSeeder extends Seeder{

    public function run(){

        Maintenance::create([

            'ejecutor' => 'wilmer y arturo',
            'estatus' => 'en ejecucion',
            'fecha_emision' => date('Y-m-d h:i:s'),
            'hora_emision' => '12:00:00',
            'fecha_ejecucion' => date('Y-m-d h:i:s'),
            'hora_ejecucion' => '13:00:00',
            'location_id' => 1,
            'descripcion_mant' => 'cambiar el agua de las piscinas',
            'prioridad' => 1,
            'user_id' => 2,

        ]);



        Maintenance::create([

            'ejecutor' => 'ariana',
            'estatus' => 'terminado',
            'fecha_emision' => date('Y-m-d h:i:s'),
            'hora_emision' => '10:00:00',
            'fecha_ejecucion' => date('Y-m-d h:i:s'),
            'hora_ejecucion' => '13:45:10',
            'location_id' => 2,
            'descripcion_mant' => 'limpieza de oficinas',
            'prioridad' => 2,
            'user_id' => 2,

        ]);

    }


}


class ReservationTableSeeder extends Seeder{

    public function run(){

        Reservation::create([
            'fecha_creacion' => date('Y-m-d h:i:s'),
            'inicio_reservacion' => date('Y-m-d h:i:s'),
            'fin_reservacion' => date('Y-m-d h:i:s'),
            'client_id' => 1,
            'user_id' => 3,
            'room_id' => 2,
            'estatus' => 'activa',
            'gravado' => 100,
            'iva' => '120',
            'total'=>1230

        ]);

    }

}


class SolicitudeTableSeeder extends Seeder{

    public function run(){

        Solicitude::create([

            'client_id' => '1',
            'location_id' => '2',
            'descripcion' => 'el baño de mi habitacion no funciona',
            'estatus' => 'Procesando'
        ]);

     /*   Solicitude::create([

            'client_id' => '2',
            'location_id' => '2',
            'descripcion' => 'no han cambiado las sabanas de la habitacion',
            'estatus' => 'Procesando'
        ]);

        Solicitude::create([

            'client_id' => '1',
            'location_id' => '2',
            'descripcion' => 'el aire acondiciando de la habitacion no enfria',
            'estatus' => 'Procesando'
        ]);*/


    }




}