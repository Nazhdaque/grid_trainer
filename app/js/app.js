// Import jQuery module (npm i jquery)
import $ from "jquery";
window.jQuery = $;
window.$ = $;

// // Import vendor jQuery plugin example (not module)
// require('~/app/libs/mmenu/dist/mmenu.js')

document.addEventListener("DOMContentLoaded", () => {
    $(".btn").click(function (e) {
        let x = $(this).attr("data-btn");
        $("html, body").animate(
            {
                scrollTop: $(`#num_${x}`).offset().top,
            },
            250
        );
    });

    $(".flex").click(function (e) {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            250
        );
    });
});
