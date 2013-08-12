<?php

class ProptypeTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('proptype')->delete();
    	$now = date('Y-m-d H:i:s');
        $proptype = array(
       	['hometype'=>'Single Family',
		'created_at' => $now,
        'updated_at' => $now], 		
       	['hometype'=>'Condo/Townhouse',
		'created_at' => $now,
        'updated_at' => $now], 		
       	['hometype'=>'Multi-family',
		'created_at' => $now,
        'updated_at' => $now], 		
       	['hometype'=>'Vacant land',
		'created_at' => $now,
        'updated_at' => $now] 		
        );

        // Uncomment the below to run the seeder
         DB::table('proptype')->insert($proptype);
    }

}