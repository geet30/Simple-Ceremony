<!DOCTYPE html>
<html>

<head>
    <title>Pdf</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }
    </style>

</head>
@php
$person1 = isset($person) && isset($person[0]) ? $person[0] : null;
$person2 = isset($person) && isset($person[1]) ? $person[1] : null;
$person1parent = isset($person) && isset($person[0]['parents']) ? $person[0]['parents'] : null;
$person2parent = isset($person) && isset($person[1]['parents']) ? $person[1]['parents'] : null;
@endphp

<body>
    <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
        style="font-family: 'Roboto', sans-serif;">
        <tbody>
            <tr>
                <td>
                    <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                        <tr>
                            <td><img src="ag.png" style="height: 110px;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <h1 style="font-weight: bold; font-size: 24px; color: black;margin-bottom: 4px;">Official
                        Certificate of
                        Marriage</h1>
                    <p style="font-size: 12px; color: black;margin-top:0px">
                        Section 50(1)(b) of the <i>Marriage Act 1961</i> (Cth)
                    </p>

                </td>
            </tr>
            <tr>
                <td>
                    <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                        <tr>
                            <td>
                                <p
                                    style="font-size: 18px; color: black; font-weight: bold; border-bottom: 1px solid black; margin-top:10px">
                                    Marriage was solemnised between the parties (details below)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table align="left" border="0" cellpadding="0" cellspacing="10" height="100%"
                                    width="100%">
                                    <tr>
                                        <td style="font-size: 12px; color: black;text-align: right;width: 130px;">Date
                                            marriage<br />solemnised
                                        </td>
                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                            <input type="text" value="25/02/2022"
                                                style="  width: 100%;  height:20px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 12px; color: black;text-align: right;width: 130px;">At
                                        </td>
                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                            <input type="text" value="Bondi Beach - In the sand, Bondi, 2026, NSW"
                                                style="  width: 100%;  height:20px;">
                                            <span style="font-size: 12px; color: black; font-weight: normal; ">Location,
                                                including
                                                suburb or town, city, state or territory and postcode where marriage
                                                solemnised</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 12px; color: black;text-align: right;width: 130px;">
                                            Ceremony used
                                        </td>
                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                            <input type="text" value="Marriage Act 1961"
                                                style="  width: 100%;  height:20px;">
                                            <span style="font-size: 12px; color: black; font-weight: normal; ">Religious
                                                rites or
                                                civil ceremony according to the Marriage Act 1961 (Cth)
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%"
                                    width="100%">
                                    <tr>
                                        <td>
                                            <p
                                                style="font-size: 18px; color: black; font-weight: bold; border-bottom: 1px solid black;">
                                                Details of the parties to the marriage
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table align="left" border="0" cellpadding="0" cellspacing="10"
                                                height="100%" width="100%">
                                                <tr>
                                                    <td style="width:130px;text-align: right;">&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">PERSON
                                                        1</td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">PERSON
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">
                                                        Description of
                                                        <br />parties
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <div style="    display: flex;">
                                                            <div
                                                                style="margin-right: 12px; display: flex;align-self: center;">
                                                                <input type="checkbox" class="checkbox" id="vehicle1"
                                                                    name="vehicle1" value="Bike"
                                                                    {{ $person1 && $person1['person_description'] == 1 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal ; line-height: 19px;"
                                                                    for="vehicle1"> Partner</label>
                                                            </div>
                                                            <div
                                                                style="margin-right: 12px; display: flex;align-self: center">
                                                                <input type="checkbox" class="checkbox" id="vehicle2"
                                                                    name="vehicle2" value="Car"
                                                                    {{ $person1 && $person1['person_description'] == 2 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="vehicle2"> Bride</label>
                                                            </div>
                                                            <div
                                                                style="margin-right: 12px; display: flex;align-self: center">
                                                                <input type="checkbox" class="checkbox" id="vehicle3"
                                                                    name="vehicle3" value="Boat"
                                                                    {{ $person1 && $person1['person_description'] == 3 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="vehicle3"> Groom</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <div style="    display: flex;">
                                                            <div style="margin-right: 12px;display: flex">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value1" name="value1" value="value1"
                                                                    {{ $person2 && $person2['person_description'] == 1 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal ; line-height: 19px;"
                                                                    for="value1"> Partner</label>
                                                            </div>
                                                            <div style="margin-right: 12px;display: flex">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value2" name="value2" value="value2"
                                                                    {{ $person2 && $person2['person_description'] == 2 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="value2"> Bride</label>
                                                            </div>
                                                            <div style="margin-right: 12px;display: flex"> <input
                                                                    type="checkbox" class="checkbox" id="value3"
                                                                    name="value3" value="value3"
                                                                    {{ $person2 && $person2['person_description'] == 3 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="value3"> Groom</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">Family
                                                        name</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1 && $person1['family_name'] ? $person1['family_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2 && $person2['family_name'] ? $person2['family_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">Given
                                                        name(s)</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1 && $person1['preferred_name'] ? $person1['preferred_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2 && $person2['preferred_name'] ? $person2['preferred_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">Usual
                                                        occupation
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1 && $person1['occupation'] ? $person1['occupation'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2 && $person2['occupation'] ? $person2['occupation'] : '' }}"
                                                            style=" width: 100%;   height: 20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">Usual
                                                        place <br />
                                                        of residence
                                                        <br /> <i>(full address)</i>
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1 && $person1['residence_place'] ? $person1['residence_place'] : '' }}"
                                                            style=" width: 100%;   height:36px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2 && $person2['residence_place'] ? $person2['residence_place'] : '' }}"
                                                            style=" width: 100%;   height: 36px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">
                                                        Conjugal status

                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <div style="    display: flex;margin-bottom: 20px;">
                                                            <div
                                                                style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value11" name="value11"
                                                                    {{ $person1 && $person1['conjugal_status'] == 1 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;position: relative;    top: 6px;"
                                                                    for="value11">Never validly married</label>
                                                            </div>
                                                            <div style=" width:50%;display: flex;align-self:center">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value12" name="value12"
                                                                    {{ $person1 && $person1['conjugal_status'] == 4 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="value12"> Widowed</label>
                                                            </div>
                                                        </div>
                                                        <div style="    display: flex;">
                                                            <div
                                                                style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value13" name="value12"
                                                                    {{ $person1 && $person1['conjugal_status'] == 2 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="value13"> Divorced</label>
                                                            </div>
                                                            <div style=" width:50%;display: flex;align-self:center">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value14" name="value14"
                                                                    {{ $person1 && $person1['conjugal_status'] == 3 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal;  line-height: 13px;position: relative;    top: 6px;"
                                                                    for="value14"> Divorce<br /> pending</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <div style="    display: flex;margin-bottom: 20px;">
                                                            <div
                                                                style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value15" name="value15"
                                                                    {{ $person1 && $person1['conjugal_status'] == 1 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal ;  line-height: 13px;position: relative;    top: 6px;"
                                                                    for="value15">Never validly married</label>
                                                            </div>
                                                            <div style=" width:50%;display: flex;align-self:center">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value16" name="value16"
                                                                    {{ $person1 && $person1['conjugal_status'] == 4 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="value16"> Widowed</label>
                                                            </div>
                                                        </div>
                                                        <div style="    display: flex;">
                                                            <div
                                                                style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value17" name="value17"
                                                                    {{ $person1 && $person1['conjugal_status'] == 2 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="value17"> Divorced</label>
                                                            </div>
                                                            <div style=" width:50%;display: flex;align-self:center">
                                                                <input type="checkbox" class="checkbox"
                                                                    id="value18" name="value18"
                                                                    {{ $person1 && $person1['conjugal_status'] == 3 ? 'checked="checked"' : '' }}>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal;  line-height: 13px;position: relative; top: 6px;"
                                                                    for="value18"> Divorce<br /> pending</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">
                                                        Birthplace

                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1 && $person1['birth_place'] ? $person1['birth_place'] : '' }}"
                                                            style=" width: 100%;   height:20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2 && $person2['birth_place'] ? $person2['birth_place'] : '' }}"
                                                            style=" width: 100%;   height: 20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">Date
                                                        of birth</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1 && $person1['date_of_birth'] ? $person1['date_of_birth'] : '' }}"
                                                            style=" width: 100%;   height:20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2 && $person2['date_of_birth'] ? $person2['date_of_birth'] : '' }}"
                                                            style=" width: 100%;   height:20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">Parent
                                                        1’s
                                                        <br />full current name
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1parent && $person1parent[0]['current_name'] ? $person1parent[0]['current_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2parent && $person2parent[0]['current_name'] ? $person2parent[0]['current_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">Parent
                                                        1’s
                                                        <br />full birth name
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1parent && $person1parent[0]['birth_name'] ? $person1parent[0]['birth_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2parent && $person2parent[0]['birth_name'] ? $person2parent[0]['birth_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">Parent
                                                        2’s
                                                        <br />full current name
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1parent && $person1parent[1]['current_name'] ? $person1parent[1]['current_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2parent && $person2parent[1]['current_name'] ? $person2parent[1]['current_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; color: black;text-align: right;">Parent
                                                        2’s
                                                        <br />full birth name
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1parent && $person1parent[1]['birth_name'] ? $person1parent[1]['birth_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2parent && $person2parent[1]['current_name'] ? $person2parent[1]['current_name'] : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%"
                                    width="100%">
                                    <tr>
                                        <td>
                                            <p
                                                style="font-size: 18px; color: black; font-weight: bold; border-bottom: 1px solid black;">
                                                Signatures of parties and witnesses
                                            </p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table align="left" border="0" cellpadding="0" cellspacing="10"
                                                height="100%" width="100%">

                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: black;text-align: right;width:130px">
                                                        Signature of parties<br /> to the marriage
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        @if ($person1 && $person1->marriageDocumentPdfOfficialMarriageCertificate)
                                                            @if (file_exists($person1->marriageDocumentPdfOfficialMarriageCertificate->person1_signature))
                                                                <img src="{{ asset($person1->marriageDocumentPdfOfficialMarriageCertificate->person1_signature) }}"
                                                                    alt="" style="width: 100%;  height:40px;">
                                                            @endif
                                                        @endif
                                                        @if (isset($button) && $button)
                                                            <button data-toggle="modal" data-target="person1signature"
                                                                onclick="readySignature('person1signaturePad')">Edit</button>
                                                            <div class="modal--" id="person1signature">
                                                                <div class="modal-dialog--">
                                                                    <div class="modal-content">
                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                @if ($message = Session::get('success'))
                                                                                    <div
                                                                                        class="alert alert-success  alert-dismissible">
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="alert">×</button>
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </div>
                                                                                @endif
                                                                                <form method="POST"
                                                                                    action="{{ route('userNoim.documents.signature') }}">
                                                                                    @csrf
                                                                                    <input type="hidden"
                                                                                        name="document_name"
                                                                                        value="offical-certificate-of-marriage">
                                                                                    <div class="col-md-12">
                                                                                        <label class=""
                                                                                            for="">Signature:</label>
                                                                                        <br />
                                                                                        <div id="person1signaturePad">
                                                                                        </div>
                                                                                        <br />
                                                                                        <button type="button"
                                                                                            id="person1signaturePadclear"
                                                                                            class="btn btn-danger btn-sm">Clear
                                                                                            Signature</button>
                                                                                        <textarea id="person1signaturePadsignature64" name="signed" style="display: none"></textarea>
                                                                                        <input type="hidden"
                                                                                            name="key"
                                                                                            value="person1_signature">
                                                                                    </div>
                                                                                    <br />
                                                                                    <button
                                                                                        class="btn btn-success">Save</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button">Delete</button>
                                                        @endif
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        @if ($person1 && $person1->marriageDocumentPdfOfficialMarriageCertificate)
                                                            @if (file_exists($person1->marriageDocumentPdfOfficialMarriageCertificate->person2_signature))
                                                                <img src="{{ asset($person1->marriageDocumentPdfOfficialMarriageCertificate->person2_signature) }}"
                                                                    alt="" style="width: 100%;  height:40px;">
                                                            @endif
                                                        @endif
                                                        @if (isset($button) && $button)
                                                            <button data-toggle="modal" data-target="person2signature"
                                                                onclick="readySignature('person2signaturePad')">Edit</button>
                                                            <div class="modal--" id="person2signature">
                                                                <div class="modal-dialog--">
                                                                    <div class="modal-content">
                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                @if ($message = Session::get('success'))
                                                                                    <div
                                                                                        class="alert alert-success  alert-dismissible">
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="alert">×</button>
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </div>
                                                                                @endif
                                                                                <form method="POST"
                                                                                    action="{{ route('userNoim.documents.signature') }}">
                                                                                    @csrf
                                                                                    <input type="hidden"
                                                                                        name="document_name"
                                                                                        value="offical-certificate-of-marriage">
                                                                                    <div class="col-md-12">
                                                                                        <label class=""
                                                                                            for="">Signature:</label>
                                                                                        <br />
                                                                                        <div id="person2signaturePad">
                                                                                        </div>
                                                                                        <br />
                                                                                        <button type="button"
                                                                                            id="person2signaturePadclear"
                                                                                            class="btn btn-danger btn-sm">Clear
                                                                                            Signature</button>
                                                                                        <textarea id="person2signaturePadsignature64" name="signed" style="display: none"></textarea>
                                                                                        <input type="hidden"
                                                                                            name="key"
                                                                                            value="person2_signature">
                                                                                    </div>
                                                                                    <br />
                                                                                    <button
                                                                                        class="btn btn-success">Save</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button">Delete</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: black;text-align: right;width:130px">
                                                        Full name of<br /> witnesses </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person1 && $person1->marriageDocument ? $person1->marriageDocument->person_1_witness_name : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text"
                                                            value="{{ $person2 && $person2->marriageDocument ? $person2->marriageDocument->person_2_witness_name : '' }}"
                                                            style="  width: 100%;  height: 20px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: black;text-align: right;width:130px">
                                                        Signature of witness
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        @if ($person1 && $person1->marriageDocumentPdfOfficialMarriageCertificate)
                                                            @if (file_exists($person1->marriageDocumentPdfOfficialMarriageCertificate->person1witness_signature))
                                                                <img src="{{ asset($person1->marriageDocumentPdfOfficialMarriageCertificate->person1witness_signature) }}"
                                                                    alt="" style="width: 100%;  height:40px;">
                                                            @endif
                                                        @endif
                                                        @if (isset($button) && $button)
                                                            <button data-toggle="modal"
                                                                data-target="person1Witnesssignature"
                                                                onclick="readySignature('person1WitnesssignaturePad')">Edit</button>
                                                            <div class="modal--" id="person1Witnesssignature">
                                                                <div class="modal-dialog--">
                                                                    <div class="modal-content">
                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                @if ($message = Session::get('success'))
                                                                                    <div
                                                                                        class="alert alert-success  alert-dismissible">
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="alert">×</button>
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </div>
                                                                                @endif
                                                                                <form method="POST"
                                                                                    action="{{ route('userNoim.documents.signature') }}">
                                                                                    @csrf
                                                                                    <input type="hidden"
                                                                                        name="document_name"
                                                                                        value="offical-certificate-of-marriage">
                                                                                    <div class="col-md-12">
                                                                                        <label class=""
                                                                                            for="">Signature:</label>
                                                                                        <br />
                                                                                        <div
                                                                                            id="person1WitnesssignaturePad">
                                                                                        </div>
                                                                                        <br />
                                                                                        <button type="button"
                                                                                            id="person1WitnesssignaturePadclear"
                                                                                            class="btn btn-danger btn-sm">Clear
                                                                                            Signature</button>
                                                                                        <textarea id="person2WitnesssignaturePadsignature64" name="signed" style="display: none"></textarea>
                                                                                        <input type="hidden"
                                                                                            name="key"
                                                                                            value="person1witness_signature">
                                                                                    </div>
                                                                                    <br />
                                                                                    <button
                                                                                        class="btn btn-success">Save</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button">Delete</button>
                                                        @endif
                                                        {{-- <input type="text" value=""
                                                            style="  width: 100%;  height: 20px;"> --}}
                                                        {{-- <img src="https://www.signwell.com/assets/vip-signatures/courtney-love-signature-f4f978da27e809c02a68ad1eedceb8d51b0ec6834790f9effdc2db053495d83a.svg"
                                                            alt="" style="  width: 100%;  height:40px;"> --}}
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        @if ($person1 && $person1->marriageDocumentPdfOfficialMarriageCertificate)
                                                            @if (file_exists($person1->marriageDocumentPdfOfficialMarriageCertificate->person2witness_signature))
                                                                <img src="{{ asset($person1->marriageDocumentPdfOfficialMarriageCertificate->person2witness_signature) }}"
                                                                    alt="" style="width: 100%;  height:40px;">
                                                            @endif
                                                        @endif
                                                        @if (isset($button) && $button)
                                                            <button data-toggle="modal"
                                                                data-target="person2Witnesssignature"
                                                                onclick="readySignature('person2WitnesssignaturePad')">Edit</button>
                                                            <div class="modal--" id="person2Witnesssignature">
                                                                <div class="modal-dialog--">
                                                                    <div class="modal-content">
                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                @if ($message = Session::get('success'))
                                                                                    <div
                                                                                        class="alert alert-success  alert-dismissible">
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="alert">×</button>
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </div>
                                                                                @endif
                                                                                <form method="POST"
                                                                                    action="{{ route('userNoim.documents.signature') }}">
                                                                                    @csrf
                                                                                    <input type="hidden"
                                                                                        name="document_name"
                                                                                        value="offical-certificate-of-marriage">
                                                                                    <div class="col-md-12">
                                                                                        <label class=""
                                                                                            for="">Signature:</label>
                                                                                        <br />
                                                                                        <div
                                                                                            id="person2WitnesssignaturePad">
                                                                                        </div>
                                                                                        <br />
                                                                                        <button type="button"
                                                                                            id="person2WitnesssignaturePadclear"
                                                                                            class="btn btn-danger btn-sm">Clear
                                                                                            Signature</button>
                                                                                        <textarea id="person2WitnesssignaturePadsignature64" name="signed" style="display: none"></textarea>
                                                                                        <input type="hidden"
                                                                                            name="key"
                                                                                            value="person2witness_signature">
                                                                                    </div>
                                                                                    <br />
                                                                                    <button
                                                                                        class="btn btn-success">Save</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button">Delete</button>
                                                        @endif
                                                        {{-- <input type="text" value=""
                                                            style="  width: 100%;  height: 20px;"> --}}
                                                        {{-- <img src="https://www.signwell.com/assets/vip-signatures/courtney-love-signature-f4f978da27e809c02a68ad1eedceb8d51b0ec6834790f9effdc2db053495d83a.svg"
                                                            alt="" style="  width: 100%;  height:40px;"> --}}
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%"
                                    width="100%">
                                    <tr>
                                        <td>
                                            <p
                                                style="font-size: 18px; color: black; font-weight: bold; border-bottom: 1px solid black;">
                                                To be completed by authorised celebrant
                                            </p>
                                            <p style="font-size: 12px; color: black;">I certify that, on the date and
                                                at the place specified above, I duly solemnised this marriage in
                                                accordance with the provisions of the Marriage Act 1961 (Cth) between
                                                the parties specified above.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table align="left" border="0" cellpadding="0" cellspacing="10"
                                                height="100%" width="100%">

                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: black;text-align: right;width:130px">
                                                        Full name of celebrant
                                                    </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text" value="Michael John Teulon"
                                                            style="  width: 100%;  height:20px;">
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: black;text-align: right;width:130px">
                                                        &nbsp; </td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        @if ($person1 && $person1->marriageDocumentPdfOfficialMarriageCertificate)
                                                            @if (file_exists($person1->marriageDocumentPdfOfficialMarriageCertificate->celebrant_signature))
                                                                <img src="{{ asset($person1->marriageDocumentPdfOfficialMarriageCertificate->celebrant_signature) }}"
                                                                    alt="" style="width: 100%;  height:40px;">
                                                            @endif
                                                        @endif
                                                        @if (isset($button) && $button)
                                                            <button data-toggle="modal"
                                                                data-target="celebrantSignature"
                                                                onclick="readySignature('celebrantSignaturePad')">Edit</button>
                                                            <div class="modal--" id="celebrantSignature">
                                                                <div class="modal-dialog--">
                                                                    <div class="modal-content">
                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                @if ($message = Session::get('success'))
                                                                                    <div
                                                                                        class="alert alert-success  alert-dismissible">
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="alert">×</button>
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </div>
                                                                                @endif
                                                                                <form method="POST"
                                                                                    action="{{ route('userNoim.documents.signature') }}">
                                                                                    @csrf
                                                                                    <input type="hidden"
                                                                                        name="document_name"
                                                                                        value="offical-certificate-of-marriage">
                                                                                    <div class="col-md-12">
                                                                                        <label class=""
                                                                                            for="">Signature:</label>
                                                                                        <br />
                                                                                        <div
                                                                                            id="celebrantSignaturePad">
                                                                                        </div>
                                                                                        <br />
                                                                                        <button type="button"
                                                                                            id="celebrantSignaturePadclear"
                                                                                            class="btn btn-danger btn-sm">Clear
                                                                                            Signature</button>
                                                                                        <textarea id="celebrantSignaturePadsignature64" name="signed" style="display: none"></textarea>
                                                                                        <input type="hidden"
                                                                                            name="key"
                                                                                            value="celebrant_signature">
                                                                                    </div>
                                                                                    <br />
                                                                                    <button
                                                                                        class="btn btn-success">Save</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button">Delete</button>
                                                        @endif
                                                        <span
                                                            style="font-size: 12px; color: black; font-weight: normal;margin-left: 6px; ">Celebrant’s
                                                            signature</span>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td style="font-size: 18px; color: black; font-weight: bold;">
                                                        <input type="text" value=""
                                                            style="  width: 100%;  height: 40px;">
                                                        <span
                                                            style="font-size: 12px; color: black; font-weight: normal; margin-left: 6px">Celebrant’s
                                                            authorisation number</span>
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>
<script>
    $(document).ready(function() {})

    function readySignature(id) {
        let signId = "#" + id;
        var sig = $(signId).signature({
            syncField: signId + 'signature64',
            syncFormat: 'PNG'
        });
        $(signId + 'clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $(signId + "signature64").val('');
        });

    }
</script>

</html>
