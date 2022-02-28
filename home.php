
<?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Hmm K</h1>
        <p class="lead">Some retro shit</p>
    </div>

    <!-- OTHER-->
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">First Stuff</h4>
            </div>
            <div class="card-body">
                
                <a class="btn btn-primary " href="#">
                    <img src="assets/icons/video_-0.png" class="icon-16"> Video background
                </a>
                <p>Page with video background.</p>
				
				

            </div>
        </div>
    </div>
     <!-- OTHER-->
     <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Other things</h4>
            </div>
            <div class="card-body">
                
                <a class="btn btn-primary" href="#">
                    <img src="assets/icons/video_-0.png" class="icon-16"> Video background
                </a>
                <p>Page with video background.</p>
				
				<a class="btn btn-primary " href="cloud.html">
                    <img src="assets/icons/world_network_directories-1.png" class="icon-16"> Cloud
                </a>
                <p>Cloud hosting landing page template.</p>
				
				<a class="btn btn-primary " href="mobile.html">
                    <img src="assets/icons/laptop_infrared-2.png" class="icon-16"> Mobile
                </a>
                <p>Mobile app landing page template.</p>
				

            </div>
        </div>
    </div>
     <!-- OTHER-->
     <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Other things</h4>
            </div>
            <div class="card-body">
                
                <a class="btn btn-primary " href="video-background.html">
                    <img src="assets/icons/video_-0.png" class="icon-16"> Video background
                </a>
                <p>Page with video background.</p>
				
				<a class="btn btn-primary " href="cloud.html">
                    <img src="assets/icons/world_network_directories-1.png" class="icon-16"> Cloud
                </a>
                <p>Cloud hosting landing page template.</p>
				
				<a class="btn btn-primary " href="mobile.html">
                    <img src="assets/icons/laptop_infrared-2.png" class="icon-16"> Mobile
                </a>
                <p>Mobile app landing page template.</p>
				

            </div>
        </div>
    </div>

</div>

<footer class="taskbar">
      <div class="row" style="margin-right: 0px;">
          <div class="col-8">
          <button class="btn start-button" onclick="crt()"><img src="../assets/icons/fs.png" class="icon-16"> CRT Mode</button>
              <button class="btn start-button" onclick="openFullscreen();"><img src="../assets/icons/fs.png" class="icon-16">Open Fullscreen</button>
            <button class="btn start-button" onclick="closeFullscreen();"><img src="../assets/icons/no_fs.png" class="icon-16">Close Fullscreen</button>
           
          </div>
          <div class="col-4 time">Side</div>
      </div>
 
  </footer>


<?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>

