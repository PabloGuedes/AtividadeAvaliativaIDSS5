Passo a passo para configurar e rodar a aplicação usando Docker

1º passo: Clonar o Repositório

Para começar, você precisará clonar o repositório do projeto para o seu computador. Isso fará uma cópia do projeto para que você possa executá-lo localmente.

• Abra o Terminal ou Prompt de Comando
No Windows: Pressione Win + R, digite cmd e pressione Enter.
No macOS ou Linux: Abra o aplicativo Terminal.

• Clone o Repositório
No terminal ou prompt de comando, digite o seguinte comando: 

git clone https://github.com/PabloGuedes/AtividadeAvaliativaIDSS5.git

e em seguida pressione Enter. Isso fará o download de uma cópia do repositório do GitHub para o seu computador.

2º passo: Navegar para o Diretório do Projeto

Depois de clonar o repositório, você precisa ir para o diretório onde o projeto foi baixado. No terminal ou prompt de comando, digite:

cd AtividadeAvaliativaIDSS5

3º passo: Construir e Iniciar os Containers Docker

• Execute o Comando para Construir e Iniciar os Containers
No terminal ou prompt de comando, execute o seguinte comando: docker-compose up --build -d

4º passo: Acessar a Aplicação
	
Depois que o comando anterior for executado, os containers estarão rodando e sua aplicação estará disponível.

• Acesse a Aplicação Web
- Aplicação Principal: Abra um navegador da web e vá para http://localhost:8080. Aqui você verá a interface da sua aplicação.
- phpMyAdmin (Gerenciador de Banco de Dados): Abra um navegador e vá para http://localhost:8081. Você pode usar esta interface para gerenciar seu banco de dados MySQL.

5º passo: Parar e Remover os Containers

Quando você terminar de usar a aplicação, pode parar e remover os containers com o comando: docker-compose down

Com este guia, facilmente é configurado e executado a aplicação.
