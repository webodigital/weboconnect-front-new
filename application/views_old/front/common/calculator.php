<script>
    $(document).ready(function() {
  //add to list
  $("#add").on("click", function() {
    var inp_ele = $("input.input").val(),

      close_i = '<span><i class="fa fa-times" aria-hidden="true"></i></span>',
      edit_i = '<span><i class="fa fa-pencil" aria-hidden="true"></i></span>',
      edit_inp = '<input type="text" class="edit close">';
     ok_i = '<input type="button" value="ok" class="ok">';

    if (inp_ele != "") {
      $("ol").append(
        "<li>" +
          "<p>" +
          inp_ele +
          "</p>" +
          edit_i +
          ok_i +
          close_i +
          edit_inp +
          "</li>"
      );
      $("strong").text("");
    } else {
      $("strong").text("Can't be empty!");
    }
    $("input[type='text']").val("");

    //close
    var list = $(".box-area ol li"),
      off = $(".box-area ol li span .fa-times");

    [].forEach.call(list, function(el, i) {
      $(off[i]).on("click", function() {
        $(list[i]).remove();
      });

      // edit
      var edit = $(".box-area ol li span .fa-pencil"),
        ok = $(".box-area ol li input.ok"),
        li_txt = $(".box-area ol li p"),
        edit_f = $(".box-area ol li input.edit");

      [].forEach.call(list, function(el, i) {
        $(edit[i]).on("click", function() {
          $(li_txt[i]).hide();
          $(edit_f[i])
            .removeClass("close")
            .val($(li_txt[i]).text())
            .focus();
          $(this).hide();
          $(ok[i]).show();

          //ok
          $(ok[i]).on("click", function() {
            $(li_txt[i]).text($(edit_f[i]).val());
            $(li_txt[i]).show();
            $(edit_f[i]).addClass("close");
            $(this).hide();
            $(edit[i]).show();
          });
        });
      });
    });
  });
});

</script>