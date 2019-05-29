<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Job extends Model  {
    protected $table = 'jobs';
    
    public function getDurationAsString(){
        $years = floor($this->months / 1);
        $extraMonths = $this->months % 1;
        $y="y";
        
            
            
            return "$years $y $extraMonths";
        }
      
       public function  getTimeAsString() {
        $seconds = $this->hours / 2;
        $minutes = floor($this->hours / 2);
        $extraHours = $this->hours * 1;
        $c= "con";
        $y = "y";
      

      
        
        return  "$extraHours  $c $minutes $y $seconds";
    }
}
