-Aplicação sistema executando em Docker
-Sistema desenvolvido como forma de aplicar conhecimentos adiquiridos e aplicando em docker.

![image](https://github.com/user-attachments/assets/32468658-a5d5-4fc1-acae-9c69b3bafd40)

Sistema simples com paginas (Login/Produtos/Usuários)
  - O sistema conta com a uma restrição ah usuários criados, onde para acesso como teste podem utilizar o usuário admin e senha 12345678

Ao acessar a área restrita você encontra uma dashboard com a quantidade de produtos e usuários cadastrados.
![image](https://github.com/user-attachments/assets/b1480001-9c54-40bd-8529-e34b70e0fc94)

Todos os usuários cadastrados tem acesso a plataforma.

![image](https://github.com/user-attachments/assets/c02003e8-edda-4313-aab7-c8d5a4076976)

Sistema sendo executado com docker.
Para rodar o projeto em sua máquina siga os passos a seguir:
  -Ter docker e docker-compose instalado em sua estação de execução.
  -Baixar o projeto no git ou realizar o download .zip
  -Extrair o projeto em sua pasta de execução
  -Após a extração abrir seu terminal e executar os comandos a seguir. **(OBS: Todo comando tem que ser executado no terminal onde a pasta tem que ser o local onde o projeto foi extraido)**
    - docker compose build
    - docker compose up -d
    - docker ps -a
    - docker exec -i banco_sistema_teste mysql -uroot -p12345678 < ./mysql/db.sql
    - Acesse atraves de seu navegador a aplicação.

**OBS IMPORTANTE**
Para que seu projeto execute a hierarquia dos arquivos extraidos devem estar conforme abaixo.
![image](https://github.com/user-attachments/assets/48296276-0ad5-4e7e-b635-9bfeb7470caf)

