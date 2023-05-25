<script>
  $(document).ready(function() {
  $('#js-modal-entity-data').css("display", "none");
  });
function loadEntities() {
  $('#js-modal-entity-data').css("display", "block");
  let data = {
      entity_id: $("#entity_id").val(),
      _token: '{!! csrf_token() !!}'
  };
  $.ajax({
      url: "{!! route('loadEntityDataByEntity') !!}",
      type: "POST",
      data: data,
      success: function(res){
          if (res.result == 'success') {

            console.log(data);

          }
      }
  });



  // if($('#setup_type').val() == 4) {
  
  //     $('#end_date, label[for=end_date]').hide();
  //     $('#end_time').parent().parent().parent().hide();
  //     $('#end_date').parent().parent().hide();

  // } else {

  //     $('#end_date').parent().parent().parent().show();
  //     $('#end_time').parent().parent().parent().show();
  // }

  // if($('#setup_type').val() == 5) {
  //     $('#end_date').parent().parent().parent().hide();
  // } else {
  //     $('#end_date').parent().parent().parent().show();
  // }

}
</script>