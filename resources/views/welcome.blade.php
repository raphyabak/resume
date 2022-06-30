<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Raphael Abayomi | Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="css/dark.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 4rem 5vw;
            padding: 0;
            list-style-type: none;
        }

        .card {
            position: relative;
            display: block;
            height: 100%;
            border-radius: calc(var(--curve) * 1px);
            overflow: hidden;
            text-decoration: none;
        }

        .card__image {
            width: 100%;
            height: auto;
        }

        .card__overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
            border-radius: calc(var(--curve) * 1px);
            background-color: var(--surface-color);
            transform: translateY(100%);
            transition: .2s ease-in-out;
        }

        .card:hover .card__overlay {
            transform: translateY(0);
        }

        .card__header {
            position: relative;
            display: flex;
            align-items: center;
            gap: 2em;
            padding: 2em;
            border-radius: calc(var(--curve) * 1px) 0 0 0;
            background-color: var(--surface-color);
            transform: translateY(-100%);
            transition: .2s ease-in-out;
        }

        .card__arc {
            width: 80px;
            height: 80px;
            position: absolute;
            bottom: 100%;
            right: 0;
            z-index: 1;
        }

        .card__arc path {
            fill: var(--surface-color);
            d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
        }

        .card:hover .card__header {
            transform: translateY(0);
        }

        .card__thumb {
            flex-shrink: 0;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .card__title {
            font-size: 1em;
            margin: 0 0 .3em;
            color: #6A515E;
        }

        .card__tagline {
            display: block;
            margin: 1em 0;
            font-family: "MockFlowFont";
            font-size: .8em;
            color: #D7BDCA;
        }

        .card__status {
            font-size: .8em;
            color: #D7BDCA;
        }

        .card__description {
            padding: 0 2em 2em;
            margin: 0;
            color: #D7BDCA;
            font-family: "MockFlowFont";
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
        }
    </style>

</head>

<body class="dark">

    <div id="preloader">
        <div class="loader_line"></div>
    </div>


    <div class="orido_tm_all_wrap" data-magic-cursor="show">

        <div class="orido_tm_mobile_menu">
            <div class="mobile_menu_inner">
                <div class="mobile_in">
                    <div class="logo">
                        <a href="#"><img src="img/logo/logo.svg" alt="" /></a>
                    </div>
                    <div class="trigger">
                        <div class="hamburger hamburger--slider">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown_inner">
                    <ul class="anchor_nav">
                        <li class="current"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        {{-- <li><a href="#service">Service</a></li> --}}
                        <li><a href="#portfolio">Portfolio</a></li>
                        {{-- <li><a href="#blog">Blog</a></li> --}}
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="orido_tm_header">
            <div class="header_in">
                <div class="logo">
                    <a href="#"><img src="img/logo/logo.svg" alt="" /></a>
                </div>
                <div class="menu">
                    <ul class="anchor_nav">
                        <li class="current"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        {{-- <li><a href="#service">Service</a></li> --}}
                        <li><a href="#portfolio">Portfolio</a></li>
                        {{-- <li><a href="#blog">Blog</a></li> --}}
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <span class="ccc"></span>
                </div>
                <div class="button"><a href="https://drive.google.com/file/d/19nL3fnNLDx8urVh_7IlATKGH7f5Kz8Dd/view"
                        target="_blank">Download
                        CV
                    </a></div>
            </div>
        </div>


        <div class="orido_tm_hero" id="home">
            <div class="container">
                <div class="content">
                    <div class="details">
                        <div class="short">
                            <h3>Raphael Abayomi
                                {{-- <img class="svg" src="img/svg/hi.svg" alt="" /> --}}
                            </h3>
                            <span class="job">Backend Developer</span>
                        </div>
                        <div class="text">
                            <p>I'm a software developer, and I like to craft solid, scalable and automated products with
                                great user experiences.</p>
                        </div>
                        <div class="buttons">
                            <div class="orido_tm_boxed_button">
                                <a class="anchor" href="#contact">Say Hello <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        class="svg replaced-svg">
                                        <path
                                            d="M14.2199 21.9352C13.0399 21.9352 11.3699 21.1052 10.0499 17.1352L9.32988 14.9752L7.16988 14.2552C3.20988 12.9352 2.37988 11.2652 2.37988 10.0852C2.37988 8.91525 3.20988 7.23525 7.16988 5.90525L15.6599 3.07525C17.7799 2.36525 19.5499 2.57525 20.6399 3.65525C21.7299 4.73525 21.9399 6.51525 21.2299 8.63525L18.3999 17.1252C17.0699 21.1052 15.3999 21.9352 14.2199 21.9352ZM7.63988 7.33525C4.85988 8.26525 3.86988 9.36525 3.86988 10.0852C3.86988 10.8052 4.85988 11.9052 7.63988 12.8252L10.1599 13.6652C10.3799 13.7352 10.5599 13.9152 10.6299 14.1352L11.4699 16.6552C12.3899 19.4352 13.4999 20.4252 14.2199 20.4252C14.9399 20.4252 16.0399 19.4352 16.9699 16.6552L19.7999 8.16525C20.3099 6.62525 20.2199 5.36525 19.5699 4.71525C18.9199 4.06525 17.6599 3.98525 16.1299 4.49525L7.63988 7.33525Z"
                                            fill="white"></path>
                                        <path
                                            d="M10.11 14.7052C9.92005 14.7052 9.73005 14.6352 9.58005 14.4852C9.29005 14.1952 9.29005 13.7152 9.58005 13.4252L13.16 9.83518C13.45 9.54518 13.93 9.54518 14.22 9.83518C14.51 10.1252 14.51 10.6052 14.22 10.8952L10.64 14.4852C10.5 14.6352 10.3 14.7052 10.11 14.7052Z"
                                            fill="white"></path>
                                    </svg></a>
                            </div>
                            <div class="orido_tm_simple_button">
                                <a class="line_effect anchor" href="#portfolio">My Works <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                        viewBox="0 0 24 25" fill="none" class="svg replaced-svg">
                                        <path
                                            d="M20.843 4.21239C20.843 3.79817 20.5072 3.46238 20.093 3.46238L13.343 3.46234C12.9288 3.46233 12.593 3.79812 12.593 4.21233C12.593 4.62655 12.9288 4.96233 13.343 4.96234L19.343 4.96238L19.3429 10.9624C19.3429 11.3766 19.6787 11.7124 20.0929 11.7124C20.5072 11.7124 20.8429 11.3766 20.8429 10.9624L20.843 4.21239ZM4.43731 20.9285L20.6233 4.74271L19.5627 3.68205L3.37665 19.8678L4.43731 20.9285Z"
                                            fill="#12141D"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="orido_tm_follow">
                    <span>Follow me:</span>
                    <ul>
                        <li><a href="https://twitter.com/RaphWebb_Inc"><img class="svg"
                                    src="img/svg/social/twitter.svg" alt="" /></a>
                        </li>
                        <li><a href="https://github.com/raphyabak"><img class="svg"
                                    src="img/svg/social/github.svg" alt="" /></a></li>
                        <li><a href="https://www.linkedin.com/in/raphael-abayomi/"><img class="svg"
                                    src="img/svg/social/linkedin.svg" alt="" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="orido_tm_down">
                <a class="anchor" href="#about"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="26px" height="100%"
                        viewBox="0 0 247 390" version="1.1"
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"
                        class="svg replaced-svg">
                        <path id="wheel" d="M123.359,79.775l0,72.843"
                            style="fill:none;stroke:#fff;stroke-width:20px;"></path>
                        <path id="mouse"
                            d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                            style="fill:none;stroke:#fff;stroke-width:20px;"></path>
                    </svg></a>
            </div>
            <div class="avatar">
                <div class="img">
                    <img src="img/hero/1.png" alt="" />
                    {{-- @include('hero') --}}
                    {{-- <div class="video_button">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"><img
                                class="anim_circle" src="img/hero/welcome.png" alt="" /><img class="svg"
                                src="img/svg/play.svg" alt="" /></a>
                    </div> --}}
                </div>
            </div>
        </div>


        <div class="orido_tm_section" id="about">
            <div class="orido_tm_about">
                <div class="about_in">
                    <div class="left">
                        {{-- <div class="box">
                            <h3 class="year">10</h3>
                            <span class="experience">Years of Experience</span>
                            <h3 class="name">Raphael</h3>
                        </div> --}}
                        <img src="img/bro.png" alt="" />
                    </div>
                    <div class="right">
                        <span class="element"><img class="svg" src="img/svg/element.svg" alt="" /></span>
                        <div class="orido_tm_main_title">
                            <h3><span>About Me</span></h3>
                        </div>
                        <div class="text">
                            <p>
                                I’m a talented, ambitious, and self-motivated software developer with a solid technical
                                background and useful skills ranging from self-discipline, teamwork, and the ability to
                                work with minimum supervision.
                                I specialize in building web applications and APIs that are elegant, intuitive, and
                                effectively communicate products to their intended users using modern web technologies
                                and practices.
                            </p>
                        </div>
                        <div class="short">
                            <div class="orido_tm_boxed_button">
                                <a href="https://drive.google.com/file/d/19nL3fnNLDx8urVh_7IlATKGH7f5Kz8Dd/view"
                                    target="_blank">Download CV <svg xmlns="http://www.w3.org/2000/svg"
                                        width="25" height="24" viewBox="0 0 25 24" fill="none"
                                        class="svg replaced-svg">
                                        <path
                                            d="M15.25 22.7502H9.25C3.82 22.7502 1.5 20.4302 1.5 15.0002V9.00024C1.5 3.57024 3.82 1.25024 9.25 1.25024H14.25C14.66 1.25024 15 1.59024 15 2.00024C15 2.41024 14.66 2.75024 14.25 2.75024H9.25C4.64 2.75024 3 4.39024 3 9.00024V15.0002C3 19.6102 4.64 21.2502 9.25 21.2502H15.25C19.86 21.2502 21.5 19.6102 21.5 15.0002V10.0002C21.5 9.59024 21.84 9.25024 22.25 9.25024C22.66 9.25024 23 9.59024 23 10.0002V15.0002C23 20.4302 20.68 22.7502 15.25 22.7502Z"
                                            fill="#12141D"></path>
                                        <path
                                            d="M22.25 10.7502H18.25C14.83 10.7502 13.5 9.42023 13.5 6.00023V2.00023C13.5 1.70023 13.68 1.42023 13.96 1.31023C14.24 1.19023 14.56 1.26023 14.78 1.47023L22.78 9.47023C22.99 9.68023 23.06 10.0102 22.94 10.2902C22.82 10.5702 22.55 10.7502 22.25 10.7502ZM15 3.81023V6.00023C15 8.58023 15.67 9.25023 18.25 9.25023H20.44L15 3.81023Z"
                                            fill="#12141D"></path>
                                        <path
                                            d="M13.25 13.7502H7.25C6.84 13.7502 6.5 13.4102 6.5 13.0002C6.5 12.5902 6.84 12.2502 7.25 12.2502H13.25C13.66 12.2502 14 12.5902 14 13.0002C14 13.4102 13.66 13.7502 13.25 13.7502Z"
                                            fill="#12141D"></path>
                                        <path
                                            d="M11.25 17.7502H7.25C6.84 17.7502 6.5 17.4102 6.5 17.0002C6.5 16.5902 6.84 16.2502 7.25 16.2502H11.25C11.66 16.2502 12 16.5902 12 17.0002C12 17.4102 11.66 17.7502 11.25 17.7502Z"
                                            fill="#12141D"></path>
                                    </svg></a>
                            </div>
                            <img src="img/sign.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="orido_tm_section">
            <div class="orido_tm_informations">
                <div class="container">
                    <div class="informations_inner">
                        <div class="left">
                            <div class="orido_tm_main_title">
                                <h3><span>My expert<br />areas</span></h3>
                            </div>
                            <div class="text">
                                <p>I'm an expert in creating web applications and APIs that effectively communicate
                                    products to their target audience by utilizing contemporary web technologies and
                                    techniques.</p>
                                {{-- <p>You can customize a template or make your own from scratch, with an immersive library
                                    at your disposal.</p> --}}
                            </div>
                            <div class="orido_tm_boxed_button">
                                <a href="https://drive.google.com/file/d/19nL3fnNLDx8urVh_7IlATKGH7f5Kz8Dd/view"
                                    target="_blank">My Resume <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="24" viewBox="0 0 25 24" fill="none" class="svg replaced-svg">
                                        <path
                                            d="M15.25 22.7502H9.25C3.82 22.7502 1.5 20.4302 1.5 15.0002V9.00024C1.5 3.57024 3.82 1.25024 9.25 1.25024H14.25C14.66 1.25024 15 1.59024 15 2.00024C15 2.41024 14.66 2.75024 14.25 2.75024H9.25C4.64 2.75024 3 4.39024 3 9.00024V15.0002C3 19.6102 4.64 21.2502 9.25 21.2502H15.25C19.86 21.2502 21.5 19.6102 21.5 15.0002V10.0002C21.5 9.59024 21.84 9.25024 22.25 9.25024C22.66 9.25024 23 9.59024 23 10.0002V15.0002C23 20.4302 20.68 22.7502 15.25 22.7502Z"
                                            fill="#12141D"></path>
                                        <path
                                            d="M22.25 10.7502H18.25C14.83 10.7502 13.5 9.42023 13.5 6.00023V2.00023C13.5 1.70023 13.68 1.42023 13.96 1.31023C14.24 1.19023 14.56 1.26023 14.78 1.47023L22.78 9.47023C22.99 9.68023 23.06 10.0102 22.94 10.2902C22.82 10.5702 22.55 10.7502 22.25 10.7502ZM15 3.81023V6.00023C15 8.58023 15.67 9.25023 18.25 9.25023H20.44L15 3.81023Z"
                                            fill="#12141D"></path>
                                        <path
                                            d="M13.25 13.7502H7.25C6.84 13.7502 6.5 13.4102 6.5 13.0002C6.5 12.5902 6.84 12.2502 7.25 12.2502H13.25C13.66 12.2502 14 12.5902 14 13.0002C14 13.4102 13.66 13.7502 13.25 13.7502Z"
                                            fill="#12141D"></path>
                                        <path
                                            d="M11.25 17.7502H7.25C6.84 17.7502 6.5 17.4102 6.5 17.0002C6.5 16.5902 6.84 16.2502 7.25 16.2502H11.25C11.66 16.2502 12 16.5902 12 17.0002C12 17.4102 11.66 17.7502 11.25 17.7502Z"
                                            fill="#12141D"></path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="filter">
                                <ul>
                                    <li><a class="current" href="#" data-tab="tab_1"><span>Skills</span><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none" class="svg replaced-svg">
                                                <path
                                                    d="M20.843 4.21239C20.843 3.79817 20.5072 3.46238 20.093 3.46238L13.343 3.46234C12.9288 3.46233 12.593 3.79812 12.593 4.21233C12.593 4.62655 12.9288 4.96233 13.343 4.96234L19.343 4.96238L19.3429 10.9624C19.3429 11.3766 19.6787 11.7124 20.0929 11.7124C20.5072 11.7124 20.8429 11.3766 20.8429 10.9624L20.843 4.21239ZM4.43731 20.9285L20.6233 4.74271L19.5627 3.68205L3.37665 19.8678L4.43731 20.9285Z"
                                                    fill="#12141D"></path>
                                            </svg></a></li>
                                    <li><a href="#" data-tab="tab_2"><span>Experience</span> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none" class="svg replaced-svg">
                                                <path
                                                    d="M20.843 4.21239C20.843 3.79817 20.5072 3.46238 20.093 3.46238L13.343 3.46234C12.9288 3.46233 12.593 3.79812 12.593 4.21233C12.593 4.62655 12.9288 4.96233 13.343 4.96234L19.343 4.96238L19.3429 10.9624C19.3429 11.3766 19.6787 11.7124 20.0929 11.7124C20.5072 11.7124 20.8429 11.3766 20.8429 10.9624L20.843 4.21239ZM4.43731 20.9285L20.6233 4.74271L19.5627 3.68205L3.37665 19.8678L4.43731 20.9285Z"
                                                    fill="#12141D"></path>
                                            </svg></a></li>
                                    <li><a href="#" data-tab="tab_3"><span>Education</span> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                viewBox="0 0 24 25" fill="none" class="svg replaced-svg">
                                                <path
                                                    d="M20.843 4.21239C20.843 3.79817 20.5072 3.46238 20.093 3.46238L13.343 3.46234C12.9288 3.46233 12.593 3.79812 12.593 4.21233C12.593 4.62655 12.9288 4.96233 13.343 4.96234L19.343 4.96238L19.3429 10.9624C19.3429 11.3766 19.6787 11.7124 20.0929 11.7124C20.5072 11.7124 20.8429 11.3766 20.8429 10.9624L20.843 4.21239ZM4.43731 20.9285L20.6233 4.74271L19.5627 3.68205L3.37665 19.8678L4.43731 20.9285Z"
                                                    fill="#12141D"></path>
                                            </svg></a></li>
                                </ul>
                                <span class="ccc"></span>
                            </div>
                            <div class="content">
                                <div id="tab_1" class="wrapper current">
                                    <div class="skillbox">
                                        <ul>
                                            <li>
                                                <div class="list_inner">
                                                    <span class="icon"><span class="in"><svg
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img" width="1.9em"
                                                                style="vertical-align: -0.125em; height: 25px; width: 25px"
                                                                height="1em" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 256 135">
                                                                <defs>
                                                                    <radialGradient id="svgIDa" cx=".837"
                                                                        cy="-125.811" r="363.057"
                                                                        gradientTransform="matrix(.463 0 0 .463 76.464 81.918)"
                                                                        gradientUnits="userSpaceOnUse">
                                                                        <stop offset="0" stop-color="#FFF" />
                                                                        <stop offset=".5" stop-color="#4C6B97" />
                                                                        <stop offset="1" stop-color="#231F20" />
                                                                    </radialGradient>
                                                                </defs>
                                                                <ellipse cx="128" cy="67.3"
                                                                    fill="url(#svgIDa)" rx="128"
                                                                    ry="67.3" />
                                                                <ellipse cx="128" cy="67.3" fill="#6181B6"
                                                                    rx="123" ry="62.3" />
                                                                <path fill="#FFF"
                                                                    d="m152.9 87.5l6.1-31.4c1.4-7.1.2-12.4-3.4-15.7c-3.5-3.2-9.5-4.8-18.3-4.8h-10.6l3-15.6c.1-.6 0-1.2-.4-1.7s-.9-.7-1.5-.7h-14.6c-1 0-1.8.7-2 1.6l-6.5 33.3c-.6-3.8-2-7-4.4-9.6c-4.3-4.9-11-7.4-20.1-7.4H52.1c-1 0-1.8.7-2 1.6L37 104.7c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.7c1 0 1.8-.7 2-1.6l3.2-16.3h10.9c5.7 0 10.6-.6 14.3-1.8c3.9-1.3 7.4-3.4 10.5-6.3c2.5-2.3 4.6-4.9 6.2-7.7l-2.6 13.5c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.6c1 0 1.8-.7 2-1.6l7.2-37h10c4.3 0 5.5.8 5.9 1.2c.3.3.9 1.5.2 5.2L134.1 87c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h15c.9-.3 1.7-1 1.9-1.9zm-67.6-26c-.9 4.7-2.6 8.1-5.1 10c-2.5 1.9-6.6 2.9-12 2.9h-6.5l4.7-24.2h8.4c6.2 0 8.7 1.3 9.7 2.4c1.3 1.6 1.6 4.7.8 8.9zm130-18.6c-4.3-4.9-11-7.4-20.1-7.4h-28.3c-1 0-1.8.7-2 1.6l-13.1 67.5c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.7c1 0 1.8-.7 2-1.6l3.2-16.3h10.9c5.7 0 10.6-.6 14.3-1.8c3.9-1.3 7.4-3.4 10.5-6.3c2.6-2.4 4.8-5.1 6.4-8c1.6-2.9 2.8-6.1 3.5-9.6c1.7-8.7.4-15.5-3.9-20.5zM200 61.5c-.9 4.7-2.6 8.1-5.1 10c-2.5 1.9-6.6 2.9-12 2.9h-6.5l4.7-24.2h8.4c6.2 0 8.7 1.3 9.7 2.4c1.4 1.6 1.7 4.7.8 8.9z" />
                                                                <path fill="#000004"
                                                                    d="M74.8 48.2c5.6 0 9.3 1 11.2 3.1c1.9 2.1 2.3 5.6 1.3 10.6c-1 5.2-3 9-5.9 11.2c-2.9 2.2-7.3 3.3-13.2 3.3h-8.9l5.5-28.2h10zM39 105h14.7l3.5-17.9h12.6c5.6 0 10.1-.6 13.7-1.8c3.6-1.2 6.8-3.1 9.8-5.9c2.5-2.3 4.5-4.8 6-7.5s2.6-5.7 3.2-9c1.6-8 .4-14.2-3.5-18.7s-10.1-6.7-18.6-6.7H52.1L39 105zm74.3-85.4h14.6l-3.5 17.9h13c8.2 0 13.8 1.4 16.9 4.3c3.1 2.9 4 7.5 2.8 13.9L151 87.1h-14.8l5.8-29.9c.7-3.4.4-5.7-.7-6.9c-1.1-1.2-3.6-1.9-7.3-1.9h-11.7l-7.5 38.7h-14.6l13.1-67.5zm76.2 28.6c5.6 0 9.3 1 11.2 3.1c1.9 2.1 2.3 5.6 1.3 10.6c-1 5.2-3 9-5.9 11.2c-2.9 2.2-7.3 3.3-13.2 3.3H174l5.5-28.2h10zM153.7 105h14.7l3.5-17.9h12.6c5.6 0 10.1-.6 13.7-1.8c3.6-1.2 6.8-3.1 9.8-5.9c2.5-2.3 4.5-4.8 6-7.5s2.6-5.7 3.2-9c1.6-8 .4-14.2-3.5-18.7s-10.1-6.7-18.6-6.7h-28.3L153.7 105z" />
                                                            </svg></span></span>
                                                    <p class="name">PHP </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <span class="icon"><span class="in"><svg
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                style="vertical-align: -0.125em; height: 25px; width: 25px"
                                                                role="img" width="0.97em" height="1em"
                                                                preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 256 264">
                                                                <path fill="#FF2D20"
                                                                    d="M255.856 59.62c.095.351.144.713.144 1.077v56.568c0 1.478-.79 2.843-2.073 3.578L206.45 148.18v54.18a4.135 4.135 0 0 1-2.062 3.579l-99.108 57.053c-.227.128-.474.21-.722.299c-.093.03-.18.087-.278.113a4.15 4.15 0 0 1-2.114 0c-.114-.03-.217-.093-.325-.134c-.227-.083-.464-.155-.68-.278L2.073 205.938A4.128 4.128 0 0 1 0 202.36V32.656c0-.372.052-.733.144-1.083c.031-.119.103-.227.145-.346c.077-.216.15-.438.263-.639c.077-.134.19-.242.283-.366c.119-.165.227-.335.366-.48c.119-.118.274-.206.408-.309c.15-.124.283-.258.453-.356h.005L51.613.551a4.135 4.135 0 0 1 4.125 0l49.546 28.526h.01c.165.104.305.232.454.351c.134.103.284.196.402.31c.145.149.248.32.371.484c.088.124.207.232.279.366c.118.206.185.423.268.64c.041.118.113.226.144.35c.095.351.144.714.145 1.078V138.65l41.286-23.773V60.692c0-.36.052-.727.145-1.072c.036-.124.103-.232.144-.35c.083-.217.155-.44.268-.64c.077-.134.19-.242.279-.366c.123-.165.226-.335.37-.48c.12-.118.269-.206.403-.309c.155-.124.289-.258.454-.356h.005l49.551-28.526a4.13 4.13 0 0 1 4.125 0l49.546 28.526c.175.103.309.232.464.35c.128.104.278.197.397.31c.144.15.247.32.37.485c.094.124.207.232.28.366c.118.2.185.423.267.64c.047.118.114.226.145.35Zm-8.115 55.258v-47.04l-17.339 9.981l-23.953 13.792v47.04l41.297-23.773h-.005Zm-49.546 85.095V152.9l-23.562 13.457l-67.281 38.4v47.514l90.843-52.3ZM8.259 39.796v160.177l90.833 52.294v-47.505L51.64 177.906l-.015-.01l-.02-.01c-.16-.093-.295-.227-.444-.34c-.13-.104-.279-.186-.392-.3l-.01-.015c-.134-.129-.227-.289-.34-.433c-.104-.14-.227-.258-.31-.402l-.005-.016c-.093-.154-.15-.34-.217-.515c-.067-.155-.154-.3-.196-.464v-.005c-.051-.196-.061-.403-.082-.604c-.02-.154-.062-.309-.062-.464V63.57L25.598 49.772l-17.339-9.97v-.006ZM53.681 8.893L12.399 32.656l41.272 23.762L94.947 32.65L53.671 8.893h.01Zm21.468 148.298l23.948-13.786V39.796L81.76 49.778L57.805 63.569v103.608l17.344-9.986ZM202.324 36.935l-41.276 23.762l41.276 23.763l41.271-23.768l-41.27-23.757Zm-4.13 54.676l-23.953-13.792l-17.338-9.981v47.04l23.948 13.787l17.344 9.986v-47.04Zm-94.977 106.006l60.543-34.564l30.264-17.272l-41.246-23.747l-47.489 27.34l-43.282 24.918l41.21 23.325Z" />
                                                            </svg></span></span>
                                                    <p class="name">Laravel </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <span class="icon"><span class="in"
                                                            style="text-align: center;"><svg
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                style="vertical-align: -0.125em; height: 25px; width: 25px"
                                                                width="500" height="500"
                                                                preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 24 24">
                                                                <path fill="black"
                                                                    d="M12.001 0C6.174 0 1.448 4.957 1.448 11.072c0 2.09.552 4.042 1.51 5.71c.25.279.544.484.965.484c1.339 0 1.268-2.065 2.607-2.065c1.34 0 1.411 2.065 2.75 2.065c1.34 0 1.266-2.065 2.606-2.065c.584 0 .928.397 1.24.84c-.221-.205-.48-.348-.82-.348c-1.196 0-1.307 1.678-2.201 2.141v4.51a1.657 1.657 0 0 0 3.312 0V16.45c.308.433.647.815 1.22.815c1.34 0 1.267-2.065 2.606-2.065c.465 0 .774.255 1.04.58a1.108 1.108 0 0 0-.43-.088c-1.159 0-1.297 1.574-2.118 2.094v2.436a1.49 1.49 0 0 0 2.98 0V16.37c.324.466.67.894 1.278.894c.796 0 1.093-.728 1.485-1.32a11.48 11.48 0 0 0 1.074-4.873C22.552 4.957 17.828 0 12 0zm-.566 2.877c2.88 0 5.214 2.784 5.214 5.807c0 3.023-1.545 5.15-5.214 5.15c-3.67 0-5.215-2.127-5.215-5.15s2.335-5.807 5.215-5.807zm-1.403 1.66a1.955 2.158 0 0 0-1.955 2.158a1.955 2.158 0 0 0 1.955 2.158a1.955 2.158 0 0 0 1.955-2.158a1.955 2.158 0 0 0-1.955-2.158zm-.326.664a.978.996 0 0 1 .979.996a.978.996 0 0 1-.979.996a.978.996 0 0 1-.977-.996a.978.996 0 0 1 .977-.996zm-2.95 10.492c-1.074 0-1.272 1.355-1.95 1.965v1.782a1.49 1.49 0 0 0 2.98 0v-3.182c-.264-.324-.577-.564-1.03-.564Z" />
                                                            </svg></span></span>
                                                    <p class="name">Livewire</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <span class="icon"><span class="in"><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                style="vertical-align: -0.125em; height: 25px; width: 25px"
                                                                aria-hidden="true" role="img" width="1em"
                                                                height="1em" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M18.5 9.51a4.22 4.22 0 0 1-1.91-1.34A5.77 5.77 0 0 0 12 6a4.72 4.72 0 0 0-5 4a3.23 3.23 0 0 1 3.5-1.49a4.32 4.32 0 0 1 1.91 1.35A5.77 5.77 0 0 0 17 12a4.72 4.72 0 0 0 5-4a3.2 3.2 0 0 1-3.5 1.51zm-13 4.98a4.22 4.22 0 0 1 1.91 1.34A5.77 5.77 0 0 0 12 18a4.72 4.72 0 0 0 5-4a3.23 3.23 0 0 1-3.5 1.49a4.32 4.32 0 0 1-1.91-1.35A5.8 5.8 0 0 0 7 12a4.72 4.72 0 0 0-5 4a3.2 3.2 0 0 1 3.5-1.51z" />
                                                            </svg></span></span>
                                                    <p class="name">Tailwind CSS</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <span class="icon"><span class="in"><svg
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                style="vertical-align: -0.125em; height: 25px; width: 25px"
                                                                role="img" width="2.17em" height="1em"
                                                                preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 256 118">
                                                                <path fill="#77C1D2"
                                                                    d="M199.111 0L256 56.639l-56.889 56.64l-56.889-56.64z" />
                                                                <path fill="#2D3441"
                                                                    d="m56.889 0l117.938 117.421H61.049L0 56.639z" />
                                                            </svg></span></span>
                                                    <p class="name">Alpine JS</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <span class="icon"><span class="in"><svg
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                style="vertical-align: -0.125em; height: 25px; width: 25px"
                                                                role="img" width="1.16em" height="1em"
                                                                preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 256 221">
                                                                <path fill="#41B883"
                                                                    d="M204.8 0H256L128 220.8L0 0h97.92L128 51.2L157.44 0h47.36Z" />
                                                                <path fill="#41B883"
                                                                    d="m0 0l128 220.8L256 0h-51.2L128 132.48L50.56 0H0Z" />
                                                                <path fill="#35495E"
                                                                    d="M50.56 0L128 133.12L204.8 0h-47.36L128 51.2L97.92 0H50.56Z" />
                                                            </svg></span></span>
                                                    <p class="name">Vue JS</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <span class="icon"><span class="in"><svg
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img" width="1em" height="1em"
                                                                style="vertical-align: -0.125em; height: 25px; width: 25px"
                                                                preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 32 32">
                                                                <path fill="#f5de19"
                                                                    d="M18.774 19.7a3.727 3.727 0 0 0 3.376 2.078c1.418 0 2.324-.709 2.324-1.688c0-1.173-.931-1.589-2.491-2.272l-.856-.367c-2.469-1.052-4.11-2.37-4.11-5.156c0-2.567 1.956-4.52 5.012-4.52A5.058 5.058 0 0 1 26.9 10.52l-2.665 1.711a2.327 2.327 0 0 0-2.2-1.467a1.489 1.489 0 0 0-1.638 1.467c0 1.027.636 1.442 2.1 2.078l.856.366c2.908 1.247 4.549 2.518 4.549 5.376c0 3.081-2.42 4.769-5.671 4.769a6.575 6.575 0 0 1-6.236-3.5ZM6.686 20c.538.954 1.027 1.76 2.2 1.76c1.124 0 1.834-.44 1.834-2.15V7.975h3.422v11.683c0 3.543-2.078 5.156-5.11 5.156A5.312 5.312 0 0 1 3.9 21.688Z" />
                                                            </svg></span></span>
                                                    <p class="name">JavaScript </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <span class="icon"><span class="in"><svg
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                style="vertical-align: -0.125em; height: 25px; width: 25px"
                                                                width="1em" height="1em"
                                                                preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M13.301 5.601c-.628-1.528-.54-3.247.367-4.63L14.346 0c-1.254 2.35-.06 5.236 1.86 6.749a6.343 6.343 0 0 0 1.698.95c.164.06.35.124.52.167c2.146.54 3.895.167 4.936-1.389c-.032.048-.073.124-.125.22c-.464.86-1.822 3.377-5.76 2.587c-.075-.015-.147-.04-.219-.063l-.064-.022l-.046-.015a2.119 2.119 0 0 0-.064-.021a5.8 5.8 0 0 1-.174-.063c-1.585-.604-2.944-1.876-3.607-3.499Z" />
                                                                <path fill="currentColor"
                                                                    d="M8.12 2.966c-1.537 2.295-1.453 5.368-.254 7.796a10.242 10.242 0 0 0 .762 1.301c.209.313.439.66.708.902c.111.127.227.25.345.371l.068.07l.023.023a10.22 10.22 0 0 0 .367.353l.001.001l.002.002a10.623 10.623 0 0 0 .465.397l.04.032c.14.112.283.222.43.327l.006.004l.007.005c.047.034.095.067.143.099l.053.036a3.109 3.109 0 0 1 .093.064c.105.07.211.137.319.203l.03.017l.015.01a11.466 11.466 0 0 0 .351.201l.031.016l.04.022c.052.028.104.057.158.084l.03.015a9.941 9.941 0 0 0 .47.224l.032.013a10.315 10.315 0 0 0 .451.186l.03.011c.103.04.206.076.31.112l.052.018l.088.029c.039.012.078.026.116.039c.109.038.218.075.332.095C22.168 17.408 24 11.068 24 11.068c-1.651 2.468-4.849 3.646-8.261 2.726a9.54 9.54 0 0 1-.45-.135a2.811 2.811 0 0 1-.12-.04l-.015-.005a8.82 8.82 0 0 1-.314-.112l-.003-.002a10.08 10.08 0 0 1-.512-.21l-.056-.025a9.272 9.272 0 0 1-.58-.287l-.042-.022l-.12-.064a9.64 9.64 0 0 1-.325-.19a10.318 10.318 0 0 1-.62-.41a10.976 10.976 0 0 1-.429-.326l-.035-.029a6.304 6.304 0 0 1-.061-.05c-1.494-1.224-2.678-2.897-3.24-4.793c-.59-1.968-.463-4.176.559-5.968L8.12 2.966Z" />
                                                                <path fill="currentColor"
                                                                    d="M1.524 5.637C-.6 8.807-.336 12.932 1.287 16.3c.03.065.063.129.095.192l.024.048l.03.059a2.987 2.987 0 0 0 .08.155l.013.025l.07.13l.015.027c.05.092.102.184.155.276l.017.03a9.464 9.464 0 0 0 .251.413l.018.03l.059.093c.084.13.17.261.26.39v.001a.085.085 0 0 0 .007.009l.024.033l.02.028c.078.11.157.22.238.328l.09.118a18.083 18.083 0 0 0 .608.746l.006.007l.005.005l.007.008a15.627 15.627 0 0 0 .658.697l.03.03l.071.07a12.947 12.947 0 0 0 .346.326l.033.03l.026.022a18.342 18.342 0 0 0 .38.33l.056.047c.085.07.171.14.258.208l.137.109c.096.073.192.145.289.215l.016.012l.09.066l.028.02c.088.064.177.124.267.184l.014.01a5.661 5.661 0 0 1 .12.083a15.577 15.577 0 0 0 .507.319l.054.032a14.516 14.516 0 0 0 .459.26l.053.029l.059.032c.059.032.117.064.177.095l.025.012l.03.015l.034.017c.02.01.041.02.062.032c.124.061.248.121.374.18l.047.021l.032.015a13.238 13.238 0 0 0 .953.39l.01.003l.042.016a13.91 13.91 0 0 0 .69.228c.116.039.233.077.353.1c10.277 1.946 13.262-6.41 13.262-6.41c-2.507 3.39-6.957 4.285-11.174 3.289a5.368 5.368 0 0 1-.47-.137l-.118-.037c-.152-.048-.303-.1-.453-.153l-.062-.023c-.135-.05-.267-.1-.4-.154l-.112-.046a12.71 12.71 0 0 1-.431-.186l-.046-.02a17.296 17.296 0 0 1-.404-.194l-.041-.022a5.56 5.56 0 0 1-.064-.031l-.214-.113l-.068-.036a6.057 6.057 0 0 0-.067-.036l-.12-.066c-.114-.063-.226-.13-.338-.197l-.043-.025l-.07-.04a16.203 16.203 0 0 1-.516-.332l-.043-.03a12.657 12.657 0 0 1-1.225-.929a15.269 15.269 0 0 1-.352-.307l-.016-.015a16.412 16.412 0 0 1-.448-.428a11.175 11.175 0 0 1-.25-.255l-.034-.034a13.54 13.54 0 0 1-.38-.414l-.006-.006l-.002-.003c-.106-.12-.21-.244-.312-.368l-.082-.101a13.975 13.975 0 0 1-.307-.395c-.088-.12-.175-.238-.26-.359c-2.34-3.314-3.181-7.886-1.31-11.64L1.524 5.637Z" />
                                                            </svg></span></span>
                                                    <p class="name">JQuery </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <span class="icon"><span class="in"><svg
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                style="vertical-align: -0.125em; height: 25px; width: 25px"
                                                                width="1.47em" height="1em"
                                                                preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 512 349">
                                                                <path fill="#00758F"
                                                                    d="m152.31 230.297l15.56 50.487c3.496 11.463 4.954 19.465 4.37 24.026c8.51-22.792 14.456-47.63 17.839-74.513h18.71c-8.045 43.766-18.656 75.57-31.827 95.41c-10.262 15.289-21.504 22.933-33.746 22.933c-3.264 0-7.288-.986-12.063-2.944v-10.55c2.333.342 5.07.525 8.218.525c5.711 0 10.314-1.583 13.816-4.742c4.193-3.849 6.292-8.175 6.292-12.97c0-3.274-1.637-9.993-4.896-20.157l-21.68-67.505h19.406ZM33.223 199.266l28.5 86.956h.176l28.675-86.956h23.428c5.13 43.124 8.16 82.581 9.09 118.346H103.34c-.695-33.433-2.62-64.871-5.768-94.32H97.4l-30.078 94.32H52.28l-29.896-94.32h-.176c-2.218 28.282-3.614 59.72-4.196 94.32H0c1.164-42.08 4.077-81.525 8.739-118.346h24.485Z" />
                                                                <path fill="#F29111"
                                                                    d="M352.498 197.51c30.657 0 45.986 19.586 45.986 58.739c0 21.276-4.61 37.347-13.821 48.204c-1.66 1.984-3.495 3.698-5.427 5.286l21.695 10.727l-.021-.001l-7.703 13.302l-28.253-16.485c-4.683 1.387-9.836 2.08-15.451 2.08c-15.053 0-26.297-4.387-33.731-13.15c-8.16-9.694-12.238-24.955-12.238-45.757c0-21.156 4.602-37.166 13.816-48.037c8.392-9.944 20.11-14.909 35.148-14.909Zm-93.88.172c10.957 0 20.92 2.932 29.894 8.775l-4.558 10.157c-7.679-3.264-15.25-4.903-22.716-4.903c-6.058 0-10.726 1.458-13.98 4.392c-3.272 2.908-5.296 6.65-5.296 11.212c0 7.01 4.994 13.089 14.215 18.225a816.32 816.32 0 0 1 9.031 5.011l.688.387l.345.194l.689.387l.344.194l.688.388c6.98 3.935 13.548 7.691 13.548 7.691c9.22 6.545 13.816 13.523 13.816 25.016c0 10.037-3.678 18.276-11.01 24.723c-7.337 6.418-17.194 9.636-29.538 9.636c-11.545 0-22.734-3.704-33.572-11.05l5.07-10.166c9.327 4.675 17.767 7.01 25.346 7.01c7.108 0 12.672-1.587 16.697-4.721c4.017-3.157 6.424-7.56 6.424-13.143c0-7.027-4.888-13.034-13.855-18.073a897.982 897.982 0 0 1-8.395-4.697l-.687-.389c-1.262-.713-2.533-1.435-3.778-2.142l-.675-.384c-6.055-3.444-11.29-6.453-11.29-6.453c-8.964-6.557-13.459-13.592-13.459-25.184c0-9.587 3.352-17.336 10.046-23.231c6.71-5.908 15.367-8.862 25.968-8.862Zm175.895 1.584v103.788h37.238v14.558h-56.124V199.266h18.886Zm57.93 103.833v2.46h-4.094v12.04h-3.13v-12.04h-4.253v-2.46h11.478Zm7.56 0l3.931 9.884l3.611-9.884h4.437v14.5h-2.95v-11.035l-4.11 11.035h-2.127l-4.117-11.035h-.158v11.035h-2.791v-14.5h4.275ZM350.57 212.064c-18.066 0-27.104 14.91-27.104 44.71c0 17.07 2.395 29.448 7.176 37.163c4.428 7.14 11.363 10.703 20.806 10.703c18.066 0 27.103-15.026 27.103-45.064c0-16.831-2.395-29.103-7.17-36.822c-4.433-7.124-11.365-10.69-20.81-10.69Z" />
                                                                <path fill="#00758F"
                                                                    d="M303.218 7.333c5.993-14.726 26.948-3.574 35.08 1.57c1.993 1.287 4.279 4.006 6.564 5.011c3.565.14 7.127.419 10.698.568c6.698 1.574 12.972 2.86 18.25 5.866c24.528 14.445 40.495 29.165 55.19 53.479c3.14 5.15 4.709 10.723 7.274 16.296c3.56 8.307 7.56 17.027 11.692 24.882c1.85 3.724 3.281 7.865 5.85 11.01c1.003 1.438 3.852 1.862 5.555 2.721c4.708 2.437 10.412 4.287 14.84 7.147c8.269 5.156 16.264 11.3 23.532 17.59c2.709 2.428 4.555 5.865 7.136 8.433v1.296c-2.291.703-4.574 1.423-6.859 2c-4.991 1.282-9.412.992-14.254 2.275c-2.992.868-6.707 2.013-9.845 2.304l.29.292c1.846 5.275 11.834 9.565 16.402 12.72c5.548 4.004 10.689 8.86 14.827 14.437c1.429 1.423 2.858 2.718 4.28 4.137c.994 1.438 1.274 3.298 2.28 4.58v.434c-1.114-.393-1.915-1.143-2.674-1.927l-.453-.473c-.453-.47-.91-.932-1.431-1.313c-3.148-2.15-6.274-4.722-9.422-6.721c-5.412-3.434-11.689-5.427-17.246-8.874c-3.142-2.001-6.137-4.28-9.132-6.57c-2.715-2.007-5.705-5.861-7.411-8.721c-1.005-1.58-1.143-3.437-2.291-4.58c.205-1.909 1.954-2.476 3.719-2.942l.406-.107c.609-.158 1.205-.316 1.725-.525c7.414-3.148 16.253-4.29 27.667-4.004c-.43-2.866-7.562-6.437-9.839-8.153c-4.57-3.294-9.409-6.731-14.257-9.729c-2.569-1.57-6.996-2.716-9.842-3.999c-3.851-1.574-12.41-3.147-14.544-6.145c-3.625-4.726-6.229-10.363-8.757-16.057l-.688-1.554a803.85 803.85 0 0 0-.69-1.553c-2.988-6.857-6.7-14.006-9.695-21.027c-1.566-3.425-2.285-6.431-4-9.716c-10.407-20.158-25.81-37.035-44.485-48.904c-6.137-3.862-12.98-7.436-20.534-9.865c-4.281-1.293-9.419-.578-13.98-1.57h-3.002c-2.562-.722-4.701-3.438-6.7-4.87c-4.415-2.998-8.837-5.011-14.117-7.15c-1.85-.858-7.133-2.856-8.977-1.283c-1.142.287-1.721.718-2.002 1.864c-1.136 1.71-.137 4.286.57 5.863c2.142 4.57 5.134 7.286 7.85 11.148c2.416 3.425 5.417 7.287 7.13 11.011c3.696 8.005 5.417 16.874 8.842 24.878c1.27 3.01 3.279 6.435 5.128 9.15c1.567 2.155 4.416 3.713 5.278 6.441c1.718 2.86-2.572 12.297-3.565 15.294c-3.715 11.727-2.995 28.028 1.283 38.193l.228.536l.228.543c1.562 3.723 3.234 7.732 7.387 8.773c.286-.284 0-.135.567-.284c1.005-7.868 1.288-15.445 4-21.601c1.567-3.849 4.696-6.57 6.841-9.712c1.43.856 1.43 3.437 2.282 5.145c1.856 4.43 3.849 9.287 6.137 13.73c4.696 9.15 9.98 18.021 15.967 26.025c2.005 2.859 4.85 6.006 7.416 8.581c1.143.997 2.423 1.573 3.282 2.856h.28v.432c-4.278-1.577-6.99-6.003-10.402-8.587c-6.424-4.857-14.117-12.151-18.545-19.15c-1.852-4.018-3.854-7.869-5.85-11.867v-.289c-.853 1.142-.567 2.276-.994 4.004c-1.852 7.145-.426 15.296-6.843 17.866c-7.274 3.01-12.7-4.857-14.977-8.432c-7.276-11.866-9.269-31.884-4.138-48.043c1.14-3.577 1.295-7.867 3.285-10.723c-.43-2.582-2.42-3.288-3.571-4.87c-1.996-2.704-3.705-5.854-5.268-8.857c-3.002-5.866-5.138-12.875-7.417-19.166c-1.002-2.569-1.289-5.148-2.288-7.58c-1.704-3.712-4.845-7.436-7.268-10.72c-3.281-4.72-12.837-13.868-8.985-23.168Zm46.772 28.015c.381.382.841.716 1.317 1.045l.574.394c.765.53 1.506 1.088 1.96 1.848c.72 1.006.854 1.999 1.716 3.007c0 3.437-.996 5.722-3.007 7.146c0 0-.137.15-.278.29c-1.14-2.291-2.139-4.57-3.287-6.859c-1.414-1.998-3.413-3.583-4.565-5.866h-.277v-.287c1.721-.425 3.428-.718 5.847-.718Z" />
                                                            </svg></span></span>
                                                    <p class="name">MySQL</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="tab_2" class="wrapper">
                                    <div class="timelinebox">
                                        <ul>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span class="year">May 2020 - Present</span>
                                                        <span class="company">LightField House Inc.</span>
                                                    </div>
                                                    <div class="job">
                                                        <h3><span>Backend Developer</span></h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span class="year">January 2019 - March 2020</span>
                                                        <span class="company">Achievers' Consortium</span>
                                                    </div>
                                                    <div class="job">
                                                        <h3><span>Backend Developer</span></h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span class="year">May 2018 - November 2018</span>
                                                        <span class="company">Quipkraft Solutions</span>
                                                    </div>
                                                    <div class="job">
                                                        <h3><span>Contracted Web Developer</span></h3>
                                                    </div>
                                                </div>
                                            </li>
                                            {{-- <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span class="year">2016 - 2018</span>
                                                        <span class="company">Bauen Software Inc.</span>
                                                    </div>
                                                    <div class="job">
                                                        <h3><span>Web Designer</span></h3>
                                                    </div>
                                                </div>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div id="tab_3" class="wrapper">
                                    <div class="timelinebox">
                                        <ul>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span class="year">2016 - 2021</span>
                                                        <span class="company">Ondo State University of Science and
                                                            Technology</span>
                                                    </div>
                                                    <div class="job">
                                                        <h3><span>B.Tech, Mathematics.</span></h3>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="orido_tm_section" id="portfolio">
            <div class="orido_tm_service">
                <div class="container">
                    <div class="orido_tm_main_title">
                        <h3><span>Look at my<br />recent projects</span></h3>
                    </div>
                    <div class="service_list">
                        <ul>
                            <li class="current">
                                <div class="list_inner">
                                    <div class="left">
                                        <span class="number">01</span>
                                        <h3 class="title">Elite Smartan</h3>
                                    </div>
                                    <div class="right">
                                        <div class="text">
                                            <p>The objective of the project is to identify high performing students, create ecosystems of support, aggregate them in communities of practice and mainstream their achievement to help shape youth culture. </p>
                                        </div>
                                        <div class="arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="svg replaced-svg">
                                                <path d="M20.843 4.21239C20.843 3.79817 20.5072 3.46238 20.093 3.46238L13.343 3.46234C12.9288 3.46233 12.593 3.79812 12.593 4.21233C12.593 4.62655 12.9288 4.96233 13.343 4.96234L19.343 4.96238L19.3429 10.9624C19.3429 11.3766 19.6787 11.7124 20.0929 11.7124C20.5072 11.7124 20.8429 11.3766 20.8429 10.9624L20.843 4.21239ZM4.43731 20.9285L20.6233 4.74271L19.5627 3.68205L3.37665 19.8678L4.43731 20.9285Z" fill="#12141D"></path>
                                                </svg>
                                        </div>
                                    </div>
                                    <a class="orido_tm_full_link" target="_blank" href="https://elitesmartans.com"></a>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <div class="left">
                                        <span class="number">02</span>
                                        <h3 class="title">E-VehicleReg</h3>
                                    </div>
                                    <div class="right">
                                        <div class="text">
                                            <p>Online vehicle registration and licensing system</p>
                                        </div>
                                        <div class="arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="svg replaced-svg">
                                                <path d="M20.843 4.21239C20.843 3.79817 20.5072 3.46238 20.093 3.46238L13.343 3.46234C12.9288 3.46233 12.593 3.79812 12.593 4.21233C12.593 4.62655 12.9288 4.96233 13.343 4.96234L19.343 4.96238L19.3429 10.9624C19.3429 11.3766 19.6787 11.7124 20.0929 11.7124C20.5072 11.7124 20.8429 11.3766 20.8429 10.9624L20.843 4.21239ZM4.43731 20.9285L20.6233 4.74271L19.5627 3.68205L3.37665 19.8678L4.43731 20.9285Z" fill="#12141D"></path>
                                                </svg>
                                        </div>
                                    </div>
                                    <a class="orido_tm_full_link" target="_blank" href="http://e-vehicleregsystem.herokuapp.com/"></a>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <div class="left">
                                        <span class="number">03</span>
                                        <h3 class="title">BuyBooks</h3>
                                    </div>
                                    <div class="right">
                                        <div class="text">
                                            <p>Online book store.</p>
                                        </div>
                                        <div class="arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="svg replaced-svg">
                                                <path d="M20.843 4.21239C20.843 3.79817 20.5072 3.46238 20.093 3.46238L13.343 3.46234C12.9288 3.46233 12.593 3.79812 12.593 4.21233C12.593 4.62655 12.9288 4.96233 13.343 4.96234L19.343 4.96238L19.3429 10.9624C19.3429 11.3766 19.6787 11.7124 20.0929 11.7124C20.5072 11.7124 20.8429 11.3766 20.8429 10.9624L20.843 4.21239ZM4.43731 20.9285L20.6233 4.74271L19.5627 3.68205L3.37665 19.8678L4.43731 20.9285Z" fill="#12141D"></path>
                                                </svg>
                                        </div>
                                    </div>
                                    <a class="orido_tm_full_link" target="_blank" href="http://buuybooks.herokuapp.com/"></a>

                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <div class="left">
                                        <span class="number">04</span>
                                        <h3 class="title">SaleTracka</h3>
                                    </div>
                                    <div class="right">
                                        <div class="text">
                                            <p>Sale register and stock management system.</p>
                                        </div>
                                        <div class="arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="svg replaced-svg">
                                                <path d="M20.843 4.21239C20.843 3.79817 20.5072 3.46238 20.093 3.46238L13.343 3.46234C12.9288 3.46233 12.593 3.79812 12.593 4.21233C12.593 4.62655 12.9288 4.96233 13.343 4.96234L19.343 4.96238L19.3429 10.9624C19.3429 11.3766 19.6787 11.7124 20.0929 11.7124C20.5072 11.7124 20.8429 11.3766 20.8429 10.9624L20.843 4.21239ZM4.43731 20.9285L20.6233 4.74271L19.5627 3.68205L3.37665 19.8678L4.43731 20.9285Z" fill="#12141D"></path>
                                                </svg>
                                        </div>
                                    </div>
                                    <a class="orido_tm_full_link" href="https://saletracka.herokuapp.com/" target="_blank"></a>
                                </div>
                            </li>
                        </ul>
                        <span class="ccc"></span>
                    </div>
                </div>
            </div>
        </div>





        <div class="orido_tm_section" id="contact">
            <div class="orido_tm_contact">
                <div class="container">
                    <div class="infobox">
                        {{-- <div class="video_button">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"><img
                                    class="anim_circle" src="img/contact/video.png" alt="" /><img
                                    class="svg" src="img/svg/play.svg" alt="" /></a>
                        </div> --}}
                        <div class="text">
                            <h3>Let's work together</h3>
                            <p>I'm currently looking for new opportunities, so my inbox is always open. Have a question?
                                or you just want to say hi?, feel free to reach out to me.</p>
                        </div>
                        <div class="orido_tm_boxed_button">
                            <a href="mailto://raphyabak@gmail.com">Say Hello <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    class="svg replaced-svg">
                                    <path
                                        d="M14.2199 21.9352C13.0399 21.9352 11.3699 21.1052 10.0499 17.1352L9.32988 14.9752L7.16988 14.2552C3.20988 12.9352 2.37988 11.2652 2.37988 10.0852C2.37988 8.91525 3.20988 7.23525 7.16988 5.90525L15.6599 3.07525C17.7799 2.36525 19.5499 2.57525 20.6399 3.65525C21.7299 4.73525 21.9399 6.51525 21.2299 8.63525L18.3999 17.1252C17.0699 21.1052 15.3999 21.9352 14.2199 21.9352ZM7.63988 7.33525C4.85988 8.26525 3.86988 9.36525 3.86988 10.0852C3.86988 10.8052 4.85988 11.9052 7.63988 12.8252L10.1599 13.6652C10.3799 13.7352 10.5599 13.9152 10.6299 14.1352L11.4699 16.6552C12.3899 19.4352 13.4999 20.4252 14.2199 20.4252C14.9399 20.4252 16.0399 19.4352 16.9699 16.6552L19.7999 8.16525C20.3099 6.62525 20.2199 5.36525 19.5699 4.71525C18.9199 4.06525 17.6599 3.98525 16.1299 4.49525L7.63988 7.33525Z"
                                        fill="white"></path>
                                    <path
                                        d="M10.11 14.7052C9.92005 14.7052 9.73005 14.6352 9.58005 14.4852C9.29005 14.1952 9.29005 13.7152 9.58005 13.4252L13.16 9.83518C13.45 9.54518 13.93 9.54518 14.22 9.83518C14.51 10.1252 14.51 10.6052 14.22 10.8952L10.64 14.4852C10.5 14.6352 10.3 14.7052 10.11 14.7052Z"
                                        fill="white"></path>
                                </svg></a>
                        </div>
                    </div>
                    <div class="connect">
                        <div class="left">
                            <ul>
                                <li>
                                    <span class="name">Call:</span>
                                    <p><a class="line_effect" href="tel:+2348068325446">+2348068325446</a></p>
                                </li>
                                <li>
                                    <span class="name">Email:</span>
                                    <p><a class="line_effect" href="mailto://raphyabak@gmail.com"><span
                                                class="__cf_email__">Raphyabak@gmail.com</span></a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="orido_tm_follow">
                                <span>Follow me:</span>
                                <ul>
                                    <li><a href="https://twitter.com/RaphWebb_Inc"><img class="svg"
                                                src="img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="https://github.com/raphyabak"><img class="svg"
                                                src="img/svg/social/github.svg" alt="" /></a></li>
                                    <li><a href="https://www.linkedin.com/in/raphael-abayomi/"><img class="svg"
                                                src="img/svg/social/linkedin.svg" alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="element"><img class="svg" src="img/svg/elements.svg" alt="" /></span>
                <span class="element2"><img class="svg" src="img/svg/element-2.svg" alt="" /></span>
            </div>
        </div>


        <div class="orido_tm_section">
            <div class="orido_tm_copyright">
                <div class="container">
                    <div class="copyright_inner">
                        <div class="logo">
                            <img src="img/logo/logoblack.svg" alt="" />
                        </div>
                        <div class="copy">
                            <p>&copy; 2022 by <a href="#" target="_blank">RaphWebb Inc.</a> All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>


        <div class="progressbar">
            <a href="#"><span class="text">To Top</span></a>
            <span class="line"></span>
        </div>

    </div>


    <script src="js/jquery.js"></script>
    <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
    <script src="js/plugins.js"></script>
    <script src="js/init.js"></script>

</body>

</html>
