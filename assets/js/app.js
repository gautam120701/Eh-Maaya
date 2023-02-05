
function changeMenu(a){
    currentToggle(a);
	const navList = document.querySelector('.mob-menu-list');
	currentToggle(navList);
}
function currentToggle(a){a.classList.toggle("active");}

function toggleMenu(){
	document.querySelector("#mobileMenu").classList.toggle("active");
	document.querySelector("#mobileMenuList").classList.toggle("active");
}