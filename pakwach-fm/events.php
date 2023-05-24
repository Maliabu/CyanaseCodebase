<?php
 if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
     $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
     header("Location: $redirect_url");
     exit();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Pakwach FM - programming</title>
          <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;700;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/Pakwach Fm Collateral_BIZ CARD.png" type="image/x-icon">
</head>
<style>
  body{
        font-family: 'Raleway', sans-serif !important;
    }
    .presenters{
        background: -webkit-linear-gradient(top,rgb(255, 255, 255),rgba(255, 255, 255, 0.788)), url("images/verrati.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .match{
        background-color: rgb(241,101,34) !important;
    }
    .services{
        background-image: url("images/Pakwach\ Fm\ Collateral_BIZ\ CARD.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    a{
        color: black !important;
    }
    table{
        color: white !important;
    }
      p {
        color: #b3b3b3;
        font-weight: 300; }
      
        h1, h2, h3, h4, h5, h6,
      .h1, .h2, .h3, .h4, .h5, .h6 {
        font-family: 'Raleway', sans-serif; }
      a {
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      
      .content {
        padding: 7rem 0; }
      
      h2 {
        font-size: 20px; }
    h6{
        font-size: 12px !important;
    }
    h2{
        font-size: 50px !important;
    }
    h3, h4, h5{
        font-size: 20px !important;
    }
      
      .form-control:active, .form-control:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none; }
      
      #calendar {
        max-width: 100%;
        margin: 0 auto; }
        #calendar .fc-view-container {
          padding: 5px;
          background-color: #fff;
          -webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
          box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2); }
          .cwinya{
            background-image: url("images/Dj\ Cwinya.jpg");
            background-size: cover;
          }
          .light{
            background: -webkit-linear-gradient(left,rgba(255, 255, 255, 0.805),rgba(255, 255, 255, 0.151));
          }
          .dark{
            background: -webkit-linear-gradient(left,rgba(0, 0, 0, 0.805),rgba(255, 255, 255, 0.151));
          }
          .mastura{
            background-image: url("images/Mastura.jpg");
            background-size: cover;
          }
          .checked {  
            color : rgb(255, 102, 0);  
            font-size : 10px;  
        }  
        .unchecked {  
            font-size : 10px;  
        }  
        .veratti{
          background-image: url("images/verrati.jpg");
          background-size: cover;
        }
      
