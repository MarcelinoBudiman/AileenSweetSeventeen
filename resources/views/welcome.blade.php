<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sweet Seventeen Of Aileen</title>
    <meta name="title" content="Sweet Seventeen Of Aileen">
    <meta name="description" content="Sweet Seventeen Of Aileen">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/images/cover.png">
    <meta name="theme-color" content="#000000">
    <meta name="color-scheme" content="dark">
    <meta property="og:title" content="Sweet Seventeen Of Aileen">
    <meta property="og:description" content="Sweet Seventeen Of Aileen">
    <meta property="og:image" content="./assets/images/cover.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:alt" content="https://ulems.my.id/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Undangan">
    <meta property="og:url" content="https://ulems.my.id/">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://api.ulems.my.id" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://gstatic.com" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css" integrity="sha256-WAgYcAck1C1/zEl5sBl5cfyhxtLgKGdpI3oKyJffVRI=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha256-fx038NkLY4U1TCrBDiu5FWPEa9eiZu01EiLryshJbCo=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" integrity="sha256-HtsXJanqjKTc8vVQjO4YMhiqFoXkfBsjBWcX91T1jr8=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap">
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
<style media="screen">

.main {
    background-color: #000000;
}
.gallery-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    background-color: #fff;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
    width: 94%;
    margin: 0 auto;
    padding: 10px;
}
.gallery-item {
    flex-basis: 32.7%;
    margin-bottom: 6px;
    opacity: .85;
    cursor: pointer;
}
.gallery-item:hover {
    opacity: 1;
}
.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.gallery-content {
    font-size: .8em;
}

.lightbox {
    position: fixed;
    display: none;
    background-color: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    overflow: auto;
    top: 0;
    left: 0;
}
.lightbox-content {
    position: relative;
    width: 65%;
    height: 58%;

    margin: 5% auto;
    margin-top: 100px;
}
.lightbox-content img {
    border-radius: 3px;
    border: 6px solid white;
    width: 100%;
    height: 100hv;
    object-fit: cover;
}
.lightbox-prev,
.lightbox-next {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 9px;
    top: 45%;
    cursor: pointer;
}
.lightbox-prev {
    left: 0;
}
.lightbox-next {
    right: 0;
}
.lightbox-prev:hover,
.lightbox-next:hover {
    opacity: .8;
}

@media (max-width: 767px) {
    .gallery-container {
        width: 100%;
    }
    .gallery-item {
        flex-basis: 49.80%;
        margin-bottom: 3px;
    }
    .lightbox-content {
        width: 80%;
        height: 60%;
        margin: 15% auto;
    }
}
@media (max-width: 480px) {
    .gallery-item {
        flex-basis: 100%;
        margin-bottom: 1px;
    }
    .lightbox-content {
        width: 90%;
        margin: 20% auto;
    }
}

.bg-1::after {
    content: url('{{ asset('/images/bg_update_new.png') }}');
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

@media screen and (min-width: 768px) {
    #bg_cover {
        background-color: black;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        background-image: url({{ asset('images/bg_awal_desktop.png') }});
    }
    .desktop_hidden {
        display: none;
    }
    .bg_2 {
        width: 100%;
        height: ;
        background-size: cover;
        object-fit: cover;
        background-repeat: no-repeat;
        background-image: url({{ asset('images/desktop/bg_2.png') }});
    }
    #desktop-image {
        display: none;
    }
    .button_invite {
        margin-top: 40%;
        margin-left: 30%;
        top: 0;
        opacity: 0;
        left: 0;
        width: 45%;
        color: #ffffff;
    }
    .name_resize {
        width: 30%;
        margin-top: 20%;
        margin-left: -100px;"
    }
    .invited_resize {
        width: 30%;
        margin-top: -30px;
        margin-left: -100px;" 
    }
    .invite_name {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 50%;
    opacity: 0;
    margin-bottom: 6%;
    margin-right: 20%; 
    }
    .qrcode {
        width: 100%;
        padding-left: 5%;
        background-color: black;
        padding-right: 5%;
    }
    .nama_tamu {
    color: black;
    position: absolute;
    bottom: 0;
    right: 0;
    width: 50%;
    margin-bottom: 10.5%;
    margin-right: 13%; 
    }
}

