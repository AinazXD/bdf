function hideallDropdowns() {
  $(".dropped .dropdown-options").hide();
  $(".dropped").toggleClass('dropped');
  $(".dropped .dropdown-options .title").unbind("click");
}

function showDropdown(el) {
  var el_li = $(el).parent().addClass('dropped');
  el_li
      .find('.title')
      .click(function () {
          hideallDropdowns();
      })
      .html($(el).html());

  el_li.find('.dropdown-options').show();
}

$(".dropdown").click(function () {
  showDropdown(this);
});

$(document).mouseup(function () {
  hideallDropdowns();
});