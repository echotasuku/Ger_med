# Sistema de gerenciamento de estoque de medicamentos

## 1. Contexto do Projeto (Escopo)

### Descrição do Produto
O sistema de gestão de medicamentos visa melhorar o controle e a organização de estoque de medicamentos em Unidades Básicas de Saúde (UBS). O principal problema a ser resolvido é a falta de um controle eficiente para garantir a rastreabilidade de medicamentos, gestão de estoque, validade dos produtos e documentação de retiradas baseadas em receitas.

### Escopo
O sistema permitirá:
- **Cadastro de Medicamentos**: Registro com nome, descrição, quantidade, validade, categoria e fornecedor.
- **Controle de Estoque**: Controle da quantidade disponível e alertas para medicamentos próximos da validade ou com baixo estoque.
- **Registro de Retiradas**: Rastreabilidade de medicamentos com base em receitas médicas.

**Não Incluso**  
Funcionalidades mais avançadas, como integração com outros sistemas de saúde e relatórios personalizados de saúde pública, não estarão incluídas nesta fase do projeto.

### Público-Alvo
O sistema é destinado a farmacêuticos e funcionários administrativos de UBS, que terão acesso a diferentes funcionalidades e permissões.

### Cenário de Validação
Para validar esta entrega, será demonstrado o funcionamento dos módulos de **CRUD para Categorias e Fornecedores**. Estes módulos fornecem a base necessária para a gestão de medicamentos, facilitando a criação de um inventário inicial e garantindo consultas rápidas e precisas.

- **Categorias**: Permite classificar medicamentos de forma organizada, separando-os por tipo, uso ou critérios relevantes. Isso ajuda o farmacêutico a organizar o estoque de forma prática e eficiente, além de facilitar a localização de medicamentos específicos.
- **Fornecedores**: Permite gerenciar informações detalhadas sobre os parceiros que abastecem a farmácia, incluindo dados de contato e histórico de fornecimento.

---

## 2. Definição do Processo e Ciclo de Vida do Desenvolvimento

### Escolha e Justificativa do Modelo de Desenvolvimento
O modelo escolhido será o **Ágil**, utilizando metodologias como o Scrum, com iterações curtas que permitem feedback constante e adaptações rápidas. Esse modelo é adequado devido à necessidade de flexibilidade e entregas incrementais que agreguem valor ao usuário.

### Etapas e Atividades
1. **Planejamento**:
   - Definir os requisitos principais e funcionalidades essenciais do sistema.
   - Planejar o backlog de tarefas no GitHub Projects.
2. **Desenvolvimento**:
   - Implementar CRUDs de Categorias e Fornecedores.
   - Configurar o banco de dados e integrar ferramentas de gerenciamento de dependências (Composer) e controle de versão (Git).
3. **Teste**:
   - Realizar testes unitários para validar os CRUDs.
4. **Entrega**:
   - Apresentar uma versão funcional para feedback e validação.

### Papéis e Responsabilidades
- **Desenvolvedor**:
  - Implementar os CRUDs e configurar o backend.
  - Realizar testes e documentar funcionalidades.
- **Tester**:
  - Definir e executar casos de teste para os CRUDs.
  - Garantir a cobertura básica dos testes.
- **Gerente de Projeto**:
  - Organizar tarefas no GitHub Projects.
  - Revisar o progresso e garantir alinhamento com os objetivos.

### Artefatos de Entrada e Saída
- **Planejamento de Backlog**: Documento inicial com as funcionalidades principais e backlog.
- **Documentação de Requisitos**: Lista das funcionalidades definidas com base nas necessidades dos usuários.
- **Protótipo Funcional**: CRUDs implementados, sendo o artefato de saída do processo de desenvolvimento.
- **Documentação de Testes**: Casos de teste com resultados esperados e obtidos.

---

## 3. Gestão de Mudanças e Evolução do Projeto

**Abordagem para Controle de Mudanças**  
- O controle de versão será realizado no **Git**, com branches específicas para cada funcionalidade e commits regulares.
- Para o gerenciamento de mudanças e acompanhamento do progresso, será utilizado o **GitHub Projects**. As tarefas serão organizadas em quadros Kanban, com colunas para tarefas a fazer, em andamento e concluídas.
- O histórico de decisões será documentado no repositório (README ou Wiki), garantindo rastreabilidade.

---

## 4. Prova de Conceito

### Configuração de Dependências e Controle de Versão
- **Composer**: Será usado para gerenciar as dependências do Laravel.
- **Git**: Configuração com commits regulares para rastrear mudanças no código.

### Desenvolvimento dos CRUDs
- Implementação dos **CRUDs de Categorias e Fornecedores**.
- Cada operação (`Create`, `Read`, `Update`, `Delete`) será realizada por meio de rotas específicas no Laravel.

### Fluxo Básico da Prova de Conceito
1. Criar, listar, atualizar e excluir categorias, permitindo a organização de medicamentos.
2. Registrar, consultar e atualizar informações de fornecedores, garantindo rastreabilidade e controle.

