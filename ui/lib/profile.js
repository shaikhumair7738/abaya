$(document).ready(function () {

    //var pbar = $('#progressbar');
    //pbar.hide();
    //
    //pbar.progressbar({
    //    warningMarker: 100,
    //    dangerMarker: 100,
    //    maximum: 100,
    //    step: 15
    //});



    var tab = $("#_active_tab").val();

    var cid = $('#cid').val();
    var _url = $("#_url").val();

    function updateDiv(action,_url,cid,cb){
        //var pbar = $('#progressbar');
        $('#ibox_form').block({ message: block_msg });
        var body = $("html, body");
        body.animate({scrollTop:0}, '1000', 'swing');
        //pbar.show();



        if (window.history.replaceState) {
            window.history.replaceState( {} , '',  _url + 'contacts/view/'+ cid +'/' + action + '/' );
        }


        $('.list-group a.active').removeClass('active');
        $("#"+action).addClass("active");



        //var timer = setInterval(function () {
        //    pbar.progressbar('stepIt');
        //
        //}, 250);

        $.post(_url +  "contacts/" +action + '/', {
            cid: cid

        })
            .done(function (data) {

                //clearInterval(timer);
                $("#application_ajaxrender").html(data);
                $('#ibox_form').unblock();
                //$('#progressbar').progressbar('reset');
                //$('#progressbar').hide();
                $('.sysedit').summernote({
                    height: 300,
                    toolbar: [
                        ['style', ['style']], // no style button
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['insert', ['link']], // no insert buttons
                        ['table', ['table']], // no table button
                        ['view', ['codeview']], // no table button
                        //['help', ['help']] //no help button
                    ],
                    focus: true
                });
                cb();
                //var _df = $("#_df").val();
                //$( ".sdate" ).each(function() {
                //    //   alert($( this ).html());
                //    var ut = $( this ).html();
                //    $( this ).html(moment.unix(ut).format(_df));
                //});

                $( ".mmnt" ).each(function() {
                    //   alert($( this ).html());
                    var ut = $( this ).html();
                    $( this ).html(moment.unix(ut).fromNow());
                });

                $('.amount').autoNumeric('init');

            });

    }


    $("#emsg").hide();

    $(".cdelete").click(function (e) {
        e.preventDefault();
        var id = this.id;
        var lan_msg = $("#_lan_are_you_sure").val();
        bootbox.confirm(lan_msg, function(result) {
            if(result){
                var _url = $("#_url").val();
                window.location.href = _url + "delete/user/" + id + '/';
            }
        });
    });


    $("#note_update").click(function (e) {
        e.preventDefault();
        $('#ibox_panel').block({ message: null });
        var _url = $("#_url").val();
        $.post(_url + 'contacts/edit-notes/', {
            cid: $('#cid').val(),
            notes: $('#notes').val()
        })
            .done(function () {
                //bootbox.alert("Notes Saved", function() {
                //    $("#note_update").html("Save");
                //});
                $('#ibox_panel').unblock();
            });
    });


    // From version 4.1

    var cb  =  function cb(){

        switch(tab) {
            case "edit":
                $("#country").select2({
                    theme: "bootstrap"
                });
                $('#tags').select2({
                    tags: true,
                    tokenSeparators: [','],
                    theme: "bootstrap"
                });
                break;
            case "more":
                var croppicHeaderOptions = {
                    uploadUrl: _url + 'sys_imgcrop/save/',
                    cropData:{
                        "email":1,
                        "rnd":"rnd"
                    },
                    cropUrl:  _url + 'sys_imgcrop/crop/',
                    outputUrlId:'picture',
                    customUploadButtonId:'cropContainerHeaderButton',
                    modal:false,
                    loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
                    onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
                    onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
                    onImgDrag: function(){ console.log('onImgDrag') },
                    onImgZoom: function(){ console.log('onImgZoom') },
                    onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
                    onAfterImgCrop:function(){ console.log('onAfterImgCrop') }
                };
                var croppic = new Croppic('croppic', croppicHeaderOptions);
                break;
            default:
                //cb = function cb (){
                //    //  return;
                //};
        }
    };
    //
    updateDiv(tab,_url,cid,cb);
    $("#summary").click(function (e) {
        e.preventDefault();
        tab = 'summary';
        updateDiv(tab,_url,cid,cb);
    });

    $("#invoices").click(function (e) {
        e.preventDefault();
        tab = 'invoices';
        updateDiv(tab,_url,cid,cb);
    });

    $("#transactions").click(function (e) {
        e.preventDefault();
        tab = 'transactions';
        updateDiv(tab,_url,cid,cb);
    });

    $("#email").click(function (e) {
        e.preventDefault();
        tab = 'email';
        updateDiv(tab,_url,cid,cb);
    });

    $("#edit").click(function (e) {
        e.preventDefault();
        tab = 'edit';
        updateDiv(tab,_url,cid,cb);
    });

    $("#more").click(function (e) {
        e.preventDefault();
        tab = 'more';
        updateDiv(tab,_url,cid,cb);
    });

    $("#activity").click(function (e) {
        e.preventDefault();
        $('.list-group a.active').removeClass('active');
        $(this).addClass("active");
        updateDiv('activity',_url,cid,cb);
    });
    
    $("#balanceSheetVendor").click(function (e) {
        e.preventDefault();
        tab = 'balanceSheetVendor';
        updateDiv(tab,_url,cid,cb);
    });    

    var sysrender = $('#application_ajaxrender');
    sysrender.on('click', '#acf-post', function(e){
        e.preventDefault();
        $('#ibox_form').block({ message: null });
        var _url = $("#_url").val();
        $.post(_url + 'contacts/add-activity-post/', {
            cid: $('#cid').val(),
            msg: $('#msg').val(),
            icon: $('#activity-type').val()
        })
            .done(function (data) {
                var sbutton = $("#acf-post");
                var _url = $("#_url").val();
                if ($.isNumeric(data)) {
                    window.location = _url + 'contacts/view/' + data + '/activity/';
                }
                else {
                    $('#ibox_form').unblock();
                    $("#emsgbody").html(data);
                    $("#emsg").show("slow");
                }
            });
    });

    sysrender.on('click', '#submit', function(e){
        e.preventDefault();
        $('#ibox_form').block({ message: null });
        var _url = $("#_url").val();
        $.post(_url + 'contacts/edit-post/', $( "#rform" ).serialize())
            .done(function (data) {
                var sbutton = $("#submit");
                var _url = $("#_url").val();
                if ($.isNumeric(data)) {
                    window.location = _url + 'contacts/view/' + data + '/edit/';
                }
                else {
                    $('#ibox_form').unblock();
                    $("#emsgbody").html(data);
                    $("#emsg").show("slow");
                }
            });
    });

    sysrender.on('click', '#send_email', function(e){
        e.preventDefault();
        $('#ibox_form').block({ message: null });
        var _url = $("#_url").val();
        $.post(_url + 'contacts/send_email/', {
            cid: $('#cid').val(),
            subject: $('#subject').val(),
            message: $('.sysedit').code()
        })
            .done(function (data) {
                var sbutton = $("#send_email");
                var _url = $("#_url").val();
                if ($.isNumeric(data)) {
                    window.location = _url + 'contacts/view/' + data + '/';
                }
                else {
                    $('#ibox_form').unblock();
                    $("#emsgbody").html(data);
                    $("#emsg").show("slow");
                }
            });
    });

    sysrender.on('click', '#no_image', function(e){
        e.preventDefault();
        $('#picture').val('');
    });

    sysrender.on('click', '#opt_gravatar', function(e){
        e.preventDefault();
        $('.picture').val('gravatar');
    });

    sysrender.on('click', '#more_submit', function(e){
        e.preventDefault();
        $('#ibox_form').block({ message: null });
        var _url = $("#_url").val();
        $.post(_url + 'contacts/edit-more/', {
            cid: $('#cid').val(),
            picture: $('#picture').val(),
            facebook: $('#facebook').val(),
            google: $('#google').val(),
            linkedin: $('#linkedin').val()
        })
            .done(function (data) {
                var sbutton = $("#more_submit");
                var _url = $("#_url").val();
                if ($.isNumeric(data)) {
                    window.location = _url + 'contacts/view/' + data + '/';
                }
                else {
                    $('#ibox_form').unblock();
                    $("#emsgbody").html(data);
                    $("#emsg").show("slow");
                }
            });
    });

    sysrender.on('click', '.clickable', function(e){
        e.preventDefault();
        $(".compose-toolbar li").removeClass("action-active");
        $(this).addClass("action-active");
        var atype = $(this).html();

        $('#activity-type').val(atype);
    });



    function update_time(){
        $( ".sdate" ).each(function() {
            //   alert($( this ).html());
            var ut = $( this ).html();
            $( this ).html(moment.unix(ut).format(_df));
        });

        $( ".mmnt" ).each(function() {
            //   alert($( this ).html());
            var ut = $( this ).html();
            $( this ).html(moment.unix(ut).fromNow());
        });
    }
    
        /*start - time sheet*/
    $("#employee-timesheet").click(function (e) {
        e.preventDefault();
        tab = 'employee-timesheet';
        updateDiv(tab,_url,cid,cb);
    });  
    
    var $modal = $('#ajax-modal');
    var sysrender = $('#application_ajaxrender');
    sysrender.on('click', '.salery_type_popup', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        $('body').modalmanager('loading');
        var _url = $("#_url").val();
        setTimeout(function(){
            $modal.load(_url + 'contacts/set-salery-popup-form/' + id, '', function(){
                $modal.modal();
            });
        }, 1000);
    });    

    $modal.on('click', '#setup_salery_button', function(e){
        e.preventDefault();
        $modal.modal('loading');
        setTimeout(function(){
            var _url = $("#_url").val();
            var formData = new FormData($('#setup_salery_form')[0]);
            $.ajax({
                url: _url + 'contacts/set-salery-type-post/',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    setTimeout(function () {
                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {
                            //$modal.modal('loading').find('.modal-body').prepend('<div class="alert alert-success fade in">Updated successfully</div>');
                            location.reload();
                        }
                        else{
                            $modal.modal('loading').find('.modal-body').prepend('<div class="alert alert-danger fade in">' + data + '</div>');
                        }
                    }, 2000);
                },
                error: function () {
                    alert("error in ajax form submission");
                }
            });
        }, 1000);
    });    
    
    //timesheet modal
    sysrender.on('click', '.timesheet_checkin_popup', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        $('body').modalmanager('loading');
        var _url = $("#_url").val();
        setTimeout(function(){
            $modal.load(_url + 'contacts/timesheet-popup-form/' + id, '', function(){
                $modal.modal();
            });
        }, 1000);
    });    

    $modal.on('click', '#timesheet-entry button[type="submit"]', function(e){
        e.preventDefault();
        $modal.modal('loading');
        setTimeout(function(){
            var _url = $("#_url").val();
            var formData = new FormData($('#timesheet-entry')[0]);
            $.ajax({
                url: _url + 'contacts/timesheet-entry-post/',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    setTimeout(function () {
                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {
                            location.reload();
                        }
                        else{
                            $modal.modal('loading').find('.modal-body').prepend('<div class="alert alert-danger fade in">' + data + '</div>');
                        }
                    }, 2000);
                },
                error: function () {
                    alert("error in ajax form submission");
                }
            });
        }, 1000);
    });    
    /*end - time sheet*/

});