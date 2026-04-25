# Trabalho de Faculdade - Sistema de Cadastro de Veiculos

## Sobre o Projeto

Este sistema foi desenvolvido como parte do **Desafio Profissional** da disciplina de Desenvolvimento Web. O objetivo e criar uma funcionalidade de cadastro de veiculos para um sistema comercial, atendendo a demanda de um cliente que precisa controlar sua frota.

O projeto utiliza uma arquitetura **cliente-servidor** com comunicacao via **JSON** entre front-end e back-end.

---

## Tecnologias Utilizadas

| Tecnologia | Versao | Uso |
|------------|--------|-----|
| PHP | 8.x | Backend e logica de negocio |
| MySQL | 8.x | Banco de dados relacional |
| HTML5 | - | Estrutura das paginas |
| CSS3 | - | Estilizacao e responsividade |
| JavaScript | ES6+ | Interatividade no frontend |
| jQuery | 3.7+ | Manipulacao do DOM |
| DataTables | 1.13+ | Tabela dinamica com busca, ordenacao e paginacao |
| SweetAlert2 | 11.x | Modais de confirmacao e alertas |
| Canvas Confetti | 1.9+ | Efeitos visuais de confete |
| XAMPP | - | Ambiente de desenvolvimento local |

---

## Funcionalidades (CRUD Completo)

### Create (Criar)
- Pagina de cadastro de veiculos com formulario completo
- Campos: placa, marca, modelo, cor, ano de fabricacao, ano do modelo, combustivel, chassi, renavam, quilometragem, observacoes
- Preenchimento automatico com dados aleatorios para testes rapidos
- Validacao de campos obrigatorios
- Feedback visual com SweetAlert2 e confete no sucesso

### Read (Ler)
- Listagem dinamica de todos os veiculos cadastrados
- Tabela interativa com DataTables: busca em tempo real, ordenacao por coluna e paginacao
- Consumo de API REST em JSON (`api/listar.php`)
- Interface responsiva (funciona em celular e computador)

### Update (Atualizar)
- Pagina de edicao com formulario pre-preenchido
- Atualizacao de todos os campos do veiculo
- Feedback visual de sucesso

### Delete (Deletar)
- Exclusao com confirmacao via SweetAlert2
- API REST para delecao (`api/deletar.php`)
- Atualizacao automatica da tabela apos exclusao

### Extras
- **API de dados aleatorios** (`api/dados_aleatorios.php`): gera dados fake de veiculos em formato JSON para testes
- **Documentacao tecnica completa** em `docs/documentacao.html` com organograma, arquitetura e guia de instalacao
- **Interface responsiva** adaptada para mobile e desktop
- **Efeitos visuais** de confete nas acoes de sucesso

---

## Estrutura do Projeto

```
faculdade/
├── api/
│   ├── listar.php              # API REST - lista todos os veiculos (JSON)
│   ├── deletar.php             # API REST - deleta um veiculo por ID (JSON)
│   └── dados_aleatorios.php    # API REST - gera dados fake de veiculo (JSON)
├── assets/
│   ├── css/
│   │   └── main.css            # Estilos customizados do sistema
│   └── js/
│       ├── main.js             # Scripts globais
│       ├── cadastro.js         # Logica da pagina de cadastro
│       ├── editar.js           # Logica da pagina de edicao
│       └── listagem.js         # Logica da tabela dinamica (DataTables)
├── docs/
│   └── documentacao.html       # Documentacao tecnica completa
├── includes/
│   ├── header.php              # Cabecalho comum das paginas
│   └── footer.php              # Rodape comum das paginas
├── banco_de_dados.sql          # Script SQL para criar o banco e tabela
├── cadastro.php                # Pagina de cadastro (CREATE)
├── conexao.php                 # Configuracao de conexao com MySQL
├── editar.php                  # Pagina de edicao (UPDATE)
├── index.php                   # Pagina inicial com dashboard
├── listagem.php                # Pagina de listagem (READ)
└── README.md                   # Este arquivo
```

---

## Banco de Dados

### Tabela: `veiculos`

| Campo | Tipo | Descricao |
|-------|------|-----------|
| `id` | INT (PK, AUTO_INCREMENT) | Identificador unico |
| `placa` | VARCHAR(10) | Placa do veiculo (formato Mercosul) |
| `marca` | VARCHAR(50) | Marca do veiculo |
| `modelo` | VARCHAR(50) | Modelo do veiculo |
| `cor` | VARCHAR(30) | Cor do veiculo |
| `ano_fabricacao` | INT | Ano de fabricacao |
| `ano_modelo` | INT | Ano do modelo |
| `combustivel` | VARCHAR(20) | Tipo de combustivel |
| `chassi` | VARCHAR(50) | Numero do chassi |
| `renavam` | VARCHAR(50) | Numero do RENAVAM |
| `quilometragem` | INT | Quilometragem atual |
| `data_cadastro` | DATE | Data do cadastro |
| `observacoes` | TEXT | Observacoes adicionais |

---

## Como Executar

### Requisitos
- XAMPP instalado (Apache + MySQL)
- Navegador web

### Passo a passo

1. **Clone o repositorio** na pasta `htdocs` do XAMPP:
   ```bash
   git clone https://github.com/jhonnytafarel/faculdade.git
   cd faculdade
   git checkout trabalho-faculdade
   ```

2. **Inicie o XAMPP** (Apache e MySQL)

3. **Crie o banco de dados**:
   - Acesse `http://localhost/phpmyadmin`
   - Importe o arquivo `banco_de_dados.sql`

4. **Acesse o sistema**:
   - Abra `http://localhost/faculdade` no navegador

---

## APIs Disponiveis

| Endpoint | Metodo | Descricao |
|----------|--------|-----------|
| `api/listar.php` | GET | Retorna todos os veiculos em JSON |
| `api/deletar.php` | POST | Recebe `id` e deleta o veiculo. Retorna `{sucesso, mensagem}` |
| `api/dados_aleatorios.php` | GET | Retorna um objeto JSON com dados fake de veiculo |

---

## Autor

**Jhonny Tafarel** - [@jhonnytafarel](https://github.com/jhonnytafarel)

Desenvolvido para a disciplina de Desenvolvimento Web - Faculdade.
