
<?php echo validation_errors();?>
<?php echo form_open('signup') ;?> 


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3"  value="<?php echo set_value('name'); ?>"name="name"placeholder="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="confirm_password"  value="<?php echo set_value('confirm_password'); ?>"id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
  <!-- <select>
    <?php
    foreach($roles->result_array() as $row){

      echo "<option value={$row['id']}>{$row['name']}</option>";

    }
    ?>
  </select>
   -->
  
 
</form>