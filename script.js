$(".hamburger").click(function () {
    $(".navigation").toggleClass("active");
})
$(".hamburger").click(function () {
    $(".hamburger").fadeOut(100).fadeIn(100);
})



$(".sub").click(function () {
    event.preventDefault();
 
    if($(".name").val().length < 3)
    $(".nameMsg").text("Please enter a name")
    if($(".email").val().length ==0)
    $(".emailMsg").text("Please enter an email  address")

});
$(".name,.email").on("keyup", function () {
    console.log($(".name").val().length);
    if ($(".name").val().length >= 3) {

        $(".nameMsg").empty();
        if($(".email").val().length!=0)
        {
            $(".sub").unbind();
        }
        else
        {
            $(".sub").click(function () {
                event.preventDefault();

                $(".emailMsg").text("Please enter an email  address")
         
            });
        }

    }
    
    if ($(".name").val().length == 0) {
        
            $(".nameMsg").text("Please enter a name")
    }
    if ($(".name").val().length < 3) {
        
            $(".nameMsg").text("Please enter a name with at least 3 characters")
    }

});

