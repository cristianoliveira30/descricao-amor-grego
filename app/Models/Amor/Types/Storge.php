<?php

namespace App\Models\Amor\Types;

use App\Models\Amor\Contracts\Amor;

class Storge implements Amor
{
    public function detalhes(): array
    {
        return [
            'tipo' => 'Storge',

            'slogan' => 'O amor que cuida, protege e permanece.',

            'descricao' => 'Storge é o <b>amor natural e afetivo</b>, presente principalmente nos vínculos familiares. É um amor que surge de forma quase instintiva, baseado na <b>proximidade</b>, no <b>cuidado</b> e na <b>convivência contínua</b>. Diferente do Eros, que nasce da atração, ou da Philia, que se constrói pela escolha e reciprocidade, Storge se desenvolve de forma espontânea, sendo muitas vezes o primeiro tipo de amor experimentado pelo ser humano. <br><br>
                Esse amor é marcado pela <b>familiaridade</b> e pela <b>presença constante</b>. Ele se manifesta no cuidado dos pais pelos filhos, no vínculo entre irmãos e nas relações onde há um senso profundo de pertencimento. Não depende de intensidade emocional ou troca equilibrada, mas sim de um compromisso silencioso de estar presente e cuidar. <br><br>
                Na tradição cristã, esse tipo de amor é refletido na importância da família e no chamado ao cuidado mútuo. A Escritura reforça esse princípio: <br>
                <i>"Honra teu pai e tua mãe, para que se prolonguem os teus dias na terra."</i> (<a href="https://www.bibliaonline.com.br/acf/ex/20/12" target="_blank">Êxodo 20:12</a>) <br><br>
                E também no cuidado prático entre os membros da família: <br>
                <i>"Mas, se alguém não tem cuidado dos seus, e especialmente dos da sua família, negou a fé e é pior do que o descrente."</i> (<a href="https://www.bibliaonline.com.br/acf/1tm/5/8" target="_blank">1 Timóteo 5:8</a>) <br><br>
                Storge é, portanto, um amor <b>estrutural e formador</b>, que cria as bases emocionais e relacionais do indivíduo. Ele oferece segurança, estabilidade e senso de identidade, sendo essencial para o desenvolvimento humano. <br><br>
                Sob uma leitura mais interpretativa, Storge pode ser entendido como o <b>amor que cuida sem exigir</b>, o amor que <b>permanece pela ligação</b> e o amor que <b>protege mesmo em silêncio</b>. <br><br>
                Ainda assim, pode apresentar fragilidades: quando excessivo, pode se tornar <b>superproteção</b> ou gerar <b>dependência emocional</b>. Quando negligenciado, pode resultar em ausência afetiva e falta de estrutura emocional. O equilíbrio desse amor está em cuidar sem prender e proteger sem limitar.',

            'expressao' => 'Storge se manifesta no cuidado diário e na presença constante. Está presente em ações simples e repetitivas, como proteger, ensinar, orientar e sustentar o outro ao longo do tempo. Não busca intensidade nem reconhecimento, mas se revela na continuidade e na responsabilidade. <br><br>
                Diferente de outros tipos de amor, Storge não depende de escolha consciente ou atração — ele surge naturalmente da convivência e do vínculo. É percebido no zelo silencioso, na preocupação genuína e no compromisso de estar presente mesmo sem retorno imediato. <br><br>
                É um amor que se expressa mais por atitudes do que por palavras, mais pela constância do cuidado do que pela intensidade do sentimento.',

            'caracteristicas' => [
                'cuidado',
                'proteção',
                'proximidade',
                'convivência contínua',
                'afeto natural',
                'vínculo familiar'
            ],

            'virtudes' => [
                'paciência',
                'perseverança',
                'responsabilidade',
                'dedicação',
                'estabilidade'
            ],

            'riscos' => [
                'superproteção',
                'dependência emocional',
                'apego excessivo',
                'controle sobre o outro',
                'negligência afetiva (quando ausente)'
            ],

            'referencias' => [
                '<a href="https://www.bibliaonline.com.br/acf/ex/20/12">Êxodo 20:12</a> — honra aos pais como base da estrutura familiar.',
                '<a href="https://www.bibliaonline.com.br/acf/1tm/5/8">1 Timóteo 5:8</a> — responsabilidade pelo cuidado da família.',
                '<a href="https://www.bibliaonline.com.br/acf/pv/22/6">Provérbios 22:6</a> — instrução e formação no contexto familiar.',
                'Tradição cristã — a família como base do desenvolvimento humano e espiritual.'
            ]
        ];
    }
}
