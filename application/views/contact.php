
</div>

<form id="contactform" class="form-horizontal"  data-fv-framework="bootstrap"
    data-fv-icon-valid="glyphicon glyphicon-ok"
    data-fv-icon-invalid="glyphicon glyphicon-remove"
    data-fv-icon-validating="glyphicon glyphicon-refresh">
<fieldset>

<!-- Form Name -->
<legend>Contact</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    
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


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Text Area</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact"></label>
  <div class="col-md-4">
    <button id="contact" name="contact" class="btn btn-primary">send</button>
  </div>
</div>

</fieldset>
</form>





</div>