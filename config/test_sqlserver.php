<?php
try {
    // Conexión a SQL Server
    $conn = new PDO("sqlsrv:Server=ELIEZER;Database=CompraVenta", "sa", "12345678");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ Conexión exitosa a SQL Server<br>";

    // Consulta de prueba
    $sql = "SELECT TOP 5 * FROM TM_CLIENTE";
    $stmt = $conn->query($sql);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($resultados);
    echo "</pre>";

} catch (PDOException $e) {
    echo "❌ Error en la conexión o consulta: " . $e->getMessage();
}
?>
