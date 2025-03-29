var sidenav = document.getElementById('mySidenav');
var openBtn = document.getElementById('openBtn');
var closeBtn = document.getElementById('closeBtn');

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/*ouvrir la navigation to 250px */
function openNav() {
	sidenav.classList.add("active");
}

/*fermer la navigation to 0 */
function closeNav() {
	sidenav.classList.remove("active");
}