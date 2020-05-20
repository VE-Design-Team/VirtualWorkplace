<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>PDF Form</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
  <body>

    <div class="container mt-5">

      <form action="makepdf-pathology.php" method="post" class="offset-md-3 col-md-6">




      <h1> create pdf</h1>

      <div class="row mb-2">

      <div class="col-md-6">
      <input type="text" name="fname" placeholder="First Name" class="form-control"required>
      </div>

      <div class="col-md-6">
      <input type="text" name="lname" placeholder="Last Name" class="form-control"required>
      </div>
      </div>

      <div class="mb-2">
      <textarea name="message" placeholder="message"></textarea>
      </div>


      <button type="submit" class="btn btn-success btn-lg btn-block">Create PDF</button>
      </form>

  </body>
</html>
