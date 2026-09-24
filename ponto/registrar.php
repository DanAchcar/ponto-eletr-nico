<?php
header('Content-Type: application/json; charset=utf-8');
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['funcionario_nome'] ?? 'Funcionário');
    $tipo = trim($_POST['tipo'] ?? '');
    $observacao = trim($_POST['observacao'] ?? '');

    $tiposPermitidos = ['entrada', 'intervalo_inicio', 'intervalo_fim', 'saida'];

    if (!in_array($tipo, $tiposPermitidos)) {
        echo json_encode(['success' => false, 'message' => 'Tipo de registro inválido.']);
        exit;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO registro_ponto (funcionario_nome, tipo, data_hora, observacao) VALUES (:nome, :tipo, NOW(), :obs)");
        $stmt->execute([
            ':nome' => $nome,
            ':tipo' => $tipo,
            ':obs'  => $observacao
        ]);

        echo json_encode([
            'success' => true,
            'message' => 'Ponto registrado com sucesso!',
            'hora' => date('H:i:s'),
            'data' => date('d/m/Y')
        ]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar no banco: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método inválido.']);
}
?>
