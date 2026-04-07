<?php

namespace App\Models\Amor\Types;

use App\Models\Amor\Contracts\Amor;

class Agape implements Amor
{
    public function detalhes(): array
    {
        return [
            'tipo' => 'Agape',

            'slogan' => 'O amor que se doa, independente de retorno.',

            'descricao' => 'Agape é o <b>amor incondicional</b>, caracterizado pela <b>doação</b>, <b>altruísmo</b> e <b>vontade consciente de fazer o bem</b>. Diferente de Eros, que nasce do desejo, de Philia, que se constrói na reciprocidade, e de Storge, que surge naturalmente do vínculo, Agape é um amor que <b>escolhe amar</b>, independentemente das circunstâncias ou do retorno recebido. <br><br>
                Na tradição cristã, Agape é a forma mais elevada de amor, sendo o próprio reflexo do amor divino. A Escritura expressa isso de forma central: <br>
                <i>"Porque Deus amou o mundo de tal maneira que deu o seu Filho unigênito, para que todo aquele que nele crê não pereça, mas tenha a vida eterna."</i> (<a href="https://www.bibliaonline.com.br/acf/jo/3/16" target="_blank">João 3:16</a>) <br><br>
                Esse amor não é baseado em emoção ou merecimento, mas em decisão e entrega. Ele se manifesta como cuidado ativo, mesmo diante da dificuldade, e como compromisso com o bem do outro acima do próprio interesse. <br><br>
                A descrição mais completa desse amor está em: <br>
                <i>"O amor é paciente, é benigno; o amor não arde em ciúmes, não se vangloria, não se ensoberbece; não se conduz inconvenientemente, não busca os seus próprios interesses, não se irrita, não suspeita mal."</i> (<a href="https://www.bibliaonline.com.br/acf/1co/13/4-5" target="_blank">1 Coríntios 13:4-5</a>) <br><br>
                Diferente dos outros tipos de amor, Agape não depende de intensidade, afinidade ou proximidade. Ele pode coexistir com todos os outros, mas também pode existir sozinho, sendo a forma mais estável e universal de amar. Nesse sentido, ele não apenas participa das relações, mas <b>orienta e transforma</b> todas elas. <br><br>
                Sob uma leitura mais interpretativa, Agape pode ser entendido como o <b>amor que permanece mesmo sem retorno</b>, o amor que <b>escolhe o bem acima do sentimento</b> e o amor que <b>se sustenta na decisão, não na emoção</b>. <br><br>
                Ainda assim, pode apresentar desafios: quando mal compreendido, pode levar à <b>autoanulação</b> ou à negligência de si mesmo. O verdadeiro Agape, porém, não destrói o indivíduo, mas equilibra doação e verdade, sendo um amor que <b>se entrega com consciência</b> e <b>se mantém firme na justiça</b>.',

            'expressao' => 'Agape se manifesta na ação intencional de fazer o bem, independentemente de reconhecimento ou retorno. Está presente no perdão, na paciência diante das falhas, na ajuda desinteressada e na disposição de cuidar mesmo quando não é conveniente. <br><br>
                Diferente de outros tipos de amor, não depende de emoção intensa nem de vínculo prévio. Ele se expressa como uma escolha contínua, orientada pela vontade e pelo compromisso com o outro. <br><br>
                É um amor que se revela mais nas atitudes do que nos sentimentos, mais na constância da decisão do que na variação das emoções. Não busca possuir, não exige reciprocidade e não se sustenta no impulso — mas na permanência e na intenção de fazer o bem. <br><br>
                É o amor que permanece, mesmo quando não há motivo para permanecer.',

            'caracteristicas' => [
                'altruísmo',
                'compaixão',
                'doação',
                'perdão',
                'incondicionalidade',
                'intencionalidade'
            ],

            'virtudes' => [
                'paciência',
                'bondade',
                'humildade',
                'misericórdia',
                'justiça',
                'fidelidade'
            ],

            'riscos' => [],

            'referencias' => [
                '<a href="https://www.bibliaonline.com.br/acf/jo/3/16">João 3:16</a> — expressão máxima do amor sacrificial.',
                '<a href="https://www.bibliaonline.com.br/acf/1co/13">1 Coríntios 13</a> — definição clássica do amor.',
                '<a href="https://www.bibliaonline.com.br/acf/mt/5/44">Mateus 5:44</a> — amar até os inimigos.',
                '<a href="https://pt.wikipedia.org/wiki/Agostinho_de_Hipona">Santo Agostinho</a> — o amor como ordenação da vontade.',
                '<a href="https://pt.wikipedia.org/wiki/Tom%C3%A1s_de_Aquino">São Tomás de Aquino</a> — amor como ato da vontade orientado ao bem.'
            ]
        ];
    }
}
