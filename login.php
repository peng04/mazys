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

<!-- start styleeeeee -->

<style>
    *{
        padding:0;
        margin:0;
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
body,input{
    
    font-family:'Poppins'
}



.containers{
   
    position: relative;
    width: 100%;
    min-height: 100vh;
    background-color:#fff;
    overflow:hidden;

}

.containers:before{
    content:'';
    position:absolute;
    width:2000px;
    height:2000px;
    border-radius:50%;
    background:linear-gradient(-45deg,#4481eb,#04befe);
    top: -10;
    right:48%;
    transform: translateY(-50%);
    z-index:6;
    transition: 1.8s ease-in-out; 
}

.forms-containers{
    

    position: absolute;
    width:100%;
    height: 100%;
    top:0;
    left: 0 ;
   
    
}



.signin-signup{
    position:absolute;
    top:15%;
    left:65%;
    transform: translate (-50%, -50%);
    width:25%;
    display:grid; 
    grid-template-columns:1fr;
    z-index:5;
    transition: 1s 0.7s ease-in-out;
}

form{
 

    display: flex;
    align-items: center;
    justify-content: center;
    padding:0 1rem;
    flex-direction: column; 
    overflow:hidden;
    grid-column: 1 / 2;
    grid-row: 1 / 2;
    transition: 0.2s 0.7s ease-in-out;
}


form.sign-in-form{
    z-index: 2;
}

form.sign-up-form{
    z-index:1;
    opacity:0;
}


.title{
    font-size:2.2rem;
    color: #444;
    margin-bottom : 10px;

}
.input-field{
    max-width:380px;
    width: 100%;
    height:55px;
    background-color:#f0f0f0;
    margin: 10px 0;
    border-radius:55px;
    display:grid;
    grid-template-columns: 15% 85%;
    padding: 0 .4rem;

}

.input-field i{
    margin-left:15px;
    text-align:center;
    line-height:55px;
    color:#acacac;
    font-size:1.1rem;

}


.input-field input{
background:none;
outline:none;
border:none;
line-height:1;
font-weight:600;
font-size:1.1rem;
color:#333;

}

.input-field input::placeholder{
    color:#aaa;
    font-weight:500;
}

.btns{
    width:150px;
    height: 49px;
    border: none;
    outline: none;
    border-radius: 49px;
    cursor:pointer; 
    background-color: #5995fd;
    color:#fff;
    text-transform:uppercase;
    font-weight:600;
    margin: 10px 0;
    transition:.5s;
}

.btns:hover{
    background-color: #4d84e2;
}

.panels-containers{
    position:absolute;
    width:100%;
    height:100%;
    top:0;
    
    left:0;
  
    display:grid;
    grid-template-columns:repeat(2,1fr);
}

.panel{
    display:flex;
    flex-direction:column;
    align-items:flex-end;
  
    margin:0;
    z-index:7;
}

.panel .content{
    color:#fff;
    transition:.9s .6s ease-in-out;
}

.panel h3{
    font-weight:600;
    line-height:1;
    font-size:1.5rem;

}

.panel p{
    font-size: 0.95rem;
    padding:0.7rem 0;

}

.btn.transparent{
    margin:0;
    color:#fff;
    border-radius:55px;
    background:none;
    border:2px solid #fff;
    width:130px;
    height:41px;
    font-weight:600;
    font-size:0.8rem;

}

.right-panel .content{
    transform: translate(800px);
}
.left-panel{
    pointer-events:all;
    padding: 3rem 17% 2rem 12%;

}

.right-panel{
    pointer-events:none;
    padding: 3rem 40% 2rem 15%;
}

/* animation */

.containers.sign-up-mode:before{
    transform:translate (100%, -50%);
    right:-75%;
}

.containers.sign-up-mode .left-panel .content{
    transform: translateX(-800px);
}

.policy{
    margin-top:20px;
    font-size:10px;
    text-align:center;
}

.containers.sign-up-mode .right-panel .content{
    transform: translateX(0px);
}

.containers.sign-up-mode .right-panel .content{
    pointer-events:all;
}   

.containers.sign-up-mode .signin-signup{
    left:10%
}   

.containers.sign-up-mode form.sign-in-form{
  z-index:1;
  opacity:0;

}   
.containers.sign-up-mode form.sign-up-form{
  z-index:2;
opacity:1;
}

.ddd{
    display:flex;
    align-items:center;
}

</style>

<!--end styleeeeeeeeeeee -->



</head>
<body>
<div class="d-flex justify-content-between">
    <div class="d-flex d-inline-flex justify-content-start">
        <div class="d-flex flex-row bd-highlight align-items-center">

        
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

                <p class="policy">By signing up, you agree to Mazy's Marketing Corporation <br> Terms of Services & Privacy Policy </p>


            </form>

            <form action="" class="sign-up-form" style="width:500px;">
                <h2 class="title">Sign up</h2>
                <div class="ddd">
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Fullname">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Fullname">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Fullname">
                </div>
                </div>
            
                
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">

                </div>

                <div class="input-field">
                    <i class="fas fa-phone"></i>
                    <input type="number" placeholder="Phone Number">

                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">

                </div>
                <input type="submit" value="Sign up" class="btns solid">
               
                <p class="policy">By signing up, you agree to Mazy's Marketing Corporation <br> Terms of Services & Privacy Policy </p>



            </form>

        </div>
 
    </div>

    <div class="panels-containers">
        <div class="panel left-panel">
            <div class="content">

                <h3>You want to join with us?</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process
                    faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                <button class="btn transparent" id="sign-up-btn">Sign up</button>


            </div>

        </div>
        <div class="panel right-panel">
            <div class="content">

                <h3>One of us?</h3>
                <p>If you have an account with us, please log in.</p>
                <button class="btn transparent" id="sign-in-btn">Sign in</button>


            </div>

        </div>




    </div>



</div>
<script src="app.js"></script>
</body>
</html>