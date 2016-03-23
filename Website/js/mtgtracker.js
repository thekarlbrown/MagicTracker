$(document).ready(function(){
	$(".button-collapse").sideNav();
	$('select').material_select();
	var autocompleteSet = "";
    var autocompleteOptions = {
    url: "../resources/AllSets-autocomplete.json",
    getValue: "name",
	list: {
		maxNumberOfElements: 30,
		match: {
			enabled: true
		},
		onSelectItemEvent: function() {
			$('#cardSet').val($('#searchCards').getSelectedItemData().set);
			$('#cardMultiverseID').val($('#searchCards').getSelectedItemData().multiverseid);
		    $('#cardImage').attr("src", "http://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=" + $('#cardMultiverseID').val() + "&type=card");
			$('#cardInfoName').text("  " + $('#searchCards').getSelectedItemData().name);
			$('#cardInfoSet').text("  " + $('#searchCards').getSelectedItemData().set);
			$(document).updateTCGPrice($('#searchCards').getSelectedItemData().name,$('#searchCards').getSelectedItemData().set)
			$('#displaySection').show();
		}
	},
    template: {
        type: "custom",
        method: function(value, item) {
            autocompleteSet=item.set;
            return value + " | Set: " + item.set;
        }
    }
};
$("#searchCards").easyAutocomplete(autocompleteOptions);
});
(function( $ ){
   $.fn.updateTCGPrice = function(cardName,cardSet) {
		//TODO: Query price data based on Card Set and Name,
		if(false){ //TODO: If we get Data from TCGPlayer API's from Card Set and Name
			//TODO: Set Pricing based on API data
		}else{
			$('#cardInfoTCGHigh').text("TCGHigh pricing not available");
			$('#cardInfoTCGMid').text("TCGMid pricing not available");
			$('#cardInfoTCGLow').text("TCGLow pricing not available");
		}  
   }; 
})( jQuery );
