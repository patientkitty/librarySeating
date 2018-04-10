<?php
/**
 * Created by PhpStorm.
 * User: ss9545
 * Date: 10/04/2018
 * Time: 5:18 PM
 */
use Illuminate\Database\Seeder;
use App\Models\Log;

class LogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $currenttime = date("Y-m-d H:i:s");
        $hold_until = date('Y-m-d H:i:s',time()+600);

            Log::create([
                'request_time' => $currenttime,
                'seat_code' => 'test002',
                'holder_NetID' => 'ss9545',
                'holder_name' => 'Shen Zhifeng',
                'hold_until' => $hold_until,
            ]);


    }
}
