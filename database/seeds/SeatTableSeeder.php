<?php
/**
 * Created by PhpStorm.
 * User: ss9545
 * Date: 10/04/2018
 * Time: 5:06 PM
 */
use Illuminate\Database\Seeder;
use App\Models\Seat;

class SeatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($i=4;$i<=6;$i++){
            Seat::create([
                'seat_code' => 'test00' . $i,
                'seat_desc' => 'test seat 00' . $i,
                'qrcode' => 'qrcode00' . $i,
                'created_by' => 'Sam Shen',
            ]);

        }
    }
}
