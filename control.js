$(document).ready(function () {

    $.post("select.php",function (id) {
       var result =JSON.parse(id);
       var length =result.length
       console.log(length);
       for( i=1;i<=length;i++){
         $("#edit_name[i]").click(function () {
             alert("drfghjk");
         })
       }

       })

    })

