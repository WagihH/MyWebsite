<!doctype html>

<html>
  <head>
    <link rel="stylesheet" href="css/mysite.css">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href = "css/jquery.convform.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
  </head>
  <body>

    <section id = "openingSection" style="background-image: url('images/openingBackground.svg'); background-size:cover;background-attachment: relative; background-position: center center; background-repeat: no-repeat; height:100%">
 
      <header>
        <div class="container">
            <img src="images/signature.jpg" alt="signature" class="logo" style="height:100%; width:7%">
            <nav>
              <ul>
                <li><a href="#"><b>Home</b></a></li>
                <li><a href="resume.htm"><b>Resume</b></a></li>
                <li><a href="#"><b>More</b></a></li>
              </ul>
            </nav>
        </div>
      </header>
    

      <div class="fade-in one" style="width:100%; height:90%">
          <div style="padding-top:200px; position:relative">
            <p style="padding-left:50px;margin:auto; font-size:6vw; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height:1"> Wagih <br>
              Henawi 
            </p>
          </div>
          <br>
        <div class="fade-in two">
          <p style="color:black;padding-left:50px; margin:auto; font-size:2vw; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; text-overflow: ellipsis">
            <em> Economics and Computer Science <br> Major at Grinnell College </em>
          </p>
          <div style = "float:left;padding-left:50px; padding-top:20px;">
            <a href="https://www.linkedin.com/in/wagih-henawi-28610217b/" style = "font-size:30px;" class="fa fa-linkedin"></a>
            <a href="https://github.com/WagihH" style = "font-size:30px;" class="fa fa-github"></a>

          </div>
                
          <div class="popup" style="float:left" onclick="popupFunction()"><strong>Contact Me</strong>
            <span class="popuptext" id="myPopup"><a href = "mailto: waynehenawi@gmail.com">waynehenawi@gmail.com</a> <br> (917) 463-7466</span>
          </div>
        </div>
      </div>
    </section>


