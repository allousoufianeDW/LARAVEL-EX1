<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Transactional Email</title>

  </head>
  <body class="">
    <table  cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <span class="preheader">Subscribe to Coloured.com.ng mailing list</span>
            <table class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table  cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <h1>Hi {{$name}}</h1> <br>
                        <h1>Confirm your email</h1>
                        <h2>Your Code To Confirmate {{$activation_code}}</h2>
                        <table cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td >
                                <table  cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td><h3>Click at the link </h3> <a href="{{route('app_activation_account_link',['token'=>$activation_token])}}" target="_blank">confirm email</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p>If you received this email by mistake, simply delete it. You won't be subscribed if you don't click the confirmation link above.</p>

                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer">
              <table cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                    <span class="apple-link">Coloured.com.ng | Feminism | Culture | Law | Feminists Rising</span>

 Don't like these emails? <a href="#">Unsubscribe</a>.
                  </td>
                </tr>
                <tr>
                  <td class="content-block powered-by">
                    Powered by <a href="https://fb.me/jalasem">Jalasem</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
