<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

class addUserName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:users(ecode,username)';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = DB::table('users')
        ->where('users.e_code','=', NULL)
        ->where('users.user_name','=', NULL)
        ->get();

     foreach ($users as $user) {
$get_random=rand(1000,9999);
        echo "Updating (Username) ....... ".$user->name."\n\n";
        DB::table('users')
            ->where('id',$user->id)
            ->update([
                'e_code' => "E-".date('Y', strtotime(now())).$get_random,
                'user_name' => "@".$user->name.$get_random
            ]);
        // echo "\n@".$user->name."\n\n";
    }
    echo "Process Complete \n\n Total Records Updated ---> ".count($users)." \n\n";

    }
}
