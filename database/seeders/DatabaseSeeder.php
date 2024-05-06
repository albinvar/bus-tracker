<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Roles
        $this->call(RoleSeeder::class);

        // Admin
         $user = \App\Models\User::factory()->create([
             'name' => 'Administrator',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('password'),
         ]);

         // Assign role
            $user->assignRole('admin');

         // User
            $user = \App\Models\User::factory()->create([
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'),
            ]);

            // Assign role
            $user->assignRole('user');

        // Buses
        \App\Models\Bus::factory()->create(
            [
                'name' => 'Changanashery Bus',
                'plate_number' => 'KL 21 B 1234',
                'starting_point' => 'Changanashery',
                'starting_point_latitude' => '9.5994',
                'starting_point_longitude' => '76.5289',
                'destination' => 'Kottayam',
                'status' => 'active',
            ]
        );

        // Mavelikara Bus
        \App\Models\Bus::factory()->create(
            [
                'name' => 'Mavelikara Bus',
                'plate_number' => 'KL 21 B 5678',
                'starting_point' => 'Mavelikara',
                'starting_point_latitude' => '9.2565',
                'starting_point_longitude' => '76.5563',
                'destination' => 'Kottayam',
                'status' => 'active',
            ]
        );

        // mallappally Bus
        \App\Models\Bus::factory()->create(
            [
                'name' => 'Mallappally Bus',
                'plate_number' => 'KL 21 B 9876',
                'starting_point' => 'Mallappally',
                'starting_point_latitude' => '9.3333',
                'starting_point_longitude' => '76.6666',
                'destination' => 'Kottayam',
                'status' => 'active',
            ]
        );

        // manimala Bus
        \App\Models\Bus::factory()->create(
            [
                'name' => 'Manimala Bus',
                'plate_number' => 'KL 21 B 5432',
                'starting_point' => 'Manimala',
                'starting_point_latitude' => '9.3333',
                'starting_point_longitude' => '76.6666',
                'destination' => 'Kottayam',
                'status' => 'active',
            ]
        );

        // Location logs for Changanashery Bus almost 4 logs
        $data = $this->getLocation('9.5994', '76.5289');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 1,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.5994',
                'longitude' => '76.5289',
                'speed' => '60',
                'battery' => '100',
            ]
        );

        $data = $this->getLocation('9.5995', '76.5290');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 1,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.5995',
                'longitude' => '76.5290',
                'speed' => '50',
                'battery' => '90',
            ]
        );

        $data = $this->getLocation('9.5996', '76.5291');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 1,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.5996',
                'longitude' => '76.5291',
                'speed' => '40',
                'battery' => '80',
            ]
        );

        $data = $this->getLocation('9.5997', '76.5292');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 1,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.5997',
                'longitude' => '76.5292',
                'speed' => '30',
                'battery' => '70',
            ]
        );

        $data = $this->getLocation('9.5998', '76.5293');
        // Location logs for Mavelikara Bus almost 4 logs
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 2,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.2565',
                'longitude' => '76.5563',
                'speed' => '60',
                'battery' => '100',
            ]
        );

        $data = $this->getLocation('9.2566', '76.5564');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 2,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.2566',
                'longitude' => '76.5564',
                'speed' => '50',
                'battery' => '90',
            ]
        );

        $data = $this->getLocation('9.2567', '76.5565');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 2,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.2567',
                'longitude' => '76.5565',
                'speed' => '40',
                'battery' => '80',
            ]
        );

        $data = $this->getLocation('9.2568', '76.5566');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 2,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.2568',
                'longitude' => '76.5566',
                'speed' => '30',
                'battery' => '70',
            ]
        );

    }

    private function getLocation($latitude, $longitude): array
    {
        // get the location from latitude and longitude
        $url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=$latitude&lon=$longitude";

        // use http client to make the request
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody(), true);

        // return the location as an array
        return [
            'location' => (!empty($data['name']) ? $data['name'] . ', ' : '') . ($data['address']['village'] ?? $data['address']['town'] ?? $data['address']['city'] ?? $data['address']['county'] ?? $data['address']['state'] ?? $data['address']['country'] ?? ''),
            'address' => $data['display_name'],
        ];
    }
}
