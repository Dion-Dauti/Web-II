<!DOCTYPE html>
<head>
    <title>Cookie Bar</title>
    <meta charset="UTF - 8">
    
    <script src="cookies.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" 
    crossorigin="anonymous"></script>
    <style>
        .stripPopUp{
            background-color:midnightblue;
            margin-right: 470px;
            margin-left: 350px;


        }
        span{
            color:white;
            font-weight: bold;
            font-family:'Times New Roman', Times, serif;
            font-size: large;
            text-align: center;
            padding: 100px;
            margin-top: 100px;
            
        }
        abbr{
            color: white;
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            padding: 100px;
            margin-top: 100px;
      
        }

        .BtnWrap{
           padding-left: 100px;
           padding-top: 60px;
           padding-bottom: 30px;
       

        }

        .yesiagree{
            text-decoration: none;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            font-size: large;
        }

        .btn3{
            text-decoration: none;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            font-size: large;
      

        }

        button{
           border-color:mediumblue;
            
            border-radius: 10px;
            background-color: transparent;
            margin-left: 57px;
            border-style: solid;
            background-color:mediumblue;
        }

       button:hover{
        background-color: cadetblue;
       }



        

        </style>
    </head>
    <body>
    <?php 
        if(!isset($_COOKIE["home-cookie"])){ ?>
        
        
      
        <div class="stripPopUp">
            <div class="container">
                <div class="contentWrap"><span>We use cookies on this site to enhance your user experience.</span> <br>
                    <abbr>By clicking any link on this website, you are giving us consent to set cookies</abbr></div>
                    <div class="BtnWrap"><button ><a href="javascript:void(0);" class=" yesiagree">Yes I agree</a></button>
                        <button><a href="#" class="btn3">No, I want to find out more</a></button></div>
            </div>
        </div>
    <?php } ?>
    </body>