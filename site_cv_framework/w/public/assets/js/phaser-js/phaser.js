var game = new Phaser.Game(800,400,Phaser.AUTO,'content-game',{preload : preload , create: create , update: update});

var pathRoot = '/CV_dev/site_cv/site_cv_framework/w/public/assets/img/phaser/phaser-01/';
console.log(pathRoot+'sky.png');
function preload() {
	
	game.load.image('ground',pathRoot+'platform.png');
	game.load.image('star' , pathRoot+'star.png');
	game.load.spritesheet('dude',pathRoot+'dude.png',32,48);
}

var platforms;
var player
function create() {

 game.stage.backgroundColor = 'rgb(68, 136, 170,0)';
game.physics.startSystem(Phaser.Physics.ARCADE);

 game.add.sprite(0,0,'sky');

platforms = game.add.group();

platforms.enableBody = true;

var ground = platforms.create(0, game.world.height - 64, 'ground');

ground.scale.setTo(2,2);

ground.body.immovable = true;


var ledge = platforms.create(200,200,'ground');

ledge.body.immovable = true;

ledge = platforms.create(-250,150,'ground');

ledge.body.immovable = true;

player = game.add.sprite(32 , game.world.height - 150 , 'dude');

game.physics.arcade.enable(player);

player.body.bounce.y = 0.1;
player.body.gravity.y = 300;
player.body.collideWorldBounds = true;

player.animations.add('left',[0,1,2,3],10,true);
player.animations.add('right',[5,6,7,8],10,true);


   

}

function update() {
	var hitPlatform = game.physics.arcade.collide(player,platforms);
	var cursors = game.input.keyboard.createCursorKeys();
	player.body.velocity.x = 0;

	if(cursors.left.isDown){

		player.body.velocity.x = -150;

		player.animations.play('left');
	}else if(cursors.right.isDown){

		player.body.velocity.x = 150;

		player.animations.play('right');
	}else{

		player.animations.stop();

		player.frame = 4;
	}

	if(cursors.up.isDown && player.body.touching.down && hitPlatform){

		player.body.velocity.y = -300; 
	}
  }