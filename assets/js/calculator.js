// $(document).ready(function() {
//     $('select').on('change', function() {
//       const selectedData = $('#required_skills option:selected').text();
//       if (selectedData) {
//         $('#dataTable').prepend(selectedData);
//       }
//     });
// });
  



  $(document).ready(function () {

    var required_skills = document.getElementById("required_skills");
    var currency = document.getElementById("currency");
    var number_of_resources = document.getElementById("number_of_resources");
    var per_hour = document.getElementById("currency_per_hour");

        $(document).on('change', function () {
            var selectedValue = $(required_skills).val();
            $('#dataTable').text(selectedValue);

            var selectedCurrencValue = $(currency).val();
            $('#dataCurrency').text(selectedCurrencValue);


            var selectedResourcesValue = $(number_of_resources).val();
            $('#dataTableResources').text(selectedResourcesValue);

            var currency_per_hour = per_hour.value;
            var selectedTotalValue = selectedResourcesValue * currency_per_hour
            $('#dataSelectedTotalCurrency_per_hour').text(selectedTotalValue);
        });
    
});