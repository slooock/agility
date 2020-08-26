<h1 align="center">
    <img alt="Agility" src="images/agility-networks-logo.png" height="100px" />
    <br>Processo Agility<br/>
    PHP | Laravel | HTML | CSS
</h1>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre

Desenvolvido usando PHP e Laravel, esta aplicação tem como objetivo fazer algumas requisições e tratar os dados retornados no formato JSON, além de mostrar na tela para que o usuário realize pesquisas filtrando os dados obtidos.

Também foi desenvolvida o UX da aplicação pelo Figma, que pode ser acessado neste link: [Design Figma](https://www.figma.com/file/sVlFtVHyWKhfKxRCpOLkBL/Agility?node-id=0%3A1)

<p align="center">
  <img alt="design do projeto" width="650px" src="images/layout.png" />
<p>

## Como executar a aplicação?
git clone https://github.com/slooock/agility.git

cd agility

composer install

php artisan serve

### OBS
Ao executar a aplicação o usuário terá duas opções GET ou POST, como pedido na especificação. Também foi inserido campos em um formulário para que os usuarios sejam filtrados, é importante lembrar que os campos devem ser preenchidos exatamente como devem ser buscados por exemplo: Ao buscar um usuário que seja da Id Comunicação, a busca não pode ser feita passando apenas Comunicação ou apenas Id, deverá ser colocado Id Comunicação desta maneira todos os usuários que possuem este customer serão retornados na lista.

**Os usuários da Agility foram destacados usando o card rosa enquanto os demais estão com card verde**.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
