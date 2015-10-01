  



  <script>

/* activate the carousel */
$("#modal-carousel").carousel({interval:false});

/* change modal title when slide changes */
$("#modal-carousel").on("slid.bs.carousel", function () {
  $(".modal-title").html($(this).find(".active img").attr("title"));
})

/* when clicking a thumbnail */
$(".row .thumbnail").click(function(){
    var content = $(".carousel-inner");
    var title = $(".modal-title");
  
    content.empty();  
    title.empty();
  
    var id = this.id;  
    var repo = $("#img-repo .item");
    var repoCopy = repo.filter("#" + id).clone();
    var active = repoCopy.first();
  
    active.addClass("active");
    title.html(active.find("img").attr("title"));
    content.append(repoCopy);

    // show the modal
    $("#modal-gallery").modal("show");
});
    </script>
    

    <!-- include libraries(jQuery, bootstrap, fontawesome) -->
<!-- include summernote css/js-->
    <!-- Javascript files -->
    <script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('assets/js/appear.js')}}"></script>
    <script src="{{asset('assets/js/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{asset('assets/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('http://maps.google.com/maps/api/js?sensor=true')}}"></script>
    <script src="{{asset('assets/js/gmaps.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/contact.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js'"></script> 


<script>
$('.next').click(function(){

  var nextId = $(this).parents('.tab-pane').next().attr("id");
  $('[href=#'+nextId+']').tab('show');

})

$('.first').click(function(){

  $('#myWizard a:first').tab('show')

})
</script>
<script>
    
$('div.alert').not('.alert-important').delay(3000).slideup(300))

</script>
        <!-- Data Table -->
        <script type="text/javascript">
            $(document).ready(function(){
                //Basic Example
                $("#data-table-basic").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                });
                
                //Selection
                $("#data-table-selection").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });
                                
                //Selection
                $("#data-table-selection").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });
                //Selection
                $("#data-table-sent").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });
                //Selection
                $("#data-table-opens").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });

                //Selection
                $("#data-table-clicks").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });
                //Command Buttons
                $("#data-table-failed").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                    formatters: {
                        "commands": function(column, row) {
                            return "<button type=\"button\" class=\"btn btn-icon command-edit\" data-row-id=\"" + row.id + "\"><span class=\"md md-edit\"></span></button> " + 
                                "<button type=\"button\" class=\"btn btn-icon command-delete\" data-row-id=\"" + row.id + "\"><span class=\"md md-delete\"></span></button>";
                        }
                    }
                });
            });
        </script>  <script type="text/javascript">
            /*
             * Notifications
             */
            function notify(from, align, icon, type, animIn, animOut){
                $.growl({
                    icon: icon,
                    title: ' Bootstrap Growl ',
                    message: 'Turning standard Bootstrap alerts into awesome notifications',
                    url: ''
                },{
                        element: 'body',
                        type: type,
                        allow_dismiss: true,
                        placement: {
                                from: from,
                                align: align
                        },
                        offset: {
                            x: 20,
                            y: 85
                        },
                        spacing: 10,
                        z_index: 1031,
                        delay: 2500,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: false,
                        animate: {
                                enter: animIn,
                                exit: animOut
                        },
                        icon_type: 'class',
                        template: '<div data-growl="container" class="alert" role="alert">' +
                                        '<button type="button" class="close" data-growl="dismiss">' +
                                            '<span aria-hidden="true">&times;</span>' +
                                            '<span class="sr-only">Close</span>' +
                                        '</button>' +
                                        '<span data-growl="icon"></span>' +
                                        '<span data-growl="title"></span>' +
                                        '<span data-growl="message"></span>' +
                                        '<a href="#" data-growl="url"></a>' +
                                    '</div>'
                });
            };
            
            $('.notifications > div > .btn').click(function(e){
                e.preventDefault();
                var nFrom = $(this).attr('data-from');
                var nAlign = $(this).attr('data-align');
                var nIcons = $(this).attr('data-icon');
                var nType = $(this).attr('data-type');
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');
                
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
            });


            /*
             * Dialogs
             */

            //Basic
            $('#sa-basic').click(function(){
                swal("Here's a message!");
            });

            //A title with a text under
            $('#sa-title').click(function(){
                swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
            });

            //Success Message
            $('#sa-success')(function(){
                swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success")
            });

            //Warning Message
            $('#sa-warning').click(function(){
                swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Yes, delete it!",   
                    closeOnConfirm: false 
                }, function(){   
                    swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
                });
            });
            
            //Parameter
            $('#sa-params').click(function(){
                swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Yes, delete it!",   
                    cancelButtonText: "No, cancel plx!",   
                    closeOnConfirm: false,   
                    closeOnCancel: false 
                }, function(isConfirm){   
                    if (isConfirm) {     
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");   
                    } else {     
                        swal("Cancelled", "Your imaginary file is safe :)", "error");   
                    } 
                });
            });

            //Custom Image
            $('#sa-image').click(function(){
                swal({   
                    title: "Sweet!",   
                    text: "Here's a custom image.",   
                    imageUrl: "img/thumbs-up.png" 
                });
            });

            //Auto Close Timer
            $('#sa-close').click(function(){
                 swal({   
                    title: "Auto close alert!",   
                    text: "I will close in 2 seconds.",   
                    timer: 2000,   
                    showConfirmButton: false 
                });
            });


        </script>
        <script type="text/javascript">
