<!DOCTYPE html>
<html>

<head>
    <title>NOIM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    @if (isset($button) && $button)
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link type="text/css"
            href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
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
    @endif
</head>
@php
$person1 = isset($person) && isset($person[0]) ? $person[0] : null;
$person2 = isset($person) && isset($person[1]) ? $person[1] : null;
$person1parent = isset($person) && isset($person[0]['parents']) ? $person[0]['parents'] : null;
$person2parent = isset($person) && isset($person[1]['parents']) ? $person[1]['parents'] : null;
@endphp

<body>
    <div class="container">
        <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
            style="font-family: 'Roboto', sans-serif;" id="noim-document">
            <tbody>
                <tr>
                    <td>
                        <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%"
                            width="100%">
                            <tr>
                                <td><img src="{{ asset('document-logo.jpg') }}" style="height: 80px;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1 style="font-weight: bold; font-size: 24px; color: black;">Notice of Intended Marriage </h1>
                        <p style="font-size: 12px; color: black;">
                            Please read all of the information in this form. You may need to refer back to these
                            instructions as you complete this form. You may complete this form:
                        </p>
                        <ul>
                            <li style="font-size: 12px; color: black; margin-bottom:8px;">Electronically by typing in
                                the
                                required information directly into the boxes below. You can print and sign a hard copy
                                of
                                the form or sign electronically in the presence of an authorised person.
                            </li>
                            <li style="font-size: 12px; color: black; margin-bottom: 8px">Manually by printing the form
                                and
                                completing the required information using <b> BLOCK LETTERS</b>.
                            </li>
                            <li style="font-size: 12px; color: black;"> Please ensure you read the explanation in the
                                Instructions for completing this form, including in relation to items 7 and 8.
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2 style="font-weight: bold; font-size: 14px; color: black;">Privacy notice </h2>
                        <ul>
                            <li style="font-size: 12px; color: black; margin-bottom:8px;">The Marriage Act 1961 (Cth)
                                (the
                                Act) requires that a marriage shall not be solemnised unless certain personal
                                information is
                                provided in writing. This information is required in two forms: the Notice of Intended
                                Marriage (under paragraph 42(1)(a) of the Act); and the Declaration of No Legal
                                Impediment
                                to Marriage (under paragraph 42(1)(c) of the Act). Together with the Official
                                Certificate of
                                Marriage (under paragraph 50(1)(b) of the Act), these three forms are referred to as the
                                Documents.
                            </li>
                            <li style="font-size: 12px; color: black; margin-bottom:8px">The Documents must be submitted
                                by
                                the authorised celebrant to the Registrar of Births, Deaths and Marriages (the Registry)
                                in
                                the state or territory where the marriage took place, within 14 days after the marriage
                                ceremony is performed by an authorised celebrant.
                            </li>
                            <li style="font-size: 12px; color: black; margin-bottom:8px;"> The Registry uses the
                                information
                                in the Documents to register the marriage. The Registry will use, store and disclose the
                                personal information in accordance with the privacy laws of the state or territory in
                                which
                                the marriage took place.
                            </li>
                            <li style="font-size: 12px; color: black; margin-bottom:8px;"> The Registry will provide the
                                information contained in the Notice of Intended Marriage (the Notice) to the Australian
                                Bureau of Statistics (ABS), which requests the information under the Census and
                                Statistics
                                Act 1905. The ABS only records non-identifying information from the Notice, and uses the
                                information to generate national statistics on marriage and the family in Australia. The
                                ABS
                                does not retain identifying personal information.
                            </li>
                            <li style="font-size: 12px; color: black; margin-bottom:8px;"> The Registry may provide the
                                Documents to the Registrar of Marriage Celebrants and the Commonwealth
                                Attorney-General’s
                                Department for purposes related to the functions of the Registrar of Marriage
                                Celebrants.
                                More information on how your personal information is managed by the Attorney-General’s
                                Department can be obtained from the department.
                            </li>
                            <li style="font-size: 12px; color: black;"> For more information on how your personal
                                information will be managed, or to access or correct the information contained in the
                                register of marriages, please contact the Registry in the state or territory where your
                                marriage will take or took place.
                            </li>
                        </ul>
                        <h2 style="font-weight: bold; font-size: 14px; color: black;">Instructions for completing this
                            form
                        </h2>
                        <h3 style="font-weight: bold; font-size: 12px; color: black;">Requirements applying to ALL
                            marrying
                            couples
                        </h3>
                        <p style="font-size: 12px; color: black;">It is a criminal offence for a person to give the
                            Notice
                            to an authorised celebrant or to sign it if that person knows the Notice contains a false
                            statement or an error or is defective (section 104, Marriage Act).
                        </p>
                        <p style="font-size: 12px; color: black;">You must give this completed and signed notice to an
                            authorised celebrant at least one month, and not more than 18 months, before your proposed
                            marriage, unless a prescribed authority has agreed to shorten the notice period (section 42
                            of
                            the Act). For a list of prescribed authorities, visit <a
                                href="http://www.ag.gov.au/marriage" target="_black"
                                style="color:blue">www.ag.gov.au/marriage</a>.
                        </p>
                        <h3 style="font-weight: bold; font-size: 12px; color: black;">Instructions on specific items
                        </h3>
                        <p style="font-size: 12px; color: black;"><b>Where information is not known or cannot be
                                obtained:</b> If you are unable, after reasonable inquiry, to state any information
                            required
                            in the Notice, you should write ‘unknown’ in the relevant space on the form and give the
                            authorised celebrant a statutory declaration explaining why you are unable to provide the
                            information. A statutory declaration is not required for items 11 to 16. These items relate
                            to
                            the parents of the parties to the marriage. Complete this section where applicable.
                        </p>
                        <p style="font-size: 12px; color: black;"><b>Item 1:</b> It is up to each party to the marriage
                            to
                            decide how they want to describe themselves.
                        </p>
                        <p style="font-size: 12px; color: black;"><b>Item 4:</b> This item is optional. It is up to each
                            party to the marriage to decide whether they wish to complete the item. It is up to each
                            party
                            to the marriage to decide how they want to describe their gender if they choose to complete
                            the
                            item. Non-binary includes ‘unspecified’ or ‘indeterminate’ and people who do not exclusively
                            identify as either female or male.
                        </p>
                        <p style="font-size: 12px; color: black;"><b>Item 7:</b> The term ‘conjugal status’ means
                            whether
                            you have ever been legally married before. You should not include information about
                            relationships other than married relationships. If your status is ‘divorce pending’, the
                            divorce
                            must take effect before the marriage can be solemnised.
                        </p>
                        <p style="font-size: 12px; color: black;"><b>Item 8: </b> If you were born <span
                                style="text-decoration:underline">in Australia</span> , your birthplace is the city or
                            town
                            and state or territory. If you were born <span style="text-decoration: underline">outside
                                Australia</span>, your birthplace is the city or town, state or province (if applicable)
                            and
                            country.
                        </p>
                        <p style="font-size: 12px; color: black;"><b>Item 1:</b> It is up to each party to the marriage
                            to
                            decide how they want to describe themselves.
                        </p>
                        <h3 style="font-weight: bold; font-size: 12px; color: black;">How to sign the Notice </h3>
                        <p style="font-size: 12px; color: black;">The Notice lists who can witness the signatures of the
                            marrying couple. The Notice must be signed in the physical presence of an authorised witness
                            as
                            specified (section 42 of the Act). Authorised witnesses are listed in the “Signatures of
                            parties
                            and witnesses” section of this form.
                        </p>
                        <p style="font-size: 12px; color: black;">If a person is unable to sign the Notice at the time
                            it is
                            given to the authorised celebrant, the other person may sign the Notice and give it to the
                            authorised celebrant. The person who has not signed the Notice must then sign the Notice in
                            the
                            physical presence of that celebrant or another authorised celebrant before the marriage can
                            take
                            place.
                        </p>
                        <h3 style="font-weight: bold; font-size: 12px; color: black;">Documents that must be provided to
                            an
                            authorised celebrant
                        </h3>
                        <p style="font-size: 12px; color: black;"><b>Items 19 to 20 and 25 to 28:</b> As well as the
                            Notice,
                            before the marriage can take place both parties must provide to the authorised celebrant
                            (section 42 of the Act):
                        </p>
                        <ul style="list-style-type: lower-alpha;">
                            <li style="font-size: 12px; color: black; margin-bottom: 8px"> evidence of the parties’ date
                                and
                                place of birth, such as a birth certificate, official extract from a birth register or
                                an
                                Australian or overseas passport, and
                            </li>
                            <li style="font-size: 12px; color: black;">if a party is divorced or a party’s last spouse
                                died,
                                evidence of divorce or death of that spouse.
                            </li>
                        </ul>
                        <p style="font-size: 12px; color: black;"><b>Items 21 to 24:</b>Before the marriage can take
                            place,
                            the authorised celebrant must also be satisfied that you are one of the people named in the
                            Notice. Photographic evidence of identity such as a passport, a driver licence, proof of age
                            card or an official identity card will assist the authorised celebrant to meet this
                            requirement.
                            If numerous ID Documents are sighted by the celebrant and are more than can be accomodated
                            at
                            Item 22, the celebrant may include details of the ID documents in an additional cover note
                            to
                            the Registry.
                        </p>
                        <p style="font-size: 12px; color: black;"><b>Note: Items 25 to 28 </b>should only be completed
                            for
                            parties who have been legally married previously. Where you have been legally married more
                            than
                            once, <b>item 25</b> (completed by the authorised celebrant) is the date on which your last
                            spouse died, or the date on which the divorce or nullity order for your last marriage took
                            effect.
                        </p>
                        <h3 style="font-weight: bold; font-size: 12px; color: black;">Additional requirements apply when
                            a
                            person to be married is under 18 years of age
                        </h3>
                        <p style="font-size: 12px; color: black;">A person under 18 years is not of marriageable age,
                            and
                            cannot be a party to a marriage, unless the person obtains an order from a judge or
                            magistrate
                            under section 12 of the Act.
                        </p>
                        <p style="font-size: 12px; color: black;">In addition, if you have not turned 18 (unless you
                            have
                            previously been legally married), before the marriage can take place you must obtain and
                            give to
                            the authorised celebrant the necessary consents or dispensations required under the Act.
                        </p>
                        <p style="font-size: 12px; color: black;">The authorised celebrant must record on the Notice
                            that
                            they saw the court order and the consents or dispensations. The authorised celebrant may
                            also
                            need to endorse the consent (subsection 9(2), Marriage Regulations 2017 (Cth)).
                        </p>
                        <p style="font-size: 12px; color: black;">It is a criminal offence for a person to marry another
                            person who is under 18 years of age without the order of a judge or magistrate made before
                            the
                            marriage (section 95 of the Act). Further, it is an offence under subsection 99(4) of the
                            Act
                            for a marriage celebrant to solemnise a marriage involving a minor without receiving the
                            consents required under section 13 of the Act. Under no circumstances can two persons under
                            18
                            years legally marry.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="page-break-after:always"></div>
                        <div style="page-break-inside:avoid"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%"
                            width="100%">
                            <tbody>
                                <tr>
                                    <td style="width:60%">
                                        <table align="left" border="0" cellpadding="0" cellspacing="0"
                                            height="100%" width="100%">
                                            <thead style="background-color: black; ">
                                                <tr>
                                                    <td colspan="2"
                                                        style="font-size: 12px; color: white;  text-align:center;  padding: 7px;">
                                                        FOR CELEBRANT USE ONLY – BOOKING INFORMATION
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: black;  border-left:1px solid black; border-right:1px solid black;   padding: 7px; border-bottom: 1px solid black;">
                                                        Time and Date
                                                    </td>
                                                    <td
                                                        style="font-size: 12px; color: black;  padding: 7px;border-right:1px solid black;  border-bottom: 1px solid black; border-bottom: 1px solid black;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: black;   border-right:1px solid black;  border-left:1px solid black; border-bottom: 1px solid black;  padding: 7px;">
                                                        Location
                                                    </td>
                                                    <td
                                                        style="font-size: 12px; color: black;  border-bottom: 1px solid black;  padding: 7px; border-right:1px solid black; ">
                                                        Bondi Beach
                                                        - In the sand, Bondi, 2026, NSW
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td style="width:10%">&nbsp;</td>
                                    <td style="width:30%">
                                        <table align="left" border="0" cellpadding="0" cellspacing="0"
                                            height="100%" width="100%">
                                            <thead style="background-color: black; ">
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: white;  text-align:center;  padding: 7px;">
                                                        For use only by Registries of Births, Deaths & Marriages
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: black; font-weight: bold; padding: 7px;border-left:1px solid black;   border-right:1px solid black;  border-bottom: 1px solid black; text-align: center;">
                                                        Registered No.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: black; border-right:1px solid black;  border-bottom:1px solid black;  border-left:1px solid black;   border-botto:1px solid black;  padding: 7px; text-align: center;">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%"
                            width="100%">
                            <tr>
                                <td>
                                    <h2 style="font-weight: bold; font-size: 22px; color: black;">Notice of Intended
                                        Marriage
                                    </h2>
                                    <p style="font-size: 12px; color: black;">Complete this form in <b>TYPE</b> or by
                                        using
                                        <b>BLOCK LETTERS</b>
                                    </p>
                                    <p
                                        style="font-size: 18px; color: black; font-weight: bold; border-bottom: 1px solid black;">
                                        Details of the parties
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table align="left" border="0" cellpadding="0" cellspacing="10"
                                        height="100%" width="100%">
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px;color: black;font-weight: bold;text-align: center;">
                                                PERSON 1</td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px;color: black;font-weight: bold;text-align: center;">
                                                PERSON 2</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">1.</td>
                                            <td style="font-size: 12px; color: black;">Description of part</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex;">
                                                    <div style="margin-right: 12px; display: flex;align-self: center;">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="vehicle1" name="vehicle1"
                                                            value="Bike"
                                                            {{ $person1 && $person1['person_description'] == 1 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 19px;"
                                                            for="vehicle1"> Partner</label>
                                                    </div>
                                                    <div style="margin-right: 12px; display: flex;align-self: center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="vehicle2" name="vehicle2"
                                                            value="Car"
                                                            {{ $person1 && $person1['person_description'] == 2 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="vehicle2"> Bride</label>
                                                    </div>
                                                    <div style="margin-right: 12px; display: flex;align-self: center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="vehicle3" name="vehicle3"
                                                            value="Boat"
                                                            {{ $person1 && $person1['person_description'] == 3 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="vehicle3"> Groom</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex;">
                                                    <div style="margin-right: 12px;display: flex">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value1" name="value1"
                                                            value="value1"
                                                            {{ $person2 && $person2['person_description'] == 1 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 19px;"
                                                            for="value1"> Partner</label>
                                                    </div>
                                                    <div style="margin-right: 12px;display: flex"><input
                                                            type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value2" name="value2"
                                                            value="value2"
                                                            {{ $person2 && $person2['person_description'] == 2 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value2"> Bride</label>
                                                    </div>
                                                    <div style="margin-right: 12px;display: flex"> <input
                                                            type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value3" name="value3"
                                                            value="value3"
                                                            {{ $person2 && $person2['person_description'] == 3 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value3"> Groom</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">2.</td>
                                            <td style="font-size: 12px; color: black;">Family name</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1 && $person1['family_name'] ? $person1['family_name'] : '' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2 && $person2['family_name'] ? $person2['family_name'] : '' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">2.</td>
                                            <td style="font-size: 12px; color: black;">Given name(s)</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1 && $person1['person_first_name'] ? $person1['person_first_name'] : '' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2 && $person2['person_first_name'] ? $person2['person_first_name'] : '' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">4.</td>
                                            <td style="font-size: 12px; color: black;">Gender (optional)</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex;">
                                                    <div style="margin-right: 12px;display: flex">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="vehicle1" name="vehicle1"
                                                            value="Bike"
                                                            {{ $person1 && $person1['gender'] == 2 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 19px;"
                                                            for="vehicle1"> Female</label>
                                                    </div>
                                                    <div style="margin-right: 12px;display: flex"><input
                                                            type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="vehicle2" name="vehicle2"
                                                            value="Car"
                                                            {{ $person1 && $person1['gender'] == 1 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="vehicle2"> Male</label>
                                                    </div>
                                                    <div style="margin-right: 12px;display: flex"> <input
                                                            type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="vehicle3" name="vehicle3"
                                                            value="Boat"
                                                            {{ $person1 && $person1['gender'] == 3 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="vehicle3"> Non-binary</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex; align-self: center;">
                                                    <div style="margin-right: 12px;display: flex;align-self: center;">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value1" name="value1"
                                                            value="value1"
                                                            {{ $person2 && $person2['gender'] == 2 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 19px;"
                                                            for="value1"> Female</label>
                                                    </div>
                                                    <div style="margin-right: 12px;display: flex;align-self: center;">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value2" name="value2"
                                                            value="value2"
                                                            {{ $person2 && $person2['gender'] == 1 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value2"> Male</label>
                                                    </div>
                                                    <div style="margin-right: 12px;display: flex;align-self: center;">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value3" name="value3"
                                                            value="value3"
                                                            {{ $person2 && $person2['gender'] == 3 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value3"> Non-binary</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">5.</td>
                                            <td style="font-size: 12px; color: black;">Usual occupation</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1 && $person1['occupation'] ? $person1['occupation'] : '' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2 && $person2['occupation'] ? $person2['occupation'] : '' }}"
                                                    style=" width: 100%;   height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">6.</td>
                                            <td style="font-size: 12px; color: black;">Usual place <br /> of residence
                                                <br /> <i>(full address)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1 && $person1['residence_place'] ? $person1['residence_place'] : '' }}"
                                                    style=" width: 100%;   height:36px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2 && $person2['residence_place'] ? $person2['residence_place'] : '' }}"
                                                    style=" width: 100%;   height: 36px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">7.</td>
                                            <td style="font-size: 12px; color: black;">Conjugal status
                                                <br /> <i>(see page 2)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex;margin-bottom: 20px;">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value11" name="value11"
                                                            {{ $person1 && $person1['conjugal_status'] == 1 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;"
                                                            for="value11">Never validly married</label>
                                                    </div>
                                                    <div style=" width:50%;display: flex;align-self:center"><input
                                                            type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value12" name="value12"
                                                            {{ $person1 && $person1['conjugal_status'] == 4 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value12"> Widowed</label>
                                                    </div>
                                                </div>
                                                <div style="    display: flex;">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value13" name="value12"
                                                            {{ $person1 && $person1['conjugal_status'] == 2 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value13"> Divorced</label>
                                                    </div>
                                                    <div style=" width:50%;display: flex;align-self:center"> <input
                                                            type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value14" name="value14"
                                                            {{ $person1 && $person1['conjugal_status'] == 3 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal;  line-height: 13px;"
                                                            for="value14"> Divorce<br /> pending</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex;margin-bottom: 20px;">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value15" name="value15"
                                                            {{ $person2 && $person2['conjugal_status'] == 1 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ;  line-height: 13px;"
                                                            for="value15">Never validly married</label>
                                                    </div>
                                                    <div style=" width:50%;display: flex;align-self:center"><input
                                                            type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value16" name="value16"
                                                            {{ $person2 && $person2['conjugal_status'] == 4 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value16"> Widowed</label>
                                                    </div>
                                                </div>
                                                <div style="    display: flex;">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value17" name="value17"
                                                            {{ $person2 && $person2['conjugal_status'] == 2 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value17"> Divorced</label>
                                                    </div>
                                                    <div style=" width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value18" name="value18"
                                                            {{ $person2 && $person2['conjugal_status'] == 3 ? 'checked=checked' : '' }}>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal;  line-height: 13px;position: relative; top: 6px;"
                                                            for="value18"> Divorce<br /> pending</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">8.</td>
                                            <td style="font-size: 12px; color: black;">Birthplace
                                                <br /><i>(see page 2)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1 && $person1['birth_place'] ? $person1['birth_place'] : '' }}"
                                                    style=" width: 100%;   height:20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2 && $person2['birth_place'] ? $person2['birth_place'] : '' }}"
                                                    style=" width: 100%;   height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">9.</td>
                                            <td style="font-size: 12px; color: black;">Date of birth</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1 && $person1['date_of_birth'] ? $person1['date_of_birth'] : '' }}"
                                                    style=" width: 100%;   height:20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2 && $person2['date_of_birth'] ? $person2['date_of_birth'] : '' }}"
                                                    style=" width: 100%;   height:20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">10.</td>
                                            <td style="font-size: 12px; color: black;">Description of part</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex;align-self:center">
                                                    <div style="margin-right: 12px;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value-1" name="value-1">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 19px;"
                                                            for="value-1"> No</label>
                                                    </div>
                                                    <div style="margin-right: 12px;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value-2" name="value-2">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="vehicle2"> Yes – state relationship:</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    style=" width: 100%;   height:20px;padding: 20px 15px;">
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
                                        Details of the parties’ parents
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table align="left" border="0" cellpadding="0" cellspacing="10"
                                        height="100%" width="100%">
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px;color: black;font-weight: bold;text-align: center;">
                                                PERSON 1</td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px;color: black;font-weight: bold;text-align: center;">
                                                PERSON 2</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">11.</td>
                                            <td style="font-size: 12px; color: black;">Parent 1’s
                                                <br />full current name <br />(or write ‘unknown’)
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1parent && $person1parent[0]['current_name'] ? $person1parent[0]['current_name'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2parent && $person2parent[0]['current_name'] ? $person2parent[0]['current_name'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">12.</td>
                                            <td style="font-size: 12px; color: black;">Parent 1’s
                                                <br /> full birth name
                                                <br /><i>(or write ‘unknown’)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1parent && $person1parent[0]['birth_name'] ? $person1parent[0]['birth_name'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1parent && $person1parent[0]['birth_name'] ? $person1parent[0]['birth_name'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">13.</td>
                                            <td style="font-size: 12px; color: black;">If applicable: Parent
                                                2’s<br />full
                                                current name
                                                <br /><i>(or write ‘unknown’)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1parent && $person1parent[1]['current_name'] ? $person1parent[1]['current_name'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2parent && $person1parent[1]['current_name'] ? $person2parent[1]['current_name'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">14.</td>
                                            <td style="font-size: 12px; color: black;">If applicable:<br />Parent
                                                2’s<br />full birth name
                                                <br /><i>(or write ‘unknown’)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1parent && $person1parent[1]['birth_name'] ? $person1parent[1]['birth_name'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2parent && $person2parent[1]['birth_name'] ? $person2parent[1]['birth_name'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">15.</td>
                                            <td style="font-size: 12px; color: black;">Parent 1’s<br />country of birth
                                                <br /><i>(or write ‘unknown’)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1parent && $person1parent[0]['borth_place'] ? $person1parent[0]['borth_place'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2parent && $person2parent[0]['birth_place'] ? $person2parent[0]['birth_place'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">16.</td>
                                            <td style="font-size: 12px; color: black;">If applicable:<br />Parent
                                                2’s<br />country of birth
                                                <br /><i>(or write ‘unknown’)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person1parent && $person1parent[1]['birth_place'] ? $person1parent[1]['birth_place'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="{{ $person2parent && $person2parent[1]['birth_place'] ? $person2parent[1]['birth_place'] : 'unknown' }}"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
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
                                    <p style="font-size: 12px; color: black;">This Notice must be signed in the
                                        presence of
                                        an authorised witness. Persons who are authorised to witness the Notice are:
                                    </p>
                                    <ul>
                                        <li style="font-size: 12px; color: black; margin-bottom:8px;">if a party signs
                                            the
                                            Notice in Australia—an authorised celebrant, a justice of the peace, a
                                            barrister
                                            or solicitor, a medical practitioner, or a member of the Australian Federal
                                            Police or the police force of a State or Territory.
                                        </li>
                                        <li style="font-size: 12px; color: black; margin-bottom:8px;">if a party signs
                                            the
                                            Notice outside Australia—an Australian Consular Officer, an Australian
                                            Diplomatic Officer, a notary public, an employee of the Commonwealth
                                            authorised
                                            under paragraph 3(c) of the Consular Fees Act 1955, or an employee of the
                                            Australian Trade Commission authorised under paragraph 3(d) of the Consular
                                            Fees
                                            Act 1955.
                                            Note: For the definitions of Australian Consular Officer and Australian
                                            Diplomatic Officer, see section 2 of the Consular Fees Act 1955.
                                        </li>
                                    </ul>
                                    <p style="font-size: 12px; color: black;">I have read this form’s privacy notice
                                        and
                                        instructions for completion and hereby give notice of my intended marriage:
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table align="left" border="0" cellpadding="0" cellspacing="10"
                                        height="100%" width="100%">
                                        <tr>
                                            <td style="width: 150px">&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px;color: black;font-weight: bold;text-align: center;">
                                                PERSON 1</td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px;color: black;font-weight: bold;text-align: center;">
                                                PERSON 2</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;">Signature of
                                                parties
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                @if ($person1 && $person1->marriageDocumentPdfNoim)
                                                    @if (file_exists($person1->marriageDocumentPdfNoim->person1_signature))
                                                        <img src="{{ asset($person1->marriageDocumentPdfNoim->person1_signature) }}"
                                                            alt=""
                                                            style="height:40px;object-fit: contain;padding-right: 10px;">
                                                    @endif
                                                @endif
                                                @if (isset($button) && $button)
                                                    <button data-bs-target="#editPerson1Signature"
                                                        data-bs-toggle="modal"
                                                        style="border: 0;background: #62CBC9;color: #fff;border-radius: 5px;padding: 5px 20px;"
                                                        onclick="readySignature('editPerson1SignaturePad')">Edit</button>
                                                    @include('user.documents.signature-modal', [
                                                        'target' => 'editPerson1Signature',
                                                        'signatureId' => 'editPerson1SignaturePad',
                                                        'field_name' => 'person1_signature',
                                                        'document_name' => 'noim',
                                                    ])
                                                    <button
                                                        style="border: 0;background: #dc3545;color: #fff;border-radius: 5px;padding: 5px 20px;">Delete</button>
                                                @endif
                                                {{-- <input type="text" value=""
                                                    style="  width: 100%;  height:40px;padding: 20px 15px;"> --}}
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                @if ($person2 && $person2->marriageDocumentPdfNoim)
                                                    @if (file_exists($person2->marriageDocumentPdfNoim->person2_signature))
                                                        <img src="{{ asset($person2->marriageDocumentPdfNoim->person2_signature) }}"
                                                            alt=""
                                                            style="height:40px;object-fit: contain;padding-right: 10px;">
                                                    @endif
                                                @endif
                                                @if (isset($button) && $button)
                                                    <button data-bs-toggle="modal"
                                                        style="border: 0;background: #62CBC9;color: #fff;border-radius: 5px;padding: 5px 20px;"
                                                        data-bs-target="#editPerson2Signature"
                                                        onclick="readySignature('editPerson2SignaturePad')">Edit</button>
                                                    @include('user.documents.signature-modal', [
                                                        'target' => 'editPerson2Signature',
                                                        'signatureId' => 'editPerson2SignaturePad',
                                                        'field_name' => 'person2_signature',
                                                        'document_name' => 'noim',
                                                    ])
                                                    <button
                                                        style="border: 0;background: #dc3545;color: #fff;border-radius: 5px;padding: 5px 20px;">Delete</button>
                                                @endif
                                                {{-- <input type="text" value=""
                                                    style="  width: 100%;  height: 40px;padding: 20px 15px;"> --}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;">Date</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;">Full name of
                                                witness
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    style="  width: 100%;  height: 20px;padding: 20px 15px;"
                                                    value="{{ $person1 && $person1->marriageDocument ? $person1->marriageDocument->person_1_witness_name : '' }}">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    style="  width: 100%;  height: 20px;padding: 20px 15px;"
                                                    value="{{ $person2 && $person2->marriageDocument ? $person2->marriageDocument->person_2_witness_name : '' }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;">Authorised
                                                witness<br /><i>(see above)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;">Signature of
                                                witness
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                {{-- <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;"> --}}
                                                @if ($person1 && $person1->marriageDocumentPdfNoim)
                                                    @if (file_exists($person1->marriageDocumentPdfNoim->person1witness_signature))
                                                        <img src="{{ asset($person1->marriageDocumentPdfNoim->person1witness_signature) }}"
                                                            alt=""
                                                            style="height:40px;object-fit: contain;padding-right: 10px;">
                                                    @endif
                                                @endif
                                                @if (isset($button) && $button)
                                                    <button type="button" data-bs-toggle="modal"
                                                        style="border: 0;background: #62CBC9;color: #fff;border-radius: 5px;padding: 5px 20px;"
                                                        data-bs-target="#person1WitnessSignature"
                                                        onclick="readySignature('person1WitnessSignaturePad')">Edit</button>
                                                    @include('user.documents.signature-modal', [
                                                        'target' => 'person1WitnessSignature',
                                                        'signatureId' => 'person1WitnessSignaturePad',
                                                        'field_name' => 'person1witness_signature',
                                                        'document_name' => 'noim',
                                                    ])
                                                    <button
                                                        style="border: 0;background: #dc3545;color: #fff;border-radius: 5px;padding: 5px 20px;">Delete</button>
                                                @endif
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                @if ($person2 && $person2->marriageDocumentPdfNoim)
                                                    @if (file_exists($person2->marriageDocumentPdfNoim->person2witness_signature))
                                                        <img src="{{ asset($person2->marriageDocumentPdfNoim->person2witness_signature) }}"
                                                            alt=""
                                                            style="height:40px;object-fit: contain;padding-right: 10px;">
                                                    @endif
                                                @endif
                                                @if (isset($button) && $button)
                                                    <button data-bs-toggle="modal"
                                                        style="border: 0;background: #62CBC9;color: #fff;border-radius: 5px;padding: 5px 20px;"
                                                        data-bs-target="#person2WitnessSignature"
                                                        onclick="readySignature('person2WitnessSignaturePad')">Edit</button>
                                                    @include('user.documents.signature-modal', [
                                                        'target' => 'person2WitnessSignature',
                                                        'signatureId' => 'person2WitnessSignaturePad',
                                                        'field_name' => 'person2witness_signature',
                                                        'document_name' => 'noim',
                                                    ])
                                                    <button
                                                        style="border: 0;background: #dc3545;color: #fff;border-radius: 5px;padding: 5px 20px;">Delete</button>
                                                @endif
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
                                        To be completed by authorised celebrant before the ceremony
                                    </p>
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
                                    <table align="left" border="0" cellpadding="0" cellspacing="10"
                                        height="100%" width="100%">
                                        <tr>
                                            <td style="font-size: 12px; color: black;">17.</td>
                                            <td style="font-size: 12px; color: black;">Full name of celebrant </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="Michael John Teulon"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="display: flex;">
                                                    <div
                                                        style="font-size: 12px; color: black;font-weight: normal; margin-right: 20px;">
                                                        18.
                                                    </div>
                                                    <div
                                                        style="font-size: 12px; color: black;font-weight: normal;margin-right: 20px">
                                                        Date notice received
                                                    </div>
                                                    <div style="width: 100%;"><input type="text"
                                                            value="Des HAMMOND"
                                                            style="  width: 100%;  height: 20px;font-weight: normal;padding: 20px 15px;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px;color: black;font-weight: bold;text-align: center;">
                                                PERSON 1</td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px;color: black;font-weight: bold;text-align: center;">
                                                PERSON 2</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">19.</td>
                                            <td style="font-size: 12px; color: black;">Evidence of date
                                                <br /> and place of birth
                                                <br /><i>(see page 2)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex;margin-bottom: 20px;">
                                                    <div style="margin-right: 12px; width:50%;display: flex">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value11" name="value11">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;"
                                                            for="value11">Birthcertificateor official extract</label>
                                                    </div>
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value12" name="value12">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 13px;"
                                                            for="value12"> Overseas passport</label>
                                                    </div>
                                                </div>
                                                <div style="    display: flex;">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value13" name="value12">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 13px;"
                                                            for="value13"> Statutory declaration</label>
                                                    </div>
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value14" name="value14" checked>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal;line-height: 16px;"
                                                            for="value14"> Overseas passport</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex ;margin-bottom: 20px">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value11" name="value11">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;"
                                                            for="value11">Birthcertificateor official extract</label>
                                                    </div>
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value12" name="value12">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 13px;"
                                                            for="value12"> Overseas passport</label>
                                                    </div>
                                                </div>
                                                <div style="    display: flex;">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value13" name="value12">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal;  line-height: 13px;"
                                                            for="value13"> Statutory declaration</label>
                                                    </div>
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value14" name="value14" checked>
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 13px;"
                                                            for="value14"> Overseas passport</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">20.</td>
                                            <td style="font-size: 12px; color: black;">Document number
                                                <br /><i>(if any)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="PA234567"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="BC1233"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">21.</td>
                                            <td style="font-size: 12px; color: black;">Identity confirmed
                                                <br /><i>(see page 2)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="display: flex;align-self:center">
                                                    <input type="checkbox" style="margin-right: 10px;"
                                                        class="checkbox" id="value14" name="value14" checked>
                                                    <label
                                                        style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                        for="value14"> Confirmed</label>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="display: flex;align-self:center">
                                                    <input type="checkbox" style="margin-right: 10px;"
                                                        class="checkbox" id="value14" name="value14" checked>
                                                    <label
                                                        style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                        for="value14"> Confirmed</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">22.</td>
                                            <td style="font-size: 12px; color: black;">Type of ID<br />document
                                                provided
                                                <br /><i>(see page 2)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="Passport"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="Current drivers licence"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">23.</td>
                                            <td style="font-size: 12px; color: black;">Document number <br /><i>(if
                                                    any)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="PA234567"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="1521BM"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">24.</td>
                                            <td style="font-size: 12px; color: black;">State, territory or country of
                                                issue
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="Australia"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="NSW"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">25.</td>
                                            <td style="font-size: 12px; color: black;">Date last marriage ended
                                                <br /><i>
                                                    (if applicable)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">26.</td>
                                            <td style="font-size: 12px; color: black;">Evidence sighted
                                                <br /> on how last <br /> marriage ended
                                                <br /><i>(see page 2)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex;">
                                                    <div
                                                        style="margin-right: 12px; width:50%; display: flex;;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value11" name="value11">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 19px;"
                                                            for="value11">Death</label>
                                                    </div>
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value12" name="value12">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value12"> Nullity</label>
                                                    </div>
                                                </div>
                                                <div style="    display: flex;;align-self:center">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value13" name="value12">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value13"> Divorce</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="    display: flex;align-self:center">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value11" name="value11">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal ; line-height: 19px;"
                                                            for="value11">Death</label>
                                                    </div>
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value12" name="value12">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value12"> Nullity</label>
                                                    </div>
                                                </div>
                                                <div style="    display: flex;align-self:center">
                                                    <div
                                                        style="margin-right: 12px; width:50%;display: flex;align-self:center">
                                                        <input type="checkbox" style="margin-right: 10px;"
                                                            class="checkbox" id="value13" name="value12">
                                                        <label
                                                            style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                            for="value13"> Divorce</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">27.</td>
                                            <td style="font-size: 12px; color: black;">Death certificate
                                                <br />number<b>OR</b>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">28.</td>
                                            <td style="font-size: 12px; color: black;">Court location
                                                <br /><i>(if divorce or nullity)</i>
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="Sydney"
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="width: 100%;height: 20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">29.</td>
                                            <td style="font-size: 12px; color: black;">Document referred <br />to in
                                                s42(5A) of the
                                                <br /> Act provided to the <br /> parties
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="display: flex;">
                                                    <input type="checkbox" style="margin-right: 10px;"
                                                        class="checkbox" id="value13" name="value12">
                                                    <label
                                                        style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                        for="value13"> Person 1</label>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="display: flex;"><input type="checkbox"
                                                        style="margin-right: 10px;" class="checkbox" id="value13"
                                                        name="value12">
                                                    <label
                                                        style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                        for="value13"> Person 2</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;">30.</td>
                                            <td style="font-size: 12px; color: black;"> If a party is under <br> 18
                                                years </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="display: flex;">
                                                    <input type="checkbox" style="margin-right: 10px;"
                                                        class="checkbox" id="value13" name="value12">
                                                    <label
                                                        style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                        for="value13"> Consents received</label>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <div style="display: flex;">
                                                    <input type="checkbox" style="margin-right: 10px;"
                                                        class="checkbox" id="value13" name="value12">
                                                    <label
                                                        style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                        for="value13"> Court approval</label>
                                                </div>
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
                        <div style="page-break-after:always"></div>
                        <div style="page-break-inside:avoid"></div>
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
                                        Marriage on late notice (shortening of time)
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table align="left" border="0" cellpadding="0" cellspacing="0"
                                        height="100%" width="100%">
                                        <tr>
                                            <td style="width:60%">
                                                <table align="left" border="0" cellpadding="10"
                                                    cellspacing="0" height="100%">
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;">31.</td>
                                                        <td style="font-size: 12px; color: black;">Authority for
                                                            <br />marriage despite <br />late notice
                                                            <br /><i>(shortening of
                                                                time)</i>
                                                        </td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <input type="checkbox" style="margin-right: 10px;"
                                                                    class="checkbox" id="value13" name="value12"
                                                                    checked>
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="value13"> Not applicable</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div style="display: flex;">
                                                                <input type="checkbox" style="margin-right: 10px;"
                                                                    class="checkbox" id="value13" name="value12">
                                                                <label
                                                                    style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                    for="value13">Granted</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td style="width:10%">&nbsp;</td>
                                            <td style="width:50%">
                                                <table align="left" border="0" cellpadding="0" cellspacing="0"
                                                    height="100%" width="100%">
                                                    <thead style="background-color: black; ">
                                                        <tr>
                                                            <td style="padding: 7px;">
                                                                <p
                                                                    style="font-size: 12px; color: white;  text-align:center;">
                                                                    FOR OFFICIAL USE ONLY
                                                                </p>
                                                                <p
                                                                    style="font-size: 12px; color: white;  text-align:center; font-weight: normal;">
                                                                    To be used by a prescribed authority when granting a
                                                                    shortening of time
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td
                                                                style="height:100px;font-size: 12px; color: black;  border-left:1px solid black; border-right:1px solid black;   padding: 7px; border-bottom: 1px solid black;">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
                                        To be completed by authorised celebrant after the ceremony
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table align="left" border="0" cellpadding="0" cellspacing="10"
                                        height="100%" width="100%">
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;width: 150px;">
                                                Date
                                                marriage<br /> solemnised
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="25/02/2022"
                                                    style="  width: 100%;  height:20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;width: 150px;">At
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text"
                                                    value="Bondi Beach - In the sand, Bondi, 2026, NSW"
                                                    style="  width: 100%;  height:20px;padding: 20px 15px;">
                                                <span
                                                    style="font-size: 12px; color: black; font-weight: normal; ">Location,
                                                    including suburb or town, city, state or territory and postcode
                                                    where
                                                    marriage solemnised</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;width: 150px;">
                                                Ceremony used
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="Marriage Act 1961"
                                                    style="  width: 100%;  height:20px;padding: 20px 15px;">
                                                <span
                                                    style="font-size: 12px; color: black; font-weight: normal; ">Religious
                                                    rites or civil ceremony according to the Marriage Act 1961 (Cth)
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;width: 150px;">
                                                Celebrant’s signature
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                {{-- <input type="text" value=""
                                                    style="  width: 100%;  height:40px;padding: 20px 15px;"> --}}
                                                @if ($person1 && $person1->marriageDocumentPdfNoim)
                                                    @if (file_exists($person1->marriageDocumentPdfNoim->celebrant_signature))
                                                        <img src="{{ asset($person1->marriageDocumentPdfNoim->celebrant_signature) }}"
                                                            alt=""
                                                            style="height:40px;object-fit: contain;padding-right: 10px;">
                                                    @endif
                                                @endif
                                                @if (isset($button) && $button)
                                                    <button data-bs-toggle="modal"
                                                        style="border: 0;background: #62CBC9;color: #fff;border-radius: 5px;padding: 5px 20px;"
                                                        data-bs-target="#celebrantSignature"
                                                        onclick="readySignature('celebrantSignaturePad')">Edit</button>
                                                    @include('user.documents.signature-modal', [
                                                        'target' => 'celebrantSignature',
                                                        'signatureId' => 'celebrantSignaturePad',
                                                        'field_name' => 'celebrant_signature',
                                                        'document_name' => 'noim',
                                                    ])
                                                    <button
                                                        style="border: 0;background: #dc3545;color: #fff;border-radius: 5px;padding: 5px 20px;">Delete</button>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;width: 150px;">
                                                Celebrant’s <br /> authorisation number
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value="A6330"
                                                    style="  width: 100%;  height:20px;padding: 20px 15px;">
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
                                        Transfer of Notice of Intended Marriage to another celebrant
                                    </p>
                                    <p style="font-size: 12px; color: black; font-weight: normal; ">
                                        I confirm that in receiving this Notice, I am satisfied that the reasons for
                                        transfer are in accordance with s42(6) of the Marriage Act 1961 (Cth):
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table align="left" border="0" cellpadding="0" cellspacing="10"
                                        height="100%" width="100%">
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;width: 150px;">
                                                Name
                                                of new <br />celebrant <br /> solemnised
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="  width: 100%;  height:20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;width: 150px;">
                                                Authorisation number <br /> of new celebrant
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="  width: 100%;  height:20px;padding: 20px 15px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;width: 150px;">
                                                Signature<br /> of new celebrant
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                {{-- <input type="text" value=""
                                                    style="  width: 100%;  height:20px;padding: 20px 15px;"> --}}
                                                @if ($person1 && $person1->marriageDocumentPdfNoim)
                                                    @if (file_exists($person1->marriageDocumentPdfNoim->new_celebrant_signature))
                                                        <img src="{{ asset($person1->marriageDocumentPdfNoim->new_celebrant_signature) }}"
                                                            alt=""
                                                            style="height:40px;object-fit: contain;padding-right: 10px;">
                                                    @endif
                                                @endif
                                                @if (isset($button) && $button)
                                                    <button data-bs-toggle="modal"
                                                        style="border: 0;background: #62CBC9;color: #fff;border-radius: 5px;padding: 5px 20px;"
                                                        data-bs-target="#newCelebrantSignature"
                                                        onclick="readySignature('newCelebrantSignaturePad')">Edit</button>
                                                    @include('user.documents.signature-modal', [
                                                        'target' => 'newCelebrantSignature',
                                                        'signatureId' => 'newCelebrantSignaturePad',
                                                        'field_name' => 'new_celebrant_signature',
                                                        'document_name' => 'noim',
                                                    ])
                                                    <button
                                                        style="border: 0;background: #dc3545;color: #fff;border-radius: 5px;padding: 5px 20px;">Delete</button>`
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; color: black;text-align: left;width: 150px;">
                                                Date
                                                of transfer
                                            </td>
                                            <td
                                                style="font-size: 18px;padding-bottom: 15px;padding-top: 15px; color: black; font-weight: bold;">
                                                <input type="text" value=""
                                                    style="  width: 100%;  height:40px;padding: 20px 15px;">
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
    </div>
</body>
@if (isset($button) && $button)
    <script type="text/javascript">
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
@endif

</html>
