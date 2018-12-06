<?php

use Illuminate\Database\Seeder;

class Banners extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $date=date("Y-m-d H:i:s");
      for ($i=1;$i<6;$i++){
        if ($i!=5){
          DB::table('banners')->insert([
            'product_id' => $i
          ]);
        } else {
          DB::table('banners')->insert([
            'product_id' => $i],
            ['delete_at' => $date
          ]);
        }

      }

    }
}
