<form method="post" name="frmTest">
    <p class="color-blue">
        Ingrese documento:<br>
        <input type="text" name="txtDocument" size="40">
    </p>

    <div>
        <input type="submit" value="Enviar" name="btnSend">
    </div>
</form>

<?php
if ((bool)$params['query'] === true) {
    $arrData = $params['data'];
    if (count($arrData) > 0) {
        ?>
        <table border="1">
            <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            </thead>
            <tr>
                <td><?php echo $arrData['usu_id']; ?></td>
                <td><?php echo $arrData['usu_nombres']; ?></td>
                <td><?php echo $arrData['usu_apellidos']; ?></td>
                <td><?php echo $arrData['usu_email']; ?></td>
            </tr>
        </table>
    <?php
    } else {
        ?>
        El usuario no existe!
    <?php
    }
}

?>