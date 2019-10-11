<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  mentor dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="mentor.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <script src="includes/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"> -->
</head>

<body>
<div class="container-fluid"> 
    <!-- we will need two containers -->
<div class="row">

<!--students side bar-->

<div class="col-3 bg-white bord " style="height:652px;">

   <div style=" " class="mt-5">
       <div class="rounded-circle bg-dark bordC" style="width:150px;  height:150px; margin:0 auto;"></div>
       <h5 class="text-dark font-size-normal text-center mt-3"> Chidiebere Chukwudi <h5>
       <h5 class="text-dark font-size-normal text-center"> myemail@gmail.com <h5>
   </div>

    <hr class="bordCdash mt-5" style="width:300px;"> 
    
    <h5 class="text-dark font-size-normal text-center mt-4 .font-weight-bold"> Dashboard </h5>
     <h5 class="text-dark font-size-normal text-center mt-4"> interns</h5>
     <h5 class="text-dark font-size-normal text-center mt-4"> Messages</h5>

     
     <h5 class="text-dark font-size-normal text-center mt-4"> Profile</h5>


     <h5 class="text-dark font-size-normal text-center mt-4"> Account settings</h5>

     <hr class="bordCdash mt-3" style="width:300px;"> 

     <button class="btn btn-info btn-custom " > <span class="text-center font-size-normal">Logout </span></button>


   
</div>


<div class="col-9" style=""> 
<!---card deck starts and ends here--->

     <div class="row mt-3 justify-content-between" >
    <div class="col-3 ">
        <div class="bg-info text-center p-3 rounded shadow" style="font-size:23px; "> 
            <span class="text-white font-weight-bolder"  > 42 <span>
            <br>
            <span class="text-white"> Total Score<span>
        </div>
     </div>
     <div class="col-3">
        <div class="bg-info text-center p-3 rounded" style="font-size:23px;"> 
            <span class="text-white" >12 <span>
            <br>
            <span class="text-white"> failed <span>
        </div>
     </div>


     <div class="col-3">
        <div class="bg-info text-center p-3 rounded" style="font-size:23px;"> 
            <span class="text-white"> 30 <span>
            <br>
            <span class="text-white"> passed <span>
        </div>
     </div>
        </div>
<!---card deck starts and ends here--->

<!---forms start here---->

<div class="card mt-3">
    <h5 class="card-header"> intern's slack username  and stage  <button href="#" class="btn btn-muted bnh"> My app </button> <button href="#" class="btn btn-muted mr-2 bnh"> My url commit </button></h5>
  
    <div class="card-body"> 
        <h5 class="card-title"> Task: responsiveness of dashboard </h5>
        <p class="card-text"> This is what I submitted today please try and tick me goog or bad. I made the responsive ness of this application </p>

        <button href="#" class="btn btn-success "> passed </button>   <button href="#" class="btn btn-danger bnh "> failed </button>

    </div>
</div>

<div class="card mt-3">
    <h5 class="card-header"> intern's slack username and stage   <button href="#" class="btn btn-muted bnh"> My app </button> <button href="#" class="btn btn-muted mr-2 bnh"> My url commit </button></h5>
  
    <div class="card-body"> 
        <h5 class="card-title"> Task: responsiveness of dashboard </h5>
        <p class="card-text"> This is what I submitted today please try and tick me goog or bad. I made the responsive ness of this application </p>

        <button href="#" class="btn btn-success "> passed </button>   <button href="#" class="btn btn-danger bnh "> failed </button>

    </div>
</div>



<!----foms end here -->
</div>
<!-- row -->
</div>
</body>

</html>