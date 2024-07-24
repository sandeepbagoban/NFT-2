<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FAQ</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
    <body id="<?= basename($_SERVER['PHP_SELF'], ".php")?>">
        <?php include 'inc/nav.php';?> 
        <!-- Page content-->
        <div class="wrapper">
            <div class="header">
               <div class="intro">
                <h1 class="title">FAQ</h1>         
               </div> 
            </div>    
            <div id="container" class="container">              
                <div class="mt-5">
                     <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          What is 3877 ?
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            3877 is the first NFT project centered on a real historical fact, the Satsuma rebellion that appeared in 1877 marking the decline of the samurais, built on Ethereal. 
                            3877 aims to draw inspiration from the past to create the future with a manga, an anime and a metaverse taking place in 3877, 2000 years after the disappearance of samurais.                          </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          What are our social networks ?                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            We are on Twitter and obviously Discord. Our Twitter is @3877NFT. Please find the links on our channel <a href="https://discord.com/channels/967774572495663115/968082721626791977" target="_blank">🔗3877-links</a>                          
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What is our roadmap ?
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A meaningful roadmap is the best way to express and plan the different stages of the project, especially in a world like web3 where everything moves at the speed of light. 
                            We have again been inspired by the past to create the future. Indeed, we have taken the 7 main principles of bushido to build our roadmap. 
                            You can then look at our roadmap directly on our channel <a href="https://discord.com/channels/967774572495663115/968088358213533777" target="_blank">🈴3877-roadmap  </a>                        
                          </div>
                        </div>
                      </div>
                    </div>       
                </div>
            </div>
            <div class="pagination">
             <a href="">Next step <i class="bi bi-caret-right-fill"></i></a>
             <div class="pagination-box"><a href="https://discord.gg/5MaPMn3aGr" target="_blank">Join Us On Discord</a></div>
            </div>
           <?php include 'inc/footer.php';?>   
    </body>
</html>