</style>
<body>
    <div class="row bg-light">
        <div class="row main fix text-white p-2 w-100">
            <div class=" col-lg-2 main">
                <img src="images/Pakwach Fm Collateral_BIZ CARD.jpg" alt="" srcset="" width="80%" height="100%">
            </div>
            <div class="col-lg-8">
            </div> 
            <div class="col-lg-2 ">
                <div class="row justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="rounded-circle border mt-2 bi bi-mic-fill" viewBox="0 0 16 16">
                        <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                      <h6 class=" text-white mt-4 ml-2">LISTEN NOW</h6>
                </div>
            </div>
        </div>
        <div class="row w-100 second justify-content-center p-5">
            <a href="index.php"><h6 class=" px-5 border-right border-dark">Home</h6></a>
            <a href="programming.php"><h6 class=" px-5 border-right border-dark">Programming</h6></a>
            <h6 class=" px-5 border-right border-dark font-weight-bolder">Presenters</h6>
                <a href="events.php#team"><h6 class=" px-5">Team</h6></a>
                <a href="programming.php#rates"><h6 class=" px-5 py-1 border border-warning rounded-lg">Ad Rate Card</h6></a>
                <a href="about.php"><h6 class=" px-5">About Us</h6></a>
                <a href="about.php"><h6 class=" px-5">Contact Pakwach FM</h6></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 pl-5">
            <div>
                <div class="row justify-content-center w-100 bg-transparent">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfScULjJT4aOCCy_6pK2ylx6Ha9ls0MXgCdIafdDinZYKsKyMZdoNqdm70DWoGd4WAa1g&usqp=CAU" width="50%" height="50%" alt="" srcset="">
                </div>
            </div>
            <p class=" font-weight-bold border text-center">No upcoming events</p>
            <div>
              <h4 class=" w-100 p-3">BET with KAGWIRAWO SPORTS BETTING</h4>
                      <img src="https://kagwirawo.co.ug/assets/img/super_big_odds.jpg" alt="" srcset="" width="100%" height="100%">
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row pt-5 px-5 justify-content-center">
                <h2>Events at Pakwach FM</h2>
                <div class="row p-5 justify-content-center w-100 bg-light">
                    <div class="row justify-content-center w-100"><h5 class=" w-100">MONTHLY RATINGS</h5>
                      <p class="w-100">Your best programs and presenters, news and events</p>
                      <div class="col-lg-4 w-100 ">
                        <h5 class="border-bottom border-dark">BEST SHOW</h5>
                        <p>Kamaleng</p>
                      </div>
                      <div class="col-lg-4 w-100">
                        <h5 class="border-bottom border-dark">TOP HIT</h5>
                        <p></p>
                      </div>
                      <div class="col-lg-4 w-100">
                        <h5 class="border-bottom border-dark">FAVORITE DJ</h5>
                        <p>Dj Cwinya Allen</p>
                      </div>
                    </div>
                </div>
                  </div>
                </div>
            </div>
        </div>
                <div class="row p-5 justify-content-center" id="presenters">
                  <h2 class="mt-5">Presenters at Pakwach FM</h2>
                  <h6 class="w-100 text-center px-5">The profiles of all the presenters at Pakwach FM, your favorite shows and programs. Find them in studio or social media and follow their shows on weekdays and weekends 24/7 at 100.2 Pakwach FM.</h6>
                  <div class="col-lg-6 p-5">
                    <div class="row veratti">
                      <div class="col-lg-7 p-5 dark text-white">
                        <div class="row">
                          <h3 class=" font-weight-bolder">VERATTI</h3>
                          <h4 class="w-100" >Presenter at <br> 100.2 PAKWACH FM </h4>
                          <h4 class=" border-bottom mt-5">PROGRAMS</h4>
                          <h4 >- Kamaleng <br> <span class=" main text-white px-3">Every Monday to Friday from 9:20pm - Midnight</span></h4>
                          <h4 class="  p-1 border-dark border">Rating: <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star checked"></span>  
                            <!-- To display unchecked star rating icons -->  
                            <span class = "fa fa-star checked"></span> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 p-5">
                    <div class="row mastura">
                      <div class="col-lg-5 p-5 light">
                        <div class="row">
                          <h4>MAJOR MASTURA</h4>
                          <h6 class=" small">Presenter at 100.2 PAKWACH FM </h6>
                          <H6 class=" border-bottom border-dark">PROGRAMS</H6>
                          <h6 class=" small">- Women In Development <span class=" main text-white px-3">Monday to Friday from 10am - 1pm</span><br> - Abala Lembe <span class=" match text-white px-3">Every sunday from 2pm - 3pm</span></h6>
                          <h6 class=" small p-1 border-dark border">Rating: <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star unchecked"></span>  
                            <!-- To display unchecked star rating icons -->  
                            <span class = "fa fa-star unchecked"></span> </h6>
                        </div>
                      </div>
                    </div>
                    <div class="row cwinya">
                      <div class="col-lg-5 p-5 light">
                        <div class="row">
                          <h4>DJ CWINYA ALLEN</h4>
                          <h6 class=" small">Presenter at 100.2 PAKWACH FM </h6>
                          <H6 class=" border-bottom border-dark">PROGRAMS</H6>
                          <h6 class=" small">- The Bridge <br> <span class=" main text-white px-3">Every Monday to Friday from 5pm - 9pm</span> <br> - Community Circle <br> - Vura Mithe Kwaro <br> - Uzei Siyo Gonjwa</h6>
                          <h6 class=" small p-1 border-dark border">Rating: <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star checked"></span>  
                            <span class = "fa fa-star unchecked"></span> </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        <!-- <div class="row justify-content-center">
          <div class="col-lg-6 p-3">
            <div class="row cwinya">
              <div class="col-lg-5 p-5 light">
                <div class="row">
                  <h4>DJ CWINYA ALLEN</h4>
                  <h6 class=" small">Presenter at 100.2 PAKWACH FM </h6>
                  <H6 class=" border-bottom border-dark">PROGRAMS</H6>
                  <h6 class=" small">- The Bridge <br> <span class=" main text-white px-3">Every Monday to Friday from 5pm - 9pm</span> <br> - Community Circle <br> - Vura Mithe Kwaro <br> - Uzei Siyo Gonjwa</h6>
                  <h6 class=" small p-1 border-dark border">Rating: <span class = "fa fa-star checked"></span>  
                    <span class = "fa fa-star checked"></span>  
                    <span class = "fa fa-star checked"></span>  
                    <span class = "fa fa-star checked"></span>  
                    <span class = "fa fa-star unchecked"></span> </h6>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="row p-5 justify-content-center main text-white" id="team">
          <h3 class="w-100 text-center">The Pakwach FM Team</h3>
          <h6 class="w-100 text-center">Meet more Staff</h6>
          <div class="col-lg-4 p-5">
            <div class="row">
              <div class="col-lg-6">
                <div class="row">
                  <p>RWOTHONGEYO MARTIN JACHAN</p>
                  <H4>General Manager PAKWACH FM Ltd</H4>
                  <p><a href="mailto:_mainaccount@pakwachfm.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                  </svg></a></p>
                  <p>
                    <a href="tel:+256776994301">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class=" bi bi-whatsapp ml-4" viewBox="0 0 16 16">
                          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                      </svg>
                  </a>
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoOB5N94C9KqC1ZyEmPm8c-w-EhdIrsmslQg&usqp=CAU" alt="General Manager" srcset="">
              </div>
            </div>
          </div>
          <div class="col-lg-4 p-5">
            <div class="row">
              <div class="col-lg-6">
                <div class="row">
                  <p>KAYENY PAMUNGU PROSCOVIA</p>
                  <H4>Marketing Director, ACCOUNT EXECUTIVE</H4>
                  <p><a href="mailto:accountexecutive@pakwachfm.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                  </svg></a></p>
                  <p><a href="https://ug.linkedin.com/in/proscovia-kayeny-35b4551b2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="ml-4 bi bi-linkedin" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg></a></p>
                  <p>
                    <a href="tel:+256772748172">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class=" bi bi-whatsapp ml-4" viewBox="0 0 16 16">
                          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                      </svg>
                  </a>
                  </p>
                  <p>
                    <a href="https://en-gb.facebook.com/public/Kayeny-Proscovia">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-facebook ml-4" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg> 
                  </a>
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <img src="images/IMG_20210129_182516.jpg" alt="General Manager" srcset="" width="100%">
              </div>
            </div>
          </div>
        </div>
        <div class="row px-5 w-100">
          <div class="row w-100 pt-3 justify-content-center">
              <div class="col-lg-5">
                  <p>&COPY;Copyright.pakwachfm.com All rights reserved. T&Cs Apply. <br> Mgt@pakwachfm.social media
                      <a href="tel:+256772748172">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-whatsapp ml-2" viewBox="0 0 16 16">
                              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                          </svg>
                      </a>
                      <a href="https://www.youtube.com/channel/UCA74btLFAWELyVLgDItuLNg">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube ml-1" viewBox="0 0 16 16">
                              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                          </svg>
                      </a>
                      <a href="https://twitter.com/pakwach_fm?lang=en">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter ml-1" viewBox="0 0 16 16">
                              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                          </svg>
                      </a>
                      <a href="https://www.facebook.com/100.2pakwachfm/">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook ml-1" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg> 
                      </a><br>
                      Google - Gmail 
                      <a href="mailto:pakwachfm@gmail.com">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google ml-2" viewBox="0 0 16 16">
                              <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                            </svg>
                      </a>
                  </p>
              </div>
          </div>
  </div>
    </div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="calendar-19/js/main.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'interaction', 'dayGrid' ],
    defaultDate: '2020-02-12',
    editable: true,
    eventLimit: true, // allow "more" link when too many events
    events: [
      {
        title: 'All Day Event',
        start: '2020-02-01'
      },
      {
        title: 'Long Event',
        start: '2020-02-07',
        end: '2020-02-10'
      },
      {
        groupId: 999,
        title: 'Repeating Event',
        start: '2020-02-09T16:00:00'
      },
      {
        groupId: 999,
        title: 'Repeating Event',
        start: '2020-02-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2020-02-11',
        end: '2020-02-13'
      },
      {
        title: 'Meeting',
        start: '2020-02-12T10:30:00',
        end: '2020-02-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2020-02-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2020-02-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2020-02-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2020-02-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2020-02-13T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2020-02-28'
      }
    ]
  });

  calendar.render();
});

  </script>
</html>