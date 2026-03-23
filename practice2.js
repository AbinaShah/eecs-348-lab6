var pR = document.getElementById("pR");
var pG = document.getElementById("pG");
var pB = document.getElementById("pB");
var bR = document.getElementById("bR");
var bG = document.getElementById("bG");
var bB = document.getElementById("bB");
var borderWidth = document.getElementById("borderWidth");
var para = document.getElementById("dummy-paragraph");

function updateStyle() {
    var pc = "rgb(" + pR.value + "," + pG.value + "," + pB.value + ")";
    var bc = "rgb(" + bR.value + "," + bG.value + "," + bB.value + ")";
    para.style.color = pc;
    para.style.borderColor = bc;
    para.style.borderWidth = borderWidth.value + "px";
}

pR.addEventListener("input", updateStyle);
pG.addEventListener("input", updateStyle);
pB.addEventListener("input", updateStyle);
bR.addEventListener("input", updateStyle);
bG.addEventListener("input", updateStyle);
bB.addEventListener("input", updateStyle);
borderWidth.addEventListener("input", updateStyle);

updateStyle();
