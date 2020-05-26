<?php
$title = ' ';
include('head.php');
?>

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


        
        <li>Room type</li>
        <li class="room_type">
          <label for="single room">SNG</label>
          <input type="radio" name="room_type" value="single room" id="single room">
          <label for="twin room">TWN</label>
          <input type="radio" name="room_type" value="twin room" id="twin room">
          <label for="trp room">TRP</label>
          <input type="radio" name="room_type" value="triple room" id="trp room">
          <label for="quad room">QUAD</label>
          <input type="radio" name="room_type" value="quadruple room" id="quad room">
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