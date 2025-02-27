# Controle de Mudanças

O controle de mudanças é um processo estruturado para gerenciar modificações no código-fonte de um projeto, garantindo estabilidade, rastreabilidade e qualidade. Neste fluxo, todas as alterações são realizadas diretamente na branch `main` e em um fork do repositório principal, sem a utilização de branches secundárias para desenvolvimento.

## Fluxo de Mudanças

### Desenvolvimento Direto na `main`
- Todas as alterações e implementações são feitas diretamente na branch `main`.
- Cada modificação deve ter um commit claro e descritivo.

### Uso de Forks para Modificações
- Um fork do repositório principal é utilizado para realizar alterações e testar novas funcionalidades sem impactar diretamente o código original.
- As modificações feitas no fork podem ser enviadas para o repositório principal por meio de Pull Requests.
- O código enviado deve ser revisado antes da aprovação e merge no repositório principal.

### Correções de Erros
- Caso um erro seja identificado, ele será corrigido diretamente na `main` ou no fork.
- Se necessário, pode-se restaurar um commit anterior para manter a estabilidade do projeto.
- Após a correção, as alterações são novamente commitadas e enviadas para o repositório principal.

## Fluxo de Trabalho

1. Modificações são feitas diretamente na `main` ou no fork.
2. Testes são realizados no próprio actions para garantir a funcionalidade do código.
3. Commits descritivos são realizados na `main`.
4. Caso esteja usando um fork, as alterações são enviadas para o repositório principal via Pull Request.
5. O código é revisado e, se aprovado, é mergeado no repositório principal.
6. Se houver erros críticos, realiza-se um rollback para um commit estável anterior.

## Considerações Finais
Esse modelo de controle de mudanças simplifica o desenvolvimento ao evitar múltiplas branches, mas exige um rigor maior na validação e testes. O uso de forks permite um ambiente seguro para experimentação sem comprometer a estabilidade do projeto principal.

### Diagrama de Fluxo:
![Blank diagram](https://github.com/user-attachments/assets/e4fcd843-45b5-4978-a2bd-7da4c603b6ff)
