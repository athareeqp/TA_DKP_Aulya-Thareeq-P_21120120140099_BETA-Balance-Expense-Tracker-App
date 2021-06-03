<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" />
<section class="jumbotron">
    <div class="container text-center">
        <img src="img/logo.png" width="123" class="rounded-circle img-thumbnail">
        <h3>Balance/Expense Tracker App</h3>
        <p>Aplikasi sederhana untuk mencatat keuangan sehari-harimu.</p>
    </div>
    <hr class="my-2">
</section>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
            <h6>SALDO<h6>
            </div>
        </div>
        <div class="row">
            <div class="col">
            Rp. 
            <?php
            $SaldoMasuk = (float) $_POST['nominal1'] + (float) $_POST['nominal3'] + (float) $_POST['nominal5'];
            $SaldoKeluar = (float) $_POST['nominal2'] + (float) $_POST['nominal4'] + (float) $_POST['nominal6'];
            $Saldo = $SaldoMasuk - $SaldoKeluar;

            print ($Saldo);
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <h6>PEMASUKAN<h6>
            </div>
            <div class="col">
            <h6>PENGELUARAN</h6>
            </div>
        </div>
        <div class="row">
            <div class="col">
            Rp. 
            <?php
            print ($SaldoMasuk);
            ?>
            </div>
            <div class="col">
            Rp. 
            <?php
            print ($SaldoKeluar);
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
            Dari
            </div>
            <div class="col">
            Nominal
            </div>
            <div class="col">
            Untuk
            </div>
            <div class="col">
            Nominal
            </div>
        </div>
        <div class="row">
            <div class="col">
            <?php
            echo $_POST['benda1'] . "<br>";
            echo $_POST['benda3'] . "<br>";
            echo $_POST['benda5'];
            ?>
            </div>
            <div class="col">
            <?php
            $stack1 = new SplQueue();
            if ($_POST['nominal1'] != NULL || $_POST['nominal3'] != NULL || $_POST['nominal5'] != NULL) {
                $data[0] = $_POST['nominal1'];
                $data[1] = $_POST['nominal3'];
                $data[2] = $_POST['nominal5'];
                for ($i = 0; $i < 3; $i++) {
                    if ($data[$i] != null) {
                        $stack1->push($data[$i]);
                    }
                }

            for ($i = 0; $i < sizeof($stack1); $i++) {
                print("Rp." . $stack1[$i] . "<br>");
            }
            }
            ?>
            </div>
            <div class="col">
            <?php
            print ($_POST['benda2'] . "<br>");
            print ($_POST['benda4'] . "<br>");
            print ($_POST['benda6']);
            ?>
            </div>
            <div class="col">
            <?php
            $stack = new SplQueue();
            if ($_POST['nominal2'] != NULL || $_POST['nominal4'] != NULL || $_POST['nominal6'] != NULL) {
                $data[0] = $_POST['nominal2'];
                $data[1] = $_POST['nominal4'];
                $data[2] = $_POST['nominal6'];
                for ($i = 0; $i < 3; $i++) {
                    if ($data[$i] != null) {
                        $stack->push($data[$i]);
                    }
                }

                for ($i = 0; $i < sizeof($stack); $i++) {
                    print("Rp." . $stack[$i] . "<br>");
                }
            }
            ?>
            </div>
        </div>
    </div>
</body>