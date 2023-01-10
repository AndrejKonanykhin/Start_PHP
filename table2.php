<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Сравнение в PHP</title>
</head>
<body>
  <h1>Сравнение в PHP</h1>
  <hr>
  <h2>Гибкое сравнение в PHP</h2>
  <div class="mobile-table">
      <table>
        <thead>
          <tr>
            <th class="white-border-right" style="background-color:#fff;border:none"></th>
            <th class="white-border-right">true</th>
            <th class="white-border-right">false</th>
            <th class="white-border-right">1</th>
            <th class="white-border-right">0</th>
            <th class="white-border-right">-1</th>
            <th class="white-border-right">"1"</th>
            <th class="white-border-right">null</th>
            <th class="white-border-right">"php"</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="white-border-bottom">true</td>
            <td><?= var_dump(true == true) ?></td>
            <td><?= var_dump(true == false) ?></td>
            <td><?= var_dump(true == 1) ?></td>
            <td><?= var_dump(true == 0) ?></td>
            <td><?= var_dump(true == -1) ?></td>
            <td><?= var_dump(true == "1") ?></td>
            <td><?= var_dump(true == null) ?></td>
            <td><?= var_dump(true == "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">false</td>
            <td><?= var_dump(false == true) ?></td>
            <td><?= var_dump(false == false) ?></td>
            <td><?= var_dump(false == 1) ?></td>
            <td><?= var_dump(false == 0) ?></td>
            <td><?= var_dump(false == -1) ?></td>
            <td><?= var_dump(false == "1") ?></td>
            <td><?= var_dump(false == null) ?></td>
            <td><?= var_dump(false == "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">1</td>
            <td><?= var_dump(1 == true) ?></td>
            <td><?= var_dump(1 == false) ?></td>
            <td><?= var_dump(1 == 1) ?></td>
            <td><?= var_dump(1 == 0) ?></td>
            <td><?= var_dump(1 == -1) ?></td>
            <td><?= var_dump(1 == "1") ?></td>
            <td><?= var_dump(1 == null) ?></td>
            <td><?= var_dump(1 == "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">0</td>
            <td><?= var_dump(0 == true) ?></td>
            <td><?= var_dump(0 == false) ?></td>
            <td><?= var_dump(0 == 1) ?></td>
            <td><?= var_dump(0 == 0) ?></td>
            <td><?= var_dump(0 == -1) ?></td>
            <td><?= var_dump(0 == "1") ?></td>
            <td><?= var_dump(0 == null) ?></td>
            <td><?= var_dump(0 == "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">-1</td>
            <td><?= var_dump(-1 == true) ?></td>
            <td><?= var_dump(-1 == false) ?></td>
            <td><?= var_dump(-1 == 1) ?></td>
            <td><?= var_dump(-1 == 0) ?></td>
            <td><?= var_dump(-1 == -1) ?></td>
            <td><?= var_dump(-1 == "1") ?></td>
            <td><?= var_dump(-1 == null) ?></td>
            <td><?= var_dump(-1 == "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">"1"</td>
            <td><?= var_dump("1" == true) ?></td>
            <td><?= var_dump("1" == false) ?></td>
            <td><?= var_dump("1" == 1) ?></td>
            <td><?= var_dump("1"== 0) ?></td>
            <td><?= var_dump("1" == -1) ?></td>
            <td><?= var_dump("1" == "1") ?></td>
            <td><?= var_dump("1" == null) ?></td>
            <td><?= var_dump("1" == "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">null</td>
            <td><?= var_dump(null == true) ?></td>
            <td><?= var_dump(null == false) ?></td>
            <td><?= var_dump(null == 1) ?></td>
            <td><?= var_dump(null== 0) ?></td>
            <td><?= var_dump(null == -1) ?></td>
            <td><?= var_dump(null == "1") ?></td>
            <td><?= var_dump(null == null) ?></td>
            <td><?= var_dump(null == "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">"php"</td>
            <td><?= var_dump("php" == true) ?></td>
            <td><?= var_dump("php" == false) ?></td>
            <td><?= var_dump("php" == 1) ?></td>
            <td><?= var_dump("php"== 0) ?></td>
            <td><?= var_dump("php" == -1) ?></td>
            <td><?= var_dump("php" == "1") ?></td>
            <td><?= var_dump("php" == null) ?></td>
            <td><?= var_dump("php" == "php") ?></td>
          </tr>
        </tbody>
      </table>
      <p>Гибкое сравнение в РНР осуществляется посредством оператора '=='. Результаты гибкого сравнения можно 
        интерпретировать следующим образом. Значение "true" при сравнении с true получаем, сравнивая:<br>
        - собственно true;<br>
        - число 1;<br>
        - число -1, так как РНР рассматривает как true любое отрицательное или положительное число, кроме нуля;<br>
        - строка "1" (то же самое при сравнении строки "1" и числа 1, т.к. строка, содержащее число, преобразована в число);<br>
        - строка "php", так как это не пустая строка.<br>
        Значение "true" при сравнении с false получаем, сравнивая:<br>
        - собственно false;<br>
        - число 0;<br>
        - null (отсутствие значения).<br>
        При сравнении между собой строк, сравнивается содержимое строк, как при жестком сравнении.<br>
        Сравнение с null возвращает true при сравнении с:<br>
        - false;<br>
        - 0;<br>
        - собственно null.<br>
      </p>
    </div>
    <h2>Жесткое сравнение в PHP</h2>
<div class="mobile-table">
      <table>
        <thead>
          <tr>
            <th class="white-border-right" style="background-color:#fff;border:none"></th>
            <th class="white-border-right">true</th>
            <th class="white-border-right">false</th>
            <th class="white-border-right">1</th>
            <th class="white-border-right">0</th>
            <th class="white-border-right">-1</th>
            <th class="white-border-right">"1"</th>
            <th class="white-border-right">null</th>
            <th class="white-border-right">"php"</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="white-border-bottom">true</td>
            <td><?= var_dump(true === true) ?></td>
            <td><?= var_dump(true === false) ?></td>
            <td><?= var_dump(true === 1) ?></td>
            <td><?= var_dump(true === 0) ?></td>
            <td><?= var_dump(true === -1) ?></td>
            <td><?= var_dump(true === "1") ?></td>
            <td><?= var_dump(true === null) ?></td>
            <td><?= var_dump(true === "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">false</td>
            <td><?= var_dump(false === true) ?></td>
            <td><?= var_dump(false === false) ?></td>
            <td><?= var_dump(false === 1) ?></td>
            <td><?= var_dump(false === 0) ?></td>
            <td><?= var_dump(false === -1) ?></td>
            <td><?= var_dump(false === "1") ?></td>
            <td><?= var_dump(false === null) ?></td>
            <td><?= var_dump(false === "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">1</td>
            <td><?= var_dump(1 === true) ?></td>
            <td><?= var_dump(1 === false) ?></td>
            <td><?= var_dump(1 === 1) ?></td>
            <td><?= var_dump(1 === 0) ?></td>
            <td><?= var_dump(1 === -1) ?></td>
            <td><?= var_dump(1 === "1") ?></td>
            <td><?= var_dump(1 === null) ?></td>
            <td><?= var_dump(1 === "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">0</td>
            <td><?= var_dump(0 === true) ?></td>
            <td><?= var_dump(0 === false) ?></td>
            <td><?= var_dump(0 === 1) ?></td>
            <td><?= var_dump(0 === 0) ?></td>
            <td><?= var_dump(0 === -1) ?></td>
            <td><?= var_dump(0 === "1") ?></td>
            <td><?= var_dump(0 === null) ?></td>
            <td><?= var_dump(0 === "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">-1</td>
            <td><?= var_dump(-1 === true) ?></td>
            <td><?= var_dump(-1 === false) ?></td>
            <td><?= var_dump(-1 === 1) ?></td>
            <td><?= var_dump(-1 === 0) ?></td>
            <td><?= var_dump(-1 === -1) ?></td>
            <td><?= var_dump(-1 === "1") ?></td>
            <td><?= var_dump(-1 === null) ?></td>
            <td><?= var_dump(-1 === "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">"1"</td>
            <td><?= var_dump("1" === true) ?></td>
            <td><?= var_dump("1" === false) ?></td>
            <td><?= var_dump("1" === 1) ?></td>
            <td><?= var_dump("1" === 0) ?></td>
            <td><?= var_dump("1" === -1) ?></td>
            <td><?= var_dump("1" === "1") ?></td>
            <td><?= var_dump("1" === null) ?></td>
            <td><?= var_dump("1" === "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">null</td>
            <td><?= var_dump(null === true) ?></td>
            <td><?= var_dump(null === false) ?></td>
            <td><?= var_dump(null === 1) ?></td>
            <td><?= var_dump(null === 0) ?></td>
            <td><?= var_dump(null === -1) ?></td>
            <td><?= var_dump(null === "1") ?></td>
            <td><?= var_dump(null === null) ?></td>
            <td><?= var_dump(null === "php") ?></td>
          </tr>
          <tr>
            <td class="white-border-bottom">"php"</td>
            <td><?= var_dump("php" === true) ?></td>
            <td><?= var_dump("php" === false) ?></td>
            <td><?= var_dump("php" === 1) ?></td>
            <td><?= var_dump("php" === 0) ?></td>
            <td><?= var_dump("php" === -1) ?></td>
            <td><?= var_dump("php" === "1") ?></td>
            <td><?= var_dump("php" === null) ?></td>
            <td><?= var_dump("php" === "php") ?></td>
          </tr>
        </tbody>
      </table>
      <p>При жестком сравнении с использованием оператора '===', PHP возращает true только, 
        если оба операнда имеют одинаковый тип и одинаковое значение. Поэтому, например, 
        сравнение 1 и true вернет false, а 1 и "1" - также будет false, тогда как при гибком сравнении после приведения 
        типов, оба эти примера будут возвращены как true.</p>
    </div>
    <a href="table1.php">Таблица истинности PHP</a>
  </body>
</html>