<?php
$value = "";
if(isset($_POST["operator"])) {
 $exp = empty($_POST['exp']) ? "0" : $_POST['exp'];
 try {
    eval("\$value = ($exp);");
    if ($_POST["operator"] == "equal") {
      $value = $value;
    } else if ($_POST["operator"] == "sqrt") { 
      $value= sqrt($value);
    } else if ($_POST["operator"] == "cos") { 
      $value= cos($value);
    } else if ($_POST["operator"] == "tan") { 
      $value= tan($value);
    } else if ($_POST["operator"] == "sin") { 
      $value= sin($value);
    } else if ($_POST["operator"] == "log") { 
      $value= log($value);
    }
  } catch(DivisionByZeroError $e) {
    $value = "Infinity";
  } catch(\Throwable $e) {
    $value = "0";
  }
}

?>
<!DOCTYPE html>

<head>
  <title>php</title>
  <style>
    body {
      background-color: #456;
      text-align: center;
    }
    h1 {
      color:darkorange;
    }
    input, button {
      width: 100%;
      padding: 0.8em;
      font-size: 1.1rem;
    }
    input {
      text-align: right;
      box-sizing: border-box;
    }
    table {
      margin: 0 auto;
      border: 2px solid white;
      background-color: gainsboro;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <div id="page-wrap">
    <h1>PHP CALCULATOR</h1>
    <form action="" method="post" autocomplete="off">
    <table>
      <tr>
          <td colspan="6" ><input name="exp" id="exp" value="<?php echo $value?>"></input></td>
      </tr>
      <tr> 
        <td> <button onclick="send(event, this)">AC</button> </td>
        <td> <button type="submit" name="operator" value="cos">cos</button> </td>
        <td> <button type="submit" name="operator" value="tan">tan</button> </td>
        <td> <button type="submit" name="operator" value="sin">sin</button> </td>
        <td> <button type="submit" name="operator" value="log">log</button> </td>
      </tr>
      <tr>
        <td> <button onclick="send(event, this)">1</button> </td>
        <td> <button onclick="send(event, this)">2</button> </td>
        <td> <button onclick="send(event, this)">3</button> </td>
        <td> <button onclick="send(event, this)">4</button> </td>
        <td> <button onclick="send(event, this)">5</button> </td>
      </tr>
      <tr>
        <td> <button onclick="send(event, this)">6</bitton> </td>
        <td> <button onclick="send(event, this)">7</bitton> </td>
        <td> <button onclick="send(event, this)">8</bitton> </td>
        <td> <button onclick="send(event, this)">9</bitton> </td>
        <td> <button onclick="send(event, this)">0</bitton> </td>
      </tr>
      <tr>
        <td> <button onclick="send(event, this)">+</bitton> </td>
        <td> <button onclick="send(event, this)">-</bitton> </td>
        <td> <button onclick="send(event, this)">*</bitton> </td>
        <td> <button onclick="send(event, this)">/</bitton> </td>
        <td> <button onclick="send(event, this)">%</button> </td>
      </tr>
    
      <tr>
        <td> <button type="submit" name="operator" value="sqrt">√</button> </td>
        <td> <button type="submit" name="operator" onclick="send(event, this)">.</button> </td>
        <td colspan="3"> <button type="submit" name="operator" value="equal">=</bitton> </td>
      </tr>
    </table>
    </form>
  </div>
  <script>
        function send(event, button) {
          event.preventDefault();
          x = document.getElementById("exp");
          symbol = button.innerHTML;
          if (symbol == "AC") {
            x.value = "";
          } else {
            x.value += symbol.trim();
          }
        }
  </script>
</body>
</html>


