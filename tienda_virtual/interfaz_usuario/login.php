<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>FinSist</title>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Tienda Virtual</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icon" alt="">
            </label>

            <nav class="navbar">
                <ul>
                    <li><a href="emprendimiento.php">Productos</a></li>
                    
                    <li><a href="">Servicio al cliente</a></li>
                    <li><a href="dashboard.php">perfil</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <h1>Emprende ya</h1>
            <p>
                Iniciar un negocio no cuesta nada. Solo necesitas entusiasmo y, con FinSist, es aún más sencillo.
                Si tienes preguntas, también puedes contar con el apoyo de nuestro equipo de asesores,
                quienes te orientarán en el camino correcto.
            </p>
            <a href="#" class="btn-1">Information</a>
        </div>
    </header>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label for="email-login">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="contrasena" name="contrasena" required>
                    <label for="contrasena-login">Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Dont´ have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="registro_usuario.php" method="POST" autocomplete="off">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="username" name="username" required>
                    <label for="username-register">Nombre De Usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label for="email-register">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="contrasena" name="contrasena" required>
                    <label for="contrasena-register">Contraseña</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" list="cargos" id="cargo" name="cargo" required>
                    <label for="cargo=register">type of user</label>
                    <datalist id="cargos">
                        <option value="Emprendedor"></option>
                        <option value="Accionista"></option>
                    </datalist>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> agree to the terms & conditions</label>
                </div>
                <button action="prueba,html" type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <section class="coffee">

        <div class="coffee-content container">
            <h2>Servicios</h2>
            <p class="txt-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsum aperiam cum illo numquam amet reiciendis vero nesciunt dolorum iusto est corporis,
                ratione fugit repellendus debitis eius aliquid fugiat veritatis quasi.
            </p>

            <div class="coffee-group">

                <div class="coffee-1">
                    <img src="media/gc1.png" alt="">
                    <h3>Producto</h3>
                    <p>
                        Nos enorgullecemos de ofrecer productos de alta calidad, con materiales duraderos y un diseño que 
                        supera expectativas, garantizando tu satisfacción y confianza en cada compra.
                    </p>
                </div>

                <div class="coffee-1">
                    <img src="media/gc2.png" alt="">
                    <h3>Seguro</h3>
                    <p>
                        En nuestra tienda virtual, no solo te ofrecemos productos de la más alta calidad, con materiales duraderos y un 
                        diseño que supera tus expectativas, sino que también garantizamos un entorno de compra seguro y confiable.
                    </p>
                </div>

                <div class="coffee-1">
                    <img src="media/gc3.png" alt="">
                    <h3>Costo</h3>
                    <p>
                        En nuestra tienda virtual, te ofrecemos productos de alta calidad a precios bajos, garantizando que puedas 
                        disfrutar de lo mejor sin comprometer tu presupuesto. Además, brindamos una experiencia segura.
                        
                    </p>
                </div>
            </div>
            <a href="#" class="btn-1">Information</a>
        </div>
    </section>

    <main class="servicies">
        <div class="servicies-content container">

            <div class="servicies-group">

                <div class="servicies-1">
                    <img src="media/moneda_amarilla.webp" alt="">
                    <h3>servicie </h3>
                </div>

                <div class="servicies-1">
                    <img src="media/moneda_amarilla.webp" alt="">
                    <h3>servicie </h3>
                </div>

                <div class="servicies-1">
                    <img src="media/moneda_amarilla.webp" alt="">
                    <h3>servicie </h3>
                </div>
            </div>
            <p>
                Encuentra productos de alta calidad a precios bajos, con la comodidad de comprar desde casa y la seguridad 
                de una transacción confiable
            </p>
        </div>
    </main>

    <section class="general">

        <div class="general-1">
            <h2>Variedad de Productos</h2>
            <p>
                Explora una amplia variedad de productos de alta calidad a precios bajos, con opciones para todos los gustos. 
                Disfruta de la comodidad de comprar desde casa y la seguridad de una experiencia confiable en cada transacción
            </p>
        </div>

        <div class="general-2"></div>
    </section>

    <section class="general">

        <div class="general-3"></div>

        <div class="general-1">
            <h2>Requisitos Legales</h2>
            <p>
                Los comercios electrónicos deben cumplir tanto la normativa de protección de datos como la de consumidores.
                Si estás pensando en lanzar un negocio en la red, deberías saber cuáles son los requisitos mínimos
                necesarios para hacerlo conforme a la ley.
            </p>
        </div>
    </section>

    <section class="blog container">
        <h2>Blog</h2>
        <p></p>

        <div class="blog-content">

            <div class="blog-1">
                <img src="media/blg1.png" alt="">
                <h3>Guías de Compra</h3>
                <p>
                    En nuestra tienda, entendemos que elegir el producto adecuado puede ser complicado. Por eso, hemos creado 
                    guías de compra detalladas para ayudarte a tomar decisiones informadas. Desde cómo seleccionar el producto perfecto 
                </p>
            </div>

            <div class="blog-1">
                <img src="media/blg2.jpg" alt="">
                <h3>Novedades</h3>
                <p>
                    Siempre estamos innovando y buscando ofrecer lo mejor a nuestros clientes. En el blog, te mantendremos 
                    informado sobre nuevos lanzamientos de productos, promociones especiales y descuentos exclusivos
                </p>
            </div>

            <div class="blog-1">
                <img src="media/tips.svg" alt="">
                <h3>Consejos y Trucos</h3>
                <p>
                    Queremos que saques el máximo provecho de tus compras. Por eso, en nuestro blog encontrarás consejos prácticos y 
                    trucos para utilizar al máximo los productos que compras con nosotros.
                </p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <h3>titulo</h3>
                <ul class="ul_footer">
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>titulo</h3>
                <ul class="ul_footer">
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>titulo</h3>
                <ul class="ul_footer">
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
