<?php
	class Professional extends Experience 
	{
		private $_certificat ;
		
		public function __construct()
		{
			
		}
		
		//getter
		
		public function getCeteficat()
		{
			return $this->$_certificat
		}
		
		//setter
		
		public function setCertificat($certificat)
		{
			if(is_string($certificat))
			{
				$this->$_certificat = $certificat;
			}
		}
	}
?>