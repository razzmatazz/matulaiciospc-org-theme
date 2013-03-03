$(document).ready(function() {
    
    // TODO: use session storage? to do this only once
    //$("#top_left_spc_logo").show("slow");

    // this helps improve apparent interactives of the site
    // by expanding menu items before the new page has loaded
    $("div.menu > ul > li.page_item > a").click(function() {

        $("div.menu > ul > li.current_page_item")
            .removeClass("current_page_item");

        $("div.menu > ul > li.current_page_ancestor")
            .removeClass("current_page_ancestor");

        $(this).parent()
            .addClass("current_page_item")
            .find(".children").show();
    });

    var innerMenuAnchors = $("div.menu > ul > li.page_item ul > li > a");
    innerMenuAnchors.click(function() {
        innerMenuAnchors.removeClass("current_page_item");
        $(this).parent().addClass("current_page_item");
    });

    // bubbles at the bottom right
    //
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
                $("#bubble_4").hide('fast', function() {
                    $("#bubble_3").hide('fast', function() {
                        $("#bubble_2").hide('fast', function() {
                            $("#bubble_1").hide('fast');
                        });
                    });
                });

                $(this).removeClass("bubble_logo_active");
            }

            bubblesAreShown = !bubblesAreShown;
        });
});

