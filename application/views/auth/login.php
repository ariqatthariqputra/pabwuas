
<body style="background-image: url(https://static.planetminecraft.com/files/profile_banner/2389735_7.gif) ; ">
    <form action="<?=base_url("auth/login")?>" method="POST">
        <div style="text-align: center;">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" />
        </div>
        <div style="text-align: center;">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" />
        </div>
        <div style="text-align: center;">
        <input type="submit" name="login" value="Masuk"></div>
    </form>
    <div style="text-align: center;">
        <td>
            <p>Belum Punya Akun? </p><a href="<?=base_url("auth/daftar")?>">Daftar Akun</a>
        </td>
    </div>
</body>

