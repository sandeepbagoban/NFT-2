




function sendValue() {
    var data='';
    var wallet_key_v = $(".wallet_key").val().toLowerCase();
    data = 'search_text=' + wallet_key_v;
    const url_search_key = "api/search_key.php";
    if (wallet_key_v) {
        $.ajax({
            url: url_search_key,
            method: "POST",
            data: data,
            dataType: 'text', async: false,
            cache: false,
            success: function (data) {
                var modal_bad = document.querySelector(".modal_bad");
                var modal_good = document.querySelector(".modal_good");
                if (data == 2) {
                    modal_bad.classList.toggle("show-modal"); 
                    document.body.style.overflow = "hidden";
                } else  {
                    modal_good.classList.toggle("show-modal"); 
                    document.body.style.overflow = "hidden";
                } 
            },
            error: function (error) {
                console.log('Error ${error}');
            }
        })
    }
}

function closeModal(e) {
    var modal_good = document.querySelector(".modal_good");
    var modal_bad = document.querySelector(".modal_bad");
    var modal_good_save = document.querySelector(".modal_good_save");
    
 
    if (e == 1) { 
        modal_bad.classList.toggle("show-modal");
        document.body.style.overflow = "auto";
    } else if (e == 3) { 
        modal_good_save.classList.toggle("show-modal");
        document.body.style.overflow = "auto";
    } else {
        modal_good.classList.toggle("show-modal");
        document.body.style.overflow = "auto";
    }
}


function addWl() {
    var objWl = {
        wladdress : $("#wladdress").val(),
        twitterid : $("#twitterid").val(),
        discordid : $("#discordid").val(),
        telegramid : $("#telegramid").val(),
        email : $("#email").val(),
        comment : $("#comment").val()
    }
    var modal_good_save = document.querySelector(".modal_good_save");

    $.ajax({
        url: 'api/add_key.php',
        type: 'post',
        data: objWl,
        success: function (data) {
            // console.log(data);
            if (data == 'good') {
                modal_good_save.classList.toggle("show-modal"); 
                document.body.style.overflow = "hidden";
                reset();
            }
        }
    });
}

function reset() { 
    $("#wladdress").val('');
    $("#twitterid").val('');
    $("#discordid").val('');
    $("#telegramid").val('');
    $("#email").val('');
    $("#comment").val('');
}