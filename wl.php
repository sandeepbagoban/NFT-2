<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WL</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/search.js"></script>
</head>

<body id="<?= basename($_SERVER['PHP_SELF'], ".php")?>">
    <?php include 'inc/nav.php';?>
    <!-- Page content-->
    <div class="wrapper">
        <div class="header">
            <div class="intro">
                <h1 class="title">WHITELIST</h1>
            </div>
        </div>
        <div id="container" class="container">
            <div class="mt-5">
                <div class="whitelist-box">
                    <p>Enter your ERC-20 wallet address to check if you are WL:</p>
                    <!-- <form> -->
                        <!-- <div class="form-group"> -->
                            <input type="text" class="form-control wallet_key" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Wallet Address">
                        <!-- </div> -->
                        <button onclick="sendValue()" class="btn btn-primary">Check</button>
                    <!-- </form> -->
                </div>
                <div class="whitelist-box form">
                    <h1 class="title">ASK US A WL</h1>
                    <p>Do you think you deserve to get a WhiteList more than others?</p>

                    <p>Are you more motivated than others, more committed, and desperate to get an NFT 3877?</p>

                    <p>Then write to us here, if you can convince us you might have a chance to be selected to get a
                        Whitelist spot.</p>
                    <p>(Enter all the infos, we will manually check if you follow us)</p>

                    <form method="post" id="api_crud_form"> 
                        <div class="form-group">
                            <label for="wladdress">Your wallet address :</label>
                            <input type="text" class="form-control" id="wladdress"
                                aria-describedby="wladdress" placeholder="Enter Wallet Address">
                        </div>
                        <div class="form-group">
                            <label for="twitterid">Your TWITTER ID :</label>
                            <input type="text" class="form-control" id="twitterid"
                                aria-describedby="twitterid" placeholder="Enter Twitter ID">
                        </div>
                        <div class="form-group">
                            <label for="discordid">Your DISCORD ID :</label>
                            <input type="text" class="form-control" id="discordid"
                                aria-describedby="discordid" placeholder="Enter Discord ID">
                        </div>
                        <div class="form-group">
                            <label for="telegramid">Your TELEGRAM ID :</label>
                            <input type="text" class="form-control" id="telegramid"
                                aria-describedby="telegramid" placeholder="Enter Telegram ID">
                        </div>
                        <div class="form-group">
                            <label for="email">Your EMAIL :</label>
                            <input type="email" class="form-control" id="email"
                                aria-describedby="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="comment">Why do you deserve a WL :</label>
                            <textarea class="form-control" id="comment" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" id="saveValue" onclick="addWl()">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Open Whitelist -->
        <div class="modal_good">
            <div class="modal-content">
            <div class="top_content">
                    <img src="assets/small-logo.png" title="Logo" alt="3877">
                    <span class="close-button_b"  onclick='closeModal(2)'>×</span>
                </div>
                <h1 class="modalh1">Your wallet key is whitelisted</h1>
            </div>
        </div>

        <div class="modal_bad">
            <div class="modal-content">
                <div class="top_content">
                    <img src="assets/small-logo.png" title="Logo" alt="3877">
                    <span class="close-button_b"  onclick='closeModal(1)'>×</span>
                </div>
                <h1 class="modalh1">Your wallet key is not whitelisted</h1>
            </div>
        </div>
        <!-- Modal Open Whitelist -->

        <div class="modal_good_save">
            <div class="modal-content">
            <div class="top_content">
                    <img src="assets/small-logo.png" title="Logo" alt="3877">
                    <span class="close-button_b"  onclick='closeModal(3)'>×</span>
                </div>
                <h1 class="modalh1">Thanks a lot, we have received your detail.</h1>
            </div>
        </div>




        <div class="pagination">
            <a href="">Next step <i class="bi bi-caret-right-fill"></i></a>
            <div class="pagination-box"><a href="shop.php" target="_blank">Visit the shop</a></div>
        </div>
        <?php include 'inc/footer.php';?>
</body>

</html>