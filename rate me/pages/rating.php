<?php include('server.php') ?>

<?php


if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Rating</title>

  <link rel="stylesheet" href="../css/wow.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
  <a href="../pages/login.php"><i class="fas fa-user" style="color:white; font-size: 30px;"></i></a>
   <!-- هاذي علامه الخروج غيرت مكانها هنا -->
  <a href="index.php?logout='1'" style="color: white ;"><i  style="float:right; font-size: 35px;" class="fas fa-sign-out-alt "></i></a>
  <div class="content">
      <!-- notification message -->
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
          <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>

      <!-- logged in user information -->
      <?php if (isset($_SESSION['username'])) : ?>
        <p> <strong><?php echo $_SESSION['username']; ?></strong></p>
        
      <?php endif ?>
    </div>
  <header>
    <div class="container">
      <div class="menu-bar">
        <ul>
          <li><a href="../pages/index.php">الصفحة الرئيسية</a></li>
          <li><a href="#">التصنيفات</a>
            <div class="sub-menu">
              <ul>
                <li><a href="../pages/best.php"> افضل المطاعم</a></li>
                <li><a href="../pages/coff.php">كافيهات</a></li>
                <li><a href="../pages/fast.php">مطاعم سريعة</a></li>
                <li><a href="../pages/bre.php">فطور</a></li>
                <li><a href="../pages/classy.php">غالية</a></li>
              </ul>


            </div>
          </li>
          <li><a href="../pages/about.php">عن قيمني</a></li>

        </ul>
      </div>
    </div>
   
  </header>

<!--

  <form action="" method="post" accept-charset="utf-8">
    <fieldset>
        <legend>Review This Product</legend>    
    <p><label for="stars">Rating</label><input type="radio" name="stars"
      value="5" /> 5 
      <input type="radio" name="stars" value="4" /> 4
      <input type="radio" name="stars" value="3" /> 3 
      <input type="radio" name="stars" value="2" /> 2 
      <input type="radio" name="stars" value="1" /> 1
      </p>
    <p>
        <label for="review">Review</label><input type="text" name="review">
       </textarea>
    </p>
    <p>
        <input type="submit" name="reviewsub" value="Submit Review">
    </p>

</fieldset>
</form>

-->

  <section>
    <div class="container1">
      <div class="post">
        <div class="text">شكرا لتقيمك</div>
        <div class="edit">عدل</div>
      </div>
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="#">
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="صف تجربتك(اختياري)"></textarea>
          </div>
          <div class="btn">

            <button type="submit">ارسل</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script>
    const btn = document.querySelector("button");
    const post = document.querySelector(".post");
    const widget = document.querySelector(".star-widget");
    const editBtn = document.querySelector(".edit");
    btn.onclick = () => {
      widget.style.display = "none";
      post.style.display = "block";
      editBtn.onclick = () => {
        widget.style.display = "block";
        post.style.display = "none";
      }
      return false;
    }
  </script> 
</body>

</html>