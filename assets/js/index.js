var ractive = new Ractive({
  el: '#container',
  template: '#template',
  data: {}
});
$(function() {
	$( ".box" ).draggable();
});