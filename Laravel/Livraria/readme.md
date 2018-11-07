# Livraria

## Instalação

### Copir os arquivos de configuraçao de exemplo
```
$ cp .env.example .env
$ cp docker-compose.yml.example docker-compose.yml
```

### Subir os containers
```
$ docker-compose up -d
```

### Configurar alias
Abra o ~/.bashrc e acrescente a linha abaixo
```
alias livraria='docker exec -it livraria-app'
```
> não se esqueça de abrir uma nova janela de terminal

### Instalar as dependências
```
$ livraria composer install
$ livraria php artisan key:generate
```

### Rodar migrations
```
$ livraria php artisan migrate
```