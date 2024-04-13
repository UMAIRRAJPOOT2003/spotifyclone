<html>
    <head>
        <style>
            @charset "UTF-8";
body {
  background: #181818;
  font-family: "Roboto", sans-serif;
}
body a {
  color: #aaaaaa;
}
body a:hover {
  color: #c8c8c8;
}



.artist {
  height: 617px;
  overflow-y: scroll;
}

.artist__header {
  height: 320px;
  border-bottom: 1px solid #282828;
  position: relative;
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/spotify_img_bground.png);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
  z-index: 1;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  align-items: flex-end;
}
.artist__header:before {
  content: " ";
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  opacity: 0.15;
  background-image: url('./images/Deep Focus.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top;
}
.artist__header .artist__info {
  padding: 15px;
  z-index: 1;
  width: 80%;
  margin-top: 78px;
  display: flex;
  flex-flow: row wrap;
  align-items: flex-end;
}
.artist__header .artist__info .profile__img {
  margin-right: 15px;
}
.artist__header .artist__info .profile__img img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
.artist__header .artist__info__type {
  color: #aaaaaa;
  text-transform: uppercase;
  font-size: 11px;
  letter-spacing: 1px;
}
.artist__header .artist__info__name {
  color: white;
  font-size: 36px;
  font-weight: 100;
  padding: 0 0 10px 0;
}
.artist__header .artist__info__actions {
  display: flex;
  flex-flow: row wrap;
}

.artist__header .artist__listeners {
  width: 20%;
  z-index: 1;
  padding: 15px;
  text-align: right;
  color: #aaaaaa;
  font-weight: 100;
  font-size: 16px;
  letter-spacing: 1px;
}
.artist__header .artist__listeners__label {
  font-weight: 300;
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 1px;
}
.artist__header .artist__navigation {
  width: 100%;
  z-index: 1;
  background: rgba(24, 24, 24, 0.6);
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  align-items: center;
}

.artist__header .artist__navigation__friends {
  padding: 15px;
}
.artist__header .artist__navigation__friends img {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  position: relative;
}

.artist.is-verified .profile__img {
  position: relative;
}
.artist.is-verified .profile__img:after {
  font-family: "Ionicons";
  content: "";
  position: absolute;
  bottom: 5px;
  right: 25px;
  color: white;
  background: #4688d7;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  text-align: center;
  font-size: 18px;
  line-height: 1;
}
.artist__content {
  padding: 15px;
}
.artist__content .overview {
  display: flex;
  flex-flow: row wrap;
}
.artist__content .overview__artist {
  padding-right: 15px;
  width: 70%;
}
.artist__content .overview__artist .latest-release {
  margin-bottom: 30px;
  display: flex;
  flex-flow: row wrap;
}
.artist__content .overview__artist .latest-release__art {
  width: 75px;
}
.artist__content .overview__artist .latest-release__art img {
  width: 75px;
  height: 75px;
}
.artist__content .overview__artist .latest-release__song {
  width: calc( 100% - 75px );
  padding: 10px 15px;
  background: #282828;
  color: #aaaaaa;
  display: flex;
  flex-flow: column wrap;
  justify-content: space-between;
}
.artist__content .overview__artist .latest-release__song__title {
  color: #c8c8c8;
}

.tracks {
  display: flex;
  flex-flow: column wrap;
  margin-bottom: 15px;
}
.tracks__heading {
  color: #aaaaaa;
  height: 42px;
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}
.tracks__heading__number {
  margin-left: 10px;
  font-style: italic;
}
.tracks__heading__title {
  margin-left: 70px;
  width: 45%;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.tracks__heading__length {
  margin-left: auto;
  font-size: 20px;
}

.tracks .track {
  border-top: 1px solid #282828;
  height: 42px;
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}
.tracks .track:hover {
  background: #282828;
}
.tracks .track:last-child {
  border-bottom: 1px solid #282828;
}
.tracks .track__art img {
  width: 42px;
  height: 42px;
}
.tracks .track__number {
  margin-left: 10px;
  color: #aaaaaa;
  width: 12px;
}
.tracks .track__added {
  margin-left: 30px;
  color: #c8c8c8;
}

.tracks .track__title {
  width: 45%;
  margin-left: 30px;
  color: white;
}

.tracks .track__title.featured .feature {
  color: #aaaaaa;
}

.tracks .track__length {
  margin-left: auto;
  color: #aaaaaa;
}

.overview__albums {
  width: 145%;
  margin-top: 30px;
}
.overview__albums__head {
  border-bottom: 1px solid #282828;
  margin-bottom: 10px;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  align-items: center;
}

.album__info {
  margin-bottom: 15px;
  display: flex;
  flex-flow: row wrap;
}
.album__info__art img {
  width: 135px;
  height: 135px;
}
.album__info__meta {
  width: calc( 100% - 150px);
  margin-left: 15px;
  display: flex;
  flex-flow: column wrap;
}
.album__info__meta .album__year {
  color: #aaaaaa;
  letter-spacing: 1px;
}
.album__info__meta .album__name {
  color: white;
  font-size: 30px;
  font-weight: 100;
}
.album__info__meta .album__actions {
  margin-top: auto;
}

.album__info__meta .album__actions .save:hover {
  border-color: #1ed760;
}
.album__info__meta .album__actions .more {
  width: -10px;
  height: -10px;
  border-radius: 50%;
  padding: 0;
  text-align: center;
}
.album .track__title {
  width: 70%;
}

::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background: #373737;
}

button {
  border-radius: 20px;
  border: none;
  padding: 5px 15px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 11px;
  outline: none;
}
button:hover {
  cursor: pointer;
}

.button-dark {
  background: #1ed760;
  color: white;
  border: 1px solid #1ed760;
}
.button-dark:hover {
  background: #43e57d;
}

.button-light {
  background: none;
  color: #c8c8c8;
  border: 1px solid #c8c8c8;
}
.button-light:hover {
  border-color: white;
  color: white;
}

.section-title {
  text-transform: uppercase;
  color: #aaaaaa;
  letter-spacing: 1.25px;
  font-size: 13.2px;
  margin-bottom: 10px;
}

            </style>
      <script type="text/javascript" src="{{ URL::asset('js/song.js') }}"></script>
    </head>
    <body>
    
    <section class="header">
<div class="page-flows">

  <span class="flow">
    <i class="ion-chevron-left"></i>
  </span>
  
  <span class="flow">
    <i class="ion-chevron-right disabled"></i>
  </span>
  
</div>

<div class="user">

  <div class="user__notifications">
  
    <i class="ion-android-notifications"></i>
    
  </div>
  
  <div class="user__inbox">
  
    <i class="ion-archive"></i>
    
  </div>
    </span>
    </section>

    <div class="playing__add">

      <i class="ion-checkmark"></i>

    </div>

  </section>

</div>

<div class="content__middle">

  <div class="artist is-verified">
  
    <div class="artist__header">
    
      <div class="artist__info">
      
        <div class="profile__img">
        
          <img src="./images/harry.jpg" alt="G-Eazy" />
          
        </div>
        
        <div class="artist__info__meta">
        
          <div class="artist__info__type">Artist</div>
          
          <div class="artist__info__name">Harry Styles</div>
          
          <div class="artist__info__actions">
          
            <button class="button-dark">
              <i class="ion-ios-play"></i>
              Play
            </button>
            
            <button class="button-light">Follow</button>
          </div>
        </div>
      </div>
      
      <div class="artist__listeners">
      
        <div class="artist__listeners__count">5,223,498</div>
        
        <div class="artist__listeners__label">Monthly Listeners</div>

      </div>
      
      <div class="artist__navigation">
        <div class="artist__navigation__friends">
        
          <a href="#">
            <img src="http://zblogged.com/wp-content/uploads/2015/11/17.jpg" alt="" />
          </a>
          
          <a href="#">
            <img src="http://zblogged.com/wp-content/uploads/2015/11/5.png" alt="" />
          </a>
          
          <a href="#">
            <img src="http://cdn.devilsworkshop.org/files/2013/01/enlarged-facebook-profile-picture.jpg" alt="" />
          </a>
          
        </div>
        
      </div>
      
    </div>
    
    <div class="artist__content">
    
      <div class="tab-content">
    
        <div role="tabpanel" class="tab-pane active" id="artist-overview">
          
          <div class="overview">
          
            <div class="overview__artist">
          
              
              <div class="section-title">Latest Release</div>

              <div class="latest-release">

                <div class="latest-release__art">

                  <img src="./images/harryalbum.png" alt="When It's Dark Out" />

                </div>

                <div class="latest-release__song">

                  <div class="latest-release__song__title">Grape Juice (Track Commentary)</div>

                  <div class="latest-release__song__date">

                    <span class="day">2</span>

                    <span class="month">Mar</span>

                    <span class="year">2022</span>

                  </div>

                </div>

              </div>

            <div class="overview__albums">
            
              <div class="overview__albums__head">
              
                <span class="section-title">Albums</span>
                
              </div>
              
              <div class="album">
              
                <div class="album__info">
                
                  <div class="album__info__art">
                  
                    <img src="./images/harryalbum.png" alt="When It's Dark Out" />
                    
                  </div>
                  
                  <div class="album__info__meta">
                  
                    <div class="album__year">2022</div>
                    
                    <div class="album__name">Harry's House</div>
                    
                    <div class="album__actions">
                    
                      <button class="button-light save">Save</button>
                      
                      <button class="button-light more">
                        <i class="ion-ios-more"></i>
                      </button>
                      
                    </div>
                    
                  </div>
                  
                </div>
                
                <div class="album__tracks">
                
                  <div class="tracks">
                    
                    <div class="tracks__heading">
                    
                      <div class="tracks__heading__number">#</div>
                      
                      <div class="tracks__heading__title">Song</div>
                      
                      <div class="tracks__heading__length">
                      
                        <i class="ion-ios-stopwatch-outline"></i>
                        
                      </div>

                    </div>

                    <?php

$servername="localhost";
$username="root";
$password="";
$dbname="dbfinalproject";
$conn=new mysqli($servername, $username, $password, $dbname);

if($conn){
    
    $query = "SELECT * FROM artist4";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result); 
                           $songId = $row['ID'];
                           $songName = $row['SONGS'];
                           $songDuration = $row['DURATION'];
                   
                           echo'<div class="track">';
                   
                                        echo" <div class='track__number'>$songId</div>";
                   
                                         echo'<div class="track__added">';
                   
                                          echo' <i class="ion-checkmark-round added"></i>';
                   
                                        echo' </div>';
                   
                                        
                   
                                         echo'<div class="track__title featured">';
                                        
                                           
                                          echo" <span class='title' style='top:9px;position:relative;'>$songName</span>";
                                          echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration</div>";
                                          
                                         
                                         echo'</div>';
                   
                                         echo'<div class="track__explicit">';
                                         echo "<div><button type='submit' class='btn btn-primary audio-control pause' data-audio='/audio/before.mp3' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                         onmouseover=\"this.style.backgroundColor='red'\"
                                         onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                 
                                 echo "<div><button type='submit' class='btn btn-primary audio-control play' data-audio='/audio/before.mp3' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                         onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                         onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";

                                        
                   
                                        echo' </div>';
                                         
                                       
                                         
                                      echo' </div>';


                  
                   
                    
                   
                       $row = mysqli_fetch_assoc($result); 
                           $songId2 = $row['ID'];
                           $songName2 = $row['SONGS'];
                           $songDuration2 = $row['DURATION'];
                   
                           echo'<div class="track">';
                   
                                        echo" <div class='track__number'>$songId2</div>";
                   
                                         echo'<div class="track__added">';
                   
                                          echo' <i class="ion-checkmark-round added"></i>';
                   
                                        echo' </div>';
                   
                                        
                   
                                         echo'<div class="track__title featured">';
                                        
                                           
                                          echo" <span class='title' style='top:9px;position:relative;'>$songName2</span>";
                                          echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration2</div>";
                                          
                                         
                                         echo'</div>';
                   
                                         echo'<div class="track__explicit">';
                                         echo "<div><button type='submit' class='btn btn-primary audio-control pause' data-audio='/audio/asitwas.mp3' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                         onmouseover=\"this.style.backgroundColor='red'\"
                                         onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                 
                                 echo "<div><button type='submit' class='btn btn-primary audio-control play' data-audio='/audio/asitwas.mp3' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                         onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                         onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";

                                        
                   
                                        echo' </div>';
                                         
                                       
                                         
                                      echo' </div>';


                                      $row = mysqli_fetch_assoc($result); 
                                      $songId3 = $row['ID'];
                                      $songName3 = $row['SONGS'];
                                      $songDuration3 = $row['DURATION'];
                              
                                      echo'<div class="track">';
                              
                                                   echo" <div class='track__number'>$songId3</div>";
                              
                                                    echo'<div class="track__added">';
                              
                                                     echo' <i class="ion-checkmark-round added"></i>';
                              
                                                   echo' </div>';
                              
                                                   
                              
                                                    echo'<div class="track__title featured">';
                                                   
                                                      
                                                     echo" <span class='title' style='top:9px;position:relative;'>$songName3</span>";
                                                     echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration3</div>";
                                                     
                                                    
                                                    echo'</div>';
                              
                                                    echo'<div class="track__explicit">';
                                                    echo "<div><button type='submit' class='btn btn-primary audio-control pause' data-audio='/audio/runaway.mp3' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                    onmouseover=\"this.style.backgroundColor='red'\"
                                                    onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                            
                                            echo "<div><button type='submit' class='btn btn-primary audio-control play' data-audio='/audio/runaway.mp3' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                    onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                                    onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";
           
                                                   
                              
                                                   echo' </div>';
                                                    
                                                  
                                                    
                                                 echo' </div>';


                                                 $row = mysqli_fetch_assoc($result); 
                                                 $songId4 = $row['ID'];
                                                 $songName4 = $row['SONGS'];
                                                 $songDuration4 = $row['DURATION'];
                                         
                                                 echo'<div class="track">';
                                         
                                                              echo" <div class='track__number'>$songId4</div>";
                                         
                                                               echo'<div class="track__added">';
                                         
                                                                echo' <i class="ion-checkmark-round added"></i>';
                                         
                                                              echo' </div>';
                                         
                                                              
                                         
                                                               echo'<div class="track__title featured">';
                                                              
                                                                 
                                                                echo" <span class='title' style='top:9px;position:relative;'>$songName4</span>";
                                                                echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration4</div>";
                                                                
                                                               
                                                               echo'</div>';
                                         
                                                               echo'<div class="track__explicit">';
                                                               echo "<div><button type='submit' class='btn btn-primary' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                               onmouseover=\"this.style.backgroundColor='red'\"
                                                               onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                                       
                                                       echo "<div><button type='submit' class='btn btn-primary' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                               onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                                               onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";
                      
                                                              
                                         
                                                              echo' </div>';
                                                               
                                                             
                                                               
                                                            echo' </div>';


                                                            $row = mysqli_fetch_assoc($result); 
                                                            $songId5 = $row['ID'];
                                                            $songName5 = $row['SONGS'];
                                                            $songDuration5 = $row['DURATION'];
                                                    
                                                            echo'<div class="track">';
                                                    
                                                                         echo" <div class='track__number'>$songId5</div>";
                                                    
                                                                          echo'<div class="track__added">';
                                                    
                                                                           echo' <i class="ion-checkmark-round added"></i>';
                                                    
                                                                         echo' </div>';
                                                    
                                                                         
                                                    
                                                                          echo'<div class="track__title featured">';
                                                                         
                                                                            
                                                                           echo" <span class='title' style='top:9px;position:relative;'>$songName5</span>";
                                                                           echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration5</div>";
                                                                           
                                                                          
                                                                          echo'</div>';
                                                    
                                                                          echo'<div class="track__explicit">';
                                                                          echo "<div><button type='submit' class='btn btn-primary' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                          onmouseover=\"this.style.backgroundColor='red'\"
                                                                          onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                                                  
                                                                  echo "<div><button type='submit' class='btn btn-primary' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                          onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                                                          onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";
                                 
                                                                         
                                                    
                                                                         echo' </div>';
                                                                          
                                                                        
                                                                          
                                                                       echo' </div>';


                                                                       $row = mysqli_fetch_assoc($result); 
                                                                       $songId6 = $row['ID'];
                                                                       $songName6 = $row['SONGS'];
                                                                       $songDuration6 = $row['DURATION'];
                                                               
                                                                       echo'<div class="track">';
                                                               
                                                                                    echo" <div class='track__number'>$songId6</div>";
                                                               
                                                                                     echo'<div class="track__added">';
                                                               
                                                                                      echo' <i class="ion-checkmark-round added"></i>';
                                                               
                                                                                    echo' </div>';
                                                               
                                                                                    
                                                               
                                                                                     echo'<div class="track__title featured">';
                                                                                    
                                                                                       
                                                                                      echo" <span class='title' style='top:9px;position:relative;'>$songName6</span>";
                                                                                      echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration6</div>";
                                                                                      
                                                                                     
                                                                                     echo'</div>';
                                                               
                                                                                     echo'<div class="track__explicit">';
                                                                                     echo "<div><button type='submit' class='btn btn-primary' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                     onmouseover=\"this.style.backgroundColor='red'\"
                                                                                     onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                                                             
                                                                             echo "<div><button type='submit' class='btn btn-primary' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                     onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                                                                     onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";
                                            
                                                                                    
                                                               
                                                                                    echo' </div>';
                                                                                     
                                                                                   
                                                                                     
                                                                                  echo' </div>';


                                                                                  $row = mysqli_fetch_assoc($result); 
                                                                                  $songId7 = $row['ID'];
                                                                                  $songName7 = $row['SONGS'];
                                                                                  $songDuration7 = $row['DURATION'];
                                                                          
                                                                                  echo'<div class="track">';
                                                                          
                                                                                               echo" <div class='track__number'>$songId7</div>";
                                                                          
                                                                                                echo'<div class="track__added">';
                                                                          
                                                                                                 echo' <i class="ion-checkmark-round added"></i>';
                                                                          
                                                                                               echo' </div>';
                                                                          
                                                                                               
                                                                          
                                                                                                echo'<div class="track__title featured">';
                                                                                               
                                                                                                  
                                                                                                 echo" <span class='title' style='top:9px;position:relative;'>$songName7</span>";
                                                                                                 echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration7</div>";
                                                                                                 
                                                                                                
                                                                                                echo'</div>';
                                                                          
                                                                                                echo'<div class="track__explicit">';
                                                                                                echo "<div><button type='submit' class='btn btn-primary' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                                onmouseover=\"this.style.backgroundColor='red'\"
                                                                                                onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                                                                        
                                                                                        echo "<div><button type='submit' class='btn btn-primary' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                                onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                                                                                onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";
                                                       
                                                                                               
                                                                          
                                                                                               echo' </div>';
                                                                                                
                                                                                              
                                                                                                
                                                                                             echo' </div>';


                                                                                             $row = mysqli_fetch_assoc($result); 
                                                                                             $songId8 = $row['ID'];
                                                                                             $songName8 = $row['SONGS'];
                                                                                             $songDuration8 = $row['DURATION'];
                                                                                     
                                                                                             echo'<div class="track">';
                                                                                     
                                                                                                          echo" <div class='track__number'>$songId8</div>";
                                                                                     
                                                                                                           echo'<div class="track__added">';
                                                                                     
                                                                                                            echo' <i class="ion-checkmark-round added"></i>';
                                                                                     
                                                                                                          echo' </div>';
                                                                                     
                                                                                                          
                                                                                     
                                                                                                           echo'<div class="track__title featured">';
                                                                                                          
                                                                                                             
                                                                                                            echo" <span class='title' style='top:9px;position:relative;'>$songName8</span>";
                                                                                                            echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration8</div>";
                                                                                                            
                                                                                                           
                                                                                                           echo'</div>';
                                                                                     
                                                                                                           echo'<div class="track__explicit">';
                                                                                                           echo "<div><button type='submit' class='btn btn-primary' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                                           onmouseover=\"this.style.backgroundColor='red'\"
                                                                                                           onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                                                                                   
                                                                                                   echo "<div><button type='submit' class='btn btn-primary' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                                           onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                                                                                           onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";
                                                                  
                                                                                                          
                                                                                     
                                                                                                          echo' </div>';
                                                                                                           
                                                                                                         
                                                                                                           
                                                                                                        echo' </div>';


                                                                                                        $row = mysqli_fetch_assoc($result); 
                                                                                                        $songId9 = $row['ID'];
                                                                                                        $songName9 = $row['SONGS'];
                                                                                                        $songDuration9 = $row['DURATION'];
                                                                                                
                                                                                                        echo'<div class="track">';
                                                                                                
                                                                                                                     echo" <div class='track__number'>$songId9</div>";
                                                                                                
                                                                                                                      echo'<div class="track__added">';
                                                                                                
                                                                                                                       echo' <i class="ion-checkmark-round added"></i>';
                                                                                                
                                                                                                                     echo' </div>';
                                                                                                                      echo'<div class="track__title featured">';
                                                                                                                     
                                                                                                                       echo" <span class='title' style='top:9px;position:relative;'>$songName9</span>";
                                                                                                                       echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration9</div>";

                                                                                                                      echo'</div>';
                                                                                                                      echo'<div class="track__explicit">';
                                                                                                                      echo "<div><button type='submit' class='btn btn-primary' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                                                      onmouseover=\"this.style.backgroundColor='red'\"
                                                                                                                      onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                                                                                              
                                                                                                              echo "<div><button type='submit' class='btn btn-primary' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                                                      onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                                                                                                      onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";
                                                                                                                     echo' </div>';   
                                                                                                                   echo' </div>';

                                                                                                                   $row = mysqli_fetch_assoc($result); 
                                                                                                                   $songId10 = $row['ID'];
                                                                                                                   $songName10 = $row['SONGS'];
                                                                                                                   $songDuration10 = $row['DURATION'];
                                                                                                           
                                                                                                                   echo'<div class="track">';
                                                                                                           
                                                                                                                                echo" <div class='track__number'>$songId10</div>";
                                                                                                           
                                                                                                                                 echo'<div class="track__added">';
                                                                                                           
                                                                                                                                  echo' <i class="ion-checkmark-round added"></i>';
                                                                                                           
                                                                                                                                echo' </div>';
                                                                                                           
                                                                                                                                
                                                                                                           
                                                                                                                                 echo'<div class="track__title featured">';
                                                                                                                                
                                                                                                                                   
                                                                                                                                  echo" <span class='title' style='top:9px;position:relative;'>$songName10</span>";
                                                                                                                                  echo"<div style='left:120%;top:-10px;position:relative;color:grey;'>$songDuration10</div>";
                                                                                                                                  
                                                                                                                                 
                                                                                                                                 echo'</div>';
                                                                                                           
                                                                                                                                 echo'<div class="track__explicit">';
                                                                                                                                 echo "<div><button type='submit' class='btn btn-primary' name='pause' style='top:7px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                                                                 onmouseover=\"this.style.backgroundColor='red'\"
                                                                                                                                 onmouseout=\"this.style.backgroundColor='white'\">Pause</button></div>";
                                                                                                                         
                                                                                                                         echo "<div><button type='submit' class='btn btn-primary' name='play' style='left: -80px;top:-25px; position:relative;background-color: white; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer; transition: background-color 0.3s; color:#181818;'
                                                                                                                                 onmouseover=\"this.style.backgroundColor='darkgreen'\"
                                                                                                                                 onmouseout=\"this.style.backgroundColor='white'\">Play</button></div>";
                                                                                        
                                                                                                                                
                                                                                                           
                                                                                                                                echo' </div>';
                                                                                                                                 
                                                                                                                               
                                                                                                                                 
                                                                                                                              echo' </div>';
                           
}
                      
    else{
     die("connection failed:".mysqli_connect_error());
  }
    ?>
                  </div>
                  
                </div>
                
              </div>
              
            </div>
            
          </div>
        
        </div>
</section>
    </body>
</html>



