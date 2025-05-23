const divv = document.getElementById("divv");

        divv.onmouseover = function() {
            divv.style.backgroundColor = "red";
            divv.style.width = "350px";
            divv.style.height = "350px";
        };

        divv.onmouseout = function() {
            divv.style.backgroundColor = "blue";
            divv.style.width = "300px";
            divv.style.height = "300px";
        };