$('.next').on('click', function(){
    var name = $('.nameInput').val();
    var password = $('.passwordInput').val();

    if( name === '' || password === '' ){
        event.preventDefault();
        alert("정보를 입력해주세요.");
    }
});
