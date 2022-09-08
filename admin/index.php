<?php 
//require 'database.php';
require 'read.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js" defer></script>

    <title>Document</title>
</head>
<body>

    <div class="sidenav">
        
        <a href="index.html"><i class="fa fa-home"></i> Home</a>
        <a href="service.html"><i class="fa fa-address-card"></i> Services</a>
        <a href="clients.html"><i class="fa fa-bell"></i> Clients</a>
        <a href="contact.html"><i class="fa fa-star"></i> Contact</a>
        <hr color="#D3D3D3" size="1" width="90%">
        <div class="bottom-sidenav">
          <hr color="#D3D3D3" size="1" width="90%">
        <a href="settings.html"><i class="fa fa-home"></i> Settings</a>
        <a href="logout.html"><i class="fa fa-address-card"></i> Logout</a>
      </div>
      </div>

      <div class="topnavbar">
        <div class="search-container">
        <form class="search-bar" action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
        <ul class="navbar-list">
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
      </ul>
    </div>
    

      <div class="main">
        <div class="content-section">
        <div class="cards">
                 <div class="card" id="card1">
                 
             <!--      <img src="images/dash1.png" alt="Avatar"> -->
                    <div class="container">
                      <h4><b>Card One</b></h4> 
                 
                      <table>
                      <tr>
                        <th>Ticket #</th>
                        <th>Priority</th>
                        <th>Description</th>
                      </tr>
                      <?php 
                         foreach($post as $item){
                          echo "<tr>";
                          echo "<td>".$item['id']."</td>";
                          echo "<td>".$item['priority']."</td>";
                          echo "<td>".$item['description']."</td>";	
                         }
                    

                        /*
                      while($row = $post->fetch(PDO::FETCH_ASSOC)) { 		
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['priority']."</td>";
                        echo "<td>".$row['description']."</td>";	}
                        */
                     //   echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
                      
                     
                  
                   // foreach($post as $item){
                     // echo "<td>".$item['id'] . $item['priority']."</td>";
                    //}
                  ?>
                  
                  </table>
                    </div>
                    </div>
             

                
                    <div class="card" id="card2">
                        <img src="images/dash1.png" alt="Avatar">
                        <div class="container">
                          <h4><b>Card Two</b></h4> 
                          <p>Architect & Engineer</p>    
                    </div>
                    </div>

                    <div class="card" id="card3">
                        <img src="images/dash1.png" alt="Avatar">
                        <div class="container">
                          <h4><b>Card Three</b></h4> 
                          <p>Architect & Engineer</p>    
                    </div>
                    </div>
                </div>

       

        <h2>Sidebar</h2>
        <p>This sidebar is of full height (100%) and always shown.</p>
        <p>Scroll down the page to see the result.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
      </div>
      </div>
</body>
</html>
