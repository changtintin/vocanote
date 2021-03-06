<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- bootstrap 4.2.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-- bootstrap above -->

    <style>
        .title_font{
            color: rgb(128, 128, 128);
            font-size: 20px;
            padding: 3px;
        }
        .bg-cover {
            background-size: cover !important;
        }
        .header{
            border-style: solid;
            border-width: 7px;
            border-color: rgb(128, 128, 128);
            color:rgb(128, 128, 128);
        }
        .h1{
            padding-bottom: 25px;
        }
        .outline{
            background-color: rgb(246, 240, 228);
            border-style: solid;
            border-color: rgb(246, 240, 228);
            padding: 25px;
        }
        .body{
            background-color: rgb(246, 240, 228);;
        }
        .button_style{
            background-color: rgb(128, 128, 128); 
            border: none;
            color: white;
        }
        .button_style2{
            background-color: rgb(146, 86, 86); <!--red-->
            border: none;
            color: white;
        }
        .button_style3{
            background-color: rgb(204, 152, 118); 
            border: none;
            color: white;
        }
        .navbar{
            margin: 20px;
            border-radius: 10px;
            
        }
        .nav-link{
            color:white;
            font-weight: 500;
        }

        a:hover {
            color: rgb(146, 86, 86);
        }
        .col-form-label {
            color:rgb(128, 128, 128);
            font-weight: 500;
        }
        .form-control {
            border: transparent;
            border-radius: 6px;

        }
        .btn-secondary {
            border:none;
        }
            
    </style>

</head>
<body> 
<body class="body">
   
   <div class="outline">
       <div>
           <div style="background-color: rgb(246, 240, 228); outline:solid; border-radius: 2px; box-shadow: 0 0 0 10px rgb(128, 128, 128); " class="jumbotron bg-cover header p-3">
               <div class="container py-5 text-center" style="padding: 10px">
                   <h1 class="font-weight-bold" href="index.php">Add a new voca</h1>
                   <p class="font-italic">This is Vocanote. Your first free vocabulary notebook.</p>
                   <p class="font-italic">Developed by
                       <a href="#" style="color:rgb(128, 128, 128);">
                           <u>WEN-TING CHANG</u>
                       </a>
                   </p>
                   <a href="#" role="submit" class="btn  button_style" >More about Vocanote</a>
               </div>
           </div>
           <nav class="navbar navbar-expand-lg" style="background-color: rgb(204, 152, 118); ">
               <div class="container-fluid">
               <button class="navbar-toggler" type="submit" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item" >
                       <a class="navbar-brand" href="index.php">
                           <img src="greyhome_icon.png" width="50" height="50" alt="back to main page" ;>
                       </a>
                   </li>
                   <li class="nav-item" >
                       <a class="nav-link" href="insert.php">Add a new voca!</a>
                   </li>
                   <li class="nav-item" style="padding-right: 800px;">
                       <a class="nav-link" href="#">External link</a>
                   </li>
                   </ul>
                   <form class="d-flex" action="search_result.php" method="post" >
                        <input class="form-control me-2" type="text" placeholder="Voca or Meaning" aria-label="Search" style="border: none ;" name="voca_input" >
                        <input type="submit" class="btn btn-secondary button_style"  role="button" aria-disabled="true" name="voca_search">
                   </form>
               </div>
               </div>
           </nav>
       </div>

        <div class="container border p-5">
            <form action="bridge.php" method="post">
                <div class="form-group row" style="padding: 30px;">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Vocabulary:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="vocabulary" placeholder="vocabulary">
                    </div>
                </div>
                <div class="form-group row" style="padding: 30px;">
                    <label for="inputjoin_date" class="col-sm-2 col-form-label">Join date:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="join_date" placeholder="yyyy/mm/dd">
                    </div>
                </div>
                <div class="form-group row" style="padding: 30px;">
                    <label for="inputmeaning" class="col-sm-2 col-form-label">Meaning:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="meaning" placeholder="meaning">
                    </div>
                </div>
                <div class="form-group row" style="padding: 30px;">
                    <label for="inputpartofspeech" class="col-sm-2 col-form-label">Part of speech:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="part_of_speech" placeholder="part of speech   (e.g. adj., v.,  n., adv.) ">
                    </div>
                </div>
                <div class="form-group row" style="padding: 30px;">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Note:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="note" placeholder="note">
                    </div>
                </div>
                <div class="form-group row" style="padding: 30px;">
                    <input type="submit" class="btn btn-secondary btn-lg" role="button" aria-disabled="true" name="submit" >
                </div>
            </form>
        </div>
    </div>
    
</body>
    
</html>