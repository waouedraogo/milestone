<?php
   class Member {
       
      public static $membersCount = 0;
      
      protected $member_id;
      protected $salutation;
      protected $first_name;
      protected $last_name;
      protected $email; 
      protected $password1;
      protected $password2; 
      protected $company_name; 
      protected $tel_number;
      protected $dob;
      protected $work_status; 
      protected $role;
      
    public function __construct($member_id, $first_name, $last_name, $email, $password1, $password2, $company_name, $tel_number, $dob, $work_status, $role, $salutation){
        $this->member_id = $member_id;        
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email; 
        $this->password1 = $password1;
        $this->password2 = $password2;
        $this->company_name = $company_name;
        $this->tel_number = $tel_number; 
        $this->dob = $dob; 
        $this->work_status = $work_status;
        $this->role = $role;
        $this->salutation = $salutation;
        self::$membersCount++;
       
    }
    
	function checkingPassword($password1, $password2){

        if ($password1 === $password2) {
            return true;
        } else {
            return false;
        }
	}
	
  // Setting Getters
    public function getFirstName(){
        return $this->first_name;
    } 
    
  
	public function getMember_id(){
        return $this->member_id;
    } 
  
	public function getSalutation(){
        return $this->salutation;
    } 


	public function getLastName(){
        return $this->last_name;
    }     
    
	public function getEmail(){    
        return $this->email;
    }
    
	public function getPassword1(){    
        return $this->password1;
    } 
    
    public function getPassword2(){    
        return $this->password2;
    }  
    
	public function getCompanyName(){    
        return $this->company_name;
    } 
    
    public function getTelNumber(){    
        return $this->tel_number;
    } 
    
    public function getDob(){    
        return $this->dob;
    }
    
    
    public function getWork_status(){
        return $this->work_status;
    }
    
	public function getRole(){    
        return $this->role;
    }    

// Setting Setters
     
	function SetMember_id($member_id){
        $this->member_id = $member_id;
    } 
  
	function SetSalutation($salutation){
        $this->salutation = $salutation;
    } 

	function SetFirstName($first_name){
        $this->first_name = $first_name;
    } 
    
	function SetLastName($last_name){
        $this->last_name = $last_name;
    }     
    
	function SetEmail($email){    
        $this->email = $email;
    }
    
	function SetPassword1($password1){    
        $this->password1 = $password1;
    } 
    
    function SetPassword2($password2){    
        $this->password2 = $password2;
    }  
    
	function SetCompanyName($company_name){    
        $this->company_name = $company_name;
    } 
    
    function SetTelNumber($tel_number){    
        $this->tel_number = $tel_number;
    } 
    
    function SetDob($dob){    
        $this->dob = $dob;
    }  
    
    function SetWork_status($work_status){
        $this->work_status;
    }
    
	function SetRole($dob){    
        $this->role = $dob;
    } 
    
    function formatMemberInfo(){
        //return "Memebership Id: ".$this->member_id . " ". $this->first_name. " ".$this->last_name. "and email on file is" .$this->email."<br>";
        
    }

   }
?>