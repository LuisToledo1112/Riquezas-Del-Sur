
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riqueza del Sur - Compra de Paquetes</title>
    <link rel="stylesheet" href="vista/css/styleCompra.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .oculto {
            display: none;
        }
        .info-adicional {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <a type="button" class="btn" href="./?i=index">Página Principal</a>
        <h1>Riqueza del Sur - Rutas</h1>
    </header>
    <main>
        <section class="paquetes">
            <!-- Paquete 1 -->
            <div class="paquete">
                <h2>Tuxtla Gutierrez - Chiapa de Corzo</h2>
                <p>Conoce las Maravillas y paisajes</p>
                <p><strong>Precio: $5,000 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <p>Incluye:</p>
                    <ul>
                        <li>Hospedaje</li>
                        <li>Trasporte</li>
                        <li>Recorrido</li>
                        <li>Comidas</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Chiapas Maravilloso', 5000)">Comprar ahora</button>
                </div>
            </div>
            
            <div class="paquete">
                <h2>Tuxtla Gutierrez - San Cristobal</h2>
                <p>Vive ese clima agradable</p>
                <p><strong>Precio: $6,500 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <p>Incluye:</p>
                    <ul>
                        <li>Hospedaje</li>
                        <li>Trasporte</li>
                        <li>Comidas</li>
                        <li>Recorrido</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Aventura en Selva Lacandona', 6500)">Comprar ahora</button>
                </div>
            </div>

            <div class="paquete">
                <h2>Tuxtla Gutierrez -  Cascadas de Agua Azul</h2>
                <p>Emosionate con la Naturaleza</p>
                <p><strong>Precio: $4,200 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <p>Incluye:</p>
                    <ul>
                        <li>Hospedaje</li>
                        <li>Trasporte</li>
                        <li>Comidas</li>
                        <li>Recorrido</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Mágico San Cristóbal', 4200)">Comprar ahora</button>
                </div>
            </div>

            <div class="paquete">
                <h2>Tuxtla Gutierrez - Palenque</h2>
                <p>Indaga por las reliquias del pais</p>
                <p><strong>Precio: $4,200 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <p>Incluye:</p>
                    <ul>
                        <li>Hospedaje</li>
                        <li>Trasporte</li>
                        <li>Comidas</li>
                        <li>Recorrido</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Mágico San Cristóbal', 4200)">Comprar ahora</button>
                </div>
            </div>

            <div class="paquete">
                <h2>Palenque - Chiapa de Corzo</h2>
                <p>Las grutas mas hermosas chiapas</p>
                <p><strong>Precio: $4,200 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <p>Incluye:</p>
                    <ul>
                        <li>Hospedaje</li>
                        <li>Trasporte</li>
                        <li>Comidas</li>
                        <li>Recorrido</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Mágico San Cristóbal', 4200)">Comprar ahora</button>
                </div>
            </div>
            
            <div class="paquete">
                <h2>Cascadas de Agua Azul - San Cristobal</h2>
                <p>Ve por los secretos de chiapas</p>
                <p><strong>Precio: $4,200 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <p>Incluye:</p>
                    <ul>
                        <li>Hospedaje</li>
                        <li>Trasporte</li>
                        <li>Comidas</li>
                        <li>Recorrido</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Mágico San Cristóbal', 4200)">Comprar ahora</button>
                </div>
            </div>


    </main>
    
        <!-- Formulario de pago -->
        <div id="formulario-pago" class="oculto">
            <h3>Formulario de Pago</h3>
            <form action="/procesar_pago" method="POST">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="paquete">Paquete Seleccionado:</label>
                <input type="text" id="paquete" name="paquete" readonly>

                <label for="cant_pers">Cantidad de Personas:</label>
                <input type="number" id="cant_pers" name="Personas" min="1" required>

                <label for="fecha-reservacion">Fecha de Reservación:</label>
                <input type="date" id="fecha-reservacion" name="fecha-reservacion" required>

                <label for="hora-reservacion">Hora de Reservación:</label>
                <select id="hora-reservacion" name="hora-reservacion" required>
                    <option value="09:00">09:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="12:00">12:00 PM</option>
                    <option value="13:00">01:00 PM</option>
                    <option value="14:00">02:00 PM</option>
                    <option value="15:00">03:00 PM</option>
                    <option value="16:00">04:00 PM</option>
                    <option value="17:00">05:00 PM</option>
                </select>

                <label for="precio">Precio Total:</label>
                <input type="text" id="precio" name="Precio" readonly>

                <label for="metodo-pago">Método de Pago:</label>
                <select id="metodo-pago" name="metodo-pago" required>
                    <option value="tarjeta-credito">Tarjeta de Crédito</option>
                    <option value="tarjeta-debito">Tarjeta de Débito</option>
                    <option value="deposito">Depósito Bancario</option>
                    <option value="transferencia">Transferencia Bancaria</option>
                </select>

                <div id="info-tarjeta" class="oculto">
                    <label for="numero-tarjeta">Número de Tarjeta:</label>
                    <input type="text" id="numero-tarjeta" name="numero-tarjeta" maxlength="16">
                    <label for="fecha-expiracion">Fecha de Expiración:</label>
                    <input type="month" id="fecha-expiracion" name="fecha-expiracion">
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" maxlength="3">
                </div>

                <div id="info-banco" class="oculto">
                    <p>Para realizar el depósito o transferencia, utilice la siguiente cuenta bancaria:</p>
                    <p><strong>Banco:</strong> Banco Ficticio</p>
                    <p><strong>Número de Cuenta:</strong> 4153 7895 7878 4959</p>
                    <p><strong>CLABE:</strong> 000123456789012345</p>
                </div>

                <button type="submit">Confirmar Compra</button>
            </form>
        </div>
    </main>

    <script>
        let precioPaqueteSeleccionado = 0;

        function toggleInfo(button) {
            const infoAdicional = button.nextElementSibling;
            if (infoAdicional.classList.contains("oculto")) {
                infoAdicional.classList.remove("oculto");
                button.textContent = "Menos información";
            } else {
                infoAdicional.classList.add("oculto");
                button.textContent = "Más información";
            }
        }

        function mostrarFormularioPago(paquete, precio) {
            document.getElementById("formulario-pago").classList.remove("oculto");
            document.getElementById("paquete").value = paquete;
            precioPaqueteSeleccionado = precio;
        }

        document.getElementById("cant_pers").addEventListener("input", function() {
            const cantidadPersonas = parseInt(this.value) || 0;
            const precioTotal = precioPaqueteSeleccionado * cantidadPersonas;
            document.getElementById("precio").value = `$${precioTotal.toFixed(2)}`;
        });

        document.getElementById("metodo-pago").addEventListener("change", function() {
            const infoTarjeta = document.getElementById("info-tarjeta");
            const infoBanco = document.getElementById("info-banco");

            if (this.value === "tarjeta-credito" || this.value === "tarjeta-debito") {
                infoTarjeta.classList.remove("oculto");
                infoBanco.classList.add("oculto");
            } else if (this.value === "deposito" || this.value === "transferencia") {
                infoTarjeta.classList.add("oculto");
                infoBanco.classList.remove("oculto");
            }
        });
    </script>
    <script>
        // Captura los botones "Comprar ahora"
        document.querySelectorAll('.boton-alerta').forEach((boton, index) => {
            boton.addEventListener('click', () => {
                const paquete = document.querySelectorAll('.paquete')[index];
                const titulo = paquete.querySelector('h2').innerText;
                const descripcion = paquete.querySelector('p').innerText;
                const precio = paquete.querySelector('strong').innerText;

                // Enviar datos al servidor
                fetch('./guardarCompra.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ titulo, descripcion, precio })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire('Compra realizada', 'Tu compra fue exitosa', 'success');
                        window.location.href = './confirmacion.php?compraID=' + data.compraID;
                    } else {
                        Swal.fire('Error', 'Hubo un problema al procesar la compra', 'error');
                    }
                });
            });
        });
    </script>
</body>
</html>
