<!DOCTYPE html>
<html>

<head>
    <title>Declaration-of-No-Legal-Impediment-to-Marriage </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    @if (isset($button) && $button)
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
            style="font-family: 'Roboto', sans-serif;">
            <tbody>
                <tr>
                    <td>
                        <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                            <tr>
                                <td style="padding-bottom: 15px;"><img src="{{ asset('document-logo.jpg') }}" style="height: 110px;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1 style="font-weight: bold; font-size: 24px; color: black;">Declaration of No Legal Impediment to Marriage</h1>
                        <p style="font-size: 12px; color: black;margin-top:0px">
                            Sections 42(1)(c) and 74(1) of the <i>Marriage Act 1961</i> (Cth) and sections 71 and 79 of the
                            Marriage Regulations 2017 (Cth)
                        </p>

                    </td>
                </tr>
                <tr>
                    <td>
                        <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">

                            <tr>
                                <td>
                                    <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%"
                                        width="100%">
                                        <tr>
                                            <td>
                                                <p
                                                    style="font-size: 18px; color: black; font-weight: bold; border-bottom: 1px solid black;">
                                                    To be completed by the parties to the proposed marriage
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table align="left" border="0" cellpadding="0" cellspacing="10"
                                                    height="100%" width="100%">
                                                    <tr>
                                                        <td style="width:140px;text-align: left;">&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">PERSON
                                                            1</td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">PERSON
                                                            2</td>
                                                    </tr>

                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">Family
                                                            name</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text"
                                                                value="{{ $person1 && $person1['family_name'] ? $person1['family_name'] : '' }}"
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text"
                                                                value="{{ $person2 && $person2['family_name'] ? $person2['family_name'] : '' }}"
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">Given
                                                            name(s)</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text"
                                                                value="{{ $person1 && $person1['preferred_name'] ? $person1['preferred_name'] : '' }}"
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text"
                                                                value="{{ $person2 && $person2['preferred_name'] ? $person2['preferred_name'] : '' }}"
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">Usual
                                                            occupation
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text"
                                                                value="{{ $person1 && $person1['occupation'] ? $person1['occupation'] : '' }}"
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text"
                                                                value="{{ $person2 && $person2['occupation'] ? $person2['occupation'] : '' }}"
                                                                style=" width: 100%;   height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">Usual
                                                            place <br />
                                                            of residence
                                                            <br /> <i>(full address)</i>
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text"
                                                                value="{{ $person1 && $person1['address_line_1'] ? $person1['address_line_1'] : '' }}"
                                                                style=" width: 100%;   height:36px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text"
                                                                value="{{ $person2 && $person2['address_line_1'] ? $person2['address_line_1'] : '' }}"
                                                                style=" width: 100%;   height: 36px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">
                                                            <b>CONJUGAL STATUS</b>

                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <div style="    display: flex;margin-bottom: 20px;">
                                                                <div
                                                                    style="margin-right: 12px;display: flex;align-self:center;width:60%;">
                                                                    <input type="checkbox" class="checkbox" id="value11"
                                                                        name="value11"
                                                                        {{ $person1 && $person1['conjugal_status'] == 1 ? 'checked' : '' }} style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;position: relative;    top: 6px;"
                                                                        for="value11">I have never been validly
                                                                        married</label>
                                                                </div>
                                                                <div style=" width:40%;display: flex;align-self:center;">
                                                                    <input type="checkbox" class="checkbox"
                                                                        id="value12" name="value12"
                                                                        {{ $person1 && $person1['conjugal_status'] == 4 ? 'checked' : '' }} style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                        for="value12">I am widowed</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <div style="    display: flex;margin-bottom: 20px;">
                                                                <div
                                                                    style="margin-right: 12px;display: flex;align-self:center;width:60%;">
                                                                    <input type="checkbox" class="checkbox"
                                                                        id="value11" name="value11"
                                                                        {{ $person2 && $person2['conjugal_status'] == 1 ? 'checked' : '' }} style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;position: relative;    top: 6px;"
                                                                        for="value11">I have never been validly
                                                                        married</label>
                                                                </div>
                                                                <div style=" width:40%;display: flex;align-self:center;">
                                                                    <input type="checkbox" class="checkbox"
                                                                        id="value12" name="value12"
                                                                        {{ $person2 && $person2['conjugal_status'] == 4 ? 'checked' : '' }} style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal; line-height: 19px;"
                                                                        for="value12">I am widowed</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">1.
                                                            <span style="margin-left:4px">I declare that:</span>

                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <div style="">
                                                                <div style="margin-right: 12px;">
                                                                    <input type="checkbox" class="checkbox"
                                                                        id="value11" name="value11"
                                                                        {{ $person1 && $person1['conjugal_status'] == 2 ? 'checked' : '' }} style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;"
                                                                        for="value11">I am divorced</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <div style="">
                                                                <div style="margin-right: 12px;">
                                                                    <input type="checkbox" class="checkbox"
                                                                        id="value11" name="value11"
                                                                        {{ $person2 && $person2['conjugal_status'] == 2 ? 'checked' : '' }} style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;"
                                                                        for="value11">I am divorced</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">
                                                            <b>MARRIAGEABLE AGE</b>

                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <div style="    display: flex;;">
                                                                <div
                                                                    style="margin-right: 12px;display: flex;align-self:center;">
                                                                    <input type="checkbox" class="checkbox"
                                                                        id="value11" name="value11" style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;position: relative;    top: 6px;"
                                                                        for="value11">I am 18 years or older (go to
                                                                        question 3) </label>
                                                                </div>
                                                                <div style="display: flex;align-self:center;">
                                                                    <b>OR</b>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <div style="    display: flex;">
                                                                <div
                                                                    style="margin-right: 12px;display: flex;align-self:center;">
                                                                    <input type="checkbox" class="checkbox"
                                                                        id="value11" name="value11" style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;position: relative;    top: 6px;"
                                                                        for="value11">I am 18 years or older (go to
                                                                        question 3) </label>
                                                                </div>
                                                                <div style="display: flex;align-self:center;">
                                                                    <b>OR</b>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">2.
                                                            <span style="margin-left:4px">I declare that:</span>

                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <div style="">
                                                                <div
                                                                    style="margin-right: 12px; display: flex;align-self:center;">
                                                                    <input type="checkbox" class="checkbox"
                                                                        id="value11" name="value11" style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;"
                                                                        for="value11">I have not yet turned 18 years,
                                                                        being born on:</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <div style="">
                                                                <div
                                                                    style="margin-right: 12px; display: flex;align-self:center;">
                                                                    <input type="checkbox" class="checkbox"
                                                                        id="value11" name="value11" style="margin-right: 10px;">
                                                                    <label
                                                                        style="font-size: 12px; color: black; font-weight: normal ; line-height: 13px;"
                                                                        for="value11">I have not yet turned 18 years,
                                                                        being born on:</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">Date
                                                            of birth

                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style=" width: 100%;   height:20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style=" width: 100%;   height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;"></td>
                                                        <td
                                                            colspan="3"style="font-size: 12px; color: black; font-weight: normal; text-align:center ;">
                                                            However, I have obtained an order under section 12 of the
                                                            Marriage Act 1961 (Cth), as specified below:
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">Name
                                                            of court that made the order
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">
                                                            Location of court
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">Date
                                                            of order
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">&nbsp;
                                                        </td>
                                                        <td
                                                            colspan="3"style="font-size: 12px; color: black; font-weight: normal; text-align:center ;">
                                                            Note: Only one party to a marriage can be aged under 18 years
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;"><b>NO
                                                                LEGAL IMPEDIMENT</b></td>
                                                        <td
                                                            style="font-size: 12px; color: black; font-weight: normal;text-align: center">
                                                            to my marriage with <span style="font-size: 14px;">PERSON
                                                                2</span>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td
                                                            style="font-size: 12px; color: black; font-weight: normal;text-align: center;">
                                                            to my marriage with <span style="font-size: 14px;">PERSON
                                                                1</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="font-size: 12px; color: black;text-align: left;    vertical-align: top;">
                                                            3.<span style="margin-left:4px">I believe that there is<br />
                                                                no legal impediment:</span> </td>
                                                        <td colspan="3"
                                                            style="font-size: 12px; color: black; font-weight: normal;text-align: left">
                                                            In particular:
                                                            <ul style="list-style-type: lower-alpha;">
                                                                <li
                                                                    style="font-size: 12px; color: black; font-weight: normal;text-align: left">
                                                                    neither of us is married to another person; and</li>
                                                                <li
                                                                    style="font-size: 12px; color: black; font-weight: normal;text-align: left">
                                                                    neither of us is in a prohibited relationship; and</li>
                                                                <li
                                                                    style="font-size: 12px; color: black; font-weight: normal;text-align: left">
                                                                    both of us are of marriageable age or, where one of us
                                                                    is under 18 years, that person has obtained the court’s
                                                                    consent to marry under the order specified above; and
                                                                </li>
                                                                <li
                                                                    style="font-size: 12px; color: black; font-weight: normal;text-align: left">
                                                                    there is no other circumstance that would be a legal
                                                                    impediment to the marriage.</li>
                                                            </ul>
                                                            <p
                                                                style="font-size: 12px; color: black; font-weight: normal;text-align: left">
                                                                I make this declaration under the Marriage Act 1961 (Cth). I
                                                                believe the statements in this declaration are true in every
                                                                detail. I am aware that it is an offence under the Act to
                                                                give a notice to an authorised celebrant knowing that it
                                                                contains a false statement or an error or is defective. I am
                                                                also aware that the Act creates offences in relation to
                                                                bigamy, and in relation to marriage of a person who is not
                                                                of marriageable age.
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 12px; color: black;text-align: left;">
                                                            Signature of each person <br />making the declaration </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            @if ($person1 && $person1->marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage)
                                                                @if (file_exists($person1->marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage->person1_signature))
                                                                    <img src="{{ asset($person1->marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage->person1_signature) }}"
                                                                        alt="" style="height:40px;">
                                                                @endif
                                                            @endif
                                                            <?php 
                                                        
                                                                $route_name = Route::current()->getName();
                                                                $explode = explode('.',$route_name);
                                                                $action = $explode[0].'.documents.signature';
                                                                $delete_action = $explode[0].'.delete-document-signature';
                                                            ?>
                                                            @if (isset($button) && $button)
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#person1signature"
                                                                    onclick="readySignature('person1signaturePad')">Edit</button>
                                                                @include('user.documents.signature-modal', [
                                                                    'target' => 'person1signature',
                                                                    'signatureId' => 'person1signaturePad',
                                                                    'field_name' => 'person1_signature',
                                                                    'document_name' =>
                                                                        'declaration-of-no-legal-impediment-to-marriage',
                                                                    'action'=>$action,
                                                                    'booking_id' =>$bookingId
                                                                ])
                                                                <button data-bs-target="#person1SignatureConfirmDelete"
                                                                    data-bs-toggle="modal"
                                                                    style="border: 0;background: #dc3545;color: #fff;border-radius: 5px;padding: 5px 20px;">Delete</button>
                                                                @include('user.documents.delete-signature-modal',
                                                                    [
                                                                        'target' => 'person1SignatureConfirmDelete',
                                                                        'field_name' => 'person1_signature',
                                                                        'document_name' =>
                                                                            'declaration-of-no-legal-impediment-to-marriage',
                                                                        'delete_action'=>$delete_action,
                                                                        'booking_id' =>$bookingId
                                                                    ])
                                                            @endif
                                                            <span
                                                                style="font-size: 12px; color: black; font-weight: normal;text-align: center ">(Person
                                                                1)</span>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            @if ($person1 && $person1->marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage)
                                                                @if (file_exists($person1->marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage->person2_signature))
                                                                    <img src="{{ asset($person1->marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage->person2_signature) }}"
                                                                        alt="" style="max-width: 100%;  height:40px;">
                                                                @endif
                                                            @endif
                                                            @if (isset($button) && $button)
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#person2signature"
                                                                    onclick="readySignature('person2signaturePad')">Edit</button>
                                                                @include('user.documents.signature-modal', [
                                                                    'target' => 'person2signature',
                                                                    'signatureId' => 'person2signaturePad',
                                                                    'field_name' => 'person2_signature',
                                                                    'document_name' =>
                                                                        'declaration-of-no-legal-impediment-to-marriage',
                                                                    'action'=>$action,
                                                                    'booking_id' =>$bookingId
                                                                ])
                                                                <button data-bs-target="#person2SignatureConfirmDelete"
                                                                    data-bs-toggle="modal"
                                                                    style="border: 0;background: #dc3545;color: #fff;border-radius: 5px;padding: 5px 20px;">Delete</button>
                                                                @include('user.documents.delete-signature-modal',
                                                                    [
                                                                        'target' => 'person2SignatureConfirmDelete',
                                                                        'field_name' => 'person2_signature',
                                                                        'document_name' =>
                                                                            'declaration-of-no-legal-impediment-to-marriage',
                                                                        'delete_action'=>$delete_action,
                                                                        'booking_id' =>$bookingId
                                                                    ])
                                                            @endif
                                                            <span
                                                                style="font-size: 12px; color: black; font-weight: normal;text-align: center; ">(Person
                                                                2)</span>
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

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table align="left" border="0" cellpadding="0" cellspacing="10"
                                                    height="100%" width="100%">
                                                    <tr>
                                                        <td
                                                            style="font-size: 12px; color: black;text-align: left;width:130px">
                                                            &nbsp;
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            &nbsp;
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td
                                                            style="font-size: 16px; color: black; font-weight: bold;width: 257px;text-align: center;">
                                                            COMPLETE THIS SIDE IF THE DECLARATIONS <br />ARE BEING WITNESSED
                                                            SEPARATELY

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="font-size: 12px; color: black;text-align: left;width:130px">
                                                            Declared on (date)
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height:20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="font-size: 12px; color: black;text-align: left;width:130px">
                                                            At (suburb or town, <br />city, state or territory <br />and
                                                            postcode)
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  max-width: 100%;  height:40px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height: 40px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="font-size: 12px; color: black;text-align: left;width:130px">
                                                            Before me: (full name of<br /> celebrant) </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value="Michael John Teulon"
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value="Michael John Teulon"
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="font-size: 12px; color: black;text-align: left;width:130px">
                                                            Celebrant’s signature
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            @if ($person1 && $person1->marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage)
                                                                @if (file_exists($person1->marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage->celebrant_signature))
                                                                    <img src="{{ asset($person1->marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage->celebrant_signature) }}"
                                                                        alt="" style="max-width: 100%;  height:40px;">
                                                                @endif
                                                            @endif
                                                            @if (isset($button) && $button)
                                                                @if (Auth::user()->user_type != 2)
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#celebrantsignature"
                                                                        onclick="readySignature('celebrantsignaturePad')">Edit</button>
                                                                    @include('user.documents.signature-modal', [
                                                                        'target' => 'celebrantsignature',
                                                                        'signatureId' => 'celebrantsignaturePad',
                                                                        'field_name' => 'celebrant_signature',
                                                                        'document_name' =>
                                                                            'declaration-of-no-legal-impediment-to-marriage',
                                                                        'action'=>$action,
                                                                        'booking_id' =>$bookingId
                                                                    ])
                                                                    <button
                                                                        data-bs-target="#celebrantSignatureConfirmDelete"
                                                                        data-bs-toggle="modal"
                                                                        style="border: 0;background: #dc3545;color: #fff;border-radius: 5px;padding: 5px 20px;">Delete</button>
                                                                    @include('user.documents.delete-signature-modal',
                                                                        [
                                                                            'target' =>
                                                                                'celebrantSignatureConfirmDelete',
                                                                            'field_name' => 'celebrant_signature',
                                                                            'document_name' =>
                                                                                'declaration-of-no-legal-impediment-to-marriage',
                                                                            'delete_action'=>$delete_action,
                                                                            'booking_id' =>$bookingId
                                                                        ])
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value=""
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="font-size: 12px; color: black;text-align: left;width:130px">
                                                            Celebrant’s<br /> authorisation number
                                                        </td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value="A6330"
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td style="font-size: 18px; color: black; font-weight: bold;">
                                                            <input type="text" value="A6330"
                                                                style="  width: 100%;  height: 20px;padding: 20px 15px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" style="font-size: 12px; color: black;">
                                                            Note: Your personal information is being collected on this form.
                                                            Please see the Notice of Intended Marriage for details on how
                                                            your personal information will be managed.
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
    </div>
</body>
@if (isset($button) && $button)
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
@endif
</html>
