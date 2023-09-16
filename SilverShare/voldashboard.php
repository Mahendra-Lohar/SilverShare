<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | By Code Info</title>
  <link rel="stylesheet" href="elddashboard.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <script src="sender\sender.js"></script>
</head>
<body>
  <div class="container">
    <nav>
        <h3>SilverShare</h3>
      <ul>
        <li><a href="#" class="logo">
          <!-- <span class="">SilverShare</span> -->
          
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <!-- <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item">Event Scheduling</span>
        </a></li> -->
        <li><a href="#videocall-content" id="videocall">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Videocall</span>
        </a></li>
        <!-- <li><a href="">
            <i class="fas fa-comments"></i>
            <span class="nav-item">Chat</span>
          </a></li> -->
        <li><a href="">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <div id="videocall-content">
    <div>
            <input placeholder="Enter username..."
                    type="text"
                    id="username-input" /><br>
            <button onclick="sendUsername()">Send</button>
            <button onclick="startCall()">Start Call</button>
        </div>
        <div id="video-call-div">
            <video muted id="local-video" autoplay></video>
            <video id="remote-video" autoplay></video>
            <div class="call-action-div">
                <button onclick="muteVideo()">Mute Video</button>
                <button onclick="muteAudio()">Mute Audio</button>
            </div>
        </div>
        <div>
    <script id="cid0020000355831613721" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 100%;height: 100%;">{"handle":"communitychatsilvers","arch":"js","styles":{"a":"0084ef","b":100,"c":"FFFFFF","d":"FFFFFF","k":"0084ef","l":"0084ef","m":"0084ef","n":"FFFFFF","p":"10","q":"0084ef","r":100,"usricon":0.99}}</script></div>
  </div>
  </div>
</body>
</html>
