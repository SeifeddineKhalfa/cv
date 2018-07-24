<?php
	class Education 
	{
		private $_id;
		private $_profileId ;
		private $_period ;
		private $_description ;
		
		public function __construct()
		{
			
		}
		
		//les getters
		
		public function getId()
		{
			return $this->$_id;
		}
		
		public function getProfileId()
		{
			return $this->$ProfileId;
		}
		
		public function getPeriod()
		{
			return $this->$_period;
		}
		
		public function getDescription()
		{
			return $this->$_description;
		}
		
		//les setters
		
		public function setId($id)
		{
			if ($id > 0)
			{
				$this->$_id = $id ;
			}	
		}
		
		public function setProfileId($profileId)
		{
			if ($profileId > 0)
			{
				$this->$_profileId = $profileId ;
			}	
		}
		
		public function setPeriod($period)
		{
			
				$this->$_period= $period;
			
		}
		
		public function setDescription($description)
		{
			if(is_string($description))
			{
				$this->$_description= $description;
			}
		}
		
	}
?>