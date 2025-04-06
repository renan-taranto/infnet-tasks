# 🐳 Infnet Tasks - Docker Swarm

Projeto desenvolvido para a disciplina **"Integração Contínua, DevOps e Computação em Nuvem"** da pós-graduação *MIT em Arquitetura de Software* do Instituto Infnet.

A aplicação consiste em um **CRUD de tarefas**, containerizada e executada em um cluster **Docker Swarm**, com observabilidade e testes de stress.

---

## 🧩 Arquitetura dos Serviços

A aplicação é composta pelos seguintes serviços:

| Serviço     | Função                                                                      |
|-------------|-----------------------------------------------------------------------------|
| `nginx`     | Servidor web / proxy reverso                                                |
| `php`       | Aplicação em PHP-FPM, responsável pela lógica do sistema                    |
| `db`        | Banco de dados MySQL                                                        |
| `prometheus`| Monitoramento e coleta de métricas                                          |
| `grafana`   | Visualização gráfica das métricas coletadas                                 |
| `cadvisor`  | Exporta métricas de containers (CPU, memória, rede, etc.) para o Prometheus |

---

## 💻 Instalação para Desenvolvimento

1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/infnet-tasks.git
   cd infnet-tasks
   ```

2. Inicie os containers:
   ```bash
   docker compose up -d
   ```

3. Acesse a aplicação:
    - http://127.0.0.1

---

## 🚢 Deploy com Docker Swarm

1. Inicie o Swarm (caso ainda não esteja rodando):
   ```bash
   docker swarm init
   ```

2. Faça o deploy da stack:
   ```bash
   docker stack deploy -c docker-compose.yml -c docker-compose.prod.yml infnet-tasks
   ```

3. Verifique os serviços:
   ```bash
   docker service ls
   ```

---

## 📊 Observabilidade com Grafana

- Acesse o Grafana:
  ```
  http://IP_DO_HOST:3000
  ```
- Login padrão:
    - **Usuário:** `admin`
    - **Senha:** `admin` (ou conforme configurado)
- Dashboards pré-configurados mostram uso de CPU, memória, containers ativos e muito mais.

---

## 🔥 Teste de Stress com K6

Um script de stress test com o [K6](https://k6.io/) está disponível no diretório `/monitoring`.

### Para executar:

1. Edite o host alvo dentro do arquivo `stress-test.js`;
2. Execute o teste:
   ```bash
   k6 run monitoring/stress-test.js
   ```

---

## ✅ Funcionalidades da Aplicação

- Listagem de tarefas
- Criação, edição e exclusão
- Interface simples via navegador

---

## 🛠 Tecnologias Utilizadas

- Docker & Docker Swarm
- PHP 8.2
- Nginx
- MySQL 8
- Prometheus
- Grafana
- cAdvisor
- K6 (testes de carga)

---

## 👨‍💻 Autor

Renan Taranto