/* Mobile styles using a media query */
@media screen and (max-width: 767px) {
    .name_resize {
        width: 60%;
        margin-top: 25%;
        margin-left: -100px;"
    }
     .invite_name {
        position: relative;
        top: 0;
        left: 0;
        width: 40%;
        margin-top: 30%;
        opacity: 0.0;
        margin-left: 25%;
    }
    .invited_resize {
        width: 60%;
        margin-top: -30px;
        margin-left: -100px;" 
    }
    .mobile_hidden {
        display: none;
    }
    .bg_2 {
        margin-top: -10%;
        object-fit: cover;
        background-repeat: no-repeat;
        background-size: 100%;
        background-image: url({{ asset('images/bg_2.png') }});
    }
    #bg_cover {
        background-size: 100%;
        background-image: url({{ asset('images/cover_update.png') }});
    }
}
  </style>
</head>

<body style="background-color:black;">
<main style="color: #111111;" class="scrollspy-example text-light" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-smooth-scroll="true" tabindex="0">
<div class="container container__glow" id="sscontainer">
<div class="circle-container" style="position: absolute;">
    <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
    </div>

</div>
</div>
        <section class="container" id="home" style="height: 100%; width: 100%;">
            <img src="{{ asset('/images/bg_update_new.png') }}" class="desktop_hidden" style="height: 100%; width: 100%;" alt="">
            <img src="{{ asset('/images/desktop/bg_1.png') }}" class="mobile_hidden" style="height: 100%; width: 100%;" alt="">
            <img src=" {{ asset('/images/gala.png') }}" class="desktop_hidden" style="position: absolute; top: 0; left: 0; width: 100%;" alt="" style="position: absolute;" tabindex="3">
        </section>
        <section class="container" id="home" style="height: 100%; width: 100%;">
            <div class="text-center pt-4 bg_2">
                <div class="animate-box">	
                    <img src="{{ asset('/images/name_.png') }}" class="name_resize" data-aos="fade-up" data-aos-duration="1500">
                    <br>
                    <img src="{{ asset('/images/invited.png') }}" class="invited_resize" data-aos="fade-up" data-aos-duration="1500">
                </div>
            </div>
        </section>

        <section class="container" id="home" style="height: 100%; width: 100%;">
            <div class="text-center pt-4 bg_3"  
            style="background-image: url( {{ asset('/images/bg_3.png') }});
            background-size: cover;
            height: fit-content;
            object-fit: cover;
            background-repeat: no-repeat;">
                <div class="animate-box">	
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top: 13%;position: absolute; width: 50%;" alt="" tabindex="4">
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top: 13%;margin-left: 50%; position: absolute; width: 50%; " alt="" tabindex="4">
                    <img src=" {{ asset('/images/save_date.png') }}" style="width: 90%; margin-top: 35%; filter: drop-shadow(0 0 7px rgba(255, 169, 67));" data-aos="fade-up" data-aos-duration="1500">
                    <br>
                    <img src=" {{ asset('/images/tanggal.png') }} " style="width: 80%; margin-top: 7%; position: relative;"  data-aos="fade-up" data-aos-duration="1500">                   
                </div>
                <div id="countdown" style=" 
                        display: flex;
                        position: relative;
                        margin-top: 10%;
                        justify-content: center;    
                        align-items: center; ">
                        <div id="hours" style="font-size: 40px; color: black; margin-left: 2%;">
                        </div>
                        <div id="minutes" style="margin-left: 10%; font-size: 40px; color: black;" >
                        </div>
                        <div id="seconds" style="margin-left: 10%; font-size: 40px; color: black;">
                        </div>
                </div>
            </div>
            </div>
        </section>  
        <section class="container" id="home"
            style="height: 100%; width: 100%;">
            <div class="text-center pt-4"  
            style="background-image: url({{ asset('/images/bg-5.png') }});
            background-size: cover;
            height: fit-content;
            object-fit: cover;
            background-repeat: no-repeat;">
                <div class="animate-box">	
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top: 11%;margin-left: 33%; position: absolute; width: 20%;" alt="" tabindex="4">
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top: 15%;margin-left: 38%; position: absolute; width: 20%;" alt="" tabindex="4">
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top: 11%;margin-left: 43%; position: absolute; width: 20%;" alt="" tabindex="4">

                    <img src="{{ asset('/images/venue.png') }}" style="width: 90%; margin-top: -8%; margin-bottom: 100%;" data-aos="fade-up" data-aos-duration="1500">
                </div>
                <div>
                <a href="https://www.google.com/maps/place/Atria+Hotel,+Jl.+Letjend+S.+Parman+No.87+-+89,+Purwantoro,+Blimbing,+Malang+City,+East+Java+65122/@-7.9494317,112.6392224,17z/data=!4m6!3m5!1s0x2dd629c92437ad77:0xc0b90ba04f5797d1!8m2!3d-7.9494317!4d112.6392224!16s%2Fg%2F1ptxkkjbp" target="_blank" style="text-decoration: none;background-color: transparent;">
                    <button style="background-color: transparent; border: none; color: white;"> <i class="fas fa-map-marker-alt"></i>  Atria Hotel Malang </button>
                </a>
                </div>
            </div>
        </section>

    <section class="container" id="home"
        style="height: 100%; width: 100%;">
        <div class="text-center pt-4"  
        style="background-image: url( {{ asset('/images/bg_6.png') }});
        background-size: cover;
        height: fit-content;
        object-fit: cover;
        background-repeat: no-repeat;">
            <center>
            <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top: 10%;margin-left: 29%; position: absolute; width: 40%;" alt="" tabindex="4">
                    <div id="countdown" style=" 
                        display: flex;
                        position: relative;
                        margin-top: 13%;
                        justify-content: center;    
                        align-items: center; ">
                        <div class="gallery-item" data-index="1" id="image1" style="color: black;">
                        <img src="{{ asset('/images/galery/IMG_8893.jpg') }}"  alt="">
                        </div>
                        <div class="gallery-item" data-index="2" id="image1" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_8897.jpg') }}"alt="">
                        </div>
                    </div>
                    <div id="countdown" style=" 
                        display: flex;
                        justify-content: center;  
                        padding: 5%;
                        align-items: center; ">
                        <div class="gallery-item" data-index="3" id="image2" style="color: black;">
                        <img src="{{ asset('/images/galery/IMG_8899.jpg') }}"  alt="">
                        </div>
                        <div class="gallery-item" data-index="4" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_9204.jpg') }}"alt="">
                        </div>
                        <div class="gallery-item" data-index="5" id="image2" style="color: black;">
                        <img src="{{ asset('/images/galery/IMG_9207.jpg') }}"  alt="">
                        </div>
                        <div class="gallery-item" data-index="6" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_8898.jpg') }}"alt="">
                        </div>
                    </div>
                    <div id="countdown" style=" 
                        display: flex;
                        justify-content: center;  
                        padding: 5%;
                        display: none;
                        align-items: center; ">
                        <div class="gallery-item" data-index="7" id="image2" style="color: black; ">
                        <img src="{{ asset('/images/galery/IMG_8891.jpg') }}"  alt="">
                        </div>
                        <div class="gallery-item" data-index="8" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_8894.jpg') }}"alt="">
                        </div>
                        <div class="gallery-item" data-index="9" id="image2" style="color: black;">
                        <img src="{{ asset('/images/galery/IMG_8895.jpg') }}"  alt="">
                        </div>
                        <div class="gallery-item" data-index="10" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_8896.jpg') }}"alt="">
                        </div>
                        <div class="gallery-item" data-index="11" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_8891.jpg') }}"alt="">
                        </div>
                        <div class="gallery-item" data-index="12" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_8900.jpg') }}"alt="">
                        </div>
                        <div class="gallery-item" data-index="13" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_8901.jpg') }}"alt="">
                        </div>
                        <div class="gallery-item" data-index="14" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_9203.jpg') }}"alt="">
                        </div>
                        <div class="gallery-item" data-index="15" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_9205.jpg') }}"alt="">
                        </div>
                        <div class="gallery-item" data-index="16" id="image2" style="color: black;" >
                        <img src="{{ asset('/images/galery/IMG_9206.jpg') }}"alt="">
                        </div>
                    </div>
                </div>
                </div>
        </center>
        </div>
    </section>

    <section class="container" id="home"
            style="height: 100%; width: 100%;">
            <div class="text-center pt-4"  
            style="background-image: url({{ asset('/images/bg_kahir.png') }});
            background-size: cover;
            height: fit-content;
            margin-bottom : 25%;
            object-fit: cover;
            background-repeat: no-repeat;">
                <center>
                <div class="animate-box">	
                    <img src="{{ asset('/images/guest.png') }}" style="width:80%;" data-aos="fade-up" data-aos-duration="1500">
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top: 73%;margin-left: 36%; position: absolute; width: 25%;" alt="" tabindex="4">
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top: 78%;margin-left: 30%; position: absolute; width: 25%;" alt="" tabindex="4">
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top: 78%;margin-left: 42%; position: absolute; width: 25%;" alt="" tabindex="4">
                    <img src="{{ asset('/images/thankyou.png') }}" style="width:80%; margin-top: 130%;" data-aos="fade-up" data-aos-duration="1500">
                </div>
            </center>
            </div>
        </section>
        
        <section class="m-0 p-0" id="ucapan"  style="background-color: #000000;">
            <div class="container">
            <iframe name="votar" style="display:none;"></iframe>
            <form method="POST" action="{{ url('/wishes') }}" action="about:blank">
                @csrf
                <div class="card-body shadow p-3" style="margin-top:10%; background-color: #782c24; border-radius: 40% 40% 0 0;">
                    <div class="mb-1" id="balasan"></div>
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top:-30%;;margin-left: 27%; position: absolute; width: 25%;" alt="" tabindex="4">
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top:-30%;;margin-left: 42%; position: absolute; width: 25%;" alt="" tabindex="4">
                    <img src=" {{ asset('/images/efek 1.png') }}"  class="sparkling desktop_hidden" style=" margin-top:-25%;;margin-left: 34%; position: absolute; width: 25%;" alt="" tabindex="4">
                    <img src=" {{ asset('/images/send_wishes.png') }}" style="height: 100%; width: 100%; margin-top:-20%; filter: drop-shadow(0 0 7px rgba(255, 169, 67));" alt="">
                    <div class="mb-3" >
                        <label for="formnama" class="form-label">Nama</label>
                        <input type="text" class="form-control " name="title" id="formnama" placeholder="Isikan Nama Anda" style="background-color: #ffffff;">
                    </div>
                    <div class="mb-3">
                        <label for="formpesan" class="form-label">Wishes</label>
                        <textarea class="form-control " id="formpesan" name="description" rows="4" placeholder="Tulis Ucapan & Doa" style="background-color: #ffffff;"></textarea>
                    </div>
                    <div class="d-flex">
                        <button class="flex-fill btn btn-danger btn-sm rounded-4 shadow m-1" style="display: none;"  id="batal">
                            Batal<i class="fa-solid fa-xmark ms-1"></i>
                        </button>
                        <button class="flex-fill btn btn-primary btn-sm rounded-4 shadow m-1" style="display: none;" id="kirimbalasan">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                    <div class="d-grid mb-2">
                        <button class="btn btn-primary btn-sm rounded-4 shadow" id="kirim">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                </div>
                </form>
                <div style="background-color: #782c24; padding:5%;">
                <div id="items-container">
                    <!-- Data will be displayed here -->
                </div>
                <div class="row justify-content-center">
                    <nav class="col-md-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a  style="color: #ffffff; text-decoration: none;" href="{{$data->previousPageUrl()}}"><< </a></li>
                            <span class="mx-2"></span>
                            @for ($i = 1; $i <= $data->lastPage(); $i++)
                            <li class="page-item"><a  style="color: #ffffff; text-decoration: none;" href="{{$data->url($i)}}"> <?=$i?> </a></li>
                            <span class="mx-2"></span>
                            @endfor
                            <li class="page-item"><a  style="color: #ffffff; text-decoration: none;" href="{{$data->nextPageUrl()}}"> >></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <div style="background-color: #000000; !important;">
        <img src=" {{ asset('/images/qr_code.png') }}" class="qrcode" style="height: 100%; width: 100%;" alt="">      
        </div>
    </main>
    <button type="button" id="tombol-musik" style="display: none;" class="btn btn-light btn-sm rounded-circle btn-music" onclick="play(this)" data-status="true" data-url=" {{ asset('/music/music.mp3') }}">
        <i class="fa-solid fa-circle-pause"></i>
    </button>

    <div class="loading" id="loading" style="opacity: 1;">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh !important;">
            <div class="progress w-75" role="progressbar">
                <div class="progress-bar" id="bar" style="width: 0%">0%</div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                        <img src="" class="w-100" alt="foto" id="showModalFoto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen m-0">
            <div class="modal-content m-0 p-0" id="bg_cover" style="">
            <center>
              <img class="image1 desktop_hidden" style="position: relative;
              top: 0;
              left: 0;
              width: 80%;
              " src="{{ asset('images/cover_asset.png') }}" />
              
            </center>
            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                    <div class="text-center">
                        <img class="image1 desktop_hidden" style="position: relative;
                        top: 0;
                        left: 0;
                        width: 70%;
                        " src="{{ asset('images/cover asset-dear.png') }}" />
                        <h1 class="nama_tamu">{{ $to }}</h1>
                        <div id="namatamu"></div>
                        <img class="image1 desktop_hidden" style="position: relative;
                        top: 0;
                        left: 0;
                        width: 70%;
                        " src=" {{ asset('images/cover_asset_invitation.png') }}"
                         style=" 
                        text-shadow: none;" type="button" class="btn btn-light shadow rounded-4 mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="buka()" />
                        <img class="image1 mobile_hidden invite_name" src=" {{ asset('images/cover_asset_invitation.png') }}"
                         style=" 
                        text-shadow: none;" type="button" class="btn btn-light shadow rounded-4 mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="buka()" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha256-qlPVgvl+tZTCpcxYJFdHB/m6mDe84wRr+l81VoYPTgQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" integrity="sha256-pQBbLkFHcP1cy0C8IhoSdxlm0CtcH5yJ2ki9jjgR03c=" crossorigin="anonymous"></script>
