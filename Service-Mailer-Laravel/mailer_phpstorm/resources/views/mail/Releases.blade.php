@component('mail::message')
    <div style="width: 100%; margin: auto; display: flex; justify-content: center">
        <img src="https://live.staticflickr.com/65535/51737260416_2ae2b5c0c5.jpg"
             style="width: 30%; margin: 0 auto 15px;" alt="Logo_Online_png">
        <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
    </div>
    <br>
    <h1 style="color: black">🗯 Nova atualização na versão 108 da ERP MK</h1>
    <br>
    <p style="font-size: larger; color: black">Olá, sua equipe de sistemas está mandando este e-mail para lhe informar
        sobre os ajustes e melhorias que serão realizados na nova atualização do MK Solutions no dia 14/12/2021 às
        18:15h. Segue abaixo as novidades! 😉</p>
    <br>
    <hr size="1" style="box-sizing: border-box; position: relative; opacity: 20%;">
    <br>
    <h1 style="color: black">📌 1. Ajustes</h1>
    <br>
    <li style="font-size: larger; color: black">1.1 Módulo Workspace - Ajuste no comportamento na alteração de cadastros
        para que seja verificada corretamente a configuração da quantidade máxima de caracteres do login e senha de
        acesso ao SAC. Quando não houver nada configurado (Configurações> Workspace> Workspace - Configurações - Gerais
        então será considerado o limite de 6 caracteres para login e senha).
    </li>
    <br>
    <hr size="1" style="box-sizing: border-box; position: relative; opacity: 20%;">
    <br>
    <h1 style="color: black">📌 2. Melhorias</h1>
    <br>
    <li style="font-size: larger; color: black">2.1 Módulo CRM - Inclusão nas moedas "Minhas leads" e "Minhas leads
        finalizadas" de ferramenta para avançar, permitindo que o consultor conclua a venda nestas telas.
    </li>
    <li style="font-size: larger; color: black">2.3 Módulo Financeiro - Gerenciador de Cobranças: Na etapa "Cobranças em
        contato" agora é possível selecionar múltiplas cobranças (arrastando com o mouse) para avançar para a próxima
        etapa.
    </li>
    <li style="font-size: larger; color: black">2.4 Módulo Técnico - Mk NetMaps: Melhorias de desempenho, visualização e
        carregamento.
    </li>
    <li style="font-size: larger; color: black">2.5 Mk Solutions - ERP: Novo design no sistema de acordo com o
        rebranding da marca.
    </li>
    <br>
    <img src="https://live.staticflickr.com/65535/51737132110_df34afc336_c.jpg" width="800" height="348"
         alt="imagetools0">
    <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
    <br>
    <br>
    <hr size="1" style="box-sizing: border-box; position: relative; opacity: 20%;">
    <br>
    <h1 style="color: black">📌 3. Destaques e sugestões do time de sistemas</h1>
    <br>
    <p style="font-size: larger; color: black">Gostariamos de destacar que a mudança no layout do sistema, com a nova
        marca
        da MK, ficou bem legal. Conta pra gente o que você achou. 😜</p>
    <p style="font-size: larger; color: black">Reforçamos que todas essas melhorias também estão documentadas no manual
        do
        sistema. Para acessar, basta ir no site: <a style="text-decoration: none"
                                                    href="https://mksolutions.movidesk.com/kb/article/240945/releases-o-que-ha-de-novo-na-versao-108">Central
            de ajuda MK</a></p>
    <p style="font-size: larger; color: black">Se tiverem alguma dúvida ou novas sugestões, é só entrar em contato com o
        time de Sistemas da Informação. Basta
        abrir um chamado no 📩 <a href="https://onlinetelecom.desk.ms/?LoginPortal" style="text-decoration: none">Desk
            Manager</a> ou entrar em
        contato com a gente pelos ramais:</p>
    <br>
    <p style="font-size: larger; color: black">📞 Caio Felipe - 3253</p>
    <p style="font-size: larger; color: black">📞 Jeferson Torres - 3251</p>
    <p style="font-size: larger; color: black">📞 Jefferson Martins - 3259</p>
    <p style="font-size: larger; color: black">📞 Layzan Portela - 3254</p>
    <br>
    @component('mail::panel')
        <p style="font-size: larger; color: black">Obrigado pela compreensão e bom trabalho à todos!
            Saudações do seu time arretado de sistemas da Online Telecom 😜</p>
        <p style="font-size: larger; color: black">Sistemas tá On, você tá On, empresa tá On, assim cliente tá On❗<br>
        </p>
        @component('mail::button', ['url' => 'https://mksolutions.movidesk.com/kb'])
            Documentação
        @endcomponent
    @endcomponent
@endcomponent
