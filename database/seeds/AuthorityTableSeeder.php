<?php

use Illuminate\Database\Seeder;

class AuthorityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authority = new  \App\Authority([
            'CreatePost'=>true,
            'ReadPost'=>true,
            'UpdatePost'=>true,
            'DeletePost'=>true,
            'SuspendAccount'=>false,
            'CreateAccount'=>false
        ]);
        $authority->save();
        $authority = new  \App\Authority([
            'CreatePost'=>true,
            'ReadPost'=>true,
            'UpdatePost'=>true,
            'DeletePost'=>true,
            'SuspendAccount'=>true,
            'CreateAccount'=>true
        ]);
        $authority->save();
    }
}
