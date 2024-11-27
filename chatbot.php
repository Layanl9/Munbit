<?php
include("conn.php");
$id = $_SESSION['id'];

$sql_chatbots = "SELECT * FROM chatbots WHERE user_id = $id ORDER BY id DESC";
$query = mysqli_query($conn,$sql_chatbots);

$sql_image = "SELECT * FROM users WHERe id = $id";
$query_image = mysqli_query($conn,$sql_image);
foreach($query_image as $row_image)
{
  $progile_img = $row_image['image'];
}

if(isset($_POST['msg_send_btn']))
{
  $content = $_POST['content'];
  $sql_chatbot = "INSERT INTO chatbots(question,user_id,status) VALUES('$content',$id,0)";
  $query_insert = mysqli_query($conn,$sql_chatbot);
  header("refresh:5");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Chatbot </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>


 
.card-body{
  background: #f8f9fb;
}



* {
      box-sizing: border-box;
    }

    /* Button used to open the chat form - fixed at the bottom of the page */
    .open-button {
      border: 2px solid black;
      border-radius: 30px;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
    }

    /* The popup chat - hidden by default */
    .chat-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      z-index: 9;
    }

    /* Add styles to the form container */

    .form-container {
      max-width: 300px;
      padding: 10px;
      border: 2px solid black;
      border-radius: 30px;
      background-color: white;
    }

    /* Full-width textarea */
    .form-container textarea {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
      resize: none;
      min-height: 200px;
    }

    /* When the textarea gets focus, do something */
    .form-container textarea:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/send button */
    .form-container .btn {
      height: 45px;
      background: #162938;
      border: none;
      outline: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: lem;
      color: #fff;
      font-weight: 500;
      width: 70px;
      background-color: #87CEFA;
      font-family: Times New Roman;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: #808080;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
      opacity: 1;
    }

    #t {
      border: 2px solid black;
      border-radius: 5px;
    }


    img {
      max-width: 100%;
    }

    .inbox_people {
      background: #f8f8f8 none repeat scroll 0 0;
      float: right;
      overflow: hidden;
      width: 100%;
      border: 1px solid #416D19;
      border-radius: 18px;
    }

    .inbox_msg {
      /* border: 1px solid #c4c4c4; */
      clear: both;
      overflow: hidden;
      width: 100%;
      padding: 0px 20px;
    }

    .top_spac {
      margin: 20px 0 0;
    }


    .recent_heading {
      float: left;
      width: 40%;
    }

    .srch_bar {
      display: inline-block;
      text-align: right;
      width: 60%;
      padding: 0em;
    }

    .headind_srch {
      padding: 10px 29px 10px 20px;
      overflow: hidden;
      border-bottom: 1px solid #c4c4c4;
    }

    .recent_heading h4 {
      color: #416D19;
      font-size: 21px;
      margin: auto;
    }

    .srch_bar input {
      border: 1px solid #cdcdcd;
      border-width: 0 0 1px 0;
      width: 80%;
      padding: 2px 0 4px 6px;
      background: none;
    }

    .srch_bar .input-group-addon button {
      background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
      border: medium none;
      padding: 0;
      color: #707070;
      font-size: 18px;
    }

    .srch_bar .input-group-addon {
      margin: 0 0 0 -27px;
    }

    .chat_ib h5 {
      font-size: 15px;
      color: #464646;
      margin: 0 0 8px 0;
    }

    .chat_ib h5 span {
      font-size: 13px;
      float: right;
    }

    .chat_ib p {
      font-size: 14px;
      color: #989898;
      margin: auto
    }

    .chat_img {
      float: left;
      width: 11%;
    }

    .chat_ib {
      float: left;
      padding: 0 0 0 15px;
      width: 88%;
    }

    .chat_people {
      overflow: hidden;
      clear: both;
    }

    .chat_list {
      border-bottom: 1px solid #c4c4c4;
      margin: 0;
      padding: 18px 16px 10px;
    }

    .inbox_chat {
      height: 550px;
      overflow-y: hidden;
    }

    .active_chat {
      background: #ebebeb;
    }

    .incoming_msg_img {
      display: inline-block;
      width: 50px;
      border-radius: 50%;
    }

    .received_msg {
      display: inline-block;
      padding: 0 0 0 10px;
      vertical-align: top;
      width: 92%;
    }

    .received_withd_msg p {
      background: #ebebeb none repeat scroll 0 0;
      border-radius: 3px;
      color: #646464;
      font-size: 14px;
      margin: 0;
      padding: 5px 10px 5px 12px;
      width: 100%;
    }

    .time_date {
      color: #747474;
      display: block;
      font-size: 12px;
      margin: 8px 0 0;
    }

    .received_withd_msg {
      width: 57%;
    }

    .mesgs {
      padding: 30px 15px 0 25px;
    }

    .sent_msg p {
      background: #416D19 none repeat scroll 0 0;
      border-radius: 3px;
      font-size: 14px;
      margin: 0;
      color: #fff;
      padding: 5px 10px 5px 12px;
      width: 77%;
    }

    .outgoing_msg {
      overflow: hidden;
      margin: 26px 0 26px;
    }

    .sent_msg {
      float: right;
      width: 46%;
    }

    .input_msg_write input {
      background-color: #fcfcfc;
      border: medium none;
      border-radius: 9px;
      color: #4c4c4c;
      font-size: 15px;
      min-height: 48px;
      width: 100%;
    }

    .type_msg {
      border-top: 1px solid #c4c4c4;
      position: relative;
    }

    .msg_send_btn {
      background: #416D19 none repeat scroll 0 0;
      border: medium none;
      border-radius: 50%;
      color: #fff;
      cursor: pointer;
      font-size: 17px;
      height: 33px;
      position: absolute;
      right: 0;
      top: 11px;
      width: 33px;
    }

    .messaging {
      width: 100%;
      /* height: 90vh; */
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 18px;
      min-height: 50vh;
    }
    
    .msg_history {
    padding: 20px 20px;
    display: flex;
    justify-content: flex-end;
    flex-direction: column-reverse;
    overflow-y: auto;
    }

    .message-title{
      background-color: #416D19;
      padding: 10px 10px;
    }

    .message-title h2 {
      color: #fcfcfc;
    }
    .message-title h6 {
      color: #fcfcfc;
      padding-bottom: 20px;
    }

    .chat-setting{
      background-color: #fcfcfc;
    }
          /* Section About Minbit */
      .about-munbit {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-color: #BEE97B;
      height: 300px !important;
      padding: 30px 30px;
      border-radius: 18px;
      background-image: url("./images/login-signup.png");
      background-position: center;
      background-size: 350px;
      background-repeat: no-repeat;
      position: relative;
    }
    

  </style>