<!-- <script>
    $(document).ready(function () {
        fetchData(1); // Load initial data with page 1

        function fetchData(page) {
            $.ajax({
                url: '/api/load-data?page=' + page, // Adjust the URL to match your Laravel route
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    // Clear existing data
                    $('#items-container').empty();
                    // Populate data
                    $.each(response.data.data, function (key, item) {
                        var html = '<h4>' + item.title + '</h4>' +
                                   '<p>' + item.description + '</p>' +
                                   '<hr>';
                        $('#items-container').append(html);
                    });
                    $('#goblog').html(response.data.links);
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }

        // Handle pagination clicks
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetchData(page);
        });
    });
</script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        fetchData(1);
        function fetchData(page) {
            $.ajax({
                url: '/api/load-data?page=' + page, // Adjust the URL to match your Laravel route
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    // Clear existing data
                    $('#items-container').empty();
                    // Populate data
                    $.each(response.data.data, function (key, item) {
                        var html = '<h4>' + item.title + '</h4>' +
                                   '<p>' + item.description + '</p>' +
                                   '<hr>'
                        $('#items-container').append(html);
                    });
                    // Display pagination links
                    $('#pagination-links').html(response.data.links);
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }
        // Handle pagination clicks
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            var page = $(this).attr('href').split('page=')[1];
            fetchData(page);
        });
    });
