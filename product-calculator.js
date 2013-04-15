/**
 * Product Calculator jQuery Plugin
 *
 * A simple table calculator jQuery Plugin
 *
 * @author Rob DiVincenzo <rob.divincenzo@gmail.com>
 * @version 0.0.1
 * @revision 1
 *
 *
 * Released: 03-22-2013
 *
**/

(function( $ ) {
  $.fn.productCalculator = function() {
		return this.each( function() {
			
			/*var grandTotalField = $(this).find('.product-calculator-grand-total');

			var cost = moneyToNumber($(this).find('.product-calculator-cost').html());
			var qtyField = $(this).find('.product-calculator-qty');			
			var totalField = $(this).find('.product-calculator-total');
*/
			var grandTotalField = $(this).find('.product-calculator-grand-total');
			var qtyField = $(this).find('.product-calculator-qty');			

			qtyField.change(function() {
				var cost = moneyToNumber($('#cost_'+this.id).html());
				calculateTotal(this.value, cost, this.id);
				calculateGrandTotal();
			});
			
			function calculateTotal( quantity, cost, id) {
				$('#total_'+id).html(Number(cost*quantity).numberToMoney());
			}
			
			function calculateGrandTotal() {
				var sum = 0;
				$(".product-calculator-total").each(function() {
					sum += moneyToNumber($(this).html());
				});
				grandTotalField.html(Number(sum).numberToMoney());
			}

			function moneyToNumber( money ){
				return Number(money.replace(/[^0-9\.]+/g,""));
			}

			//Extend the default Number object with a formatMoney() method:
			//usage: someVar.formatMoney(decimalPlaces, symbol, thousandsSeparator, decimalSeparator)
			//defaults: (2, "$", ",", ".")
			Number.prototype.numberToMoney = function(places, symbol, thousand, decimal) {
				places = !isNaN(places = Math.abs(places)) ? places : 2;
				symbol = symbol !== undefined ? symbol : "$";
				thousand = thousand || ",";
				decimal = decimal || ".";
				var number = this, 
				    negative = number < 0 ? "-" : "",
				    i = parseInt(number = Math.abs(+number || 0).toFixed(places), 10) + "",
				    j = (j = i.length) > 3 ? j % 3 : 0;
				return symbol + negative + (j ? i.substr(0, j) + thousand : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousand) + (places ? decimal + Math.abs(number - i).toFixed(places).slice(2) : "");
			};
			
	});
	};
})( jQuery );
