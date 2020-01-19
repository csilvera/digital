<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8">
        <title>Operaciones - Aviso</title>
        <style>
            header{
                display: block;
                width: 100%;
                padding: 15px;
                height: 60px;
                border-bottom: 1px solid #eee;
                background-color: #F1C40F;
            }
            .Icon-avi{
                display: block;
                width: 40px;
                height: 40px;
                margin-top: 10px;
                margin-left: 5%;
                background:url('img/icologo.ico');
                background-size: 40px 40px;
            }
            .left-div{
                float: left;
            }
            .opc-primary{
                padding-top: 14px;
                padding-left: 4%;
                font-weight: 700;
                color: #FF5733;
            }
        </style>
    </head>
    <body>
        <header>
            <i class="Icon-avi"></i>
            <div class="left-div opc-primary">Operaciones - Recordatorio</div>
        </header>
        <?php
            echo $order;
        ?>
    </body>
</html>