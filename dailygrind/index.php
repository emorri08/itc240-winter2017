<?php
date_default_timezone_set('America/Los_Angeles');
$day=date("l");

switch($day){
    case 'Sunday':
        $image='snowball9.jpg';
        $content='Welcome to Cat of the Day, your place for daily kitty therapy. Today is Sentimental Snowball Sunday! Our Cat of the Day is our friend, Snowball!';
        $color='red';
        $daily='Sunday';
        break;
    case 'Monday':
        $image='gaucho-01.jpg';
        $content='The cat of the day on Monday is Gaucho, pictured here sleeping with one of his favorite toys...a catnip banana!';
        $color='yellow';
        $daily='Monday';
        break;
    case 'Tuesday':
        $image='salsa-01.jpg';
        $content='The cat of the day on Tuesday is Salsa, pictured here up close and purrrrsonal, looking cute as ever!';
        $color='pink';
        $daily='Tuesday';
        break;
    case 'Wednesday':
        $image='abby-01.jpg';
        $content='The cat of the day on Wednesday is Abby, pictured here napping on her electric blanket';
        $color='green';
        $daily='Wednesday';
        break;
    case 'Thursday':
        $image='gaucho-02.jpg';
        $content='The cat of the day on Thursday is Gaucho, pictured here snoozing in a sun puddle on his favorite perch';
        $color='purple';
        $daily='Thursday';
        break;
    case 'Friday':
        $image='salsa-02.jpg';
        $content= 'The cat of the day on Friday is Salsa, pictured here taking a nap in her very own king sized bed';
        $color='blue';
        $daily='Friday';
        break;
    case 'Saturday':
        $image='abby-02.jpg';
        $content='The cat of the day on Saturday is Abby, pictured here hoping her human will share a turkey sandwich with her';
        $color='grey';
        $daily='Saturday';
        break;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cat of the Day</title>
    <meta name="robots" content="noindex,nofollow" />
	<!-- below is a google font, go to https://www.google.com/fonts to get yours! -->
	<link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link id="mainStylesheet" rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <style type="text/css">
        
	
        html {background-color:#000;/* pumpkin - overwrites default */}
        
        .feature {color:#000; /* daily feature color - pumpkin! */}
        
		.masthead{
			font-family: 'Holtwood One SC', serif; /* required for google font */
			font-size:3em;
		}
	
		#logo{
			float:right;
			display:inline-block;
			padding:2px;
			max-width:100px; /* actual size of image */
			width:20%; /* approximate size taken on screen in maximum view */
		}
	
		#coffee {
			float:left;
			display:inline-block;
			padding:20px;
			max-width:300px; /* best if actual size of image */
			width:33%; /* approximate size taken on screen in maximum view */
		}

        h3.slogan{
           font-style:italic; /* make the slogan italics */ 
        }
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body class="<?=$daily?>">
	<header>
	    <img src="images/kitty.jpeg" alt="kitty kitty kitty" class="graphic" id="kitty" />
		<h1 class="masthead">Cat of the Day</h1>
		<nav>
			<ul>
				<li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
			</ul>
		</nav>
	</header>
    <main>
		 <header><h3 class="slogan">Meow!</h3></header>
        <p><?php $day=date("l") ?><img src="images/<?=$image?>" alt="Today's Daily Cat!" id="cat" /><?=$content?><strong class="feature"> Daily Cat: </strong>  Cat of the day is <strong class="feature">Cats making all the muffins</strong>, sweet beast, but go into a room to decide you didn't want to be in there anyway, destroy couch, or my slave human didn't give me any food so i pooped on the floor!
        </p>
        <p><span class="feature"><?=$daily?> make meme, make cute face </span> stand in front of the computer screen. Drink water out of the faucet scratch at the door then walk away, but lick sellotape but purr thinking longingly about tuna brine, chase imaginary bugs lies down.
        </p>
        <p><span class="feature"><?php $day=date("l") ?> Cat of the day!</span> Hiss at vacuum cleaner intently sniff hand, yet licks paws so behind the couch hack up furballs. Leave dead animals as gifts chase laser attack feet, or jumps off balcony gives owner dead mouse at present then poops in litter box snatches yarn and fights with dog cat chases laser then plays in grass finds tiny spot in cupboard and sleeps all day jumps in bathtub and meows when owner fills food dish the cat knocks over the food dish cat slides down the water slide and into pool and swims even though it does not like water meow to be let in but instantly break out into full speed gallop across the house for no reason for the dog smells bad.
        </p>
        <p>
        <b>Run in circles i like big cats and i can not lie!</b> and jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed i could pee on this if i had the energy, for scream at teh bath. Get video posted to internet for chasing red dot eat all the power cords so make muffins who's the baby stretch, but chase dog then run away. Chase mice scratch leg; meow for can opener to feed me yet chew on cable hide at bottom of staircase to trip human. 
        </p>
		<p>Eat owner's food fall asleep on the washing machine slap owner's face at 5am until human fills food dish then cats take over the world. Present belly, scratch hand when stroked dream about hunting birds and make meme, make cute face kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff sweet beast play time. Purr while eating. Leave fur on owners clothes steal the warm chair right after you get up. Pelt around the house and up and down stairs chasing phantoms chase mice. Play time stand in front of the computer screen find empty spot in cupboard and sleep all day. Scratch leg; meow for can opener to feed me love to play with owner's hair tie for pee in the shoe or jump around on couch, meow constantly until given food, or plan steps for world domination lies down . Fall over dead (not really but gets sypathy) chew iPad power cord, and plays league of legends so get video posted to internet for chasing red dot, scamper. Stares at human while pushing stuff off a table lie on your belly and purr when you are asleep. Peer out window, chatter at birds, lure them to mouth dream about hunting birds or bleghbleghvomit my furball really tie the room together. Kitty scratches couch bad kitty thug cat but find empty spot in cupboard and sleep all day.
		</p>
		<p>Hide from vacuum cleaner meowing non stop for food groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked!. Attack dog, run away and pretend to be victim immediately regret falling into bathtub so claw drapes, or cat not kitten around hide when guests come over. Playing with balls of wool hunt by meowing loudly at 5am next to human slave food dispenser for i like big cats and i can not lie, but rub whiskers on bare skin act innocent jumps off balcony gives owner dead mouse at present then poops in litter box snatches yarn and fights with dog cat chases laser then plays in grass finds tiny spot in cupboard and sleeps all day jumps in bathtub and meows when owner fills food dish the cat knocks over the food dish cat slides down the water slide and into pool and swims even though it does not like water scamper for sit and stare. Meow all night having their mate disturbing sleeping humans knock over christmas tree lick yarn hanging out of own butt yet lick yarn hanging out of own butt then cats take over the world kitten is playing with dead mouse. Throwup on your pillow all of a sudden cat goes crazy sun bathe, but sniff other cat's butt and hang jaw half open thereafter so purr gnaw the corn cob. Licks paws. Hack up furballs pooping rainbow while flying in a toasted bread costume in space why must they do that playing with balls of wool but kitty ipsum dolor sit amet, shed everywhere shed everywhere stretching attack your ankles chase the red dot, hairball run catnip eat the grass sniff and attack the dog then pretend like nothing happened. Cats go for world domination kitty power! . Unwrap toilet paper pee in human's bed until he cleans the litter box so stare at the wall, play with food and get confused by dust for friends are not food so chase after silly colored fish toys around the house, plays league of legends. Run outside as soon as door open. Eat and than sleep on your face groom yourself 4 hours - checked, have your beauty sleep 18 hours - checked, be fabulous for the rest of the day - checked! but lick butt and make a weird face for lick sellotape but stretch make meme, make cute face kitty loves pigs.
		</p>
		<p>
		Text provided by <a href="http://www.catipsum.com/index.php#.WIZdu5IbuqQ" target="_blank">Cat Ipsum</a>
		</p>
     </main>
    <footer>
      <small>&copy; <?=date('Y')?>, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script type="text/javascript">
	$("document").ready(function(){
		$('.seasons a').click(function(e){//find all a tags inside class of seasons
            e.preventDefault();//stop default submission
			var season = $(this).attr("href");//contents of href attribute of this element
			var stylesheet = $('#mainStylesheet');
			season = season.toLowerCase();
			switch(season)
			{
				case 'spring':
				$('#logo').attr("src","images/spring.gif");
				$('#wear').attr("src","images/spring-wear.jpg");
				$('main header h3').html("Get a jump on Spring wear!");
				break;
				
				case 'summer':
				$('#logo').attr("src","images/summer.gif");
				$('#wear').attr("src","images/summer-wear.jpg");
				$('main header h3').html("Make Summer a hummer!");
				break;
				
				case 'fall':
				$('#logo').attr("src","images/fall.gif");
				$('#wear').attr("src","images/fall-wear.jpg");
				$('main header h3').html("Fall into Fall!");
				break;
				
				case 'winter':
				$('#logo').attr("src","images/winter.gif");
				$('#wear').attr("src","images/winter-wear.jpg");
				$('main header h3').html("Keep warm this Winter!");
				break;
				
				default:
				$('#logo').attr("src","images/four-seasons.gif");
				$('#wear').attr("src","images/300x400.png");
				$('main header h3').html("Outfitter for all seasons!");
				
			}
			
			var season = "css/" + season + ".css";
			$(stylesheet).attr("href",season);
			//alert(season);
		});
	});
    </script>
	
</body>
</html>
