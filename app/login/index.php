<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'">
    <title>VNSmart</title>
    <link rel="stylesheet" href="app/login/in.css">
    <link rel="stylesheet" href="app/sources/css/app.css">
    <link rel="stylesheet" href="app/sources/lib/font/css/all.min.css">
    <script src="app/sources/js/jquery.js"></script>
  </head>
  <body class="dark">
    <div class="top-container">
      <div class="flex appname"></div>
      <div class="flex right appver">VNSmart app. Version 1.0.0.1</div>
    </div>
    <div class="main-container">
      <div class="login-container">
        <div class="login-tab">
          <div class="login-tab-header">Đăng nhập</div>
          <div class="login-tab-content">
            <div class="login-form">
              <t>Tài khoản</t>
              <input type="text" placeholder="username....">
              <t>Mật khẩu</t>
              <input type="text" placeholder="password....">
              <t class="mg5x0 g5"><input type="checkbox" checked> Ghi nhớ tài khoản</t>
              <button class="sign-in">Truy cập</button>
              <div class="flex mg0x1">
                <div class="flex left"><a href="#" id="regist">Đăng ký</a></div>
                <div class="flex right"><a href="#" id="log-out">Thoát</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="login-ads"></div>
      </div>
    </div>
  </body>
  <script type="module" src="app/sources/js/app.js"></script>
  <script type="module" src="app/login/in.js"></script>
</html>