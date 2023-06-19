<hr style="color:#fff; height: 5px; margin:50px 0;">
    <footer id="foot">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="#">
                        <img src="images/icons.png" alt="">

                    </a>
                    <p class="mt-3">& copy 2023 Brandmark LLC, All Right Reserred.</p>
                </div>
                <div class="col-sm-4 text-center">
                    <h2>EMAIL US</h2>
                    <a href="mail:to">
                        comment@movieposter.com
                    </a>
                </div>
                <div class="col-sm-4 text-leftr">
                    <h2>SEE REVIEWS </h2>
                    <p>119 shop review <img src="images/star.png" alt=""></p>
                    <p>Avarege items review<img src="images/star.png" alt="">(119)</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
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
        })
    </script>
    <script>
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
    </script>
    <script>
        const menu = document.querySelector(".hamburger-menu");
        const navbarLinks = document.querySelector(".nav-links");
        u.addEventListener("click", () => {
            navbarLinks.classList.toggle("open");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    </script>
</body>

</html>