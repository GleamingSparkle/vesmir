<?php
    function returnPersonality($hashtag,$gender){
        switch($hashtag){
            case 1:
                if($gender==1){
                    $artist="";
                    $title="bojovník";
                    $quote=array("Když cítíš bolest - vnímej,<br>život se tě snaží něco naučit.","Pokud se nedokážeš podívat do světla,<br>budeme sedět ve tmě.");
                    $autor=array("","");
                    $description="Bojovník chrání křehké před<br>strachem a nebezpečím<br>jako skořápka vejce.<br>Nic ho nerozháže.<br>Stojí si za svým.";
                }
                else{
                    $artist="";
                    $title="bojovnice";
                    $quote=array("Když to bolí - vnímej,<br>život se tě snaží něco naučit.","Pokud se nedokážeš podívat do světla,<br>můžeme sedět ve tmě.");
                    $autor=array("","");
                    $description="Bojovnice chrání křehké před<br>strachem a nebezpečím<br>jako skořápka vejce.<br>Nic ji nerozháže.<br>Stojí si za svým.";
                }
                $color="#ff2400";
                $colorname="šarlatová";
                $rarity=0;
                
                break;
            case 2:
                if($gender==1){
                    $artist="";
                    $title="sluníčkář";
                    $quote=array("Tancující jsou považováni za blázny těmi,<br>kteří nedokážou slyšet hudbu.","Vše, co si můžeš vzít sebou,<br>jsi odhodil.","Každý lidský život je naplněn<br>nekonečnými možnostmi.");
                    $autor=array("od George Carlina","z filmu Život je krásný (1946)","");
                    $description="Sluníčkář je přirozený.<br>Hledá místa, kde proudí energie.<br>Rád se toulá a cítí<br>volný jako vítr.";
                }
                else{
                    $artist="";
                    $title="víla";
                    $quote=array("Tancující jsou považováni za blázny těmi,<br>kteří nedokážou slyšet hudbu.","Vše, co si můžeš vzít sebou,<br>jsi odhodil.","Každý lidský život je naplněn<br>nekonečnými možnostmi.");
                    $autor=array("od George Carlina","z filmu Život je krásný (1946)","");
                    $description="Víla je přirozená.<br>Umí ocenit krásu i radosti života.<br>Hledá místa, kde proudí energie.<br>Ráda tancuje a cítí se<br>volná jako vítr.";
                }
                $color="#F37A48";
                $colorname="mandarinková";
                $rarity=0;
                
                break;
            case 3:
                if($gender==1){
                    $artist="";
                    $title="pozorovatel";
                    $quote=array("Pravda nepotřebuje tvou pozornost<br>a přesto existuje.","Ukaž mi, kterým směrem hledět,<br>ne co vidět.");
                    $autor=array("","");
                    $description="Pozorovatel má pronikavé oči<br>a nepředvídatelné chování.<br>Vidí skrz každou lež.<br>Nikdy nezapomíná.";
                }
                else{
                    $artist="";
                    $title="pozorovatelka";
                    $quote=array("Pravda nepotřebuje tvou pozornost<br>a přesto existuje.","Ukaž mi, kterým směrem hledět,<br>ne co vidět.");
                    $autor=array("","");
                    $description="Pozorovatelka má pronikavé oči<br>a nepředvídatelné chování.<br>Vidí skrz každou lež.<br>Nikdy nezapomíná.";
                }
                $color="#FCD33B";
                $colorname="pampelišková";
                $rarity=0;
                break;
            case 4:
                if($gender==1){
                    $artist="";
                    $title="indián";
                    $quote=array("Milý starý světe, jsi velmi osamělý,<br>a jsem rád být v tobě naživu.","Mé srdce je tisíc let staré.");
                    $autor=array("od Anny ze Zelených Vrchů","od Charlese Bukowského");
                    $description="Indián je mrštný jako vánek.<br>Žije volně a svobodně.<br>Respektuje přírodu.<br>Bývá plachý.";
                }
                else{
                    $artist="";
                    $title="rusalka";
                    $quote=array("Milý starý světe, jsi velmi osamělý,<br>a jsem ráda být v tobě naživu.","Mé srdce je tisíc let staré.");
                    $autor=array("od Anny ze Zelených Vrchů","od Charlese Bukowského");
                    $description="Rusalka je křehká jako vánek.<br>Miluje volnost a svobodu.<br>Žije v přírodě.<br>Bývá plachá.";
                }
                $color="#3EB489";
                $colorname="mátová";
                $rarity=0;
                
                break;
            case 5:
                if($gender==1){
                    $artist="";
                    $title="princ";
                    $quote=array("Budu respektovat tvůj názor tak dlouho,<br>dokud respektuje existenci druhých.","Největší dar,<br>který můžeš věnovat,<br>je prostor být sám sebou,<br>bez hrozby tvého odchodu.");
                    $autor=array("","");
                    $description="Princ je klidný a rozhodný.<br>Přijímá odpovědnost,<br>za sebe,<br>i své okolí.";
                }
                else{
                    $artist="Celica - Fire Emblem";
                    $title="princezna";
                    $quote=array("Budu respektovat tvůj názor tak dlouho,<br>dokud respektuje existenci druhých.","Největší dar,<br>který můžeš věnovat,<br>je prostor být sám sebou,<br>bez hrozby tvého odchodu.");
                    $autor=array("","");
                    $description="Princezna je klidná a příjemná.<br>Přijímá odpovědnost,<br>za sebe,<br>i své okolí.";
                }
                $color="#0F52BA";
                $colorname="safírová";
                $rarity=0;
                
                break;
            case 6:
                if($gender==1){
                    $artist="";
                    $title="kouzelný";
                    $quote=array("Záleží na teď,<br>teď je domovem.","Náhody neexistují.","Jsi ke mne tak blízko,<br>jako jsme součástí všeho.");
                    $autor=array("","","");
                    $description="Kouzelný je chaotický.<br>Nesnažte se ho pochopit.<br>Příliš nelpí na realitě.<br>Nevěří na náhody.";
                }
                else{
                    $artist="Primrose - Octopath Traveler";
                    $title="tanečnice";
                    $quote=array("Záleží na teď,<br>teď je domovem.","Náhody neexistují.","Jsi ke mne tak blízko,<br>jako jsme součástí všeho.");
                    $autor=array("","","");
                    $description="Tanečnice je chaotická.<br>Nesnažte se ji pochopit.<br>Příliš nelpí na realitě.<br>Nevěří na náhody.";
                }
                $color="#D66984";
                $colorname="nachová";
                $rarity=0;
                
                break;
            case 7:
                if($gender==1){
                    $artist="";
                    $title="strážce";
                    $quote=array("Chceš se uzdravit?<br>Jsi ochoten vzdát se toho,<br>pro co jsi nemocen?","Nejsme trestáni za své hříchy,<br>jsme trestáni hříchy samotnými.");
                    $autor=array("","z knihy Diary of an Oxygen Thief");
                    $description="Strážce stojí u brány přechodu.<br>Skrz ní pustí jen zkušené a připravené.<br>Dbá, aby se žádná z osobností<br>nestřetla s něčím, na co<br>nemá dostatek síly.";
                }
                else{
                    $artist="";
                    $title="strážkyně";
                    $quote=array("Chceš se uzdravit?<br>Jsi ochoten vzdát se toho,<br>pro co jsi nemocen?","Nejsme trestáni za své hříchy,<br>jsme trestáni hříchy samotnými.");
                    $autor=array("","z knihy Diary of an Oxygen Thief");
                    $description="Strážkyně stojí u brány přechodu.<br>Skrz ní pustí jen zkušené a připravené.<br>Dbá, aby se žádná z osobností<br>nestřetla s něčím, na co<br>nemá dostatek síly.";
                }
                $color="#F8DE7E";
                $colorname="jasmínová";
                $rarity=2;
                break;
            case 8:
                if($gender==1){
                    $artist="";
                    $title="umělec";
                    $quote=array("Myslet a chápat,<br>vyzařovat a přitahovat,<br>vidět a vnímat,<br>cítit a žít,<br>dělat a vědět.","Vše, co nás irituje na ostatních,<br>může vést k pochopení sebe.");
                    $autor=array("","od Carla Junga");
                    $description="Umělec přivádí myšlenky k životu.<br>Bývá otrkaný životem.<br>Nosí staré zkušené srdce.<br>Je citlivý na atmosféru, upřímný<br>a respektován okolím víc než si myslí.<br>Lehce odhaduje druhé.<br>Rád se projevuje.";
                }
                else{
                    $artist="Tatiana - Fire Emblem";
                    $title="umělkyně";
                    $quote=array("Myslet a chápat,<br>vyzařovat a přitahovat,<br>vidět a vnímat,<br>cítit a žít,<br>dělat a vědět.","Vše, co nás irituje na ostatních,<br>může vést k pochopení sebe.");
                    $autor=array("","od Carla Junga");
                    $description="Umělkyně přivádí myšlenky k životu.<br>Bývá otrkaná životem.<br>Nosí staré zkušené srdce.<br>Je citlivá na atmosféru, upřímná<br>a respektována okolím víc než si myslí.<br>Lehce odhaduje druhé.<br>Ráda se projevuje.";
                }
                $color="#882D17";
                $colorname="sienová";
                $rarity=2;
                break;
            case 9:
                if($gender==1){
                    $artist="";
                    $title="průvodce";
                    $quote=array("Minulost spíš připravuje,<br>než definuje.","Nikdo se nemění.<br>Jen se stáváme více sami sebou.");
                    $autor=array("","od Anne Rice");
                    $description="Průvodce opatruje méně zkušené.<br>Na požádání poskytuje moudré rady a řešení.<br>Je potřebným učitelem a osobním strážcem.<br>Směruje na správnou cestu.<br>Čeká, kdy bude zavolán.<br>Bývá citlivý, ale pevný a rozhodný.";
                }
                else{
                    $artist="Ophilia - Octopath Traveler";
                    $title="průvodkyně";
                    $quote=array("Minulost spíš připravuje,<br>než definuje.","Nikdo se nemění.<br>Jen se stáváme více sami sebou.");
                    $autor=array("","od Anne Rice");
                    $description="Průvodkyně opatruje méně zkušené.<br>Na požádání poskytuje moudré rady a řešení.<br>Je potřebným učitelkou a osobní strážkyní.<br>Směruje na správnou cestu.<br>Čeká, kdy bude zavolána.<br>Bývá citlivá, ale pevná a rozhodná.";
                }
                $color="#704214";
                $colorname="sépiová";
                $rarity=2;
                break;
            case 10:
                if($gender==1){
                    $artist="";
                    $title="netvor";
                    $quote=array("Jsou tady starší a hlubší<br>jazyky jako slova,<br>tělo na těle,<br>vítr na sněhu,<br>déšť na stromech<br>nebo vlny na kameni.<br>Jazyky tónů, citů,<br>gest, symbolů nebo znamení.","Vše divoké je stokrát silnější<br>jako domestikované.");
                    $autor=array("","od Forresta Cartera");
                    $description="Netvor se cítí součástí přírody.<br>Straní se společnosti,<br>vyjímečně se ukazuje osobnostem<br>s otevřeným srdcem a čistými záměry.<br>Rád se toulá a pozoruje noční oblohu.<br>Pečuje o rozlehlé a starodávné lesy.";
                }
                else{
                    $artist="";
                    $title="dryáda";
                    $quote=array("Jsou tady starší a hlubší<br>jazyky jako slova,<br>tělo na těle,<br>vítr na sněhu,<br>déšť na stromech<br>nebo vlny na kameni.<br>Jazyky tónů, citů,<br>gest, symbolů nebo znamení.","Vše divoké je stokrát silnější<br>jako domestikované.");
                    $autor=array("","od Forresta Cartera");
                    $description="Dryáda se cítí součástí přírody.<br>Straní se společnosti,<br>vyjímečně se ukazuje osobnostem<br>s otevřeným srdcem a čistými záměry.<br>Ráda tancuje a pozoruje noční oblohu.<br>Pečuje o rozlehlé a starodávné lesy.";
                }
                $color="#8A9A5B";
                $colorname="mechová";
                $rarity=2;
                break;
            case 11:
                if($gender==1){
                    $artist="Dreisang - Octopath Traveler";
                    $title="král";
                    $quote=array("Pokud chceš postavit loď,<br>nesvolávej lidi, aby sbírali dřevo,<br>nepřiřazuj jim úkoly a práci,<br>ale raději je uč toužit<br>po nekonečnu moře.","Slova, které povídáš,<br>se stávají domem, v kterém žiješ.","Ničeho v životě není třeba se obávat.<br>Je pouze potřeba tomu porozumět.");
                    $autor=array("od Exupéryho","od Háfize","od Marie Curie-Skłodovské");
                    $description="Král je spravedlivý a sebevědomý.<br>Zajímá se o blaho celku.<br>Přijímá svět z výšky,<br>objektivně a nezaujatě.";
                }
                else{
                    $artist="Rhea - Fire Emblem";
                    $title="královna";
                    $quote=array("Pokud chceš postavit loď,<br>nesvolávej lidi, aby sbírali dřevo,<br>nepřiřazuj jim úkoly a práci,<br>ale raději je uč toužit<br>po nekonečnu moře.","Slova, které povídáš,<br>se stávají domem, v kterém žiješ.","Ničeho v životě není třeba se obávat.<br>Je pouze potřeba tomu porozumět.");
                    $autor=array("od Exupéryho","od Háfize","od Marie Curie-Skłodovské");
                    $description="Královna je spravedlivá a sebevědomá.<br>Zajímá se o blaho celku.<br>Přijímá svět z výšky,<br>objektivně a nezaujatě.";
                }
                $color="#9966CC";
                $colorname="purpurová";
                $rarity=2;
                break;
            case 12:
                if($gender==1){
                    $artist="";
                    $title="šaman";
                    $quote=array("Miluji hvězdy příliš něžně,<br>bát se noci.","Nevnímáme okolí jaké je,<br>ale jací my jsme.","Každé zabušení tvého srdce,<br>každá bolest, každá touha,<br>každá chvíle večerního smutku,<br>každá dřina, každý úsměv,<br>každá chvíle denní únavy,<br>každé probuzení i sladké usínání<br>nabudou božského smyslu,<br>a ty ho v nich budeš číst.");
                    $autor=array("od Galilea Galilei","","od Exupéryho");
                    $description="Šaman je moudrý a trpělivý.<br>Přijímá a odpouští.<br>Čeká, kdy ho bude potřeba.<br>Realizuje přání většiny.<br>Udržuje zvyky a tradice.<br>Postrádá individualitu.";
                }
                else{
                    $artist="";
                    $title="bohyně";
                    $quote=array("Miluji hvězdy příliš něžně,<br>bát se noci.","Nevnímáme okolí jaké je,<br>ale jací my jsme.","Každé zabušení tvého srdce,<br>každá bolest, každá touha,<br>každá chvíle večerního smutku,<br>každá dřina, každý úsměv,<br>každá chvíle denní únavy,<br>každé probuzení i sladké usínání<br>nabudou božského smyslu,<br>a ty ho v nich budeš číst.");
                    $autor=array("od Galilea Galilei","","od Exupéryho");
                    $description="Bohyně je moudrá a trpělivá.<br>Přijímá a odpouští.<br>Čeká, kdy ji bude potřeba.<br>Realizuje přání většiny.<br>Udržuje zvyky a tradice.<br>Postrádá individualitu.";
                }
                $color="#BCB88A";
                $colorname="šalvějová";
                $rarity=2;
                break;
            case 13:
                if($gender==1){
                    $artist="";
                    $title="pečovatel";
                    $quote=array("Pouze starostliví<br>mohou slyšet ticho.","Stále věřím v letní dny,<br>roční období se vždy změní<br>a život si najde cestu.");
                    $autor=array("","");
                    $description="Pečovatel chrání vše živé.<br>Je spokojený v domácím prostředí,<br>kde cítí klid, mír a jistotu.";
                }
                else{
                    $artist="";
                    $title="pečovatelka";
                    $quote=array("Pouze starostliví<br>mohou slyšet ticho.","Stále věřím v letní dny,<br>roční období se vždy změní<br>a život si najde cestu.");
                    $autor=array("","");
                    $description="Pečovatelka miluje vše živé.<br>Je spokojená v domácím prostředí,<br>kde cítí klid, mír a jistotu.<br>Ráda pečuje o květiny<br>a domácí zvířata.";
                }
                $color="#b86927";
                $colorname="oříšková";
                $rarity=3;
                break;
            case 14:
                if($gender==1){
                    $artist="";
                    $title="trpaslík";
                    $quote=array("Přítel je ten,<br>kdo nesoudí<br>a přijímá.","Nešlapejte po broucích,<br>chtěli vám zahrát píseň,<br>zahnat z vašich srdcí tíseň.");
                    $autor=array("","");
                    $description="Trpaslík je veselý,<br>žije pro domov a rodinu.<br>Je hravý a rád si vymýšlí.<br>Má smysl pro humor.";
                }
                else{
                    $artist="Delthea - Fire Emblem";
                    $title="skřítek";
                    $quote=array("Přítel je ten,<br>kdo nesoudí<br>a přijímá.","Nešlapejte po broucích,<br>chtěli vám zahrát píseň,<br>zahnat z vašich srdcí tíseň.");
                    $autor=array("","");
                    $description="Skřítek je veselý,<br>žije pro domov a rodinu.<br>Je hravý a rád si vymýšlí.<br>Má smysl pro humor.";
                }
                $color="#F5DEB3";
                $colorname="pšeničná";
                $rarity=3;
                break;
            case 15:
                if($gender==1){
                    $artist="";
                    $title="záře";
                    $quote=array("Nikdo nedokáže zachránit nikoho<br>před sebou samým, sviť,<br>ukazuj cestu.");
                    $autor=array("");
                    $description="Záře šíří radost a štěstí.<br>Kde se objeví, tam se probouzí život.<br>Jeho dotek uzdravuje nemoci.<br>Je nenáročný a stálý.<br>Neklade si cíle,<br>přesto k němu často přícházejí<br>osobnosti pro pomoc nebo radu.";
                }
                else{
                    $artist="";
                    $title="hvězda";
                    $quote=array("Nikdo nedokáže zachránit nikoho<br>před sebou samým, sviť,<br>ukazuj cestu.");
                    $autor=array("");
                    $description="Hvězda šíří radost a štěstí.<br>Kde se objeví, tam se probouzí život.<br>Její dotek uzdravuje nemoci.<br>Je nenáročná a stálá.<br>Neklade si cíle,<br>přesto k ní často přícházejí<br>osobnosti pro pomoc nebo radu.";
                }
                $color="gold";
                $colorname="zlatá";
                $rarity=3;
                break;
            case 16:
                if($gender==1){
                    $artist="";
                    $title="anděl";
                    $quote=array("Umíme létat,<br>protože nenosíme břemena.","Když chceš,<br>celý svět se spojí,<br>aby ses uskutečnil.","Následuj své srdce.");
                    $autor=array("","od Paula Coelha");
                    $description="Anděl je čistý a laskavý.<br>Udržuje ostatní osobnosti v harmonii.<br>Září a ukazuje směr cestou životem.<br>Dbá o vývoj a plní přání.";
                }
                else{
                    $artist="";
                    $title="anděl";
                    $quote=array("Umíme létat,<br>protože nenosíme břemena.","Když chceš,<br>celý svět se spojí,<br>aby ses uskutečnil.","Následuj své srdce.");
                    $autor=array("","od Paula Coelha");
                    $description="Anděl je čistý a laskavý.<br>Udržuje ostatní osobnosti v harmonii.<br>Září a ukazuje směr cestou životem.<br>Dbá o vývoj a plní přání.";
                }
                $color="silver";
                $colorname="stříbrná";
                $rarity=3;
                break;
            case 17:
                if($gender==1){
                    $artist="";
                    $title="mág";
                    $quote=array("Jednoho dne najdu správná slova,<br>a budou jednoduchá.","Navždy se skládá z mnoho teď.","Svět je plný magie,<br>trpělivě čekající na naše smysly,<br>až zostří.");
                    $autor=array("od Jacka Kerouaca","","od Williama Butlera Yeatse");
                    $description="Mág touží uskutěčnit svá přání.<br>Vnímá hloubku a podstatu,<br>snaží se ji vysvětlit,<br>vnést do chaosu pořádek.";
                }
                else{
                    $artist="";
                    $title="kouzelnice";
                    $quote=array("Jednoho dne najdu správná slova,<br>a budou jednoduchá.","Navždy se skládá z mnoho teď.","Svět je plný magie,<br>trpělivě čekající na naše smysly,<br>až zostří.");
                    $autor=array("od Jacka Kerouaca","","od Williama Butlera Yeatse");
                    $description="Kouzelnice touží uskutěčnit svá přání.<br>Vnímá hloubku a podstatu,<br>snaží se ji vysvětlit,<br>vnést do chaosu pořádek.";
                }
                $color="#800020";
                $colorname="vínová";
                $rarity=3;
                break;
            case 18:
                if($gender==1){
                    $artist="";
                    $title="nezastavitelný";
                    $quote=array("Peklo lhářům.");
                    $autor=array("");
                    $description="Nezastavitelný touží po moci.<br>Za každou cenu realizuje svá přání.<br>Pro dosažení cíle dokáže ublížit.<br>Je silný, pevný a rozhodný.";
                }
                else{
                    $artist="";
                    $title="nezastavitelná";
                    $quote=array("Peklo lhářům.");
                    $autor=array("");
                    $description="Nezastavitelná touží po moci.<br>Za každou cenu realizuje svá přání.<br>Pro dosažení cíle dokáže ublížit.<br>Je silná, pevná a rozhodná.";
                }
                $color="#353839";
                $colorname="onyxová";
                $rarity=3;
                break;
            case 19:
                if($gender==1){
                    $artist="";
                    $title="hospodář";
                    $quote=array("Když se rozhoduješ podle své duše,<br>cítíš v sobě téct řeku,<br>štěstí.","Příliš mnoho lidí<br>hledá správnou osobu,<br>místo toho, snažit se<br>být správnou osobou.");
                    $autor=array("od Balchí Rúmího","od Glorie Steinem");
                    $description="Hospodář má stále co dělat.<br>Cítí se šťastný tam, kde to žije.<br>Nezkazí žádnou legraci.<br>Vzácně tráví čas sám.";
                }
                else{
                    $artist="";
                    $title="hospodyně";
                    $quote=array("Když se rozhoduješ podle své duše,<br>cítíš v sobě téct řeku,<br>štěstí.","Příliš mnoho lidí<br>hledá správnou osobu,<br>místo toho, snažit se<br>být správnou osobou.");
                    $autor=array("od Balchí Rúmího","od Glorie Steinem");
                    $description="Hospodyně má stále co dělat.<br>Cítí se šťastná tam, kde to žije.<br>Nezkazí žádnou legraci.<br>Vzácně tráví čas sama.";
                }
                $color="#f5cfb5";
                $colorname="lasturová";
                $rarity=1;
                break;
            case 20:
                if($gender==1){
                    $artist="Therion - Octopath Traveler";
                    $title="chovatel";
                    $quote=array("Zvířata jsou tady s námi,<br>ne pro nás.","Pojďme společně sedět zabalení do deky<br>a sledovat listí měnit barvu.");
                    $autor=array("od Jenny Browna","");
                    $description="Chovatel je přizpůsobivý a<br>spokojený kdekoliv cítí klid a mír.<br>Rád pečuje o vše živé.<br>Má otevřené srdce.";
                }
                else{
                    $artist="Faye - Fire Emblem";
                    $title="chovatelka";
                    $quote=array("Zvířata jsou tady s námi,<br>ne pro nás.","Pojďme společně sedět zabalení do deky<br>a sledovat listí měnit barvu.");
                    $autor=array("od Jenny Browna","");
                    $description="Chovatelka je přizpůsobivá a<br>spokojená kdekoliv cítí klid a mír.<br>Ráda pečuje o vše živé.<br>Má otevřené srdce.";
                }
                $color="#D2B48C";
                $colorname="béžová";
                $rarity=1;
                break;
            case 21:
                if($gender==1){
                    $artist="";
                    $title="druid";
                    $quote=array("Naslouchej mezerám mezi slovy,<br>vnímej prázdno mezi řádky,<br>vedle toho co říkají.","Při každé procházce přírodou<br>jeden získá mnohem více než hledá.");
                    $autor=array("","od Johna Muira");
                    $description="Druid je odevzdaný životu v přírodě.<br>Pečuje o rozlehlé a starodávné háje.<br>Cítí energie. Vyzařuje klid a mír.<br>Svou přítomností uzdravuje.<br>Usiluje o harmonii.<br>Bývá tichý.";
                }
                else{
                    $artist="";
                    $title="druidka";
                    $quote=array("Naslouchej mezerám mezi slovy,<br>vnímej prázdno mezi řádky,<br>vedle toho co říkají.","Při každé procházce přírodou<br>jeden získá mnohem více než hledá.");
                    $autor=array("","od Johna Muira");
                    $description="Druidka je odevzdaná životu v přírodě.<br>Pečuje o rozlehlé a starodávné háje.<br>Cítí energie. Vyzařuje klid a mír.<br>Svou přítomností uzdravuje.<br>Usiluje o harmonii.<br>Bývá tichá.";
                }
                $color="#00755E";
                $colorname="kapradinová";
                $rarity=1;
                break;
            case 22:
                if($gender==1){
                    $artist="";
                    $title="rytíř";
                    $quote=array("Nic nehoří dvakrát.");
                    $autor=array("");
                    $description="Rytíř je věrný a odvážný.<br>Střeží hranice mezi dobrem a zlem,<br>připraven obětovat vlastní život.<br>Bývá spravedlivý a rozumný.<br>Udržuje pořádek a řád.";
                }
                else{
                    $artist="Mathilda - Fire Emblem";
                    $title="amazonka";
                    $quote=array("Nic nehoří dvakrát.");
                    $autor=array("");
                    $description="Amazonka je věrná a odvážná.<br>Střeží hranice mezi dobrem a zlem,<br>připravena obětovat vlastní život.<br>Bývá spravedlivá a rozumná.<br>Udržuje pořádek a řád.";
                }
                $color="#DC143C";
                $colorname="karmínová";
                $rarity=1;
                break;
            case 23:
                if($gender==1){
                    $artist="";
                    $title="vyvolený";
                    $quote=array("Jak by to nemohlo být správné,<br>když to bylo uděláno s láskou?");
                    $autor=array("od Susan Atkins");
                    $description="Vyvolený má pevnou víru ve své sny.<br>Jeho naděje je nezlomná.<br>Když se rozhodne jít,<br>nic ho nezastaví.<br>Koná význámné skutky,<br>stává se hrdinou.";
                }
                else{
                    $artist="";
                    $title="vyvolená";
                    $quote=array("Jak by to nemohlo být správné,<br>když to bylo uděláno s láskou?");
                    $autor=array("od Susan Atkins");
                    $description="Vyvolená má pevnou víru ve své sny.<br>Její naděje je nezlomná.<br>Když se rozhodne jít,<br>nic ji nezastaví.<br>Koná význámné skutky,<br>stává se hrdinkou.";
                }
                $color="#B57EDC";
                $colorname="levandulová";
                $rarity=1;
                break;
            case 24:
                if($gender==1){
                    $artist="";
                    $title="hrdina";
                    $quote=array("Vše má své trhliny,<br>aby se dovnitř dostalo světlo.","Život nás vždy vede tam,<br>kde dokážeme pomoct nejvíce.<br>Tvá přítomnost je tady důležitá.");
                    $autor=array("","");
                    $description="Hrdina žije pro ostatní.<br>Mohl by se pro druhé rozkrájet.<br>Je pozorný a má zlaté srdce.<br>Pomáhá nehledě na situaci<br>a jedná intuitivně.<br>Touží po míru.";
                }
                else{
                    $artist="Silque - Fire Emblem";
                    $title="obětavá";
                    $quote=array("Vše má své trhliny,<br>aby se dovnitř dostalo světlo.","Život nás vždy vede tam,<br>kde dokážeme pomoct nejvíce.<br>Tvá přítomnost je tady důležitá.");
                    $autor=array("","");
                    $description="Obětavá žije pro ostatní.<br>Mohla by se pro druhé rozkrájet.<br>Je citlivá a má zlaté srdce.<br>Pomáhá nehledě na situaci<br>a jedná intuitivně.<br>Potřebuje ochranu.<br>Touží po míru.";
                }
                $color="#F9C901";
                $colorname="medová";
                $rarity=1;
                break;
            case 25:
                if($gender==1){
                    $artist="";
                    $title="věčně mladý";
                    $quote=array("Není to tvář,<br>co dělá z člověka příšeru.<br>Jsou to možnosti, které<br>tvoří během svého života.");
                    $autor=array("od Naruta");
                    $description="Věčně mladý září jako Slunce,<br>zvyklý být atraktivní<br>a středem pozornosti.<br>Představuje touhu<br>vytvořit nebe na zemi.";
                }
                else{
                    $artist="";
                    $title="kráska";
                    $quote=array("Krása není nikdy dokonalá.","Krása zachrání svět.");
                    $autor=array("","od Fyodora Dostojevského");
                    $description="Kráska září jako Slunce,<br>zvyklá být atraktivní<br>a středem pozornosti.<br>Představuje touhu<br>vytvořit nebe na zemi.";
                }
                $color="#7FFFD4";
                $colorname="akvamarínová";
                $rarity=1;
                break;
            case 26:
                if($gender==1){
                    $artist="";
                    $title="bohém";
                    $quote=array("Vše, co se teď děje,<br>bylo jednou pouhou myšlenkou.","Vše, co potřebuješ,<br>příjde v pravý čas.");
                    $autor=array("","");
                    $description="Bohém mívá spontánní rozhodnutí<br>a stále spoustu energie.<br>Bývá živý a atraktivní.<br>Jedná instinktivně.";
                }
                else{
                    $artist="";
                    $title="bohémka";
                    $quote=array("Vše, co se teď děje,<br>bylo jednou pouhou myšlenkou.","Vše, co potřebuješ,<br>příjde v pravý čas.");
                    $autor=array("","");
                    $description="Bohémka mívá spontánní rozhodnutí<br>a stále spoustu energie.<br>Bývá živá a atraktivní.<br>Jedná instinktivně.";
                }
                $color="#FF7F50";
                $colorname="korálová";
                $rarity=1;
                break;
            case 27:
                if($gender==1){
                    $artist="";
                    $title="mudrc";
                    $quote=array("Sny tě nemohou uspokojit<br>z prostého důvodu.<br>Nekladou odpor.","Věci, které se nikdy nestanou,<br>bývají mnohdy ve svých důsledcích<br>stejně skutečné jako ty,<br>které se vyplní.");
                    $autor=array("od Exupéryho","od Charlese Dickense");
                    $description="Mudrc žije bohatým<br>vnitřním světem.<br>Vidí do hloubky.<br>Dokáže si vizualizovat<br>složité jevy a popisovat<br>je pomocí symbolů,<br>čísel a písmen.<br>Snaží se vize spojovat,<br>vyjadřovat a dokazovat.<br>Bývá tvrdohlavý.";
                }
                else{
                    $artist="Genny - Fire Emblem";
                    $title="vědma";
                    $quote=array("Sny tě nemohou uspokojit<br>z prostého důvodu.<br>Nekladou odpor.","Věci, které se nikdy nestanou,<br>bývají mnohdy ve svých důsledcích<br>stejně skutečné jako ty,<br>které se vyplní.");
                    $autor=array("od Exupéryho","od Charlese Dickense");
                    $description="Vědma žije bohatým<br>vnitřním světem.<br>Vidí do hloubky.<br>Dokáže si vizualizovat<br>složité jevy a popisovat<br>je pomocí symbolů,<br>čísel a písmen.<br>Snaží se vize spojovat,<br>vyjadřovat a dokazovat.<br>Bývá tvrdohlavá.";
                }
                $color="#4B0082";
                $colorname="indigová";
                $rarity=1;
                break;
            case 28:
                if($gender==1){
                    $artist="";
                    $title="čistý";
                    $quote=array("Vždy jsem byl dokonalý, stejně jako ty.<br>Pokud to nedokážeme příjmout,<br>tak protože jsme příliš zaneprázdněni<br>souděním všeho pro to co není<br>a čím by mělo být.");
                    $autor=array("");
                    $description="Čistý svítí pro ostatní<br>jako hvězda na nebi.<br>Bez cíle se toulá světem<br>a dělí se o moudrost a sílu.<br>Svou přítomností uzdravuje.";
                }
                else{
                    $artist="";
                    $title="nevinná";
                    $quote=array("Vždy jsem byla dokonalá, stejně jako ty.<br>Pokud to nedokážeme příjmout,<br>tak protože jsme příliš zaneprázdněni<br>souděním všeho pro to co není<br>a čím by mělo být.");
                    $autor=array("");
                    $description="Nevinná svítí pro ostatní<br>jako hvězda na nebi.<br>Bez cíle se toulá světem<br>a dělí se o moudrost a lásku.<br>Svou přítomností uzdravuje.";
                }
                $color="#F3E5AB";
                $colorname="vanilková";
                $rarity=1;
                break;
            case 29:
                if($gender==1){
                    $artist="";
                    $title="cestovatel";
                    $quote=array("Krása tkví v oku pozorovatele.");
                    $autor=array("od Williama Shakespeara");
                    $description="Cestovatel nevydrží<br>dlouho na jednom místě.<br>Vydává se do světa,<br>hledat nové tváře,<br>zvyky a kultury.<br>Touží po zážitcích.<br>Své výpravy si rozumně plánuje.";
                }
                else{
                    $artist="Tressa - Octopath Traveler";
                    $title="cestovatelka";
                    $quote=array("Krása tkví v oku pozorovatele.");
                    $autor=array("od Williama Shakespeara");
                    $description="Cestovatelka nevydrží<br>dlouho na jednom místě.<br>Vydává se do světa,<br>hledat nové tváře,<br>zvyky a kultury.<br>Touží po zážitcích.<br>Své výpravy si rozumně plánuje.";
                }
                $color="#00FFFF";
                $colorname="tyrkysová";
                $rarity=1;
                break;
            case 30:
                if($gender==1){
                    $artist="";
                    $title="poustevník";
                    $quote=array("Nevím kam jdu,<br>ale jsem na své cestě.","Ne všichni bloudící jsou ztracení.");
                    $autor=array("","od Tolkiena");
                    $description="Poustevník se toulá od místa k místu.<br>Cítí hloubku a podstatu okolí.<br>Vede ho intuice.";
                }
                else{
                    $artist="";
                    $title="poustevnice";
                    $quote=array("Nevím kam jdu,<br>ale jsem na své cestě.","Ne všichni bloudící jsou ztracení.");
                    $autor=array("","od Tolkiena");
                    $description="Poustevnice se toulá od místa k místu.<br>Cítí hloubku a podstatu okolí.<br>Vede ji intuice.";
                }
                $color="#D8BFD8";
                $colorname="bodláková";
                $rarity=1;
                break;
            case 31:
                if($gender==1){
                    $artist="";
                    $title="léčitel";
                    $quote=array("Všechno se hojí.<br>Tvé tělo se hojí.<br>Tvé srdce se hojí.<br>Mysl se hojí.<br>Rány se hojí.<br>Tvá duše se obnovuje.<br>Radost se má tendenci vždy vrátit.<br>Špatné časy nejsou napořád.");
                    $autor=array("od Christiany Rutkowské");
                    $description="Léčitel umí být oddaný a obětavý,<br>ale má pevné hranice.<br>Drží se při zemi.<br>Je sebevědomý.";
                }
                else{
                    $artist="";
                    $title="léčitelka";
                    $quote=array("Všechno se hojí.<br>Tvé tělo se hojí.<br>Tvé srdce se hojí.<br>Mysl se hojí.<br>Rány se hojí.<br>Tvá duše se obnovuje.<br>Radost se má tendenci vždy vrátit.<br>Špatné časy nejsou napořád.");
                    $autor=array("od Christiany Rutkowské");
                    $description="Léčitelka umí být oddaná a obětavá,<br>ale má pevné hranice.<br>Drží se při zemi.<br>Je sebevědomá.";
                }
                $color="#00A86B";
                $colorname="jadeová";
                $rarity=1;
                break;
            case 32:
                if($gender==1){
                    $artist="";
                    $title="snílek";
                    $quote=array("Chci být jako voda,<br>protéká mezi prsty,<br>ale unese loď.","Nejsi tím co přichází a odchází.","Myšlenka jednoho vyvolává<br>neslyšnou odpověď druhého.");
                    $autor=array("","","");
                    $description="Snílek žije pro ideály.<br>Nerad je středem pozornosti.<br>Mívá často hlavu v oblacích.<br>Touží po lepším světě.<br>Bývá oddaný, pokorný,<br>obětavý a otevřený.";
                }
                else{
                    $artist="Clair - Fire Emblem";
                    $title="nadnesená";
                    $quote=array("Chci být jako voda,<br>protéká mezi prsty,<br>ale unese loď.","Nejsi tím co přichází a odchází.","Myšlenka jednoho vyvolává<br>neslyšnou odpověď druhého.");
                    $autor=array("","","");
                    $description="Nadnesená žije pro ideály.<br>Nerada je středem pozornosti.<br>Mívá často hlavu v oblacích.<br>Touží po lepším světě.<br>Bývá oddaná, pokorná,<br>obětavá a otevřená.";
                }
                $color="#7CB9E8";
                $colorname="nebeská";
                $rarity=1;
                break;
            case 33:
                if($gender==1){
                    $artist="";
                    $title="nedotknutelný";
                    $quote=array("Jsem často sám,<br>vzácně osamělý.","Nikdy neupadneš,<br>držíš-li se hvězd,<br>země je vratká a šílená,<br>jen by ti obíjela kolena.","Nenechám nikoho<br>procházet se skrz mou mysl<br>s jejich špinavými hnáty.");
                    $autor=array("","","od Mahatma Gandhiho");
                    $description="Nedotknutelný žije<br>bohatým vnitřním světem.<br>Rád tráví čas sám.";
                }
                else{
                    $artist="";
                    $title="nedotknutelná";
                    $quote=array("Jsem často sama,<br>vzácně osamělá.","Nikdy neupadneš,<br>držíš-li se hvězd,<br>země je vratká a šílená,<br>jen by ti obíjela kolena.","Nenechám nikoho<br>procházet se skrz mou mysl<br>s jejich špinavými hnáty.");
                    $autor=array("","","od Mahatma Gandhiho");
                    $description="Nedotknutelná žije<br>bohatým vnitřním světem.<br>Ráda tráví čas sama.";
                }
                $color="#FFFAFA";
                $colorname="sněhová";
                $rarity=1;
                break;
            default:
                $artist="";
                $title="?";
                $quote=array("");
                $autor=array("");
                $description="";
                $color="";
                $colorname="";
                $rarity=0;
        }
        return array($title,$quote,$autor,$description,$color,$colorname,$rarity,$artist);
    }
?>