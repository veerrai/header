<header>
        <div class="logo">Americanairfly</div>
        <span class="hamburger"><i class="fa-solid fa-bars"></i></span>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Travel Blogs</a></li>
                <li><a href="#">Pet Policy</a></li>
                <li><a href="#">Contact Us</a></li>

                <li><a href=""><h3 class="dial"><i class="fa-light fa-phone-volume"></i> +1 (123) 4567 890</h3></a></li>
                </ul>
        </nav>
    </header>

    <script>
        // Select hamburger icon and navigation menu
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('nav ul');

        // Add event listener to toggle menu visibility
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>


