(function () {
    "use strict";
    function toggleAllParas() {
        $("p").toggle();
    }
    
    $("h2").click(function(){
        $(this).css('color', 'red')
    });
}());

