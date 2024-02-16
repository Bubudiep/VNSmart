<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'">
    <title>VNSmart</title>
    <link rel="stylesheet" href="app/sources/css/app.css">
    <link rel="stylesheet" href="app/sources/lib/font/css/all.min.css">
    <script src="app/sources/js/jquery.js"></script>
  </head>
  <body>
    <div class="top-container">
      <div class="flex appname">VNSmart</div>
      <div class="flex right">
        <button class="ts" id="miniminze"><i class="fa-solid fa-minus"></i></button>
        <button class="ts" id="maximinze"><i class="fa-solid fa-expand"></i></button>
        <button class="ts" id="hidden"><i class="fa-solid fa-xmark"></i></button>
      </div>
    </div>
    <div class="main-container">
      <div class="left-app">
        <div class="flex-cl w100 g5">
          <div class="app-item"><i class="fa-solid fa-compass"></i></div>
          <div class="app-item"><i class="fa-solid fa-store"></i></div>
          <div class="add-item"><i class="fa-solid fa-plus"></i></div>
          <split class="mg2x0"></split>
        </div>
        <div class="flex-cl bottom w100 g5">
          <div class="app-item"><i class="fa-solid fa-user"></i></div>
          <div class="app-item"><i class="fa-solid fa-gear"></i></div>
        </div>
      </div>
      <div class="left-tools">
        <div class="flex-cl w100">
          <div class="left-search"><input type="text" placeholder="Tìm sản phẩm nhanh..."></div>
          <div class="flex-cl pd5 g2">
            <div class="left-item"><logo><i class="fa-solid fa-chart-simple"></i></logo> Thống kê</div>
            <div class="left-item"><logo><i class="fa-solid fa-clipboard-check"></i></logo> Bán hàng</div>
            <div class="left-item"><logo><i class="fa-solid fa-mug-hot"></i></logo> Thực đơn</div>
            <div class="left-item"><logo><i class="fa-solid fa-people-group"></i></logo> Nhân lực</div>
            <div class="left-item"><logo><i class="fa-solid fa-user-tie"></i></logo> Khách hàng</div>
            <div class="left-item"><logo><i class="fa-solid fa-object-group"></i></logo> Tồn kho</div>
          </div>
        </div>
      </div>
      <div class="body-container">
        <button id="sendPopup">Test popup</button>
      </div>
    </div>
  </body>
  <script type="module" src="app/sources/js/app.js"></script>
  <script type="module" src="app/sources/js/load.js"></script>
</html>