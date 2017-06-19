$(document).ready(function(){
    $('#dataTable').DataTable({
      responsive: true
    });
});


function loadOption(option,value){
  if(option == "mapa"){
    $("#indicador-mapa").val(value);
  }else{
    $("#indicador-documento").val(value);
  }
}

function loadValue(option,value){
  if(option == "mapa"){
    console.log(value);
    $("#mapa-img").attr('src','img/uploads/'+value);
  }else{
    $("#indicador-documento").val(value);
  }
}
