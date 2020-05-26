<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Hans Hotel東京</title> -->
  <title>Hans Hotel Japan</title>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <header>
    <div class="container">
        <div class="mainbg">Hans Hotel Japan</div>
    </div>
  </header>
  


  <section class="form">
    <form method="post" action="booking_insert.php" >
      <section class="guest data"> 
        <h2>BOOKING & CONTACT</h2>
        <hr>
        <ul>
        <li><label for="name">Name</label>
        <input type="text" name="name" id="name"></li>
        <li>  <label for="email">Email</label>
        <input type="email" name="email" id="email"></li>
        <li> <label for="telephone">Telephone</label>
        <input type="text" name="telephone" id="telephone"></li>
        <li>  <label for="address">Address</label>
        <input type="text" name="address" id="address"></li>
        <li>  <label for="country">Country</label>
        <input type="text" name="country" id="country"></li>
        </ul>
      </section>

      <section class="details">
        <h2>DETAILS</h2>
        <hr>
        <ul>
        <li><label for="people">People</label>
        <input type="number" name="people" id="people"></li>
        <li><label for="arrive">Arrive</label>
        <input type="date" name="arrive" id="arrive"></li>
        <li><label for="depart">Depart</label>
        <input type="date" name="depart" id="depart"></li>


        
        <li class="roomtitle">Room type</li>
        <li class="room_type">
          <div class="room">
            <label for="single">SNG</label>
            <input type="radio" name="room_type" value="single" id="single">
            <label for="twin">TWN</label>
            <input type="radio" name="room_type" value="twin" id="twin">
            <label for="trp">TRP</label>
            <input type="radio" name="room_type" value="triple" id="trp">
            <label for="quad">QUAD</label>
            <input type="radio" name="room_type" value="quad" id="quad">
          </div>
        </li>

        <li><label for="others">Others</label>
        <textarea name="others" id="others" cols="30" rows="10"></textarea></li>

        <button type="submit" class="btn">Submit</button>
        </ul>
      </section>
    </form>
  </section>

  <footer>
    <p>(c) Hans Hotel.com</p>
  </footer>
</body>
</html>