<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

class DeleteUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'eraseAll(users)';

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
        $users=DB::table('users')->count();
if($users == 0){
    
    echo "Storage Empty \n";
}else{
    DB::table('users')->truncate();
    echo "\n---------------------------------------------\n";
    echo "Storage Erased Successfully \n";
    echo "\n---------------------------------------------\n";

}
    //echo $this->argument('id');

    }
}
