<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;


use Illuminate\Console\Command;

class searchUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'findData:users {data}';

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
        $findData=DB::table('users')
        ->where('id','=',$this->argument('data'))
        ->orwhere('name','=',$this->argument('data'))
        ->orwhere('email','=',$this->argument('data'))
        ->orwhere('e_code','=',$this->argument('data'))
        ->orwhere('phone','=',$this->argument('data'))

        ->get();

        if(count($findData) > 0){
            echo "\n\t Data Found \n\n";
            echo "---------------------------------------------\n";
            foreach ($findData as $row) {
                # code...
            
            echo "ID ---> ".$row->id."\n";
            echo "E-Code ---> ".$row->e_code."\n";
            echo "Name ---> ".$row->name."\n";
            echo "Phone ---> ".$row->phone."\n";
            echo "email ---> ".$row->email."\n\n";
            }
            echo "---------------------------------------------\n";

        }else{
           echo "ERROR:: No Record Found";
        }
    }
}
