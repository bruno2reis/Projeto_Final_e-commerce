/* Banco com informações para o carrinho */

/* Tabela de produtos */
CREATE TABLE `tbl_product` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `tarja` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `descricao` varchar(5000) NOT NULL,
  `codcat` smallint NOT NULL,
  `bula` text NOT NULL,
  primary key(id),
  UNIQUE KEY `product_code` (`code`)
)DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

/* Popular tabela de produtos - Inserções oficiais */

INSERT INTO `tbl_product` (`id`, `name`, `brand`, `tarja`, `code`, `image`, `price`, `descricao`, `codcat`, `bula`) VALUES
(1,'AAS - Acetildor 100mg Infantil 200 Comprimidos', 'Sobral', 'n/d', '1001', 'img/produtos/Medicamentos/Aceltidor_Analgesico_Antitermico.jpg', 16.02, 'Informações do Produto

Indicações: Para o alívio sintomático de dores de intensidade leve a moderada, como dor de cabeça, dor de dente, dor de garganta, dor menstrual, dor muscular, dor nas articulações, dor nas costas, dor da artrite; alívio sintomático da dor e da febre nos resfriados ou gripes.

Contraindicações: Hipersensibilidade (alergia) ao ácido acetilsalicílico ou a qualquer outro componente do medicamento. Histórico de crise de asma induzida pela administração de salicilatos ou outras substâncias de ação semelhante, especialmente antiinflamatórios não esteroidais; úlceras do estômago ou do intestino (úlceras gastrintestinais agudas); tendência para sangramentos (diátese hemorrágica); alteração grave da função dos rins (insuficiência renal grave); alteração grave da função do fígado (insuficiência hepática grave); alteração grave da função do coração (insuficiência cardíaca grave); tratamento com metotrexato em doses iguais ou superiores a 15 mg por semana; último trimestre de gravidez. Este medicamento não deve ser utilizado por mulheres grávidas sem orientação médica.', 1, 'bulas/bula.pdf'),
(2,'AAS - Salicetil 100 mg Infantil com 200 Comprimidos', 'Brasterápica', 'n/d', '1002', 'img/produtos/Medicamentos/Salicetil_Analgesico_Antitermico.jpg', 12.09, 'Informações do Produto

Indicações: Para o alívio sintomático de dores de intensidade leve a moderada, como dor de cabeça, dor de dente, dor de garganta, dor menstrual, dor muscular, dor nas articulações, dor nas costas, dor da artrite; alívio sintomático da dor e da febre nos resfriados ou gripes.

Contraindicações: Hipersensibilidade (alergia) ao ácido acetilsalicílico ou a qualquer outro componente do medicamento. Histórico de crise de asma induzida pela administração de salicilatos ou outras substâncias de ação semelhante, especialmente antiinflamatórios não esteroidais; úlceras do estômago ou do intestino (úlceras gastrintestinais agudas); tendência para sangramentos (diátese hemorrágica); alteração grave da função dos rins (insuficiência renal grave); alteração grave da função do fígado (insuficiência hepática grave); alteração grave da função do coração (insuficiência cardíaca grave); tratamento com metotrexato em doses iguais ou superiores a 15 mg por semana; último trimestre de gravidez. Este medicamento não deve ser utilizado por mulheres grávidas sem orientação médica.', 1, 'bulas/bula.pdf'),
(3,'Claritin 10 mg com 12 Comprimidos', 'Bayer', 'n/d', '1003', 'img/produtos/Medicamentos/Claritin_antialergico.jpg', 41.48, 'Informações do Produto

Indicações: Atua no alívio dos sintomas nasais e sintomas associados com rinite alérgica tais como: coriza, espirros e prurido nasal, ardor e coceira. A Loratadina está também indicada para o alívio dos sinais e sintomas de urticária e outras afecções dermatológicas alérgicas. Uso oral. Uso adulto e pediátrico acima de 12 anos de idade.

Modo de usar: Para adultos e crianças acima de 12 anos ou com peso corporal acima de 30 quilos, recomenda-se ingerir 1 (um) comprimido de Claritin uma vez por dia. Não administrar mais de 1 comprimido em 24 horas.

Contraindicações: Em casos de hipersensibilidade (alergia) à algum dos componentes da fórmula.

Reações adversas: Fadiga, cefaleia, sonolência, boca seca, pode ocorrer transtornos gastrointestinais, como náuseas e gastrite e também manifestações alérgicas cutâneas, como exantema ou rash.

Precauções: Este medicamento não deve ser utilizado por mulheres grávidas, nutrizes e crianças sem orientação do médico ou cirurgião-dentista', 1, 'bulas/bula.pdf'),
(4,'Dexclorfeniramina - Histamin 10mg/g Creme com 30 Gramas', 'Neo-Química', 'n/d', '1004', 'img/produtos/Medicamentos/Dexclorfeniramina_antialergico.jpg', 7.72, 'Informações do Produto

Indicações: Histamin Creme é indicado para o alívio temporário do prurido, devido a irritações leves da pele, incluindo aquelas associadas com eritema solar, picadas de insetos, alergias, coceira e urticária.

Contraindicações: Contraindicado para pacientes que apresentem hipersensibilidade aos componentes de sua fórmula. Este medicamento é contraindicado na faixa etária abaixo de 2 anos de idade, incluindo recém-nascidos e prematuros.

Modo de usar: Aplicar Histamin Creme sobre a área da pele afetada duas vezes ao dia. Deve-se evitar cobrir a área que está sendo tratada. Só deve ser aplicado externamente. Não deve ser aplicado nos olhos, boca, nariz, genitália ou em outras mucosas e não deve ser utilizado em áreas extensas da pele, principalmente em crianças. Siga corretamente o modo de usar. Em caso de dúvidas sobre o medicamento, procure orientação do farmacêutico. Não desaparecendo os sintomas, procure orientação de seu médico ou cirurgião-dentista.

Reações adversas: Pode ocorrer urticária, coceira, prurido, erupções na pele, sensibilidade na pele quando exposta ao sol, aumento do suor, calafrios, pressão baixa, dor de cabeça e palpitação.

Precauções: Histamin Creme não é indicado para o uso nos olhos (oftálmico). Deve-se evitar a exposição à luz do sol das áreas tratadas com Histamin Creme, pois pode ocorrer reações indesejáveis na pele. O tratamento deverá ser suspenso se ocorrer sensação de queimação, erupções, irritações ou se não houver melhora do quadro. Evite o uso prolongado ou o uso em áreas extensas da pele, principalmente em crianças. Não se deve aplicar em áreas da pele que apresentem bolhas, que não estejam íntegras ou que apresentem secreção, ao redor dos olhos, genitália ou em outras mucosas. Deve-se evitar cobrir a área que está sendo tratada. Este medicamento não deve ser utilizado por mulheres grávidas ou que estejam amamentando sem orientação médica ou do cirurgião-dentista. Informar ao médico ou cirurgião-dentista se está amamentando. Este medicamento não deve ser utilizado por mulheres grávidas sem orientação médica ou do cirurgião-dentista. Em casos raros, a absorção pela pele de Histamin Creme pode provocar excitação principalmente em crianças. A segurança e eficácia deste medicamento não foram estabelecidas em crianças abaixo de 2 anos de idade. Em pacientes idosos, poderá ocorrer maior sedação, vertigem e hipotensão.', 1, 'bulas/bula.pdf'),
(5,'Arnica Montana 6Ch 4 Gramas com 2 Unidades', 'Boiron', 'n/d', '1005', 'img/produtos/Medicamentos/Arnica Montana_Antinflamatorio.jpg', 21.30, 'ARNICA MONTANA 6CH BOIRON GLÓBULOS



Medicamento homeopático indicado como auxiliar no tratamento de processos pré e pós cirúrgicos, choques e traumas, dores musculares e fadiga muscular após esforço.



Composição:

Cada grama de glóbulos contém:
Arnica montana 6CH…………..0,01ml
Glóbulos inertes…………..……..1,00 g


Excipientes: sacarose e lactose.



Este medicamento contém LACTOSE.


Consulte seu médico se for intolerante à lactose.


Atenção diabéticos:
este medicamento contém SACAROSE (Açúcar).



Este medicamento contém 150 mg de lactose e 850 mg de sacarose por grama do produto.



Modo de usar:
Uso adulto:
Chupar 5 glóbulos 3 vezes ao dia por via oral.


Uso pediátrico:
Chupar 5 glóbulos 3 vezes ao dia por via oral.


Os glóbulos podem ser dissolvidos em um pouco de água para crianças abaixo de 6 anos.



Proteger os glóbulos da luz solar e de fontes de radiação eletromagnética, como por exemplo:
forno de micro-ondas, aparelho celular, televisão, etc.', 1, 'bulas/bula.pdf'),
(6,'Cataflam Pro Emulgel com 150 Gramas', 'Novartis', 'n/d', '1006', 'img/produtos/Medicamentos/CataflamPro_01.jpg', 34.03, 'Informações do Produto



Indicações:

O diclofenaco dietilamônio é um antiinflamatório tópico indicado para aliviar os sintomas da inflamação como o inchaço e a dor, nas seguintes situações: contusões, lesões, torções, dores nas costas, e outras inflamações de origem traumática.
Tendinite, cotovelo de tenista e outros tipos de reumatismos do tecido mole.
Alguns tipos de artrites leves nos braços, pernas e costas.
O diclofenaco dietilamônio pode ser indicado para tratar outras condições de acordo com a indicação médica.

Contraindicações: Hipersensibilidade (alergia) ao diclofenaco ou à qualquer outro componente da fórmula.
É contraindicado para pacientes que já apresentaram reações alérgicas (por exemplo, erupção cutânea ou respiração ofegante) após tomar medicamento contendo diclofenaco ou algum outro antiinflamatório não-esteroidal (AINE), tais como: ácido acetilsalicílico ou ibuprofeno.
Em casos de alergia a propilenoglicol, álcool isopropílico ou a algum outro componente da fórmula.

Não é recomendado o uso de diclofenaco em crianças menores de 14 anos, com exceção nos casos de artrite juvenil crônica.



Reações adversas:

Pode ocorrer dermatite de contato (prurido, vermelhidão, edema, pápulas, bolhas ou escamação da pele).
Além de casos isolados de erupção cutânea generalizada, reações de hipersensibilidade (por exemplo, crise asmática e angioedema) e reações de fotossensibilidade.



Precauções:

Não aplique diclofenaco dietilamônio gel em superfícies descascadas da pele ou sobre feridas e escoriações abertas, nem dentro da boca ou vagina. Tenha cuidado para não aplicar este medicamento nos olhos, caso isto ocorra, lave-os imediatamente com água limpa e procure um médico.
O diclofenaco dietilamônio gel não deve ser ingerido.
Siga a orientação do seu médico, respeitando sempre os horários, as doses e a duração do tratamento.
Pela ausência de dados clínicos referentes ao uso de diclofenaco dietilamônio gel durante a gravidez, seu uso não é recomendado durante o período.
Já durante a lactação, não se prevêem quantidades mensuráveis da substância ativa no leite das lactantes.
Entretanto, não há experiência com diclofenaco dietilamônio gel durante o período de amamentação.
A segurança e a eficácia do diclofenaco (independente da formulação farmacêutica) não foi ainda estabelecido em crianças.
O produto não deve ser usado por mais de 14 dias.
É recomendado que o paciente procure o médico após 7 dias se os sintomas não desaparecerem ou se houver piora do caso.', 1, 'bulas/bula.pdf'),
(7,'Arnica Montana 6Ch 4 Gramas com 2 Unidades', 'Boiron', 'n/d', '1007', 'img/produtos/Medicamentos/Arnica Montana_Antinflamatorio.jpg', 21.30, '
Informações do Produto



ARNICA MONTANA 6CH BOIRON GLÓBULOS



Medicamento homeopático indicado como auxiliar no tratamento de processos pré e pós cirúrgicos, choques e traumas, dores musculares e fadiga muscular após esforço.



Composição:

Cada grama de glóbulos contém:
Arnica montana 6CH…………..0,01ml
Glóbulos inertes…………..……..1,00 g


Excipientes: sacarose e lactose.



Este medicamento contém LACTOSE.


Consulte seu médico se for intolerante à lactose.


Atenção diabéticos: este medicamento contém SACAROSE (Açúcar).



Este medicamento contém 150 mg de lactose e 850 mg de sacarose por grama do produto.



Modo de usar:


Uso adulto:

Chupar 5 glóbulos 3 vezes ao dia por via oral.


Uso pediátrico: Chupar 5 glóbulos 3 vezes ao dia por via oral.


Os glóbulos podem ser dissolvidos em um pouco de água para crianças abaixo de 6 anos.



Proteger os glóbulos da luz solar e de fontes de radiação eletromagnética, como por exemplo:

forno de micro-ondas, aparelho celular, televisão, etc.', 1, 'bulas/bula.pdf'),
(8,'Óleo de Peixe Votag Cuore com 30 Cápsulas', 'Nikkho', 'n/d', '1008', 'img/produtos/Medicamentos/oleo de Peixe Votag.jpg', 64.21, 'Informações do Produto

VOTAG é um alimento à base de óleo de peixe, recomendado para pessoas que têm uma dieta pobre em ácidos graxos poli-insaturados de origem marinha (ômega-3).

Os ácidos graxos insaturados, presentes em fontes animais e vegetais, são divididos em famílias denominadas ômega-3 e ômega-6.
Os ácidos graxos poli-insaturados de origem marinha são utilizados como alimento por não serem sintetizados pelo nosso organismo', 1, 'bulas/bula.pdf'),
(9,'Fitocor 650 mg com 60 Cápsulas

', 'Farmoquímica', 'n/d', '1009', 'img/produtos/Medicamentos/Fitocor 650.jpg', 79.49, 'Informações do Produto

Os fitoesteróis auxiliam na redução da absorção de colesterol.
Seu consumo deve estar associado a uma alimentação equilibrada e hábitos de vida saudáveis.

Cada 2 cápsulas de FITOCOR fornecem 1,3g de fitoesterol.

Instruções de uso:
Recomenda-se ingerir 2 cápsulas ao dia.', 1, 'bulas/bula.pdf'),
(10,'Ampola de Tratamento Pantene Resgate Instantâneo 3 Unidades com 15ml', 'Procter&gamble', 'n/d', '2001', 'img/produtos/Beleza/Ampola_de_Tratamento_01.jpg', 15.99, 'Informações do Produto

A Ampola de Tratamento Capilar Pantene Resgate Instantâneo Restauração restaura os fios em apenas três minutos, devolvendo o aspecto hidratado do cabelo. Repara 3 meses de danos causados por escovas, chapinha, coloração, alisamento e outros processos químicos. Sua fórmula avançada com Pro-Vitaminas, foi desenvolvida por especialistas para restaurar a vida dos fios e devolver o aspecto saudável do cabelo. Sua fórmula não contém sal. A Ampola de Tratamento Capilar Pantene Resgate Instantâneo Restauração com fórmula que penetra na cutícula do cabelo e repara o ressecamento, a falta de brilho e aparência quebradiça. Cria um escudo protetor blindando os fios.

Indicado para cuidados com os cabelos.

Benefícios:

- Ajuda a reparar cada fio danificado pelos processos químicos, dando brilho e fortificando para resistir e evitar danos futuros;
- Reparação Do Dano Extremo Instantaneamente;
- Sem Sal;

Modo de usar:

1) Lave o cabelo com um shampoo e condicionador da linha Pantene Pro-V e retire o excesso de água;
2) Aplique nos cabelos, garantindo que todos os fios estão cobertos;
3) Deixe por 3 minutos e enxágue bem;
4) Aplique pelo menos uma vez por semana em cabelos normais ou o quanto necessite em cabelos mais danificados.

Composição: Aqua, bis-aminopropyl dimethicone, stearyl alcohol, behentrimonium methosulfate, cetyl alcohol, benzyl alcohol, parfum, disodium edta, hexyl cinnamal, panthenol, panthenyl ethyl ether, linalool, butylphenyl methylpropional, benzyl salicylate, amyl cinnamal, limonene, methylchloroisothiazolinone, methylisothiazolinone.', 2, 'bulas/bula.pdf'),
(11,'Ativador de Cachos Salon Line Maionese Capilar #todecacho uma Nutrição Power 500g', 'Salon Line', 'n/d', '2002', 'img/produtos/Beleza/Ativador_de_Cachos.jpg', 14.86, 'Informações do Produto

A Máscara de Tratamento Salon Line #TodeCacho Maionese Capilar Uma Nutrição Power! sua incrível fórmula com Proteína de Ovo, Óleo de abacate e Azeite de Oliva a Salon Line apresenta a verdadeira nutrição para os seus cachos, a Maionese! Com esses poderosos nutrientes, cabelos ressecados e sem nutrição, nunca mais!

 A Maionese #TodeCacho é um tratamento extremamente nutritivo por ter uma grande concentração de óleos e a mistura do óleo de umectação + a maionese só deve ser feita se o cabelo estiver muito ressecado, pois caso contrário, poderá pesar nos fios. Quando a saúde do fio estiver recuperada, indicamos o uso a cada 15 dias.

indicado para cabelos crespos e crespíssimos.

Benefícios:

- Nutrição intensa;
- Brilho;
- Maciez.

Modo de usar:

1) Após lavar os cabelos, aplique a Maionese Capilar Uma Nutrição Power mecha por mecha, massageando do comprimento até as pontas;
2) Deixe agir de 3 a 5 minutos;
3) Enxágue.
4) Para melhores resultados, use a linha completa #todecacho de sua preferência.

Dica: se o cabelo estiver extremamente ressecado, você pode fazer umectação noturna apenas com a Maionese ou misturá-la com um dos nossos Óleos de Umectação para um tratamento turbinado.', 2, 'bulas/bula.pdf'),
(12,'Acnase Clean Sabonete de Limpeza Profunda com 80 Gramas', 'Avert', 'n/d', '2003', 'img/produtos/Beleza/AcnaseClean.jpg', 11.20, 'Informações do Produto

Tratamento da acne, que é geralmente caracterizada por cravos e espinhas, formação de crostas e de erupções na pele, protuberâncias vermelhas e pequenas, pústulas, nódulos, abscessos e fístulas. Acnase Clean sabonete de limpeza profunda garante uma limpeza profunda, restaurando a saúde da pele. Tem tripla ação:  limpeza, hidratação e proteção. Além disso, associa a nanotecnologia com as propriedades antissépticas da melaleuca e do triclosan, auxiliando na remoção de células mortas, reduzindo a oleosidade e limpando profundamente a pele.

Benefícios: Limpa, hidrata e protege a pele, além de remover as células mortas, controlar a oleosidade e combater a acne.', 2, 'bulas/bula.pdf'),
(13,'Água Micelar LOréal Solução de Limpeza Facial 5 em 1 com 100 ml', 'LOréal', 'n/d', '2004', 'img/produtos/Beleza/ÁguaMicelar.jpg', 19.45, 'Informações do Produto

A Água Micelar da LOréal Paris foi especialmente desenvolvida para limpar a pele. Com o alto poder de limpeza e purificação, sua fórmula capta e elimina as impurezas e a maquiagem, revelando uma pele perfeitamente limpa, reequilibrada e suave sem agredí-la. Sua fórmula é composta por partículas chamadas de micelas poderosas moléculas fruto da reação entre os agentes de limpeza e a água que, como ímãs, captam e eliminam as impurezas e maquiagem da face, dos olhos e dos lábios.

Benefícios:

- Limpa;
- Demaquila;
- Purifica;
- Suaviza;
- Reequilibra.

Modo de usar:

1) Aplicar a Água Micelar, de manhã e à noite, sobre um algodão e, em seguida, passar suavemente sobre a pele do rosto, lábios e olhos;
2) Não é necessário enxaguar;
3) Repita a operação até que o algodão esteja perfeitamente limpo;
4) Apenas para uso externo e tópico. Não ingerir.', 2, 'bulas/bula.pdf'),
(14,'Base Líquida Maybelline Fit Me N°140 Claro Singular 35ml', 'Maybelline', 'n/d', '2005', 'img/produtos/Beleza/Base_Líquida_Maybelline.jpg', 31.90, 'Informações do Produto

A Base Líquida Maybelline Fit Me! N°140 Claro Singular tem efeito matificador e alisador, garantindo uma pele sem brilho com textura uniforme e tom igualado. Além disso, cobre as imperfeições sem pesar, dando a pele efeito 100% natural! Também controla a oleosidade da pele por até 12 horas. Disponíveis em 12 cores, as bases Fit Me! de Maybelline cobrem 90% dos tons de pele das brasileiras! Os tons números 100 são destinados às peles claras, os tons 200 às peles médias e os tons 300 às peles escuras. Encontre seu Fit Me! Pesquisa realizada no brasil com mais de 1.000 consumidoras com mais de 33 cores e texturas de bases testadas.

Maybelline New York traz a primeira linha de produtos para face 100% produzida no brasil, especialmente para a pele das brasileiras. Encontre seu Fit Me! Produto dermatologicamente testado.

Benefícios:

- Cor perfeita;
- Textura uniforme;
- Minimiza as imperfeições;
- Controla a oleosidade;
- Reduz as aparências dos poros;
- Efeito matificante natural.

Modo de usar:

1) Aplique a base mais adequada para o seu tom de pele no rosto limpo com a ajuda de uma esponja ou pincel apropriado;
2) Aplicar no face pequenas quantidades sobre as bochechas, queixo, nariz e testa;
3) Espalhar suavemente com uma esponja ou um pincel por todo o rosto e pelo pescoço.

