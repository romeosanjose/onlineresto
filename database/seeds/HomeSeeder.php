-<?php

use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('home')->truncate();
        $home = array(
          array('title'=>'slider','description'=>'nothing','navigation'=>false,'show'=>true,'position'=>1, 'type'=>'header','content'=>'{"title":"OLStore","subtitle":"get you food now"}'),
          array('title'=>'welcome','description'=>'nothing','navigation'=>false,'show'=>true,'position'=>2, 'type'=>'white','content'=>'{"title":"welcome to our food store"}'),
          array('title'=>'post','description'=>'nothing','navigation'=>false,'show'=>true,'position'=>3, 'type'=>'grey','content'=>'{"title":"our products","product:[{"title":"adobo","description":"maasim na manok"},{"title":"liempo","description":"masarap na baboy"}]"}'),
          array('title'=>'testimonials','description'=>'nothing','navigation'=>false,'show'=>true,'position'=>4, 'type'=>'darkgrey','content'=>'{"title":"What Our Client Says",":[{"client":"duterte","client_title":"maasim na manok","say":"napakasarap"},{"client":"roxas","client_title":"maasim na manok","say":"napakasarap"}]"}'),
          array('title'=>'registration','description'=>'nothing','navigation'=>false,'show'=>true,'position'=>5, 'type'=>'registrationform','content'=>'{"title":"Join us now"}'),
          array('title'=>'whyjoin','description'=>'nothing','navigation'=>false,'show'=>true,'position'=>6, 'type'=>'white','content'=>'{"title":"it will make you rich"}'),
          array('title'=>'aboutus','description'=>'nothing','navigation'=>false,'show'=>true,'position'=>7, 'type'=>'about','content'=>'{"title":"about us","description":"lalaal lorem lipsum","people":[{"name":"romeo","about":"nothing much"},{"name":"boado","about":"founder"}]}'),
          array('title'=>'contactus','description'=>'nothing','navigation'=>false,'show'=>true,'position'=>8, 'type'=>'footer','content'=>'{"title":"contact us","email_key":"send us email","email_val":"olstore@food.com","call_key":"call us","call_val":"122345","social_key":"we are social"}'),
        );
        DB::table('home')->insert($home);
    }
}