<section id = "about" style="background-image: url('images/beigeBackground.svg'); background-size:cover;background-attachment: static;background-position: center center; background-repeat: no-repeat; height:70vw; border:none"> 
	
	<section style="height:20vw; background-image: url('images/about.svg'); background-size:cover; background-attachment:fixed; background-position: center center; background-repeat: no-repeat;"> </section>
	
  <section style="width:50%;float:left">
     <img src="images/data_analysis.png" alt="DataAnalysis" style="height:30vw; background-attachment: static; width:30vw; float:right; padding-top:100px; padding-left:100px; padding-right:100px; padding-bottom: 100px">
  </section>

  <!-- ChatBot-->
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="js/custom.js"></script> 
  <script type="text/javascript" src="js/jquery.convform.js"></script> 


  <div class = "chatIcon">
    <i class="fa fa-comments"></i>
  </div>

  <div class="chatBox">
    <div class="conv-form-wrapper">
      <form action="" method="GET" class="hidden">
        <select name="introQuestion" data-conv-question="Hi, welcome to my website! How can I help you?">
          <option value="siteQuestion">What is this website?</option>
          <option value="skillsQuestion">What are your skills?</option>
          <option value="personalQuestion">Tell me about yourself.</option>
        </select>

        <div data-conv-fork="introQuestion">

          <div data-conv-case="siteQuestion">
            <select name="siteBranchQ2" data-conv-question="This website is a personal project of mine.
             I really wanted to challenge myself by making my own website, and this is the outcome (so far!)." >            
              <option value="skillsQuestion">What are your skills?</option>
              <option value="personalQuestion">Tell me about yourself.</option>
            </select>

            <div data-conv-fork="siteBranchQ2">

              <div data-conv-case="skillsQuestion">
                <select name="siteBranchQ3" data-conv-question="My primary focus is in the intersection between computer science, economics, and statistics. 
                I have experience in R, SQL, Java, PHP, HTML, and CSS. I have also had business school experience, through Harvard Business School Online CORe, and consulting case experience.">            
                  <option value="personalQuestion">Tell me about yourself.</option>
                </select>
              </div>
            
              <div data-conv-case="personalQuestion">
                <select name="siteBranchQ3" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs. 
                My goals lie in applying machine learning, statistics, and logic to add real value to a firm. 
                My hobbies and interests include personal finance, weightlifting, reading, and playing video games.">            
                  <option value="skillsQuestion">What are your skills?</option>
                </select>
              </div>

              <div data-conv-fork="siteBranchQ3">

                <div data-conv-case="skillsQuestion">
                  <input type="text" data-conv-question="My primary focus is in the 
                    intersection between computer science, economics, and statistics. I have experience in R, SQL, Java, PHP, HTML, and CSS. 
                    I have also had business school experience, through Harvard Business School Online CORe, consulting case experience, and experiences from a couple of business competitions" data-no-answer="true"> 
                    
                    <input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">            
                  
                  <input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">
                  <input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though! 
                    Is there anything you think could be improved on this site?">
                  <input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                    data-conv-question="Great. If its not too personal, what is your email?">
                  <input type="text" name="contact" data-conv-question="Would you like me to contact you?">
                  <input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">
                  <input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">
                </div>
              
                <div data-conv-case="personalQuestion">
                  <input type="text" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs. 
                  My goals lie in applying machine learning, statistics, and logic to add real value to a firm. 
                  My hobbies and interests include personal finance, weightlifting, reading, and playing video games." data-no-answer="true"> 
                    <input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">            
                  
                  <input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">
                  <input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though! 
                    Is there anything you think could be improved on this site?">
                  <input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                    data-conv-question="Great. If its not too personal, what is your email?">
                  <input type="text" name="contact" data-conv-question="Would you like me to contact you?">
                  <input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">
                  <input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">           
                  
                </div>

              </div>
            </div>

          </div>
      
          <div data-conv-case="skillsQuestion">
            <select name="siteBranchQ2" data-conv-question="My primary focus is in the 
            intersection between computer science, economics, and statistics. I have experience in R, SQL, Java, PHP, HTML, and CSS. 
            I have also had business school experience, through Harvard Business School Online CORe, consulting case experience, and experiences from a couple of business competitions" >            
             <option value="siteQuestion">What is this website?</option>
             <option value="personalQuestion">Tell me about yourself.</option>
           </select>

           <div data-conv-fork="siteBranchQ2">

             <div data-conv-case="siteQuestion">
               <select name="siteBranchQ3" data-conv-question="This website is a personal project of mine.
               I really wanted to challenge myself by making my own website, and this is the outcome (so far!).">            
                 <option value="personalQuestion">Tell me about yourself.</option>
               </select>
             </div>
           
             <div data-conv-case="personalQuestion">
               <select name="siteBranchQ3" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs. 
               My goals lie in applying machine learning, statistics, and logic to add real value to a firm. 
               My hobbies and interests include personal finance, weightlifting, reading, and playing video games.">            
                 <option value="siteQuestion">What is this website?</option>
               </select>
             </div>

             <div data-conv-fork="siteBranchQ3">

               <div data-conv-case="siteQuestion">
                 <input type="text" data-conv-question="This website is a personal project of mine.
                 I really wanted to challenge myself by making my own website, and this is the outcome (so far!)." data-no-answer="true"> 
                   
                   <input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">            
                 
                 <input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">
                 <input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though! 
                   Is there anything you think could be improved on this site?">
                 <input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                   data-conv-question="Great. If its not too personal, what is your email?">
                 <input type="text" name="contact" data-conv-question="Would you like me to contact you?">
                 <input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">
                 <input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">
               </div>
             
               <div data-conv-case="personalQuestion">
                 <input type="text" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs. 
                 My goals lie in applying machine learning, statistics, and logic to add real value to a firm. 
                 My hobbies and interests include personal finance, weightlifting, reading, and playing video games." data-no-answer="true"> 
                   <input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">            
                 
                 <input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">
                 <input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though! 
                   Is there anything you think could be improved on this site?">
                 <input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                   data-conv-question="Great. If its not too personal, what is your email?">
                 <input type="text" name="contact" data-conv-question="Would you like me to contact you?">
                 <input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">
                 <input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">           
                 
               </div>

             </div>
           </div>
           
           <div data-conv-case="personalQuestion">
              <select name="siteBranchQ2" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs. 
              My goals lie in applying machine learning, statistics, and logic to add real value to a firm. 
              My hobbies and interests include personal finance, weightlifting, reading, and playing video games." >            
               <option value="siteQuestion">What is this website?</option>
               <option value="skillsQuestion">What are your skills?</option>
             </select>
  
             <div data-conv-fork="siteBranchQ2">
  
               <div data-conv-case="siteQuestion">
                 <select name="siteBranchQ3" data-conv-question="This website is a personal project of mine.
                 I really wanted to challenge myself by making my own website, and this is the outcome (so far!).">            
                   <option value="personalQuestion">What are your skills?</option>
                 </select>
               </div>
             
               <div data-conv-case="skillsQuestion">
                 <select name="siteBranchQ3" data-conv-question="My primary focus is in the 
                 intersection between computer science, economics, and statistics. I have experience in R, SQL, Java, PHP, HTML, and CSS. 
                 I have also had business school experience, through Harvard Business School Online CORe, consulting case experience, and experiences from a couple of business competitions">            
                   <option value="siteQuestion">What is this website?</option>
                 </select>
               </div>
  
               <div data-conv-fork="siteBranchQ3">
                  <div data-conv-case="siteQuestion">
                    <input type="text" data-conv-question="This website is a personal project of mine.
                    I really wanted to challenge myself by making my own website, and this is the outcome (so far!)." data-no-answer="true"> 
                      
                      <input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">            
                    
                    <input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">
                    <input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though! 
                      Is there anything you think could be improved on this site?">
                    <input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                      data-conv-question="Great. If its not too personal, what is your email?">
                    <input type="text" name="contact" data-conv-question="Would you like me to contact you?">
                    <input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">
                    <input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">
                  </div>
               
                  <div data-conv-case="skillsQuestion">
                    <input type="text" data-conv-question="My primary focus is in the 
                    intersection between computer science, economics, and statistics. I have experience in R, SQL, Java, PHP, HTML, and CSS. 
                    I have also had business school experience, through Harvard Business School Online CORe, consulting case experience, and experiences from a couple of business competitions" data-no-answer="true"> 
                      <input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">            
                    
                    <input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">
                    <input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though! 
                      Is there anything you think could be improved on this site?">
                    <input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                      data-conv-question="Great. If its not too personal, what is your email?">
                    <input type="text" name="contact" data-conv-question="Would you like me to contact you?">
                    <input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">
                    <input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">           
                   
                  </div>
                </div>
           </div>
        </div>

      </form>
    </div>
  </div>
  
	<!--
    <section style="width:50%; float:left; overflow-y:hidden">
      <p style="text-align: center; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; padding-top:100px; padding-right:40px; padding-left:40px"> <strong style="font-size: 2.5vw; color: black;" > My passion is solving complex problems.</strong></p>
      <p style="text-align:center; font-size:1.75vw; line-height:1.65; color: black;padding-right:40px; padding-left:40px; padding-bottom:50px "> Hi, I'm Wagih -- a senior at Grinnell College interested in using data to solve various business needs. Navigating the business world is tough, which is why I believe in data-driven decision making. My primary focus is in applying machine learning, statistics, and logic to add real value to a firm.  </p>
    </section>
  -->
  
	</section>

    <section id = "research" style="background-image: url('images/beigeBackground.svg'); background-size:cover; background-attachment: relative; background-position: center center; background-repeat: no-repeat; height:125vw;"> 
    
    <section style="height:20vw; background-image: url('images/research.svg'); background-size:cover; background-attachment:fixed; background-position: center center; background-repeat: no-repeat;"> </section>
  
    <section id="statisticsResearcher">

    <div style="width:40%; float:left">
      <div style = "padding-left:100px; padding-top:60px">
        <div style= "text-align:right; ">
          <img src="images/randomForestDiagram.svg" alt="randomForestDiagram" style=" background-attachment: static; width:100%; align-content: center; height:30vw">
        </div>
      </div>
    </div>

    <div style="width:60%; float:left">
      <div style = "padding-right:30%; padding-top: 100px;">
        <div style= "text-align:left; ">
          <p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">
            <strong style="font-size:1.75vw;">Statistics Researcher</strong> <br>
            <em>May - August 2021</em> 
            <br>
            <strong> Grinnell, IA </strong> 
            <br>
            <br>
            Under the supervision of Dr. Shonda Kuiper, I produced content that teaches undergraduate level students machine learning classification (ML) algorithms, such as CART, random forest, and logistic regression; furthermore, utilizing HTML, PHP, and MySQL, I created webpages that interact with an SQL Database.
            <br>
            <br>
            The ML content is centered around model creation, validation, and optimization and highlights the importance of checking models for bias.
            COMPAS, a classification algorithm used by many U.S. jurisdictions to predict the likelihood of a convicted individual recidivating, has a significantly high false positive rate for Black individuals. 
            The content allows students to explore the results of research done around COMPAS and informs them of how bias was able to creep its way into the model.
            Utilizing R, we created interactive Shiny applications for students to create different classification models to predict recidivism, compare between models using ROC curves, and assess differing accuracy metrics through cross validation. 
          </p>
        </div>
      </div>

    </section>

    <section id="PCA">

      <div style="width:40%; float:left">
        <div style = "padding-left:100px; padding-top:110px; padding-right:4%;">
          <div style= "text-align:right; ">
            <img src="images/hockeyStickGraph.png" alt="hockeyStickGraph" style="border:#000 3px solid; position: static; width:100%; align-content: center; height:20vw">
          </div>
          <div style = "padding-left:50px; padding-right:30px; padding-top:1vw">
            <div style="width:100%">
              <div style="width:15%; float:left;">
                <img src = "images/awardBlue.png" alt="medal" style = "padding-left:3.5vw; background-attachment: static; float:left; width:2.2vw; height:3vw"> 
              </div>
              <div style="width:85%; float: left; text-align: left; padding-top:0.5vw">
                <strong style="font-size: 1vw; padding-left: 3vw;">USCLAP Honorable Mention</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div style="width:60%; float:left">
        <div style = "padding-right:30%; padding-top: 100px;">
          <div style= "text-align:left; ">
            <p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">
              <strong style="font-size:1.75vw;">The Effects of Improper Standardization on Modeling Trends in Surface Temperature</strong>
              <br>
              <br>
              The Mann, Bradley and Hughes’ (MBH, 1998) highly cited ‘hockey-stick shaped’ graph showed a drastic increase in surface temperatures post-industrial revolution.
              While climate change may be one of the largest obstacles for humans to overcome, the techniques used to create these graphs had fundamental flaws when standardizing data. 
              With a group of peers, we recreated and furthered McIntyre and McKitrick's (2003) by conducting a principal component analysis (PCA) simulation and analyzing the probability of falsely obtaining a hockey-stick shaped graph.
              <br>
              <br>
              We generated a 581-by-70 matrix, with the 70 columns representing randomly created red-noise data from an autoregression and the 581 rows representing years. 
              We average and then standardize each series, the values in the 70 columns, at each row. 
              When standardizing, we use MBH's technique and compute Z-scores based on the mean of the last 40, 79, and 140 years. 
              The principal components were then created from randomly selected series and compared to those from a centered dataset, which was properly standardized. 
              We observed no hockey-stick shaped graphs when standardizing from the last 140 years, 71(±1)% hockey-stick shaped graphs when standardizing from the last 79 years, and ~100% when standardizing from the last 40 years.
              For the centered data, there were no hockey-stick shaped graphs. 
              This study confirmed the impact of improper standardization in MBH98 and that research should be properly validated before becoming widely accepted.
            </p>
          </div>
        </div>
    
      </section>

    </section>
  
	
    <section id = "experiences" style="background-image: url('images/beigeBackground.svg'); background-size:cover; background-attachment: relative; background-position: center center; background-repeat: no-repeat; height:160vw;"> <br>
      <section style="height:20vw; background-image: url('images/professionalExperiences.svg'); background-size:cover; background-attachment:fixed; background-position: center center; background-repeat: no-repeat;"> </section>
    
        <section id="Pioneer Weekend">

          <div style="width:40%; float:left">
            <div style = "padding-left:100px; padding-top:110px; padding-right:4%; ">
              <div style= "text-align:right; ">
                <img src="images/pioneerWeekend.jpg" alt="pioneerWeekend" style="background-attachment: static; width:80%; align-content: center; height:18vw">
              </div>
              <div style = "padding-left:30%; padding-right:30px; padding-top:1vw">
                <div style="width:100%">
                  <div style="width:15%; float:left;">
                    <img src = "images/awards.png" alt="medal" style = "padding-left:3.5vw; background-attachment: static; float:left; width:2.2vw; height:3vw"> 
                  </div>
                  <div style="width:85%; float: left; text-align: left; padding-top:0.5vw">
                    <strong style="font-size: 1vw; padding-left: 20%;">3rd Place (2019, 2020)</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div style="width:60%; float:left">
            <div style = "padding-right:30%; padding-top: 100px;">
              <div style= "text-align:left; ">
                <p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">
                  <strong style="font-size:1.75vw;">Pioneer Weekend</strong> <br>
                  <em>2019, 2020</em> 
                  <br>
                  <strong> Grinnell, IA </strong> 
                  <br>
                  <br>
                  With a group of peers, I participated in the Grinnell College Pioneer Weekend competition in 2019 and 2020.
                  The competition is a three day long startup pitch competition where students collaborate on a startup idea and present it to a panel of various business professionals.
                  <br>
                  <br>
                  In 2019, my group devised a plan for a mobile application called HERO. 
                  This application would allow users to track their environmental impact based on their consumption of goods, give recommendations on how to be more environmentally friendly, and give users access to coupons designed to promote sustainability.
                  Our business plan included a statistical analysis of a survey taken from our target demographic, market sizing, a rollout plan, and projected cash flow estimates.
                  <br>
                  <br>
                  In 2020, we designed a plan for a browser extension called Verify. 
                  As this project was slightly before the presidential election, my team wanted to create something that would help people make more informed decisions.
                  Verify would use machine learning algorithms, likely a bayesian analysis, to estimate the likelihood of a social media post containing false information.
                  The extension would monetize by linking users to credible news outlets when a post is flagged as a high risk for fake news. 
                  The construction of our presentation also included a survey analysis, market sizing, a rollout plan, projected cash flows, and an exit strategy (selling the idea to social media firms as an API).
                  
                </p>
              </div>
            </div>
          </div>
          
        </section>

        <section id="IBESCC">

          <div style="width:40%; float:left">
            <div style = "padding-left:100px; padding-top:110px; padding-right:4%;">
              <div style= "text-align:right; ">
                <img src="images/LMUCaseCompetition.jpg" alt="IBESCC" style=" background-attachment: static; width:80%; align-content: center; height:16vw">
              </div>
            </div>
          </div>
        
          <div style="width:60%; float:left">
            <div style = "padding-right:30%; padding-top: 100px;">
              <div style= "text-align:left; ">
                <p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">
                  <strong style="font-size:1.75vw;"> LMU International Business Ethics and Sustainability Case Competition</strong> <br>
                  <em>2019</em> 
                  <br>
                  <strong> Los Angeles, CA </strong> 
                  <br>
                  <br>
                  With the collaboration of 4 peers, I had the opportunity to compete in this case competition as the first ever Grinnell College representing team. 
                  The case was centered around helping a firm become more sustainable or ethical. 
                  My team choose American Express and came up with the idea of the AmEx Next Card -- a credit card with the ambition of helping and rewarding customers for making sustainable purchases.
                  <br>
                  <br>
                  With over 300 hours of combined work, we crafted a 30 minute, 10 minute, and 90 second long presentation to administer to business executives around the Los Angeles area, as well as a comprehensive executive summary and rollout plan.
                  <br>
                  <br>
                  Though we did not place in this competition, it was incredibly beneficial in developing presentation, business, and PowerPoint skills, and is one of my most enjoyable experiences to date.
                </p>
              </div>
            </div>
          </div>
          
        </section>

        <section id="HBX">

          <div style="width:40%; float:left">
            <div style = "padding-left:100px; padding-top:110px; padding-right:4%;">
              <div style= "text-align:right; ">
                <img src="images/hbs.png" alt="HBX" style=" background-attachment: static; width:60%; align-content: center; height:20vw">
              </div>
            </div>
          </div>
        
          <div style="width:60%; float:right">
            <div style = "padding-right:30%; padding-top: 100px;">
              <div style= "text-align:left; ">
                <p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">
                  <strong style="font-size:1.75vw;"> Harvard Business School Online CORe </strong> 
                  <br>
                  <br>CORe (Credential of Readiness) is a 150-hour certificate program on the fundamentals of business from Harvard Business School. 
                  CORe is comprised of three courses—Business Analytics, Economics for Managers, and Financial Accounting—developed by leading Harvard Business School faculty and delivered in an active learning environment based on the HBS signature case-based learning model.
                </p>
              </div>
            </div>
          </div>
          
        </section>

      </section>
    </section>


    <section id = "footer" style="background-size:cover;background-attachment: fixed ;background-position: center center; background-repeat: no-repeat; height:5%">
      <footer>
        <div class = "containter">
          <div class = "quote">
            “Whether you think you can, or you think you can't -- you're right.” <br>
            <em text-align="right">-Henry Ford</em>
          </div>
        </div>
      </footer>
    </section>

  </body>
</html>
