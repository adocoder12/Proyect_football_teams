<?php

class MySrv
{
    public $srv = 'localhost';
  }
	$serveri = new MySrv;
	function knowser(MySrv $serveri){ 
    return $serveri->srv;
	}

class MyTunnus
{
    public $tunn = 'root';
    }
	$tunnus = new MyTunnus;
	function knowme(MyTunnus $tunnus){
    return $tunnus->tunn;
	}

class MyPassw
{	
    public $pass = '';
	}
	$ssana = new MyPassw;
	function knowpass(MyPassw $ssana){
    return $ssana->pass;
	}

class MyKanta
{
   public $tk = 'football';
    }
	$tkanta = new MyKanta;
    function knowtk(MyKanta $tkanta){
    return $tkanta->tk;
	}
	
?>
