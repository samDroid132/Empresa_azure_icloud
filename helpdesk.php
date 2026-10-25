<?php 
include('header.php'); 
include('conexion.php');
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Formulario de Tickets -->
            <div class="card card-custom p-4 mb-5">
                <h3 class="mb-3 text-primary"><i class="bi bi-headset"></i> Portal de Soporte HelpDesk - iLarriTech</h3>
                <p class="text-muted">Reporta cualquier avería de hardware, incidencia de red o consulta con nuestros técnicos.</p>

                <form action="helpdesk.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nombre del Cliente / Usuario</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ej. Katheryne Claure" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Tipo de Incidencia</label>
                        <select name="categoria" class="form-select" required>
                            <option value="Hardware">Fallo de Hardware / Componentes</option>
                            <option value="Redes">Problemas de Red / Wi-Fi</option>
                            <option value="Software">Software / Sistema Operativo</option>
                            <option value="Consultoria">Consultoría IT / Tienda</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Descripción detallada de la avería</label>
                        <textarea name="descripcion" class="form-control" rows="4" placeholder="Describe el problema con detalle..." required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Adjuntar captura o foto del error</label>
                        <input type="file" name="captura" class="form-control" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold py-2">Enviar Ticket a iLarriTech Cloud</button>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nombre = htmlspecialchars($_POST['nombre']);
                    $categoria = htmlspecialchars($_POST['categoria']);
                    $descripcion = htmlspecialchars($_POST['descripcion']);
                    $nombreArchivo = "";
                    $mensajeEstado = "";
                    $alertaClase = "alert-success";

                    // Gestión de subida de archivos adjuntos
                    if (isset($_FILES['captura']) && $_FILES['captura']['error'] === UPLOAD_ERR_OK) {
                        $fileTmpPath = $_FILES['captura']['tmp_name'];
                        $nombreArchivo = uniqid() . '_' . basename($_FILES['captura']['name']);
                        $uploadFileDir = './uploads/';
                        if (!is_dir($uploadFileDir)) {
                            mkdir($uploadFileDir, 0755, true);
                        }
                        move_uploaded_file($fileTmpPath, $uploadFileDir . $nombreArchivo);
                    }

                    // Inserción en base de datos
                    if ($conn) {
                        try {
                            $stmt = $conn->prepare("INSERT INTO tickets (nombre, categoria, descripcion, archivo_adjunto) VALUES (:nombre, :categoria, :descripcion, :archivo)");
                            $stmt->execute([
                                'nombre' => $nombre,
                                'categoria' => $categoria,
                                'descripcion' => $descripcion,
                                'archivo' => $nombreArchivo
                            ]);
                            $mensajeEstado = "¡Ticket registrado con éxito en iLarriTech Cloud!";
                        } catch (Exception $e) {
                            $alertaClase = "alert-warning";
                            $mensajeEstado = "Archivo guardado, pero error al registrar en base de datos.";
                        }
                    } else {
                        $mensajeEstado = "¡Ticket y archivo guardados correctamente en el servidor!";
                    }

                    echo "<div class='alert {$alertaClase} mt-4 shadow-sm'>
                            <strong>{$mensajeEstado}</strong><br>
                            <strong>Usuario:</strong> {$nombre} | <strong>Categoría:</strong> {$categoria}
                          </div>";
                }
                ?>
            </div>

            <!-- Historial de Tickets Recientes -->
            <div class="card card-custom p-4">
                <h4 class="mb-3 text-secondary"><i class="bi bi-clock-history"></i> Historial de Tickets en iLarriTech</h4>
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Categoría</th>
                                <th>Descripción</th>
                                <th>Archivo</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($conn) {
                                try {
                                    $stmt = $conn->query("SELECT * FROM tickets ORDER BY id DESC LIMIT 5");
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<tr>
                                                <td>{$row['id']}</td>
                                                <td>{$row['nombre']}</td>
                                                <td><span class='badge bg-primary'>{$row['categoria']}</span></td>
                                                <td>" . substr($row['descripcion'], 0, 40) . "...</td>
                                                <td>" . ($row['archivo_adjunto'] ? "<a href='uploads/{$row['archivo_adjunto']}' target='_blank' class='btn btn-sm btn-outline-primary'>Ver</a>" : "Ninguno") . "</td>
                                                <td>{$row['fecha_creacion']}</td>
                                              </tr>";
                                    }
                                } catch (Exception $e) {
                                    echo "<tr><td colspan='6' class='text-center text-muted'>No se pudieron cargar los tickets.</td></tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6' class='text-center text-muted'>Base de datos no conectada.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <div class="container">
        <p class="mb-0">&copy; 2026 iLarriTech Cloud Services. Todos los derechos reservados.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>