Projeto site de notícas


Estrutura do projeto: 

projetoNoticias/       # Diretório base do servidor 
│── app/               # Diretório base da aplicação
│   ├── Controllers/   
│   │   ├── User/      # Controle de requisição do usuário
│   |   |── Admin/     # Controle de requisição do admin
│   ├── Models/        
│   │   ├── User/      # Comunicação do admin com o banco
│   │   ├── Admin/     # Comunicação do cliente com o banco
│   ├── Views/         
│   │   ├── User/      # Vizão do cliente
│   │   ├── Admin/     # Vizão do admin
│── public/            # Pasta acessada pelo usuário
│   ├── assets/        # CSS, JS, imagens
│   ├── index.php      # Entrada principal do site
│── uploads/           # Upload de arquivos
│── Config/
│   |── dbConfig.php   # Configuração do banco de dados
│   │── routes.php     # Definição das rotas    
│── Docs/              # Documentação    
│   │── README.md      # Documento README.md
│   ├── estrutura.pdf  # Explicação da estrutura  
│   ├── index.html     # Versão HTML da documentação       

