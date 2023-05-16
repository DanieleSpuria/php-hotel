<?php
  $hotels = [
    [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
    ],
    [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
    ],
    [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
    ],
    [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
    ],
    [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
    ],
  ];

  foreach($hotels as $key => $value) {
      var_dump( $value);
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>php-Hotel</title>
</head>
<body>

  <!-- <?php 
    foreach($hotels as $keyHotel => $hotel) {
      foreach($hotel as $keyParam => $param) {
        echo "<h1> $keyParam: $param </h1>";
      }   
    }
  ?> -->

  <table class='table'>
    <thead>
      <tr>
        <th scope="col">Hotels</th>
        <th scope='col'>Parking</th>
        <th scope='col'>Vote</th>
        <th scope='col'>Distance to center</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach($hotels as $keyHotel => $hotel) : ?>

        <tr>
          <th scope="row"><?php echo $hotel['name']; ?></th>
          <td><?php echo $hotel['parking'] ? 'Yes' : 'No'; ?></td>
          <td><?php echo $hotel['vote']; ?></td>
          <td><?php echo $hotel['distance_to_center']; ?></td>
        </tr>

      <?php endforeach; ?>
    </tbody>
  </table> 
    <!-- <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table> -->
</body>
</html>