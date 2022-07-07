function onHov(This) {
    $("#" + This.id.toString()).dropdown('toggle');
};

$(function(){

    $(".logout").click(()=>{
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            window.location.href = "./";
            document.getElementsByClassName("login")[0].classList.remove("d-none");
            document.getElementsByClassName("mLogin")[0].classList.remove("d-none");
        };

        xhttp.open("POST", "logout.php");
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send();
    });
    
    $(".menuIcon.cross").hide();

    $(".menuIcon.bars").click(()=>{
        $(".menuIcon.cross").fadeIn(400);
        $(".menuIcon.bars").hide(400);
        $(".CusMenu .navbar-nav").fadeIn(400);

    });

    $(".menuIcon.cross").click(()=>{
        $(".menuIcon.cross").hide(400);
        $(".menuIcon.bars").show(400);
        $(".CusMenu .navbar-nav").fadeOut(400);
    });
});
