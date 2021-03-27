<p align="center">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/rscodexx/devsbook">

  <a href="https://github.com/rscode/devsbook/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/rscodexx/devsbook">
  </a>

   <img alt="License" src="https://img.shields.io/badge/license-MIT-brightgreen">
   <a href="https://github.com/rscodexx/devsbook/stargazers">
    <img alt="Stargazers" src="https://img.shields.io/github/stars/rscodexx/rscodexx?style=social">
  </a>

  <a href="https://rscode.com.br">
    <img alt="Feito por RS CODE" src="https://img.shields.io/badge/feito%20por-RS CODE-%237519C1">
  </a>

  <a href="https://blog.rscode.com.br/">
    <img alt="Stargazers" src="https://img.shields.io/badge/Blog-RS CODE-%237159c1?style=flat&logo=ghost">
    </a>


</p>
<h1 align="center">
    DevsNotes
</h1>

<h4 align="center"> 
	🚧  RS CMS em Construção 🚧
</h4>

[comment]: <> (<p align="center">)

[comment]: <> ( <a href="#-sobre-o-projeto">Sobre</a> •)

[comment]: <> ( <a href="#-funcionalidades">Funcionalidades</a> •)

[comment]: <> ( <a href="#-layout">Layout</a> • )

[comment]: <> ( <a href="#-como-executar-o-projeto">Como executar</a> • )

[comment]: <> ( <a href="#-tecnologias">Tecnologias</a> •)

[comment]: <> ( <a href="#-autor">Autor</a> • )

[comment]: <> ( <a href="#user-content--licença">Licença</a>)

[comment]: <> (</p>)

