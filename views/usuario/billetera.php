<?php
if (!isset($_SESSION)) {
    session_start();
}

?>
<?php include_once('barrita/header.php'); ?>
 



<p class="page-title">Billetera Inteligente</p>
<div class="form_group">
    <div class="amount-box text-center">
        <img src="imagenes/logo_aqku.png">
        <p>Saldo Total</p>
        <p class="amount">S/. <span>



                <?php foreach ($this->MODEL->SaldoActual($_SESSION['idUsuario']) as $new) : ?>

                    <td><?php echo $new->saldoactual; ?></td>
                <?php endforeach; ?>

            </span></p>
        <div class="btn-group text-center">
            <button type="button" class="form_submit2" onclick="window.location.href='indexUsuario.php?c=deposito'" >Agregar</button>
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