jQuery( document ).ready(function( $ ) {
"use strict"


    //preview image in ckEditor when user add answers or questions
    /* $("#file").change(function(){
        $('#image_preview').html("");
        var total_file=document.getElementById("file").files.length;
        for(var i=0;i<total_file;i++)
        {
            $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
        }
    }); */

    $("#file").change(function(){
        filePreview(this);
    });

    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imgPreview + img').remove();
                $('#imgPreview').after('<img src="'+e.target.result+'" class="pic-view" width="100" height="100"/>');
            };
            reader.readAsDataURL(input.files[0]);
            $('.img-preview').show();
            $('.rotate-right').show();
        }else{
            $('#imgPreview + img').remove();
            $('.img-preview').hide();
        }
    }
    $(function() {
        var rotation = 0;
        $(".rotate-right").click(function() {
            rotation = (rotation -90) % 360;
            $(".pic-view").css({'transform': 'rotate('+rotation+'deg)'});
            
            if(rotation != 0){
                $(".pic-view").css({'width': '100px', 'height': '100px'});
            }else{
                $(".pic-view").css({'width': '100px', 'height': '100px'});
            }
            $('#rotation').val(rotation);
        });
    });


    //button in CkEditor for calling formulas of KaTeX
    $(".font-button-js").on("click", function(){
        var x = document.getElementById("js-toolbar");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    });

    $('#mySidenav li.has-sub>a').on('click', function(){ //Mobile Menu accardeon
        $(this).removeAttr('href');
        var element = $(this).parent('li');
        if (element.hasClass('open')) {
            element.removeClass('open');
            element.find('li').removeClass('open');
            element.find('ul').slideUp();
        }
        else {
            element.addClass('open');
            element.children('ul').slideDown();
            element.siblings('li').children('ul').slideUp();
            element.siblings('li').removeClass('open');
            element.siblings('li').find('li').removeClass('open');
            element.siblings('li').find('ul').slideUp();
        }
    });
        

    // accordeon in books
    $(".set > a").on("click", function(){
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).siblings('.content').slideUp(200);
            $(".set > a i").removeClass('fa-minus').addClass('fa-plus');
        }else{
            $(".set > a i").removeClass('fa-minus').addClass('fa-plus');
            $(this).find('i').removeClass('fa-plus').addClass('fa-minus');
            $(".set > a").removeClass('active');
            $(this).addClass('active');
            $('.content').slideUp(200);
            $(this).siblings('.content').slideDown(200);
        }
    });

    //
    $('tr[data-href]').on("click", function() {
        document.location = $(this).data('href');
    });


    $(".search-icon-for-mobile").click(function() {
        var $this = $(this);
        if ($this.hasClass("active")) {
            // already been clicked once, hide it
            $this.removeClass("active");
            document.getElementById("mobile-search-block").style.display = "none";
        }
        else {
            // first time this is clicked, mark it
            $this.addClass("active");
            document.getElementById("mobile-search-block").style.display = "flex";
        }
    });

    //Menu for mobile's
    /* Set the width of the side navigation to 250px */
    $(".menu-link").on("click", function(){
        document.getElementById("mySidenav").style.width = "100%";
        document.getElementById("body").style.overflow = "hidden";
    });
    /* Set the width of the side navigation to 0 */
    $(".closebtn").on("click", function(){
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("body").style.overflow = "visible";
    });

    //Menu for mobile's of video-lessons-list
    /* Set the width of the side navigation to 250px */
    $(".video-menu-mobile").on("click", function(){
        document.getElementById("videoSidenav").style.width = "100%";
        document.getElementById("body").style.overflow = "hidden";
    });
    /* Set the width of the side navigation to 0 */
    $(".closebtn").on("click", function(){
        document.getElementById("videoSidenav").style.width = "0";
        document.getElementById("body").style.overflow = "visible";
    });




    //CkEditor for user adding answers of books
    var myEditor;
    ClassicEditor
        .create( document.querySelector( '#editor' ),
            {
                toolbar: [ 'bold', 'italic' ],
            }
        )
        .then( editor => {
            //console.log( editor );
            myEditor = editor;
        } )
        .catch( error => {
            //console.error( error );
        } );




    //Rating by start solutions of books
    $(".stars-div span").click(function() {
        var vote = $(this).index() + 1;
        var solution_id = $(this).closest('.stars-div').attr('data-object-id');
        vote = parseInt(vote);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/rating",
            type: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {rate: vote, solution_id: solution_id},
            success:function(data){
                alert(data.success);
            }
        });
    });
    

    // Scroll to Top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-top').fadeIn();
        } else {
            $('.back-top').fadeOut();
        }
    });

    $('.back-top').on("click", function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

    


    //autoRender value to katex(latex) in ckEditor's below formulas 
    const buttons = document.querySelectorAll('.js-tex-button');
    const textArea = document.querySelector('#demo-input');
    Array.from(buttons).forEach(i=> i.addEventListener("click", e => {
        const target = e.currentTarget;
        const targetval = target.dataset.code;
        $('#demo-input').val($('#demo-input').val()+targetval);
        startup();
    }));
    startup();


    //code below it's to take tex from ckEditor from katex and paste it to ckEditor
    const button = document.querySelectorAll('.js-tex-insert');
    Array.from(button).forEach(i=> i.addEventListener("click", e => {
        var message = $('#demo-input').val();
        var value = myEditor.getData();
        myEditor.setData(value+ "$$" + message + "$$");
        $('#demo-input').val('');
        var value = myEditor.getData();
        startup();
    }));

})


