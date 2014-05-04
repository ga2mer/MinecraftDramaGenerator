<?php
	$drama_inc = 828615 - 803260 - 55164;
	if(isset($_GET["count"])) {
		echo $drama_inc + (int)file_get_contents("/srv/http/drama.txt");
		exit(0);
	}
?>
<?php if (!isset($_GET["plain"])) : ?>
<!DOCTYPE html>
<html>
<head><title>Генератор Майнкрафт Драмы</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
<style type="text/css">
h6 {
	text-align: center;
	font-weight: normal;
	color: #777;
}
a {
	color: #55C;
}
h3 {
	text-align: center;
	font-family: serif;
	font-weight: normal;
	font-size: 24px;
}
h1 {
	text-align: center;
	font-family: sans-serif;
}
</style>
<script src="/js/jquery-latest.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.0/html2canvas.js"></script>
<script>
        $(function () {
            $("#menu").load("../menu.html");
        });
</script>
</head>
<body>
<div id="menu"></div>
<div id="dramaa"><h3>Генератор Майнкрафт Драмы</h3>
<h1><?php endif; ?>
<?php
$combinations = array(
	"people" => array("Player", "jadedcat", "Alblaka", "Greg", "Eloraam", "AUTOMATIC_MAIDEN", "Alz454", "RS485", "Shukaro", "Toops", "CovertJaguar", "Pahimar", "Sengir", "Azanor", "jeb", "Greymerk", "Dinnerbone", "Grum", "dan200", "Cloudy", "KingLemming", "Zeldo", "AlgorithmX2", "Mikee", "Eyamaz", "kakermix", "cpw", "LexManos", "Vswe", "Direwolf20", "Calclavia", "Reika", "Sangar", "skyboy", "FlowerChild", "SpaceToad", "ChickenBones", "Notch", "Pokefenn", "Shadowclaimer", "Vazkii", "pixlepix", "nekosune", "copygirl", "immibis", "RichardG", "JAKJ", "mDiyo", "pillbox", "progwml6", "PowerCrystals", "GUIpsp", "nallar", "Soaryn", "Soaryn", "AbrarSyed", "Sunstrike", "BevoLJ", "asie", "tterrag", "CrazyPants", "Aidan", "Binnie", "Mojang", "ProfMobius", "peterix", "RWTema", "Slowpoke", "Curse", "bspkrs", "Mr_okushama", "Searge", "iChun", "Krapht", "Erasmus_Crowley", "MysteriousAges", "Drullkus", "Micdoodle8","GenPage","Hunterz","tgame14", "Velotican", "kirindave", "MachineMuse", "M3gaFr3ak", "Lunatrius", "wha-ha-ha", "ga2mer", "vanyserezhkin", "Arkuda63", "omrigan"),
	"sites" => array("FTB Forums", "MCF", "Reddit", "4chan", "Technic Forums", "IC2 Forums", "GitHub", "BitBucket", "IRC", "ForgeCraft", "Patreon", "BTW Forums", "GregTech thread", "Google+", "Twitch"),
	"things" => array("ForgeCraft", "Simply Jetpacks", "RedPower 2", "ModLoader", "RedLogic", "Forge MultiPart", "Project: Red", "BuildCraft", "Tinkers' Steelworks", "Artifice", "Roguelike Dungeons", "IndustrialCraft 2", "Equivalent Exchange", "Forestry", "RailCraft", "Simple Jetpacks", "Compact Solars", "ComputerCraft", "Wireless Redstone", "OpenComputers", "GregTech", "Ars Magica", "Thaumcraft", "FTB", "Technic", "Resonant Rise", "MineFactory Reloaded", "Magic Farm 2", "Tekkit", "MCPC+", "ATLauncher", "Metallurgy", "Logistics Pipes", "MCUpdater", "MultiMC", "Curse", "Mojang", "Test Pack Please Ignore", "Agrarian Skies", "Steve's Carts", "Steve's Factory Manager", "BiblioCraft",  "Minecraft", "XyCraft", "Forge", "GregTech", "OpenBlocks", "OpenPeripheral", "OpenComputers", "MFFS", "RotaryCraft", "Big Reactors", "Thermal Expansion 3", "Extra Utilities", "Universal Electricity", "Not Enough Items", "Portal Gun mod", "официальный лаунчер", "Too Many Items", "OptiFine", "Extra Cells", "ExtraBiomesXL", "Biomes O' Plenty", "Better than Wolves", "Schematica", "Tinker's Construct", "Natura", "Hexxit", "Iron Chests", "опен-сорс моды", "клозед-сорс моды", "Not Enough Mods", "Ender IO", "Mekanism", "Minecraft 1.7", "Pixelmon", "Pixelmon", "JABBA", "WAILA", "Opis", "CraftGuide", "Iguana Tweaks", "Tinkers Mechworks", "Генератор Майнкрафт Драмы", "MineChem", "LittleMaidMob", "MCP", "Immibis' Microblocks", "Carpenter's Blocks", "Chisel", "Applied Energistics", "Applied Energistics 2", "Rotatable Blocks", "EnhancedPortals 3", "Ex Nihilo", "Ex Aliquo", "Magic Bees", "BetterStorage", "Backpacks", "Aether II", "Highlands", "Alternate Terrain Generation", "InfiCraft", "Bukkit", "Spigot", "SpoutCraft", "MortTech", "ICBM", "Galacticraft", "Modular Power Suits", "Team CoFH", "Extra Bees", "Extra Trees", "Mo' Creatures", "Grimoire of Gaia", "Atum", "Agriculture", "Sync", "Hats", "Nether Ores", "ZoomMod", "bcut"),
	"packs" => array("Feed The Beast", "the ForgeCraft pack", "FTB Monster", "FTB Unstable", "Agrarian Skies", "Direwolf20 Pack", "Tekkit", "Hexxit", "ATLauncher", "Resonant Rise", "MCUpdater", "Attack of the B-Team", "Mindcrack", "Magic Maiden", "ForgeCraft", "Technic"),
	"function" => array("поддержка MJ", "поддержка RF", "поддержка EU", "FMP совместимость", "карьеров", "автоматическая добыча", "GregTech баланс", "ComputerCraft APIs", "OpenComputers APIs", "Bukkit плагин совместимость", "поддержка MCPC+", "распределение ID", "обогатительный", "плавит", "крафт", "баланс", "пчёлы", "интеграция ThaumCraft", "реализм", "декоративные блоки", "новые мобы", "части инструментов TCon", "новые типы дерева", "поддержка bundled кабля", "новые плащи для игроков", "больше драмы", "меньше драмы", "микроблоки", "команды генерации драмы", "поддержку Blutricity", "новые руды", "лучшая поддержка SMP", "достижения", "задания", "больше раздрожительного ворлдгена"),
	"adj" => array("плохой", "неправильный", "незаконный", "ужасный", "противный", "не в ForgeCraft", "несовместимый с Mojang's EULA", "серьёзные проблемы", "несовместимо", "пустая трата время", "замечательный", "удивительный", "токсичный", "слишком ванильный", "позорный", "разачаровывающий", "раздутый", "устаревший", "неправильный", "полон драмы", "слишком реалистичный"),
	"badsoft" => array("вредоносный код", "шпионский код", "рекламу", "DRM", "вирусы", "трояны", "кейлоггеры", "украденный код", "пасхальные яйца", "похититель логинов", "adf.ly ссылки", "плохой код", "украденные ресурсы", "вредоносный код", "секретные бэкдоры"),
	"drama" => array("баги", "краши", "драма", "много драмы", "дисбаланс", "боль и страдания", "пиратство", "пчёлы", "adf.ly"),
	"crash" => array("краш", "взрывает", "ломает", "лаг", "взорвать", "портит чанки", "ломает миры", "дождь из адских рыб", "спавн пчёл"),
	"ban" => array("бан", "кикнуть", "добавляет насмешливые предметы", "блеклист", "вайтлист", "даёт админские права", "позор", "уничтожить"),
	"code" => array("код", "ресурсы", "идеи", "концепты", "одна функция", "5 строк кода", "класс", "несколько файлов", "ZIP-архив", "Gradle билдскрипты", "GitHub репозиторий"),
	"worse" => array("хуже", "лучше", "быстрее", "медленее", "более стабильный", "меньше ошибок"),
	"ac1" => array("предьявляет иск", "разрушать жизнь", "пламя", "жаловаться", "кикнул"),
	"price" => array("7 118 рублей", "8 900 рублей", "10 680 рублей", "12 500 рублей", "14 250 рублей", "16 000 рублей", "18 000 рублей", "21 355 рублей"),
	"activates" => array("активирует", "работает", "функции", "ломает"),
	"says" => array("говорит", "твиттит", "подтверждает", "отрицает"),
	"enormous" => array("большого", "крупного", "огромного", "гигантского", "громадного")
);
$sentences = array(
	"[people] пустил ДоС атаку на [things]",
	"[sites] призывает всех, не использовать [things]",
	"После [enormous] количества запросов, в [packs] убрали [things]",
	"После [enormous] количества запросов, в [packs] добавили [things]",
	"После [enormous] количества запросов, в [packs] добавили [function] в [things]",
	"[people] играет в [things] на Twitch",
	"[people] жалуются на [things] на [sites]",
	"[people] реализует [code] в [things] за [price]",
	"[sites] считает [things] хуже, чем [things]",
	"[people] сделал [things] зависимым от [things]",
	"[people] забанил [people] за использование [things] в [packs]",
	"[people] жалуется, что [things] нету в [sites]",
	"[people] жалуется, что [people] заменил [things] - [things]",
	"[people] жалуется, что [people] заменил [things] - [things] в [packs]",
	"[people] жалуется, что [people] удалил [function] в [packs]",
	"[people] решил, что [things] тоже [adj] и заменил его [things]",
	"[people] [says] что [things] это [adj].",
	"[people] [says] что [things] буквально [adj].",
	"[things] не обновляется до последней версии Майнкрафт",
	"[people] удалил [things] из [packs].",
	"[people] добавил [things] в [packs].",
	"[people] ушёл из моддинга. Фанаты [things] в ярости.",
	"[people] тайно нравится [things]",
	"[people] открыто ненавидит [function] в [things]",
	"[people] [ac1] [people] пока он не удалит [things] из [packs]",
	"[people] [ac1] [people] пока он не удалит [function] из [things]",
	"[people] [ac1] [people] пока он не добавит [function] в [things]",
	"[people] форкнул [things] потому что [drama]",
	"[people] [says] замену [things] в [things]",
	"Фанаты [things] утверждают, что [things] похож на [things]",
	"Фанаты [things] утверждают, что в [things] лучше [function]",
	"[people] [says] что [things] должно быть похожим на [things]",
	"[people] [says] что [things] должно быть не похожим на [things]",
	"[people] ребалансирует [things] для [packs]",
	"[people] добавляет [function] в [things] по запросу [people]",
	"[people] удаляет [function] из [things] по запросу [people]",
	"[people] удаляет совместимость между [things] и [things] по запросу [people]",
	"[people] завершает разрабатывать [things]",
	"[people] [says] [things] слишком много, как [things]",
	"[people] [says] [people] епитрахиль [code] из [people]",
	"[people] [says] [people] не крал [code] из [people]",
	"[people] решает [ban] [people] из [packs]",
	"[things] не работает вместе с  [things] после последнего обновления",
	"[people] подал в суд на  [things]",
	"[people] [says] [things] - [adj] [sites]",
	"[people] [says] [things] полон [badsoft]",
	"[people] [says] [things] по причине [drama]",
	"[people] [says] [things] по причине [drama] с использованием [things]",
	"[people] [says] использовать [things] и [things] вместе с [adj]",
	"[people] украл код из [things]",
	"[things] ломает [function]",
	"[people] подал в суд на разработчиков [things]",
	"[people] напоминает вам, что [things] - [adj]",
	"[people] и [people] вступают в драматический поединок в [sites]",
	"Фанаты [things] и [things] спорят о [sites]",
	"[people] и [people] спорят о [things]",
	"[people] ставит [badsoft] в [things]",
	"[things] ломает [function] в [things]",
	"[things] ломает [things] поддержку в [things]",
	"[things] добавляет [ban] [people] автоматически",
	"[things] добавляет [ban] человека за использование [things]",
	"[things] убрал совместимость с [things]",
	"[people] [says] не использовать [things]",
	"[people] [says] не использовать [things] с [things]",
	"[people] находит [badsoft] в [things]",
	"[things] создаёт [things] [crash] при использовании [things]",
	"[things] создаёт [things] [crash] когда его использует [people]",
	"[things] создаёт [things] краш [things] когда его использует [people]",
	"[things] добавляет [badsoft] который [activates] в [packs]",
	"[things] добавляет [badsoft] который [activates] рядом с [things]",
	"[things] делает [people] непобедимым при помощи [things] в [packs]",
	"[people] делает модпак на основе [things]",
	"[people] забанил [people] в [sites]",
	"Упоротый говорит что грег-тех не нужен",
	"Никитка опять забанил :C",
	"<img src=http://img-fotki.yandex.ru/get/4400/gogouua.2f/0_52826_ef7f6817_L.jpg>",
	"<img src=http://img0.joyreactor.cc/pics/post/full/anime-Vocaloid-Hatsune-Miku-631568.png width=50% height=50%>"
);

