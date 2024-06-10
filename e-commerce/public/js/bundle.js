
    var jq = jQuery.noConflict();
    // Now you can use 'jq' instead of '$' for jQuery operations
    jq(document).ready(function(){
        // Your jQuery code using 'jq' instead of '$'
        jq('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });