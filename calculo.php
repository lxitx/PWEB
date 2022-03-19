<?php
    $valor = $_POST['valor'];
    $i = 0;

    if($_POST['valor'] == 0){
        header('Location: boasVindas.php');
        exit();
    }

    ?>
        <div>
            <table>
            <thead>
                <tr>
                    <th>Numero</th>

                    <th>Ordem</th>

                    <th>Valores obtido</th>

                </tr>
            </thead>
            <tbody>
               <?php for($i = 1; $i < 51; $i++) : ?>
                   <tr>
                     <td><?=$valor?></td>
                     <td><?=$i?></td>
                     <td><?=$valor*$i?></td>
                   </tr>
               <?php endfor; ?>
            </tbody>
            </table>
        </div>
    <?php
?>