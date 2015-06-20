<!doctype html>
<html>
<head>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        Inicio de Sesion
    </title>
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script src="js/login.js"></script>
</head>
<body>
    <div id="bar">
        <div id="container">
            <!-- Login Starts Here -->
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm" action="logueo/sesion.php" method="post">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Usuario</label>
                                <input type="text" name="usuario" id="email" required/>
                            </fieldset>
                            <fieldset>
                                <label for="password">Contrase&ntilde;a</label>
                                <input type="password" name="clave" id="input password" required/>
                            </fieldset>
                            <input type="submit" id="login" name="bot" value="ENTRAR" />
                            
                        </fieldset>
                        
                    </form>
                </div>
            </div>
            <!-- Login Ends Here -->
        </div>
    </div>
</body>
</html>