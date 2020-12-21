<?php

use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            [
                'id' => 1,
                'title' => 'Conferences',
                'image' => 'public/topic1.png'
               
            ],[
                'id' => 2,
                'title' => 'Electronics',
                'image' => 'public/topic2.png'
            ],[
                'id' => 3,
                'title' => 'Pharmacy',
                'image' => 'public/topic3.png'
            ],[
                'id' => 4,
                'title' => 'Accounting',
                'image' => 'public/topic4.png'
            ],[
                'id' => 5,
                'title' => 'Airlines',
                'image' => 'public/topic5.png'
            ],[
                'id' => 6,
                'title' => 'Applying & Interviewing',
                'image' => 'public/topic6.png'
            ],[
                'id' => 7,
                'title' => 'Banking',
                'image' => 'public/topic7.png'
            ]
        ]
    );
    }
}
