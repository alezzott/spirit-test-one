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


### 1.Acessibilidade Web (A11Y): Como você garantiria que um website é acessível para pessoas com diferentes tipos de deficiências? Por favor, forneça exemplos de técnicas ou práticas que você aplicaria."

* O uso de testes de usabilidade com tecnologias assistivas, como leitores de tela e dispositivos de entrada alternativos.

* Promover a conscientização sobre a importância da acessibilidade em toda a equipe de desenvolvimento.



### 2.Performance de Aplicativos Web: Descreva as estratégias que você utilizaria para analisar e melhorar a performance de carregamento de um site. Inclua tanto otimizações de front-end quanto considerações de back-end que impactam a performance no lado do cliente."

* Identificar recursos críticos, como CSS e JavaScript essenciais para o carregamento inicial da página, e pré-buscá-los para melhorar o tempo de renderização inicial.

* Uso de formatos de imagem adequados, como JPEG para fotografias e PNG para gráficos e ilustrações.

* Minimizaria o número de consultas SQL e utilizaria técnicas de caching para reduzir a carga no banco de dados.

* Uso de índices adequados em consultas SQL para acelerar o acesso a dados no banco de dados.

* Instalação do Elasticsearch em um servidor ou em um cluster para lidar com as consultas de busca.

* No frontend, utilizaria a técnica de debounce para controlar a frequência com que as consultas de busca são enviadas ao backend enquanto o usuário digita na barra de busca.

### 3.Responsive Design: Explique como você abordaria o design e o desenvolvimento de um site responsivo, garantindo uma ótima experiência de usuário em dispositivos de diferentes tamanhos. Inclua considerações sobre layout, imagens e tipografia."

* Teste o site em uma variedade de dispositivos reais, incluindo smartphones, tablets e desktops, para garantir uma experiência consistente e de alta qualidade em todos os tamanhos de tela.

* Utilizaria unidades de medida flexíveis (por exemplo, em, rem) para dimensionar o tamanho da fonte com base no tamanho da tela, garantindo uma boa legibilidade em dispositivos móveis.

* Escolher fontes tipográficas que sejam legíveis em diferentes tamanhos de tela e que se ajustem bem ao layout responsivo.

### 4.Segurança no Front-End: Quais medidas você tomaria para aumentar a segurança em uma aplicação web para proteger contra vulnerabilidades comuns, como cross-site scripting (XSS) e falsificação de solicitação em sites (CSRF)?"


* Utilizaria bibliotecas ou frameworks de validação para garantir que apenas dados seguros e esperados sejam aceitos pela aplicação.

* Monitoraria fontes confiáveis de vulnerabilidades de segurança e agiria prontamente para corrigir qualquer vulnerabilidade identificada em biblioteca de terceiros.

* Geraria tokens únicos e aleatórios para cada sessão de usuário e os incluiria em todas as solicitações que modificam o estado do servidor, garantindo que apenas solicitações legítimas sejam processadas.

### 5.SEO e Desenvolvimento Front-End: Como as práticas de desenvolvimento front-end podem impactar o SEO de um site? Dê exemplos de como você otimizaria uma aplicação web para melhorar sua visibilidade nos motores de /busca."

* O Uso HTML semântico, como ``<header>``, ``<nav>``, ``<main>``, ``<footer>``, para estruturar corretamente o conteúdo. Além de garantir que as palavras-chave relevantes estejam incluídas nos títulos das páginas (``<title>``), nas tags de cabeçalho (``<h1>, <h2>, <h3>``), e em outros elementos HTML importantes.

* Uso de atributos alt em todas as imagens para descrever o conteúdo da imagem de forma acessível e fornecer texto alternativo para mecanismos de busca.

### 6.Uso de Frameworks e Bibliotecas JavaScript: Discuta os prós e contras de usar frameworks/bibliotecas JavaScript (como React, Vue, Angular) versus JavaScript puro (Vanilla JS) em projetos de desenvolvimento web. Em que situações você escolheria um em detrimento do outro?

### Prós de usar frameworks/bibliotecas JavaScript:

* Frameworks como React, Vue e Angular têm ecossistemas ricos de plugins e componentes reutilizáveis que podem ser integrados facilmente aos projetos, economizando tempo e esforço de desenvolvimento.

* Muitos frameworks têm uma estrutura organizada e predefinida, o que facilita a manutenção do código e o trabalho em equipe, especialmente em projetos grandes e complexos.

### Contras de usar frameworks/bibliotecas JavaScript:

*  Aprender um novo framework ou biblioteca pode exigir tempo e esforço, especialmente para desenvolvedores iniciantes.

* Frameworks adicionam um Sobrecarga de código ao projeto, o que pode resultar em um pacote de aplicativo maior e tempos de carregamento mais lentos para o usuário final. Isto é, dependendo do tamanho do pacote.

### 7.Gerenciamento de Estado em Aplicações SPA (Single Page Application): Explique a importância do gerenciamento de estado em uma SPA e descreva uma abordagem ou ferramenta que você utilizaria para gerenciar o estado eficientemente."

* Ao centralizar o estado da aplicação, as atualizações e modificações no estado podem ser feitas em um único local, facilitando a manutenção do código e reduzindo a probabilidade de erros.

* Ter um estado centralizado facilita a depuração de problemas e a realização de testes, pois o estado da aplicação é transparente e acessível em toda a aplicação.

### 8.Processo de Desenvolvimento e Deploy de Aplicações Web: Descreva o processo que você seguiria desde a concepção até o deploy de uma aplicação web, incluindo etapas de planejamento, desenvolvimento testes, e manutenção."

* Implementação de pipelines de CI/CD (Integração Contínua/Entrega Contínua) para automatizar o processo de build, testes e deploy.

* Deploy da aplicação para o ambiente de produção, utilizando serviços de hospedagem adequados (como AWS, Heroku, Vercel, Railway, etc.).

* Utilização de metodologias ágeis (como Scrum) para gerenciar o desenvolvimento de forma iterativa e adaptativa.

* Definição de objetivos claros e escopo do projeto.

* Uso de boas práticas.

### 9. Adaptação a Mudanças de Requisitos: Como você lida com mudanças de requisitos ou feedback de usuários que exigem alterações significativas em um projeto já em desenvolvimento?"

 * Estabeleça uma comunicação clara com os devs do projeto, incluindo clientes, gerentes de produto e membros da equipe de desenvolvimento.

 * Realize testes nas novas funcionalidades e alterações para garantir que elas atendam aos requisitos, para evitar problemas de compatibilidade.

 * Estar preparado para ajustar o plano e as tarefas do projeto conforme necessário, para as eventuais mudanças de requisitos.