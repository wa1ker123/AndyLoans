//Opens the sidenav for mobile
function openNav() {
	document.getElementById("sidenav").style.width = "100%";
}

//Closes the sidenav
function closeNav() {
	document.getElementById("sidenav").style.width = "0";
}


/* Helper Function To add a class to one element, and remove it from all other elements.
	 @id {HTMLelement}||{string} The ID to add the unique class to.
	 @groupSelector {string} The rule to select the group of elements the unique class will be removed from
	 @uniqueClass {string} The CSS class to add to the individual element, and remove from the group.
*/

function uniqueClassToggle(id, groupSelector, uniqueClass = 'active'){

	const targetedClasses = document.querySelectorAll(`${groupSelector}`);

	for(i = 0; i < targetedClasses.length; i++){
		targetedClasses[i].classList.remove(uniqueClass);
	}

	//Tests if the id given is an element or a string of the ID to target.  Allows use of 'this' when calling function
	typeof(id) != "object" ? document.getElementById(id).classList.add(uniqueClass) : id.classList.add(uniqueClass);

}