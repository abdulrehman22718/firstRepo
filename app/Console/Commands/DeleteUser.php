<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class DeleteUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:users {id}';

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
        $check=DB::table('users')->where('id','=',$this->argument('id'))->first();

        if($check){
            $check=DB::table('users')->where('id','=',$this->argument('id'))->delete();
            echo "---------------------------------------------\n";

            echo "Record Deleted Successfully";
            echo "\n---------------------------------------------\n";

        }else{
            echo "ERROR :: No Record Found";

        }
    }
}
