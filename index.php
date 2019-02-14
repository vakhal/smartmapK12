<!DOCTYPE html>
<html>
<head>
    <title>SmartMap</title>
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="/js/3dmap/modernizr-custom.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>


<div class="container">
    <div class="main">

        <div class="mall">

            <div class="levels">
                <?
                $levels=3;
                for ($level=1;$level<=$levels;$level++):?>
                <div class="level level--<?=$level?>" aria-label="Level <?=$level?>">
                    <?=file_get_contents(__DIR__ . '/plans/'.$level.'.svg')?>
                </div>
                <?endfor;?>

            </div>
            <!-- /levels -->
        </div>
        <!-- /mall -->
        <button class="boxbutton boxbutton--dark open-search" aria-label="Show search"><svg class="icon icon--search"><use xlink:href="#icon-search"></use></svg></button>
        <nav class="mallnav mallnav--hidden">
            <button class="boxbutton mallnav__button--up" aria-label="Go up"><svg class="icon icon--angle-down"><use xlink:href="#icon-angle-up"></use></svg></button>
            <button class="boxbutton boxbutton--dark mallnav__button--all-levels" aria-label="Back to all levels"><svg class="icon icon--stack"><use xlink:href="#icon-stack"></use></svg></button>
            <button class="boxbutton mallnav__button--down" aria-label="Go down"><svg class="icon icon--angle-down"><use xlink:href="#icon-angle-down"></use></svg></button>
        </nav>
        <div class="content">
            <div class="content__item" data-space="1.01" data-category="1">
                <h3 class="content__item-title">Apple Heart</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 6:30AM &mdash; 11:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 5738902</span>
                    </p>
                    <p class="content__desc">Burdock celery - salsify, tomatillo. Bitter gourd horseradish leaves radicchio, celeriac miner's lettuce kurrat arugula fluted pumpkin turnip, arracacha water spinach nopal.</p>
                </div>
            </div>
            <div class="content__item" data-space="1.02" data-category="1">
                <h3 class="content__item-title">Crazy Banana</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 7822786</span>
                    </p>
                    <p class="content__desc">Malva verticillata cichorium intybus zingiber officinale. Capsicum annuum Grossum group amorphophallus_paeoniifolius celosia argentea. Brassica oleracea Acephala group brassica rapa pervidis or komatsuna group plectranthus spp.</p>
                </div>
            </div>
            <div class="content__item" data-space="1.03" data-category="2">
                <h3 class="content__item-title">Folding Life</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 2385641</span>
                    </p>
                    <p class="content__desc">Brassica rapa Pekinensis group crassocephalum spp ipomoea aquatica. Brassica napus Napobrassica group pachyrhizus ahipa.</p>
                </div>
            </div>
            <div class="content__item" data-space="1.04" data-category="3">
                <h3 class="content__item-title">Dress me not</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 7830091</span>
                    </p>
                    <p class="content__desc">Glycine max tarhui, chocho arachis hypogaea. Barbarea verna cucurbita spp, eruca sativa dioscorea spp solanum lycopersicum var telfairia occidentalis.</p>
                </div>
            </div>
            <div class="content__item" data-space="1.05" data-category="4">
                <h3 class="content__item-title">Meditation Garden</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 6653929</span>
                    </p>
                    <p class="content__desc">Vernonia calvoana. Talinum fruticosum celosia argentea manihot esculenta beta vulgaris subsp maritima lathyrus tuberosus. Vigna acontifolia amorphophallus_paeoniifolius canna spp valerianella locusta.</p>
                </div>
            </div>
            <div class="content__item" data-space="1.06" data-category="1">
                <h3 class="content__item-title">Seed of Life</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 8988650</span>
                    </p>
                    <p class="content__desc">Ullucus tuberosus psoralea esculenta; brassica rapa chinensis group - cichorium intybus. Pisum sativum inula crithmoides brassica napus napobrassica group brassica oleracea taraxacum officinale.</p>
                </div>
            </div>
            <div class="content__item" data-space="1.07" data-category="1">
                <h3 class="content__item-title">Raw Delight</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 6:30AM &mdash; 09:00PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 9121341</span>
                    </p>
                    <p class="content__desc">Brassica rapa Chinensis group dioscorea spp brassica rapa pekinensis and chinensis groups brassica oleracea pachyrhizus erosus.</p>
                </div>
            </div>
            <div class="content__item" data-space="1.08" data-category="1">
                <h3 class="content__item-title">The Wizard</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 8976773</span>
                    </p>
                    <p class="content__desc">Acmella oleracea brassica rapa chinensis group apios americana taraxacum officinale brassica rapa pekinensis group.</p>
                </div>
            </div>
            <div class="content__item" data-space="1.09" data-category="1">
                <h3 class="content__item-title">Smoothies &amp; Soul</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 6577439</span>
                    </p>
                    <p class="content__desc">Broccoli Rabe kale, beetroot lettuce. Daikon chickweed leek tomatillo, beetroot cress west indian gherkin ricebean black-eyed pea fat hen moth bean! Chard lotus root scallion jícama; ulluco. </p>
                </div>
            </div>
            <div class="content__item" data-space="2.01" data-category="1">
                <h3 class="content__item-title">Grilled Chipotle</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 11:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 9866756</span>
                    </p>
                    <p class="content__desc">Summer purslane horseradish catsear kurrat, winter melon bitter gourd. Tomato, florence fennel; garden rocket;</p>
                </div>
            </div>
            <div class="content__item" data-space="2.02" data-category="2">
                <h3 class="content__item-title">Rocketship Tech</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 11:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 4539810</span>
                    </p>
                    <p class="content__desc">Salsify garlic scallion manioc plectranthus summer purslane water chestnut cucumber radish garlic. Daikon winter melon moth bean.</p>
                </div>
            </div>
            <div class="content__item" data-space="2.03" data-category="2">
                <h3 class="content__item-title">Which Bug?</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 8865001</span>
                    </p>
                    <p class="content__desc">Sorrel garlic pigeon pea fava bean radish scorzonera lentil. Black-eyed pea samphire sorrel; lotus root arracacha lima bean celeriac chinese artichoke okra.</p>
                </div>
            </div>
            <div class="content__item" data-space="2.04" data-category="3">
                <h3 class="content__item-title">Cognitio</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 11:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 6738982</span>
                    </p>
                    <p class="content__desc">Samphire chaya camas chickweed rutabaga. Soko pumpkin; miner's lettuce ulluco arugula. Peanut jícama spinach taro squash soko tepary bean, bok choy.</p>
                </div>
            </div>
            <div class="content__item" data-space="2.05" data-category="1">
                <h3 class="content__item-title">The Eggplanthead</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 9:00AM &mdash; 11:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 7846729</span>
                    </p>
                    <p class="content__desc">Ahipa yacón mustard fat hen fava bean mung bean, leek; beetroot - prussian asparagus. </p>
                </div>
            </div>
            <div class="content__item" data-space="2.06" data-category="1">
                <h3 class="content__item-title">Superfood</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 5630098</span>
                    </p>
                    <p class="content__desc">Mizuna greens; epazote tigernut chard - common bean! Radish chickweed, garden rocket, chickweed, gobo dolichos bean corn salad.</p>
                </div>
            </div>
            <div class="content__item" data-space="2.07" data-category="3">
                <h3 class="content__item-title">No Princess</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 6:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 6650989</span>
                    </p>
                    <p class="content__desc">Ensete endive fiddlehead endive kurrat - gobo, black-eyed pea bitter gourd pignut. Winter melon swiss chard beet greens fiddlehead; guar.</p>
                </div>
            </div>
            <div class="content__item" data-space="2.08" data-category="3">
                <h3 class="content__item-title">Tool Exchange</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 07:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 4409098</span>
                    </p>
                    <p class="content__desc">Celeriac lima bean, tepary bean sweet potato or kumara nopal wild leek, elephant garlic carrot. Bitter gourd, prairie turnip tatsoi canna miner's lettuce bitterleaf lizard's tail broadleaf arrowhead gobo; swiss chard pigeon pea leaves.</p>
                </div>
            </div>
            <div class="content__item" data-space="3.01" data-category="1">
                <h3 class="content__item-title">Oolong House</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 8867298</span>
                    </p>
                    <p class="content__desc">Sweet pepper; squash, parsnip sierra leone bologi peanut tomatillo. Broccoli Rabe chrysanthemum leaves florence fennel fluted pumpkin, sweet potato or kumara scallion. </p>
                </div>
            </div>
            <div class="content__item" data-space="3.02" data-category="2">
                <h3 class="content__item-title">Enlightend Path</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 7756989</span>
                    </p>
                    <p class="content__desc">Glycine max tarhui, chocho valerianella locusta; cichorium endivia, cucumis sativus. Cyamopsis tetragonoloba - acmella oleracea. Lactuca sativa; cucurbita spp.</p>
                </div>
            </div>
            <div class="content__item" data-space="3.03" data-category="3">
                <h3 class="content__item-title">What makes us walk</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 8809098</span>
                    </p>
                    <p class="content__desc">Valerianella locusta inula crithmoides. Nasturtium officinale; arctium lappa? Achillea millefolium eruca sativa benincasa hispida sagittaria latifolia telfairia occidentalis plantago major.</p>
                </div>
            </div>
            <div class="content__item" data-space="3.04" data-category="3">
                <h3 class="content__item-title">Your Last Shirt</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 3365784</span>
                    </p>
                    <p class="content__desc">Lens culinaris vigna mungo, smallanthus sonchifolius. Cicer arietinum eruca sativa; valerianella locusta.</p>
                </div>
            </div>
            <div class="content__item" data-space="3.05" data-category="4">
                <h3 class="content__item-title">Breathe</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 4523213</span>
                    </p>
                    <p class="content__desc">Physalis philadelphica. Benincasa hispida brassica napus napobrassica group lens culinaris abelmoschus esculentus.</p>
                </div>
            </div>
            <div class="content__item" data-space="3.06" data-category="4">
                <h3 class="content__item-title">Feel the Grass</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 4768590</span>
                    </p>
                    <p class="content__desc">Brassica rapa Chinensis group praecitrullus fistulosus pachyrhizus ahipa. Colocasia esculenta nasturtium officinale capsicum annuum grossum group, adansonia spp, hypochaeris radicata.</p>
                </div>
            </div>
            <div class="content__item" data-space="3.07" data-category="4">
                <h3 class="content__item-title">Star Gazer</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 6:30AM &mdash; 9:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 4456324</span>
                    </p>
                    <p class="content__desc">Cucumis anguria phaseolus coccineus lupinus mutabilis scorzonera hispanica cyperus esculentus.</p>
                </div>
            </div>
            <div class="content__item" data-space="4.01" data-category="1">
                <h3 class="content__item-title">Cold Soup Kitchen</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 11:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 6743987</span>
                    </p>
                    <p class="content__desc">Manihot esculenta phytolacca americana corchorus olitorius, corchorus capsularis. Brassica rapa Pervidis or Komatsuna group dioscorea spp lepidium sativum, ipomoea aquatica - brassica rapa chinensis group spinacia oleracea. Phaseolus vulgaris macrotyloma uniflorum.</p>
                </div>
            </div>
            <div class="content__item" data-space="4.02" data-category="2">
                <h3 class="content__item-title">Docu Dome</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 13:00PM &mdash; 03:00AM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 2289786</span>
                    </p>
                    <p class="content__desc">Ipomoea aquatica smallanthus sonchifolius. The Docu Dome presents Sintel by the Blender Foundation.</p>
                    <p class="content__desc">Book tickets <a href="http://tympanus.net/Development/SeatPreview/">here</a>.</p>
                </div>
            </div>
            <div class="content__item" data-space="4.03" data-category="3">
                <h3 class="content__item-title">Little Artist</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 9987879</span>
                    </p>
                    <p class="content__desc">Brassica oleracea Gemmifera group conopodium majus. Cichorium intybus brassica rapa subsp rapa brassica oleracea gemmifera group abelmoschus esculentus phaseolus vulgaris.</p>
                </div>
            </div>
            <div class="content__item" data-space="4.04" data-category="4">
                <h3 class="content__item-title">Space 16</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 11:00PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 6658940</span>
                    </p>
                    <p class="content__desc">Arctium lappa scorzonera hispanica pteridium aquilinum, athyrium esculentum celosia argentea arctium lappa brassica rapa chinensis group. Cucurbita spp.</p>
                </div>
            </div>
            <div class="content__item" data-space="4.05" data-category="4">
                <h3 class="content__item-title">Hot Tub Festival</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 11:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 7843676</span>
                    </p>
                    <p class="content__desc">Talinum fruticosum glycine max tarhui, chocho. Cyamopsis tetragonoloba crassocephalum spp lens culinaris. Vigna umbellata cucurbita spp vigna umbellata.</p>
                </div>
            </div>
            <div class="content__item" data-space="4.06" data-category="2">
                <h3 class="content__item-title">Love 2 Cook</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 09:00PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 7749036</span>
                    </p>
                    <p class="content__desc">Vigna unguiculata subsp sesquipedalis vicia faba eruca sativa pisum sativum abelmoschus esculentus. Chenopodium album glycine max tarhui, chocho. Cordyline fruticosa apium graveolens sinapis alba.</p>
                </div>
            </div>
            <div class="content__item" data-space="4.07" data-category="2">
                <h3 class="content__item-title">Permaculture Hub</h3>
                <div class="content__item-details">
                    <p class="content__meta">
                        <span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 12:30PM</span>
                        <span class="content__meta-item"><strong>Phone:</strong> (0) 66 7833895</span>
                    </p>
                    <p class="content__desc">Brassica oleracea phaseolus coccineus talinum fruticosum capsicum annuum cucurbita spp. Raphanus sativus Longipinnatus group cucurbita spp, moringa oleifera lathyrus sativus crithmum maritimum.</p>
                </div>
            </div>
            <button class="boxbutton boxbutton--dark content__button content__button--hidden" aria-label="Close details"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
        </div>
        <!-- content -->
    </div>
    <!-- /main -->
    <aside class="spaces-list" id="spaces-list">
        <div class="search">
            <input class="search__input" placeholder="Search..." />
            <button class="boxbutton boxbutton--darker close-search" aria-label="Close details"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
        </div>
        <span class="label">
					<input id="sort-by-name" class="label__checkbox" type="checkbox" aria-label="Show alphabetically"/>
					<label class="label__text">A - Z</label>
				</span>
        <ul class="list grouped-by-category">
            <li class="list__item" data-level="1" data-category="1" data-space="1.08"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="1" data-category="1" data-space="1.01"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="1" data-category="1" data-space="1.02"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="2" data-category="1" data-space="2.05"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="1" data-category="1" data-space="1.09"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="1" data-category="1" data-space="1.06"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="1" data-category="1" data-space="1.07"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="2" data-category="1" data-space="2.01"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="3" data-category="1" data-space="3.01"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="4" data-category="1" data-space="4.01"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="2" data-category="1" data-space="2.06"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="4" data-category="2" data-space="4.06"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="4" data-category="2" data-space="4.07"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="1" data-category="2" data-space="1.03"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="2" data-category="2" data-space="2.02"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="2" data-category="2" data-space="2.03"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="3" data-category="2" data-space="3.02"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="4" data-category="2" data-space="4.02"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="4" data-category="3" data-space="4.03"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="3" data-category="3" data-space="3.04"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="2" data-category="3" data-space="2.08"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="1" data-category="3" data-space="1.04"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="2" data-category="3" data-space="2.04"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="3" data-category="3" data-space="3.03"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="2" data-category="3" data-space="2.07"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="3" data-category="4" data-space="3.07"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="4" data-category="4" data-space="4.04"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="3" data-category="4" data-space="3.05"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="1" data-category="4" data-space="1.05"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="4" data-category="4" data-space="4.05"><a href="#" class="list__link">...</a></li>
            <li class="list__item" data-level="3" data-category="4" data-space="3.06"><a href="#" class="list__link">...</a></li>
        </ul>
    </aside>
    <!-- /spaces-list -->
