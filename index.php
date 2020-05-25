<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hans Hotel東京</title>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
</head> -->

<body>

<div class="container">
  
  <form action="">
    <section class="guest data"> 
      <h2>BOOKING & CONTACT</h2>
      <hr>
      <ul>
      <li><label for="name">Name</label>
      <input type="text" name="" id="name"></li>
      <li>  <label for="email">Email</label>
      <input type="email" name="" id="email"></li>
      <li> <label for="telephone">Telephone</label>
      <input type="tel" name="" id="telephone"></li>
      <li>  <label for="address">Address</label>
      <input type="text" name="" id="address"></li>
      <li>  <label for="country">Country</label>
      <input type="text" name="" id="country"></li>
      </ul>
    </section>

    <section class="details">
      <h2>DETAILS</h2>
      <hr>
      <ul>
      <li> <label for="arrive">Arrive</label>
      <input type="date" name="" id="arrive">
      <label for="depart">Depart</label>
      <input type="date" name="" id="depart"></li>
      <li><label for="people">People</label>
      <input type="number" name="" id="people">
      <label for="room">Room</label>
      <select name="Room" id="room" >
        <option value="sng">SNG room</option>
        <option value="twn">TWN room</option>
        <option value="dbl">DBL room</option>
        <option value="trp">TRP room</option>
        <option value="quad">QUAD room</option>
      </select></li>
      <li> <label for="others">Others</label>
      <textarea name="" id="others" cols="30" rows="10"></textarea></li>
      <li><input type="submit" value="submit"></li>
      </ul>
    </section>
  </form>
</div>

  
      
       
 
    
  
</body>
</html>