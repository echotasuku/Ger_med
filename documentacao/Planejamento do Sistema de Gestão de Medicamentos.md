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

Para organizar o desenvolvimento e acompanhar as alterações no sistema, utilizaremos:

1. **Git para Controle de Versão**:
   - Todas as alterações serão versionadas com commits regulares, organizados em branches específicas para cada funcionalidade. Isso permitirá rastrear o que foi feito e manter o histórico do projeto.

2. **GitHub Projects para Planejamento**:
   - As tarefas serão organizadas em um quadro Kanban simples, com colunas como "A Fazer", "Em Andamento" e "Concluído". Isso ajudará no acompanhamento do progresso e na priorização das entregas.

3. **Documentação Simples**:
   - Decisões e alterações importantes serão registradas no repositório (README), para que a equipe tenha clareza sobre o que foi implementado e o que ainda precisa ser feito.

Essas práticas garantem que o desenvolvimento seja organizado e que o sistema evolua de maneira controlada.

---

## Prova de Conceito

Nesta etapa inicial, focaremos na implementação de funcionalidades básicas, essenciais para validar o funcionamento do sistema. Serão desenvolvidos dois CRUDs:

1. **CRUD de Categorias**:
   - Permite criar, listar, atualizar e excluir categorias de medicamentos. Isso é fundamental para organizar o estoque e facilitar a localização de medicamentos.

2. **CRUD de Fornecedores**:
   - Permite registrar e consultar informações básicas dos fornecedores, como nome e contato. Essa funcionalidade assegura o controle dos parceiros responsáveis pelo fornecimento dos medicamentos.


### Validação
A prova de conceito será considerada bem-sucedida se:
- As operações de criação, leitura, atualização e exclusão em ambos os módulos funcionarem corretamente.
- O sistema apresentar organização e clareza, com as tabelas funcionando de maneira integrada ao banco de dados.


