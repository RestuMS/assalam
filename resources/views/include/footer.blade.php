<footer class="footer">

    <section class="box-container">

        <div class="box">
            <h3>Information</h3>
            <a href="{{ route('home') }}"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="{{ route('addmember') }}"> <i class="fas fa-angle-right"></i> Membership</a>
            {{-- <a href="about.php"> <i class="fas fa-angle-right"></i> about</a> --}}
            <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="https://assalaammarket.com/shop/"> <i class="fas fa-angle-right"></i> Belanja</a>
            {{-- <a href="wishlist.php"> <i class="fas fa-angle-right"></i> wishlist</a> --}}
            <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
            <a href="register.php"> <i class="fas fa-angle-right"></i> register</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-phone"></i> 0271 - 743333 </p>
            <!-- <p> <i class="fab fa-whatsapp"></i> 0812 2604 8447 </p> -->
            <p> <i class="fas fa-envelope"></i> assalaam.hypermarket@gmail.com </p>
            <a
                href="https://www.google.com/maps/place/Assalaam+Hypermarket/@-7.5599595,110.7598764,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7a1459d1b9f281:0xae2b9afbb1c52243!8m2!3d-7.5599595!4d110.7624513!16s%2Fg%2F11fzbhx18j?entry=ttu">
                <p> <i class="fas fa-map-marker-alt"></i> Jl. Ahmad Yani 308, Pabelan, Kec. Kartasura, Kabupaten
                    Sukoharjo, Jawa Tengah 57169 </p>
            </a>
        </div>

        <div class="box">
            <h3>Connect With Us</h3>
            <a href="https://www.facebook.com/AssalaamHypermarket"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="https://www.instagram.com/assalaamhypermarket/"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="https://api.whatsapp.com/send/?phone=6285702143972&text&type=phone_number&app_absent=0"> <i
                    class="fab fa-whatsapp"></i> Whatsapp </a>
        </div>

    </section>

    <p class="credit"> &copy; copyright @ <?= date('Y') ?> by <span>mr.Restu Ms</span> | all rights reserved! </p>

</footer>
