$(document).ready(function() {
    var bubbles = $(".bubble")
    var bubblesAreShown = false;

    $("#bubble_logo")
        .click(function() {
            if (!bubblesAreShown) {
                $("#bubble_1").show('normal', function() {
                    $("#bubble_2").show('fast', function() {
                        $("#bubble_3").show('fast', function() {
                            $("#bubble_4").show();
                        });
                    });
                });

                $(this).addClass("bubble_logo_active");
            }
            else {
                bubbles.hide('fast');
                $(this).removeClass("bubble_logo_active");
            }

            bubblesAreShown = !bubblesAreShown;
        })
});

