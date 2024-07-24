<?php
        function active($currect_page){
          $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
          $url = end($url_array);  
          if($currect_page == $url){
              echo 'active'; //class name in css 
          } 
        }
?>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/small-logo.png" title="Logo" alt="3877"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul id="navbar" class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link <?php active('manifesto.php');?>" aria-current="page" href="manifesto.php">Manifesto</a></li>
                        <li class="nav-item"><a class="nav-link <?php active('roadmap.php');?>" href="roadmap.php">Roadmap</a></li>
                        <li class="nav-item"><a class="nav-link <?php active('lore.php');?>" href="lore.php">LORE</a></li>
                        <li class="nav-item"><a class="nav-link <?php active('team.php');?>" href="team.php">TEAM</a></li>
                        <li class="nav-item"><a class="nav-link <?php active('wl.php');?>" href="wl.php">WL</a></li>
                        <li class="nav-item"><a class="nav-link <?php active('shop.php');?>" href="shop.php">SHOP</a></li>
                        <li class="nav-item"><a class="nav-link <?php active('faq.php');?>" href="faq.php">FAQ</a></li>
                    </ul>
                </div>
                <div class="portal">
                    <div class="portal_link <?php active('portal.php');?>"><a href="portal.php">Portal</a></div>
                     <div class="portal social">
                        <ul>
                           <li><a href="https://twitter.com/3877NFT" target="_blank"><img src="assets/social/twitter.png" alt="Twitter" title="Twitter"></a></li>
                            <li><a href="https://discord.gg/3877" target="_blank"><img src="assets/social/discord.png" alt="Discord" title="Discord"></a></li>
                             <li><a href="#"><img src="assets/social/medium.png" alt="Medium" title="Medium"></a></li>
                              <li><a href="#"><img src="assets/social/opensea.png" alt="OpenSea" title="OpenSea"></a></li>
                         </ul>   
                     </div>   
                </div>   
    </div>
</nav>