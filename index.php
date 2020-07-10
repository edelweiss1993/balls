<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Игра с шариками</title>
    <style> 
    @import url('https://fonts.googleapis.com/css2?family=Pattaya&family=Roboto&display=swap');
    
    /*font-family: 'Pattaya', sans-serif;
    font-family: 'Roboto', sans-serif;*/
    
     .balloons {
        background: rgb(50, 50, 100);
     }
     
     .score-text, .level-text, .skipped-text-2, .skipped-text {
         font-family: 'Pattaya', sans-serif;
     }
     
     .score, .level, .skipped, .btn {
         font-family: 'Roboto', sans-serif;
         font-weight: bold;
     }
     
     table {
         width: 100%;
     }
     .round {
         
         border: 1px solid black;
         border-radius: 50%;
         min-height: 40px;
         background: maroon;
     }
     
    </style>
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-10 pl-0">
                  <div class="balloons"></div>
              </div>
              <div class="col-2 p-3">
                  <p class="score-text mb-1">Cчет:</p>
                  <p class="score">0</p>
                  <p class="level-text mb-1">Уровень:</p>
                  <p class="level">1</p>
                  <p class="skipped-text mb-1">Пропущено шаров:</p>
                  <p class="skipped">0</p>
                  <p class="skipped-text-2 mb-1">Оставшиеся жизни:</p>
                  <p class="lifes">
                      <table>
                          <tr>
                              <td>
                                 <div class="round one"></div> 
                              </td>
                              <td>
                                  <div class="round two"></div> 
                              </td>
                              <td>
                                  <div class="round three"></div> 
                              </td>
                              <td>
                                  <div class="round four"></div> 
                              </td>
                              <td>
                                  <div class="round five"></div> 
                              </td>
                          </tr>
                      </table>
                  </p>
                  <button class="btn btn-success btn-block btn-start">Начать</button>
                  <button class="btn btn-primary btn-block btn-refresh">Сбросить</button>
              </div>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <script src="script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>