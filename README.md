# Sistema de Gestão de Medicamentos

## Uma Breve Descrição do Contexto / Problema

Uma unidade de saúde, enfrentando desafios na gestão de medicamentos, solicitou à nossa equipe (eu) o desenvolvimento de uma solução para simplificar e aprimorar o controle de estoque de medicamentos. O objetivo é garantir que a unidade de saúde mantenha um estoque organizado e bem gerenciado, minimizando desperdícios e assegurando a conformidade com as regulamentações sanitárias. A plataforma busca tornar o processo de controle de estoque mais ágil e confiável, facilitando a tomada de decisões com base em dados claros e atualizados.

Após discussões com os envolvidos, identificamos requisitos fundamentais para projetar um sistema que permita registrar, monitorar e organizar medicamentos de forma prática e eficiente. O sistema armazenará informações detalhadas sobre cada medicamento, como nome, descrição, quantidade em estoque, data de validade e condições de armazenamento, além de organizar os medicamentos em categorias específicas para facilitar a busca.

Outro ponto importante é que o sistema permitirá o gerenciamento de fornecedores e registrará a distribuição de medicamentos com base na apresentação de receitas médicas. Com isso, o sistema manterá um controle completo de retiradas, garantindo rastreabilidade e documentando cada movimentação com segurança.

## Iteração-I: Prova de Conceito - Controle de Estoque

### Estado Atual do Sistema

Atualmente, o sistema possui os seguintes elementos implementados:

- **CRUD de Categorias**: Permite criar, ler, atualizar e excluir categorias, para organizar os medicamentos de acordo com seus tipos, como "Antibióticos", "Analgésicos", etc. Esse módulo facilita a classificação dos medicamentos e torna o processo de busca mais rápido.
- **CRUD de Fornecedores**: Permite o registro e controle de informações dos fornecedores, incluindo nome, contato e produtos fornecidos. Isso assegura que cada medicamento possa ter um fornecedor documentado, facilitando o rastreamento e a reposição de estoque quando necessário.

Esses dois CRUDs foram escolhidos para a prova de conceito porque eles representam a base organizacional do sistema. Ter o controle de categorias e fornecedores bem estabelecido é essencial para uma futura expansão, onde o cadastro de medicamentos poderá ser associado a categorias específicas e fornecedores confiáveis.


