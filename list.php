<!DOCTYPE html>
<html lang='ru'>
  <head>
  <title>Список пользователей</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" href="list.css">
  <script src="\jquery-3.4.1.js"></script>
  <script src="\jquery-ui.js"></script>
  <script type="text/javascript">
    // Назначить обработчики события click
    // после загрузки документа
    $(function(){
      $(".jumbotron > div > a").on("click", function(){
        // Формируем ссылку для AJAX-обращения
        var url = "user.php?id=" + $(this).data('id');
        console.log(url);
        // Отправляем AJAX-запрос и выводим результат
        $.ajax({
          url: encodeURI(url)
        }).done(function(data){
          $('#info').html(data).removeClass("hidden");
        });
      })
    });
  </script>
  </head>
  <body>
    <div id="list">
      <?php
        // Устанавливаем соединение с базой данных
        require_once("connect_db.php");
        $query = "SELECT * FROM users
                  ORDER BY name";
        $usr = $pdo->query($query);
        try {
          echo "<div class='jumbotron'>";
          while($user = $usr->fetch()) {
            echo "<div><a href='#' ".
                 "data-id='".$user['id']."'>".
                 htmlspecialchars($user['name'])."</a></div>";
          }
          echo "</div>";
        } catch (PDOException $e) {
          echo "Ошибка выполнения запроса: " . $e->getMessage();
        }
      ?>
    </div>
    <div id='info' class='hidden'></div>
  </body>
</html>