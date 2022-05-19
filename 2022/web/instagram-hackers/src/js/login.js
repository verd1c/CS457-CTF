// this is the id of the form
$("#login-form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var actionUrl = form.attr('action');
    
    $.ajax({
        type: "POST",
        url: actionUrl,
        data: form.serialize(), // serializes the form's elements.
        success: function(data){
            console.log(data);
            window.location.href = "/admin.php";
        },
        error: function(xhr, status, error){
            let json = JSON.parse(xhr.responseText);
            alert(json.status);
        }
        
    });
    
});
