<?php
	class Experience
	{
		protected $_experienceId ;
		protected $_profileId ;
		protected $_period ;
		protected $_titre ;
		protected $_description ;
		protected $_tools ;
		
		public function __construct()
		{
			
		}
		
		//les getters 
		
		public function getExperienceId()
		{
			return $this->$_experienceId;
		}
		
		public function getProfileId()
		{
			return $this->$_profileId;
		}
		
		public function getPeriod()
		{
			return $this->$_period;
		}
		
		public function getTitre()
		{
			return $this->$_titre;
		}
		
		public function getDescription()
		{
			return $this->$_description;
		}
		
		public function getTools()
		{
			return $this->$_tools;
		}
		
		//les setters
		
		public function setExperienceId($experienceId)
		{
			if ($experienceId > 0)
			{
					$this->$_experienceId = $experienceId ;
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
			if(is_string($period))
			{
				$this->$_period= $period;
			}
		}
		
		public function setTitre($titre)
		{
			if(is_string($titre))
			{
				$this->$_titre= $titre;
			}
		}
		
		public function setDescription($description)
		{
			if(is_string($description))
			{
				$this->$_description= $description;
			}
		}
		
		public function setTools($tools)
		{
			$this->$_tools= $tools;
		}
	}
?>