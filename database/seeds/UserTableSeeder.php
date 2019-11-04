<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data=[
    		[
    			'name'=>'Long An Minh',
    			'mail'=>'lamnbboy@gmail.com',
    			'pass'=>bcrypt('123456'),
    			'note'=>'đẹp trai',
    			'status'=>1,
    		],
    		[
    			'name'=>'Quang tèo',
    			'mail'=>'quangteo@gmail.com',
    			'pass'=>bcrypt('123456'),
    			'note'=>'đẹp trai',
    			'status'=>1,
    		]
    	];

        DB::table('users')->insert($data);
    }
}
