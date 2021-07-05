
<body style="text-align: center; background-image: url(https://static.planetminecraft.com/files/profile_banner/2389735_7.gif);">
    <h1>
        <marquee direction="right" style="color: yellow;">Selamat Datang Di Tempat Pendaftaran</marquee>
    </h1>

    <h2 style="color: yellow;">Silahkan isi data terlebih dahulu</h2>
    <form action="<?=base_url("auth/register")?>" method="POST">
        <div>
            <label for="username" style="color: white;">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" />
            
        </div>
        <div>
            <label for="email" style="color: white;">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email" />
        </div>
        <div>
            <label for="password" style="color: white;">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" />
        </div>
        <input type="submit" value="Kirim">
    </form>
</body>

