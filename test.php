<!DOCTYPE html>
<html>
<head>
  <title>Пример скрытого текста</title>
  <style>
    .hidden-text {
      display: none;
    }
  </style>
</head>
<body>
  <a href="#" onclick="showText()">Показать скрытый текст</a>
  <p id="hiddenText" class="hidden-text">Это скрытый текст, который появится при нажатии на ссылку.</p>
  <script>
    function showText() {
      document.getElementById("hiddenText").style.display = "block";
    }
  </script>
</body>
</html>