</script>

    <script src="{{ asset('js/web.js') }}"></script>
    <script>
  // Set the target date to September 30, 2023
  const targetDate = new Date('2023-09-30T00:00:00').getTime();

  // Update the countdown every second
  const countdownInterval = setInterval(function () {
    const currentDate = new Date().getTime();
    const timeRemaining = targetDate - currentDate;

    console.log(timeRemaining);

    if (timeRemaining <= 0) {
      // Countdown has ended
      clearInterval(countdownInterval);
      document.getElementById('countdown').innerHTML = 'Countdown Ended';
    } else {
      // Calculate hours, minutes, and seconds
      const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
      const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
      // Display the countdown
      const jumlah_fixt_jamc = 24 * days + hours;
      document.getElementById('hours').innerHTML = jumlah_fixt_jamc ;
      document.getElementById('minutes').innerHTML = minutes ;
      document.getElementById('seconds').innerHTML = seconds ;
    }
  }, 1000);
const galleryItem = document.getElementsByClassName("gallery-item");
const lightBoxContainer = document.createElement("div");
const lightBoxContent = document.createElement("div");
const lightBoxImg = document.createElement("img");
const lightBoxPrev = document.createElement("div");
const lightBoxNext = document.createElement("div");

lightBoxContainer.classList.add("lightbox");
lightBoxContent.classList.add("lightbox-content");
lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

