
<script>

function sembunyikanAward(w) {
    var x = document.getElementsByClassName("award-thumnail");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var z = "award-"+w;
    var y = document.getElementsByClassName(z);
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}
</script>