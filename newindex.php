<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<style>
    *{
        box-sizing: border-box;
    }
#btnleft{
    display:none;
}
    @media screen and (max-width: 925px) {
        #btnleft{
            display:inline-block;
        }
        #idnav{
            display:none;
        }
    }

.ff{
    font-family: 'Poppins',sans-serif;
    font-size: 1rem;
    padding:.5rem;
}



.black{
    background-color: #000;
}
.green{
    background-color: green;
}
.blue{
    background-color: blue;
}
.yellow{
    background-color: yellow;
}
.red{
    background-color: red;
}
/*animation class*/
.paTop{position:relative;animation:animatetop 0.4s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
.paLeft{position:relative;animation:animateleft 0.4s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
.paRight{position:relative;animation:animateright 0.4s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
.paBottom{position:relative;animation:animatebottom 0.4s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}

.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
 }
.pbtn{
    outline: none;
    border:none;
}
</style>
</head>
<body>
<div class="d-flex justify-content-between">
    <div class="d-flex d-inline-flex justify-content-start">
        <div class="d-flex flex-row bd-highlight mb-3 align-items-center">

        
            <div>
                <button id="btnleft" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i style="font-size: 1.8em;" class="bi bi-list"></i></button>
            </div>
            <div><img src="logos.png" alt="" width="120px"></div>
            <div><a href="#"  id="idnav" class="btn ff" style="white-space:nowrap;">Home</a></div>
            <div><a href="#"  id="idnav" class="btn ff" style="white-space:nowrap;">About</a></div>
            <!-- <div><a href="#"  id="idnav" class="btn ff" style="white-space:nowrap;">Products</a></div> -->

            <div class="dropdown"><button class="btn ff" style="white-space:nowrap;" type="button" id="idnav" data-bs-toggle="dropdown" aria-expanded="false">Products <i class="fa fa-caret-down" style="margin-left:5px;"></i></button>
                <ul class="dropdown-menu" aria-labelledby="idnav">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

            <div><a href="#"  id="idnav" class="btn ff" style="white-space:nowrap;">Mode of Delivery</a></div>
            <div><a href="#"  id="idnav" class="btn ff" style="white-space:nowrap;">Contact Us</a></div>
            <div><a href="#"  id="idnav" class="btn ff" style="white-space:nowrap;">Product Catalogue</a></div>
            
            
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <div class="d-flex flex-row bd-highlight mb-3 align-items-center">
            <div><button class="btn"><i style="font-size: 1.3em;" class="fa-regular fa-user"></i></button></div>
            <div><button class="btn"><i style="font-size: 1.5em;" class="fa-regular fa-heart"></i></button></div>
            <div><button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i style="font-size: 1.5em;" class="fa fa-bag-shopping"></i></button></div>
        </div>
    </div>    
</div>



<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>



<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="d-flex flex-column">
        <div><a href="#" class="btn ff" style="white-space:nowrap;">Home</a></div>
        <div><a href="#" class="btn ff" style="white-space:nowrap;">About</a></div>
        <div><button class="btn ff pbtn" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Products<i class="fa fa-caret-down" style="margin-left:5px;"></i></button></div>
            <div class="collapse" id="collapseExample">
                <div class="">
                    <div><a href="#" class="btn ff" style="white-space:nowrap;margin-left:20px;">Mode of Delivery</a></div>
                    <div><a href="#" class="btn ff" style="white-space:nowrap;margin-left:20px;">Mode of Delivery</a></div>
                    <div><a href="#" class="btn ff" style="white-space:nowrap;margin-left:20px;">Mode of Delivery</a></div>
                    <div><a href="#" class="btn ff" style="white-space:nowrap;margin-left:20px;">Mode of Delivery</a></div>
                </div>
            </div>
        <div><a href="#" class="btn ff" style="white-space:nowrap;">Mode of Delivery</a></div>
        <div><a href="#" class="btn ff" style="white-space:nowrap;">Contact Us</a></div>
        <div><a href="#" class="btn ff" style="white-space:nowrap;">Product Catalogue</a></div>
        
    </div>
  </div>
</div>

<div class="containers">
    <div class="forms-containers">
        <div class="signin-signup">
            <form action="" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">

                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">

                </div>
                <input type="submit" value="Login" class="btns solid">
               


            </form>

            <form action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">

                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">

                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">

                </div>
                <input type="submit" value="Sign up" class="btns solid">
               


            </form>

        </div>

    </div>


</div>

</body>
</html>