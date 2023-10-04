<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class addPhoneNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:users(phone)';

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
        ->where('users.phone','=', NULL)
        ->get();

    foreach ($users as $user) {

        echo "Updating (Phone Number) ....... ".$user->name."\n";
        DB::table('users')
            ->where('id',$user->id)
            ->update([
                'phone' =>'+92 '. rand(1000000000,9999999999),
            ]);
    }
    echo "Process Complete \n\n Total Records Updated ---> ".count($users)." \n\n";

    }
}
