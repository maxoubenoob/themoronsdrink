$("button").click(function(){  

    $.ajax({
        url : $(this).attr('data-url'), // We aim at that url
        type: 'GET', // Type of the request
    })
        .done(function(result){

            //FUNCTION FOR THE TIMER
            function displayTimerAnswer() 
            {
                // Timer
                var seconds_left = 7; // Seconds before displaying the answer
                $('#getTime').html(seconds_left); // Display the seconds

                var interval = setInterval(function() {

                    document.getElementById('getTime').innerHTML = --seconds_left; // Decrease the seconds

                    if (seconds_left <= 0)
                    {
                        $('#getAnswer').html(result.answer); // Display the answer
                        clearInterval(interval); // Clear the timer
                        $('#getTime').html('');
                        $("button").attr("disabled", false); // Activate the button
                        $("button").removeClass("btn-secondary"); // Color the btn in grey
                    }

                }, 1000);
            };

            //FUNCTION FOR DISPLAY THE THE CATEGORY, THE QUESTION THE ANSWER AND THE BUTTON
            function displayCategoryQuestionButton() {
                $("#getCategory").html(result.category); // Display category
                $("#getQuestion").html(result.question); // Display question
                $('#getAnswer').html(''); // Erase answer if answer is display
                $("button").attr("disabled", true); // Disable the button
                $("button").addClass("btn-secondary"); // Disable the button 
            };

            displayCategoryQuestionButton();
            displayTimerAnswer();
              
        })

        .fail((xhr) => {
            console.log('-------------');
            console.log('Problemo');
            console.log(xhr);
        });

});