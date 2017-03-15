<?php
    class Randolf {
      public $food;
      public $play;
      public $sleep:

      function __construct ($food, $play, $sleep){
        $this->food = $food;
        $this->play = $play;
        $this->sleep = $sleep;
      }
      function food(){
        $this->food +1;
        $this->play -1;
        $this->sleep -1;
      }
    }

?>
