//Add styling to active navbar element.
//get all buttons with class of btn inside previously set button container.

if (document.getElementsByTagName("body") == "index") {
    var btns = document.getElementsByClassName("navbtn");
    var sections = document.getElementsByTagName("main")[0].getElementsByTagName("section");



    //on click.
    /*for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
    
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }
            //append " active" to current/clicked navbar item.
            this.className += " active";
        });
    }*/

    window.onscroll = function () {
        for (var i = 0; i < sections.length; i++) {
            var secTop = sections[i].offsetTop - 1;
            var secBot = sections[i].offsetTop + sections[i].offsetHeight - 1;

            if (window.scrollY >= secTop && window.scrollY < secBot) {
                btns[i].classList.add("active");
            } else {
                btns[i].classList.remove("active");
            }
        }
    }
}
else {
    console.log("no match.");
}

// validation for name field
var westernOnly = /^[A-Z ]+$/i;

//validation for phone field.
var acceptableAUMobile = /^(\(04\)|04|\+614)(-?\d){8}$/;

function validateBookingForm() {
    let name = document.forms["bookingform"]["fname"].value;
    let phone = document.forms["bookingform"]["phone"].value;

    if (!westernOnly.test(name)) {
        alert("Name must contain only western characters.");
        return false;
    }

    if (!acceptableAUMobile.test(phone)) {
        alert("Phone Number is Invalid. If you have spaces in your number, please remove them.");
        return false;
    }

}

//Pricing
//since all wednesday movies are discounted, we don't need moviecode.
var selectedDay;

function calcPrice() {
    var price = 0.00;

    selectedDay = "";

    selectedDay = document.forms["bookingform"]["day"].value.split(" ")[0];
    //console.log(selectedDay);
    //console.log(document.forms["bookingform"]["seats[STA]"].value);
    //console.log(document.forms["bookingform"]["seats[STA]"].dataset.discprice);
    //console.log(document.forms["bookingform"]["seats[STA]"].dataset.fullprice);

    // TODO figure out how to loop through seats array.
    if (selectedDay == "Wednesday") {

        price += ((document.forms["bookingform"]["seats[STA]"].value) * (document.forms["bookingform"]["seats[STA]"].dataset.discprice));

        price += ((document.forms["bookingform"]["seats[STC]"].value) * (document.forms["bookingform"]["seats[STC]"].dataset.discprice));

        price += ((document.forms["bookingform"]["seats[STP]"].value) * (document.forms["bookingform"]["seats[STP]"].dataset.discprice));

        price += ((document.forms["bookingform"]["seats[FCA]"].value) * (document.forms["bookingform"]["seats[FCA]"].dataset.discprice));

        price += ((document.forms["bookingform"]["seats[FCP]"].value) * (document.forms["bookingform"]["seats[FCP]"].dataset.discprice));

        price += ((document.forms["bookingform"]["seats[FCC]"].value) * (document.forms["bookingform"]["seats[FCC]"].dataset.discprice));

        console.log(price);

    }

    else {
        price += ((document.forms["bookingform"]["seats[STA]"].value) * (document.forms["bookingform"]["seats[STA]"].dataset.fullprice));

        price += ((document.forms["bookingform"]["seats[STC]"].value) * (document.forms["bookingform"]["seats[STC]"].dataset.fullprice));

        price += ((document.forms["bookingform"]["seats[STP]"].value) * (document.forms["bookingform"]["seats[STP]"].dataset.fullprice));

        price += ((document.forms["bookingform"]["seats[FCA]"].value) * (document.forms["bookingform"]["seats[FCA]"].dataset.fullprice));

        price += ((document.forms["bookingform"]["seats[FCP]"].value) * (document.forms["bookingform"]["seats[FCP]"].dataset.fullprice));

        price += ((document.forms["bookingform"]["seats[FCC]"].value) * (document.forms["bookingform"]["seats[FCC]"].dataset.fullprice));

        console.log(price);
    }

    console.log(document.getElementById["calculatedPrice"]);

    var dollarPrice = "$" + price.toFixed(2);

    if (price > 0) {
        document.getElementById("calculatedPrice").textContent = dollarPrice;
    }
    else {
        document.getElementById("calculatedPrice").textContent = " ";
    }
}

//checkbox code
var isChecked = true;
console.log("page loaded");
console.log(isChecked);
console.log(localStorage);

var fname = "", email = "", mobile = "";
if (typeof (Storage) !== 'undefined') {
    fname = localStorage.getItem("FullName");
    email = localStorage.getItem("Email");
    mobile = localStorage.getItem("Mobile");
}
console.log(fname);
console.log(email);

if (fname != null) document.getElementById("fname").setAttribute("value", fname);
if (email != null) document.getElementById("email").setAttribute("value", email);
if (mobile != null) document.getElementById("phone").setAttribute("value", mobile);

function clickBox() {
    if (isChecked) {
        isChecked = false;
        console.log(isChecked);
    }
    else {
        isChecked = true;
        console.log(isChecked);
    }
}

function isRememberMe() {

    console.log(localStorage);

    if (isChecked) {
        console.log("checked")
        localStorage.setItem('FullName', document.getElementById("fname").value);
        localStorage.setItem('Email', document.getElementById("email").value);
        localStorage.setItem('Mobile', document.getElementById("phone").value);
    }
    else {
        localStorage.clear();
    }
}


