<?php
echo '<!doctype html>';
echo '';
echo '<html>';
echo '<head>';
echo '<link rel="stylesheet" href="css/mysite.css">';
echo '<link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
echo '<link rel="stylesheet" href = "css/jquery.convform.css">';
echo '';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<title>index</title>';
echo '</head>';
echo '<body>';
echo '';
echo '<section id = "openingSection" style="background-image: url('images/openingBackground.svg'); background-size:cover;background-attachment: relative; background-position: center center; background-repeat: no-repeat; height:100%">';
echo '';
echo '<header>';
echo '<div class="container">';
echo '<img src="images/signature.jpg" alt="signature" class="logo" style="height:100%; width:7%">';
echo '<nav>';
echo '<ul>';
echo '<li><a href="#"><b>Home</b></a></li>';
echo '<li><a href="resume.htm"><b>Resume</b></a></li>';
echo '<li><a href="#"><b>More</b></a></li>';
echo '</ul>';
echo '</nav>';
echo '</div>';
echo '</header>';
echo '';
echo '';
echo '<div class="fade-in one" style="width:100%; height:90%">';
echo '<div style="padding-top:200px; position:relative">';
echo '<p style="padding-left:50px;margin:auto; font-size:6vw; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height:1"> Wagih <br>';
echo 'Henawi';
echo '</p>';
echo '</div>';
echo '<br>';
echo '<div class="fade-in two">';
echo '<p style="color:black;padding-left:50px; margin:auto; font-size:2vw; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; text-overflow: ellipsis">';
echo '<em> Economics and Computer Science <br> Major at Grinnell College </em>';
echo '</p>';
echo '<div style = "float:left;padding-left:50px; padding-top:20px;">';
echo '<a href="https://www.linkedin.com/in/wagih-henawi-28610217b/" style = "font-size:30px;" class="fa fa-linkedin"></a>';
echo '<a href="https://github.com/WagihH" style = "font-size:30px;" class="fa fa-github"></a>';
echo '';
echo '</div>';
echo '';
echo '<div class="popup" style="float:left" onclick="popupFunction()"><strong>Contact Me</strong>';
echo '<span class="popuptext" id="myPopup"><a href = "mailto: waynehenawi@gmail.com">waynehenawi@gmail.com</a> <br> (917) 463-7466</span>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '';
echo '';
echo '<section id = "about" style="background-image: url('images/beigeBackground.svg'); background-size:cover;background-attachment: static;background-position: center center; background-repeat: no-repeat; height:70vw; border:none">';
echo '';
echo '<section style="height:20vw; background-image: url('images/about.svg'); background-size:cover; background-attachment:fixed; background-position: center center; background-repeat: no-repeat;"> </section>';
echo '';
echo '<section style="width:50%;float:left">';
echo '<img src="images/data_analysis.png" alt="DataAnalysis" style="height:30vw; background-attachment: static; width:30vw; float:right; padding-top:100px; padding-left:100px; padding-right:100px; padding-bottom: 100px">';
echo '</section>';
echo '';
echo '<!-- ChatBot-->';
echo '<script type="text/javascript" src="js/jquery-3.6.0.js"></script>';
echo '<script type="text/javascript" src="js/custom.js"></script>';
echo '<script type="text/javascript" src="js/jquery.convform.js"></script>';
echo '';
echo '';
echo '<div class = "chatIcon">';
echo '<i class="fa fa-comments"></i>';
echo '</div>';
echo '';
echo '<div class="chatBox">';
echo '<div class="conv-form-wrapper">';
echo '<form action="mailto:waynehenawi@gmail.com?subject=WEBSITEUSER" method="GET" class="hidden" enctype="text/plain">';
echo '<select name="introQuestion" data-conv-question="Hi, welcome to my website! How can I help you?">';
echo '<option value="siteQuestion">What is this website?</option>';
echo '<option value="skillsQuestion">What are your skills?</option>';
echo '<option value="personalQuestion">Tell me about yourself.</option>';
echo '</select>';
echo '';
echo '<div data-conv-fork="introQuestion">';
echo '';
echo '<div data-conv-case="siteQuestion">';
echo '<select name="siteBranchQ2" data-conv-question="This website is a personal project of mine.';
echo 'I really wanted to challenge myself by making my own website, and this is the outcome (so far!)." >';
echo '<option value="skillsQuestion1">What are your skills?</option>';
echo '<option value="personalQuestion1">Tell me about yourself.</option>';
echo '</select>';
echo '';
echo '<div data-conv-fork="siteBranchQ2">';
echo '';
echo '<div data-conv-case="skillsQuestion1">';
echo '<select name="siteBranchQ3" data-conv-question="My primary focus is in the intersection between computer science, economics, and statistics.';
echo 'I have experience in R, SQL, Java, PHP, HTML, and CSS. I have also had business school experience, through Harvard Business School Online CORe, and consulting case experience.">';
echo '<option value="personalQuestion1">Tell me about yourself.</option>';
echo '</select>';
echo '</div>';
echo '';
echo '<div data-conv-case="personalQuestion">';
echo '<select name="siteBranchQ3" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs.';
echo 'My goals lie in applying machine learning, statistics, and logic to add real value to a firm.';
echo 'My hobbies and interests include personal finance, weightlifting, reading, and playing video games.">';
echo '<option value="skillsQuestion1">What are your skills?</option>';
echo '</select>';
echo '</div>';
echo '';
echo '<div data-conv-fork="siteBranchQ3">';
echo '';
echo '<div data-conv-case="skillsQuestion1">';
echo '<input type="text" data-conv-question="My primary focus is in the';
echo 'intersection between computer science, economics, and statistics. I have experience in R, SQL, Java, PHP, HTML, and CSS.';
echo 'I have also had business school experience, through Harvard Business School Online CORe, consulting case experience, and experiences from a couple of business competitions" data-no-answer="true">';
echo '';
echo '<input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">';
echo '';
echo '<input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">';
echo '<input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though!';
echo 'Is there anything you think could be improved on this site?">';
echo '<input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"';
echo 'data-conv-question="Great. If its not too personal, what is your email?">';
echo '<input type="text" name="contact" data-conv-question="Would you like me to contact you?">';
echo '<input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">';
echo '<input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">';
echo '</div>';
echo '';
echo '<div data-conv-case="personalQuestion1">';
echo '<input type="text" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs.';
echo 'My goals lie in applying machine learning, statistics, and logic to add real value to a firm.';
echo 'My hobbies and interests include personal finance, weightlifting, reading, and playing video games." data-no-answer="true">';
echo '<input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">';
echo '';
echo '<input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">';
echo '<input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though!';
echo 'Is there anything you think could be improved on this site?">';
echo '<input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"';
echo 'data-conv-question="Great. If its not too personal, what is your email?">';
echo '<input type="text" name="contact" data-conv-question="Would you like me to contact you?">';
echo '<input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">';
echo '<input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way." value = "null">';
echo '';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '';
echo '</div>';
echo '';
echo '<div data-conv-case="skillsQuestion">';
echo '<select name="siteBranchQ2" data-conv-question="My primary focus is in the';
echo 'intersection between computer science, economics, and statistics. I have experience in R, SQL, Java, PHP, HTML, and CSS.';
echo 'I have also had business school experience, through Harvard Business School Online CORe, consulting case experience, and experiences from a couple of business competitions" >';
echo '<option value="siteQuestion2">What is this website?</option>';
echo '<option value="personalQuestion2">Tell me about yourself.</option>';
echo '</select>';
echo '';
echo '<div data-conv-fork="siteBranchQ2">';
echo '';
echo '<div data-conv-case="siteQuestion2">';
echo '<select name="siteBranchQ3" data-conv-question="This website is a personal project of mine.';
echo 'I really wanted to challenge myself by making my own website, and this is the outcome (so far!).">';
echo '<option value="personalQuestion2">Tell me about yourself.</option>';
echo '</select>';
echo '</div>';
echo '';
echo '<div data-conv-case="personalQuestion2">';
echo '<select name="siteBranchQ3" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs.';
echo 'My goals lie in applying machine learning, statistics, and logic to add real value to a firm.';
echo 'My hobbies and interests include personal finance, weightlifting, reading, and playing video games.">';
echo '<option value="siteQuestion2">What is this website?</option>';
echo '</select>';
echo '</div>';
echo '';
echo '<div data-conv-fork="siteBranchQ3">';
echo '';
echo '<div data-conv-case="siteQuestion2">';
echo '<input type="text" data-conv-question="This website is a personal project of mine.';
echo 'I really wanted to challenge myself by making my own website, and this is the outcome (so far!)." data-no-answer="true">';
echo '';
echo '<input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">';
echo '';
echo '<input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">';
echo '<input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though!';
echo 'Is there anything you think could be improved on this site?">';
echo '<input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"';
echo 'data-conv-question="Great. If its not too personal, what is your email?">';
echo '<input type="text" name="contact" data-conv-question="Would you like me to contact you?">';
echo '<input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">';
echo '<input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">';
echo '</div>';
echo '';
echo '<div data-conv-case="personalQuestion2">';
echo '<input type="text" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs.';
echo 'My goals lie in applying machine learning, statistics, and logic to add real value to a firm.';
echo 'My hobbies and interests include personal finance, weightlifting, reading, and playing video games." data-no-answer="true">';
echo '<input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">';
echo '';
echo '<input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">';
echo '<input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though!';
echo 'Is there anything you think could be improved on this site?">';
echo '<input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"';
echo 'data-conv-question="Great. If its not too personal, what is your email?">';
echo '<input type="text" name="contact" data-conv-question="Would you like me to contact you?">';
echo '<input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">';
echo '<input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">';
echo '';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div data-conv-case="personalQuestion">';
echo '<select name="siteBranchQ2" data-conv-question="Hi, I'm Wagih, a senior at Grinnell College interested in using data to solve various business needs.';
echo 'My goals lie in applying machine learning, statistics, and logic to add real value to a firm.';
echo 'My hobbies and interests include personal finance, weightlifting, reading, and playing video games." >';
echo '<option value="siteQuestion3">What is this website?</option>';
echo '<option value="skillsQuestion3">What are your skills?</option>';
echo '</select>';
echo '';
echo '<div data-conv-fork="siteBranchQ2">';
echo '';
echo '<div data-conv-case="siteQuestion3">';
echo '<select name="siteBranchQ3" data-conv-question="This website is a personal project of mine.';
echo 'I really wanted to challenge myself by making my own website, and this is the outcome (so far!).">';
echo '<option value="skillsQuestion3">What are your skills?</option>';
echo '</select>';
echo '</div>';
echo '';
echo '<div data-conv-case="skillsQuestion3">';
echo '<select name="siteBranchQ3" data-conv-question="My primary focus is in the';
echo 'intersection between computer science, economics, and statistics. I have experience in R, SQL, Java, PHP, HTML, and CSS.';
echo 'I have also had business school experience, through Harvard Business School Online CORe, consulting case experience, and experiences from a couple of business competitions">';
echo '<option value="siteQuestion3">What is this website?</option>';
echo '</select>';
echo '</div>';
echo '';
echo '<div data-conv-fork="siteBranchQ3">';
echo '<div data-conv-case="siteQuestion3">';
echo '<input type="text" data-conv-question="This website is a personal project of mine.';
echo 'I really wanted to challenge myself by making my own website, and this is the outcome (so far!)." data-no-answer="true">';
echo '';
echo '<input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">';
echo '';
echo '<input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">';
echo '<input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though!';
echo 'Is there anything you think could be improved on this site?">';
echo '<input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"';
echo 'data-conv-question="Great. If its not too personal, what is your email?">';
echo '<input type="text" name="contact" data-conv-question="Would you like me to contact you?">';
echo '<input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">';
echo '<input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">';
echo '</div>';
echo '';
echo '<div data-conv-case="skillsQuestion3">';
echo '<input type="text" data-conv-question="My primary focus is in the';
echo 'intersection between computer science, economics, and statistics. I have experience in R, SQL, Java, PHP, HTML, and CSS.';
echo 'I have also had business school experience, through Harvard Business School Online CORe, consulting case experience, and experiences from a couple of business competitions" data-no-answer="true">';
echo '<input type = "text" name = "name" data-conv-question="In any case, thank you so much for learning more about me. I would love to learn more about you, as well! What is your name?">';
echo '';
echo '<input type="text" name="siteAccess" data-conv-question="Thanks, {name}:0! Nice to meet you. How did you come across my website?">';
echo '<input type="text" name="improvements" data-conv-question="Noted. I hope you enjoy what you see, as I put a lot of work into it. I would appreciate any feedback or criticisms though!';
echo 'Is there anything you think could be improved on this site?">';
echo '<input type="email" name="email"data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"';
echo 'data-conv-question="Great. If its not too personal, what is your email?">';
echo '<input type="text" name="contact" data-conv-question="Would you like me to contact you?">';
echo '<input data-no-answer="true" data-conv-question="Okay, sounds good. Once again, thank you for coming to my site. Please take your time looking around and contact me if you have any questions or comments!">';
echo '<input data-no-answer="true" data-conv-question="You can hide this chat box by pressing the chat icon on the bottom right, by the way.">';
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '</div>';
echo '';
echo '<!--';
echo '<section style="width:50%; float:left; overflow-y:hidden">';
echo '<p style="text-align: center; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; padding-top:100px; padding-right:40px; padding-left:40px"> <strong style="font-size: 2.5vw; color: black;" > My passion is solving complex problems.</strong></p>';
echo '<p style="text-align:center; font-size:1.75vw; line-height:1.65; color: black;padding-right:40px; padding-left:40px; padding-bottom:50px "> Hi, I'm Wagih -- a senior at Grinnell College interested in using data to solve various business needs. Navigating the business world is tough, which is why I believe in data-driven decision making. My primary focus is in applying machine learning, statistics, and logic to add real value to a firm.  </p>';
echo '</section>';
echo '-->';
echo '';
echo '</section>';
echo '';
echo '<section id = "research" style="background-image: url('images/beigeBackground.svg'); background-size:cover; background-attachment: relative; background-position: center center; background-repeat: no-repeat; height:125vw;">';
echo '';
echo '<section style="height:20vw; background-image: url('images/research.svg'); background-size:cover; background-attachment:fixed; background-position: center center; background-repeat: no-repeat;"> </section>';
echo '';
echo '<section id="statisticsResearcher">';
echo '';
echo '<div style="width:40%; float:left">';
echo '<div style = "padding-left:100px; padding-top:60px">';
echo '<div style= "text-align:right; ">';
echo '<img src="images/randomForestDiagram.svg" alt="randomForestDiagram" style=" background-attachment: static; width:100%; align-content: center; height:30vw">';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div style="width:60%; float:left">';
echo '<div style = "padding-right:30%; padding-top: 100px;">';
echo '<div style= "text-align:left; ">';
echo '<p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">';
echo '<strong style="font-size:1.75vw;">Statistics Researcher</strong> <br>';
echo '<em>May - August 2021</em>';
echo '<br>';
echo '<strong> Grinnell, IA </strong>';
echo '<br>';
echo '<br>';
echo 'Under the supervision of Dr. Shonda Kuiper, I produced content that teaches undergraduate level students machine learning classification (ML) algorithms, such as CART, random forest, and logistic regression; furthermore, utilizing HTML, PHP, and MySQL, I created webpages that interact with an SQL Database.';
echo '<br>';
echo '<br>';
echo 'The ML content is centered around model creation, validation, and optimization and highlights the importance of checking models for bias.';
echo 'COMPAS, a classification algorithm used by many U.S. jurisdictions to predict the likelihood of a convicted individual recidivating, has a significantly high false positive rate for Black individuals.';
echo 'The content allows students to explore the results of research done around COMPAS and informs them of how bias was able to creep its way into the model.';
echo 'Utilizing R, we created interactive Shiny applications for students to create different classification models to predict recidivism, compare between models using ROC curves, and assess differing accuracy metrics through cross validation.';
echo '</p>';
echo '</div>';
echo '</div>';
echo '';
echo '</section>';
echo '';
echo '<section id="PCA">';
echo '';
echo '<div style="width:40%; float:left">';
echo '<div style = "padding-left:100px; padding-top:110px; padding-right:4%;">';
echo '<div style= "text-align:right; ">';
echo '<img src="images/hockeyStickGraph.png" alt="hockeyStickGraph" style="border:#000 3px solid; position: static; width:100%; align-content: center; height:20vw">';
echo '</div>';
echo '<div style = "padding-left:50px; padding-right:30px; padding-top:1vw">';
echo '<div style="width:100%">';
echo '<div style="width:15%; float:left;">';
echo '<img src = "images/awardBlue.png" alt="medal" style = "padding-left:3.5vw; background-attachment: static; float:left; width:2.2vw; height:3vw">';
echo '</div>';
echo '<div style="width:85%; float: left; text-align: left; padding-top:0.5vw">';
echo '<strong style="font-size: 1vw; padding-left: 3vw;">USCLAP Competition Winner</strong>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div style="width:60%; float:left">';
echo '<div style = "padding-right:30%; padding-top: 100px;">';
echo '<div style= "text-align:left; ">';
echo '<p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">';
echo '<strong style="font-size:1.75vw;">The Effects of Improper Standardization on Modeling Trends in Surface Temperature</strong>';
echo '<br>';
echo '<br>';
echo 'The Mann, Bradley and Hughes’ (MBH, 1998) highly cited ‘hockey-stick shaped’ graph showed a drastic increase in surface temperatures post-industrial revolution.';
echo 'While climate change may be one of the largest obstacles for humans to overcome, the techniques used to create these graphs had fundamental flaws when standardizing data.';
echo 'With a group of peers, we recreated and furthered McIntyre and McKitrick's (2003) by conducting a principal component analysis (PCA) simulation and analyzing the probability of falsely obtaining a hockey-stick shaped graph.';
echo '<br>';
echo '<br>';
echo 'We generated a 581-by-70 matrix, with the 70 columns representing randomly created red-noise data from an autoregression and the 581 rows representing years.';
echo 'We average and then standardize each series, the values in the 70 columns, at each row.';
echo 'When standardizing, we use MBH's technique and compute Z-scores based on the mean of the last 40, 79, and 140 years.';
echo 'The principal components were then created from randomly selected series and compared to those from a centered dataset, which was properly standardized.';
echo 'We observed no hockey-stick shaped graphs when standardizing from the last 140 years, 71(±1)% hockey-stick shaped graphs when standardizing from the last 79 years, and ~100% when standardizing from the last 40 years.';
echo 'For the centered data, there were no hockey-stick shaped graphs.';
echo 'This study confirmed the impact of improper standardization in MBH98 and that research should be properly validated before becoming widely accepted.';
echo '</p>';
echo '</div>';
echo '</div>';
echo '';
echo '</section>';
echo '';
echo '</section>';
echo '';
echo '';
echo '<section id = "experiences" style="background-image: url('images/beigeBackground.svg'); background-size:cover; background-attachment: relative; background-position: center center; background-repeat: no-repeat; height:160vw;"> <br>';
echo '<section style="height:20vw; background-image: url('images/professionalExperiences.svg'); background-size:cover; background-attachment:fixed; background-position: center center; background-repeat: no-repeat;"> </section>';
echo '';
echo '<section id="Pioneer Weekend">';
echo '';
echo '<div style="width:40%; float:left">';
echo '<div style = "padding-left:100px; padding-top:110px; padding-right:4%; ">';
echo '<div style= "text-align:right; ">';
echo '<img src="images/pioneerWeekend.jpg" alt="pioneerWeekend" style="background-attachment: static; width:80%; align-content: center; height:18vw">';
echo '</div>';
echo '<div style = "padding-left:20%; padding-right:30px; padding-top:1vw">';
echo '<div style="width:100%">';
echo '<div style="width:15%; float:left;">';
echo '<img src = "images/awards.png" alt="medal" style = "padding-left:3.5vw; background-attachment: static; float:left; width:2.2vw; height:3vw">';
echo '</div>';
echo '<div style="width:85%; float: left; text-align: left; padding-top:0.5vw">';
echo '<strong style="font-size: 0.8vw; padding-left: 15%;">Competition Winner (2019, 2020)</strong>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div style="width:60%; float:left">';
echo '<div style = "padding-right:30%; padding-top: 100px;">';
echo '<div style= "text-align:left; ">';
echo '<p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">';
echo '<strong style="font-size:1.75vw;">Pioneer Weekend</strong> <br>';
echo '<em>2019, 2020</em>';
echo '<br>';
echo '<strong> Grinnell, IA </strong>';
echo '<br>';
echo '<br>';
echo 'With a group of peers, I participated in the Grinnell College Pioneer Weekend competition in 2019 and 2020.';
echo 'The competition is a three day long startup pitch competition where students collaborate on a startup idea and present it to a panel of various business professionals.';
echo '<br>';
echo '<br>';
echo 'In 2019, my group devised a plan for a mobile application called HERO.';
echo 'This application would allow users to track their environmental impact based on their consumption of goods, give recommendations on how to be more environmentally friendly, and give users access to coupons designed to promote sustainability.';
echo 'Our business plan included a statistical analysis of a survey taken from our target demographic, market sizing, a rollout plan, and projected cash flow estimates.';
echo '<br>';
echo '<br>';
echo 'In 2020, we designed a plan for a browser extension called Verify.';
echo 'As this project was slightly before the presidential election, my team wanted to create something that would help people make more informed decisions.';
echo 'Verify would use machine learning algorithms, likely a bayesian analysis, to estimate the likelihood of a social media post containing false information.';
echo 'The extension would monetize by linking users to credible news outlets when a post is flagged as a high risk for fake news.';
echo 'The construction of our presentation also included a survey analysis, market sizing, a rollout plan, projected cash flows, and an exit strategy (selling the idea to social media firms as an API).';
echo '';
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '</section>';
echo '';
echo '<section id="IBESCC">';
echo '';
echo '<div style="width:40%; float:left">';
echo '<div style = "padding-left:100px; padding-top:110px; padding-right:4%;">';
echo '<div style= "text-align:right; ">';
echo '<img src="images/LMUCaseCompetition.jpg" alt="IBESCC" style=" background-attachment: static; width:80%; align-content: center; height:16vw">';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div style="width:60%; float:left">';
echo '<div style = "padding-right:30%; padding-top: 100px;">';
echo '<div style= "text-align:left; ">';
echo '<p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">';
echo '<strong style="font-size:1.75vw;"> LMU International Business Ethics and Sustainability Case Competition</strong> <br>';
echo '<em>2019</em>';
echo '<br>';
echo '<strong> Los Angeles, CA </strong>';
echo '<br>';
echo '<br>';
echo 'With the collaboration of 4 peers, I had the opportunity to compete in this case competition as the first ever Grinnell College representing team.';
echo 'The case was centered around helping a firm become more sustainable or ethical.';
echo 'My team choose American Express and came up with the idea of the AmEx Next Card -- a credit card with the ambition of helping and rewarding customers for making sustainable purchases.';
echo '<br>';
echo '<br>';
echo 'With over 300 hours of combined work, we crafted a 30 minute, 10 minute, and 90 second long presentation to administer to business executives around the Los Angeles area, as well as a comprehensive executive summary and rollout plan.';
echo '<br>';
echo '<br>';
echo 'Though we did not place in this competition, it was incredibly beneficial in developing presentation, business, and PowerPoint skills, and is one of my most enjoyable experiences to date.';
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '</section>';
echo '';
echo '<section id="HBX">';
echo '';
echo '<div style="width:40%; float:left">';
echo '<div style = "padding-left:100px; padding-top:110px; padding-right:4%;">';
echo '<div style= "text-align:right; ">';
echo '<img src="images/hbs.png" alt="HBX" style=" background-attachment: static; width:60%; align-content: center; height:20vw">';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div style="width:60%; float:right">';
echo '<div style = "padding-right:30%; padding-top: 100px;">';
echo '<div style= "text-align:left; ">';
echo '<p style="color:black;padding-left:30px; font-size:1.2vw; margin:auto; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; line-height: 1.5;">';
echo '<strong style="font-size:1.75vw;"> Harvard Business School Online CORe </strong>';
echo '<br>';
echo '<br>CORe (Credential of Readiness) is a 150-hour certificate program on the fundamentals of business from Harvard Business School.';
echo 'CORe is comprised of three courses—Business Analytics, Economics for Managers, and Financial Accounting—developed by leading Harvard Business School faculty and delivered in an active learning environment based on the HBS signature case-based learning model.';
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '</section>';
echo '';
echo '</section>';
echo '</section>';
echo '';
echo '';
echo '<section id = "footer" style="background-size:cover;background-attachment: fixed ;background-position: center center; background-repeat: no-repeat; height:5%">';
echo '<footer>';
echo '<div class = "containter">';
echo '<div class = "quote">';
echo '“Whether you think you can, or you think you can't -- you're right.” <br>';
echo '<em text-align="right">-Henry Ford</em>';
echo '</div>';
echo '</div>';
echo '</footer>';
echo '</section>';
echo '';
echo '</body>';
echo '</html>';
echo '';
?>