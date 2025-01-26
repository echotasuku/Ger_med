<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Sistema de Gestão de Medicamentos

## Uma Breve Descrição do Contexto / Problema

Uma unidade de saúde, enfrentando desafios na gestão de medicamentos, solicitou à nossa equipe o desenvolvimento de uma solução para simplificar e aprimorar o controle de estoque de medicamentos. O objetivo é garantir que a unidade de saúde mantenha um estoque organizado e bem gerenciado, minimizando desperdícios e assegurando a conformidade com as regulamentações sanitárias. A plataforma busca tornar o processo de controle de estoque mais ágil e confiável, facilitando a tomada de decisões com base em dados claros e atualizados.

Após discussões com os envolvidos, identificamos requisitos fundamentais para projetar um sistema que permita registrar, monitorar e organizar medicamentos de forma prática e eficiente. O sistema armazenará informações detalhadas sobre cada medicamento, como nome, descrição, quantidade em estoque, data de validade e condições de armazenamento, além de organizar os medicamentos em categorias específicas para facilitar a busca.

Outro ponto importante é que o sistema permitirá o gerenciamento de fornecedores e registrará a distribuição de medicamentos com base na apresentação de receitas médicas. Com isso, o sistema manterá um controle completo de retiradas, garantindo rastreabilidade e documentando cada movimentação com segurança.

## Iteração-I: Prova de Conceito - Controle de Estoque

### Estado Atual do Sistema

Atualmente, o sistema possui os seguintes elementos implementados:

- **CRUD de Categorias**: Permite criar, ler, atualizar e excluir categorias, para organizar os medicamentos de acordo com seus tipos, como "Antibióticos", "Analgésicos", etc. Esse módulo facilita a classificação dos medicamentos e torna o processo de busca mais rápido.
- **CRUD de Fornecedores**: Permite o registro e controle de informações dos fornecedores, incluindo nome, contato e de onde eles vem. Isso assegura que cada medicamento possa ter um fornecedor documentado, facilitando o rastreamento e a reposição de estoque quando necessário.

Esses dois CRUDs foram escolhidos para a prova de conceito porque eles representam a base organizacional do sistema. Ter o controle de categorias e fornecedores bem estabelecido é essencial para uma futura expansão, onde o cadastro de medicamentos poderá ser associado a categorias específicas e fornecedores confiáveis.


>>>>>>> 099c22158850f35f235fe9f9bc6ca7bd133629c3
