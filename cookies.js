$document.ready(function(){
    var a = new Date();
    a.setMonth(a.getMonth()+3); //per 3 muaj
    $('.yesiagree').click(function(){
        $(".stripPopUp").hide();
        Cookies.set("home-cookie",1,{expires: a});

    });
});