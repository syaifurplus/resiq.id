<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="<?= site_url('assets/admin/css/styles.css'); ?>">
    </head>

    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="post" class="form">
                <label>Username</label><br>
                <input id="user-email" class="form-content" type="text" placeholder=" " name="username" autocomplete="on" required /><br>
                <label>Password</label><br>
                <input id="user-password" class="form-content" placeholder=" " type="password" name="password" required /><br>
                <button><input id="submit-btn" type="submit" name="submit" value="LOGIN" class="login" /></button>
            </form>
        </div>
    </body>
</html>