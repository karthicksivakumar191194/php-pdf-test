<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div><h1 style="text-align:center;">TAX INVOICE</h1></div>

<form action="pdf.php" method="POST">
    <div class="container-fluid">
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sender">Sender</label>
                        <textarea class="form-control" rows="5" name="sender" id="sender">
						Sri Sai Sakthi Services
						New No 29, Reddy Street,Koratthur, Chennai-600080,TamilNadu.
						GSTIN/UIIN:33BKVPS6894L1ZW
						</textarea>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="invoiceno">Invoice No</label>
                        <input type="text" class="form-control" name="invoiceno" id="invoiceno" required="true">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="dated">Dated</label>
                        <input type="date" class="form-control" name="dated" id="dated">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="deliverynote">Delivery Note</label>
                        <input type="text" class="form-control" name="deliverynote" id="deliverynote">
                    </div>
                </div>
				<div class="clear"></div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="paymentmode">Mode/Terms of Payment</label>
                        <input type="text" class="form-control" name="paymentmode" id="paymentmode">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="supplierref">Supplier's Ref</label>
                        <input type="text" class="form-control" name="supplierref" id="supplierref">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="otherref">Other Reference(s)</label>
                        <input type="text" class="form-control" name="otherref" id="otherref">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="buyer">Buyer</label>
                        <textarea class="form-control" rows="5" name="buyer" id="buyer"></textarea>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="buyersorder">Buyer's Order No</label>
                        <input type="text" class="form-control" name="buyersorder" id="buyersorder">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="buyersdated">Dated</label>
                        <input type="date" class="form-control" name="buyersdated" id="buyersdated">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="despatchno">Despatch Document No</label>
                        <input type="text" class="form-control" name="despatchno" id="despatchno">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="deliverydate">Delivery Note Date</label>
                        <input type="date" class="form-control" name="deliverydate" id="deliverydate">
                    </div>
                </div>
				                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="despatchedthrough">Despatched through</label>
                        <input type="text" class="form-control" name="despatchedthrough" id="despatchedthrough">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input type="text" class="form-control" name="destination" id="destination">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="terms">Terms of delivery</label>
                        <textarea class="form-control" rows="3" name="terms" id="terms"></textarea>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group">

                        <input type="text" class="form-control" id="slno" value="1" name="slno[]" placeholder="Sl No" readonly>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">

                        <input type="text" class="form-control" id="desc"  name="desc[]" placeholder="Description of Goods">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">

                        <input type="text" class="form-control" id="hsn" name="hsn[]" placeholder="HSN/SAC">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">

                        <input type="text" class="form-control" id="qty" name="qty[]" placeholder="Quantity">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">

                        <input type="text" class="form-control" id="rate" name="rate[]" placeholder="Rate">
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div class="form-group">
                        <div class="input-group">

                            <input type="text" class="form-control" id="amount" name="amount[]" placeholder="Amount">
                            <div class="input-group-btn">
                                <button class="btn btn-success" type="button" onclick="dynamic_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                            </div>
                        </div>
                    </div>
                </div>
				
  <div id="dym_fields">
          
        </div>
            </div>
			<div class="row">
			<div class="col-sm-10"></div>
			                <div class="col-sm-2">
							
                    <div class="form-group ">
<label for="total">Total (Rs)</label>
                        <input type="text" class="form-control" id="total" name="total" placeholder="Total">
                    </div>
                </div>
                </div>
				<div class="row">
				<div class="col-sm-8"></div>
				      <div class="col-sm-2">
                    <div class="form-group">
<label for="taxcgst">CGST(%)</label>
<div class="input-group">
                        <input type="text" class="form-control" id="taxcgst" name="taxcgst" value="9" placeholder="CGST">
						<span class="input-group-addon"><strong>%</strong></span>
                    </div>
                    </div>
                </div>
				                <div class="col-sm-2">
                    <div class="form-group">
<label for="cgstamount">CGST(Rs)</label>
                        <input type="text" class="form-control" id="cgstamount" name="cgstamount" placeholder="Tax" readonly>
                    </div>
                </div>
			</div>
			<div class="row">
				<div class="col-sm-8"></div>
				      <div class="col-sm-2">
                    <div class="form-group">
