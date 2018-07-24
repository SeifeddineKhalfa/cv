<?php 
	class Skills
	{
		private $_skillsId ;
		private $_profileId ;
		private $_langues ;
		private $_itSkills ;
		private $_socialLife;
		private $_hobbies ;
		
		public function __construct()
		{
			
		}
		
		
		//les getters
		public function getSkillsId()
		{
			return $this->$_skillsId;
		}
		
		public function getProfileId()
		{
			return $this->$_profileId;
		}
		
		public function getLangues()
		{
			return $this->$_langues;
		}
		
		public function getItSkills()
		{
			return $this->$_itSkills;
		}
		
		public function getSocialLife()
		{
			return $this->$_socialLife;
		}
		
		public function getHobbies()
		{
			return $this->$_hobbies;
		}
		
		//les setters
		
		public function setSkillsId($skillsId)
		{
			if ($skillsId > 0)
			{
				$this->$_skillsId = $skillsId ;
			}	
		}
		
		public function setProfileId($profileId)
		{
			if ($profileId > 0)
			{
					$this->$_profileId = $profileId ;
			}	
		}
		
		public function setLangues($langues)
		{
			if (is_string($langues))
			{
				$this->$_langues=$langues;
			}
		}
		
		public function setItSkills($itSkills)
		{
			if(is_string($itSkils))
			{
				$this->$_itSkills=$itSkills;
			}
		}
		
		public function setSocialLife($socialLife)
		{
			if(is_string($socialLife))
			{
				$this->$_socialLife=$socialLife;
			}
		}
		
		public function setHobbies($hobbies)
		{
			if(is_string($hobbies))
			{
				$this->$_hobbies=$hobbies;
				
			}
		}
	}
?>