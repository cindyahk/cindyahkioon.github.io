var url = location.href;
$.each($(".nav-link"), function() {
  if(url.indexOf($(this).attr("href")) > 0 ) $(this).attr("class", "nav-link active");
});
