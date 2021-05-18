$('#header .lnb_menu').on('click', function(){
    $('#header').addClass('on')
    $('#lnb').animate({
        left:'0px'
    },500)
})
$('#header .lnb_close').on('click', function(){
    $('#lnb').animate({
        left:'-290px'
    },500, function(){
        $('#header').removeClass('on')
    })
})

setInterval(function(){
    $('.mainContent .main_noti a:first-child').animate({
        marginTop:'-50px'
    },1000, function(){
        $(this).appendTo('.mainContent .main_noti').css({
            marginTop:'0px'
        })
    })
}, 5000)


function goprev(){
    history.go(-1)
}


// 회원가입폼 데이터유효성 체크

$('.joinContent form').on('submit', function(){

    // 아이디유효성체크 : 5~14글자 범위, 특수문자 제외
    var id = $('#id').val()
    if (id.length>=5 && id.length<15){
        for (var i=0; i<id.length; i++){
            var ch = id.charAt(i)
            if(!(ch>='0' && ch<='9') && !(ch>='A' && ch<='Z') && !(ch>='a' && ch<='z')){
                alert('특수문자는 포함하지 않음')
                $('#id').css({ 
                    border:'1px solid #f00'
                }).focus().select()
                return false
            }
        }
    } else{
        alert('아이디는 5~14글자 범위입니다.')
        $('#idbox').css({ 
            border:'1px solid #f00'
        }).focus().select()
        return false
    }

    


}) // 회원가입폼 데이터유효성 체크 마지막

// 찾아오시는 길

var num;
$(".map_title li").on('click', function(e){
    e.preventDefault()
    $(this).addClass('active').siblings().removeClass('active')
    num=$(this).index()
    $(this).parent().next().children().eq(num)
    .addClass('active').siblings().removeClass('active')
})
