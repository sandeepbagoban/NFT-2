<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SHOP</title>
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
                <h1 class="title">SHOP</h1>         
               </div> 
            </div>    
            <div id="container" class="container">              
                <div class="mt-5">
                   <div class="alert">
                    THE SHOP IS COMING SOON…
                   </div>
                </div>
            </div>
            <div class="pagination">
             <a href="">Next step <i class="bi bi-caret-right-fill"></i></a>
             <div class="pagination-box"><a href="#" target="_blank">Read the FAQ</a></div>
            </div>
            <?php include 'inc/footer.php';?>   
    </body>
</html>
