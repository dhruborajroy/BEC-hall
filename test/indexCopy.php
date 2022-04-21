<input type="text" class="sm" value="5">
<input type="text" class="sm" value="5">
<input type="text" class="sm" value="5">
<input type="text" class="sm" value="5">
<input type="text" class="sm" value="5">
<script>
function get_total() {
    var total = 0;
    var amount = document.getElementsByClassName("sm");
    for (let i = 0; i < amount.length; i++) {
        var total = total + parseInt(amount[i].value);
    }
    console.log(total);

}
</script>