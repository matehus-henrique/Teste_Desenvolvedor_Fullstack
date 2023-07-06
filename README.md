## Teste Desenvolvedor Fullstack (PHP)

Um sistema de gerenciamento de produtos construído com Laravel.

### Funcionalidades

- Exibir todos os produtos
- Criar um novo produto
- Editar um produto existente
- Exibir os detalhes de um produto
- Excluir um produto

### Requisitos

- PHP >= 7.2
- Composer
- Laravel >= 8

### Instalação

1. Clone o repositório: `git clone https://github.com/matehus-henrique/Teste_Desenvolvedor_Fullstack.git`
2. Navegue até o diretório do projeto: `cd nome-do-repositorio`
3. Instale as dependências do Composer: `composer install`
4. Crie um arquivo de ambiente: `cp .env.example .env`
5. Configure as variáveis de ambiente no arquivo `.env`
6. Gere a chave de criptografia do Laravel: `php artisan key:generate`
7. Execute as migrações do banco de dados: `php artisan migrate`
8. Inicie o servidor de desenvolvimento: `php artisan serve`
9. Acesse o sistema no seu navegador em: `http://localhost:8000`

### Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir um pull request ou relatar problemas.

### Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
