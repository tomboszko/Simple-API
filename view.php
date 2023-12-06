<!DOCTYPE html>
<html>
<head>
  <title>Simple View</title>
</head>
<body>

  <p>Here is the data we received from the controller:</p>

  <h1><?php echo $posts['title']; ?></h1>
  <p><?php echo $posts['body']; ?></p>
  <p>Author: <?php echo $posts['author']; ?></p>

</body>
</html>