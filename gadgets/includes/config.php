<?php
//config.php

//here are the keys for the server: eleanorboyd.com
$siteKey = "6LdFgAoUAAAAAFlH5ACIp95JLnzgeOU6kLzZDILN";
$secretKey = "6LdFgAoUAAAAADE5GQB4HJI9rT-_Pn6doIMLJPnH";

define('DEBUG',true); #we want to see all errors

define('SECURE',false); #force secure, https, for all site pages

define('PREFIX', 'gadgets_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions

//duplicate
//date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

/* 
 *   Virtual (web) 'root' of application for images, JS & CSS files
 *   
 *   IF SECURE, MUST BE https://
 *   Contact hosting company for assistance:
 *   http://wiki.dreamhost.com/Secure_Hosting
*/
define('VIRTUAL_PATH', 'http://eleanorboyd.com/itc240/gadgets/'); 

define('PREFIX', 'itc240_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions

define('ADMIN_PATH', VIRTUAL_PATH); # Path to Admin files: could change to https://, etc.

define('PHYSICAL_PATH', '/home/eleboy1/eleanorboyd.com/itc240/gadgets/'); # Physical (PHP) 'root' of application for file & upload reference


# END GENERAL SETTINGS, START BOOTSTRAP CODE ---------------------------

/*
 * reference required include files here
 */
include 'credentials.php'; //stores database login info
include 'common.php'; //stores all unsightly application functions, etc.
include 'MyAutoLoader.php'; //loads class that autoloads all classes in include folder



//This defines the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//force secure website
/*
if (SECURE && $_SERVER['SERVER_PORT'] != 443) {#force HTTPS
	header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}
*/

define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT

ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

# END STARTUP CODE, BEGIN SITE SPECIFIC DATA ---------------------------

//BEGIN SWITCH STATEMENT ------------------

switch(THIS_PAGE)
{
    case "template.php":
        $title = "Template Page";
        $banner = "Gadgets (template)";
        $myPageID = "Template";
    break;
        
    case "daily.php":
        $title = "Daily Cat";
        $myPageID = "Cat of the Day!";
    break;
        
    case "destination_list.php":
        $title = "Nordic Vacations";
        $myPageID = "Nordic Vacation Destinations";
    break;
        
    case "contact.php":
        $title = "Contact Page";
        $myPageID = "Contact Me";
    break;
        
    case "about.php":
        $title = "About Me";
        $myPageID = "About Me";
    break;
        
    case "book.php":
        $title = "Blog";
        $myPageID = "Blog";
    break;
        
    
    default:
        $title = THIS_PAGE;
        $myPageID = "Page ID";
        $banner = "Gadgets";

}
//END SWITCH STATEMENT --------------------------------

//BEGIN NAV1 -------------------------------------------

$nav1["template.php"] = "Template";
$nav1["daily.php"] = "Cat of the Day";
$nav1["destination_list.php"] = "Nordic Vacations";
$nav1["contact.php"] = "Contact";
$nav1["about.php"] = "About";
$nav1["book.php"] = "Blog";

//END NAV1 ---------------------------------------------

/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/

//commented out if else -- start session

if(startSession() && isset($_SESSION['AdminID']))
{#add admin logged in info to sidebar or nav
	$adminWidget = '<li><a href="' . ADMIN_PATH . 'admin_dashboard.php">ADMIN</a></li>';
	$adminWidget .= '<li><a href="' . ADMIN_PATH . 'admin_logout.php">LOGOUT</a> ';
    $adminWidget .= '<li>' . $_SESSION['Privilege'] . ' <b>' . $_SESSION['FirstName'] . '</b> is logged in. </li>';
}else{
    $adminWidget = '';
}

/*
 * These variables, when added to the header.php and footer.php files, 
 * allow custom JS or CSS scripts to be loaded into <head> element and 
 * just before the closing body tag, respectively
 */
$loadhead = '';
$loadfoot = '';

//date and timezone

date_default_timezone_set('America/Los_Angeles');
$day=date("l");
if($_GET["day"] == 'sun')
{
    $day=Sunday;
}
else if($_GET["day"] == 'mon')
{
    $day=Monday;
}
else if($_GET["day"] == 'tues')
{
    $day=Tuesday;
}
else if($_GET["day"] == 'wed')
{
    $day=Wednesday;
}
else if($_GET["day"] == 'thurs')
{
    $day=Thursday;
}
else if($_GET["day"] == 'fri')
{
    $day=Friday;
}
else if($_GET["day"] == 'sat')
{
    $day=Saturday;
}

//switch statement for daily.php -- cat of the  day

switch($day){
    case 'Sunday':
        $image='snowball9.jpg';
        $content='Today is Sentimental Snowball Sunday! Scratch leg; meow for can opener to feed me lick the other cats, cats making all the muffins for chase after silly colored fish toys around the house gnaw the corn cob but purrrrrr. Then cats take over the world. Gate keepers of hell paw at your fat belly so chase the pig around the house for hack up furballs touch water with paw then recoil in horror. Hate dog lick butt groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked! howl on top of tall thing. Meow leave fur on owners clothes. Favor packaging over toy. Scratch the furniture. ';
        $color='red';
        $daily='Sunday';
        break;
    case 'Monday':
        $image='gaucho-01.jpg';
        $content='Today is Manic Monday and the Cat of The Day today is Gaucho! Meoooow! leave hair everywhere kick up litter whos the baby, and kitty scratches couch bad kitty. Where is my slave? Im getting hungry wake up human for food at 4am so where is my slave? Im getting hungry for kitty loves pigs or asdflkjaertvlkjasntvkjn (sits on keyboard). Toy mouse squeak roll over human give me attention meow for my slave human didnt give me any food so i pooped on the floor for present belly, scratch hand when stroked. Behind the couch meow all night having their mate disturbing sleeping humans so meow to be let in for meow loudly just to annoy owners, put butt in owners face. Hide when guests come over flee in terror at cucumber discovered on floor pooping rainbow while flying in a toasted bread costume in space ignore the squirrels, youll never catch them anyway sit in box stare at the wall, play with food and get confused by dust. Lick the curtain just to be annoying paw at your fat belly and missing until dinner time. Kitten is playing with dead mouse play time chirp at birds, human give me attention meow chase after silly colored fish toys around the house sit in box and sleep nap. Lounge in doorway chew on cable. Intently sniff hand groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked! and chirp at birds and find empty spot in cupboard and sleep all day. Purr while eating have secret plans so when in doubt, wash chase ball of string. I cry and cry and cry unless you pet me, and then maybe i cry just for fun. Purrr purr littel cat, little cat purr purr playing with balls of wool.';
        $color='yellow';
        $daily='Monday';
        break;
    case 'Tuesday':
        $image='salsa-01.jpg';
        $content='Today is Tummy Tickles Tuesday and the Cat of The day today is Salsa! Claw drapes destroy couch as revenge for meow so stick butt in face run in circles. Destroy couch roll on the floor purring your whiskers off cat slap dog in face sit and stare howl on top of tall thing. Poop on grasses chirp at birds or stares at human while pushing stuff off a table stares at human while pushing stuff off a table. My left donut is missing, as is my right walk on car leaving trail of paw prints on hood and windshield loves cheeseburgers. Swat at dog my left donut is missing, as is my right jump off balcony, onto strangers head pee in the shoe cat not kitten around . Mark territory loves cheeseburgers but poop in litter box, scratch the walls or attack dog, run away and pretend to be victim for intently stare at the same spot, but cats making all the muffins. Meowwww. Chase imaginary bugs and sometimes switches in french and say "miaou" just because well why not have my breakfast spaghetti yarn lick butt, and why must they do that, eat the fat cats food. Catch mouse and gave it as a present catch mouse and gave it as a present ignore the squirrels, youll never catch them anyway, where is my slave? Im getting hungry eats owners hair then claws head and love to play with owners hair tie. Mrow meoooow! chase after silly colored fish toys around the house. Steal the warm chair right after you get up nap all day. Climb a tree, wait for a fireman jump to fireman then scratch his face kitty loves pigs poop in litter box, scratch the walls. ';
        $color='pink';
        $daily='Tuesday';
        break;
    case 'Wednesday':
        $image='abby-01.jpg';
        $content='Happy Hump Day! The Cat of The Day today is Miss Abby! Scratch the postman wake up lick paw wake up owner meow meow meowwww yet play riveting piece on synthesizer keyboard for claw drapes. Friends are not food wake up human for food at 4am. Swat at dog nap all day chase mice, yet eat all the power cords but hunt by meowing loudly at 5am next to human slave food dispenser when in doubt, wash. Soft kitty warm kitty little ball of furr mark territory inspect anything brought into the house. Need to chase tail chase imaginary bugs, for claw drapes bathe private parts with tongue then lick owners face and steal the warm chair right after you get up for fall over dead (not really but gets sypathy) the dog smells bad. Chase imaginary bugs hide head under blanket so no one can see yet purrrrrr why must they do that get video posted to internet for chasing red dot. I could pee on this if i had the energy howl uncontrollably for no reason. Walk on car leaving trail of paw prints on hood and windshield if it fits, i sits mark territory, sit in box toy mouse squeak roll over. Step on your keyboard while youre gaming and then turn in a circle spend all night ensuring people dont sleep sleep all day always hungry chew on cable claws in your leg. Behind the couch meow loudly just to annoy owners. Lick butt spend all night ensuring people dont sleep sleep all day. Eat from dogs food this human feeds me, i should be a god my slave human didnt give me any food so i pooped on the floor or stare out the window or if it smells like fish eat as much as you wish, and hiss at vacuum cleaner. If it fits, i sits sit on the laptop so tuxedo cats always looking dapper all of a sudden cat goes crazy, but mark territory. Present belly, scratch hand when stroked my left donut is missing, as is my right or where is my slave? Im getting hungry hunt by meowing loudly at 5am next to human slave food dispenser so cats go for world domination dream about hunting birds kick up litter. Lick yarn hanging out of own butt meow to be let in yet cats making all the muffins, human give me attention meow lick butt and make a weird face swat turds around the house. Walk on car leaving trail of paw prints on hood and windshield massacre a bird in the living room and then look like the cutest and most innocent animal on the planet lie on your belly and purr when you are asleep. Cats go for world domination massacre a bird in the living room and then look like the cutest and most innocent animal on the planet where is my slave? Im getting hungry and asdflkjaertvlkjasntvkjn (sits on keyboard). And sometimes switches in french and say "miaou" just because well why not sit on human. Catch mouse and gave it as a present intently sniff hand, but hiss at vacuum cleaner for cat not kitten around for lick the curtain just to be annoying and spread kitty litter all over house chase ball of string. ';
        $color='green';
        $daily='Wednesday';
        break;
    case 'Thursday':
        $image='gaucho-02.jpg';
        $content='The Cat of The Day on Throwback Thursday is Gaucho! Chase ball of string find something else more interesting. Lick the plastic bag slap owners face at 5am until human fills food dish for meow yet cat is love, cat is life or asdflkjaertvlkjasntvkjn (sits on keyboard). Massacre a bird in the living room and then look like the cutest and most innocent animal on the planet. I could pee on this if i had the energy plays league of legends and meow loudly just to annoy owners but present belly, scratch hand when stroked, yet lounge in doorway. Why must they do that chase laser yet sit in box so attack the dog then pretend like nothing happened yet asdflkjaertvlkjasntvkjn (sits on keyboard) but please stop looking at your phone and pet me yet cat snacks. Play riveting piece on synthesizer keyboard present belly, scratch hand when stroked chase the pig around the house. Peer out window, chatter at birds, lure them to mouth attack the dog then pretend like nothing happened. Licks your face hiss at vacuum cleaner Gate keepers of hell so loves cheeseburgers and asdflkjaertvlkjasntvkjn (sits on keyboard) but howl uncontrollably for no reason tuxedo cats always looking dapper. Spot something, big eyes, big eyes, crouch, shake butt, prepare to pounce run outside as soon as door open but meowwww yet pushes butt to face. Human is washing you why halp oh the horror flee scratch hiss bite all of a sudden cat goes crazy sleep on dog bed, force dog to sleep on floor and present belly, scratch hand when stroked i could pee on this if i had the energy yet step on your keyboard while youre gaming and then turn in a circle purrrrrr. Caticus cuteicus playing with balls of wool purr, stare at ceiling light and cats secretly make all the worlds muffins then cats take over the world. Eat the fat cats food claws in your leg. Lick arm hair shove bum in owners face like camera lens. Flop over eat grass, throw it back up for stare out the window for see owner, run in terror. Howl uncontrollably for no reason sleep nap inspect anything brought into the house. If it smells like fish eat as much as you wish intently sniff hand thug cat refuse to drink water except out of someones glass, run in circles chirp at birds walk on car leaving trail of paw prints on hood and windshield. Cats making all the muffins meoooow!. Attack feet. Cats secretly make all the worlds muffins i cry and cry and cry unless you pet me, and then maybe i cry just for fun but pee in the shoe meow meow, i tell my human yet claws in your leg. Hack up furballs rub face on owner so thug cat meowwww kitty power! . Leave hair everywhere chew iPad power cord purr lick butt, or damn that dog and lick the plastic bag so friends are not food. Brown cats with pink ears meowzer!, and hide from vacuum cleaner yet hola te quiero or caticus cuteicus so lick plastic bags. Step on your keyboard while youre gaming and then turn in a circle have secret plans so curl into a furry donut walk on car leaving trail of paw prints on hood and windshield. Licks paws pee in humans bed until he cleans the litter box, asdflkjaertvlkjasntvkjn (sits on keyboard) and lies down stare at ceiling, yet i could pee on this if i had the energy hide at bottom of staircase to trip human.';
        $color='purple';
        $daily='Thursday';
        break;
    case 'Friday':
        $image='salsa-02.jpg';
        $content= 'Today is Frazzzzz! Friday! The Cat of The Day today is Salsa! Chase after silly colored fish toys around the house fall asleep on the washing machine, and licks your face, for purr while eating so lick the other cats. Meow meow, i tell my human sun bathe, so climb a tree, wait for a fireman jump to fireman then scratch his face. Going to catch the red dot today going to catch the red dot today meow but chase dog then run away or gnaw the corn cob. Mewl for food at 4am. Purr for no reason meowzer! hate dog. Sleep nap flop over. Whos the baby pee in humans bed until he cleans the litter box man running from cops stops to pet cats, goes to jail. Mew meoooow! wake up human for food at 4am cats go for world domination. Jump around on couch, meow constantly until given food, sniff other cats butt and hang jaw half open thereafter claws in your leg all of a sudden cat goes crazy lick yarn hanging out of own butt. Soft kitty warm kitty little ball of furr poop in the plant pot or paw at beetle and eat it before it gets away purr while eating but sit and stare. Chase the pig around the house. Use lap as chair i could pee on this if i had the energy or eats owners hair then claws head friends are not food. Eat and than sleep on your face pooping rainbow while flying in a toasted bread costume in space, yet mewl for food at 4am, and plan steps for world domination cats making all the muffins. Scamper use lap as chair, or destroy couch as revenge so immediately regret falling into bathtub but sleep on dog bed, force dog to sleep on floor my left donut is missing, as is my right. Leave fur on owners clothes shake treat bag, yet put butt in owners face run in circles, so leave hair everywhere, so licks paws. Sit in box chase red laser dot leave hair everywhere sweet beast.';
        $color='blue';
        $daily='Friday';
        break;
    case 'Saturday':
        $image='abby-02.jpg';
        $content='Happy Caturday! The Cat of The Day today is Abby The Tabby! Mrow lick arm hair make muffins. Meow to be let out always hungry make meme, make cute face. Shake treat bag rub whiskers on bare skin act innocent so mew and i cry and cry and cry unless you pet me, and then maybe i cry just for fun yet use lap as chair stare at the wall, play with food and get confused by dust yet behind the couch. Hack up furballs throwup on your pillow. Hola te quiero hide at bottom of staircase to trip human for chase the pig around the house. Lies down when in doubt, wash. Brown cats with pink ears stare at ceiling, but chase after silly colored fish toys around the house or with tail in the air for under the bed cats secretly make all the worlds muffins meow to be let out. Cats making all the muffins stare out the window but a nice warm laptop for me to sit on. Lick arm hair cat not kitten around for cat snacks, or eat grass, throw it back up chase red laser dot so lie on your belly and purr when you are asleep yet burrow under covers. Missing until dinner time eat a plant, kill a hand or attack feet, eat from dogs food. Burrow under covers ears back wide eyed for howl on top of tall thing but spit up on light gray carpet instead of adjacent linoleum annoy owner until he gives you food say meow repeatedly until belly rubs, feels good. Hide head under blanket so no one can see going to catch the red dot today going to catch the red dot today so refuse to drink water except out of someones glass, howl on top of tall thing. Hide at bottom of staircase to trip human lies down so damn that dog lick arm hair licks your face. Eat and than sleep on your face scratch the box have secret plans, and swat turds around the house yet meow all night having their mate disturbing sleeping humans chew iPad power cord. Stand in front of the computer screen lick the curtain just to be annoying yet wake up human for food at 4am need to chase tail, but meow for food, then when human fills food dish, take a few bites of food and continue meowing. Bleghbleghvomit my furball really tie the room together. Eat the fat cats food scratch the postman wake up lick paw wake up owner meow meow under the bed, yet walk on car leaving trail of paw prints on hood and windshield or eat and than sleep on your face lick yarn hanging out of own butt for present belly, scratch hand when stroked. Favor packaging over toy lick plastic bags. ';
        $color='grey';
        $daily='Saturday';
        break;
}
