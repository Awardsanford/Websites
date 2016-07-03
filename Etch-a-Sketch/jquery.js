//Use jquery to create a grid with copies of squares that will make up our pixels

function createGrid() {
  $('#screen').html("");

  for (i = 0; i <= 2500; i++) {
    $('#screen').append("<span class='square'></span>");
  }

  //hover operation to draw if mouse 
  // is not clicked

  $('.square').hover(function() {
    curOp = parseFloat($(this).css('opacity'));
    $(this).addClass('highlighted');
    if (curOp < .5) {
      $(this).css('opacity', +.3)
    }
    if ((curOp <= .5) && (curOp >= .3)) {
      $(this).css('opacity', curOp + .1);
    }
    //only draw when mouseup:
  }, function(e) {
    if (e.mouseup) {
      curOp = parseFloat($(this).css('opacity'));
      $(this).addClass('highlighted');
      if (curOp < .5) {
        $(this).css('opacity', +.3)
      }
      if ((curOp <= .5) && (curOp >= .3)) {
        $(this).css('opacity', curOp + .1)
      }
    } else if (e.which == 1) {
      curOp = parseFloat($(this).css('opacity'));
      $(this).css('opacity', 0);
    };
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
