<?php $title = ''; ?>
<?php $description = ''; ?>
<?php require('includes/header.php'); ?>
<?php require('includes/nav.php'); ?>

  <!-- Body content -->
  <form action='sendmail.php' name='' method='post'>
    <div class="container">
      <div class="row clearfix">
        <div class="form-group col-12">
          <div class="field-label">First Name</div>
          <input type="text" name="txtFirstName" placeholder="" required pattern="[a-zA-Z]+[a-zA-Z ]+" oninvalid="this.setCustomValidity('Please enter your first name')" oninput="setCustomValidity('')"/>
        </div>

        <div class="form-group col-12">
          <div class="field-label">Last Name</div>
          <input type="text" name="txtLastName" placeholder="" required pattern="[a-zA-Z]+[a-zA-Z ]+" oninvalid="this.setCustomValidity('Please enter your last name')" oninput="setCustomValidity('')"/>
        </div>

        <div class="form-group col-12">
          <div class="field-label">Phone</div>
          <input type="tel" name="txtPhone" placeholder="" required oninvalid="this.setCustomValidity('Please enter valid phone number')" oninput="setCustomValidity('')"/>
        </div>

        <div class="form-group col-12">
          <div class="field-label">E-mail</div>
          <input type="email" name="txtEmail" placeholder="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="this.setCustomValidity('Please enter valid email')" oninput="setCustomValidity('')"/>
        </div>

        <div class="form-group col-12">
          <div class="field-label">Message</div>
          <textarea name="txtComment" placeholder="" cols="40" rows="3"></textarea>
        </div>

        <div class="form-group col-12">
          <input type="submit" value="Submit" name="submit" class="btn btn-primary" />
        </div>
      </div>
    </div>
  </form>
  <!--/Body content -->

<?php require('includes/footer.php'); ?>