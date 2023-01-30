<?php

namespace Database\Seeders;

use App\Models\Businesses;
use App\Models\Messages;
use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Students::all();
        $businesses = Businesses::all();
        
        $i = 1;
        foreach ($students as $student) {
            $receiver = $businesses->random();
            Messages::create([
                'sender_id' => $student->id,
                'receiver_id' => $receiver->id,
                'message' => "Message #{$i} from student to business",
                'is_read' => false,
            ]);
            $i++;
        }

        $i = 1;
        foreach ($businesses as $business) {
            $receiver = $students->random();
            Messages::create([
                'sender_id' => $business->id,
                'receiver_id' => $receiver->id,
                'message' => "Message #{$i} from business to student",
                'is_read' => false,
            ]);
            $i++;
        }
   
    }
}