</div>
<!-- /container -->
<script src="/js/3dmap/classie.js"></script>
<script src="/js/3dmap/list.min.js"></script>
<script src="/js/3dmap/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>

<svg class="hidden">
    <defs>
        <symbol id="icon-pin" viewBox="0 0 200 300">
            <title>pin</title>
            <path d="M100,21.78A85,85,0,0,0,15.18,106.6c0,18.85,12.08,49.52,36.76,93.9,17.48,31.36,34.7,57.49,35.47,58.6L100,278.22l12.59-19.11c0.69-1.11,18-27.25,35.47-58.6,24.76-44.38,36.76-75.06,36.76-93.9A85,85,0,0,0,100,21.78Z" />
        </symbol>
        <symbol id="icon-search" viewBox="0 0 32 32">
            <title>search</title>
            <path class="path1" d="M26.819 24.917c0.262 0.262 0.262 0.688 0 0.951l-0.951 0.951c-0.263 0.262-0.688 0.262-0.951 0l-6.656-6.656c-0.072-0.072-0.12-0.158-0.153-0.248-1.365 0.998-3.041 1.593-4.862 1.593-4.562 0-8.261-3.699-8.261-8.261s3.699-8.261 8.261-8.261c4.562 0 8.261 3.699 8.261 8.261 0 1.821-0.595 3.497-1.593 4.862 0.091 0.032 0.176 0.080 0.248 0.153l6.656 6.656zM13.246 7.739c-3.041 0-5.508 2.466-5.508 5.508s2.466 5.508 5.508 5.508 5.508-2.466 5.508-5.508c0-3.041-2.466-5.508-5.508-5.508z"></path>
        </symbol>
        <symbol id="icon-stack" viewBox="0 0 32 32">
            <title>stack</title>
            <path class="path1" d="M29.143 11.071l-13.143-6.571-13.143 6.571 13.143 6.571 13.143-6.571zM16 6.681l8.781 4.39-8.781 4.39-8.781-4.39 8.781-4.39zM26.51 14.684l2.633 1.316-13.143 6.571-13.143-6.571 2.633-1.316 10.51 5.255zM26.51 19.612l2.633 1.316-13.143 6.571-13.143-6.571 2.633-1.316 10.51 5.255z"></path>
        </symbol>
        <symbol id="icon-cross" viewBox="0 0 24 24">
            <title>cross</title>
            <path class="path1" d="M18.016 5.125q0.369 0 0.614 0.245t0.245 0.614q0 0.363-0.248 0.611l-5.411 5.405 5.411 5.405q0.248 0.248 0.248 0.611 0 0.369-0.245 0.614t-0.614 0.245q-0.363 0-0.611-0.248l-5.405-5.411-5.405 5.411q-0.248 0.248-0.611 0.248-0.369 0-0.614-0.245t-0.245-0.614q0-0.363 0.248-0.611l5.411-5.405-5.411-5.405q-0.248-0.248-0.248-0.611 0-0.369 0.245-0.614t0.614-0.245q0.363 0 0.611 0.248l5.405 5.411 5.405-5.411q0.248-0.248 0.611-0.248z"></path>
        </symbol>
        <symbol id="icon-droplet" viewBox="0 0 32 32">
            <title>droplet</title>
            <path class="path1" d="M27.020 14.786c-2.055-5.732-6.41-10.88-11.020-14.786-4.61 3.907-8.965 9.054-11.020 14.786-1.271 3.545-1.396 7.393 0.393 10.794 2.058 3.911 6.207 6.42 10.626 6.42s8.569-2.509 10.626-6.42c1.79-3.401 1.664-7.249 0.393-10.794zM23.086 23.717c-1.369 2.602-4.15 4.283-7.086 4.283-1.723 0-3.391-0.579-4.753-1.583 0.414 0.054 0.832 0.083 1.254 0.083 3.67 0 7.146-2.1 8.856-5.351 1.402-2.665 1.281-5.433 0.746-7.636 0.455 0.88 0.841 1.756 1.151 2.623 0.706 1.971 1.251 4.886-0.168 7.581z"></path>
        </symbol>
        <symbol id="icon-shoe" viewBox="0 0 32 32">
            <title>shoe</title>
            <path class="path1" d="M13.536 8.562c-0.163 0.116-0.324 0.233-0.482 0.351v0l1.324 2.035-1.072 0.698-1.27-1.953c-0.181 0.141-0.359 0.279-0.534 0.413l1.214 1.865-1.072 0.698-1.177-1.809c-0.194 0.13-0.384 0.25-0.571 0.356v0l1.157 1.779-1.072 0.698-1.302-2.002c-0.119 0.020-0.236 0.031-0.352 0.031-0.47 0-0.896 0-1.279 0v0 0.64c0 0.229 0.065 0.618 0.252 0.993 0.295 0.59 0.798 0.926 1.666 0.926h7.035c0.811 0 1.387 0.384 1.691 0.993 0.117 0.235 0.18 0.463 0.209 0.664 2.51-0.414 5.775-0.332 5.775-0.332h8.957c-0.044-1.806-0.191-4.242-0.625-6.124l-0.204 0.134c-0.117 0.117-0.33 0.308-0.636 0.549-0.501 0.395-1.084 0.789-1.745 1.156-1.888 1.049-4.031 1.679-6.386 1.679-3.711 0-6.13-2.016-7.469-4.55-0.055-0.104-0.16-0.39-0.351-0.937v0c-0.207 0.109-0.411 0.224-0.611 0.345l1.284 1.974-1.072 0.698-1.28-1.968zM5.767 11.721c-0.849 0-1.272 0-1.272 0-2.123 0-3.844 1.726-3.844 3.849 0 0.437 0.055 0.862 0.159 1.267v0h11.353c1.456 0 2.904-0.314 4.477-0.649-0.002-0.073-0.028-0.215-0.092-0.344-0.095-0.19-0.239-0.286-0.547-0.286h-7.035c-1.37 0-2.306-0.624-2.811-1.633-0.292-0.584-0.387-1.155-0.387-1.565v-0.64zM1.333 18.117c0.886 1.529 2.544 2.558 4.437 2.558h24.295c1.415 0 2.576-1.151 2.569-2.548 0 0 0.015-0.499 0.013-1.289h-8.973c0 0-3.837 0-6.008 0.439-1.918 0.388-3.702 0.84-5.504 0.84h-10.829zM16.39 6.995c0.688-0.244 1.41-0.391 2.169-0.391 1.919 0 1.279 2.522 5.117 2.522s3.48-2.522 6.396-2.522c0.684 0 1.188 0.633 1.559 1.603l-0.634 0.423c-0.18 0.163-0.357 0.321-0.621 0.53-0.449 0.354-0.975 0.71-1.573 1.042-1.709 0.95-3.643 1.518-5.765 1.518-3.146 0-5.198-1.71-6.338-3.868-0.011-0.022-0.145-0.389-0.307-0.857v0z"></path>
        </symbol>
        <symbol id="icon-apple" viewBox="0 0 32 32">
            <title>apple</title>
            <path class="path1" d="M20.753 7.927c1.367-0.729 2.455-1.972 3.11-3.365 0.567-1.207 0.852-2.536 0.814-3.871-0.011-0.377-0.306-0.692-0.692-0.692-0.103 0-0.203 0.025-0.294 0.068-0.033 0.005-0.065 0.014-0.097 0.025-0.927 0.34-1.875 0.616-2.774 1.030-0.893 0.411-1.689 0.998-2.445 1.621-1.068 0.88-2.021 1.938-2.691 3.152-0.45-0.847-0.988-1.647-1.615-2.387-0.821-0.968-1.839-1.792-2.938-2.422-0.654-0.375-1.509-0.158-1.892 0.496-0.378 0.646-0.157 1.518 0.496 1.892 0.349 0.2 0.686 0.42 1.009 0.659 0.583 0.469 1.111 1.002 1.579 1.585 0.534 0.717 0.977 1.496 1.338 2.313 0.309 0.763 0.549 1.551 0.725 2.354 0.613 0.279 1.153 0.612 1.615 0.996 0.365-0.302 0.777-0.572 1.234-0.81-0.108-0.649-0.252-1.291-0.436-1.92 1.358 0.157 2.726-0.072 3.954-0.727zM16.902 7.285c-0.011-0.002-0.023-0.003-0.034-0.005-0.066-0.010-0.133-0.022-0.199-0.034-0.036-0.006-0.071-0.013-0.106-0.020 0.003-0.008 0.006-0.015 0.009-0.021 0.037-0.084 0.075-0.166 0.114-0.249 0.197-0.411 0.435-0.801 0.696-1.174 0.052-0.074 0.106-0.147 0.16-0.219 0.015-0.020 0.054-0.070 0.062-0.081 0.034-0.043 0.069-0.086 0.104-0.129 0.152-0.185 0.311-0.364 0.475-0.539 0.315-0.336 0.651-0.651 1.001-0.951 0.155-0.133 0.313-0.261 0.474-0.387 0.023-0.018 0.058-0.045 0.068-0.052 0.043-0.033 0.087-0.065 0.13-0.097 0.101-0.075 0.203-0.148 0.305-0.22 0.398-0.281 0.813-0.528 1.252-0.74 0.103-0.050 0.207-0.096 0.311-0.142 0.006-0.003 0.012-0.005 0.017-0.007 0.007-0.003 0.014-0.006 0.023-0.010 0.051-0.021 0.102-0.041 0.153-0.061 0.22-0.087 0.443-0.166 0.666-0.243 0.226-0.078 0.452-0.154 0.679-0.231-0.006 0.061-0.012 0.121-0.019 0.182-0.001 0.006-0.002 0.015-0.003 0.025-0.005 0.037-0.011 0.074-0.017 0.111-0.014 0.091-0.031 0.181-0.049 0.272-0.038 0.195-0.085 0.388-0.137 0.579-0.048 0.175-0.104 0.349-0.165 0.52-0.030 0.085-0.062 0.17-0.095 0.254-0.006 0.015-0.012 0.029-0.018 0.044s-0.042 0.099-0.053 0.123c-0.152 0.34-0.333 0.667-0.534 0.98-0.082 0.127-0.169 0.251-0.259 0.373 0.002-0.005-0.105 0.133-0.129 0.163-0.065 0.079-0.133 0.156-0.201 0.232-0.226 0.25-0.474 0.481-0.736 0.692-0.001-0.001-0.134 0.101-0.165 0.123-0.071 0.050-0.143 0.099-0.216 0.146-0.158 0.103-0.321 0.196-0.488 0.284-0.077 0.040-0.156 0.078-0.235 0.115-0.035 0.016-0.071 0.032-0.106 0.048-0.003 0.001-0.006 0.002-0.009 0.004-0.177 0.072-0.358 0.133-0.541 0.186-0.229 0.067-0.463 0.117-0.699 0.156-0.016 0.003-0.031 0.005-0.047 0.007-0.059 0.007-0.118 0.013-0.177 0.018-0.139 0.013-0.279 0.019-0.418 0.021-0.272 0.005-0.545-0.011-0.816-0.041-0.011-0.001-0.021-0.003-0.028-0.003z"></path>
            <path class="path2" d="M14.605 11.645c-1.456-0.857-3.352-1.192-4.905-1.192-0.002 0-0.004 0-0.006 0-5.165 0-7.662 2.252-7.961 8.273-0.249 6.029 4.731 13.275 12.225 13.275 0.006 0 0.012 0 0.018 0 0.712 0 1.455-0.586 2.023-1.037 0.588 0.451 1.313 1.037 2.024 1.037 0.006 0 0.012 0 0.018 0 7.495 0 12.476-7.245 12.227-13.275-0.299-6.021-2.797-8.273-7.963-8.273-0.002 0-0.004 0-0.006 0-1.559 0-3.458 0.337-4.918 1.202-0-0.002-0-0.003-0.001-0.005-0.531 0.315-1.004 0.698-1.382 1.159-0.378-0.466-0.856-0.853-1.394-1.169z"></path>
        </symbol>
        <symbol id="icon-heart" viewBox="0 0 32 32">
            <title>heart</title>
            <path class="path1" d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
        </symbol>
        <symbol id="icon-wrench" viewBox="0 0 32 32">
            <title>wrench</title>
            <path class="path1" d="M31.342 25.559l-14.392-12.336c0.67-1.259 1.051-2.696 1.051-4.222 0-4.971-4.029-9-9-9-0.909 0-1.787 0.135-2.614 0.386l5.2 5.2c0.778 0.778 0.778 2.051 0 2.828l-3.172 3.172c-0.778 0.778-2.051 0.778-2.828 0l-5.2-5.2c-0.251 0.827-0.386 1.705-0.386 2.614 0 4.971 4.029 9 9 9 1.526 0 2.963-0.38 4.222-1.051l12.336 14.392c0.716 0.835 1.938 0.882 2.716 0.104l3.172-3.172c0.778-0.778 0.731-2-0.104-2.716z"></path>
        </symbol>
        <symbol id="icon-appleheart" viewBox="0 0 32 32">
            <title>appleheart</title>
            <path class="path1" d="M17.428 8.953h0c1.078 0 4.549-0.553 5.979-1.799 1.455-1.269 2.040-2.842 2.274-3.938 0.226-1.061 0.252-2.369-0.202-2.9-0.193-0.225-0.501-0.317-1.063-0.317-1.354 0-4.171 0.56-5.966 2.062-1.551 1.298-2.179 3.505-2.246 5-0.054 1.219 0.266 1.539 0.371 1.644 0.217 0.217 0.539 0.247 0.854 0.247z"></path>
            <path class="path2" d="M29.197 17.412c-0.056-2.204-0.93-4.165-2.595-5.831-1.25-1.25-2.68-1.858-4.371-1.858-1.509 0-2.912 0.495-4.151 0.933-0.803 0.284-1.563 0.552-2.080 0.574-0.517-0.022-1.277-0.29-2.082-0.574-1.238-0.437-2.64-0.933-4.149-0.933-1.691 0-3.121 0.608-4.371 1.858-1.665 1.665-2.538 3.627-2.595 5.831-0.047 1.84 0.47 3.5 0.847 4.712l0.038 0.124c0.374 1.203 1.192 3.532 2.471 5.62 1.68 2.742 3.579 4.132 5.644 4.132 2.441 0 3.289-0.437 3.909-0.757 0.199-0.103 0.236-0.119 0.291-0.123 0.099 0.007 0.155 0.031 0.396 0.149 0.633 0.309 1.499 0.731 3.797 0.731 2.065 0 3.964-1.39 5.644-4.132 1.279-2.088 2.097-4.417 2.47-5.618l0.038-0.124c0.378-1.213 0.895-2.874 0.848-4.713zM21.117 21.223c-0.807 1.228-4.492 4.302-5.038 4.302-0.54 0-4.247-3.085-5.049-4.302-0.402-0.61-0.687-1.282-0.639-2.167 0.084-1.565 1.364-2.858 2.931-2.858 1.611 0 2.403 1.394 2.752 1.394 0.326 0 1.21-1.394 2.752-1.394 1.568 0 2.847 1.293 2.931 2.858 0.047 0.884-0.237 1.554-0.64 2.167z"></path>
        </symbol>
        <symbol id="icon-avocado" viewBox="0 0 32 32">
            <title>avocado</title>
            <path class="path1" d="M17.347 5.581c-3.514 1.108-7.252 3.231-9.302 5.283-3.885 3.888-4.108 9.987-0.496 13.595s9.71 3.379 13.595-0.509c2.050-2.052 4.17-5.792 5.275-9.306 1.247-3.965 1.088-7.112-0.436-8.634s-4.672-1.679-8.636-0.428zM17.627 21.605c-2.045 1.892-5.236 1.768-7.128-0.278s-1.767-5.236 0.278-7.128c2.045-1.892 5.236-1.767 7.128 0.278s1.767 5.237-0.278 7.128z"></path>
            <path class="path2" d="M31.258 4.674c-0.376-0.944-0.896-1.752-1.545-2.4-1.489-1.488-3.804-2.274-6.695-2.274-1.857 0-3.924 0.317-6.143 0.943-2.369 0.667-4.825 1.673-7.104 2.909-2.304 1.25-4.252 2.642-5.635 4.025-1.346 1.347-2.389 2.921-3.099 4.676-0.685 1.694-1.032 3.484-1.031 5.32s0.349 3.626 1.036 5.319c0.711 1.755 1.755 3.327 3.103 4.674 1.346 1.345 2.919 2.39 4.673 3.099 1.693 0.685 3.481 1.035 5.316 1.035 0 0 0.001 0 0.001 0 1.837 0 3.628-0.351 5.322-1.037 1.756-0.711 3.329-1.757 4.677-3.105 1.382-1.384 2.772-3.334 4.020-5.639 1.234-2.28 2.237-4.738 2.902-7.107 0.774-2.758 1.071-5.254 0.882-7.419-0.097-1.114-0.326-2.129-0.68-3.018zM28.541 14.405c-0.614 2.186-1.542 4.458-2.685 6.57-1.113 2.057-2.381 3.848-3.57 5.038-2.173 2.175-5.067 3.375-8.151 3.375-0 0-0.001 0-0.001 0-3.080 0-5.972-1.198-8.143-3.367-2.174-2.172-3.371-5.066-3.373-8.148s1.194-5.976 3.365-8.15c1.189-1.191 2.977-2.461 5.032-3.576 2.111-1.145 4.382-2.076 6.567-2.691 1.989-0.561 3.818-0.845 5.435-0.845 2.183 0 3.86 0.522 4.848 1.51 1.742 1.74 1.994 5.585 0.675 10.283z"></path>
        </symbol>
        <symbol id="icon-star" viewBox="0 0 32 32">
            <title>star</title>
            <path class="path1" d="M16 23.808l-10.038 6.692 4.462-11.154-10.038-6.692h11.154l4.462-11.154 4.462 11.154h11.154l-10.038 6.692 4.462 11.154z"></path>
        </symbol>
        <symbol id="icon-bananas" viewBox="0 0 32 32">
            <title>bananas</title>
            <path class="path1" d="M11.952 22.366c1.323-0.015 2.625-0.214 3.87-0.595 1.292-0.395 2.489-0.973 3.56-1.719 1.63-1.136 2.951-2.583 3.924-4.302 0.062-0.122 0.125-0.25 0.194-0.391 0.332-0.678 0.637-1.408 0.882-2.11 0.060-0.172 0.113-0.376 0.169-0.592 0.161-0.62 0.373-1.438 0.959-2.141l-0.262-2.489c-0.051-0.487 0.011-1.007 0.175-1.463 0.235-0.654 0.677-1.158 1.244-1.421 0.18-0.083 0.375-0.126 0.573-0.126 0.010 0 0.020 0 0.030 0 0.045 0.001 0.3 0.008 0.665 0.047 0.143-0.865 0.301-1.819 0.316-1.913-0.333-1.136-2.583-1.84-2.69-1.873-0.403 0.070-0.873 0.526-0.995 1.268l-0.518 3.136-0.009 0.004c-0.004 0.002-0.008 0.003-0.012 0.005l-0.005 0.002c-0.059 0.024-0.129 0.053-0.2 0.089-0.645 0.33-0.989 0.928-1.322 1.507-0.12 0.209-0.244 0.425-0.38 0.621-0.453 0.657-0.976 1.325-1.513 1.931-0.116 0.131-0.22 0.248-0.325 0.364-1.546 1.557-3.384 2.72-5.463 3.456-3.015 1.067-6.427 1.063-9.606-0.012-0.201-0.068-0.404-0.141-0.603-0.218-0.218-0.084-0.489-0.188-0.778-0.286-0.5-0.169-1.139-0.351-1.755-0.351-0.382 0-0.755 0.070-1.081 0.255-0.281 0.16-0.51 0.397-0.682 0.706-0.674 1.213-0.153 2.2 0.51 3.087 0.603 0.806 1.293 1.515 2.051 2.107 1.451 1.134 3.070 2.007 4.811 2.595 1.397 0.472 2.832 0.746 4.266 0.822z"></path>
            <path class="path2" d="M30.706 10.861c0 0-0.342-3.254-0.355-3.378-0.459-0.749-1.847-0.991-2.604-1.068-0.006-0.001-0.011-0.001-0.017-0.002s-0.011-0.001-0.017-0.002c-0.285-0.028-0.472-0.032-0.472-0.032-0.521 0.241-0.692 0.979-0.637 1.505l0.331 3.151c-0.003 0.003-0.007 0.005-0.010 0.007l-0.005 0.004c-0.051 0.039-0.111 0.086-0.17 0.14-0.538 0.492-0.712 1.163-0.88 1.812-0.060 0.233-0.123 0.474-0.201 0.698-0.262 0.753-0.589 1.535-0.945 2.261-0.077 0.156-0.146 0.297-0.217 0.437-0.422 0.748-0.903 1.45-1.442 2.103-0.022 0.027-0.045 0.054-0.067 0.081-0.024 0.028-0.048 0.057-0.072 0.085-0.803 0.944-1.727 1.782-2.765 2.506-2.389 1.664-5.331 2.56-8.367 2.56-0.295 0-0.591-0.008-0.888-0.026-0.212-0.012-0.427-0.029-0.638-0.050-0.232-0.023-0.522-0.052-0.826-0.069-0.168-0.010-0.35-0.017-0.539-0.017-0.775 0-1.672 0.12-2.234 0.682-0.231 0.231-0.39 0.523-0.475 0.869-0.33 1.358 0.438 2.176 1.317 2.858 0.796 0.618 1.651 1.119 2.54 1.489 1.702 0.709 3.496 1.122 5.332 1.227 0.311 0.018 0.622 0.027 0.931 0.027 3.604 0 7.066-1.206 9.837-3.442 4.403-3.554 6.563-9.222 5.637-14.794-0.11-0.664-0.504-1.253-1.083-1.624z"></path>
        </symbol>
        <symbol id="icon-books" viewBox="0 0 36 32">
            <title>books</title>
            <path class="path1" d="M7 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM6 10h-4v-2h4v2z"></path>
            <path class="path2" d="M17 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM16 10h-4v-2h4v2z"></path>
            <path class="path3" d="M23.909 5.546l-5.358 2.7c-0.491 0.247-0.691 0.852-0.443 1.343l8.999 17.861c0.247 0.491 0.852 0.691 1.343 0.443l5.358-2.7c0.491-0.247 0.691-0.852 0.443-1.343l-8.999-17.861c-0.247-0.491-0.852-0.691-1.343-0.443z"></path>
        </symbol>
        <symbol id="icon-cake" viewBox="0 0 32 32">
            <title>cake</title>
            <path class="path1" d="M30.358 15.146c-0.563-1.465-1.179-3.082-2.169-4.321-0.748-0.937-2.151-1.748-3.394-1.558-0.016 0.002-0.12 0.025-0.3 0.065 0.045 0.311 0.068 0.626 0.068 0.944 0 0.884-0.174 1.743-0.516 2.552-0.33 0.781-0.803 1.482-1.404 2.083s-1.302 1.074-2.083 1.404c-0.81 0.342-1.668 0.516-2.552 0.516s-1.743-0.174-2.552-0.516c-0.781-0.33-1.482-0.803-2.083-1.404s-1.074-1.302-1.404-2.083c-0.081-0.192-0.153-0.387-0.215-0.584-5.152 1.182-9.928 2.279-10.207 2.344-0.246 0.057-0.545 0.091-0.766 0.209-0.186 0.099-0.32 0.257-0.32 0.539v12.859c0 0.507 0.536 0.974 1.196 1.042l26.282 2.735c1.977 0.206 3.582-0.86 3.582-2.382 0-0.961-0.639-1.87-1.608-2.465 0.969-0.392 1.608-1.17 1.608-2.129s-0.639-1.869-1.607-2.462c2.858-1.164 1.243-5.312 0.445-7.391zM24.063 29.481l-21.077-2.195v-2.107l21.077 2.193c1.977 0.206 3.582 0.844 3.582 1.426s-1.605 0.889-3.582 0.683zM24.063 25.282l-21.077-2.195v-2.108l21.077 2.196c1.977 0.206 3.582 0.844 3.582 1.426s-1.605 0.887-3.582 0.681zM24.063 21.083l-21.077-2.193v-2.108l21.077 2.193c1.977 0.206 3.582 0.846 3.582 1.427 0 0.584-1.605 0.887-3.582 0.681z"></path>
            <path class="path2" d="M13.472 10.278c0 0.531 0.092 1.041 0.259 1.514 0.623 1.76 2.302 3.020 4.275 3.020 2.505 0 4.535-2.030 4.535-4.535 0-0.167-0.009-0.333-0.027-0.495-0.247-2.271-2.171-4.039-4.508-4.039-0.239 0-0.473 0.019-0.702 0.054-0.155-0.317-0.327-0.628-0.513-0.93-0.187-0.305-0.387-0.602-0.597-0.891-0.257-0.354-0.528-0.696-0.805-1.024-0.516-0.611-1.077-1.189-1.693-1.7-0.54-0.448-1.113-0.879-1.758-1.164-0.365-0.161-0.783-0.11-1.001 0.262-0.184 0.315-0.102 0.839 0.262 1.001 0.303 0.134 0.59 0.301 0.864 0.486 0.079 0.054 0.158 0.108 0.235 0.164 0.028 0.021 0.129 0.097 0.155 0.117 0.117 0.093 0.232 0.187 0.345 0.284 0.298 0.257 0.584 0.528 0.857 0.811 0.288 0.298 0.565 0.607 0.827 0.928 0.075 0.091 0.148 0.183 0.221 0.276 0 0 0 0 0.001 0.001 0.003 0.003 0.005 0.007 0.009 0.011 0.030 0.040 0.061 0.081 0.091 0.121 0.001 0.002 0.002 0.003 0.003 0.005 0.119 0.16 0.236 0.323 0.348 0.488 0.078 0.115 0.155 0.232 0.23 0.35 0.147 0.229 0.286 0.463 0.417 0.702 0.031 0.057 0.061 0.113 0.091 0.17-1.441 0.76-2.423 2.272-2.423 4.014z"></path>
        </symbol>
        <symbol id="icon-cinema" viewBox="0 0 32 32">
            <title>cinema</title>
            <path class="path1" d="M6.861 13.529c-0.058-0.489-0.231-0.942-0.493-1.333l23.413-7.817-1.229-3.681c-0.179-0.535-0.757-0.824-1.292-0.645l-25.468 8.503c-0.535 0.178-0.824 0.757-0.645 1.292l0.603 1.805c-0.602 0.559-0.979 1.355-0.979 2.239 0 1.145 0.633 2.144 1.567 2.667v14.42c0 0.564 0.458 1.021 1.021 1.021h26.85c0.563 0 1.021-0.457 1.021-1.021v-17.45h-24.368zM21.784 3.082l3.1-1.035-0.746 3.015-3.1 1.035 0.746-3.015zM14.125 5.639l3.1-1.035-0.746 3.015-3.1 1.035 0.746-3.015zM3.827 15.449c-0.858 0-1.557-0.698-1.557-1.557s0.699-1.557 1.557-1.557c0.859 0 1.557 0.698 1.557 1.557s-0.699 1.557-1.557 1.557zM6.467 8.196l3.1-1.035-0.746 3.015-3.1 1.035 0.746-3.015zM9.513 16.977h-3.268l1.662-2.623h3.268l-1.662 2.623zM15.98 14.353h3.268l-1.662 2.623h-3.268l1.662-2.623zM15.178 27.032v-6.92l5.511 3.46-5.511 3.46zM25.66 16.977h-3.268l1.662-2.623h3.268l-1.662 2.623z"></path>
        </symbol>
        <symbol id="icon-tea" viewBox="0 0 32 32">
            <title>tea</title>
            <path class="path1" d="M14.503 32h8.728c5.305 0 5.318 0.010 5.318-5.295v-17.695c0-2.091-0.013-2.075-2.101-2.075h-15.158c-2.108 0-2.095-0.013-2.095 2.075v1.351c-0.498-0.193-1.009-0.305-1.564-0.305-2.311 0-4.18 1.872-4.18 4.183v7.841c0 2.311 1.869 4.18 4.18 4.18 0.554 0 1.066-0.11 1.564-0.302v0.747c0 5.305 0.003 5.295 5.308 5.295zM23.835 10.58c0-0.574 0.471-1.046 1.046-1.046s1.046 0.471 1.046 1.046v15.158c0 0.574-0.471 1.046-1.046 1.046s-1.046-0.471-1.046-1.046v-15.158zM7.634 23.647c-0.87 0-1.56-0.701-1.56-1.567v-7.841c0-0.866 0.694-1.567 1.56-1.567s1.56 0.701 1.56 1.567v7.841c0 0.866-0.691 1.567-1.56 1.567z"></path>
            <path class="path2" d="M13.105 2.985c-0.040-0.030-0.080-0.060-0.12-0.086s-0.080-0.056-0.123-0.083c-0.040-0.027-0.083-0.053-0.123-0.080-0.043-0.027-0.086-0.050-0.126-0.076-0.173-0.103-0.349-0.196-0.534-0.285-0.369-0.173-0.754-0.315-1.152-0.428-0.199-0.056-0.398-0.103-0.601-0.146l-0.126-0.027-0.139-0.030-0.139-0.027-0.063-0.013-0.060-0.013c-0.080-0.017-0.163-0.033-0.246-0.050s-0.169-0.037-0.256-0.053c-0.043-0.010-0.086-0.017-0.126-0.027-0.043-0.010-0.083-0.020-0.126-0.027-0.043-0.010-0.083-0.017-0.126-0.027s-0.083-0.017-0.126-0.027c-0.083-0.020-0.166-0.037-0.249-0.056s-0.163-0.040-0.246-0.056c-0.040-0.010-0.083-0.017-0.123-0.030-0.040-0.010-0.080-0.020-0.12-0.030s-0.080-0.020-0.12-0.027c-0.040-0.010-0.080-0.020-0.12-0.030-0.631-0.153-1.218-0.319-1.73-0.491-0.256-0.086-0.491-0.173-0.704-0.256s-0.398-0.166-0.554-0.242c-0.156-0.073-0.279-0.139-0.365-0.186s-0.133-0.076-0.133-0.076-0.003 0.056 0.013 0.156c0.013 0.1 0.043 0.249 0.106 0.428 0.060 0.179 0.153 0.395 0.282 0.627s0.299 0.478 0.508 0.727c0.209 0.249 0.458 0.501 0.744 0.737s0.601 0.461 0.946 0.664c0.342 0.203 0.714 0.388 1.096 0.541 0.096 0.040 0.193 0.076 0.289 0.113s0.196 0.073 0.295 0.103c0.1 0.033 0.199 0.063 0.299 0.093 0.103 0.030 0.209 0.056 0.312 0.083l0.12 0.030 0.037 0.010 0.139 0.033 0.139 0.030 0.070 0.017 0.083 0.017c0.169 0.033 0.342 0.066 0.508 0.1 0.332 0.063 0.654 0.123 0.969 0.183 0.153 0.030 0.305 0.060 0.455 0.090 0.073 0.017 0.146 0.030 0.216 0.043 0.070 0.017 0.143 0.030 0.209 0.046 0.276 0.060 0.531 0.123 0.764 0.193s0.442 0.146 0.627 0.232c0.183 0.086 0.342 0.183 0.471 0.282 0.033 0.023 0.060 0.050 0.090 0.073 0.027 0.023 0.053 0.050 0.076 0.073s0.046 0.046 0.063 0.070c0.020 0.023 0.037 0.043 0.053 0.060 0.030 0.040 0.053 0.070 0.066 0.093s0.020 0.037 0.020 0.037 0.010-0.010 0.023-0.037c0.013-0.023 0.033-0.060 0.053-0.113 0.010-0.027 0.020-0.053 0.030-0.086s0.017-0.070 0.027-0.106c0.017-0.080 0.027-0.173 0.030-0.279 0.003-0.212-0.040-0.471-0.146-0.75s-0.276-0.571-0.498-0.847c-0.222-0.285-0.498-0.548-0.81-0.78z"></path>
            <path class="path3" d="M14.294 1.208c0.129 0.232 0.299 0.478 0.508 0.727s0.458 0.501 0.744 0.737c0.286 0.236 0.601 0.461 0.946 0.664 0.342 0.203 0.714 0.388 1.096 0.541 0.096 0.040 0.193 0.076 0.289 0.113s0.196 0.073 0.295 0.103c0.1 0.033 0.199 0.063 0.299 0.093 0.103 0.030 0.209 0.056 0.312 0.083l0.119 0.030 0.037 0.010 0.139 0.033 0.139 0.030 0.070 0.017 0.083 0.017c0.169 0.033 0.342 0.066 0.508 0.1 0.332 0.063 0.654 0.123 0.969 0.183 0.153 0.030 0.305 0.060 0.455 0.090 0.073 0.017 0.146 0.030 0.216 0.043 0.070 0.017 0.143 0.030 0.209 0.046 0.276 0.060 0.531 0.123 0.764 0.193s0.442 0.146 0.627 0.232c0.183 0.086 0.342 0.183 0.471 0.282 0.033 0.023 0.060 0.050 0.090 0.073 0.027 0.023 0.053 0.050 0.076 0.073s0.046 0.046 0.063 0.070c0.020 0.023 0.037 0.043 0.053 0.060 0.030 0.040 0.053 0.070 0.066 0.093s0.020 0.037 0.020 0.037 0.010-0.010 0.023-0.037c0.013-0.023 0.033-0.060 0.053-0.113 0.010-0.027 0.020-0.053 0.030-0.086s0.017-0.070 0.027-0.106c0.017-0.080 0.027-0.173 0.030-0.279 0.003-0.212-0.040-0.471-0.146-0.75s-0.276-0.571-0.498-0.847c-0.222-0.276-0.501-0.538-0.813-0.77-0.040-0.030-0.080-0.060-0.12-0.086s-0.080-0.056-0.123-0.083c-0.040-0.027-0.083-0.053-0.123-0.080-0.043-0.027-0.086-0.050-0.126-0.076-0.173-0.103-0.349-0.196-0.535-0.285-0.369-0.173-0.754-0.315-1.152-0.428-0.199-0.056-0.398-0.103-0.601-0.146l-0.126-0.027-0.139-0.030-0.139-0.027-0.063-0.013-0.060-0.013c-0.080-0.017-0.163-0.033-0.246-0.050s-0.169-0.037-0.256-0.053c-0.043-0.010-0.086-0.017-0.126-0.027-0.043-0.010-0.083-0.020-0.126-0.027-0.043-0.010-0.083-0.017-0.126-0.027s-0.083-0.017-0.126-0.027c-0.083-0.020-0.166-0.037-0.249-0.056s-0.163-0.040-0.246-0.056c-0.040-0.010-0.083-0.017-0.123-0.030-0.040-0.010-0.080-0.020-0.12-0.030s-0.080-0.020-0.119-0.027c-0.040-0.010-0.080-0.020-0.119-0.030-0.631-0.153-1.218-0.319-1.73-0.491-0.256-0.086-0.491-0.173-0.704-0.256s-0.398-0.166-0.554-0.242c-0.156-0.073-0.279-0.139-0.365-0.186s-0.133-0.076-0.133-0.076-0.003 0.056 0.013 0.156c0.013 0.1 0.043 0.249 0.106 0.428 0.063 0.173 0.153 0.388 0.286 0.618z"></path>
        </symbol>
        <symbol id="icon-cupcake" viewBox="0 0 32 32">
            <title>cupcake</title>
            <path class="path1" d="M6.214 22.622c-0.247 0.027-0.493 0.041-0.74 0.041-0.689 0-1.453-0.127-2.142-0.353l1.631 7.2c0.141 0.624 0.696 1.069 1.336 1.069h18.888c0.641 0 1.196-0.442 1.336-1.069l1.597-7.052c-0.524 0.134-1.059 0.206-1.587 0.206-0.418 0-0.833-0.041-1.241-0.12l-1.199 5.294h-1.922l1.090-5.418c-0.469 0.13-0.956 0.212-1.446 0.236l-1.042 5.181h-2.101l0.247-5.702c-0.058-0.024-0.113-0.048-0.171-0.075-0.391 0.182-0.798 0.322-1.216 0.422l-0.233 5.356h-2.906l-0.233-5.442c-0.23-0.069-0.456-0.147-0.675-0.24-0.226 0.096-0.459 0.175-0.696 0.243l0.233 5.435h-2.303l-1.066-5.308c-0.493-0.099-0.977-0.257-1.432-0.469-0.017 0.007-0.038 0.017-0.055 0.024l1.151 5.757h-1.922l-1.182-5.216z"></path>
            <path class="path2" d="M3.058 21.093c0.123 0.058 0.247 0.113 0.374 0.161 0.624 0.236 1.374 0.38 2.042 0.38 0.171 0 0.343-0.007 0.514-0.024 0.702-0.065 1.367-0.264 1.967-0.565 0.089-0.045 0.178-0.093 0.264-0.14 0.377 0.216 0.781 0.391 1.21 0.514 0.487 0.14 1.001 0.219 1.535 0.219 0.624 0 1.22-0.103 1.778-0.295 0.257-0.089 0.504-0.195 0.74-0.315 0.202 0.106 0.411 0.195 0.627 0.278 0.589 0.216 1.227 0.336 1.892 0.336 0.548 0 1.076-0.079 1.573-0.23 0.411-0.123 0.805-0.291 1.172-0.504 0.072 0.041 0.144 0.079 0.216 0.12 0.757 0.391 1.614 0.613 2.526 0.613 0.178 0 0.356-0.010 0.531-0.027 0.514-0.048 1.007-0.171 1.47-0.35 0.178-0.069 0.353-0.147 0.521-0.236 0.466 0.24 0.973 0.418 1.508 0.517 0.329 0.062 0.668 0.093 1.014 0.093 0.627 0 1.254-0.116 1.85-0.332 1.552-0.562 2.885-1.792 3.358-3.386 0.274-0.925 0.312-1.806 0.202-2.755-0.226-1.964-0.781-3.903-1.652-5.678-1.306-2.659-3.379-4.869-6.024-6.226-4.050-2.080-9.263-2.31-13.625-1.121-2.964 0.809-5.613 2.488-7.47 4.948-1.364 1.806-2.275 3.934-2.779 6.137-0.154 0.672-0.271 1.354-0.346 2.039-0.137 1.268 0.010 2.652 0.72 3.735 0.559 0.857 1.36 1.638 2.293 2.094zM19.229 7.235l2.628-1.902c0.308-0.223 0.737-0.154 0.956 0.154 0.223 0.305 0.154 0.737-0.154 0.956l-2.628 1.902c-0.12 0.089-0.26 0.13-0.401 0.13-0.212 0-0.422-0.099-0.555-0.284-0.223-0.305-0.151-0.733 0.154-0.956zM16.868 9.36c0.223 0.305 0.154 0.737-0.154 0.956l-2.628 1.902c-0.12 0.089-0.26 0.13-0.401 0.13-0.212 0-0.421-0.099-0.555-0.284-0.223-0.305-0.154-0.737 0.154-0.956l2.628-1.902c0.305-0.219 0.733-0.151 0.956 0.154zM12.797 7.235l2.628-1.902c0.305-0.223 0.737-0.154 0.956 0.154 0.223 0.305 0.154 0.737-0.154 0.956l-2.628 1.902c-0.12 0.089-0.26 0.13-0.401 0.13-0.212 0-0.421-0.099-0.555-0.284-0.219-0.305-0.151-0.733 0.154-0.956zM6.848 11.108l2.628-1.902c0.308-0.223 0.737-0.154 0.956 0.154s0.154 0.737-0.154 0.956l-2.628 1.902c-0.12 0.089-0.26 0.13-0.401 0.13-0.212 0-0.421-0.099-0.555-0.284-0.219-0.305-0.151-0.733 0.154-0.956z"></path>
            <path class="path3" d="M16.005 1.472c-0.137 0-0.271 0-0.404 0.003l1.117 0.007c-0.236-0.007-0.473-0.010-0.713-0.010z"></path>
        </symbol>
        <symbol id="icon-dress" viewBox="0 0 32 32">
            <title>dress</title>
            <path class="path1" d="M25.243 18.986c-0.846-2.443-1.909-4.553-3.128-6.080h-1.657c1.363 4.51 3.5 5.754 4.786 6.080z"></path>
            <path class="path2" d="M9.874 9.549c0.275 0.56 0.482 1.146 0.625 1.746h11.003c0.142-0.6 0.349-1.186 0.625-1.746l0.001-0.002c0.599-1.22 0.501-2.668-0.257-3.796-0.777-1.158-1.306-3.127-1.364-5.389-0.005-0.201-0.17-0.362-0.371-0.362h-0.829c-0.201 0-0.365 0.159-0.371 0.36-0.092 3.103-1.371 5.564-2.936 5.564s-2.843-2.46-2.936-5.564c-0.006-0.201-0.17-0.36-0.371-0.36h-0.829c-0.201 0-0.366 0.16-0.371 0.362-0.058 2.262-0.587 4.231-1.364 5.389-0.756 1.127-0.855 2.578-0.257 3.796l0.001 0.002z"></path>
            <path class="path3" d="M11.542 12.907h-1.657c-1.22 1.527-2.282 3.638-3.129 6.082 1.29-0.324 3.422-1.567 4.786-6.082z"></path>
            <path class="path4" d="M25.784 20.696c-0.599-0.039-1.465-0.209-2.426-0.76-2.072-1.187-3.61-3.551-4.578-7.029h-5.559c-0.968 3.479-2.507 5.843-4.578 7.029-0.961 0.55-1.827 0.72-2.426 0.76-0.92 3.185-1.49 6.79-1.601 10.348-0.008 0.251 0.086 0.494 0.261 0.674s0.415 0.282 0.665 0.282h20.918c0.251 0 0.491-0.102 0.666-0.282s0.268-0.423 0.261-0.674c-0.111-3.558-0.681-7.163-1.601-10.348z"></path>
        </symbol>
        <symbol id="icon-eggplant" viewBox="0 0 32 32">
            <title>eggplant</title>
            <path class="path1" d="M15.368 28.274c1.893-1.893 4.197-5.618 7.249-10.607 1.074-1.758 2.796-3.385 4.342-4.985-0.263-0.738-0.566-1.651-0.697-2.301-0.064-0.313-0.131-0.721-0.199-1.135-0.384 0.269-0.539 0.354-0.606 0.391-0.707 0.387-1.667 0.778-2.348 1.037-0.158 0.061-0.323 0.091-0.492 0.091-0.441 0-0.849-0.216-1.098-0.573-0.249-0.36-0.3-0.825-0.138-1.243 0.259-0.68 0.653-1.64 1.037-2.348 0.037-0.067 0.121-0.222 0.391-0.606-0.418-0.064-0.822-0.135-1.135-0.199-0.63-0.128-1.502-0.414-2.227-0.67-1.549 1.516-3.183 3.197-5.063 4.315-5.477 3.264-9.155 5.349-10.833 7.026-3.853 3.847-5.042 9.334-1.189 13.191s9.148 2.472 13.005-1.384z"></path>
            <path class="path2" d="M31.082 0.148c-0.088-0.064-0.182-0.098-0.273-0.098-0.162 0-0.31 0.098-0.391 0.28-0.168 0.371-0.472 0.849-0.896 1.448-0.704 1.142-1.651 1.509-1.651 1.509-0.569-0.404-1.216-0.788-1.843-1.091-0.674-0.327-1.421-0.509-2.169-0.509-0.455 0-0.913 0.067-1.351 0.212-0.95 0.313-2.186 1.031-3.133 1.637-0.259 0.165-0.232 0.394 0.054 0.499 0.232 0.084 0.522 0.189 0.832 0.293 0.549 0.185 1.159 0.374 1.607 0.465 0.603 0.121 1.593 0.269 2.213 0.357 0.303 0.044 0.397 0.273 0.212 0.515-0.337 0.441-0.822 1.095-0.99 1.405-0.371 0.677-0.758 1.637-0.98 2.226-0.094 0.243 0.077 0.448 0.293 0.448 0.040 0 0.084-0.007 0.128-0.024 0.586-0.226 1.549-0.61 2.226-0.98 0.31-0.168 0.963-0.657 1.405-0.99 0.084-0.064 0.168-0.094 0.243-0.094 0.138 0 0.246 0.108 0.273 0.307 0.088 0.616 0.232 1.61 0.357 2.213 0.094 0.468 0.296 1.108 0.488 1.674 0.098 0.286 0.192 0.552 0.273 0.768 0.057 0.155 0.148 0.232 0.246 0.232 0.084 0 0.175-0.061 0.253-0.179 0.606-0.947 1.324-2.183 1.637-3.133 0.118-0.357 0.189-0.744 0.209-1.118 0.078-1.472-0.623-2.661-1.354-3.874-0.020-0.034-0.229-0.307-0.216-0.344 0 0 0.404-0.852 1.509-1.651 0.613-0.421 0.953-0.677 1.428-0.92 0.28-0.128 0.364-0.418 0.182-0.664-0.246-0.333-0.485-0.573-0.822-0.822z"></path>
        </symbol>
        <symbol id="icon-elevator" viewBox="0 0 32 32">
            <title>elevator</title>
            <path class="path1" d="M6.179 9.958c-0.345-0.345-0.518-0.765-0.518-1.258s0.173-0.913 0.518-1.258c0.345-0.345 0.765-0.518 1.258-0.518s0.913 0.173 1.258 0.518c0.345 0.345 0.518 0.765 0.518 1.258s-0.173 0.913-0.518 1.258-0.765 0.518-1.258 0.518c-0.493 0-0.913-0.173-1.258-0.518zM3.904 18.449c0.111 0.086 0.24 0.13 0.388 0.13s0.277-0.043 0.388-0.13 0.167-0.228 0.167-0.425v-4.81c0-0.074 0.037-0.123 0.111-0.148s0.136-0.037 0.185-0.037 0.111 0.012 0.185 0.037c0.074 0.025 0.111 0.074 0.111 0.148v11.063c0 0.222 0.080 0.407 0.24 0.555s0.351 0.222 0.574 0.222c0.222 0 0.413-0.074 0.574-0.222s0.24-0.333 0.24-0.555v-6.771c0-0.123 0.049-0.203 0.148-0.241s0.173-0.055 0.222-0.055 0.117 0.019 0.204 0.055 0.13 0.117 0.13 0.241v6.771c0 0.222 0.080 0.407 0.24 0.555s0.351 0.222 0.573 0.222c0.247 0 0.444-0.074 0.592-0.222s0.222-0.333 0.222-0.555l0.037-11.063c0-0.074 0.037-0.123 0.111-0.148s0.136-0.037 0.185-0.037 0.111 0.012 0.185 0.037 0.111 0.074 0.111 0.148v4.81c0 0.197 0.056 0.339 0.166 0.425s0.234 0.13 0.37 0.13c0.136 0 0.259-0.043 0.37-0.13s0.166-0.228 0.166-0.425v-5.106c0-0.493-0.166-0.937-0.499-1.332s-0.783-0.592-1.351-0.592h-3.885c-0.567 0-0.981 0.197-1.239 0.592s-0.389 0.839-0.389 1.332v5.106c0 0.197 0.055 0.339 0.167 0.425zM23.088 4.056c0.222 0.21 0.333 0.475 0.333 0.795v22.052c0 0.321-0.111 0.586-0.333 0.796s-0.493 0.315-0.814 0.315h-21.127c-0.321 0-0.592-0.105-0.814-0.315s-0.333-0.475-0.333-0.796v-22.052c0-0.321 0.111-0.586 0.333-0.795s0.493-0.314 0.814-0.314h21.127c0.321 0 0.592 0.105 0.814 0.314zM21.571 5.592h-19.721v20.572h19.721v-20.572zM15.947 10.476c0.493 0 0.913-0.173 1.258-0.518s0.518-0.765 0.518-1.258-0.173-0.913-0.518-1.258c-0.345-0.345-0.765-0.518-1.258-0.518s-0.913 0.173-1.258 0.518c-0.345 0.345-0.518 0.765-0.518 1.258s0.173 0.913 0.518 1.258 0.765 0.518 1.258 0.518zM12.414 18.449c0.111 0.086 0.241 0.13 0.389 0.13s0.277-0.043 0.389-0.13 0.166-0.228 0.166-0.425v-4.81c0-0.074 0.037-0.123 0.111-0.148s0.136-0.037 0.185-0.037 0.111 0.012 0.185 0.037 0.111 0.074 0.111 0.148v11.063c0 0.222 0.080 0.407 0.241 0.555s0.351 0.222 0.573 0.222 0.413-0.074 0.573-0.222c0.16-0.148 0.241-0.333 0.241-0.555v-6.771c0-0.123 0.049-0.203 0.148-0.241s0.173-0.055 0.222-0.055 0.123 0.019 0.222 0.055c0.099 0.037 0.148 0.117 0.148 0.241v6.771c0 0.222 0.074 0.407 0.222 0.555s0.345 0.222 0.592 0.222c0.222 0 0.413-0.074 0.573-0.222s0.241-0.333 0.241-0.555v-11.063c0-0.074 0.037-0.123 0.111-0.148s0.136-0.037 0.185-0.037 0.111 0.012 0.185 0.037c0.074 0.025 0.111 0.074 0.111 0.148v4.81c0 0.197 0.055 0.339 0.166 0.425s0.241 0.13 0.389 0.13 0.277-0.043 0.389-0.13 0.166-0.228 0.166-0.425v-5.106c0-0.493-0.173-0.937-0.518-1.332s-0.802-0.592-1.369-0.592h-3.848c-0.567 0-0.987 0.197-1.258 0.592s-0.407 0.839-0.407 1.332v5.106c0 0.197 0.056 0.339 0.166 0.425zM31.669 23.692c-0.64 0-1.658 0-1.658 0s0-0.276 0-0.7c0-1.308 0-3.855 0-4.83 0 0 0.008-0.228-0.288-0.228s-2.111 0-2.524 0c-0.415 0-0.342 0.273-0.342 0.273 0 1.004 0 3.465 0 4.821 0 0.473 0 0.781 0 0.781s-1.27 0-1.795 0c-0.523 0-0.041 0.456-0.041 0.456l3.185 3.849c0 0 0.261 0.306 0.535 0.031 0.377-0.378 3.085-3.974 3.085-3.974s0.481-0.477-0.157-0.477zM25.149 8.654c0.64 0 1.658 0 1.658 0s0 0.276 0 0.7c0 1.308 0 3.855 0 4.83 0 0-0.008 0.228 0.288 0.228s2.111 0 2.524 0c0.415 0 0.342-0.273 0.342-0.273 0-1.004 0-3.465 0-4.821 0-0.473 0-0.781 0-0.781s1.27 0 1.795 0c0.523 0 0.041-0.456 0.041-0.456l-3.185-3.849c0 0-0.261-0.306-0.535-0.031-0.377 0.378-3.085 3.974-3.085 3.974s-0.481 0.477 0.157 0.477z"></path>
        </symbol>
        <symbol id="icon-flipflop" viewBox="0 0 32 32">
            <title>flipflop</title>
            <path class="path1" d="M12.076 2.018c-1.354-1.047-3.194-1.167-4.867-0.673-0.527 0.153-1.033 0.367-1.5 0.633-2.207 1.24-4.707 3.714-5.361 6.214-0.633 2.427-0.28 4.987 0.1 7.454 0.113-0.433 0.267-0.854 0.453-1.247 1.24-2.614 3.981-3.854 6.041-5.694v-1.060c0-0.36 0.3-0.654 0.653-0.654 0.36 0 0.653 0.3 0.653 0.654v1.113c1.040 0.954 1.974 2.060 2.907 3.114 0.507 0.573 1.007 1.16 1.507 1.74 0.193 0.227 0.393 0.453 0.58 0.693 0.14-1.76 0.433-3.474 0.713-5.321 0.38-2.5 0.12-5.427-1.88-6.968z"></path>
            <path class="path2" d="M4.042 23.007c-1.047-0.333-1.92-1.080-2.574-1.98 0.553 2.234 1.24 4.454 1.92 6.528 1.274 3.907 5.561 3.961 8.341 2.5 2.6-1.367 2.207-5.861 1.78-9.488-0.28 0.42-0.607 0.82-0.8 1.28-0.133 0.333-0.433 0.56-0.807 0.46-0.313-0.087-0.593-0.473-0.46-0.807 0.473-1.154 1.487-2.034 1.587-3.34 0.080-1.007-0.047-1.96-0.633-2.807-0.727-1.040-1.647-1.994-2.5-2.927-0.773-0.847-1.52-1.74-2.347-2.534-1.787 1.48-4.087 2.614-5.261 4.661-0.673 1.167-1.020 2.787-0.593 4.101 0.407 1.247 1.387 2.674 2.694 3.094 0.807 0.253 0.46 1.52-0.347 1.26z"></path>
            <path class="path3" d="M31.552 15.646c0.38-2.467 0.733-5.027 0.1-7.454-0.653-2.5-3.16-4.974-5.367-6.214-0.467-0.267-0.973-0.48-1.5-0.633-1.667-0.487-3.514-0.373-4.867 0.673-1.994 1.547-2.254 4.467-1.88 6.968 0.273 1.84 0.573 3.554 0.713 5.321 0.187-0.233 0.387-0.467 0.58-0.693 0.5-0.58 1-1.167 1.507-1.74 0.933-1.053 1.867-2.16 2.907-3.114v-1.113c0-0.36 0.3-0.654 0.653-0.654 0.36 0 0.653 0.3 0.653 0.654v1.053c2.067 1.84 4.801 3.087 6.041 5.694 0.193 0.393 0.347 0.813 0.46 1.254z"></path>
            <path class="path4" d="M20.090 22.307c-0.373 0.1-0.673-0.127-0.807-0.46-0.187-0.46-0.513-0.867-0.8-1.28-0.427 3.627-0.82 8.114 1.78 9.488 2.774 1.46 7.061 1.4 8.341-2.5 0.68-2.074 1.367-4.294 1.92-6.528-0.653 0.9-1.527 1.647-2.574 1.98-0.807 0.26-1.147-1.007-0.347-1.267 1.307-0.42 2.28-1.84 2.694-3.094 0.427-1.307 0.080-2.927-0.593-4.101-1.174-2.047-3.48-3.18-5.261-4.661-0.827 0.793-1.574 1.687-2.347 2.534-0.853 0.933-1.774 1.894-2.5 2.927-0.587 0.847-0.707 1.793-0.633 2.807 0.1 1.307 1.113 2.18 1.587 3.34 0.127 0.34-0.147 0.727-0.46 0.813z"></path>
        </symbol>
        <symbol id="icon-grass" viewBox="0 0 32 32">
            <title>grass</title>
            <path class="path1" d="M28.453 0.253c-0.165-0.237-0.477-0.32-0.738-0.196-3.296 1.572-8.122 4.806-11.76 11.144 2.109 3.202 3.937 7.324 4.895 12.573 0.126-5.245 1.166-16.55 7.53-22.76 0.207-0.201 0.237-0.523 0.073-0.76z"></path>
            <path class="path2" d="M6.71 4.79c-0.098-0.065-0.211-0.096-0.323-0.096-0.16 0-0.32 0.065-0.436 0.191-0.196 0.213-0.208 0.536-0.031 0.764 6.417 8.219 4.639 22.403 4.125 25.668-0.027 0.171 0.021 0.345 0.134 0.477 0.112 0.13 0.277 0.207 0.45 0.207h8.26c0.159 0 0.309-0.063 0.42-0.175s0.173-0.264 0.171-0.422c-0.191-15.974-8.035-23.512-12.77-26.613z"></path>
            <path class="path3" d="M1.709 19.113c-0.114-0.075-0.267-0.056-0.36 0.044s-0.099 0.254-0.015 0.362c3.043 3.896 2.2 10.621 1.955 12.169-0.013 0.082 0.011 0.157 0.063 0.22 0.053 0.062 0.132 0.092 0.214 0.092h3.916c0.074 0 0.146-0.024 0.199-0.076s0.082-0.122 0.081-0.197c-0.090-7.573-3.808-11.143-6.054-12.614z"></path>
            <path class="path4" d="M30.622 14.283c-0.129-0.139-0.337-0.166-0.497-0.062-3.096 2.028-8.223 6.956-8.349 17.402-0.002 0.102 0.041 0.195 0.112 0.269 0.073 0.074 0.171 0.108 0.275 0.108h5.4c0.114 0 0.22-0.043 0.294-0.13 0.072-0.086 0.104-0.196 0.087-0.307-0.336-2.135-1.499-11.409 2.698-16.783 0.117-0.148 0.108-0.358-0.021-0.497z"></path>
        </symbol>
        <symbol id="icon-leafcircle" viewBox="0 0 32 32">
            <title>leafcircle</title>
            <path class="path1" d="M16 0c-8.822 0-16 7.178-16 16s7.178 16 16 16c8.823 0 16-7.178 16-16s-7.178-16-16-16zM23.849 19.515c-1.912 1.912-4.603 2.631-6.646 2.819 0.076-0.113 0.152-0.229 0.225-0.349 0.168-0.27 0.33-0.554 0.49-0.846s0.317-0.59 0.474-0.885c0.040-0.073 0.078-0.147 0.117-0.221 0.039-0.072 0.079-0.145 0.119-0.217 0.077-0.147 0.159-0.286 0.238-0.427 0.038-0.073 0.081-0.137 0.122-0.206 0.042-0.067 0.079-0.139 0.122-0.203s0.085-0.129 0.126-0.195l0.038-0.061 0.004-0.006 0.002-0.003c-0.034 0.044-0.008 0.010-0.015 0.019l0.019-0.027 0.077-0.108c0.1-0.143 0.198-0.285 0.296-0.426 0.092-0.13 0.182-0.26 0.269-0.391 0.092-0.127 0.183-0.253 0.269-0.379 0.085-0.129 0.178-0.24 0.261-0.36 0.042-0.060 0.084-0.118 0.125-0.176 0.043-0.055 0.086-0.11 0.128-0.163 0.084-0.11 0.164-0.216 0.242-0.319 0.081-0.099 0.161-0.192 0.235-0.286 0.037-0.047 0.074-0.094 0.109-0.139 0.038-0.041 0.075-0.081 0.111-0.122 0.071-0.082 0.139-0.156 0.201-0.231 0.031-0.037 0.061-0.072 0.090-0.106 0.031-0.030 0.059-0.062 0.087-0.091 0.222-0.232 0.349-0.39 0.349-0.39s-0.192 0.003-0.53 0.054c-0.042 0.006-0.087 0.012-0.134 0.021-0.045 0.011-0.092 0.024-0.141 0.036-0.099 0.024-0.204 0.058-0.319 0.091-0.058 0.016-0.116 0.036-0.177 0.056-0.058 0.024-0.118 0.048-0.179 0.074-0.123 0.051-0.249 0.111-0.385 0.171-0.131 0.065-0.26 0.143-0.397 0.223-0.068 0.040-0.137 0.082-0.206 0.125-0.066 0.047-0.133 0.094-0.201 0.142-0.067 0.049-0.136 0.099-0.205 0.15-0.034 0.026-0.069 0.051-0.104 0.077-0.033 0.028-0.066 0.055-0.099 0.083-0.132 0.111-0.266 0.228-0.4 0.349-0.13 0.126-0.259 0.257-0.39 0.391-0.068 0.069-0.122 0.131-0.182 0.197-0.058 0.066-0.116 0.132-0.174 0.198l-0.087 0.1-0.022 0.025-0.040 0.052-0.045 0.060c-0.061 0.080-0.12 0.162-0.179 0.244s-0.11 0.166-0.164 0.25c-0.052 0.085-0.109 0.168-0.155 0.254-0.094 0.172-0.191 0.344-0.27 0.517-0.086 0.173-0.159 0.347-0.229 0.519-0.073 0.173-0.131 0.343-0.193 0.512-0.056 0.168-0.112 0.336-0.161 0.5-0.098 0.327-0.18 0.644-0.252 0.941-0.032 0.138-0.063 0.272-0.093 0.402-0.030-0.13-0.061-0.264-0.093-0.402-0.072-0.297-0.154-0.614-0.252-0.941-0.049-0.164-0.104-0.331-0.161-0.5-0.062-0.17-0.121-0.34-0.193-0.512-0.071-0.172-0.143-0.346-0.229-0.519-0.079-0.174-0.176-0.346-0.27-0.517-0.046-0.086-0.103-0.17-0.155-0.254-0.054-0.084-0.104-0.168-0.164-0.25s-0.118-0.164-0.179-0.244l-0.045-0.060-0.040-0.052-0.022-0.025-0.087-0.1c-0.058-0.066-0.116-0.132-0.174-0.198-0.060-0.065-0.114-0.128-0.182-0.197-0.13-0.134-0.26-0.265-0.39-0.391-0.134-0.122-0.267-0.238-0.4-0.349-0.033-0.028-0.066-0.056-0.099-0.083-0.035-0.026-0.069-0.052-0.104-0.077-0.069-0.051-0.137-0.1-0.205-0.15-0.068-0.048-0.135-0.095-0.201-0.142-0.069-0.044-0.138-0.085-0.206-0.125-0.137-0.080-0.266-0.158-0.397-0.223-0.135-0.061-0.262-0.12-0.385-0.171-0.061-0.025-0.121-0.050-0.179-0.074-0.060-0.020-0.119-0.039-0.177-0.056-0.115-0.033-0.22-0.066-0.319-0.091-0.049-0.012-0.096-0.025-0.141-0.036-0.046-0.009-0.092-0.014-0.134-0.021-0.338-0.051-0.53-0.054-0.53-0.054s0.128 0.158 0.349 0.39c0.028 0.029 0.056 0.060 0.087 0.091 0.029 0.034 0.059 0.069 0.090 0.106 0.061 0.075 0.13 0.149 0.201 0.231 0.035 0.041 0.072 0.081 0.111 0.122 0.035 0.045 0.072 0.091 0.109 0.139 0.074 0.094 0.155 0.187 0.235 0.286 0.078 0.102 0.158 0.208 0.242 0.319 0.042 0.054 0.084 0.108 0.128 0.163 0.041 0.058 0.083 0.116 0.125 0.176 0.084 0.12 0.176 0.231 0.261 0.36 0.086 0.127 0.177 0.252 0.269 0.379 0.086 0.131 0.177 0.261 0.269 0.391 0.098 0.14 0.196 0.282 0.296 0.426l0.077 0.108 0.019 0.027c-0.007-0.009 0.019 0.025-0.015-0.019l0.002 0.003 0.011 0.018 0.031 0.049c0.040 0.066 0.083 0.13 0.126 0.195s0.080 0.136 0.122 0.203c0.040 0.069 0.084 0.133 0.122 0.206 0.079 0.141 0.161 0.28 0.238 0.427 0.040 0.073 0.079 0.145 0.119 0.217 0.039 0.074 0.077 0.148 0.117 0.221 0.156 0.295 0.313 0.593 0.474 0.885s0.323 0.577 0.49 0.846c0.067 0.109 0.135 0.214 0.204 0.316-0.043-0.007-0.085-0.015-0.124-0.023-2.030-0.202-4.653-0.905-6.511-2.763-3.36-3.36-3.121-9.047-2.615-9.554 0.424-0.424 6.193-0.745 9.553 2.615 0.333 0.333 0.63 0.691 0.894 1.064 0.262-0.374 0.557-0.731 0.89-1.064 3.36-3.36 9.047-3.121 9.553-2.615 0.424 0.424 0.745 6.193-2.615 9.553z"></path>
        </symbol>
        <symbol id="icon-mushroom" viewBox="0 0 32 32">
            <title>mushroom</title>
            <path class="path1" d="M19.987 15.815c-1.154 0.157-2.437 0.237-3.814 0.237-2.291 0-4.079-0.22-4.313-0.251-0.23-0.021-0.46-0.045-0.687-0.070-0.92 4.864-2.12 16.606 7.897 16.261 11.506-0.39-0.659-8.713 0.917-16.178z"></path>
            <path class="path2" d="M16.002 0c-6.649 0-12.287 4.958-12.834 11.286-0.059 0.701 0.324 1.374 0.98 1.701 0.122 0.063 2.479 1.22 7.238 1.722 0.192 0.021 0.39 0.038 0.589 0.059 0 0 1.834 0.244 4.198 0.244 1.199 0 4.044-0.272 4.149-0.282 4.92-0.488 7.388-1.67 7.517-1.733 0.662-0.324 1.053-1.001 0.994-1.708-0.547-6.332-6.182-11.289-12.831-11.289zM7.125 11.711c-0.788 0-1.443-0.655-1.443-1.443s0.655-1.443 1.443-1.443 1.443 0.655 1.443 1.443-0.655 1.443-1.443 1.443zM21.413 3.487c0.788 0 1.443 0.655 1.443 1.443s-0.655 1.443-1.443 1.443c-0.788 0-1.443-0.655-1.443-1.443s0.659-1.443 1.443-1.443zM14.774 3.556c0.788 0 1.443 0.655 1.443 1.443s-0.655 1.443-1.443 1.443c-0.788 0-1.443-0.655-1.443-1.443s0.659-1.443 1.443-1.443zM21.486 11.854c-0.788 0-1.443-0.655-1.443-1.443s0.655-1.443 1.443-1.443c0.788 0 1.443 0.655 1.443 1.443s-0.659 1.443-1.443 1.443z"></path>
        </symbol>
        <symbol id="icon-origami" viewBox="0 0 32 32">
            <title>origami</title>
            <path class="path1" d="M31.688 6.637l-9.869 11.975c-0.291 0.355-0.555 1.011-0.589 1.469l-0.624 8.52c-0.034 0.458 0.294 0.94 0.732 1.078l1.085 0.342c0.438 0.138 0.921-0.099 1.081-0.53l8.423-22.716c0.16-0.43 0.053-0.492-0.238-0.138z"></path>
            <path class="path2" d="M10.093 17.743l-4.838-6.407c-0.277-0.366-0.848-0.531-1.277-0.368l-0.971 0.369c-0.214 0.081-0.439 0.243-0.629 0.438-0.297 0.306-0.662 1.344-0.962 2.211l-0.816 2.363c-0.3 0.867-0.744 1.836-0.555 1.961 0.063 0.039 0.187-0.014 0.356-0.167l2.627-2.385c0.34-0.308 0.734-0.207 0.884 0.227 0.989 2.851 3.851 10.946 4.756 13.502 0.153 0.433 0.631 0.668 1.067 0.527l0.751-0.242c0.437-0.142 0.767-0.627 0.739-1.085l-0.581-9.453c-0.028-0.457-0.275-1.124-0.551-1.491z"></path>
            <path class="path3" d="M19.662 15.52l-3.082-11.642c-0.235-0.887-0.407-1.938-0.636-1.937s-0.397 1.053-0.628 1.941l-3.442 13.243c-0.115 0.443-0.189 1.175-0.166 1.632l0.076 1.481 0.429 8.278c0.007 0.145 0.015 0.277 0.022 0.393 0.012 0.217 0.201 0.316 0.427 0.252 0.121-0.033 0.262-0.070 0.412-0.106l2.059-0.502c0.446-0.107 1.168-0.107 1.614 0.002l2.828 0.696c0.018 0.006 0.539-8.319 0.539-8.319l0.135-2.175c0.014-0.229 0.003-0.526-0.025-0.821-0.045-0.452-0.326-1.529-0.561-2.416z"></path>
        </symbol>
        <symbol id="icon-pear" viewBox="0 0 32 32">
            <title>pear</title>
            <path class="path1" d="M11.001 10.723c0 3.377-3.030 8.391-3.465 11.219-0.135 0.58-0.209 1.181-0.209 1.8 0 4.561 3.883 8.258 8.673 8.258s8.673-3.697 8.673-8.258c0-0.619-0.074-1.22-0.208-1.8-0.436-2.827-3.466-7.841-3.466-11.218 0-2.131-1.471-3.933-3.498-4.54 0.003-0.058 0.003-0.116 0-0.176 0.939-0.074 2.658-0.374 3.821-1.536 1.156-1.155 1.458-2.861 1.535-3.803 0.031-0.38-0.286-0.697-0.666-0.666-0.942 0.077-2.648 0.38-3.803 1.535-0.703 0.704-1.091 1.611-1.304 2.425-0.025-0.071-0.052-0.142-0.080-0.212-0.305-0.753-0.691-1.509-1.347-2.019-0.399-0.311-0.754-0.518-1.228-0.702-0.252-0.098-0.515-0.166-0.783-0.206-0.657-0.098-1.298-0.128-1.961-0.112-0.752 0.019-1.38 0.614-1.38 1.38 0 0.738 0.628 1.399 1.38 1.38 0.436-0.011 0.872-0.015 1.306 0.027 0.201 0.035 0.398 0.084 0.591 0.151 0.091 0.046 0.18 0.097 0.265 0.153 0.075 0.067 0.145 0.138 0.212 0.213 0.118 0.174 0.221 0.357 0.311 0.547 0.188 0.5 0.302 1.023 0.387 1.55-2.161 0.526-3.758 2.39-3.758 4.611zM19.279 22.205c0.373 0.318 0.418 0.879 0.1 1.252s-0.879 0.418-1.252 0.1c-0.153-0.13-0.251-0.302-0.291-0.484l-0.572-2.584 2.015 1.716zM12.711 22.205l2.015-1.716-0.572 2.584c-0.106 0.479-0.58 0.781-1.059 0.675s-0.781-0.58-0.675-1.059c0.043-0.196 0.149-0.363 0.291-0.484z"></path>
        </symbol>
        <symbol id="icon-pepper" viewBox="0 0 32 32">
            <title>pepper</title>
            <path class="path1" d="M24.337 14.122l0.002-0.035c0-3.487-2.364-6.324-5.27-6.324-0.706 0-1.38 0.169-1.996 0.472 0.199-0.686 0.473-1.562 0.808-2.455 1.278-3.414 2.225-3.881 2.402-3.94 0.495-0.165 0.762-0.7 0.597-1.194s-0.7-0.762-1.194-0.597c-1.288 0.429-2.457 2.088-3.574 5.069-0.461 1.231-0.81 2.414-1.018 3.175-0.646-0.34-1.36-0.53-2.11-0.53-2.906 0-5.27 2.837-5.27 6.324v0.018l1.088 11.589c0.003 1.706 0.439 3.269 1.229 4.403 0.855 1.228 2.097 1.904 3.497 1.904 0.924 0 1.778-0.296 2.498-0.848 0.72 0.552 1.574 0.848 2.498 0.848 1.401 0 2.643-0.676 3.497-1.903 0.79-1.134 1.226-2.697 1.229-4.403l1.086-11.572z"></path>
            <path class="path2" d="M7.252 25.296l-0-0.017-1.088-10.791v-0.086c0-1.726 0.559-3.386 1.574-4.673 0.147-0.187 0.267-0.513 0.119-0.818-0.093-0.192-0.317-0.422-0.855-0.422-2.906 0-5.27 2.652-5.27 5.912v0.019l1.088 10.787c0.003 1.597 0.442 3.059 1.236 4.121 0.867 1.16 2.074 1.773 3.49 1.773 0.376 0 1.005 0 1.208-0.435 0.118-0.252 0.046-0.538-0.214-0.848-0.822-0.984-1.268-2.548-1.288-4.522z"></path>
            <path class="path3" d="M24.998 8.49c-0.538 0-0.762 0.229-0.855 0.422-0.148 0.305-0.028 0.631 0.119 0.818 1.015 1.287 1.574 2.947 1.574 4.673v0.086l-1.087 10.774-0.002 0.034c-0.020 1.974-0.465 3.538-1.288 4.522-0.26 0.311-0.332 0.596-0.214 0.848 0.203 0.435 0.832 0.435 1.208 0.435 1.416 0 2.622-0.613 3.49-1.773 0.794-1.061 1.233-2.524 1.236-4.121l1.086-10.768 0.002-0.038c0-3.26-2.364-5.912-5.27-5.912z"></path>
        </symbol>
        <symbol id="icon-pyramid" viewBox="0 0 32 32">
            <title>pyramid</title>
            <path class="path1" d="M8.469 15.611h15.062c0.076 0 0.145-0.041 0.182-0.107s0.036-0.146-0.004-0.211l-2.698-4.423c-0.038-0.062-0.105-0.1-0.178-0.1h-9.667c-0.073 0-0.14 0.038-0.178 0.1l-2.698 4.423c-0.039 0.065-0.041 0.145-0.004 0.211s0.107 0.107 0.182 0.107z"></path>
            <path class="path2" d="M4.422 22.246h23.156c0.076 0 0.145-0.041 0.182-0.107s0.035-0.146-0.004-0.211l-2.698-4.423c-0.038-0.062-0.105-0.1-0.178-0.1h-17.76c-0.073 0-0.14 0.038-0.178 0.1l-2.698 4.423c-0.039 0.065-0.041 0.145-0.004 0.211s0.107 0.107 0.182 0.107z"></path>
            <path class="path3" d="M12.516 8.976h6.969c0.075 0 0.145-0.041 0.182-0.107s0.035-0.146-0.004-0.211l-3.484-5.713c-0.038-0.062-0.105-0.1-0.178-0.1s-0.14 0.038-0.178 0.1l-3.484 5.713c-0.039 0.065-0.041 0.145-0.004 0.211s0.107 0.107 0.182 0.107z"></path>
            <path class="path4" d="M31.969 28.837l-2.864-4.697c-0.038-0.062-0.105-0.1-0.178-0.1h-25.854c-0.073 0-0.14 0.038-0.178 0.1l-2.865 4.697c-0.039 0.064-0.041 0.145-0.004 0.211s0.107 0.106 0.182 0.106h31.582c0.075 0 0.145-0.041 0.182-0.106s0.036-0.146-0.004-0.211z"></path>
        </symbol>
        <symbol id="icon-shirt" viewBox="0 0 32 32">
            <title>shirt</title>
            <path class="path1" d="M16 4.772c1.386 0 2.583-0.884 3.013-2.184-0.821 0.226-1.866 0.362-3.013 0.362s-2.193-0.136-3.013-0.362c0.43 1.3 1.627 2.184 3.013 2.184z"></path>
            <path class="path2" d="M31.96 6.371c-0.066-0.185-0.203-0.337-0.381-0.419l-6.101-2.816c-1.298-0.44-2.62-0.787-3.955-1.041-0.047-0.009-0.094-0.014-0.14-0.014-0.33 0-0.626 0.228-0.7 0.563-0.487 2.146-2.387 3.753-4.683 3.753s-4.196-1.607-4.683-3.753c-0.075-0.335-0.37-0.563-0.7-0.563-0.046 0-0.093 0.004-0.14 0.014-1.335 0.254-2.657 0.601-3.957 1.041l-6.099 2.816c-0.18 0.083-0.317 0.235-0.38 0.419-0.065 0.187-0.053 0.389 0.038 0.565l2.649 5.227c0.124 0.248 0.376 0.397 0.643 0.397 0.069 0 0.139-0.010 0.208-0.031l2.942-0.872v17.538c0 0.398 0.325 0.723 0.724 0.723h17.512c0.398 0 0.722-0.325 0.722-0.723v-17.538l2.944 0.872c0.069 0.021 0.139 0.031 0.207 0.031 0.266 0 0.517-0.149 0.643-0.397l2.65-5.227c0.089-0.176 0.102-0.378 0.038-0.565z"></path>
        </symbol>
        <symbol id="icon-strawberry" viewBox="0 0 32 32">
            <title>strawberry</title>
            <path class="path1" d="M10.31 13.066c0.042 0.084 0.118 0.146 0.209 0.17s0.188 0.007 0.265-0.044l5.215-3.477 5.215 3.477c0.078 0.052 0.175 0.068 0.265 0.044s0.167-0.086 0.209-0.17l1.76-3.52 5.325-3.55c0.103-0.069 0.159-0.193 0.143-0.315s-0.103-0.228-0.221-0.267l-5.173-1.724v-3.362c0-0.105-0.051-0.204-0.136-0.265s-0.196-0.078-0.295-0.045l-5.205 1.735-1.656-1.656c-0.083-0.083-0.181-0.096-0.231-0.096s-0.148 0.012-0.231 0.096l-1.656 1.656-5.205-1.735c-0.033-0.011-0.068-0.017-0.103-0.017-0.069 0-0.136 0.021-0.191 0.062-0.085 0.061-0.136 0.161-0.136 0.265v3.362l-5.173 1.724c-0.118 0.039-0.204 0.144-0.221 0.267s0.039 0.247 0.143 0.316l5.325 3.55 1.76 3.52z"></path>
            <path class="path2" d="M24.634 10.591l-1.521 3.042c0.028-0.002 0.055-0.004 0.083-0.004 0.602 0 1.090 0.488 1.090 1.090v1.799c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.030 0.002-0.061 0.005-0.091-0.077 0.032-0.156 0.061-0.238 0.083-0.155 0.041-0.315 0.062-0.476 0.062-0.367 0-0.723-0.108-1.029-0.312l-4.369-2.912-4.369 2.913c-0.306 0.204-0.661 0.311-1.028 0.311-0.16 0-0.321-0.021-0.476-0.062-0.082-0.022-0.16-0.051-0.237-0.083 0.002 0.030 0.005 0.060 0.005 0.091v1.799c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090 0.028 0 0.056 0.002 0.083 0.004l-1.521-3.042-3.216-2.144c-0.892 1.224-1.422 2.74-1.422 4.381 0 4.739 2.212 9.538 6.396 13.88 3.112 3.229 6.192 5.064 6.321 5.141 0.171 0.101 0.363 0.151 0.554 0.151s0.384-0.051 0.554-0.151c0.13-0.076 3.209-1.912 6.321-5.141 4.184-4.341 6.396-9.141 6.396-13.88 0-1.641-0.53-3.156-1.422-4.38l-3.215 2.144zM13.492 21.915c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090s1.090 0.488 1.090 1.090v1.799zM17.090 25.513c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090s1.090 0.488 1.090 1.090v1.799zM17.090 18.317c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090s1.090 0.488 1.090 1.090v1.799zM20.688 21.915c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090s1.090 0.488 1.090 1.090v1.799z"></path>
        </symbol>
        <symbol id="icon-tomato" viewBox="0 0 32 32">
            <title>tomato</title>
            <path class="path1" d="M16.243 13.235c-0.126-0.108-0.337-0.175-0.552-0.175-0.102 0-0.203 0.014-0.3 0.043l-1.612 0.525c-0.18 0.048-0.346 0.214-0.328 0.452 0.020 0.265 0.144 0.993 0.155 1.060 0.051 0.355-0.048 0.707-0.274 0.968-0.223 0.258-0.55 0.406-0.897 0.406-0.221 0-0.439-0.057-0.648-0.171l-1.738-0.941c-0.036-0.020-0.135-0.067-0.263-0.067-0.089 0-0.177 0.023-0.253 0.068-0.423 0.247-1.72 0.932-1.736 0.94-0.209 0.113-0.428 0.171-0.648 0.171-0.347 0-0.674-0.148-0.897-0.406-0.226-0.262-0.325-0.616-0.273-0.973 0.001-0.007 0.105-0.727 0.142-0.964 0.036-0.232-0.102-0.427-0.255-0.516l-0.029-0.017-1.644-0.536c-0.082-0.024-0.169-0.035-0.259-0.035-0.277 0-0.533 0.116-0.664 0.231-2.078 1.821-3.269 4.431-3.269 7.161 0 5.294 4.393 9.602 9.792 9.602s9.792-4.307 9.792-9.602c0-2.766-1.218-5.398-3.341-7.223z"></path>
            <path class="path2" d="M5.118 12.296l2.204 0.719c0.008 0.003 0.015 0.006 0.020 0.010l-0.254 1.725c-0.019 0.132 0.013 0.255 0.093 0.347 0.131 0.151 0.359 0.181 0.575 0.064l1.944-1.052c0.008-0.004 0.040-0.016 0.091-0.016s0.083 0.011 0.091 0.016l1.944 1.052c0.090 0.049 0.18 0.073 0.267 0.073 0.123 0 0.232-0.049 0.308-0.137 0.079-0.092 0.112-0.215 0.092-0.347l-0.254-1.724c0.006-0.004 0.012-0.008 0.021-0.010l2.204-0.719c0.297-0.097 0.329-0.303 0.329-0.387s-0.032-0.29-0.329-0.387l-2.204-0.719c-0.008-0.003-0.015-0.007-0.020-0.010l0.254-1.725c0.019-0.132-0.013-0.255-0.092-0.347-0.131-0.151-0.359-0.181-0.575-0.064l-1.313 0.711c0.43-1.199 1.167-2.414 2.426-2.959 0.318-0.138 0.464-0.507 0.326-0.825s-0.507-0.464-0.825-0.326c-1.836 0.795-2.782 2.577-3.268 4.167l-1.417-0.767c-0.216-0.117-0.444-0.088-0.575 0.064-0.079 0.091-0.112 0.215-0.093 0.347l0.254 1.725c-0.006 0.004-0.013 0.008-0.021 0.010l-2.204 0.719c-0.297 0.097-0.329 0.303-0.329 0.387s0.032 0.29 0.329 0.387z"></path>
            <path class="path3" d="M20.478 7.468l1.66 0.541-0.187 1.274c-0.018 0.123 0.013 0.238 0.088 0.325 0.072 0.083 0.178 0.13 0.292 0.13 0.079 0 0.16-0.022 0.24-0.065l1.497-0.811c0.003-0.001 0.018-0.005 0.040-0.005s0.035 0.004 0.036 0.004c0 0 0 0 0 0l1.5 0.812c0.080 0.043 0.161 0.065 0.24 0.065 0.114 0 0.22-0.048 0.292-0.13 0.075-0.087 0.106-0.202 0.088-0.325l-0.187-1.274 1.66-0.541c0.281-0.092 0.303-0.304 0.303-0.367s-0.022-0.275-0.303-0.367l-1.66-0.541 0.187-1.274c0.018-0.123-0.013-0.238-0.088-0.325-0.072-0.083-0.178-0.13-0.292-0.13-0.079 0-0.16 0.022-0.24 0.065l-1.041 0.564c-0.383-1.199-1.109-2.517-2.486-3.113-0.239-0.103-0.515 0.006-0.618 0.245s0.006 0.515 0.245 0.618c0.957 0.414 1.524 1.331 1.86 2.245l-1.033-0.559c-0.080-0.043-0.161-0.065-0.24-0.065-0.114 0-0.22 0.048-0.292 0.13-0.075 0.087-0.106 0.202-0.088 0.325l0.187 1.274-1.66 0.541c-0.281 0.092-0.303 0.304-0.303 0.367s0.022 0.275 0.303 0.367z"></path>
            <path class="path4" d="M29.307 8.219c-0.165-0.142-0.475-0.195-0.74-0.118l-1.289 0.42c-0.169 0.046-0.324 0.202-0.307 0.426 0.016 0.213 0.111 0.772 0.125 0.853 0.038 0.265-0.036 0.529-0.204 0.723-0.166 0.192-0.41 0.303-0.67 0.303-0.166 0-0.33-0.043-0.488-0.129l-1.389-0.752c-0.038-0.021-0.126-0.062-0.241-0.062-0.082 0-0.163 0.022-0.234 0.063-0.337 0.197-1.373 0.743-1.387 0.751-0.158 0.086-0.323 0.129-0.489 0.129-0.259 0-0.504-0.11-0.67-0.303-0.169-0.195-0.243-0.46-0.204-0.728 0.001-0.006 0.084-0.581 0.113-0.77 0.034-0.215-0.093-0.394-0.234-0.477l-0.029-0.017-1.324-0.431c-0.071-0.020-0.147-0.031-0.224-0.031-0.209 0-0.434 0.078-0.573 0.2-0.87 0.763-1.57 1.725-2.025 2.784-0.269 0.626 0.281 1.099 0.461 1.254 2.314 1.989 3.687 4.962 3.767 8.159 0.014 0.551 0.319 0.844 0.576 0.927 0.798 0.258 1.631 0.39 2.478 0.39 4.352 0 7.892-3.472 7.892-7.74 0-2.23-0.982-4.352-2.693-5.823z"></path>
        </symbol>
        <symbol id="icon-tree" viewBox="0 0 32 32">
            <title>tree</title>
            <path class="path1" d="M16 0c-5.891 0-10.667 4.776-10.667 10.667 0 5.535 4.216 10.085 9.612 10.615v10.719h2.11v-10.719c5.396-0.53 9.612-5.080 9.612-10.615 0-5.891-4.776-10.667-10.667-10.667zM12.189 13.922c-0.583 0-1.055-0.472-1.055-1.055s0.472-1.055 1.055-1.055c0.583 0 1.055 0.472 1.055 1.055s-0.472 1.055-1.055 1.055zM16 7.321c-0.583 0-1.055-0.472-1.055-1.055s0.472-1.055 1.055-1.055 1.055 0.472 1.055 1.055c0 0.583-0.472 1.055-1.055 1.055zM19.811 13.922c-0.583 0-1.055-0.472-1.055-1.055s0.472-1.055 1.055-1.055c0.583 0 1.055 0.472 1.055 1.055s-0.472 1.055-1.055 1.055z"></path>
        </symbol>
        <symbol id="icon-tree2" viewBox="0 0 32 32">
            <title>tree2</title>
            <path class="path1" d="M29.165 9.473c0-2.428-1.843-4.425-4.206-4.67-0.663-1.789-2.38-3.066-4.4-3.066-0.884 0-1.708 0.249-2.414 0.674-0.803-1.438-2.337-2.411-4.101-2.411-2.338 0-4.272 1.711-4.631 3.948-0.191-0.023-0.384-0.039-0.581-0.039-2.593 0-4.696 2.102-4.696 4.696 0 0.127 0.009 0.252 0.019 0.376-1.315 0.832-2.19 2.296-2.19 3.967 0 1.477 0.684 2.794 1.75 3.654-0.005 0.085-0.013 0.169-0.013 0.254 0 2.593 2.102 4.696 4.696 4.696 0.777 0 1.509-0.192 2.154-0.526 0.895 0.643 2.175 1.446 2.796 1.286 0 0 0.231 3.574 0.181 4.482-0.095 1.727-0.613 3.649-0.977 5.205h5.646c0 0-0.832-3.468-0.869-4.626s0.362-3.29 0.362-3.29l1.959-2.026c0.754 0.515 1.665 0.808 2.647 0.808 2.428 0 4.425-1.847 4.67-4.21 1.789-0.663 3.066-2.384 3.066-4.404 0-1.193-0.448-2.278-1.18-3.106 0.198-0.52 0.312-1.082 0.312-1.671zM11.638 20.252c0.376-0.359 0.692-0.779 0.933-1.246l0.922 1.932c-0.001 0-0.502 0.221-1.855-0.686zM15.086 21.445c-0.477 0.087-1.29-1.383-1.866-2.577 0.639 0.326 1.361 0.514 2.129 0.514 0.197 0 0.39-0.016 0.581-0.040-0.148 0.956-0.41 2.023-0.844 2.103zM17.113 22.385c-1.104 0.306-0.443-1.979-0.127-3.303 0.229-0.085 0.45-0.185 0.661-0.304 0.127 0.965 0.546 1.835 1.167 2.523-0.538 0.478-1.157 0.933-1.701 1.084z"></path>
        </symbol>
        <symbol id="icon-angle-up" viewBox="0 0 21 32">
            <title>angle-up</title>
            <path class="path1" d="M19.196 21.143q0 0.232-0.179 0.411l-0.893 0.893q-0.179 0.179-0.411 0.179t-0.411-0.179l-7.018-7.018-7.018 7.018q-0.179 0.179-0.411 0.179t-0.411-0.179l-0.893-0.893q-0.179-0.179-0.179-0.411t0.179-0.411l8.321-8.321q0.179-0.179 0.411-0.179t0.411 0.179l8.321 8.321q0.179 0.179 0.179 0.411z"></path>
        </symbol>
        <symbol id="icon-angle-down" viewBox="0 0 21 32">
            <title>angle-down</title>
            <path class="path1" d="M19.196 13.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411z"></path>
        </symbol>
        <symbol id="icon-rocket" viewBox="0 0 30 32">
            <title>rocket</title>
            <path class="path1" d="M25.714 8q0-0.714-0.5-1.214t-1.214-0.5-1.214 0.5-0.5 1.214 0.5 1.214 1.214 0.5 1.214-0.5 0.5-1.214zM29.714 2.857q0 4.446-1.348 7.687t-4.527 6.438q-1.446 1.429-3.482 3.143l-0.357 6.768q-0.036 0.286-0.286 0.464l-6.857 4q-0.125 0.071-0.286 0.071-0.214 0-0.411-0.161l-1.143-1.143q-0.232-0.25-0.143-0.571l1.518-4.929-5.018-5.018-4.929 1.518q-0.054 0.018-0.161 0.018-0.25 0-0.411-0.161l-1.143-1.143q-0.304-0.339-0.089-0.696l4-6.857q0.179-0.25 0.464-0.286l6.768-0.357q1.714-2.036 3.143-3.482 3.357-3.339 6.393-4.607t7.696-1.268q0.25 0 0.429 0.17t0.179 0.402z"></path>
        </symbol>
        <symbol id="icon-bug" viewBox="0 0 30 32">
            <title>bug</title>
            <path class="path1" d="M29.143 17.143q0 0.464-0.339 0.804t-0.804 0.339h-4q0 3.054-1.196 5.179l3.714 3.732q0.339 0.339 0.339 0.804t-0.339 0.804q-0.321 0.339-0.804 0.339t-0.804-0.339l-3.536-3.518q-0.089 0.089-0.268 0.232t-0.75 0.509-1.161 0.652-1.464 0.518-1.732 0.232v-16h-2.286v16q-0.911 0-1.813-0.241t-1.554-0.589-1.179-0.696-0.777-0.58l-0.268-0.25-3.268 3.696q-0.357 0.375-0.857 0.375-0.429 0-0.768-0.286-0.339-0.321-0.366-0.795t0.277-0.83l3.607-4.054q-1.036-2.036-1.036-4.893h-4q-0.464 0-0.804-0.339t-0.339-0.804 0.339-0.804 0.804-0.339h4v-5.25l-3.089-3.089q-0.339-0.339-0.339-0.804t0.339-0.804 0.804-0.339 0.804 0.339l3.089 3.089h15.071l3.089-3.089q0.339-0.339 0.804-0.339t0.804 0.339 0.339 0.804-0.339 0.804l-3.089 3.089v5.25h4q0.464 0 0.804 0.339t0.339 0.804zM20.571 6.857h-11.429q0-2.375 1.67-4.045t4.045-1.67 4.045 1.67 1.67 4.045z"></path>
        </symbol>
        <symbol id="icon-paint-brush" viewBox="0 0 32 32">
            <title>paint-brush</title>
            <path class="path1" d="M28.839 0q1.25 0 2.188 0.83t0.938 2.080q0 1.125-0.804 2.696-5.929 11.232-8.304 13.429-1.732 1.625-3.893 1.625-2.25 0-3.866-1.652t-1.616-3.92q0-2.286 1.643-3.786l11.393-10.339q1.054-0.964 2.321-0.964zM12.607 18.464q0.696 1.357 1.902 2.321t2.688 1.357l0.018 1.268q0.071 3.804-2.313 6.196t-6.223 2.393q-2.196 0-3.893-0.83t-2.723-2.277-1.545-3.268-0.518-3.929q0.125 0.089 0.732 0.536t1.107 0.795 1.054 0.652 0.821 0.304q0.732 0 0.982-0.661 0.446-1.179 1.027-2.009t1.241-1.357 1.571-0.848 1.839-0.455 2.232-0.188z"></path>
        </symbol>
        <symbol id="icon-modx" viewBox="0 0 32 32">
            <title>modx</title>
            <path class="path1" d="M25.482 12.661l-10.964-6.893 1.643-2.696h15.268zM7.232 17.393l-3.286-2.071v-15.321l21.125 13.268zM25.429 14.982l2.625 1.696v15.321l-9.5-5.982zM24.768 14.607l-8.929 14.321h-15.268l6.357-10.196z"></path>
        </symbol>
    </defs>
</svg>
</body>
</html>
