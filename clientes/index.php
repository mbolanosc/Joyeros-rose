<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario Clientes</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body background="http://joyerosrose.com/bundles/ezdemo/images/fondo.jpg">
<div class="page">
        
        <div class="navbar-wrapper">
            <div class="navbar-content">
                <div id="navbar-logo">
                    <a class="navbar-brand" href="http://joyerosrose.com/">
                        <img id="logo" alt="logo" src="http://joyerosrose.com/bundles/ezdemo/images/logo.png">
                    </a>
                </div>
            </div>
        </div>



        <div id="container">
            <div class="wrapper">
                <div class="content">
                    <div id="main-title">Clientes</div>
                    <div id="main-desc">
                        <p>
                            En Rose Joyeros Escazú queremos brindarle el mejor servicio y la mejor atención, complete el siguiente formulario y así podrá obtener información de promociones y descuentos de nuestra mercadería
                        </p>
                    </div>
                    <div class="main-picture">
                        <img id="main-picture" alt="anillo" class="img-responsive"  src="http://joyerosrose.com/var/ezdemo_site/storage/images/productos/anillos/anillos-de-compromiso/anillo-en-oro-blanco6/3329-1-esl-MX/Anillo-en-oro-blanco.jpg">
                    </div>
                    <div style="heigth:2em;"></div>
                    <div id="form-clientes">
                        <form method="post" action="sendemail.php" id="clients-form">
                            <div class="form-group">
                                <label for="name-input">Nombre</label>
                                <input type="text" class="form-control" id="name-input" placeholder="Nombre">
                            </div>

                            <div class="form-group">
                                <label for="email-input">Correo electrónico</label>
                                <input type="email" class="form-control" id="email-input" placeholder="Correo electrónico">
                            </div>

                            <div class="form-group">
                                <label for="addres-input">Lugar de residencia</label>
                                <input type="text" class="form-control" id="address-input" placeholder="Lugar de residencia">
                            </div>

                            <div class="form-group">
                                <label for="phonenum-input">Celular</label>
                                <input type="number" min="0" max="8" class="form-control" id="phonenum-input" placeholder="Celular">
                            </div>

                            <div class="form-group">
                                <label for="phonenum-input">Productos de interés</label>
                                <div class="checkbox">
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="productosDeInteres-Rolex" id="optionsRadios1" value="product-Rolex" checked>
                                        Rolex $6000 a $38000
                                      </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="productosDeInteres-Tudor" id="optionsRadios2" value="product-Tudor">
                                            Tudor $3000  a $5500
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-Charriol" id="optionsRadios3" value="product-Charriol" disabled>
                                            Charriol $2250 a $4000
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-AnillosCompromiso" id="optionsRadios4" value="product-AnillosCompromiso" disabled>
                                            Anillos compromiso $700 a $2200
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-Matrimonio" id="optionsRadios5" value="product-Matrimonio" disabled>
                                            Matrimonio $590 a $1200

                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-AnillosDama" id="optionsRadios6" value="product-AnillosDama" disabled>
                                            Anillos de dama $ 650 a $5000
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-AretesBebe" id="optionsRadios7" value="product-AretesBebe" disabled>
                                            Aretes  de bebé $64 a $298 
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-AretesDamaHuggies" id="optionsRadios8" value="product-AretesDamaHuggies" disabled>
                                            Aretes  de Dama Huggies $250 a $9900
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-Perlas" id="optionsRadios9" value="product-Perlas" disabled>
                                            Perlas $300 a $700  
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-Dijes" id="optionsRadios10" value="product-Dijes" disabled>
                                            Dijes $580 a $1300
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-Juegos" id="optionsRadios11" value="product-Juegos" disabled>
                                            Juegos $2300 a $7800
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-Collares" id="optionsRadios12" value="product-Collares" disabled>
                                            Collares $900 a$ 1800
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="productosDeInteres-Pulseras" id="optionsRadios13" value="product-Pulseras" disabled>
                                            Pulseras Aros  $350 a $ 8000
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="wrapper-footer">
            <div class="container">
                <div id="footer-center">
                    <h3>CONTÁCTENOS</h3>
                </div>
                <div id="footer-address">
                    <p>
                        <strong>Multiplaza Escazú 5º Etapa </strong> / Teléfono: <strong> 2201-5440</strong> /   Lunes a Sábado de 10:00 am a 9:00 pm Domingo 10:00 am 8:00 pm
                    </p>
                    <p>
                        Email: <a href="mailto:joyerose@racsa.co.cr" target="_self">joyerose@racsa.co.cr</a> &nbsp;/ Apartado: 598-1260 Escazú
                    </p>
                    <p>
                        Hosting &amp; Diseño 
                        <a href="http://lionix.com" target="_self" title="Lionix">Lionix Evolve</a>
                    </p>
                </div>
            </div>
            </div>
        </footer>
    </div><!-- hole page-->


</body>

</html>