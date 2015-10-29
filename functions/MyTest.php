<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class Mytest{
      var $a;
      var $b;
	  function Mytest($a,$b){
		  $this->a = $a;
		  $this->b = $b;
	  }
      function changeVar() {
         $this->a = $this->a+$this->b;
		 $this->b = $this->a-$this->b;
		 $this->a = $this->a-$this->b;
      } 
   }
?>
