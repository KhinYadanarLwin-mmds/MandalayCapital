<header>
    <!-- logo division -->
    <div class="logo">
        <a href=""><img src="/img/logo.png" class="logo-image" alt="" /></a>
    </div>
    <!-- navigation panel -->
    <div class="navbar">
        <ul class="nav" id="nav">
            <li class="nav-item">
                <a href="">Home</a>
            </li>
            <li class="nav-item">
                <a href="">What we Offer?</a>
            </li>
            <li class="nav-item">
                <a href="">09 891 497256</a>
            </li>
            <li class="language">
                <div>
                    <a href="/en">
                        <img src="/img/uk.png" alt="ulflag">
                    </a>
                </div> 
                <div>
                    <a href="/mm">
                        <img src="/img/myanmar-flag-icon-free-download.jpg" alt="ulflag">
                    </a>
                </div>   
            </li>
        </ul>
    </div>
    <div class="humburger" id="humburger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="cross hide" id="cross">
        <i class="fas fa-times"></i>
    </div>
</header>

<script>
    var humburger = document.getElementById("humburger");
    var cross = document.getElementById("cross");
    var nav = document.getElementById("nav");
    humburger.onclick = function(){
        nav.classList.add("mobileview");
        humburger.classList.add("hide");
        cross.classList.remove("hide");
    }
    cross.onclick = function(){
        nav.classList.remove("mobileview");
        humburger.classList.remove("hide");
        cross.classList.add("hide");
    }
</script>