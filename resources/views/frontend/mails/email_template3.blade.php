<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Email Template 3</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>

    </style>
</head>

<body style=" margin:0px; font-family: 'Poppins', sans-serif;">
    <section id="header" style="width: 100%; max-width:80%;  margin:0 auto;">
        <div class="header-content" style="text-align: left;">
            <img src="{{asset ('assets/img/sellcar-logo.png')}}" width="45%" />
        </div>
        <h3 style="text-align:center; color: rgb(44 59 83); font-size: 40px;line-height: 40px; text-transform: uppercase; font-weight: 600;">THANK YOU FOR Accepting <br> OUR quote!</h3>
        <br>
        <center>
                <div style="background-color: #f5d11b;padding: 1px 8.8%;border-radius: 20px;width:100%;max-width:fit-content;line-height: 0;">
                    <p style="/* text-align:center; */font-size: 70px; text-transform: uppercase; font-weight: 500;line-height: 0px;">{{ $email_template3['registration_number'] }}</p>
                    <p style="text-align: initial;font-size: 30px;font-weight:700; text-transform: uppercase; line-height: 5px;">{{ $email_template3['model_number'] }}</p>
                </div>
            </center> 
            <center>
                <p style="text-align:center;text-transform: uppercase; padding:  40px 20%;font-size: 60px;font-weight: 900;border: 16px solid #e74f42;width: 100%;max-width: fit-content;">£{{ $email_template3['amount'] }}</p>
            </center>
        <p style="font-size:27px; text-align:center;text-transform: uppercase; color:#2c3b53; font-weight:600;">Why Choose Us?</p>
        <h3 style="color: #2c3b53;font-size: 23px; font-weight: 500; text-align:center">We will contact you to finalise the <br> deal and arrange the collection date.</h3>
        <br>
            <div style="background: #e74f42; text-align:center; padding:8px; ">                
                <div style="padding-left:20px;">
                    <p style="color:#fff; font-weight:600; font-size:29px;">Refer a friend to us and if they <br> sell with us, you'll get £100!</p>
                </div>
            </div>


    </section>
</body>
</html>