<?php 
	
	class kendaraan{
		private $merk;
		private $harga;

		function ___construct($merk, $harga){
			$this -> merk = $merk;
			$this -> harga = $harga;
		}

		function bacamerk(){
			return $this -> merk;
		}

		function bacaharga(){
			return $this -> harga;
		}
	}	

	$motor = new kendaraan("ducati, 100000000");

	echo " merk kendaraan =". $motor -> bacamerk()."<br>";
	echo " harga motor =". $motor -> bacaharga()."<br>";
	echo "=============================================<br><br>";

	$motor2 = new kendaraan ("bajaj, 1500000");

	echo "merk kendaraan =".$motor2 -> bacamerk (). "<br>";	
	echo "harga motor =".$motor2 -> bacaharga ()."<br>"; 


 ?>