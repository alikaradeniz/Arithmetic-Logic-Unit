<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MAKİNE</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
<style>
    body {
        background-color: #FFEBEE
    }

    .card {
        width: 400px;
        background-color: #fff;
        border: none;
        border-radius: 12px
    }

    label.radio {
        cursor: pointer;
        width: 100%
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none
    }

    label.radio span {
        padding: 7px 14px;
        border: 2px solid #eee;
        display: inline-block;
        color: #039be5;
        border-radius: 10px;
        width: 100%;
        height: 48px;
        line-height: 27px
    }

    label.radio input:checked+span {
        border-color: #039BE5;
        background-color: #81D4FA;
        color: #fff;
        border-radius: 9px;
        height: 48px;
        line-height: 27px
    }

    .form-control {
        margin-top: 10px;
        height: 48px;
        border: 2px solid #eee;
        border-radius: 10px
    }

    .form-control:focus {
        box-shadow: none;
        border: 2px solid #039BE5
    }

    .agree-text {
        font-size: 12px
    }

    .terms {
        font-size: 12px;
        text-decoration: none;
        color: #039BE5
    }

    .confirm-button {
        height: 50px;
        border-radius: 10px

    }
</style>
<form method="post">
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Sayı Giriniz" name="num1" required> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Sayı Giriniz" name="num2" required> </div>
                        </div>
                    </div>
                </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" name="topla" class="btn btn-primary">+</button>
                <button type="submit" name="cikar" class="btn btn-primary">-</button>
                <button type="submit" name="carp"  class="btn btn-primary">x</button>
                <button type="submit" name="bol" class="btn btn-primary">/</button>
            </div>
            <?php
if(isset($_POST['topla'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $sonuc=$num1+$num2;

            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        Sonuç:
                        <input class="form-control" type="text" disabled placeholder="<?php echo $sonuc ; ?> " name="num2"> </div>
                        Binary Karşılığı:
                        <input class="form-control" type="text" disabled placeholder="<?php echo  decbin($sonuc);  ?> " name="num2"> </div
                </div>
            </div>
        </div>
        <?php
}
?>
    <?php
    if(isset($_POST['cikar'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $sonuc=$num1-$num2;

        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    Sonuç:
                    <input class="form-control" type="text" disabled placeholder="<?php echo $sonuc ; ?> " name="num2"> </div>
                Binary Karşılığı:
                <input class="form-control" type="text" disabled placeholder="<?php
                if($sonuc>0){
                    echo  decbin($sonuc);
                }
                else{
                    $sonuc2=abs($sonuc);
                    echo - decbin($sonuc2);
                }
                ?> " name="num2"> </div
        </div>
        </div>
        </div>
        <?php
    }
    ?>
    <?php
    if(isset($_POST['carp'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $sonuc=$num1*$num2;

        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    Sonuç:
                    <input class="form-control" type="text" disabled placeholder="<?php echo $sonuc ; ?> " name="num2"> </div>
                Binary Karşılığı:
                <input class="form-control" type="text" disabled placeholder="<?php
                if($sonuc>0){
                    echo  decbin($sonuc);
                }
                else{
                    $sonuc2=abs($sonuc);
                    echo - decbin($sonuc2);
                }
                ?> " name="num2"> </div
        </div>
        </div>
        </div>
        <?php
    }
    ?>
    <?php
    if(isset($_POST['bol'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $sonuc=$num1/$num2;

        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    Sonuç:
                    <input class="form-control" type="text" disabled placeholder="<?php echo $sonuc ; ?> " name="num2"> </div>
                Binary Karşılığı:
                <input class="form-control" type="text" disabled placeholder="<?php
                if($sonuc>0){
                    echo  decbin($sonuc);
                }
                else{
                    $sonuc2=abs($sonuc);
                    echo - decbin($sonuc2);
                }
                ?> " name="num2"> </div
        </div>
        </div>
        </div>
        <?php
    }
    ?>

            </div>
        </div>
    </div>
</form>
