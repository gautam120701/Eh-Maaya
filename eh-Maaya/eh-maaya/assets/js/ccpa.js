window.onload = function () {
    displayCCPA2();
    hideDropdownList();
}
function displayCCPA2() {
    var el = document.getElementById("id:agreeCaliResident");
    if (el != null) {
        el.onclick = function () {
            if (this.checked) {
                document.getElementById("displayContent").style.display = "block";
            }
        }
    }
}

function hideDropdownList(){
    var ddWrap = document.querySelectorAll(".dropdown-toggle")
    document.body.addEventListener("click", function(){
        for(var i=0;i<ddWrap.length;i++){
            ddWrap[i].setAttribute("aria-expanded", "false")
        }
    }, false);

    var ddInput = document.querySelectorAll(".__csrvp_dropdown")  
    for(var i=0;i<ddInput.length;i++){
        ddInput[i].addEventListener("click", function (ev) {
            ev.stopPropagation();
        }, false);  
    }   
}
