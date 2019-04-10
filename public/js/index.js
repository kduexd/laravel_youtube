$(document).ready(function() {
    var win = $(window);
    $(".videos").slice(0, 4).show();
    // Each time the user scrolls
    win.scroll(function() {
        // End of the document reached?
        // console.log(win.height(),$(document).height(),win.scrollTop())
        if ($(document).height()-win.height()-1 <= win.scrollTop()) {
            $(".videos:hidden").slice(0, 4).slideDown();
        }
    });
});