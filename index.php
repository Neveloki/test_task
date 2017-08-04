<!doctype html>

<head>
    <meta charset="utf-8" />
    <title>Тестовове задание</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/BezierPlugin.min.js"></script>
    <script type="text/javascript" src="js/findShapeIndex.js"></script>
    <script type="text/javascript" src="js/MorphSVGPlugin.min.js"></script>
    <script type="text/javascript" src="js/TweenMax.min.js"></script>
</head>

<body>

    <div class="shell">

        <div id="terminal" style="width: 100%;"></div>

        <div id="topic">
            <span class="topic-header">НАША МИССИЯ</span>
            <span class="topic-content">
                ВЛБАНК ОАО перешел на промышленную эксплуатацию автоматизированной
                банковской системы ЦФТ-Банк, современного масштабируемого решения, позволившего банку перестроить свой
                технологический цикл и расширить потенциальные возможности для развития.
            </span>
        </div>

        <div id="graph-container">
            <svg class="history-graph" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                 viewBox="0 0 1280 413"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <style type="text/css">

                        .bg {fill:none}
                        .text_bg {fill:none}
                        .text_color {fill:#2B2A29}
                        .pointer {fill:#44A2C9}
                        .wave_color {fill:#00A0E3}
                        .fil4 {fill:#48CFAC}
                        .fil5 {fill:#38A085}
                        .fil6 {fill:#74E4C6}
                        .fil7 {fill:#51D3B1}
                        .fil8 {fill:#DF4641}
                        .text {font-weight:normal;font-size:21.1818px;font-family:'Arial', serif}
                        .fil0 {fill:none}

                    </style>
                </defs>

                <rect class="bg" width="1280" height="413"/>
                <path id="common" class="bg" d="M5 401c37,7 65,1 82,-19 24,-29 44,-49 61,-59 40,-17 81,-24 122,-22 30,1 53,4 70,8 49,9 109,14 154,-13 23,-13 43,-27 59,-42 24,-22 51,-40 81,-54 46,-16 88,-19 125,-10 92,35 159,34 201,-2 25,-21 44,-39 56,-55 20,-27 43,-46 68,-57 20,-10 58,-14 116,-11 32,-1 58,-6 77,-16"/>
                <circle class="wave_color" cx="5" cy="401" r="3"/>
                <g class="wave">
                    <path class="wave_color" d="M15 400c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M25 401c1,0 2,1 2,3 0,1 -1,2 -2,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M35 401c1,0 2,1 2,3 0,1 -1,3 -2,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M44 401c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-2 2,-2z"/>
                    <path class="wave_color" d="M54 399c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -3,-1 -3,-2 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M64 396c1,0 2,1 2,3 0,1 -1,2 -2,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M73 391c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M81 386c1,0 2,1 2,2 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M88 378c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M94 371c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M100 363c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-3 2,-3z"/>
                    <path class="wave_color" d="M107 356c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M114 349c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M121 342c2,0 3,1 3,3 0,1 -1,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M128 335c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M136 329c1,0 3,1 3,2 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M144 323c1,0 3,1 3,2 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M153 318c1,0 2,1 2,3 0,1 -1,3 -2,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M162 315c1,0 3,1 3,2 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M171 311c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M181 308c1,0 3,2 3,3 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M190 306c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -2,-1 -2,-2 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M200 304c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-2 3,-2z"/>
                    <path class="wave_color" d="M210 302c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M220 300c1,0 2,1 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M229 299c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -2,-2 -2,-3 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M239 298c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -2,-2 -2,-3 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M249 298c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-2 2,-2z"/>
                    <path class="wave_color" d="M259 298c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-2 3,-2z"/>
                    <path class="wave_color" d="M269 298c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -3,-1 -3,-2 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M279 298c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M289 299c2,0 3,1 3,3 0,2 -1,3 -3,3 -2,0 -3,-1 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M299 300c1,0 3,1 3,3 0,1 -2,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M309 301c1,0 3,1 3,3 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M319 303c1,0 2,1 2,2 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M328 304c2,0 3,1 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M338 306c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M348 308c1,0 3,1 3,3 0,1 -2,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M358 310c1,0 2,1 2,2 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M368 311c1,0 2,1 2,3 0,1 -1,2 -2,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M377 312c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -2,-2 -2,-3 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M387 313c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -2,-1 -2,-2 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M397 313c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M407 314c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-2 3,-2z"/>
                    <path class="wave_color" d="M417 313c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M427 313c2,0 3,1 3,3 0,1 -1,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M437 312c1,0 3,1 3,3 0,1 -2,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M447 310c1,0 3,2 3,3 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M456 308c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-3 2,-3z"/>
                    <path class="wave_color" d="M466 306c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -3,-1 -3,-2 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M475 303c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-2 2,-2z"/>
                    <path class="wave_color" d="M485 299c1,0 2,1 2,2 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M493 294c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -2,-2 -2,-3 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M502 289c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M510 284c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-2 3,-2z"/>
                    <path class="wave_color" d="M519 278c1,0 2,1 2,3 0,1 -1,3 -2,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M527 272c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M535 266c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M542 260c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-3 2,-3z"/>
                    <path class="wave_color" d="M550 254c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M558 247c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M565 241c2,0 3,1 3,3 0,1 -1,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M573 235c1,0 3,1 3,2 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M581 229c1,0 2,1 2,2 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M589 223c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M597 217c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M605 212c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -2,-2 -2,-3 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M614 207c2,0 3,1 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M623 203c1,0 3,1 3,2 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M632 198c1,0 3,1 3,3 0,1 -2,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M641 195c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-2 3,-2z"/>
                    <path class="wave_color" d="M651 192c1,0 2,1 2,3 0,1 -1,2 -2,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M660 189c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M670 187c1,0 3,1 3,3 0,1 -2,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M680 185c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M689 184c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -2,-1 -2,-2 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M699 183c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -2,-1 -2,-2 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M709 182c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M719 182c2,0 3,1 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M729 183c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -3,-1 -3,-2 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M739 184c2,0 3,1 3,3 0,1 -1,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M749 185c1,0 3,2 3,3 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M759 187c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M768 191c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M777 194c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M787 197c1,0 2,1 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M796 200c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M806 203c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M815 205c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-3 2,-3z"/>
                    <path class="wave_color" d="M825 207c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M835 209c1,0 3,2 3,3 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M845 211c1,0 2,1 2,3 0,1 -1,2 -2,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M855 212c1,0 2,1 2,3 0,1 -1,3 -2,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M864 213c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -2,-1 -2,-2 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M874 213c2,0 3,1 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M884 213c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M894 212c2,0 3,1 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M904 211c2,0 3,1 3,3 0,1 -1,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M914 209c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M923 206c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M933 202c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M941 198c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -2,-2 -2,-3 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M950 193c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M958 187c1,0 3,1 3,2 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M965 180c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-3 2,-3z"/>
                    <path class="wave_color" d="M973 174c2,0 3,1 3,3 0,1 -1,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M981 167c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M988 161c1,0 3,1 3,3 0,1 -2,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M995 154c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1002 147c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1009 140c1,0 3,1 3,2 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M1015 132c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1021 124c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1027 116c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-3 2,-3z"/>
                    <path class="wave_color" d="M1034 109c2,0 3,1 3,3 0,1 -1,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1041 102c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -3,-1 -3,-2 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1048 95c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-3 2,-3z"/>
                    <path class="wave_color" d="M1056 89c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1065 84c1,0 2,1 2,2 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-2 3,-2z"/>
                    <path class="wave_color" d="M1073 79c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-2 3,-2z"/>
                    <path class="wave_color" d="M1082 74c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1091 70c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1101 67c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1110 65c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-3 2,-3z"/>
                    <path class="wave_color" d="M1120 64c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -3,-1 -3,-2 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1130 63c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-2 3,-2z"/>
                    <path class="wave_color" d="M1140 62c2,0 3,1 3,3 0,1 -1,2 -3,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1150 61c1,0 3,2 3,3 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1160 61c1,0 3,1 3,3 0,1 -2,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1170 61c1,0 3,1 3,3 0,1 -2,3 -3,3 -2,0 -3,-2 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1180 61c1,0 3,1 3,3 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1190 61c1,0 2,2 2,3 0,2 -1,3 -2,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1200 62c1,0 2,1 2,3 0,1 -1,2 -2,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1209 62c2,0 3,1 3,2 0,2 -1,3 -3,3 -1,0 -2,-1 -2,-3 0,-1 1,-2 2,-2z"/>
                    <path class="wave_color" d="M1219 61c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -2,-2 -2,-3 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M1229 60c2,0 3,1 3,3 0,1 -1,3 -3,3 -1,0 -3,-2 -3,-3 0,-2 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1239 58c2,0 3,2 3,3 0,2 -1,3 -3,3 -1,0 -3,-1 -3,-3 0,-1 2,-3 3,-3z"/>
                    <path class="wave_color" d="M1249 56c1,0 3,2 3,3 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                    <path class="wave_color" d="M1258 54c2,0 3,1 3,3 0,1 -1,2 -3,2 -1,0 -2,-1 -2,-2 0,-2 1,-3 2,-3z"/>
                    <path class="wave_color" d="M1268 50c1,0 3,2 3,3 0,2 -2,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                </g>
                <circle class="wave_color" cx="1277" cy="49" r="3"/>

                <g id="point_1">
                    <circle class="pointer" cx="167" cy="316" r="12"/>
                    <rect class="text_bg" x="133" y="341" width="66.9492" height="29.4821" rx="6" ry="6"/>
                    <text x="142" y="363"  class="text_color text">1990</text>
                </g>
                <g id="point_2">
                    <circle class="pointer" cx="363" cy="313" r="12"/>
                    <rect class="text_bg" x="329" y="338" width="66.9492" height="29.4821" rx="6" ry="6"/>
                    <text x="338" y="360"  class="text_color text">2001</text>
                </g>
                <g id="point_3">
                    <circle class="pointer" cx="506" cy="289" r="12"/>
                    <rect class="text_bg" x="472" y="315" width="66.9492" height="29.4821" rx="6" ry="6"/>
                    <text x="481" y="336"  class="text_color text">2002</text>
                </g>
                <g id="point_4">
                    <circle class="pointer" cx="646" cy="196" r="12"/>
                    <rect class="text_bg" x="612" y="221" width="66.9492" height="29.4821" rx="6" ry="6"/>
                    <text x="622" y="243"  class="text_color text">2005</text>
                </g>
                <g id="point_5">
                    <circle class="pointer" cx="773" cy="195" r="12"/>
                    <rect class="text_bg" x="739" y="221" width="66.9492" height="29.4821" rx="6" ry="6"/>
                    <text x="748" y="242"  class="text_color text">2007</text>
                </g>
                <g id="point_6">
                    <circle class="pointer" cx="955" cy="193" r="12"/>
                    <rect class="text_bg" x="921" y="219" width="66.9492" height="29.4821" rx="6" ry="6"/>
                    <text x="930" y="240"  class="text_color text">2009</text>
                </g>
                <g id="point_7">
                    <circle class="pointer" cx="1096" cy="72" r="12"/>
                    <rect class="text_bg" x="1063" y="97" width="66.9492" height="29.4821" rx="6" ry="6"/>
                    <text x="1072" y="119"  class="text_color text">2013</text>
                </g>

                <g id="boat">
                    <polygon class="fil4" points="122,282 141,299 155,286 "/>
                    <polygon class="fil4" points="155,286 180,265 175,288 "/>
                    <polygon class="fil5" points="141,299 155,286 175,288 "/>
                    <polygon class="fil5" points="122,282 153,278 180,265 155,286 "/>
                    <polygon class="fil6" points="154,285 149,267 142,284 "/>
                    <polygon class="fil6" points="149,267 165,278 156,285 "/>
                    <polygon class="fil7" points="154,285 155,286 156,285 149,267 "/>
                    <polygon class="fil8" points="149,267 147,260 140,266 "/>
                </g>

                <path id="path_1" class="fil0" d="M121 263c64,-20 144,-27 213,-13"/>
                <path id="path_2" class="fil0" d="M334 250c38,6 87,11 123,-9"/>
                <path id="path_3" class="fil0" d="M457 241c56,-28 90,-76 146,-96"/>
                <path id="path_4" class="fil0" d="M603 145c61,-23 91,-26 149,-13"/>
                <path id="path_5" class="fil0" d="M752 132c65,14 114,25 151,10"/>
                <path id="path_6" class="fil0" d="M903 142c72,-36 57,-95 151,-121"/>
            </svg>
        </div>

        <div id="history-container">
            <ul>
                <li>
                    <span class="list-header">Расширение возможностей</span>
                    <span class="list-date"> 1 сентября 1990 г.</span>
                    <span class="list-content">
                        ВЛБАНК ОАО перешел на промышленную эксплуатацию автоматизированной
                        банковской системы ЦФТ-Банк, современного масштабируемого решения, позволившего банку перестроить свой
                        технологический цикл и расширить потенциальные возможности для развития.
                    </span>
                </li>
                <li>
                    <span class="list-header">Расширение возможностей</span>
                    <span class="list-date"> 24 октября 2001 г.</span>
                    <span class="list-content">
                        ВЛБАНК ОАО перешел на промышленную эксплуатацию автоматизированной
                        банковской системы ЦФТ-Банк, современного масштабируемого решения, позволившего банку перестроить свой
                        технологический цикл и расширить потенциальные возможности для развития.
                    </span>
                </li>
                <li>
                    <span class="list-header">Расширение возможностей</span>
                    <span class="list-date"> 3 января 2002 г.</span>
                    <span class="list-content">
                        ВЛБАНК ОАО перешел на промышленную эксплуатацию автоматизированной
                        банковской системы ЦФТ-Банк, современного масштабируемого решения, позволившего банку перестроить свой
                        технологический цикл и расширить потенциальные возможности для развития.
                    </span>
                </li>
                <li>
                    <span class="list-header">Расширение возможностей</span>
                    <span class="list-date"> 11 марта 2005 г.</span>
                    <span class="list-content">
                        ВЛБАНК ОАО перешел на промышленную эксплуатацию автоматизированной
                        банковской системы ЦФТ-Банк, современного масштабируемого решения, позволившего банку перестроить свой
                        технологический цикл и расширить потенциальные возможности для развития.
                    </span>
                </li>
                <li>
                    <span class="list-header">Расширение возможностей</span>
                    <span class="list-date"> 6 мая 2007 г.</span>
                    <span class="list-content">
                        ВЛБАНК ОАО перешел на промышленную эксплуатацию автоматизированной
                        банковской системы ЦФТ-Банк, современного масштабируемого решения, позволившего банку перестроить свой
                        технологический цикл и расширить потенциальные возможности для развития.
                    </span>
                </li>
                <li>
                    <span class="list-header">Расширение возможностей</span>
                    <span class="list-date"> 8 августа 2009 г.</span>
                    <span class="list-content">
                        ВЛБАНК ОАО перешел на промышленную эксплуатацию автоматизированной
                        банковской системы ЦФТ-Банк, современного масштабируемого решения, позволившего банку перестроить свой
                        технологический цикл и расширить потенциальные возможности для развития.
                    </span>
                </li>
                <li>
                    <span class="list-header">Расширение возможностей</span>
                    <span class="list-date"> 1 сентября 2013 г.</span>
                    <span class="list-content">
                        ВЛБАНК ОАО перешел на промышленную эксплуатацию автоматизированной
                        банковской системы ЦФТ-Банк, современного масштабируемого решения, позволившего банку перестроить свой
                        технологический цикл и расширить потенциальные возможности для развития.
                    </span>
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript" src="js/common.js"></script>

</body>
