<?php

class TestsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	 DB::table('tests')->delete();
    	$now = new Datetime();

        $tests = array(
        ['title'=>'Hruleva',
        'created_at'=>$now,
        'updated_at'=>$now
        ],
         ['title'=>'Vaenga',
        'created_at'=>$now,
        'updated_at'=>$now
        ]);

        // Uncomment the below to run the seeder
        DB::table('tests')->insert($tests);
    }

}