<label for="taxsgst">SGST(%)</label>
<div class="input-group">
                        <input type="text" class="form-control" id="taxsgst" name="taxsgst" value="9" placeholder="SGST">
						<span class="input-group-addon"><strong>%</strong></span>
                    </div>
                    </div>
                </div>
				                <div class="col-sm-2">
                    <div class="form-group">
<label for="sgstamount">CGST(Rs)</label>
                        <input type="text" class="form-control" id="sgstamount" name="sgstamount" placeholder="Tax" readonly>
                    </div>
                </div>
			</div>
			<div class="row">
				<div class="col-sm-8"></div>
				      <div class="col-sm-2">
                    <div class="form-group">
<label for="taxigst">IGST(%)</label>
<div class="input-group">
                        <input type="text" class="form-control" id="taxigst" name="taxigst" value="0" placeholder="IGST">
						<span class="input-group-addon"><strong>%</strong></span>
                    </div>
                    </div>
                </div>
				                <div class="col-sm-2">
                    <div class="form-group">
<label for="igstamount">IGST(Rs)</label>
                        <input type="text" class="form-control" id="igstamount" name="igstamount"  placeholder="Tax" readonly>
                    </div>
                </div>
			</div>
							<div class="row">
							<div class="col-sm-10"></div>
				                <div class="col-sm-2">
                    <div class="form-group">
<label for="totaltax">Amount (Rs)</label>
                        <input type="text" class="form-control" id="totaltax" name="totaltax" placeholder="Total + Tax" readonly>
                    </div>
                </div>
			</div>
			<div class="row">
							<div class="col-sm-10"></div>
				                <div class="col-sm-2">
                    <div class="form-group">
<label for="totalround">Round Off (Rs) </label>
                        <input type="text" class="form-control" id="totalround" name="totalround" placeholder="Total" readonly>
                    </div>
                </div>
			</div>
			            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
					    <label for="amountwords">Amount Chargrable (in words)</label>
                        <textarea class="form-control" rows="2" name="amountwords" id="amountwords" placeholder="Amount Chargrable (in words)"></textarea>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-lg" name="submit" value="Print">
						
                    </div>
                </div>
            </div>
        </form>
    </div>
</form>
</body>
<script>
var room = 1;
function dynamic_fields(){
room++;
var objTo = document.getElementById('dym_fields')
var divadd = document.createElement("div");
divadd.setAttribute("class","form-group removeclass"+room);
divadd.innerHTML = '<div class="col-sm-1"><div class="form-group"><input type="text" class="form-control" id="slno" value='+room+' name="slno[]" placeholder="Sl No" readonly></div></div><div class="col-sm-5"><div class="form-group"><input type="text" class="form-control" id="desc"  name="desc[]" placeholder="Description of Goods"></div></div><div class="col-sm-2"><div class="form-group"><input type="text" class="form-control" id="hsn" name="hsn[]" placeholder="HSN/SAC"> </div></div><div class="col-sm-1"><div class="form-group"><input type="text" class="form-control" id="qty" name="qty[]" placeholder="Quantity"></div></div><div class="col-sm-1"><div class="form-group"><input type="text" class="form-control" id="rate" name="rate[]" placeholder="Rate"></div></div><div class="col-sm-2 "><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="amount" name="amount[]" placeholder="Amount"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_dynamic_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div>';
objTo.appendChild(divadd)
}
function remove_dynamic_fields(rid){
$('.removeclass'+rid).remove();}

</script>
<script>

$("#total,#taxcgst,#taxsgst,#taxigst").keyup(function(){
	var d = parseInt($('#total').val());
	var e = parseInt($('#taxcgst').val());
	var g = parseInt($('#taxsgst').val());
	var h = parseInt($('#taxigst').val());
	var f = (e/100) * d;
	$('#cgstamount').val(f);
	var i = (g/100) * d;
	$('#sgstamount').val(i);
	var j = (h/100) * d;
	$('#igstamount').val(j);
	var c = d + f + i + j;
	$('#totaltax').val(c);
	var k = c.toFixed();
	$('#totalround').val(k);
});

</script>

</html>
