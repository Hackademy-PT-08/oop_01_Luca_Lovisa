<?php


class Company {
    public $name;
    public $location;
    public $tot_employees;
    public static $avg_wage = 1500;
    public static $spesaTotale=0;


    function __construct ($azienda,$posizione,$dipendenti) {
        $this->name=$azienda;
        $this->location=$posizione;
        $this->tot_employees=$dipendenti;
        self::$spesaTotale += self::$avg_wage * $this->tot_employees*12;
        

    }

    public function infoCompany () {
        if ($this->tot_employees == 0 || $this->tot_employees=="" ){
            echo "L'ufficio ".$this->name." con sede in ".$this->location." non ha dipendenti \n";
        }else if ($this->tot_employees > 0) {
            echo "L'ufficio ".$this->name." con sede in ".$this->location." ha ben ".$this->tot_employees." dipendenti \n";
        }
    }

    public function spesaAzienda () {
         $spesaAzienda= self::$avg_wage * $this->tot_employees*12;
         echo "L'azienda ".$this->name." spende $spesaAzienda € l'anno \n"; 
    }
    
    public static function printSpesaTot () {
        echo "Tutte le aziende assieme spendono ".self::$spesaTotale." € l'anno \n";
      
    }
};


$company1 = new Company ("Aulab","italia",50);
$company2 = new Company ("Capcom","Giappone",2988);
$company3 = new Company ("Microsoft","Stati Uniti",181000);
$company4 = new Company ("La via della brugola","Canada",0);
$company5 = new Company ("La voce","Italia",38);


var_dump ($company1);

$company1->infoCompany();
$company4->infoCompany();
$company5->spesaAzienda();

 Company::printSpesaTot();