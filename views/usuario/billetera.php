<?php include_once('barrita/header.php'); ?>
<?php
if (!isset($_SESSION)) {
    session_start();
}

?>



<p class="page-title">Billetera Inteligente</p>
<div class="form_group">
    <div class="amount-box text-center">
        <img src="imagenes/logo_aqku.png">
        <p>Saldo Total</p>
        <p class="amount">S/. <span> <?php echo  $_SESSION['saldoactualUsuario']  ?> </span></p>
        <div class="btn-group text-center">
            <button type="button" class="form_submit2">Agregar</button>
            <button type="button" class="form_submit2">Retirar</button>
        </div>
    </div>

</div>




<div class="form_group">

    <div class="txt-history">
        <p><b>Transacciones</b></p>
        <!--Comentario-->

        <?php foreach ($this->MODEL->HistorialTOP3($_SESSION['idUsuario']) as $new) : ?>
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