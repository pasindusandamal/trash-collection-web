<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
      .container {
        max-width: 500px;
        margin: 0 auto;
        margin-top: 50px;
      }

      .form-group label {
        font-weight: bold;
      }

      .form-control {
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>

    <div class="container">
      <h2>Registration Form</h2>
      
      <form action="gtf_member_reg.php" method="POST">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    

   
  </body>
</html>
