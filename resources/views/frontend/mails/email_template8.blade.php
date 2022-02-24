<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Email Template 8</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>

    </style>
</head>

<body style=" margin:0px; font-family: 'Poppins', sans-serif;">
    <section id="header" style="width: 100%; max-width:50%;  margin:0 auto;">
        <div class="header-content" style="text-align: left;">
            <img src="{{asset ('assets/img/FFF_BeCar_LO.svg')}}" width="45%" />
        </div>
        <h3 style="text-align:center;color: rgb(44 59 83);font-size: 40px;line-height: 38px;text-transform: uppercase;font-weight: 600;margin-bottom: 10px;">We have found this for <br> you!</h3>
        <div class="header-content" style="text-align: center;width:100%; max-width:80%; margin: 0 auto;">
            <img src="{{asset ('images/email_template8/' .  $email_template8['image_name'] )}}" width="100%" />
        </div>
        <br>
        <div class="multipale-button" style="text-align: center; width:100%; display:inline-block;max-width: 100%;">
            <div style="width:100%">
                <center>
                    <div style="background-color: #f5d11b;border-radius: 10px;width:100%;line-height: 0;max-width: 80%;padding: 2px 0px;">
                        <p style="text-align:center;font-size: 20px; text-transform: initial; font-weight: 800;line-height: 38px;">{{ $email_template8['description']}}</p>
                    </div>
                </center>
            </div>
            <br><br>
            <div style="width:100%">
            <center>
                <div style="border: 17px solid #e74f42;padding: 2px 18%;width:100%;max-width:fit-content;line-height: 0;">
                    <p style="text-align:center;font-size: 60px; text-transform: uppercase; font-weight: 600;line-height: 0px;">£ {{ $email_template8['amount']}}</p>
                </div>
            </center>
            </div>
        </div>
        <br><br><br>
        <p style="color: #2c3b53;font-size: 21px; text-transform: initial; font-weight: 500; text-align:left">This is a vehicle we have found after the original 'sourcing consultation'. <br> We believe it meets your criteria from what you have told us you're looking for. <br> Please see attached are more pictures and a condition report. 
        <br><br>Please contact us if interested on: 023******* or respond back to this email.</p>
        <br><br>



    </section>
</body>
</html>