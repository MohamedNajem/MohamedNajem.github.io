<?php
    class EmployeImplm implements  IEmployee
    {
        public function nombreJourConge($employe)
        {
            if($employe->getFonction() == "cadre"){
                echo " 30 jours ";
            }
            if($employe->getFonction() == "Ouvrier"){
                echo " 10 jours ";
            }



        }
        public function salaireAnuul($employe)
        {
            if($employe->getFonction() == "cadre"){
                echo "le salair annuel est : ".(300000*12);
            }
            if($employe->getFonction() == "Ouvrier"){
                echo "le salair annuel est : ".(100000*12);
            }
            

        }
        public function prime($employe)
        {
            if($employe->getFonction() == "cadre"){
                echo"le prime annuel est : ".(((300000*12)*50)/100);
            }
            if($employe->getFonction() == "Ouvrier"){
                echo "le prime annuel est : ".(((100000*12)*15)/100);
            }
            
             
        }
    }