lightBoxContainer.appendChild(lightBoxContent);
lightBoxContent.appendChild(lightBoxImg);
lightBoxContent.appendChild(lightBoxPrev);
lightBoxContent.appendChild(lightBoxNext);
document.body.appendChild(lightBoxContainer);

let index = 1;

function showLightBox(n) {
    if (n > galleryItem.length) {
        index = 1;
    } else if (n < 1) {
        index = galleryItem.length;
    }
    let imageLocation = galleryItem[index-1].children[0].getAttribute("src");
    lightBoxImg.setAttribute("src", imageLocation);
}

function currentImage() {
    lightBoxContainer.style.display = "flex";
    let imageIndex = parseInt(this.getAttribute("data-index"));
    showLightBox(index = imageIndex);
}
for (let i = 0; i < galleryItem.length; i++) {
    galleryItem[i].addEventListener("click", currentImage);
}

function slideImage(n) {
    showLightBox(index += n);
}
function prevImage() {
    slideImage(-1);
}
function nextImage() {
    slideImage(1);
}
lightBoxPrev.addEventListener("click", prevImage);
lightBoxNext.addEventListener("click", nextImage);

function closeLightBox() {
    if (this === event.target) {
        lightBoxContainer.style.display = "none";
    }
}
lightBoxContainer.addEventListener("click", closeLightBox);
  
(function ($) {
  $(function () {

  });
})(jQuery);
  

</script>

</body>

</html>
