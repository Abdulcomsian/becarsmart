<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Email Template 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>

<body style=" margin:0px; font-family: 'Poppins', sans-serif;">
    <section id="header" style="width: 100%; max-width:80%;  margin:0 auto;">
        <div class="header-content" style="text-align: center;">
            <img src="{{asset ('assets/img/sellcar-logo.png')}}" width="45%" />
        </div>
        <p style="color: #2c3b53;font-size: 32px; font-weight: 700; text-align:center">Thank you for  <br> completing our vehicle <br> valuation form.</p>
        
        <br><br>
        <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
          <tr>
            <td align="center" valign="top"><table class="contenttable" border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="#ffffff" style="border-width:1px; border-style: solid; border-collapse: separate; border-color:#ededed; margin-top:20px; font-family:Arial, Helvetica, sans-serif">
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td style="padding:0px 20px;"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                              <tbody>
                                <tr>
                                  <td style="font-size:14px; line-height:20px; border-top: 1px solid #eaebed; border-bottom: 1px solid #eaebed; color:#808080">Name</td>
                                  <td style="font-size:14px; line-height:20px; padding: 10px 0 10px 5px; border-top: 1px solid #eaebed; border-bottom: 1px solid #eaebed; color: #404040; font-weight: bold;" valign="top" align="right">{{ $details['name'] }}</td>
                                </tr>
                                <tr>
                                  <td style="font-size:14px; line-height:20px; border-bottom: 1px solid #eaebed; color:#808080">Email</td>
                                  <td style="font-size:14px; line-height:20px; padding: 10px 0 10px 5px; border-bottom: 1px solid #eaebed; color: #404040; font-weight: bold;" valign="top" align="right">{{ $details['email'] }}</td>
                                </tr>
                                <tr>
                                  <td style="font-size:14px; line-height:20px; border-bottom: 1px solid #eaebed; color:#808080">Message</td>
                                  <td style="font-size:14px; line-height:20px; padding: 10px 0 10px 5px; border-bottom: 1px solid #eaebed; color: #404040; font-weight: bold;" valign="top" align="right">{{ $details['message'] }}</td>
                                </tr>
                              </tbody>
                            </table></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
                <tr>
                  <td style="padding:20px 20px;"><table width="100%" cellspacing="0" cellpadding="0" border="0">
                      <tbody>
                        <tr>
                          <td style="background-color:#efefef; border-radius:4px; padding:25px 20px;"></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:13px;color:#777777; font-family:Arial, Helvetica, sans-serif">
                <tbody>
                  <tr>
                    <td class="tablepadding" style="padding:20px 0; border-collapse:collapse">
                      <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:13px;color:#777777; font-family:Arial, Helvetica, sans-serif">
                        <tbody>
                          <tr>
                            <td class="tablepadding" align="center" style="line-height:20px; padding-top:10px; padding-bottom:20px;">Copyright &copy; 2022 Becarsmart.co.uk All Rights Reserved. </td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                </tbody>
              </table></td>
          </tr>
        </table>


    </section>
</body>
</html>