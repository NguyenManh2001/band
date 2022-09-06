<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./asset/style.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="header">
            <ul class="nav">
                <li><a href="">Home</a></li>
                <li><a href="">Band</a></li>
                <li><a href="">Tour</a></li>
                <li><a href="">Contact</a></li>
                <li>
                    <a href="">More</a>
                    <ul class="subnav">
                        <li><a href="">Merchandise</a></li>
                        <li><a href="">Extras</a></li>
                        <li><a href="">Media</a></li>
                    </ul>
                </li>
            </ul>
            <div class="search">
            <i class="fas fa-search"></i>
            </div>
        </div>
        <div class="slide">
            <div class="slider">
                <h3 class="a">Los Angeles</h3>
                <p class="b"> We had the best time playing at Venice Beach!</p>

            </div>
        </div>
        <div class="band">
            <div class="content-section">
                <h2 class="content-header">THE BAND</h2>
                <p class="content-sub-header">We love music</p>
                <p class="content-body">We have created a fictional band website. Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="team-list">
                    <div class="team">
                        <p class="team-name">Name</p>
                        <img class="name-img" src="./asset/img/bandmember.jpg" alt="">
                    </div>
                    <div class="team">
                        <p class="team-name">Name</p>
                        <img class="name-img" src="./asset/img/bandmember.jpg" alt="">
                    </div>
                    <div class="team">
                        <p class="team-name">Name</p>
                        <img class="name-img" src="./asset/img/bandmember.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- Tour section -->
        <div class="tour">
            <div class="content-section">
                <h2 class="content-header tour-header">TOUR DATES</h2>
                <p class="content-sub-header  tour-sub-header">Remember to book your tickets!</p>
                <ul class="tour-ds">
                    <li>September <span class="sold-out">Sold out</span></li>
                    <li>October <span class="sold-out">Sold out</span></li>
                    <li>November <span class="quantity">3</span></li>
                </ul>
                <div class="tour-list">
                    <div class="tour-menu">
                        <img class="img" src="./asset/img/newyork.jpg" alt="">
                        <div class="tour-body">
                            <p class="body-hearder">New York</p>
                            <p class="body-nav-hearder">Fri 27 Nov 2016</p>
                            <p class="body-sub-hearder">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <a href="#" class="btn">Buy Tickets</a>
                        </div>
                    </div>
                    <div class="tour-menu">
                        <img class="img" src="./asset/img/paris.jpg" alt="">
                        <div class="tour-body">
                            <p class="body-hearder">Paris</p>
                            <p class="body-nav-hearder">Sat 28 Nov 2016</p>
                            <p class="body-sub-hearder">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <a href="#" class="btn">Buy Tickets</a>
                        </div>
                    </div>
                    <div class="tour-menu">
                        <img class="img" src="./asset/img/sanfran.jpg" alt="">
                        <div class="tour-body">
                            <p class="body-hearder">San Francisco</p>
                            <p class="body-nav-hearder">Sun 29 Nov 2016</p>
                            <p class="body-sub-hearder">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                           <a href="#" class="btn">Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- contain section -->
        <div class="content-section">
            <h2 class="content-header">CONTACT</h2>
            <p class="content-sub-header">Fan? Drop a note!</p>
            <div class="row">
                <div class="col">
                    <p class = "col-font">Chicago, US</p>
                    <p class = "col-font">Phone: +00 151515</p>
                    <p class = "col-font">Email: mail@mail.com</p>
                </div>
                <div class="col">
                    <div class="row-input">
                        <div class="col">
                            <input type="text" name="" placeholder="Name" required id="" class = "col-input">
                        </div>
                        <div class="col">
                            <input type="email" name="" placeholder="Email" required id="" class = "col-input">
                        </div>
                    </div>
                    <div class="row-input">
                        <div class="col col-hail">
                            <input class = "mes" type="text" name="" placeholder="Message" required id="">
                        </div>
                    </div>
                    <div class="row-input">
                        <div class="col col-hail">
                        <input class="btn send" type="submit" value="SEND">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-end">
          <img class="map" src="./asset/img/map.jpg" alt="">
          <div class="end" style = "text-align: center;padding:0 0 20px">Powered by <a href="#">w3.css</a></div>
        </div>
    </div>
</body>

</html>