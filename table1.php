<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Таблица истинности PHP</title>
</head>
<body>
  <h1>Таблица истинности PHP</h1>
  <hr>
<div class="mobile-table">
      <table>
        <thead>
          <tr>
            <th class="white-border-right">A</th>
            <th class="white-border-right">B</th>
            <th class="white-border-right">!A</th>
            <th class="white-border-right">A || B</th>
            <th class="white-border-right">A && B</th>
            <th class="white-border-right">A xor B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php $a = 0; echo $a ?></td>
            <td><?php $b = 0; echo $b ?></td>
            <td><?= !$a ?></td>
            <td><?= $a or $b?></td>
            <td><?= $a and $b?></td>
            <td><?= $a xor $b?></td>
          </tr>
          <tr>
            <td><?php echo $a ?></td>
            <td><?php $b = 1; echo $b ?></td>
            <td><?= !$a ?></td>
            <td><?= $a or $b?></td>
            <td><?= $a and $b?></td>
            <td><?= $a xor $b?></td>
          </tr>
          <tr>
            <td><?php $a = 1; echo $a ?></td>
            <td><?php $b = 0; echo $b ?></td>
            <td><?= !$a ?></td>
            <td><?= $a or $b?></td>
            <td><?= $a and $b?></td>
            <td><?= $a xor $b?></td>
          </tr>
          <tr>
            <td><?php echo $a ?></td>
            <td><?php $b = 1; echo $b ?></td>
            <td><?= !$a ?></td>
            <td><?= $a or $b?></td>
            <td><?= $a and $b?></td>
            <td><?= $a xor $b?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <a href="table2.php">Сравнение в PHP</a>
  </body>
</html>