<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('students')->count()==0 ){
            DB::table('students')->insert([
                [
                    'id'=>1,
                    'name'=>'Nguyen Van A',
                    'address'=>'HN',
                    'university'=>'FPT Poly',
                    'class_id'=>1,
                    
                ],
                [
                    'id'=>2,
                    'name'=>'Nguyen Van B',
                    'address'=>'HN',
                    'university'=>'FPT Poly',
                    'class_id'=>2,
                    
                ],

                [
                    'id'=>3,
                    'name'=>'Nguyen Van C',
                    'address'=>'HCM',
                    'university'=>'FPT Poly',
                    'class_id'=>3,
                    
                ],
            ]);
        }
       
    }
}
