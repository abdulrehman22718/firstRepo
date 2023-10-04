<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class InsertUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertAll(users)';

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
            ['name' => 'Mark', 'email' => 'mark.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'lfvdhdli', 'email' => 'marfderwgdfk.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'drygkuse', 'email' => 'marfwer3dgdfk.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'ywtfgk', 'email' => 'marfdgdsefg55434fk.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'ksjekfl', 'email' => 'marfw4tf3wdgdfk.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'scnla', 'email' => 'marfdgawdasdfk.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'zjhcjs', 'email' => 'marferfdgdfk.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'ndnv', 'email' => 'marfdg324dfk.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'bbj', 'email' => '34.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            
            ['name' => 'querry', 'email' => 'quee.44@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TDFGSDBVS3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'abdullah', 'email' => 'abdullay1242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC2VSEGWG4G4EHBE30HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'ahmed', 'email' => 'ahmed.34@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG34VENAIRGUAER89HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'Zamran', 'email' => 'zazo666@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9785TG3489HFHC2354YE5T4W0HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'amna', 'email' => 'amna722@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'arham', 'email' => 'arham45454@yahoo.com', 'email_verified_at' => NULL ,'password'=>'GHWEHFG8GWIEDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'ali', 'email' => 'ali_dado@yahoo.com', 'email_verified_at' => NULL ,'password'=>'5T90E4VWI0NVEWNCDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'mushtaque', 'email' => 'mushtaque.butt_2323@yahoo.com', 'email_verified_at' => NULL ,'password'=>'N4984H89VHDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'haroon', 'email' => '34.haroon@yahoo.com', 'email_verified_at' => NULL ,'password'=>'F3OPGJ9WHHGFGDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'zara', 'email' => 'zara.247@yahoo.com', 'email_verified_at' => NULL ,'password'=>'XXXUGXIUGIUEGFIWEDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],

            ['name' => 'Azan', 'email' => 'azan.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'afridi', 'email' => 'afridi.24w4532322@yahoo.com', 'email_verified_at' => NULL ,'password'=>'FEFEDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'daniel', 'email' => 'DDDl3.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSXXCHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'sasha', 'email' => 'sasha.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'D8709XCASHIOCHSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'rechard', 'email' => 'rechardd.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'ZNCISAHC90WDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'cathrine', 'email' => 'cathrine.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DCZJSJDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'zoya', 'email' => 'zoya.2sdfasfq342@yahoo.com', 'email_verified_at' => NULL ,'password'=>'LJSCDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'nimrah', 'email' => 'nimrah202.242@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSCDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'meelum', 'email' => 'neelum2323@yahoo.com', 'email_verified_at' => NULL ,'password'=>'D489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            
            ['name' => 'Jibran', 'email' => 'jibran.44@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DDCSDSHKUCH9785TDFGSDBVS3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'elizibeth', 'email' => 'elzbth@yahoo.com', 'email_verified_at' => NULL ,'password'=>'CDSCDSHKUCH9785TG3489HFHC2VSEGWG4G4EHBE30HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'alexendra', 'email' => 'alexendra.34@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSHKUCH9SDCNIHSC785TG34VENAIRGUAER89HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'ashoka', 'email' => 'ashokka@yahoo.com', 'email_verified_at' => NULL ,'password'=>'DSACU08W80D80WQSHKUCH9785TG3489HFHC2354YE5T4W0HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'maria', 'email' => 'maria565@yahoo.com', 'email_verified_at' => NULL ,'password'=>'D989765SCHSHKUCH9','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'kamraan', 'email' => 'kamraan45467@yahoo.com', 'email_verified_at' => NULL ,'password'=>'ZXCLG456GHWEHFG8GWIEDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'users1', 'email' => 'users1@yahoo.com', 'email_verified_at' => NULL ,'password'=>'5T90E4VDSFSDWI0NVEWNCDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'users2', 'email' => 'users2@yahoo.com', 'email_verified_at' => NULL ,'password'=>'N4DC984H89VHDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'users3', 'email' => 'user3@yahoo.com', 'email_verified_at' => NULL ,'password'=>'F3OPGJ9WHG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],
            ['name' => 'users4', 'email' => 'users4@yahoo.com', 'email_verified_at' => NULL ,'password'=>'IWEDSHKUCH9785TG3489HFHC230HC','remember_token'=>NULL,'created_at' => now(), 'updated_at' =>now()],

           
        ];
        
        DB::table('users')->insert($dataToInsert);
        echo "\n---------------------------------------------\n";
        echo "Data Inserted \n";
        echo "\n---------------------------------------------\n";
    }
}
