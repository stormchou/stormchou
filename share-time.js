var n = 5;
function countDown() {
	if (n > 0) {
		n--;
		document.getElementById('seconds').innerHTML = n;
	}
}
window.onload = function() {
	var t = setInterval("countDown()", 1000);
}