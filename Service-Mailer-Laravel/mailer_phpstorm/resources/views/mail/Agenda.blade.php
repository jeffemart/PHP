<div class="body">
    <div class="corpo">
        <section style="width: auto; height: 180px; background-color: #ff0000">
            <img src="https://assets.online.net.br/storage/sistemas/mklog/photo_2021-12-24_11-45-38.jpg" alt="logo"
                 style="width: 200px; margin: 60px">
            <script async charset="utf-8"></script>
        </section>
        <div class="content-cell" style="margin: auto">
            <section class="element">
                <div class="element-img">
                    <img src="https://mk01.online.net.br/imagem/51735484993_279239cc42_o.png" width="120" height="auto"
                         alt="acenando">
                    <script async charset="utf-8"></script>
                </div>
                <div class="element-text">
                    <h1>E aí! Tudo certo?</h1>
                    <p>Nossa equipe de sistemas esta enviando este email para comunicar que já estamos agendando nossos
                        treinamentos ! 😁</p>
                </div>
            </section>
            <br>
            <hr size="1" style="opacity: 10%"/>
            <br>
            <section class="element">
                <div>
                    <h1>Solicitação</h1>
                    <p>Para fazer uma solicitação de um treinamento conosco, basta preencher o fomulário que você
                        encontra no link abaixo.</p>
                </div>
            </section>
            <section class="element">
                <p>Observação: Após recebermos sua solicitação, veremos as datas e horários e logo daremos um retorno
                    com a confirmação, mas não se preocupe, entraremos em contato para alinhar tudo direitinho.</p>
            </section>
            @component('mail::button', ['url' => 'https://docs.google.com/forms/d/1Raujp1BT1GozCe5jGB554aHr9a2TSKCJwKfzgFRAakk/viewform?edit_requested=true'])
                Formulário
            @endcomponent
            <hr size="1" style="opacity: 10%"/>
            <br>
            <section class="element">
                <div class="element-text">
                    <h1>Agenda</h1>
                    <p>Para acompanhar nossa agenda de treinamentos pode acessar nossa planilha ou nossa agenda no
                        Agenda do Google.</p>
                </div>
                <div class="element-img">
                    <img src="https://mk01.online.net.br/imagem/Google-Calendar-Logo.png" width="120px" height="auto"
                         alt="unnamed">
                    <script async charset="utf-8"></script>
                </div>
            </section>
            @component('mail::button', ['url' => 'https://calendar.google.com/calendar/embed?src=c_0d0c3oin1f1lmiarcgvnelmhpc%40group.calendar.google.com&ctz=America%2FFortaleza'])
                Agenda
            @endcomponent
            <hr size="1" style="opacity: 10%"/>
            <br>
            <section>
                <h1>Documentação</h1>
                <p>Se tiver interesse em aprender com a documentção oficial dos nossos sitemas, ou com video aulas no
                    YouTube, separamos um material para você com os links de cada sistema, esperamos ter ajudado.</p>
                <p>Obrigado pela compreensão e bom trabalho à todos! Saudações do seu time arretado de sistemas da
                    Online Telecom 😜</p>
                <p>Sistemas tá On, você tá On, empresa tá On, assim cliente tá On❗️</p>
                <br>
                <div>
                    <img src="https://mk01.online.net.br/imagem/51734840657_f6899e24b8_o.png" width="800" height="auto"
                         alt="tudo-o-que-você-precisa-saber-sobre-equipe">
                    <script async charset="utf-8"></script>
                </div>
                @component('mail::button', ['url' => 'https://docs.google.com/document/d/1Vrsi_Jups-M0Dbu4EPBSln6weduxg2d-l6O9juHu_7o/edit'])
                    Documentação
                @endcomponent
            </section>
        </div>
    </div>
    <div class="footer">
        <p>@2021 Sistemas. Todos os direitos reservados.</p>
        <br>
    </div>
</div>
