<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
        
        public function handle()
        {
            $botman = app('botman');
    
            $botman->hears('{message}', function($botman, $message) {
    
                if ($message == 'Bonjour' || $message == 'bonjour' || $message == 'BONJOUR') {
                    $this->askName($botman);
                    
                }
                else {
                    // $botman->reply("D'accord");
                   $this->askneed($botman);
                }
     
            });
    
            $botman->listen();
        }
    
      
        public function askName($botman)
        {
            $botman->ask('Bonjour, Comment tu t appelle ?', function(Answer $answer) {
                $name = $answer->getText();
                $this->say('En chanter !! '.$name);
                
            });

            
        }
        public function askneed($botman){

            $botman->ask('Comment puis-je vous aider ?', function(Answer $answer) { 
                $message=$answer->getText();
            if( strpos($message, "services") !== false ||strpos($message, "offres") !== false ||strpos($message, "OFFRES") !== false || strpos($message, "service") !== false )
                  $this->say("DimEnergy.com vous offres plusieurs services, en effet vous pouvez dimensionner votre installation éolienne ou encore photovoltaîque et se documenter ensuite si vous avez des confusions et des abscons.");
            else if(strpos($message, "application") !== false)
                     $this->say("Notre application sert à faciliter la vie aux personnes désirant d'obtenir un dimensionnement à leurs installations .");
                  else if(strpos($message, "prix") !== false || strpos($message, "coût") !== false || strpos($message, "coûte") !== false)
                         $this->say("Le prix des panneaux photovoltaîques part de 16045 DHs jusqu'a 1103.102 DHs et quant aux éoliennes ça varie presque de  24067680 DHs à 30084600 DHs.");
                        else if(strpos($message, "différence") !== false )
                            $this->say("La difference entre les deux technologies réside essentiellement dans la rentabilité de chacune, pour les éoliennes, elles sont rentables lorsqui'il ya suffisement du vent qui va faire turner la turbine, et concernant les panneaux photovoltaîques, ils sont rentables là oû il ya l'ensoliement nécessaire qui va faire fonctionner les cellules photovolaîques.");
                            else 
                            $this->say("désolé, il y a un certains nombre de comandes que je peux comprendre, essayez avec d'autres questions ou vérifiez l'orthographe!");
        });
        }



    }

