# WordPress Skeleton

![WordPress Skeleton](screenshot.png)

## Tabela de Conteúdo

- <a href="#informa%C3%A7%C3%B5es">Informações</a>
    - <a href="#depend%C3%AAncias">Dependências</a>
    - <a href="#bibliotecas">Bibliotecas</a>
    - <a href="#plugins">Plugins</a>
    - <a href="#requisitos-servidor">Requisitos Servidor</a>
- <a href="instala%C3%A7%C3%A3o">Instalação</a>
   - <a href="#instala%C3%A7%C3%A3o-manual">Instalação Manual</a>
   - <a href="#deploy">Deploy</a>
   - <a href="#cron-job">Cron Job</a>
- <a href="#desenvolvimento">Desenvolvimento</a>
    - <a href="#pr%C3%A9-requisitos">Pré requisitos</a>
- <a href="#equipe">Equipe</a>

## Informações

WordPress Skeleton é o projeto base para site que utilizam o CMS Wordpress como gerenciador de conteúdo.

| Informações |  |
| ------ | ----- |
| Endereço Produção | http://example.com |
| Endereço Homologação | http://example-h.com |
| Data de Lançamento | 00/00/0000 |
| Versão Atual | v1.0.0 |
| Última release | 00/00/0000 |

### Dependências

#### Bibliotecas

Lista componentes de terceiros utilizados no projeto

| Componente | Versão | Site | Documentação |
| ------ | ------ | ------ | ----- |
| Nome do componente | v1.0 | http://example.com | http://example.com/docs |

#### Plugins

Lista de Plugins Utilizados no projeto

| Plugin | Site |
| ------ | ------ | ----- |
| Nome do Plugin | http://example.com |

#### Requisitos Servidor

| Requisito | Versão | Link |
| ------ | ------ | ----- |
| PHP | >= 5.4 | http://www.php.net |
| Composer | * | https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx |

## Instalação

### Instalação Manual

1. Clonar o repositório git - `git clone --recursive git@gitlab.geq.com.br:webgeq-components/skeleton-wordpress.git`
2. Execute `composer install`
3. Copie `.env.example` para `.env` e atualize as variáveis de ambiente:
  * `DB_NAME` - Nome do banco de dados
  * `DB_USER` - Usuário do banco de dados
  * `DB_PASSWORD` - Senha do usuário do banco de dados
  * `DB_HOST` - Host do banco
  * `WP_ENV` - Defina ao ambiente (`development`, `staging`, `production`)
  * `WP_HOME` - URL completa do site (http://example.com)
  * `WP_SITEURL` - URL completa do site subdiretório do Wordpress (http://example.com/wordpress)
4. Adicionar tema(s) em `public/app/themes` como você faria para um site normal de WordPress.
4. Defina o seu local raiz do documento para vhost `/path/to/site/public/` (`/path/to/site/current/public/` se estiver usando deployer)
5. Acesse o WP Admin em `http://example.com/wordpress/wp-admin`

### Deploy

1. Instale o (deployer)[http://deployer.org/] e sua máquina.
2. Certifique-que os dados dos servidores estão configurados no arquivo `config/servers.yml`

    A estrutura do arquivo de configuração deve ser preenchida de acordo com o exemplo abaixo:

    ```yml
    [NOME_DO_SERVIDOR]:
      host: [HOST_DO_SERVIDOR]
      user: [USUARIO_DE_ACESSO_AO_SERVIDOR]
      identity_file: [DIRETORIO_BASE_PARA_CHAVE_SSH]
      stage: [TIPO_DO_SERVIDOR (`development`, `staging`, `production`)]
      branch: [BRANCH_PARA_O_CHECKOUT]
      deploy_path: [DIRETORIO_RAIZ_DO_SITE_NO_SERVIDOR]
    ```

    Exemplo:

    ```yml
    producao:
      host: 127.0.0.1
      user: root
      identity_file: ~
      stage: production
      branch: master
      deploy_path: /home/www/meusite.com.br/
    homologacao:
      host: 127.0.0.1
      user: root
      identity_file: ~
      stage: staging
      deploy_path: /home/www/meusite.com.br
    ```
3. Certifique-que a sua máquina ou a máquina de onde irá executar o comando tem acesso aos servidores autenticado por chave ssh.
4. Execute o comando de deploy
    * Para executar o deploy em produção use: `deployer deploy production --tag=[NOME_DA_TAG]`
    * Para executar o deploy em homoloçacão use: `deployer deploy staging` (nesse caso a tag é opcional)

### Cron Job

Descreva aqui os processo que devem rodar frequentemente e que serão configurados no cronjob do Servidor.

## Desenvolvimento

### Pré requisitos

| Componente | Descrição | Link |
| ------ | ------ | ----- |
| [EditorConfig](http://editorconfig.org/) | Para ajudar a manter o estilo de codificação consistente entre diferentes IDEs. Usamos o [EditorConfig](http://editorconfig.org/) para definir os estilos decodificação. Baixe o plugin [EditorConfig](http://editorconfig.org/) para a sua IDE antes de iniciar o desenvolvimento. | http://editorconfig.org/ |

## Equipe

| Nome | Função | Email |
| ------ | ------ | ----- |
| Nome | Desenvolvedor | email@geq.com.br |
