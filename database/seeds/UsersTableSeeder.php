 <?php

use Illuminate\Database\Seeder;
use App\models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
       $user->firstname='behzad';
       $user->lastname='fazeli';
       $user->email='fazelasl@yahoo.com';
       $user->password= Hash::make('123456');
       $user->telephone='123456789';
       $user->admin='1';
       $user->save();
    }
}
