# spirit-test-one
Teste para o processo seletivo da SpiritShop

# Guia de Inicialização com Docker Compose

Este guia fornece instruções sobre como iniciar a aplicação usando o Docker Compose. Certifique-se de ter o Docker e o Docker Compose instalados em seu sistema antes de prosseguir.

## 1. Clonar o Repositório

Clone o repositório do Sistema de Avaliação de Produtos para o seu ambiente local.

```bash
git clone https://github.com/alezzott/spirit-test-one.git

```

## 2. Navegar até o Diretório do Projeto

Vá para o diretório do projeto clonado usando o terminal.

```bash
cd spirit-test-one
```

## 3. Configurar o Docker Compose

O Docker Compose é uma ferramenta para definir e executar aplicativos Docker multi-contêiner. O arquivo `docker-compose.yml` define os serviços necessários para a aplicação.

## 4. Iniciar os Contêineres

Execute o seguinte comando para iniciar os contêineres da aplicação:

```bash
docker-compose up -d
```



O sinalizador `-d` inicia os contêineres em segundo plano. Se preferir ver os logs do contêiner em tempo real, você pode omitir este sinalizador.

## 5. Acessar a Aplicação

Após iniciar os contêineres, você pode acessar a aplicação no navegador da web. Abra o navegador e navegue para o seguinte endereço:

```bash
http://localhost:80
```

A porta 80 é a porta padrão definida no arquivo `docker-compose.yml`. Se preferir, você pode personalizar a porta neste arquivo.

## 6. Uso da Aplicação

Agora que a aplicação está em execução, você pode visualizar os produtos, fazer avaliações e ver a média das avaliações para cada produto.


## Teste Conceitual: Solução de Problema

### 1. Como você diagnosticaria e identificaria as causas específicas desses problemas de performance e usabilidade no mobile?

* Testaria o site em diferentes dispositivos móveis, tanto Android quanto iOS, com diferentes tamanhos de tela e resoluções. Além de verificar  a compatibilidade do site com diferentes navegadores móveis, como Chrome, Safari, Firefox, entre outros.

* Realização de testes em dispositivos móveis para entender as dificuldades na interação com a interface.

* Avaliaria o uso de recursos da página, como imagens de alta resolução não otimizadas, scripts desnecessários e plugins de terceiros que impactam negativamente o desempenho.

### 2. Que estratégias e ferramentas você utilizaria para otimizar a performance do site no mobile?

* Uso de técnicas de carregamento preguiçoso [lazyloading](https://react.dev/reference/react/lazy)

* Evitar o uso excessivo de animações e transições complexas que possam sobrecarregar a GPU dos dispositivos móveis.

### 3. Como você melhoraria a usabilidade da interface para usuários de dispositivos móveis, garantindo que a experiência seja tão boa quanto no desktop?

* Forneceria feedback visual imediato para ações do usuário, como pressionar um botão ou enviar um formulário, para indicar que a interação foi reconhecida.

* Utilizaria marcação semântica apropriada, como tags HTML adequadas e atributos ARIA, para tornar o conteúdo compreensível para leitores de tela e outros dispositivos assistivos.

* Priorizaria o uso de layouts fluidos, unidades flexíveis (por exemplo, % em vez de px) e media queries para ajustar o conteúdo com base nas características do dispositivo.