<body class="body">
<section class="content-body">
    <div class="initial-div">
        <img src="https://mksolutions.movidesk.com/File/ViewFile/7B7205E1E93693E0792FAA25BEF3B999" alt="logo">
    </div>
    <div class="slanted-shape">
    </div>
    <section class="content-cell">
        <div class="object-title">
            <h1>Treinamento de Desk Manager para as Consultoras</h1>
        </div>
        <br>
        <div class="object-text">
            <p>Olá pessoal, sua equipe de sistemas está promovendo um treinamento para capacitar vocês na utilização da
                ferramenta Desk Manager. É através dessa ferramenta que vocês irão entrar em contato conosco para
                resolvermos seus problemas 😜</p>
            <p>Fiquem de olho no dia, horário e na sua turma. O treinamento será gravado e enviado após o término de
                cada treinamento. Ademais também uma pesquisa será enviada para cada um após o encerramento do seu
                treinamento!</p>
            <p>Para acessar a sala, basta clicar no botão 'Sala' no dia e horário do seu treinamento. Até lá!</p>
        </div>
        <div class="object-title">
            <h1>Turma 8</h1>
        </div>
        <br>
        <section class="object-list">
            <div class="content-list">
                <ul>
                    <li>Sheila Alves</li>
                    <li>Simone Oliveira</li>
                    <li>Tais Fernandes</li>
                    <li>Tamara Gomes</li>
                    <li>Tamires Ferreira</li>
                </ul>
            </div>
            <div class="content-list">
                <ul>
                    <li>Thalyta Sousa</li>
                    <li>Valdenisa Morais</li>
                    <li>Valentina Almeida</li>
                    <li>Vanessa Costa</li>
                    <li>Vanessa Delfino</li>
                </ul>
            </div>
        </section>
    </section>
    <div class="content-img">
        <img src="https://live.staticflickr.com/65535/51773798785_4f7589d197_w.jpg" alt="img-corpo">
    </div>
    <section class="content-cell">
        <h1>Dia 30/12/2021 às 16:10h</h1>
        @component('mail::button', ['url' => 'https://meet.google.com/fvm-akgu-vbo'])
            Sala
        @endcomponent
    </section>
    <div class="slanted-shape-object">
    </div>
    <section class="content-about">
        <section class="content-cell">
            <div class="element">
                <h1>Instrutor Edivan Nunes</h1>
            </div>
            <br>
            <div class="element">
                <div class="instrutor">
                    <img src="https://live.staticflickr.com/65535/51773267758_aaba6d58b5_w.jpg" width="100"
                         height="auto" alt="1618060712400">
                </div>
                <br>
                <br>
                <div class="instrutor-txt">
                    <p>Graduação em Análise e desenvolvimento de sistemas. Especialização em Banco de Dados.</p>
                    <p>Analista DevOps Pleno na Online Telecom. Integrante do setor Tecnologia da Informação.</p>
                    <br>
                </div>
            </div>
        </section>
    </section>
    <div class="slanted-shape-invert">
    </div>
    <section class="content-quite">
        <section class="content-cell">
            <p>Obrigado pela compreensão e bom trabalho à todos! Saudações do seu time arretado de sistemas da
                Online Telecom 😜</p>
            <p>Sistemas tá On, você tá On, empresa tá On, assim cliente tá On❗️</p>
        </section>
        <br>
    </section>
    <div class="slanted-shape-final">
    </div>
    <section class="final-content">
        <section class="content-cell">
            <p style="color: white">@2021 Sistemas. Todos os direitos reservados.</p>
        </section>
    </section>
</section>
</body>

{{--layout avaliação--}}
@component('mail::message')
    <h1>E aí! O que você achou do nosso treinamento?</h1>
    <br>
    <p>Conta pra gente o que você achou desse treinamento respondendo este formulário do setor Gente e Gestão.</p>
    @component('mail::button', ['url' => 'https://docs.google.com/forms/d/e/1FAIpQLSdnGo1LbrgINzE3dtlp_aXfkJMwS5jEhlKKlmOuUSSZrwrpJw/viewform?usp=sf_link'])
        Avaliação
    @endcomponent
@endcomponent

{{--layout de gravação--}}
{{--@component('mail::message')--}}
{{--    <h1>E aí! O que você achou do nosso treinamento?</h1>--}}
{{--    <br>--}}
{{--    <p>Agrecemos sua presença, caso não tenha sido possível assistir ao treinamento online, ele estará disponível para assistir aqui.</p>--}}
{{--    @component('mail::button', ['url' => ''])--}}
{{--        Gravação--}}
{{--    @endcomponent--}}
{{--@endcomponent--}}
