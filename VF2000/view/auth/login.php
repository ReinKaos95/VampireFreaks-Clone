<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table>
                    <form  action="" method="post">

                    <tr bgcolor="red">
                    <td colspan="2" nowrap="" height="5">
                        <font size="3" face="Arial, Helvetica, sans-serif" color="black">
                            <b>E-Mail Address</b>
                        </font>
                        <br>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus>
                    </td>
                    </tr>
                    <tr bgcolor="red">
                    <td height="2">
                        <font size="3" face="Arial, Helvetica, sans-serif" color="black">
                            <b>Password</b>
                        </font>
                        <br>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </td>
                    <td valign="bottom" height="2">
                    <button type="submit" class="btn btn-primary">Login</button>
                    </td>
                    </tr>
                    <tr bgcolor="#DCDCDC">
                        <td valign="middle" colspan="2" height="2" align="center">
                        <font size="3" face="Arial, Helvetica, sans-serif" color="black">
                            <b>New users <a class="nav-link" href="index.php?c=auth&a=register">Sign Up!</a></b>
                        </font>
                        </td>
                    </tr>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
