<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Agents</span>
    <h2>Agents</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer agents">

<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">

            <?php 
      $json_string = file_get_contents('agents.json');
      $data = json_decode($json_string, true); 
      foreach($data as $agent){ ?>  
      <!-- agents -->
      <div class="row">     
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="images/<?php echo $agent['pic']?>" class="img-responsive"  alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4><?php echo $agent['name']?></h4><p><?php echo $agent['title']?></p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com"><?php echo $agent['email']?></a><br>
        <span class="glyphicon glyphicon-earphone"></span> <?php echo $agent['tel']?></div>
      </div> 
    <?php
    }
    ?>
    <!-- agents --> 
        
      
      
      <!-- agents -->

      <!-- agents -->
      <!-- <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="images/agents/1.jpg" class="img-responsive"  alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>John Smith</h4><p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">abc@realestete.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (9009) 899 889</div>
      </div> -->
      <!-- agents -->
      
       <!-- agents -->
      <!-- <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="images/agents/2.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>John Smith</h4><p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">abc@realestete.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (9009) 899 889</div>
      </div> -->
      <!-- agents -->
      

       <!-- agents -->
 <!--      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="images/agents/3.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>John Smith</h4><p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">abc@realestete.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (9009) 899 889</div>
      </div> -->
      <!-- agents -->
      

       <!-- agents -->
<!--       <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="images/agents/4.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>John Smith</h4><p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">abc@realestete.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (9009) 899 889</div>
      </div> -->
      <!-- agents -->
      
     
  </div>
</div>


</div>
</div>

<?php include'footer.php';?>