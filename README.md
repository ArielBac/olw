<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://banners.beyondco.de/OLW.png?theme=light&packageManager=&packageName=by+Beer+%26+Code&pattern=brickWall&style=style_1&description=Sample+project+for+Open+Laravel+Week&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" width="650"></a></p>

## Descrição

Este projeto foi criado durante a 1ª semana OLW (Open Laravel Week), oferecida pelo canal <a href="https://www.youtube.com/c/BeerandCode" target="_blank">Beer and Code</a>. O projeto consiste em uma aplicação que filtra cervejas utilizando a API <a href="https://punkapi.com/" target="_blank">Punk API</a>.

## Tecnologias utilizadas

- Laravel
- Vue3
- InertiaJS
- TailwindCSS
- MySQL
- Redis
- GitHub Actions
- Docker
- Terraform
- Ansible
- AWS
  - VPC
  - EC2
  - S3
  - RDS
 
 ## Observações
 
 - Na etapa de integração da aplicação com a API, foi utilizada a funcionalidade de macro, no laravel, que possibilita uma forma bem limpa e organizada de fazer essa integração.
- Foi utilizada a funcionalidade de envio de e-mails do Laravel, e com isso, filas com Redis.
- O servidor para o deploy, na AWS, foi criado por meio do terraform, uma forma de criar toda a infraestrutura do servidor por meio de código (Infrastructure as code - IAC).
- Para configurar o servidor com tudo que é preciso para rodar o Laravel, foi utilizado o Ansible.
- Para tornar o deploy da aplicação automatizado, utilizou-se o GitHub Actions.
- <a href="https://github.com/ArielBac/olw-iac">Código terraform e ansible</a>.
- Para o deploy com GitHub Actions funcionar, deve-se configurar as variáveis secretas, no settings do repositório, de acordo com as credenciais da aplicação e do servidor.
