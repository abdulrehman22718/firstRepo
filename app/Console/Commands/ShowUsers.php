<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

class ShowUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getAll(users)';

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
        $allUsers=DB::table('users')->get();

        if(count($allUsers) == 0){
            echo "Record Emplty";
        }else{
        echo "\n\t Users Record \n";
        echo "Total Users ---> ( ".count($allUsers)." ) \n\n";
        echo "\n---------------------------------------------\n";
        foreach ($allUsers as $user) {
        echo "ID ---> ".$user->id."\n";
        echo "Employee Code ---> ".$user->e_code."\n";

        echo "Name ---> ".$user->name."\n";
        echo "Name ---> ".$user->user_name."\n";
        echo "Phone Number ---> ".$user->phone."\n";
        echo "Email ---> ".$user->email."\n\n";
        echo "\n---------------------------------------------\n";
        }
        echo "\n---------------------------------------------\n";
    }
    }
}
