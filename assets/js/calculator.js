
  $(document).ready(function () {

        var required_skills = document.getElementById("required_skills");
        var currency = document.getElementById("currency");
        var number_of_resources = document.getElementById("number_of_resources");
        var per_hour = document.getElementById("currency_per_hour");

        $(document).on('change', function (e) {
            e.preventDefault();
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
    

        $('.add_more_cart').on('click', function (e) {
            e.preventDefault();
            var content = $('<tr> <td scope="col" class="fs-14 fw-500" id="dataTable">Front-end Developer</td> <td scope="col" class="fs-14 fw-500" id="dataTableResources">1</td><td scope="col" class="fs-14 fw-500"><span id="dataCurrency">₹</span> <input id="currency_per_hour" value="15" /> /Hr</td> <td scope="col"><button class=""> <img width="20" src="assets/images/icons/edit.webp" alt="edit"> </button> <button class="delete_cart"> <img width="20" src="assets/images/icons/delete.webp" alt="delete"> </button> </td> </tr>');
              $('.addCartTable').prepend(content);
              $('.remove').show();

            $(document).on('click', '.delete_cart', function (e) {
                console.log($('.addCartTable').find('tr').length);
                $(this).parents('tr').remove();
                if(($('.addCartTable').find('tr').length-1) == 1){
                  console.log('pass');
                  $('.remove').hide();
                  event.stopPropagation();
                }
              });

        });


        
});




