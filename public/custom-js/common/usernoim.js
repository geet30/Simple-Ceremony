var cl = console.log;
$(document).ready(function () {

    $("#person0preferred_name").on("blur", function () {
        $('.details_of_person1').html($('#person0preferred_name').val());
    });

    $("#person1preferred_name").on("blur", function () {
        $('.details_of_person2').html($('#person1preferred_name').val());
    });

   
    $(".selectEvidence").on("change", function () {
       
        if (this.value == "birth-certificate-or-official-extract") {
            $(this).parent().siblings().removeClass("d-none");
            $(this).parent().siblings().children().attr("required", true);
        } else {
            $(this).parent().siblings().addClass("d-none");
            $(this).parent().siblings().children().attr("required", false);
        }
    });
    $(".conjugal_status_select").on("change", function () {
        $(this)
            .parent()
            .siblings()
            .children()
            .children(".conjugal_document_perview")
            .addClass("d-none");

        let currentParent = $(this).parent();
        let divorceDocumentSection = currentParent.siblings(
            ".divorce-document-section"
        );
        let divorceDocumentFileUpload = divorceDocumentSection
            .children()
            .children(".conjugal_document");
        let divorcePendingDocumentSection = currentParent.siblings(
            ".divorce-pending-document-section"
        );
        let divorcePendingDocumentFileUpload = divorcePendingDocumentSection
            .children()
            .children(".conjugal_document");
        let widowedDocumentSection = currentParent.siblings(
            ".widowed-document-section"
        );
        let widowedDocumentFileUpload = widowedDocumentSection
            .children()
            .children(".conjugal_document");
        switch (this.value) {
            case "2":
                divorceDocumentSection.removeClass("d-none");
                divorceDocumentFileUpload.removeClass("d-none");

                divorcePendingDocumentSection.addClass("d-none");
                widowedDocumentSection.addClass("d-none");
                break;
            case "3":
                divorceDocumentSection.addClass("d-none");

                divorcePendingDocumentSection.removeClass("d-none");
                divorcePendingDocumentFileUpload.removeClass("d-none");

                widowedDocumentSection.addClass("d-none");
                break;
            case "4":
                divorceDocumentSection.addClass("d-none");
                divorcePendingDocumentSection.addClass("d-none");
                widowedDocumentSection.removeClass("d-none");
                widowedDocumentFileUpload.removeClass("d-none");
                break;
            default:
                divorceDocumentSection.addClass("d-none");
                divorcePendingDocumentSection.addClass("d-none");
                widowedDocumentSection.addClass("d-none");
        }
    });

    // DISPLAY SELECTED FILE NAME ON USER DOCUMENT SECTION
    $('.noim-document-box input[type="file"]').change(function (e) {
        let filename = e.target.files[0].name;
        if ($(this).parent().hasClass("conjugal_document")) {
            $(this).parent().addClass("d-none");
        }
        $(this).parent().siblings().removeClass("d-none");
        $(this)
            .parent()
            .siblings()
            .children()
            .children(":first-child")
            .children("p.document-name")
            .text(filename);
    });
    $("#english-speak-parties").on("change", function () {
        let selectedVal = this.value;
        let elementClass = ".need-interpreter";
        if (selectedVal == 0) {
            $(elementClass).removeClass("d-none");
            $(elementClass).children("select").attr("required", true);
            $(elementClass).children().children("input").attr("required", true);
        }
        if (selectedVal == 1) {
            $(elementClass).addClass("d-none");
            $(elementClass).children("select").attr("required", false);
            $(elementClass)
                .children()
                .children("input")
                .attr("required", false);
        }
    });
    $("#english-not-speak-parties").on("change", function () {
        let selectedVal = this.value;
        let elementClass = ".need-interpreter";
        $(elementClass).children().children("input").val('');
        cl(selectedVal);
        if (selectedVal === "1") {
            $(elementClass).removeClass("d-none");
            $(elementClass).children("select").attr("required", true);
            $(elementClass).children().children("input").attr("required", true);
        }
        if (selectedVal === "0") {
            $(elementClass).addClass("d-none");
            $(elementClass).children("select").attr("required", false);
            $(elementClass)
                .children()
                .children("input")
                .attr("required", false);
        }
    });
    $("#NoIM-witnessed").on("change", function () {
        let selectedVal = this.value;
        let elementId = "#authorization-code-section";
        cl(selectedVal);
        if (selectedVal == 1) {
            $(elementId).removeClass("d-none");
            $(elementId).children("#authorization-code").attr("required", true);
        } else {
            $(elementId).addClass("d-none");
            $(elementId)
                .children("#authorization-code")
                .attr("required", false);
        }
    });
    $("#digital-signature").on("change", function () {
        let selectedVal = this.value;
        let elementId = "#witness-occupation-section";
        if (selectedVal == 1) {
            $(elementId).removeClass("d-none");
            $(elementId).children().children("input").attr("required", true);
            $("#noim-upload-section").addClass("d-none");
            $("#noim-upload-section")
                .children()
                .children("input")
                .attr("required", false);
        } else {
            $(elementId).addClass("d-none");
            $(elementId).children().children("input").attr("required", false);
            $("#noim-upload-section").removeClass("d-none");
            $("#noim-upload-section")
                .children()
                .children("input")
                .attr("required", true);
        }
    });
});