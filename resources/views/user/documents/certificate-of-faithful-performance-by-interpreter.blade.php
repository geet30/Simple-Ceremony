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

$interpreter = isset($person1) && isset($person1['marriageDocument']) && $person1['marriageDocument']['party_not_speak_english'] == 0 ? $person1['marriageDocument'] : null;
@endphp


<body>
    <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
        style="font-family: 'Roboto', sans-serif;">
        <tbody>
            <tr>
                <td>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                        <tr>
                            <td>
                                <p style="text-align:center ; font-size: 18px; font-weight: normal;">COMMONWEALTH OF
                                    AUSTRALIA
                                </p>
                                <p
                                    style="text-align:center ; font-size: 18px; font-weight: normal;    display: table; margin: 0 auto; border-bottom: 1px solid black;border-top: 1px solid black;">
                                    <i>Marriage Act 1961</i>
                                </p>
                                <p style="text-align:center ; font-size: 28px; font-weight: bold; ">STATUTORY
                                    DECLARATION</p>
                                <p
                                    style="text-align:center ; font-size: 18px; font-weight: normal;    display: table; margin: 0 auto; ">
                                    <i>Statutory Declarations Act 1959</i>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p>&nbsp;</p>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td>
                    <table align="center" border="0" cellpadding="6" cellspacing="0" height="100%" width="100%">
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;min-width:12px"><i>1 </i></td>
                            <td style="font-size: 12px; color: black;text-align: left;min-width:150px"><i>Insert the
                                    name,
                                    address and occupation of person making the declaration</i></td>
                            <td style="min-width:10px"></td>
                            <td style="font-size: 12px; color: black;text-align: left;;">
                                <div style="font-size: 12px; color: black;text-align: left;">I,
                                    @if ($interpreter)
                                        {{ $interpreter ? $interpreter['interpreter_full_name'] : '' }},
                                        {{ $interpreter ? $interpreter['interpreter_address'] : '' }},
                                        {{ $interpreter ? $interpreter['interpreter_occupation'] : '' }}
                                    @endif
                                </div>

                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td style=""></td>
                            <td>
                                <div style="font-size: 12px; color: black;text-align: left;">

                                    <sup style="font-size: 8px;">1</sup>make the following declaration under the
                                    Statutory
                                    Declarations Act 1959:
                                </div>
                            </td>
                        </tr>

                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;"><i>2 </i></td>
                            <td style="font-size: 12px; color: black;text-align: left;"><i>Set out matter declared to in
                                    numbered paragraphs</i></td>
                            <td></td>
                            <td>
                                <div style="font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;"><sup
                                            style="font-size: 8px;">2</sup>1. </span>
                                    I have been requested to act as an interpreter at the solemnisation of marriage
                                    between:
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td></td>
                            <td>
                                <div style="font-size: 12px; color: black;text-align: left;">(party 1)
                                    {{ $person1 ? $person1['preferred_name'] : '' }}
                                    and
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td></td>
                            <td>
                                <div style="display: flex;font-size: 12px; color: black;text-align: left;">(party 2)
                                    {{ $person2 ? $person2['preferred_name'] : '' }}
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td></td>
                            <td>
                                <div style="display: flex;font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;">2.</span>
                                    Party 1 understands and speaks the
                                    {{ $interpreter ? $interpreter['language_speak'] : '' }} language.
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td></td>
                            <td>
                                <div style="display: flex;font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;">3.</span>
                                    Party 2 understands and speaks the
                                    {{ $interpreter ? $interpreter['language_speak'] : '' }} language

                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td></td>
                            <td>
                                <div style="display: flex;font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;">4.</span>
                                    I understand and am able to converse in English and
                                    {{ $interpreter ? $interpreter['language_speak'] : '' }} language.
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td style="font-size: 12px; color: black;text-align: left;">&nbsp;</td>
                            <td></td>
                            <td>
                                <div style="display: flex;font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;">5.</span>
                                    I understand that a person who intentionally makes a false statement in a statutory
                                    declaration is guilty of an offence under section 11 of the Statutory Declarations
                                    Act 1959,
                                    and I believe that the statements in this declaration are true in every particular.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;"><i>3 </i></td>
                            <td style="font-size: 12px; color: black;text-align: left;"><i>Signature of person making
                                    the
                                    declaration</i></td>
                            <td></td>
                            <td>
                                <div style="font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;"><sup
                                            style="font-size: 8px;">3</sup> </span>
                                    @if ($person1 && $person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter)
                                        @if (file_exists(
                                            $person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter->declaration_person_signature))
                                            <img src="{{ asset($person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter->declaration_person_signature) }}"
                                                alt="" style="width: 100%;  height:40px;">
                                        @endif
                                    @endif
                                    @if (isset($button) && $button)
                                        <button data-bs-target="#personMakingDeclartionSignature" data-bs-toggle="modal"
                                            onclick="readySignature('personMakingDeclartionSignaturePad')">Edit</button>
                                        @include('user.documents.signature-modal', [
                                            'target' => 'personMakingDeclartionSignature',
                                            'signatureId' => 'personMakingDeclartionSignaturePad',
                                            'field_name' => 'declaration_person_signature',
                                            'document_name' =>
                                                'certificate-of-faithful-performance-by-interpreter',
                                        ])
                                        <button>Delete</button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td colspan="5">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%"
                                    width="100%">
                                    <tr style="vertical-align: middle;">
                                        <td style="width:210px">
                                            <div>
                                                <i style="font-size: 12px; color: black;text-align: left;">4 </i>
                                                <span
                                                    style="font-size: 12px; color: black;text-align: left;    margin-left: 13px;"><i>Place</i></span>
                                            </div>
                                            <div>
                                                <i style="font-size: 12px; color: black;text-align: left;">5 </i>
                                                <span
                                                    style="font-size: 12px; color: black;text-align: left;    margin-left: 13px;"><i>Day</i></span>
                                            </div>
                                            <div>
                                                <i style="font-size: 12px; color: black;text-align: left;">6 </i>
                                                <span
                                                    style="font-size: 12px; color: black;text-align: left;    margin-left: 13px;"><i>Month
                                                        and year</i></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="display: flex;  width:80%;  justify-content: space-between; ">
                                                <div><span
                                                        style="font-size: 12px; color: black;text-align: left;">Declared
                                                        at</span><sup style="font-size: 8px;">4</sup></div>
                                                {{ $person1 ? $person1->booking->location->name : '' }}
                                                <div><span
                                                        style="font-size: 12px; color: black;text-align: left;">on</span><sup
                                                        style="font-size: 8px;">5</sup></div>
                                                {{ $person1 ? date('d', strtotime($person1->booking->booking_date)) : '' }}
                                                <div><span
                                                        style="font-size: 12px; color: black;text-align: left;">of</span><sup
                                                        style="font-size: 8px;">6</sup></div>
                                                {{ $person1 ? date('F Y', strtotime($person1->booking->booking_date)) : '' }}
                                            </div>
                                            <div><span style="font-size: 12px; color: black;text-align: left;">Before
                                                    me,</span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;"><i>7 </i></td>
                            <td style="font-size: 12px; color: black;text-align: left;"><i>Signature of person before
                                    <br />whom the declaration is <br />made (see over)</i></td>
                            <td></td>
                            <td>
                                <div style="font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;"><sup
                                            style="font-size: 8px;">7</sup> </span>
                                    @if ($person1 && $person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter)
                                        @if (file_exists(
                                            $person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter->person_before_whom_made_declaration_signature))
                                            <img src="{{ asset($person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter->person_before_whom_made_declaration_signature) }}"
                                                alt="" style="width: 100%;  height:40px;">
                                        @endif
                                    @endif
                                    @if (isset($button) && $button)
                                        <button data-bs-target="#personBeforeWhomMadeDeclarationSignature"
                                            data-bs-toggle="modal"
                                            onclick="readySignature('personBeforeWhomMadeDeclarationSignaturePad')">Edit</button>
                                        @include('user.documents.signature-modal', [
                                            'target' => 'personBeforeWhomMadeDeclarationSignature',
                                            'signatureId' => 'personBeforeWhomMadeDeclarationSignaturePad',
                                            'field_name' => 'person_before_whom_made_declaration_signature',
                                            'document_name' =>
                                                'certificate-of-faithful-performance-by-interpreter',
                                        ])
                                        <button>Delete</button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;"><i>8 </i></td>
                            <td style="font-size: 12px; color: black;text-align: left;"><i>Full name, qualification
                                    <br />and
                                    address of person<br /> before whom the<br /> declaration is made (in <br />printed
                                    letters)</i></td>
                            <td></td>
                            <td>
                                <div style="font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;"><sup
                                            style="font-size: 8px;">8</sup> </span>
                                    ........................................................................
                                </div>
                                <br />
                                <div style="font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;"><sup
                                            style="font-size: 8px;">&nbsp;</sup> </span>
                                    ........................................................................
                                </div>
                                <br />
                                <div style="font-size: 12px; color: black;text-align: left;"><span
                                        style="min-width:18px;
                           display: inline-block;"><sup
                                            style="font-size: 8px;">&nbsp;</sup> </span>
                                    ........................................................................
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td style="font-size: 12px; color: black;text-align: left;" colspan="5">
                                <div style="font-size: 12px; color: black;text-align: left;"><i>Note </i></div>
                                <ol style="padding-left:9px;margin-top: 2px;">
                                    <li style="font-size: 12px; color: black;text-align: left;">A person who
                                        intentionally makes
                                        a false statement in a statutory declaration is guilty of an offence, the
                                        punishment for
                                        which is imprisonment for a term of 4 years — see section 11 of the Statutory
                                        Declarations
                                        Act 1959.
                                    </li>
                                    <li style="font-size: 12px; color: black;text-align: left;">Chapter 2 of the
                                        Criminal Code
                                        applies to all offences against the Statutory Declarations Act 1959 — see
                                        section 5A of
                                        the Statutory Declarations Act 1959.
                                    </li>
                                </ol>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5"></td>
            </tr>

        </tbody>
    </table>
    <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
        style="font-family: 'Roboto', sans-serif;">
        <tr>
            <td style="border-bottom: 2px solid black;"></td>
        </tr>
        <tr>
            <td>
                <p style="text-align:center ; font-size: 28px; font-weight: bold; margin-bottom: 1px;">CERTIFICATE OF
                    FAITHFUL PERFORMANCE BY INTERPRETER</p>
                <p
                    style="text-align:center ; font-size: 18px; font-weight: normal;    display: table; margin: 0 auto; ">
                    <i>[subsection 112(3) Marriage Act 1961 (Cth)]</i>
                </p>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="font-size: 18px; color: black;text-align: left;">I,<span
                    style="margin-left: 10px;">{{ $interpreter ? $interpreter->interpreter_full_name : '' }},
                    {{ $interpreter ? $interpreter->interpreter_address : '' }}</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 15px; color: black; text-align: center;">(full name and address of interpreter)</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <div style="display:flex">
                    <div style="font-size: 18px; color: black;width:150px;">certify that on the</div>
                    <div style="font-size: 18px; color: black;">
                        <div>{{ $person1 ? date('d', strtotime($person1->booking->booking_date)) : '' }}</div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(day)</i></div>
                    </div>
                    <div style="font-size: 18px; color: black;">of </div>
                    <div style="font-size: 18px; color: black;">
                        <div>
                            &nbsp;{{ $person1 ? date('F', strtotime($person1->booking->booking_date)) : '' }}&nbsp;
                        </div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(month)</i></div>
                    </div>
                    <div style="font-size: 18px; color: black;">
                        <div>{{ $person1 ? date('Y', strtotime($person1->booking->booking_date)) : '' }}&nbsp;
                        </div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(year)</i></div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="font-size: 18px; color: black;text-align: left;">at<span
                    style="margin-left: 10px;">{{ $person1 ? $person1->booking->location->name : '' }}</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 15px; color: black; text-align: center;">(location)</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <div style="display:flex">
                    <div style="font-size: 18px; color: black;">I faithfully performed the services of interpreter from
                    </div>
                    <div style="font-size: 18px; color: black;">
                        <div>
                            &nbsp;{{ $interpreter ? $interpreter->language_speak : '' }}
                        </div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(language)</i></div>
                    </div>

                </div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <div style="display:flex">
                    <div style="font-size: 18px; color: black;">into</div>
                    <div style="font-size: 18px; color: black;">
                        <div>
                            &nbsp;English
                        </div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(language)</i></div>
                    </div>
                    <div style="font-size: 18px; color: black;width:98px">(and from.</div>
                    <div style="font-size: 18px; color: black;">
                        <div>
                            &nbsp;{{ $interpreter ? $interpreter->language_speak : '' }}
                        </div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(language)</i></div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <div style="display:flex">
                    <div style="font-size: 18px; color: black;">into</div>
                    <div style="font-size: 18px; color: black;">
                        <div>
                            &nbsp;English
                        </div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(language)</i></div>
                    </div>
                    <div style="font-size: 18px; color: black;"> in or in connection with a ceremony of marriage</div>

                </div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <div style="display:flex">
                    <div style="font-size: 18px; color: black;width: 206px;">solemnised between</div>
                    <div style="font-size: 18px; color: black;">
                        <div>{{ $person1 ? $person1->preferred_name : '' }}</div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(full name of Party 1)</i>
                        </div>
                    </div>
                    <div style="font-size: 18px; color: black; "> and</div>
                    <div style="font-size: 18px; color: black;">
                        <div>
                            &nbsp;{{ $person2 ? $person2->preferred_name : '' }}
                        </div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(full name of Party 2)</i>
                        </div>
                    </div>

                </div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <div style="display:flex">
                    <div style="font-size: 18px; color: black;">Dated the</div>
                    <div style="font-size: 18px; color: black;">
                        <div>&nbsp;{{ $person1 ? date('d', strtotime($person1->booking->booking_date)) : '' }}</div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(day)</i></div>
                    </div>
                    <div style="font-size: 18px; color: black;">day of</div>
                    <div style="font-size: 18px; color: black;">
                        <div>
                            &nbsp;{{ $person1 ? date('F', strtotime($person1->booking->booking_date)) : '' }}
                        </div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(month)</i></div>
                    </div>
                    <div style="font-size: 18px; color: black;">
                        <div>&nbsp;{{ $person1 ? date('Y', strtotime($person1->booking->booking_date)) : '' }}</div>
                        <div style="font-size: 15px; color: black; text-align: center;"><i>(year)</i></div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <div style="font-size: 18px; color: black;">
                            @if ($person1 && $person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter)
                                @if (file_exists(
                                    $person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter->interpreter_signature))
                                    <img src="{{ asset($person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter->interpreter_signature) }}"
                                        alt="" style="width: 100%;  height:40px;">
                                @endif
                            @endif
                            @if (isset($button) && $button)
                                <button data-bs-target="#interpreterSignature" data-bs-toggle="modal"
                                    onclick="readySignature('interpreterSignaturePad')">Edit</button>
                                @include('user.documents.signature-modal', [
                                    'target' => 'interpreterSignature',
                                    'signatureId' => 'interpreterSignaturePad',
                                    'field_name' => 'interpreter_signature',
                                    'document_name' => 'certificate-of-faithful-performance-by-interpreter',
                                ])
                                <button>Delete</button>
                            @endif
                        </div>
                        <div style="font-size: 15px; color: black;">(Signature of interpreter)</div>
                    </div>
                    <div>
                        <div style="font-size: 18px; color: black;">
                            @if ($person1 && $person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter)
                                @if (file_exists(
                                    $person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter->interpreter_witness_signature))
                                    <img src="{{ asset($person1->marriageDocumentPdfCertificateOfFaithfulPerformanceByInterpreter->interpreter_witness_signature) }}"
                                        alt="" style="width: 100%;  height:40px;">
                                @endif
                            @endif
                            @if (isset($button) && $button)
                                <button data-bs-target="#interpreterWitnessSignature" data-bs-toggle="modal"
                                    onclick="readySignature('interpreterWitnessSignaturePad')">Edit</button>
                                @include('user.documents.signature-modal', [
                                    'target' => 'interpreterWitnessSignature',
                                    'signatureId' => 'interpreterWitnessSignaturePad',
                                    'field_name' => 'interpreter_witness_signature',
                                    'document_name' => 'certificate-of-faithful-performance-by-interpreter',
                                ])
                                <button>Delete</button>
                            @endif
                        </div>
                        <div style="font-size: 15px; color: black;">Witness: (full name and signature)</div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
        <tr>
            <td style="height:20px">&nbsp;</td>
        </tr>
    </table>
    <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
        <tr style="vertical-align: top;">
            <td>
                <div style="font-size: 14px; color: black;text-align: left;"> <b>A statutory declaration under the
                    </b>Statutory Declarations Act 1959<b> may be made before—</b></div>
                <ul style="list-style: none; padding:0;margin-top: 4px;">
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">(1) a person who is
                        currently licensed or registered under a law to practise in one of the following occupations:
                    </li>
                    <li>
                        <ul style="list-style: none;">
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Chiropractor
                            </li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Dentist</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Legal
                                practitioner</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Medical
                                practitioner</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Nurse</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Optometrist
                            </li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Patent
                                attorney</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Pharmacist
                            </li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">
                                Physiotherapist</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Psychologist
                            </li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Trade marks
                                attorney</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Veterinary
                                surgeon</li>
                        </ul>
                    </li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">(2) a person who is
                        enrolled on the roll of the Supreme Court of a State or Territory, or the High Court of
                        Australia, as a legal practitioner (however described); or</li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">(3) a person who is
                        in the following list:</li>
                    <li>
                        <ul style="list-style: none;">
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Agent of the
                                Australian Postal Corporation who is in charge of an office supplying postal services to
                                the public</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Australian
                                Consular Officer or Australian Diplomatic Officer (within the meaning of the Consular
                                Fees Act 1955)</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Bailiff</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Bank officer
                                with 5 or more continuous years of service</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Building
                                society officer with 5 or more years of continuous service</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Chief
                                executive officer of a Commonwealth court</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Clerk of a
                                court</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Commissioner
                                for Affidavits</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Commissioner
                                for Declarations</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Credit union
                                officer with 5 or more years of continuous service</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Employee of
                                the Australian Trade Commission who is:</li>
                            <li>
                                <ul style="list-style: none;">
                                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(a)
                                        in a country or place outside Australia; and</li>
                                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(b)
                                        authorised under paragraph 3 (d) of the Consular Fees Act 1955; and</li>
                                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(c)
                                        exercising his or her function in that place</li>
                                </ul>
                            </li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Employee of
                                the Commonwealth who is:</li>
                            <li>
                                <ul style="list-style: none;">
                                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(a)
                                        in a country or place outside Australia; and</li>
                                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(b)
                                        authorised under paragraph 3 (c) of the Consular Fees Act 1955; and</li>
                                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(c)
                                        exercising his or her function in that place</li>
                                </ul>
                            </li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Fellow of the
                                National Tax Accountants’ Association</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Finance
                                company officer with 5 or more years of continuous service</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Holder of a
                                statutory office not specified in another item in this list</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Judge of a
                                court</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Justice of
                                the Peace</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Magistrate
                            </li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Marriage
                                celebrant registered under Subdivision C of Division 1 of Part IV of the Marriage Act
                                1961</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Master of a
                                court</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Member of
                                Chartered Secretaries Australia</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Member of
                                Engineers Australia, other than at the grade of student</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Member of the
                                Association of Taxation and Management Accountants</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Member of the
                                Australasian Institute of Mining and Metallurgy</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">Member of the
                                Australian Defence Force who is:</li>
                            <li>
                                <ul style="list-style: none;">
                                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(a)
                                        an officer; or</li>
                                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(b) a
                                        non-commissioned officer within the meaning of the Defence Force Discipline Act
                                        1982 with 5 or more years of continuous service; or</li>
                                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(c) a
                                        warrant officer within the meaning of that Act</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>
                <ul style="list-style: none; padding:0;margin-top: 4px;">
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Member of the
                        Institute of Chartered Accountants in Australia, the Australian Society of Certified Practising
                        Accountants or the National Institute of Accountants Member of:</li>
                    <li>
                        <ul style="list-style: none;">
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(a) the
                                Parliament of the Commonwealth; or</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(b) the
                                Parliament of a State; or</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(c) a
                                Territory legislature; or</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(d) a local
                                government authority of a State or Territory</li>
                        </ul>
                    </li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Minister of religion
                        registered under Subdivision A of Division 1 of Part IV of the Marriage Act 1961</li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Notary public</li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Permanent employee
                        of the Australian Postal Corporation with 5 or more years of continuous service who is employed
                        in an office supplying postal services to the public</li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Permanent employee
                        of:</li>
                    <li>
                        <ul style="list-style: none;">
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(a) the
                                Commonwealth or a Commonwealth authority; or</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(b) a State
                                or Territory or a State or Territory authority; or</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(c) a local
                                government authority;</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">with 5 or
                                more years of continuous service who is not specified in another item in this list</li>
                        </ul>
                    </li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Person before whom a
                        statutory declaration may be made under the law of the State or Territory in which the
                        declaration is made</li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Police officer</li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Registrar, or Deputy
                        Registrar, of a court</li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Senior Executive
                        Service employee of:</li>
                    <li>
                        <ul style="list-style: none;">
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(a) the
                                Commonwealth or a Commonwealth authority; or</li>
                            <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 5px;">(b) a State
                                or Territory or a State or Territory authority</li>
                        </ul>
                    </li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Sheriff</li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Sheriff’s officer
                    </li>
                    <li style="font-size: 14px;color: black;text-align: left;margin-bottom: 10px;">Teacher employed on
                        a full-time basis at a school or tertiary education institution</li>
                </ul>
            </td>
        </tr>
    </table>
</body>
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

</html>
