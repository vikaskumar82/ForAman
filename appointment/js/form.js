$( document ).ready(function() {
       $.ajax(
        {
            url: "get_reasons.php", 
            success: function(result) 
            {
                    for(item in result)
                    {
                       var option = $('<option>').attr('value', result[item].id).html(result[item].reason_name);
                       $('#reasons').append(option);
                    }
            }
        });
});

function showTimings(e)
{
    $('#scheduleTimings').show();
    console.log(e);
}

function recordTimings(e)
{
   console.log(e);
   //e.traget.removeClass("btn btn-primary");
   $('#scheduleTimings button.btn-secondary').removeClass("btn btn-secondary");
   $('#scheduleTimings button').addClass("btn btn-primary");
   e.target.className = "btn btn-secondary";
}


function SubmitAppointment()
{
        var data = $('#ft-form').serializeArray();
        data.push({name:"timingrequested", value:$('#scheduleTimings button.btn-secondary').val() });
        if($("#email").val() == "")
        {
            alert("Please enter your email atleast so that we can submit your appointment request.");
            return false;
        }
        
        $.ajax(
        {			//document.write("First echo");
            url: "../mail2.php",
            method: "POST",
            data: data,
            success: function(result) 
            {
                alert("Your details successfuly submitted. Our doctor would return a call/email to process your request.");
                $('#successmessage').show();
                document.forms[0].reset();
            }
        });
        
        return false;
}
