<?php
  //BASE BUYBACK OFFER
  $macbookpro13in = 274.68;//Macbook air pro 13"
  
  $mac_book_air = array('MacBook Air "Core 2 Duo" 1.6 13" (Original)1.6 GHz "Core 2 Duo" (P7500)', 'MacBook Air Core 2 Duo 1.8 13" (Original)1.8 GHz Core 2 Duo (P7700)', 'MacBook Air "Core 2 Duo" 1.6 13" (NVIDIA)1.6 GHz Core 2 Duo (SL9300)', 'MacBook Air "Core 2 Duo" 1.86 13" (NVIDIA)1.86 GHz Core 2 Duo (SL9400)', 'MacBook Air "Core 2 Duo" 1.86 13" (Mid-09)1.86 GHz Core 2 Duo (SL9400)', 'MacBook Air "Core 2 Duo" 2.13 13" (Mid-09)2.13 GHz Core 2 Duo (SL9600)', 'MacBook Air "Core 2 Duo" 1.4 11" (Late 2010)1.4 GHz Core 2 Duo (SU9400)', 'MacBook Air "Core 2 Duo" 1.6 11" (Late 2010)1.6 GHz Core 2 Duo (SU9600)', 'MacBook Air "Core 2 Duo" 1.86 13" (Late 2010)1.86 GHz Core 2 Duo (SL9400)', 'MacBook Air "Core 2 Duo" 2.13 13" (Late 2010)2.13 GHz Core 2 Duo (SL9600)', 'MacBook Air "Core i5" 1.6 11" (Mid-2011)1.6 GHz Core i5 (I5-2467M)', 'MacBook Air "Core i7" 1.8 11" (Mid-2011)1.8 GHz Core i7 (I7-2677M)', 'MacBook Air "Core i5" 1.7 13" (Mid-2011)1.7 GHz Core i5 (I5-2557M)','MacBook Air "Core i7" 1.8 13" (Mid-2011)1.8 GHz Core i7 (I7-2677M)', 'MacBook Air "Core i5" 1.6 13" (Edu Only)1.6 GHz Core i5 (I5-2467M)','MacBook Air "Core i5" 1.7 11" (Mid-2012)1.7 GHz Core i5 (I5-3317U)','MacBook Air "Core i7" 2.0 11" (Mid-2012)2.0 GHz Core i7 (I7-3667U)', 'MacBook Air "Core i5" 1.8 13" (Mid-2012)1.8 GHz Core i5 (I5-3427U)', 'MacBook Air "Core i7" 2.0 13" (Mid-2012)2.0 GHz Core i7 (I7-3667U)', 'MacBook Air "Core i5" 1.3 11" (Mid-2013)1.3 GHz Core i5 (I5-4250U)', 'MacBook Air "Core i7" 1.7 11" (Mid-2013)1.7 GHz Core i7 (I7-4650U)', 'MacBook Air "Core i5" 1.3 13" (Mid-2013)1.3 GHz Core i5 (I5-4250U)', 'MacBook Air "Core i7" 1.7 13" (Mid-2013)1.7 GHz Core i7 (I7-4650U)', 'MacBook Air "Core i5" 1.4 11" (Early 2014)1.4 GHz Core i5 (I5-4260U)', 'MacBook Air "Core i7" 1.7 11" (Early 2014)1.7 GHz Core i7 (I7-4650U)', 'MacBook Air "Core i5" 1.4 13" (Early 2014)1.4 GHz Core i5 (I5-4260U)', 'MacBook Air "Core i7" 1.7 13" (Early 2014)1.7 GHz Core i7 (I7-4650U)', 'MacBook Air "Core i5" 1.6 11" (Early 2015)1.6 GHz Core i5 (I5-5250U)', 'MacBook Air "Core i7" 2.2 11" (Early 2015)2.2 GHz Core i7 (I7-5650U)', 'MacBook Air "Core i5" 1.6 13" (Early 2015)1.6 GHz Core i5 (I5-5250U)', 'MacBook Air "Core i7" 2.2 13" (Early 2015)2.2 GHz Core i7 (I7-5650U)');
?>

<!DOCTYPE html>

<html>

  <head>
  
    <meta charset = "utf-8">
    <title> MacBookPro | FairTrader </title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Roboto:400,100,700,300italic,500italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>
  
  <body>
    
    <header id="top">
      <a href="index.html" id="logo">
        <h1><img src="imgf/logo.bmp" alt="slice the price electronics" class="logo"></h1>
        <h2>SELL AND BUY APPLE PRODUCTS ! ! !</h2>
      </a>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="Sell.php" class="selected">Sell</a></li>
          <li><a href="Buy.html">Buy</a></li>
          <li><a href="About.html">About</a></li>
          <li><a href="Contact.html">Contact</a></li>
        </ul>
      </nav>
    </header>
    

    
      <div id="wrapper">
        
        <p id="pagedis">Please select the type of product you wish to sell</p>
      
      <section id="Selection">
       
        <form action="sellmacbook.html" method="post">
          
          <h1>Sell a Macbook Form</h1>
          
          <fieldset>
            <legend><span class="number">1</span> Personal info</legend>
          
          <label for="name">Name: </label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email: </label>
          <input type="email" id="mail" name="user_email">
          
          </fieldset>
          
          <fieldset>
            <legend><span class="number">2</span> Macbook info</legend>
            
          <label for="type">Select the Macbook type: </label>
          <select id="type" name="Macbook_type">
            <option value="Default">Select product</option>
            <optgroup label="Macbook Air">
              <?php
              foreach( $mac_book_air as $mac_air ){
              ?>
              <option value="Macbook_air"><?php echo $mac_air ?></option>
              <?php
              }
              ?>
            </optgroup>
            <optgroup label="Macbook Pro">
              <option value="Macbook_Pro_13">Macbook Pro 13" [base buyback - $<?php echo $macbookpro13in?>]</option>
              <option value="Macbook_Pro_15">Macbook Pro 15"</option>
            </optgroup>
          </select>
            
          <label>Condition: </label>
          <input type="radio" value="new" id="new" name="condition"><label for="new" class="light">New</label>
            <input type="radio" value="used" id="used" name="condition"><label for="used" class="light">Used</label>
            
          <label>Damages:</label>
          <input type="checkbox" value="cracked_screen" id="cracked_screen" name="damages"><label for="cracked_screen" class="chbx">Cracked screen</label>
          <input type="checkbox" value="dents" id="dents" name="damages"><label for="dents" class="chbx">Dents</label>
            <input type="checkbox" value="scratches" id="scratches" name="damages"><label for="scratches" class="chbx">Scratches</label>
            <input type="checkbox" value="microphone" id="mic" name="damages"><label for="mic" class="chbx">Hardware</label><br>
            
          <label for="bio">Please provide any additional information: </label>
          <textarea  id="bio" name="user_bio"></textarea>
          
          </fieldset>
            
          <a href="#top" id="totop">Back to Top</a>
          <button type="reset" id="reset">Clear Form</button>
          <button type="submit">Send Form!</button>
          
        </form>
        
      </section>
      
        </div>
       
      <footer id="footer">
        <a href="http://twitter.com"><img src="imgf/twitter-wrap.png" alt="Twitter Logo" id="tw"></a>
        <a href="http://facebook.com"><img src="imgf/facebook-wrap.png" alt="facebook Logo" id="fb"></a>
        <a href="About.html"><p>&copy; 2015 Slice the Price Electronics LLC.</p></a>
      </footer>
        
      
      
    
  </body>
  
  
</html>
