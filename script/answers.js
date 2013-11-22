
(function () {
    "use strict";
    /*jslint browser: true, devel: true, indent: 4, maxlen: 80 */

    // Add an item to the item list
    function addItem() {
        var list, nItems, newItem, i;
        list = document.getElementById('aList');
        nItems = list.children.length;
        newItem = document.createElement('li');
        i = nItems + 1
        if(i <= 20){
            newItem.innerHTML = "Answer" + (nItems + 1)+": " + "<input type='text' id = 'answer"+i+"' name = 'answer"+i+"' size='30'/><br />";
            list.appendChild(newItem);
        }
    }

    // Registers the event handlers on the various elements
    // Can't do this until the DOM has been built.
    function registerAllHandlers() {
        document.getElementById("addMore").onclick = addItem;
    }
    registerAllHandlers();  // The bit of code that's actually executed

// End of the anonymous function
}());
