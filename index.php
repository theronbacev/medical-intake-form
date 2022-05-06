<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Pharmacy Intake Form</title>
    </head>
  <body>
    <div class="header">
      <h1>Pharmacy Intake Medication Form</h1>
    </div>
    <br>
    <br>
    <form action="validate.php" method="post">
        <div>
            <h2>Customer Information</h1>
        </div>
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">First name</label>
            <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="First name" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault02">Last name</label>
            <input type="text" name="lname" class="form-control" id="validationDefault02" placeholder="Last name" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Email</label>
            <div class="input-group">
              <input type="text" name="ema" class="form-control" id="validationDefaultUsername" placeholder="Email" aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationDefault03">City</label>
            <input type="text" name="ci" class="form-control" id="validationDefault03" placeholder="City" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault04">Province</label>
            <input type="text" name="prov" class="form-control" id="validationDefault04" placeholder="Province" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault05">Postal Code</label>
            <input type="text" name="pcode" class="form-control" id="validationDefault05" placeholder="Postal Code" required>
          </div>
        </div>
        <div>
            <h2>Doctors Information</h2>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationDefault03">Doctors Name</label>
              <input type="text" name="dname" class="form-control" id="validationDefault03" placeholder="Doctors Surname" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault05">City</label>
              <input type="text" name="dcity"class="form-control" id="validationDefault05" placeholder="Country" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault05">Country</label>
              <input type="text" name="dcountry"class="form-control" id="validationDefault05" placeholder="Country" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault05">Doctors ID</label>
              <input type="text" name="did" class="form-control" id="validationDefault05" placeholder="ID #" required>
            </div>
        </div>
        <div>
            <h2>Medication Info</h2>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefault03">Medication</label>
              <input type="text" name="med" class="form-control" id="validationDefault03" placeholder="Medication" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault04">Dosage</label>
              <input type="text" name="dos" class="form-control" id="validationDefault04" placeholder="Dosage (mg)" required>
            </div>
            <div class="col-md-1 mb-3">
                <label for="exampleFormControlSelect1">Quantity</label>
                <select class="form-control" name="quan" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
      </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>