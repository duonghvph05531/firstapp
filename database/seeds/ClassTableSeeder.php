<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('classes')->count()==0 ){
            DB::table('classes')->insert([
                [
                    'id'=>1,
                    'name'=>'PT111',
                    'teacher_name'=>'Nguyen Van A',
                    'major'=>'CNTT',
                    'max_student'=>20,
                    
                ],
                [
                    'id'=>2,
                    'name'=>'PT112',
                    'teacher_name'=>'Nguyen Van B',
                    'major'=>'MKT',
                    'max_student'=>20,
                    
                ],
                [
                    'id'=>3,
                    'name'=>'PT113',
                    'teacher_name'=>'Nguyen Van C',
                    'major'=>'IOT',
                    'max_student'=>20,
                    
                ],
            ]);
        }
       
    }
}
