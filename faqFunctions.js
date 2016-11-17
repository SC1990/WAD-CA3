$('#faqform').on('submit', function(){
  var wad = $(this),
      contents = wad.serialize();
  
  $.ajax({
    url: 'faqpost.php',
    dataType: 'json',
    type: 'post',
    data: contents,
    success: function(data){
      console.log(data);
    }
  });
  
  return false;
});