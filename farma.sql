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
(24,'Fralda Pampers Pants Confort Sec Tamanho M 40 Unidades', 'P&G', 'n/d', '3008', 'img/produtos/Infantil/Fralda Pampers Pants Confort Sec Tamanho M 40 Unidades.jpg', 54.90, 'Fralda Pampers Pants Confort Sec Tamanho M 40 Unidades', 3, 'bulas/bula.pdf');



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