<html>
	<head>
		<title>vesmír</title>
		<link href="style.css" rel="stylesheet"></link>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
		<meta name="viewport" content="user-scalable=no, width=800"/>
	</head>
	<body>
		<winter>
			<winterstrip style="text-align: center">
				<img id="warmhouse" src="img/warmhouse.jpg">
				<winterstory id="winter-story-tag">
					<div style="width: 203px" class="winter-story"></div>
					<div style="width: 159px" class="winter-story"></div>
					<div style="width: 203px" class="winter-story"></div>
					<div style="width: 282px" class="winter-story"></div>
					<div style="width: 308px" class="winter-story"></div>
					<div style="width: 273px" class="winter-story"></div>
					<div style="width: 238px" class="winter-story"></div>
					<br>
					<button id="winter-story-button">Přečteno?</button>
				</winterstory>
				<wintercontent id="cellar-content-tag">
					<div id="cellar-header" class="text-row black">Jsem plný harampádí a vzpomínek.</div>
					<div id="cellar-card-wrap" class="card-information-wrap">
						<div class="text-row" id="my-seeds-cellar"></div>
						<div id="what-thing-i-got"></div>
						<button id="cellar-button">Chci náhodnou věc.</button>
						<div class="text-row black" id="cellar-cost"></div>
						<div class="text-row" id="cellar-warning"></div>
					</div>
					<div id="cellar-count" class="text-row black"></div>
				</wintercontent>
				<wintercontent id="warmhouse-content-tag">
					<div class="cards">
						<div class="herb-wrap"><img class="herb" src="img/1.jpg"></div>
						<div class="herb-wrap"><img class="herb" src="img/2.jpg"></div>
						<div class="herb-wrap"><img class="herb" src="img/3.png"></div>
						<div class="herb-wrap"><img class="herb" src="img/4.jpg"></div>
						<div class="herb-wrap"><img class="herb" src="img/5.jpg"></div>
						<div class="herb-wrap"><img class="herb" src="img/6.jpg"></div>
					</div>
					<div id="card-information" class="card-information-wrap">
						<div id="card-text-header"></div>
						<div class="card-text"></div>
						<div id="figure-wrap">
							<img id="element">
							<img id="figure" src="img/body1.png">
							<img id="bunny" src="img/bunny/frame_0_delay-0.1s.gif">
							<div class="bubble bubble-bottom-left">
								<div id="bunny-text">Ahoj, chceš poradit?</div>
								<button class="bunny-decision">Chci.</button>
								<button class="bunny-decision">Nechci.</button>

								<div id="bunny-herb-row">
									<img class="book-element bunny-element">
									<div class="book-char bunny-char">+</div>
									<img class="book-element bunny-element">
									<div class="book-char bunny-char">+</div>
									<img class="book-element bunny-element">
								</div>

								<div id="bunny-essence-row" class="personality-essence-row">
									<div class="personality-essence">
										<img class="personality-essence-img bunny-essence-img">
										<div class="personality-essence-name bunny-essence-name"></div>
									</div>
									<div class="personality-essence">
										<img class="personality-essence-img bunny-essence-img">
										<div class="personality-essence-name bunny-essence-name"></div>
									</div>
									<div class="personality-essence">
										<img class="personality-essence-img bunny-essence-img">
										<div class="personality-essence-name bunny-essence-name"></div>
									</div>
								</div>
							</div>
							<div id="chakra"></div>
						</div>	
						<div class="card-text"></div>					
						<div id="card-recommend"></div>
						<div class="text-row" id="my-seeds-warmhouse"></div>
						<div id="what-essence-i-got"></div>
						<button id="make-tee"></button>
						<div class="text-row" id="herb-cost"></div>
					</div>

					<div id="essence-bar">
						<div class="text-row my-essences">[Nemám zapsaný žádný recept.]</div>
						<div id="book-wrap">
							<img class="mybook" style="opacity: 1" src="img/book0.png">
							<img class="mybook" style="opacity: 0" src="img/book1.png">
							<img class="mybook" style="opacity: 0" src="img/book2.png">
							<img class="mybook" style="opacity: 0" src="img/book3.png">
							<img class="mybook" style="opacity: 0" src="img/book4.png">
							<img class="mybook" style="opacity: 0" src="img/book5.png">
							<img class="mybook" style="opacity: 0" src="img/book6.png">
							<img class="mybook" style="opacity: 0" src="img/book7.png">
							<div id="book-content-left">
								<div class="book-page-left">1</div>
							</div>
							<div id="book-shadow-left"></div>
							<div id="book-content-right">
								<div class="book-page-right">2</div>
							</div>
							<div id="book-shadow-right"></div>
						</div>

						<div id="mix-essence-bar">
							<div class="text-row" id="mix-essence-header">Tady se esence míchají.</div>
							<div class="mix-essence essence" style="cursor: default">
								<img class="mix-essence-img essence-img" style="cursor: default" src="img/essence/0.png">
								<div class="mix-essence-name essence-name"></div>
							</div>
							<div class="mix-essence essence" style="cursor: default">
								<img class="mix-essence-img essence-img" style="cursor: default" src="img/essence/0.png">
								<div class="mix-essence-name essence-name"></div>
							</div>
							<div class="mix-essence essence" style="cursor: default">
								<img class="mix-essence-img essence-img" style="cursor: default" src="img/essence/0.png">
								<div class="mix-essence-name essence-name"></div>
							</div>
							<div id="what-personality-i-got"></div>
							<button id="make-personality" style="background-color: tomato">Chybí mi základní, pokročilá a vysoká esence.</button>
						</div>
						
						<div class="text-row my-essences">[Nemám žádnou základní esenci.]</div>
						<div class="essence-row"></div>

						<div class="text-row my-essences">[Nemám žádnou pokročilou esenci.]</div>
						<div class="essence-row"></div>

						<div class="text-row my-essences">[Nemám žádnou vysokou esenci.]</div>
						<div class="essence-row"></div>
					</div>
					
					<div class="text-row" id="my-personalities"></div>
					<button id="personality-switch-button"></button>
					<div id="personality-bar"></div>
				</wintercontent>
				<div id="back-to-galaxy-main">
					<div class="back-to-galaxy-wrap">
						<img class="back-to-galaxy-icon" src="img/galaxy-frame.png">
						<div class="back-to-galaxy"></div>
						<div class="back-to-galaxy-view"></div>
					</div>
					<button id="back-to-galaxy">Chci zpátky.</button>
				</div>
			</winterstrip>
		</winter>
		<blackhole>
			<div class="text-row" id="mystatscount"></div>
			<div id="mystats">
				<div class="text-row" id="mytablelimit"></div>
				<div id="mytable"></div>
			</div>
			<div class="text-row" id="doyouhavequestion">Máš otázku?</div>
			<div class="black-chat">
				<div class="black-chat-window"></div>
				<form id="black-chat-form">
					<input id="black-chat-input" type="text" minlength="1" maxlength="500" placeholder="Napiš zprávu.">
				</form>
			</div>
			<div class="button-wrap"><button id="back-from-blackhole">Chci zpátky.</button></div>
		</blackhole>
		<myscreen>
			<curtain>
				<div id="blackhole-curtain"></div>
				<div id="matrix"></div>
			</curtain>
			<wintercurtain>
				<img id="warmhouse-curtain" src="img/warmhouse.jpg">
			</wintercurtain>

			<div id="warm-welcome">
				<div>Vesmír mne potřebuje!</div>

				<?php
					include("sql/mysql_connect.php");
					$sql=mysqli_query($link,"SELECT name,color FROM planet ORDER BY beatcount DESC LIMIT 1");
					$planet=mysqli_fetch_assoc($sql);

					echo '<div id="famous-planet" style="background:'.$planet["color"].'"></div><div id="famous-planet-row">Nejpopulárnější planetou je '.$planet["name"].'.</div>';
				?>				
			</div>

			<strip>
				<div id="online">Vesmírem nebloudí žádná bytost.</div>
				<div id="data-bar"></div>
				<button id="let-me-out">Chci ven.</button>
			</strip>
				
			<div id="laniakea"></div>
			<div id="galaxy"></div> <!--background-position: top; background-attachment: fixed !important;-->
			<div id="anomaly"></div>
			<div id="system"></div>
			<div id="core"></div>			

			<div id="forest-main">
				<div id="forest-cloak"></div>
				<div id="forest-header">
					<div class="forest-text" id="seedinfo"></div>
					<div class="forest-text" id="forest-current"></div>
					<div class="forest-text" id="seedbank"></div>
				</div>

				<div id="canvasWrap">
					<div class="approach"></div>
					<div class="approach"></div>
					<div class="approach"></div>
					<div class="approach"></div>
					<div class="approach"></div>
					<div class="approach"></div>
					<div class="approach"></div>
					<div class="approach"></div>
					<div class="approach"></div>
				</div>
				<div id="forest-ground"></div>

				<div id="forest-footer">
					<div class="forest-text" id="forest-month"></div>
					<div class="forest-text" id="timeBar"></div>
					<div class="forest-text"><button id="forest-button">Chci zpátky.</button></div>
				</div>
			</div>

			<div id="entry-bar">
				<button id="let-me-in">Chci vstoupit.</button>
			</div>

			<div id="profile">
				<div id="my-console"></div>
				<div id="connection"></div>
				<div id="whoami"></div>
				<div id="mytree"></div>
				<div id="mychest">
					<img id="mychest-img" src="img/chest.svg">
					<div class="text-row" id="mychest-header">Najdi každý střep a otevřu se.</div>
					<img id="mychest-fragment" alt="od Philippy Rice" src="img/fragment/fragment25.png">
					<div class="text-row" id="mychest-row"></div>
				</div>
				<div id="login">
					<div id="loveorlife-bar">
						<div class="text-row">Kým jsem?</div>
						<div id="icon-bar">
							<div class="icon sun" id="sun"></div>
							<div class="icon moon" id="moon"></div>
						</div>
						<div id="loveorlife" class="text-row"></div>
					</div>
					<div id="input-bar">
						<div class="text-row">Jak se jmenuji?</div>
						<input class="registration-input" type="text" minlength="3" maxlength="17">
						<div class="text-row" style="margin-top: 5px">Jaké mám heslo?</div>
						<input class="registration-input" type="password" minlength="3" maxlength="17">
					</div>
					<div id="question-bar">
						<div class="text-row" id="question">Co následuje po úterý?</div>
						<div style="float: left; width: 100px;">
							<button class="answer">středa</button>
							<button class="answer">čtvrtek</button>
						</div>
						<div style="float: right; width: 100px;">
							<button class="answer">pátek</button>
							<button class="answer">sobota</button>
						</div>
					</div>
					<div class="warning" class="text-row"></div>
					<button id="let-me-enter">Jak se jmenuji?</button>
					<button id="let-me-start">Nevím.</button>
				</div>
				<div id="myhome" class="snow-bar">
					<div class="snow-wrap">
						<img class="snow-house" src="img/warmhouse.png">
						<div class="snow"></div>
						<div class="snow-view"></div>
					</div>
					<button id="go-home">Chci domů.</button>
				</div>

				<div id="mycellar" class="snow-bar">
					<div class="snow-wrap">
						<img class="snow-cellar" src="img/cellar.png">
						<div class="snow"></div>
						<div class="snow-view"></div>
					</div>
					<button id="go-to-cellar">Prohledám sklep.</button>
				</div>
			</div>
		</myscreen>
	</body>
	<script src="js/utils.js"></script>
    <script>
		var warning=document.getElementsByClassName("warning")[0];
		var answer=document.getElementsByClassName("answer");
		var logininput=document.getElementsByClassName("registration-input");
		var warmWelcome=document.getElementById("warm-welcome");
		var entryBar=document.getElementById("entry-bar");
		var letMeIn=document.getElementById("let-me-in");
		var letMeOut=document.getElementById("let-me-out");
		var letMeEnter=document.getElementById("let-me-enter");
		var letMeStart=document.getElementById("let-me-start");
		var databar=document.getElementById("data-bar");
		var inputbar=document.getElementById("input-bar");
		var loveorlifebar=document.getElementById("loveorlife-bar");
		var questionbar=document.getElementById("question-bar");
		var forestCloak=document.getElementById("forest-cloak");
		var forestMain=document.getElementById("forest-main");
		var forestButton=document.getElementById("forest-button");
		var forestGround=document.getElementById("forest-ground");
		var seedbank=document.getElementById("seedbank");
		var seedinfo=document.getElementById("seedinfo");
		var profile=document.getElementById("profile");
		var forestCurrent=document.getElementById("forest-current");
		var forestMonth=document.getElementById("forest-month");
		var myConsole=document.getElementById("my-console");
		var goHome=document.getElementById("go-home");
		var gotocellar=document.getElementById("go-to-cellar");
		var backToGalaxy=document.getElementById("back-to-galaxy");
		var backToGalaxyMain=document.getElementById("back-to-galaxy-main");
		var wintertag=document.getElementsByTagName("winter")[0];
		var wintercurtain=document.getElementsByTagName("wintercurtain")[0];
		var curtain=document.getElementsByTagName("curtain")[0];
		var myscreen=document.getElementsByTagName("myscreen")[0];
		var herb=document.getElementsByClassName("herb");
		var cardText=document.getElementsByClassName("card-text");
		var cardTextHeader=document.getElementById("card-text-header");
		var cardRecommend=document.getElementById("card-recommend");
		var cardInformation=document.getElementById("card-information");
		var mybook=document.getElementsByClassName("mybook");
		var bookContentLeft=document.getElementById("book-content-left");
		var bookContentRight=document.getElementById("book-content-right");
		var bookShadowLeft=document.getElementById("book-shadow-left");
		var bookShadowRight=document.getElementById("book-shadow-right");
		var myessences=document.getElementsByClassName("my-essences");
		var essencerow=document.getElementsByClassName("essence-row");
		var maketea=document.getElementById("make-tee");
		var whatessenceigot=document.getElementById("what-essence-i-got");
		var whatthingigot=document.getElementById("what-thing-i-got");
		var whatpersonalityigot=document.getElementById("what-personality-i-got");
		var herbcost=document.getElementById("herb-cost");
		var myseedswarmhouse=document.getElementById("my-seeds-warmhouse");
		var myseedscellar=document.getElementById("my-seeds-cellar");
		var cellarwarning=document.getElementById("cellar-warning");
		var cellarcost=document.getElementById("cellar-cost");
		var cellarbutton=document.getElementById("cellar-button");
		var cellarcount=document.getElementById("cellar-count");
		var cellarheader=document.getElementById("cellar-header");
		var cellarcardwrap=document.getElementById("cellar-card-wrap");
		var mixessence=document.getElementsByClassName("mix-essence");
		var mixessenceimg=document.getElementsByClassName("mix-essence-img");
		var mixessencename=document.getElementsByClassName("mix-essence-name");
		var makepersonality=document.getElementById("make-personality");
		var personalitybar=document.getElementById("personality-bar");
		var mypersonalities=document.getElementById("my-personalities");
		var warmhouse=document.getElementById("warmhouse");
		var warmhousecurtain=document.getElementById("warmhouse-curtain");
		var winterstorybutton=document.getElementById("winter-story-button");
		var winterstorytag=document.getElementById("winter-story-tag");
		var warmhousecontenttag=document.getElementById("warmhouse-content-tag");
		var cellarcontenttag=document.getElementById("cellar-content-tag");
		var winterstory=document.getElementsByClassName("winter-story");
		var personalityswitchbutton=document.getElementById("personality-switch-button");
		var mychestfragment=document.getElementById("mychest-fragment");
		var mychestrow=document.getElementById("mychest-row");
		var mychestimg=document.getElementById("mychest-img");
		var mychestheader=document.getElementById("mychest-header");
		var bubble=document.getElementsByClassName("bubble");
		var bunnydecision=document.getElementsByClassName("bunny-decision");
		var bunnyessenceimg=document.getElementsByClassName("bunny-essence-img");
		var bunnyessencename=document.getElementsByClassName("bunny-essence-name");
		var bunnytext=document.getElementById("bunny-text");
		var bunnyessencerow=document.getElementById("bunny-essence-row"); 
		var bunnyherbrow=document.getElementById("bunny-herb-row"); 
		var bunnychar=document.getElementsByClassName("bunny-char");
		var bunnyelement=document.getElementsByClassName("bunny-element");
		var blackholetag=document.getElementsByTagName("blackhole")[0];
		var backfromblackhole=document.getElementById("back-from-blackhole");
		var blackholecurtain=document.getElementById("blackhole-curtain");
		var blackchatinput=document.getElementById("black-chat-input");
		var blackchatform=document.getElementById("black-chat-form");
		var blackchatwindow=document.getElementsByClassName("black-chat-window")[0];
		var forestfooter=document.getElementById("forest-footer");

		initForest=(forest)=>{
			forest.is={};
			forest.is.month=false;
			forest.is.seeds=false;
			forest.is.capacity=false;
			forest.is.regrow=false;
			forest.time.interval=null;
			forest.layer=[];
			forest.season=0;
			forest.time.current=0;
			forest.speed=8;
			forest.month=0;
			forest.tick=0;
			forest.trees={};
			forest.trees.coffin=[];
			forest.trees.slot=[];
			forest.winter={};
			forest.winter.is=false;
			forest.autumn={};
			forest.autumn.colorize={};
			forest.autumn.colorize.step=0.1;
			forest.autumn.colorize.skip=2;
			forest.autumn.gravity=3; // minimum je 1
			forest.autumn.skip=3; // listy zmizí, nespadnou
			forest.autumn.density=30; // hustota padání listů - čím méně, tím víc, minimum je 1
			forest.autumn.ceil=0; // pomocná proměnná pro strop listů
			forest.autumn.wind=4;
			forest.autumn.delay=5;
			forest.spring={};
			forest.spring.skip=1;
		}

		cleanForest=(forest)=>{
			clearInterval(forest.time.interval);
			forest.time.interval=null;
			forest.layer=[];
			forest.season=0;
			forest.time.current=0;
			forest.month=0;
			forest.trees.coffin=[];
			forest.trees.slot=[];
			forest.is.month=false;
			forest.winter.is=false;
		}
		
		var glade={};
		glade.canvas={};
		glade.canvases=[];
        glade.canvas.width=800;
        glade.canvas.height=250;
		glade.canvas.layers=3; //max 1 tree
        glade.sky=0;
		glade.time={};
		glade.init={};
		initForest(glade);
		var myplant=[];	

		var forest={};
		forest.canvas={};
        forest.canvas.width=800;
        forest.canvas.height=400;
        forest.canvas.layers=28; //max 9 trees + layer 0 is for seeds
        forest.sky=200;
		forest.time={};
		forest.init={};
		forest.active=false;
		initForest(forest);
		var plant=[];

		var her={};
		her.personality={};
		her.personality.count=0;

		//var me={}; in utils
		me.init=false;
		me.name="";
		me.profile={};
		me.string={};
		me.interval={};

		me.phone=false;
		me.zoom={};
		me.zoom.trigger=false;
		me.zoom.memory="";
		if(window.innerWidth<window.innerHeight){
			me.phone=true;
		}

		me.cellar={};
		me.cellar.is=false;
		me.cellar.can=false;
		me.cellar.init=true;
		me.cellar.current=0;

		me.glade={};
		me.glade.ui={};
		me.glade.array=[];
		me.glade.pointer={};
		me.glade.pointer.id=0;
		me.glade.pointer.location=0;
		me.glade.is={};
		me.glade.is.init=true;
		me.glade.is.open=true;
		me.glade.is.set=false;	
		me.glade.is.loading=false;
		me.glade.interval=null;
		me.glade.time=0;
		me.glade.timeout={};
		me.glade.timeout.left=null;
		me.glade.timeout.right=null;

		me.glade.string=[];
		me.glade.string[0]="první";
		me.glade.string[1]="druhý";
		me.glade.string[2]="třetí";
		me.glade.string[3]="čtvrtý";

		me.seeds={};
		me.seeds.count=0;
		me.seeds.init=true;

		me.whatihave={};
		me.whatihave.tick=()=>{
			me.whatihave.count=me.seeds.count;
			if(me.whatihave.count<10){
				me.profile.whereareyou.style.backgroundColor="tomato";
				me.profile.cost.style.color="tomato";
				me.profile.whatineed.innerHTML="[Chybí mi "+(10-me.seeds.count)+".]";
			}
			else{
				me.profile.whereareyou.style.backgroundColor="#5ab300";
				me.profile.cost.style.color="greenyellow";
				me.profile.whatineed.innerHTML="";
			}
		}

		me.in=false;
		me.global={};
		me.global.online=0;

		me.planet={};
		me.planet.canAnimate=true;
		me.planet.interval=null;
		me.planet.hearts={};
		me.planet.is={};
		me.planet.is.leap=false;
		me.planet.is.waiting=false;

		me.partner={};
		me.partner.is={};
		me.partner.is.set=false;
		me.partner.is.init=true;
		me.partner.is.bot=false;
		me.partner.is.dream=false;
		me.partner.is.typing=false;

		me.console={};
		me.console.init=true;

		me.connection={};
		me.connection.decision={};
		me.connection.decision.break=null;
		initConnection=()=>{
			me.connection.init=true;
			me.connection.in=false;
			me.connection.decision.question=null;
			me.connection.messages={};
			me.connection.messages.sun=0;
			me.connection.messages.moon=0;
			me.connection.messages.color=[];
			me.connection.color=[];
			me.connection.filterin=0;
			for(let i=0;i<5;i++){ //black,white,green,red,blue
				me.connection.messages.color[i]=[];
				me.connection.color[i]={};
				me.connection.color[i].init=false;
				me.connection.color[i].filter=false;
			}
		}
		initConnection();

		me.gender=2;
		me.whereareyou={};
		me.whereareyou.init=false;
		me.whereareyou.interval=null;
		me.whereareyou.howlong=0;
		me.login={};
		me.login.init=false;
		me.registration={};
		me.registration.init=false;
		me.registration.answered=false;		
		me.location=-1;
		me.hash=null;

		var data={};
		data.printing=false;
		data.continue=false;
		data.text=[];
		data.progress=[];
		data.interval=[];
		data.button={};
		data.button.interval=null;

		data.clean=()=>{
			for(let i=0;i<data.interval.length;i++){
				clearInterval(data.interval[i]);
			}
			clearInterval(data.button.interval);
			data.text=[];
			data.progress=[];
			data.interval=[];
			databar.innerHTML="";
			letMeOut.style.display="none";
		}

		data.print=(text)=>{
			data.printing=true;
			data.text.push(text);
			data.progress.push(0);
			if(!data.continue){
				databar.appendChild(createElement("div","data-text"));
			}
			data.continue=false;

			data.interval.push(setInterval(function(i){
				databar.children[i].innerHTML+=data.text[i].charAt(data.progress[i]);
				data.progress[i]++;

				if(data.progress[i]==data.text[i].length){
					clearInterval(data.interval[i]);
					data.interval[i]=null;
					data.printing=false;
				}
			},50,data.interval.length));
		}

		data.append=(text)=>{
			data.continue=true;
			let div=createElement("div","data-text");
			div.innerHTML=text;
			databar.appendChild(div);
		}

		data.add=(text)=>{
			let div=createElement("div","data-text");
			div.innerHTML=text;
			data.interval.push(null);
			data.text.push(" ");
			data.progress.push(0);
			databar.appendChild(div);
		}

		data.setbackbutton=()=>{
			data.button.interval=setInterval(()=>{
				let trigger=true;
				for(let i=0;i<data.interval.length;i++){
					if(data.interval[i]!==null){
						trigger=false;
					}
				}
				if(trigger){
					letMeOut.style.display="block";
					clearInterval(data.button.interval);
				}
			},100);
		}

		me.home={};
		me.home.is={};
		me.home.is.element=true;
		me.home.interval=setInterval(()=>{
			if(me.home.is.element){
				me.home.is.element=false;
				element.style.top="20px";
			}
			else{
				me.home.is.element=true;
				element.style.top="0px";
			}
		},2000);

		me.book={};
		me.book.page=0;
		me.book.max=0;
		me.book.array=[];
		me.book.flipPage=(right)=>{
			if(right){
				mybook[0].style.opacity=1;
				for(let i=1;i<8;i++){
					mybook[i].style.opacity=0;
				}

				for(let i=1;i<8;i++){
					setTimeout(()=>{
						mybook[i].style.opacity=1;
						mybook[i-1].style.opacity=0;
					},i*50);
				}
			}
			else{
				mybook[7].style.opacity=1;
				for(let i=0;i<7;i++){
					mybook[i].style.opacity=0;
				}

				for(let i=6;i>=0;i--){
					setTimeout(()=>{
						mybook[i].style.opacity=1;
						mybook[i+1].style.opacity=0;
					},Math.abs((i-6)*50)+50);
				}
			}
		}

		me.book.append=(essence,position)=>{
			let book={};
			book.main=createElement("div","book-essence-row");
			book.secondary=createElement("div","book-essence");
			book.img=createElement("img","book-essence-img");
			book.name=createElement("div","book-essence-name");

			book.img.src="img/essence/"+essence+".png";
			book.name.innerHTML=getEssenceName(essence)[0];

			book.secondary.appendChild(book.img);
			book.secondary.appendChild(book.name);

			let element,char;
			let string=essence.toString();
			if(string.length==1){
				element=createElement("img","book-element");
				element.src="img/e"+string+".png";
				book.main.appendChild(element);
				char=createElement("div","book-char");
				char.innerHTML="=";
				book.main.appendChild(char);
			}
			else if(string.length==2){
				element=createElement("img","book-element");
				element.src="img/e"+string[0]+".png";
				book.main.appendChild(element);
				char=createElement("div","book-char");
				char.innerHTML="+";
				book.main.appendChild(char);
				element=createElement("img","book-element");
				element.src="img/e"+string[1]+".png";
				book.main.appendChild(element);
				char=createElement("div","book-char");
				char.innerHTML="=";
				book.main.appendChild(char);
			}
			else{
				element=createElement("img","book-element");
				element.src="img/e"+string[0]+".png";
				book.main.appendChild(element);
				char=createElement("div","book-char");
				char.innerHTML="+";
				book.main.appendChild(char);
				element=createElement("img","book-element");
				element.src="img/e"+string[1]+".png";
				book.main.appendChild(element);
				char=createElement("div","book-char");
				char.innerHTML="+";
				book.main.appendChild(char);
				element=createElement("img","book-element");
				element.src="img/e"+string[2]+".png";
				book.main.appendChild(element);
				char=createElement("div","book-char");
				char.innerHTML="=";
				book.main.appendChild(char);
			}

			book.main.appendChild(book.secondary);

			if(position%6<3){
				bookContentLeft.appendChild(book.main);
			}
			else{
				bookContentRight.appendChild(book.main);
			}
		}

		me.book.add=(essence,init)=>{
			if(!me.book.array.includes(essence)){
				me.book.array.push(essence);

				if(me.book.array.length==1){
					myessences[0].innerHTML="[Znám recept pro esenci.]";
				}
				else if(me.book.array.length>1 && me.book.array.length<5){
					myessences[0].innerHTML="[Znám recept pro "+me.book.array.length+" esence.]";
				}
				else if(me.book.array.length==41){
					myessences[0].innerHTML="[Znám recept pro každou z 41 esencí.]";
				}
				else{
					myessences[0].innerHTML="[Znám recept pro "+me.book.array.length+" esencí.]";
				}

				if(init){
					if(me.book.array.length<=6){
						me.book.append(essence,(me.book.array.length-1));
					}
				}
				else{
					me.book.array.sort((a,b) => a-b);
					bookContentLeft.innerHTML="";
					bookContentRight.innerHTML="";
					me.book.appendPages();
					for(let i=(me.book.page*6);i<((me.book.page+1)*6);i++){
						if(i<me.book.array.length){
							me.book.append(me.book.array[i],i);
						}
					}
				}

				if(me.book.array.length%(7*(me.book.page+1))==0){
					bookShadowRight.style.cursor="pointer";
				}

				me.book.max=Math.floor((me.book.array.length-1)/6);
			}
		}

		me.book.appendPages=()=>{
			let pageleft=createElement("div","book-page-left");
			pageleft.innerHTML=(me.book.page*2)+1;
			bookContentLeft.appendChild(pageleft);

			let pageright=createElement("div","book-page-right");
			pageright.innerHTML=(me.book.page*2)+2;
			bookContentRight.appendChild(pageright);
		}

		me.book.next=()=>{
			if(me.book.page<me.book.max){
				me.book.page++;
				bookContentLeft.innerHTML="";
				bookContentRight.innerHTML="";
				me.book.flipPage(true);

				setTimeout(()=>{
					me.book.appendPages();
					for(let i=(me.book.page*6);i<((me.book.page+1)*6);i++){
						if(i<me.book.array.length){
							me.book.append(me.book.array[i],i);
						}
					}
				},400);

				bookShadowLeft.style.cursor="pointer";
				if(me.book.array.length>((me.book.page+1)*6)){
					bookShadowRight.style.cursor="pointer";
				}
				else{
					bookShadowRight.style.cursor="default";
				}
			}
		}

		me.book.previous=()=>{
			if(me.book.page>0){
				me.book.page--;
				bookContentLeft.innerHTML="";
				bookContentRight.innerHTML="";
				me.book.flipPage(false);

				setTimeout(()=>{
					me.book.appendPages();
					for(let i=(me.book.page*6);i<((me.book.page+1)*6);i++){
						if(i<me.book.array.length){
							me.book.append(me.book.array[i],i);
						}
					}
				},400);

				bookShadowRight.style.cursor="pointer";
				if(me.book.page==0){
					bookShadowLeft.style.cursor="default";
				}
			}
		}

		bookShadowLeft.onclick=()=>{
			me.book.previous();
		}

		bookShadowRight.onclick=()=>{
			me.book.next();
		}

		me.essence={};
		me.essence.array=[];
		me.essence.array[0]=[];
		me.essence.array[1]=[];
		me.essence.array[2]=[];
		me.essence.mix=[];
		me.essence.mix[0]=null;
		me.essence.mix[1]=null;
		me.essence.mix[2]=null;
		me.essence.is={};
		me.essence.is.full=false;

		me.string.mix=[];
		me.string.mix[0]="základní";
		me.string.mix[1]="pokročilá";
		me.string.mix[2]="vysoká";

		refreshMix=()=>{
			let count=[];
			for(let i=0;i<3;i++){
				if(me.essence.mix[i]===null){
					count.push(i);
				}
			}

			me.essence.is.full=false;
			if(count.length==3){
				makepersonality.innerHTML="Chybí mi základní, pokročilá a vysoká esence.";
				makepersonality.style.backgroundColor="tomato";
			}
			else if(count.length==2){
				makepersonality.innerHTML="Chybí mi "+me.string.mix[count[0]]+" a "+me.string.mix[count[1]]+" esence.";
				makepersonality.style.backgroundColor="tomato";
			}
			else if(count.length==1){
				makepersonality.innerHTML="Chybí mi "+me.string.mix[count[0]]+" esence.";
				makepersonality.style.backgroundColor="tomato";
			}
			else{
				me.essence.is.full=true;
				makepersonality.innerHTML="Smíchám "+getEssenceName(me.essence.mix[0])[1]+", "+getEssenceName(me.essence.mix[1])[1]+" a "+getEssenceName(me.essence.mix[2])[1]+".";
				makepersonality.style.backgroundColor="#5ab300";
			}
		}

		for(let i=0;i<3;i++){
			mixessence[i].onclick=()=>{
				if(me.essence.mix[i]!==null){
					mixessenceimg[i].src="img/essence/0.png";
					mixessencename[i].innerHTML="";
					mixessenceimg[i].style.cursor="default";
					addEssence(me.essence.mix[i]);
					me.essence.mix[i]=null;
					refreshMix();
					refreshEssences(i);
				}
			}
		}

		refreshEssences=(value)=>{
			switch(value){
				case 0:
					if(me.essence.array[0].length==0){
						myessences[1].innerHTML="[Nemám žádnou základní esenci.]";
					}
					else if(me.essence.array[0].length==1){
						myessences[1].innerHTML="[Mám 1 základní esenci.]";
					}
					else if(me.essence.array[0].length>1 && me.essence.array[0].length<5){
						myessences[1].innerHTML="[Mám "+me.essence.array[0].length+" základní esence.]";
					}
					else{
						myessences[1].innerHTML="[Mám "+me.essence.array[0].length+" základních esencí.]";
					}
					break;
				case 1:
					if(me.essence.array[1].length==0){
						myessences[2].innerHTML="[Nemám žádnou pokročilou esenci.]";
					}
					else if(me.essence.array[1].length==1){
						myessences[2].innerHTML="[Mám 1 pokročilou esenci.]";
					}
					else if(me.essence.array[1].length>1 && me.essence.array[1].length<5){
						myessences[2].innerHTML="[Mám "+me.essence.array[1].length+" pokročilé esence.]";
					}
					else{
						myessences[2].innerHTML="[Mám "+me.essence.array[1].length+" pokročilých esencí.]";
					}
					break;
				case 2:
					if(me.essence.array[2].length==0){
						myessences[3].innerHTML="[Nemám žádnou vysokou esenci.]";
					}
					else if(me.essence.array[2].length==1){
						myessences[3].innerHTML="[Mám 1 vysokou esenci.]";
					}
					else if(me.essence.array[2].length>1 && me.essence.array[2].length<5){
						myessences[3].innerHTML="[Mám "+me.essence.array[2].length+" vysoké esence.]";
					}
					else{
						myessences[3].innerHTML="[Mám "+me.essence.array[2].length+" vysokých esencí.]";
					}
					break;
			}
		}

		me.personality={};
		me.personality.is={};
		me.personality.count=0;
		me.personality.element={};
		me.personality.element.date=[];
		me.personality.element.essence=[];
		me.personality.hashtag=[];

		me.fragment={};
		me.fragment.count=0;

		getChestCallback=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);
				if(tmp[0]==1){
					if(me.gender==1){
						mychestheader.innerHTML="Jsi prvním, kdo mne otevřel.";
					}
					else{
						mychestheader.innerHTML="Jsi první, kdo mne otevřela.";
					}
				}
				else if(tmp[0]==2){
					if(me.gender==1){
						mychestheader.innerHTML="Jsi druhým, kdo mne otevřel.";
					}
					else{
						mychestheader.innerHTML="Jsi druhá, kdo mne otevřela.";
					}
				}
				else if(tmp[0]==3){
					if(me.gender==1){
						mychestheader.innerHTML="Jsi třetím, kdo mne otevřel.";
					}
					else{
						mychestheader.innerHTML="Jsi třetí, kdo mne otevřela.";
					}
				}
				else if(tmp[0]==4){
					if(me.gender==1){
						mychestheader.innerHTML="Jsi čtvrtým, kdo mne otevřel.";
					}
					else{
						mychestheader.innerHTML="Jsi čtvrtá, kdo mne otevřela.";
					}
				}
				else if(tmp[0]==7 || tmp[0]==8){
					if(me.gender==1){
						mychestheader.innerHTML="Jsi "+tmp[0]+"mým, kdo mne otevřel.";
					}
					else{
						mychestheader.innerHTML="Jsi "+tmp[0]+"má, kdo mne otevřela.";
					}
				}
				else if(tmp[0]<21){
					if(me.gender==1){
						mychestheader.innerHTML="Jsi "+tmp[0]+"tým, kdo mne otevřel.";
					}
					else{
						mychestheader.innerHTML="Jsi "+tmp[0]+"tá, kdo mne otevřela.";
					}
				}
				else{
					if(me.gender==1){
						mychestheader.innerHTML="Otevřel jsi mne.";
					}
					else{
						mychestheader.innerHTML="Otevřela jsi mne.";
					}
				}

				mychestimg.style.cursor="pointer";
				mychestimg.onclick=()=>{
					window.open(tmp[1]);
				}
			}
		}

		getThingCallback=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);
				if(tmp.max==tmp.current){
					if(me.cellar.init){
						cellarheader.style.display="none";
						cellarcardwrap.style.display="none";
					}
					else{
						cellarcost.style.opacity="0";
						cellarheader.style.opacity="0";
						cellarcardwrap.style.opacity="0";
						cellarwarning.style.opacity="0";
						setTimeout(()=>{
							cellarheader.style.display="none";
							cellarcardwrap.style.display="none";
						},2000);
					}
					
					cellarbutton.style.cursor="default";
					cellarcount.innerHTML="[Sklep je čistý.]";
					me.cellar.can=false;
				}
				else{
					let a="";
					if(me.gender==0){
						a="a";
					}

					if(tmp.current==0){
						cellarcount.innerHTML="";
					}
					else if(tmp.current==1){
						cellarcount.innerHTML="[Uklidil"+a+" jsem 1 věc.]";
					}
					else if(tmp.current>1 && tmp.current<5){
						cellarcount.innerHTML="[Uklidil"+a+" jsem "+tmp.current+" věci.]";
					}
					else{
						cellarcount.innerHTML="[Uklidil"+a+" jsem "+tmp.current+" věcí.]";
					}
				}

				if(me.cellar.init){
					me.cellar.init=false;
					for(let i=0;i<tmp.current;i++){
						things[i]();
						me.cellar.current++;
					}
				}
				else if((tmp.current-1)==me.cellar.current){
					things[tmp.current-1]();
					me.cellar.current++;

					if(me.gender==1){
						whatthingigot.innerHTML="Našel jsem "+tmp.name+".";
					}
					else{
						whatthingigot.innerHTML="Našla jsem "+tmp.name+".";
					}
					
					whatthingigot.style.opacity=1;
					clearTimeout(me.whatigot);
					me.whatigot=setTimeout(()=>{
						whatthingigot.style.opacity=0;
					},2500);
				}

				if(tmp.max>tmp.current){
					me.cellar.cost=tmp.cost;
					refreshCellarSeeds(tmp.seeds);
				}
				else{
					cellarbutton.style.backgroundColor="tomato";
				}
			}
		}

		cellarbutton.onclick=()=>{
			if(me.cellar.can){
				ajax("php/getThing.php","name="+me.name+"&hash="+me.hash+"&init=false",getThingCallback);
			}
		}

		setCellar=()=>{
			mycellar.style.display="block";			
			ajax("php/getThing.php","name="+me.name+"&hash="+me.hash+"&init=true",getThingCallback);
		}

		updateFragment=(input)=>{
			if(input>me.fragment.count){
				me.fragment.count=input;
				if(me.fragment.count==33){
					mychestimg.src="img/treasure.svg";
					mychestfragment.src="img/fragment/final.png";
					mychestfragment.style.margin="20px";
					mychestrow.style.color="white";
					if(me.gender==1){
						mychestrow.innerHTML="Můžeš být na sebe hrdý.<br>Gratuluji!";
					}
					else{
						mychestrow.innerHTML="Můžeš být na sebe hrdá.<br>Gratuluji!";
					}
					
					ajax("php/getChest.php","name="+me.name+"&hash="+me.hash,getChestCallback);
				}
				else{
					mychestfragment.src="img/fragment/fragment"+me.fragment.count+".png";
					let left=Math.abs(me.fragment.count-33);
					if(me.fragment.count==1){
						mychestrow.innerHTML="[Mám střep. Chybí mi ještě "+left+".]";
					}
					else if(me.fragment.count>1 && me.fragment.count<5){
						mychestrow.innerHTML="[Mám "+me.fragment.count+" střepy. Chybí mi ještě "+left+".]";
					}
					else{
						mychestrow.innerHTML="[Mám "+me.fragment.count+" střepů. Chybí mi ještě "+left+".]";
					}
				}
			}
		}

		updatePersonalityData=(object)=>{
			me.personality.count++;

			if(!me.personality.hashtag.includes(object.hashtag)){
				me.personality.hashtag.push(object.hashtag);
			}

			updateFragment(me.personality.count);
		}

		addPersonality=(object)=>{	
			let element={};
			element.main=createElement("div","personality white-card");
			element.column={};
			element.column.left=createElement("div","personality-column-left");
			element.column.right=createElement("div","personality-column-right");

			element.header=createElement("div","personality-header");

			if(me.personality.is.switch){	
				her.personality.count++;

				element.header.innerHTML="Je "+object.title+".";

				if(her.personality.count==33){
					mypersonalities.innerHTML="[Zná každou z 33 osobností.]";
				}
				else{
					mypersonalities.innerHTML="[Zná "+her.personality.count+" z 33 osobností.]";
				}
			}
			else{
				updatePersonalityData(object);

				element.header.innerHTML="Jsem "+object.title+".";
				
				if(me.personality.count==33){
					mypersonalities.innerHTML="[Znám každou z 33 osobností.]";
				}
				else{
					mypersonalities.innerHTML="[Znám "+me.personality.count+" z 33 osobností.]";
				}

				if(me.personality.count==1){
					mychest.style.display="block";
					if(me.partner.name.length>0){
						personalityswitchbutton.style.display="block";
						if(me.gender==1){
							personalityswitchbutton.innerHTML="Chci zobrazit její osobnosti.";
							personalityswitchbutton.style.backgroundColor="pink";
						}
						else{
							personalityswitchbutton.innerHTML="Chci zobrazit jeho osobnosti.";
							personalityswitchbutton.style.backgroundColor="skyblue";
						}
					}
				}

				if(me.personality.count==3){
					setCellar();
				}
			}

			element.quote=[];
			for(let i=0;i<object.quote.length;i++){
				element.quote[i]={};
				element.quote[i].main=createElement("div","personality-quote");
				element.quote[i].text=createElement("div","personality-quote-text");
				element.quote[i].text.innerHTML="“"+object.quote[i]+"”";
				element.quote[i].autor=createElement("div","personality-quote-autor");
				if(typeof object.autor[i]!="undefined" && object.autor[i].length>0){
					element.quote[i].autor.innerHTML=object.autor[i];
				}
			}

			element.text=createElement("div","personality-text");
			element.text.innerHTML=object.description;
			
			element.color={};
			element.color.wrap=createElement("div","personality-color-orb-wrap");
			element.color.orb=createElement("div","personality-color-orb");
			element.color.orb.style.background=object.color;
			element.color.name=createElement("div","personality-color-text");
			element.color.name.innerHTML="Barva osobnosti je "+object.colorname+".";

			let rarity="";
			if(object.rarity==0){
				rarity="základní";
			}
			else if(object.rarity==1){
				rarity="běžné";
			}
			else if(object.rarity==2){
				rarity="vysoké";
			}
			else{
				rarity="vzácné";
			}

			element.rarity=createElement("div","personality-rarity");
			element.rarity.innerHTML="Patří mezi "+rarity+".";
			element.image=createElement("img","personality-image");
			element.image.src="img/personality/"+object.title+".png";
			element.image.alt=object.artist;
			element.date=createElement("div","personality-date");

			let before=new Date(object.time*1000);
			element.date.innerHTML=before.getDate()+". "+me.string.date[before.getMonth()]+" "+before.getFullYear();

			element.essence={};
			element.essence.main=createElement("div","personality-essence-row");
			element.essence.bottle=[];
			for(let i=0;i<object.essence.length;i++){
				element.essence.bottle[i]={};
				element.essence.bottle[i].main=createElement("div","personality-essence");
				element.essence.bottle[i].image=createElement("img","personality-essence-img");
				element.essence.bottle[i].image.src="img/essence/"+object.essence[i]+".png";
				element.essence.bottle[i].name=createElement("div","personality-essence-name");
				element.essence.bottle[i].name.innerHTML=getEssenceName(object.essence[i])[0];
			}

			element.column.left.appendChild(element.header);
			for(let i=0;i<object.quote.length;i++){
				element.quote[i].main.appendChild(element.quote[i].text);
				element.quote[i].main.appendChild(element.quote[i].autor);
				element.column.left.appendChild(element.quote[i].main);
			}
			element.column.left.appendChild(element.text);
			element.color.wrap.appendChild(element.color.orb);
			element.column.left.appendChild(element.color.wrap);
			element.column.left.appendChild(element.color.name);
			element.column.left.appendChild(element.rarity);

			element.column.right.appendChild(element.image);
			element.column.right.appendChild(element.date);
			
			let bottle={};
			bottle.image=[];
			bottle.name=[];

			for(let i=0;i<object.essence.length;i++){
				bottle.image.push(element.essence.bottle[i].image);
				element.essence.bottle[i].main.appendChild(element.essence.bottle[i].image);
				bottle.name.push(element.essence.bottle[i].name);
				element.essence.bottle[i].main.appendChild(element.essence.bottle[i].name);
				element.essence.main.appendChild(element.essence.bottle[i].main);
				if(i<(object.essence.length-1)){
					element.essence.char=createElement("div","personality-char");
					element.essence.char.innerHTML="+";
					element.essence.main.appendChild(element.essence.char);
				}
			}
			element.column.right.appendChild(element.essence.main);

			element.main.appendChild(element.column.right);
			element.main.appendChild(element.column.left);
			personalitybar.appendChild(element.main);

			me.personality.element.date.push(element.date);			
			me.personality.element.essence.push(bottle);

			
		}

		updatePersonality=(object)=>{
			for(let i=0;i<me.personality.hashtag.length;i++){
				if(me.personality.hashtag[i]==object.hashtag){
					for(let j=0;j<object.essence.length;j++){
						me.personality.element.essence[i].image[j].src="img/essence/"+object.essence[j]+".png";
						me.personality.element.essence[i].name[j].innerHTML=getEssenceName(object.essence[j])[0];
					}
					break;
				}
			}
		}

		initPersonalityCallback=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);

				if(!me.personality.is.switch){
					updateFragment(tmp.length);
				}

				for(let i=0;i<tmp.length;i++){
					addPersonality(tmp[i]);
				}
			}
			personalitybar.style.minHeight="0px";
		}

		getPersonalityCallback=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);

				if(me.bunny.personality==tmp.hashtag){
					me.bunny.personality=0;
					refreshBunny();
				}

				if(tmp.isnew){
					if(!me.personality.is.switch){
						addPersonality(tmp);
					}
					else{
						updatePersonalityData(tmp);
					}

					whatpersonalityigot.innerHTML="Jsem "+tmp.title+".";
				}
				else{
					if(!me.personality.is.switch){
						updatePersonality(tmp);
					}
					if(me.gender==1){
						whatpersonalityigot.innerHTML="Jsem "+tmp.title+". [Už ho znám.]";
					}
					else{
						whatpersonalityigot.innerHTML="Jsem "+tmp.title+". [Už ji znám.]";
					}
				}
				
				whatpersonalityigot.style.opacity=1;
				clearTimeout(me.personality.timeout);
				me.personality.timeout=setTimeout(()=>{
					whatpersonalityigot.style.opacity=0;
				},5000);
			}
		}

		makepersonality.onclick=()=>{
			if(me.essence.is.full){
				ajax("php/getPersonality.php","name="+me.name+"&hash="+me.hash+"&essence1="+me.essence.mix[0]+"&essence2="+me.essence.mix[1]+"&essence3="+me.essence.mix[2],getPersonalityCallback);
				for(let i=0;i<3;i++){
					mixessenceimg[i].src="img/essence/0.png";
					mixessencename[i].innerHTML="";
					mixessenceimg[i].style.cursor="default";
					me.essence.mix[i]=null;
				}
				refreshMix();
			}
		}

		me.personality.is.switch=false;
		personalityswitchbutton.onclick=()=>{
			if(me.partner.name.length>0){
				personalitybar.style.minHeight=personalitybar.clientHeight+"px";
				personalitybar.innerHTML="";
				if(me.personality.is.switch){
					me.personality.count=0;
					me.personality.is.switch=false;
					if(me.gender==1){
						personalityswitchbutton.innerHTML="Chci zobrazit její osobnosti.";
						personalityswitchbutton.style.backgroundColor="pink";
					}
					else{
						personalityswitchbutton.innerHTML="Chci zobrazit jeho osobnosti.";
						personalityswitchbutton.style.backgroundColor="skyblue";
					}
					ajax("php/initPersonality.php","name="+me.name+"&hash="+me.hash+"&ispartner=false",initPersonalityCallback);
				}
				else{
					her.personality.count=0;
					me.personality.is.switch=true;
					personalityswitchbutton.innerHTML="Chci zobrazit své osobnosti.";
					if(me.gender==1){
						personalityswitchbutton.style.backgroundColor="skyblue";
					}
					else{
						personalityswitchbutton.style.backgroundColor="pink";
					}
					mypersonalities.innerHTML="[Nezná žádnou osobnost.]";
					ajax("php/initPersonality.php","name="+me.name+"&hash="+me.hash+"&ispartner=true",initPersonalityCallback);
				}
				
			}
		}

		addEssence=(essence)=>{
			let element={};
			element.main=createElement("div","essence");
			element.img=createElement("img","essence-img");
			element.name=createElement("div","essence-name");
			element.img.src="img/essence/"+essence+".png";
			element.name.innerHTML=getEssenceName(essence)[0];
			element.main.appendChild(element.img);
			element.main.appendChild(element.name);

			let value;
			if(essence<10){
				value=0;
				me.essence.array[0].push(essence);
				essencerow[0].appendChild(element.main);
				refreshEssences(0);
			}
			else if(essence<100){
				value=1;
				me.essence.array[1].push(essence);
				essencerow[1].appendChild(element.main);
				refreshEssences(1);
			}
			else{
				value=2;
				me.essence.array[2].push(essence);
				essencerow[2].appendChild(element.main);
				refreshEssences(2);
			}

			element.main.onclick=()=>{
				if(me.essence.mix[value]!==null){
					addEssence(me.essence.mix[value]);
				}

				me.essence.array[value].splice(me.essence.array[value].indexOf(essence),1);
				essencerow[value].removeChild(element.main);
				mixessenceimg[value].src="img/essence/"+essence+".png";
				mixessencename[value].innerHTML=getEssenceName(essence)[0];
				mixessenceimg[value].style.cursor="pointer";
				me.essence.mix[value]=essence;
				refreshMix();
				refreshEssences(value);
			}

			me.book.add(essence,false);
		}

		letSnow=()=>{
			document.body.style.overflow="hidden";
			wintercurtain.style.zIndex=100;
			wintercurtain.style.opacity=1;

			if(me.location==2){
				system.time.stop();
			}

			setTimeout(()=>{
				document.body.style.backgroundColor="#e9e9eb";
				wintertag.style.zIndex=150;
				wintertag.style.display="block";

				if(me.glade.is.set){
					glade.clean();
					mytree.innerHTML="";
					me.glade.is.set=false;
					me.glade.is.open=false;
				}

				myscreen.style.display="none";
				wintercurtain.style.zIndex=-10;
				wintercurtain.style.opacity=0;
			},1000);
		}

		goHome.onclick=()=>{
			warmhouse.src="img/warmhouse.jpg";
			warmhousecurtain.src="img/warmhouse.jpg";

			warmhouse.style.cursor="pointer";
			warmhousecontenttag.style.display="block";
			cellarcontenttag.style.display="none";

			if(me.winterstory.is){
				ajax("php/winterstory.php","name="+me.name+"&hash="+me.hash);
				winterstorytag.style.display="block";
				warmhousecontenttag.style.display="none";
				backToGalaxyMain.style.display="none";
				warmhouse.style.cursor="default";

				setTimeout(()=>{
					printWinterStory();
				},2000);
			}

			letSnow();
		}

		refreshCellarSeeds=(seeds)=>{
			if(seeds==0){
				myseedscellar.innerHTML="[Nemám žádný <img class='plant-icon' src='img/plant.svg'>.]";
			}
			else{
				myseedscellar.innerHTML="[Mám "+seeds+" <img class='plant-icon' src='img/plant.svg'>.]";
			}

			cellarcost.innerHTML="Služba má svou cenu - "+me.cellar.cost+" <img class='plant-icon' src='img/plant.svg'>.";
			if(seeds<me.cellar.cost){
				me.cellar.can=false;
				cellarcost.style.color="darkred";
				cellarbutton.style.backgroundColor="tomato";
				cellarwarning.innerHTML="[Chybí mi "+Math.abs(seeds-me.cellar.cost)+".]";
				
			}
			else{
				me.cellar.can=true;
				cellarcost.style.color="darkgreen";
				cellarbutton.style.backgroundColor="#5ab300";
				cellarwarning.innerHTML="";
			}
		}
		
		gotocellar.onclick=()=>{
			me.cellar.is=true;

			warmhouse.style.cursor="default";
			warmhouse.src="img/cellar.png";
			warmhousecurtain.src="img/cellar.png";

			warmhousecontenttag.style.display="none";
			cellarcontenttag.style.display="block";

			refreshCellarSeeds(me.seeds.count);
			letSnow();
		}

		backfromblackhole.onclick=()=>{
			clearInterval(me.matrix.interval);
			me.matrix.counter=1;
			me.matrix.trigger=0;
			matrix.style.display="none";
			matrix.style.opacity="0";
			blackholetag.style.opacity=0;
			myscreen.style.display="block";

			if(me.in){
				me.glade.is.open=true;
				me.glade.is.init=true;
				me.console.window.scrollTo(0,me.console.window.scrollHeight);
				if(me.connection.in){
					me.connection.window.scrollTo(0,me.connection.window.scrollHeight);
				}
			}
			
			setTimeout(()=>{
				blackholecurtain.style.borderRadius="150px";
				blackholecurtain.style.width="300px";
				blackholecurtain.style.height="300px";
				blackholecurtain.style.top="250px";
				blackholecurtain.style.marginLeft="-150px";

				setTimeout(()=>{
					blackholetag.style.zIndex=-10;
					curtain.style.opacity=0;
					curtain.style.zIndex=-10;
					document.body.style.overflow="auto";
					blackholetag.scrollTo(0,0);
				},1000);
			},500);
		}

		backToGalaxy.onclick=()=>{
			me.cellar.is=false;
			wintertag.style.opacity=0;
			myscreen.style.display="block";
			document.body.style.backgroundColor="rgb(50,50,50)";
			me.glade.is.open=true;
			me.glade.is.init=true;
			me.console.window.scrollTo(0,me.console.window.scrollHeight);
			if(me.connection.in){
				me.connection.window.scrollTo(0,me.connection.window.scrollHeight);
			}

			if(me.snow.is){
				clearInterval(me.snow.interval);
				me.snow.field.style.opacity="0.2";
				me.snow.is=false;
			}

			if(me.location==2){
				system.time.start();
			}

			setTimeout(()=>{
				document.body.style.overflow="auto";				
				wintertag.scrollTo(0,0);
				wintertag.style.zIndex=-10;
				wintertag.style.display="none";
				wintertag.style.opacity=1;
			},1000);
		}

		markHerb=(input)=>{
			me.herb.marked=input;
			herb[input].style.opacity=1;
			let colors=["red","orange","darkgoldenrod","green","blue","purple"];

			for(let j=0;j<herb.length;j++){
				if(input==j){
					herb[j].style.border="solid 2px "+colors[input];
					herb[j].style.top="-1px";
				}
				else{
					herb[j].style.border="solid 1px black";
					herb[j].style.top="0px";
				}
			}
		}

		me.string.tea={};
		me.string.tea.plural=[];
		me.string.tea.singular=[];
		me.string.tea.plural[0]="Pampeliškovo";
		me.string.tea.singular[0]="Pampeliškový";
		me.string.tea.plural[1]="Mateřídouškovo";
		me.string.tea.singular[1]="Mateřídouškový";
		me.string.tea.plural[2]="Černo";
		me.string.tea.singular[2]="Černý";
		me.string.tea.plural[3]="Mátovo";
		me.string.tea.singular[3]="Mátový";
		me.string.tea.plural[4]="Heřmánkovo";
		me.string.tea.singular[4]="Heřmánkový";
		me.string.tea.plural[5]="Levandulovo";
		me.string.tea.singular[5]="Levandulový";

		me.bunny={};
		me.bunny.interval=null;
		me.bunny.frame=0;
		me.bunny.hold=0;
		me.bunny.is={};
		me.bunny.is.active=true;
		me.bunny.tea=0;
		me.bunny.personality=0;

		refreshBunny=()=>{
			bunnydecision[0].style.display="inline-block";
			bunnydecision[1].style.display="inline-block";
			bunnytext.style.margin="15px";
			bunnytext.innerHTML="Chceš další radu?"; 
			bunnyessencerow.style.display="none";
			bunnyherbrow.style.display="none";
		}

		bunnydecision[0].style.backgroundColor="#5ab300";
		bunnydecision[0].onclick=()=>{
			if(me.bunny.is.active){
				bunnydecision[0].style.display="none";
				bunnydecision[1].style.display="none";
				
				let hint=getHint(me.personality.hashtag,me.book.array);

				if(hint[0]){
					bunnytext.style.margin="0px";
					bunnytext.innerHTML="Zkus smíchat třeba"; 
					bunnyessenceimg[0].src="img/essence/"+hint[1][0]+".png";
					bunnyessencename[0].innerHTML="&nbsp;"+getEssenceName(hint[1][0])[1]+",";
					bunnyessenceimg[1].src="img/essence/"+hint[1][1]+".png";
					bunnyessencename[1].innerHTML=getEssenceName(hint[1][1])[1];
					bunnyessenceimg[2].src="img/essence/"+hint[1][2]+".png";
					bunnyessencename[2].innerHTML="a "+getEssenceName(hint[1][2])[1]+".";
					me.bunny.personality=hint[2];
					bunnyessencerow.style.display="block";
				}
				else{
					bunnyelement[0].style.display="none";
					bunnychar[0].style.display="none";
					bunnyelement[1].style.display="none";
					bunnychar[1].style.display="none";
					bunnyelement[2].style.display="none";

					if(hint[1].length==1){
						bunnytext.style.margin="15px";
						bunnytext.innerHTML="Udělej si třeba<br>"+me.string.tea.singular[hint[1][0]-1]+" čaj.";
						bunnyelement[0].style.display="inline-block";
						bunnyelement[0].src="img/e"+hint[1][0]+".png";
						me.bunny.tea=hint[1][0];
					}
					else if(hint[1].length==2){
						bunnytext.style.margin="20px";
						bunnytext.innerHTML="Udělej si třeba čaj.";
						bunnyelement[0].style.display="inline-block";
						bunnyelement[0].src="img/e"+hint[1][0]+".png";
						bunnychar[0].style.display="inline-block";
						bunnyelement[1].style.display="inline-block";
						bunnyelement[1].src="img/e"+hint[1][1]+".png";
						me.bunny.tea=parseInt(toString(hint[1][0])+toString(hint[1][1]));
					}
					else if(hint[1].length==3){
						bunnytext.style.margin="20px";
						bunnytext.innerHTML="Udělej si třeba čaj.";
						bunnyelement[0].style.display="inline-block";
						bunnyelement[0].src="img/e"+hint[1][0]+".png";
						bunnychar[0].style.display="inline-block";
						bunnyelement[1].style.display="inline-block";
						bunnyelement[1].src="img/e"+hint[1][1]+".png";
						bunnychar[1].style.display="inline-block";
						bunnyelement[2].style.display="inline-block";
						bunnyelement[2].src="img/e"+hint[1][2]+".png";
						me.bunny.tea=parseInt(toString(hint[1][0])+toString(hint[1][1])+toString(hint[1][2]));
					}
					else{
						bunnytext.style.margin="39px 0px 0px 0px";
						bunnytext.innerHTML="Už ti nemám jak poradit.<br>Gratuluji.";
					}
					bunnyherbrow.style.display="block";
				}
			}
		}

		bunnydecision[1].style.backgroundColor="tomato";
		bunnydecision[1].onclick=()=>{
			if(me.bunny.is.active){
				me.bunny.is.active=false;
				bubble[0].style.opacity=0;
				bunnydecision[0].style.cursor="default";
				bunnydecision[1].style.cursor="default";
				bunny.style.cursor="pointer";
			}
		}

		bunny.onclick=()=>{
			if(!me.bunny.is.active){
				me.bunny.is.active=true;
				bunny.style.cursor="default";
				bunnydecision[0].style.cursor="pointer";
				bunnydecision[1].style.cursor="pointer";
				bubble[0].style.opacity=1;
			}
		}

		printHints=()=>{
			me.herb.is.hint=true;
			cardTextHeader.innerHTML="Všude dobře, doma nejlépe.";
			cardText[0].innerHTML="Dělávám si odvar z jedné, dvou nebo tří bylin.<br>Každá kombinace má své vlastní kouzlo.<br>Jaký čaj si udělám dnes?";
			cardText[1].innerHTML="Mám králíka jako domácího mazlíčka.<br>Běhá po domě jako splašený.<br>Dává nápovědy.";
			cardRecommend.innerHTML="Lze objevit až 41 různých druhů esencí.";
			chakra.style.display="none";
			element.style.display="none";
			figure.style.display="none";
			bubble[0].style.display="block";
			bunny.style.display="block";
			bunny.src="img/bunny/frame_0_delay-0.1s.gif";

			myseedswarmhouse.style.display="none";
			maketea.style.display="none";
			herbcost.style.display="none";
			whatessenceigot.style.display="none";

			me.bunny.interval=setInterval(()=>{
				if(me.bunny.hold>0){
					me.bunny.hold--;
				}
				else{
					me.bunny.frame++;
					bunny.src="img/bunny/frame_"+me.bunny.frame+"_delay-0.1s.gif";

					if(me.bunny.frame==18){
						if(Math.floor(Math.random()*2)==0){
							me.bunny.frame=0;
						}
						me.bunny.hold=10+Math.floor(Math.random()*20);
					}
					else if(me.bunny.frame==35){
						me.bunny.frame=0;
					}
				}
			},100);
		}

		printHerb=(input)=>{
			if(me.herb.is.hint){
				me.herb.is.hint=false;

				me.bunny.frame=0;
				me.bunny.hold=0;
				clearInterval(me.bunny.interval);

				chakra.style.display="block";
				element.style.display="block";
				figure.style.display="block";
				bubble[0].style.display="none";
				bunny.style.display="none";

				myseedswarmhouse.style.display="block";
				maketea.style.display="block";
				herbcost.style.display="block";
				whatessenceigot.style.display="block";
			}

			markHerb(input);
			element.src="img/e"+(input+1)+".png";

			switch(input){
				case 0:
					cardTextHeader.innerHTML="Kořen Pampelišky učí samostatnosti.";
					cardText[0].innerHTML="Představuje bezpečí a ochranu.<br>Vyzařuje vitalitu a disciplínu.<br>Zahání strach. Tiší pláč.<br>Pomáhá se prosadit.<br>Působí rázně.<br><br>Rozvíjí smysl čich.<br>Otevírá element země.<br>Léčí záněty, hojí rány.";
					cardText[1].innerHTML="Škatulkuje jako prostor.<br>Noří se. Obaluje. Drží. Činí. Je.<br>Symbolizuje ho žížala, sysel, jezevec, kanec nebo býk.";
					cardRecommend.innerHTML="Doporučuje se při těžkých životních situacích.";
					figure.src="img/body1.png";
					chakra.style.boxShadow="0px 0px 40px 30px rgb(255,0,0)";
					chakra.style.background="rgba(255,0,0,0.7)";
					chakra.style.top="115px";
					break;
				case 1:
					cardTextHeader.innerHTML="Nať Mateřídoušky učí zvídavosti.";
					cardText[0].innerHTML="Představuje smysl a chuť do života.<br>Vyzařuje klid, něhu a touhu.<br>Zahání lítost. Tiší smutek.<br>Pomáhá prostě plynout.<br>Působí sympaticky.<br><br>Rozvíjí smysl chuť.<br>Otevírá element vody.<br>Léčí trávení, nadýmání.";
					cardText[1].innerHTML="Proudí jako čas.<br>Točí se. Syčí. Bublá. Teče. Jí.<br>Symbolizuje ji pavouk, rak, krab, štír nebo ryba.";
					cardRecommend.innerHTML="Doporučuje se při každé společenské události.";
					figure.src="img/body2.png";
					chakra.style.boxShadow="0px 0px 40px 30px rgb(255,165,0)";
					chakra.style.background="rgba(255,165,0,0.7)";
					chakra.style.top="105px";
					break;
				case 2:
					cardTextHeader.innerHTML="List Čajovníku učí síle.";
					cardText[0].innerHTML="Představuje sebedůvěru pro dosahování cílů.<br>Vyzařuje radost, vůli, cit a jas.<br>Zahání vztek. Tiší křik.<br>Pomáhá se projevit.<br>Působí rozhodně.<br><br>Rozvíjí smysl zrak.<br>Otevírá element ohně.<br>Léčí spalování, křeče.";
					cardText[1].innerHTML="Kmitá jako elektřina.<br>Tře se. Bzučí. Praská. Hřeje. Ví.<br>Symbolizuje ho včela, beran, liška, vlk nebo lev."; 
					cardRecommend.innerHTML="Doporučuje se při kreativní činnosti.";
					figure.src="img/body3.png";
					chakra.style.boxShadow="0px 0px 40px 30px rgb(255,255,0)";
					chakra.style.background="rgba(255,255,0,0.7)";
					chakra.style.top="90px";
					break;
				case 3:
					cardTextHeader.innerHTML="List Máty učí lásce.";
					cardText[0].innerHTML="Představuje krásu bytí.<br>Vyzařuje starost, péči a mír.<br>Zahání samotu. Řeší deprese.<br>Pomáhá se otevřít.<br>Působí vyrovnaně.<br><br>Rozvíjí smysl hmat.<br>Otevírá element vzduchu.<br>Léčí kašel, srdce.";
					cardText[1].innerHTML="Přitahuje jako magnet.<br>Tluče. Fučí. Šustí. Pojí. Bdí.<br>Symbolizuje ji labuť, koala, jelen, slon nebo holub.";
					cardRecommend.innerHTML="Doporučuje se při odpočinku a regeneraci.";
					figure.src="img/body4.png";
					chakra.style.boxShadow="0px 0px 40px 30px rgb(173,255,47)";
					chakra.style.background="rgba(173,255,47,0.7)";
					chakra.style.top="75px";
					break;
				case 4:
					cardTextHeader.innerHTML="Úbor Heřmánku učí bystrosti.";
					cardText[0].innerHTML="Představuje vědomí a schopnost vyjádřit se.<br>Vyzařuje vzpomínky, myšlenky a odpovědi.<br>Zahání iluze. Řeší nedorozumění.<br>Pomáhá rozlišovat pravdu.<br>Působí rozumně.<br><br>Rozvíjí smysl sluch.<br>Otevírá element akáši.<br>Léčí rýmu, hlasivky.";
					cardText[1].innerHTML="Skládá souvislosti do mozaiky.<br>Roste. Volí. Vede. Září. Dbá. Zní.<br>Symbolizuje ho můra, delfín, opice, sova nebo orel.";
					cardRecommend.innerHTML="Doporučuje se při plánování a koncentraci.";
					figure.src="img/body5.png";
					chakra.style.boxShadow="0px 0px 40px 30px rgb(135,206,235)";
					chakra.style.background="rgba(135,206,235,0.7)";
					chakra.style.top="55px";
					break;
				case 5:
					cardTextHeader.innerHTML="Květ Levandule učí moudrosti.";
					cardText[0].innerHTML="Představuje hlubokou atmosféru a schopnost imaginace.<br>Vyzařuje symboly, otázky a nové nápady.<br>Zahání zoufalství. Řeší traumata.<br>Pomáhá vnímat podstatu.<br>Působí terapeuticky.<br><br>Rozvíjí smysl intuice.<br>Otevírá element éteru.<br>Léčí migrénu, spánek.";
					cardText[1].innerHTML="Otevírá dveře zázrakům.<br>Kvete. Voní. Inspiruje. Mění. Sní.<br>Symbolizuje ji vážka, motýl, had, medúza nebo kos.";
					cardRecommend.innerHTML="Doporučuje se při snění a meditaci.";
					figure.src="img/body6.png";
					chakra.style.boxShadow="0px 0px 40px 30px rgb(238,130,238)";
					chakra.style.background="rgba(238,130,238,0.7)";
					chakra.style.top="45px";
					break;
			}
		}

		me.tea={};
		me.tea.is=false;
		me.tea.cost=0;

		refreshTea=()=>{
			if(me.herb.array.length==1){
				maketea.innerHTML="Udělám si "+me.string.tea.singular[me.herb.array[0]]+" čaj.";
				me.tea.cost=10;
			}
			else if(me.herb.array.length==2){
				maketea.innerHTML="Udělám si "+me.string.tea.plural[me.herb.array[1]]+"-"+me.string.tea.singular[me.herb.array[0]]+" čaj.";
				me.tea.cost=20;
			}
			else{
				maketea.innerHTML="Udělám si "+me.string.tea.plural[me.herb.array[2]]+"-"+me.string.tea.plural[me.herb.array[1]]+"-"+me.string.tea.singular[me.herb.array[0]]+" čaj.";
				me.tea.cost=30;
			}

			if(me.seeds.count==0){
				myseedswarmhouse.innerHTML="[Nemám žádný <img class='plant-icon' src='img/plant.svg'>.]";
			}
			else{
				myseedswarmhouse.innerHTML="[Mám "+me.seeds.count+" <img class='plant-icon' src='img/plant.svg'>.]";
			}
			
			let string="";
			if(me.tea.cost==10){
				string="Bylina";
			}
			else{
				string="Byliny";
			}

			if(me.seeds.count<me.tea.cost){
				me.tea.is=false;
				maketea.style.backgroundColor="tomato";
				herbcost.style.color="darkred";
				herbcost.innerHTML=string+" stojí "+me.tea.cost+" <img class='plant-icon' src='img/plant.svg'>. [Chybí mi "+(me.tea.cost-me.seeds.count)+".]";
			}
			else{
				me.tea.is=true;
				maketea.style.backgroundColor="#5ab300";
				herbcost.style.color="darkgreen";
				herbcost.innerHTML=string+" stojí "+me.tea.cost+" <img class='plant-icon' src='img/plant.svg'>.";
			}
		}

		me.herb={};
		me.herb.marked=null;
		me.herb.array=[];
		me.herb.is={};
		me.herb.is.hint=false;

		printHints();
		cardInformation.style.display="block";
		
		for(let i=0;i<6;i++){
			herb[i].onclick=()=>{
				if(!me.herb.array.includes(i)){
					if(me.herb.array.length<3){
						me.herb.array.push(i);
						printHerb(i);
						refreshTea();
					}
					else{
						herb[me.herb.array[0]].style.opacity=0.4;
						me.herb.array.shift();
						me.herb.array.push(i);
						printHerb(i);
						refreshTea();
					}
				}
				else{
					if(me.herb.marked==i){
						me.herb.array.splice(me.herb.array.indexOf(i),1);
						herb[i].style.opacity=0.4;

						if(me.herb.array.length==0){
							for(let i=0;i<herb.length;i++){
								herb[i].style.border="solid 1px black";
								herb[i].style.top="0px";
							}
							printHints();
						}
						else{
							printHerb(me.herb.array[0]);
							refreshTea();
						}
					}
					else{
						printHerb(i);
						refreshTea();
					}
				}
			}
		}

		getEssenceCallback=(result)=>{
			if(result.length>0){
				let essence=parseInt(result);
				if(me.gender==1){
					whatessenceigot.innerHTML="Našel jsem "+getEssenceName(essence)[1]+".";
				}
				else{
					whatessenceigot.innerHTML="Našla jsem "+getEssenceName(essence)[1]+".";
				}
				
				whatessenceigot.style.opacity=1;
				clearTimeout(me.whatigot);
				me.whatigot=setTimeout(()=>{
					whatessenceigot.style.opacity=0;
				},2500);

				if(me.bunny.tea==essence){
					me.bunny.tea=0;
					refreshBunny();
				}

				refreshSeeds(toString(me.seeds.count-me.tea.cost));
				addEssence(essence);
				refreshTea();
			}
		}

		maketea.onclick=()=>{
			if(me.tea.is){
				me.herb.array.sort();

				let string="";
				for(let i=0;i<me.herb.array.length;i++){
					string+=(me.herb.array[i]+1);
				}

				ajax("php/getEssence.php","name="+me.name+"&hash="+me.hash+"&essence="+string,getEssenceCallback);
			}
		}

		initEssenceCallback=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);

				for(let i=0;i<tmp[0].length;i++){
					me.book.add(tmp[0][i],true);
				}
				for(let i=0;i<tmp[1].length;i++){
					addEssence(tmp[1][i]);
				}
			}
		}

		me.string.winterstory=[];
		me.string.winterstory[0]="Utekl jsem do přírody.";
		me.string.winterstory[1]="Dům zapadl sněhem.";
		me.string.winterstory[2]="Dole na mne čeká láska.";
		me.string.winterstory[3]="Sázím život na vzdálené planety.";
		me.string.winterstory[4]="Piji čaje a učím se z vědomí bylin.";
		me.string.winterstory[5]="Hledám ztracené části své duše.";
		me.string.winterstory[6]="Vracím se zpátky mezi živé!";	

		me.winterstory={};
		me.winterstory.interval=null;
		me.winterstory.letter=0;
		me.winterstory.row=0;
		me.winterstory.hold=0;
		me.winterstory.is=false;

		printWinterStory=()=>{
			me.winterstory.letter=0;
			me.winterstory.row=0;
			me.winterstory.hold=0;

			me.winterstory.interval=setInterval(()=>{
				if(me.winterstory.hold>0){
					me.winterstory.hold--;
				}
				else{
					winterstory[me.winterstory.row].innerHTML+=me.string.winterstory[me.winterstory.row][me.winterstory.letter];
					me.winterstory.letter++;
					if(me.winterstory.letter==me.string.winterstory[me.winterstory.row].length){
						me.winterstory.letter=0;
						me.winterstory.row++;
						me.winterstory.hold=10;
						if(me.winterstory.row==me.string.winterstory.length){
							clearInterval(me.winterstory.interval);
							winterstorybutton.style.display="block";
							me.winterstory.is=false;
						}
					}
				}
			},70);

			setTimeout(()=>{
				wintertag.onclick=()=>{
					if(me.winterstory.is){
						clearInterval(me.winterstory.interval);
						winterstorybutton.style.display="block";
						me.winterstory.is=false;

						for(let i=0;i<winterstory.length;i++){
							winterstory[i].innerHTML=me.string.winterstory[i];
						}
					}
				};
			},100);
		}
		
		warmhouse.onclick=()=>{
			if(!me.winterstory.is && !me.cellar.is){
				me.winterstory.is=true;
				printWinterStory();
				warmhousecontenttag.style.display="none";
				backToGalaxyMain.style.display="none";
				winterstorytag.style.display="block";
				warmhouse.style.cursor="default";
			}
		}
		
		winterstorybutton.onclick=()=>{
			warmhousecontenttag.style.display="block";
			backToGalaxyMain.style.display="block";
			winterstorytag.style.display="none";
			warmhouse.style.cursor="pointer";

			wintertag.onclick=()=>{
				return true;
			};

			for(let i=0;i<winterstory.length;i++){
				winterstory[i].innerHTML="";
			}
			winterstorybutton.style.display="none";
		}

		var laniakea={};
		laniakea.element=document.getElementById("laniakea");
		laniakea.memory={};
		laniakea.memory.left=((693-400)*-1);
		laniakea.memory.top=((429-400)*-1);
		laniakea.light=[];

		laniakea.element.style.marginLeft="-6965px";
		laniakea.element.style.marginTop="-3925px";

		laniakea.clean=()=>{
			laniakea.element.innerHTML="";
		}

		laniakea.add=function(){
			let array=[];
			for(let i=0;i<arguments.length;i++){
				array.push(arguments[i]);
			}
			laniakea.light.push(array);
		}
		
		laniakea.add(696,341,55,-15,7,1.2,"violet","Andromeda","NGC 224","Andromedy",2,true,400,400);
		laniakea.add(630,453,0,0,7,1,"white","Mrak","LMC","Mečouna",1,true,367,364);
		laniakea.add(644,520,0,0,7,1,"#DDDBEA","Sombrero","NGC 4594","Panny",3,true,446,429);
		laniakea.add(709,290,20,-20,7,1,"#8acdf0","Oceán","PGC 8961","Andromedy",5,true,354,484);
		laniakea.add(445,564,0,0,7,1,"#8E8899","Trojúhelník","NGC 598","Trojúhelníku",4,true,400,400);
		laniakea.add(551,179,55,-10,7,1,"#FDCCFD","Větrník","NGC 5457","Velké medvědice",7,true,400,400);
		laniakea.add(371,622,40,0,7,1,"#76513F","Ryby","NGC 2442","Létajících ryb",6,true,359,446);
		laniakea.add(510,127,50,-10,7,1,"white","Kolo","PGC 2248","Sochaře",16,true,463,450);
		laniakea.add(275,620,44,-15,7,1,"#CEC37F","Vejce","NGC 6028","Hada",8,true,400,400);
		laniakea.add(377,129,50,-30,7,1,"#F8E9D2","Berenika","NGC 4414","Bereniky",11,true,400,400);
		laniakea.add(163,427,20,-35,7,1,"#BE9DBF","Fialka","NGC 3031","Velké medvědice",10,true,396,394);
		laniakea.add(280,108,50,-30,7,1,"white","Pulec","PGC 57129","Draka",14,true,248,205);
		laniakea.add(219,165,20,-20,7,1,"#AA8072","Vír","NGC 5194","Psů",12,true,356,392);
		laniakea.add(182,570,55,-15,7,1.2,"orange","Tykadla","NGC 4038","Havrana",13,false,400,400);
		laniakea.add(131,307,0,-10,7,1,"white","Slunečnice","NGC 5055","Psů",15,true,396,397);
		laniakea.add(293,239,0,0,7,1,"black","Jiskra","","",9,false,400,400);

		var galaxy={};
		galaxy.element=document.getElementById("galaxy");
		galaxy.id=0;
		galaxy.name="Mléčná dráha";
		galaxy.constellation="";
		galaxy.catalog="";
		galaxy.rotation={};
		galaxy.rotation.x=60;
		galaxy.rotation.y=-20;
		galaxy.scale=1.3;		

		galaxy.blackhole={};
		galaxy.blackhole.is=true;
		galaxy.blackhole.x=400;
		galaxy.blackhole.y=400;

		galaxy.distance={};
		galaxy.distance.short=[1,4,3,15];
		galaxy.distance.medium=[11,14];
		galaxy.distance.long=[7,6,16,8];

		galaxy.memory={};
		galaxy.star=[];

		galaxy.element.style.transform="rotateX("+galaxy.rotation.x+"deg) rotateY("+galaxy.rotation.y+"deg) scale(1)";

		galaxy.clean=()=>{
			galaxy.star=[];
			galaxy.element.innerHTML="";
		}

		var anomaly={};
		anomaly.element=document.getElementById("anomaly");
		anomaly.rotation={};
		anomaly.rotation.x=0;
		anomaly.rotation.y=0;
		anomaly.scale=0.7;
		anomaly.memory={};

		anomaly.pleiades=["Alcyone","Atlas","Electra","Maia","Merope"];
		anomaly.orion=["Alnitak"];

		anomaly.clean=()=>{
			anomaly.element.innerHTML="";
		}

		var system={};
		system.element=document.getElementById("system");
		system.source={};
		system.planet=[];			
		system.time={};
		system.rotation={};
		system.rotation.x=70;
		system.rotation.y=-20;
		system.time.start=()=>{
			system.time.interval=setInterval(()=>{
				system.time.tick();
			},50);
		}
		system.time.stop=()=>{
			clearInterval(system.time.interval);
		}

		system.redgiants=["Monocerotis","Antares"];
		system.whitedwarfs=["Kočičí oko","Eskymák"];

		system.restep=true;
		system.memory={};
		system.memory.step=[];
		system.memory.restep=[];
		system.memory.relap=[];
		system.clean=()=>{
			system.time.stop();
			system.planet=[];
			system.element.innerHTML="";

			for(let i=0;i<8;i++){
				system.memory.step[i]=[];
				for(let j=0;j<8;j++){
					system.memory.step[i][j]=0;
				}
			}
		}
		system.clean();

		var core={};	
		core.element=document.getElementById("core");
		core.open=true;
		core.memory={};

		printGalaxyRequest=(tmp,anomaly)=>{
			data.print(" ");
			if(tmp.current==0){
				data.print("Neroste ve mne žádný strom.");

				if(tmp.capacity==1){
					data.print("Přitom unesu 1 strom.");
				}
				else if(tmp.capacity>1 && tmp.capacity<5){
					data.print("Přitom unesu "+tmp.capacity+" stromy.");
				}
				else{
					data.print("Přitom unesu až "+tmp.capacity+" stromů.");
				}
			}
			else{
				if(tmp.current==1){
					data.print("Právě ve mne roste 1 strom.");
				}
				else if(tmp.current>1 && tmp.current<5){
					data.print("Právě ve mne rostou "+tmp.current+" stromy.");
				}
				else{
					data.print("Právě ve mne roste "+tmp.current+" stromů.");
				}

				if(tmp.capacity==0){
					data.print("Jsem plná stromů.");
				}
				else if(tmp.capacity==1){
					data.print("Unesu ještě 1 strom.");
				}
				else if(tmp.capacity>1 && tmp.capacity<5){
					data.print("Unesu ještě "+tmp.capacity+" stromy.");
				}
				else{
					data.print("Unesu ještě "+tmp.capacity+" stromů.");
				}
			}
			
			if(tmp.capacity>0){
				if(tmp.request=="Monocerotis" && anomaly){
					data.print("Žádám o strom.");
				}
				else if(tmp.request=="Plejády"){
					data.print("Plejády žádají o strom.");
				}
				else{
					data.print(tmp.request+" žádá o strom.");
				}
			}
		}

		getGalaxy=(input)=>{
			if(input.length>0){
				let tmp=JSON.parse(input);
				let starcount=0;

				for(let i=0;i<tmp[1].length;i++){
					setStar(tmp[1][i].x,tmp[1][i].y,(tmp[1][i].size/10),tmp[1][i].color,tmp[1][i].name,tmp[1][i].type,false);
					galaxy.star.push(tmp[1][i].name);

					if(tmp[1][i].type==1){
						starcount++;
					}
				}

				if(me.init){
					if(tmp[0].progress==0){
						data.add("Jsem spirálovitá galaxie.");
						data.add("Říkají mi "+galaxy.name+".");
					}
					else{
						data.append("Jsem spirálovitá galaxie");
						data.print(" "+galaxy.name+".");
					}
				}
				else{
					if(galaxy.id==0 && tmp[0].progress==0){
						data.print("Jsem spirálovitá galaxie.");
						data.print("Říkají mi "+galaxy.name+".");
					}
					else if(galaxy.id==13){
						data.print("Jsem miš maš dvou galaxií "+galaxy.name+".");
					}
					else if(galaxy.id==9){
						data.print("Jsem světlo na konci tunelu.");
						data.print("Říkají mi také naděje.");
						data.print("Mám velkou sílu.");
						data.print("Spím v tobě");
						data.print("a čekám.");
					}
					else if(galaxy.id==16){
						data.print("Jsem čočková galaxie "+galaxy.name+".");	
					}
					else if(galaxy.id==8){
						data.print("Jsem prstencová galaxie "+galaxy.name+".");						
					}
					else{
						data.print("Jsem spirálovitá galaxie "+galaxy.name+".");						
					}

					if(galaxy.constellation.length>0){
						data.print("Patřím do souhvězdí "+galaxy.constellation+".");
					}
					if(galaxy.catalog.length>0){
						data.print("Říkají mi také "+galaxy.catalog+".");
					}
				}

				if(starcount>0){
					let string=["",""];
					let dot=".";
					if(tmp[0].progress>0 && galaxy.id==0){
						if(tmp[0].progress<3){
							dot="";
						}
						else{
							dot=",";
						}
					}
					
					if(me.init){
						if(tmp[0].progress==0){
							if(starcount==1){
								data.add("Obsahuji hvězdu.");
							}
							else if(starcount>1 && starcount<5){
								data.add("Obsahuji "+starcount+" hvězdy.");
							}
							else{
								data.add("Obsahuji "+starcount+" hvězd.");
							}
						}
						else{
							if(starcount==1){
								data.append("Obsahuji hvězdu"+dot);
							}
							else if(starcount>1 && starcount<5){
								data.append("Obsahuji "+starcount+" hvězdy"+dot);
							}
							else{
								data.append("Obsahuji "+starcount+" hvězd"+dot);
							}
						}
					}
					else{
						if(starcount==1){
							string[0]+="Obsahuji hvězdu"+dot;
						}
						else if(starcount>1 && starcount<5){
							string[0]+="Obsahuji "+starcount+" hvězdy"+dot;
						}
						else{
							string[0]+="Obsahuji "+starcount+" hvězd"+dot;
						}
					}

					let nebulas=0;
					let clusters=0;
					
					if(tmp[0].progress>0 && galaxy.id==0){
						if(tmp[0].progress>7){
							nebulas=tmp[0].progress-2;
							clusters=2;
						}
						else if(tmp[0].progress>2){
							nebulas=tmp[0].progress-1;
							clusters=1;
						}
						else{
							nebulas=tmp[0].progress;
						}

						if(nebulas>7){
							nebulas=7;
						}

						if(nebulas==1){
							string[0]+=" a mlhovinu.";
						}
						else if(tmp[0].progress<3){
							string[0]+=" a "+nebulas+" mlhoviny.";
						}
						else if(nebulas<5){
							string[0]+=" "+nebulas+" mlhoviny";
						}
						else{
							string[0]+=" "+nebulas+" mlhovin";
						}
						
						if(clusters==1){
							string[1]+=" a také hvězdokupu!";
						}
						else if(clusters==2){
							string[1]+=" a také 2 hvězdokupy!";
						}
					}

					if(string[0].length>0){
						data.print(string[0]);
					}

					if(string[1].length>0){
						data.print(string[1]);
					}
				}

				if(me.in){
					if(tmp[0].progress>9){
						data.setbackbutton();
					}
					else{
						printCycle(tmp[0].cycle,false);
					}

					if(starcount>0){
						printGalaxyRequest(tmp[0],false);
					}
				}

				if(me.init){
					me.init=false;
				}
			}
		}

		setGalaxy=()=>{
			galaxy.clean();
			if(galaxy.blackhole.is){
				setStar(galaxy.blackhole.x,galaxy.blackhole.y,14,"black","Černá díra",0,false);
			}

			if(me.in){
				ajax("php/getGalaxy.php","name="+me.name+"&hash="+me.hash+"&galaxy="+galaxy.id,getGalaxy);
			}
			else{
				ajax("php/getGalaxy.php","galaxy="+galaxy.id,getGalaxy);
			}
		}

		printSystemRequest=(tmp,pronoun,verb,single,count)=>{
			data.print(" ");

			if(tmp[2].current==0){
				data.print("Neroste v "+pronoun+" žádný strom.");

				if(tmp[2].capacity==1){
					data.print("Přitom u"+verb+" 1 strom.");
				}
				else if(tmp[2].capacity>1 && tmp[2].capacity<5){
					data.print("Přitom u"+verb+" "+tmp[2].capacity+" stromy.");
				}
				else{
					data.print("Přitom u"+verb+" až "+tmp[2].capacity+" stromů.");
				}
			}
			else{
				if(tmp[2].current==1){
					data.print("Právě v "+pronoun+" roste 1 strom.");
				}
				else if(tmp[2].current>1 && tmp[2].current<5){
					data.print("Právě v "+pronoun+" rostou "+tmp[2].current+" stromy.");
				}
				else{
					data.print("Právě v "+pronoun+" roste "+tmp[2].current+" stromů.");
				}

				if(tmp[2].capacity==0){
					if(single){
						data.print("Je plná stromů.");
					}
					else{
						data.print("Jsou plné stromů.");
					}
				}
				else if(tmp[2].capacity==1){
					data.print("U"+verb+" ještě 1 strom.");
				}
				else if(tmp[2].capacity>1 && tmp[2].capacity<5){
					data.print("U"+verb+" ještě "+tmp[2].capacity+" stromy.");
				}
				else{
					data.print("U"+verb+" ještě "+tmp[2].capacity+" stromů.");
				}
			}
			
			if(tmp[2].capacity>0){
				if(count==1){
					data.print("Žádá o strom.");
				}
				else{
					data.print(tmp[2].request+" žádá o strom.");
				}
			}
		}

		printStar=(text)=>{
			if(system.redgiants.includes(text)){
				return "Jsem červený obr "+text+".";
			}
			else if(system.whitedwarfs.includes(text)){
				return "Jsem bílý trpaslík "+text+".";
			}
			else{
				return "Jsem hvězda "+text+".";
			}
		}

		initSystemData=(tmp)=>{
			data.add(printStar(tmp[0][0].name));

			if(tmp[0][0].constellation.length>1){
				data.add("Patřím do souhvězdí "+tmp[0][0].constellation+".");
			}

			if(tmp[1].length==0){
				data.add("Nekrouží kolem mne žádná planeta.");
			}
			else{
				let pronoun="nich";
				let verb="nesou";
				let single=false;
				if(tmp[1].length==1){
					data.add("Krouží kolem mne 1 planeta.");
					pronoun="ní";
					verb="nese";
					single=true;
				}
				else if(tmp[1].length>1 && tmp[1].length<5){
					data.add("Krouží kolem mne "+tmp[1].length+" planety.");
				}
				else{
					data.add("Krouží kolem mne "+tmp[1].length+" planet.");
				}

				if(me.in){
					printSystemRequest(tmp,pronoun,verb,single,tmp[1].length);
				}
			}
			data.setbackbutton();
		}

		

		printSystemData=(tmp)=>{
			data.print(printStar(tmp[0][0].name));

			if(tmp[0][0].constellation.length>1){
				data.print("Patřím do souhvězdí "+tmp[0][0].constellation+".");
			}

			if(tmp[1].length==0){
				data.print("Nekrouží kolem mne žádná planeta.");
			}
			else{
				let pronoun="nich";
				let verb="nesou";
				let single=false;
				if(tmp[1].length==1){
					data.print("Krouží kolem mne 1 planeta.");
					pronoun="ní";
					verb="nese";
					single=true;
				}
				else if(tmp[1].length>1 && tmp[1].length<5){
					data.print("Krouží kolem mne "+tmp[1].length+" planety.");
				}
				else{
					data.print("Krouží kolem mne "+tmp[1].length+" planet.");
				}

				if(me.in){
					printSystemRequest(tmp,pronoun,verb,single,tmp[1].length);
				}
				else if(me.phone && tmp[1].length>1){
					data.print(" ");
					data.print("Drž pro označení.");
					data.print("Pusť pro výběr.");
				}
			}
			data.setbackbutton();
		}

		getSystem=(input)=>{
			let tmp=JSON.parse(input);

			if(system.restep){
				system.rotation.x=tmp[0][0].rotationx;
				system.rotation.y=tmp[0][0].rotationy;
				system.element.style.transform="rotateX("+system.rotation.x+"deg) rotateY("+system.rotation.y+"deg) scale(0.05)";
				setTimeout(()=>{
					system.element.style.transform="rotateX("+system.rotation.x+"deg) rotateY("+system.rotation.y+"deg) scale(1)";
				},1000);

				setTimeout(()=>{
					printSystemData(tmp);
				},2000);
			}
			else{
				printSystemData(tmp);
			}

			setSource(-system.rotation.y,system.rotation.x,tmp[0][0].size,tmp[0][0].color,tmp[0][0].name);
			for(let i=0;i<tmp[1].length;i++){
				setPlanet(tmp[1][i].energy,-system.rotation.y,system.rotation.x,tmp[1][i].orbit,tmp[1][i].size,tmp[1][i].color,tmp[1][i].name,false);

				let lap=0,step=0;
				if(system.restep || i>=system.memory.relap.length){
					lap=Math.floor(Math.random()*8);
					step=Math.floor(Math.random()*system.planet[i].memory.left[0].length);
				}
				else{
					lap=system.memory.relap[i];
					step=system.memory.restep[i];
				}

				system.planet[i].current.lap=lap;
				system.planet[i].current.step=step;

				if(lap>1 && lap<6){
					system.planet[i].element.main.style.zIndex=5;
				}
				else{
					system.planet[i].element.main.style.zIndex=2;
				}
			}
			system.restep=true;
			system.time.tick();
			system.time.start();
		}

		initSystem=(input)=>{
			let tmp=JSON.parse(input);
			initSystemData(tmp);
			me.init=false;
		}

		setSystem=(name,restep)=>{
			if(me.init){
				ajax("php/getSystem.php","name="+name,initSystem);
			}
			else{
				system.restep=restep;
				system.clean();
				ajax("php/getSystem.php","name="+name,getSystem);
			}
		}

		me.string.date=[];
        me.string.date[0]="ledna";
        me.string.date[1]="února";
        me.string.date[2]="března";
        me.string.date[3]="dubna";
        me.string.date[4]="května";
        me.string.date[5]="června";
        me.string.date[6]="července";
        me.string.date[7]="srpna";
        me.string.date[8]="září";
        me.string.date[9]="října";
        me.string.date[10]="listopadu";
        me.string.date[11]="prosince";

		me.string.month=[];
        me.string.month[0]="leden";
        me.string.month[1]="únor";
        me.string.month[2]="březen";
        me.string.month[3]="duben";
        me.string.month[4]="květen";
        me.string.month[5]="červen";
        me.string.month[6]="červenec";
        me.string.month[7]="srpen";
        me.string.month[8]="září";
        me.string.month[9]="říjen";
        me.string.month[10]="listopad";
		me.string.month[11]="prosinec";
		me.string.month[12]="prosinec";

		me.string.darkcolors=[];
		me.string.darkcolors.push("černou");
		me.string.darkcolors.push("uhelnou");
		me.string.darkcolors.push("ostružinovou");
		me.string.darkcolors.push("kofolovou");
		me.string.darkcolors.push("vínovou");
		me.string.darkcolors.push("fialovou");
		me.string.darkcolors.push("indigovou");		

		printCoreRequest=(tmp)=>{
			data.print(" ");

			if(tmp.energy>330){
				data.print("Jsem šťastná. [Mám "+(tmp.energy/10)+"% energie.]");
			}
			else if(tmp.energy>0){
				data.print("Ztrácím se. [Mám "+(tmp.energy/10)+"% energie.]");
			}
			else{
				data.print("Umírám. [Mám 0% energie.]");

				let before=new Date(tmp.grim*1000);
				let days=Math.ceil(Math.abs(before-now)/(1000*60*60*24));
				days=Math.abs(days-14);

				if(days==0){
					data.print("Nadobro mizím. Těšilo mne.");
				}
				else if(days==1){
					data.print("Zítra nadobro mizím. Těšilo mne.");
				}
				else if(days>1 && days<5){
					data.print("Za "+days+" dny nadobro zmizím.");
				}
				else{
					data.print("Za "+days+" dnů nadobro zmizím.");
				}
			}

			data.print("Unesu dohromady "+tmp.max+" stromů.");
			if(tmp.energy>0){
				let ceil=(tmp.max-tmp.current);

				if(tmp.current==0){
					data.print("Prosím o strom.");
				}
				else if(ceil==0){
					data.print("Jsem plná stromů.");
				}
				else if(ceil==1){
					data.print("Udržím ještě "+ceil+" strom.");
				}
				else if(ceil>1 && ceil<5){
					data.print("Udržím ještě "+ceil+" stromy.");
				}
				else{
					data.print("Udržím ještě "+ceil+" stromů.");
				}
			}
		}

		initCoreData=(tmp)=>{
			data.add("Jsem planeta "+tmp.name+".");
			data.add("Nosím "+tmp.colorname+" barvu.");
			data.add("Oběhnu hvězdu za "+Math.floor(Math.pow(2,tmp.orbit)*9.375)+" sekund.");

			if(me.string.darkcolors.includes(tmp.colorname)){
				forestfooter.style.color="white";
				forest.color="white";
			}
			else{
				forestfooter.style.color="black";
				forest.color="black";
			}

			let before=new Date(tmp.age*1000);
			let now=new Date();
			let year;
			if(now.getMonth()>before.getMonth()){
				year=(now.getFullYear()+1);
			}
			else if(now.getMonth()<before.getMonth()){
				year=(now.getFullYear());
			}
			else{
				if(now.getDate()>before.getDate()){
					year=(now.getFullYear()+1);
				}
				else if(now.getDate()<before.getDate()){
					year=(now.getFullYear());
				}
				else{
					year=135;
				}
			}

			if(year==135){
				data.add("Dnes mám narozeniny!");
			}
			else{
				data.add(before.getDate()+". "+me.string.date[before.getMonth()]+" "+year+" mám narozeniny.");
			}

			if(me.in){
				printCoreRequest(tmp);
			}
			data.setbackbutton();
		}

		printCoreData=(tmp)=>{
			data.print("Jsem planeta "+tmp.name+".");
			data.print("Nosím "+tmp.colorname+" barvu.");
			data.print("Oběhnu hvězdu za "+Math.floor(Math.pow(2,tmp.orbit)*9.375)+" sekund.");

			if(me.string.darkcolors.includes(tmp.colorname)){
				forestfooter.style.color="white";
				forest.color="white";
			}
			else{
				forestfooter.style.color="black";
				forest.color="black";
			}

			let before=new Date(tmp.age*1000);
			let now=new Date();
			let year;
			if(now.getMonth()>before.getMonth()){
				year=(now.getFullYear()+1);
			}
			else if(now.getMonth()<before.getMonth()){
				year=(now.getFullYear());
			}
			else{
				if(now.getDate()>before.getDate()){
					year=(now.getFullYear()+1);
				}
				else if(now.getDate()<before.getDate()){
					year=(now.getFullYear());
				}
				else{
					year=135;
				}
			}

			if(year==135){
				data.print("Dnes mám narozeniny!");
			}
			else{
				data.print(before.getDate()+". "+me.string.date[before.getMonth()]+" "+year+" mám narozeniny.");
			}

			if(me.in){
				printCoreRequest(tmp);
			}
			data.setbackbutton();
		}

		getCore=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);
				data.clean();
				printCoreData(tmp);

				core.element.style.opacity=possitive(((tmp.energy/10)*2),25)/100;
				forest.energy=tmp.energy;
				forest.max=tmp.max;
				forest.planet=tmp.name;
				
				setTimeout(()=>{
					core.open=true;
					core.element.style.cursor="pointer";
				},1000);

				core.element.onclick=()=>{
					if(core.open){
						core.open=false;
						core.element.style.cursor="default";

						data.clean();
						profile.style.display="none";
						online.style.display="none";

						forestGround.style.background=tmp.color;
						forestGround.style.opacity=possitive(((tmp.energy/10)*2),25)/100;
						core.element.style.width="6000px";
						core.element.style.height="6000px";
						core.element.style.marginLeft="-3000px";
						core.element.style.marginTop="-200px";
						setSpeed(forest,timeBar,tmp.orbit,true); //0-7
						forest.time.year=(Math.pow(2,tmp.orbit)*9.375);

						setTimeout(()=>{
							forest.enter();
						},1000);
					}
				}
			}
		}

		initCore=(input)=>{
			let tmp=JSON.parse(input);
			initCoreData(tmp);
			me.init=false;
		}

		setCore=(name)=>{
			if(me.init){
				ajax("php/getCore.php","name="+name,initCore);
			}
			else{
				ajax("php/getCore.php","name="+name,getCore);
			}
		}

		getAnomaly=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);
				printGalaxyRequest(tmp,true);
			}
		}

		setAnomaly=(name,type)=>{
			if(type==2){
				data.print("Jsem mlhovina "+name+".");
				data.print("Patřím do souhvězdí Štíra.");
			}
			else if(type==3){				
				data.print("Jsem mlhovina "+name+".");
				data.print("Patřím do souhvězdí Býka.");
			}
			else if(type==4){
				data.print("Jsem hvězdokupa "+name+".");
				data.print("Patřím do souhvězdí Býka.");
				data.print("Obsahuji 5 hvězd.");
				
				setStar(259,280,10,"white","Atlas",1,true);
				setStar(401,331,7,"white","Alcyone",1,true);
				setStar(464,434,7,"white","Merope",1,true);
				setStar(609,437,7,"white","Electra",1,true);
				setStar(580,309,7,"white","Maia",1,true);

				ajax("php/getAnomaly.php","name="+name,getAnomaly);
			}
			else if(type==5){
				data.print("Jsem mlhovina "+name+".");
				data.print("Patřím do souhvězdí Draka.");
				data.print("Obsahuji bílého trpaslíka.");
				setStar(394,373,7,"white",name,1,true);
			}
			else if(type==6){
				data.print("Jsem mlhovina "+name+".");
				data.print("Patřím do souhvězdí Lyry.");
			}
			else if(type==7){
				data.print("Jsem mlhovina "+name+".");
				data.print("Patřím do souhvězdí Jednorožce.");
				data.print("Stromy ve mne extrémně plodí.");
				data.print("Obsahuji červeného obra.");
				setStar(505,395,7,"white","Monocerotis",1,true);
				ajax("php/getAnomaly.php","name="+name,getAnomaly);
			}
			else if(type==8){
				data.print("Jsem mlhovina "+name+".");
				data.print("Patřím do souhvězdí Blíženců.");
				data.print("Obsahuji bílého trpaslíka.");
				setStar(395,395,7,"white",name,1,true);		
			}
			else if(type==9){
				data.print("Jsem hvězdokupa "+name+".");
				data.print("Patřím do souhvězdí Herkula.");
			}
			else{
				data.print("Jsem mlhovina "+name+".");
				data.print("Patřím do souhvězdí Orionu.");
				data.print("Obsahuji hvězdu.");
				setStar(249,382,15,"white","Alnitak",1,true);	
				ajax("php/getAnomaly.php","name="+name,getAnomaly);			
			}
			data.setbackbutton();
		}

		setBlackHole=()=>{
			system.rotation.x=0;
			system.rotation.y=0;
			
			setSource(0,0,300,"blackhole","");
			system.element.style.transform="scale(1)";

			data.print("“Černé díry nejsou tak černé, jak jsou představovány.”");
			data.print("Řekl jednou Dr. Hawking při přednášce, šarmantně");
			data.print("popisující komplikovanou fyziku v běžném jazyce.");
			data.print("“Nejsou věčným vězením, jako se dávno myslelo.");
			data.print("Věci se mohou dostat z Černé díry, zpátky,");
			data.print("a pravděpodobně, i do jiného vesmíru.");
			data.print("Takže, pokud se cítíš uvnitř");
			data.print("Černé díry, nevzdávej se.");
			data.print("Je cesta ven.”");
			data.setbackbutton();
		}

		printCycle=(cycle,islaniakea)=>{
			let now=new Date();
			let before=new Date(cycle*1000);
			let days=Math.ceil(Math.abs(before-now)/(1000*60*60*24));
			let restart=Math.abs(days-90);
			let text=[];
			
			if(restart==1){
				text.push("Dnes se restartuji.");
			}
			else if(restart==2){
				text.push("Zítra se restartuji.");
			}
			else if(restart>2 && restart<5){
				text.push("Za "+restart+" dny se restartuji.");
			}
			else{
				text.push("Za "+restart+" dnů se restartuji.");
			}

			text.push("Cyklus trvá 3 měsíce.");

			if(days==1){
				text.push("Existuji 1 den.");
			}
			else if(days>1 && days<5){
				text.push("Existuji "+days+" dny.");
			}
			else{
				text.push("Existuji "+days+" dnů.");
			}

			data.print(" ");
			if(islaniakea){
				data.print(text[0]);
				data.print(text[1]);
				data.print(text[2]);
			}
			else{
				data.print(text[2]);
				data.print(text[1]);
				data.print(text[0]);
			}
		}

		getLaniakea=(input)=>{
			let tmp=JSON.parse(input);
			let lights=1;

			setLight(693,429,60,-20,7,1.3,"gold","Mléčná dráha","","",0,true,400,400);
			for(let i=0;i<laniakea.light.length;i++){
				if(tmp.progress>(10+i)){
					setLight(laniakea.light[i][0],laniakea.light[i][1],laniakea.light[i][2],laniakea.light[i][3],laniakea.light[i][4],laniakea.light[i][5],laniakea.light[i][6],laniakea.light[i][7],laniakea.light[i][8],laniakea.light[i][9],laniakea.light[i][10],laniakea.light[i][11],laniakea.light[i][12],laniakea.light[i][13]); 
					lights++;
				}
			}
			
			data.print("Jsem Laniakea.");
			data.print("Svítím jako víla.");

			if(lights==1){
				data.print("Obsahuji naší galaxii.");
			}
			else if(lights<5){
				data.print("Obsahuji "+lights+" galaxie.");
			}
			else{
				data.print("Obsahuji "+lights+" galaxií.");
			}

			printCycle(tmp.cycle,true);
		}

		setLaniakea=()=>{
			ajax("php/getLaniakea.php","name="+me.name+"&hash="+me.hash,getLaniakea);
		}

		setLight=(x,y,rotationx,rotationy,size,scale,color,name,catalog,constellation,id,blackhole,bx,by)=>{
			let star={};
			star.main=createElement("div","star");
			star.core=createElement("div","star-core");
			star.name=createElement("div","star-name");	

			star.main.style.top=(y-((size+10)/2))+"px";
			star.main.style.left=(x-((size+10)/2))+"px";
			star.main.style.width=(size+20)+"px";
			star.main.style.height=(size+20)+"px";
			star.core.style.backgroundColor=color;
			star.core.style.width=size+"px";
			star.core.style.height=size+"px";
			star.core.style.borderRadius=size+"px";
			star.name.innerHTML=name;
			star.name.style.fontSize="14px";
			star.name.style.top=(y+size)+"px";
			star.name.style.left=(x+size+7)+"px";

			if(id==9){
				star.name.style.color="black";
			}
			else if(id!==0){
				star.name.style.color="greenyellow";
			}

			star.main.onclick=()=>{
				galaxy.name=name;
				galaxy.constellation=constellation;
				galaxy.catalog=catalog;
				galaxy.id=id;
				galaxy.rotation.x=rotationx;
				galaxy.rotation.y=rotationy;
				galaxy.scale=scale;
				galaxy.blackhole.is=blackhole;

				if(blackhole){
					galaxy.blackhole.x=bx;
					galaxy.blackhole.y=by;
				}
				
				laniakea.memory.left=((x-400)*-1);
				laniakea.memory.top=((y-400)*-1);
				data.clean();
				laniakea.clean();
				laniakea.element.style.marginLeft=(laniakea.memory.left-400)+"px";
				laniakea.element.style.marginTop=laniakea.memory.top+"px";

				galaxy.element.style.backgroundImage="url('img/galaxy/"+galaxy.id+".png')";
				galaxy.element.style.transform="rotateX("+rotationx+"deg) rotateY("+rotationy+"deg) scale(0.05)";

				setTimeout(()=>{
					me.location=1;
					laniakea.element.style.width="8000px";
					laniakea.element.style.height="8000px";
					laniakea.element.style.backgroundSize="8000px";
					laniakea.element.style.marginLeft=((x*10*-1)-((size/2)*10))+"px";
					laniakea.element.style.marginTop=((y*10*-1)+400-((size/2)*10))+"px";
					laniakea.element.style.zIndex=0;
					galaxy.element.style.zIndex=1;					
					laniakea.element.style.opacity=0;
					galaxy.element.style.opacity=1;
					galaxy.element.style.transform="rotateX("+rotationx+"deg) rotateY("+rotationy+"deg) scale(1)";
					setTimeout(()=>{
						setGalaxy();
					},1000);
				},1000);
			}

			star.main.appendChild(star.core);
			laniakea.element.appendChild(star.name);
			laniakea.element.appendChild(star.main);
		}

		scaleGalaxy=(x,y,size)=>{
			galaxy.element.style.width="8000px"; //scale(10)
			galaxy.element.style.height="8000px";
			galaxy.element.style.backgroundSize="8000px";
			galaxy.element.style.marginLeft=((x*10*-1)-((size/2)*10))+"px";
			galaxy.element.style.marginTop=((y*10*-1)+400-((size/2)*10))+"px";		
		}

		setStar=(x,y,size,color,name,type,inside)=>{
			size=Math.ceil((size/2)+((size/2)*(galaxy.rotation.x/60))); //rotatex max is 60

			let star={};
			star.main=createElement("div","star");
			star.core=createElement("div","star-core");
			star.name=createElement("div","star-name");	

			star.main.style.top=(y-((size+10)/2))+"px";
			star.main.style.left=(x-((size+10)/2))+"px";
			star.main.style.width=(size+20)+"px";
			star.main.style.height=(size+20)+"px";
			
			star.core.style.backgroundColor=color;
			star.core.style.width=size+"px";
			star.core.style.height=size+"px";
			star.core.style.borderRadius=size+"px";
			star.name.innerHTML=name;
			star.name.style.width="100px";

			if(galaxy.distance.short.includes(galaxy.id)){
				star.name.style.fontSize="14px";
				star.name.style.top=(y+size+3)+"px";
				star.name.style.left=(x+size+9)+"px";
			}
			else if(galaxy.distance.medium.includes(galaxy.id)){
				star.name.style.fontSize="22px";
				star.name.style.top=(y+size+19)+"px";
				star.name.style.left=(x+size-11)+"px";
			}
			else if(galaxy.distance.long.includes(galaxy.id)){
				star.name.style.fontSize=(14+(8*(galaxy.rotation.x/50)))+"px"; //14-22
				
				if(galaxy.id==7){
					star.name.style.top=(y+size+9)+"px";
					star.name.style.left=(x+size-15)+"px";
				}
				else if(galaxy.id==6){
					star.name.style.top=(y+size+4)+"px";
					star.name.style.left=(x+size-3)+"px";
				}
				else if(galaxy.id==8){
					star.name.style.top=(y+size+9)+"px";
					star.name.style.left=(x+size-7)+"px";
				}
				else{
					star.name.style.top=(y+size+4)+"px";
					star.name.style.left=(x+size-11)+"px";
				}
			}
			else{
				star.name.style.fontSize=(14+(8*(galaxy.rotation.x/60)))+"px"; //14-22
				star.name.style.top=(y+size)+(23*(galaxy.rotation.x/60))+"px"; //0-23
				star.name.style.left=(x+size+(size)-((size*2)*(galaxy.rotation.x/60)))+"px"; //-size až size
			}

			if(inside){
				star.main.onclick=()=>{
					anomaly.memory.left=((x-400)*-1);
					anomaly.memory.top=((y-400)*-1);
					if(system.whitedwarfs.includes(name)){
						anomaly.memory.left=((x-400+size)*-1);
						anomaly.memory.top=((y-400+size)*-1);
					}
					else if(system.redgiants.includes(name)){
						anomaly.memory.left=((x-400+size-(size/4))*-1);
						anomaly.memory.top=((y-400+size-(size/4))*-1);
					}
					data.clean();
					anomaly.clean();
					setSystem(name,true);					
					anomaly.element.style.transform="rotateX(0deg) rotateY(0deg) scale("+anomaly.scale+")";
					anomaly.element.style.marginLeft=((anomaly.memory.left)-400)+"px";
					anomaly.element.style.marginTop=(anomaly.memory.top)+"px";

					setTimeout(()=>{
						me.location=2;
						anomaly.element.style.width="8000px";
						anomaly.element.style.height="8000px";

						if(anomaly.pleiades.includes(name) || name=="Monocerotis"){
							anomaly.element.style.backgroundSize="6000px";
						}
						else if(anomaly.orion.includes(name)){
							anomaly.element.style.backgroundSize="7000px";
						}
						else{
							anomaly.element.style.backgroundSize="8000px";
						}

						if(system.whitedwarfs.includes(name)){
							anomaly.element.style.marginLeft=((x*10*-1)-((size)*10))+"px";
							anomaly.element.style.marginTop=((y*10*-1)+400-((size)*10))+"px";
						}
						else if(name=="Monocerotis"){
							anomaly.element.style.marginLeft=((x*10*-1)-(((size/4)+(size/2))*10))+"px";
							anomaly.element.style.marginTop=((y*10*-1)+400-(((size/4)+(size/2))*10))+"px";
						}
						else{
							anomaly.element.style.marginLeft=((x*10*-1)-((size/2)*10))+"px";
							anomaly.element.style.marginTop=((y*10*-1)+400-((size/2)*10))+"px";
						}
						
						system.element.style.zIndex=1;
						anomaly.element.style.zIndex=0;

						anomaly.element.style.opacity=0;
						system.element.style.opacity=1;
					},1000);
				}
			}
			else{
				star.main.onclick=()=>{
					data.clean();
					if(type==0){
						galaxy.memory.left=((x-400)*-1);
						galaxy.memory.top=((y-400)*-1);
					}
					else{
						galaxy.memory.left=((x-400+(size/2))*-1);
						galaxy.memory.top=((y-400+(size/2))*-1);
					}

					if(me.phone && (!me.zoom.trigger || me.zoom.memory!=name)){
						if(!me.zoom.trigger){
							me.zoom.height=window.innerHeight/2;
							galaxy.element.style.transition="0s";
							galaxy.element.style.transform="rotateX(0deg) rotateY(0deg) scale(3)";

							for(let i=0;i<galaxy.element.children.length;i++){
								galaxy.element.children[i].style.transform="rotateX(0deg) rotateY(0deg) scale(1)";
								if(galaxy.element.children[i].className=="star-name"){
									galaxy.element.children[i].style.fontSize="15px";
									galaxy.element.children[i].style.top=(galaxy.element.children[i+1].offsetTop+galaxy.element.children[i+1].offsetHeight-13)+"px";
									galaxy.element.children[i].style.left=(galaxy.element.children[i+1].offsetLeft+galaxy.element.children[i+1].offsetWidth)+"px";
								}
							}
						}

						galaxy.element.style.marginLeft=((galaxy.memory.left*3)-400)+"px";
						galaxy.element.style.marginTop=(me.zoom.height-400+(galaxy.memory.top))+"px";

						profile.style.display="none";
						online.style.display="none";
						me.zoom.trigger=true;
						me.zoom.memory=name;
					}
					else{
						if(me.zoom.trigger){
							galaxy.element.style.transform="rotateX("+galaxy.rotation.x+"deg) rotateY("+galaxy.rotation.y+"deg) scale(1)";
							galaxy.element.style.marginLeft="-400px";
							galaxy.element.style.marginTop="0px";
							me.zoom.trigger=false;
							profile.style.display="block";
							online.style.display="block";
							setTimeout(()=>{
								galaxy.element.style.transition="1s";
							},100);
						}
						galaxy.clean();
						system.element.style.transform="scale(0.05)";
						setTimeout(()=>{
							if(type==0){				
								system.clean();
								galaxy.element.style.transform="rotateX(0deg) rotateY(0deg) scale(1)";
								galaxy.element.style.marginLeft=((galaxy.memory.left)-400)+"px";
								galaxy.element.style.marginTop=(galaxy.memory.top)+"px";

								setTimeout(()=>{
									me.location=11;
									scaleGalaxy(x,y,size);
									galaxy.element.style.opacity=0;						
									system.element.style.opacity=1;
									system.element.style.zIndex=1;
									galaxy.element.style.zIndex=0;
									setBlackHole();
								},1000);
							}
							else if(type==1){
								setSystem(name,true);
								galaxy.element.style.transform="rotateX(0deg) rotateY(0deg) scale(1)";
								galaxy.element.style.marginLeft=((galaxy.memory.left)-400)+"px";
								galaxy.element.style.marginTop=(galaxy.memory.top)+"px";

								setTimeout(()=>{
									me.location=2;
									scaleGalaxy(x,y,size);
									system.element.style.zIndex=1;
									galaxy.element.style.zIndex=0;
									galaxy.element.style.opacity=0;
									system.element.style.opacity=1;
								},1000);
							}
							else{
								galaxy.element.style.transform="rotateX(0deg) rotateY(0deg) scale(1)";
								galaxy.element.style.marginLeft=((galaxy.memory.left)-400)+"px";
								galaxy.element.style.marginTop=(galaxy.memory.top)+"px";
								anomaly.element.style.width="800px";
								anomaly.element.style.height="800px";
								anomaly.element.style.transform="rotateX("+anomaly.rotation.x+"deg) rotateY("+anomaly.rotation.y+"deg) scale(0.05)";
								anomaly.element.style.backgroundImage="url('img/anomaly/"+type+".png')";

								anomaly.scale=1;
								if(type==4 || type==7){
									anomaly.element.style.backgroundSize="600px";
								}
								else if(type==10){
									anomaly.element.style.backgroundSize="700px";
								}
								else{
									anomaly.element.style.backgroundSize="800px";
									anomaly.scale=0.7;
								}

								setTimeout(()=>{
									me.location=33;
									scaleGalaxy(x,y,size);
									galaxy.element.style.opacity=0;						
									anomaly.element.style.opacity=1;
									anomaly.element.style.zIndex=1;
									galaxy.element.style.zIndex=0;
									anomaly.element.style.transform="scale("+anomaly.scale+")";
									setTimeout(()=>{
										setAnomaly(name,type);
									},1000);
								},1000);
							}
						},1000*me.phone);
					}
				}
			}

			star.main.appendChild(star.core);

			if(inside){
				star.name.style.color="greenyellow";
				star.main.style.transform="rotateX("+(anomaly.rotation.y*-1)+"deg) rotateY("+anomaly.rotation.x+"deg) scale(1)";
				star.name.style.transform="rotateX("+(anomaly.rotation.y*-1)+"deg) rotateY("+anomaly.rotation.x+"deg) scale(0.7)";

				star.name.style.fontSize="22px";
				if(system.whitedwarfs.includes(name)){
					star.name.style.fontSize="28px";
					star.name.style.width="120px";
				}

				if(size>10){
					star.name.style.top=(y-((size+11)/0.7)+((size*0.7)+33))+"px";
					star.name.style.left=(x+7)+"px";
				}
				else{
					star.name.style.top=(y-((size+15)/0.7)+((size*0.7)+33))+"px";
					star.name.style.left=x+"px";
				}				
				
				anomaly.element.appendChild(star.name);
				anomaly.element.appendChild(star.main);
			}
			else{
				if(type==1 && galaxy.id==0){
					star.name.style.color="white";
				}
				else if(type==0){
					star.name.style.color="black";
				}
				else{
					star.name.style.color="greenyellow";
				}

				star.main.style.transform="rotateX("+(galaxy.rotation.y*-1)+"deg) rotateY("+galaxy.rotation.x+"deg) scale("+galaxy.scale+")";
				star.name.style.transform="rotateX("+(galaxy.rotation.y*-1)+"deg) rotateY("+galaxy.rotation.x+"deg) scale("+galaxy.scale+")";
				galaxy.element.appendChild(star.name);
				galaxy.element.appendChild(star.main);
			}
		}

		carryPlanet=(cycle,x,y,i,size)=>{
			system.planet[i].memory.left[cycle][system.memory.step[i][cycle]]=(-(size/2))+x;
			system.planet[i].memory.top[cycle][system.memory.step[i][cycle]]=(400-(size/2))+y;
			system.planet[i].year++;
			system.memory.step[i][cycle]++;
		};

		leftPlanets=(x,y,i,size)=>{
			carryPlanet(0,-y,x,i,size);
			carryPlanet(1,-x,-y,i,size);
			carryPlanet(2,x,y,i,size);
			carryPlanet(3,y,-x,i,size);
		};

		rightPlanets=(x,y,i,size)=>{
			carryPlanet(4,-y,-x,i,size);
			carryPlanet(5,-x,y,i,size);
			carryPlanet(6,x,-y,i,size);
			carryPlanet(7,y,x,i,size);
		};

		gotocore=(i)=>{
			if(core.open){
				core.open=false;
				core.element.style.cursor="default";
				me.location=3;
				system.time.stop();
				data.clean();

				//save steps
				system.memory.relap=[];
				system.memory.restep=[];
				for(let i=0;i<system.planet.length;i++){
					system.memory.relap.push(system.planet[i].current.lap);
					system.memory.restep.push(system.planet[i].current.step);
				}

				let coordinates={};
				coordinates.system=system.element.getBoundingClientRect();
				coordinates.planet=system.planet[i].element.main.getBoundingClientRect();

				core.memory.left=((((coordinates.planet.left-coordinates.system.left)-(coordinates.system.width/2))*-1)-(coordinates.planet.width/2)-400);
				core.memory.top=(((coordinates.system.height/2)-(coordinates.planet.top-coordinates.system.top))-(coordinates.planet.height/2));
				core.memory.r=coordinates.planet.width;
				
				system.element.style.marginLeft=core.memory.left+"px";
				system.element.style.marginTop=core.memory.top+"px";

				core.element.style.width=coordinates.planet.width+"px";
				core.element.style.height=coordinates.planet.height+"px";
				core.element.style.marginTop="-"+(coordinates.planet.height/2)+"px";
				core.element.style.marginLeft="-"+(coordinates.planet.width/2)+"px";

				core.element.style.background=system.planet[i].color;

				core.element.style.zIndex=2; //default is 0
				galaxy.element.style.zIndex=1;
				system.element.style.zIndex=0;

				for(let i=0;i<system.planet.length;i++){ //hide names
					system.planet[i].element.name.style.display="none";
				}
				system.source.name.style.display="none";

				setTimeout(()=>{
					for(let i=0;i<system.planet.length;i++){ //hide orbits
						system.planet[i].element.orbit.front.style.display="none";
						system.planet[i].element.orbit.back.style.display="none";
					}

					core.element.style.opacity=possitive(((system.planet[i].energy/10)*2),25)/100;
					core.element.style.width="200px";
					core.element.style.height="200px";
					core.element.style.marginLeft="-100px";
					core.element.style.marginTop="-100px";
					
					system.planet[i].element.main.style.display="none";
					core.i=i;

					system.element.style.transition="0.5s";
					system.element.style.opacity=0;

					system.element.style.marginLeft=(((((coordinates.planet.left*25)-(coordinates.system.left*25))-((coordinates.system.width*25)/2))*-1)-((coordinates.planet.width*25)/2)-250)+"px";
					system.element.style.marginTop=((((coordinates.system.height*25)/2)-((coordinates.planet.top*25)-(coordinates.system.top*25)))-((coordinates.planet.height*25)/2))+"px";
					system.element.style.transform="rotateX("+system.rotation.x+"deg) rotateY("+system.rotation.y+"deg) scale(25)";

					setTimeout(()=>{
						setCore(system.planet[core.i].element.name.innerHTML);
					},1000);
				},1000);
			}
		}

		markShadow=(i,is)=>{
			if(is){
				system.planet[i].element.orbit.back.style.borderTop="1px gold solid";
				system.planet[i].element.orbit.back.style.borderLeft="1px gold solid";
				system.planet[i].element.orbit.back.style.borderRight="1px gold solid";
				system.planet[i].element.orbit.back.style.borderBottom="1px transparent solid";

				system.planet[i].element.orbit.front.style.borderTop="1px transparent solid";
				system.planet[i].element.orbit.front.style.borderLeft="1px transparent solid";
				system.planet[i].element.orbit.front.style.borderRight="1px transparent solid";
				system.planet[i].element.orbit.front.style.borderBottom="1px gold solid";
			}
			else{
				system.planet[i].element.orbit.back.style.borderTop="1px rgb(70,70,70) solid";
				system.planet[i].element.orbit.back.style.borderLeft="1px rgb(70,70,70) solid";
				system.planet[i].element.orbit.back.style.borderRight="1px rgb(70,70,70) solid";
				system.planet[i].element.orbit.back.style.borderBottom="1px transparent solid";
				
				system.planet[i].element.orbit.front.style.borderTop="1px transparent solid";
				system.planet[i].element.orbit.front.style.borderLeft="1px transparent solid";
				system.planet[i].element.orbit.front.style.borderRight="1px transparent solid";
				system.planet[i].element.orbit.front.style.borderBottom="1px rgb(70,70,70) solid";
			}
		}

		me.mark={};
		me.mark.is=false;
		me.mark.i=0;
		me.mark.array=[];

		me.mark.set=(e)=>{
			let evt=(typeof e.originalEvent==='undefined')?e:e.originalEvent;
			let touch=evt.touches[0]||evt.changedTouches[0];

			me.mark.xx=touch.clientX-400;
			me.mark.yy=touch.clientY-400;
			
			if(me.mark.xx>0){
				me.mark.x=touch.clientX+Math.abs(me.mark.yy);
			}
			else{
				me.mark.x=touch.clientX-Math.abs(me.mark.yy);
			}

			if(me.mark.yy>0){
				me.mark.y=touch.clientY+Math.abs(me.mark.xx);
			}
			else{
				me.mark.y=touch.clientY-Math.abs(me.mark.xx);
			}

			me.mark.is=false;
			for(let i=0;i<system.planet.length;i++){
				if(!me.mark.is && me.mark.x<me.mark.array[i].right && me.mark.x>me.mark.array[i].left && me.mark.y<me.mark.array[i].bottom && me.mark.y>me.mark.array[i].top){
					markShadow(i,true);
					me.mark.is=true;
					me.mark.i=i;
				}
				else{
					markShadow(i,false);
				}
			}
		}

		window.ontouchstart=(e)=>{
			if(me.location==2){
				for(let i=0;i<system.planet.length;i++){
					me.mark.array[i]=system.planet[i].element.shadow.getBoundingClientRect();
				}
				me.mark.set(e);
			}
        }

		window.ontouchend=()=>{
			if(me.location==2 && me.mark.is){
				gotocore(me.mark.i);
			}
		}

		window.ontouchmove=(e)=>{
			if(me.location==2){
				me.mark.set(e);
			}
		}

		setPlanet=(energy,rotatex,rotatey,position,size,color,name,disable)=>{
			let orbitbase=20+Math.floor((system.rotation.x/70)*13); //20-33 ~ rotatex max is 70
			//let orbitbase=25; //contant
			size=Math.ceil(size*(orbitbase/35));

			let orbit=90+(position*orbitbase);
			let x=orbit,y=0,err=0;
			let planet={};
			planet.main=createElement("div","planet");
			planet.orbit={};
			planet.orbit.front=createElement("div","planet-orbit-front");
			planet.orbit.back=createElement("div","planet-orbit-back");
			planet.shadow=createElement("div","planet-shadow");
			planet.name=createElement("div","planet-name");
			
			planet.name.innerHTML=name;
			planet.main.style.opacity=possitive(((energy/10)*2),25)/100;

			planet.main.style.background=color;
			planet.main.style.transform="rotateX("+rotatex+"deg) rotateY("+rotatey+"deg) scale("+possitive(rotatey/25,1)+")";
			planet.main.style.width=size+"px";
			planet.main.style.height=size+"px";
			planet.main.style.borderRadius=size+"px";
			planet.name.style.top=size+"px";
			planet.name.style.left=size+"px";
			planet.orbit.front.style.width=((orbit*2)-2)+"px";
			planet.orbit.front.style.height=((orbit*2)-2)+"px";
			planet.orbit.front.style.borderRadius=orbit+"px";
			planet.orbit.front.style.marginLeft=(-orbit)+"px";
			planet.orbit.front.style.marginTop=(400-orbit)+"px";
			planet.orbit.back.style.width=((orbit*2)-2)+"px";
			planet.orbit.back.style.height=((orbit*2)-2)+"px";
			planet.orbit.back.style.borderRadius=orbit+"px";
			planet.orbit.back.style.marginLeft=(-orbit)+"px";
			planet.orbit.back.style.marginTop=(400-orbit)+"px";

			planet.shadow.style.width=((orbit*2)+orbitbase)+"px";
			planet.shadow.style.height=((orbit*2)+orbitbase)+"px";
			planet.shadow.style.borderRadius=orbit+"px";
			planet.shadow.style.marginLeft=((-orbit)-15)+"px";
			planet.shadow.style.marginTop=((400-orbit)-15)+"px";
			planet.shadow.style.zIndex=(10+Math.abs(position-7));

			let i=system.planet.length;
			system.planet[i]={};
			system.planet[i].element={};
			system.planet[i].element.main=planet.main;
			system.planet[i].element.name=planet.name;
			system.planet[i].element.shadow=planet.shadow;
			system.planet[i].element.orbit={};
			system.planet[i].element.orbit.front=planet.orbit.front;
			system.planet[i].element.orbit.back=planet.orbit.back;
			system.planet[i].year=0;
			system.planet[i].current={};
			system.planet[i].memory={};
			system.planet[i].memory.left=[];
			system.planet[i].memory.top=[];
			system.planet[i].color=color;
			system.planet[i].energy=energy;
			for(let j=0;j<8;j++){
				system.planet[i].memory.left[j]=[];
				system.planet[i].memory.top[j]=[];
			}

			planet.main.appendChild(planet.name);
			system.element.appendChild(planet.main);
			system.element.appendChild(planet.orbit.front);
			system.element.appendChild(planet.orbit.back);

			if(!disable){
				planet.shadow.onmouseenter=function(){
					if(me.location==2){
						markShadow(i,true);
					}
				}

				planet.shadow.onmouseleave=function(){
					if(me.location==2){
						markShadow(i,false);
					}
				}

				planet.shadow.onclick=()=>{ //zoomin
					gotocore(i);
				}
				system.element.appendChild(planet.shadow);
			}

			
			while(x>=y){
				rightPlanets(x,y,i,size);
				leftPlanets(x,y,i,size);
				if(err<=0){
					y+=1;
					err+=2*y+1;
				}
				if(err>0){
					x-=1;
					err-=2*x+1;
				}
			}

			system.planet[i].current.step=0;
			system.planet[i].current.lap=0;
			for(let j=4;j<8;j++){
				system.planet[i].memory.left[j].reverse();
				system.planet[i].memory.top[j].reverse();
			}
		}

		me.matrix={};
		me.matrix.interval=null;
		me.matrix.trigger=0;
		me.matrix.counter=1;
		me.matrix.fill=()=>{
			let string="";
			for(let i=0;i<10000;i++){
				string+=Math.floor(Math.random()*2);
			}
			matrix.innerHTML=string;
		}

		blackchatform.addEventListener('submit',(event)=>{
			event.preventDefault();
			if(me.in){
				ajax("php/sendBlackMessage.php","name="+me.name+"&text="+blackchatinput.value);
			}
			else{
				ajax("php/sendBlackMessage.php","text="+blackchatinput.value);
			}
			blackchatinput.value="";				
		});

		me.table={};
		fillTable=(data)=>{
			for(let i=0;i<data.length;i++){
				let color="";
				if(data[i].gender==1){
					color="hiscolor";
				}
				else{
					color="hercolor";
				}

				row=createElement("div","mytablehashrow",color);
				row.innerHTML=(i+1)+".";
				mytable.appendChild(row);

				row=createElement("div","mytablerow",color);
				row.innerHTML=data[i].name;
				mytable.appendChild(row);

				let before=new Date(data[i].age*1000);
				let now=new Date();
				let days=Math.ceil(Math.abs(before-now)/(1000*60*60*24));
				let age="?";

				if(days<7){
					if(days==1){
						age=days+" den";
					}
					else if(days>1 && days<5){
						age=days+" dny";
					}
					else{
						age=days+" dnů";
					}
				}
				else if(days<30){
					let weeks=Math.floor(days/7);
					if(weeks==1){
						age=weeks+" týden";
					}
					else{
						age=weeks+" týdny";
					}
				}
				else if(days<365){
					let months=Math.floor(days/30);
					if(months==1){
						age=months+" měsíc";
					}
					else if(months>1 && months<5){
						age=months+" měsíce";
					}
					else{
						age=months+" měsíců";
					}
				}
				else{
					let years=Math.floor(days/365);
					if(years==1){
						age=years+" rok";
					}
					else if(years>1 && years<5){
						age=years+" roky";
					}
					else{
						age=years+" let";
					}
				}

				row=createElement("div","mytableagerow",color);
				row.innerHTML=age;
				mytable.appendChild(row);

				row=createElement("div","mytablerow",color);
				if(data[i].planet==""){
					row.innerHTML="ne";
				}
				else{
					row.innerHTML=data[i].planet;
				}
				mytable.appendChild(row);

				row=createElement("div","mytablecountrow",color);
				row.innerHTML=data[i].planted;
				mytable.appendChild(row);

				row=createElement("div","mytablecountrow",color);
				if(data[i].personas==0){
					row.innerHTML="žádnou";
				}
				else if(data[i].personas==33){
					row.innerHTML="všechny";
				}
				else{
					row.innerHTML=data[i].personas;
				}
				mytable.appendChild(row);
			}
		}

		fillStatsCallback=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);
				me.table.button.style.display="none";
				mystatscount.innerHTML="Vesmírem už prošlo "+tmp[0].count+" bytostí.";
				mytablelimit.innerHTML="Vypisuji jejich údaje.";

				mytable.style.minHeight=mytable.clientHeight+"px";
				mytable.innerHTML="";

				let header,row;
				header=createElement("div","mytablehashheader");
				header.innerHTML="#@?";
				mytable.appendChild(header);

				header=createElement("div","mytableheader");
				header.innerHTML="Jak se jmenují?";
				mytable.appendChild(header);

				header=createElement("div","mytableageheader");
				header.innerHTML="Kolik jim je?";
				mytable.appendChild(header);

				header=createElement("div","mytableheader");
				header.innerHTML="Mají planetu?";
				mytable.appendChild(header);

				header=createElement("div","mytablecountheader");
				header.innerHTML="Kolik zasadily stromů?";
				mytable.appendChild(header);

				header=createElement("div","mytablecountheader");
				header.innerHTML="Kolik znají osobností?";
				mytable.appendChild(header);

				fillTable(tmp[1]);
			}
		}

		getStatsCallback=(result)=>{
			mytable.innerHTML="";
			if(result.length>0){
				let tmp=JSON.parse(result);
				let header,row;
				let islimit=false;

				if(tmp[0].count==0){
					mystatscount.innerHTML="Vesmír je prázdný. Jsi jeho první bytostí.";
					mytablelimit.innerHTML="Vzpomeň si na své jméno a vypíšu tvé údaje.";
				}
				else if(tmp[0].count==1){
					mystatscount.innerHTML="Vesmírem prošla jedna bytost.";
					mytablelimit.innerHTML="Vypisuji její údaje.";
				}
				else if(tmp[0].count>1 && tmp[0].count<5){
					mystatscount.innerHTML="Vesmírem prošly "+tmp[0].count+" bytosti.";
					mytablelimit.innerHTML="Vypisuji jejich údaje.";
				}
				else{
					mystatscount.innerHTML="Vesmírem už prošlo "+tmp[0].count+" bytostí.";
					if(tmp[0].count<23){
						mytablelimit.innerHTML="Vypisuji jejich údaje.";
					}
					else{
						mytablelimit.innerHTML="Vypisuji 22 nejslavnějších.";
						islimit=true;
					}
				}

				if(tmp[0].count==1){
					header=createElement("div","mytablehashheader");
					header.innerHTML="#@?";
					mytable.appendChild(header);

					header=createElement("div","mytableheader");
					header.innerHTML="Jak se jmenuje?";
					mytable.appendChild(header);

					header=createElement("div","mytableageheader");
					header.innerHTML="Kolik jí je?";
					mytable.appendChild(header);

					header=createElement("div","mytableheader");
					header.innerHTML="Má planetu?";
					mytable.appendChild(header);

					header=createElement("div","mytablecountheader");
					header.innerHTML="Kolik zasadila stromů?";
					mytable.appendChild(header);

					header=createElement("div","mytablecountheader");
					header.innerHTML="Kolik zná osobností?";
					mytable.appendChild(header);
				}
				else if(tmp[0].count>1){
					header=createElement("div","mytablehashheader");
					header.innerHTML="#@?";
					mytable.appendChild(header);

					header=createElement("div","mytableheader");
					header.innerHTML="Jak se jmenují?";
					mytable.appendChild(header);

					header=createElement("div","mytableageheader");
					header.innerHTML="Kolik jim je?";
					mytable.appendChild(header);

					header=createElement("div","mytableheader");
					header.innerHTML="Mají planetu?";
					mytable.appendChild(header);

					header=createElement("div","mytablecountheader");
					header.innerHTML="Kolik zasadily stromů?";
					mytable.appendChild(header);

					header=createElement("div","mytablecountheader");
					header.innerHTML="Kolik znají osobností?";
					mytable.appendChild(header);
				}

				fillTable(tmp[1]);

				if(islimit){
					me.table.filling=false;
					me.table.button=createElement("button","stats-button");
					me.table.button.innerHTML="Chci vypsat všechny.";

					me.table.button.onclick=()=>{
						if(!me.table.filling){
							me.table.filling=true;
							me.table.button.innerHTML="Vypisuji.";
							ajax("php/getStats.php","limitless=true",fillStatsCallback);
						}
					}

					mytable.appendChild(me.table.button);
				}

				matrix.style.display="block";
				me.matrix.interval=setInterval(()=>{
					me.matrix.fill();

					if(me.matrix.counter>0){
						me.matrix.counter--;
						matrix.style.opacity="0.1";
					}
					else{
						if(me.matrix.trigger==0){
							matrix.style.opacity="0.4";
						}
						else if(me.matrix.trigger==3){
							matrix.style.opacity="0.1";
						}
						else if(me.matrix.trigger==5){
							me.matrix.trigger=-1;
						}
						me.matrix.trigger++;
					}
				},1000);
			}
		}

		setSource=(rotatex,rotatey,size,color,name)=>{
			let source={};
			source.main=createElement("div","source");
			source.name=createElement("div","source-name");

			source.main.style.transform="rotateX("+rotatex+"deg) rotateY("+rotatey+"deg) scale("+possitive(rotatey/25,1)+")";

			source.name.innerHTML=name;

			if(system.redgiants.includes(name)){
				color="tomato";
			}
			else if(system.whitedwarfs.includes(name)){
				color="white";
			}

			if(color=="blackhole"){
				source.main.style.backgroundColor="black";
				source.main.style.boxShadow="0px 0px "+(size/8)+"px white";
				source.main.style.cursor="pointer";
				source.name.style.color="white";

				source.main.onclick=()=>{
					document.body.scrollTo(0,0);
					ajax("php/getStats.php","limitless=false",getStatsCallback);
					
					curtain.style.zIndex=100;
					curtain.style.opacity=1;				
					document.body.style.overflow="hidden";

					setTimeout(()=>{
						blackholecurtain.style.borderRadius="1500px";
						blackholecurtain.style.width="3000px";
						blackholecurtain.style.height="3000px";
						blackholecurtain.style.top=((document.body.clientHeight/2)-1500)+"px";
						blackholecurtain.style.marginLeft="-1500px";

						if(me.glade.is.set){
							glade.clean();
							mytree.innerHTML="";
							me.glade.is.set=false;
							me.glade.is.open=false;
						}

						blackholetag.style.zIndex=150;
						blackholetag.style.opacity=1;
					},1000);
				}
			}
			else{
				source.main.style.backgroundColor=color;
				source.main.style.boxShadow="0px 0px "+(size/8)+"px "+color;
			}
			
			source.main.style.width=size+"px";
			source.main.style.height=size+"px";
			source.main.style.borderRadius=size+"px";
			source.main.style.marginLeft="-"+(size/2)+"px";
			source.main.style.marginTop=((system.element.clientHeight/2)-(size/2))+"px";

			system.source.name=source.name;
			system.source.main=source.main;

			source.main.appendChild(source.name);
			system.element.appendChild(source.main);
		}

		ajax("php/init.php");
		setSource(20,70,90,"gold","Slunce");
		setPlanet(1000,20,70,0,3,"gray","Merkur",true);
		setPlanet(1000,20,70,1,6,"orangered","Venuše",true);
		setPlanet(1000,20,70,2,6,"chartreuse","Země",true);
		setPlanet(1000,20,70,3,4,"sienna","Mars",true);
		setPlanet(1000,20,70,4,18,"sandybrown","Jupiter",true);
		setPlanet(1000,20,70,5,14,"wheat","Saturn",true);
		setPlanet(1000,20,70,6,8,"cadetblue","Uran",true);
		setPlanet(1000,20,70,7,8,"cornflowerblue","Neptun",true);

		system.time.changeCycle=(input)=>{
			switch(input){
				case 0:
					return 3;
				case 1:
					return 6;
				case 2:
					return 2;
				case 3:
					return 7;
				case 4:
					return 0;
				case 5:
					return 5;
				case 6:
					return 1;
				case 7:
					return 4;
				default:
					console.log("?");
					return 0;
			}
		};		

		system.time.tick=()=>{
			for(let i=0;i<system.planet.length;i++){
				system.planet[i].element.main.style.marginLeft=system.planet[i].memory.left[system.time.changeCycle(system.planet[i].current.lap)][system.planet[i].current.step]+"px";
				system.planet[i].element.main.style.marginTop=system.planet[i].memory.top[system.time.changeCycle(system.planet[i].current.lap)][system.planet[i].current.step]+"px";
				system.planet[i].current.step++;
				if(system.planet[i].current.step>=system.memory.step[i][system.time.changeCycle(system.planet[i].current.lap)]){
					system.planet[i].current.step=0;
					system.planet[i].current.lap++;

					if(system.planet[i].current.lap==2){
						system.planet[i].element.main.style.zIndex=5;
					}
					else if(system.planet[i].current.lap==6){
						system.planet[i].element.main.style.zIndex=2;
					}
					else if(system.planet[i].current.lap>=8){
						system.planet[i].current.step=0;
						system.planet[i].current.lap=0;
					}
				}
			}
		}

		letMeOut.onclick=()=>{ //zoomout
			if(core.open){
				data.clean();
				if(me.location==1){
					me.location=0;
					laniakea.element.style.zIndex=1;
					galaxy.element.style.zIndex=0;
					galaxy.element.style.transform="rotateX("+galaxy.rotation.x+"deg) rotateY("+galaxy.rotation.y+"deg) scale(0.05)";
					galaxy.element.style.opacity=0;
					galaxy.clean();

					laniakea.element.style.opacity=1;
					laniakea.element.style.width="800px";
					laniakea.element.style.height="800px";
					laniakea.element.style.backgroundSize="800px";
					laniakea.element.style.marginLeft=(laniakea.memory.left-400)+"px";
					laniakea.element.style.marginTop=laniakea.memory.top+"px";
					setTimeout(()=>{
						laniakea.element.style.marginLeft="-400px";
						laniakea.element.style.marginTop="0px";
						setTimeout(()=>{
							setLaniakea();
						},1000);
					},1000);
				}
				else if(me.location==3){
					me.location=2;
					core.element.style.zIndex=0;
					system.element.style.transition="0.5s";
					
					core.element.style.width=core.memory.r+"px";
					core.element.style.height=core.memory.r+"px";
					core.element.style.marginLeft="-"+(core.memory.r/2)+"px";
					core.element.style.marginTop="-"+(core.memory.r/2)+"px";

					setTimeout(()=>{
						system.element.style.opacity=1;
						system.element.style.transform="rotateX("+system.rotation.x+"deg) rotateY("+system.rotation.y+"deg) scale(1)";
						system.element.style.marginLeft=(core.memory.left)+"px";
						system.element.style.marginTop=(core.memory.top)+"px";
						setTimeout(()=>{
							core.element.style.opacity=0;
							system.planet[core.i].element.main.style.display="block";
							system.element.style.transition="1s";
							system.element.style.marginLeft="-400px";
							system.element.style.marginTop="0px";

							system.planet[core.i].element.orbit.back.style.borderTop="1px rgb(70,70,70) solid";
							system.planet[core.i].element.orbit.back.style.borderLeft="1px rgb(70,70,70) solid";
							system.planet[core.i].element.orbit.back.style.borderRight="1px rgb(70,70,70) solid";
							system.planet[core.i].element.orbit.back.style.borderBottom="1px transparent solid";
							system.planet[core.i].element.orbit.front.style.borderTop="1px transparent solid";
							system.planet[core.i].element.orbit.front.style.borderLeft="1px transparent solid";
							system.planet[core.i].element.orbit.front.style.borderRight="1px transparent solid";
							system.planet[core.i].element.orbit.front.style.borderBottom="1px rgb(70,70,70) solid";

							for(let i=0;i<system.planet.length;i++){ //show orbits
								system.planet[i].element.orbit.front.style.display="block";
								system.planet[i].element.orbit.back.style.display="block";
							}

							setTimeout(()=>{
								/*for(let i=0;i<system.planet.length;i++){ //show names
									system.planet[i].element.name.style.display="block";
								}
								system.source.name.style.display="block";*/

								system.element.style.zIndex=1;
								galaxy.element.style.zIndex=0;

								setSystem(system.source.name.innerHTML,false);
							},1000);
						},500);
					},500);
				}
				else if(me.location==2 || me.location==11){

					anomaly.element.style.transform="rotateX("+anomaly.rotation.x+"deg) rotateY("+anomaly.rotation.y+"deg) scale(0.05)";
					anomaly.element.style.marginLeft="-400px";
					anomaly.element.style.marginTop="0px";
					
					me.location=1;
					system.element.style.zIndex=0;
					galaxy.element.style.zIndex=1;
					system.element.style.transform="rotateX("+system.rotation.x+"deg) rotateY("+system.rotation.y+"deg) scale(0.05)";
					galaxy.element.style.width="800px";
					galaxy.element.style.height="800px";
					galaxy.element.style.backgroundSize="800px";
					galaxy.element.style.marginLeft=((galaxy.memory.left)-400)+"px";
					galaxy.element.style.marginTop=(galaxy.memory.top)+"px";
					galaxy.element.style.opacity=1;
					system.element.style.opacity=0;

					setTimeout(()=>{
						galaxy.element.style.transform="rotateX("+galaxy.rotation.x+"deg) rotateY("+galaxy.rotation.y+"deg) scale(1)";
						galaxy.element.style.marginLeft="-400px";
						galaxy.element.style.marginTop="0px";
						setTimeout(()=>{
							setGalaxy();
						},1000);
					},1000);
				}
				else if(me.location==33){
					me.location=1;
					anomaly.element.style.zIndex=0;
					galaxy.element.style.zIndex=1;
					anomaly.element.style.transform="rotateX("+anomaly.rotation.x+"deg) rotateY("+anomaly.rotation.y+"deg) scale(0.05)";
					galaxy.element.style.width="800px";
					galaxy.element.style.height="800px";
					galaxy.element.style.backgroundSize="800px";
					galaxy.element.style.marginLeft=((galaxy.memory.left)-400)+"px";
					galaxy.element.style.marginTop=(galaxy.memory.top)+"px";
					galaxy.element.style.opacity=1;
					anomaly.element.style.opacity=0;
					anomaly.clean();

					setTimeout(()=>{
						galaxy.element.style.transform="rotateX("+galaxy.rotation.x+"deg) rotateY("+galaxy.rotation.y+"deg) scale(1)";
						galaxy.element.style.marginLeft="-400px";
						galaxy.element.style.marginTop="0px";
						setTimeout(()=>{
							setGalaxy();
						},1000);
					},1000);
				}
			}
		}

		processTime=(time)=>{
			let date=new Date(time*1000);
			let hours = date.getHours();
			let minutes = "0"+date.getMinutes();
			return hours+":"+minutes.substr(-2)+" "+date.getDate()+"."+(date.getMonth()+1)+"."+date.getFullYear();
		}

		initColor=(id,color)=>{
			if(!me.connection.color[id].init){
				let i=(me.connection.filter.button.length);
				me.connection.filter.button.push(createElement("button","filter-button"));
				me.connection.filter.button[i].style.backgroundColor=color;
				me.connection.filter.button[i].onclick=()=>{
					if(me.connection.color[id].filter){
						for(let i=0;i<me.connection.messages.color[id].length;i++){
							me.connection.messages.color[id][i].style.display="block";
						}
						me.connection.window.scrollTo(0,me.connection.window.scrollHeight);	
						me.connection.filterin--;
						me.connection.color[id].filter=false;
						me.connection.filter.in.appendChild(me.connection.filter.button[i]);
					}
					else{
						for(let i=0;i<me.connection.messages.color[id].length;i++){
							me.connection.messages.color[id][i].style.display="none";
						}
						me.connection.window.scrollTo(0,me.connection.window.scrollHeight);	
						me.connection.filterin++;
						me.connection.color[id].filter=true;
						me.connection.filter.out.appendChild(me.connection.filter.button[i]);
					}

					if(me.connection.filterin>0){
						me.connection.filter.outtext.innerHTML="Filtruji:";	
					}
					else{
						me.connection.filter.outtext.innerHTML="";
					}
				}
				me.connection.filter.in.appendChild(me.connection.filter.button[i]);
				me.connection.color[id].init=true;
			}
		}

		colorize=(shade)=>{
			let opposite=Math.abs(shade-255);
			let percentage=Math.ceil((shade/255)*100);

			if(percentage<20){
				me.connection.shade.innerHTML="Příliš tmy. ["+percentage+"%]";
			}
			else if(percentage>80){
				me.connection.shade.innerHTML="Příliš světla. ["+percentage+"%]";
			}
			else{
				me.connection.shade.innerHTML="["+percentage+"%]";
			}
			
			me.connection.shade.style.color="rgb("+opposite+","+opposite+","+opposite+")";
			me.connection.window.style.backgroundColor="rgb("+shade+","+shade+","+shade+")";

			let min=25,max=230;
			let two=Math.ceil((shade/255)*200);
			if(two>100){
				let secondhalf=(min+Math.ceil(((two-100)/100)*(max-min)));
				for(let i=0;i<me.connection.messages.color[3].length;i++){
					me.connection.messages.color[3][i].style.color="rgb("+max+","+secondhalf+","+secondhalf+")";
				}
				for(let i=0;i<me.connection.messages.color[2].length;i++){
					me.connection.messages.color[2][i].style.color="rgb("+secondhalf+","+max+","+secondhalf+")";
				}
				for(let i=0;i<me.connection.messages.color[4].length;i++){
					me.connection.messages.color[4][i].style.color="rgb("+secondhalf+","+secondhalf+","+max+")";
				}
			}
			else{
				let firsthalf=(min+Math.ceil((two/100)*(max-min)));
				for(let i=0;i<me.connection.messages.color[3].length;i++){
					me.connection.messages.color[3][i].style.color="rgb("+firsthalf+","+min+","+min+")";
				}
				for(let i=0;i<me.connection.messages.color[2].length;i++){
					me.connection.messages.color[2][i].style.color="rgb("+min+","+firsthalf+","+min+")";
				}
				for(let i=0;i<me.connection.messages.color[4].length;i++){
					me.connection.messages.color[4][i].style.color="rgb("+min+","+min+","+firsthalf+")";
				}
			}
		}

		getInformationCallback=(result)=>{
			me.check.finish(4);
			if(result.length>2){
				let tmp=JSON.parse(result);

				for(let i=(tmp.length-1);i>=0;i--){
					let row=createElement("div","chat-row");
					let date=new Date(tmp[i].time*1000);

					row.style.color=tmp[i].color;
					row.innerHTML="["+processTime(tmp[i].time)+"] "+tmp[i].text;
					me.console.window.appendChild(row);
				}
				me.console.window.scrollTo(0,me.console.window.scrollHeight);
			}
			if(me.console.init){
				setTimeout(()=>{
					me.console.window.scrollTo(0,me.console.window.scrollHeight);
				},200);
				me.console.init=false;
			}
		}

		getMessageCallback=(result)=>{
			let tmp=JSON.parse(result);
			if(tmp[0].length>0){
				for(let i=(tmp[0].length-1);i>=1;i--){
					let row=createElement("div","chat-row");
					let name="",color=0;
					let date=new Date(tmp[0][i].time*1000);

					switch(tmp[0][i].who){
						case 0:
							color=0;
							initColor(0,"black");
							row.style.color="black";
							me.connection.messages.moon++;
							if(me.gender==1){
								name=me.partner.name+": ";
							}
							else{
								name=me.name+": ";
							}
							break;
						case 1:
							color=1;
							initColor(1,"white");
							row.style.color="white";
							me.connection.messages.sun++;
							if(me.gender==1){
								name=me.name+": ";
							}
							else{
								name=me.partner.name+": ";
							}
							break;
						case 2:
							color=2;
							initColor(2,"greenyellow");
							break;
						case 3:
							color=3;
							initColor(3,"tomato");
							break;
						case 4:
							color=4;
							initColor(4,"skyblue");
							break;
						default:
                    		console.log("?");
					}				
					
					row.innerHTML="["+processTime(tmp[0][i].time)+"] "+name+tmp[0][i].text;
					if(me.connection.color[color].filter){
						row.style.display="none";
					}
					
					me.connection.messages.color[color].push(row);
					colorize(tmp[0][0].shade);
					me.connection.window.appendChild(row);
				}
				me.connection.window.scrollTo(0,me.connection.window.scrollHeight);
			}

			if(me.partner.is.set){
				if(tmp[1].online==1 || me.partner.is.bot){
					if(!me.partner.online || me.partner.is.init){
						me.partner.online=true;
						me.profile.status.style.color="greenyellow";
						me.profile.status.innerHTML="[Právě je online.]";
					}
				}
				else{
					if(me.partner.online || me.partner.is.init){
						me.partner.online=false;
						me.profile.status.style.color="tomato";
						me.profile.status.innerHTML="[Právě je offline.]";
					}
				}
				me.partner.is.init=false;
			}

			if(me.connection.init){
				me.connection.init=false;
			}
			me.check.finish(5);
		}

		me.question={};
		me.question.pointer=null;
		me.question.i=null;

		getBlackMessageCallback=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);
				let scroll=false;

				for(let i=0;i<tmp.length;i++){
					if(tmp[i].id==me.question.pointer){
						me.question.i=(i-1);
						break;
					}
				}
				me.question.pointer=tmp[0].id;

				if(me.question.i===null){
					me.question.i=tmp.length-1;
				}

				for(let i=me.question.i;i>=0;i--){
					scroll=true;
					let row=createElement("div","black-chat-row");
					let date=new Date(tmp[i].time*1000);

					row.style.color=tmp[i].color;

					if(tmp[i].name=="?"){
						row.innerHTML="["+processTime(tmp[i].time)+"] "+tmp[i].text;
					}
					else{
						row.innerHTML="["+processTime(tmp[i].time)+"] "+tmp[i].name+": "+tmp[i].text;
					}

					blackchatwindow.appendChild(row);
				}

				if(scroll){
					blackchatwindow.scrollTo(0,blackchatwindow.scrollHeight);
				}
			}
			me.check.finish(11);
		}

		checkBotCallback=(result)=>{
			me.partner.is.typing=false;
		}

		me.connection.decision.trigger="false";
		getDecisionCallback=(result)=>{
			if(me.partner.is.bot && !me.partner.is.typing){
				me.partner.is.typing=true;
				ajax("php/checkBot.php","name="+me.name+"&hash="+me.hash+"&trigger="+me.connection.decision.trigger,checkBotCallback);
			}
			
			let tmp=JSON.parse(result);
			if(me.connection.decision.question!==tmp[0]){
				me.connection.decision.question=parseInt(tmp[0]);

				if(me.connection.decision.question==7){
					me.connection.decision.trigger="true";					
				}

				if(me.connection.decision.question==100 && me.gender==1){
					connection.prepend(me.connection.decision.main);
				}
				else if(me.connection.decision.question==101 && me.gender==0){
					connection.prepend(me.connection.decision.main);
				}
				else if(me.connection.decision.question==4){
					me.partner.is.set=true;
					if(me.gender==0){
						me.profile.sun.name.innerHTML="Mým životem je "+me.partner.name+".";
						me.profile.sun.icon.setAttribute("class","profile-icon sun");
					}
					else{
						me.profile.moon.name.innerHTML="Mou láskou je "+me.partner.name+".";
						me.profile.moon.icon.setAttribute("class","profile-icon moon");
					}
				}
				else if(me.connection.decision.question==11){
					me.planet.name=tmp[1];
					me.planet.color=tmp[2];
					me.planet.energy=330;
					me.planet.beat=1;
					appendProfilePlanet(); 

					let star=tmp[3];
					if(me.location==2){
						if(star==system.source.name.innerHTML){
							data.clean();
							setSystem(star,false);
						}
					}
					else if(me.location==1){
						if(!galaxy.star.includes(star)){
							data.clean();
							setGalaxy();
						}
					}

					if(me.personality.count>0){
						personalityswitchbutton.style.display="block";
						if(me.gender==1){
							personalityswitchbutton.innerHTML="Chci zobrazit její osobnosti.";
							personalityswitchbutton.style.backgroundColor="pink";
						}
						else{
							personalityswitchbutton.innerHTML="Chci zobrazit jeho osobnosti.";
							personalityswitchbutton.style.backgroundColor="skyblue";
						}
					}
				}
			}
			me.check.finish(7);
		}

		fixcallback=(result)=>{
			console.log(result);
		}

		me.glade.init=()=>{
			if(glade.canvases.length>0){
				for(let i=0;i<3;i++){
					me.glade.ui.main.removeChild(glade.canvases[0]);
				}
			}
			
			for(let i=0;i<3;i++){
				let tmp=createElement("canvas","mytree-canvases");
				tmp.style.zIndex=i+5;
				me.glade.ui.main.appendChild(tmp);
				glade.layer[i]=setupCanvas(tmp);
			}
			glade.canvases=document.getElementsByClassName('mytree-canvases');
		}

		me.glade.refreshTime=(time,age)=>{
			if(age==0){
				me.glade.ui.footer.age.innerHTML="Nemá ani rok.";
			}
			else if(age==1){
				me.glade.ui.footer.age.innerHTML="Má rok.";
			}
			else if(age>1 && age<5){
				me.glade.ui.footer.age.innerHTML="Má "+age+" roky.";
			}
			else{
				me.glade.ui.footer.age.innerHTML="Má "+age+" let.";
			}

			if(time<60){
				me.glade.ui.footer.existence.innerHTML="Existuje "+time+" sekund.";
			}
			else{
				let string="";
				if(time>(60*60*24)){
					let day=Math.floor(time/(60*60*24));
					if(day>1 && day<5){
						string=day+" dny";
					}
					else{
						string="1 den";
					}
				}
				else if(time>(60*60)){
					let hour=Math.floor(time/(60*60));
					if(hour==1){
						string="hodinu";
					}
					else if(hour>1 && hour<5){
						string=hour+" hodiny";
					}
					else{
						string=hour+" hodin";
					}
				}
				else{
					let minute=Math.floor(time/60);
					if(minute==1){
						string="minutu";
					}
					else if(minute>1 && minute<5){
						string=minute+" minuty";
					}
					else{
						string=minute+" minut";
					}
				}
				
				me.glade.ui.footer.existence.innerHTML="Existuje "+string+". ["+time+"]";
			}
			
			me.glade.ui.footer.month.innerHTML="Prožívá "+me.string.month[glade.month]+".";
		}

		printAnomaly=(text)=>{
			if(anomaly.pleiades.includes(text)){
				return "hvězdokupy Plejády";
			}
			else if(anomaly.orion.includes(text)){
				return "mlhoviny Orion";
			}
			else{
				return "mlhoviny "+text;
			}
		}

		printGalaxy=(id)=>{
			for(let i=0;i<laniakea.light.length;i++){
				if(laniakea.light[i][10]==id){
					return laniakea.light[i][7];
				}
			}
		}

		getGladeCallback=(result)=>{
			if(result.length>0){
				let tmp=JSON.parse(result);
				setSpeed(glade,me.glade.ui.footer.time,tmp.orbit,false);

				if(tmp.galaxy==0){
					me.glade.ui.footer.location.innerHTML="Je zakořeněný v planetě "+tmp.planet+", obíhající hvězdu "+tmp.star+".";
				}
				else if(tmp.galaxy==111){
					me.glade.ui.footer.location.innerHTML="Je zakořeněný v planetě "+tmp.planet+", patřící do "+printAnomaly(tmp.star)+".";
				}
				else{
					me.glade.ui.footer.location.innerHTML="Je zakořeněný v planetě "+tmp.planet+", patřící do galaxie "+printGalaxy(tmp.galaxy)+".";
				}
				
				me.glade.ui.shadow.floor.style.backgroundColor=tmp.color;
				me.glade.ui.shadow.floor.style.opacity=(possitive(tmp.energy,50)/1000);
				
				glade.time.year=(Math.pow(2,tmp.orbit)*9.375);
				let time=tmp.servertime-tmp.time;
				let age=Math.floor(time/glade.time.year);

				glade.time.current=0;
				glade.init.time=Math.floor(((time%glade.time.year)/glade.time.year)*24000);

				myplant[0]=makeTree(400,200,2,(age+5),50,glade,tmp.end);

				glade.trees.slot.push(0);
				while(!myplant[0].filled){ //tvorba osudu
					grow(myplant[0].branch,myplant[0],myplant,glade,true);
				}
				loadMemory(400,200,myplant[0].branch,tmp.save);
				resetBranches(myplant[0].branch,myplant[0]);

				glade.is.regrow=true;
				while(!myplant[0].key.taken){
					grow(myplant[0].branch,myplant[0],myplant,glade,false);
				}
				glade.is.regrow=false;

				while(glade.time.current<glade.init.time){ //continue
					grow(myplant[0].branch,myplant[0],myplant,glade,false);
					if(glade.season==1 && glade.month>0 && glade.month<=6){
						spring(myplant[0],myplant,glade);
					}
					else if(glade.season==2 && glade.month>6){
						autumn(myplant[0],myplant,glade,true);
					}

					glade.time.current+=glade.tick;
					glade.month=Math.floor(glade.time.current/2000);
				}

				if(glade.season==2 && glade.month>6){ //print leaves
					autumn(myplant[0],myplant,glade,false);
				}

				time-=tmp.timediff;
				me.glade.refreshTime(time,Math.floor(time/glade.time.year));
				me.glade.interval=setInterval(()=>{
					if(myplant.length>0){
						if(me.glade.time>time){
							time=me.glade.time;
						}
						else{
							time++; 
						}
						me.glade.refreshTime(time,Math.floor(time/glade.time.year));
					}
				},1000);

				glade.time.start();
				refreshArrows();
				refreshPointer();
				me.glade.ui.shadow.back.style.opacity=0.4;
				me.glade.is.loading=false;
			}
		}

		getGlade=(id)=>{
			ajax("php/getGlade.php","name="+me.name+"&hash="+me.hash+"&id="+id,getGladeCallback);
		}

		setGlade=()=>{
			mytree.innerHTML="";
			me.glade.is.set=true;
			me.glade.is.init=true;
			me.glade.ui.header=createElement("div","text-row");

			me.glade.ui.main=createElement("div","mytree-main");
			me.glade.ui.shadow={};
			me.glade.ui.shadow.floor=createElement("div","mytree-shadow-floor");
			me.glade.ui.shadow.back=createElement("div","mytree-shadow-back");
			me.glade.ui.arrow={};
			me.glade.ui.arrow.left=createElement("div","mytree-arrow-left");
			me.glade.ui.arrow.left.innerHTML="<";
			me.glade.ui.arrow.right=createElement("div","mytree-arrow-right");
			me.glade.ui.arrow.right.innerHTML=">";

			me.glade.ui.arrow.left.onclick=()=>{
				if(me.glade.pointer.location>0 && !me.glade.is.loading){
					me.glade.pointer.location--;
					me.glade.pointer.id=me.glade.array[me.glade.pointer.location];
					me.glade.ui.shadow.back.style.opacity=1;
					clearTimeout(me.glade.timeout.left);
					me.glade.timeout.left=setTimeout(()=>{
						me.glade.is.loading=true;
						glade.clean();
						me.glade.init();
						getGlade(me.glade.pointer.id);
					},500);
					refreshArrows();
					refreshPointer();
				}
			}

			me.glade.ui.arrow.right.onclick=()=>{
				if((me.glade.pointer.location+1)<me.glade.array.length && !me.glade.is.loading){
					me.glade.pointer.location++;
					me.glade.pointer.id=me.glade.array[me.glade.pointer.location];
					me.glade.ui.shadow.back.style.opacity=1;
					clearTimeout(me.glade.timeout.right);
					me.glade.timeout.right=setTimeout(()=>{
						me.glade.is.loading=true;
						glade.clean();
						me.glade.init();
						getGlade(me.glade.pointer.id);
					},500);
					refreshArrows();
					refreshPointer();
				}
			}

			me.glade.ui.number=createElement("div","text-row");
			me.glade.ui.number.style.color="gold";

			me.glade.ui.footer={};
			me.glade.ui.footer.main=createElement("div","mytree-footer");
			me.glade.ui.footer.location=createElement("div","mytree-footer-row");
			me.glade.ui.footer.time=createElement("div","mytree-footer-row");
			me.glade.ui.footer.existence=createElement("div","mytree-footer-row");
			me.glade.ui.footer.month=createElement("div","mytree-footer-row");
			me.glade.ui.footer.age=createElement("div","mytree-footer-row");

			me.glade.ui.main.appendChild(me.glade.ui.shadow.floor);
			me.glade.ui.main.appendChild(me.glade.ui.shadow.back);
			me.glade.ui.main.appendChild(me.glade.ui.arrow.left);
			me.glade.ui.main.appendChild(me.glade.ui.arrow.right);

			me.glade.ui.footer.main.appendChild(me.glade.ui.footer.location);
			me.glade.ui.footer.main.appendChild(me.glade.ui.footer.time);
			me.glade.ui.footer.main.appendChild(me.glade.ui.footer.existence);
			me.glade.ui.footer.main.appendChild(me.glade.ui.footer.month);
			me.glade.ui.footer.main.appendChild(me.glade.ui.footer.age);

			mytree.appendChild(me.glade.ui.header);
			mytree.appendChild(me.glade.ui.number);
			mytree.appendChild(me.glade.ui.main);		
			mytree.appendChild(me.glade.ui.footer.main);

			me.glade.init();
			getGlade(me.glade.pointer.id);
		}

		setConsole=()=>{
			let chat={};
			chat.main=createElement("div","console-main");
			me.console.window=createElement("div","console-window");

			chat.main.appendChild(me.console.window);
			myConsole.appendChild(chat.main);
			ajax("php/getInformation.php","name="+me.name+"&hash="+me.hash+"&ischeck=1",getInformationCallback);
		}
		
		setConnection=()=>{
			let chat={};
			chat.main=createElement("div","chat");

			me.connection.filter={};
			me.connection.filter.button=[];
			me.connection.filter.main=createElement("div","filter-row");
			me.connection.filter.in=createElement("div","filter-in");
			me.connection.filter.intext=createElement("div","filter-in-text");
			me.connection.filter.out=createElement("div","filter-out");
			me.connection.filter.outtext=createElement("div","filter-out-text");
			me.connection.filter.intext.innerHTML="Zobrazuji:";				

			me.connection.filter.main.onmouseenter=function(){
				this.style.opacity=1;
			}

			me.connection.filter.main.onmouseleave=function(){
				this.style.opacity=0.2;
			}

			me.connection.window=createElement("div","chat-window");
			me.connection.shade=createElement("div","chat-shade");
			chat.input=createElement("input","chat-input");
			chat.form=createElement("form");			
			chat.input.setAttribute("type","text");
			chat.input.setAttribute("minlength","1");
			chat.input.setAttribute("maxlength","500");
			chat.input.setAttribute("placeholder","Napiš zprávu.");
			chat.decision={};
			me.connection.decision.main=createElement("div","decision");
			chat.decision.doyouwant=createElement("div","text-row");
			chat.decision.doyouwant.innerHTML="Chceš s "+me.partner.name+" založit planetu?";
			chat.decision.wrap=createElement("div","decision-wrap");
			chat.decision.yes=createElement("button","decision-button");
			chat.decision.yes.innerHTML="Chci.";
			chat.decision.yes.style.backgroundColor="#5ab300";
			chat.decision.no=createElement("button","decision-button");
			chat.decision.no.innerHTML="Nechci.";
			chat.decision.no.style.backgroundColor="tomato";

			chat.decision.yes.onclick=()=>{
				ajax("php/sendDecision.php","name="+me.name+"&hash="+me.hash);
				me.connection.decision.main.innerHTML="";
			}

			chat.decision.no.onclick=()=>{
				ajax("php/break.php","name="+me.name+"&hash="+me.hash);
			}

			chat.decision.wrap.appendChild(chat.decision.yes); 
			chat.decision.wrap.appendChild(chat.decision.no); 
			me.connection.decision.main.appendChild(chat.decision.doyouwant);
			me.connection.decision.main.appendChild(chat.decision.wrap);

			chat.form.addEventListener('submit',(event)=>{
				event.preventDefault();
				ajax("php/sendMessage.php","name="+me.name+"&hash="+me.hash+"&text="+chat.input.value);
				chat.input.value="";				
			});

			me.connection.filter.out.appendChild(me.connection.filter.outtext);			
			me.connection.filter.in.appendChild(me.connection.filter.intext);
			me.connection.filter.main.appendChild(me.connection.filter.in);
			me.connection.filter.main.appendChild(me.connection.filter.out);
			chat.main.appendChild(me.connection.window);
			chat.main.appendChild(me.connection.shade);
			chat.main.appendChild(chat.form);
			chat.form.appendChild(chat.input);
			connection.appendChild(me.connection.filter.main);
			connection.appendChild(chat.main);

			ajax("php/getMessage.php","name="+me.name+"&hash="+me.hash+"&ischeck=1",getMessageCallback);
			me.connection.in=true;			
		}

		getPartnerCallback=(result)=>{
			if(result.length>0){
				clearInterval(me.whereareyou.interval);
				me.whereareyou.howlong=0;
				connection.innerHTML="";
				me.partner.name=result;
				setConnection();
				if(me.partner.is.dream){
					me.partner.is.bot=true;
					ajax("php/initBot.php","name="+me.name+"&hash="+me.hash);
				}
			}
			else if(me.whereareyou.howlong<=5 || me.partner.is.dream){				
				setTimeout(()=>{
					me.partner.is.dream=false;
					ajax("php/getPartner.php","name="+me.name+"&hash="+me.hash,getPartnerCallback);
				},1000);
			}
			else{
				me.partner.is.dream=true;
				ajax("php/getBot.php","name="+me.name+"&hash="+me.hash,getPartnerCallback);
			}
		}

		makeBeat=()=>{
			if(me.planet.canAnimate && !me.planet.is.leap){
				me.planet.canAnimate=false;
				me.profile.planet.main.style.width="90px";
				me.profile.planet.main.style.height="90px";
				me.profile.planet.main.style.top="3px";
				setTimeout(()=>{
					if(!me.planet.is.leap){
						me.profile.planet.main.style.width="96px";
						me.profile.planet.main.style.height="96px";
						me.profile.planet.main.style.top="0px";
						me.planet.canAnimate=true;
					}
				},200);
			}
		}

		whoBeat=()=>{
			if(me.planet.energy>=1000){
				me.profile.planet.heartprogress.style.color="greenyellow";
				me.profile.planet.main.style.cursor="default";
			}
			else if(me.planet.beat==1){
				me.profile.planet.heartprogress.style.color="skyblue";

				if(me.gender==1){
					me.profile.planet.main.style.cursor="pointer";
				}
				else{
					me.profile.planet.main.style.cursor="default";
				}
			}
			else{
				me.profile.planet.heartprogress.style.color="pink";

				if(me.gender==1){
					me.profile.planet.main.style.cursor="default";
				}
				else{
					me.profile.planet.main.style.cursor="pointer";
				}
			}
		}

		beatCallback=(result)=>{
			if(result.length>0 && !me.planet.is.leap){
				if(result[0]=="["){
					let tmp=JSON.parse(result);
					me.planet.canAnimate=false;
					me.planet.is.leap=true;

					me.profile.planet.main.style.width="80px";
					me.profile.planet.main.style.height="80px";
					me.profile.planet.main.style.top="8px";

					me.planet.beat=tmp[0];
					let heartcount=tmp[1];
					for(let i=0;i<heartcount;i+=10){
						setTimeout(()=>{
							showHeart(me.planet.beat);
							me.planet.energy+=10;
							me.profile.planet.heartprogress.innerHTML="[Má "+negative((me.planet.energy/10),100)+"% energie.]";
						},i*5);
					}
					setTimeout(()=>{
						me.profile.planet.main.style.width="96px";
						me.profile.planet.main.style.height="96px";
						me.profile.planet.main.style.top="0px";
						me.profile.planet.main.style.opacity=(possitive(me.planet.energy,50)/1000);
						me.planet.canAnimate=true;
						me.planet.is.leap=false;
						setTimeout(()=>{
							me.planet.is.waiting=false;
						},1000);
						whoBeat();
					},heartcount*5);
				}
				else{
					let tmp=parseInt(result);
					if(me.planet.energy!==tmp && !me.planet.is.leap){
						me.planet.energy=tmp;
						me.profile.planet.heartprogress.innerHTML="[Má "+negative((me.planet.energy/10),100)+"% energie.]";
						me.profile.planet.main.style.opacity=(possitive(me.planet.energy,50)/1000);
						whoBeat();
					}
					me.planet.is.waiting=false;
				}
			}
		}

		appendProfilePlanet=()=>{
			let profile={};
			profile.wrap=createElement("div");
			me.profile.planet={};
			me.profile.planet.name=createElement("div","text-row");
			me.profile.planet.name.innerHTML="Naší planetou je "+me.planet.name+".";
			me.profile.planet.main=createElement("div","profile-planet");
			me.profile.planet.wrap=createElement("div","profile-planet-wrap");
			me.profile.planet.main.style.background=me.planet.color;
			me.profile.planet.main.style.opacity=(possitive(me.planet.energy,50)/1000);
			me.profile.planet.name.style.marginBottom="40px";	

			me.profile.planet.heartprogress=createElement("div","text-row");
			me.profile.planet.heartprogress.innerHTML="[Má "+negative((me.planet.energy/10),100)+"% energie.]";

			if(me.planet.energy>=1000){
				me.profile.planet.main.style.cursor="default";
				me.profile.planet.heartprogress.style.color="greenyellow";
			}
			else if(me.planet.beat==1){
				me.profile.planet.heartprogress.style.color="skyblue";

				if(me.gender==1){
					me.profile.planet.main.style.cursor="pointer";
				}
				else{
					me.profile.planet.main.style.cursor="default";
				}
			}
			else{
				me.profile.planet.heartprogress.style.color="pink";

				if(me.gender==1){
					me.profile.planet.main.style.cursor="default";
				}
				else{
					me.profile.planet.main.style.cursor="pointer";
				}
			}	

			me.planet.i=0;
			me.profile.planet.main.onclick=()=>{
				if(!me.planet.is.leap){
					ajax("php/beat.php","name="+me.name+"&hash="+me.hash,beatCallback);
				}
			}

			for(let i=0;i<15;i++){
				profile.wrap.appendChild(createElement("div","planet-approach"));
			}

			me.profile.planet.wrap.appendChild(me.profile.planet.main);
			profile.wrap.appendChild(me.profile.planet.wrap);
			profile.wrap.appendChild(me.profile.planet.heartprogress);
			profile.wrap.appendChild(me.profile.planet.name);
			whoami.appendChild(profile.wrap);

			clearInterval(me.planet.interval);
			me.planet.interval=setInterval(()=>{
				makeBeat();
			},1000);
		}

		canPlant=()=>{
			if(me.plant.can){
				if(!me.in){
					seedbank.innerHTML="";
					seedinfo.innerHTML="";
					forestCloak.style.cursor="default";
				}
				else if(forest.is.seeds && forest.is.capacity){
					if(me.phone){
						seedinfo.innerHTML="Dotykem zasadím strom.";
					}
					else{
						seedinfo.innerHTML="Kliknutím zasadím strom.";
					}					
					forestCloak.style.cursor="pointer";
				}
				else{
					seedinfo.innerHTML="";
					forestCloak.style.cursor="default";
				}
			}
		}

		showHeart=(who)=>{
			let approach=document.getElementsByClassName("planet-approach")[me.planet.i];
			let mytop=(10+Math.floor(Math.random()*80));

			if(who==1){
				approach.innerHTML="<div class='redheart-icon'></div>";
			}
			else{
				approach.innerHTML="<div class='blueheart-icon'></div>";
			}
			
			approach.style.marginTop=mytop+"px";
			approach.style.marginLeft=(350+Math.floor(Math.random()*80))+"px";
			approach.style.opacity=1;
			
			setTimeout(()=>{
				approach.style.transition="1s";
				setTimeout(()=>{
					approach.style.marginTop=(mytop-75)+"px";
					approach.style.opacity=0;
					setTimeout(()=>{
						approach.style.transition="0s";
					},900);
				},100);
			},100);

			me.planet.i++;
			if(me.planet.i>=15){
				me.planet.i=0;
			}
		}

		findPartnerCallback=(result)=>{
			if(result=="1"){
				clearInterval(me.whatihave.interval);
				whoami.removeChild(me.profile.whereareyou);
				whoami.removeChild(me.profile.whatineed);
				whoami.removeChild(me.profile.cost);
				me.profile.howlong=createElement("div","how-long");
				me.profile.waiting=createElement("div","text-row");
				me.profile.waiting.style.fontSize="35px";

				if(me.gender==1){
					me.profile.waiting.innerHTML="Hledám Měsíc.";
				}
				else{
					me.profile.waiting.innerHTML="Čekám na Slunce.";
				}
				
				connection.appendChild(me.profile.waiting);
				connection.appendChild(me.profile.howlong);

				me.whereareyou.interval=setInterval(()=>{
					me.whereareyou.howlong++;

					if(me.whereareyou.howlong==1){
						me.profile.howlong.innerHTML="Už sekundu.";
					}
					else if(me.whereareyou.howlong>1 && me.whereareyou.howlong<5){
						me.profile.howlong.innerHTML="Už "+me.whereareyou.howlong+" sekundy.";
					}
					else{
						me.profile.howlong.innerHTML="Už "+me.whereareyou.howlong+" sekund.";
					}
				},1000);

				getPartnerCallback("");
			}
		}

		setHome=()=>{
			ajax("php/initEssence.php","name="+me.name,initEssenceCallback);
			ajax("php/initPersonality.php","name="+me.name+"&hash="+me.hash+"&ispartner=false",initPersonalityCallback);
			myhome.style.display="block";
		}

		me.login.enter=(isBreakup)=>{
			login.style.display="none";
			login.innerHTML="";
			myConsole.innerHTML="";
			setConsole();

			if(!isBreakup && !me.in && !me.init){ //one-time init
				me.in=true;
				me.init=true;

				if(me.location==1){
					data.clean();
					setGalaxy();
				}
				else if(me.location==2){
					data.clean();
					setSystem(system.source.name.innerHTML,0);
				}
				else if(me.location==3){
					data.clean();
					setCore(forest.planet);
				}
				else{
					me.init=false;
				}

				seedbank.style.display="block";
				forestCurrent.style.display="block";

				ajax("php/check.php","name="+me.name+"&hash="+me.hash,checkCallback);
				setHome();
				if(me.partner.is.bot){
					ajax("php/botWelcome.php","name="+me.name+"&hash="+me.hash);
				}
			}
			me.seeds.init=true;
				
			me.profile.sun={};
			me.profile.moon={};
			me.profile.wrap=createElement("div");
			me.profile.seeds=createElement("div","text-row");
			me.profile.status=createElement("div","text-row");
			me.profile.sun.name=createElement("div","text-row");
			me.profile.sun.icon=createElement("div","profile-icon","sun");
			me.profile.sun.name.style.marginBottom="40px";
			me.profile.moon.name=createElement("div","text-row");
			me.profile.moon.icon=createElement("div","profile-icon","moon");
			me.profile.moon.name.style.marginBottom="40px";

			if(me.gender==1){
				me.string.winterstory[0]="Utekl jsem do přírody.";
				me.profile.sun.name.innerHTML="Jmenuji se "+me.name+".";
				me.profile.wrap.appendChild(me.profile.sun.icon);
				me.profile.wrap.appendChild(me.profile.seeds);
				me.profile.wrap.appendChild(me.profile.sun.name);
			}
			else{
				me.string.winterstory[0]="Utekla jsem do přírody.";
				me.profile.moon.name.innerHTML="Jmenuji se "+me.name+".";
				me.profile.wrap.appendChild(me.profile.moon.icon);
				me.profile.wrap.appendChild(me.profile.seeds);
				me.profile.wrap.appendChild(me.profile.moon.name);
			}
			whoami.appendChild(me.profile.wrap);

			if(me.connection.decision.break!==null){ //print ex
				if(me.gender==1){
					if(me.connection.decision.break==1){
						me.profile.moon.name.innerHTML="Opustil jsem "+me.ex+".";
					}
					else{
						me.profile.moon.name.innerHTML="Opustila mne "+me.ex+".";
					}
					me.profile.moon.icon.setAttribute("class","profile-icon sadmoon");
					me.profile.wrap.appendChild(me.profile.moon.icon);
					me.profile.wrap.appendChild(me.profile.moon.name);
				}
				else{
					if(me.connection.decision.break==1){
						me.profile.sun.name.innerHTML="Opustila jsem "+me.ex+".";
					}
					else{
						me.profile.sun.name.innerHTML="Opustil mne "+me.ex+".";
					}
					me.profile.sun.icon.setAttribute("class","profile-icon sadsun");
					me.profile.wrap.appendChild(me.profile.sun.icon);
					me.profile.wrap.appendChild(me.profile.sun.name);				
				}
				me.connection.decision.break=null;
			}

			if(me.partner.name.length===0){
				me.profile.cost=createElement("div","text-row");		
				me.profile.cost.style.marginTop="20px";				
				me.profile.whatineed=createElement("div","text-row");
				me.profile.whatineed.style.color="tomato";
				me.profile.whereareyou=createElement("button","create-planet");
				me.profile.whereareyou.innerHTML="Chci založit planetu.";
				me.profile.whereareyou.onclick=()=>{
					if(me.whereareyou.init){						
						ajax("php/findPartner.php","name="+me.name+"&hash="+me.hash,findPartnerCallback);
					}
					else{
						me.whereareyou.init=true;
						me.profile.cost.innerHTML="Služba má svou cenu - 10 <img class='plant-icon' src='img/plant.svg'>.";
						me.whatihave.tick();
						me.whatihave.interval=setInterval(()=>{
							if(me.whatihave.count!==me.seeds.count){
								me.whatihave.tick();
							}
						},1000);

						if(me.gender==1){
							me.profile.moon.name.innerHTML="Nemám Měsíc.";
							me.profile.moon.icon.setAttribute("class","profile-icon sadmoon");
							me.profile.wrap.appendChild(me.profile.moon.icon);
							me.profile.wrap.appendChild(me.profile.status);
							me.profile.wrap.appendChild(me.profile.moon.name);
							me.profile.whereareyou.innerHTML="Chci Měsíc.";
						}
						else{
							me.profile.sun.name.innerHTML="Nemám Slunce.";
							me.profile.sun.icon.setAttribute("class","profile-icon sadsun");
							me.profile.wrap.appendChild(me.profile.sun.icon);
							me.profile.wrap.appendChild(me.profile.status);
							me.profile.wrap.appendChild(me.profile.sun.name);
							me.profile.whereareyou.innerHTML="Chci Slunce.";
						}
					}				
				}
				whoami.appendChild(me.profile.whereareyou);
				whoami.appendChild(me.profile.cost);
				whoami.appendChild(me.profile.whatineed);
				
			}
			else{
				setConnection();
				me.partner.is.set=true;

				if(me.gender==1){					
					me.profile.moon.name.innerHTML="Mou láskou je "+me.partner.name+".";
					me.profile.wrap.appendChild(me.profile.moon.icon);
					me.profile.wrap.appendChild(me.profile.status);
					me.profile.wrap.appendChild(me.profile.moon.name);
				}
				else{
					me.profile.sun.name.innerHTML="Mým životem je "+me.partner.name+".";
					me.profile.wrap.appendChild(me.profile.sun.icon);
					me.profile.wrap.appendChild(me.profile.status);
					me.profile.wrap.appendChild(me.profile.sun.name);
				}
				whoami.appendChild(me.profile.wrap);

				if(me.planet.name.length>0){
					appendProfilePlanet();
				}
			}
		}

		for(let i=0;i<logininput.length;i++){
			logininput[i].addEventListener("keyup",(event)=>{ //login with enter
				if(event.keyCode===13){
					letMeEnter.click();
				}
			}); 
		}

		loginCallback=(result)=>{
			if(result=="1"){
				warning.innerHTML="Znám jen číslice a písmena.";
			}
			else if(result=="2"){
				warning.innerHTML="Nenašel jsem tě.";
			}
			else if(result=="3"){
				warning.innerHTML="Heslo nesedí.";
			}
			else if(result=="4"){
				warning.innerHTML="Už jsi online.";
			}
			else{
				let tmp=JSON.parse(result);
				me.name=tmp.name;
				me.password=tmp.password;
				me.gender=tmp.gender;
				me.partner.name=tmp.partner;
				me.partner.is.bot=tmp.isbot;
				me.planet.name=tmp.planet;
				me.planet.color=tmp.color;
				me.planet.energy=tmp.energy;
				me.planet.beat=tmp.beat;
				me.seeds.count=tmp.seeds;
				me.hash=tmp.hash;
				me.winterstory.is=tmp.iswinterstory;
				me.login.enter(false);
			}
		}

		registerCallback=(result)=>{
			if(result=="1"){
				warning.innerHTML="Znám jen číslice a písmena.";
			}
			else if(result=="2"){
				warning.innerHTML="Jméno už existuje.";
			}
			else{
				me.name=logininput[0].value.charAt(0).toUpperCase()+logininput[0].value.slice(1);
				me.password=logininput[1].value;
				//me.gender is defined
				me.partner.name="";
				me.planet.name="";
				me.planet.color="";
				me.hash=result;
				me.winterstory.is=false;
				me.login.enter(false);
			}
		}

		letMeEnter.onclick=()=>{
			if(me.login.init && me.registration.init){
				if(!me.registration.answered){
					warning.innerHTML="Co následuje po úterý?";
				}
				else if(me.gender==2){
					warning.innerHTML="Kým jsem?";
				}
				else if(logininput[0].value.length<3 || logininput[1].value.length<3){
					warning.innerHTML="Minimum jsou 3 znaky.";
				}
				else if(logininput[0].value.length>17 || logininput[1].value.length>17){
					warning.innerHTML="Maximum je 17 znaků.";
				}
				else{
					warning.innerHTML="";
					ajax("php/register.php","name="+logininput[0].value+"&password="+logininput[1].value+"&gender="+me.gender,registerCallback);
				}
			}
			else if(me.login.init){
				if(logininput[0].value.length==0 || logininput[1].value.length==0){
					warning.innerHTML="Tak piš.";
				}
				else if(logininput[0].value.length<3 || logininput[1].value.length<3){
					warning.innerHTML="Minimum jsou 3 znaky.";
				}
				else if(logininput[0].value.length>17 || logininput[1].value.length>17){
					warning.innerHTML="Maximum je 17 znaků.";
				}
				else{
					warning.innerHTML="";
					ajax("php/login.php","name="+logininput[0].value+"&password="+logininput[1].value,loginCallback);
				}
			}
			else{
				me.login.init=true;
				letMeEnter.style.marginTop="0px";
				letMeEnter.innerHTML="Pamatuji se.";
				letMeStart.style.display="block";
				inputbar.style.display="block";
				warning.style.display="block";
			}
		}		

		letMeStart.onclick=()=>{
			if(me.registration.init){
				me.registration.init=false;
				warning.innerHTML="";
				letMeEnter.innerHTML="Pamatuji se.";
				letMeStart.innerHTML="Nevím.";
				loveorlifebar.style.display="none";
				questionbar.style.display="none";

				clearInterval(me.registration.interval);
				questionbar.style.opacity=1;
				me.registration.answered=false;
				for(let i=0;i<answer.length;i++){
					answer[i].style.cursor="cursor";
				}

			}
			else{
				me.registration.init=true;
				warning.innerHTML="";
				letMeEnter.innerHTML="Chci začít.";
				letMeStart.innerHTML="Už vím.";
				loveorlifebar.style.display="block";
				questionbar.style.display="block";
				let days=["středa","čtvrtek","pátek","sobota"];
				me.registration.interval=setInterval(()=>{
					shuffleArray(days);
					answer[0].innerHTML=days[0];
					answer[1].innerHTML=days[1];
					answer[2].innerHTML=days[2];
					answer[3].innerHTML=days[3];
				},1000)
			}
		}

		sun.onclick=()=>{
			sun.style.opacity=1;
			moon.style.opacity=0.4;
			loveorlife.innerHTML="Mužem.";
			me.gender=1;
		}

		moon.onclick=()=>{
			sun.style.opacity=0.4;
			moon.style.opacity=1;
			loveorlife.innerHTML="Ženou.";
			me.gender=0;
		}

		for(let i=0;i<answer.length;i++){
			answer[i].onclick=()=>{
				for(let i=0;i<answer.length;i++){
					answer[i].style.cursor="default";
				}
				questionbar.style.opacity=0;
				clearInterval(me.registration.interval);
				me.registration.answered=true;
			}
		}

		let tmp=Math.floor((Math.random()*(system.planet[system.planet.length-1].year/2))+(system.planet[system.planet.length-1].year/2));
		for(let i=0;i<tmp;i++){
			system.time.tick();
		}
		system.time.start();

		letMeIn.onclick=()=>{
			if(me.location==-1){
				me.location=1;
				letMeIn.style.cursor="default";
				letMeIn.style.opacity=0;
				entryBar.style.zIndex=-1;
				warmWelcome.style.opacity=0;				
				system.element.style.zIndex=0;
				system.element.style.opacity=0;
				galaxy.element.style.zIndex=1;
				setTimeout(()=>{
					system.time.stop();
					system.element.style.top="0px";
					entryBar.style.display="none";
					profile.style.display="block";
					online.style.opacity=1;
					profile.style.opacity=1;
					galaxy.element.style.opacity=1;
						
					setGalaxy();
				},1000);
			}
		}

		refreshArrows=()=>{
			if(me.glade.array.length==1){
				me.glade.ui.arrow.left.style.display="none";
				me.glade.ui.arrow.right.style.display="none";
			}
			else if(me.glade.array.length==(me.glade.pointer.location+1)){
				me.glade.ui.arrow.left.style.display="block";
				me.glade.ui.arrow.right.style.display="none";
			}
			else if(me.glade.pointer.location==0){
				me.glade.ui.arrow.left.style.display="none";
				me.glade.ui.arrow.right.style.display="block";
			}
			else{
				me.glade.ui.arrow.left.style.display="block";
				me.glade.ui.arrow.right.style.display="block";
			}
		}

		refreshPointer=()=>{
			if(me.glade.array.length==1){
				me.glade.ui.number.innerHTML="";
			}
			else if(me.glade.array.length==(me.glade.pointer.location+1) && me.glade.array.length>1){
				me.glade.ui.number.innerHTML="[Ukazuji poslední.]";
			}
			else if(me.glade.pointer.location<4){
				me.glade.ui.number.innerHTML="[Ukazuji "+me.glade.string[me.glade.pointer.location]+".]";
			}
			else if(me.glade.pointer.location==6 || me.glade.pointer.location==7){
				me.glade.ui.number.innerHTML="[Ukazuji "+(me.glade.pointer.location+1)+"mý.]";
			}
			else if(me.glade.pointer.location<20){
				me.glade.ui.number.innerHTML="[Ukazuji "+(me.glade.pointer.location+1)+"tý.]";
			}
			else if(me.glade.pointer.location<100){
				let string="tý";
				let n=me.glade.pointer.location+1;
				if(n%10==1){
					string="ní";
				}
				else if(n%10==2){
					string="hý";
				}
				else if(n%10==3){
					string="tí";
				}
				me.glade.ui.number.innerHTML="[Ukazuji "+(me.glade.pointer.location+1)+string+".]";				
			}
			else{
				me.glade.ui.number.innerHTML="[Ukazuji číslo "+(me.glade.pointer.location+1)+".]";
			}
		}

		getTreeTimeCallback=(result)=>{
			if(result.length>0){
				me.glade.time=parseInt(result);
			}
			me.check.finish(33);
		}

		refreshGlade=()=>{
			me.glade.pointer.location=0;
			me.glade.pointer.id=me.glade.array[0];

			if(me.glade.is.set){
				me.glade.is.loading=true;
				me.glade.ui.shadow.back.style.opacity=1;
				setTimeout(()=>{
					glade.clean();
					me.glade.init();
					getGlade(me.glade.pointer.id);
				},500);
			}
		}

		emptyGlade=()=>{
			me.glade.array=[];
			glade.clean();
			mytree.innerHTML="";
			me.glade.is.set=false;
			let text=createElement("div","text-row");
			text.innerHTML="Právě mi neroste žádný strom.";
			mytree.appendChild(text);
			me.glade.is.loading=false;
		}

		refreshTreeCount=()=>{
			if(me.glade.array.length==1){
				me.glade.ui.header.innerHTML="Právě mi roste strom.";
			}
			else if(me.glade.array.length>1 && me.glade.array.length<5){
				me.glade.ui.header.innerHTML="Právě mi rostou "+me.glade.array.length+" stromy.";
			}
			else{
				me.glade.ui.header.innerHTML="Právě mi roste "+me.glade.array.length+" stromů.";
			}
		}

		refreshTrees=(result)=>{
			if(result.length>0 && !me.glade.is.loading){
				let tmp=JSON.parse(result);
				if(tmp.length==0){ //empty array
					if(me.glade.is.init){
						emptyGlade();
					}
					else if(me.glade.array.length!==0 && myplant.length==0 && me.glade.is.set){
						me.glade.is.loading=true;
						me.glade.ui.shadow.back.style.opacity=1;
						setTimeout(()=>{
							emptyGlade();
						},1000);
					}
				}
				else{
					if(me.glade.array.length!==tmp.length || me.glade.is.init){
						me.glade.array=tmp;
						
						if(me.glade.array.includes(me.glade.pointer.id)){
							me.glade.pointer.location=me.glade.array.indexOf(me.glade.pointer.id);
						}
						else{
							if(myplant.length==0){
								refreshGlade();
							}
							else{
								me.glade.array.splice(me.glade.pointer.location,0,me.glade.pointer.id);
							}
						}

						if(!me.glade.is.set){
							me.glade.pointer.location=0;
							me.glade.pointer.id=me.glade.array[0];
							setGlade();
						}

						refreshTreeCount();
						refreshArrows();
						refreshPointer();
					}
					me.check.start(33);
					ajax("php/getTreeTime.php","id="+me.glade.pointer.id,getTreeTimeCallback);
				}
				if(me.glade.is.init){
					me.glade.is.init=false;
				}
			}
			me.check.finish(3);
		}

		refreshSeeds=(result)=>{
			me.check.finish(0);
			if(result.length>0){
				let tmp=parseInt(result);
				if(me.seeds.count!==tmp || me.seeds.init){
					me.seeds.count=tmp;

					if(tmp==0){
						forest.is.seeds=false;
						me.profile.seeds.innerHTML="[Nemám žádný <img class='plant-icon' src='img/plant.svg'>.]";
						me.profile.seeds.style.color="tomato";
						seedbank.innerHTML="[Nemám žádný <img class='plant-icon' src='img/plant.svg'>.]";
						seedbank.style.color="tomato";
					}
					else{
						forest.is.seeds=true;
						me.profile.seeds.innerHTML="[Mám "+tmp+" <img class='plant-icon' src='img/plant.svg'>.]";
						me.profile.seeds.style.color="greenyellow";
						seedbank.innerHTML="[Mám "+tmp+" <img class='plant-icon' src='img/plant.svg'>.]";
						seedbank.style.color="greenyellow";
						
					}
					canPlant();

					if(me.seeds.init){
						me.seeds.init=false;
					}
				}
			}
		}

		checkForestCallback=(result)=>{
			me.check.finish(2);
			if(result.length>2){
				let tmp=JSON.parse(result);
				while(plant.length<tmp.length && forest.active){
					plantThemTree(tmp[plant.length]);
				}
			}
		}

		releasePartnerCallback=(result)=>{
			me.check.finish(8);
			me.connection.decision.break=parseInt(result);
			if(me.connection.decision.break==0 || me.connection.decision.break==1){
				me.ex=me.partner.name;
				me.partner.is.set=false;
				me.partner.is.bot=false;
				me.whereareyou.init=false;
				initConnection();
				connection.innerHTML="";
				whoami.innerHTML="";
				
				me.partner.name="";
				me.planet.name="";
				me.planet.color="";
				me.planet.energy=330;
				me.planet.beat=1;

				personalityswitchbutton.style.display="none";
				if(me.personality.is.switch){
					me.personality.is.switch=false;
					me.personality.count=0;
					personalitybar.innerHTML="";
					ajax("php/initPersonality.php","name="+me.name+"&hash="+me.hash+"&ispartner=false",initPersonalityCallback);
				}

				me.login.enter(true);
			}
		}

		isBreakCallback=(result)=>{
			if(result=="0"){
				if(!me.connection.init){
					me.check.start(5);
					ajax("php/getMessage.php","name="+me.name+"&hash="+me.hash+"&ischeck=0",getMessageCallback);
				}

				if(me.planet.name.length>0){
					if(!me.planet.is.leap && !me.planet.is.waiting){
						me.planet.is.waiting=true;
						if(me.partner.is.bot && me.planet.beat!==me.gender && me.planet.energy<1000 && !forest.active){
							ajax("php/beatBot.php","name="+me.name+"&hash="+me.hash,beatCallback);
						}
						else{
							ajax("php/checkBeat.php","name="+me.name+"&hash="+me.hash,beatCallback);
						}
					}
					else if(me.planet.energy>=1000){
						me.planet.is.waiting=false;
					}
				}
				else{
					if(me.connection.messages.moon>3 && me.connection.messages.sun>3){
						me.check.start(7);
						ajax("php/getDecision.php","name="+me.name+"&hash="+me.hash,getDecisionCallback);
					}
				}
			}
			else if(result=="1"){
				me.check.start(8);
				ajax("php/releasePartner.php","name="+me.name+"&hash="+me.hash,releasePartnerCallback);
			}
			else if(result=="2"){
				me.check.start(8);
				releasePartnerCallback("0");
			}
			me.check.finish(1);
		}

		me.check={};
		me.check.queue=[];
		me.check.start=(input)=>{
			me.check.queue.push(input);
		}
		me.check.finish=(input)=>{
			if(me.check.queue.includes(input)){
				me.check.queue.splice(me.check.queue.indexOf(input),1);
			}
		}

		me.global.print=()=>{
			if(me.global.online==0){
				online.innerHTML="Vesmírem nebloudí žádná bytost.";
			}
			else if(me.global.online==1){
				online.innerHTML="Vesmírem bloudí 1 bytost.";
			}
			else if(me.global.online>1 && me.global.online<5){
				online.innerHTML="Vesmírem bloudí "+me.global.online+" bytosti.";
			}
			else{
				online.innerHTML="Vesmírem bloudí "+me.global.online+" bytostí.";
			}
		}

		checkCallback=(result)=>{
			let tmp=parseInt(result);
			if(me.global.online!==tmp){
				me.global.online=tmp;
				me.global.print();
			}

			me.check.start(0);
			ajax("php/getSeeds.php","name="+me.name+"&hash="+me.hash,refreshSeeds);

			if(me.connection.in){
				me.check.start(1);
				ajax("php/isBreak.php","name="+me.name+"&hash="+me.hash,isBreakCallback);
			}

			if(me.seeds.count==0 && me.glade.array.length==0){
				ajax("php/saveme.php","name="+me.name+"&hash="+me.hash);
			}

			if(forest.active){
				me.check.start(2);
				ajax("php/getForest.php","planet="+forest.planet,checkForestCallback);
			}

			if(me.glade.is.open){
				me.check.start(3);
				ajax("php/getTrees.php","name="+me.name,refreshTrees);
			}

			if(!me.console.init){
				me.check.start(4);
				ajax("php/getInformation.php","name="+me.name+"&hash="+me.hash+"&ischeck=0",getInformationCallback);
			}

			if(me.location==11){
				me.check.start(11);
				ajax("php/getBlackMessage.php","name="+me.name,getBlackMessageCallback);
			}

			me.interval.check=setInterval(()=>{
				if(me.check.queue.length==0){
					clearInterval(me.interval.check);

					setTimeout(()=>{
						ajax("php/check.php","name="+me.name+"&hash="+me.hash,checkCallback);
					},200);
				}
			},100);
		}

		lookCallback=(result)=>{
			if(!me.in){
				let tmp=parseInt(result);
				if(me.global.online!==tmp){
					me.global.online=tmp;
					me.global.print();
				}

				if(forest.active){
					me.check.start(2);
					ajax("php/getForest.php","planet="+forest.planet,checkForestCallback);
				}

				if(me.location==11){
					me.check.start(11);
					ajax("php/getBlackMessage.php","name="+me.name,getBlackMessageCallback);
				}

				me.interval.look=setInterval(()=>{
				if(me.check.queue.length==0){
					clearInterval(me.interval.look);
					setTimeout(()=>{
						if(!me.in){
							ajax("php/look.php","",lookCallback);
						}
					},200);
				}
			},100);
			}
		}
		ajax("php/look.php","",lookCallback);

		skipMenu=()=>{
			me.location=1;
			letMeIn.style.cursor="default";
			letMeIn.style.opacity=0;
			entryBar.style.zIndex=-1;
			warmWelcome.style.opacity=0;				
			system.element.style.zIndex=0;
			system.element.style.opacity=0;
			galaxy.element.style.zIndex=1;
			system.time.stop();
			system.element.style.top="0px";
			entryBar.style.display="none";
			profile.style.display="block";
			online.style.opacity=1;
			profile.style.opacity=1;
			galaxy.element.style.opacity=1;
			setGalaxy();
			letMeEnter.click();
			logininput[0].value="sparkle";
			logininput[1].value="12345";
			letMeEnter.click();
			gotocellar.click();
			/*herb[0].click();*/
		}
		skipMenu();
        
        canvasWrap.style.width=forest.canvas.width+"px";
        canvasWrap.style.height=forest.canvas.height+"px";
        
        function setupCanvas(canvas){
            let dpr=window.devicePixelRatio || 1;
            let rect=canvas.getBoundingClientRect();
            canvas.width=rect.width*dpr;
            canvas.height=rect.height*dpr;
            let ctx=canvas.getContext('2d');
            ctx.scale(dpr,dpr);
            return ctx;
        }   
        
		var place={};
		place.element=[];
		forest.init=()=>{
			for(let i=0;i<forest.canvas.layers;i++){
				let tmp=createElement("canvas","canvases");
				tmp.style.zIndex=i;
				canvasWrap.appendChild(tmp);
				forest.layer[i]=setupCanvas(tmp);
			}
			forest.canvases=document.getElementsByClassName('canvases');
			
			for(let i=0;i<7;i++){
				let canvasShadow=document.createElement("div");
				canvasShadow.setAttribute("class","canvas-shadow");
				canvasShadow.style.left=((i*110)+20)+"px";
				canvasShadow.style.top=(forest.sky+100)+"px";
				canvasShadow.setAttribute("place",i);
				canvasShadow.setAttribute("x",((i*110)+20)+50);
				canvasShadow.setAttribute("y",(forest.sky+100)+50);
				canvasWrap.appendChild(canvasShadow);
				place.element.push(canvasShadow);
			}

			for(let i=0;i<6;i++){
				let canvasShadow=document.createElement("div");
				canvasShadow.setAttribute("class","canvas-shadow");
				canvasShadow.style.left=((i*110)+70)+"px";
				canvasShadow.style.top=(forest.sky+70)+"px";
				canvasShadow.setAttribute("place",i+7);
				canvasShadow.setAttribute("x",((i*110)+70)+50);
				canvasShadow.setAttribute("y",(forest.sky+70)+50);
				canvasWrap.appendChild(canvasShadow);
				place.element.push(canvasShadow);
			}

			for(let i=0;i<7;i++){
				let canvasShadow=document.createElement("div");
				canvasShadow.setAttribute("class","canvas-shadow");
				canvasShadow.style.left=((i*110)+20)+"px";
				canvasShadow.style.top=(forest.sky+40)+"px";
				canvasShadow.setAttribute("place",i+7+6);
				canvasShadow.setAttribute("x",((i*110)+20)+50);
				canvasShadow.setAttribute("y",(forest.sky+40)+50);
				canvasWrap.appendChild(canvasShadow);
				place.element.push(canvasShadow);
			}    
		}

        const getCircularReplacer=()=>{
            const seen=new WeakSet();
            return(key,value)=>{
                if(typeof value==="object" && value!==null){
                    if(seen.has(value)){
                        return;
                    }
                    seen.add(value);
                }
                return value;
            };
        };      

		fakesplit=(branch,tree)=>{
			branch.isAdult=true;
			branch.child=[];
	
			tree.branches+=tree.multiplier;
	
			branch.i=0;
			branch.j=0;            
			while(branch.i<tree.generation){ //3^0+3^1+3^2+3^3 etc..
				branch.j+=Math.pow(tree.multiplier,branch.i)
				branch.i++;
			}
	
			if(tree.branches>branch.j){
				tree.generation++;
			}
	
			branch.i=0;
			while(branch.i<tree.multiplier){
				branch.child[branch.i]={};
				branch.child[branch.i].i=0;
				branch.child[branch.i].j=0;
				branch.child[branch.i].isAdult=false;
				branch.child[branch.i].vitality=branch.vitality-tree.decrease;
				branch.i++;
			}
		}

		fakegrow=(branch,tree)=>{
			if(!branch.isAdult){
				fakesplit(branch,tree);
			}
			else{
				if(branch.vitality>tree.limit){
					branch.j=0;
					while(branch.j<tree.multiplier){
						fakegrow(branch.child[branch.j],tree);
						branch.j++;
					}
				}
				else{
					tree.isActive=false;
				}
			}
		}

        predictGeneration=(root,limit,multiplier,decrease)=>{
            let tree={};
            tree.isActive=true;
            tree.generation=1;
            tree.branches=1;
            tree.branch={};
            tree.branch.isAdult=false;
            tree.branch.vitality=root;
            tree.branch.i=0;
            tree.branch.j=0;

			tree.limit=limit;
			tree.multiplier=multiplier;
			tree.decrease=decrease;
        
            while(tree.isActive){
                fakegrow(tree.branch,tree);
            }
            return tree.generation;
        }    
        
        makeTree=(x,y,layer,age,spread,forest,end)=>{
            let tree={};
            tree.i=0;
            tree.j=0;
            tree.n=0;
            tree.b=0; // nesahat!
            tree.l=0; // nesahat!
            tree.x=x;
            tree.y=y;
            tree.filled=false;
            tree.alive=true;
        
            tree.layer={};
            tree.layer.back=layer-2;
            tree.layer.trunk=layer-1;
            tree.layer.front=layer;

			forest.canvases[tree.layer.trunk].style.transition="0s";
			forest.canvases[tree.layer.back].style.opacity=1;
			forest.canvases[tree.layer.trunk].style.opacity=1;
			forest.canvases[tree.layer.front].style.opacity=1;
        
            /*tree.distance=possitive(Math.ceil(2*((y-forest.sky)/earth)),1); //1-2
        
            if(tree.distance==2){
                tree.zoom=2;
            }
            else{
                tree.zoom=1;
            }*/

            tree.zoom=1;
            tree.brush=tree.zoom;
            tree.step=tree.zoom;
        
            tree.branch={};
            tree.branch.chance={};
            tree.branch.chance.left=50; //50
            tree.branch.chance.right=50; //50 
            tree.spread=spread; // 10-50
         
            tree.growth={};
            tree.growth.step={};
        
            tree.growth.step.root=1.25;
            tree.growth.step.limit=1;
            tree.decrease=2;         
        
            tree.growth.ceil=24;
            tree.growth.age=age;
			tree.growth.end=end;
        
            if(age>tree.growth.ceil){
                tree.growth.current=tree.growth.ceil;
            }
            else{
                tree.growth.current=age; // 3 je minimum
            }
        
            tree.root=Math.ceil(tree.growth.step.root*tree.growth.ceil); //30 je vitalita prvni branche
            tree.limit=tree.growth.step.limit*tree.growth.ceil; //24           
        
            tree.multiplier=3; //3         
            tree.main=1; //hlavni vetev
            tree.branch.isMain=true; 
        
            tree.generation=1;            
            tree.branches=1;    
        
            tree.difference={};  
            tree.difference.x=0;
            tree.difference.y=0;   
        
            tree.key={};
            tree.key.generation=0;
            tree.key.position=0;
            tree.key.taken=true;
        
            tree.leaf={};
            tree.leaf.x=[];
            tree.leaf.y=[];
            tree.leaf.ground=[];
            tree.leaf.wind={};
            tree.leaf.wind.x=[];
            tree.leaf.wind.y=[];
            tree.leaf.progress=0;
            tree.leaf.ceil=0;
            tree.leaf.multiplier=1;
            tree.leaf.r=[];
            tree.leaf.g=[];
            tree.leaf.b=[];
        
            for(let i=0;i<6;i++){
                tree.leaf.x[i]=[];
                tree.leaf.y[i]=[];
                tree.leaf.ground[i]=[];
                tree.leaf.wind.x[i]=[];
                tree.leaf.wind.y[i]=[];
            }
        
            tree.autumn={};
            tree.autumn.colorize={};
            tree.autumn.progress=0;            
            tree.autumn.phase=0;
            tree.autumn.ready=false;
            tree.autumn.colorize.skip=0;
            tree.autumn.delay=0;
            tree.autumn.delayed=false;
        
            tree.palette={};
            tree.palette.trunk={};
        
            tree.palette.trunk.from={};
            tree.palette.trunk.from.r=50;
            tree.palette.trunk.from.g=25;
            tree.palette.trunk.from.b=0;
        
            tree.palette.trunk.to={};
            tree.palette.trunk.to.r=100;
            tree.palette.trunk.to.g=50;
            tree.palette.trunk.to.b=0;
        
            tree.palette.trunk.current={};
            tree.palette.trunk.current.r=tree.palette.trunk.from.r;
            tree.palette.trunk.current.g=tree.palette.trunk.from.g;
            tree.palette.trunk.current.b=tree.palette.trunk.from.b;
            tree.palette.trunk.memory=[];
            
            tree.branch.x=tree.x;
            tree.branch.y=tree.y;
            tree.branch.strike=Math.floor(Math.random()*100); //0-99;            
                          
            tree.branch.generation=tree.generation;
            tree.branch.vitality=tree.root;
            tree.branch.health=0; 
            tree.branch.memory={};  
            tree.branch.memory.static={};
            tree.branch.memory.static.x=[];
            tree.branch.memory.static.y=[];
            tree.branch.memory.x=[];
            tree.branch.memory.y=[];
            tree.branch.memory.progress=0;
            tree.branch.i=0;
            tree.branch.j=0;
        
            tree.generationPredict=predictGeneration(tree.root,tree.limit,tree.multiplier,tree.decrease);
            tree.palette.trunk.memory[tree.generationPredict]="rgb("+tree.palette.trunk.current.r+","+tree.palette.trunk.current.g+","+tree.palette.trunk.current.b+")";
            for(tree.i=(tree.generationPredict-1);tree.i>=0;tree.i--){
                tree.palette.trunk.current.r+=((tree.palette.trunk.to.r-tree.palette.trunk.from.r)/tree.generationPredict);
                tree.palette.trunk.current.g+=((tree.palette.trunk.to.g-tree.palette.trunk.from.g)/tree.generationPredict);
                tree.palette.trunk.current.b+=((tree.palette.trunk.to.b-tree.palette.trunk.from.b)/tree.generationPredict);
                tree.palette.trunk.memory[tree.i]="rgb("+tree.palette.trunk.current.r+","+tree.palette.trunk.current.g+","+tree.palette.trunk.current.b+")";
            }
        
            return tree;
        };

		setSpeed=(forest,tag,result,isForest)=>{
			forest.speed=result;

			let string;
			if(isForest){
				string="Čas plyne rychlostí ";
			}
			else{
				string="Čas mu plyne rychlostí ";
			}

			switch(forest.speed){
				case 8:
					tag.innerHTML="Čas se zastavil.";
					forest.tick=0;
					break;
				case 7:
					tag.innerHTML=string+"den za sekundu a půl."; //rok za 1200 sekund
					forest.tick=1; //20 ticků = reálná sekunda, 2000 ticků = herní měsíc, 24000 ticků = herní rok - oběhnu ho za 1200sekund
					forest.spring.skip=1;
					forest.autumn.gravity=2;
					forest.autumn.colorize.skip=1;
					forest.autumn.skip=2;
					forest.autumn.density=100;
					forest.autumn.delay=45;
					break;
				case 6:
					tag.innerHTML=string+"měsíc za 50 sekund.";
					forest.tick=2; //40 ticků = reálná sekunda - oběhnu ho za 600sekund
					forest.spring.skip=1;
					forest.autumn.gravity=3;
					forest.autumn.colorize.skip=1;
					forest.autumn.skip=3;
					forest.autumn.density=50;
					forest.autumn.delay=40;
					break;
				case 5:
					tag.innerHTML=string+"měsíc za 25 sekund.";
					forest.tick=4; //80 ticků = reálná sekunda - oběhnu ho za 300sekund
					forest.spring.skip=1;
					forest.autumn.gravity=3;
					forest.autumn.colorize.skip=2;
					forest.autumn.skip=4;
					forest.autumn.density=25;
					forest.autumn.delay=35;
					break;
				case 4:
					tag.innerHTML=string+"měsíc za 12 sekund a půl.";
					forest.tick=8; //160 ticků - oběhnu ho za 150sekund
					forest.spring.skip=2;
					forest.autumn.gravity=4;
					forest.autumn.colorize.skip=3;
					forest.autumn.skip=5;
					forest.autumn.density=21;
					forest.autumn.delay=30;
					break;
				case 3:
					tag.innerHTML=string+"měsíc za 6 sekund.";
					forest.tick=16; //320 ticků - oběhnu ho za 75sekund
					forest.spring.skip=3;
					forest.autumn.gravity=5;
					forest.autumn.colorize.skip=5;
					forest.autumn.skip=6;
					forest.autumn.density=10;
					forest.autumn.delay=25;
					break;
				case 2:
					tag.innerHTML=string+"rok za 45 sekund.";
					forest.tick=32; //640 ticků - oběhnu ho za 37.5 sekund
					forest.spring.skip=6;
					forest.autumn.gravity=6;
					forest.autumn.colorize.skip=10;
					forest.autumn.skip=7;
					forest.autumn.density=6;
					forest.autumn.delay=20;
					break;
				case 1:
					tag.innerHTML=string+"rok za 20 sekund.";
					forest.tick=64; //1200 ticků - oběhnu ho za 18.75 sekund
					forest.spring.skip=12;
					forest.autumn.gravity=7;
					forest.autumn.colorize.skip=20;
					forest.autumn.skip=12;
					forest.autumn.density=3;
					forest.autumn.delay=15;
					break;
				case 0:
					tag.innerHTML=string+"rok za 10 sekund.";
					forest.tick=128; //2400 ticků - oběhnu ho za 9.375 sekund
					forest.spring.skip=36;
					forest.autumn.gravity=10;
					forest.autumn.colorize.skip=60;
					forest.autumn.skip=24;
					forest.autumn.density=1;
					forest.autumn.delay=10;
					break;
				default:
					console.log("?");
			}
		}

		function saveMemory(branch){
			let result={};
			result.memory=branch.memory.static;

			if(typeof branch.child != "undefined"){
				result.child=[];
				for(let i=0;i<branch.child.length;i++){
					result.child[i]=saveMemory(branch.child[i]);
				}
			}

			return result;
		}
        
		function loadMemory(x,y,branch,save){
			for(let i=0;i<branch.memory.x.length;i++){
				branch.memory.static.x[i]=save.memory.x[i]+x;
				branch.memory.x[i]=save.memory.x[i]+x;
				branch.memory.static.y[i]=save.memory.y[i]+y;
				branch.memory.y[i]=save.memory.y[i]+y;
			}
			
			if(typeof branch.child != "undefined"){
				for(let i=0;i<branch.child.length;i++){
					loadMemory(x,y,branch.child[i],save.child[i]);
				}
			}
		}
        
        generateTree=(pick,save,time,end)=>{
			let age=Math.floor(time/forest.time.year); //forest.time.year - kolik sekund trvá rok

			let x=parseInt(place.element[pick].getAttribute("x"));
			let y=parseInt(place.element[pick].getAttribute("y"));

			canvasWrap.removeChild(place.element[pick]);

			let t=plant.length;
			plant[t]=makeTree(x,y,((t+1)*3),(age+5),50,forest,end);

			forest.trees.slot.push(t);

			while(!plant[t].filled){ //tvorba osudu
				grow(plant[t].branch,plant[t],plant,forest,true);
			}

			loadMemory(x,y,plant[t].branch,save);
			resetBranches(plant[t].branch,plant[t]);
		}
		
		takeEnergy=()=>{
			if(forest.energy>=(forest.speed+1)){
				forest.energy-=(forest.speed+1);
			}
			else{
				forest.energy=0;
			}
		}

		refreshCapacity=(capacity,energy,speed)=>{
			forestGround.style.opacity=possitive(((energy/10)*2),25)/100;
			let stamina=Math.ceil(energy/(speed+1));
			forestCurrent.style.color="greenyellow";
			forest.is.capacity=true;
			if(capacity==0 || stamina==0){
				forest.is.capacity=false;
				forestCurrent.style.color="tomato";
				if(stamina==0){
					forestCurrent.innerHTML="[Země je zapomenutá.]";
				}
				else{
					forestCurrent.innerHTML="[Země je plná.]";
				}
			}
			else if(capacity==1 || stamina==1){
				forestCurrent.innerHTML="[Země udrží poslední strom.]";
			}
			else if(capacity>1 && capacity<5){
				if(stamina>capacity){
					forestCurrent.innerHTML="[Země udrží "+capacity+" stromy.]";
				}
				else{
					forestCurrent.innerHTML="[Země udrží "+stamina+" stromy.]";
				}
			}
			else{
				if(stamina>capacity){
					forestCurrent.innerHTML="[Země udrží "+capacity+" stromů.]";
				}
				else{
					forestCurrent.innerHTML="[Země udrží "+stamina+" stromů.]";
				}
			}
			canPlant();
		}

		getForestCallback=(result)=>{
			if(result.length>2){
				let tmp=JSON.parse(result);
				let current=Math.floor(Date.now()/1000)-tmp[0].time;

				forest.time.current=0;
				forest.init.time=Math.floor(((current%forest.time.year)/forest.time.year)*24000);
				
				for(let i=0;i<tmp.length;i++){
					let current=Math.floor(Date.now()/1000)-tmp[i].time;
					generateTree(tmp[i].pick,tmp[i].save,current,tmp[i].end);
				}

				let picks=[];
				for(let i=0;i<tmp.length;i++){
					picks.push(tmp[i].pick);
				}
				picks.sort(function(a,b){return b-a});

				for(let i=0;i<tmp.length;i++){
					place.element.splice(picks[i],1);
				}

				forest.is.regrow=true;
				for(let t=0;t<plant.length;t++){
					while(!plant[t].key.taken){
						grow(plant[t].branch,plant[t],plant,forest,false);
					}
				}
				forest.is.regrow=false;

				while(forest.time.current<forest.init.time){ //continue
					for(let t=0;t<plant.length;t++){
						grow(plant[t].branch,plant[t],plant,forest,false);
						if(forest.season==1 && forest.month>0 && forest.month<=6){
							spring(plant[t],plant,forest);
						}
						else if(forest.season==2 && forest.month>6){
							autumn(plant[t],plant,forest,true);
						}
					}
					forest.time.current+=forest.tick;
					forest.month=Math.floor(forest.time.current/2000);
				}

				for(let t=0;t<plant.length;t++){
					if(forest.season==2 && forest.month>6){ //print leaves
						autumn(plant[t],plant,forest,false);
					}
				}

				if(plant.length>1){
					sortLayers();
				}
			}
			forest.loading(false);
			forest.time.start();
			forest.active=true;
		}
        
        function sortLayers(){
            let tmp=[],i,j;
        
            for(i=0;i<plant.length;i++){
                tmp[i]=plant[i].y;
            }
        
            tmp.sort(function(a, b){return a-b});
        
            for(j=0;j<tmp.length;j++){
                for(i=0;i<tmp.length;i++){
                    if(plant[j].y==tmp[i]){
                        forest.canvases[plant[j].layer.back].style.zIndex=((i+1)*3)-2;
                        forest.canvases[plant[j].layer.trunk].style.zIndex=((i+1)*3)-1;
                        forest.canvases[plant[j].layer.front].style.zIndex=((i+1)*3);
                        break;
                    }
                }
            }
        }

        var approachi=0;
        var approach=document.getElementsByClassName("approach");
        showText=(x,y,color,text)=>{
            approach[approachi].innerHTML="<div style='color: "+color+"'>"+text+"</div>";
            approach[approachi].style.color=color;
            approach[approachi].style.top=(y-100)+"px";
            approach[approachi].style.left=(x-100)+"px";
            approach[approachi].style.opacity=1;
            approach[approachi].style.display="block";

            setTimeout(function(i,y){
                approach[i].style.transition="1s";
                setTimeout(function(i,y){
                    approach[i].style.top=(y-160)+"px";
                    approach[i].style.opacity=0;
                    setTimeout(function(i){
                        approach[i].style.transition="0s";
                        approach[i].style.display="none";
                    },1000,i);
                },10,i,y);
            },10,approachi,y);

            approachi++;
            if(approachi>=approach.length){
                approachi=0;
            }
		}
		
		plantTreeCallback=(result)=>{
			if(result.length>0){
				takeEnergy();

				canvasWrap.removeChild(place.element[forest.pick]);
				place.element.splice(forest.pick,1);     
				forest.trees.slot.push(me.plant.slot);				
				plant[me.plant.t]=makeTree(me.plant.x,me.plant.y,((me.plant.slot+1)*3),5,50,forest,parseInt(result));

				while(!plant[me.plant.t].filled){ //tvorba osudu
                    grow(plant[me.plant.t].branch,plant[me.plant.t],plant,forest,true);
				}

				loadMemory(me.plant.x,me.plant.y,plant[me.plant.t].branch,me.plant.save);
				resetBranches(plant[me.plant.t].branch,plant[me.plant.t]);

                if(me.plant.t>0){
                    sortLayers();
                }

				refreshSeeds((me.seeds.memory).toString());
				showText(me.plant.x,me.plant.y,forest.color,"Zasazeno!");
				refreshCapacity(forest.max-plant.length,forest.energy,forest.speed);
			}
			setTimeout(()=>{
				me.plant.can=true;
				canPlant();
			},500);
		}
        
        function shuffle(){
            let arrLength=0;
            let argsLength=arguments.length;
            let rnd,tmp;
        
            for(let index=0;index<argsLength;index+=1){
                if(index===0){
                    arrLength=arguments[0].length;
                }
            }
        
            while(arrLength){
                rnd=Math.floor(Math.random()*arrLength);
                arrLength-=1;
                
                for(argsIndex=0;argsIndex<argsLength;argsIndex+=1){
                    tmp=arguments[argsIndex][arrLength];
                    arguments[argsIndex][arrLength]=arguments[argsIndex][rnd];
                    arguments[argsIndex][rnd]=tmp;
                }
            }
        };
        
        function age(tree,prepare){
            tree.autumn.progress=0;
            tree.autumn.phase=0;
            tree.autumn.ready=false;
            tree.key.taken=false;
        
            if(!prepare){
                tree.growth.age++;
            }
        
            if(prepare || tree.growth.age<tree.growth.ceil){
                if(!prepare){
                    tree.growth.current++;
                }
                tree.key.pastGeneration=tree.key.generation;
                tree.key.generation=predictGeneration(Math.ceil(tree.growth.step.root*tree.growth.current),Math.ceil(tree.growth.step.limit*tree.growth.current),tree.multiplier,tree.decrease)-1; //root,limit,multiplier,decrease
                tree.key.position=Math.ceil(tree.growth.step.root*tree.growth.current)-(tree.decrease*tree.key.generation);
                tree.limit=Math.ceil(tree.growth.step.limit*tree.growth.current);
                tree.branch.vitality=Math.ceil(tree.growth.step.root*tree.growth.current);
            }
            
            resetMemory(tree.branch,tree);
			resetBranches(tree.branch,tree);
        }
        
        function resetMemory(branch,tree){
            if(typeof branch.child != "undefined"){
                branch.i=0;
                while(branch.i<tree.multiplier){  
        
                    for(branch.j=0;branch.j<branch.child[branch.i].memory.y.length;branch.j++){
                        branch.child[branch.i].memory.x[branch.j]=branch.child[branch.i].memory.static.x[branch.j];
                        branch.child[branch.i].memory.y[branch.j]=branch.child[branch.i].memory.static.y[branch.j];
                    }
        
                    resetMemory(branch.child[branch.i],tree);
                    branch.i++;                  
                }                  
            }  
        }
        
        function resetBranches(branch,tree){
            if(typeof branch.child != "undefined"){
                branch.i=0;
                while(branch.i<tree.multiplier){
        
                    if(((Math.ceil(tree.growth.step.root*tree.growth.current)-1)-(tree.decrease*(branch.generation-1)))>0){
                        tree.difference.x=(branch.child[branch.i].memory.x[0]-branch.memory.x[Math.ceil(tree.growth.step.root*tree.growth.current)-1-(tree.decrease*(branch.generation-1))]);
                        tree.difference.y=(branch.child[branch.i].memory.y[0]-branch.memory.y[Math.ceil(tree.growth.step.root*tree.growth.current)-1-(tree.decrease*(branch.generation-1))]);
                    }
                    else{
                        tree.difference.x=0;
                        tree.difference.y=0;
                    }
        
                    for(branch.j=0;branch.j<branch.child[branch.i].memory.y.length;branch.j++){
                        branch.child[branch.i].memory.x[branch.j]-=tree.difference.x;
                        branch.child[branch.i].memory.y[branch.j]-=tree.difference.y;
                    }
        
                    branch.child[branch.i].vitality=branch.vitality-tree.decrease;                   
                    resetBranches(branch.child[branch.i],tree);
                    branch.i++;
                }         
            }                       
            branch.health=0;
            branch.memory.progress=0;
        };
        
        function clearCrown(tree){   
            tree.autumn.delay=0;
            tree.autumn.delayed=false;
            tree.leaf.x=[];
            tree.leaf.y=[];
            tree.leaf.ground=[];
            tree.leaf.wind.x=[];
            tree.leaf.wind.y=[];
            tree.leaf.progress=0;
            tree.leaf.r=[];
            tree.leaf.g=[];
            tree.leaf.b=[];
        
            for(let i=0;i<6;i++){
                tree.leaf.x[i]=[];
                tree.leaf.y[i]=[];
                tree.leaf.ground[i]=[];
                tree.leaf.wind.x[i]=[];
                tree.leaf.wind.y[i]=[];
            }
        }  
        
        function winter(plant,forest){
            for(let t=0;t<plant.length;t++){
                forest.canvases[plant[t].layer.back].style.opacity=0;
                forest.canvases[plant[t].layer.front].style.opacity=0;                                         
                clearCrown(plant[t]);
                age(plant[t],false);

                if(plant[t].growth.age>=plant[t].growth.end){ // konec
                    forest.trees.coffin.push(t);
                }
            }

            while(forest.trees.coffin.length>0){
                let item=forest.trees.coffin.pop();
                let index=forest.trees.slot.indexOf(item);
                forest.trees.slot.splice(index,1);
                forest.layer[plant[item].layer.trunk].clearRect(0,0,forest.canvas.width,forest.canvas.height);
				plant.splice(item,1);
            }
        
            forest.time.current=0;
            forest.season=0;
            forest.autumn.ceil=0;
            forest.winter.is=false;
			
			refreshCapacity(forest.max-plant.length,forest.energy,forest.speed);
        };
        
        function fall(tree,forest,isInit){                     
            for(tree.i=0;tree.i<tree.leaf.progress;tree.i++){
                for(tree.j=0;tree.j<6;tree.j++){
                    if(tree.leaf.y[tree.j][tree.i]<tree.leaf.ground[tree.j][tree.i]){
                        tree.leaf.y[tree.j][tree.i]+=forest.autumn.gravity*tree.brush;
                        if(tree.leaf.wind.x[tree.j][tree.i]==0){
                            if(Math.floor(Math.random()*2)==0){
                                tree.leaf.wind.x[tree.j][tree.i]=(Math.floor(Math.random()*21)-10)*forest.autumn.wind*tree.brush;
                            }
                        }
                        else{
                            if(tree.leaf.wind.x[tree.j][tree.i]>0){
                                tree.leaf.x[tree.j][tree.i]+=tree.brush;
                                tree.leaf.wind.x[tree.j][tree.i]-=tree.brush;
                            }
                            else{
                                tree.leaf.x[tree.j][tree.i]-=tree.brush;
                                tree.leaf.wind.x[tree.j][tree.i]+=tree.brush;
                            }
                        }
        
                        if(tree.leaf.wind.y[tree.j][tree.i]==0){
                            if(Math.floor(Math.random()*4)==0){
                                tree.leaf.wind.y[tree.j][tree.i]=(Math.floor(Math.random()*5)-2)*tree.brush;
                            }
                        }
                        else{
                            if(tree.leaf.wind.y[tree.j][tree.i]>0){
                                tree.leaf.ground[tree.j][tree.i]+=tree.brush;
                                tree.leaf.wind.y[tree.j][tree.i]-=tree.brush;
                            }
                            else{
                                tree.leaf.ground[tree.j][tree.i]-=tree.brush;
                                tree.leaf.wind.y[tree.j][tree.i]+=tree.brush;
                            }
                        }
                    }
        
                    if(!isInit){
                        if(tree.leaf.ground[tree.j][tree.i]<tree.y){
                            forest.layer[tree.layer.back].fillStyle="rgb("+tree.leaf.r[tree.i]+","+tree.leaf.g[tree.i]+","+tree.leaf.b[tree.i]+")";
                            if(tree.key.generation>3){
                                forest.layer[tree.layer.back].fillRect(tree.leaf.x[tree.j][tree.i],tree.leaf.y[tree.j][tree.i],tree.brush*2,tree.brush*2);
                            }
                            else{
                                forest.layer[tree.layer.back].fillRect(tree.leaf.x[tree.j][tree.i],tree.leaf.y[tree.j][tree.i],tree.brush*2,tree.brush);
                            }
                        }
                        else{
                            forest.layer[tree.layer.front].fillStyle="rgb("+tree.leaf.r[tree.i]+","+tree.leaf.g[tree.i]+","+tree.leaf.b[tree.i]+")";
                            if(tree.key.generation>3){
                                forest.layer[tree.layer.front].fillRect(tree.leaf.x[tree.j][tree.i],tree.leaf.y[tree.j][tree.i],tree.brush*2,tree.brush*2);
                            }
                            else{
                                forest.layer[tree.layer.back].fillRect(tree.leaf.x[tree.j][tree.i],tree.leaf.y[tree.j][tree.i],tree.brush*2,tree.brush);
                            }
                        }
                    }
                }
            }                
        };        
        
        function autumn(tree,plant,forest,isInit){
            if(tree.autumn.ready){
                if((tree.leaf.r.length==0 || tree.leaf.y[5][tree.leaf.r.length-1]>=tree.leaf.ground[5][tree.leaf.r.length-1]) && !tree.autumn.delayed){
                    if(tree.autumn.delay<forest.autumn.delay){
                        tree.autumn.delay++;
                        tree.autumn.delayed=true;
                    }
                    else{
                        tree.autumn.ready=false;
        
                        tree.j=0;                      
                        for(tree.i=0;tree.i<plant.length;tree.i++){
                            if(!plant[tree.i].autumn.ready){
                                tree.j++;         
                            }                   
                        }
                        if(tree.j==plant.length){ // gotcha
                            forest.winter.is=true;
                        }
                    }
                }
                else{
                    forest.layer[tree.layer.back].clearRect(0,0,forest.canvas.width,forest.canvas.height);
                    forest.layer[tree.layer.front].clearRect(0,0,forest.canvas.width,forest.canvas.height);
        
                    if(Math.floor(Math.random()*(forest.autumn.density*(5-tree.autumn.phase)))<tree.autumn.phase){                         
                        if(tree.leaf.ceil<Math.floor(Math.random()*forest.autumn.ceil) && tree.key.generation==3 && tree.l<forest.autumn.ceil){ // strom nejvyssim poctem listu 100%, strom s pulkou 50%
                            tree.l+=tree.leaf.ceil*16;
                        }
                        else{
                            tree.l=tree.leaf.ceil;
                            if((tree.leaf.progress<(tree.leaf.r.length-(forest.autumn.skip+1))) && forest.autumn.skip>0){
                                for(tree.n=0;tree.n<6;tree.n++){
                                    tree.leaf.y[tree.n].splice(tree.leaf.progress+1,forest.autumn.skip);
                                    tree.leaf.x[tree.n].splice(tree.leaf.progress+1,forest.autumn.skip);
                                    tree.leaf.wind.y[tree.n].splice(tree.leaf.progress+1,forest.autumn.skip);
                                    tree.leaf.wind.x[tree.n].splice(tree.leaf.progress+1,forest.autumn.skip);
                                    tree.leaf.ground[tree.n].splice(tree.leaf.progress+1,forest.autumn.skip);
                                }
                                tree.leaf.r.splice(tree.leaf.progress+1,forest.autumn.skip);
                                tree.leaf.g.splice(tree.leaf.progress+1,forest.autumn.skip);
                                tree.leaf.b.splice(tree.leaf.progress+1,forest.autumn.skip);
                            }
                            tree.leaf.progress++;
                       }                      
                    }
        
                    fall(tree,forest,isInit);
                    
                    while(tree.autumn.colorize.skip>0){
                        tree.autumn.colorize.skip--;                       
                        for(tree.j=tree.leaf.progress;tree.j<tree.leaf.r.length;tree.j++){
                            //50,125,10
                            if(tree.autumn.phase==1){ // green =(R+100,G+0)> orange
                                tree.leaf.r[tree.j]+=forest.autumn.colorize.step*2;
                            }
                            else if(tree.autumn.phase==2){ // orange =(R+50,G-100)> red
                                tree.leaf.r[tree.j]+=forest.autumn.colorize.step;
                                tree.leaf.g[tree.j]-=forest.autumn.colorize.step*2;
                            }
                            else if(tree.autumn.phase==3){ // red =(R-60,G+30)> brown
                                tree.leaf.r[tree.j]-=forest.autumn.colorize.step*2;
                                tree.leaf.g[tree.j]+=forest.autumn.colorize.step;
                            }                                            
                        }                    
        
                        if(tree.autumn.phase<4){
                            if(tree.autumn.progress>0){
                                tree.autumn.progress--;
                            }
                            else{
                                if(tree.autumn.phase==0){ // zahajeni
                                    tree.autumn.progress=Math.floor(50/forest.autumn.colorize.step);
                                }
                                else if(tree.autumn.phase==1){
                                    tree.autumn.progress=Math.floor(50/forest.autumn.colorize.step);
                                }
                                else{
                                    tree.autumn.progress=Math.floor(30/forest.autumn.colorize.step);
                                }
        
                                tree.autumn.phase++;
                            }  
                        }
                    }
                    tree.autumn.colorize.skip=forest.autumn.colorize.skip;
                    if(!isInit){
                        for(tree.j=tree.leaf.progress;tree.j<tree.leaf.r.length;tree.j++){
                            for(tree.i=0;tree.i<6;tree.i++){
                                forest.layer[tree.layer.back].fillStyle="rgb("+tree.leaf.r[tree.j]+","+tree.leaf.g[tree.j]+","+tree.leaf.b[tree.j]+")";
                                if(tree.key.generation>3){
                                    forest.layer[tree.layer.back].fillRect(tree.leaf.x[tree.i][tree.j],tree.leaf.y[tree.i][tree.j],tree.brush*2,tree.brush*2);
                                }
                                else{
                                    forest.layer[tree.layer.back].fillRect(tree.leaf.x[tree.i][tree.j],tree.leaf.y[tree.i][tree.j],tree.brush*2,tree.brush);
                                }
                            }
                        }
                    }
        
                    if(tree.autumn.delayed){
                        tree.autumn.delayed=false;
                    }
                }
            } 
        };
        
        function spring(tree,plant,forest){
            tree.n=0;
            while(!tree.autumn.ready && tree.n<forest.spring.skip){ //urychleni
                for(tree.i=0;tree.i<6;tree.i++){
                    forest.layer[tree.layer.back].fillStyle="rgb("+tree.leaf.r[tree.leaf.progress]+","+tree.leaf.g[tree.leaf.progress]+","+tree.leaf.b[tree.leaf.progress]+")";
                    if(tree.key.generation>3){
                        forest.layer[tree.layer.back].fillRect(tree.leaf.x[tree.i][tree.leaf.progress],tree.leaf.y[tree.i][tree.leaf.progress],tree.brush*2,tree.brush*2);
                    }
                    else{
                        forest.layer[tree.layer.back].fillRect(tree.leaf.x[tree.i][tree.leaf.progress],tree.leaf.y[tree.i][tree.leaf.progress],tree.brush*2,tree.brush);
                    }
                }               
                
                if(tree.leaf.progress==0){
                    tree.autumn.ready=true;
                    tree.j=0;                      
                    for(tree.i=0;tree.i<plant.length;tree.i++){
                        if(plant[tree.i].autumn.ready){
                            tree.j++;         
                        }                   
                    }
                    if(tree.j==plant.length){ // gotcha
                        for(let i=0;i<plant.length;i++){
                            if(plant[i].leaf.r.length>forest.autumn.ceil){
                                forest.autumn.ceil=plant[i].leaf.r.length;
                            }
                            plant[i].leaf.ceil=plant[i].leaf.r.length;
                        }
                        forest.season++;
                    }
                }
                else{
                    tree.leaf.progress--;
                }
        
                tree.n++;
            }
        };                       
        
        function stepUp(branch,tree){
            branch.strike=Math.floor(Math.random()*100);
        
            if(branch.strike<branch.chance.left){
                branch.x-=tree.step;     
            }
            else if(branch.strike>(100-branch.chance.right)){
                branch.x+=tree.step;
            }
        
            if(branch.strike<((((branch.vitality*1.5)-tree.limit)/((tree.root*1.5)-tree.limit))*100)){
                branch.y-=tree.step;
            }
            else{
                branch.y+=tree.step;
            }
        };
        
        function regrow(branch,tree,forest,filling){
            if(!filling){
                forest.layer[tree.layer.trunk].fillStyle=tree.palette.trunk.memory[(tree.key.generation+1)-branch.generation];   
                forest.layer[tree.layer.trunk].fillRect(branch.memory.x[branch.memory.progress],branch.memory.y[branch.memory.progress],(((tree.key.generation+1)-branch.generation))*tree.brush,(((tree.key.generation+1)-branch.generation))*tree.brush);
            }
        
            branch.memory.progress++;
            if(branch.memory.progress>((Math.ceil(tree.growth.step.root*tree.growth.current))-(tree.decrease*(branch.generation-1)))){
                branch.memory.progress=0;
            }           
		};
		
		setLeafs=(branch,tree)=>{
			branch.j=0;
			tree.leaf.x[0][tree.leaf.progress]=(branch.memory.x[branch.health]-(((tree.key.generation-tree.generation)+4))+Math.floor(Math.random()*((((tree.key.generation-tree.generation)+4)*2)+1))*tree.brush); //2,3,4 + 5,7,9
			tree.leaf.y[0][tree.leaf.progress]=(branch.memory.y[branch.health]-(((tree.key.generation-tree.generation)+4))+Math.floor(Math.random()*((((tree.key.generation-tree.generation)+4)*2)+1))*tree.brush);
			branch.j++;
			while(branch.j<6){
				tree.leaf.x[branch.j][tree.leaf.progress]=(branch.memory.x[branch.health]-(((tree.key.generation-tree.generation)+8))+Math.floor(Math.random()*((((tree.key.generation-tree.generation)+4)*4)+1))*tree.brush);
				tree.leaf.y[branch.j][tree.leaf.progress]=(branch.memory.y[branch.health]-(((tree.key.generation-tree.generation)+8))+Math.floor(Math.random()*((((tree.key.generation-tree.generation)+4)*4)+1))*tree.brush);
				branch.j++;
			}                     

			tree.leaf.r[tree.leaf.progress]=(Math.floor(Math.random()*50)+50);
			tree.leaf.g[tree.leaf.progress]=(Math.floor(Math.random()*50)+125);
			tree.leaf.b[tree.leaf.progress]=(Math.floor(Math.random()*15)+10);

			for(branch.j=0;branch.j<6;branch.j++){ // ground + wind definiton
				tree.leaf.ground[branch.j][tree.leaf.progress]=tree.y;
				tree.leaf.wind.x[branch.j][tree.leaf.progress]=0;
				tree.leaf.wind.y[branch.j][tree.leaf.progress]=0;
			}
			tree.leaf.progress++;
		}
        
        function grow(branch,tree,plant,forest,filling){
			if(branch.health<branch.vitality){
				if(tree.growth.age<(tree.growth.end-1) && !filling){
					switch(tree.key.generation){
						case 4:
							if(branch.generation>2){ //17-24 ~ 9 diff ~ tree.growth.current
								if(Math.floor(Math.random()*(24-tree.growth.current))<=Math.floor((24-tree.growth.current)/2)){
									setLeafs(branch,tree);
								}
							}
							break;
						case 3:
							if(branch.generation>1){ //9-16 ~ 9 diff ~ tree.growth.current
								if(Math.floor(Math.random()*(16-tree.growth.current))<=Math.floor((16-tree.growth.current)/2)){
									setLeafs(branch,tree);
								}
							}
							break;
						default:
							if(branch.generation>1){ //5-9
								if(Math.floor(Math.random()*4)==0){
									setLeafs(branch,tree);
								}
							}
					}
				}
		
				if(filling){
					branch.memory.x[branch.health]=branch.x;
					branch.memory.y[branch.health]=branch.y; 
					branch.memory.static.x[branch.health]=branch.x;
					branch.memory.static.y[branch.health]=branch.y; 
		
					stepUp(branch,tree);
		
					if(branch.isMain){
						stepUp(branch,tree);
					}      
				}
				else{
					if(tree.key.generation == branch.generation && tree.key.position == branch.health){
						tree.key.taken=true;
					}                    
		
					forest.layer[tree.layer.trunk].fillStyle=tree.palette.trunk.memory[(tree.key.generation+1)-branch.generation];
					forest.layer[tree.layer.trunk].fillRect(branch.memory.x[branch.health],branch.memory.y[branch.health],possitive((((tree.key.pastGeneration+1)-branch.generation)),1)*tree.brush,possitive((((tree.key.pastGeneration+1)-branch.generation)),1)*tree.brush);
				}
		
				branch.health++;
		
				if(branch.health==branch.vitality && filling){
					register(tree);
					split(branch,tree);
				}
			}
			else{
				if(branch.vitality>tree.limit){
					branch.j=0;
					while(branch.j<tree.multiplier){
						grow(branch.child[branch.j],tree,plant,forest,filling);
						branch.j++;
					}
					if(tree.key.taken || forest.is.regrow){
						regrow(branch,tree,forest,filling);
					}
				}
				else{
					tree.key.taken=true;
					if(filling && !tree.filled){ // zacatek
						tree.filled=true;
						age(tree,true);
					}
					else if(tree.growth.age<tree.growth.end){
						if(forest.season==0 && forest.month>0){
							for(let i=0;i<plant.length;i++){
								if(plant[i].leaf.progress>0){
									forest.layer[plant[i].layer.back].clearRect(0,0,forest.canvas.width,forest.canvas.height);
									forest.layer[plant[i].layer.front].clearRect(0,0,forest.canvas.width,forest.canvas.height);
									forest.canvases[plant[i].layer.back].style.opacity=1;
									forest.canvases[plant[i].layer.front].style.opacity=1;
									
									for(let j=0;j<6;j++){
										shuffle(plant[i].leaf.x[j],plant[i].leaf.y[j],plant[i].leaf.ground[j]);
									}
								}
							}
							forest.season++;
						}
						else if(tree.growth.age>=(tree.growth.end-1)){
							regrow(branch,tree,forest,filling);
						}
					}
					else{
						regrow(branch,tree,forest,filling);
					}
				}
			}
        };
        
        function register(tree){
            tree.branches+=tree.multiplier;
        
            tree.i=0;
            tree.j=0;            
            while(tree.i<tree.generation){ //3^0+3^1+3^2+3^3 etc..
                tree.j+=Math.pow(tree.multiplier,tree.i);
                tree.i++;
            }
        
            if(tree.branches>tree.j){
                tree.generation++;
            }
        }
        
        function split(branch,tree){          
            branch.child=[];
            
            branch.i=0;
            while(branch.i<tree.multiplier){
                branch.child[branch.i]={};
                branch.child[branch.i].chance={};                
                branch.child[branch.i].x=branch.x;
                branch.child[branch.i].y=branch.y;
                branch.child[branch.i].vitality=branch.vitality-tree.decrease;
                branch.child[branch.i].health=0;
                branch.child[branch.i].memory={};
                branch.child[branch.i].memory.static={};
                branch.child[branch.i].memory.static.x=[];
                branch.child[branch.i].memory.static.y=[];
                branch.child[branch.i].memory.x=[];
                branch.child[branch.i].memory.y=[];
                branch.child[branch.i].memory.progress=0;
                branch.child[branch.i].i=0;
                branch.child[branch.i].j=0;
                branch.child[branch.i].generation=tree.generation;
                branch.child[branch.i].parent=branch;               
        
                if(branch.i==tree.main){
                    branch.child[branch.i].isMain=true;
                }
                else{
                    branch.child[branch.i].isMain=false;
                }
        
                if(branch.i==0){
                    branch.child[branch.i].chance.left=branch.chance.left+((tree.spread*(100-branch.chance.left))/100);
                    branch.child[branch.i].chance.right=(branch.chance.right*(100-tree.spread))/100;
                }
                else if(branch.i==(tree.multiplier-1)){
                    branch.child[branch.i].chance.left=(branch.chance.left*(100-tree.spread))/100;
                    branch.child[branch.i].chance.right=branch.chance.right+((tree.spread*(100-branch.chance.right))/100);
                }
                else{
                    branch.child[branch.i].chance.left=(branch.chance.left*(100-tree.spread))/100;
                    branch.child[branch.i].chance.right=(branch.chance.right*(100-tree.spread))/100;
                }
                branch.i++;
            }
        };

		glade.time.start=()=>{
			glade.time.interval=setInterval(function(){
				if(myplant.length>0){
					if(myplant[0].key.taken){
						if(myplant[0].growth.age>=(myplant[0].growth.end-1)){
							if(myplant[0].alive){
								myplant[0].alive=false;
								myplant[0].palette.trunk.from.r=100;
								myplant[0].palette.trunk.from.g=100;
								myplant[0].palette.trunk.from.b=100;
								myplant[0].palette.trunk.to.r=200;
								myplant[0].palette.trunk.to.g=200;
								myplant[0].palette.trunk.to.b=200;
								myplant[0].palette.trunk.current.r=myplant[0].palette.trunk.from.r;
								myplant[0].palette.trunk.current.g=myplant[0].palette.trunk.from.g;
								myplant[0].palette.trunk.current.b=myplant[0].palette.trunk.from.b;
								myplant[0].palette.trunk.memory[myplant[0].generationPredict]="rgb("+myplant[0].palette.trunk.current.r+","+myplant[0].palette.trunk.current.g+","+myplant[0].palette.trunk.current.b+")";
								for(myplant[0].i=(myplant[0].generationPredict-1);myplant[0].i>=0;myplant[0].i--){
									myplant[0].palette.trunk.current.r+=((myplant[0].palette.trunk.to.r-myplant[0].palette.trunk.from.r)/myplant[0].generationPredict);
									myplant[0].palette.trunk.current.g+=((myplant[0].palette.trunk.to.g-myplant[0].palette.trunk.from.g)/myplant[0].generationPredict);
									myplant[0].palette.trunk.current.b+=((myplant[0].palette.trunk.to.b-myplant[0].palette.trunk.from.b)/myplant[0].generationPredict);
									myplant[0].palette.trunk.memory[myplant[0].i]="rgb("+myplant[0].palette.trunk.current.r+","+myplant[0].palette.trunk.current.g+","+myplant[0].palette.trunk.current.b+")";
								}
							}
							else{
								glade.canvases[myplant[0].layer.trunk].style.opacity=Math.abs((glade.time.current/24000)-1);
							}
						}
						grow(myplant[0].branch,myplant[0],myplant,glade,false);
					}
					else{
						if(myplant[0].growth.current<myplant[0].growth.ceil){
							glade.layer[myplant[0].layer.trunk].clearRect(0,0,glade.canvas.width,glade.canvas.height);
						}                  
						while(!myplant[0].key.taken){
							grow(myplant[0].branch,myplant[0],myplant,glade,false);
						}
					}
		
					if(glade.season==1 && glade.month>0 && glade.month<=6){
						spring(myplant[0],myplant,glade);
					}
					else if(glade.season==2 && glade.month>6){
						autumn(myplant[0],myplant,glade,false);
					}

					glade.time.current+=glade.tick;
					glade.month=Math.floor(glade.time.current/2000);

					if(glade.winter.is && glade.month>=12){
						winter(myplant,glade);
					}
				}
			},50);
		};
        
        forest.time.start=()=>{
            forest.time.interval=setInterval(function(){
                if(forest.tick>0 && plant.length>0){
                    for(let t=0;t<plant.length;t++){
                        if(plant[t].key.taken){
							if(plant[t].growth.age>=(plant[t].growth.end-1)){
								if(plant[t].alive){
									plant[t].alive=false;
									plant[t].palette.trunk.from.r=100;
									plant[t].palette.trunk.from.g=100;
									plant[t].palette.trunk.from.b=100;
									plant[t].palette.trunk.to.r=200;
									plant[t].palette.trunk.to.g=200;
									plant[t].palette.trunk.to.b=200;
									plant[t].palette.trunk.current.r=plant[t].palette.trunk.from.r;
									plant[t].palette.trunk.current.g=plant[t].palette.trunk.from.g;
									plant[t].palette.trunk.current.b=plant[t].palette.trunk.from.b;
									plant[t].palette.trunk.memory[plant[t].generationPredict]="rgb("+plant[t].palette.trunk.current.r+","+plant[t].palette.trunk.current.g+","+plant[t].palette.trunk.current.b+")";
									for(plant[t].i=(plant[t].generationPredict-1);plant[t].i>=0;plant[t].i--){
										plant[t].palette.trunk.current.r+=((plant[t].palette.trunk.to.r-plant[t].palette.trunk.from.r)/plant[t].generationPredict);
										plant[t].palette.trunk.current.g+=((plant[t].palette.trunk.to.g-plant[t].palette.trunk.from.g)/plant[t].generationPredict);
										plant[t].palette.trunk.current.b+=((plant[t].palette.trunk.to.b-plant[t].palette.trunk.from.b)/plant[t].generationPredict);
										plant[t].palette.trunk.memory[plant[t].i]="rgb("+plant[t].palette.trunk.current.r+","+plant[t].palette.trunk.current.g+","+plant[t].palette.trunk.current.b+")";
									}
								}
								else{
									forest.canvases[plant[t].layer.trunk].style.opacity=Math.abs((forest.time.current/24000)-1);
								}
							}
                            grow(plant[t].branch,plant[t],plant,forest,false);
                        }
                        else{
                            if(plant[t].growth.current<plant[t].growth.ceil){
                                forest.layer[plant[t].layer.trunk].clearRect(0,0,forest.canvas.width,forest.canvas.height);
                            }                  
                            while(!plant[t].key.taken){
                                grow(plant[t].branch,plant[t],plant,forest,false);
                            }
                        }
            
                        if(forest.season==1 && forest.month>0 && forest.month<=6){
                            spring(plant[t],plant,forest);
                        }
                        else if(forest.season==2 && forest.month>6){
                            autumn(plant[t],plant,forest,false);
                        }
                    }
                
                    forest.time.current+=forest.tick;
			
					let month=Math.floor(forest.time.current/2000);
					if(month!=forest.month || !forest.is.month){
						forest.is.month=true;
						switch(month){
							case 0:
								forest.month=0;
								forestMonth.innerHTML="Právě je leden.";
								break;
							case 1:
								forest.month=1;
								forestMonth.innerHTML="Právě je únor.";
								break;
							case 2:
								forest.month=2;
								forestMonth.innerHTML="Právě je březen.";
								break;
							case 3:
								forest.month=3;
								forestMonth.innerHTML="Právě je duben.";
								break;
							case 4:
								forest.month=4;
								forestMonth.innerHTML="Právě je květen.";
								break;
							case 5:
								forest.month=5;
								forestMonth.innerHTML="Právě je červen.";
								break;
							case 6:
								forest.month=6;
								forestMonth.innerHTML="Právě je červenec.";
								break;
							case 7:
								forest.month=7;
								forestMonth.innerHTML="Právě je srpen.";
								break;
							case 8:
								forest.month=8;
								forestMonth.innerHTML="Právě je září.";
								break;
							case 9:
								forest.month=9;
								forestMonth.innerHTML="Právě je říjen.";
								break;
							case 10:
								forest.month=10;
								forestMonth.innerHTML="Právě je listopad.";
								break;
							case 11:
								forest.month=11;
								forestMonth.innerHTML="Právě je prosinec.";
								break;
							default:
								forest.month=12;
								if(forest.winter.is){
									winter(plant,forest);
								}
								break;
						}
					}
                }
				else{
					forest.is.month=false;
					forestMonth.innerHTML="";
				}
            },50);
		}
		
		function plantThemTree(tmp){
			if(forest.active && plant.length<forest.max && forest.energy>0){
				takeEnergy();

				for(let i=0;i<place.element.length;i++){
					if(parseInt(place.element[i].getAttribute("place"))==tmp.pick){
						forest.pick=i;
						break;
					}
				}

				let x=parseInt(place.element[forest.pick].getAttribute("x"));
				let y=parseInt(place.element[forest.pick].getAttribute("y"));

				canvasWrap.removeChild(place.element[forest.pick]);
				place.element.splice(forest.pick,1);

				let slot=0;
                for(let j=0;j<plant.length;j++){
                    for(let i=0;i<forest.trees.slot.length;i++){
                        if(slot==forest.trees.slot[i]){
                            slot++;
                            break;
                        }
                    }
                }        
                forest.trees.slot.push(slot);
        
                let t=plant.length;
                plant[t]=makeTree(x,y,((slot+1)*3),5,50,forest,tmp.end); //věk novorozence je 5

                while(!plant[t].filled){ //tvorba osudu
                    grow(plant[t].branch,plant[t],plant,forest,true);
				}
				
				loadMemory(x,y,plant[t].branch,tmp.save);
				resetBranches(plant[t].branch,plant[t]);

                if(t>0){
                    sortLayers();
                }

				refreshCapacity(forest.max-plant.length,forest.energy,forest.speed);
			}
		}

		me.plant={};
		me.plant.can=true;
		me.plant.save=null;
		me.plant.t=0;
		function plantMeTree(){
			if(forest.active && me.seeds.count>0 && me.plant.can && forest.energy>0 && plant.length<forest.max){
				me.plant.can=false;
				forestCloak.style.cursor="default";

				forest.pick=Math.floor(Math.random()*place.element.length);
				forest.place=parseInt(place.element[forest.pick].getAttribute("place"));
				me.plant.x=parseInt(place.element[forest.pick].getAttribute("x"));
				me.plant.y=parseInt(place.element[forest.pick].getAttribute("y"));

				me.plant.slot=0;
				for(let j=0;j<plant.length;j++){
					for(let i=0;i<forest.trees.slot.length;i++){
						if(me.plant.slot==forest.trees.slot[i]){
							me.plant.slot++;
							break;
						}
					}
				}
                me.plant.t=plant.length;
                plant.push(makeTree(0,0,((me.plant.slot+1)*3),5,50,forest,123)); //věk novorozence je 5

                while(!plant[me.plant.t].filled){ //tvorba osudu
                    grow(plant[me.plant.t].branch,plant[me.plant.t],plant,forest,true);
				}
				
				me.plant.save=saveMemory(plant[me.plant.t].branch);
				plant.pop();
				me.seeds.memory=me.seeds.count-1;
				ajax("php/plantTree.php","name="+me.name+"&hash="+me.hash+"&save="+JSON.stringify(me.plant.save,getCircularReplacer())+"&planet="+forest.planet+"&pick="+forest.place+"&timediff="+Math.floor((forest.time.current/24000)*forest.time.year),plantTreeCallback);
			}
        };  

		forestCloak.onclick=()=>{	
			plantMeTree();
        };

		forestButton.onclick=()=>{
			if(forest.active){
				forest.leave();
			}
		}

		glade.clean=()=>{
			if(me.glade.is.set){
				clearInterval(me.glade.interval);
				glade.layer[0].clearRect(0,0,glade.canvas.width,glade.canvas.height);
				glade.layer[1].clearRect(0,0,glade.canvas.width,glade.canvas.height);
				glade.layer[2].clearRect(0,0,glade.canvas.width,glade.canvas.height);
				cleanForest(glade);
				myplant=[];
			}
		};

		forest.clean=()=>{
			cleanForest(forest);
			plant=[];

			while(place.element.length>0){
				canvasWrap.removeChild(place.element.pop());
			}

			while(forest.canvases.length>0){
				canvasWrap.removeChild(forest.canvases[forest.canvases.length-1]);
			}
		}

		forest.loading=(is)=>{
			if(is){
				me.plant.can=false;
				seedbank.style.opacity=0;
				forestCurrent.style.opacity=0;
				forestfooter.style.opacity=0;
				seedinfo.innerHTML="Načítám.";
			}
			else{
				clearTimeout(forest.timeout);
				me.plant.can=true;
				canPlant();
				refreshCapacity(forest.max-plant.length,forest.energy,forest.speed);
				seedbank.style.opacity=1;
				forestCurrent.style.opacity=1;
				forestfooter.style.opacity=1;
			}
		}

		forest.enter=()=>{
			glade.clean();
			mytree.innerHTML="";
			me.glade.is.set=false;
			me.glade.is.open=false;

			document.body.style.overflow="hidden";
			forestMain.style.opacity=1;
			forestMain.style.zIndex=50;			
			forest.init();
			forest.loading(true);
			ajax("php/getForest.php","planet="+forest.planet,getForestCallback);
		}

		forest.leave=()=>{
			document.body.style.overflow="auto";
			forestMain.style.opacity=0;
			forestMain.style.zIndex=-10;
			forest.active=false;
			forest.clean();
			forestMonth.innerHTML="";

			setTimeout(()=>{
				core.element.style.width="200px";
				core.element.style.height="200px";
				core.element.style.marginLeft="-100px";
				core.element.style.marginTop="-100px";

				setTimeout(()=>{
					data.clean();
					setCore(forest.planet);
					profile.style.display="block";
					online.style.display="block";
					me.glade.is.open=true;
					if(me.in){
						me.glade.is.init=true;
						me.console.window.scrollTo(0,me.console.window.scrollHeight);
						if(me.connection.in){
							me.connection.window.scrollTo(0,me.connection.window.scrollHeight);
						}
					}
				},1000);
			},500);
		}
    </script>
</html>