<!DOCTYPE html>
<html>
 <form name="myForm" role="form" class="form-horizontal" onsubmit="return validateForm()" action="db/insert_member.php" method="post">
   <div class="page-header">
      <h2></h2>
      <p>If you already have an account with us, please login at the login page.</p>   
   </div>


     <div class="form-group">
       <label for="fName" class="col-md-3 control-label">Salutation</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="salutation" >
       </div>
     </div>
     
     <div class="form-group">
       <label for="fName" class="col-md-3 control-label">First Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="first_name" >
       </div>
     </div>
     
     <div class="form-group">
       <label for="lName" class="col-md-3 control-label">Last Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="last_name" >
       </div>
     </div>
     <div class="form-group">
       <label for="email" class="col-md-3 control-label">Email</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="email">
       </div>
     </div>  
     
      <div class="form-group">
       <label for="cName" class="col-md-3 control-label">Company Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="company_name">
       </div>
     </div> 
     
      <div class="form-group">
       <label for="telNum" class="col-md-3 control-label">Telephone Number</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="tel_number">
       </div>
     </div> 
     
      <div class="form-group">
       <label for="dob" class="col-md-3 control-label">Date of Birth</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="dob">
       </div>
     </div> 
     
      <div class="form-group">
       <label for="wStatus" class="col-md-3 control-label">Work Status</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="work_status">
       </div>
     </div> 
     
     <div class="form-group">
       <label for="role" class="col-md-3 control-label">Role</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="role">
       </div>
     </div>


     <div class="form-group">
       <label for="password1" class="col-md-3 control-label">Password</label>
       <div class="col-md-9">
       <input type="password" class="form-control" name="password1">
       </div>
     </div>
     <div class="form-group">
       <label for="password2" class="col-md-3 control-label">Password Confirm</label>
       <div class="col-md-9">
       <input type="password" class="form-control" name="password2">
       </div>
     </div>

  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
        <!--<input type="submit" value="Submit"> -->
        <!--<input type="submit" name="submit" value="Submit" /> -->
      <button type="submit"  name="submit" value="Submit" class="btn btn-primary">Register</button> 
    </div>
  </div>
   
    
   </form> 
    
</html>
    
    
    