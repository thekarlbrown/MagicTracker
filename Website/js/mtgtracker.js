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
			$('#cardInfoName').text("  " + $('#searchCards').getSelectedItemData().name + "   ---   ");
			$('#cardInfoSet').text("  " + $('#searchCards').getSelectedItemData().set);
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

