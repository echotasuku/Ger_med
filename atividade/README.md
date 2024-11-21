# Planejamento do Sistema de Gestão de Medicamentos

## 1. Contexto do Projeto (Escopo)

### Descrição do Produto
O sistema de gestão de medicamentos visa melhorar o controle e a organização de estoque de medicamentos em Unidades Básicas de Saúde (UBS). O principal problema a ser resolvido é a falta de um controle eficiente para garantir a rastreabilidade de medicamentos, gestão de estoque, validade dos produtos e documentação de retiradas baseadas em receitas.

### Escopo
- **Incluso**:
  - **Cadastro de Medicamentos**: Registro com nome, descrição, quantidade, validade, categoria e fornecedor.
  - **Controle de Estoque**: Monitoramento da quantidade disponível e alertas para medicamentos próximos da validade ou com estoque baixo.
  - **Registro de Retiradas**: Rastreabilidade de medicamentos com base em receitas médicas.

- **Não Incluso**:
  - Funcionalidades mais avançadas de integração com outros sistemas de saúde.
  - Relatórios personalizados de saúde pública.
  - **Sistema para geração de arquivos PDF de receitas médicas**.

### Público-Alvo
O sistema é destinado a farmacêuticos e funcionários administrativos de UBS, oferecendo funcionalidades e permissões específicas de acordo com suas responsabilidades.

### Cenário de Validação
Para validar esta entrega, será demonstrado o funcionamento dos módulos de **CRUD para Categorias e Fornecedores**:
- **Categorias**: Permitirão a classificação dos medicamentos de forma organizada, separando-os por tipo, uso ou outros critérios relevantes. Essa funcionalidade facilita a organização do estoque e a localização de medicamentos em consultas ou retiradas.
- **Fornecedores**: Permitirão gerenciar informações detalhadas dos parceiros que fornecem medicamentos e insumos, registrando dados de contato, histórico de fornecimento e reputação.

---

## 2. Definição do Processo e Ciclo de Vida do Desenvolvimento

### Escolha e Justificativa do Modelo de Desenvolvimento
O modelo escolhido será o **Iterativo Incremental**. Essa escolha foi feita com base nos seguintes fatores:
- Permitir a entrega de incrementos funcionais ao longo do desenvolvimento, garantindo que o sistema possa ser testado e validado continuamente.
- Facilitar a adaptação a mudanças de requisitos, já que cada incremento é avaliado e ajustado antes do próximo.
- Reduzir riscos, abordando partes menores e mais gerenciáveis do sistema em cada iteração.
- Garantir que cada entrega agregue valor incremental ao sistema e ao usuário final.

### Etapas e Atividades
1. **Planejamento**:
   - Definir requisitos principais e funcionalidades essenciais do sistema.
   - Planejar o backlog de tarefas no GitHub Projects.
2. **Desenvolvimento**:
   - Implementar CRUDs de Categorias e Fornecedores.
   - Configurar o banco de dados e integrar ferramentas de gerenciamento de dependências (Composer) e controle de versão (Git).
3. **Teste**:
   - Realizar testes unitários e manuais para validar os CRUDs.
4. **Entrega**:
   - Apresentar uma versão funcional para feedback e validação.

---

## Papéis e Responsabilidades

| **Quem (Papel)**          | **Com o quê (Artefato de Entrada)** | **Faz o quê (Atividade)**                          | **Para quê (Artefato de Saída)**                 |
|----------------------------|-------------------------------------|---------------------------------------------------|-------------------------------------------------|
| **Desenvolvedor**          | Requisitos e backlog               | Implementa os CRUDs de Categorias e Fornecedores  | Código-fonte funcional                          |
| **Tester**                 | Funcionalidades desenvolvidas      | Realiza testes unitários e manuais                | Relatórios de testes                            |
| **Gerente de Projeto**     | Documentação de requisitos         | Organiza tarefas no Kanban e monitora o progresso | Kanban atualizado e entregas organizadas        |

---

## Artefatos de Entrada e Saída

- **Planejamento de Backlog**: Documento inicial com as funcionalidades principais e backlog de tarefas.
- **Documentação de Requisitos**: Lista detalhada das funcionalidades definidas com base nas necessidades dos usuários.
- **Protótipo Funcional**: CRUDs implementados como artefato de saída do processo de desenvolvimento.
- **Documentação de Testes**: Casos de teste com resultados esperados e obtidos.

---

## 3. Gestão de Mudanças e Evolução do Projeto

### Abordagem para Controle de Mudanças
- **Ferramenta de Controle de Versão**: O Git será utilizado para rastrear alterações no código, com branches específicas para funcionalidades.
- **Planejamento e Monitoramento**: O GitHub Projects será usado para organizar tarefas em quadros Kanban com colunas "A Fazer", "Em Andamento" e "Concluído".
- **Registro de Decisões**: Todas as alterações e decisões serão documentadas no repositório (README ou Wiki), garantindo rastreabilidade e justificativa para mudanças realizadas.

---

## 4. Prova de Conceito

### Configuração de Dependências e Controle de Versão
- **Composer**: Usado para gerenciar dependências do Laravel.
- **Git**: Configurado com commits regulares para rastrear alterações no código.

### Desenvolvimento dos CRUDs
- Implementação dos CRUDs de **Categorias** e **Fornecedores**.
- Cada operação (`Create`, `Read`, `Update`, `Delete`) será realizada por meio de rotas específicas no Laravel.

### Fluxo Básico da Prova de Conceito
1. Criar, listar, atualizar e excluir categorias, permitindo a organização eficiente de medicamentos.
2. Registrar, consultar e atualizar informações de fornecedores, garantindo rastreabilidade e controle.

