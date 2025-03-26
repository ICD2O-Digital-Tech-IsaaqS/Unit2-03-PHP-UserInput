<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="Immaculata, ICD2O">
    <meta name="author" content="Isaaq Simon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (4)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (4)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (4)/favicon-16x16.png">
    <link rel="manifest" href="./favicon_ (4)/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>User Input with PHP</title>
  </head>
  <body>
    <?php echo "<h1>User Input in PHP</h1>" ?>
    <form action="./welcome.php" method="post" target="result">
      <label for="street-number">Street Number</label>
      <input type="number" id="street-number" placeholder="Street Number" name="street-number"><br><br>
      <label for="street-name">Street Name</label>
      <input type="text" id="street-name" placeholder="Street Name" name="street-name"><br><br>
      <input type="submit" value="Enter">
			<br><br>	
    </form>
<div id="result"></div>
      <iframe id="result" name="result">
				Your Street Number is <?php echo $_POST["street-number"]; ?> and your Street Name is <?php echo $_POST["street-name"]; ?>.
      </iframe>
  </body>
</html>