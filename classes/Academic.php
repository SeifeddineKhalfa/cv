<?php
	class Academic extends Experience 
	{
		private $_profileId ;
		private $_graduation ;
		private $_note ;
		
		public function __construct()
		{
			
		}
		
		//les getters 
		
		public function getProfileId()
		{
			return $this->$ProfileId;
		}
		
		public function getGraduation()
		{
			return $this->$_profileId
		}
		
		public function getNote()
		{
			return $this->$_note;
		}
		
		//les setters 
		
		public function setProfileId($profileId)
		{
			if ($profileId > 0)
			{
				$this->$_profileId = $profileId ;
			}	
		}
		
		public function setGraduation($graduation)
		{
			if(is_string($graduation))
			{
				$this->$_graduation= $graduation;
			}
		}
		
		public function setNote($note)
		{
			if($note > 0 && $note<20)
			{
				$this->$_note=$note;
			}
		}
	}
?>