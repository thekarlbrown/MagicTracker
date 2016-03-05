$(document).ready(function(){
	$(".button-collapse").sideNav();
	$('select').material_select();
	var autocompleteSet = "";
    var autocompleteOptions = {
    url: "../resources/AllSets-autocomplete.json",
    getValue: "name",
	list: {
		match: {
			enabled: true
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