jQuery(document).ready(function($) {
    $('#multiselect').multiselect();
});
</script>
<script>
/*
 * @license
 *
 * Multiselect v2.1.1
 * http://crlcu.github.io/multiselect/
 *
 * Copyright (c) 2015 Adrian Crisan
 * Licensed under the MIT license (https://github.com/crlcu/multiselect/blob/master/LICENSE)
 */
if(typeof jQuery==="undefined"){throw new Error("multiselect requires jQuery")}(function($){"use strict";var version=$.fn.jquery.split(" ")[0].split(".");if(version[0]<2&&version[1]<7){throw new Error("multiselect requires jQuery version 1.7 or higher")}})(jQuery);(function(factory){if(typeof define==="function"&&define.amd){define(["jquery"],factory)}else{factory(jQuery)}})(function($){"use strict";var Multiselect=function($){function Multiselect($select,settings){var id=$select.prop("id");this.left=$select;this.right=$(settings.right).length?$(settings.right):$("#"+id+"_to");this.actions={leftAll:$(settings.leftAll).length?$(settings.leftAll):$("#"+id+"_leftAll"),rightAll:$(settings.rightAll).length?$(settings.rightAll):$("#"+id+"_rightAll"),leftSelected:$(settings.leftSelected).length?$(settings.leftSelected):$("#"+id+"_leftSelected"),rightSelected:$(settings.rightSelected).length?$(settings.rightSelected):$("#"+id+"_rightSelected"),undo:$(settings.undo).length?$(settings.undo):$("#"+id+"_undo"),redo:$(settings.redo).length?$(settings.redo):$("#"+id+"_redo")};delete settings.leftAll;delete settings.leftSelected;delete settings.right;delete settings.rightAll;delete settings.rightSelected;this.options={keepRenderingSort:settings.keepRenderingSort};delete settings.keepRenderingSort;this.callbacks=settings;this.init()}Multiselect.prototype={undoStack:[],redoStack:[],init:function(){var self=this;if(self.options.keepRenderingSort){self.skipInitSort=true;self.callbacks.sort=function(a,b){return $(a).data("position")>$(b).data("position")?1:-1};self.left.find("option").each(function(index,option){$(option).data("position",index)});self.right.find("option").each(function(index,option){$(option).data("position",index)})}if(typeof self.callbacks.startUp=="function"){self.callbacks.startUp(self.left,self.right)}if(!self.skipInitSort&&typeof self.callbacks.sort=="function"){self.left.find("option").sort(self.callbacks.sort).appendTo(self.left);self.right.each(function(i,select){$(select).find("option").sort(self.callbacks.sort).appendTo(select)})}self.events(self.actions)},events:function(actions){var self=this;self.left.on("dblclick","option",function(e){e.preventDefault();self.moveToRight(this,e)});self.right.on("dblclick","option",function(e){e.preventDefault();self.moveToLeft(this,e)});self.right.closest("form").on("submit",function(e){self.left.children().prop("selected",true);self.right.children().prop("selected",true)});if(navigator.userAgent.match(/MSIE/i)||navigator.userAgent.indexOf("Trident/")>0||navigator.userAgent.indexOf("Edge/")>0){self.left.dblclick(function(e){actions.rightSelected.trigger("click")});self.right.dblclick(function(e){actions.leftSelected.trigger("click")})}actions.rightSelected.on("click",function(e){e.preventDefault();var options=self.left.find("option:selected");if(options){self.moveToRight(options,e)}$(this).blur()});actions.leftSelected.on("click",function(e){e.preventDefault();var options=self.right.find("option:selected");if(options){self.moveToLeft(options,e)}$(this).blur()});actions.rightAll.on("click",function(e){e.preventDefault();var options=self.left.find("option");if(options){self.moveToRight(options,e)}$(this).blur()});actions.leftAll.on("click",function(e){e.preventDefault();var options=self.right.find("option");if(options){self.moveToLeft(options,e)}$(this).blur()});actions.undo.on("click",function(e){e.preventDefault();self.undo(e)});actions.redo.on("click",function(e){e.preventDefault();self.redo(e)})},moveToRight:function(options,event,silent,skipStack){var self=this;if(typeof self.callbacks.moveToRight=="function"){return self.callbacks.moveToRight(self,options,event,silent,skipStack)}else{if(typeof self.callbacks.beforeMoveToRight=="function"&&!silent){if(!self.callbacks.beforeMoveToRight(self.left,self.right,options)){return false}}self.right.append(options);if(!skipStack){self.undoStack.push(["right",options]);self.redoStack=[]}if(typeof self.callbacks.sort=="function"&&!silent){self.right.find("option").sort(self.callbacks.sort).appendTo(self.right)}if(typeof self.callbacks.afterMoveToRight=="function"&&!silent){self.callbacks.afterMoveToRight(self.left,self.right,options)}return self}},moveToLeft:function(options,event,silent,skipStack){var self=this;if(typeof self.callbacks.moveToLeft=="function"){return self.callbacks.moveToLeft(self,options,event,silent,skipStack)}else{if(typeof self.callbacks.beforeMoveToLeft=="function"&&!silent){if(!self.callbacks.beforeMoveToLeft(self.left,self.right,options)){return false}}self.left.append(options);if(!skipStack){self.undoStack.push(["left",options]);self.redoStack=[]}if(typeof self.callbacks.sort=="function"&&!silent){self.left.find("option").sort(self.callbacks.sort).appendTo(self.left)}if(typeof self.callbacks.afterMoveToLeft=="function"&&!silent){self.callbacks.afterMoveToLeft(self.left,self.right,options)}return self}},undo:function(event){var self=this;var last=self.undoStack.pop();if(last){self.redoStack.push(last);switch(last[0]){case"left":self.moveToRight(last[1],event,false,true);break;case"right":self.moveToLeft(last[1],event,false,true);break}}},redo:function(event){var self=this;var last=self.redoStack.pop();if(last){self.undoStack.push(last);switch(last[0]){case"left":self.moveToLeft(last[1],event,false,true);break;case"right":self.moveToRight(last[1],event,false,true);break}}}};return Multiselect}($);$.multiselect={defaults:{startUp:function($left,$right){$right.find("option").each(function(index,option){$left.find('option[value="'+option.value+'"]').remove()})},beforeMoveToRight:function($left,$right,options){return true},afterMoveToRight:function($left,$right,options){},beforeMoveToLeft:function($left,$right,option){return true},afterMoveToLeft:function($left,$right,option){},sort:function(a,b){if(a.innerHTML=="NA"){return 1}else if(b.innerHTML=="NA"){return-1}return a.innerHTML>b.innerHTML?1:-1}}};$.fn.multiselect=function(options){return this.each(function(){var $this=$(this),data=$this.data();var settings=$.extend({},$.multiselect.defaults,data,options);return new Multiselect($this,settings)})}});
</script>

    <script>

    Dropzone.options.addPhotosForm = {

        paramName:'file',
        maxFilesize:3,
        acceptedFiles:'.jpg,.jpeg,.png,'
    };

    </script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote.js"></script>
