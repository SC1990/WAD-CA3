$('form.askajax').on('submit', function() {
  
  var ob = $(this),
      url = ob.attr('action'),
      type = ob.attr('method'),
      data = {};
  
  ob.find('[name]').each(function(index, value){
    var ob = $(this),
        name = ob.attr('name'),
        value = ob.val();
    
    data[name] = value;
    
  });
  
  $.ajax({
    url: url,
    type: type,
    data: data,
    success: function(response){
      console.log(response);
    }
  });
  /*
  nameEm = document.getElementById("nameid");
emailEm = document.getElementById("emailid");
qEm = document.getElementById("questionid");

if(nameEm==""||emailEm==null||qEm==null){
  return false;
  
}
*/
});

