<?php
$format = "Y年m月d日 H时i分s秒";
$timezone = [
    12 => ["东西十二区", "奥克兰、圣诞岛、努库阿洛法、阿纳德尔、法考福..."],
    11 => ["东十一区", "霍尼亚拉、维拉港、马加丹、中科雷姆斯克、南萨哈林斯克..."],
    10 => ["东十区", "悉尼、墨尔本、莫尔兹比港、布里斯班、阿加尼亚..."],
    9 => ["东九区", "东京、首尔、梅莱凯奥克、达尔文、阿德莱德..."],
    8 => ["东八区", "北京、香港、台北、新加坡、吉隆坡..."],
    7 => ["东七区", "曼谷、雅加达、河内、金边、万象..."],
    6 => ["东六区", "仰光、阿拉木图、廷布、比什凯克、阿斯塔纳..."],
    5 => ["东五区", "孟买、塔什干、伊斯兰堡、新德里、加德满都..."],
    4 => ["东四区", "迪拜、德黑兰、安曼、喀布尔、路易港..."],
    3 => ["东三区", "莫斯科、伊斯坦布尔、塔那那利佛、喀土穆、达累斯萨拉姆..."],
    2 => ["东二区", "巴黎、约翰内斯堡、开罗、罗马、慕尼黑..."],
    1 => ["东一区", "伦敦、阿尔及尔、拉各斯、金沙萨、都柏林..."],
    0 => ["中时区", "卡萨布兰卡、阿克拉、努瓦克肖特、拉巴特、詹姆斯敦..."],
    -1 => ["西一区", "普拉亚、明德卢、圣玛丽亚..."],
    -2 => ["西二区", "圣约翰、玛丽港、费尔南多-迪诺罗尼亚、圣皮埃尔..."],
    -3 => ["西三区", "布宜诺斯艾利斯、里约热内卢、蒙得维的亚、圣保罗、巴西利亚..."],
    -4 => ["西四区", "多伦多、纽约、华盛顿、拉巴斯、圣地亚哥..."],
    -5 => ["西五区", "芝加哥、利马、波哥大、金斯敦、墨西哥城..."],
    -6 => ["西六区", "圣萨尔瓦多、危地马拉城、特古西加尔巴、马那瓜、卡尔加里..."],
    -7 => ["西七区", "洛杉矶、温哥华、旧金山、西雅图、拉斯维加斯..."],
    -8 => ["西八区", "安克雷奇、亚当斯敦、乌纳拉斯加、费尔班克斯、朱诺..."],
    -9 => ["西九区", "埃达克、甘比尔群岛、塔伊奥哈..."],
    -10 => ["西十区", "帕皮提、火奴鲁鲁、拉罗汤加、瓦伊塔佩、希洛..."],
    -11 => ["西十一区", "帕果帕果、阿洛菲..."],
];
$city = [
12 => ["圣诞岛","查塔姆群岛","奥克兰","惠灵顿","陶朗加","北帕默斯顿","基督城","拉瓦基","阿巴里灵阿环礁","法考福","阿塔富环礁","努库阿洛法","内亚富","庞艾","苏瓦","楠迪","莱武卡","劳托卡","拉巴萨","阿皮亚","萨瓦伊岛","查塔姆群岛","阿纳德尔","佩韦克","比利比诺","马朱罗","夸贾林环礁","亚伦","富那富提","威克岛","马塔乌图","奥克兰","惠灵顿","陶朗加","北帕默斯顿","基督城","勘察加彼得巴甫洛夫斯克","苏瓦","楠迪","莱武卡","劳托卡","拉巴萨","塔拉瓦","塔比特韦亚"],

11 => ["悉尼","墨尔本","堪培拉","霍巴特","卧龙岗","凯马","宝勒尔","特拉拉尔根","布卡","阿拉瓦","豪勋爵岛","马加丹","努美阿","金斯敦","帕利基尔","科洛尼亚","南萨哈林斯克","霍尼亚拉","吉佐","中科雷姆斯克","维拉港","卢甘维尔"],

10 => ["阿德莱德","豪勋爵岛","莫尔兹比港","芒特哈根","莱城","拉包尔","海参崴","阿穆尔共青城","维尔霍扬斯克","悉尼","墨尔本","布里斯班","堪培拉","霍巴特","凯恩斯","卧龙岗","特拉拉尔根","凯马","宝勒尔","科洛尼亚","维诺","阿加尼亚","塞班"],

9 => ["阿德莱德","达尔文","艾利斯斯普林斯","泰能特溪","乔巴山","首尔","仁川","大邱","釜山","昌原","丽水","蔚山","水原","光州","群山","江陵","大田","平昌郡","木浦","全州","济州","梅莱凯奥克","科罗尔","帝力","包考","苏艾","萨姆","乌兰巴托","额尔登特","达尔汗","巴彦洪戈尔","马诺夸里","查亚普拉","特尔纳特","索菲菲","安汶","赤塔","雅库茨克","季克西","东京","大阪","新潟","名古屋","松山","京都","熊本","神户","横滨","宇都宫","静冈","札幌","相模原","鹿儿岛","广岛","姬路","滨松","北九州","川崎","福冈","横须贺","金泽","福岛","仙台","佐世保","津市","铃鹿","青森","钏路","高知","长崎","长野","那霸","冈山"],

8 => ["尤克拉","平壤","南浦","开城","价川","咸兴","海州","清津","元山","新义州","新加坡","乌兰巴托","额尔登特","达尔汗","巴彦洪戈尔","望加锡","肯达里","万鸦老","哥伦打洛市","巴厘巴板","帕卢","登巴萨","新卡拉雅","恩德","古邦","三马林达","马辰","马穆朱","马塔兰","拉巴","珀斯","斯里巴加湾","都东","白拉奕","乔巴山","北京","上海","台北","澳门","重庆","深圳","广州","杭州","成都","拉萨","天津","青岛","济南","西安","沈阳","锦州","抚顺","乐山","太原","淄博","昆明","乌鲁木齐","佛山","兰州","汕头","厦门","福州","吉林","长春","南昌","南京","苏州","包头","长沙","常德","武汉","郑州","信阳","洛阳","齐齐哈尔","牡丹江","哈尔滨","唐山","石家庄","贵阳","南宁","大连","鞍山","本溪","桂林","湛江","秦皇岛","廊坊","邯郸","保定","海口","大庆","张家界","南通","常州","呼伦贝尔","呼和浩特","徐州","台中","高雄","新竹","桃园市","喀什","芜湖","淮南","淮北","合肥","绍兴","宁波","大同","昌都","丹东","西宁","银川","咸阳","香港","九龙","科布多","赤塔","伊尔库茨克","乌兰乌德","吉隆坡","哥打基纳巴卢","哥打巴鲁","新山","怡保","槟城","亚罗士打","加央","诗巫","莎亚南","芙蓉","泗里奎","米里","马六甲","古晋","关丹","瓜拉丁加奴","马尼拉","奎松","三投斯将军市","达沃","宿雾市","卡加延德奥罗","安吉尔斯","卡布尧","普林塞萨港","奥隆阿波","马拉威市","马巴拉卡特","怡朗市","三宝颜市","土格加劳","打拉市"],

7 => ["新村","科布多","曼谷","河内","万象","金边","坤敬","芭堤雅","海防","清迈","胡志明市","岘港","芹苴","北榄坡府","呵叻府","乌隆府","普吉港","合艾","桑怒","马德望","藩切","芽庄","顺化","沙湾拿吉","巴色","上丁","琅勃拉邦","西哈努克","暹粒","诺里尔斯克","克拉斯诺亚尔斯克","哈坦加","克麦罗沃","克孜勒","雅加达","泗水","帕朗卡拉亚","三宝垄","明古鲁市","班达亚齐","坤甸","万隆","巨港","棉兰","梭罗市","玛琅","茉莉芬","古突斯","井里汶","茂物","占碑","北加浪岸","班达楠榜","塔西马拉亚","丹绒槟榔","巴淡岛","佩坎巴鲁","先达","日惹","吉打邦","勿加泗","巴东","西冷","邦加槟港","直葛","谏义里"],

6 => ["班腾","仰光","内比都","曼德勒","土瓦","毛淡棉","巴尔瑙尔","新西伯利亚","托木斯克","戈尔诺","鄂木斯克","克孜勒奥尔达","比什凯克","奥什","卡拉科尔","贾拉拉巴德","阿拉木图","阿斯塔纳","什姆肯特","佩特罗帕尔","卡拉干达","达卡","吉大港市","坚德布尔","博格拉","巴里萨尔","库米拉","坦盖尔","锡尔赫特","赛义德布尔","拉杰沙希","巴布纳","迈门辛","库尔纳","杰索尔","依苏而迪","廷布","萨姆德鲁琼卡尔","彭措林","帕罗"],

5 => ["加德满都","达朗","比拉德讷格尔","博卡拉","孟买","新德里","德里","班加罗尔","加尔各答","豪拉","斯里贾亚瓦德纳普拉科特","瓦拉纳西","密拉特","勒克瑙","坎普尔","加兹阿巴德","安拉阿巴德","阿格拉","科伦坡","海得拉巴","金奈","斋浦尔","卢迪亚纳","阿赫梅德加尔","布巴内什瓦尔","马杜赖","浦那","纳西克","那格浦尔","印多尔","巴罗达","苏拉特","锡鲁万纳塔普拉姆","巴特那","艾哈迈达巴德","维沙卡帕特南","阿纳恩塔普尔","布莱尔港","戈特拉","卡努尔","卡基纳达","亭可马里","纳尔巴里","科钦","比贾布尔","门格洛尔","胡布利","伊切尔格伦吉","奥兰加巴德","阿科特","阿科拉","艾哈迈德纳格尔","贾巴尔普尔","卢纳瓦达","达摩","博帕尔","西姆拉","达兰萨拉","瑟撒","希萨尔","哥印拜陀","西隆","乞拉朋齐","瓦塞维拉尔","贾朗达尔","德尼","巴杜勒","西里古里","尼扎马巴德","戈勒克布尔","康堤","卡尔穆奈","贾夫纳","杜尔加布尔","阿散索尔","阿克托别","阿克套","乌拉尔","阿特劳","拉合尔","卡拉奇","伊斯兰堡","木尔坦","拉瓦尔品第","哈费扎巴德","古杰兰瓦拉","费萨拉巴德","巴哈瓦尔布尔","恰夸尔","古杰拉特","奎达","白沙瓦","纳罗瓦","苏库尔","锡亚尔科特","萨戈达","萨希瓦尔","米尔布尔哈斯","库沙布","哈内瓦尔","海得拉巴","哲伦","法兰西港","杜尚别","库洛布","苦盏","阿什哈巴德","土库曼巴希","土库曼纳巴德","马雷","达沙古兹","巴尔坎纳巴德","塔什干","撒马尔罕","努库斯","纳曼干","安集延","叶卡捷琳堡","彼尔姆","车里亚宾斯克","乌法","马格尼托哥尔斯克","苏尔古特","秋明"],

4 => ["喀布尔","坎大哈","赫拉特","法拉","马扎里沙里夫","拉什卡尔加","霍斯特","德黑兰","拉什特","库姆","大不里士","舒什塔尔","设拉子","萨里市","萨南达季","马什哈德","马哈巴德","克尔曼沙赫","克尔曼","卡尚","卡拉季","哈马丹","戈尔甘","伊斯法罕","迪兹富勒","布什尔","博鲁杰尔德","比尔詹德","贝赫贝汉","阿巴斯港","阿瓦士","亚兹德","乌尔米耶","路易港","马特琳港","圣但尼","圣皮埃尔","圣保罗","伊热夫斯克","萨马拉","维多利亚","埃里温","叶海格纳佐尔","基洛瓦坎","锡西安","卡潘","久姆里","加瓦尔","巴库","阿格贾贝迪","斯捷潘纳克特","苏姆盖特","希尔凡","沙马基","舍基","纳希切万","明盖恰乌尔","连科兰","哈奇马斯","占贾","第比利斯","库塔伊西","巴塔米","迪拜","阿布扎比","马斯喀特","沙迦","锡卜","塞拉莱","尼兹瓦","艾因"],

3 => ["德黑兰","拉什特","库姆","大不里士","舒什塔尔","设拉子","萨里市","萨南达季","马什哈德","马哈巴德","克尔曼沙赫","克尔曼","卡尚","卡拉季","哈马丹","戈尔甘","伊斯法罕","迪兹富勒","布什尔","博鲁杰尔德","比尔詹德","贝赫贝汉","阿巴斯港","阿瓦士","亚兹德","乌尔米耶","莫斯科","明斯克","喀山","圣彼得堡","梁赞","诺夫哥罗德","下诺夫哥罗德","摩尔曼斯克","贝卢什亚古巴","阿尔汉格尔斯克","维切布斯克","萨里霍斯克","波洛茨克","莫吉廖夫","斯塔夫罗波尔","五山城","格罗德诺","戈麦尔","布列斯特","鲍里索夫","巴拉诺维奇","巴布鲁伊斯克","约什卡尔奥拉","利佩茨克","索契","新罗西斯克港","瑟克特夫卡尔","埃利斯塔","马哈奇卡拉","切博克萨雷","格罗兹尼","布良斯克","阿斯特拉罕","卡马河畔切尔内","茨欣瓦利","苏呼米","卢甘斯克","顿涅茨克","辛菲罗波尔","弗拉基米尔","图拉","利雅得","科威特城","多哈","安曼","巴格达","麦地那","麦加","吉达","麦纳麦","萨那","亚丁","提克里特","苏莱曼尼亚","纳西里耶","纳杰夫","摩苏尔","基尔库克","卡尔巴拉","埃尔比勒","希拉","巴士拉","哈迪布","穆卡拉","荷台达","塔伊兹","伊尔比德","胡富夫","哈费尔巴廷","达曼","布赖代","卡提夫","塔布克","塞卡凯","海米斯穆谢特","里法","豪尔","朱迈利耶","扎尔卡","马德巴","马安","内罗毕","亚的斯亚贝巴","达累斯萨拉姆","喀土穆","塔那那利佛","多多马","阿斯马拉","坎帕拉","吉布提","莫洛尼","朱巴","马里恩岛","摩加迪沙","基斯马尤","哈尔格萨","加尔卡尤","博萨索","柏培拉","巴尔代雷","穆察穆杜","奥博克","多拉","塔朱拉","卡萨拉","欧拜伊德","法希尔","延比奥","瓦乌","马拉卡尔","丰博尼","马穆楚","图利亚拉","图阿马西纳","马哈赞加","菲亚纳兰楚阿","安齐拉纳纳","安齐拉贝","迪基尔","阿里萨比","纳库鲁","古卢","恩德培","内格默特","默克莱","拉利贝拉","季马","贡德尔","德雷达瓦","德塞","德卜勒伯尔汉","巴赫达尔","阿瓦萨","桑给巴尔市","阿巴门奇","塔博拉","苏丹港","库斯提","门德费拉","科伦","阿鲁沙","阿萨布","姆万扎","阿达玛","姆贝亚","特瑟内","蒙巴萨","基苏木","加里萨","姆巴拉拉","姆巴莱","利拉","伊斯坦布尔","安卡拉","大马士革","贝鲁特","基辅","布加勒斯特","塔林","索菲亚","赫尔辛基","雅典","伊兹密尔","维尔纽斯","里加","基希讷乌","罗瓦涅米","凯米","第聂伯罗彼得罗夫斯克","布尔萨","加沙","尼科西亚","伯利恒","敖德萨","利沃夫","汉尤尼斯","扎波罗热","乌日霍罗德","苏梅","图勒凯尔姆","拉马拉","纳布卢斯","杰宁","希伯伦","拉卡","阿勒颇","哈塞克","扎赫勒","的黎波里","西顿","阿拉尼亚","阿达纳","拉塔基亚","霍姆斯","哈玛","代尔祖尔","德拉","加济安泰普","博德鲁姆","安塔利亚","梅尔辛","库萨达斯","科尼亚","开塞利","蒂米什瓦拉","特尔古穆列什","锡比乌","普洛耶什蒂","皮亚特拉","奥拉迪亚","雅西","克拉约瓦","克卢日纳波卡","特拉布宗","萨姆松","马拉蒂亚","埃斯基谢希尔","埃尔祖鲁姆","迪亚巴克尔","代尼兹利","约恩苏","布勒伊拉","布拉索夫","切尔诺贝利","赫梅利尼茨基","赫尔松","哈尔科夫","克里沃罗格","卡胡尔","伯尔兹","利马索尔","拉纳卡","希奥利艾","凯里尼亚","纳尔瓦","库雷萨雷","科赫特拉","蒂拉斯波尔","瓦尔纳","利耶帕亚","旧扎戈拉","叶尔加瓦","克莱佩达","考纳斯","文茨皮尔斯","瓦尔米耶拉","维丁","古尔贝内","普罗夫迪夫","道加瓦皮尔斯","普列文","布尔加斯","塞萨洛尼基","塞雷","雷西姆农","比雷埃夫斯","佩特雷","伊拉克利翁","约阿尼纳","阿尔戈斯托利","艾斯堡","塔尔图","耶路撒冷","特拉维夫","里雄莱锡安","海法","埃拉特"],

2 => ["哈拉雷","卢萨卡","基加利","卢本巴希","布琼布拉","马普托","哈博罗内","利隆圭","卡隆加","布兰太尔","弗朗西斯敦","松巴","姆祖祖","贝拉","察邦","塞罗韦","莫莱波洛莱","马翁","洛巴策","卡内","杭齐","彭巴","楠普拉","穆塔雷","马斯温戈","基桑加尼","戈马","布卡武","卢瓦马加纳","鲁亨盖里","吉塔拉马","布塔雷","鲁伊吉","鲁塔纳","恩戈齐","穆因加","基特加","基特韦","卡萨马","卡布韦","奇帕塔","奇卡帕","姆布吉马伊","圭鲁","奇通圭扎","布拉瓦约","恩多拉","芒古","巴黎","柏林","慕尼黑","法兰克福","罗马","日内瓦","巴塞罗那","斯德哥尔摩","马德里","苏黎世","布鲁塞尔","布拉格","萨格勒布","奥斯陆","阿姆斯特丹","哥本哈根","贝尔格莱德","华沙","维也纳","布达佩斯","巴伦西亚","梵蒂冈城","帕尔马","伯尔尼","科尔多瓦","卢布尔雅那","尼斯","特罗姆瑟","斯图加特","杜塞尔多夫","拉科鲁尼亚","伯拉第斯拉瓦","汉堡","鹿特丹","圣马力诺","摩纳哥","斯科普里","波德戈里察","朗伊尔城","瓦莱塔","卢森堡市","瓦杜兹","普里什蒂纳","萨拉热窝","威尼斯","都灵","直布罗陀","地拉那","安道尔城","那不勒斯","米兰","茵斯布鲁克","格拉茨","菲尔斯滕费尔德","费尔德巴赫","德意志兰茨贝格","萨尔茨堡","圣帕尔藤","格明德","莱塔河畔布鲁克","塞格德","菲拉赫","米什科尔茨","克拉根福特","凯奇凯梅特","艾森施塔特","考波什堡","德布勒森","热那亚","卡碧岛","卡利亚里","博尔扎诺","博洛尼亚","阿西西","布雷根茨","蒙扎","摩德纳","发罗拉","林茨","格里斯基兴","弗赖施塔特","埃弗丁","斯库台","科尔察","吉诺卡斯特","爱尔巴桑","都拉斯","利夫诺","特里亚斯特","察津","苏莲托","比耶利纳","萨萨里","巴尼亚卢卡","萨莱诺","根特","莫斯塔尔","查雷洛依","里米尼","比萨","阿尔隆","帕尔马","安特卫普","巴勒莫","维罗纳","普利耶多","图兹拉","里耶卡","奥西耶克","乌罗舍瓦茨","普里兹伦","泽尼察","布尔诺","埃特布鲁克","阿尔泽特河畔埃施","迪弗当日","比尔森","斯普利特","斯拉沃尼亚布罗德","拉尔维克","海尔格松","德拉门","卑尔根","奥勒松","武尔登","乌特勒支","海牙","欧登塞","普列夫利亚","奈斯特韦兹","尼克希奇","海宁","斯特萨斯堡","达姆施达特","俄斯特拉发","奥赫里德","奥洛穆茨","库马诺沃","利贝雷茨","比托拉","赫拉德茨","格罗宁根","奥胡斯","奥尔堡","拉贝河畔乌斯季","不来梅哈芬港","不来梅","波茨坦","科特布斯","维尔茨堡","施韦因富特","罗森海姆","雷根斯堡","帕绍","纽伦堡","肯普滕","因戈尔施塔特","菲尔特","弗赖辛","埃尔朗根","拜罗伊特","奥格斯堡","阿沙芬堡","乌尔姆","蒂宾根","奥芬巴赫","苏博蒂察","马尔堡","诺维萨德","卡塞尔","尼什","哈瑙","克拉古涅瓦茨","吉森","希尔德斯海姆","新梅斯托","汉诺威","马里博尔","哈默尔恩","乌普萨拉","迪伦","富尔达","辛德尔芬根","施瓦本格明德","罗伊特林根","拉文斯堡","普福尔茨海姆","奥芬堡","曼海姆","路德维希堡","康斯坦茨","海尔布隆","海德堡","格平根","腓特烈斯港","弗莱堡","埃斯林根","巴登","阿伦","弗罗茨瓦夫","里昂","巴斯蒂亚","斯塔万格","香槟沙隆","桑德维卡","坎佩尔","桑讷菲尤尔","波尔多","什切青","马赛","波兹南","戛纳","罗兹","普瓦捷","克拉科夫","南特","格但斯克","图卢兹","特隆赫姆","哥廷根","克拉尼","加布森","采列","埃姆登","日利纳","德尔门霍斯特","普列索夫","库克斯港","波普拉德","策勒","科希策","布伦瑞克","胡门内","威斯巴登","新勃兰登堡","加的斯","格赖夫斯瓦尔德","黑尔福德","弗里堡","哈姆","克尼茨","哈根","沃尔夫斯堡","贝尼多姆","萨尔茨吉特","阿维拉","奥斯纳布吕克","阿尔梅里亚","奥尔登堡","阿利坎特","诺德霍恩","居特斯洛","巴塞尔","格雷文布罗伊希","利斯塔尔","格拉德贝克","阿彭策尔","盖尔森基兴","黑里绍","欧斯基尔辛","比尔","埃森","阿劳","杜伊斯堡","马尔默","多特蒙德","基律纳","多斯滕","哥德堡","多尔马根","梅利利亚","丁斯拉肯","德特莫尔德","伊维萨岛","科隆","休达","卡斯特罗普","博特罗普","巴利亚多利德","波恩","桑坦德","波鸿","博霍尔特","比勒费尔德","潘普洛纳","贝尔吉施格拉德巴赫","贝格海姆","阿恩斯贝格","亚琛","哈恩","维斯马","韦尔瓦","斯特拉尔松","格拉纳达","什未林","希洪","罗斯托克","魏玛","耶拿","格拉","埃尔福特","诺德斯泰特","新明斯特","吕贝克","基尔","弗伦斯堡","马格德堡","哈雷","德绍罗斯劳","茨维考","普劳恩","莱比锡","格尔利茨","开姆尼茨","萨尔布吕肯","沃尔姆斯","特里尔","施派尔","诺伊维德","诺伊施塔特","美因茨","路德维希","科布伦茨","凯撒斯劳滕","伍珀塔尔","维滕","韦塞尔","菲尔森","费尔贝特","乌那","特罗伊斯多夫","施托尔贝格","索林根","锡根","赖讷","雷克林豪森","拉廷根","楚格","帕德博恩","温特图尔","奥伯豪森","乌斯特","诺伊斯","蒙特勒","明斯特","洛桑","西昂","米尔海姆","阿尔特多夫","门兴格拉德巴赫","贝林佐那","莫尔斯","弗劳恩菲尔德","明登","圣加伦","马尔","索洛图恩","吕嫩","施维茨","吕登沙伊德","沙夫豪森","利普施塔特","扎尔宁","勒弗库森","施坦斯","朗根费尔德","纳沙泰尔","克雷菲尔德","卢加诺","克彭","琉森","伊瑟隆","德雷蒙","许尔特","库尔","赫滕","格拉鲁斯","黑尔讷","伊斯坦布尔","开罗","赫尔辛基","雅典","索菲亚","安卡拉","大马士革","贝鲁特","基辅","布加勒斯特","塔林","基希讷乌","罗瓦涅米","凯米","第聂伯罗彼得罗夫斯克","布尔萨","柯尼斯堡","加沙","尼科西亚","伯利恒","敖德萨","维尔纽斯","里加","的黎波里","亚历山大","伊兹密尔","吉萨","图卜鲁格","赛卜哈","米苏拉塔","艾斯堡","塔尔图","艾斯尤特","阿斯旺","阿尔戈斯托利","库夫拉","班加西","扎加齐克","苏伊士","锡瓦绿洲","沙姆沙伊赫","塞得港","马特鲁港","路克索","哈里杰绿洲","赫尔格达","瓦尔纳","利耶帕亚","旧扎戈拉","叶尔加瓦","克莱佩达","考纳斯","文茨皮尔斯","瓦尔米耶拉","维丁","古尔贝内","普罗夫迪夫","道加瓦皮尔斯","普列文","布尔加斯","塞萨洛尼基","塞雷","雷西姆农","比雷埃夫斯","佩特雷","伊拉克利翁","约阿尼纳","利沃夫","汉尤尼斯","扎波罗热","乌日霍罗德","苏梅","图勒凯尔姆","拉马拉","纳布卢斯","杰宁","希伯伦","拉卡","阿勒颇","哈塞克","扎赫勒","的黎波里","西顿","阿拉尼亚","阿达纳","拉塔基亚","霍姆斯","哈玛","代尔祖尔","德拉","加济安泰普","博德鲁姆","安塔利亚","梅尔辛","库萨达斯","科尼亚","开塞利","蒂米什瓦拉","特尔古穆列什","锡比乌","普洛耶什蒂","皮亚特拉","奥拉迪亚","雅西","克拉约瓦","克卢日纳波卡","特拉布宗","萨姆松","马拉蒂亚","埃斯基谢希尔","埃尔祖鲁姆","迪亚巴克尔","代尼兹利","约恩苏","布勒伊拉","布拉索夫","切尔诺贝利","赫梅利尼茨基","赫尔松","哈尔科夫","克里沃罗格","卡胡尔","伯尔兹","利马索尔","拉纳卡","希奥利艾","凯里尼亚","纳尔瓦","库雷萨雷","科赫特拉","蒂拉斯波尔","耶路撒冷","特拉维夫","里雄莱锡安","海法","埃拉特","约翰内斯堡","开普敦","比勒陀利亚","马塞鲁","姆巴巴纳","德班","曼齐尼","大本德","斯坦陵布什","勒斯滕堡","马费滕","泰亚泰亚嫩","加查斯内克","波彻夫斯特洛姆","伊丽莎白港","波罗克瓦尼","内尔斯普雷特","布隆方丹","格拉汉姆斯顿","乔治镇","温得和克","渥尔维斯湾","斯瓦科普蒙德","龙杜","奥普沃"],

1 => ["利物浦","加的夫","格拉斯哥","爱丁堡","贝尔法斯特","伯明翰","道格拉斯","圣彼得港","圣安妮","圣赫利尔","拉姆西","普利茅斯","曼彻斯特","奥马","伦敦德里","林肯","利兹","切尔滕纳姆","巴黎","柏林","慕尼黑","法兰克福","罗马","巴塞罗那","斯德哥尔摩","马德里","苏黎世","布鲁塞尔","布拉格","奥斯陆","哥本哈根","贝尔格莱德","华沙","维也纳","布达佩斯","阿尔及尔","巴伦西亚","突尼斯市","梵蒂冈城","帕尔马","伯尔尼","科尔多瓦","卢布尔雅那","尼斯","特罗姆瑟","斯图加特","杜塞尔多夫","拉科鲁尼亚","伯拉第斯拉瓦","汉堡","鹿特丹","圣马力诺","摩纳哥","斯科普里","波德戈里察","朗伊尔城","瓦莱塔","卢森堡市","瓦杜兹","普里什蒂纳","萨拉热窝","威尼斯","都灵","直布罗陀","地拉那","安道尔城","那不勒斯","米兰","茵斯布鲁克","格拉茨","菲尔斯滕费尔德","费尔德巴赫","德意志兰茨贝格","萨尔茨堡","圣帕尔藤","格明德","莱塔河畔布鲁克","塞格德","菲拉赫","米什科尔茨","克拉根福特","凯奇凯梅特","艾森施塔特","考波什堡","德布勒森","热那亚","卡碧岛","卡利亚里","博尔扎诺","博洛尼亚","阿西西","布雷根茨","蒙扎","摩德纳","发罗拉","林茨","格里斯基兴","弗赖施塔特","埃弗丁","斯库台","科尔察","吉诺卡斯特","爱尔巴桑","都拉斯","杰尔吉斯","阿德拉尔","苏塞","斯法克斯","莫纳斯提尔","卡塞林","凯鲁万","乌姆苏克","哈马马特","加夫萨","加贝斯","比泽太","廷杜夫","塔曼拉塞特","瓦尔格拉","奥兰","艾因萨拉赫","盖尔达耶","康斯坦丁","贝沙尔","利夫诺","特里亚斯特","察津","苏莲托","比耶利纳","萨萨里","巴尼亚卢卡","萨莱诺","根特","莫斯塔尔","查雷洛依","里米尼","比萨","阿尔隆","帕尔马","安特卫普","巴勒莫","维罗纳","普利耶多","图兹拉","里耶卡","奥西耶克","乌罗舍瓦茨","普里兹伦","泽尼察","布尔诺","埃特布鲁克","阿尔泽特河畔埃施","迪弗当日","比尔森","斯普利特","斯拉沃尼亚布罗德","拉尔维克","海尔格松","德拉门","卑尔根","奥勒松","武尔登","乌特勒支","海牙","欧登塞","普列夫利亚","奈斯特韦兹","尼克希奇","海宁","斯特萨斯堡","达姆施达特","俄斯特拉发","奥赫里德","奥洛穆茨","库马诺沃","利贝雷茨","比托拉","赫拉德茨-克拉洛韦","格罗宁根","奥胡斯","奥尔堡","拉贝河畔乌斯季","不来梅哈芬港","不来梅","波茨坦","科特布斯","维尔茨堡","施韦因富特","罗森海姆","雷根斯堡","帕绍","纽伦堡","肯普滕","因戈尔施塔特","菲尔特","弗赖辛","埃尔朗根","拜罗伊特","奥格斯堡","阿沙芬堡","乌尔姆","蒂宾根","奥芬巴赫","苏博蒂察","马尔堡","诺维萨德","卡塞尔","尼什","哈瑙","克拉古涅瓦茨","吉森","希尔德斯海姆","新梅斯托","汉诺威","马里博尔","哈默尔恩","乌普萨拉","迪伦","富尔达","辛德尔芬根","施瓦本格明德","罗伊特林根","拉文斯堡","普福尔茨海姆","奥芬堡","曼海姆","路德维希堡","康斯坦茨","海尔布隆","海德堡","格平根","腓特烈斯港","弗莱堡","埃斯林根","巴登","阿伦","弗罗茨瓦夫","里昂","巴斯蒂亚","斯塔万格","香槟沙隆","桑德维卡","坎佩尔","桑讷菲尤尔","波尔多","什切青","马赛","波兹南","戛纳","罗兹","普瓦捷","克拉科夫","南特","格但斯克","图卢兹","特隆赫姆","哥廷根","克拉尼","加布森","采列","埃姆登","日利纳","德尔门霍斯特","普列索夫","库克斯港","波普拉德","策勒","科希策","布伦瑞克","胡门内","威斯巴登","新勃兰登堡","加的斯","格赖夫斯瓦尔德","黑尔福德","弗里堡","哈姆","克尼茨","哈根","沃尔夫斯堡","贝尼多姆","萨尔茨吉特","阿维拉","奥斯纳布吕克","阿尔梅里亚","奥尔登堡","阿利坎特","诺德霍恩","居特斯洛","巴塞尔","格雷文布罗伊希","利斯塔尔","格拉德贝克","阿彭策尔","盖尔森基兴","黑里绍","欧斯基尔辛","比尔","埃森","阿劳","杜伊斯堡","马尔默","多特蒙德","基律纳","多斯滕","哥德堡","多尔马根","梅利利亚","丁斯拉肯","德特莫尔德","伊维萨岛","科隆","休达","卡斯特罗普-劳克塞尔","博特罗普","巴利亚多利德","波恩","桑坦德","波鸿","博霍尔特","比勒费尔德","潘普洛纳","贝尔吉施格拉德巴赫","贝格海姆","阿恩斯贝格","亚琛","哈恩","维斯马","韦尔瓦","斯特拉尔松","格拉纳达","什未林","希洪","罗斯托克","魏玛","耶拿","格拉","埃尔福特","诺德斯泰特","新明斯特","吕贝克","基尔","弗伦斯堡","马格德堡","哈雷","德绍罗斯劳","茨维考","普劳恩","莱比锡","格尔利茨","开姆尼茨","萨尔布吕肯","沃尔姆斯","特里尔","施派尔","诺伊维德","诺伊施塔特","美因茨","路德维希","科布伦茨","凯撒斯劳滕","伍珀塔尔","维滕","韦塞尔","菲尔森","费尔贝特","乌那","特罗伊斯多夫","施托尔贝格","索林根","锡根","赖讷","雷克林豪森","拉廷根","楚格","帕德博恩","温特图尔","奥伯豪森","乌斯特","诺伊斯","蒙特勒","明斯特","洛桑","西昂","米尔海姆","阿尔特多夫","门兴格拉德巴赫","贝林佐那","莫尔斯","弗劳恩菲尔德","明登","圣加伦","马尔","索洛图恩","吕嫩","施维茨","吕登沙伊德","沙夫豪森","利普施塔特","扎尔宁","勒弗库森","施坦斯","朗根费尔德","纳沙泰尔","克雷菲尔德","卢加诺","克彭","琉森","伊瑟隆","德雷蒙","许尔特","库尔","赫滕","格拉鲁斯","黑尔讷","都柏林","毛罗赫达","科克","沃特福德","斯莱戈","利莫瑞克","莱特肯尼","基尔肯尼","戈尔韦","金沙萨","拉各斯","阿布贾","尼亚美","温得和克","罗安达","波多诺伏","班吉","利伯维尔","布拉柴维尔","雅温得","卡诺","马拉博","恩贾梅纳","穆索罗","蒙杜","蒙戈","法亚-拉若","法达","阿贝歇","奥博","扎里亚","卡加班多罗","乌约","布里亚","索科托","博祖姆","哈科特港","比劳","奥韦里","宾博","奥绍博","贝贝拉蒂","马库尔迪","艾贝贝因","巴塔","阿科尼贝","姆班达卡","黑角","韦索","因普丰多","多利吉","恩冈代雷","卡杜纳","马鲁阿","扎里亚","加鲁瓦","伊巴丹","杜阿拉","埃努古","贝尔图阿","贝宁城","巴门达","萨尔","弗朗斯维尔","迈杜古里","班巴里","阿贝奥库塔","津德尔","渥尔维斯湾/鲸湾","斯瓦科普蒙德","龙杜","奥普沃","萨维","马拉迪","阿尔利特","阿加德兹","巴拉库","纳迪丹古","坎迪","朱古","科托努","薄一贡","威热","梅农盖","马兰热","鲁娜","卢卡帕","卢班戈","万博","卡宾达","让蒂尔港","里斯本","卡萨布兰卡","拉巴特","马拉喀什","非斯","托尔斯港","阿尤恩","波尔图","丹吉尔","阿加迪尔","洛里什","卡斯卡伊斯","阿尔布费拉","瓦沃德","圣克鲁斯-德特内里费","戈梅拉岛","洛斯利亚诺斯德亚里达","拉斯帕尔马斯","加亚新城","达克拉","博哈多尔角","克拉克斯维克岛","斯马拉","杰迪代/马扎甘","瓦尔扎扎特"],

0 => ["蓬塔德尔加达","伦敦","都柏林","阿克拉","詹姆斯敦","雷克雅维克","努瓦克肖特","通布图","瓦加杜古","巴马科","蒙罗维亚","比绍","利物浦","加的夫","格拉斯哥","爱丁堡","贝尔法斯特","伯明翰","道格拉斯","洛美","达喀尔","圣多美","阿比让","弗里敦","班珠尔","科纳克里","亚穆苏克罗","圣偑德罗","芒区","科霍戈","迪沃","达洛亚","达巴卡拉","布瓦凯","博凯","塔马利","库马西","索科代","芒戈","萨拉昆达","法拉芬尼","博城","济金绍尔","图巴","捷斯","坦巴昆达","圣路易","马卡尼","考度","凯内马","圣安东尼奥","卡拉","阿塔帕梅","乔治敦","七海爱丁堡","瓦希古亚","沃特福德","斯莱戈","利莫瑞克","莱特肯尼","基尔肯尼","戈尔韦","圣赫利尔","拉姆西","普利茅斯","曼彻斯特","奥马","伦敦德里","林肯","利兹","切尔滕纳姆","巴法塔","恩泽雷科雷","金迪亚","卡卡塔","哈泊","加尔恩加","加布","凯夫拉维克","霍芬","阿克雷里","圣彼得港","圣安妮","毛罗赫达","科克","韦斯特曼纳群岛","库杜古","法达恩古尔马","多里","博博迪乌拉索","提吉克贾","罗索","锡加索","库蒂亚拉","努瓦迪布","里斯本","卡萨布兰卡","拉巴特","马拉喀什","非斯","托尔斯港","阿尤恩","波尔图","丹吉尔","阿加迪尔","洛里什","卡斯卡伊斯","阿尔布费拉","瓦沃德","圣克鲁斯","戈梅拉岛","洛斯利亚诺斯德亚里达","拉斯帕尔马斯","加亚新城","达克拉","博哈多尔角","克拉克斯维克岛","斯马拉","杰迪代","瓦尔扎扎特"],

-1 => ["蓬塔德尔加达","普拉亚","明德卢","圣玛丽亚"],

-2 => ["里约热内卢","圣保罗","巴西利亚","桑托斯","皮拉苏纳加","瓜鲁柳斯","坎皮纳斯","克里西乌马","阿雷格里港","彼得罗波利斯","尼泰罗伊","伊瓜苏","库里蒂巴","贝洛奥里藏特","戈亚尼亚","维多利亚","费尔南多-迪诺罗尼亚","圣皮埃尔","圣约翰","玛丽港"],

-3 => ["哈利法克斯","快乐谷鹅湾","圣约翰","汉密尔顿","夏洛特敦","布宜诺斯艾利斯","门多萨","罗萨里奥","科尔多瓦","劳森","但丁","马德普拉塔","拉普拉塔","萨尔塔","内乌肯","图库曼","圣菲","瓜莱瓜伊丘","马兰比奥海军准将站","埃斯佩兰萨站","尤巴尼站","圣保罗","里约热内卢","巴西利亚","福塔莱萨","萨尔瓦多","累西腓","贝伦","贝洛奥里藏特","巴拉杜格瑞斯","戈亚尼亚","维多利亚","伊瓜苏","库里蒂巴","申古河畔圣菲利克斯","圣塔伦","桑托斯","皮拉苏纳加","瓜鲁柳斯","坎皮纳斯","克里西乌马","阿雷格里港","纳塔尔","马塞约","彼得罗波利斯","尼泰罗伊","圣地亚哥","蓬图阿雷纳斯","安托法加斯塔","维尼亚德尔马","瓦尔帕莱索","斯坦利港","卡宴","圣洛朗杜马罗尼","圣皮埃尔","亚松森","佩德罗胡安-卡瓦列罗","奥林波堡","恩卡纳西翁","东方市","帕拉马里博","新尼克里","蒙得维的亚","米纳斯","梅塞德斯","梅洛","马尔多纳多","弗赖本托斯","佛罗里达","杜拉斯诺","科洛尼亚","卡内洛内斯","阿蒂加斯","特立尼达","塔夸伦博","圣何塞","萨尔托","罗恰","里韦拉","派桑杜","圣约翰","玛丽港"],

-4 => ["玛瑙斯","沃阿维斯塔","韦柳港","圣多明各","哈利法克斯","圣胡安","西班牙港","布朗萨布隆","巴斯特尔","奥拉涅斯塔德","法兰西堡","巴斯特尔","圣乔治","金斯敦","卡斯特里","快乐谷鹅湾","圣约翰","汉密尔顿","布里奇顿","圣约翰","罗索","威廉斯塔德","奥拉涅斯塔德","博托姆","克拉伦代克","圣地亚哥","圣胡安德拉马瓜纳","蓬塔卡纳","普拉塔港","罗马纳","拉维加","科德林顿","瓦利","斯卡伯勒","圣费尔南多","西班牙镇","罗德城","查尔斯敦","维约堡","克鲁斯湾","克里斯琴斯特德","夏洛特·阿马里","普洛维顿西尔斯","科伯恩城","科伯恩港","皮特尔角城","蓬塞","马亚圭斯","卡瓜斯","阿罗约","布莱德","夏洛特敦","查瓜纳斯","飞利浦堡","马里戈特","古斯塔维亚","拉巴斯","苏克雷","圣克鲁斯","圣伊格纳西奥德贝拉斯科","韦拉尔塔","科恰班巴","科维哈","哈瓦那","卡马圭","圣地亚哥","圣克拉拉","圣斯皮里图斯","比那尔德里奥","奥尔金","圣地亚哥","蓬图阿雷纳斯","安托法加斯塔","维尼亚德尔马","瓦尔帕莱索","纽约","多伦多","华盛顿","渥太华","拿骚","波士顿","蒙特利尔","印第安纳波利斯","亚特兰大","底特律","哥伦布","费城","迈阿密","米西索加","杰克逊维尔","伦敦","哈密尔顿","多佛","宾顿","哈特福德","因莱特港","伊魁特","格赖斯菲约德","阿勒特","奥兰多","哈里斯堡","蒙彼利埃","诺克斯维尔","哥伦比亚","查尔斯顿","弗吉尼亚海滩","里士满","克里夫兰","辛辛那提","阿克伦","普罗维登斯","托莱多","奥尔巴尼","特伦顿","罗利","费耶特维尔","夏洛特","康科德","纽瓦克","巴尔的摩","安纳波利斯","奥古斯塔","路易维尔","魁北克","坦帕","法兰克福","希布加莫","隆格伊","拉瓦尔","古朱华克","梅肯","加蒂诺","哥伦布","韦恩堡","三河市","舍布鲁克","萨格奈","奥古斯塔","南本德","阿森斯","温莎","列克星敦","波特兰","泽西市","伊丽莎白","沃尔多夫","沃伦","斯特灵海茨","利沃尼亚","兰辛","大急流城","弗林特","安娜堡","伍斯特","斯普林菲尔德","洛厄尔","扬克斯","锡拉丘兹","罗切斯特","帕特森","布法罗","里弗赛德","代顿","匹兹堡","温斯顿","朴茨茅斯","诺福克","纽波特纽斯","林奇堡","汉普顿","切萨皮克","亚历山大港","查尔斯顿","查塔努加","伊利","阿伦敦","弗里波特","巴里","布里奇波特","查塔姆","沃特伯里","剑桥","斯坦福","伯灵顿","纽黑文","开普科勒尔","贵湖","大萨德伯里","海厄利亚","基奇纳","盖恩斯维尔","金斯顿","劳德代尔堡","万锦市","好莱坞","奥克维尔","基韦斯特","那不勒斯","奥沙华","塔拉哈西","桑德贝","圣彼德斯堡","圣凯瑟琳斯","列治文山","乔治敦","新阿姆斯特丹","林登","亚松森","佩德罗胡安-卡瓦列罗","奥林波堡","恩卡纳西翁","东方市","加拉加斯","巴基西梅托","瓦伦西亚","圣费尔南多","阿亚库乔港","马图林","马拉凯","马拉开波","圭亚那城","玻利瓦尔城"],

-5 => ["里奥布朗库","芝加哥","墨西哥城","明尼阿波利斯","休斯顿","达拉斯","新奥尔良","温尼伯","巴吞鲁日","威奇托市","托皮卡","瑞瑟鲁特","尤里卡","贝克湖","得梅因","纳什维尔","孟菲斯","苏福尔斯","皮尔","奥斯汀","密尔沃基","麦迪逊","小石城","米德兰","蒙哥马利","杰克逊县","圣保罗","赛克斯顿","堪萨斯城","杰佛逊城","林肯市","阿瓜斯卡连特斯","圣路易斯","圣路易斯波托西","法戈","俾斯麦","梅里达","俄克拉何马城","韦拉克鲁斯","瓦亚塔港","瓜达拉哈拉","阿卡普尔科","莱昂","雷诺萨","马塔莫罗斯","维多利亚城","克雷塔罗","普埃布拉","瓦图尔科","瓦哈卡","蒙特雷","库埃纳瓦卡","特斯科科","埃卡特佩克莫雷洛斯","斯普林菲尔德","杜兰戈","科利马","图斯特拉古铁雷斯","独立城","牛津","乔普林","什里夫波特","梅斯基特","莫比尔","拉雷多","亨茨维尔","欧文","伯明翰","史密斯堡","韦科","圣安东尼奥","普莱诺","帕萨迪纳","阿灵顿","阿马里洛","阿比林","加兰","沃思堡","丹尼森","萨卡特卡斯","弗雷斯尼约","克拉克斯维尔","布赖恩","博蒙特","锡达拉皮兹","埃文斯维尔","斯普林菲尔德","罗克福德","皮奥里亚","迪凯特","彭萨科拉","欧弗兰帕克","奥拉西","堪萨斯城","欧文斯伯勒","梅泰里","波哥大","麦德林城","卡利","布卡拉曼加","马尼萨莱斯","弗洛伦西亚","库库塔","卡塔赫纳","巴兰基利亚","比亚维森西亚","佩雷拉","蒙特利亚","米图","哈瓦那","卡马圭","圣地亚哥","圣克拉拉","圣斯皮里图斯","比那尔德里奥","奥尔金","复活节岛","基多","瓜亚基尔","埃斯梅拉达斯","昆卡","安巴托","波托维耶霍","洛哈","伊巴拉","圣多明各","纽约","多伦多","华盛顿","渥太华","蒙特利尔","拿骚","金斯敦","波士顿","底特律","印第安纳波利斯","费城","哥伦布","亚特兰大","迈阿密","米西索加","杰克逊维尔","哈密尔顿","伦敦","魁北克","坦帕","隆格伊","拉瓦尔","古朱华克","法兰克福","乔治城","希布加莫","奥兰多","因莱特港","伊魁特","格赖斯菲约德","珊瑚港","阿勒特","多佛","宾顿","哈特福德","克里夫兰","辛辛那提","阿克伦","罗利","费耶特维尔","夏洛特","哈里斯堡","普罗维登斯","托莱多","查尔斯顿","弗吉尼亚海滩","里士满","蒙彼利埃","诺克斯维尔","巴拿马","哥伦比亚","巴尔的摩","安纳波利斯","奥古斯塔","路易维尔","康科德","太子港","坎昆","奥尔巴尼","特伦顿","纽瓦克","泽西市","伊丽莎白","帕特森","温斯顿","布法罗","拉巴地","戈纳伊夫","海地角","沃伦","斯特灵海茨","利沃尼亚","兰辛","大急流城","弗林特","蒙特哥贝","梅彭","沃尔多夫","安娜堡","伍斯特","斯普林菲尔德","洛厄尔","列克星敦","波特兰","韦恩堡","三河市","舍布鲁克","萨格奈","戴维","查尔斯顿","科隆","查塔努加","圣地亚哥","朴茨茅斯","诺福克","纽波特纽斯","林奇堡","汉普顿","切萨皮克","亚历山大港","里弗赛德","代顿","匹兹堡","伊利","阿伦敦","扬克斯","锡拉丘兹","罗切斯特","普拉亚德尔卡曼","切图马尔","巴里","布里奇波特","查塔姆","沃特伯里","剑桥","斯坦福","伯灵顿","纽黑文","弗里波特","奥古斯塔","南本德","梅肯","加蒂诺","哥伦布","阿森斯","温莎","塔拉哈西","桑德贝","圣彼德斯堡","圣凯瑟琳斯","列治文山","海厄利亚","基奇纳","盖恩斯维尔","金斯顿","劳德代尔堡","开普科勒尔","贵湖","大萨德伯里","万锦市","好莱坞","奥克维尔","基韦斯特","那不勒斯","奥沙华","利马","特鲁希略","马丘比丘","卡亚俄","阿雷基帕","伊基托斯"],

-6 => ["芝加哥","危地马拉城","圣萨尔瓦多","马那瓜","墨西哥城","特古西加尔巴","休斯顿","达拉斯","新奥尔良","明尼阿波利斯","温尼伯","萨斯卡通","瑞瑟鲁特","尤里卡","贝克湖","贝尔莫潘","赛克斯顿","杰克逊县","圣保罗","杰佛逊城","圣安娜","威奇托市","托皮卡","圣荷西","巴吞鲁日","得梅因","里贾纳","纳什维尔","孟菲斯","苏福尔斯","皮尔","奥斯汀","密尔沃基","麦迪逊","小石城","米德兰","蒙哥马利","堪萨斯城","林肯市","阿瓜斯卡连特斯","圣路易斯","瓦亚塔港","瓜达拉哈拉","阿卡普尔科","莱昂","梅里达","俄克拉何马城","韦拉克鲁斯","圣路易斯波托西","法戈","俾斯麦","克雷塔罗","普埃布拉","瓦图尔科","瓦哈卡","蒙特雷","库埃纳瓦卡","特斯科科","埃卡特佩克莫雷洛斯","雷诺萨","马塔莫罗斯","维多利亚城","莱昂","萨卡特卡斯","弗雷斯尼约","杜兰戈","科利马","图斯特拉古铁雷斯","斯普林菲尔德","圣佩德罗苏拉","乔普林","拉塞瓦","梅斯基特","莫比尔","拉雷多","亨茨维尔","欧文","伯明翰","史密斯堡","韦科","圣安东尼奥","普莱诺","帕萨迪纳","阿灵顿","阿马里洛","阿比林","加兰","沃思堡","丹尼森","卡贝萨斯港","马塔加尔帕","马萨亚","克拉克斯维尔","布赖恩","博蒙特","罗克福德","皮奥里亚","迪凯特","锡达拉皮兹","埃文斯维尔","欧文斯伯勒","欧弗兰帕克","利蒙","奥拉西","利比里亚","堪萨斯城","阿拉胡埃拉","圣维森特","埃斯昆特拉","梅泰里","圣米格尔","什里夫波特","乔洛马","独立城","牛津","克萨尔特南戈","伯利兹城","斯普林菲尔德","彭萨科拉","圣佩德罗","蓬塔戈尔达","奥兰治沃克镇","丹格里加","复活节岛","加拉帕戈斯群岛","盐湖城","丹佛","埃德蒙顿","卡尔加里","黄刀镇","伊努维克","夏延","埃尔帕索","拉皮德城","马萨特兰","圣塔菲","阿尔伯克基","华雷斯","奇瓦瓦","海伦娜","比林斯","博伊西","莱克伍德","特皮克","奥罗拉","普若佛","奥格登","克兰布鲁克",],

-7 => ["凤凰城","盐湖城","丹佛","埃德蒙顿","卡尔加里","黄刀镇","伊努维克","圣塔菲","阿尔伯克基","华雷斯","奇瓦瓦","海伦娜","比林斯","博伊西","埃尔帕索","拉皮德城","埃莫西约","马萨特兰","夏延","图森","丹贝","斯科茨代尔","梅萨","嘉年","格伦代尔","特皮克","巴克艾","普若佛","奥格登","莱克伍德","克兰布鲁克","奥罗拉","洛杉矶","旧金山","温哥华","西雅图","拉斯维加斯","蒂华纳","卡森城","墨西卡利","白马市","塞勒姆","波特兰","圣地亚哥","长滩市","圣何塞","奥克兰","弗雷斯诺","萨克拉门托","乔治王子城","里弗赛德","纳奈莫","库卡蒙格牧场","基隆拿","波莫纳","坎卢普斯","帕萨迪纳","奥克斯纳德","高贵林","橙市","本那比","安大略","阿伯茨福德","欧申赛德","费利蒙","埃斯孔迪多","莫雷诺谷","莫德斯托","维多利亚","柑橘高地","丘拉维斯塔","伯克利","尔湾","英格尔伍德","亨廷顿比奇","好莱坞","希斯皮里亚","海沃德","格伦代尔","富勒顿","萨里","圣贝纳迪诺","斯阔米什","萨利纳斯","列治文","希尔斯伯勒","尤金","天堂市","贝克斯菲尔德","奥林匹亚","天使营","阿纳海姆","维塞利亚","维克托维尔","瓦列霍","特洛克","托伦斯","千橡市","森尼韦尔","斯托克顿","西米谷","圣罗莎","圣塔克拉利塔","圣巴巴拉","圣安娜","惠斯勒"],

-8 => ["安克雷奇","乌纳拉斯加","朱诺","费尔班克斯","诺姆","洛杉矶","旧金山","温哥华","西雅图","拉斯维加斯","蒂华纳","卡森城","墨西卡利","白马市","塞勒姆","波特兰","圣地亚哥","长滩市","圣何塞","奥克兰","弗雷斯诺","萨克拉门托","乔治王子城","里弗赛德","纳奈莫","库卡蒙格牧场","基隆拿","波莫纳","坎卢普斯","帕萨迪纳","奥克斯纳德","高贵林","橙市","本那比","安大略","阿伯茨福德","欧申赛德","费利蒙","埃斯孔迪多","莫雷诺谷","莫德斯托","维多利亚","柑橘高地","丘拉维斯塔","伯克利","尔湾","英格尔伍德","亨廷顿比奇","好莱坞","希斯皮里亚","海沃德","格伦代尔","富勒顿","萨里","圣贝纳迪诺","斯阔米什","萨利纳斯","列治文","希尔斯伯勒","尤金","天堂市","贝克斯菲尔德","奥林匹亚","天使营","阿纳海姆","维塞利亚","维克托维尔","瓦列霍","特洛克","托伦斯","千橡市","森尼韦尔","斯托克顿","西米谷","圣罗莎","圣塔克拉利塔","圣巴巴拉","圣安娜","惠斯勒","亚当斯敦"],

-9 => ["安克雷奇","乌纳拉斯加","朱诺","费尔班克斯","诺姆","甘比尔群岛","埃达克","塔伊奥哈"],

-10 => ["火奴鲁鲁","埃达克","怀卢库","希洛","帕皮提","瓦伊塔佩"],

-11 => ["阿洛菲","帕果帕果"],
];