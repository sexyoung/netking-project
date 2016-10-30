<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function rice()
    {
      return view("page", [
        "college" => "rice",
        "college_name" => "飯學院",
        "college_intro" => "橫跨東方民族<br />可以自由地與任何料理搭配<br />只要看得到人，就看得到它",
        "college_intro_2" => "隨處可見 瞬息萬變",
        "departments" => [
          "lu-meat-rice" => [
            "name" => "魯肉飯",
            "intro" => "滷肉飯在臺灣被視為極具台灣特色的民眾小吃，南北有不同的意義。在北臺灣，滷肉飯為一種淋上含有煮熟碎豬肉（豬絞肉）及醬油滷汁的白飯的料理，「滷肉飯」在臺灣南部是指有著滷汁塊狀肉的筍乾滷肉飯與彰化的大塊炕肉飯亦不盡相同。另外，南部肉燥飯使用炒香肉燥，北部滷肉飯使用切丁滷肉，外觀相似，作法並不相同。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "oil-rice" => [
            "name" => "油飯",
            "intro" => "油飯又稱蒸糯米飯，是台灣一種傳統的米食料理，通常是以蒸熟的糯米，拌入炒香的佐料。佐料常見的有肉絲、香菇、紅蔥酥、乾魷魚、蝦米及栗子等等，並以麻油及醬油調味。依台灣的習俗，家中若有嬰兒出生，會以麻油雞及油飯祭祖並分送親友。有時雞油飯也簡稱「油飯」，通常與海南雞食用！",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "meat-rice" => [
            "name" => "爌肉飯",
            "intro" => "臺灣坊間寫為焢肉飯、爌肉飯，是一種以白飯佐以燉煮豬肉的米食。所謂的炕肉是指將大塊豬五花肉（彰化採用豬後腿肉）以醬油、糖及香料等材料，用小火煮至熟軟滷製而成的肉塊。由於炕肉飯適合作為正餐食用，目前臺灣外賣便當的種類中，炕肉便當往往和豬腳便當、排骨便當、雞腿便當、併列為店家最常供人選擇的種類。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "turkey-meat-rice" => [
            "name" => "火雞肉飯",
            "intro" => "火雞肉飯主要選用火雞肉當作素材，而雞汁則是以全雞蒸煮所熬成醬汁，淋上酥炸過紅蔥頭的豬油，混合雞肉和白飯攪拌，味道香而不膩；傳統店家會在火雞肉上頭在撒些油蔥酥，讓整體的香味更富有層次，一般則是會配一片醃製的黃色蘿蔔乾，相當下飯。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
    }

    public function tofu()
    {
      return view("page", [
        "college" => "tofu",
        "college_name" => "豆腐學院",
        "college_intro" => "黃豆編織而成的美麗衣裳<br />料理方式變化萬千<br />湯或小菜都有它",
        "college_intro_2" => "身段柔軟 沒有包袱",
        "departments" => [
          "stinky-tofu" => [
            "name" => "臭豆腐",
            "intro" => "雖說是臭豆腐，但近年來的臭豆腐似乎沒有很臭，把油豆腐拿去油鍋炸它個幾回合，炸得酥脆的外皮緊緊包住了柔軟的豆腐，雙重口感一次滿足。在夜市隨處可見，傳說臭豆腐很早以前是真的很臭的，而且有分油炸臭豆腐、跟泡湯的臭豆腐。泡湯的臭豆腐並沒有炸過，吃起來偏硬。炸的大多會搭配台式泡菜一起食用，口感甚佳。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "preserved-egg-tofu" => [
            "name" => "皮蛋豆腐",
            "intro" => "皮蛋豆腐屬於冷盤/拌菜，主要原料是皮蛋、豆腐等，口味是微辣，工藝是拌，烹飪難度屬於初級。皮蛋是用石灰等原料腌制后的蛋類食品，較鴨蛋含更多礦物質，脂肪和總熱量卻稍有下降，它能刺激消化器官，增進食慾，促進營養的消化吸收，降壓等功效。豆腐營養豐富，含有鐵、鈣、磷、鎂等人體必需的多種微量元素，素有「植物肉」之美稱。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "mapo-tofu" => [
            "name" => "麻婆豆腐",
            "intro" => "色澤淡黃，豆腐軟嫩而有光澤，其味麻、辣、酥、香、嫩、鮮、燙，豆腐表面蓋有一層淡紅色的辣油，可保持豆腐內的熱度不使很快散失，趁熱吃滋味更佳，花椒麵也撲鼻。在數九寒冬季節食用，更是取暖解寒的美味佳肴。麻婆豆腐由於名聲卓著，已流傳全國，乃至日本、新加坡等國家，現已成為風靡世界的川菜名餚。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
    }

    public function chicken()
    {
      return view("page", [
        "college" => "chicken",
        "college_name" => "鹹酥雞學院",
        "college_intro" => "出沒夜市攤販小吃裡的香姬<br />路過經過你的鼻子不會錯過",
        "college_intro_2" => "黃金一身 香味撲鼻",
        "departments" => [
          "salty-crisp-chicken" => [
            "name" => "鹹酥雞",
            "intro" => "將小塊雞肉裹麵粉高溫油炸的食品，在台灣各大夜市小吃攤常可見到，用竹籤戳起剛剛好的一口大小，加上外脆內軟的口感是台灣消夜首選之一。後來鹽酥雞攤販也常延伸出裹粉油炸其他小塊食材一併販售，如杏鮑菇、豬血糕等。常見的調味有加胡椒粉、辣粉、蒜頭、九層塔等，相當適合當下酒菜。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "chicken-row" => [
            "name" => "雞排",
            "intro" => "食材選用的是雞胸肉，以醬料醃漬入味，再沾裹地瓜粉下鍋油炸即可。調理的方法日新月異，因為大家求新求變，如：講求風味的碳烤雞排、追求size的超大雞排。外國人來台灣旅遊，常指名一定要吃雞排+珍珠奶茶，因為雞排就是那麼的美味，是台灣最常見的小吃。你知道台灣人有多愛吃雞排嗎？台灣一天可以吃掉10座101的高度！十分驚人！",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "chicken-ass" => [
            "name" => "雞屁股",
            "intro" => "他有一個很好聽的名字，叫做「七里香」，不是周杰倫唱的七里香，音樂請下，「雨下整夜　我的愛溢出就像雨~水(喂!)」。因為吃的是屁股，所以處理衛生方面相對的很重要。常見的吃法有:烤的、炸的、糖醋、滷的。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "chicken-wings" => [
            "name" => "雞翅",
            "intro" => "酥炸雞翅也是台灣鹹酥雞當中的王道之一，雖然有人認為骨頭較多覺得麻煩，但也有人喜歡啃咬骨頭而熱愛雞翅。其作法簡單，並不一定需要劃刀及醃製，也不需要用酒去腥味，因為新鮮的雞翅不會有腥味，只要酥炸後撒上椒鹽即可大快朵頤。若是真的不喜歡太重的雞肉味，也可以在關節順著骨頭劃一刀，以生薑及料酒醃過再酥炸。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "chicken-feet" => [
            "name" => "雞爪",
            "intro" => "又稱之為鳳爪，因為常用「鳳」來代替「雞」這一字。含有豐富的鈣質及膠質，是美容的聖品。哥吃的是風味，不是追求飽足感，會讓人一隻接著一隻啃，炎炎夏日，適合配上一瓶冰冰涼涼的啤酒。烹製的方法有很多種，大多以冷盤居多，有泰式的酸辣、沙茶、鹵湯、藥膳、懶人的去骨鳳爪、雞腳凍。煮的過程中不宜過久，雞腳易熟，太熟就會爛爛的，口感不佳。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
    }

    public function vermicelli()
    {
      return view("page", [
        "college" => "vermicelli",
        "college_name" => "麵線學院",
        "college_intro" => "九天玄女指點創制的長壽麵<br />金梭玉帛、牽絲如縷，簡直巧奪天工",
        "college_intro_2" => "蘊藉雋永 細水長流",
        "departments" => [
          "clear-vermicelli" => [
            "name" => "清麵線",
            "intro" => "與大腸麵線及蚵仔麵線不同，主角僅有麵線本身一種，因此十分考驗料理人的技術。雖然材料簡單但要做出一碗好吃的麵線糊絕不容易，從麵線的製作、炒醬色的技術、配料的挑選，到最後調味的步驟，每個過程都挑戰著料理人的技巧，食用時可依照個人喜好加入適量蒜泥、烏醋及香菜。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "large-intestine-vermicelli" => [
            "name" => "大腸麵線",
            "intro" => "說到有名的大腸麵線，立馬聯想到台北西門町的阿宗麵線，因為生意好到破表，位子又不夠，為了吃上一碗，一堆人「站著吃」是常有的畫面，一點也不奇怪。麵線又細又長，又被稱為「長壽麵」。準備食材有:紅麵線、豬大腸、紅蔥頭、高湯、地瓜粉、醬油、糖、蒜末。食用時可搭配胡椒粉、烏醋、香菜少許，會讓人呵咾甲會觸舌！",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "oysters-vermicelli" => [
            "name" => "蚵仔麵線",
            "intro" => "台灣最常見的麵線，從小攤販到大店面，從大台北到中南部，到處都可以看見蚵仔的蹤影，中南部也有許多人會拿它當作早餐，增加一天的活力。蚵仔麵線絕大多數是以紅麵線為基底，加上數粒大顆的蚵仔，因為蚵仔味道十分濃厚，因此新鮮度十分重要，只要蚵仔不夠新鮮，就會影響整碗麵線的味道。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "sesame-oil-vermicelli" => [
            "name" => "麻油麵線",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
    }

    public function oysters()
    {
      return view("page", [
        "college" => "oysters",
        "college_name" => "蚵仔學院",
        "college_intro" => "淡水海水交界處<br />它躲在岸石下安靜醞釀著深不可測的大海甘甜。",
        "college_intro_2" => "近海珍寶 盡在殼中",
        "departments" => [
          "oyster-fried-oyster" => [
            "name" => "蚵仔煎",
            "intro" => "常出現在各大夜市，準備食材有蚵仔、雞蛋、青菜(最常見的是白菜、空心菜)和太白粉芡水。火候的功夫是一門學問，必需考慮到黏稠度，煎煮的焦度。因為煮法大同小異，口味大家都可以抓的很準，所以差別就在於醬汁上，所以配角也是很重要的。有的人不喜歡蚵仔，生意人頭腦動的特別快，所以就有花枝煎、蝦仁煎、蟹肉煎的出現啦。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "oyster-soup" => [
            "name" => "蚵仔湯",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "oyster fritter" => [
            "name" => "蚵嗲",
            "intro" => "又稱蚵仔炸，流行於臺灣西部沿海養殖蚵之漁村、港口市鎮油炸類小吃。將微凹鐵杓以麵粉漿做底，依序添加高麗菜絲、蚵、再疊上高麗菜絲，最後再以麵粉漿裹好後，放置於油鍋內油炸至熟，輕輕敲打即可將蚵嗲晾乾於旁。蚵爹依地區有不同列類別，台灣本島西部沿岸佐料以豆芽，韭菜為主，主料為豬肉與生蚵，台西一帶甚有海豚肉佐生薑。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "baked-oysters" => [
            "name" => "烤牡犡",
            "intro" => "烤牡犡近年來很紅，因為在以前的吃法大多是生吃，也就是人稱的生蠔。吃法不外乎分為生食跟熟食，生吃因為味道較重，相對的會用其他的味道蓋過去，像常見的檸檬汁等等。熟食方面:烤的話就是時間跟火候的掌控，功夫好的話還可以口嚐到海的味道，彷彿置身在大海之中。不過還是老話一句，東西只要新鮮，怎麼用都好吃。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
    }

    public function beef_noodles()
    {
      return view("page", [
        "college" => "beef-noodles",
        "college_name" => "牛肉麵學院",
        "college_intro" => "所有美味集結在一碗<br />札實、肥美、飽滿三種享受一次滿足",
        "college_intro_2" => "力碗狂潮 饕餮大餐",
        "departments" => [
          "braised-beef-noodles" => [
            "name" => "紅燒牛肉麵",
            "intro" => "雖然常被稱為川味牛肉麵，但其實並非四川菜，而是發跡於台灣，由成都菜「小碗紅湯牛肉」演變而來。與清燉牛肉麵不同，重視濃厚香醇的湯頭，通常以醬油及豆瓣醬為基底，也有許多店家會加入含中藥的滷包，增添香氣及風味。為台灣目前牛肉麵當中的大宗，並以辛辣口味為主流。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "stew-beef-noodles" => [
            "name" => "清燉牛肉麵",
            "intro" => "著重於吃出牛肉的原味，因此肉的品質十分重要，但湯頭也完全馬虎不得，需用大量蔬菜加上滷包熬出清甜甘美的高湯，也有許多店家會使用牛大骨熬湯，製作出有如日式豚骨般的香郁湯底。也因為這是一道極度需要技術的料理，因此相對於紅燒牛肉麵，台灣較少店家以清燉牛肉麵為主打。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "tamato-beef-noodles" => [
            "name" => "番茄牛肉麵",
            "intro" => "受到近年著重健康的風氣影響，作為紅燒牛肉麵的一支崛起的，就是番茄牛肉麵。在濃郁的紅燒湯頭裡，加入大量的番茄，增添微酸並清爽的口味。也因為亞熱帶的台灣氣候偏熱，這道濃厚卻又又開胃，可說是結合紅燒及清燉優點的料理，受到許多饕客的喜愛，有一派忠實的支持者。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
    }

    public function thick_soup()
    {
      return view("page", [
        "college" => "thick-soup",
        "college_name" => "羹學院",
        "college_intro" => "似湯非湯的料理<br />與海產完美結合<br />滑順又飛快的滋味滿足心頭",
        "college_intro_2" => "滑順入口 珍饈美味 ",
        "departments" => [
          "fried-spanish-mackerel-thick-soup" => [
            "name" => "土魠魚羹",
            "intro" => "也稱叫馬鮫魚，這名字大家比較不常聽到。準備食材有土魠魚、大白菜、地瓜粉、香菜、蒜末少許，水約4～5碗。台灣普遍的做法都是先炸至外表酥脆，裡面的肉要軟嫩，火候要拿捏好，再放進羹湯中，亦可搭配白飯或麵類 再加點烏醋，風味更佳，是南台灣常見的小吃。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "squid-thick-soup" => [
            "name" => "魷魚羹",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "calamary-thick-soup " => [
            "name" => "花枝羹",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "pork-thick-soup" => [
            "name" => "肉羹",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
    }

    public function staple()
    {
      return view("page", [
        "college" => "staple",
        "college_name" => "名產學院",
        "college_intro" => "出門旅行除了玩，更要留下在地才有的東西<br />買的是名產，送的是誠意",
        "college_intro_2" => "情濃意重 有禮相送",
        "departments" => [
          "pineapple-cakes" => [
            "name" => "鳳梨酥",
            "intro" => "台灣的著名點心，其主要原料為麵粉、奶油、糖、蛋、冬瓜醬，外皮酥鬆、內餡軟嫩。而內餡為鳳梨醬的土鳳梨酥，近年也十分受歡迎。因為鳳梨的台語諧音為「旺來」，帶有吉利興旺之意，而冬瓜有「好年冬」與甜甜蜜蜜的含意，帶有喜氣之意，常被當做逢年過節時所送或饋贈客戶親友的最佳伴手禮之一。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "ci-cake" => [
            "name" => "棋餅",
            "intro" => "百年老店「中外餅舖」的招牌商品。棋餅是將綠豆糕做成象棋的樣子，並附上棋盤紙及手套，可在下象棋時真的「吃掉」對方棋子，十分有趣。其來由是因為餅舖的第三代孩子非常喜歡下象棋，常常下到廢寢忘食，被其母開玩笑說把象棋當飯吃，依此為靈感的點心。為高雄最受歡迎的伴手禮之一。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "sun-cake" => [
            "name" => "太陽餅",
            "intro" => "一種甜餡薄餅，一般內餡是麥芽糖，源起於台灣台中市的點心，為中臺灣的名產之一。太陽餅名稱並未註冊商標，以致後來同業的店家皆可使用此名。太陽餅的形狀近似圓形，早期製作的比較大，一般食用前多會均分成四塊，近年來則有較小的太陽餅出現，以方便拿取食用。內餡麥芽糖相當甜，多半為直接食用配濃茶之茶點，餅皮酥而易碎，食用時容易掉落餅屑。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "cow-tongue-cake" => [
            "name" => "牛舌餅",
            "intro" => "有南北兩派，北部以宜蘭的最為代表，形狀窄、長、薄，走的是酥脆的口感，通常無內餡，吃起來像餅千，準備的食材是麵粉、砂糖、蜂蜜等。中南部以彰化鹿港為代表，走的風格亦然不同，外型短、厚、軟，包有內餡，吃起來像太陽餅，因為裡面多了麥芽糖，吃起來像是麵餅類。嚴格來說算是兩種不同的小吃，因外型極像牛的舌頭，故稱之牛舌餅。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "peanut-candy" => [
            "name" => "花生糖",
            "intro" => "準備的食材有花生、麥芽糖、砂糖。因為加了麥芽，所以容易黏牙口感又硬。做的方法很簡單，先把花生炒(烤)熱至熟，再把麥芽糖跟砂糖混在一起炒，冷卻之後再切塊即可食用，烘烤過程是一道極為快速的點心，人人皆可上手。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
    }

    public function pearl()
    {
      return view("page", [
        "college" => "pearl",
        "college_name" => "珍珠學院",
        "college_intro" => "飲品類無人不知的珍珠，不只紅遍台灣<br />更是揚名國際，人手幾乎一杯",
        "college_intro_2" => "綠鬢朱顏 珍愛相隨",
        "departments" => [
          "black-tapioca-pearls-curd" => [
            "name" => "粉圓豆花",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "heart-tapioca" => [
            "name" => "包心粉圓",
            "intro" => "又是一個宜蘭特色小吃，簡單來說就是在粉圓中加入紅豆。先把水煮開，再下包心粉圓，邊煮邊拌，可以搭配的食材很多，紅豆湯、綠豆湯、豆花、桂圓銀耳、冰淇淋、仙草、刨冰、雪花冰等冰品，因為包心粉圓容易變硬，吃的時候再加下去就好。無論是哪一種吃法，冰冰吃、熱熱吃、都好吃。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "pearl-milk-tea" => [
            "name" => "珍珠奶茶",
            "intro" => "大吉嶺紅茶散發著淡淡的果香，加入來自天然牧場的鮮奶，融合出濃郁香醇的口感，紅茶的香甜之氣猶如置身喜馬拉雅山麓。用沖繩黑糖熬煮，純天然手工製作的黑糖珍珠，晶瑩剔透，咬下去Q彈有勁，黑糖香氣瞬間在口中四溢，滑溜口感療鬱心靈，堪稱皇家極品。",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "three-color-tapioca" => [
            "name" => "三色粉圓",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
    }

}
