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
        $data = $this->getLocation('9.5860236', '76.9804864');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 1,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.5860236',
                'longitude' => '76.9804864',
                'speed' => '60',
                'battery' => '100',
            ]
        );

        $data = $this->getLocation('9.60895012', '77.16969557');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 1,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.60895012',
                'longitude' => '77.16969557',
                'speed' => '40',
                'battery' => '80',
            ]
        );

        $data = $this->getLocation('9.553395650', '76.7901621');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 1,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.553395650',
                'longitude' => '76.7901621',
                'speed' => '50',
                'battery' => '90',
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

        $data = $this->getLocation('9.5695160', '76.639991');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 1,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.5695160',
                'longitude' => '76.639991',
                'speed' => '30',
                'battery' => '70',
            ]
        );

        $data = $this->getLocation('9.33178146', '76.5418409');
        \App\Models\LocationLog::factory()->create(
            [
                'bus_id' => 1,
                'location' => $data['location'],
                'address' => $data['address'],
                'latitude' => '9.33178146',
                'longitude' => '76.5418409',
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
    // Throttle: wait 1 second between requests
    sleep(2);

    $url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=$latitude&lon=$longitude";

    $client = new \GuzzleHttp\Client([
        'headers' => [
            'User-Agent' => 'BusTrackerApp/1.0 (admin@example.com)',
        ]
    ]);

    $response = $client->request('GET', $url);

    $data = json_decode($response->getBody(), true);

    return [
        'location' => (!empty($data['name']) ? $data['name'] . ', ' : '') . ($data['address']['village'] ?? $data['address']['town'] ?? $data['address']['city'] ?? $data['address']['county'] ?? $data['address']['state'] ?? $data['address']['country'] ?? ''),
        'address' => $data['display_name'],
    ];
}

}
