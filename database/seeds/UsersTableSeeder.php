<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('users')->insert([
      'nama'     => 'Faruq Rahmadani',
      'email'    => 'faruq.rahmadani@gmail.com',
      'username' => '123456',
      'password' => bcrypt('123456'),
    ]);
  }
}
