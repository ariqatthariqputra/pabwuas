<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style inputs with type="text", select elements and textareas */
        input[type=text],
        select,
        .textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        /* Style the submit button with a specific background color etc */
        .input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        .input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: rgb(0, 0, 0);
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .search {
            padding: 8px 15px;
            background: rgba(50, 50, 50, 0.2);
            border: 0px solid #dbdbdb;
        }

        .button {
            position: relative;
            padding: 6px 15px;
            left: -8px;
            border: 2px solid #53bd84;
            background-color: #53bd84;
            color: #fafafa;
        }

        .button:hover {
            background-color: #fafafa;
            color: #207cca;
        }
    </style>
</head>

<body style="background-image: url(https://i.pinimg.com/originals/a2/a0/94/a2a0943f1b608680028c23c910a55a04.gif);">
    <div class="topnav">
        <a href="<?=base_url("home")?>">Home</a>
        <a href="news.php">News</a>
        <a class="active" href="<?=base_url("home/contact")?>">Contact</a>
        <a href="<?=base_url("home/about")?>">About</a>

    </div>
    <form action="" method="GET">
        <center><td><label for="nama lengkap" style="color: white;">Nama Lengkap<br><input type="text" name="nama" id="nama" placeholder="Nama anda" style="width: 200px;"></td><br></center>
        <center><td><label for="alamat" style="color: white;">Alamat<br></label><input type="text" name="alamat" id="alamat" placeholder="Alamat Anda" style="width: 200px;"></td><br></center>
        <center><dt><label for="no" style="color: white;">Nomor HP<br></label><input type="text" name="no_hp" id="no" placeholder="No Hp" style="width: 200px;"></center>
        </dt>
        
        <center><select name="negara" id="negara" style="width: 200px;">
                <option value="Indonesia">Indonesia</option>
                <option value="Singapura">Singapura</option>
                <option value="Jepang">Jepang</option>
            </select></center>
         
        <td><input type="submit" value="Kirim"></td>

    </form>

    <div style="background-color: green; width: 200px;"   >
        <?php
        if ($_GET) {
            echo 'Nama Anda : ' . $_GET['nama'];
            echo '<br>';
            echo 'Alamat Anda : ' . $_GET['alamat'];
            echo '<br>';
            echo 'Nomor Hp anda : ' . $_GET['no_hp'];
            echo '<br>';
            echo 'Negara : ' . $_GET['negara'];
        }
        ?>
    </div>
</body>

</html>