
 <?php
$json= file_get_contents( __DIR__.'/5-less.json');
$contacts = json_decode($json,true);
?>

<html lang="ru">
<head>
    <title>4 home</title>
    <meta charset="utf-8">
<link  rel="stylesheet" href="style.css">
</head>
<body>
<table>
  <thead>
    <tr>
      <td>Номер</td>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Адрес</td>
      <td>Телефон</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contacts as $contact){?>
      <tr>
        <td> <?php echo $contact['id']; ?></td>
        <td> <?php echo $contact['FirstName']; ?></td>
        <td> <?php echo isset($contact['LastName'] )? $contact['LastName'] : 'нет' ?></td>
        <td> <?php echo $contact['address']['city'].", " . $contact['address']['StreetAddress'] .",  " . $contact['address']['postalCode'] ?></td>
        <td> <?php echo $contact['phoneNumber'][0] ."<br> " . (isset($contact['phoneNumber'][1]) ? $contact['phoneNumber'][1] : '--') ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>
