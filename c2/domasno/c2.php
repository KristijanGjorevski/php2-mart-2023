<?php 
// $endpoint = "https://api.openweathermap.org/data/2.5/weather?q=Skopje&appid=7a609ebc2b9efc717b50bdf54d0ba8e1&units=metric&&lang=mk&mode=xml";

// $key = "7a609ebc2b9efc717b50bdf54d0ba8e1";
// echo '<pre>';
// var_dump($endpoint);
// echo '<pre>';


$link = curl_init();
curl_setopt($link, CURLOPT_URL,"https://api.openweathermap.org/data/2.5/weather?q=Skopje&appid=7a609ebc2b9efc717b50bdf54d0ba8e1&units=metric&&lang=mk&mode=xml" );
curl_setopt($link, CURLOPT_RETURNTRANSFER,1);

$prezemeno = curl_exec($link);

// $url = file_get_contents($endpoint);
// echo '<pre>';
// var_dump($prezemeno);
// echo '<pre>';

$decoding = simplexml_load_string($prezemeno);

// $decoding = json_decode($url);

// echo '<pre>';
// var_dump($decoding);
// echo '<pre>';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css" integrity="sha384-mLBxp+1RMvmQmXOjBzRjqqr0dP9VHU2tb3FK6VB0fJN/AOu7/y+CAeYeWJZ4b3ii" crossorigin="anonymous">
  </head>
  <body>
    <div class="mx-auto" style="width: 200px;">
      <div class="row card border-primary toast show modal-margin">
        <div class="toast-header">
          <table class=" table table-hover table-bordered text-center ">
            <thead>
              <tr> 
                <th scope="col">
                  Параметар
                </th >
                <th scope="col">
                  Вредност
                </th>
            </thead>
            <tbody>
              <tr class="table-primary">
                <th scope="row">
                  <p>Град</p>
                </th>
                <td>
                  <p><?= $decoding->city['name']?></p>
                </td>
              </tr>
              <tr class="table-primary">
                <th scope="row">
                  <p>Моментална температура</p>
                </th >
                <td  >
                  <p><?= $decoding->temperature['value'] . ' C'?></p>
                </td>
              </tr>
              <tr class="table-primary">
                <th scope="row">
                  <p>Минимална дневна</p>
                </th >
                <td  >
                  <p><?= $decoding->temperature['min'] . ' C'?></p>
                </td>
              </tr>
              <tr class="table-primary">
                <th scope="row">
                  <p>Максимална дневна</p>
                </th >
                <td  >
                  <p><?= $decoding->temperature['max'] . ' C'?></p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>