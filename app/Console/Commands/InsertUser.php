<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

class InsertUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertData:users {name} {email} {password}';

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
        $dataToInsert = [
            ['name' => $this->argument('name'), 'email' => $this->argument('email'), 'email_verified_at' =>NULL ,'password'=>$this->argument('password'),'remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],

           
        ];
        
        DB::table('users')->insert($dataToInsert);
        echo "\n---------------------------------------------\n";
        echo "Record Saved \n";
        echo "\n---------------------------------------------\n";
    }
}
