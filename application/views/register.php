</div>
<form id="registrationform" class="form-horizontal"  data-fv-framework="bootstrap"
    data-fv-icon-valid="glyphicon glyphicon-ok"
    data-fv-icon-invalid="glyphicon glyphicon-remove"
    data-fv-icon-validating="glyphicon glyphicon-refresh">
<fieldset>

<!-- Form Name -->
<legend>Registration</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Input username" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">Firstname</label>  
  <div class="col-md-4">
  <input id="fname" name="fname" type="text" placeholder="Input your firstname" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">Last name</label>  
  <div class="col-md-4">
  <input id="lname" name="lname" type="text" placeholder="lastname" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Email input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email:</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="" placeholder="email" class="form-control input-md" required="" data-fv-emailaddress="true"
                data-fv-emailaddress-message="The value is not a valid email address" >
    
  </div>
</div>



<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pwd">Password </label>
  <div class="col-md-4">
    <input id="pwd" name="pwd" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confirm password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="retypepassword" type="password" placeholder="" class="form-control input-md"  data-fv-identical="true"
                data-fv-identical-field="password"
                data-fv-identical-message="The password and its confirm are not the same" >
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="register"></label>
  <div class="col-md-4">
    <button id="register" name="register" class="btn btn-primary">Create Account</button>
  </div>
</div>

</fieldset>
</form>



</div>
