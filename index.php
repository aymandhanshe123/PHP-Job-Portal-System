<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Job Portal</title></head>
<body>
  <h1>Available Jobs</h1>
  <?php
  $result = $conn->query("SELECT * FROM jobs");
  while ($row = $result->fetch_assoc()) {
    echo "<div><h3>{$row['title']}</h3><p>{$row['description']}</p><p>Location: {$row['location']}</p></div><hr>";
  }
  ?>
</body>
</html>
