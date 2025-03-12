<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task us</title>
</head>
<body>
<style>
    *{
        margin: 0;
    }
    /* width */
    ::-webkit-scrollbar {
      width: 10px;
    }
    
    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
    body{
        background: rgb(255, 209, 6);
        overflow-x: hidden;
    }
    .nav{
        top:0;
        position: sticky;
    }

    .dashcolor .tstsx{
        border: 1px solid black;
        display: inline-flex;
        width: 100%;
        justify-content: space-between;
    }

    .tstsx .dash{
         display: flex;
         height: 50px;
    }

    .tstsx .dash .pink{
          background: rgb(243, 38, 72);
          color:  rgb(243, 38, 72);
          width: 300px;
          border-top-right-radius: 200px;
          margin-right: -60px;

    }
    .tstsx .dash .green{
          background: rgb(0, 164, 214);
          color:   rgb(0, 164, 214);
          width: 300px;
          margin-left: 20px;
          z-index: -1;
    }
    .tstsx .dash .vaolet{
          background: rgb(72, 3, 163);
          color:  rgb(72, 3, 163);
          width: 300px;
          margin-right: -60px;

    }
    .tstsx .dash .blue{
          background: rgb(68, 35, 252);
          color:   rgb(0, 164, 214);
          width: 300px;
          margin-left: 20px;
          z-index: -1;

    }
    .first{
        background: rebeccapurple;
        padding-top: 20px;
    }
    .first .tags{
           margin: auto;
           text-align: center;
           background: rgb(255, 209, 6);
           width: 40%;
           border-radius: 200px;
           font-size: 20px;
    }

    .seconds{
         background: rebeccapurple;
         height: 200px;
         display: flex;
         margin: auto;
         justify-content: center;
         gap:500px;
         color:white;
         line-height: 50px;
         padding-top: 20px;
    }

    .section .setxt{
         margin-top: 220px;
         padding-top: 20px;
    }

    .navs .navslist{
        background: white;
        width: 200px;
        padding: 10px;
        border-top-right-radius: 200px;
        border-bottom-right-radius: 200px;
        display: flex;
        gap:20px;
    }
    .navs .navslist .logo{
          border: 1px solid transparent;
          background: rgb(243, 38, 72);
          color: transparent;
          border-radius: 50px;
          width: 60px;
          height: 40px;
          text-align: center;
    }
    .navs h1{
        padding-top: 20px;
    }
    .maintest{
        margin-top: 200px;
        margin: auto;
        width: 90%;
    }
    .maintest img{
         width: 800px;
         z-index: 2000;
    }
    .maintest .mains{
        display: flex;
        gap: 200px;
        justify-content: space-between;
        margin-top: 100px;
    }
    .mains{
         margin: auto;
    }
    .mains .tstsx{
        font-size: 40px;
    }
    .logoads{
        width: 200px;
        height: 250px;
        margin: auto;
    }
    .logoads .reds{
        background: rgb(236, 9, 9);
        font:  sans-serif;
        font-size: 55px;
        color: white;
        text-align: center;
    }
    .logoads .redsbottoms{
        clip-path: polygon(0 15%, 100% 14%, 100% 70%, 51% 100%, 0 66%);
        background: rgb(35, 29, 107);
        text-align: center;
        height: 100px;
        padding-top: 20px;
        margin-top: -20px;
        color: white;

    }
    .footer{
        background: black;
        text-align: center;
        color: wheat;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .footer a{
       color:yellow
    }

    @media screen and (max-width:1700px){
        .maintest .mains {
            display: flex;
            gap: 30px;
            justify-content: space-between;
            margin-top: 100px;
        }
        .seconds{
             background: rebeccapurple;
             height: 200px;
             display: flex;
             margin: auto;
             justify-content: center;
             gap:300px;
             color:white;
             line-height: 50px;
             padding-top: 20px;
        }
        .first .tags{
           margin: auto;
           text-align: center;
           background: rgb(255, 209, 6);
           width: 70%;
           border-radius: 200px;
           font-size: 20px;
        }
    }

    @media screen and (max-width:1300px){

        .seconds{
             background: rebeccapurple;
             height: 200px;
             display: flex;
             margin: auto;
             justify-content: center;
             gap:200px;
             color:white;
             line-height: 50px;
             padding-top: 20px;
        }
        .first .tags{
           margin: auto;
           text-align: center;
           background: rgb(255, 209, 6);
           width: 70%;
           border-radius: 200px;
           font-size: 20px;
        }
        .tstsx .dash {
            display: flex;
            height: 50px;
            width: 200px;
        }
    }

    @media screen and (max-width:1100px){
        .seconds{
             background: rebeccapurple;
             height: 200px;
             display: flex;
             margin: auto;
             justify-content: center;
             gap:100px;
             color:white;
             line-height: 50px;
             padding-top: 20px;
        }
        .first .tags{
           margin: auto;
           text-align: center;
           background: rgb(255, 209, 6);
           width: 70%;
           border-radius: 200px;
           font-size: 15px;
        }
        .tstsx .dash {
            display: flex;
            height: 50px;
            width: 200px;
        }

    }
    @media screen and (width:990px){
        .mains .tstsx{
            font-size: 20px;
        }
        .mains .tstsx h1{
            width: 700px;
        }

    }
    @media screen and (max-width:1280px){
        .mains .tstsx{
            font-size: 25px;
        }
        .mains .tstsx h1{
            width: 700px;
        }
        .maintest .mains {
             display: flex;
             gap: 1px;
             justify-content: space-between;
             margin-top: 100px;
         }

    }
    @media screen and (max-width:910px){
        .mains .tstsx{
            font-size: 20px;
        }
        .mains .tstsx h1{
            width: 500px;
        }
        .maintest .mains {
             display: flex;
             gap: 1px;
             justify-content: space-between;
             margin-top: 100px;
         }
        .maintest
        .imges img{
            width: 600px;
        }
        .seconds {
           background: rebeccapurple;
           height: 200px;
           display: flex;
           margin: auto;
           justify-content: center;
           gap: 10px;
           color: white;
           line-height: 50px;
           padding-top: 20px;
        }
 
    }
    @media screen and (max-width:700px){
        .mains .tstsx{
            font-size: 17px;
        }
        .mains .tstsx h1{
            width: 400px;
        }
        .maintest .mains {
             display: flex;
             gap: 1px;
             justify-content: space-between;
             margin-top: 100px;
         }
        .maintest
        .imges img{
            width: 400px;
            margin-top: -120px;
        }
        .seconds {
           background: rebeccapurple;
           height: 200px;
           display: flex;
           margin: auto;
           justify-content: center;
           gap: 0px;
           color: white;
           line-height: 50px;
           padding-top: 20px;
           font-size: 12px;
        }
        .logoads{
             width: 200px;
             height: 250px;
             margin: auto;
        }
         .logoads .reds{
             background: rgb(236, 9, 9);
             font:  sans-serif;
             font-size: 20px;
             color: white;
             text-align: center;
         }
         .logoads .redsbottoms{
             clip-path: polygon(0 15%, 100% 14%, 100% 70%, 51% 100%, 0 66%);
             background: rgb(35, 29, 107);
             text-align: center;
             height: 100px;
             padding-top: 20px;
             margin-top: -20px;
             font-size: 20px;
             color: white;
     
         }
        .logoads .redsbottoms h1{
               font-size: 20px;
         }
        .logoads .redsbottoms p{
            font-size: 10px;
         }
    }
    @media screen and (max-width:550px){
        .mains .tstsx{
            font-size: 15px;
        }
        .mains .tstsx h1{
            width: 350px;
        }
        .maintest .mains {
             display: flex;
             gap: 1px;
             justify-content: space-between;
             margin-top: 100px;
         }
        .maintest
        .imges img{
            width: 400px;
            margin-top: -120px;
        }
        .seconds {
           background: rebeccapurple;
           height: 200px;
           display: flex;
           margin: auto;
           justify-content: center;
           gap: 0px;
           color: white;
           line-height: 50px;
           padding-top: 20px;
           font-size: 12px;
        }
        .logoads{
             width: 200px;
             height: 250px;
             margin: auto;
        }
         .logoads .reds{
             background: rgb(236, 9, 9);
             font:  sans-serif;
             font-size: 20px;
             color: white;
             text-align: center;
         }
         .logoads .redsbottoms{
             clip-path: polygon(0 15%, 100% 14%, 100% 70%, 51% 100%, 0 66%);
             background: rgb(35, 29, 107);
             text-align: center;
             height: 100px;
             padding-top: 20px;
             margin-top: -20px;
             font-size: 20px;
             color: white;
     
         }
        .logoads .redsbottoms h1{
               font-size: 20px;
         }
        .logoads .redsbottoms p{
            font-size: 10px;
         }
        .seconds{
             background: rebeccapurple;
             height: 200px;
             display: flex;
             margin: auto;
             justify-content: center;
             gap:0px;
             color:white;
             line-height: 50px;
             padding-top: 20px;
             margin-left: -40px;
        }
        .seconds ul li{
            text-decoration: none;
            font-size: 10px;
        }

        .first .tags{
           margin: auto;
           text-align: center;
           background: rgb(255, 209, 6);
           width: 70%;
           border-radius: 200px;
           font-size: 10px;
        }
        .tstsx .dash {
            display: flex;
            height: 50px;
            width: 200px;
        }
    }
         
    @media screen and (max-width:414px){
        .mains .tstsx{
            font-size: 13px;
        }
        .mains .tstsx h1{
            width: 300px;
        }
        .maintest .mains {
             display: flex;
             gap: 1px;
             justify-content: space-between;
             margin-top: 100px;
         }
        .maintest
        .imges img{
            width: 350px;
            margin-top: -120px;
        }
        .seconds {
           background: rebeccapurple;
           height: 200px;
           display: flex;
           margin: auto;
           justify-content: center;
           gap: 0px;
           color: white;
           line-height: 50px;
           padding-top: 20px;
           font-size: 12px;
           margin-left: -50px;
        }
        .logoads{
             width: 200px;
             height: 250px;
             margin: auto;
        }
         .logoads .reds{
             background: rgb(236, 9, 9);
             font:  sans-serif;
             font-size: 20px;
             color: white;
             text-align: center;
         }
         .logoads .redsbottoms{
             clip-path: polygon(0 15%, 100% 14%, 100% 70%, 51% 100%, 0 66%);
             background: rgb(35, 29, 107);
             text-align: center;
             height: 100px;
             padding-top: 20px;
             margin-top: -20px;
             font-size: 20px;
             color: white;
     
         }
        .logoads .redsbottoms h1{
            font-size: 20px;
            padding: 10px;
         }
        .logoads .redsbottoms p{
            font-size: 10px;
            padding: 10px;
         }
        .seconds{
             background: rebeccapurple;
             height: 200px;
             display: flex;
             margin: auto;
             justify-content: center;
             gap:0px;
             color:white;
             line-height: 50px;
             padding-top: 20px;
        }
        .seconds ul li{
            text-decoration: none;
            font-size: 8px;
        }

        .first .tags{
           margin: auto;
           text-align: center;
           background: rgb(255, 209, 6);
           width: 70%;
           border-radius: 200px;
           font-size: 10px;
        }
        .tstsx .dash {
            display: flex;
            height: 50px;
            width: 200px;
        }
    }
     
    
     
     
</style>
     
    <nav class="navs">

        <div class="navslist">
                <h1 class="logo">
                     s
                </h1>
                <h1>TaskUS</h1>
        </div>
         
    </nav>

    <div class="maintest">

        <div class="mains">

            <div class="tstsx">
                <h1 >The people-first Culture <br> your Deserve </h1>
            </div>

            <div class="logoads">
                 <div class="reds">
                      Great<br>
                      place<br>
                      to <br>
                      work<br>
                 </div>
                  <div class="redsbottoms">
                      <h1>Certified</h1>
                      <p>NOV 2023-NOV 2024</p>
                      <p>PH</p>
                  </div>
            </div>

        </div>

         <div class="imges">
            <img src="https://sebse12.github.io/test/taskuss.jpg" alt="">
         </div>
                   
    </div>


    <div class="dashcolor">

         <div class="tstsx">

             <div class="dash">
                 <div class="pink">
                    pink
                 </div> 
                 <div class="green">
                    green
                 </div>
             </div>

             <div class="dash">
                <div class="vaolet">
                    vaolet
                </div>
                <div class="blue">
                    blue
                </div>
            </div>

         </div>

    </div>

    <div class="first">
            <div class="tags">
                 <h1>Our #RidiculouslyGood Benefits:</h1>
            </div>
        <div class="seconds">
           <ul class="setxt">
               <li>HMO+2 Dependents</li>
               <li>Mental Health & Wellness</li>
               <li>World-Class Workspaces</li>
           </ul>
           <ul class="setxt">
                <li>Free lunch on-site</li>
                <li> leave encashment</li>
                <li>Retirement Savings Program</li>
            </ul>
            <ul class="setxt">
                <li>Passion Project</li>
                <li>Expanded Maternity Benefits</li>
                <li>NextGen Scholarship Program</li>
            </ul>

        </div>

    </div>

    <div class="footer">
             <p>Want to Learn More About Us? Visit <a href="">www.tashUs.com</a></p>
    </div>




    
</body>
</html>
