$(document).ready(function() {
  var url = location.href;
  alert(url);
  $.each($(".nav-link"), function() {
    if(url.indexOf($(this).attr("href")) > 0 ) $(this).attr("class", "nav-link active");
  });
});
