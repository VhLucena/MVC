# Projeto 

### Objetivo
O objetivo do atual projeto é criar um framework MVC utililando a linguagem PHP.<br>
Em cada pasta, você encontrará um README.md descrevendo a função daquele diretório.

### Model
Representa qualquer tipo de dados que o seu aplicativo pode usar.<br>
Exemplo: Banco de Dados, XML, etc.<br><br>
O model se preocupa com a manipulação dos dados. <br>
Todas as regras de negócio são geridas no model e ele é responsável por permitir que uma informação seja visível para um usuário ou não.

### View
A view é responsável por formatar as informações recebidas e apresentar o resultado (HTML) ao visitante do site.<br>
A view é totalmente desacoplada do model, ficando longe da regra de negócio. 

### Controller
Serve como um intermédio entre a camada de dados (model) e apresentação (view). <br>
**Sempre que acessamos uma URL, estamos acessando um método de um Controller**
Para cada View, existe um Controller específico.


### Composer
O Composer tem o objetivo de carregar as dependências do projeto

```
Para usar o Composer, basta digitar php composer.phar install
```