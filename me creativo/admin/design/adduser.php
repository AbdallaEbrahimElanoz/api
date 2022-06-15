
<form method="post" action="functions/useradd.php">
<div class="form-group">
<label for="exampleInputEmail1">username</label1>
<input type="text" name="username" value="" class="
form-control" id="exampleInputEmail1">
</div>
<div class ="form-group">
<label for="exampleInputEmaill">password</label>
<input type="password" name="password" class="form-control"
id="exampleInputEmaill" placeholder= "Edit password">
</div>
<div class ="form-group">
<label for="exampleInputEmail1 "> Email  </label>
<input type="text" name="email" value="" class="
form-control" id="exampleInputEmail1">
</div>
<div class="form-check form-check-inline">
<input cLass= "form-check-input" type="radio" name="gender" id=
"inlineRadiol" value="0" >
<label class="form-check-label" for="inlineRadiol">Male</label>
<div class = "form-check form-check-inline">
<input class="form-check-input" type="radio" name= "gender" id=
"inlineRadio2" value="1">
<label class="form-check-label" for="inlineRadio2"> Female</label>
</div>
<div class="form-group">
<label for="exampleInputEmaill"> Address</label>
<input type="text" name="address" value="" class="
form-control" id="exampleInputEmaill">
</div>
<br>
<div class="form-group">
<label for="exampleFormControlSelect1">Privliges</label>
<select name="priv" class="form-control" id="
exampleFormControlSelect1">
<option value="0" >Admin</option>
<option value= "1" >User</option>
</select>
</div>
<button type="submit " class="btn btn-primary">Submit</button>
</form>