<html>
    <head>
    <link href="@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400;1,500&family=Quicksand:wght@300;400;500;600;700&display=swap');"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Clone</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="./images/Spotify_favicon.png" type="image/x-icon">

<style>

.search-bar {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-bar input {
        padding: 10px;
        border: none;
        border-radius: 5px;
        margin-right: 10px;
        width:400px;
    }

    .search-bar button {
        background-color: #1db954;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        margin-right: 300px;
    }



* {
    padding: 0;
    margin: 0;
}

body {
    background-color: #121212;
    font-family: 'Montserrat', sans-serif;
}

.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    width: 300px;
    background-color: #000000;
    padding: 24px;
}

.sidebar .logo img {
    width: 130px;
}

.sidebar .navigation ul {
    list-style: none;
    margin-top: 20px;
}

.sidebar .navigation ul li {
    padding: 10px 0px;
}

.sidebar .navigation ul li a {
    color: #b3b3b3;
    text-decoration: none;
    font-weight: 500;
    font-size: 18px;
}

.sidebar .navigation ul li .fa {
    font-size: 20px;
    margin-right: 10px;
}

.sidebar .navigation ul li a:hover {
    color: #ffffff;
}

.sidebar .policies {
    position: absolute;
    bottom: 100px;
}

.sidebar .policies ul {
    list-style: none;
}

.sidebar .policies ul li {
    padding-bottom: 5px;
}

.sidebar .policies ul li a {
    color: #b3b3b3;
    font-weight: 500;
    text-decoration: none;
    font-size: 10px;
}

.sidebar .policies ul li a:hover {
    text-decoration: underline;
}

.main-container {
    margin-left: 350px;
    margin-bottom: 100px;
}

.topbar {
    display: flex;
    justify-content: space-between;
    background-color: #000;
    padding: 14px 30px;
}

.topbar .prev-next-buttons button {
    color: #7a7a7a;
    cursor: not-allowed;
    width: 34px;
    height: 34px;
    border-radius: 100%;
    font-size: 18px;
    border: 0px;
    background-color: #090909;
    margin-right: 10px;
}

.topbar .navbar {
    display: flex;
    align-items: center;
}

.topbar .navbar ul {
    list-style: none;
}

.topbar .navbar ul li {
    display: inline-block;
    margin: 0px 8px;
    width: 70px;
}

.topbar .navbar ul li a {
    color: #b3b3b3;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    letter-spacing: 1px;
}

.topbar .navbar ul li a:hover {
    color: #ffffff;
    font-size: 15px;
}

.topbar .navbar button {
    background-color: #ffffff;
    color: #000000;
    font-size: 16px;
    font-weight: bold;
    padding: 14px 30px;
    border: 0px;
    border-radius: 40px;
    cursor: pointer;
    margin-left: 20px;
}

.topbar .navbar button:hover {
    background-color: #f2f2f2;
}

.spotify-playlists {
    padding: 20px 40px;
}

.spotify-playlists h2 {
    color: #ffffff;
    font-size: 22px;
    margin-bottom: 20px;
}

.spotify-playlists .list {
    display: flex;
    gap: 20px;
    overflow: hidden;
}

.spotify-playlists .list .item {
    min-width: 140px;
    width: 160px;
    padding: 15px;
    background-color: #181818;
    border-radius: 6px;
    cursor: pointer;
    transition: all ease 0.4s;
}

.spotify-playlists .list .item:hover {
    background-color: #252525;
}



.spotify-playlists .list .item img {
    width: 100%;
    border-radius: 6px;
    margin-bottom: 10px;
}

.spotify-playlists .list .item .play {
    position: relative;
}

.spotify-playlists .list .item .play .fa {
    position: absolute;
    right: 10px;
    top: -60px;
    padding: 18px;
    background-color: #1db954;
    border-radius: 100%;
    opacity: 0;
    transition: all ease 0.4s;
}

.spotify-playlists .list .item:hover .play .fa {
    opacity: 1;
    transform: translateY(-20px);
}

