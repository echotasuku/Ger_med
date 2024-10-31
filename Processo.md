# Sistema de Gestão de Medicamentos

## Processo de Desenvolvimento

O processo adotado para o desenvolvimento do **Sistema de Gestão de Medicamentos** combina modelos iterativo e incremental, visando facilitar o controle e a melhoria contínua de funcionalidades críticas, como o cadastro e gerenciamento de medicamentos, fornecedores, categorias e estoque.

### Aspectos e Motivações para a Escolha do Processo

- **Complexidade e Escopo Progressivo**: O sistema de gestão de medicamentos exige funcionalidades fundamentais para controle de estoque e rastreabilidade de medicamentos, fornecedores e categorias. Com o modelo iterativo e incremental, é possível desenvolver essas funcionalidades de forma modular, adicionando recursos gradativamente. Isso permite a validação contínua junto aos stakeholders, possibilitando ajustes em cada ciclo conforme o sistema evolui.

- **Flexibilidade para Mudanças**: À medida que o sistema é usado, novas necessidades ou atualizações podem surgir. A abordagem iterativa facilita a adaptação dessas mudanças, pois cada iteração oferece a oportunidade de revisar e ajustar o escopo. O modelo incremental permite que novas funcionalidades sejam adicionadas de forma controlada, sem comprometer o sistema existente.

- **Redução de Riscos**: O desenvolvimento incremental minimiza riscos ao permitir que cada parte do sistema seja desenvolvida e testada isoladamente antes de sua integração. Esse processo facilita a identificação precoce de problemas e garante que correções sejam realizadas com eficiência. A abordagem iterativa fornece feedback constante de usuários e stakeholders, reduzindo a chance de erros ou mal-entendidos sobre os requisitos do sistema.

- **Entregas Parciais e Valor Contínuo**: Com o modelo iterativo e incremental, módulos podem ser entregues parcialmente, permitindo que os usuários comecem a se beneficiar do sistema mais cedo. Por exemplo, o cadastro e controle básico de medicamentos podem ser entregues inicialmente, enquanto módulos como notificações de validade e relatórios detalhados são desenvolvidos em iterações posteriores.

---

## Fluxo do Processo

### 1. Análise e Definição do Escopo
   - O dono do produto (responsável pelo projeto) analisa a necessidade de funcionalidades ou melhorias.
   - Verifica se o escopo definido cobre as funcionalidades solicitadas.
   - Caso necessário, refina o escopo ou elabora um relatório de inviabilidade caso a solicitação não seja viável.

### 2. Criação e Especificação de Tarefas
   - Para cada requisito identificado, o dono do produto cria tarefas no quadro Kanban, cada uma com o status inicial **Indefinida**.
   - Essas tarefas são associadas ao artefato de requisitos correspondente (como especificações para **Cadastro de Medicamentos**, **Gestão de Estoque**).
   - Cada tarefa inclui uma descrição detalhada e critérios de aceitação claros.

### 3. Planejamento e Priorização das Tarefas
   - Tarefas prontas para desenvolvimento recebem o status **Planejada**.
   - Defina o impacto da tarefa no sistema e a complexidade de implementação para priorizar.
   - Determine a iteração em que a tarefa será realizada e mova-a para o status **Pronta**.

### 4. Desenvolvimento e Codificação
   - O desenvolvedor (ou equipe responsável) escolhe uma tarefa com status **Planejada** e inicia o desenvolvimento, alterando o status para **Em Desenvolvimento**.
   - Durante o desenvolvimento:
     - Analise a tarefa e detalhe qualquer dúvida ou dificuldade encontrada.
     - Altere os artefatos de código necessários, garantindo que todas as mudanças estejam associadas à tarefa.
     - Se a implementação atender aos critérios definidos, o status da tarefa é atualizado para **Realizada**.

### 5. Revisão e Testes
   - Após o desenvolvimento, o testador (ou dono do produto) revisa a tarefa com status **Realizada**.
   - Avalia se o produto entregue atende aos critérios de aceitação.
   - Caso o critério de aceitação seja cumprido, a tarefa é concluída e arquivada.
   - Se o produto não atender aos critérios, a tarefa volta para o status **Planejada** para ajustes necessários.

### 6. Refinamento Contínuo
   - Em cada iteração, o processo é repetido, e o sistema é continuamente melhorado e adaptado às novas necessidades dos usuários.
   - Tarefas de ajustes ou aprimoramentos são adicionadas conforme feedback de stakeholders e necessidades operacionais.

