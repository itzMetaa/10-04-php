<?php

class nev {
	public function __construct($csNev, $uNev, $kor){
		self::set_csNev($csNev);
		self::set_uNev($uNev);
		self::set_kor($kor);	
	}

	private $csNev = "";
	private $uNev = "";
	private $kor = 0;
	public function kiir(){
		$s = $this->csNev . " " . $this->uNev . ", " . $this->kor . " éves vagy!";
		echo $s;
	}
	public function set_csNev($ertek){
		$this->csNev = $ertek;
	}
	public function set_uNev($ertek){
		$this->uNev = $ertek;
	}
	public function set_kor($ertek){
		$this->kor = $ertek;
	}

}

class eldontes{
	public function __construct($szam){
		self::set_szam($szam);
		self::cmd_elojel();
	}
	private $szam = 0;
		public function set_szam($ertek){
			$this->szam = $ertek;
		}
		public function get_szam(){
			return $this->szam;
		}
	private $elojel = 0;
		public function set_elojel($ertek){
			$this->elojel = $ertek;
		}
		public function get_elojel(){
			return $this->elojel;
		}	

	public function cmd_elojel(){
		if (self::get_szam()>0) self::set_elojel("+");
		if (self::get_szam()<0) self::set_elojel("-");
		if (self::get_szam()==0) self::set_elojel("0");
	}
}

?>