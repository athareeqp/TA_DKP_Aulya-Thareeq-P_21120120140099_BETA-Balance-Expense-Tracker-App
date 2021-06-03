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
    <form action="hasil.php" method="POST">
    <div class="container text-center">
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
            <input type="text" name="benda1" placeholder="Didapatkan dari ..." />
            </div>
            <div class="col">
            <input type="number" name="nominal1" placeholder="Rp. ..." />
            </div>
            <div class="col">
            <input type="text" name="benda2" placeholder="Digunakan untuk ..."/>
            </div>
            <div class="col">
            <input type="number" name="nominal2" placeholder="Rp. ..." />
            </div>
        </div>
        <div class="row">
            <div class="col">
            <input type="text" name="benda3" placeholder="Didapatkan dari ..." />
            </div>
            <div class="col">
            <input type="number" name="nominal3" placeholder="Rp. ..." />
            </div>
            <div class="col">
            <input type="text" name="benda4" placeholder="Digunakan untuk ..." />
            </div>
            <div class="col">
            <input type="number" name="nominal4" placeholder="Rp. ..." />
            </div>
        </div>
        <div class="row">
            <div class="col">
            <input type="text" name="benda5" placeholder="Didapatkan dari ..." />
            </div>
            <div class="col">
            <input type="number" name="nominal5" placeholder="Rp. ..." />
            </div>
            <div class="col">
            <input type="text" name="benda6" placeholder="Digunakan untuk ..." />
            </div>
            <div class="col">
            <input type="number" name="nominal6" placeholder="Rp. ..." />
            </div>
        </div>
        <div class="row">
            <div class="col">
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
    </form>
</body>