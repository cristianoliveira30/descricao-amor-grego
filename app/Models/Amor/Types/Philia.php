<?php

namespace App\Models\Amor\Types;

use App\Models\Amor\Contracts\Amor;

class Philia implements Amor
{
    public function detalhes(): array
    {
        return [
            'tipo' => 'Philia',

            'slogan' => 'O amor da amizade, baseado na reciprocidade e confiança.',

            'descricao' => 'Philia é o <b>amor da amizade</b>, baseado na <b>reciprocidade</b>, <b>confiança</b> e <b>reconhecimento mútuo</b>. Diferente de formas mais intensas ou instintivas, como o <b>Eros</b>, Philia se constrói ao longo do tempo e depende da <b>convivência contínua</b>. Trata-se de um amor <b>racional</b> e <b>estável</b>, onde o outro é valorizado não apenas pelo que proporciona, mas por quem é. <br><br>
                Em <a href="https://pt.wikipedia.org/wiki/%C3%89tica_a_Nic%C3%B4maco" target="_blank"><b>Ética a Nicômaco</b></a>, de <a href="https://pt.wikipedia.org/wiki/Arist%C3%B3teles" target="_blank"><b>Aristóteles</b></a>, a amizade é descrita como uma das <b>maiores virtudes humanas</b>, sendo essencial para uma vida plena (<i>eudaimonia</i>). O filósofo divide a amizade em três tipos: por <b>utilidade</b>, por <b>prazer</b> e por <b>virtude</b> — sendo esta última a forma mais elevada de Philia, baseada no <b>bem mútuo</b> e na <b>admiração moral</b>. Nesse sentido, Philia não é apenas um sentimento, mas uma <b>construção ética e relacional</b>. <br><br>
                A tradição cristã reforça profundamente esse entendimento. A Escritura destaca o valor da amizade verdadeira como algo que <b>fortalece e edifica</b>: <br>
                <i>"Assim como o ferro afia o ferro, o homem afia o seu companheiro."</i> (<a href="https://www.bibliaonline.com.br/acf/pv/27/17" target="_blank">Provérbios 27:17</a>) <br><br>
                Além disso, a amizade é vista como um espaço de apoio e fidelidade: <br>
                <i>"Em todo tempo ama o amigo, e na angústia nasce o irmão."</i> (<a href="https://www.bibliaonline.com.br/acf/pv/17/17" target="_blank">Provérbios 17:17</a>) <br><br>
                Philia é marcada por elementos <b>estruturais</b>, não apenas emocionais, mas também <b>intelectuais</b> e <b>morais</b>. A amizade verdadeira é aquela onde há <b>equilíbrio entre dar e receber</b>, onde ambos os lados se beneficiam e crescem juntos. Por carregar virtudes que sustentam relações duradouras, Philia frequentemente se torna a <b>base de relacionamentos mais complexos</b>, inclusive aqueles que se originam em Eros. <br><br>
                Diferente de outros tipos de amor, Philia pode existir de forma <b>independente</b>, como uma amizade pura, mas também atua como <b>sustentação</b> para outros vínculos. Relações baseadas apenas em intensidade tendem à instabilidade, enquanto a presença de Philia oferece <b>equilíbrio</b> e <b>permanência</b>. Nesse sentido, ela é o tipo de amor mais <b>estrutural</b>, menos dependente de emoção intensa, funcionando como um verdadeiro <b>estabilizador das relações</b>. <br><br>
                Sob uma leitura mais interpretativa, Philia pode ser entendida como o <b>amor que permanece quando a intensidade diminui</b>, o amor que <b>não exige, mas escolhe ficar</b>, e o amor que <b>se prova no tempo, não no impulso</b>. <br><br>
                Ainda assim, pode apresentar fragilidades: quando não cultivada, pode ser confundida com <b>superficialidade</b>, <b>rotina</b> ou <b>comodismo</b>, perdendo sua profundidade e sendo reduzida a mera convivência ou familiaridade. Para uma visão complementar sobre as diferentes formas de amor, veja também <a href="https://pt.wikipedia.org/wiki/O_Banquete" target="_blank"><b>O Banquete</b></a>, de <a href="https://pt.wikipedia.org/wiki/Plat%C3%A3o" target="_blank"><b>Platão</b></a>.',

            'expressao' => 'Philia se manifesta na constância das relações e na presença contínua ao longo do tempo. Está presente em gestos simples, como ouvir com atenção, aconselhar com sinceridade, apoiar nos momentos difíceis e compartilhar a vida no cotidiano. Não exige intensidade extrema, mas sim continuidade, cuidado e disposição em permanecer. <br><br>
                Ao contrário de Eros, que busca união imediata e intensa, Philia se desenvolve de forma gradual, sendo construída através da convivência, da confiança e da experiência compartilhada. Ela se revela na estabilidade: amigos permanecem não por necessidade ou desejo momentâneo, mas por escolha consciente e vínculo consolidado. <br><br>
                É um amor que se fortalece no tempo, nos detalhes e na repetição silenciosa de estar presente.',

            'caracteristicas' => [
                'lealdade',
                'respeito',
                'confiança',
                'reciprocidade',
                'convivência contínua',
                'afinidade intelectual e moral',
            ],

            'virtudes' => [
                'justiça',
                'empatia',
                'paciência',
                'constância',
                'honestidade',
                'equalidade emocional'
            ],

            'riscos' => [
                'superficialidade',
                'idealização do outro',
                'dependência emocional',
                'Acomodação(falta de crescimento)',
                'perda de individualidade(tende a imitar o outro)',
            ],

            'referencias' => [
                '<a href="https://pt.wikipedia.org/wiki/%C3%89tica_a_Nic%C3%B4maco">Ética a Nicômaco</a> — Aristóteles descreve a amizade como virtude essencial.',
                '<a href="https://pt.wikipedia.org/wiki/O_Banquete">O Banquete</a> — Platão explora o amor em suas diferentes formas.',
                '<a href="https://pt.wikipedia.org/wiki/C%C3%ADcero">Cícero</a> — em Laelius de Amicitia, trata a amizade como uma das maiores riquezas da vida.',
                '<a href="https://www.bibliaonline.com.br/acf/pv/27/17">Provérbios 27:17</a> — "Como o ferro afia o ferro..."',
                '<a href="https://www.bibliaonline.com.br/acf/pv/17/17">Provérbios 17:17</a> — "Em todo tempo ama o amigo..."',
                '<a href="https://www.bibliaonline.com.br/acf/ecl/4/9-10">Eclesiastes 4:9-10</a> — valor da companhia e apoio mútuo.',
                'Tradição cristã — amor fraterno como base da comunhão entre os fiéis.'
            ]
        ];
    }
}
