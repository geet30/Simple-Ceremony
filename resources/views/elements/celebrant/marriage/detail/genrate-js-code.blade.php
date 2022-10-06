    @php
        $person = $couple;
        $person1 = isset($person) && isset($person[0]) ? $person[0] : null;
        $person2 = isset($person) && isset($person[1]) ? $person[1] : null;
        $booking = isset($person) && isset($person[0]['booking']) ? $person[0]['booking'] : null;
        $person1parent = isset($person) && isset($person[0]['parents']) ? $person[0]['parents'] : null;
        $person2parent = isset($person) && isset($person[1]['parents']) ? $person[1]['parents'] : null;
    @endphp

    $(
    'input[name="sections:0:section:container:marriageDate:switchGroup:exact:dateOn:day"]'
    ).val("{{ $booking ? date('d', strtotime($booking->booking_date)) : '' }}");

    $(
    'input[name="sections:0:section:container:marriageDate:switchGroup:exact:dateOn:month"]'
    ).val("{{ $booking ? date('m', strtotime($booking->booking_date)) : '' }}");

    $(
    'input[name="sections:0:section:container:marriageDate:switchGroup:exact:dateOn:year"]'
    ).val("{{ $booking ? date('Y', strtotime($booking->booking_date)) : '' }}");

    $(
    'input[name="sections:0:section:container:placeOfMarriage:location:edit"]'
    ).val("{{ $booking && $booking->location->name ? $booking->location->name : '' }}");

    $(
    'select[name="sections:0:section:container:placeOfMarriage:internationalAddress:country:edit"]'
    ).val("{{ Config::get('env.COUNTRY') }}");

    $(
    'select[name="sections:0:section:container:placeOfMarriage:internationalAddress:country:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'input[name="sections:0:section:container:placeOfMarriage:internationalAddress:switchGroup:domesticAddress:ausAddress:address2:edit"]'
    ).val("{{ $booking && $booking->location ? $booking->location->address : '' }}");

    $(
    'input[name="sections:0:section:container:placeOfMarriage:internationalAddress:switchGroup:domesticAddress:ausAddress:shortAddress:suburb:edit"]'
    ).val("{{ $booking && $booking->location ? $booking->location->town : '' }}");

    $(
    'select[name="sections:0:section:container:placeOfMarriage:internationalAddress:switchGroup:domesticAddress:ausAddress:shortAddress:state:edit"]'
    ).val("{{ $booking && $booking->location->town ? $booking->location->town : '' }}");

    $(
    'input[name="sections:0:section:container:placeOfMarriage:internationalAddress:switchGroup:domesticAddress:ausAddress:shortAddress:postcode:edit"]'
    ).val("{{ $booking && $booking->location->post_code ? $booking->location->post_code : '' }}");

    /*Party 1 Destails*/

    $('select[name="sections:1:section:container:party1Description:edit"]').val("{{ $person1 && $person1->person_description ? $person1->person_description : '' }}");

    $('input[name="sections:1:section:container:groomName:familyName:edit"]').val("{{ $person1 && $person1->family_name ? $person1->family_name : '' }}");

    $('input[name="sections:1:section:container:groomName:givenName:edit"]').val("{{ $person1 && $person1->preferred_name ? $person1->preferred_name : '' }}");

    $('input[name="sections:1:section:container:groomName:otherNames:edit"]').val("{{ $person1 && $person1->person_other_name ? $person1->person_other_name : '' }}");

    $('select[name="sections:1:section:container:party1Sex:edit"]').val("{{ $person1 && $person1->gender ? Config::get('userConstants.gender')[$person1->gender] : '' }}");

    $('select[name="sections:1:section:container:party1Sex:edit"]').trigger(
    "change"
    );
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'input[name="sections:1:section:container:groomOccupation:occupation:edit"]'
    ).val("{{ $person1 && $person1->occupation ? $person1->occupation : '' }}");

    $(
    'select[name="sections:1:section:container:groomResidentialAddress:country:edit"]'
    ).val("{{ $person1 && $person1->residence_place ? $person1->residence_place : '' }}");

    $(
    'select[name="sections:1:section:container:groomResidentialAddress:country:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 800));

    /*Party 1 Address*/

    $(
    'input[name="sections:1:section:container:groomResidentialAddress:switchGroup:domesticAddress:ausAddress:address1:edit"]'
    ).val("{{ $person1 && $person1->address_line_1 ? $person1->address_line_1 : '' }}");

    $(
    'input[name="sections:1:section:container:groomResidentialAddress:switchGroup:domesticAddress:ausAddress:address2:edit"]'
    ).val("{{ $person1 && $person1->address_line_2 ? $person1->address_line_2 : '' }}");

    $(
    'input[name="sections:1:section:container:groomResidentialAddress:switchGroup:domesticAddress:ausAddress:shortAddress:suburb:edit"]'
    ).val("{{ $person1 && $person1->residence_town_or_city_or_suburb ? $person1->residence_town_or_city_or_suburb : '' }}");

    $(
    'select[name="sections:1:section:container:groomResidentialAddress:switchGroup:domesticAddress:ausAddress:shortAddress:state:edit"]'
    ).val("{{ $person1 && $person1->residence_state_or_province_or_territory ? $person1->residence_state_or_province_or_territory : '' }}");

    $(
    'input[name="sections:1:section:container:groomResidentialAddress:switchGroup:domesticAddress:ausAddress:shortAddress:postcode:edit"]'
    ).val("{{ $person1 && $person1->postal_code ? $person1->postal_code : '' }}");

    $(
    'textarea[name="sections:1:section:container:groomResidentialAddress:switchGroup:internationalAddress:address:edit"]'
    ).val("");

    $('select[name="sections:1:section:container:groomMaritalStatus:edit"]').val("{{ $person1 && $person1->conjugal_status ? Config::get('userConstants.conjugal_status')[$person1->conjugal_status] : '' }}");

    $(
    'select[name="sections:1:section:container:groomMaritalStatus:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'select[name="sections:1:section:container:groomPlaceOfBirth:country:edit"]'
    ).val("{{ $person1 && $person1->birth_place ? $person1->birth_place : '' }}");

    $(
    'select[name="sections:1:section:container:groomPlaceOfBirth:country:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 600));

    /* Party 1 Email & Phone */
    $(
    'input[name="sections:1:section:container:person1ContactDetails:brideGroomContactDetails:phone:edit"]'
    ).val("{{ $person1 && $person1->userDetail ? $person1->userDetail->phone : '' }}");

    $(
    'input[name="sections:1:section:container:person1ContactDetails:brideGroomContactDetails:email:edit"]'
    ).val("{{ $person1 && $person1->userDetail ? $person1->userDetail->email : '' }}");

    /* Party 1 POB */

    $(
    'input[name="sections:1:section:container:groomPlaceOfBirth:suburb:edit"]'
    ).val("");

    $(
    'select[name="sections:1:section:container:groomPlaceOfBirth:state:edit"]'
    ).val("");

    $(
    'input[name="sections:1:section:container:groomPlaceOfBirth:province:edit"]'
    ).val("");

    /* Party 1 DOB */

    $(
    'input[name="sections:1:section:container:groomBirthAge:date:switchGroup:exact:dateOn:day"]'
    ).val("{{ $person1 ? date('d', strtotime($person1->date_of_birth)) : '' }}");

    $(
    'input[name="sections:1:section:container:groomBirthAge:date:switchGroup:exact:dateOn:month"]'
    ).val("{{ $person1 ? date('m', strtotime($person1->date_of_birth)) : '' }}");

    $(
    'input[name="sections:1:section:container:groomBirthAge:date:switchGroup:exact:dateOn:year"]'
    ).val("{{ $person1 ? date('Y', strtotime($person1->date_of_birth)) : '' }}");

    $(
    'select[name="sections:1:section:container:groomBirthAge:timeUnit:edit"]'
    ).val("{{ $person1 ? date_diff(date_create($person1->date_of_birth), date_create('today'))->y : '' }}");

    $(
    'select[name="sections:1:section:container:groomBirthAge:timeUnit:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    /* Party 1 Parents Details */

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent1Name:familyName:edit"]'
    ).val("{{ $person1parent ? $person1parent[0]['current_name'] : '' }}");

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent1Name:givenName:edit"]'
    ).val("{{ $person1parent ? $person1parent[0]['first_name'] : '' }}");

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent1Name:otherNames:edit"]'
    ).val("{{ $person1parent ? $person1parent[0]['other_name'] : '' }}");

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent1Name:familyNameAtBirth:edit"]'
    ).val("{{ $person1parent ? $person1parent[0]['birth_name'] : '' }}");

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent1Name:givenNameAtBirth:edit"]'
    ).val("{{ $person1parent ? $person1parent[0]['birth_first_name'] : '' }}")

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent1Name:otherNamesAtBirth:edit"]'
    ).val("{{ $person1parent ? $person1parent[0]['birth_other_name'] : '' }}")

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent2Name:familyName:edit"]'
    ).val("{{ $person1parent ? $person1parent[1]['current_name'] : '' }}")

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent2Name:givenName:edit"]'
    ).val("{{ $person1parent ? $person1parent[1]['first_name'] : '' }}");

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent2Name:otherNames:edit"]'
    ).val("{{ $person1parent ? $person1parent[1]['other_name'] : '' }}")

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent2Name:familyNameAtBirth:edit"]'
    ).val("{{ $person1parent ? $person1parent[1]['birth_name'] : '' }}")

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent2Name:givenNameAtBirth:edit"]'
    ).val("{{ $person1parent ? $person1parent[0]['birth_first_name'] : '' }}")

    $(
    'input[name="sections:1:section:container:newFieldsContainer:person1Parent2Name:otherNamesAtBirth:edit"]'
    ).val("{{ $person1parent ? $person1parent[0]['birth_other_name'] : '' }}")

    /* Party 2*/

    /*Party 2 Destails*/

    $('select[name="sections:2:section:container:party2Description:edit"]').val("{{ $person2 ? $person2->person_description : '' }}");

    $('input[name="sections:2:section:container:brideName:familyName:edit"]').val("{{ $person2 ? $person2->family_name : '' }}");

    $('input[name="sections:2:section:container:brideName:givenName:edit"]').val("{{ $person2 ? $person2->preferred_name : '' }}");

    $('input[name="sections:2:section:container:brideName:otherNames:edit"]').val("{{ $person2 ? $person2->other_name : '' }}");

    $('select[name="sections:2:section:container:party2Sex:edit"]').val("{{ $person2 ? $person2->gender : '' }}");

    $('select[name="sections:2:section:container:party2Sex:edit"]').trigger(
    "change"
    );
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'input[name="sections:2:section:container:brideOccupation:occupation:edit"]'
    ).val("{{ $person2 ? $person2->occupation : '' }}");

    $(
    'select[name="sections:2:section:container:brideResidentialAddress:secondary:country:edit"]'
    ).val("{{ $person2 ? $person2->residence_place : '' }}");

    $(
    'select[name="sections:2:section:container:brideResidentialAddress:secondary:country:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    /*Party 2 Address*/

    $(
    'input[name="sections:2:section:container:brideResidentialAddress:secondary:switchGroup:domesticAddress:ausAddress:address1:edit"]'
    ).val("{{ $person2 ? $person2->address_line_1 : '' }}");

    $(
    'input[name="sections:2:section:container:brideResidentialAddress:secondary:switchGroup:domesticAddress:ausAddress:address2:edit"]'
    ).val("{{ $person2 ? $person2->address_line_2 : '' }}");

    $(
    'input[name="sections:2:section:container:brideResidentialAddress:secondary:switchGroup:domesticAddress:ausAddress:shortAddress:suburb:edit"]'
    ).val("{{ $person2 ? $person2->residence_town_or_city_or_suburb : '' }}");

    $(
    'select[name="sections:2:section:container:brideResidentialAddress:secondary:switchGroup:domesticAddress:ausAddress:shortAddress:state:edit"]'
    ).val("{{ $person2 ? $person2->residence_state_or_province_or_territory : '' }}");

    $(
    'input[name="sections:2:section:container:brideResidentialAddress:secondary:switchGroup:domesticAddress:ausAddress:shortAddress:postcode:edit"]'
    ).val("{{ $person2 ? $person2->postal_code : '' }}");

    $(
    'textarea[name="sections:2:section:container:brideResidentialAddress:secondary:switchGroup:internationalAddress:address:edit"]'
    ).val("");

    $('select[name="sections:2:section:container:brideMaritalStatus:edit"]').val("{{ $person2 && $person2->conjugal_status ? Config::get('userConstants.conjugal_status')[$person2->conjugal_status] : '' }}");

    $(
    'select[name="sections:2:section:container:brideMaritalStatus:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'select[name="sections:2:section:container:bridePlaceOfBirth:country:edit"]'
    ).val("{{ $person2 ? $person2->birth_place : '' }}");

    $(
    'select[name="sections:2:section:container:bridePlaceOfBirth:country:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 600));

    /* Party 2 Email & Phone */

    $(
    'input[name="sections:2:section:container:person2ContactDetails:brideContactDetails:phone:edit"]'
    ).val("{{ $person2 ? $person2->userDetail->phone : '' }}");

    $(
    'input[name="sections:2:section:container:person2ContactDetails:brideContactDetails:email:edit"]'
    ).val("{{ $person2 ? $person2->userDetail->email : '' }}");

    /* Party 2 POB */

    $(
    'input[name="sections:2:section:container:bridePlaceOfBirth:suburb:edit"]'
    ).val("");

    $(
    'select[name="sections:2:section:container:bridePlaceOfBirth:state:edit"]'
    ).val("");

    $(
    'input[name="sections:2:section:container:bridePlaceOfBirth:province:edit"]'
    ).val("");

    /* Party 2 DOB */

    $(
    'input[name="sections:2:section:container:brideBirthAge:date:switchGroup:exact:dateOn:day"]'
    ).val("{{ $person2 ? date('d', strtotime($person2->date_of_birth)) : '' }}");

    $(
    'input[name="sections:2:section:container:brideBirthAge:date:switchGroup:exact:dateOn:month"]'
    ).val("{{ $person2 ? date('m', strtotime($person2->date_of_birth)) : '' }}");

    $(
    'input[name="sections:2:section:container:brideBirthAge:date:switchGroup:exact:dateOn:year"]'
    ).val("{{ $person2 ? date('Y', strtotime($person2->date_of_birth)) : '' }}");

    $(
    'select[name="sections:2:section:container:brideBirthAge:timeUnit:edit"]'
    ).val("{{ $person1 ? date_diff(date_create($person1->date_of_birth), date_create('today'))->y : '' }}");

    $(
    'select[name="sections:2:section:container:brideBirthAge:timeUnit:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    /* Party 2 Parents Details */

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent1Name:familyName:edit"]'
    ).val("{{ $person2parent ? $person2parent[0]->curent_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent1Name:givenName:edit"]'
    ).val("{{ $person2parent ? $person2parent[0]->first_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent1Name:otherNames:edit"]'
    ).val("{{ $person2parent ? $person2parent[0]->other_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent1Name:familyNameAtBirth:edit"]'
    ).val("{{ $person2parent ? $person2parent[0]->birth_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent1Name:givenNameAtBirth:edit"]'
    ).val("{{ $person2parent ? $person2parent[0]->birth_first_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent1Name:otherNamesAtBirth:edit"]'
    ).val("{{ $person2parent ? $person2parent[0]->birth_other_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent2Name:familyName:edit"]'
    ).val("{{ $person2parent ? $person2parent[1]->current_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent2Name:givenName:edit"]'
    ).val("{{ $person2parent ? $person2parent[1]->first_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent2Name:otherNames:edit"]'
    ).val("{{ $person2parent ? $person2parent[1]->other_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent2Name:familyNameAtBirth:edit"]'
    ).val("{{ $person2parent ? $person2parent[1]->birth_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent2Name:givenNameAtBirth:edit"]'
    ).val("{{ $person2parent ? $person2parent[1]->birth_first_name : '' }}");

    $(
    'input[name="sections:2:section:container:newFieldsContainer:person2Parent2Name:otherNamesAtBirth:edit"]'
    ).val("{{ $person2parent ? $person2parent[1]->birth_other_name : '' }}");

    /* Party 1 Additional */

    /* Party 1 Years in Aus */

    $(
    'input[name="sections:3:section:container:groomoPeriodOfResidenceInAustraliaYears:edit"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomoPeriodOfResidenceInAustraliaMonths:edit"]'
    ).val("");

    /* Party 1 Parent details */

    $(
    'select[name="sections:3:section:container:groomoFatherSCountryOfBirth:edit"]'
    ).val("{{ $person1parent ? $person1parent[0]->birth_place : '' }}");

    $(
    'select[name="sections:3:section:container:groomoGroomFatherStatus:lifeStatus:edit"]'
    ).val("Alive");

    $(
    'select[name="sections:3:section:container:groomoMotherSCountryOfBirth:edit"]'
    ).val("{{ $person1parent ? $person1parent[1]->birth_place : '' }}");

    $(
    'select[name="sections:3:section:container:groomoGroomMotherStatus:lifeStatus:edit"]'
    ).val("Alive");

    /* Party1 Enter Divorce*/

    $(
    'select[name="sections:3:section:container:groomoTerminationMethod:edit"]'
    ).val("");

    $(
    'select[name="sections:3:section:container:groomoTerminationMethod:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'input[name="sections:3:section:container:groomPreviousMarriages:childRepeater:1:year"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomoDateOfTerminationDay:switchGroup:exact:dateOn:day"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomoDateOfTerminationDay:switchGroup:exact:dateOn:month"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomoDateOfTerminationDay:switchGroup:exact:dateOn:year"]'
    ).val("");

    $(
    'select[name="sections:3:section:container:groomEvidenceOfTermOfLastMarriage:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:3:section:container:groomEvidenceOfTermOfLastMarriage:yesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $('input[name="sections:3:section:container:groomCourtLocation:edit"]').val("");

    $(
    'select[name="sections:3:section:container:groomChildrenList:numOfIssues:edit"]'
    ).val("Please Select");

    $(
    'select[name="sections:3:section:container:groomChildrenList:numOfIssues:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    /* Number of Kids*/

    $(
    'input[name="sections:3:section:container:groomChildrenList:childRepeater:1:edit"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomChildrenList:childRepeater:2:edit"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomChildrenList:childRepeater:3:edit"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomChildrenList:childRepeater:4:edit"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomChildrenList:childRepeater:5:edit"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomChildrenList:childRepeater:6:edit"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomChildrenList:childRepeater:7:edit"]'
    ).val("");

    $(
    'input[name="sections:3:section:container:groomChildrenList:childRepeater:8:edit"]'
    ).val("");

    /* Party 2 Additional */

    /* Party 2 Parent details */

    $(
    'select[name="sections:4:section:container:brideoFatherSCountryOfBirth:edit"]'
    ).val("Lebanon");

    $(
    'select[name="sections:4:section:container:brideoGroomFatherStatus:lifeStatus:edit"]'
    ).val("Alive");

    $(
    'select[name="sections:4:section:container:brideoMotherSCountryOfBirth:edit"]'
    ).val("Lebanon");

    $(
    'select[name="sections:4:section:container:brideoGroomMotherStatus:lifeStatus:edit"]'
    ).val("Alive");

    /* Party2 Enter Divorce*/

    $(
    'select[name="sections:4:section:container:brideoTerminationMethod:edit"]'
    ).val("");

    $(
    'select[name="sections:4:section:container:brideoTerminationMethod:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'input[name="sections:4:section:container:bridePreviousMarriages:childRepeater:1:year"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideoDateOfTerminationDay:switchGroup:exact:dateOn:day"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideoDateOfTerminationDay:switchGroup:exact:dateOn:month"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideoDateOfTerminationDay:switchGroup:exact:dateOn:year"]'
    ).val("");

    $(
    'select[name="sections:4:section:container:brideEvidenceOfTermOfLastMarriage:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:4:section:container:brideEvidenceOfTermOfLastMarriage:yesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $('input[name="sections:4:section:container:brideCourtLocation:edit"]').val("");

    $(
    'select[name="sections:4:section:container:brideChildrenList:numOfIssues:edit"]'
    ).val("Please Select");

    $(
    'select[name="sections:4:section:container:brideChildrenList:numOfIssues:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    /* Number of Kids*/

    $(
    'input[name="sections:4:section:container:brideChildrenList:childRepeater:1:edit"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideChildrenList:childRepeater:2:edit"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideChildrenList:childRepeater:3:edit"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideChildrenList:childRepeater:4:edit"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideChildrenList:childRepeater:5:edit"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideChildrenList:childRepeater:6:edit"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideChildrenList:childRepeater:7:edit"]'
    ).val("");

    $(
    'input[name="sections:4:section:container:brideChildrenList:childRepeater:8:edit"]'
    ).val("");

    /*-- Are they related*/

    $(
    'select[name="sections:5:section:container:oAreThePartiesRelatedToEachOther:yesNo:edit"]'
    ).val("false");

    $(
    'select[name="sections:4:section:container:brideEvidenceOfTermOfLastMarriage:yesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'select[name="sections:5:section:container:oRelationshipBetweenParties:edit"]'
    ).val("");

    $(
    'select[name="sections:4:section:container:brideEvidenceOfTermOfLastMarriage:yesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    /*NoIM received*/

    $(
    'input[name="sections:6:section:container:oNoimReceivedDateDay:switchGroup:exact:dateOn:day"]'
    ).val("08");

    $(
    'input[name="sections:6:section:container:oNoimReceivedDateDay:switchGroup:exact:dateOn:month"]'
    ).val("09");

    $(
    'input[name="sections:6:section:container:oNoimReceivedDateDay:switchGroup:exact:dateOn:year"]'
    ).val("2022");

    /*NoIM signed by */

    $(
    'select[wicketpath="mainContent_content_mainForm_sections_6_section_container_oHasTheBridegroomSignedTheNoim_yesNo_edit"]'
    ).val("true");

    $(
    'select[wicketpath="mainContent_content_mainForm_sections_6_section_container_oHasTheBridegroomSignedTheNoim_yesNo_edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 800));

    $(
    'select[name="sections:6:section:container:oHasTheBridegroomSignedTheyesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:6:section:container:oHasTheBridegroomSignedTheyesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 800));

    $(
    'select[name="sections:6:section:container:oHasTheNoimBeenSignedAndDatedByAQualifiedWitnessForGroom:yesNo:edit"]'
    ).val("true");

    $('select[name="sections:6:section:container:noimGroomWitnessTitle:edit"]').val(
    "Justice of the Peace"
    );

    $(
    'select[wicketpath="mainContent_content_mainForm_sections_6_section_container_oHasTheBrideSignedTheNoim_yesNo_edit"]'
    ).val("true");

    $(
    'select[wicketpath="mainContent_content_mainForm_sections_6_section_container_oHasTheBrideSignedTheNoim_yesNo_edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 800));

    $(
    'select[name="sections:6:section:container:oHasTheBrideSignedTheyesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:6:section:container:oHasTheBrideSignedTheyesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 800));

    $(
    'select[name="sections:6:section:container:oHasTheNoimBeenSignedAndDatedByAQualifiedWitnessForBride:yesNo:edit"]'
    ).val("true");

    $('select[name="sections:6:section:container:noimBrideWitnessTitle:edit"]').val(
    "Justice of the Peace"
    );

    $(
    'select[name="sections:6:section:container:oHasTheCelebrantSignedTheCom:yesNo:edit"]'
    ).val("true");

    /* BG Docs*/

    $(
    'select[name="sections:7:section:container:person1IdentityConfirmed:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:7:section:container:person1IdentityConfirmed:yesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'select[name="sections:7:section:container:person1EvidenceOfDateAndPlaceOfBirth:edit"]'
    ).val("Australian passport");

    $(
    'select[name="sections:7:section:container:person1EvidenceOfDateAndPlaceOfBirth:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $('input[name="sections:7:section:container:person1DocumentNumber:edit"]').val(
    "PA3883532 "
    );

    /* BG Photo Id */

    $(
    'select[name="sections:7:section:container:didParty1ProducePhotoIdentification:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:7:section:container:didParty1ProducePhotoIdentification:yesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'select[name="sections:7:section:container:party1PhotoIdSwitchGroup:party1PhotoDocumentType:edit"]'
    ).val("Passport");

    $(
    'select[name="sections:7:section:container:party1PhotoIdSwitchGroup:party1PhotoDocumentType:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 1200));

    $(
    'input[name="sections:7:section:container:party1PhotoIdSwitchGroup:party1PhotoIdentification:edit"]'
    ).val("PA3883532");

    $(
    'input[name="sections:7:section:container:party1PhotoIdNewFieldsSwitchGroup:person1PhotoIdPlaceOfIssue:edit"]'
    ).val("Australia");

    $(
    'select[name="sections:7:section:container:groomIssueOfDocumentS42:yesNo:edit"]'
    ).val("true");

    /* B Docs*/

    $(
    'select[name="sections:7:section:container:person2IdentityConfirmed:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:7:section:container:person2IdentityConfirmed:yesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'select[name="sections:7:section:container:person2EvidenceOfDateAndPlaceOfBirth:edit"]'
    ).val("Australian passport");

    $(
    'select[name="sections:7:section:container:person2EvidenceOfDateAndPlaceOfBirth:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $('input[name="sections:7:section:container:person2DocumentNumber:edit"]').val(
    "PB2091783"
    );

    /* B Photo Id */

    $(
    'select[name="sections:7:section:container:didParty2ProducePhotoIdentification:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:7:section:container:didParty2ProducePhotoIdentification:yesNo:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 400));

    $(
    'select[name="sections:7:section:container:party2PhotoIdSwitchGroup:party2PhotoDocumentType:edit"]'
    ).val("Passport");

    $(
    'select[name="sections:7:section:container:party2PhotoIdSwitchGroup:party2PhotoDocumentType:edit"]'
    ).trigger("change");
    await new Promise((done) => setTimeout(() => done(), 1200));

    $(
    'input[name="sections:7:section:container:party2PhotoIdSwitchGroup:party2PhotoIdentification:edit"]'
    ).val("PB2091783");

    $(
    'input[name="sections:7:section:container:party2PhotoIdNewFieldsSwitchGroup:person2PhotoIdPlaceOfIssue:edit"]'
    ).val("Australia");

    $(
    'select[name="sections:7:section:container:brideIssueOfDocumentS42:yesNo:edit"]'
    ).val("true");

    /* Declaration */

    $(
    'select[name="sections:10:section:container:oBridegroomCompletedAndSignedDeclaration:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:10:section:container:oCelebrantDatedAndSignedTheBridegroomSDeclaration:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:10:section:container:oBrideCompletedAndSignedDeclaration:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:10:section:container:oCelebrantDatedAndSignedBrideSDeclaration:yesNo:edit"]'
    ).val("true");

    /* Witnesses*/

    $(
    'select[name="sections:11:section:container:groomSignedCert:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:11:section:container:brideSignedCert:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:11:section:container:celebrantSignedCert:yesNo:edit"]'
    ).val("true");

    $(
    'input[name="sections:11:section:container:witness1name:familyName:edit"]'
    ).val("LADKANI");

    $(
    'input[name="sections:11:section:container:witness1name:givenName:edit"]'
    ).val("May");

    $(
    'input[name="sections:11:section:container:witness1name:otherNames:edit"]'
    ).val("");

    $(
    'select[name="sections:11:section:container:witness1SignedCom:yesNo:edit"]'
    ).val("true");

    $(
    'input[name="sections:11:section:container:witness2name:familyName:edit"]'
    ).val("DANG");

    $(
    'input[name="sections:11:section:container:witness2name:givenName:edit"]'
    ).val("Minh");

    $(
    'input[name="sections:11:section:container:witness2name:otherNames:edit"]'
    ).val("");

    $(
    'select[name="sections:11:section:container:witness2SignedCom:yesNo:edit"]'
    ).val("true");

    $(
    'select[name="sections:11:section:container:celebrantSignedOath:yesNo:edit"]'
    ).val("true");
