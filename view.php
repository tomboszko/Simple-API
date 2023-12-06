<!DOCTYPE html>
<html>
<head>
  <title>Simple View</title>
</head>
<body>

  <p>Here is the data we received from the controller:</p>

  <h1><?php echo $post['title']; ?></h1>
  <p><?php echo $post['body']; ?></p>
  <p>Author: <?php echo $post['author']; ?></p>

</body>
</html>