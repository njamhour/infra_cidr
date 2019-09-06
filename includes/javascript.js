function checkFields(form) {
  var checks_radios = form.find(':checkbox, :radio'),
      inputs = form.find(':input').not(checks_radios).not('[type="submit"],[type="button"],[type="reset"]'); 
  
  var checked = checks_radios.filter(':checked');
  var filled = inputs.filter(function(){
      return $.trim($(this).val()).length > 0;
  });
  
  if(checked.length + filled.length === 0) {
      return false;
  }
  
  return true;
}

$(function(){
  $('#form').on('submit',function(e){ 
      var oneFilled = checkFields($(this));
      if(!oneFilled) {
        e.preventDefault();
        alert('Preencha pelo menos um campo...');
      }
  });
});