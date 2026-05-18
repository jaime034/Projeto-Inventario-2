
# Sistema de Inventário do Curso Técnico Informática 

## Descrição Geral
O **Sistema de Inventário Técnico – TechEdu** é um projeto didático desenvolvido em PHP com o objetivo de ensinar conceitos fundamentais de desenvolvimento web, organização de projetos, reutilização de código e uso de framework CSS.

O sistema simula um inventário técnico, permitindo a navegação entre telas, cadastro de itens e organização visual utilizando Bootstrap.

---

## Objetivos do Projeto
- Ensinar a estrutura básica de um projeto PHP
- Aplicar boas práticas de organização de diretórios
- Demonstrar reutilização de layout com `includes`
- Utilizar framework CSS para estilização e responsividade
- Criar fluxo de navegação entre páginas

---

## Tecnologias Utilizadas
- **PHP** (lógica do sistema)
- **HTML5** (estrutura das páginas)
- **CSS / Bootstrap 5** (estilização e layout responsivo)
- **JavaScript (Bootstrap Bundle)** (componentes interativos)

---

## Estrutura de Diretórios

ProjetoInventario/
├── index.php
├── README.md
├── includes/
│   ├── header.php
│   └── footer.php
├── public/
│   ├── css/
│   ├── js/
│   └── assets/
└── views/
├── dashboard.php
└── cadastro_item.php

---

## Descrição dos Diretórios

### 📂 includes/
Contém arquivos reutilizáveis de layout.

- `header.php` → Estrutura inicial do HTML e menu de navegação
- `footer.php` → Rodapé, scripts e encerramento do HTML

**Finalidade:**  
Evitar repetição de código e padronizar o layout.

---

### 📂 views/
Contém as páginas (telas) do sistema.

- `dashboard.php` → Tela principal do sistema
- `cadastro_item.php` → Tela de cadastro de produtos/itens

**Finalidade:**  
Separar as telas da lógica principal do sistema.

---

### 📂 public/
Armazena arquivos públicos do sistema.

- `css/` → Arquivos de estilo
- `js/` → Scripts JavaScript
- `assets/` → Imagens e outros recursos

**Finalidade:**  
Organizar arquivos estáticos acessíveis pelo navegador.

---

## Arquivos Principais

### 📄 index.php
Arquivo de entrada do sistema.

**Função:**
- Redirecionar automaticamente o usuário para o Dashboard
- Controlar o fluxo inicial da aplicação

---

### 📄 header.php
Arquivo responsável pelo início da página.

**Inclui:**
- Estrutura HTML inicial
- Importação do Bootstrap (CSS)
- Menu de navegação principal

---

### 📄 footer.php
Arquivo responsável pelo encerramento da página.

**Inclui:**
- Rodapé do sistema
- Ano automático com PHP
- Importação do Bootstrap (JavaScript)
- Fechamento das tags HTML

---

## Funcionalidades do Sistema
- Redirecionamento automático ao acessar o projeto
- Menu de navegação entre páginas
- Dashboard inicial
- Tela de cadastro de itens
- Layout padronizado e responsivo
- Ano automático no rodapé
- Estrutura organizada para expansão futura

---

## Conceitos Ensinados
- Estrutura de projeto web
- Organização de diretórios
- Entrada do sistema (`index.php`)
- Reutilização de código (`includes`)
- Navegação entre páginas
- Uso de framework CSS (Bootstrap)
- Separação de responsabilidades

---

## Público-Alvo
- Estudantes iniciantes em PHP
- Cursos técnicos e introdutórios
- Aulas práticas de desenvolvimento web

---

## Observações
Este projeto tem **finalidade educacional** e foi desenvolvido para facilitar o aprendizado progressivo de conceitos fundamentais antes da introdução de banco de dados, autenticação e regras de negócio avançadas.

---

## Possíveis Evoluções
- Sistema de login
- Integração com banco de dados
- CRUD completo de produtos
- Controle de usuários
- Relatórios de inventário

---

## Autor
Projeto desenvolvido para fins educacionais – Prof.: Luis Orlando P. carvalho
