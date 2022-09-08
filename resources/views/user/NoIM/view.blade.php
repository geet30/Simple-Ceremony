@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 p-0">
                @include('elements.user-sidebar')
            </div>
            <div class="col-10 col-md-9 col-lg-10 px-md-4">
                @include('elements.user-header')
                <div class="card panel-card">
                    <div class="card-body niom">
                        <div class="row">
                            <div class="col-md-5 align-self-center">
                                <img src="/images/user/noim/video.png" alt="NoIM" class="img-fluid">
                            </div>
                            <div class="col-md-7 align-self-center mt-3 mt-md-0 ">
                                <h1 class="h3  netural-100 mb-3">Watch this video</h1>
                                <p class="body-3-medium neutral-100">for a summary of what's involved in completing your
                                    NoIM on-line & also have your signature witnessed on-line.</p>
                                <div class="d-lg-flex">
                                    <a href="/user/steps"
                                        class="theme-btn primary-btn d-flex me-lg-4 mb-3 mb-lg-0 justify-content-center">Start
                                        or update your NoIM</a>
                                    <a href=""
                                        class="theme-btn primary-btn-border  d-flex  justify-content-center">Read detail
                                        information</a>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-50">
                            <div class="col-md-6">
                                <h2 class="h3 neutral-100 mb-4">Who can witness your NoIM? An Authorised Person.</h2>
                                <p class="body-3-medium neutral-100 col-md-11">Your signature on your NoIM must be witnessed
                                    by an Authorised Person.</p>
                            </div>
                            <div class="col-md-6">
                                <p cass="body-3-medium neutral-100 ">This is great news as you can now complete your NoIM
                                    without leaving home. Simply follow the directions above "Click here to start your NoIM
                                    online". Once you get through to signing the NoIM follow the directions and have one of
                                    the Authorised Persons (listed below) witness your NoIM via video. A celebrant from
                                    Simple Ceremonies can be your Authorised Person via video.</p>
                            </div>
                        </div>
                        <div class="row mt-50">
                            <div class="col-12">
                                <div class="note-alert body-3-sb text-black">NOTE. The Attorney General of Australia now
                                    permits NoIMs to be witnessed by an Authorised Person via video, in Australia only.
                                </div>
                            </div>
                        </div>
                        <div class="row mt-50 authorised-steps">
                            <div class="col-md-12">
                                <h2 class="h3 mb-5 neutral-100 ">An Authorised Person Includes the following:</h2>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="steps">
                                    <span class="step-counter text-white h4 d-inline-block mb-0">In Australia</span>
                                    <div class="step-description ">
                                        <ul class=" mb-0">
                                            <li> An authorised Celebrant</li>
                                            <li>A Commissioner for Declarations under the Statutory Declarations Act 1959
                                            </li>
                                            <li> A Justice of the Peace</li>
                                            <li> A barrister or solicitor</li>
                                            <li>
                                                A legally qualified medical practitioner<span
                                                    class="text-accents-red">*</span>
                                                <p class="mb-0 mt-2"><span class="text-accents-red">*</span>A legally
                                                    qualified medical practitioner means a person who is registered as a
                                                    licensed practitioner with the Medical Board of Australia. The category
                                                    is limited to GPs and specialist doctors and
                                                    It Does NOT include; pharmacists or physiotherapists, registered nurses,
                                                    dentists or accountants
                                                </p>
                                            </li>
                                            <li>Or a member of the Australian Federal Police or the police
                                                force of a State or Territory
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="steps">
                                    <span class="step-counter text-white h4 d-inline-block mb-0">Outside Australia</span>
                                    <div class="step-description">
                                        <ul class=" mb-0">
                                            <li>An Australian Consular Officer, an Australian Diplomatic
                                                Officer, a notary public, an employee of the
                                                Commonwealth authorised under paragraph 3
                                            </li>
                                            <li>Of the Consular Fees Act 1955, or an employee of the
                                                Australian Trade Commission authorised under paragraph 3
                                            </li>
                                            <li>Of the Consular Fees Act 1955. Note: For the definitions of
                                                Australian Consular Officer and Australian Diplomatic
                                                Officer, see section 2 of the Consular Fees Act 1955
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-50 authorised-steps">
                            <div class="col-12">
                                <h2 class="h3 neutral-100 mb-3">Detail instructions to complete your Notice of Intended
                                    Marriage online and upload it back to us.</h2>
                                <p class="body-3-medium neutral-100 mb-0">NB. Instructions are provided online when
                                    completing the NoIM so you need not read the details below - only if you are looking for
                                    clarification.</p>
                            </div>
                            <div class="col-12 mt-50 mb-30">
                                <div class="noim-step-counter text-white h4 d-inline-block mb-3">Step 1</div>
                                <p class="body-3 netural-100 mb-0 ">Click on the button above "Start your Notice of Intended
                                    Marriage on-line" and enter your details. Ensure all your details are 100% correct
                                    before you "Submit" the form. If you need to pause the process, to check details, not a
                                    problem, you can "save' the details and return at a later date. If you do this you will
                                    need to save the URL provided to you to re-access your details. (Full instructions,
                                    including video, will guide you)</p>
                            </div>
                            <div class="col-12  mb-30">
                                <div class="noim-step-counter text-white h4 d-inline-block mb-3">Step 2</div>
                                <p class="body-3 netural-100 mb-0 ">Check all details are correct, when they are hit the
                                    "Submit" button. You will then receive an email within seconds with an attached PDF of
                                    your personalised Notice of Intended Marriage.</p>
                            </div>
                            <div class="col-12  mb-30">
                                <div class="noim-step-counter text-white h4 d-inline-block mb-3">Step 3</div>
                                <p class="body-3 netural-100 mb-0 "><b>Signing & witnessing you NoIM.</b> Either with a hard
                                    copy of the NoIM you have printed or opened on your smart phone - you will need to sign
                                    (by pen or electronically) the form in front of an <b>Authorised Person*</b> (see below
                                    for a list of authorised witnesses*). Note. this can now be via video (see instructions
                                    once you have completed the filling out of the NoIM online)
                                    If both parties cannot cannot conveniently have their signature witnessed by the
                                    Authorised Person - one party with suffice.
                                    NB. However, both parties will need to sign "Permission to lodge the Notice of Intended
                                    Marriage form" attached to the NoIM (see the last page) and upload it back with the
                                    signed & witnessed NoIM and other required docs such as IDs. Then on the day of your
                                    ceremony, the party who was unable to sign the NoIM will sign in front of their
                                    Celebrant, who will then witness it.
                                    Then have the Authorised Witness sign. *
                                </p>
                            </div>
                            <div class="col-12  mb-30">
                                <div class="noim-step-counter text-white h4 d-inline-block mb-3">Step 4</div>
                                <p class="body-3 netural-100 mb-3 ">Then log back into your NoIM you completed online - <a
                                        class="netural-100 text-decoration-none"
                                        href="https://simpleceremonies.com.au/noim_return/"
                                        target="_blank">https://simpleceremonies.com.au/noim_return/</a> and upload your
                                    documents, including :</p>
                                <ul>
                                    <li class="body-3 netural-100 ">Signed & Witnessed NoIM</li>
                                    <li class="body-3 netural-100 ">Each of your IDs (Passport OR original Birth Certificate
                                        AND government issued photo ID eg Drivers License) </li>
                                    <li class="body-3 netural-100 ">Previous marriage documents (if applicable; Divorce or
                                        Death Certificate)</li>
                                </ul>
                                <p class="body-3 netural-100 mb-0 ">This needs to be done at least once calendar month prior
                                    to your ceremony date.</p>
                            </div>
                            <div class="col-12  mb-30">
                                <div class="noim-step-counter text-white h4 d-inline-block mb-3">Step 5</div>
                                <p class="body-3 netural-100  ">Within 24 hours you should receive confirmation of the
                                    Lodgement of your Notice of Intended Marriage.</p>
                                <p class="body-3 netural-100 mb-0 ">
                                    Until this is received your Notice has not been lodged. <b>If you have not heard back
                                        within 24 hours OR your it is within hours of it being "one
                                        calendar month prior to your ceremony date, please contact us to confirm the Notice
                                        has been received and can be lodged.</b>
                                </p>
                            </div>
                        </div>
                        <div class="row mt-50">
                            <div class="col-12">
                                <div class="note-alert body-3-sb text-black">
                                    <p> NOTE. It is your responsibility to ensure that your NoIM is completed correctly and
                                        received one calendar month prior to your ceremony by a celebrant from Simple
                                        Ceremonies - this was agreed to when you made your booking and covered in our Terms.
                                    </p>
                                    <p>. Your Notice should not be considered as lodged until you have received an email
                                        from Simple Ceremonies stating this. If you do not receive this email, within 24
                                        hours, please contact us on 0412 477 141 or michael@simpleceremonies.com.au to
                                        follow up at least once calendar month prior to your ceremony date - THIS IS
                                        CRITICAL.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
