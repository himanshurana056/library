$(document).ready(function() {
    $('#books').validate({
        
        rules: {
            book_name: {
                required: true,
            },
            auther_name: {
                required: true,
            },
            description:{
                required: true,
            },
            status:{
                required: true,
            },
           
        },
        messages: {
            book_name: {
                required: "Please enter book name.",
            },
            auther_name: {
                required: "Please enter auther Name.",
            },
            description: {
                required: "please enter the description.",
            },
            status: {
                required: "please enter the status.",
            },
           
        },
    });
    
});



//code for edit bookspage


$(document).ready(function() {
    $('#bookedit').validate({
        
        rules: {
            book_name: {
                required: true,
            },
            auther_name: {
                required: true,
            },
            description:{
                required: true,
            },
            status:{
                required: true,
            },
           
        },
        messages: {
            book_name: {
                required: "Please enter book name.",
            },
            auther_name: {
                required: "Please enter auther Name.",
            },
            description: {
                required: "please enter the description.",
            },
            status: {
                required: "please enter the status.",
            },
           
        },
    });
    
});


