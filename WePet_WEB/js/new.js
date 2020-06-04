function openZipSearch() {
    new daum.Postcode({
        oncomplete: function(data) {
            $('[name=addr]').val(data.address);
        }
    }).open();
}

$('.next').on('click', function(){

    var name = $('.nameInput').val();
    var password = $('.passwordInput').val();
    var number = $('.numberInput').val();
    var date1 = $('#date1').val();
    var date2 = $('#date2').val();
    var addr = $('.addrInput').val();
    var addrex = $('.addrexInput').val();

    if( name === '' || password === '' || number === '' || addr === '' || addrex === '' || date1 === '' || date2 === ''){
        event.preventDefault();
        alert("정보를 입력해주세요.");
    }

    if( date1 >= date2 ){
        event.preventDefault();
        alert("날짜를 확인해주세요.");
    }

    var petType = $('.petTypeInput').val();
    var petNumber = $('.petNumberInput').val();

    if(  petType === '-' || petNumber === '-' ){
        event.preventDefault();
        alert("정보를 입력해주세요.");
    }
});