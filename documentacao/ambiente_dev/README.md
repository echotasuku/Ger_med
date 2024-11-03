### 3. Configuração do Ambiente de Desenvolvimento (Automação de Tarefas + Laravel/PHP)

Para o **Sistema de Gestão de Medicamentos** em Laravel, utilizamos **GitHub Actions** como ferramenta de automação para gerenciar o ciclo de vida do projeto. Essa ferramenta permite configurar processos de forma padronizada, automatizando tarefas essenciais para o desenvolvimento e manutenção do sistema.

#### Principais Funções e Vantagens

1. **Automação de Tarefas**: 
   - **GitHub Actions** permite automatizar tarefas repetitivas, como testes e verificação de código, para garantir a qualidade e consistência do sistema.
   - Exemplo de Tarefas Automatizadas:
     - Rodar testes (unitários e de integração) com `php artisan test`.
     - Configurar o ambiente de teste, incluindo migrações e geração de chaves.

2. **Gerenciamento de Dependências**:
   - Laravel utiliza o **Composer** como gerenciador de dependências para instalar e manter bibliotecas e pacotes externos de forma centralizada.
   - A cada execução do pipeline, o Composer instala as dependências conforme especificadas no arquivo `composer.json`, garantindo que todos os pacotes necessários estejam atualizados e padronizados.

3. **Controle do Ciclo de Vida do Projeto**:
   - Com **GitHub Actions**, o ciclo de vida do projeto pode ser gerido em diferentes etapas automatizadas, como:
     - **Build**: Instalação das dependências via Composer.
     - **Teste**: Execução de testes para validar a funcionalidade e integridade do sistema.
     - **Deploy**: (Opcional) Possibilidade de configurar etapas de deploy automático para ambientes de produção ou staging.
   - Cada etapa é executada automaticamente em resposta a ações, como push ou pull requests, assegurando que o projeto passe por uma verificação rigorosa a cada mudança.

4. **Configuração de Perfis de Ambiente**:
   - **GitHub Actions** facilita a configuração de variáveis de ambiente para cada perfil (desenvolvimento, teste, produção), usando arquivos `.env` e variáveis secretas.
   - Exemplo:
     - Durante os testes, o ambiente de banco de dados pode ser configurado para usar um banco em memória (SQLite) para garantir rapidez e independência do ambiente de produção.
   - Essas configurações permitem adaptar automaticamente o ambiente para cada contexto, garantindo que o projeto funcione corretamente em desenvolvimento, teste e produção.

