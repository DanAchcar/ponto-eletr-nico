# Sistema de Ponto Eletrônico PHP + MySQL

Este é um sistema completo e pronto para ser executado no **XAMPP**.

## 🚀 Como instalar no XAMPP:

1. **Extraia o arquivo ZIP:**
   - Copie a pasta `ponto` contida neste arquivo ZIP para o diretório `htdocs` do seu XAMPP.
   - Caminho completo típico: `C:\xampp\htdocs\ponto`

2. **Iniciar o XAMPP:**
   - Abra o **XAMPP Control Panel**.
   - Inicie os serviços **Apache** e **MySQL**.

3. **Importar o Banco de Dados:**
   - Abra o navegador e acesse: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Clique na aba **SQL** na parte superior.
   - Abra o arquivo `database.sql` incluído nesta pasta, copie todo o conteúdo e cole na caixa de texto do phpMyAdmin, depois clique em **Executar** (Go).
   - *Alternativamente:* Crie um banco chamado `ponto_eletronico` e importe o arquivo `database.sql`.

4. **Acessar a Aplicação:**
   - Abra seu navegador e digite: [http://localhost/ponto](http://localhost/ponto)

## 📁 Estrutura dos Arquivos:
- `index.html` - Interface principal responsiva (Bootstrap 5 + JavaScript).
- `conexao.php` - Conexão PDO com o banco de dados MySQL.
- `registrar.php` - Endpoint de inserção de registros de ponto.
- `listar.php` - Endpoint de consulta dos registros salvos.
- `database.sql` - Script SQL para criação do banco de dados e tabela.
- `README.txt` - Instruções de instalação.
