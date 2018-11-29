<?php

use Illuminate\Database\Seeder;

class SeveralSeeedsTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $array = ['processor','notebooks','mother boards','grafic card'];
      foreach ($array as $value) {
        DB::table('categories')->insert(["name" => "$value"]);
      }
      $array = null;

      $array[]=['procesador intel i5', 30000,'laptop siragon','intel','/images/procesadores/Corei57400.jpg']; //1

      $array[]=['procesador intel i3',10849,'notebooks gadnic 15,6','intel','/images/procesadores/Corei38100.jpg']; //2

      $array[]=['procesador ryzen 7',12638,'notebook Hp 240','ryzen','/images/procesadores/ryzen1800x.jpg']; //3

      $array[]=['procesador ryzen 5',10999,'notebook asus vivobook','ryzen','/images/procesadores/ryzen52600.jpg'];//4

      $array[]=['procesador intel i5 bonus',30000,'laptop siragon','intel','/images/procesadores/Corei58500.jpg'];//5

      $array[]=['procesador ryzen 5 bonus',10849,'notebook gadnic 15,6','ryzen','/images/procesadores/ryzen52600X.jpg'];//6

      $array[]=['procesador intel i5 nuevo',12638,'notebook hp 240','intel','/images/procesadores/Corei58600.jpg'];//7

      $array[]=['procesador ryzen 7 bonus',30000,'notebook asus vivobook','ryzen','/images/procesadores/ryzen72700.jpg'];//8

      $array[]=['procesador intel i7',20000,'notebook asus vivobook','intel','/images/procesadores/corei78700.jpg'];//9

      $array[]=['procesador ryzen 7 descuento',12638,'notebook hp 240','ryzen','/images/procesadores/ryzen72700X.jpg'];//10

      $array[]=['procesador intel i7 bonus',30000,'notebook asus vivobook','intel','/images/procesadores/corei78700K.jpg'];//11

      $array[]=['procesador ryzen threadripper',30000,'notebook asus vivobook','ryzen','/images/procesadores/ryzenthreadripper1950X.jpg'];//12

      $array[]=["laptop siragon",30.000,"notebook negra 16 pulgadas", "siragon","/images/prueba_laptop.jpg"];//13

      $array[]=["notebook gadnic 15,6",10.849,"notebook blanca 15 pulgadas", "gadnic",'/images/notebook2.webp'];//14

      $array[]=["notebook hp 240",12.638,"notebook negra hp 18 pulgadas","intel",'/images/notebook3.webp'];//15

      $array[]=['notebook asus vivobook',10.999,"notebook asus pantalla ultra fina 15 pulgadas","asus",'/images/notebook4.webp'];//16

      $array[]=["laptop siragon nueva",30.000,"notebook negra 16 pulgadas", "siragon",'/images/prueba_laptop.jpg'];//17

      $array[]=["notebook gadnic 15,6 descuentos",10.849,"notebook blanca 15 pulgadas","gadnic",'/images/notebook2.webp'];//18

      $array[]=["notebook hp 240 nueva",12.638,"notebook negra hp 18 pulgadas","intel",'/images/notebook3.webp'];//19

      $array[]=['notebook asus vivobook bonificada',10.999,"notebook asus pantalla ultra fina 15 pulgadas","asus",'/images/notebook4.webp'];//20

      $array[]=['notebook asus vivobook descuento',10.000,"notebook asus pantalla ultra fina 15 pulgadas","asus",'/images/notebook4.webp']; //21

      $array[]=['Z370 Aorus 7',100000,"ATXCPU form Factor","Intel",'/images/Placas Madre/Z370Aorus.png']; //22

      $array[]=['AMD ',150000,"AMD B350 Chipset","ryzen",'/images/Placas Madre/AMD 3 MODELS-Ryzenbig-MotherBoard.jpg']; //23

      $array[]=['ASRock B250',300000,"ATX form factor","Intel",'/images/Placas Madre/ATX-Intel-ASRock-Pro4-MotherBoard.png']; //24

      $array[]=['Asus Prime B350',200000,"ATX form factor","ryzen",'/images/Placas Madre/asus-b350-plus-920x517-Ryzen.jpg']; //25

      $array[]=['MSI Gaming Pro',120000,"ATX form factor Chipset","Carbon",'/images/Placas Madre/MSI X370 Gaming Pro Carbon.jpg']; //26

      $array[]=['MSI X370 SLI',115000,"ATX form factor AMD chipset","ryzen",'/images/Placas Madre/MSI X370 SLI Plus-Ryzen.png']; //27

      $array[]=['MSI B350 Mortar',90000,"Micro-ATX Form Factro Chipset","ryzen",'/images/Placas Madre/MSI B350M Mortar Ryzen.png']; //28

      $array[]=['XL B490 ABR',280000,"ATX form factor AMD","intel",'/images/Placas Madre/Intel-XL-MotherBoard.jpg']; //29

      $array[]=['AMD 7 2700',115000,"ATX form factor module","ryzen",'/images/Placas Madre/AMD-Ryzen-7-2700-MotherBoard.jpg']; //30



      for ($i=0; $i <count($array) ; $i++) {
        DB::table('products')->insert(["name" => $array[$i][0], "price"=> $array[$i][1], "description"=> $array[$i][2], "brand"=>$array[$i][3], "image"=> $array[$i][4]]);
		  }

      $array=null;

      for ($i=1; $i<=30;$i++){
        if ($i<12){
          DB::table('category_product')->insert(["category_id"=>1,"product_id"=>$i]);
        } else {
          if ($i<22) {
            DB::table('category_product')->insert(["category_id"=>2,"product_id"=>$i]);
          } else {
            DB::table('category_product')->insert(["category_id"=>3,"product_id"=>$i]);
          }
        }
      }



    }
}
