var form = document.getElementById("pwForm");
var pw = document.getElementById("pw");
var pwConfirm = document.getElementById("pwConfirm");

form.addEventListener("submit", function(e) {
    e.preventDefault();

    var p = pw.value;
    var c = pwConfirm.value;

    if (p.length < 8) {
        alert("Password must be at least 8 characters long.");
        return;
    }

    if (p !== c) {
        alert("The two passwords do not match.");
        return;
    }

    alert("Two passwords matched!");
});
