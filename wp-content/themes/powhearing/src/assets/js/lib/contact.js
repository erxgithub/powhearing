// closes the panel on click outside

$(document).mouseup(function (e) {
  var container = $('#contact-panel');
  if (!container.is(e.target) // if the target of the click isn't the container...
  && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
      container.removeClass('is-active');
    }

});

$(document).ready(function () {
	$(".modalInfo").on("click",function (e) {
		var dest = $(this).data("open");

		var text = $(this).data("title");
		$("#"+dest+" h4").text(text);

		var img = $(this).data("img");
		$("#"+dest+" img").attr("src",img);

		var content = $(this).data("content");
		$("#"+dest+" p").text(content);

	})
})