function str_replace_first($search, $replace, $subject) {
    $pos = strpos($subject, $search);
    if ($pos !== false) {
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}

$s = $sentences[rand(0, count($sentences)-1)];
foreach(array_keys($combinations) as $key) {
	for($i = 0; $i < 4; $i++) {
		$combo = $combinations[$key][rand(0, count($combinations[$key])-1)];
		$s = str_replace_first("[".$key."]", $combo, $s);
	}
}
echo($s);
?>
<?php if (!isset($_GET["plain"])) : ?>
</h1>
<h3><a href="drama.php">БОЛЬШЕ ДРАМЫ БОГУ ДРАМЫ!</a></h3></div>
<center><input id="generateImage" type="submit"   value="Заскриншотить"></center>
<input type="hidden" name="img_val" id="img_val" value="" />
 <center><input name="linker" id="link" type="hidden" value="ссылка" size="40"><center>
<script> 
$(function () {
    $('#generateImage').click(function () {
        html2canvas($('#dramaa'), {
            onrendered: function (canvas) {
                $('#img_val').val(canvas.toDataURL("image/png"));
                var str = canvas.toDataURL("image/png");
					str = str.replace("data:image/png;base64,", "");
                //console.log(str);
                    $.ajax({
                    url: 'https://api.imgur.com/3/image',
                    type: 'post',
                    headers: {
                        Authorization: 'Client-ID 49d74245468a4c7'
                    },
                    data: {
                        image: str
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            //console.log(response.data.link);
                            document.getElementsByName("linker")[0].setAttribute('value',response.data.link)
                            document.getElementsByName("linker")[0].setAttribute('type','text')
                        }
                    }
                });
            }
        });
    });
});
</script>
<!--<h6>Over <?php echo $drama_inc+file_get_contents("/srv/http/drama.txt"); ?> dramas and counting!<br><br> -->
</body>
</html>
<?php endif; ?>
