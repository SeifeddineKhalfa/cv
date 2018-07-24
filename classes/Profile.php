<?php
	class Profile{
		
		private $_profileId ;
		private $_name
		private $_dateOfBirth;
		private $_placeOfBirth;
		private $_adresse;
		private $_phone;
		private $_email;
		private $_gitHubProfile;
		private $_description;
		
		
		public function __construct()
		{
			
		}
		
		//Les getters 
		
		public function getProfileId(){
			return $this->$_profileId;
		}
		
		public function getName(){
			return $this->$_name;
		}
		
		public function getDateOfBirth(){
			return $this->$_dateOfBirth;
		}
		
		public function getPlaceOfBirth(){
			return $this->$_placeOfBirth;
		}
		
		public function getAdresse(){
			return $this->$_adresse;
		}
		
		public function getPhone(){
			return $this->$_phone;
		}
		
		public function getEmail(){
			return $this->$_email;
		}
		
		public function getGitHubProfile(){
			return $this->$_gitHubProfile;
		}
		
		public function getDescription(){
			return $this->$_description;
		}
		
		//les setters 
		
		public function setProfileId($profileId){
			if ($profileId > 0)
			{
					$this->$_profileId = $profileId ;
			}	
		}
		
		public function setNom($nom)
		{
			if (is_string($nom))
			{
			  $this->$_nom = $nom;
			}
		}
		
		public function setDateOfBirth($dateOfBirth)
		{
			if (.....){
				$this->$_dateOfBirth = $dateOfBirth;
			}		
		}	
		
		public function setPlaceOfBirth($placeOfBirth)
		{
			if(is_string($placeOfBirth))
			{
				$this->$_placeOfBirth= $placeOfBirth;
			}
		}
		
		public function setAdreese($adresse)
		{
			if (is_string($adresse)
			{
				$this->$_adresse= $adresse;
			}
		}
		
		public function setPhone($phone)
		{
			if (##########)
			{
				$this->$_phone=$phone;
			}
		}
		
		public function setGitHubProfile($gitHubProfile)
		{
			if(is_string($gitHubProfile))
			{
				$this->$_gitHubProfile=$gitHubProfile;
			}
		}
		
		public function setDescription ($description)
		{
			if (is_string($description))
			{
				$this->$_description=$description;
			}
		}
	}
?>