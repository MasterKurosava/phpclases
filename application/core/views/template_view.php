<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/styles.css" rel="stylesheet">
  <title>BPQ</title>
</head>
<body>
<div class="globalwrap">
  <div class="header">
    <div class="header_actions">
      <a href="/" class="header_list">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="30" height="23" viewBox="0 0 30 23">
          <g>
            <rect width="27" height="3" class="cls-1"></rect>
            <rect y="10" width="20" height="3" class="cls-1"></rect>
            <rect y="20" width="30" height="3" class="cls-1"></rect>
          </g>
          </svg>
      </a>
      <a href="/main" class="header_action">УСЛУГИ</a>
      <a href="/keys" class="header_action">КЕЙСЫ</a>
    </div>
    <div class="header_logo">
      <a href="/"><img src="https://bpa.com.ua/wp-content/themes/bpa/img/logo.svg"/></a>
    </div>
    <div class="header_info">
      <a href="/about" class="header_infoItem">О НАС</a>
      <a href="/" class="header_infoItem">FAQ'S</a>
      <a href="/" class="header_infoItem phone">067 219 67 01</a>
    </div>
  </div>
  <div class="content">
    <?php  require_once $content_view?>
  </div>
  </div>
</body>
</html>