<?php
$apiEndpoint ="https://jsonplaceholder.typicode.com/posts";

$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = json_decode(curl_exec($ch),true);

//print_r(json_decode($response));

// Close cURL session
curl_close($ch);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    

  <table class="table table-dark table-hover">
 <tr>
    <th>#ID</th>
    <th>User Id</th>
    <th>Title</th>
    <th>Description</th>
 </tr>
 <?php 
 foreach ($response as $item) {
    // echo "<pre>";
    //  print_r($item);
    //  echo "</pre>";
     ?>
 
 <tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['userId']; ?></td>
    <td><?php echo $item['title']; ?></td>
    <td><?php echo $item['body']; ?></td>
 </tr>
 <?php } ?>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>