</head>

<body>

  <?php
  include("Navbar.php");
  ?>



<section class="chat-setting pt-5 pb-5">

  <!-- <div style="width: 100%;text-align:center;color:#7b8275;"> Chatbot </div> -->
  <div class="container" >
      <form action="chatbot.php" method="POST">
        <div class="row pt-5">
          <div class="col-lg-12 pt-5">
          <!-- box of chat -->
            <div class="messaging">
              <div class="inbox_msg">
                <div class="inbox_people">
                  <div class="message-title"><h2>Bit Chatbot</h2></div>
                  <div class="message-title"><h6 style="color: white;"> Welcome to our Agriculture Chatbot! 🌱
                                                 This chatbot is specifically designed to help you with agricultural information.
                                                 Whether you're curious about soil types and benefits, how its effect plants growth , Which plants purify air at home,  best herbs,
                                                  fruits, and flowers for your home, or even cutting-edge AI & drone technology in farming.
                                                  Feel free to ask about anything related to these topics,
                                                 and I'll provide the best insights to help you !🌿🌻🍅"</h6></div>
                  <div class="mesgs">
                    <div class="msg_history">
                
                <?php
                foreach ($query as $row) {
                  $question = $row['question'];
                  $answer = $row['answer'];
                ?>



                    <?php 
                    ?>

                    <div class="incoming_msg">
                      <img style="width: 50px;" src="./images/logo.png" alt="sunil">
                      <div class="received_msg mt-3">
                        <div class="received_withd_msg">
                          <p>
                            <?= $answer; ?>
                          </p>
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="outgoing_msg" style="width: 100%;">
                      
                      <div class="incoming_msg_img" style="float:right;">
                        <div class="incoming_msg_img"> <img  src="images/<?=$progile_img; ?>" alt=""> </div>
                        </div>
                        <div class="sent_msg">
                          <p style="width: 90%; word-wrap: break-word;">
                            <?= $question; ?>
                            </p>
                            </div>
                            </div> 
                            
                      <?php
                  ?>
                  

                <?php
                }
                ?>
              </div>
              <div class="type_msg">
                <div class="input_msg_write pb-1" >
                  <input id="content" name="content" type="text" class="write_msg" placeholder="Type your message here" />
                  <button class="msg_send_btn" id="msg_send_btn" name="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                </div>
              </div>
              
            </div>
          </div>   
        </div>
      </div>
   
    </div>
    </div>
    </form>
  </div>  
  
</section>

 
</body>

</html>