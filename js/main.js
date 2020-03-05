/*function btn() {
	let z = document.getElementsByClassName("zem")[0];
	console.log(z);
	z.setAttribute('style','display: flex;');
	}
	*/
/*var arr = document.getElementsByTagName("div");
for (var x=0; x<arr.length; x++)
{
	arr[x].innerHTML="Solo";
}
*/


/*let arr = document.getElementsByClassName('advanse__column__col')[0];
arr.setAttribute('style', 'color: blue;')
console.log(document.getElementsByTagName('img'))*/
/*for (var i = 4; i <=7; i++) {
    (function(i) {
        setTimeout(function() { let img = document.getElementsByTagName('img') [i];
img.setAttribute('style', 'background-color: #fff')}, 300 * i);
    })(i);
}*/

 


var modal = document.getElementById('myModal');


var btn = document.getElementById("kont");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
    modal.style.display = "flex";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}