
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    let dropDown = document.getElementById("myDropdown");
    if (dropDown.classList.contains('invisible')){
        dropDown.classList.remove('invisible');
    }else {
        dropDown.classList.toggle('invisible');
    }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (event.target.matches('.dropbtn')) {
        console.log('fesfsef');
    }

}

document.body.onclick = function(anEvent) {
    if (anEvent.target.id.localeCompare("dropdown")) {
        let dropDown = document.getElementById("myDropdown");
        if (!dropDown.classList.contains('invisible')){
            dropDown.classList.toggle('invisible');
        }
    }

};
