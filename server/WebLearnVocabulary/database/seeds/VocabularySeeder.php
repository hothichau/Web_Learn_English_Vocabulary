<?php

use Illuminate\Database\Seeder;

class VocabularySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vocabularies')->insert([
            [
                'id' => 1,
                'word' => 'Accommodate',
                'pronunciation' => 'əˈkɑːmədeɪt',
                'meaning'=>'đáp ứng, cung cấp chỗ ở',
                'image' => 'public/word1.png',
                'verb_form' => 'verb',
                'sound' => 'public/sound1.mp3',
                'topic_id' => 1
               
            ],[
                'id' => 2,
                'word' => 'Arrange',
                'pronunciation' => 'əˈreɪndʒ',
                'meaning'=>'sắp xếp',
                'image' => 'public/word2.png',
                'verb_form' => 'verb',
                'sound' => 'public/sound2.mp3',
                'topic_id' => 1
               
            ],[
                'id' => 3,
                'word' => 'Associate',
                'pronunciation' => 'əˈsoʊʃieɪt',
                'meaning'=>'liên tưởng, liên kết',
                'image' => 'public/word3.png',
                'verb_form' => 'verb',
                'sound' => 'public/sound3.mp3',
                'topic_id' => 1
               
            ],[
                'id' => 4,
                'word' => 'Disk',
                'pronunciation' => 'disk',
                'meaning'=>'đĩa, ổ đĩa',
                'image' => 'public/word11.png',
                'verb_form' => 'noun',
                'sound' => 'public/sound11.mp3',
                'topic_id' => 2
               
            ],[
                'id' => 5,
                'word' => 'facilitate',
                'pronunciation' => 'fəˈsɪlɪteɪt',
                'meaning'=>'tạo điều kiện thuận lợi
                ',
                'image' => 'public/word12.png',
                'verb_form' => 'verb',
                'sound' => 'public/sound12.mp3',
                'topic_id' => 2
               
            ],[
                'id' => 6,
                'word' => 'Network',
                'pronunciation' => 'ˈnetwɜːrk',
                'meaning'=>'kết nối
                ',
                'image' => 'public/word13.png',
                'verb_form' => 'verb',
                'sound' => 'public/sound13.mp3',
                'topic_id' => 2
               
            ],[
                'id' => 7,
                'word' => 'Popularize',
                'pronunciation' => 'ˈpɑːpjələraɪz',
                'meaning'=>'làm cho phổ biến',
                'image' => 'public/word14.png',
                'verb_form' => 'verb',
                'sound' => 'public/sound14.mp3',
                'topic_id' => 2
               
            ]
        ]
    );
    }
}
