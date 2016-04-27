(function() {
  "use strict";

  var user_id = userId();
  document.cookie = "user_id=" + user_id;

  var head = document.getElementsByTagName("head")[0];
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.src = "http://analytics-example.com:10002/analytics.php?user_id=" + user_id + "&url=" + encodeURIComponent(location.href);
  head.appendChild(s);

  function userId() {
    var user_id = getCookie('user_id');
    console.log(user_id);
    if (!user_id) {
      user_id = Math.floor(Math.random() * 100000);
    }
    return user_id;
  }

  function getCookie(key) {
    var result = false;
    var cookies = document.cookie.split(";");
    cookies.forEach(function(v) {
      var data = v.split('=');
      if (key == data[0]) {
        result = data[1];
      }
    });
    return result;
  }
})();