Dica: Para um melhor resultado use a linha completa Fit Me! de Maybelline!

Resultado: É uma pele com textura uniforme, tom igualado e lisinha!

Composição: Aqua / Water, Sodium Laureth Sulfate, Sodium Lauryl Sulfate, Coco-Betaine, Glycol Distearate, Sodium Chloride, Guar Hydroxypropyltrimonium Chloride, Orbignya Oleifera, Seed Oil, Sodium Benzoate, Sodium Hydroxide, Trideceth-6 Salicylic Acid, Polyquaternium-11, Linalool, Benzyl Alcohol, Amodimethicone Carbomer, Cetrimonium Chloride, Astrocaryum Murumuru, Seed Butter, Citronellol, Citric Acid, Hexylene Glycol, Hexyl Cinnamal, Parfum / Fragrance.', 2, 'bulas/bula.pdf'),
(15,'Base Líquida Vult Bege Nº03 30 ml', 'Vult', 'n/d', '2006', 'img/produtos/Beleza/Base_Líquida_Vult.jpg', 17.95, 'Informações do Produto

Ideal para quem busca cobertura leve e natural para o dia a dia, a Base Líquida Vult tem ação hidratante, textura suave e acabamento uniforme. Enriquecida com Vitamina E.


Tenho pele oleosa, posso usar a Base Líquida da Vult?

Depende do que você procura. Se gosta que a sua pele tenha aquele brilho natural e cobertura bem leve, essa é a melhor opção. Caso prefira um produto com acabamento opaco e mais sequinho, experimente a Base Líquida Matte Vult.

Como consigo saber qual a minha cor?

O teste na própria pele sempre será a melhor opção para escolher a sua base. Experimente aplicar um pouco do produto na região da mandíbula e compare a tonalidade entre rosto e pescoço. A que melhor se equilibrar é a sua cor.

Benefícios:

- Efeito Natural;
- Acabamento Uniforme;
- Cobertura Leve.

Modo de usar:

1) Aplique com movimentos ascendentes (de baixo para cima) e de dentro para fora, por todo o rosto.

