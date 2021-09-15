<?php
session_start();
require("./header.php");

?>

<!-- Обо мне-->
 
  <section>
  
    
        <h2 class="about_title" >Об Lorem </h2>
        <p class="abot_text" > Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
      </div>
      </div>
    </div>

   
      
        <div class="projekts d-flex row-fluid  ">
          <img class="projeks_img  " src="img/project.png" alt="">
          
          <div class="projekts_block col-1 ">
            <h3 class="projekt_title" >123</h3>
            <p class="projekt_text" >Килов</p>
          </div>
          <img class="projeks_img  " src="img/project.png" alt="">
          <div class="projekts_block col-1 ">
            <h3 class="projekt_title" >123</h3>
            <p>Килов</p>
          </div>
          <img class="projeks_img  " src="img/project.png" alt="">
          <div class="projekts_block col-1 ">
            <h3 class="projekt_title" >123</h3>
            <p>Килов</p>
          </div>
          <img class="projeks_img  " src="img/project.png" alt="">
          <div class="projekts_block col-1 ">
            <h3 class="projekt_title" >123</h3>
            <p>Килов</p>
        </div>
        <img class="projeks_img  " src="img/project.png" alt="">
          <div class="projekts_block col-1 ">
            <h3 class="projekt_title" >123</h3>
            <p>Килов</p>
          </div>
          <img class="projeks_img  " src="img/project.png" alt="">
          <div class="projekts_block col-1 ">
            <h3 class="projekt_title" >123</h3>
            <p>Килов</p>
          </div>
      </div>
    </section>
 

    <section>
        <div class="container">
  <div class="row">
    
    <div class="col-lg-5 wow fadeInLeft ">
      <h4  class="skills_title" >test</h4>
            <p  class="skills_text">test</p>
      <div class="container">

        <div class="skills html">.</div>
      </div>

      <p class="skills_text" >test</p>
      <div class="container">
        <div class="skills css">.</div>
      </div>

      <p class="skills_text" >test</p>
      <div class="container">
        <div class="skills js">.</div>
      </div>

      <p class="skills_text" >test </p>
      <div class="container">
        <div class="skills php">.</div>
      </div>
      </div>
      <div class="col-lg-6 ml-auto " >
        <div class="my_skills_img wow fadeInRight ">
        <img class="skills_photo" src="img/Rectangle 3.png" alt="">
        </div>
  </div>
  
    
 
  </div>
  </div>

    
      
    </section>


    <?php
	require("./galery.php");
	?>


   <section>
     <div class="container">
      
       <div class="row  ">
        <div class="col-lg-12">
          <div class="microsoft d-flex ">
          <div  class="microsoft_img"   >
            <img src="img/Rectangle 9.png" alt="">
          </div>
          <div  class="microsoft_img"   >
            <img src="img/Rectangle 9.png" alt="">
          </div>
          <div  class="microsoft_img"   >
            <img class="microsoft_img" src="img/Rectangle 9.png" alt="">
          </div>
          <div  class="microsoft_img"   >
            <img src="img/Rectangle 9.png" alt="">
          </div>
          

        </div>
         
       </div>
     </div>
     </div>
   </section>
   <div class="container  ">
     <h2 class="about_title" >   lorem </h2>
        <p class="abot_text" > Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
          <div class="row">
            <div class="contact">
              <div class="form_input">
            <form name="feedback" action="./feedback_form.php" class="form" method="post">
			<div class="text-success" ><?=$_SESSION['success']?></div>
			<div class="text-danger"><?=$_SESSION["error_username"]?></div>
              <input type="text" placeholder="Name" name="name" value="<?=$_SESSION["name"]?>" > 
			 <div class="text-danger"><?=$_SESSION["error_email"]?></div>
              <input type="email" placeholder="Ваш e-mail" name="email" value="<?=$_SESSION["email"]?>" > 
            </div>
			<div class="text-danger"><?=$_SESSION["error_text"]?></div>
            <textarea name="text_input" cols="72" rows="10"><?=$_SESSION["text_input"]?></textarea>
            <div class="btn_block">
              <input type="submit" value="Отправить" >
            </div>
            </form>

          </div>
          </div>
      </div>
      </div>
    </div>
       
     
   </div>

   <footer>
    <div class="container">
      <div class="col-lg-12">
        <p class="footer_title" >Gristen</p>

    </div>
    <div class="col-lg-12">
      <p class="footer_text" >(с) 2021. да.</p>
   </div>


    </div>
     
   </footer>


<script>
    $.ajax({
        url: /main.php,
        type: "POST",
        data: test=1,
        success: function (data){
            if (data!='success') {alert("данные получены");}
        },

    });
</script>



  

 

  





































































   

































  
<!--  -->
 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script src="js/marin.js"></script> 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>