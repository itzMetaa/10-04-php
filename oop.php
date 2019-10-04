<?php

class Nev {
	public function __construct($csNev, $uNev, $kor){
		self::set_csNev($csNev);
		self::set_uNev($uNev);
		self::set_kor($kor);
		self::set_teljesNev($csNev, $uNev);
	}

	private $csNev = "";
	private $uNev = "";
	private $teljesNev = "";
	private $kor = 0;
	public function kiir(){
		$s = $this->teljesNev . ", " . $this->kor . " éves vagy!";
		echo $s;
	}
	public function set_csNev($ertek){
		$this->csNev = ucFirst($ertek);
	}
	public function set_uNev($ertek){
		$this->uNev = ucFirst($ertek);
	}
	public function set_kor($ertek){
		$this->kor = $ertek;
	}
	public function set_teljesNev($csNev, $uNev){
		$this->teljesNev = $this->csNev . " " . $this->uNev;
	}

}

class Nagybetu {
	public function __construct($szoveg){

		}

}
	

?>