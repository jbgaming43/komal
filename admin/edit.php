<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

$id = $_GET['id'];

$query = 'SELECT * FROM produk WHERE id = ' . $id . '';
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result)) {
    $namaServis = $row['namaServis'];
    $kategori = $row['kategori'];
    $deskripsi = $row['deskripsi'];
    $harga = $row['harga'];
    $gambar = $row['gambar'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Pijat</title>

    <!-- bootstrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <style>
        /* wrapper */
        #wrapper {
            background-color: #eee7d3;
        }

        /* custom scrollbar */
        /* width */
        ::-webkit-scrollbar {
            width: 15px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px lightblue;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: lightblue;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: lightblue;
        }

        .btn:hover {
            transform: scale(1.2);
            transition: .2s;
            color: gray;
        }

        #aubutton {
            padding: 1em 2em;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #ffffff;
            transition: all 1000ms;
            font-size: 15px;
            position: relative;
            overflow: hidden;
            outline: 2px solid #beafe1;
            width: 10rem;

            left: 45%;
        }

        #aubutton:hover {
            color: #ffffff;
            transform: scale(1.1);
            outline: 2px solid #beafe1;
            box-shadow: 4px 5px 17px -4px #268391;
        }

        #aubutton::before {
            content: "";
            position: absolute;
            left: -50px;
            top: 0;
            width: 0;
            height: 100%;
            background-color: #beafe1;
            transform: skewX(45deg);
            z-index: -1;
            transition: width 1000ms;
        }

        #aubutton:hover::before {
            width: 250%;
        }
    </style>
</head>

<body>
    <div id="wrapper">

        <!-- navbar -->
        <?php require "navbar.php" ?>

        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col">
                    <img src="<?php echo $gambar ?>" alt="">
                </div>
                <div class="col">
                    <div class="row">

                        <form action="update.php" method="post">
                            <!-- <h3 class="mb-4"><?php echo $namaServis ?></h3> -->
                            <h3 class="mb-4">Edit Item</h3>

                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Nama Servis: </label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="<?php echo $namaServis ?>" name="namaServis">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Kategori: </label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="<?php echo $kategori ?>" name="kategori">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Deskripsi: </label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="<?php echo $deskripsi ?>" name="deskripsi">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Harga: </label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="<?php echo $harga ?>" name="harga">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Gambar: </label>
                                </div>
                                <div class="col-9">
                                    <input type="file" name="localFile" id="fileName" style="margin: 0 0 2% 0;">
                                    <input type="text" class="form-control" value="<?php echo $gambar ?>" name="gambar">
                                    <p>You can upload an image or just paste the url</p>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <button class="button" id="aubutton" style="background-color: #d9b4e2;" name="update">Update</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>

        <?php
        require '../footer2.php';
        ?>
    </div>

</body>

</html>