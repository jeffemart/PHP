@component('mail::message')
    <h1 style="color: black">📌 1. Correções</h1>
    <br>
    <li style="font-size: larger; color: black">1.1 Ajuste para que a Lead considere o vendedor informado no formulário em vez de considerar o
        operador que está conectado no sistema.
    </li>
    <li style="font-size: larger; color: black">1.2 Ajuste na visualização do meio de entrada ao editar uma Lead.</li>
    <li style="font-size: larger; color: black">1.3 Ajuste na visualização do motivo de fechamento ao editar uma Lead finalizada.</li>
    <li style="font-size: larger; color: black">1.4 Ajuste na visualização de leads em inconsistência no gerenciador de fechamentos.</li>
    <li style="font-size: larger; color: black">1.5 Ajuste para que o sistema não mude a data de criação da Lead caso alguma informação seja
        alterada.s
    </li>
    <li style="font-size: larger; color: black">1.6 Ajuste nas tarefas de uma LEAD para que considere sempre o nome atualizado do cliente
        associado.
    </li>
    <li style="font-size: larger; color: black">1.7 Ajuste na efetivação de alteração de endereço de uma Lead.</li>
    <li style="font-size: larger; color: black">1.8 Ajuste para que uma solicitação de cancelamento de contrato seja feita mais de uma vez.</li>
    <li style="font-size: larger; color: black">1.9 Ajuste para que o sistema considere o meio de entrada definido pelo usuário e não a
        configuração como sugestão.
    </li>
    <li style="font-size: larger; color: black">1.10 Ajuste para bloquear a criação de pré-cadastros com 11 dígitos no telefone residencial.</li>
    <br>
    <hr>
    <br>
    <h1 style="color: black">📌 2. Melhorias</h1>
    <br>
    <li style="font-size: larger; color: black">2.1 Alteração nos filtros nos painéis das etapas da lead para a possibilidade de selecionar mais de
        um vendedor e produto.
    </li>
    <li style="font-size: larger; color: black">2.3 Aumento do número de caracteres da descrição da classificação de reversão de cancelamento.</li>
    <li style="font-size: larger; color: black">2.4 Inserção de colunas ocultas com informações de telefone no gerenciador de inviabilidades.</li>
    <li style="font-size: larger; color: black">2.5 Melhoria na exibição das Leads originadas do "BOT" e que foram inviabilizadas.</li>
    <li style="font-size: larger; color: black">2.6 Melhoria na exibição dos planos na Lead quando há limitação por área considerando condomínio.
    </li>
    <li style="font-size: larger; color: black">2.7 Melhoria na listagem dos vendedores na etapa 4 da Lead (ordem alfabética).Melhoria para que o
        sistema sempre considere o endereço da Lead na etapa de viabilidade, mesmo sendo diferente no endereço do
        cadastro de pessoas.
    </li>
    <li style="font-size: larger; color: black">2.8 Melhoria para que no painel de “Tempo de leads não finalizadas” não sejam listadas Leads
        inviabilizadas.
    </li>
    <li style="font-size: larger; color: black">2.9 Nova configuração para definir a obrigatoriedade da forma de pagamento de adesão na Lead.
        (Documentação)
    </li>
    <li style="font-size: larger; color: black">2.10 Nova configuração para definir a obrigatoriedade do vendedor na Lead. (Documentação)</li>
    <li style="font-size: larger; color: black">2.11 Nova configuração para definir a obrigatoriedade de endereço na Lead. (Documentação)</li>
    <li style="font-size: larger; color: black">2.12 Nova configuração para definir o valor padrão do tipo de venda de uma Lead. (Documentação)
    </li>
    <li style="font-size: larger; color: black">2.13 Nova opção para inativar questionários de regras não executadas no gerenciador de pós-venda.
    </li>
    <br>
    <hr>
    <br>
    <h1 style="color: black">📌 3. Destaques e sugestões do time de sistemas</h1>
    <br>
    <p style="font-size: larger; color: black">Gostaria de destacar que a melhoria 2.8 é interessante pois a lead passa a considerar o endereço selecionado no
        início da lead para verificar a viabilidade e não o endereço do cadastro, visto que a conexão pode estar em um
        endereço diferente do endereço de cadastro.</p>
    <p style="font-size: larger; color: black">Observações: Reforço que todas essas melhorias também estão documentadas e manualizadas no manual do
        sistema. Para acessar, basta ir no site: <a
            href="https://documentacao.mksolutions.com.br/display/MK30/CRM">link</a></p>
    <p style="font-size: larger; color: black">Se tiverem alguma dúvida ou novas sugestões, é só entrar em contato com o time de Sistemas da Informação. Basta
        abrir um chamado no 📩 <a href="https://onlinetelecom.desk.ms/?LoginPortal">Desk Manager</a> ou entrar em
        contato com a gente pelos ramais:</p>
    <br>
    <p style="font-size: larger; color: black">📞 Caio Felipe - 3253</p>
    <p style="font-size: larger; color: black">📞 Jeferson Torres - 3251</p>
    <p style="font-size: larger; color: black">📞 Jefferson Martins - 3259</p>
    <p style="font-size: larger; color: black">📞 Layzan Portela - 3254</p>
    <br>
    <p style="font-size: larger; color: black">Obrigado pela compreensão e bom trabalho à todos!
        Saudações do seu time arretado de sistemas da Online Telecom 😜</p>
    <p style="font-size: larger; color: black">Sistemas tá On, você tá On, empresa tá On, assim cliente tá On❗,<br></p>
    <hr>
    @component('mail::button', ['url' => 'https://documentacao.mksolutions.com.br/'])
        Documentação
    @endcomponent
@endcomponent
