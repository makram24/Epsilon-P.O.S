
function validatelogin(){
  var flag=0;
  $(".username").css({"border":"thin solid #fff"});
  $(".password").css({"border":"thin solid #fff"});

  var username = document.forms["loginform"]["username"].value;
  var password = document.forms["loginform"]["password"].value;

  if (username === null || username === "") {
    $(".username").css({"border":"thin solid red"});
    flag=1;
  }
  if (password == null || password == "") {
  $(".password").css({"border":"thin solid red"});
    flag=1;
  }
  if(flag){return false;}
}
//
// function validatepersonnb(){
//   var flag=0;
//   $(".personnb").css({"border":"thin solid #fff"});
//
//   var personnb = document.forms["personform"]["personnb"].value;
//   if (personnb === null || personnb === "") {
//     $(".personnb").css({"border":"2px solid red"});
//     flag=1;
//   }
//   if(isNaN(personnb)){
//     $(".personnb").css({"border":"2px solid red"});
//     flag=1;
//   }
//   if(flag){return false;}
// }
function validatesubmitvoiditem(){
  var flag=0;
  var fields = $("input[name='voiditems[]']").serializeArray();
  if (fields.length === 0){
    flag=1;
  }
  if(flag){return false;}
}
function validateaddbuttom() {
var flag=0;
$(".addbuttominput").css({"border":"thin solid black"});

var addbuttominput = document.forms["addbuttomform"]["addbuttominput"].value;
if (addbuttominput === null || addbuttominput === "") {
  $(".addbuttominput").css({"border":"2px solid red"});
  flag=1;
}
if(flag){return false;}
}
function validatediscount(){
  var flag=0;
  $(".discountinput").css({"border":"thin solid black"});

  var discountinput = document.forms["discountform"]["discountinput"].value;
  if (discountinput === null || discountinput === "") {
    $(".discountinput").css({"border":"2px solid red"});
    flag=1;
  }
  if(flag){return false;}
}
function validateadditem(){
  var flag=0;
  $(".itemname").css({"border":"thin solid #ffffff"});
  $(".itemprice").css({"border":"thin solid #ffffff"});
  $(".categoryid").css({"border":"thin solid #ffffff"});

  var itemname = document.forms["additemform"]["itemname"].value;
  var itemprice = document.forms["additemform"]["itemprice"].value;
  var categoryid = document.forms["additemform"]["categoryid"].value;
  var boxprice = document.forms["additemform"]["boxprice"].value;
  var boxquantity = document.forms["additemform"]["boxquantity"].value;
  var Barcode = document.forms["additemform"]["Barcode"].value;
  if (itemname === null || itemname === "") {
    $(".itemname").css({"border":"2px solid red"});
    flag=1;
  }
  if (itemprice === null || itemprice === "") {
    $(".itemprice").css({"border":"2px solid red"});
    flag=1;
  }
  if (categoryid === null || categoryid === "") {
    $(".categoryid").css({"border":"2px solid red"});
    flag=1;
  }
  if (itemBarcode === null || itemBarcode === "") {
    $(".itemBarcode").css({"border":"2px solid red"});
    flag=1;
  }
  if(flag){return false;}
}
function validateadduser(){
  var flag=0;
  $(".username").css({"border":"thin solid #ffffff"});
  $(".itemprice").css({"border":"thin solid #ffffff"});
  $(".categoryid").css({"border":"thin solid #ffffff"});

  var username = document.forms["adduserform"]["username"].value;
  var password = document.forms["adduserform"]["password"].value;
  var privilege = document.forms["adduserform"]["privilege"].value;
  if (username === null || username === "") {
    $(".username").css({"border":"2px solid red"});
    flag=1;
  }
  if (password === null || password === "") {
    $(".password").css({"border":"2px solid red"});
    flag=1;
  }
  if (privilege === null || privilege === "") {
    $(".privilege").css({"border":"2px solid red"});
    flag=1;
  }
  if(flag){return false;}
}
function validateaddcategory(){
  var flag=0;
  $(".categoryid").css({"border":"thin solid #ffffff"});

  var categoryname = document.forms["addcategoryform"]["categoryname"].value;
  if (categoryname === null || categoryname === "") {
    $(".categoryname").css({"border":"2px solid red"});
    flag=1;
  }
  if(flag){return false;}
}
function validateaddpurchase(){
  var flag=0;
  $(".order_item_id").css({"border":"thin solid #ffffff"});

      var barcode = document.forms["addpurchaseinvoice"]["barcode"].value;
      var itemnname = document.forms["addpurchaseinvoice"]["itemnname"].value;
      var quantity = document.forms["addpurchaseinvoice"]["quantity"].value;
      var price = document.forms["addpurchaseinvoice"]["price"].value;
      var actualamount = document.forms["addpurchaseinvoice"]["actualamount"].value;
      var tax1rate = document.forms["addpurchaseinvoice"]["tax1rate"].value;
      var tax1amount = document.forms["addpurchaseinvoice"]["tax1amount"].value;
      var tax2rate = document.forms["addpurchaseinvoice"]["tax2rate"].value;
      var tax1amount = document.forms["addpurchaseinvoice"]["tax2amount"].value;
      var tax3rate = document.forms["addpurchaseinvoice"]["tax3rate"].value;
      var tax1amount = document.forms["addpurchaseinvoice"]["tax3amount"].value;
      var finalamount = document.forms["addpurchaseinvoice"]["finalamount"].value;
  if (barcode === null || barcode === "") {
    $(".barcode").css({"border":"2px solid red"});
    flag=1;
  }
  if (itemnname === null || itemnname === "") {
    $(".itemnname").css({"border":"2px solid red"});
    flag=1;
  }
  if (quantity === null || quantity === "") {
    $(".quantity").css({"border":"2px solid red"});
    flag=1;
  }
  if (price === null || price === "") {
    $(".price").css({"border":"2px solid red"});
    flag=1;
  }
  if (actualamount === null || actualamount === "") {
    $(".actualamount").css({"border":"2px solid red"});
    flag=1;
  }
  if (finalamount === null || finalamount === "") {
    $(".finalamount").css({"border":"2px solid red"});
    flag=1;
  }
  if(flag){return false;}
}
function validatemonthlyreport(){
  var flag=0;
  $(".month").css({"border":"thin solid black"});

  var month = document.forms["monthlyreport"]["month"].value;
  if (month === null || month === "") {
    $(".month").css({"border":"2px solid red"});
    flag=1;
  }
  if(flag){return false;}
}
