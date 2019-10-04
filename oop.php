<?php

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