[comment]: <> (## 💻 Sobre o projeto)

[comment]: <> (Devsnote - É uma API de integração feita com framework laravel onde o usuário pode ter blocos de anotações, feito apenas para fins de estudo.)

[comment]: <> (---)

[comment]: <> (## ⚙️ Funcionalidades)

[comment]: <> (- [x] Usuários podem:)

[comment]: <> (    - [x] Verificar suas anotações.)

[comment]: <> (    - [x] Verificar uma anotação específica.)

[comment]: <> (    - [x] Enviar uma anotação.)

[comment]: <> (    - [x] Editar uma anotação.)

[comment]: <> (    - [x] Excluir uma anotação.)

[comment]: <> (---)

[comment]: <> (## ⚙ Como executar o projeto)

[comment]: <> (### Pré-requisitos)

[comment]: <> (Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:)

[comment]: <> ([Git]&#40;https://git-scm.com&#41;, [Composer]&#40;https://getcomposer.org/&#41;.)

[comment]: <> (Além disto é bom ter um editor para trabalhar com o código como [VSCode]&#40;https://code.visualstudio.com/&#41;)

[comment]: <> (#### 🎲 Instalando)

[comment]: <> (```bash)

[comment]: <> (# Você pode clonar este repositório OU baixar o .zip.)

[comment]: <> ($link para baixar direto: https://github.com/rscodexx/devsnotes)

[comment]: <> (# Para clonar:)

[comment]: <> ($ git clone https://github.com/rscodexx/devsnotes.git)

[comment]: <> (# Ao descompactar, é necessário rodar o composer pra instalar as dependências e gerar o autoload.)

[comment]: <> (# Vá até a pasta do projeto, pelo prompt/terminal e execute:)

[comment]: <> ($ composer install)

[comment]: <> (# Depois é só aguardar.)

[comment]: <> (```)

[comment]: <> (#### 🎲 Configurando)

[comment]: <> (```bash)

[comment]: <> (# Abra o arquivo .env na pasta raiz do projeto e altere para os dados do seu banco:)

[comment]: <> (DB_CONNECTION=mysql)

[comment]: <> (DB_HOST=127.0.0.1)

[comment]: <> (DB_PORT=3306)

[comment]: <> (DB_DATABASE=devsnotes)

[comment]: <> (DB_USERNAME=root)

[comment]: <> (DB_PASSWORD=root ⚙)

[comment]: <> (# É necessário importar as tabelas no seu banco de dados que estão na pasta db.)

[comment]: <> (```)

[comment]: <> (#### 🎲 Retornando todas as anotações.)

[comment]: <> (```bash)

[comment]: <> (# Exemplo:)

[comment]: <> ($ Parâmetros = Nenhum.)

[comment]: <> ($ Método = GET)

[comment]: <> ($ <url>/api/notes)

[comment]: <> (```)

[comment]: <> (![Resultado]&#40;https://raw.githubusercontent.com/rscodexx/devsnotes/master/examples/result1.png&#41;)

[comment]: <> (#### 🎲 Retornando uma anotação específica.)

[comment]: <> (```bash)

[comment]: <> (# Exemplo:)

[comment]: <> ($ Parâmetros = {id})

[comment]: <> ($ Método = GET)

[comment]: <> ($ <url>/api/notes/{id})

[comment]: <> (```)

[comment]: <> (![Resultado]&#40;https://raw.githubusercontent.com/rscodexx/devsnotes/master/examples/result2.png&#41;)

[comment]: <> (#### 🎲 Enviando uma anotação.)

[comment]: <> (```bash)

[comment]: <> (# Exemplo:)

[comment]: <> ($ Parâmetros = {title}, {body})

[comment]: <> ($ Método = POST)

[comment]: <> ($ <url>/api/note?title={$title}&body={$body})

[comment]: <> (```)

[comment]: <> (![Resultado]&#40;https://raw.githubusercontent.com/rscodexx/devsnotes/master/examples/result2.png&#41;)

[comment]: <> (#### 🎲 Editando uma anotação.)

[comment]: <> (```bash)

[comment]: <> (# Exemplo:)

[comment]: <> ($ Parâmetros = {id}, {title}, {body})

[comment]: <> ($ Método = PUT)

[comment]: <> ($ <url>/api/note?title={$title}&body={$body})

[comment]: <> (```)

[comment]: <> (![Resultado]&#40;https://raw.githubusercontent.com/rscodexx/devsnotes/master/examples/result3.png&#41;)

[comment]: <> (#### 🎲 Excluindo uma anotação.)

[comment]: <> (```bash)

[comment]: <> (# Exemplo:)

[comment]: <> ($ Parâmetros = {id})

[comment]: <> ($ Método = DELETE)

[comment]: <> ($ <url>/api/note/{id})

[comment]: <> (```)

[comment]: <> (---)

[comment]: <> (## 🛠 Tecnologias)

[comment]: <> (As seguintes ferramentas foram usadas na construção do projeto:)

[comment]: <> (#### **Back-End**)

[comment]: <> (<img alt="PHP" src="https://img.shields.io/badge/php-%23777BB4.svg?&style=for-the-badge&logo=php&logoColor=white"/> <img alt="Laravel" src="https://img.shields.io/badge/laravel%20-%23FF2D20.svg?&style=for-the-badge&logo=laravel&logoColor=white"/>)


[comment]: <> (---)

[comment]: <> (## 💪 Como contribuir para o projeto)

[comment]: <> (1. Faça um **fork** do projeto.)

[comment]: <> (2. Crie uma nova branch com as suas alterações: `git checkout -b my-feature`)

[comment]: <> (3. Salve as alterações e crie uma mensagem de commit contando o que você fez: `git commit -m "feature: My new feature"`)

[comment]: <> (4. Envie as suas alterações: `git push origin my-feature`)

[comment]: <> (> Caso tenha alguma dúvida confira este [guia de como contribuir no GitHub]&#40;./CONTRIBUTING.md&#41;)

[comment]: <> (---)

## 🦸 Autor

<a href="https://rscode.com.br">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/80411629?s=460&u=b013fbff0e47f42e5f2c819849416285d380d5e7&v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Rafael Santos</b></sub></a> <a href="https://rscode.com.br/"</a>
 <br />

[![Twitter Badge](https://img.shields.io/badge/-@raffrenan-1ca0f1?style=flat-square&labelColor=1ca0f1&logo=twitter&logoColor=white&link=https://twitter.com/tgmarinho)](https://twitter.com/raffrenan) [![Linkedin Badge](https://img.shields.io/badge/-Raffrenan-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/tgmarinho/)](https://www.linkedin.com/in/raffrenan/)
[![Gmail Badge](https://img.shields.io/badge/-raffrenan@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:raffrenan@gmail.com)](mailto:raffrenan@gmail.com)

---

## 📝 Licença

Este projeto esta sobe a licença [MIT](./LICENSE).

Feito com ❤️ por Rafael Santos 👋🏽 [Entre em contato!](https://www.rscode.com.br)

---
