<style media="screen">
a {
  color: #3973af;
  text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
.indice > ul {
  list-style-type: none;
  padding: 2px;
}
.indice > ul > li {
  margin-top: 10px;
}
.indice > ul > li > ul {
  margin-top: -10px;
}
</style>
<div class="row">
<div id="indice" class="col col-md-4 indice"></div>

<div class="col col-md-8">
<h1>Fastplay Avengard Alfa 1.0</h1>
<p>Esta é a primeira versão de testes de mecânicas do RPG Avengard utilizando um sistema baseado em testes com o dado de 12 faces, e personagens montados em cima de classes, ainda não contemplando regras evolutivas.</p>
<p>Este sistema usará cinco tipos de dados diferentes, com quatro, seis, oito, dez e doze faces, que serão chamados respectivamente no decorrer deste texto de <strong>d4, d6, d8, d10 e d12</strong>.</p>
<p><a href="<?php echo base_url('assets/ficha-avengard-alfa.pdf') ?>" target="_blank">Clique aqui</a> para fazer o download do arquivo para imprimir a ficha de personagem</p>
<h2 id="definindo-atributos">DEFININDO ATRIBUTOS</h2>
<p>Um personagem em Avengard RPG possui seis atributos principais: <strong>força, destreza, astúcia, conhecimento, saúde e sorte</strong>. Eles definirão as características gerais do aventureiro e terão valores que irão variar entre zero e três. Um valor zero em força representaria um personagem franzino, incapaz de usar armas mais pesadas, já um valor três, representaria algo como um halterofilista.</p>
<p><strong>Todo jogador recebe dez (10) pontos para distribuir em seus atributos respeitando uma regra, nenhum atributo pode ter valor superior a três.</strong></p>
<p>A <strong>força </strong>define o tamanho da força física, o quanto se pode carregar, armas que se pode usar e pode impactar no dano que o personagem causa. A <strong>destreza </strong>define a coordenação motora e o quanto as habilidades motoras poderão evoluir, o que interfere diretamente na chance de acerto delas. A <strong>astúcia </strong>representa a inteligência do personagem, e define a evolução máxima das habilidades intelectuais. O <strong>conhecimento </strong>tem seu nome autoexplicativo, define o quanto o personagem tem de conhecimento sobre as coisas. Define a evolução máxima das habilidades cognitivas. A <strong>saúde </strong>representa tanto a saúde física quanto mental do personagem. Ela define pontos de vigor, resistência física e resiliência. Uma boa saúde aumenta consideravelmente as chances de uma vida mais longa. por fim, a <strong>sorte </strong>do personagem determinará o quanto o universo está a seu favor. Ela é utilizada para determinados testes que serão explicados mais à frente.</p>
<h2 id="indicadores">INDICADORES</h2>
<p>Os indicadores são uma série de valores que indicam o valor numérico que o personagem confere àquele status. </p>
<p>O <strong>vigor </strong>indica o quanto o personagem suporta lesões antes que elas se tornem um ferimento sério. O valor inicial de vigor é igual a três vezes a saúde mais 20. Sendo assim, um personagem pode ter seu vigor inicial em 20, 23, 26 ou 29, dependendo do valor do atributo saúde.</p>
<p>O indicador de <strong>ferimentos </strong>revela o quanto o seu personagem está realmente ferido. Quanto mais ferido ele estiver, maior a probabilidade de morte. Esse indicador inicia vazio, ou seja, sem ferimentos.</p>
<p>A <strong>defesa </strong>é o indicativo de proteção de seu personagem, quanto mais alta é sua defesa, mais difícil será de lhe acertarem golpes. Armaduras, itens e talentos podem ampliar este valor.</p>
<p>A <strong>redução de dano </strong>é uma propriedade concedida pela armadura equipada, talentos, itens etc. Todo dano sofrido deverá ser reduzido deste indicador, salvo quando informado o contrário.</p>
<p>A <strong>carga </strong>representa o quanto o personagem consegue carregar ou levantar. O valor de carga é definido por 5 + (força x 5). Este é o valor em kg que um personagem pode carregar sem que sofra nenhum tipo de penalidade. Superando o valor de carga, o personagem recebe 1 de penalidade. Superando o dobro, recebe 2, indo no máximo até 5, pois não poderá carregar mais do que isso. Cada ponto de penalidade reduz um ponto de ação.</p>
<p>Os indicadores de <strong>éter </strong>devem iniciar cheios, eles servirão para os personagens realizarem movimentos especiais, fazer uma interferência narrativa ou usar itens mágicos.</p>
<p>Os indicadores de <strong>fome e sede</strong> devem iniciar vazios em toda ficha. Conforme o personagem for ficando desidratado e desnutrido, esses indicadores serão preenchidos.</p>
<p><strong>Pontos de ação</strong> representam o quanto o personagem pode agir em uma rodada de combate. A quantidade inicial de pontos de ação de cada personagem é dez.</p>
<p>A <strong>fadiga </strong>funciona de forma semelhante aos pontos de ação com a diferença de que eles não se renovam a cada rodada, mas sim descansando 15 minutos após o combate. Os pontos de fadiga podem ser consumidos para complementar pontos de ação faltantes em uma ação desejada, e podem ser gastos total ou parcialmente conforme escolha do jogador. A fadiga inicial é duas vezes a saúde +6.</p>
<p>O espaço para <strong>modificadores temporários</strong> é deixado para que o jogador possa ir anotando estes quando os receber durante a partida. Eles poderão ser tanto positivos quanto negativos.<br /><br /></p>
<h2>CLASSES</h2>
<p>As classes de personagem funcionam como uma diretriz na criação de um personagem, ele define a sua raiz de talentos exclusiva, que combinada com os talentos complementares podem gerar inúmeras possibilidades de personagem. Além da raiz de talentos, a classe oferece uma série de benefícios. Este fastplay conta com seis classes: bárbaro, duelista, assassino, ocultista, guerreiro e ladino.</p>
<p>Após escolher sua classe, o jogador poderá escolher mais dois talentos complementares. Este fastplay não contempla o sistema de evolução de personagens. Abaixo de cada classe encontra-se seus talentos exclusivos. Esses talentos podem consumir pontos de ação (pa), fadiga ou até mesmo o éter.</p>
<h4>Bárbaro</h4>
<p>Personagem com foco em dano massivo. Seu principal atributo é a força, por isso, aconselha-se força 3 para otimizar seus talentos natos.</p>
<p><strong>VIRTUDES</strong></p>
<p>Aumenta a defesa com o valor de sua força caso esteja usando armadura leve.</p>
<p>Não sofre a penalidade da armadura se estiver usando uma armadura sem metal.</p>
<p>Ganha 2 PAs para se movimentar caso use armaduras leves.</p>
<p>Caso tenha 3 de força, desconsidera 1pa quando usa machado ou malho.</p>
<p>Ignora o dano caso ele seja igual ou menor ao valor da redução de dano da armadura somado de sua força. Caso o dano seja superior, apenas apenas sofre a redução da armadura.</p>
<p><strong>TALENTOS</strong></p>
<p><strong>Agredir </strong>O bárbaro pode adicionar o valor de sua força ao dano de armas de contusão ou machados. (1pa)</p>
<p><strong>Golpe Tangente </strong>Usando uma arma de duas mãos, o bárbaro pode acertar com um só golpe um número de adversários equivalente a seu valor de força. Os adversários precisam estar adjacentes a ele. (3pa)</p>
<p><strong>Destruir </strong>Todos os seus ataques darão o dano máximo durante x rodadas de combate. O valor de x é igual a força. (1éter)</p>
<h4>Duelista</h4>
<p>O duelista é um personagem se constrói sobre sua habilidade com espadas. O quanto maior for a destreza do duelista, melhor serão suas defesas e ataques.</p>
<p><strong>VIRTUDES</strong></p>
<p>Usando armaduras médias ou leves e espada, adiciona o seu nível de habilidade com espadas a sua defesa.</p>
<p>Toda ação que use espadas, custa 1 ponto a menos.</p>
<p><strong>TALENTOS</strong></p>
<p><strong>Perícia</strong> Concentrando em sua habilidade, o personagem faz um ataque usando o dobro do nivel de sua habilidade em espadas. (1pa)</p>
<p><strong>Refinamento</strong> Sempre que o (fa) da jogada for 4 ou mais, o duelista terá direito a mais um dado de dano. Deverá usar o dado cujo valor máximo cabe no (fa) obtido. Ex: um (fa) 7 recebe-se 1d6 de bônus de dano.</p>
<p><strong>Contra Ataque</strong> Quando receber um ataque, no qual o adversário não é bem sucedido, caso o (fa) seja -4 ou menor, o duelista pode aplicar um ataque simples com a arma equipada, logo em seguida, sem que se consuma pontos de ação.</p>
<p><strong>Fôlego</strong> Aumenta x (x = destreza) pontos de ação até o fim do combate. (1éter)</p>
<h4>Assassino</h4>
<p>O assassino é um personagem que se utiliza de subterfúgios para superar seus adversários, por esse motivo depende da astúcia o mais elevada possível.</p>
<p><strong>VIRTUDES</strong></p>
<p>Adiciona a astúcia à defesa para armaduras que não causam penalidade a furtividade.</p>
<p>Caso ataque fora do campo de visão do adversário, aplica a astúcia ao dano.</p>
<p>Todo veneno aplicado por este personagem causa o dobro do efeito.</p>
<p><strong>TALENTOS</strong></p>
<p><strong>Finta</strong> Finge-se um falso ataque na intenção de pegar o adversário desprevinido, gerando um bônus equivalente a astucia ao atacar. (1pa) Vale para todos os ataques no turno deste personagem.</p>
<p><strong>Pontos Vitais</strong> Desfere um ataque de lâminas curtas mais cuidadoso, mirando em pontos vitais de seu adversário. Consome x vezes o valor de um ataque comum, e causa x vezes o dano do mesmo. Esse ataque recebe +x no teste de acerto, e +2x no dano. O valor de x deve ser superior a 1 para usar este talento.</p>
<p><strong>Ataque Furtivo</strong> Não pode ser realizado durante um combate, pois o inimigo não pode estar atento. O narrador deverá definir uma dificuldade para um teste de furtividade para que o personagem chegue até o seu alvo sem ser perbebido. caso passe neste teste, deve-se considerar morte automática para qualquer criatura de pontuação igual ou inferior a do assassino. Caso seja superior, o dano é proporcional. (1éter)</p>
<h4>Ocultista</h4>
<p>A sensibilidade para os talentos ocultos não é algo que possa ser aprendido, o personagem deve nascer com este dom. Possuir o dom não basta para que se desenvolvam as habilidades ocultistas, o personagem deve aperfeiçoá-las através dos estudos. Por isso o ocultista depende de um alto valor em conhecimento.</p>
<p><strong>VIRTUDES</strong></p>
<p>Pode usar os talentos do oculto.</p>
<p><strong>TALENTOS</strong></p>
<p><strong>Proteção Espiritual</strong> Acrescenta o valor de seu conhecimento a sua defesa por uma rodada, desde de que não esteja usando armadura metálica. (1pa). Pode ser acionado a qualquer momento.</p>
<p><strong>Confusão Mental</strong> Causa confusão na mente do alvo durante um ataque, facilitando o acerto do golpe gerando um bônus no valor de seu conhecimento no ataque. (1pa). Pode ser usado no turno de outros pesonagens para facilitar seus ataques.</p>
<p><strong>Analisar</strong> O ocultista consulta rapidamente o plano etéreo para identificar pontos fracos no adversário. O qunto mais vantajosa for a informação, mais difícil deve ser o teste de ocultismo. (2pa)</p>
<p><strong>Restaurar</strong> O ocultista pode restaurar toda a sua fadiga. (1éter)</p>
<p><strong>Falar Com os Mortos:</strong> (ritual 5min) Com um pequeno ritual sobre os restos mortais de alguém, o ocultista pode invocar o espírito do falecido para realizar um diálogo. A primeira pergunta tem dificuldade 6, para cada pergunta extra, a dificuldade aumenta em 1 ponto. Um erro significa que aquele indivíduo não está mais disposto a conversar, e não estará novamente tão cedo.</p>
<p><strong>Drenar Vigor:</strong> (3 fadiga) Deve ser utilizado com uma arma preparada em um ritual anterior pelo próprio ocultista. O jogador sinaliza que utilizará esta habilidade antes de atacar, consumindo os 3 pontos de ação. Caso algum dano seja causado, ele se converte em vigor para o ocultista. Não pode ser realizado com um ataque a distância.</p>
<p><strong>Conexão Neural:</strong> (5 fadiga) Deve ser utilizado com uma lâmina preparada em um ritual anterior pelo próprio ocultista. Deve ser utilizada assim que se acertar um ataque com a arma preparada. Ao tocar o sangue da vítima saber-se-á das intenções dela enquanto o sangue banhar a lâmina, garantindo +3 de defesa para o possuidor da lâmina contra ataques do alvo.</p>
<p><strong>Lâmina Etérea:</strong> (3 fadiga) Deve ser utilizado com uma arma preparada em um ritual anterior pelo próprio ocultista. O jogador sinaliza que utilizará esta habilidade antes de atacar, consumindo os 3 pontos de ação. O ataque atinge diretamente o espírito do adversário, por isso desconsidera a redução de dano.</p>
<h4>Paladino</h4>
<p>O paladino é um personagem que provém de um treinamento militar, seja representando um senhor, organização ou ideologia. Ter uma saúde plena é o que garante longevidade a este personagem.</p>
<p><strong>VIRTUDES</strong></p>
<p>Pode desconsiderar o dobro do valor de sua saúde em pontos da penalidade da armadura e escudo.</p>
<p>Recebe mais 3x a saúde em pontos de vigor</p>
<p>Sempre que um dado de dano resultar em 1, deverá se considerar o valor máximo.</p>
<p><strong>TALENTOS</strong></p>
<p><strong>Recuperação</strong> Recupera o valor de sua saúde em pontos de vigor. (4pa). Pode ser usado no máximo uma vez por turno.</p>
<p><strong>Contra Ataque</strong> Quando receber um ataque, no qual o adversário não é bem sucedido, caso o (fa) seja -4 ou menor, o paladino pode aplicar um ataque simples com a arma equipada, logo em seguida, sem que se consuma pontos de ação.</p>
<p><strong>Supressão</strong> Sempre que um personagem adjacente errar um ataque contra o paladino, recebe-se 1d6 de dano. Dura um combate. (1éter)</p>
<h4>Ladino</h4>
<p>O ladino é aquele sujeto que se projeta a margem da sociedade, o que lhe garante nenhuma rotina e muitas incertezas. Por esse motivo ele dependerá muito de sua sorte.</p>
<p><strong>VIRTUDES</strong></p>
<p>Soma o valor de sua sorte a sua defesa.</p>
<p>Não recebe penalidade quando usa armaduras leves com penalidade -1 ou -2.</p>
<p>O ladino pode escolher úm número de 2 a 11 no d12 (número da sorte). Sempre que estiver fazendo um teste, será um acerto, e sempre que estiver recebendo um ataque, será um erro.</p>
<p><strong>TALENTOS</strong></p>
<p><strong>Briga de Rua</strong> Todo dano causado pelo ladino, durante essa rodada, deve ser acrescido do valor de sua sorte. (1pa)</p>
<p><strong>Golpe de Sorte</strong> Caso um teste resulte em seu número da sorte, o ladino pode optar por dobrar o custo em PAs do ataque para triplicar o dano.</p>
<p><strong>Azar</strong> Sempre que atacado, e o adversário obtiver do d12 o número da sorte do ladino, ele poderá escolher um destino trágico para o ataque, como por ex: o castiçal do salão cair sobre o adversário. Um teste de sorte deverá ser feito, e o narrador deverá escolher uma dificuldade para a jogada proporcional ao tamanho da desgraça. (2pa)</p>
<p><strong>Abençoado</strong> Todos os ataques realizados contra o ladino neste combate terão sua sorte como penalidade no teste. (1éter)</p>
<h4>Talentos Complementares</h4>
<p>Os talentos complementares podem ser adquiridos por qualquer personagem, independente do arquétipo escolhido. Muitos dos talentos descritos abaixo possuem algum pré-requisito.</p>
<p><strong>Parede de Escudos:</strong> A cada aliado adjacente usando escudo, este personagem recebe +1 em sua defesa, podendo acumular no máximo até +3.</p>
<p><strong>Força Bruta:</strong> Usando um machado ou uma arma de contusão, este personagem pode ignorar um valor da defesa de seu oponente equivalente a sua força.</p>
<p><strong>Domínio:</strong> Todo dado de dano que resultar em 1, pode ser rolado novamente.</p>
<p><strong>Finesse:</strong> Todo veneno aplicado têm +2 no nível de dificuldade no teste para resistir.</p>
<p><strong>Visão Ampliada:</strong> A única área fora do campo de visão do personagem é o quadrado que se encontra oposto a direção do personagem, todos os outros 7 são considerados área de visão..</p>
<p><strong>Prontidão:</strong> Sempre que alguém errar um ataque contra este personagem ele terá +1 de bônus caso ataque quem cometeu o erro.</p>
<p><strong>Testar o Oponente:</strong> Cada ataque realizado faz com que o personagem aprenda sobre os movimentos de seu adversário, gerando +1 de bônus cumulativo para cada novo ataque ao mesmo oponente. O bônus nunca poderá ser superior a astúcia.</p>
<p><strong>Antecipar Ataque: </strong>(astúcia 2) Sempre que sofrer um ataque, o valor obtido no D12 para aquele ataque, será um erro caso se repita em um ataque seguinte. Isso se aplica individualmente a todos que o atacarem.</p>
<p><strong>Grito de Guerra: </strong>(1 éter) (força 3) Durante um combate, o personagem pode lançar um grito de guerra como ação livre. Com isso, cada aliado seu recebe o bônus de +1d4 em todas as jogadas durante duas rodas. O bônus se aplica tanto a testes quanto a dano.</p>
<p><strong>Identificar Vulnerabilidade:</strong> (1 éter) (astúcia 2) Dentro ou fora de combate, o personagem pode identificar uma vulnerabilidade física, emocional ou social de um alvo, caso exista alguma. Essa vulnerabilidade pode ser utilizada em combate ou para chantagear uma vítima.</p>
<p><strong>Audição Apurada:</strong> (astúcia 2) Toda criatura que o personagem possa ouvir, é como se ele pudesse ver ela, não importando se ela esteja invisível ou atrás de alguma parede.</p>
<p><strong>Saque Rápido:</strong> (armas de projétil 2) Reduz o consumo de tempo de recarga do arco, de 5 para 2 PA e da besta de 8 para 4 PA.</p>
<p><strong>Tiro Longo:</strong> (armas de projétil 2) A penalidade pela distância de um disparo de arco ou besta é reduzida pela metade, arredondada para baixo.</p>
<p><strong>Tiro Fatal: </strong>(1 éter) (armas de projétil 2) O jogador deve gastar 1 turno mirando, e no turno seguinte poderá fazer o ataque com arco ou besta, com -2 de penalidade. Em caso de acerto, o dano é dobrado.</p>
<p><strong>Determinação:</strong> (Força 2) O personagem pode lançar mais 1d4 em qualquer teste para resistir ser derrubado ou atordoado.</p>
<p><strong>Bom de Briga:</strong> (1 éter) (Saúde 2) Quando o vigor chegar a zero, e houver sucesso no teste de saúde, o personagem recupera todo o vigor.</p>
<p><strong>Violência: </strong>(6 PA) (força 2) Usando machado de duas mãos ou um malho o personagem adicionará violência em seu ataque, o adversário deverá fazer um teste de saúde (nd8), ou entrará em choque por 1d4 turnos.</p>
<h2 id="habilidades">HABILIDADES</h2>
<p>Habilidades são competências que atribuímos a nossos personagens, e cada uma delas está indexada a um atributo, destreza, astúcia e conhecimento. Quanto maior o atributo, mais habilidades relacionadas a ele o personagem terá, e mais evoluídas elas serão.</p>
<p>Um atributo nível zero, concede uma habilidade indexada a ele em nível básico (zero). Um atributo nível 1 concede uma em nível básico e outra nível 1. Um atributo nível 2 concede 3 habilidades nos níveis básico, 1 e 2. Por fim, seguindo a ordem, um atributo nível 3 concede 4 habilidades, uma em básico, outra em 1, outra em 2 e mais uma em 3.</p>
<p><strong>Neste fastplay, após o jogador escolher todas as suas habilidades, ele deverá subir um nível em cada uma delas</strong></p>
<h3 id="testando uma habilidade">Testando Uma Habilidade</h3>
<p>Após anotar corretamente suas habilidades em sua ficha de personagem, o jogador poderá usá-las durante as aventuras. Para fazer um teste de habilidade, o jogador diz qual habilidade irá usar e lança um D12, o valor obtido no dado deve ser somado ao nível da habilidade. Caso o resultado seja maior ou igual a sete, significa que teve-se sucesso no teste, caso o valor resultante seja menor, o personagem errou o que tentou fazer. Esses testes são chamados de testes simples, pois não existe bônus ou penalidades aplicadas a eles.</p>
<p>É importante lembrar, que em todo teste de habilidade, sempre que o dado apresentar 1, é um erro, e sempre que apresentar 12, é um acerto, independente do resultado final da soma.</p>
<p>Pode ser que o jogador precise que seu personagem faça uma ação, que resulte em um teste de uma habilidade que ele não possui. Nesse caso o nível da habilidade deve ser considerado como -2. </p>
<h3>Definindo Facilidades e Penalidades</h3>
<p>Um teste de habilidade padrão, têm dificuldade 7, o que significa que se o resultado da soma do d12 com o bônus da habilidade testada for igual ou superior a 7, o teste foi um acerto. Entretanto, alguns testes poderão ser considerados mais fáceis ou difíceis do que o normal e caberá ao narrador definir a dificuldade do teste.</p>
<p>Um teste considerado fácil teria uma dificuldade 4, um médio dificuldade 7, um difícil teria dificuldade 10 e um muito difícil teria dificuldade 13. O narrador pode escolher qualquer valor entre 4 e 13 para ditar a dificuldade de um teste.</p>
<p>A dificuldade de um teste de habilidade pode variar de forma mais material, como ao tentar caminhar furtivamente sobre um chão pedregoso, saltar sobre um vão relativamente maior do que o normal etc. Também pode ter um caráter mais subjetivo, e nesse caso, ela poderá depender da descrição da ação do jogador. Dizer que vai procurar por armadilhas em um determinado cômodo, deve ser mais difícil do que dizer que vai procurar armadilhas na porta do cômodo. Quanto mais específico é o detalhamento da ação, mais fácil deve ser o teste. O mesmo para tentar convencer um NPC de algo, quanto melhor ou pior o argumento, mais fácil ou difícil o teste.</p>
<h3>Fator de Acerto (fa)</h3>
<p>Ao realizar um teste de habilidade de dificuldade 7, por exemplo, uma jogada que resulte em 10 será um acerto, assim como uma jogada que resulte em 13. É importante perceber que quem obteve 10, acertou por 3 pontos a mais do que se precisava, e quem obteve 13, acertou por 6 pontos a mais. Esse é o Fator de Acerto (fa), a diferença entre o valor resultante da jogada e a dificuldade imposta pelo narrador.</p>
<p>O Fator de Acerto pode ser positivo, como nos exemplos acima, pode ser negativo, caso o valor resultante da jogada seja menor do que a dificuldade imposta pelo narrador, e pode ser zero, caso a jogada resulte exatamente no valor da dificuldade. Este valor pode ser utilizado pelo narrador, para entender o quão bom foi um acerto ou quão ruim foi um erro.</p>
<h3>Lista de Habilidades</h3>
<p>Abaixo, seguem em ordem alfabética a lista de habilidades utilizadas em Avengard. Cada uma delas descreve um atributo logo após seu nome, este é o atributo ao qual esta habilidade é indexada.</p>
<p><strong>Acampamento (conhecimento):</strong> Habilidade para saber montar um acampamento ou local improvisado para passar a noite. Quanto menos equipamentos e materiais adequados para o fazer, mais difícil será. Inclui a capacidade de fazer uma fogueira usando pederneiras. O personagem pode fazer um acampamento completamente rústico, apenas com materiais coletados no local, mas isso deverá ter uma dificuldade mais elevada, e o local deverá conter os materiais adequados. </p>
<p><strong>Acrobacias (destreza): </strong>Saltar, equilibrar e se esquivar são ações que pedirão um teste de acrobacias. Essa habilidade refere-se aos testes de movimentação corporal que exijam coordenação motora e equilíbrio. Um salto complicado, uma pirueta durante o combate, escalar uma parede e etc. É sempre bom ter acrobacias como habilidade.</p>
<p><strong>Alfaiataria (conhecimento):</strong> Irá lidar com tudo que envolve couro e tecido. Saberá trabalhar desde o processo de extração destes materiais até sua aplicação. Poderá fazer roupas e sapatos, armaduras, equipamentos para montaria e semelhantes.</p>
<p><strong>Alquimia (conhecimento):</strong> Capacidade de manipular os elementos do Éter. É a habilidade fundamental de todo alquimista. (não utilizável no fastplay).</p>
<p><strong>Armadilhas (astúcia):</strong> Esta habilidade contempla tanto a capacidade de se fazer armadilhas complexas, como de detectar armadilhas em um ambiente.</p>
<p><strong>Armas de haste (destreza):</strong> Contempla o uso de toda arma que possua uma haste longa, como a lança arpão. Este tipo de arma pode ser usada para ataques mais distantes que as demais, tendo 1 quadrado (1 metro) a mais de alcance. Estas armas são muito eficientes em infantarias militares, entretanto, em combates mais desorganizados, elas são mais lentas para se mudar a direção de ataque (com exceção do bastão).</p>
<p><strong>Armas de impacto (destreza):</strong> Este grupo inclui o tacape, maça, martelo, mangual e malho.</p>
<p><strong>Armas de projétil (destreza):</strong> Contempla toda arma que necessite de munição, como a besta, o arco, a zarabatana e etc. A zarabatana não detém a capacidade de causar dano por si só, ela geralmente é utilizada para a aplicação de venenos a distância. </p>
<p><strong>Arqueologia (conhecimento):</strong> Ciência que estuda costumes, cultura e tecnologia dos antigos habitantes de Avengard, através de fósseis, artefatos, monumentos etc. que restaram deles.</p>
<p><strong>Arremesso (destreza):</strong> É a habilidade de arremessar armas e objetos. Contempla o arremesso de dardos, machadinhas, arpões, pedras e etc. Somente o arremesso.</p>
<p><strong>Arrombamento (conhecimento):</strong> Serve para abrir fechaduras, arrombar portas ou janelas, abrir grilhões e etc. O ato pode requerer ferramentas específicas.</p>
<p><strong>Arte (conhecimento):</strong> Compreende toda a gama artística como a música, pintura, escultura, poesia etc.</p>
<p><strong>Carpintaria (conhecimento): </strong>É a habilidade de preparar a madeira e fazer objetos com ela. O carpinteiro pode trabalhar fazendo armas, escudos, móveis, papel e tudo que envolva o uso de madeira, como armas de cerco a castelos.</p>
<p><strong>Combate desarmado (destreza): </strong>Serve para se combater usando o próprio corpo como arma. Garras e soqueiras são acessórios que usados com esta habilidade tornam ela mais eficiente. Também deve ser usado para imobilização de um inimigo, tentativas de se derrubar no chão e ações relativas.</p>
<p><strong>Comoção (astúcia): </strong>sempre que se desejar convercer alguém sobre alguma coisa, a habilidade utilizada é a comoção. Comover inclui atos como passar a lábia em alguém, ser dissimulado, seduzir e qualquer outra atividade relacionada. </p>
<p><strong>Culinária (conhecimento): </strong>Utilizada para fazer qualquer tipo de preparo alimentício. </p>
<p><strong>Disfarce (astúcia):</strong> habilidade de se disfarçar permite ao personagem a ocultação de sua real identidade em público, a mimetização de seu estado emocional e a capacidade de se camuflar tornando-se perceptível aos desatentos. O disfarce não permite se passar por alguém que o alvo do ludíbrio conheça. </p>
<p><strong>Escalar (conhecimento): </strong>Trata-se de saber escalar superfícies difíceis com equipamentos necessários para realizar a tarefa. Cada situação demandará certos equipamentos. Escaladas que podem ser feitas sem equipamentos devem usar a habilidade acrobacias. Um escalador profissional confere nível básico nesta habilidade para qualquer pessoa que escale junto dele.</p>
<p><strong>Espadas (destreza): </strong>habilidade que norteia o uso de todo tipo de espada, como o sabre, espada curta, a bastarda e montante.</p>
<p><strong>Fauna (conhecimento): </strong>Trata do personagem conhecer o mundo animal. Pode-se conhecer os costumes e habitat de determinada espécie, formas de se proteger, domesticar e adestrar.</p>
<p><strong>Furtividade (destreza): </strong>é a capacidade do personagem de caminhar sem fazer barulho. A armadura equipada, os itens que se esta carregando e o tipo de solo deverão influenciar na dificuldade deste teste.</p>
<p><strong>Furto (astúcia): </strong>pegar ou colocar algo no bolso de alguém exigirá a habilidade furto. Saber como destravar um cadeado, janela e etc.</p>
<p><strong>Heráldica (conhecimento): </strong>conhecimento sobre símbolos da sociedade, brasões, estilos. Pode-se identificar a que cultura um item provém.</p>
<p><strong>Investigação (astúcia): </strong>sempre que o personagem procurar por uma passagem secreta, um item escondido ou tentar entender a cena de um crime, ele deverá usar a habilidade de investigação. Esta habilidade também pode ser usada para ocultar pistas.</p>
<p><strong>Jogo (astúcia): </strong>Utilizada quando o personagem participa de qualquer jogo que exija de seu intelecto.</p>
<p><strong>Lâminas Curtas (destreza): </strong>contempla as armas com lâminas de no máximo 30 centímetros, como facas e adagas. A habilidade contempla tanto o uso da arma arremessando-a como no uso em mãos, em combate corpo-a-corpo.</p>
<p><strong>Machados (destreza): </strong>contempla o uso de todo tipo de machado no combate corpo-a-corpo.</p>
<p><strong>Metalurgia (conhecimento): </strong>é a habilidade de fazer e moldar ferro. Com o equipamento adequado, o ferreiro pode extrair o metal da natureza e fazer ou consertar objetos de ferro, como armas, armaduras e utensílios domésticos.</p>
<p><strong>Misticismo (conhecimento):</strong> habilidade que consiste no domínio do Éter. Não será possível a realização de magias, como faziam os antepassados, mas pode-se identificar magias e itens mágicos, cancelar encantamentos, localizar magias etc.</p>
<p><strong>Naturalismo (conhecimento):</strong> habilidade que consiste no domínio do conhecimento da natureza. Saber o que se pode ou não comer e seus efeitos, identificar determinadas plantas ou espécies de animais e suas peculiaridades.</p>
<p><strong>Ocultismo (conhecimento):</strong> habilidade que consiste no domínio do trato com o sobrenatural, que varia de pequenos feitiços até a lida com seres sobrenaturais.</p>
<p><strong>Prestidigitação (destreza): </strong>é a capacidade de realizar movimentos extremamente coordenados com as mãos. Truques de mágica com moedas, cartas e etc.</p>
<p><strong>Rastreamento (conhecimento): </strong>Consiste na capacidade de se rastrear um animal ou pessoa pelos rastros deixados pelo caminho.</p>

<!-- CAPÍTULO DE COMBATE -->

<h2>COMBATE</h2>
<p>Muitas das regras de combate dependerão de distância e disposição dos atores no campo de batalha. Para que todos tenham visibilidade sobre a situação, aconselha-se o uso de um tabuleiro quadriculado, onde peças podem representar os envolvidos. Cada quadrado representa a área de 1,5 metro, e só pode ser ocupado por um personagem. O tamanho mais utilizado é com quadrados de 2,5 cm de lado para peças de até 3 cm de altura. Aconselha-se um tabuleiro que tenha no mínimo 20x30 quadrados.</p>

<h3>Definindo a iniciativa</h3>
<p>Antes de se iniciar o combate é importante definir a ordem em que os envolvidos irão atuar, este teste é chamado de teste de iniciativa, e ele pode ocorrer de duas maneiras: surpresa ou declarada.</p>
<p>Quando uma das partes surpreende a outra pegando-a desprevenida, entende-se que o grupo foi surpreendido, e nesse caso, o lado que surpreendeu tem a iniciativa do combate. Somente quando todos os personagens do lado que surpreendeu tiverem executado suas ações é que o lado surpreendido poderá executá-las. A ordem de qual personagem de cada lado agirá primeiro pode ser definida pelo grupo.</p>
<p>A outra situação de combate é quando ela acontece de forma declarada, e as duas partes estão cientes do resultado inevitável. Nesse caso deve-se fazer um teste de iniciativa. O teste de iniciativa nada mais é do que um teste individual de astúcia. Os personagens que obtiverem maior valor no teste agem primeiro.</p>

<h3>Campo de Visão</h3>
<p>A frente de um personagem sempre deve estar apontando para um dos lados ou cantos do quadrado do qual ele se encontra, e sua área de visão é sempre de 180°. Considerando o ângulo, todo o restante deve ser considerado costas. Na ilustração, a área verde representa o campo de visão, e a vermelha representa as costas.</p>
<img src="<?php echo base_url('assets/img/campo-de-visao-min.png') ?>" alt="" />

<h3>A Rodada de Combate</h3>
<p>O combate em Avengard é dividido em rodadas. Durante a rodada, cada um dos personagens deve gastar os seus <strong>pontos de ação</strong> na ordem definida pela iniciativa. Assim que acabar esse consumo de pontos, um jogador deve passar a vez para o próximo. Os personagens que agem antes, não precisam comsumir todos os seus pontos de imediato, eles podem "guardar" pontos (alguns ou todos eles) para usar depois da ação de algum outro ator. A rodada acaba quando ninguém mais quer usar os pontos, ou eles se esgotaram. Nesse momento deve-se renovar os pontos de ação de todos, e iniciar a nova rodada.</p>
<p>A <strong>fadiga</strong> pode ser consumida durante a rodada como pontos de ação, mas diferente deles, ela não se renova ao final da rodada, apenas ao final do combate. Existe o caso do personagem já ter consumido parte ou toda a sua fadiga, e finalizar a rodada sem consumir todos os seus pontos de ação. Nesse caso, ao fim da rodada, esses pontos não consumidos podem ser adicionados a fadiga, desde de que o valor da fadiga nunca ultrapasse seu valor inicial (quando ainda não foi consumida). A fadiga se recupera totalmente descansando-se 15 minutos após o combate.</p>

<h3>Deslocamento</h3>
<p>O deslocamento é a ação mais básica que pode ser feita durante o combate. para se deslocar pelos quadrantes, gasta-se 1 ponto de ação por quadrante avançado, incluindo movimentos diagonais. É possível que durante o combate o personagem resolva subir em algum lugar. Caberá ao narrador definir quantos pontos de ação gastaria-se para praticar tal ação.</p>

<h3>Ataque</h3>
<p>Atacar um adversário não é nada mais do que um teste da habilidade relacionada a arma. A grande diferença é a dificuldade do teste, que será determinada pelo alvo atacado em seu valor de defesa. Existem dois movimentos que o oponente poderá utilizar para aumentar sua defesa, aparar ou esquivar, entretanto esses movimentos consomem pontos de ação. Caso os pontos de ação tenham acabado, ele poderá utilizar sua fadiga, e caso essa ta,bém tenha se esgotado, não poderá aumentar sua defesa.</p>
<p>Em Avengard pode-se realizar 3 tipos de ataques, cortante, perfurante ou contundente, o que define isso é a arma utilizada para realizá-lo. Algumas armas poderão realizar tanto ataques cortantes como perfurantes. Armas que possuem o dano corte ou perfuração, como as espadas, deverá se consumir (1pa) a mais para utilizar o golpe perfurante.</p>
<p>O consumo de pontos de ação em um ataque varia com relação a arma utilizada, e na tabela de armas estará descrito o consumo representado por cada uma delas. Alguns arquétipos poderão subverter esse consumo de acordo com seus talentos.</p>

<h3>Ataque Forte</h3>
<p>É o ato de concentrar dois ou mais golpes em um único ataque, para garantir causar dano em adversários que possuam alta redução de dano. Um ataque de faca custa 3 pontos de ação e causa 1d6 de dano. em um turno, um personagem que poderia fazer 3 ataques com a faca consumindo 3 PA em cada ataque, pode fazer um único ataque consumindo 9PA e conferindo 3d6 de dano. Isso é o ataque forte. Este tipo de ataque pode ser vantajoso em algumas situações, mas pode ser uma desvantagem em outras.</p>

<h3>Ataque Pelas Costas</h3>
<p>O ataque pelas costas é um tipo de ataque específico onde o atacante tem 1d4 de bônus na jogada de ataque. Para receber esse bônus deve-se respeitar alguns critérios: primeiramente o ataque não pode ser realizado por uma arma de longa distância, têm que ser realizado com o atacante fora da área de visão do oponente e têm que ter iniciado o seu turno fora dessa área de visão.</p>

<h3>Armas de Projétil</h3>
<p>O ataque com arcos ou besta têm algumas diferenças do ataque tradicional. Por usarem munição, essas armas precisam ser carregadas antes de serem usadas, por esse motivo elas apresentam dois valores como consumo de pontos de ação. O primeiro valor é referente ao tempo de carga, e o segundo ao tempo de disparo. Outro fator importante é que contra essas armas, o alvo não pode se esquivar ou aparar, a única defesa permitida é o bloqueio.</p>

<h3>Tipos de Dano</h3>
<p>Existem basicamente três formas de se causar dano em um adversário: por corte, contusão ou perfuração. Em alguns casos, armas de contusão poderão ignorar parte do valor de defesa do adversário, já perfurantes poderão ignorar parte da redução de dano.</p>

<h3>Armaduras e Escudos</h3>
<p>As armaduras são equipamentos que irão conferir a base do índice de defesa de um personagem. Elas são divididas em três grupos, leves, médias e pesadas. Cada armadura confere uma penalidade em pontos de ação quando equipadas, observando isso, qualquer personagem pode utilizar qualquer armadura. Algumas classes irão oferecer benefícios quando equipadas com tipos específicos de armaduras, é bom ficar atento.</p>
<p>O uso de um escudo leve é opcional, e não confere nenhuma penalidade, apenas o bônus de +1 a sua defesa. A penalidade pelo seu uso, é a de não poder usar uma arma de duas mãos. Já o escudo pesado confere uma penalidade -1, ou seja, vc perde um ponto de ação caso equipe-o, a não ser que sua classe ou talento diga o oposto.</p>

<h3>Retirando os pontos de vigor</h3>
<p>Toda vez que um ataque resultar em dano, esse valor deve ser subtraído do vigor de quem o recebeu, entretanto, antes o dano deverá ser subtraído da redução de dano concedida pela armadura, seguindo as regras descritas em tipos de dano.</p>
<p>Quando o vigor do personagem chegar a zero o jogador deverá fazer um teste de saúde para permanecer de pé, em caso de falha o personagem entra em colapso e desmaia, em caso de acerto ele permanece ativo mesmo com o vigor zerado. Ao receber dano novamente, um novo teste deverá ser realizado.</p>
<p>No fim do combate o jogador faz um teste de saúde com dificuldade 5, em caso de acerto o personagem acorda com 1 ponto de vigor. Deve-se então marcar 1 ponto de ferimento na ficha. Em caso de erro o personagem morre. Cada ponto de ferimento marcado na ficha aumentará em 1 ponto a dificuldade neste teste de sobrevivência, que inicia em 5. Esse processo se repete até que o personagem morra ou algum milagre aconteça. O narrador poderá estabelecer que ao completar um arco de uma campanha (campanha = série de aventuras) os pontos de ferimentos poderão ser zerados.</p>
<h2>REGRAS COMPLEMENTARES</h2>
<p>Abaixo é listada uma sequência de regras específicas para determinadas situações</p>
<h3>Descansando</h3>
<p>Descansar é fundamental para recuperar-se de um dia desgastante, e para isso um personagem precisa de pelo menos 8 horas de sono. Ao se dormir menos de 8h, o jogador precisará fazer um teste de saúde, com penalidade equivalente ao número de horas faltantes. Em caso de acerto, será como se tivesse plenamente descansado, e em caso de erro, ficará com -1 de penalidade até que consiga fazer um repouso pleno. Sempre que completar 8 horas de sono, estando sem sede ou fome, o personagem recupera todo o seu vigor.</p>
<h3>Compartilhando a Narrativa</h3>
<p>Em Avengard RPG, cabe aos jogadores definirem apenas as ações de seus personagens, os protagonistas, e ao narrador cabe descrever a ambientação e todos os outros personagens, entretanto, existe uma exceção. Todo jogador pode impor uma narração a qualquer momento usando um ponto de éter.</p>
<p>A jogada funciona da seguinte forma, o jogador sinaliza ao narrador que pretende testar a sua sorte, e narra, como se fosse o narrador da aventura, uma pequena frase. O narrador deverá avaliar o quão provável aquilo é, e definir um bônus ou uma penalidade. O jogador fará um teste de sorte, usando a penalidade aplicada, e em caso de acerto, a narração é incorporada na aventura. Existe a possibilidade de o narrador considerar a narração óbvia ou impossível, caso seja óbvia, nenhum teste precisará ser feito, e caso impossível, o narrador recusa a narrativa, e devolve o ponto de éter ao protagonista.<br /><br />Imagine que um grupo de aventureiros precisa entrar em uma caverna para verificar algo, entretanto, nenhum deles possui tocha ou algo que possa iluminar a escuridão. Um dos jogadores resolve testar a sorte, e narra que um amigo seu, no vilarejo anterior, colocou uma tocha em sua mochila. O narrador do jogo deve negar qualquer narração retroativa a momentos já jogados pelo grupo, por isso, dá como impossível. Um outro jogador então também deseja testar a sorte, e narra que ao chegarem na caverna, encontram alguns equipamentos de exploração jogados na entrada. O narrador precisa avaliar se existe algum motivo para isso acontecer, se existe um, pode-se dar um bônus para esse teste, se apenas não existe motivo, pode-se pedir um teste simples, ou se existe um motivo para não ter esse equipamento ali, pode-se definir uma penalidade. O bônus e a penalidade podem variar de 1 a 8, a critério do narrador.</p>
<h3>Atordoamento</h3>
<p>Durante uma aventura, alguns eventos podem acontecer com a consequência de deixar um ou mais personagens atordoados, seja de uma simples pancada na cabeça a uma explosão. Um personagem atordoado perde a resposta aos 5 sentidos do corpo, ou seja, deve ser considerado cego, surdo, mudoe incapaz de sentir cheiro ou sabor, enquanto durar o atordoamento.</p>
<h3>Reputação</h3>
<p>Toda ação tomada pelos personagens dos protagonistas poderá gerar uma reputação para eles, mas diferente do que dizem por aí, que reputação é algo que se constrói, na prática, a coisa é bem mais efêmera. A última ação de conhecimento público que o personagem tomar, será a sua reputação atual. Uma nova reputação apaga a anterior, pois a memória do povo é curta.</p>
<p>Supondo que o grupo ajudou um local a encontrar seu irmão perdido, sem cobrar nada por isso, uma reputação de benfeitor seria adequada, caso cobrassem, talvez o título de mercenários confiáveis fosse mais adequado. Suponhamos que o grupo sequestrou o irmão por dinheiro, isso poderia gerar a reputação de bandidos ou sequestradores.<br /><br />Possuir a reputação não significa sofrer os efeitos dela, para que os efeitos sejam percebidos, a fama tem de chegar aos ouvidos. Para isso, o narrador poderá pedir um teste de sorte e definir se a fama chegou. Para definir um bônus ou penalidade para esse teste, deve-se avaliar o quão possível é da fama ter chego até a pessoa abordada no momento. Se a fama é ruim, um erro no teste indica que sim, se a fama for boa, um acerto.</p>
<h3>Teste de Sorte Coletivo</h3>
<p>Muitas vezes o narrador precisará testar a sorte do grupo, e não de um indivíduo. Esse caso é simples, deve-se pegar o menor dado que tenha mais faces que o número de jogadores. Cada jogador escolhe um número, e joga-se esse dado até que se obtenha o número escolhido. Esse personagem deverá fazer o teste de sorte para o grupo.</p>
<h3>Morte de Personagens do Narrador</h3>
<p>Quando se trata de personagens sem relevancia na narrativa, o narrador pode considerar morte assim que o vigor chegar a zero. Quando a relevancia existe, ele pode considerar a mesma regra utilizada para os personagens dos jogadores.</p>
<h2>ITENS E SUPRIMENTOS</h2>
<p>Cada classe irá definir a quantidade de itens e dinheiro que o personagem irá iniciar a aventura neste fastplay. Avengard possui um sistema monetário simples, baseado em cunhagem de moedas metálicas escalonadas em um arranjo decimal. As moedas são cunhadas dentro de cada reino ou estado, e consequentemente carregam seu brasão. Uma moeda de um reino tem o mesmo valor em reinos vizinhos e por esse motivo os jogadores não precisarão se preocupar com o câmbio. Uma moeda de ouro tem o valor de dez moedas de prata, ou de cem moedas de cobre. Todos os itens abaixo têm o seu valor informado em moedas de cobre.</p>
<h3>Itens Gerais</h3>
<table class="table table-sm table-responsive">
<tbody>
<tr>
<td>
<p>Item</p>
</td>
<td>
<p>$</p>
</td>
<td>
<p>kg</p>
</td>
<td>
<p>Obs</p>
</td>
</tr>
<tr>
<td>
<p>Comida de viagem para 1 dia</p>
</td>
<td>
<p>5</p>
</td>
<td>
<p>0,5</p>
</td>
</tr>
<tr>
<td>
<p>Lanterna de vela</p>
</td>
<td>
<p>140</p>
</td>
<td>
<p>0,5</p>
</td>
</tr>
<tr>
<td>
<p>Vela</p>
</td>
<td>
<p>4</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>Dura 1h</p>
</td>
</tr>
<tr>
<td>
<p>Lanterna óleo</p>
</td>
<td>
<p>230</p>
</td>
<td>
<p>1</p>
</td>
</tr>
<tr>
<td>
<p>Óleo </p>
</td>
<td>
<p>14</p>
</td>
<td>
<p>0,5</p>
</td>
<td>
<p>Dura 6h # 500ml</p>
</td>
</tr>
<tr>
<td>
<p>Tocha</p>
</td>
<td>
<p>18</p>
</td>
<td>
<p>0,5</p>
</td>
<td>
<p>Dura 1h</p>
</td>
</tr>
<tr>
<td>
<p>Bolsa P</p>
</td>
<td>
<p>200</p>
</td>
<td>
<p>0,3</p>
</td>
<td>
<p>Carrega até 1 kg</p>
</td>
</tr>
<tr>
<td>
<p>Bolsa M</p>
</td>
<td>
<p>400</p>
</td>
<td>
<p>0,8</p>
</td>
<td>
<p>Carrega 5 kg</p>
</td>
</tr>
<tr>
<td>
<p>Bolsa G</p>
</td>
<td>
<p>800</p>
</td>
<td>
<p>1,4</p>
</td>
<td>
<p>Carrega 10 kg</p>
</td>
</tr>
<tr>
<td>
<p>Mapa Local</p>
</td>
<td>
<p>150</p>
</td>
<td>
<p>-</p>
</td>
</tr>
<tr>
<td>
<p>Barril</p>
</td>
<td>
<p>500</p>
</td>
<td>
<p>15</p>
</td>
<td>
<p>40 litros</p>
</td>
</tr>
<tr>
<td>
<p>Saco de Dormir</p>
</td>
<td>
<p>1500</p>
</td>
<td>
<p>7</p>
</td>
</tr>
<tr>
<td>
<p>Bolsa de Moedas</p>
</td>
<td>
<p>80</p>
</td>
<td>
<p>0,2</p>
</td>
<td>
<p>Valor máx carregável 900 (1,5 kg cheio)</p>
</td>
</tr>
<tr>
<td>
<p>Cobertor</p>
</td>
<td>
<p>190</p>
</td>
<td>
<p>1,5</p>
</td>
</tr>
<tr>
<td>
<p>Corrente</p>
</td>
<td>
<p>760</p>
</td>
<td>
<p>5</p>
</td>
<td>
<p>10 metros</p>
</td>
</tr>
<tr>
<td>
<p>Bússola primitiva</p>
</td>
<td>
<p>900</p>
</td>
<td>
<p>0,5</p>
</td>
</tr>
<tr>
<td>
<p>Lenha</p>
</td>
<td>
<p>4</p>
</td>
<td>
<p>10</p>
</td>
<td>
<p>Uma noite</p>
</td>
</tr>
<tr>
<td>
<p>Kit pesca</p>
</td>
<td>
<p>35</p>
</td>
<td>
<p>1,5</p>
</td>
</tr>
<tr>
<td>
<p>Gancho escalada</p>
</td>
<td>
<p>40</p>
</td>
<td>
<p>2</p>
</td>
</tr>
<tr>
<td>
<p>Tinta</p>
</td>
<td>
<p>180</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>100 ml</p>
</td>
</tr>
<tr>
<td>
<p>Pena (escrever)</p>
</td>
<td>
<p>8</p>
</td>
</tr>
<tr>
<td>
<p>Papel</p>
</td>
<td>
<p>24</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>1 pergaminho</p>
</td>
</tr>
<tr>
<td>
<p>Algema</p>
</td>
<td>
<p>250</p>
</td>
<td>
<p>1</p>
</td>
</tr>
<tr>
<td>
<p>Balde metal</p>
</td>
<td>
<p>280</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>Para cozinhar # 25cm diâmetro</p>
</td>
</tr>
<tr>
<td>
<p>Corda</p>
</td>
<td>
<p>60</p>
</td>
<td>
<p>5</p>
</td>
<td>
<p>15 metros</p>
</td>
</tr>
<tr>
<td>
<p>Corda de seda</p>
</td>
<td>
<p>300</p>
</td>
<td>
<p>2,5</p>
</td>
<td>
<p>15 metros # dobro da resistência</p>
</td>
</tr>
<tr>
<td>
<p>Corda de teias de aranhas gigantes</p>
</td>
<td>
<p>1500</p>
</td>
<td>
<p>1,2</p>
</td>
<td>
<p>15 metros #triplo da resistência</p>
</td>
</tr>
<tr>
<td>
<p>Porta pergaminhos</p>
</td>
<td>
<p>170</p>
</td>
<td>
<p>0,5</p>
</td>
</tr>
<tr>
<td>
<p>Luneta</p>
</td>
<td>
<p>7000</p>
</td>
<td>
<p>0,9</p>
</td>
</tr>
<tr>
<td>
<p>Tenda P</p>
</td>
<td>
<p>900</p>
</td>
<td>
<p>10</p>
</td>
<td>
<p>Uma pessoa</p>
</td>
</tr>
<tr>
<td>
<p>Tenda M</p>
</td>
<td>
<p>1400</p>
</td>
<td>
<p>15</p>
</td>
<td>
<p>Duas pessoas</p>
</td>
</tr>
<tr>
<td>
<p>Tenda G</p>
</td>
<td>
<p>1900</p>
</td>
<td>
<p>20</p>
</td>
<td>
<p>Quatro pessoas</p>
</td>
</tr>
<tr>
<td>
<p>Tenda GG</p>
</td>
<td>
<p>2400</p>
</td>
<td>
<p>25</p>
</td>
<td>
<p>Dez pessoas</p>
</td>
</tr>
<tr>
<td>
<p>Bolsa d'agua</p>
</td>
<td>
<p>35</p>
</td>
<td>
<p>0,2</p>
</td>
<td>
<p>2 litros</p>
</td>
</tr>
<tr>
<td>
<p>Pedra de amolar</p>
</td>
<td>
<p>30</p>
</td>
<td>
<p>0,5</p>
</td>
</tr>
<tr>
<td>
<p>Armadilha de ursos</p>
</td>
<td>
<p>260</p>
</td>
<td>
<p>5</p>
</td>
</tr>
<tr>
<td>
<p>Frasco de vidro</p>
</td>
<td>
<p>25</p>
</td>
<td>
<p>0,3</p>
</td>
<td>
<p>100ml a 1l</p>
</td>
</tr>
<tr>
<td>
<p>Bandagem</p>
</td>
<td>
<p>10</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>metro</p>
</td>
</tr>
<tr>
<td>
<p>Flauta</p>
</td>
<td>
<p>600</p>
</td>
<td>
<p>0,5</p>
</td>
</tr>
<tr>
<td>
<p>Alaúde</p>
</td>
<td>
<p>1000</p>
</td>
<td>
<p>1,5</p>
</td>
</tr>
<tr>
<td>
<p>Harpa</p>
</td>
<td>
<p>1600</p>
</td>
<td>
<p>3</p>
</td>
</tr>
</tbody>
</table>
<h3>Itens de taverna</h3>
<table class="table table-sm table-responsive">
<tbody>
<tr>
<td>
<p>Item</p>
</td>
<td>
<p>$</p>
</td>
<td>
<p>Obs</p>
</td>
</tr>
<tr>
<td>
<p>Refeição</p>
</td>
<td>
<p>3</p>
</td>
</tr>
<tr>
<td>
<p>Água</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>500 ml</p>
</td>
</tr>
<tr>
<td>
<p>Vinho</p>
</td>
<td>
<p>18</p>
</td>
<td>
<p>500 ml</p>
</td>
</tr>
<tr>
<td>
<p>Cerveja</p>
</td>
<td>
<p>7</p>
</td>
<td>
<p>500 ml</p>
</td>
</tr>
<tr>
<td>
<p>Gim de amora</p>
</td>
<td>
<p>22</p>
</td>
<td>
<p>200 ml</p>
</td>
</tr>
<tr>
<td>
<p>Hidromel</p>
</td>
<td>
<p>28</p>
</td>
<td>
<p>500 ml</p>
</td>
</tr>
<tr>
<td>
<p>Estadia diária</p>
</td>
<td>
<p>15</p>
</td>
<td>
<p>Uma noite</p>
</td>
</tr>
<tr>
<td>
<p>Estadia semanal</p>
</td>
<td>
<p>80</p>
</td>
<td>
<p>Semana </p>
</td>
</tr>
<tr>
<td>
<p>Estadia mensal</p>
</td>
<td>
<p>250</p>
</td>
<td>
<p>Mensal </p>
</td>
</tr>
<tr>
<td>
<p>Banho</p>
</td>
<td>
<p>10</p>
</td>
</tr>
</tbody>
</table>
<h3>Tabela de Armas</h3>
<p>Em Avengard cada arma detém suas peculiaridades e definem drasticamente a estratégia de combate. Ser proficiente em mais de um tipo de arma é algo a ser seriamente considerado. A tabela abaixo resume as propriedades mais importantes de cada arma.</p>
<table class="table table-sm table-responsive">
<tbody>
<tr>
<td>
<p>Arma</p>
</td>
<td>
<p>Dano</p>
</td>
<td>
<p>Tipo</p>
</td>
<td>
<p>F </p>
</td>
<td>
<p>Velocidade</p>
</td>
<td>
<p>Defesa</p>
</td>
<td>
<p>peso</p>
</td>
<td>
<p>valor</p>
</td>
</tr>
<tr>
<td>
<p>Mãos</p>
</td>
<td>
<p>força</p>
</td>
<td>
<p>con</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
</tr>
<tr>
<td>
<p>Faca</p>
</td>
<td>
<p>d6</p>
</td>
<td>
<p>per</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>3</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>250g</p>
</td>
<td>
<p>60</p>
</td>
</tr>
<tr>
<td>
<p>Adaga</p>
</td>
<td>
<p>d8</p>
</td>
<td>
<p>per</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>4</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>350g</p>
</td>
<td>
<p>150</p>
</td>
</tr>
<tr>
<td>
<p>Rapieira</p>
</td>
<td>
<p>d8</p>
</td>
<td>
<p>per</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>4</p>
</td>
<td>
<p>3</p>
</td>
<td>
<p>500g</p>
</td>
<td>
<p>2800</p>
</td>
</tr>
<tr>
<td>
<p>Espada Curta</p>
</td>
<td>
<p>d8+1</p>
</td>
<td>
<p>cor/per</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>5</p>
</td>
<td>
<p>3</p>
</td>
<td>
<p>1kg</p>
</td>
<td>
<p>1300</p>
</td>
</tr>
<tr>
<td>
<p>Espada Bastarda</p>
</td>
<td>
<p>d8+3</p>
</td>
<td>
<p>cor/per</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>6</p>
</td>
<td>
<p>3</p>
</td>
<td>
<p>1,2kg</p>
</td>
<td>
<p>1500</p>
</td>
</tr>
<tr>
<td>
<p>Montante</p>
</td>
<td>
<p>d12+1</p>
</td>
<td>
<p>cor/per</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>7</p>
</td>
<td>
<p>3</p>
</td>
<td>
<p>1,5kg</p>
</td>
<td>
<p>3800</p>
</td>
</tr>
<tr>
<td>
<p>Tacape</p>
</td>
<td>
<p>d6+2</p>
</td>
<td>
<p>con</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>6</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>2,5kg</p>
</td>
<td>
<p>30</p>
</td>
</tr>
<tr>
<td>
<p>Maça / Martelo</p>
</td>
<td>
<p>d6+3</p>
</td>
<td>
<p>con</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>6</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>2kg</p>
</td>
<td>
<p>800</p>
</td>
</tr>
<tr>
<td>
<p>Mangual</p>
</td>
<td>
<p>d6+4</p>
</td>
<td>
<p>con</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>7</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>1,7kg</p>
</td>
<td>
<p>900</p>
</td>
</tr>
<tr>
<td>
<p>Malho</p>
</td>
<td>
<p>2d8+2</p>
</td>
<td>
<p>con</p>
</td>
<td>
<p>3</p>
</td>
<td>
<p>8</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>3kg</p>
</td>
<td>
<p>500</p>
</td>
</tr>
<tr>
<td>
<p>Machadinha</p>
</td>
<td>
<p>2d6+1</p>
</td>
<td>
<p>cor</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>7</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>1,5kg</p>
</td>
<td>
<p>400</p>
</td>
</tr>
<tr>
<td>
<p>Machado</p>
</td>
<td>
<p>d12+4</p>
</td>
<td>
<p>cor</p>
</td>
<td>
<p>3</p>
</td>
<td>
<p>9</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>2,5kg</p>
</td>
<td>
<p>600</p>
</td>
</tr>
<tr>
<td>
<p>Arpão</p>
</td>
<td>
<p>d8+1</p>
</td>
<td>
<p>per</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>6</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>800g</p>
</td>
<td>
<p>140</p>
</td>
</tr>
<tr>
<td>
<p>Zarabatana</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>3/5</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>300g</p>
</td>
<td>
<p>190</p>
</td>
</tr>
<tr>
<td>
<p>Arco Leve</p>
</td>
<td>
<p>d8+2</p>
</td>
<td>
<p>per</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>5/4</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>800g</p>
</td>
<td>
<p>600</p>
</td>
</tr>
<tr>
<td>
<p>Arco Recurvo</p>
</td>
<td>
<p>d8+3</p>
</td>
<td>
<p>per</p>
</td>
<td>
<p>2</p>
</td>
<td>
<p>5/4</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>800g</p>
</td>
<td>
<p>2000</p>
</td>
</tr>
<tr>
<td>
<p>Besta</p>
</td>
<td>
<p>d8+3</p>
</td>
<td>
<p>per</p>
</td>
<td>
<p>-</p>
</td>
<td>
<p>3/8</p>
</td>
<td>
<p>1</p>
</td>
<td>
<p>2,5kg</p>
</td>
<td>
<p>3500</p>
</td>
</tr>
</tbody>
</table>
<p><em>Legenda: </em><strong><em>F</em></strong><em> - Força mínima para uso da arma.</em></p>
<p><br />As armas que têm a capacidade de conferir tanto dano cortante quanto perfurante, ao se optar por um ataque de perfuração, deve-se consumir 1 ponto de ação adicional.</p>
<h3>Tabela de Armaduras e Escudos</h3>
<p>Armaduras são um dos itens mais importantes para a durabilidade de seu personagem. Entrar em combates sem o uso delas pode significar uma morte prematura. São divididas em leves e pesadas, sendo as mistas possivelmente alocadas como qualquer um dos grupos, a escolha do jogador.</p>
<p><br /><br /></p>
<table class="table table-sm table-responsive">
<tbody>
<tr>
<td>Armadura</td>
<td>Cat</td>
<td>Pen</td>
<td>Def</td>
<td>RD</td>
<td>Metal</td>
<td>Modificadores</td>
</tr>
<tr>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>Armadura Acolchoada</td>
<td>L</td>
<td>0</td>
<td>5</td>
<td>2</td>
<td> </td>
<td>-2pa se molhada</td>
</tr>
<tr>
<td>Corselete de Couro</td>
<td>L</td>
<td>-1</td>
<td>5</td>
<td>3</td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>Gibão de Peles</td>
<td>L</td>
<td>-2</td>
<td>5</td>
<td>4</td>
<td> </td>
<td>-1pa se molhada</td>
</tr>
<tr>
<td>Armadura de Couro</td>
<td>L</td>
<td>-1</td>
<td>6</td>
<td>2</td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>Brigantina</td>
<td>L</td>
<td>-2</td>
<td>6</td>
<td>3</td>
<td>sim</td>
<td> </td>
</tr>
<tr>
<td>Brunea Anelar</td>
<td>L</td>
<td>-3</td>
<td>6</td>
<td>4</td>
<td>sim</td>
<td>-1 furtividade</td>
</tr>
<tr>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>Armadura Anelar</td>
<td>M</td>
<td>-1</td>
<td>7</td>
<td>2</td>
<td>sim</td>
<td>-1 furtividade</td>
</tr>
<tr>
<td>Brunea Escamada</td>
<td>M</td>
<td>-2</td>
<td>7</td>
<td>3</td>
<td>sim</td>
<td>-4 furtividade</td>
</tr>
<tr>
<td>Armadura Escamada</td>
<td>M</td>
<td>-3</td>
<td>7</td>
<td>4</td>
<td>sim</td>
<td>-4 furtividade</td>
</tr>
<tr>
<td>Cota de Malha</td>
<td>M</td>
<td>-2</td>
<td>8</td>
<td>2</td>
<td>sim</td>
<td>-4 furtividade</td>
</tr>
<tr>
<td>Couraça</td>
<td>M</td>
<td>-3</td>
<td>8</td>
<td>3</td>
<td>sim</td>
<td> </td>
</tr>
<tr>
<td>Couraça Com Placas</td>
<td>M</td>
<td>-4</td>
<td>8</td>
<td>4</td>
<td>sim</td>
<td>-3 furtividade</td>
</tr>
<tr>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>Túnica de Malha</td>
<td>P</td>
<td>-2</td>
<td>9</td>
<td>2</td>
<td>sim</td>
<td>-4 furtividade</td>
</tr>
<tr>
<td>Cota de Talas</td>
<td>P</td>
<td>-3</td>
<td>9</td>
<td>3</td>
<td>sim</td>
<td>-3 furtividade</td>
</tr>
<tr>
<td>Armadura de Talas</td>
<td>P</td>
<td>-4</td>
<td>9</td>
<td>4</td>
<td>sim</td>
<td>-3 furtividade</td>
</tr>
<tr>
<td>Loriga Segmentada</td>
<td>P</td>
<td>-3</td>
<td>10</td>
<td>2</td>
<td>sim</td>
<td>-3 furtividade</td>
</tr>
<tr>
<td>Meia Armadura</td>
<td>P</td>
<td>-4</td>
<td>10</td>
<td>3</td>
<td>sim</td>
<td>-3 furtividade</td>
</tr>
<tr>
<td>Armadura de Placas</td>
<td>P</td>
<td>-5</td>
<td>10</td>
<td>4</td>
<td>sim</td>
<td>-3 furtividade</td>
</tr>
<tr>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>Escudo Leve</td>
<td>-</td>
<td>0</td>
<td>+1</td>
<td>0</td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>Escudo Pesado</td>
<td>-</td>
<td>-1</td>
<td>+2</td>
<td>0</td>
<td> </td>
<td> </td>
</tr>
</tbody>
</table>
</div>
</div>


<script type="text/javascript">
window.onload = function () {

  function convertToSlug(Text){
      return Text
          .toLowerCase()
          .replace(/[^\w ]+/g,'')
          .replace(/ +/g,'-')
          ;
  }

  headers = document.querySelectorAll("h2,h3,h4");
  var itens = "<h2>ÍNDICE</h2><ul>";
  var nivel = 2;
  var nivelul = 0;
  var diff = 0;
  for (var i = 0; i < headers.length; i++) {

    headers[i].id = convertToSlug(headers[i].innerHTML);
    headers[i].nivel = parseInt(headers[i].tagName.substring(1, 2));

    console.log(headers[i].nivel+" - "+nivel);

    if (headers[i].nivel < nivel) {
      nivel = headers[i].nivel;
      diff ++;
      itens += "</ul></li><li><a href=#"+headers[i].id+">"+headers[i].innerHTML+"</a></li>";
    }
    else if (headers[i].nivel > nivel) {
      nivel = headers[i].nivel;
      diff --;
      itens += "<li><ul><li><a href=#"+headers[i].id+">"+headers[i].innerHTML+"</a></li>";
    }
    else {
      itens += "<li><a href=#"+headers[i].id+">"+headers[i].innerHTML+"</a></li>";
    }

    nivelul += diff;
    diff = 0;

  }
  for (var i = 0; i < nivelul.length; i++) {
    itens += "</ul>";
  }

  document.getElementById("indice").innerHTML = itens;
};
</script>
