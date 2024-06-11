$('#customerEmail').blur(function () {
$.ajax({
    type:"GET",
    url: 'http://127.0.0.1:8000/customer-email-check',
    data:{email:$('#customerEmail').val()},
    dataType:"JSON",
    success: function (response) {
        $("#CustomerEmailSpan").text(response);
    },
});
});
