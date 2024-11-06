<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute(['username' => $username, 'password' => $password])) {
        echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
    } else {
        echo "Error al registrar.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;

            margin: 0;
            padding: 20px;
        }


        @property --s-start-0 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 1%
        }

        @property --s-end-0 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 77%
        }

        @property --y-0 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 61%
        }

        @property --c-0 {
            syntax: '<color>';
            inherits: false;
            initial-value: hsla(1, 79%, 51%, 1)
        }

        @property --x-0 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 6%
        }

        @property --c-1 {
            syntax: '<color>';
            inherits: false;
            initial-value: hsla(110, 66%, 74%, 1)
        }

        @property --y-1 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 96%
        }

        @property --s-start-1 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 16%
        }

        @property --s-end-1 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 56%
        }

        @property --x-1 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 61%
        }

        @property --c-2 {
            syntax: '<color>';
            inherits: false;
            initial-value: hsla(42, 95%, 48%, 1)
        }

        @property --x-2 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 8%
        }

        @property --y-2 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 7%
        }

        @property --s-start-2 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 4%
        }

        @property --s-end-2 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 52%
        }

        @property --s-start-3 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 13%
        }

        @property --s-end-3 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 58%
        }

        @property --x-3 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 99%
        }

        @property --c-3 {
            syntax: '<color>';
            inherits: false;
            initial-value: hsla(203, 58%, 75%, 1)
        }

        @property --y-3 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 17%
        }

        @property --c-4 {
            syntax: '<color>';
            inherits: false;
            initial-value: hsla(255, 76%, 48%, 1)
        }

        @property --s-start-4 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 12%
        }

        @property --s-end-4 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 84%
        }

        @property --y-4 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 6%
        }

        @property --x-4 {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 51%
        }

        body {
            --y-0: 61%;
            --c-0: hsla(1, 79%, 51%, 1);
            --x-0: 6%;
            --c-1: hsla(110, 66%, 74%, 1);
            --y-1: 96%;
            --x-1: 61%;
            --c-2: hsla(42, 95%, 48%, 1);
            --x-2: 8%;
            --y-2: 7%;
            --x-3: 99%;
            --c-3: hsla(203, 58%, 75%, 1);
            --y-3: 17%;
            --c-4: hsla(255, 76%, 48%, 1);
            --y-4: 6%;
            --x-4: 51%;
            ;
            background-image: url(requisitos-aeropuerto.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            color: white;
            text-align: center;
            margin-top: 1%;
            font-size: 50px;

        }

        form {

            background-color: zip_entry_open;
            max-width: 220px;
            margin: 0 auto;
            padding: 100px;
            border-radius: 20px;
            font-size: 25px;
            font-family: array_key_first;
            color: white;
        }

        label {
            display: block;
            margin-bottom: 20px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .styled-button {
  position: relative;
  padding: 1rem 2rem;
  font-size: 1.1rem;
  font-weight: bold;
  color: #ffffff;
  background: linear-gradient(to bottom, #171717, #242424);
  border-radius: 9999px;
  cursor: pointer;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 1), 0 10px 20px rgba(0, 0, 0, 0.4);
  transition: all 0.2s ease;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border: 1px solid #292929;
}

.styled-button::before {
  content: "";
  position: absolute;
  top: -2px;
  right: -1px;
  bottom: -1px;
  left: -1px;
  background: linear-gradient(to bottom, #292929, #000000);
  z-index: -1;
  border-radius: 9999px;
  transition: all 0.2s ease;
  opacity: 1;
}

.styled-button:active {
  transform: translateY(2px);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 1), 0 5px 10px rgba(0, 0, 0, 0.4);
}

.styled-button .inner-button {
  position: relative; /* Ensure relative positioning for pseudo-element */
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(to bottom, #171717, #242424);
  width: 40px;
  height: 40px;
  margin-left: 10px;
  border-radius: 50%;
  box-shadow: 0 0 1px rgba(0, 0, 0, 1);
  border: 1px solid #252525;
  transition: all 0.2s ease;
}

.styled-button .inner-button::before {
  content: "";
  position: absolute;
  top: -2px;
  right: -1px;
  bottom: -1px;
  left: -1px;
  background: linear-gradient(to bottom, #292929, #000000);
  z-index: -1;
  border-radius: 9999px;
  transition: all 0.2s ease;
  opacity: 1;
}
.styled-button .inner-button .icon {
  filter: drop-shadow(0 10px 20px rgba(26, 25, 25, 0.9))
    drop-shadow(0 0 4px rgba(0, 0, 0, 1));
  transition: all 0.4s ease-in-out;
}
.styled-button .inner-button .icon:hover {
  filter: drop-shadow(0 10px 20px rgba(50, 50, 50, 1))
    drop-shadow(0 0 20px rgba(2, 2, 2, 1));
  transform: rotate(-35deg);
}

    </style>
</head>

<body>
    <h2>Registro de usuario</h2>
    <br>
    <br>
    <form action="register.php" method="post">

        <br>
        <label for="username">Usuario:</label>
        <input type="text" name="username" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <button class="styled-button">
            registrarse
            <div class="inner-button">
                <svg
                    id="Arrow"
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                    height="30px"
                    width="30px"
                    class="icon">
                    <defs>
                        <linearGradient y2="100%" x2="100%" y1="0%" x1="0%" id="iconGradient">
                            <stop style="stop-color:#FFFFFF;stop-opacity:1" offset="0%"></stop>
                            <stop style="stop-color:#AAAAAA;stop-opacity:1" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path
                        fill="url(#iconGradient)"
                        d="M4 15a1 1 0 0 0 1 1h19.586l-4.292 4.292a1 1 0 0 0 1.414 1.414l6-6a.99.99 0 0 0 .292-.702V15c0-.13-.026-.26-.078-.382a.99.99 0 0 0-.216-.324l-6-6a1 1 0 0 0-1.414 1.414L24.586 14H5a1 1 0 0 0-1 1z"></path>
                </svg>
            </div>
        </button>



    </form>
</body>

</html>