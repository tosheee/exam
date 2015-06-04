function subexam() {
    alert('Сигурен ли си ?');
}
    $('.add-code').on(
        'click',
        console.log("heloo"),
        function (e) {
            e.preventDefault();
            $('#step .before-here ').before($('additional-code').clone().html());
        }

    );


jQuery(
    function($)
    {
        $('add-code').on(
            'click',
            function(e){
                e.preventDefault();
                $('#form-add .before-here').before($('#additional-code').clone().html());
            }
        )

        $('.final-submit').on(
            'click',
            function(e)
            {
                e.preventDefault();

                var testId = document.getElementById("testId").name;
                var data_ = $('#step1').serialize() + "&" + $('#step2').serialize()+ "&" + $('#step3').serialize()+
                    "&" + $('#step4').serialize() + "&" + $('#step5').serialize()+ "&" + $('#step6').serialize()+
                    "&" + $('#step7').serialize() + "&" + $('#step8').serialize()+ "&" + $('#step9').serialize()+
                    "&" + $('#step10').serialize() + "&" + $('#step11').serialize()+ "&" + $('#step12').serialize()+
                    "&" + $('#step13').serialize()+ "&" + $('#step14').serialize()+ "&" + $('#step15').serialize()+
                    "&" + $('#step16').serialize()+ "&" + $('#step17').serialize()+ "&" + $('#step18').serialize()+
                    "&" + $('#step19').serialize()+ "&" + $('#step20').serialize();

                console.log(data_);
                console.log(testId);
                jQuery.ajax({
                        url:"/result/"+testId,
                        type:"get",
                        data:data_,

                        success:function(result){
                            $('#form').addClass('hide');
                            $("#result").hide().html(result).fadeIn("slow")
                             //document.location = "/result";
                        }
                    }
                );
            }
        );
    }
);