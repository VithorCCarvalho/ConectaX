<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<script type="text/javascript" src="../../js/jquery.min.js"></script>

<script type="text/javascript" src="../../js/bootstrap.min.js"></script>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Cidade</th>
      <th scope="col">Bairro</th>
      <th scope="col">Rua</th>
    </tr>
  </thead> <tbody>

<?php

require "../../src/classes/Database.php";

$sql  = "SELECT * FROM consultas";
$stmt = Database::prepare($sql);
$stmt->execute();
$consultas = $stmt->fetchAll();

foreach ($consultas as $key => $value):
?>


 
    <tr>
      <th scope="row"><?php echo $value->id ?></th>
      <td><?php echo $value->cidade; ?></td>
      <td><?php echo $value->bairro ?></td>
      <td><?php echo $value->rua; ?></td>
    </tr>


<?php
	endforeach;
?>
 </tbody>
</table>