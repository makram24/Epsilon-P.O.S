$(function() {
  $(".number").on('click', function () {
    var number = $(this).find("p").text();
    var pass = $("#password").val();
    var newpass = pass + number;
    $("#password").val(newpass);
  });
  $(".datepickerimg img").on('click', function () {
    $('#datepicker').show();
  });
  // $(document).ready(function(){
  //     var i=1;
  //     $('.Addbuttom').click(function(){
  //          i++;
  //          $('.').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
  //     });
  //     $(document).on('click', '.btn_remove', function(){
  //          var button_id = $(this).attr("id");
  //          $('#row'+button_id+'').remove();
  //     });
  //     });
  $(document).on('click','.date',function(e){
    e.preventDefault();
    var date = $(this).attr('data-date');
    $(".closingdate").val(date);
    $("#datepicker").hide();
  });
  $(document).ready(function(){
    $("#search").keyup(function(){
    var searchText = $(this).val();
    if(searchText!=''){
      $.ajax({
        url:'ajaxcallsearch.php',
        mathod: 'post',
        data:{query:searchText},
        success:function(response){
          $(".invoicecont").html(response);
        }
      });
    }
    else{
      $(".invoicecont").html('');
    }
  });

  });
  $(document).on('click','.Hold',function(){
    // e.preventDefault();
    var idd = $(this).attr('id');
    var id = parseInt(idd);
    id += 1;
    var cid = 1
    location ='Home.php?id=' +id +'&catid='+cid;
  });
  $(document).on('click','.RecollData',function(){
    // e.preventDefault();
    var idd = $(this).attr('id');
    var id = parseInt(idd);
    var cid = 1
      location ='Home.php?id=' +id +'&catid='+cid;
  });
  $(document).on('click','.category',function(){
    // e.preventDefault();
    var id = $(this).attr('id');
    $(".category").removeClass("active");
    $(this).addClass("active");
    $('.itemscont').hide();
    $('.item'+id).show();
  });
  $(document).on('click','#addnewuser',function(e){
    e.preventDefault();
    $('#addnewuserdata').show();
    $('#casherid').hide();
    $('#purchasedata').hide();
    $('#addnewcategorydata').hide();
    $('#addnewproductdata').hide();
    $('#globalreportdata').hide();
    $('#casherreportdata').hide();
    $('#ReviewPreviousInvoicesdata').hide();
    $('#PreviousPerchasedata').hide();
    $('#Closingdata').hide();
  });
  $(document).on('click','#purchase',function(e){
    e.preventDefault();
    $('#addnewuserdata').hide();
    $('#casherid').hide();
    $('#purchasedata').show();
    $('#addnewcategorydata').hide();
    $('#addnewproductdata').hide();
    $('#globalreportdata').hide();
    $('#casherreportdata').hide();
    $('#ReviewPreviousInvoicesdata').hide();
    $('#PreviousPerchasedata').hide();
    $('#Closingdata').hide();
  });
  $(document).on('click','#addnewcategory',function(e){
    e.preventDefault();
    $('#addnewuserdata').hide();
    $('#casherid').hide();
    $('#purchasedata').hide();
    $('#addnewcategorydata').show();
    $('#addnewproductdata').hide();
    $('#globalreportdata').hide();
    $('#casherreportdata').hide();
    $('#ReviewPreviousInvoicesdata').hide();
    $('#PreviousPerchasedata').hide();
    $('#Closingdata').hide();
  });
  $(document).on('click','#addnewproduct',function(e){
    e.preventDefault();
    $('#addnewuserdata').hide();
    $('#casherid').hide();
    $('#purchasedata').hide();
    $('#addnewcategorydata').hide();
    $('#addnewproductdata').show();
    $('#globalreportdata').hide();
    $('#casherreportdata').hide();
    $('#ReviewPreviousInvoicesdata').hide();
    $('#PreviousPerchasedata').hide();
    $('#Closingdata').hide();
  });
  $(document).on('click','#globalreport',function(e){
    e.preventDefault();
    $('#addnewuserdata').hide();
    $('#casherid').hide();
    $('#purchasedata').hide();
    $('#addnewcategorydata').hide();
    $('#addnewproductdata').hide();
    $('#globalreportdata').show();
    $('#casherreportdata').hide();
    $('#ReviewPreviousInvoicesdata').hide();
    $('#PreviousPerchasedata').hide();
    $('#Closingdata').hide();
  });
  $(document).on('click','#casherreport',function(e){
    e.preventDefault();
    $('#addnewuserdata').hide();
    $('#purchasedata').hide();
    $('#addnewcategorydata').hide();
    $('#addnewproductdata').hide();
    $('#globalreportdata').hide();
    $('#casherreportdata').show();
    $('#casherid').show();
    $('#ReviewPreviousInvoicesdata').hide();
    $('#PreviousPerchasedata').hide();
    $('#Closingdata').hide();
  });
  $(document).on('click','#PreviousPerchase',function(e){
    e.preventDefault();
    $('#addnewuserdata').hide();
    $('#purchasedata').hide();
    $('#addnewcategorydata').hide();
    $('#addnewproductdata').hide();
    $('#globalreportdata').hide();
    $('#casherreportdata').hide();
    $('#casherid').hide();
    $('#ReviewPreviousInvoicesdata').hide();
    $('#PreviousPerchasedata').show();
    $('#Closingdata').hide();
  });
  // $(document).on('click','#casheridbtn',function(e){
  //   e.preventDefault();
  //   // var idd = $('radioclass').attr('id');
  //   // var id = parseInt(idd);
  //   //   location ='Home.php?id=' +id +'&catid='+cid;
  //
  //   $('#addnewuserdata').hide();
  //   $('#purchasedata').hide();
  //   $('#addnewcategorydata').hide();
  //   $('#addnewproductdata').hide();
  //   $('#globalreportdata').hide();
  //   $('#casherid').hide();
  //   $('#casherreportdata').show();
  //   $('#ReviewPreviousInvoicesdata').hide();
  //   $('#PreviousPerchasedata').hide();
  //   $('#Closingdata').hide();
  // });
  $(document).on('click','#ReviewPreviousInvoices',function(e){
    e.preventDefault();
    $('#addnewuserdata').hide();
    $('#casherid').hide();
    $('#purchasedata').hide();
    $('#addnewcategorydata').hide();
    $('#addnewproductdata').hide();
    $('#globalreportdata').hide();
    $('#casherreportdata').hide();
    $('#ReviewPreviousInvoicesdata').show();
    $('#Deliverydata').hide();
    $('#PreviousPerchasedata').hide();
    $('#Closingdata').hide();
  });
  $(document).on('click','#Delivery',function(e){
    e.preventDefault();
    $('#addnewuserdata').hide();
    $('#casherid').hide();
    $('#purchasedata').hide();
    $('#addnewcategorydata').hide();
    $('#addnewproductdata').hide();
    $('#globalreportdata').hide();
    $('#casherreportdata').hide();
    $('#ReviewPreviousInvoicesdata').hide();
    $('#Deliverydata').show();
    $('#Closingdata').hide();
  });
  $(document).on('click','#Closing',function(e){
    e.preventDefault();
    $('#addnewuserdata').hide();
    $('#casherid').hide();
    $('#purchasedata').hide();
    $('#addnewcategorydata').hide();
    $('#addnewproductdata').hide();
    $('#globalreportdata').hide();
    $('#casherreportdata').hide();
    $('#ReviewPreviousInvoicesdata').hide();
    $('#Deliverydata').hide();
    $('#Closingdata').show();
  });
  $(document).on('click','.voiditem',function(e){
    e.preventDefault();
    $('.checkbox').removeClass("shownone");
    $('#reasonblock').removeClass("shownone");
    $('.button3').show();
    $('.cancelvoid').show();
    $('.voiditem2').show();
    $('.voiditem').hide();
  });
  // $(document).on('click','.button3',function(e){
  //   e.preventDefault();
  //   $('.voiditem').hide();
  //   $('.button3').show();
  //   $('.cancelvoid').show();
  // });
  $(document).on('click','.Addbuttom', function(e){
    e.preventDefault();
    $('.checkbox').removeClass("shownone");
    $('.addbuttominput1').toggle();
    $('.discountsec').hide();
    $('.paymentmethod').hide();
  });
  $(document).on('click','.lessbuttom', function(e){
    e.preventDefault();
    $('.checkbox').removeClass("shownone");
    $('.lessbuttominput1').toggle();
    $('.discountsec').hide();
    $('.paymentmethod').hide();
    $('.addbuttominput1').hide();
  });
  $(document).on('click','#Recollbtn', function(e){
    e.preventDefault();
    $('#Recoll').toggle();
  });
  // $(document).on('click','.addbtn', function(e){
  //   e.preventDefault();
  //   var invoiceid = $('.invoiceid').attr('id');
  //   var invid = parseInt(invoiceid);
  //   var idd = $('.checkbox').attr('id');
  //   var id = parseInt(idd);
  //   location ='quantityadd.php?itemid=' +id +'&id='+invoiceid;
  //   $('.checkbox').hide();
  //   $('.addcontainer').hide();
  // });
  $(document).on('click','.paid',function(e){
    e.preventDefault();
    $('.paymentmethod').toggle();
    $('.discountsec').hide();
    $('.addbuttominput1').hide();
  });
  $(document).on('click','.discount',function(e){
    e.preventDefault();
    $('.discountsec').toggle();
    $('.addbuttominput1').hide();
    $('.paymentmethod').hide();
  });
});
function searchitem() {
  var search = $(".itemsearch").val();
  console.log(search);
  $(".itemsearch").css({"border":"1px solid #5e5e5e"});
  if (search=="" || search==null) {
    $(".itemsearch").css({"border":"1px solid red"});
  }
  else {
    $("#input_container").val(itemsearch);
    $.ajax({
        type: 'POST',
        url: 'ajaxcallsearch.php',
        data: {itemsearch: itemsearch,search:1},
        success: function (data) {
          console.log(data);
          $('.itemsearch').html(data);
        }
    });
  }

}

function printDiv(divName) {
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(divName).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
function print2Div(divName) {
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(divName).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
function loadpicker(string1,string2){
  $(".active").removeClass("active");
  if(string2<10 && string2.length==2){
    string2 = string2.substring(1, string2.length);
  }
  $('.selectyear option:selected').removeAttr('selected');
  $('.selectyear option[value='+string1+']').prop("selected","selected");
  $('.selectmonth option:selected').removeAttr('selected');
  $('.selectmonth option[value='+string2+']').prop("selected","selected");

  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("datepicker").innerHTML = xmlhttp.responseText;
      }
  }
  xmlhttp.open("GET","datepicker.php?y="+string1+"&m="+string2,true);
  xmlhttp.send();
}
