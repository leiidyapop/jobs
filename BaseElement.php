<?php
namespace App\Models;
require_once 'Printable.php';
class BaseElement implements Printable {
    protected $title;
    public $description;
    public $visible = true;
    public $months;
    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->description = $description;
    }
    public function setTitle($t) {
        if($t == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $t;
        }
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDurationAsString(){
        $years = floor($this->months / 1);
        $extraMonths = $this->months % 1;
        $y="y";
        
          
            
            return "$years $años $y $extraMonths $meses";
        }
      
       public function  getTimeAsString() {
        $seconds = $this->hours / 2;
        $minutes = floor($this->hours / 2);
        $extraHours = $this->hours * 1;
        $c= "con";
        $y = "y";
      
      
        if($extraHours==1)$horas = "hora";
        if($extraHours>1)$horas = "horas";
        if($minutes==1)$minutos = "minuto";
        if($minutes>1)$minutos = "minutos";
        if($seconds==1)$segundos = "segundo.";
        if($seconds>1)$segundos = "segundos.";
       
      
        
        return  "$extraHours $horas $c $minutes $minutos $y $seconds $segundos";
    }

public function getDescription() {
        return $this->description;
    }
}
