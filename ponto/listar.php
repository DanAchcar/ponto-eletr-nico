<?php
header('Content-Type: application/json; charset=utf-8');
require_once 'conexao.php';

try {
    $stmt = $pdo->query("SELECT * FROM registro_ponto ORDER BY data_hora DESC");
    $registros = $stmt->fetchAll();

    echo json_encode([
        'success' => true,
        'data' => $registros
    ]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Erro ao buscar registros: ' . $e->getMessage()]);
}
?>
