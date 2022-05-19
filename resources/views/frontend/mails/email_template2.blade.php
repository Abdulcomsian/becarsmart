<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Email Template 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>

    </style>
</head>

<body style=" margin:0px; font-family: 'Poppins', sans-serif;">
    <section id="header" style="width: 100%; max-width:80%;  margin:0 auto;">
        <div class="header-content" style="text-align: left;">
            <img src="{{asset ('assets/img/sellcar-logo.png')}}" width="45%" />
        </div>
        <br>
        <center>
                <div style="background-color: #f5d11b;padding: 1px 8.8%;border-radius: 20px;width:100%;max-width:fit-content;line-height: 0;">
                    <p style="/* text-align:center; */font-size: 80px;font-weight: 600;line-height: 0px;">{{ $email_template2['registration_number'] }}</p>
                    <p style="text-align: initial;font-size: 30px;font-weight: 700;line-height: 5px;">{{ $email_template2['model_number'] }}</p>
                </div>
            </center>  
            <br><br>
        <div class="multipale-img" style="text-align: center; width:100%; display:inline-flex;max-width: 100%;">
            <div style="width:25%">
                <img src="{{asset ('assets/img/enterreg.png')}}" style="width:50%;" />
            </div>
            <div style="width:25%">
                <img src="{{asset ('assets/img/microsoft2.png')}}" style="width:50%;" />
            </div>
            <div style="width:25%">
                <img src="{{asset ('assets/img/DEAL.png')}}" style="width:50%;" />
            </div>
            <div style="width:25%">
                <img src="{{asset ('assets/img/microsoft2.png')}}" style="width:50%;" />
            </div>
        </div>
        <br><br>
            <h3 style="text-align:center; color: rgb(44 59 83); font-size: 40px;line-height: 0px; text-transform: uppercase; font-weight: 600;">Your Valuation is...</h3>
            <center>
                <p style="text-align:center;padding: 40px 20%;font-size: 60px;font-weight: 900;border: 16px solid #e74f42;width: 100%;max-width: fit-content;">£{{ $email_template2['amount'] }}</p>
            </center>         

            <div style="padding:8px; ">
                <p style="font-size:25px; text-align:center;text-transform: uppercase; color: rgb(44 59 83); font-weight:600;">How to Accept?</p>
                <div style="padding-left:20px;">
                    <p style="text-transform: uppercase; color: rgb(44 59 83); font-weight:600; font-size:25px;">1 Call US On 023 9355 2653 </p>
                    <p style="text-transform: uppercase; color: rgb(44 59 83); font-weight:600; font-size:25px;">2 Reply back to this email with 'ACCEPT'.</p>
                </div>
            </div>


    </section>
</body>
</html>