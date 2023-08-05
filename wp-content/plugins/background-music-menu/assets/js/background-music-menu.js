(function($) {
  $(document).ready(function() {
    var classButton = $('#sound-frame').attr('class');
    if (getCookie('stopMusic') && getCookie('stopMusic') == 'false') {
      var playPromise = document.querySelector('#audio1').play();

      if (playPromise !== undefined) {
        playPromise.then(function() {
          var music = document.getElementById('audio1');
          music.play();
        }).catch(function(error) {
          if (classButton != 'sound-frame-class') {
            $('.sound-frame-class').toggleClass('play-sound');
          }
        });
      }
    }
    if (getCookie('stopMusic') && getCookie('stopMusic') == 'true') {
      var music = document.getElementById('audio1');
      music.pause();
      if (classButton != 'sound-frame-class') {
        $('.sound-frame-class').toggleClass('play-sound');
      }
    }
    if (getCookie('stopMusic') == null) {
      var playPromise = document.querySelector('#audio1').play();

      if (playPromise !== undefined) {
        playPromise.then(function() {
          var music = document.getElementById('audio1');
          music.play();
        }).catch(function(error) {
          if (classButton != 'sound-frame-class') {
            $('.sound-frame-class').toggleClass('play-sound');
          }
        });
      }
    }

    $('#sound-frame').click(function() {
      $('.sound-frame-class').toggleClass('play-sound');
      var music = document.getElementById('audio1');
      classButton = $('#sound-frame').attr('class');
      if (classButton != 'sound-frame-class') {
        music.play();
        document.cookie = 'stopMusic=false; path=/;';
      }
      else {
        music.pause();
        document.cookie = 'stopMusic=true; path=/;';
      }
    });

  });

  function getCookie(name) {
    var value = '; ' + document.cookie;
    var parts = value.split('; ' + name + '=');
    if (parts.length == 2) {
      return parts.pop().split(';').shift();
    }
  }

  $(document).ready(function() {
    var obj = {};
    $('.sound-section').each(function() {
      var text = $.trim($(this).text());
      if (obj[text]) {
        $(this).remove();
      }
      else {
        obj[text] = true;
      }
    });
  });
}(jQuery));