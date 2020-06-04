$('.next').on('click', function(){
    var condition = $('.conditionInput').val();
    var requirement = $('.requirementInput').val();

    if( condition === '' || requirement === ''){
        event.preventDefault();
        alert("정보를 입력해주세요.");
    }
});