<?php include_once('barrita/header.php'); ?>
<?php
if (!isset($_SESSION)) {
    session_start();
}

?>

<p><b>Transacciones</b></p>

 


<div class="form_group">

    <div class="txt-history">
        
        <!--Comentario-->

        <?php foreach ($this->MODEL->Historial($_SESSION['idUsuario']) as $new) : ?>
            <p class="txn-list">
                <?php
                if ($new->condiccionTexto == "Retiro") {
                    echo "<b><span> ";
                    echo ($new->condiccionTexto);
                    echo "</span>";
                    echo "<span class=debit-amount> S/ -";
                    echo ($new->montoproceso);
                    echo "</span></b>";
                } else {
                    echo "<b><span> ";
                    echo ($new->condiccionTexto);
                    echo "</span>";

                    echo " <span class=credit-amount> S/ +";
                    echo ($new->montoproceso);
                    echo "</span></b>";
                }
                ?>





            </p>

        <?php endforeach; ?>
    </div>
</div>


<?php include_once('barrita/footer.php'); ?>



 