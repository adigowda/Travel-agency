var count = 10;
function decrement() {
    count--;
    if(count == 0) {
        window.location = 'login.php';
    }
    else {
        document.findElementById("count").innerHTML = "" + count;
        setTimeout("decrement", 1000);
    }
}
setTimeout("decrement", 1000);