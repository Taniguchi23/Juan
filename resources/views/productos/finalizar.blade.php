@extends('layouts.app')
@section('content')
    <div class="container">
        <?php
        if (isset($data->dataMap)) {
        if ($data->dataMap->ACTION_CODE == "000") {
            $c = preg_split('//', $data->dataMap->TRANSACTION_DATE, -1, PREG_SPLIT_NO_EMPTY);
            ?>
        <div class="alert alert-success" role="alert">
                <?php echo $data->dataMap->ACTION_DESCRIPTION;?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <b>Número de pedido: </b> <?php echo $purchaseNumber; ?>
            </div>
            <div class="col-md-12">
                <b>Fecha y hora del pedido: </b> <?php echo $c[4].$c[5]."/".$c[2].$c[3]."/".$c[0].$c[1]." ".$c[6].$c[7].":".$c[8].$c[9].":".$c[10].$c[11]; ?>
            </div>
            <div class="col-md-12">
                <b>Tarjeta: </b> <?php echo $data->dataMap->CARD." (".$data->dataMap->BRAND.")"; ?>
            </div>
            <div class="col-md-12">
                <b>Importe pagado: </b> <?php echo $data->order->amount. " ".$data->order->currency; ?>
            </div>
        </div>
            <?php
        }
        } else {
            $c = preg_split('//', $data->data->TRANSACTION_DATE, -1, PREG_SPLIT_NO_EMPTY);
            ?>
        <div class="alert alert-danger" role="alert">
                <?php echo $data->data->ACTION_DESCRIPTION;?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <b>Número de pedido: </b> <?php echo $purchaseNumber; ?>
            </div>
            <div class="col-md-12">
                <b>Fecha y hora del pedido: </b> <?php echo $c[4].$c[5]."/".$c[2].$c[3]."/".$c[0].$c[1]." ".$c[6].$c[7].":".$c[8].$c[9].":".$c[10].$c[11]; ?>
            </div>
            <div class="col-md-12">
                <b>Tarjeta: </b> <?php echo $data->data->CARD." (".$data->data->BRAND.")"; ?>
            </div>
        </div>
            <?php
        }
        ?>
    </div>
@endsection
