
$(document).ready(function() {
    $('#students').validate   
    ({
        
        rules: {
            roll_no: {
                required: true,
            },
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            address: {
                required: true,
            },
            adharcard_address: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
         },

         
        messages: {
            roll_no: {
                required: "Please enter Roll no.",
            },
            first_name: {
                required: "Please enter First Name.",
            },
            last_name: {
                required: "Please enter Last Name.",
            },
            address: {
                required: "Please enter address.",
            },
            adharcard_address: {
                required: "Please enter  adharcard_address.",
            },
            state: {
                required: "Please enter state.",
            },
           city: {
                required: "Please enter city.",
            },
           
        },
    });
});

// code for students edit
    

$(document).ready(function() {
    $('#studentedit').validate   
    ({
        
        rules: {
            roll_no: {
                required: true,
            },
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            address: {
                required: true,
            },
            adharcard_address: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
         },
        messages: {
            roll_no: {
                required: "Please enter Roll no.",
            },
            first_name: {
                required: "Please enter First Name.",
            },
            last_name: {
                required: "Please enter Last Name.",
            },
            address: {
                required: "Please enter address.",
            },
            adharcard_address: {
                required: "Please enter  adharcard_address.",
            },
            state: {
                required: "Please enter state.",
            },
           city: {
                required: "Please enter city.",
            },
           
        },
    });
});