Dica: Para um acabamento impecável, experimente usar o Pincel para Base Vult Nº07, realizando movimentos em X por todo o rosto. Em seguida, finalize com o Pó Compacto Vult.', 2, 'bulas/bula.pdf'),
(16,'Aparelho Esfoliador Eletrônico para os Pés Amopé Pedi Perfect com Lixa Rotativa com 1 Unidade', 'Reckitt Benckiser', 'n/d', '2007', 'img/produtos/Beleza/Aparelho_Esfoliador_01.jpg', 88.90, 'Informações do Produto

O Aparelho Esfoliador Amopé Pedi Perfect é ideal para deixar os pés macios e livre de pele áspera, mantendo a maciez e a delicadeza que eles merecem. Com formato ergonômico e super seguro, o Aparelho Esfoliador é livre de lâminas cortantes, o que aumenta a segurança e facilita o manuseio.

Benefícios: Com uma esfoliação rápida e fácil, o Aparelho Esfoliador Amopé Pedi Perfect é extremamente prático e funcional. Ele funciona através de pilhas e apresenta resultados visíveis rapidamente graças as suas lixas rotativas com tecnologia Micralumina que, por meio de eficazes partículas micro abrasivas, removem a pele áspera de forma suave, deixando os pés lisinhos em poucos minutos. Deve ser utilizado apenas com os pés limpos e secos.

Modo de uso: Insira a lixa no Aparelho Esfoliador Amopé Pedi Perfect e tenha certeza de que ela está totalmente encaixada. Coloque as pilhas e gire a parte prateada em sentido horário para ligar o aparelho. Para obter o resultado desejado, garanta que seus pés estejam secos antes de utilizar o aparelho. Esfolie cada área por até 4 segundos no máximo e remova a pele endurecida. O aparelho pode parar de funcionar se você pressionar demais. Use-o até remover toda a pele áspera dos seus pés. Interrompa o uso caso sua pele fique ferida ou inflamada.

Contraindicações: O Aparelho Esfoliador Eletrônico Amopé Pedi Perfect é contraindicado para pacientes diabéticos ou com problemas circulatórios.', 2, 'bulas/bula.pdf'),
(17,'Composto lácteo com óleos vegetais NESTLÉ NINHO® Fases 1+', 'NESTLÉ', 'n/d', '3001', 'img/produtos/Infantil/Composto Lácteo Nestlé Ninho Fases 1+ 400g.jpg', 29.90, 'Fibra Alimentar (Frutooligossacarídeo e Inulina) que contribui para o equilíbrio da flora intestinal.

Seu consumo deve estar associado a uma alimentação equilibrada.
18 vitaminas e minerais. Rico em Cálcio, Vitaminas C, D, B1, Ácido pantotênico e Biotina.
Fonte de Ferro, Vitaminas A, E, K, B2, B6, B12, Ácido fólico, Selênio, Zinco, Fósforo e Cobre.', 3, 'bulas/bula.pdf'),
(18,'Fórmula Infantil Althéra 450g', 'NESTLÉ', 'n/d', '3002', 'img/produtos/Infantil/Fórmula Infantil Althéra 450g.jpg', 34.90, 'Formula infantil para lactentes e de seguimento paralactentes destinada a necessidades dietoterapicas especificas a base de proteina extensamente hidrolisada.
Com DHA e ARA.', 3, 'bulas/bula.pdf'),
(19,'Fórmula infantil para lactentes', 'NESTLÉ', 'n/d', '3003', 'img/produtos/Infantil/Fórmula Infantil NAN Comfor 1 800g.jpg', 36.65, 'Nan Comfor 1. De 0 a 6 meses.
Com prebióticos, DHA e ARA e nucleotídeos.', 3, 'bulas/bula.pdf'),
(20,'Leite Nestlé Neslac Supreme Lata 800g', 'NESTLÉ', 'n/d', '3004', 'img/produtos/Infantil/Leite Nestlé Neslac Supreme Lata 800g.jpg', 55.90, 'Pensando na nutrição balanceada do seu filho NESLAC SUPREME foi desenvolvimento com soro de leite,
é fonte de ômega 3 e contém nutrientes importantes para um desenvolvimento saudável durante a infância.
Você sabia que a qualidade da proteína é importante para a nutrição do seu filho? A proteína é um dos nutrientes essenciais para o crescimento e desenvolvimento apropriados.
O soro do leite é uma importaante fonte de proteína de alta qualidade, pois é de fácil digestão e absorção.', 3, 'bulas/bula.pdf'),
(21,'Papinha Nestlé Banana com Aveia Pote 120g', 'NESTLÉ', 'n/d', '3005', 'img/produtos/Infantil/Papinha Nestlé Banana com Aveia Pote 120g.jpg', 4.99, 'Papinha de Banana com Aveia feita especialmente para crianças a partir do sexto mês de idade.
Esta é a fase do desenvolvimento do paladar do bebê.
É o momento de introduzir novos sabores e receitas mais elaboradas, que auxiliarão no desenvolvimento do paladar e na conseqüente formação de bons hábitos alimentares.

Faz bem saber:
Cada frasco de PAPINHAS NESTLÉ recebe injeção de vapor e o ar é retirado.
É essa tecnologia de fechamento a vácuo que garante ao produto ótimas condições por longo tempo sem adição de conservantes.
A seleção rigorosa de ingredientes garante a ausência de substâncias prejudiciais à saúde do seu filho.', 3, 'bulas/bula.pdf'),
(22,'Kit Shampoo + Condicionador Ricca Barbie Cachos Definidos 250ml Cada', 'RICCA', 'n/d', '3006', 'img/produtos/Infantil/Kit Shampoo + Condicionador Ricca Barbie Cachos Definidos 250ml Cada.jpg', 18.99, 'Barbie é uma referência de estilo, diversão há décadas! Quem não se encantou com suas roupas, estilo e seus cabelos, quer fossem lisos ou ondulados, curtos ou longos? Pensando nisso, RICCA apresenta sua nova linha de shampoos, condicionadores e cremes para pentear Ricca Barbie nas versões suave, cachos definidos, camomila e brilho e proteção. Os produtos não contêm sal, não possuem parabenos e foram dermatologicamente testados.', 3, 'bulas/bula.pdf'),
(23,'Shampoo Johnsons Baby Proteção UV 200ml', 'JOHNSONS', 'n/d', '3007', 'img/produtos/Infantil/Shampoo Johnsons Baby Proteção UV 200ml.jpg', 9.99, 'O Shampoo JOHNSONS® Baby Proteção UV 200ml contém melanina natural, que ajuda a proteger a cor do cabelo do seu filho dos danos do sol. Suave para o couro cabeludo, deixando o cabelo mais bonito. Desenvolvido por especialistas em cabelo infantil, limpa de forma eficaz e segura, sem ressecar e sem deixar resíduos. Fórmula CHEGA DE LÁGRIMAS®, que não arde os olhos. Sem adição de ftalatos e conservantes doadores de formaldeído. Com pH balanceado. Com água purificada. Dermatologicamente testado. Hipoalergênico*. *Este produto foi formuldo de maneira a minimizar possível surgimento de alergia.', 3, 'bulas/bula.pdf'),
(24,'Fralda Pampers Pants Confort Sec Tamanho M 40 Unidades', 'P&G', 'n/d', '3008', 'img/produtos/Infantil/Fralda Pampers Pants Confort Sec Tamanho M 40 Unidades.jpg', 54.90, 'Fralda Pampers Pants Confort Sec Tamanho M 40 Unidades', 3, 'bulas/bula.pdf'),
(25,'Doralgina 4 Drágeas', 'Neo-Química', 'n/d', '4001', 'img/produtos/Promocoes/doralgina.jpg', 1.57, 'Informações do Produto

Indicações: Doralgina é um medicamento com atividade analgésica (diminui a dor) e antiespasmódica (diminui contração involuntária) indicado para o tratamento de diversos tipos de dor de cabeça, incluindo enxaquecas ou para o tratamento de cólicas. Uso oral. Uso adulto.
Modo de usar: Doralgina é de uso exclusivo pela via oral (por boca). A posologia recomendada é de 1 a 2 drágeas (em dose única) a cada 6 horas ou 4 vezes ao dia. Não tome mais de 8 drágeas ao dia (4 x 2 drágeas). Este medicamento não deve ser partido ou mastigado. Siga corretamente o modo de usar. Em caso de dúvidas sobre este medicamento, procure orientação do farmacêutico. Não desaparecendo os sintomas, procure orientação de seu médico ou cirurgião-dentista.
Contraindicações: Alergia ou intolerância à qualquer componente da fórmula. Você também não deve tomar Doralgina nas crises de hipertensão arterial (pressão alta), na presença de alteração nas qualidades do sangue ou na proporção de seus elementos constituintes ou de determinadas doenças metabólicas, como porfiria ou a deficiência congênita da glicose-6-fosfato-desidrogenase. Você só deve usar Doralgina em doses mais altas e por período prolongado se o médico recomendar. Este medicamento é contraindicado para menores de 12 anos de idade.
Reações adversas: Pode ocorrer reações alérgicas na pele, queda da pressão sanguínea, alterações das células do sangue, aumento de batimentos do coração e irritabilidade; além de náusea, vermelhidão, suor, coceira ou urticária.
Precauções: Este medicamento não deve ser utilizado por mulheres grávidas sem orientação médica ou do cirurgião-dentista. Você não deve tomar Doralgina se estiver amamentando. Se necessário, a amamentação deve ser interrompida. Se você tiver problemas nos rins ou no fígado não deve usar o medicamento em doses altas ou por muito tempo. Não use junto com bebidas alcoólicas, nem com medicamentos que contenham clorpromazina (usada no tratamento de doenças psiquiátricas) ou ciclosporina (usada em pacientes transplantados). Atenção diabéticos: este medicamento contém açúcar.', 4, 'bulas/bula.pdf'),
(26,'Gastrol 20 Pastilhas', 'Luper', 'n/d', '4002', 'img/produtos/Promocoes/gastrol.jpg', 10.64, 'Informações do Produto

Indicações: Gastrol Pastilhas está indicado como antiácido, no tratamento sintomático da hiperacidez gástrica e suas complicações e também na úlcera péptica. Uso oral. Uso adulto.
Modo de usar: Recomenda-se a utilização de 1 a 2 pastilhas ao dia ou à critério médico. A dose máxima diária recomendada de 10 pastilhas não deve ser ultrapassada. Para esta dose, o período máximo de uso recomendado deste medicamento é de 2 semanas.
Contraindicações: Contraindicado em pacientes que apresentem hipersensibilidade à qualquer um dos componentes da fórmula. Este medicamento é contraindicado nos estados edematosos (inchaço e retenção líquida), nas nefrites (inflamação nos rins), na alcalose (alteração nos fluidos corporais), na albuminúria (perda de proteínas pela urina) e nas anemias. A terapia com carbonato de cálcio é contraindicada em pacientes com hipercalcemia preexistente, hipercalciúria em pacientes com dieta pobre em fósforo, inclusive por hiperparatireoidismo (doença caracterizada pelo excesso de funcionamento das glândulas paratireoides, causando aumento do hormônio da paratireoide (PTH) e levando a sinais e sintomas decorrentes do aumento de cálcio no sangue (hipercalcemia), na urina (hipercalciúria) e da retirada de cálcio dos ossos (osteoporose e cistos ósseos)), em neoplasias ou sarcoidose (doença de causa desconhecida com diversos sintomas na pele e outros órgãos), em pacientes com doença renal ou desidratação, pelo risco de desenvolverem calcinose (acúmulo de cálcio em qualquer tecido mole). O hidróxido de alumínio e hidróxido de magnésio são contraindicados em pacientes com doença renal, incluindo insuficiência renal e insuficiência renal grave. Deve ser usado com cautela em pacientes com insuficiência renal leve a moderada, devido ao aumento do risco de hipermagnesemia e em pacientes idosos. O hidróxido de alumínio/hidróxido de magnésio não são recomendados para pacientes com colite ulcerativa, que pode ser agravada pelo efeito laxante do magnésio contido nos antiácidos. Hidróxido de alumínio/hidróxido de magnésio não são recomendados para pacientes que serão ou foram submetidos à colostomia, ileostomia, ou que apresentam diverticulite, uma vez que aumentam o risco de desenvolver um desequilíbrio eletrolítico. Este medicamento é contraindicado para uso por pacientes com insuficiência renal.
Reações adversas: Retenção de líquidos ou diurese e desidratação, retenção de sódio, hipersecreção gástrica, rebote ácido (reincidência do incômodo), flatulência, distensão gástrica, soluços, refluxo gastroesofágico, dor abdominal, náuseas, vômitos, obstipação, obstrução do trato gastrointestinal ou diarreia, agravamento de hemorróidas ou fissuras anais (em pacientes com histórico de constipação), compactação fecal, eructação, hipercalcemia, cálculo renal e/ou alcalose metabólica em pacientes pré- dispostos, hipofosfatemia, fraqueza da musculatura e desenvolvimento de hipermagnesemia.
Precauções: O hidróxido de magnésio, assim como outros sais de magnésio na presença de insuficiência renal, pode causar depressão do sistema nervoso central. O hidróxido de alumínio, na vigência de dietas hipofosforadas, pode provocar uma deficiência de fósforo. Este medicamento pode ser usado durante a gravidez, desde que sob prescrição médica. Informe seu médico a ocorrência de gravidez na vigência do tratamento ou após seu término. Informar ao médico se está amamentando. Durante o tratamento, recomenda-se evitar a ingestão de bebidas alcoólicas. O uso deste medicamento contendo carbonato de cálcio, hidróxido de alumínio e hidróxido de magnésio deve ser cuidadoso em pacientes com obstipação preexistente ou com histórico de impactação fecal, hemorroidas, obstrução gastrintestinal ou diminuição da motilidade gástrica; é possível que essas condições sejam agravadas, e esses pacientes possam desenvolver sepse, peritonite ou isquemia intestinal. Antiácidos contendo hidróxido de alumínio e hidróxido de magnésio, devem ser utilizados cuidadosamente em pacientes idosos e com dano renal leve a moderado (devido ao risco elevado de desenvolver hipermagnesemia e uma consequente toxicidade por magnésio), além de pacientes em dietas com restrição de sódio, pacientes com insuficiência cardíaca, edema ou doença hepática grave. Este medicamento deve ser usado com cautela em pacientes com diarreia crônica, pois a diarreia pode ser agravada pelo efeito laxante do magnésio, podendo aumentar o risco de hipofosfatemia, desenvolvimento este associado com o componente alumínio. Não foram realizados estudos em animais nem em mulheres grávidas sobre o uso deste medicamento. A prescrição deste medicamento depende da avaliação do risco/benefício para a paciente. Este', 4, 'bulas/bula.pdf'),
(27,'Creme Preventivo de Assaduras Hipoglós Amêndoas 80g', 'Johnson&johnson', 'n/d', '4003', 'img/produtos/Promocoes/hipoglos01.jpg', 27.35, 'Informações do Produto

Hipoglós Amêndoas Creme Cosmético Protetor Infantil oferece ultra proteção que você vê e o seu bebê sente. A tradição que você conhece com a inovação em que você pode confiar. Possui fórmula com Vitaminas A e E que ajudam a deixar a pele do seu bebê sempre hidratada e bem nutrida. É fácil de aplicar, espalhar e remover!

Indicado para proteger a pele do seu bebê contra as assaduras.

Beneficios:

- Previne contra as assaduras;
- Protege a pele irritada com suavidade;
- Hidrata e nutre;
- Possui rápida absorção.

Modo de usar:

1) Utilize Hipoglós Amêndoas a cada troca de fraldas;
2) Antes de trocar a fralda, lave bem as mãos e limpe cuidadosamente a pele do bebê;
3) Aplique Hipoglós Amêndoas massageando suavemente para espalhar o creme, cobrindo toda a área coberta pela fralda, para evitar o contato de urina e fezes com a pele;
4) Lave as mãos imediatamente após a aplicação.

Contraindicações: Apenas em casos de hipersensibilidade (alergia) aos componentes da fórmula.', 4, 'bulas/bula.pdf'),
(28,'Gel Hidratante E Umectante Cicatricure para Cicatrizes 30g', 'Genomma', 'n/d', '4004', 'img/produtos/Promocoes/Cicatricure.jpg', 24.84, 'Informações do Produto

O Gel Hidratante e Umectante Cicatricure foi especificamente desenvolvido para melhorar a pele com cicatrizes e estrias. Sua tecnologia inovadora hidrata e ajuda a melhorar a textura, coloração e tamanho de cicatrizes e estrias  graças ao exclusivo composto Regenext, que repara e hidrata a pele, uniformizando a cor e a textura da cicatriz ou estria em relação ao resto da pele.

Benefícios:

- Hidrata e melhora a pele com cicatrizes e estrias;
- Atenua cicatrizes causadas por queimaduras ou acnes;
- Possui fórmula umectante.

Modo de usar:

1) Aplique generosamente na pele 3 vezes ao dia, por um período de 3 a 6 meses;
2) A aplicação sobre cicatrizes recentes deve ser feita somente sob recomendação médica;
3) Além de cicatrizes, o uso contínuo de Cicatricure Gel também reduz estrias.

Precauções: Produto de uso cosmético. Não use o produto se a pele estiver irritada e lesionada. Em caso de irritação, vermelhidão ou prurido, suspenda o uso e procure orientação médica. O produto não oferece proteção solar; caso opte pelo uso de protetor solar, aplique-o 10 minutos após a aplicação de Cicatricure Gel. Mantenha fora do alcance das crianças. Produto não indicado para uso em menores de 12 anos de idade. Este produto não foi testado em gestantes e lactantes, consulte seu médico antes de utilizá-lo.

Composição: Extrato de cebola (Allium cepa L), Extrato de camomila (Chamomilla recutita), Extrato de tomilho (Thymus vulgaris), Extrato de conchas marinhas (Ostrea shell), Extrato da folha de nogueira (Juglans regia leaf), Extrato babosa (Aloe barbadensis), Extrato de Centela (Centella asiatica),Óleo de bergamota (Citrus aurantium bergamia).', 4, 'bulas/bula.pdf'),
(29,'Fralda Pampers Pants Confort Sec Tamanho M 40 Unidades', 'P&G', 'n/d', '4005', 'img/produtos/Promocoes/Fralda Pampers Pants Confort Sec Tamanho M 40 Unidades.jpg', 11.99, 'Fralda Pampers Pants Confort Sec Tamanho M 40 Unidades', 4, 'bulas/bula.pdf'),
(30,'AAS - Acetildor 100mg Infantil 200 Comprimidos', 'Sobral', 'n/d', '4006', 'img/produtos/Promocoes/Aceltidor_Analgesico_Antitermico.jpg', 11.90, 'Informações do Produto

Indicações: Para o alívio sintomático de dores de intensidade leve a moderada, como dor de cabeça, dor de dente, dor de garganta, dor menstrual, dor muscular, dor nas articulações, dor nas costas, dor da artrite; alívio sintomático da dor e da febre nos resfriados ou gripes.

Contraindicações: Hipersensibilidade (alergia) ao ácido acetilsalicílico ou a qualquer outro componente do medicamento. Histórico de crise de asma induzida pela administração de salicilatos ou outras substâncias de ação semelhante, especialmente antiinflamatórios não esteroidais; úlceras do estômago ou do intestino (úlceras gastrintestinais agudas); tendência para sangramentos (diátese hemorrágica); alteração grave da função dos rins (insuficiência renal grave); alteração grave da função do fígado (insuficiência hepática grave); alteração grave da função do coração (insuficiência cardíaca grave); tratamento com metotrexato em doses iguais ou superiores a 15 mg por semana; último trimestre de gravidez. Este medicamento não deve ser utilizado por mulheres grávidas sem orientação médica.', 4, 'bulas/bula.pdf'),
(31,'Imecap Hair com 60 Cápsulas', 'Divcom', 'n/d', '4007', 'img/produtos/Promocoes/imecap.jpg', 70.87, 'Informações do Produto

Imecap Hair é um suplemento à base de vitaminas e bio-nutrientes ativos, além de biotina que tem relação com a produção de queratina, proteína que compõe o cabelo. Imecap Hair promove a suplementação do organismo devido aos minerais: selênio, cromo, zinco, piridoxina (vitamina B6) e biotina presentes em sua composição.
Contraindicações: Hipersensibilidade (alergia) aos componentes da formulação.
Precauções: Gestantes, nutrizes e crianças de até 3 (três) anos de idade, somente devem consumir este produto sob orientação de médico ou nutricionista. Consumir este produto conforme a recomendação de ingestão diária constante na embalagem. Mantenha o produto fora do alcance das crianças.', 4, 'bulas/bula.pdf'),
(32,'AAS - Salicetil 100 mg Infantil com 200 Comprimidos', 'Brasterápica', 'n/d', '4008', 'img/produtos/Promocoes/Salicetil_Analgesico_Antitermico.jpg', 9.09, 'Informações do Produto

Indicações: Para o alívio sintomático de dores de intensidade leve a moderada, como dor de cabeça, dor de dente, dor de garganta, dor menstrual, dor muscular, dor nas articulações, dor nas costas, dor da artrite; alívio sintomático da dor e da febre nos resfriados ou gripes.

Contraindicações: Hipersensibilidade (alergia) ao ácido acetilsalicílico ou a qualquer outro componente do medicamento. Histórico de crise de asma induzida pela administração de salicilatos ou outras substâncias de ação semelhante, especialmente antiinflamatórios não esteroidais; úlceras do estômago ou do intestino (úlceras gastrintestinais agudas); tendência para sangramentos (diátese hemorrágica); alteração grave da função dos rins (insuficiência renal grave); alteração grave da função do fígado (insuficiência hepática grave); alteração grave da função do coração (insuficiência cardíaca grave); tratamento com metotrexato em doses iguais ou superiores a 15 mg por semana; último trimestre de gravidez. Este medicamento não deve ser utilizado por mulheres grávidas sem orientação médica.', 4, 'bulas/bula.pdf'),
(33,'A-Z Mulher - Sidney Oliveira 30 Comprimidos', 'Sidney Oliveira', 'n/d', '5001', 'img/produtos/CuidadosDiarios/A-Z_Mulher.jpg', 19.90, 'Informações do Produto

A-Z Mulher é um suplemento vitamínico-mineral em comprimidos desenvolvido especialmente para o público feminino. Possui fórmula balanceada com 100% da Ingestão Diária Recomendada (IDR) de Vitaminas A, B, C e D, além de ser fonte de minerais indispensáveis para a saúde da mulher. Sem adição de açúcares e zero calorias.

Sugestão de uso: Ingerir 1 (um) comprimido ao dia.

Informação nutricional: Porção de 0,630 g (1 comprimido revestido): Carboidratos 0,0 g (0% VD*), dos quais: Açúcares 0,0 g (0% VD*); Vitamina C 45 mg (100% VD*); Ferro 10 mg (71% VD*); Vitamina B3 13 mg (81% VD*); Zinco 2,0 mg (29% VD*); Manganês 2,3 mg (100% VD*); Vitamina B5 5,0 mg (100% VD*); Vitamina A 600 mcg (100% VD*); Vitamina B2 1,3 mg (100% VD*); Vitamina B1 1,1 mg (92% VD*); Vitamina B6 0,5 mg (39% VD*); Vitamina D 5,0 mcg (100% VD*); Vitamina B12 2,4 mcg (100% VD*); Vitamina B9 (ácido fólico) 240 mcg (100% VD*). Não contém quantidade significativa de Valor Energético, Proteínas, Gorduras Totais, Gorduras Saturadas, Gorduras Trans, Fibra Alimentar e Sódio. (*) % Valores diários com base em uma dieta de 2000 kcal ou 8400 kJ. Seus valores diários podem ser maiores ou menores dependendo de suas necessidades energéticas.

Composição: Ácido ascórbico, sulfato ferroso, nicotinamida, sulfato de zinco, sulfato de manganês, d-pantotenato de cálcio, acetato de vitamina A, cloridrato de tiamina, riboflavina, cloridrato de piridoxina, ácido fólico, colecalciferol, cianocobalamina, antiumectante dióxido de silício, estabilizantes celulose microcristalina e croscarmelose sódica, revestimento (agente de corpo etilcelulose, estabilizante hidroxipropilmetilcelulose, umectante triacetina, corante inorgânico dióxido de titânio e corantes artificiais vermelho 40 e eritrosina e corante natural carmim). NÃO CONTÉM GLÚTEN.

Contraindicações: Hipersensibilidade (alergia) à qualquer um dos componentes da fórmula.

Precauções: Consumir este produto conforme a recomendação de ingestão diária constante na embalagem. Gestantes, nutrizes (mães que amamentam) e crianças de até 3 (três) anos, somente devem consumir este produto sob orientação de nutricionista ou médico.', 5, 'bulas/bula.pdf'),
(34,'Detox Farinha Naturei com 250 Gramas', 'Naturei', 'n/d', '5002', 'img/produtos/CuidadosDiarios/Detox_Farinha.jpg', 21.78, 'Informações do Produto

Farinha Detox.

Sugestão de uso: Uma colher de sopa (10g) diluir em 200 ml de suco ou iogurte light, 2 vezes ao dia.

Composição: Farinha, couve, farinha de espinafre, farinha de limão, farinha de berinjela, farinha de maçã, farinha de laranja, farinha de maracujá e gengibre em pó. NÃO CONTÉM GLÚTEN.

Contraindicações: Hipersensibilidade (alergia) à qualquer um dos componentes da fórmula.

Precauções: Consumir este produto conforme a recomendação de ingestão diária constante na embalagem. Gestantes, nutrizes (mães que amamentam) e crianças de até 3 (três) anos, somente devem consumir este produto sob orientação de nutricionista ou médico.', 5, 'bulas/bula.pdf'),
(35,'Achocolatado em Pó Diet Stevita com 220 Gramas', 'Stevia Farma', 'n/d', '5003', 'img/produtos/CuidadosDiarios/Achocolatado.jpg', 26.29, 'Informações do Produto

O Achocolatado Stevita  é adoçado com Stevia. Foi elaborado com cacau brasileiro, além de ser rico em vitaminas e minerais, oferece energia na medida certa para quem leva uma vida ativa. Você terá a experiência de provar o sabor do mais puro chocolate sem perder o prazer da doçura. Com o Achocolatado Stevita poderá saborear seu leite com um gostinho especial, usufruindo de um produto adoçado naturalmente. Sem glúten, sem adição de açúcar, com colágeno, reduzido em calorias. Peso líquido de 220 gramas.', 5, 'bulas/bula.pdf'),
(36,'Achocolatado Gold com 210 Gramas
', 'Gold Nutrition', 'n/d', '5004', 'img/produtos/CuidadosDiarios/Achocolatado_Gold.jpg', 14.96, 'Informações do Produto

O Achocolatado Gold Diet possui o irresistível sabor do chocolate sem adição de açúcares. Possui 53% menos calorias quando preparado com leite desnatado. Possui grande quantidade de cacau em sua formulação.', 5, 'bulas/bula.pdf'),
(37,'Aparelho de Pressão Digital de Braço Omron - Modelo Hem 7113', 'Omron', 'n/d', '5005', 'img/produtos/CuidadosDiarios/Aparelho_de_Pressão_01.jpg', 148.05, 'Informações do Produto

Esse monitor avançado realiza leituras da pressão sistólica, diastólica e de pulso.Possui memória para 30 leituras, detecta arritmia cardíaca e possui indicador de hipertensão. A tecnologia Intellisense permite o controle da inflação ao nível ideal, proporcionando uma medição mais confortável e precisa.

Benefícios:

Possui 30 memórias: Armazena o resultado das últimas 30 medições, permitindo ao usuário acompanhar e monitorar as mudanças da sua pressão arterial.

Detecta arritmia cardíaca: Detecta batimentos cardíacos irregulares.

Possui indicador de hipertensão: O monitor alerta quando a pressão arterial ultrapassa os padrões estabelecidos pelas organizações internacionais de cardiologia.
', 5, 'bulas/bula.pdf'),
(38,'Aparelho de Glicemia One Touch Select Plus Flex + 10 Tiras + 10 Lancetas + Lancetador + Bolsa para Carregar', ' Johnson&johnson', 'n/d', '5006', 'img/produtos/CuidadosDiarios/OneTouch_Select.jpg', 45.08, 'Informações do Produto

O Kit One Touch Select Plus Flex inclui: Medidor One Touch Select Plus Flex (baterias inclusas) + 10 Tiras reagentes One Touch Select Plus Flex + Estojo + Dispositivo de punção + One Touch Delica + 10 Lancetas One Touch Delica + Manual do usuário + Guia inicial.', 5, 'bulas/bula.pdf'),
(39,'Gel Lubrificante Easy Lub Ice Menta com 40 Gramas

', 'Teuto', 'n/d', '5007', 'img/produtos/CuidadosDiarios/Gel_Lubrificante_Easy.jpg', 5.89, '
Informações do Produto



Easy Lub serve para lubrificar as áreas íntimas de mulheres de todas as idades com falta de lubrificação vaginal (secura vaginal) e casais que buscam uma melhora do seu relacionamento íntimo e uma nova dimensão do prazer. Easy Lub proporciona mais conforto, reduzindo o atrito durante o ato sexual, sem causar a perda da sensibilidade. Easy Lub age lubrificando as áreas íntimas, imitando a lubrificação íntima natural. O efeito refrescante de Easy Lub Ice Menta é conferido pelo Mentol, que potencializa as respostas dos nervos sensoriais ao frio, aumentando sua sensibilidade a temperaturas menos frias. Se liga a mesma proteína na superfície dos nervos que funciona como indicador de frio. Ou seja: Mentol e frio passam a ser sinônimos para os nervos que contêm essa proteína em sua superfície.

Modo de uso: Easy Lub é de uso tópico. Aplique uma quantidade desejada de Easy Lub Ice Menta sobre a área ou superfície a ser lubrificada ou diretamente no preservativo. Pode ser usado com ou sem preservativo, assegurando maior conforto nas relações sexuais.

Recomendações:  Dar uma chance às novidades pode fazer muito bem à rotina do relacionamento e você ainda pode descobrir outras formas de sentir prazer. Aproveite e inclua Easy Lub e descubra como o toque pode ser excitante. É recomendado que as mulheres consultem com um ginecologista regularmente. Mantenha fora do alcance das crianças. Se ocorrer irritação ou desconforto, descontinue o uso e consulte um médico. Conservar o produto em lugar fresco e seco.', 5, 'bulas/bula.pdf'),
(40,'Preservativo Blowtex Skyn Texturizado com 3 Unidades', 'Blowtex', 'n/d', '5008', 'img/produtos/CuidadosDiarios/Preservativo_Blowtex.jpg', 7.15, '
Informações do Produto



O Preservativo Blowtex Skyn Texturizado possui textura quase que imperceptível, proporcionando aquela sensação de não estar usando nada, sem interferir na segurança e eficiência. É texturizada com bolinhas, que estimulam o contato durante o ato sexual e com textura estriada, suaves ranhuras que aumentam a sensação de prazer.', 5, 'bulas/bula.pdf'),
(41,'AAS 100mg 100 Comprimidos - Ems – Genérico', 'Ems Genérico', 'n/d', '6001', 'img/produtos/Genericos/AAS100mg .jpg', 20.77, 'Informações do Produto

Indicações: Para o alívio sintomático de dores de intensidade leve a moderada, como dor de cabeça, dor de dente, dor de garganta, dor menstrual, dor muscular, dor nas articulações, dor nas costas, dor da artrite; alívio sintomático da dor e da febre nos resfriados ou gripes. Uso oral. Uso pediátrico. Sabor morango.
Contraindicações: Hipersensibilidade (alergia) ao ácido acetilsalicílico ou a qualquer outro componente do medicamento. Histórico de crise de asma induzida pela administração de salicilatos ou outras substâncias de ação semelhante, especialmente antiinflamatórios não esteroidais; úlceras do estômago ou do intestino (úlceras gastrintestinais agudas); tendência para sangramentos (diátese hemorrágica); alteração grave da função dos rins (insuficiência renal grave); alteração grave da função do fígado (insuficiência hepática grave); alteração grave da função do coração (insuficiência cardíaca grave); tratamento com metotrexato em doses iguais ou superiores a 15 mg por semana; último trimestre de gravidez. Este medicamento não deve ser utilizado por mulheres grávidas sem orientação médica.
Reações adversas: Distúrbios do trato gastrointestinal como má digestão (dispepsia), dor gastrointestinal e abdominal, raramente inflamação gastrointestinal, úlcera gastrointestinal, podendo levar, mas muito raramente, a úlcera gastrointestinal com hemorragia e perfuração. Aumento do risco de sangramento. Reações alérgicas (hipersensibilidade) como asma, reações leves a moderadas que potencialmente afetam a pele, o trato respiratório, o trato gastrointestinal e o sistema cardiovascular, com sintomas tais como erupções na pele (rash cutâneo), urticária, inchaço (edema), coceira (prurido), rinite, congestão nasal, alterações cardiorrespiratórias e, muito raramente, reações graves, como choque anafilático.
Precauções: Deve ser utilizado com cautela nos seguintes casos: pacientes que tenham tido úlceras gástricas ou duodenais e histórico de sangramento gastrointestinal; em tratamento concomitante com medicamentos anticoagulantes; pacientes com funcionamento prejudicado do fígado ou dos rins, ou circulação prejudicada, como insuficiência grave do coração ou sangramentos maiores; pacientes com asma preexistente, febre do feno, pólipos nasais, doença respiratória crônica ou reações alérgicas a outras substâncias; pacientes submetidos a procedimentos cirúrgicos (inclusive cirurgias de pequeno porte, como extrações dentárias), pois o ácido acetilsalicílico pode levar a um aumento da tendência a sangramentos durante e após a cirurgia; pacientes com predisposição a gota; em certas doenças virais, especialmente catapora e gripes, a administração de ácido acetilsalicílico a crianças não deve ser realizada sem a prévia consulta de um médico; caso você esteja grávida ou amamentando, ou pensando em engravidar, solicite orientação médica antes de usar este medicamento; durante o primeiro e segundo trimestre de gravidez, o ácido acetilsalicílico não deve ser administrado a menos que o médico informe que seu uso é claramente necessário; caso o ácido acetilsalicílico seja administrado a uma mulher que esteja tentando engravidar ou esteja grávida há menos de 6 meses, a dose e a duração do tratamento devem ser as menores possíveis; caso esteja amamentando ou planejando amamentar, você deverá consultar um médico antes de usar este medicamento; não há necessidade de recomendações especiais para o uso do medicamento em idosos, crianças maiores de 12 anos de idade ou grupos de risco, desde que observadas as precauções e contraindicações; ou ainda quando seja prescrito por um médico.', 6, 'bulas/bula.pdf'),
(42,'Acebrofilina Xarope Adulto com 120 ml - Biosintética – Genérico', 'Biosintética Genérico', 'n/d', '6002', 'img/produtos/Genericos/AcebrofilinaXaropeAdulto.jpg', 15.89, 'Informações do Produto

Indicações: Tratamento da obstrução dos brônquios, controle e regulação do muco (catarro) das vias respiratórias e a expectoração do muco das vias respiratórias (eliminação do catarro).
Contraindicações: Hipersensibilidade aos componentes da formulação e para uso por portadores de doenças hepáticas e renais graves. Este medicamento é contraindicado para menores de 2 anos de idade.
Reações adversas: Alergia com prurido eritematoso (pele vermelha e com coceira) e erupções vesiculares (aparecimentos de pequenas bolhas) na região do nariz, lábios superiores e bochechas além de dor e contração involuntária de músculos da região da faringe, dermatite de contato, assaduras, coceira, prisão de ventre, diarreia, salivação excessiva, boca seca, náusea (enjoo) e vômitos.
Precauções: Este medicamento não deve ser utilizado por mulheres grávidas, nutrizes e crianças sem orientação médica ou do cirurgião dentista.', 6, 'bulas/bula.pdf'),
(43,'Betametasona Elixir com 120 ml - Ems – Genérico', 'Ems Genérico', 'n/d', '6003', 'img/produtos/Genericos/BetametasonaElixircom120 ml.jpg', 8.96, 'Betametasona Elixir é também indicado em situações onde se exige efeito corticosteróide rápido e intenso, sendo medicação adjuvante e não substitutiva à convencional. Distúrbios endócrinos: Insuficiência supra-renal primária ou secundária (associada a mineralocorticóides, se necessário), tireoidites não-supurativas e hipercalcemia associada ao câncer e hiperplasia adrenal congênita. Distúrbios osteomusculares: Como auxiliar no tratamento em curto prazo (em período de agudização ou exacerbação) da artrite psoríaca; artrite reumatóide (alguns casos podem necessitar de tratamento com dose de manutenção reduzida); espondilite anquilosante; bursite aguda e subaguda; tenossinovite inespecífica aguda; artrite gotosa; febre reumática aguda e osteoartrite. Há também outras indicações disponíveis na bula.', 6, 'bulas/bula.pdf'),
(44,'Naratriptana 2,5 mg com 4 Comprimidos - Legrand – Genérico', 'Legrand Genérico', 'n/d', '6004', 'img/produtos/Genericos/Naratriptana2,5 mg.jpg', 9.17, 'Informações do Produto

Indicações: O cloridrato de naratriptana é indicado para o tratamento de crises de enxaqueca, com ou sem aura (distúrbios visuais). Uso oral.
Contraindicações: O cloridrato de naratriptana é contraindicado em indivíduos com conhecida hipersensibilidade à naratriptana ou à qualquer dos demais componentes da fórmula. Não deve ser usado por pacientes com antecedentes de infarto agudo do miocárdio ou cardiopatia isquêmica, angina de Prinzmetal ou vasoespasmo coronariano, ou por pacientes com sintomas severos de doença vascular periférica. Não deve ser administrado a pacientes com histórico de acidente vascular cerebral ou ataque isquêmico transitório. Contraindicado em pacientes com hipertensão grave não controlada e em pacientes com insuficiência hepática ou renal severa. Este medicamento não está indicado na profilaxia da enxaqueca, e sim como abortivo das crises agudas.
Reações adversas: Dor, sensação de formigamento e calor, sensação de peso, pressão ou tensão no peito, náuseas e vômitos após o uso da medicação.', 6, 'bulas/bula.pdf');



/* Tabela que armazena itens no carrinho */
CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL auto_increment ,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  primary key(id)
)DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


/* Tabela para armazenar o pedido do cliente */
CREATE TABLE `tbl_order` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `customer_id` INT(11) NOT NULL,
    `amount` DOUBLE NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `state` VARCHAR(255) NOT NULL,
    `zip` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL,
    `payment_type` VARCHAR(255) NOT NULL,
    `order_status` VARCHAR(255) NOT NULL,
    `order_at` DATETIME NOT NULL,
    PRIMARY KEY (id)
)DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


/* Tabela para cadastro do usuário */
CREATE TABLE usuario (
   	  id 			INT AUTO_INCREMENT NOT NULL PRIMARY KEY
	, nome			VARCHAR(50) NOT NULL
	, email			VARCHAR(50) NOT NULL
	, senha 		VARCHAR(50) NOT NULL
    , cpf			varchar(11) not null
	, sexo			enum('m','f') not null
    , dt_nascimento date not null
    , telefone		varchar(11)
    , cep			varchar(9) 
    , endereço		varchar(150) 
    , cidade		varchar(100) 
    , estado		char(2) 
	);



/* Tabelas descontinuadas    
'
CREATE TABLE produto(
	  codprod		int not null primary key
	, prod			varchar(60) not null
    , marca			varchar(40) not null 
    , tarja			varchar(20)
    , preço			varchar(15) not null
    , descricao		varchar(2000)
    , img			varchar(100)
    , codcat		smallint not null
    , bula			varchar(100)
    );
    
CREATE TABLE categoria(
	  codcat		smallint not null primary key
	, nome			varchar(50) not null
    );
    
*/