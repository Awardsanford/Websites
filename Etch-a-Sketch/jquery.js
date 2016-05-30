//Use jquery to create copies of squares that will make up our pixels

//Create Grid

function createGrid() {
  $('#screen').html("");

  for (i = 0; i < 3750; i++) {
    $('#screen').append("<div class='square'></div>");
  }

  //Mouseenter operation to draw
  
  $('.square').mouseenter(function() {

    $(this).addClass('highlighted');
  });

};

//Reset grid

$('#clear').click(function(button) {
  $('.highlighted').animate({
    opacity: 0
  }, 1000);
  shake('#device');
  setTimeout(function() {
    $(createGrid);
  }, 1000);

});

//Shake animation

function shake(div) {
  var interval = 100;
  var distance = 10;
  var times = 6;
  $(div).css('position', 'relative');
  for (var iter = 0; iter < (times + 1); iter++) {
    $(div).animate({
      left: ((iter % 2 == 0 ? distance : distance * -1))
    }, interval);
  }
  $(div).animate({
    left: 0
  }, interval);
}

$(createGrid);