<section class="section navbar_custom">
    <div class="head" id="head">
        <div class="hamburguer" id="hamburguer">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu-screen" id="menu-screen">
            <ul>
                <li>HOME</li>
                <li>GALERÍA</li>
                <li>CONTACTO</li>
            </ul>
        </div>
        <div class="brand">
            <img src="img/navbar/logo.png" alt="" class="logo">
        </div>
    </div>
    <div class="menupage" id="menupage">
        <ul>
            <li class=""><a href="#home">Home</a></li>
            <li class=""><a href="#galeria">Galería</a></li>
            <li class="">Contacto</li>
        </ul>
    </div>
    <div class="navbar_screen">

    </div>
</section>

<script>
var isMenuPageActive = false;


$(document).ready(function() {

    $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('#head').addClass('scrolled');
    } else {
        $('#head').removeClass('scrolled');
    }
    });

    $('#hamburguer').on('click', function() {
        handleMenuPageActivation();
    });

    $('#menupage ul li').on('click', function() {
        handleMenuPageActivation();
    });
});

function handleMenuPageActivation() {
    if(isMenuPageActive) {
        $('#menupage').removeClass('menupage_active');
        $('#hamburguer').removeClass('hamburguer_active');

    }else{
        $('#menupage').addClass('menupage_active');
        $('#hamburguer').addClass('hamburguer_active');
    }
    isMenuPageActive=!isMenuPageActive;
}

$(document).ready(function() {
    // Call the function initially
    setActiveMenuItem();

    $(window).on('scroll', function() {
        // Call the function on scroll
        setActiveMenuItem();
    });
});

function setActiveMenuItem() {
    var currentScroll = $(window).scrollTop() + ($(window).height() / 2);
    $('.content > section').each(function() {
        var contentTop = $(this).offset().top;
        var contentBottom = contentTop + $(this).outerHeight();
        if (currentScroll >= contentTop && currentScroll <= contentBottom) {
            var currentId = $(this).attr('id');
            if (currentId == 'home') {
                $('#menupage ul li:first-child').addClass('active');
                $('#menupage ul li:nth-child(2)').removeClass('active');
                $('#menupage ul li:nth-child(3)').removeClass('active');

                $('#menu-screen ul li:first-child').addClass('active');
                $('#menu-screen ul li:nth-child(2)').removeClass('active');
                $('#menu-screen ul li:nth-child(3)').removeClass('active');
            }
            if (currentId == 'galeria') {
                $('#menupage ul li:first-child').removeClass('active');
                $('#menupage ul li:nth-child(2)').addClass('active');
                $('#menupage ul li:nth-child(3)').removeClass('active');

                $('#menu-screen ul li:first-child').removeClass('active');
                $('#menu-screen ul li:nth-child(2)').addClass('active');
                $('#menu-screen ul li:nth-child(3)').removeClass('active');
            }
            if (currentId == 'contactp') {
                $('#menupage ul li:first-child').removeClass('active');
                $('#menupage ul li:nth-child(2)').removeClass('active');
                $('#menupage ul li:nth-child(3)').addClass('active');

                $('#menu-screen ul li:first-child').removeClass('active');
                $('#menu-screen ul li:nth-child(2)').removeClass('active');
                $('#menu-screen ul li:nth-child(3)').addClass('active');
            }
        }
    });
}



</script>