.spotify-playlists .list .item h4 {
    color: #ffffff;
    font-size: 14px;
    margin-bottom: 10px;
    font-weight: 600;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.spotify-playlists .list .item p {
    color: #989898;
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
}

.spotify-playlists hr {
    margin: 70px 0px 0px;
    border-color: #636363;
}

.preview {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to right, #ae2896, #509bf5);
    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
}

.preview h6 {
    color: #ffffff;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 12px;
    margin-bottom: 10px;
}

.preview p {
    color: #ffffff;
    font-size: 14px;
    font-weight: 500;
}

.preview button {
    background-color: #ffffff;
    color: #000000;
    font-size: 16px;
    font-weight: bold;
    padding: 14px 30px;
    border: 0px;
    border-radius: 40px;
    cursor: pointer;
}
</style>
</head>








<body>

    <div class="sidebar">
        <div class="logo">
            <a href="">
                <img src="./images/Spotify Logo.png" alt="Logo">
            </a>
        </div>

        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="fa fa-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fa-search"></span>
                        <span>Contact Us</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fas fa-book"></span>
                        <span>Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('subcription')}}">
                        <span class="fa fas fa-book"></span>
                        <span>Subcription</span>
                    </a>
                </li>
            </ul>
        </div>



        <div class="policies">
            <ul>
                <li>
                    <a href="">Cookies</a>
                </li>
                <li>
                    <a href="">Privacy</a>
                </li>
            </ul>
        </div>


    </div>

    <div class="main-container">
        <div class="topbar">
            <div class="prev-next-buttons">
                <button type="button" class="fa fas fa-chevron-left"></button>
                <button type="button" class="fa fas fa-chevron-right"></button>
            </div>

            <div class="navbar">

                
                <button type="button"  style="background-color: white; transition: background-color 0.3s;"
    onmouseover="this.style.backgroundColor='red'" onmouseout="this.style.backgroundColor='white'">
    
        <a href="{{url('login')}}" style="text-decoration: none; color:inherit;">Logout</a></button>
            </div>
        </div>

        <div class="spotify-playlists">
            <h2>Spotify Playlists</h2>

            <div class="list">
                <div class="item">
                    <img src="./images/Todays Top Hits.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4><a href="{{url('songs')}}" style="text-decoration: none; color:inherit;" >Today's Top Hits</a></h4>
                    <p>Olivia Rodrigo is on top of the Hottest 50!</p>
                </div>

                <div class="item">
                    <img src="./images/RapCaviar.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>RapCaviar</h4>
                    <p>New Music from Cardi B, Megan Thee Stallion an...</p>
                </div>

                <div class="item">
                    <img src="./images/All Out 2010s.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4><a href="{{url('artist2')}}" style="text-decoration: none; color:inherit;" >All out 2010s</a></h4>
                    <p>The biggest spmgs pf tje 2010s.</p>
                </div>

                <div class="item">
                    <img src="./images/Rock Classics.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4><a href="{{url('artist3')}}" style="text-decoration: none; color:inherit;" >Rock Classics</a></h4>
                    <p>Rock Legends & epic songs that continue to...</p>
                </div>

                <div class="item">
                    <img src="./images/Chill Hits.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Chill Hits</h4>
                    <p>Kick back to the best new and recent chill hits</p>
                </div>

                <div class="item">
                    <img src="./images/Viva Latino.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Viva Latino</h4>
                    <p>Today's top Latin hits elevando nuestra...</p>
                </div>



                <div class="item">
                    <img src="./images/All Out 80s.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>All out 80s</h4>
                    <p>The biggest songs of the 1980s. Cover: Michael...</p>
                </div>
            </div>
        </div>

        <div class="spotify-playlists">
            <h2>Focus</h2>
            <div class="list">
                <div class="item">
                    <img src="./images/Peaceful Piano.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Peaceful Piano</h4>
                    <p>Peaceful piano to help you slow down, breath...</p>
                </div>

                <div class="item">
                    <img src="./images/Deep Focus.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4><a href="{{url('artist4')}}" style="text-decoration: none; color:inherit;" >Deep Focus</a></h4>
                    <p>Keep calm and focus with ambient and post-...</p>
                </div>

                <div class="item">
                    <img src="./images/Instrumental Study.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Instrumental Study</h4>
                    <p>Focus with soft study music in the background.</p>
                </div>



                <div class="item">
                    <img src="./images/Focus Flow.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Focus Flow</h4>
                    <p>Uptempo instrumental hip hop beats</p>
                </div>

                <div class="item">
                    <img src="./images/Beats to think to.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Beats to think to</h4>
                    <p>Focus with melodic techno and tech house.</p>
                </div>

                <div class="item">
                    <img src="./images/Reading Adventure.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Reading Adventure</h4>
                    <p>Scores and soundtracks for daring quests, epic...</p>
                </div>

                <div class="item">
                    <img src="./images/All Out 2010s.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Workday Lounge</h4>
                    <p>Lounge and chill out music for your workday</p>
                </div>
            </div>
        </div>

        <div class="spotify-playlists">
            <h2>Sound of India</h2>
            <div class="list">
                <div class="item">
                    <img src="./images/The Sound of Mumbai.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4><a href="{{url('artist5')}}" style="text-decoration: none; color:inherit;" >The Sound of Mum...</a></h4>
                    <p>The songs that define, unite and distinguish...</p>
                </div>

                <div class="item">
                    <img src="./images/The Sound of Kolkata.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>The Sound of Kolka...</h4>
                    <p>The songs that define, unite and distinguish...</p>
                </div>

                <div class="item">
                    <img src="./images/The Sound of Delhi.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>The Sound of Delhi...</h4>
                    <p>The songs that define, unite and distinguish...</p>
                </div>

                <div class="item">
                    <img src="./images/The Sound of Bengaluru.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>The Sound of Ben...</h4>
                    <p>The songs that define, unite and distinguish...</p>
                </div>

                <div class="item">
                    <img src="./images/The Sound of Chennai.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>The Sound of Chen...</h4>
                    <p>The songs that define, unite and distinguish...</p>
                </div>

                <div class="item">
                    <img src="./images/The Sound of Hyderabad.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>The Sound of Hyde...</h4>
                    <p>The songs that define, unite and distinguish...</p>
                </div>


            </div>

            <hr>
        </div>

    </div>

    <div class="preview">
        <div class="text">
            <h6>Preview of Spotify</h6>
            <p>Enjoy your favourate songs.Spotify provide wide range of songs</p>
        </div>
        <div class="button">
        <button type="button" style="background-color: white; transition: background-color 0.3s;"
    onmouseover="this.style.backgroundColor='darkgreen'" onmouseout="this.style.backgroundColor='white'">
    Welcome to Spotify
</button>

        </div>
    </div>


    <script src="https://kit.fontawesome.com/ef9a692198.js" crossorigin="anonymous"></script>
</body>

</html>