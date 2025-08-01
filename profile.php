<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>

   

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->

   <link rel="stylesheet" href="css/style.css">

   <style>
   .center {
    display: block;
    margin-left: 45%;
    margin-right: 45%;
}
   #profile_pic{
      width: 150px;
      margin-top: -150px;
      border-radius: 50%;
      border: solid 2px white;
   }

   textarea{
      width: 100px;
      border: none;
      font-family: tahoma;
      font-size: 14px;
      height: 60px;
   }

   #post_button{
      float: right;
      border: none;
      color: white;
      padding: 4px;
      font-size: 14px;
      border-radius: 2px;
      width: 50px;
   }

   #post_bar{
      margin-top: 20px;
      background-color: white;
      padding: 10px;
   }

   #post{
      padding: 4px;
      font-size: 13px;
      display: flex;
      margin-bottom: 20px;
   }
   </style>

</head>

<?php include 'header.php'; ?>

<body>
   <div class = "center">

</div>

<!--Cover-->
<div style = "background-color: white; text-align: center; color: #405d9b">

<img src = "images/cover_1.jpg" style= "width:100%;">
<img id="profile_pic" src="images/profile-pic.jpg">
<br>
<h2>Veronica</h2>
</div>

<!--Below Cover area-->

<div style = "display: flex;">
   <!--Posts area-->

<h1>Posts</h1>
<br>
<div style="min-height: 400px;flex:2.5; padding-left: 10px;">

<div style = "border: solid thin #aaa; padding: 10px; background-color: white;">
   <textarea placeholder= "what's on your mind"> </textarea>
   <input id= "post_button" type= "submit" value="Post!">
   <br>
</div>
   <!--posts-->
   <div id="post_bar">

   <!--post 1 -->
      <div id="post">
         <div>
            <img src="images/post-1.png" style="width=75px; margin-right: 4px;">
</div>
<div>
   <div style="font-weight: bold; color: #4A2511"> Maysha </div>
   The book Rabindranath Tagore deserves all the accolades got.It is amazing and simply fantastic to read.It is collection of over 100 poems.

Gitanjali mainly focus on the LIFE, DEATH, THE NATURE and MAN'S answer to GOD.

All the poems are simply and short with tremendous meaning of each poem.Tagore himself converted those poems into English from Bengali for an authentic feel.

Be it a song or sing, life or a god each poem resembles simplicity of thoughts. Interestingly reading poems is different task form the reading novels but in this case it is very interesting.

Nuances between the god and the men are beautifully captured in this book like one person waiting for temple gates to open while other women waiting for her lord to embrace her.

Rain forms are important notification of the book with many incidents are covered under the rain.

W.B Yeats gives a perfect beautification and a great tribute to the Tagore's presentation. Any one who wants to read this book should not miss the preface.

Even NOBLE PRIZE is a small token of gratitude for such wonderful collection of books. Tagore devotes 10-15 poems to DEATH describe the emotions of a person seeing death.

I really URGE you READ the book today whether from a book or online PDF.

Thank you.
   <br/><br/>
   <a href=""> Rating </a>
</div>
</div>

   <!--post 2 -->
   <div id="post">
         <div>
            <img src="post_2.jpg" style="width=20px; margin-right: 4px;">
</div>
<div>
   <div style="font-weight: bold; color: #4A2511"> Second Guy </div>
   Nature The word nature is a commonly used word.

This word is used in a variety of contexts. Perhaps the most important reference is the multiple species of plants, animals, wildlife, and all that the earth contains from topography such as mountains, valleys, beaches, and seas. , And forests. The beauty of nature The nature of man is characterized by its beauty resulting mainly from the wonderful diversity of living organisms that exist in various parts of the earth, as well as the unique terrain of mountains, water, plateaus and forests. Each of these features is distinguished by a special beauty that distinguishes it from Other terrain, and this great diversity gave people wide spaces to seek calm, tranquility, and tranquility.
   <br/><br/>
   <a href=""> Rating </a>
</div>
</div>

   <!--post 3 -->
   <div id="post">
         <div>
            <img src="post_1.jpg" style="width=75px; margin-right: 4px;">
</div>
<div>
   <div style="font-weight: bold; color: #4A2511"> Third Guy </div>
   The poet Robert Southey has beautifully called books his never failing friends with whom he converses everyday. Books enlighten, give knowledge, entertain and inform us. Whether we read books printed on paper or telebooks, their importance cannot be denied. They fill our minds and hearts with hope and joy. Writers like Tagore have put forward to us their life on a platter to understand their goals and teachings. When we read books, we are in the company of the best and the noblest minds of all ages. They enrich our minds. Books are a storehouse of knowledge. Books often provide a person with the ability to judge between right and wrong and the courage to follow the righteous path. Books indeed provide a pleasurable company and prove to be a trustworthy and lifelong companio
   <br/><br/>
   <a href=""> Rating </a>
</div>
</div>



</div>

<br>
<!--Myshelf area-->
<div style = "background-color: grey;min-height: 400px;flex:1;"></div> 
</div>