<!DOCTYPE html>
<html>

<head>
  <title>KS3 Inclusive Practice Programme - Discussion</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
    include 'header.php';
    ?>

  <nav>
    <ul class="week-tabs">
      <form method="POST" action="discuss.php">
        <input type="submit" name="submit1" value="Week 1" style="background-color:#7EFF6A;">
        <input type="submit" name="submit2" value="Week 2" style="background-color:red;">
        <input type="submit" name="submit3" value="Week 3" style="background-color:#BE70FF;">
        <input type="submit" name="submit4" value="Week 4" style="background-color:orange;">
        <input type="submit" name="submit5" value="Week 5" style="background-color:turquoise;">
        <input type="submit" name="submit6" value="Week 6" style="background-color:#CACACA;">
    </form>
    </ul>
  </nav>

  <section id="discussion" class="discussion-section">
    <h2>Discussion</h2>

    <div class="comments">
      <h3>Comments</h3>
      <?php
      require("dbconn.php");
      session_start();

      $_SESSION['week'];
      $week;

      if ((isset($_POST['submit1']))) {
        $_SESSION['week'] = 1;
      } else if ((isset($_POST['submit2']))) {
        $_SESSION['week'] = 2;
      } else if ((isset($_POST['submit3']))) {
        $_SESSION['week'] = 3;
      } else if ((isset($_POST['submit4']))) {
        $_SESSION['week'] = 4;
      } else if ((isset($_POST['submit5']))) {
        $_SESSION['week'] = 5;
      } else if ((isset($_POST['submit6']))) {
        $_SESSION['week'] = 6;
      }

      $week = $_SESSION['week'];

      $sql = "SELECT * FROM comment WHERE week = $week";
      $result = mysqli_query($conn, $sql);

// Check if there are any rows returned
    if (mysqli_num_rows($result) > 0) {
        // Iterate over each row and create a div for each
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="comment">';
            echo '<h3>' . $row['name'] . '</h3>';
            echo '<p id="comment_text">Comment: ' . $row['comment_data'] . '</p>';
            echo '</div>';
        }
    } else {
        
    }

// Close the connection
mysqli_close($conn);

      ?>

      <!-- Add more comments and replies as needed -->

    </div>

    <div class="comment-form">
      <h3>Add a Comment</h3>
      <form method="POST" action="commentHandler.php"> 
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="comment">Comment:</label>
          <textarea id="comment" name="comment" required></textarea>
        </div>
        <input id="comment-submit" type="submit" name="submit">
      </form>
    </div>
  </section>

  <footer>
    <!-- Footer content goes here -->
  </footer>

  <script>
  var tab = document.querySelectorAll('week-tabs input');
  tab.h
    </script>

</body>

</html>