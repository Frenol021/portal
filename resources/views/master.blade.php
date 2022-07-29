<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portal</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- jquery minified css-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<link href="/css/app.css" rel="stylesheet"> 
</head>
<body>

@include('sweetalert::alert')



<style>
  html{
 overflow-x: hidden;
  }
    .container{
        background-color: #A9CCE3 ;
       padding: 10px;
       font-size: 150%;
       padding-top: 10px;
        border-radius: 10px;
        margin-top: 5px;
       
    }
    .container2{
background-image: url("https://downloader.la/temp/[Downloader.la]-62babe5bd88e5.jpg");
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;


    }
    .header{
      
        border-radius: 20px;
    }
    .head{
       
        float: right;
        margin-top: 13px;
        font-size: 100%;
        border-bottom: none;
        margin-right: 50px;
        
      
    }
* {
  box-sizing: border-box;
}

    
  .custo-image{
    float: right;
 
margin: 20px;
     background-size: cover;
  width: 300px;
  height: 300px;
  border: 2px solid #A9CCE3;
background-color:#D0D3D4;
  resize: both;
       
      
  }

  .custo-image:hover{
  background-color: wheat;
  cursor: pointer;
  padding-top: -50px;
   padding-bottom: -11px;
    transform: scale(1.05); 
  }
    
    .image{
     
   resize: both;
        transition:height 2s;
        width: 100%;
        height: 75%
        }

     
    .unit{
        margin-left: 20px;
        
        font-family: Arial, Helvetica, sans-serif; 
        font-size: 150%;
        color: black;

    }
    
    .button {
   
        margin-left: 20px;
     
     }
     .button a{
  text-decoration: none;
     color: white;
     
     }
    .button:hover {
        color: white;
        
    }
    .col-md-4{
 
       font-size:150%;
    }
   
     .image1{
       
 width: 350px

      
       }

       .custo-image1{
    margin-bottom: 50px;
    margin-left: 10px;
    
  
  }
  .remove{
display: inline grid;

  }
  .amount{
color:#000066;
float: right;
font-size:150%;
margin-right:20px;
  }

  
table {
    border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-family: sans-serif;
    font-size: 200%;
    width:100%
    
}
 
th {
    border: 2px solid rgb(190, 190, 190);
    padding: 10px;
    background-color:#76D7C4 ;
}

td {
    text-align: center;
    
    border: 2px solid rgb(200, 200, 200);
color:#424949  ;
}

.button2{
float:right;
}

.box1{
width: 250px;
  height:250px;
  border: 4px solid white;
  background-color: #1B4F72 ;
  border-radius: 10px;

}

.box h1{
color:white;
    border-bottom: 1px solid black;
    padding-bottom: 10px;
    padding-top: 10px;
    text-align: center;
  
}
.box h2{
 border-bottom: 1px solid black;

}
.box span{
color:blue;
float: right;
}

.box .check{
width: 90%;
margin-left: 18px;

border-radius:10px;
graphic design Ksh 300
remove the enrollment

}

.box .check h3{
color:white;
font-size: 250%;

}

     .image2{
       
 width: 150px

       }

       .custo-image2{
    margin-bottom: 10px;
    margin-left: 10px;
    
  
  }
h1{

text-align: center;
font-size: 140;
}
    .head1{
    float:center;
        margin-left:20px;    
        margin-top: 13px;
        font-size: 100%;
        border-bottom: none;
        margin-right: 50px;
      text-align: center;
       justify-content: center;
        
      
    }

.footer{
 
 background-color:  #A9CCE3  ;
margin-top:50px;


}


.footer .credit{
    text-align: center;
    padding-top: 5px;
    margin-top: 5px;
    border-top: 1px solid black;
    color:black;
    font-size: 200%;

}
@import url('https://fonts.googleapis.com/css?family=Lobster&display=swap') repeat scroll 0 0 rgba(0, 0, 0 , 0);

body {
  background: #fff;
}

.title {
  font-size: 2.5rem;
  font-family: 'Lobster', cursive;
}

.wrapper {
  animation: scroll 70s linear infinite;
  background: url("https://images.unsplash.com/photo-1465146633011-14f8e0781093?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3450&q=80"), #111111;
  color: #eee;
  height:20vh;
  min-width: 30px;
  width: 88%;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 1000px;
  perspective-origin: 50% 50%;
  margin-left: 78px;
  
}

@keyframes scroll {
   100%{
    background-position:0px -3000px;
  }
}

@media (prefers-reduced-motion) {
  .wrapper {
    animation: scroll 200s linear infinite;
  }
}

@media (min-width: 670px) {
  .title {
    font-size: 5rem;
  }
}


.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container4 {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

inpu[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label4 {
  margin-bottom: 10px;
  display: block;
}

.icon-container2 {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn8 {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn8:hover {
  background-color: #45a049;
}

span3.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .colr-25 {
    margin-bottom: 20px;
  }
}
.accordion-body{
background-color: #FDEDEC  ;
font-size: 200%;
}
h2{

text-align: center;
margin-top:20px;
font-family:Sans-serif;
}
.accordion-body h3{
color: #85C1E9;
font-size: 100%;
}
.graphic{
margin-left: 30px;

}
.android{

background-image: url("storage/images/android.jpg");
padding-bottom:20px;
}

.cyber{

background-image: url("storage/images/cyber.jpg");
padding-bottom: 200px;
background-size: cover;
background-position: center;
background-attachment: fixed;

}
.design{

background-image: url("storage/images/design.png");
padding-bottom: 280px;
background-size: cover;
background-position: center;
background-attachment: fixed;

}
.software{

background-image: url("storage/images/software.png");
padding-bottom: 280px;
background-size: cover;
background-position: center;
background-attachment: fixed;

}

.whatsapp{
bottom: 10px;
left: 10px;
position: fixed;
}

</style>

    
</body>
</html>