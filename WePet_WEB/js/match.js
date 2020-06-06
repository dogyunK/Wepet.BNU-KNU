/*
$('.next').on('click', function(){
    var name = $('.nameInput').val();
    var password = 

    if( name === '' || password === '' ){
        event.preventDefault();
        alert("정보를 입력해주세요.");
    }
});
*/

function check(){
    if( $('.nameInput').val() === '' || $('.passwordInput').val() === ''){
        alert("정보를 입력해주세요");
        return false;
    }
    else{
        document.dol_info.submit();
    }
}