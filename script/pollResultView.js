(function () {
    "use strict";

    function toggleAllParas() {
        $("p").toggle();
    }
    
    $("h2").click(toggleAllParas);
}());

