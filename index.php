<?php
// PHP: Código executado NO SERVIDOR (antes de chegar ao navegador)
// Exemplo: capturar data/hora do servidor
$dataAtual = date('d/m/Y');
$horaAtual = date('H:i:s');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro Projeto - Aprendendo Web</title>
    
    <!-- CSS: Estiliza a aparência da página (cores, layout, fontes) -->
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            padding: 30px;
        }
        header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #4361ee;
            padding-bottom: 20px;
        }
        h1 {
            color: #1e293b;
            font-size: 2.5rem;
            margin: 15px 0;
        }
        .server-info {
            background: #eef7ff;
            border-left: 4px solid #4361ee;
            padding: 12px 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
            font-weight: bold;
        }
        .card {
            background: #f8fafc;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 4px solid #4cc9f0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .card.html { border-left-color: #e94560; }
        .card.css { border-left-color: #4895ef; }
        .card.js { border-left-color: #7209b7; }
        .card.php { border-left-color: #4361ee; }
        h2 {
            display: flex;
            align-items: center;
            margin: 15px 0;
            padding-bottom: 8px;
            border-bottom: 2px dashed #cbd5e1;
        }
        h2.html::before { content: "🧱"; margin-right: 10px; }
        h2.css::before { content: "🎨"; margin-right: 10px; }
        h2.js::before { content: "⚡"; margin-right: 10px; }
        h2.php::before { content: "⚙️"; margin-right: 10px; }
        ul { padding-left: 25px; margin: 15px 0; }
        li { margin: 8px 0; }
        .btn {
            background: #4361ee;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 8px;
            cursor: pointer;
            margin: 10px 0;
            transition: all 0.3s;
            font-weight: bold;
        }
        .btn:hover {
            background: #3a56d4;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
        }
        #mensagem-js {
            font-size: 1.3rem;
            font-weight: bold;
            margin-top: 15px;
            min-height: 30px;
            color: #e94560;
            transition: color 0.4s;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #f1f5f9;
            color: #64748b;
            font-style: italic;
        }
        code {
            background: #e2e8f0;
            padding: 2px 8px;
            border-radius: 4px;
            font-family: 'Courier New', monospace;
            color: #0f172a;
        }
        .highlight {
            background: #fff9db;
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>🚀 Meu Primeiro Projeto Web</h1>
            <p>Veja como HTML, CSS, JavaScript e PHP trabalham juntos!</p>
            
            <!-- PHP em ação: mostra dados do SERVIDOR -->
            <div class="server-info">
                🌐 Informação do servidor (PHP): Hoje é <?php echo $dataAtual; ?> às <?php echo $horaAtual; ?>
                <br><small>Atualize a página para ver a hora mudar! (Isso só é possível com PHP)</small>
            </div>
        </header>

        <!-- HTML: Estrutura básica do conteúdo -->
        <section class="card html">
            <h2 class="html">HTML - A Estrutura da Página</h2>
            <p><span class="highlight">HTML</span> (HyperText Markup Language) é o esqueleto da página. Define:</p>
            <ul>
                <li><code>&lt;h1&gt;</code>, <code>&lt;p&gt;</code>, <code>&lt;div&gt;</code> → Títulos, parágrafos, containers</li>
                <li><code>&lt;a href="..."&gt;</code> → Links (como <a href="https://www.w3schools.com" target="_blank">este exemplo</a>)</li>
                <li><code>&lt;button&gt;</code> → Botões clicáveis</li>
                <li><code>&lt;img src="..."&gt;</code> → Imagens (precisa de arquivo na pasta)</li>
                <li><strong>Tudo que você vê na página vem do HTML!</strong></li>
            </ul>
        </section>

        <!-- CSS: Estilização visual -->
        <section class="card css">
            <h2 class="css">CSS - A Beleza Visual</h2>
            <p><span class="highlight">CSS</span> (Cascading Style Sheets) define a aparência:</p>
            <ul>
                <li>Cores de fundo, texto e bordas</li>
                <li>Fontes, tamanhos e espaçamentos</li>
                <li>Layout responsivo (funciona em celular e computador)</li>
                <li>Efeitos como sombras, arredondamentos e animações</li>
                <li><strong>Neste exemplo, TODO o estilo está na tag &lt;style&gt; acima!</strong></li>
            </ul>
            <p>💡 Dica: Em projetos reais, o CSS fica em arquivo separado (<code>style.css</code>)</p>
        </section>

        <!-- JavaScript: Interação com o usuário -->
        <section class="card js">
            <h2 class="js">JavaScript - A Interação</h2>
            <p><span class="highlight">JavaScript</span> torna a página viva no navegador:</p>
            <ul>
                <li>Responde a cliques, digitação, movimento do mouse</li>
                <li>Altera conteúdo SEM recarregar a página</li>
                <li>Valida formulários antes de enviar</li>
                <li>Cria animações e efeitos dinâmicos</li>
            </ul>
            
            <button id="btnMagica" class="btn">✨ Clique para Magia JS!</button>
            <div id="mensagem-js">O JavaScript vai alterar este texto...</div>
        </section>

        <!-- PHP: Processamento no servidor -->
        <section class="card php">
            <h2 class="php">PHP - O "Cérebro" do Servidor</h2>
            <p><span class="highlight">PHP</span> roda NO SERVIDOR (XAMPP) antes da página chegar ao navegador:</p>
            <ul>
                <li>Processa dados de formulários</li>
                <li>Conecta-se a bancos de dados (MySQL)</li>
                <li>Gera conteúdo dinâmico (como a data/hora acima)</li>
                <li><strong>Nunca é visto pelo usuário</strong> (clique com botão direito > "Exibir código-fonte" para confirmar!)</li>
            </ul>
            <p>✅ Neste exemplo: PHP gerou a data/hora no topo da página</p>
            <p>❌ O código PHP <code>&lt;?php ... ?&gt;</code> NÃO aparece no navegador</p>
        </section>

        <div class="footer">
            <p>📚 Dica de estudo: Modifique este arquivo com cuidado! Salve e atualize o navegador (F5)</p>
            <p>➡️ Próximos passos: Crie uma pasta <code>css</code> com <code>style.css</code>, uma pasta <code>js</code> com <code>script.js</code></p>
            <p>💡 Lembre-se: HTML = Estrutura | CSS = Estilo | JS = Comportamento | PHP = Lógica do Servidor</p>
        </div>
    </div>

    <!-- JavaScript: Código executado NO NAVEGADOR (lado do cliente) -->
    <script>
        // Quando o botão for clicado...
        document.getElementById('btnMagica').addEventListener('click', function() {
            // Altera o texto do elemento com id "mensagem-js"
            document.getElementById('mensagem-js').textContent = "🎉 Sucesso! Você ativou o JavaScript!";
            
            // Muda a cor do texto
            document.getElementById('mensagem-js').style.color = "#06d6a0";
            
            // Adiciona um efeito de pulso
            const msg = document.getElementById('mensagem-js');
            msg.style.transform = "scale(1.05)";
            setTimeout(() => {
                msg.style.transform = "scale(1)";
            }, 300);
        });
        
        // Mini exemplo: Mostrar alerta ao carregar (comentado para não incomodar)
        // window.onload = function() {
        //     alert("Página carregada! JavaScript está funcionando perfeitamente.");
        // };
    </script>
</body>
</html>