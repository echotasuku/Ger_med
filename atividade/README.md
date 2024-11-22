# Planejamento do Sistema de Gestão de Medicamentos

# Contexto do Projeto (Escopo)

## Descrição do Produto
O sistema de gestão de medicamentos tem como objetivo principal melhorar o controle e a organização do estoque de medicamentos em Unidades Básicas de Saúde (UBS). Ele resolve problemas relacionados à rastreabilidade de medicamentos, controle de validade, gestão de fornecedores e registro de retiradas de medicamentos com base em receitas médicas.

## Escopo do Sistema

### O que será desenvolvido:
1. **Cadastro de Medicamentos**:
   - Registro de medicamentos com informações como nome, descrição, validade, categoria e fornecedor associado.
2. **Cadastro de Categorias**:
   - Classificação de medicamentos por tipo, uso ou outros critérios relevantes, permitindo organização prática e consultas rápidas.
3. **Cadastro de Fornecedores**:
   - Registro detalhado de fornecedores, incluindo informações de contato e histórico de fornecimento.
4. **Controle de Estoque**:
   - Monitoramento da validade dos medicamentos e alertas para produtos próximos ao vencimento.
5. **Registro de Retiradas**:
   - Documentação de retiradas de medicamentos, garantindo rastreabilidade com base em receitas médicas.

### O que não será desenvolvido:
1. Funcionalidades avançadas, como:
   - Integração com sistemas externos de saúde.
   - Geração de relatórios personalizados.
   - Integração com um software que gere pdf
     

## Relevância
O sistema foi projetado para atender às necessidades de farmacêuticos e funcionários administrativos de UBS, promovendo:
- Melhor organização do estoque.
- Redução de desperdícios com medicamentos vencidos.
- Rastreabilidade confiável para auditorias ou controle interno.
- Facilidade na gestão de informações de fornecedores e medicamentos.
  

## Cenário de Validação
A validação desta entrega será feita por meio dos módulos de **CRUD para Categorias, Fornecedores e Medicamentos**:
- **Categorias**: Garantirão a organização dos medicamentos, separando-os por critérios específicos e facilitando sua localização.
- **Fornecedores**: Permitirão o registro e consulta de informações sobre parceiros responsáveis pelo fornecimento dos medicamentos.
- **Medicamentos**: Possibilitarão o cadastro básico de medicamentos com detalhes como nome, descrição, validade, categoria e fornecedor associado.

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
| **Gerente de Projeto**     | Documentação de requisitos         | Organiza tarefas no Kanban e monitora o progresso | Kanban atualizado e entregas organizadas        |
| **Desenvolvedor**          | Requisitos e backlog               | Implementa os CRUDs de Categorias e Fornecedores  | Código-fonte funcional                          |
| **Tester**                 | Funcionalidades desenvolvidas      | Realiza testes unitários e manuais                | Relatórios de testes                            |


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

