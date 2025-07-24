( function( api ) {

	// Extends our custom "green-farm-elementor" section.
	api.sectionConstructor['green-farm-elementor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );