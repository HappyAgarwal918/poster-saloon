$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});



let card;

function login_signUp() {
    document.getElementById("signUp").addEventListener("submit", function (event) {
        card.style.transform = 'rotateY(0deg)';
        event.preventDefault();
    });

    card = document.getElementById('card');
}


function flip() {
    card.style.transform = 'rotateY(180deg)';
}

function openLogin() {
    window.open('login.html', '_self')
}



document.addEventListener('DOMContentLoaded', function () {
    var dropdownButtons = document.getElementsByClassName('dropdown-button');

    Array.from(dropdownButtons).forEach(function (button) {
        button.addEventListener('click', function () {
            var dropdown = this.parentNode;
            dropdown.classList.toggle('show');
        });
    });
    window.addEventListener('click', function (event) {
        if (!event.target.matches('.dropdown-button')) {
            var dropdowns = document.getElementsByClassName('dropdown');
            Array.from(dropdowns).forEach(function (dropdown) {
                dropdown.classList.remove('show');
            });
        }
    });
});



const menu = document.querySelector(".hamburger-menu");
const navbarLinks = document.querySelector(".nav-links");
u.addEventListener("click", () => {
    navbarLinks.classList.toggle("open");
});