<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Iniilmu.com</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card" style="width: 50%;margin-top:10em;margin-left:20em">
            <div class="card-body">
                <h5 class="card-title text-center">TUTORIAL MENAMBAH TEXT FIELD DENGAN JAVASCRIPT</h5>
                <form method="POST" action="proses_tambah.php">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang[]" class="form-control" id="nama_barang" placeholder="Nama Barang" aria-describedby="nama_barang">
                    </div>
                    <button style="margin-bottom: 2em;" onclick="tambah_form(); return false;" type="button" class="btn btn-success">+ Tambah</button>
                    <input type="hidden" id="idf" value="1">
                    <div id="form"></div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script language="javascript">
        function tambah_form() {
            var idf = document.getElementById("idf").value;
            var stre;
            stre = "<div id='srow" + idf + "'><button class='btn btn-danger' onclick='hapusElemen(\"#srow" + idf + "\"); return false;'>- Hapus</button><div class='form-group'><label for='nama_barang'>Nama Barang</label><input type='text' class='form-control' id='nama_barang' placeholder='Nama Barang' autocomplete='off' name='nama_barang[]' autocomplete='off'></div></div>";
            $("#form").append(stre);
            idf = (idf - 1) + 2;
            document.getElementById("idf").value = idf;
        }

        function hapusElemen(idf) {
            $(idf).remove();
        }
    </script>
</body>

</html>