<?php

namespace App\Models\Amor\Types;

use App\Models\Amor\Contracts\Amor;

class Eros implements Amor
{
    public function detalhes(): array
    {
        return [
            'tipo' => 'Eros',

            'slogan' => 'O amor do desejo, marcado pela paixão e intensidade.',

            'descricao' => 'Eros é o <b>amor do desejo</b>, marcado pela <b>atração</b>, <b>paixão</b> e <b>intensidade emocional</b>. Está profundamente ligado ao impulso de união, tanto física quanto emocional, sendo frequentemente associado ao encantamento inicial entre duas pessoas. Diferente de formas mais estáveis como a Philia, Eros é <b>imediato</b>, <b>envolvente</b> e muitas vezes avassalador. <br><br>
                Em <a href="https://pt.wikipedia.org/wiki/O_Banquete" target="_blank"><b>O Banquete</b></a>, de <a href="https://pt.wikipedia.org/wiki/Plat%C3%A3o" target="_blank"><b>Platão</b></a>, Eros é apresentado como uma força que pode se elevar do desejo físico à contemplação do belo e do verdadeiro. Essa ideia encontra eco na tradição cristã, onde o amor humano, inclusive o desejo, não é negado, mas chamado a ser <b>ordenado</b> e direcionado para o bem. <br><br>
                Para <a href="https://pt.wikipedia.org/wiki/Agostinho_de_Hipona" target="_blank"><b>Santo Agostinho</b></a>, o problema não está no desejo em si, mas em <b>amar desordenadamente</b> — quando se ama algo de forma desproporcional ou fora do seu devido lugar. Assim, Eros, quando desordenado, pode levar à perda de equilíbrio; mas quando bem orientado, pode se tornar um impulso legítimo em direção ao amor verdadeiro. <br><br>
                Já <a href="https://pt.wikipedia.org/wiki/Tom%C3%A1s_de_Aquino" target="_blank"><b>São Tomás de Aquino</b></a> entende o amor como um movimento da vontade em direção ao bem. Nesse sentido, o desejo presente em Eros precisa ser guiado pela razão e pela virtude, para que não se torne apenas busca de prazer, mas também expressão de um bem maior. <br><br>
                Diferente de Philia, que se constrói, Eros <b>irrompe</b>. Ele é o ponto de partida de muitos relacionamentos, mas raramente se sustenta sozinho. Quando não equilibrado com elementos como confiança, respeito e convivência, tende a se tornar instável e passageiro. <br><br>
                Sob uma leitura mais interpretativa, Eros pode ser entendido como o <b>amor que consome</b>, o amor que <b>busca proximidade imediata</b> e o amor que <b>vive do agora</b>. É intenso, mas volátil; poderoso, mas transitório. <br><br>
                A própria Escritura alerta para a força do desejo: <br>
                <i>"Pois tudo o que há no mundo — a cobiça da carne, a cobiça dos olhos e a ostentação dos bens — não procede do Pai, mas do mundo."</i> (<a href="https://www.bibliaonline.com.br/acf/1jo/2/16" target="_blank">1 João 2:16</a>) <br><br>
                Ainda assim, o amor humano é reconhecido em sua beleza: <br>
                <i>"Põe-me como um selo sobre o teu coração, como um selo sobre o teu braço; porque o amor é forte como a morte."</i> (<a href="https://www.bibliaonline.com.br/acf/ct/8/6" target="_blank">Cânticos 8:6</a>) <br><br>
                Isso revela que Eros não deve ser negado, mas <b>integrado e elevado</b>, para que não se torne destrutivo, mas parte de um amor mais pleno e ordenado.',

            'expressao' => 'Eros se manifesta na intensidade das emoções e na busca imediata por proximidade. Está presente no desejo de estar perto, no toque, no olhar e na necessidade de conexão constante com o outro. É impulsivo, envolvente e muitas vezes dominante nas fases iniciais de um relacionamento. <br><br>
                Diferente de amores mais estáveis, Eros não se constrói aos poucos — ele surge de forma rápida e intensa, sendo alimentado pela atração, pela novidade e pela idealização. Sua presença é marcada por energia emocional elevada, entusiasmo e forte engajamento afetivo. <br><br>
                Quando orientado apenas pelo impulso, pode se tornar instável e passageiro; mas quando equilibrado por virtudes e guiado por um amor mais profundo, pode ser transformado em algo duradouro e significativo. <br><br>
                É um amor que se expressa no agora, na urgência de sentir, viver e experimentar o outro, mas que encontra sua plenitude quando deixa de apenas consumir e passa também a construir.',

            'caracteristicas' => [
                'paixão',
                'desejo',
                'atração',
                'intensidade emocional',
                'impulsividade',
                'idealização'
            ],

            'virtudes' => [
                'energia emocional',
                'entrega',
                'motivação',
                'iniciativa relacional'
            ],

            'riscos' => [
                'impulsividade',
                'instabilidade',
                'dependência emocional',
                'idealização excessiva',
                'desordem dos desejos'
            ],

            'referencias' => [
                '<a href="https://pt.wikipedia.org/wiki/O_Banquete">O Banquete</a> — reflexão filosófica sobre o amor e sua elevação.',
                '<a href="https://pt.wikipedia.org/wiki/Agostinho_de_Hipona">Santo Agostinho</a> — conceito de amor ordenado e desordenado.',
                '<a href="https://pt.wikipedia.org/wiki/Tom%C3%A1s_de_Aquino">São Tomás de Aquino</a> — o amor como movimento da vontade ao bem.',
                '<a href="https://www.bibliaonline.com.br/acf/ct/8/6">Cânticos 8:6</a> — expressão poética da força do amor.',
                '<a href="https://www.bibliaonline.com.br/acf/1jo/2/16">1 João 2:16</a> — alerta sobre os desejos desordenados.'
            ]
        ];
    }
}
