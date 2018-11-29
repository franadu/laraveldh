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

      $array[]=['procesador intel i5', 30000,'laptop siragon','intel','/images/procesadores/Corei57400.jpg'];

      $array[]=['procesador intel i3',10849,'notebooks gadnic 15,6','intel','/images/procesadores/Corei38100.jpg'];

      $array[]=['procesador ryzen 7',12638,'notebook Hp 240','ryzen','/images/procesadores/ryzen1800x.jpg'];

      $array[]=['procesador ryzen 5',10999,'notebook asus vivobook','ryzen','/images/procesadores/ryzen52600.jpg'];

      $array[]=['procesador intel i5 bonus',30000,'laptop siragon','intel','/images/procesadores/Corei58500.jpg'];

      $array[]=['procesador ryzen 5 bonus',10849,'notebook gadnic 15,6','ryzen','/images/procesadores/ryzen52600X.jpg'];

      $array[]=['procesador intel i5 nuevo',12638,'notebook hp 240','intel','/images/procesadores/Corei58600.jpg'];

      $array[]=['procesador ryzen 7 bonus',30000,'notebook asus vivobook','ryzen','/images/procesadores/ryzen72700.jpg'];

      $array[]=['procesador intel i7',20000,'notebook asus vivobook','intel','/images/procesadores/corei78700.jpg'];

      $array[]=['procesador ryzen 7 descuento',12638,'notebook hp 240','ryzen','/images/procesadores/ryzen72700X.jpg'];

      $array[]=['procesador intel i7 bonus',30000,'notebook asus vivobook','intel','/images/procesadores/corei78700K.jpg'];

      $array[]=['procesador ryzen threadripper',30000,'notebook asus vivobook','ryzen','/images/procesadores/ryzenthreadripper1950X.jpg'];

      $array[]=["laptop siragon",30.000,"notebook negra 16 pulgadas", "siragon","/images/prueba_laptop.jpg"];

      $array[]=["notebook gadnic 15,6",10.849,"notebook blanca 15 pulgadas", "gadnic",'/images/notebook2.webp'];

      $array[]=["notebook hp 240",12.638,"notebook negra hp 18 pulgadas","intel",'/images/notebook3.webp'];

      $array[]=['notebook asus vivobook',10.999,"notebook asus pantalla ultra fina 15 pulgadas","asus",'/images/notebook4.webp'];

      $array[]=["laptop siragon nueva",30.000,"notebook negra 16 pulgadas", "siragon",'/images/prueba_laptop.jpg'];

      $array[]=["notebook gadnic 15,6 descuentos",10.849,"notebook blanca 15 pulgadas","gadnic",'/images/notebook2.webp'];

      $array[]=["notebook hp 240 nueva",12.638,"notebook negra hp 18 pulgadas","intel",'/images/notebook3.webp'];

      $array[]=['notebook asus vivobook bonificada',10.999,"notebook asus pantalla ultra fina 15 pulgadas","asus",'/images/notebook4.webp'];

      $array[]=['notebook asus vivobook descuento',10.000,"notebook asus pantalla ultra fina 15 pulgadas","asus",'/images/notebook4.webp'];


      for ($i=0; $i <count($array) ; $i++) {
        DB::table('products')->insert(["name" => $array[$i][0], "price"=> $array[$i][1], "description"=> $array[$i][2], "brand"=>$array[$i][3], "image"=> $array[$i][4]]);
		  }

      $array=null;

      for ($i=1; $i<=21;$i++){
        if ($i>12){
          DB::table('category_product')->insert(["category_id"=>2,"id_product"=>$i]);
        } else {
          DB::table('category_product')->insert(["category_id"=>1,"id_product"=>$i]);
        }
      }



    }
}
