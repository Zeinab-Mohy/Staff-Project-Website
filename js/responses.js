function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else if (input == "How can i make an account" || input == "how can i make an account" || input == "How can i add an account" || input == "how can i add an account" || input == "How can i make new account" || input == "how can i make new account" || input == "How can i register" || input == "how can i register") {
        return "1. Click the SIGN UP button at the top right corner of the main page      " + "\n2. Complete the form and click REGISTER                  ." + "\n3.Complete the LOGIN form with your account detailes.";
    } else if (input == "How can i edit my profile" || input == "how can i edit my profile" || input == "How can i change my passowrd" || input == "how can i change my passowrd") {
        return "1. Log in with your account.............." + "\n2. Click on the account Photo at the top right corner of the main page                ." + "\n3. Click Edit Profile                 .\n4.Complete the form with your account detailes and the new detailes.";
    } else if (input == "Who can make an accout" || input == "who can make an accout" || input == "Who can have a profile" || input == "who can have a profile") {
        return "Only the faculty acadimic staff.";
    } else if (input == "How can i see a staff profile" || input == "how can i see a staff profile" || input == "How can i find information about staff member" || input == "how can i find information about staff member") {
        return "1. Write there name in the search box and click Search           .\n2. Click on the show profile button in front of there name int the search result table ."
    } else if (input == "How can i visit the main site" || input == "how can i visit the main site" || input == "Where can i visit the main site" || input == "where can i visit the main site" || input == "where can i visit the faculty main site") {
        return "Click on the the \"fcai.usc.edu.eg\" button at the page fotter .";
    } else if (input == "How can i visit the faculty facebook" || input == "how can i visit the faculty facebook" || input == "Where can i visit the faculty facebook" || input == "where can i visit the faculty facebook") {
        return "Click on the the Facebook icon at the page fotter .";
    }
    else {
        return "Try asking something else!";
    }


}